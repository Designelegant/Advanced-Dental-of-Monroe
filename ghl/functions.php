<?php
error_reporting(E_ALL);
ini_set('display_errors', '0');
require_once __DIR__ . '/config.php';

/**
 * Retrieve or refresh the GHL access token
 */
function getGHLAccessToken(): ?string {
    if (!USE_OAUTH) return ACCESS_TOKEN;

    if (file_exists(TOKEN_FILE)) {
        $tokenData = json_decode(file_get_contents(TOKEN_FILE), true);
        if (!empty($tokenData['access_token']) && time() < $tokenData['expires_at']) {
            return $tokenData['access_token'];
        }
    }

    // Refresh token flow
    $payload = [
        'grant_type'    => 'refresh_token',
        'client_id'     => CLIENT_ID,
        'client_secret' => CLIENT_SECRET,
        'refresh_token' => REFRESH_TOKEN
    ];

    $ch = curl_init('https://services.leadconnectorhq.com/oauth/token');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($payload),
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
        CURLOPT_TIMEOUT => 15
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if (empty($result['access_token'])) {
        error_log('Filed to refresh GHL token: ' . $response);
        return null;
    }

    file_put_contents(TOKEN_FILE, json_encode([
        'access_token' => $result['access_token'],
        'expires_at'   => time() + intval($result['expires_in'] ?? 3600)
    ]));

    return $result['access_token'];
}

/**
 * Send lead data to GoHighLevel and return response
 */
function sendLeadToGHL(array $payload): array {

    $accessToken = getGHLAccessToken();
    if (!$accessToken) {
        return ['success' => false, 'message' => 'Access token not available'];
    }

    if (empty($payload['locationId'])) {
        return ['success' => false, 'message' => 'locationId is required'];
    }

    $headers = [
        'Authorization: Bearer ' . $accessToken,
        'Version: ' . API_VERSION,
        'Content-Type: application/json',
        'Accept: application/json'
    ];

    /* =========================
       1) CREATE CONTACT
    ========================= */

    $ch = curl_init('https://services.leadconnectorhq.com/contacts/');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 15
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr  = curl_error($ch);
    curl_close($ch);

    if ($curlErr) {
        return ['success' => false, 'message' => "cURL Error: $curlErr"];
    }

    $decoded = json_decode($response, true) ?: [];

    /* =========================
       2) DUPLICATE → SEARCH
    ========================= */

    if ($httpCode == 400) {

        $query = ['locationId' => $payload['locationId']];

        if (!empty($payload['email'])) {
            $query['email'] = $payload['email'];
        }

        if (!empty($payload['phone'])) {
            $query['number'] = $payload['phone'];
        }

        $searchUrl = 'https://services.leadconnectorhq.com/contacts/search/duplicate?' . http_build_query($query);

        $ch = curl_init($searchUrl);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_TIMEOUT => 15
        ]);

        $searchResponse = curl_exec($ch);
        $searchCode     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $searchErr      = curl_error($ch);
        curl_close($ch);

        if ($searchErr) {
            return ['success' => false, 'message' => "cURL Search Error: $searchErr"];
        }

        $searchDecoded = json_decode($searchResponse, true) ?: [];

        $contactId =
            $searchDecoded['contact']['id']
            ?? $searchDecoded['contacts'][0]['id']
            ?? null;

        if (!$contactId) {
            return [
                'success' => false,
                'status'  => 404,
                'message' => 'Duplicate detected but existing contact not found'
            ];
        }

        /* =========================
           3) SANITIZE PAYLOAD FOR UPDATE
        ========================= */

        $updatePayload = $payload;

        // ❌ remove forbidden fields
        unset(
            $updatePayload['locationId'],
            $updatePayload['updatedAt'],
            $updatePayload['createdAt'],
            $updatePayload['id']
        );

        // ❌ remove empty values (GHL hates empty strings)
        foreach ($updatePayload as $k => $v) {
            if ($v === '' || $v === null) {
                unset($updatePayload[$k]);
            }
        }

        /* =========================
           4) UPDATE CONTACT
        ========================= */

        $updateUrl = "https://services.leadconnectorhq.com/contacts/{$contactId}";

        $ch = curl_init($updateUrl);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => json_encode($updatePayload),
            CURLOPT_TIMEOUT => 15
        ]);

        $updateResponse = curl_exec($ch);
        $updateCode     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $updateErr      = curl_error($ch);
        curl_close($ch);

        if ($updateErr) {
            return ['success' => false, 'message' => "cURL Update Error: $updateErr"];
        }

        if ($updateCode >= 400) {
            error_log("GHL Update Error ($updateCode): $updateResponse");
            return [
                'success' => false,
                'status'  => $updateCode,
                'message' => 'Failed to update existing contact'
            ];
        }

        return [
            'success' => true,
            'status'  => $updateCode,
            'message' => 'Your information has been updated successfully. Our team will contact you shortly.'
        ];
    }

    /* =========================
       5) OTHER ERRORS
    ========================= */

    if ($httpCode >= 400) {
        error_log("GHL API Error ($httpCode): $response");
        return [
            'success' => false,
            'status'  => $httpCode,
            'message' => $decoded['message'] ?? 'Something went wrong, Please try again'
        ];
    }

    /* =========================
       6) SUCCESS (NEW CONTACT)
    ========================= */

    return [
        'success' => true,
        'status'  => $httpCode,
        'message' => 'Your information has been received successfully. Our team will contact you shortly.'
    ];
}