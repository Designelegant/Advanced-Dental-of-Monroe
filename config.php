<?php
// Site-wide configuration — edit values here to update everywhere

define('SITE_NAME',    'Advanced Dental of Monroe');
define('SITE_URL',     'https://www.advanceddentalofmonroe.com');
define('SITE_DEFAULT_DESC', 'Advanced Dental of Monroe offers gentle, modern family dentistry in Monroe Township, NJ. Dr. Nyman Aydin and Dr. Monica Mossad provide implants, cosmetic, restorative, and pediatric dental care. Call (848) 337-5042.');

define('SITE_ADDRESS', '475 Spotswood Englishtown Rd, Monroe Township, NJ 08831');
define('SITE_ADDRESS1', '475 Spotswood Englishtown Rd,');
define('SITE_ADDRESS2', 'Monroe Township, NJ 08831');
define('SITE_ADDRESS_HREF', 'https://maps.app.goo.gl/Vt2aNj1hAoRzge2SA');

define('SITE_PHONE',   '(848) 337-5042');
define('SITE_HREF',     'tel:+18483375042');

define('SITE_EMAIL',   'info@advanceddentalofmonroe.com');
define('SITE_EMAIL_HREF',   'mailto:info@advanceddentalofmonroe.com');

define('SITE_HOURS',     'Mon – Fri: 8:00 AM – 5:00 PM');
define('SITE_HOURS_SUB', 'Sat – Sun: Closed');

// Navigation — add new pages here; both desktop and mobile nav update automatically
define('SITE_NAV', [
    ['label' => 'Home', 'href' => '/'],
    ['label' => 'Meet Our Dentists', 'href' => 'meet-our-dentists-21', 'children' => [
        ['label' => 'Dr. Monica Mossad', 'href' => 'dr-monica-mossad-17'],
        ['label' => 'Dr. Nyman Aydin',   'href' => 'dr-nyman-aydin-9'],
    ]],
    ['label' => 'Dental Services', 'href' => 'dental-services-7', 'children' => [
        ['label' => 'Cleaning &amp; Prevention',  'href' => 'cleaning-and-prevention-10'],
        ['label' => 'Cosmetic Procedures',        'href' => 'cosmetic-procedures-11'],
        ['label' => 'Restorative Procedures',     'href' => 'restorative-procedures-12'],
        ['label' => 'Dental Implants',            'href' => 'dental-implants-13'],
        ['label' => 'Tooth Extractions',          'href' => 'tooth-extractions-14'],
        ['label' => 'Pediatric Dentistry',        'href' => 'pediatric-dentistry-16'],
        ['label' => 'Same-Day Dentistry',         'href' => 'same-day-dentistry-18'],
        ['label' => 'Botox',                      'href' => 'botox-tm'],
        ['label' => 'Juvederm',                   'href' => 'juvederm-tm'],
    ]],
    ['label' => 'Patient Center', 'href' => 'patient-center-2', 'children' => [
        ['label' => 'Office Tour',        'href' => 'office-tour-21'],
        ['label' => 'New Patient Forms',  'href' => 'new-patient-forms-15'],
        ['label' => 'Office Policies',   'href' => 'office-policies-20'],
        ['label' => 'Common Questions',   'href' => 'common-questions-15'],
        ['label' => 'Dental Links',       'href' => 'dental-links-18'],
    ]],
    ['label' => 'Reviews',        'href' => 'index.php#reviews'],
    ['label' => 'Location',       'href' => 'index.php#location'],
    ['label' => 'Contact',        'href' => 'index.php#contact'],
]);

