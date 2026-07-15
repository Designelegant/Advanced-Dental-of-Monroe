<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Family Dental Links and Resources | Dentist in Monroe Township';
$page_description = 'Find more information about dental organizations and dental products.';
$pageBannerTitle  = 'Dental Links';
$pageBreadcrumbs  = [
    ['label' => 'Home',           'href' => '/'],
    ['label' => 'Patient Center', 'href' => 'index.php#patient-center'],
    ['label' => 'Dental Links',   'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<style>
.links-section {
  padding: 80px 0;
  background: #fbf7f1;
}
.links-category-header {
  font-family: 'Playfair Display', serif;
  font-size: 28px;
  font-weight: 700;
  color: #14294a;
  margin-bottom: 30px;
  border-bottom: 2px solid #e7e0d3;
  padding-bottom: 12px;
}
.links-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  margin-bottom: 60px;
}
.link-item-card {
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 8px 24px rgba(20, 41, 74, 0.04);
  border: 1px solid rgba(20, 41, 74, 0.04);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.link-item-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 32px rgba(20, 41, 74, 0.08);
}
.link-item-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  font-weight: 700;
  color: #14294a;
  margin-bottom: 10px;
}
.link-item-desc {
  font-family: 'Work Sans', sans-serif;
  font-size: 15px;
  color: #4b5a68;
  line-height: 1.6;
  margin-bottom: 20px;
}
.link-item-anchor {
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  font-weight: 600;
  color: #2f6fb0;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  margin-top: auto;
  transition: color 0.3s ease;
}
.link-item-anchor:hover {
  color: #14294a;
}
.link-item-anchor svg {
  margin-left: 6px;
  transition: transform 0.2s ease;
}
.link-item-anchor:hover svg {
  transform: translateX(3px);
}
@media (max-width: 991px) {
  .links-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
}
@media (max-width: 767px) {
  .links-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
}
</style>

<!-- Intro Section -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Dental Care Links Resources" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Patient Center</span>
      <h2 class="sp-split-heading">Dental Links</h2>
      <p class="sp-split-text" style="font-size: 17px; line-height: 1.8; color: #14294a; font-weight: 500;">
        We have compiled a list of trusted external links to leading dental organizations and products to help you access reliable oral health resources.
      </p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Links Container -->
<div class="links-section">
  <div class="container">
    
    <!-- Category 1: Dental Organizations -->
    <h3 class="links-category-header">Dental Organizations</h3>
    <div class="links-grid">
      <!-- ADA -->
      <div class="link-item-card">
        <div>
          <h4 class="link-item-title">American Dental Association (ADA)</h4>
          <p class="link-item-desc">Oldest and largest national dental society, leading source of oral health information.</p>
        </div>
        <a href="https://www.ada.org" target="_blank" rel="noopener noreferrer" class="link-item-anchor">
          Visit www.ada.org 
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
          </svg>
        </a>
      </div>
      
      <!-- AGD -->
      <div class="link-item-card">
        <div>
          <h4 class="link-item-title">Academy of General Dentistry (AGD)</h4>
          <p class="link-item-desc">Leading educator of general dentists, running knowyourteeth.com for public resources.</p>
        </div>
        <a href="https://www.agd.org" target="_blank" rel="noopener noreferrer" class="link-item-anchor">
          Visit www.agd.org 
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
          </svg>
        </a>
      </div>

      <!-- AACD -->
      <div class="link-item-card">
        <div>
          <h4 class="link-item-title">American Academy of Cosmetic Dentistry (AACD)</h4>
          <p class="link-item-desc">Provides information on cosmetic dentistry.</p>
        </div>
        <a href="https://www.aacd.com" target="_blank" rel="noopener noreferrer" class="link-item-anchor">
          Visit www.aacd.com 
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
          </svg>
        </a>
      </div>
    </div>
    
    <!-- Category 2: Dental Products -->
    <h3 class="links-category-header" style="margin-top: 20px;">Dental Products</h3>
    <div class="links-grid">
      <!-- Crest -->
      <div class="link-item-card">
        <div>
          <h4 class="link-item-title">Crest</h4>
          <p class="link-item-desc">Toothpaste, toothbrushes, mouthwash, dental hygiene info, and kids' brushing resources.</p>
        </div>
        <a href="https://www.crest.com" target="_blank" rel="noopener noreferrer" class="link-item-anchor">
          Visit www.crest.com 
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
          </svg>
        </a>
      </div>

      <!-- Colgate -->
      <div class="link-item-card">
        <div>
          <h4 class="link-item-title">Colgate</h4>
          <p class="link-item-desc">Oral care center offering news, patient education, research, and toothpaste/children's program info.</p>
        </div>
        <a href="https://www.colgate.com" target="_blank" rel="noopener noreferrer" class="link-item-anchor">
          Visit www.colgate.com 
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
          </svg>
        </a>
      </div>
      
      <!-- Oral-B -->
      <div class="link-item-card">
        <div>
          <h4 class="link-item-title">Oral-B</h4>
          <p class="link-item-desc">Product info, dental health topics for children/adults, and hygiene videos.</p>
        </div>
        <a href="https://www.oralb.com" target="_blank" rel="noopener noreferrer" class="link-item-anchor">
          Visit www.oralb.com 
          <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
          </svg>
        </a>
      </div>
    </div>

  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow">Have Questions?</span>
    <h2 class="sp-cta-strip__title">Get In Touch With Our Monroe Practice</h2>
    <p class="sp-cta-strip__text">We are here to assist you with scheduling, dental questions, or anything else you might need.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
