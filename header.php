<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/function.php';
// Expose page-level variables to the schema output-buffer callback
if (!empty($useSubpageCSS))   $GLOBALS['is_service_page']          = true;
if (isset($pageTitle))         $GLOBALS['_schema_page_title']        = $pageTitle;
if (isset($page_description))  $GLOBALS['_schema_page_description']  = $page_description;
// Determine active nav item from current URL path
$_currentPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
function nav_is_active(array $item): bool {
    global $_currentPath;
    $href = ltrim($item['href'], '/');
    if ($href === '' || $href === 'index.php') {
        return $_currentPath === '';
    }
    // Strip anchor fragments for hash links (Patient Center, Reviews, etc.)
    $hrefBase = strtok($href, '#');
    if ($hrefBase === 'index.php') return false;
    // Match if current path equals the item or any child
    if ($_currentPath === $hrefBase) return true;
    if (!empty($item['children'])) {
        foreach ($item['children'] as $child) {
            if ($_currentPath === ltrim($child['href'], '/')) return true;
        }
    }
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="canonical" href="<?php echo strtok('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], '?'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <?php if (!empty($useSubpageCSS)): ?>
  <link rel="stylesheet" href="assets/css/subpages.css">
  <?php endif; ?>
   <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  </noscript>
  
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NS6NT5J6');</script>
  <!-- End Google Tag Manager -->

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["Dentist", "LocalBusiness"],
    "@id": "https://www.advanceddentalofmonroe.com/#dentist",
    "name": "Advanced Dental of Monroe",
    "url": "https://www.advanceddentalofmonroe.com/",
    "logo": "https://www.advanceddentalofmonroe.com/assets/images/logo.svg",
    "image": "https://www.advanceddentalofmonroe.com/assets/images/logo.svg",
    "description": "Dentist Nyman Aydin, DMD is accepting new dental patients in Monroe Township, NJ 08831. Call (848) 337-5042 to request an appointment.",
    "telephone": "+1-848-337-5042",
    "priceRange": "$$",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "475 Spotswood Englishtown Rd,",
      "addressLocality": "Monroe Township",
      "addressRegion": "NJ",
      "postalCode": "08831",
      "addressCountry": "US"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Monday",
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Tuesday",
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Wednesday",
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Thursday",
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Friday",
        "opens": "08:00",
        "closes": "17:00"
      }
    ]
  }
  </script>

  <?php global $schemas;
  echo isset($schemas) ? $schemas : ''; ?>
  
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NS6NT5J6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  
<!-- Top utility bar -->
<div class="utility-bar">
  <div class="container">
    <div class="utility-bar__left">
      <span><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 1024 1024" fill="#fff" class="icon" version="1.1"><path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z" fill=""/></svg> <a href="<?= htmlspecialchars(SITE_ADDRESS_HREF) ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars(SITE_ADDRESS) ?></a></span>
    </div>
    <div class="utility-bar__right">
      <span>New Patients <a href="<?= htmlspecialchars(SITE_HREF) ?>"><?= htmlspecialchars(SITE_PHONE) ?></a></span>
    </div>
  </div>
</div>

<!-- Desktop nav -->
<header class="site-header">
  <div class="container">
    <a href="/">
      <img src="assets/images/logo.svg" alt="<?= htmlspecialchars(SITE_NAME) ?>" class="site-header__logo" />
    </a>
    <nav class="site-nav">
      <?php foreach (SITE_NAV as $nav_item): ?>
        <?php $active = nav_is_active($nav_item); ?>
        <?php if (!empty($nav_item['children'])): ?>
          <div class="nav-dropdown<?= $active ? ' is-active' : '' ?>">
            <a href="<?= htmlspecialchars($nav_item['href']) ?>" class="a-nav nav-dropdown__trigger<?= $active ? ' is-active' : '' ?>">
              <?= $nav_item['label'] ?>
              <svg class="nav-dropdown__chevron" width="11" height="11" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
            </a>
            <div class="nav-dropdown__menu">
              <?php foreach ($nav_item['children'] as $child): ?>
                <?php $childActive = (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') === ltrim($child['href'], '/')); ?>
                <a href="<?= htmlspecialchars($child['href']) ?>" class="nav-dropdown__item<?= $childActive ? ' is-active' : '' ?>"><?= $child['label'] ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php else: ?>
          <a href="<?= htmlspecialchars($nav_item['href']) ?>" class="a-nav<?= $active ? ' is-active' : '' ?>"><?= htmlspecialchars($nav_item['label']) ?></a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <a href="/survey.php" class="btn-primary header-cta">Request Appointment</a>

    <!-- Hamburger (visible ≤1300px) -->
    <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!-- Mobile nav overlay -->
<div class="mobile-nav__overlay" id="navOverlay"></div>

<!-- Mobile nav drawer -->
<nav class="mobile-nav" id="mobileNav" aria-hidden="true">
  <div class="mobile-nav__top">
    <a href="/">
      <img src="assets/images/logo.svg" alt="<?= htmlspecialchars(SITE_NAME) ?>" class="mobile-nav__logo" />
    </a>
    <button class="mobile-nav__close" id="navClose" aria-label="Close menu">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1L15 15M15 1L1 15" stroke="#14294a" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>
  </div>
  <div class="mobile-nav__links">
    <?php foreach (SITE_NAV as $nav_item): ?>
      <?php $active = nav_is_active($nav_item); ?>
      <?php if (!empty($nav_item['children'])): ?>
        <div class="mobile-nav__accordion<?= $active ? ' is-active' : '' ?>">
          <button class="mobile-nav__accordion-btn<?= $active ? ' is-active' : '' ?>" aria-expanded="<?= $active ? 'true' : 'false' ?>">
            <?= $nav_item['label'] ?>
            <svg class="mobile-nav__accordion-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
          </button>
          <div class="mobile-nav__accordion-panel<?= $active ? ' is-open' : '' ?>">
            <a href="<?= htmlspecialchars($nav_item['href']) ?>" class="mobile-nav__child mobile-nav__child--parent"><?= $nav_item['label'] ?> — Overview</a>
            <?php foreach ($nav_item['children'] as $child): ?>
              <?php $childActive = (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') === ltrim($child['href'], '/')); ?>
              <a href="<?= htmlspecialchars($child['href']) ?>" class="mobile-nav__child<?= $childActive ? ' is-active' : '' ?>"><?= $child['label'] ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else: ?>
        <a href="<?= htmlspecialchars($nav_item['href']) ?>" class="a-nav<?= $active ? ' is-active' : '' ?>"><?= htmlspecialchars($nav_item['label']) ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="mobile-nav__footer">
    <a href="/survey.php" class="btn-primary">Request Appointment</a>
    <a href="tel:<?= preg_replace('/[^0-9]/', '', SITE_PHONE) ?>" class="mobile-nav__phone">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.5 1h3l1.5 3.5-2 1a9 9 0 0 0 3.5 3.5l1-2L14 8.5v3c0 .83-.67 1.5-1.5 1.5C5.92 13 1 8.08 1 2.5 1 1.67 1.67 1 2.5 1H3.5z" fill="#2f6fb0"/>
      </svg>
      <?= htmlspecialchars(SITE_PHONE) ?>
    </a>
  </div>
</nav>

