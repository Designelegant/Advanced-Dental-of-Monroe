<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Cosmetic Dentist ' . SITE_ADDRESS2 . ' | Cosmetic Dentistry';
$page_description = 'Whether you need teeth whitening, bonding, porcelain veneers, fillings, inlays & onlays, crowns, or fixed bridges, your ' . SITE_ADDRESS2 . ' dentist has you covered.';
$pageBannerTitle  = 'Cosmetic Procedures';
$pageBreadcrumbs  = [
    ['label' => 'Home',                 'href' => '/'],
    ['label' => 'Dental Services',      'href' => 'dental-services-7'],
    ['label' => 'Cosmetic Procedures',  'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Intro split -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Cosmetic dentistry at Advanced Dental of Monroe" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Smile Transformation</span>
      <h2 class="sp-split-heading">Modern Cosmetic Dentistry That Delivers Results</h2>
      <p class="sp-split-text">Enhancing the smile's aesthetic appearance can lead to increased self-confidence, improved social skills, and even a more positive outlook on life. Modern cosmetic dentistry merges advanced technology with fine art, and can often produce amazing results in less time than you would expect.</p>
      <a href="/survey.php" class="sp-split-cta">Request a Consultation →</a>
    </div>
  </div>
</div>

<!-- Service icon cards -->
<div class="sp-features">
  <div class="container">
    <div class="sp-features__header">
      <span class="sp-features__eyebrow">Our Cosmetic Services</span>
      <h2 class="sp-features__heading">Solutions for Every Smile Concern</h2>
    </div>
    <div class="sp-icon-grid sp-icon-grid--3">

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Teeth Whitening</h3>
        <p class="sp-icon-card__text">Problem: Stained, dull teeth. Solution: Customized trays filled with whitening gel worn as little as 1 hour/day; in about a week this erases most coffee/tobacco stains and age-related yellowing. Alternatives: In-office gel treatment for faster results; porcelain veneers or crowns for hard-to-treat stains.
</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2C8.5 2 6 5 6 8c0 2 .8 4 1.5 6S9 19 12 19s3.5-2 4.5-5S18 10 18 8c0-3-2.5-6-6-6z"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Bonding</h3>
        <p class="sp-icon-card__text">Problem: Chipped, discolored, uneven, stained or gapped teeth. Solution: Tooth-colored composite resin applied directly to enamel and hardened with UV light. Alternatives: Porcelain veneers and crowns last longer but cost more.
  </p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="3" y="8" width="18" height="12" rx="3"/><path d="M7 8V6a5 5 0 0 1 10 0v2"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Veneers</h3>
        <p class="sp-icon-card__text">Problem: Chipped, discolored, uneven, stained, gapped, out-of-proportion, or worn teeth. Solution: Customized wafer-thin porcelain laminates cemented to the front of the tooth. Alternatives: Not ideal for decay, advanced perio disease, or severe misalignment — orthodontics or crowns may be better.
</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Tooth-Colored Fillings</h3>
        <p class="sp-icon-card__text">Problem: Tooth decay/cavity. Solution: Composite resin filling that matches natural tooth appearance. Alternatives: Porcelain inlays/onlays for more extensive decay.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Inlays &amp; Onlays</h3>
        <p class="sp-icon-card__text">Problem: Tooth decay, weakened structure, need for reinforcement. Solution: Lab-fabricated gold or porcelain restoration cemented into place; inlays cover tooth surfaces, onlays cover the chewing surface. Alternatives: Crowns for advanced decay.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M2 20h20M4 20V10l8-7 8 7v10"/><path d="M9 20v-5h6v5"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Crowns</h3>
        <p class="sp-icon-card__text">Problem: Chipped, cracked, badly decayed, or weakened teeth. Solution: Porcelain or gold crown covering the entire visible tooth surface for reinforcement and appearance. Alternatives: Extraction with bridge or implant for badly decayed teeth.
</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Fixed Bridges</h3>
        <p class="sp-icon-card__text">Problem: Missing tooth/teeth causing chewing/speech difficulty, shifting, and sunken facial appearance. Solution: Custom bridge cemented to prepared adjacent teeth (or resin-bonded with a metal appliance). Alternatives: Dental implants as a more permanent option not reliant on adjacent teeth.</p>
      </div>

    </div>
  </div>
</div>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Your Best Smile Awaits</span>
    <h2 class="sp-cta-strip__title">Let Us Help You Look and Feel Your Best</h2>
    <p class="sp-cta-strip__text">Modern cosmetic dentistry can produce amazing results in less time than you'd expect. Call us today to get started.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
