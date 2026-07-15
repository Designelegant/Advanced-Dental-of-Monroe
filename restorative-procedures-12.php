<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Root Canals in Monroe Township, NJ | Dental Fillings in Monroe Township | Dental Crowns in 08831';
$page_description = 'Nyman Aydin, DMD performs restorative dental procedures including fillings, crowns and bridges in the ' . SITE_ADDRESS2 . ' dentist office. Call ' . SITE_PHONE . ' for an appointment.';
$pageBannerTitle  = 'Restorative Procedures';
$pageBreadcrumbs  = [
    ['label' => 'Home',                    'href' => '/'],
    ['label' => 'Dental Services',         'href' => 'dental-services-7'],
    ['label' => 'Restorative Procedures',  'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Intro split -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="Restorative dentistry at Advanced Dental of Monroe" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Restore &amp; Protect</span>
      <h2 class="sp-split-heading">Treating Every Phase of Tooth Decay</h2>
      <p class="sp-split-text">Almost everyone will experience tooth decay at some point in his or her life. Swift detection and correction of tooth decay can minimize the significant expenses and inconveniences associated with more serious problems. Restorative dentistry treats all phases of tooth decay, from simple cavity fillings to entire tooth replacements.</p>
      <a href="/survey.php" class="sp-split-cta">Schedule an Evaluation →</a>
    </div>
  </div>
</div>

<!-- Service icon cards -->
<div class="sp-features">
  <div class="container">
    <div class="sp-features__header">
      <span class="sp-features__eyebrow">Our Restorative Services</span>
      <h2 class="sp-features__heading">From Fillings to Full Tooth Replacement</h2>
    </div>
    <div class="sp-icon-grid">

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2C8.5 2 6 5 6 8c0 2 .8 4 1.5 6S9 19 12 19s3.5-2 4.5-5S18 10 18 8c0-3-2.5-6-6-6z"/><path d="M9 8h6"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Fillings</h3>
        <p class="sp-icon-card__text">Composite resin fillings match your natural tooth color and restore cavities from decay with a durable, natural-looking result. For more extensive decay, porcelain inlays or onlays provide greater coverage and strength.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Inlays &amp; Onlays</h3>
        <p class="sp-icon-card__text">Lab-fabricated gold or porcelain restorations for moderate decay or structural weakness — more durable than a filling, less invasive than a crown. Inlays fill the surface; onlays restore the chewing surface and cusps.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M2 20h20M4 20V10l8-7 8 7v10"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Crowns</h3>
        <p class="sp-icon-card__text">A porcelain or gold crown caps the entire visible tooth surface, reinforcing a chipped, cracked, badly decayed, or weakened tooth. Crowns restore strength and a natural appearance — and can last for many years with proper care.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Fixed Bridges</h3>
        <p class="sp-icon-card__text">A custom bridge fills the gap left by missing teeth by cementing to adjacent prepared teeth. It restores chewing function, prevents remaining teeth from shifting, and maintains facial structure. Dental implants are the permanent alternative.</p>
      </div>

      <div class="sp-icon-card"   >
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Root Canal Therapy</h3>
        <p class="sp-icon-card__text">When a tooth's pulp becomes infected from a fracture or deep cavity, a root canal removes the infected tissue, seals the canal with a rubber material, and tops the tooth with a protective crown. Root canals have a high success rate and are far preferable to extraction — saving your natural tooth is always the goal.</p>
      </div>

    </div>
  </div>
</div>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Restore Your Confidence</span>
    <h2 class="sp-cta-strip__title">Ready to Repair Your Smile?</h2>
    <p class="sp-cta-strip__text">From fillings to root canals, we treat all phases of tooth decay with care and precision. Schedule your visit today.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
