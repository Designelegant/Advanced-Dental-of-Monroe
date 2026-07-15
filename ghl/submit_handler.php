<?php
header('Content-Type: application/json');
require __DIR__ . '/functions.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Decode JSON input
$data = json_decode(file_get_contents('php://input'), true);
if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid or empty payload']);
    exit;
}

// Basic validation
$errors = [];
if (empty($data['firstName'])) $errors[] = 'First name is required';
if (empty($data['lastName'])) $errors[] = 'Last name is required';
if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
if (empty($data['phone'])) $errors[] = 'Phone is required';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => $errors]);
    exit;
}

// Build payload
$payload = [
    'firstName'    => $data['firstName'],
    'lastName'     => $data['lastName'],
    'name'         => trim($data['firstName'] . ' ' . $data['lastName']),
    'email'        => $data['email'],
    'phone'        => $data['phone'],
    'tags'         => is_array($data['tags'] ?? null) ? $data['tags'] : [DEFAULT_TAG],
    'locationId'   => LOCATION_ID,
    'customFields' => $data['customFields'] ?? []
];

// Send to GHL and directly return the same response
$result = sendLeadToGHL($payload);

// Set HTTP status based on result
http_response_code($result['success'] ? 200 : ($result['status'] ?? 500));
echo json_encode($result);