<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Dental Implants in ' . SITE_ADDRESS2 . ' | Dentist';
$page_description = 'Nyman Aydin, DMD offers dental implants for tooth replacement and implant dentures in ' . SITE_ADDRESS . '.';
$pageBannerTitle  = 'Dental Implants';
$pageBreadcrumbs  = [
    ['label' => 'Home',             'href' => '/'],
    ['label' => 'Dental Services',  'href' => 'dental-services-7'],
    ['label' => 'Dental Implants',  'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Intro split -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Dental implant consultation room" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Permanent Tooth Replacement</span>
      <h2 class="sp-split-heading">A Smile That Looks and Feels Completely Natural</h2>
      <p class="sp-split-text">Dental implants offer a smile that looks and feels very natural. Surgically placed below the gums over a series of appointments, implants fuse to the jawbone and serve as a base for individual replacement teeth, bridges, or a denture. Because they integrate with the jaw, replacement teeth feel more natural and secure than any alternative.</p>
      <p class="sp-split-text">Candidates need healthy gums and adequate bone — a thorough evaluation will determine your candidacy.</p>
      <a href="/survey.php" class="sp-split-cta">Request an Evaluation →</a>
    </div>
  </div>
</div>

<!-- Implant options -->
<div class="sp-features two_card">
  <div class="container">
    <div class="sp-features__header">
      <span class="sp-features__eyebrow">Implant Options</span>
      <h2 class="sp-features__heading">Which Implant Solution Is Right for You?</h2>
    </div>
    <div class="sp-icon-grid">

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="12" y1="2" x2="12" y2="22"/><path d="M8 6h8M8 10h8M8 14h8M8 18h8"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Tooth Implants</h3>
        <p class="sp-icon-card__text">A surgically placed titanium post anchors into the jawbone and fuses over approximately 6 months. An artificial crown is then attached — virtually indistinguishable from a natural tooth. A single implant can also anchor a bridge to replace multiple missing teeth.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Implant Dentures</h3>
        <p class="sp-icon-card__text">2–4 implants are placed and healed (~6 months), then an implant denture clips onto a bar connected to the implants. Two types are available: <strong>Implant Retained</strong> (mainly bone and gum supported with attachment assist) and <strong>Implant Supported</strong> (mainly bar-supported, for patients with insufficient bone or gum tissue).</p>
      </div>

    </div>
  </div>
</div>

<!-- Why implants split -->
<div class="sp-split-section sp-split-section--alt">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Dental implant benefits" loading="lazy">
    </div>
    <div class="sp-split-body sp-split-body--navy">
      <span class="sp-split-tag">Why Choose Implants</span>
      <h2 class="sp-split-heading">The Gold Standard in Tooth Replacement</h2>
      <ul class="sp-split-list">
        <li>Look, feel, and function like natural teeth</li>
        <li>Fuse to the jawbone — preventing bone loss over time</li>
        <li>No slipping, no adhesives, no discomfort</li>
        <li>Placement and restoration performed entirely in our office</li>
        <li>Long-lasting with proper care and maintenance</li>
        <li>Boost confidence and quality of life</li>
      </ul>
      <a href="/survey.php" class="sp-split-cta">Book a Consultation →</a>
    </div>
  </div>
</div>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">A Lifetime of Confidence</span>
    <h2 class="sp-cta-strip__title">Find Out If Implants Are Right for You</h2>
    <p class="sp-cta-strip__text">A thorough evaluation will determine your candidacy. We'd love to help you reclaim a natural, confident smile.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
