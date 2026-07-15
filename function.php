<?php
require_once __DIR__ . '/config.php';

function mbd_inject_schema($html) {
    libxml_use_internal_errors(true);

    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html, LIBXML_NOERROR | LIBXML_NOWARNING);
    $xpath = new DOMXPath($dom);

    $scripts = '';

    /* ============================================================
       FAQ SCHEMA — tries each selector pattern in order, stops at first match
       1. .sp-faq-item / .sp-faq-question / .sp-faq-answer        (current site)
       2. .sp-faq-cell / .sp-faq-cell__q / .sp-faq-cell__a        (legacy grid)
       3. .faq-accordion-item / .faq-accordion-q / .faq-accordion-body
       4. .faq-item / .faq-question span[1] / .faq-answer
    ============================================================ */
    $faqs = [];

    $faq_patterns = [
        ['sp-faq-item',       'sp-faq-question',  'sp-faq-answer',      false],
        ['sp-faq-cell',       'sp-faq-cell__q',   'sp-faq-cell__a',     false],
        ['faq-accordion-item','faq-accordion-q',  'faq-accordion-body', false],
        ['faq-item',          'faq-question',     'faq-answer',         true],  // true = grab span[1] of question
    ];

    foreach ($faq_patterns as [$item_cls, $q_cls, $a_cls, $q_span]) {
        foreach ($xpath->query("//*[contains(@class,'{$item_cls}')]") as $node) {
            $q_xpath = $q_span
                ? ".//*[contains(@class,'{$q_cls}')]/span[1]"
                : ".//*[contains(@class,'{$q_cls}')]";
            $q_node = $xpath->query($q_xpath, $node)->item(0);
            $a_node = $xpath->query(".//*[contains(@class,'{$a_cls}')]", $node)->item(0);
            if (!$q_node || !$a_node) continue;
            $question = trim($q_node->textContent);
            $answer   = trim($a_node->textContent);
            if ($question !== '' && $answer !== '') {
                $faqs[] = [
                    '@type'          => 'Question',
                    'name'           => $question,
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $answer],
                ];
            }
        }
        if (!empty($faqs)) break;
    }

    if (!empty($faqs)) {
        $faq_schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => $faqs,
        ];
        $scripts .= '<script type="application/ld+json">' .
            json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) .
            '</script>' . "\n";
    }

    /* ============================================================
       REVIEW SCHEMA
       Scans .rev articles — inner <p> for body text, .by b for author name
    ============================================================ */
    $reviews = [];

    foreach ($xpath->query("//*[contains(@class,'rev')]") as $node) {
        $text_node   = $xpath->query(".//p", $node)->item(0);
        $author_node = $xpath->query(".//*[contains(@class,'by')]//b", $node)->item(0);
        if (!$text_node || !$author_node) continue;
        $body   = trim($text_node->textContent);
        $author = trim($author_node->textContent);
        if ($body !== '' && $author !== '') {
            $reviews[] = [
                '@type'        => 'Review',
                'author'       => ['@type' => 'Person', 'name' => $author],
                'reviewBody'   => $body,
                'reviewRating' => ['@type' => 'Rating', 'ratingValue' => '5', 'bestRating' => '5'],
            ];
        }
    }

    if (!empty($reviews)) {
        $review_schema = [
            '@context'        => 'https://schema.org',
            '@type'           => 'Dentist',
            '@id'             => SITE_URL . '/#dentist',
            'name'            => SITE_NAME,
            'url'             => SITE_URL . '/',
            'telephone'       => SITE_PHONE,
            'email'           => SITE_EMAIL,
            'priceRange'      => '$$',
            'address'         => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => '475 Spotswood Englishtown Rd',
                'addressLocality' => 'Monroe Township',
                'addressRegion'   => 'NJ',
                'postalCode'      => '08831',
                'addressCountry'  => 'US',
            ],
            'aggregateRating' => [
                '@type'       => 'AggregateRating',
                'ratingValue' => '5',
                'reviewCount' => count($reviews),
            ],
            'review'          => $reviews,
        ];
        $scripts .= '<script type="application/ld+json">' .
            json_encode($review_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) .
            '</script>' . "\n";
    }

    /* ============================================================
       SERVICE PAGE SCHEMA
       Injected on all subpages (detected via $GLOBALS['is_service_page'])
    ============================================================ */
    $service_schema = '';
    if (!empty($GLOBALS['is_service_page'])) {
        $request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $slug        = basename(rtrim($request_uri, '/'));
        $current_url = SITE_URL . '/' . $slug . '/';

        $title       = $GLOBALS['_schema_page_title']       ?? ucwords(str_replace(['-', '_'], ' ', $slug));
        $description = $GLOBALS['_schema_page_description'] ?? SITE_NAME . ' offers ' . $title . ' in Monroe Township, NJ.';

        $schema = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                [
                    '@type'     => 'Dentist',
                    '@id'       => SITE_URL . '/#dentist',
                    'name'      => SITE_NAME,
                    'url'       => SITE_URL . '/',
                    'telephone' => SITE_PHONE,
                    'email'     => SITE_EMAIL,
                    'address'   => [
                        '@type'           => 'PostalAddress',
                        'streetAddress'   => '475 Spotswood Englishtown Rd',
                        'addressLocality' => 'Monroe Township',
                        'addressRegion'   => 'NJ',
                        'postalCode'      => '08831',
                        'addressCountry'  => 'US',
                    ],
                ],
                [
                    '@type'       => 'MedicalProcedure',
                    'name'        => $title,
                    'description' => $description,
                    'url'         => $current_url,
                    'performer'   => [
                        '@type' => 'Dentist',
                        '@id'   => SITE_URL . '/#dentist',
                    ],
                ],
            ],
        ];
        $service_schema = '<script type="application/ld+json">' . "\n"
            . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
            . "\n</script>\n";
    }

    if ($scripts === '' && $service_schema === '') return $html;

    return str_replace('</head>', $service_schema . $scripts . '</head>', $html);
}

ob_start('mbd_inject_schema');
