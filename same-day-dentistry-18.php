<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Advanced Dental of Monroe - Same-Day Dentistry';
$page_description = 'Nyman Aydin, DMD is a family and cosmetic dentist practicing in Monroe Township, NJ.';
$pageBannerTitle  = 'Same-Day Dentistry';
$pageBreadcrumbs  = [
    ['label' => 'Home',               'href' => '/'],
    ['label' => 'Dental Services',    'href' => 'dental-services-7'],
    ['label' => 'Same-Day Dentistry', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<style>
.sp-video-wrapper {
  position: relative;
  z-index: 1;
  width: 100%;
  aspect-ratio: 16 / 9;
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 20px 48px rgba(0, 0, 0, 0.3);
}
.sp-video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.sp-highlight-list {
  list-style: none;
  padding: 0;
  margin: 20px 0 0 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.sp-highlight-list li {
  font-family: 'Work Sans', sans-serif;
  font-size: 15.5px;
  color: #4b5a68;
  display: flex;
  align-items: center;
  gap: 10px;
}
.sp-highlight-list li svg {
  color: #2f6fb0;
  flex-shrink: 0;
}
/* Before / After gallery */
.sp-ba-section {
  background: #fbf7f1;
  padding: 80px 0;
}
.sp-ba-inner {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 40px;
}
.sp-ba-header {
  text-align: center;
  margin-bottom: 48px;
}
.sp-ba-header .sp-split-tag { display: inline-block; margin-bottom: 10px; }
.sp-ba-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(26px, 3.5vw, 36px);
  color: #14294a;
  margin: 0;
}
.sp-ba-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
}
.sp-ba-card {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 32px -8px rgba(20,41,74,0.15);
  background: #fff;
}
.sp-ba-card img {
  width: 100%;
  display: block;
  aspect-ratio: 4/3;
  object-fit: cover;
}
.sp-ba-card__label {
  padding: 14px 20px;
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: 700;
  color: #14294a;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  border-top: 2px solid #c9d8e8;
}
@media (max-width: 600px) {
  .sp-ba-grid { grid-template-columns: 1fr; }
  .sp-ba-inner { padding: 0 20px; }
  .sp-ba-section { padding: 56px 0; }
}
/* Restore padding-top on consecutive split-section with background changes */
.sp-split-section.sp-split-section--alt {
  padding-top: 96px;
}
@media (max-width: 767px) {
  .sp-split-section.sp-split-section--alt {
    padding-top: 64px;
  }
}
@media (max-width: 767px) {
  .sp-split-image {
    padding: 0 !important;
  }
  .sp-split-image::before {
    display: none;
  }
}
</style>

<!-- Intro Section (Cream BG) -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="CEREC Same-Day Dentistry Technology" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Same-Day Care</span>
      <h2 class="sp-split-heading">Same-Day Dentistry</h2>
      <p class="sp-split-subheading" style="font-family: 'Work Sans', sans-serif; font-size: 16.5px; font-weight: 600; color: #14294a; margin-top: -10px;">
        Dr. Nyman Aydin, DDS is a family and cosmetic dentist practicing in Monroe Township, NJ.
      </p>
      <p class="sp-split-text">
        Technology today is changing our everyday lives. Many people, however, aren't aware that technology also is impacting dentistry in new and exciting ways. Cutting-edge innovations in dental instruments are requiring less time in the dental chair, causing less discomfort and creating satisfying results. One breakthrough instrument, called CEREC, allows dentists to quickly restore damaged teeth with natural-colored ceramic fillings, saving patients time and inconvenience.
      </p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Video Section (Navy BG) -->
<div class="sp-split-section sp-split-section--navy">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image" style="padding: 20px 0 0 20px;">
      <div class="sp-video-wrapper">
        <iframe src="https://player.vimeo.com/video/1210077025?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" title="CEREC Dental Restorations - CEREC by Dentsply Sirona" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
    <div class="sp-split-body sp-split-body--navy">
      <span class="sp-split-tag">Interactive Demonstration</span>
      <h2 class="sp-split-heading">What is CEREC?
</h2>
      <p class="sp-split-text">
        CEREC is an acronym for Chairside Economical Restoration of Esthetic Ceramics — a dentist can economically restore damaged teeth in a single appointment using a ceramic material matching natural tooth color.

      </p>
      <a href="/survey.php" class="sp-split-cta">Schedule Your Appointment →</a>
    </div>
  </div>
</div>


<!-- Before / After -->
<div class="sp-ba-section">
  <div class="sp-ba-inner">
    <div class="sp-ba-header">
      <span class="sp-split-tag">Real Patient Results</span>
      <h2>Before &amp; After CEREC Restorations</h2>
    </div>
    <div class="sp-ba-grid">
      <div class="sp-ba-card">
        <img src="assets/images/ba-cerec-1.jpg" alt="CEREC Restoration Before and After – Case 1" loading="lazy">
        <div class="sp-ba-card__label">Case 1 — Single-Visit Crown</div>
      </div>
      <div class="sp-ba-card">
        <img src="assets/images/ba-cerec-2.jpg" alt="CEREC Restoration Before and After – Case 2" loading="lazy">
        <div class="sp-ba-card__label">Case 2 — Ceramic Filling</div>
      </div>
    </div>
  </div>
</div>

<!-- Features Grid -->
<div class="sp-features">
  <div class="container">
    <div class="sp-features__header">
      <span class="sp-features__eyebrow">Advanced Restorations</span>
      <h2 class="sp-features__heading">Why Patients Choose CEREC</h2>
    </div>
    <div class="two_card">
      <div class="sp-icon-grid">

        <div class="sp-icon-card">
          <div class="sp-icon-card__icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
              <circle cx="12" cy="13" r="4"/>
            </svg>
          </div>
          <h3 class="sp-icon-card__title">How does the instrument work?</h3>
          <p class="sp-icon-card__text">
            CEREC uses CAD/CAM technology combining a camera, computer, and milling machine. The dentist takes an optical impression, designs the restoration on-screen, and the machine mills it while the patient waits. The whole process takes about one hour.

          </p>
        </div>

        <div class="sp-icon-card">
          <div class="sp-icon-card__icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <path d="M9 12l2 2 4-4"/>
            </svg>
          </div>
          <h3 class="sp-icon-card__title">What does this innovation mean for a patient?</h3>
          <p class="sp-icon-card__text">
            A tooth-colored, natural-looking restoration that's compatible with tissue, anti-abrasive, and plaque-resistant. No temporaries, lab impressions, or second visit needed. CEREC has over a decade of clinical research supporting its precision, safety, and effectiveness.

          </p>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Modern Technology</span>
    <h2 class="sp-cta-strip__title">Quality Care Without the Wait</h2>
    <p class="sp-cta-strip__text">Our modern office is designed to deliver effective, same-day care for busy families in Monroe Township and beyond.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
