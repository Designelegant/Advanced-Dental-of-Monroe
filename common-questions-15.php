<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Family Dental FAQ | Dentist Monroe Township';
$page_description = 'Find the answers to common questions about your Monroe Township dental practice.';
$pageBannerTitle  = 'Common Questions';
$pageBreadcrumbs  = [
    ['label' => 'Home',           'href' => '/'],
    ['label' => 'Patient Center', 'href' => 'index.php#patient-center'],
    ['label' => 'Common Questions', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<style>
.faq-coming-soon {
  padding: 100px 0;
  background: #fbf7f1;
  text-align: center;
}
.faq-coming-soon-card {
  max-width: 650px;
  margin: 0 auto;
  background: #fff;
  border-radius: 16px;
  padding: 60px 40px;
  box-shadow: 0 15px 45px rgba(20, 41, 74, 0.05);
  border: 1px solid rgba(20, 41, 74, 0.05);
}
.faq-coming-soon-icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: rgba(47, 111, 176, 0.08);
  color: #2f6fb0;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 28px;
  font-size: 28px;
}
.faq-coming-soon-title {
  font-family: 'Playfair Display', serif;
  font-size: 28px;
  font-weight: 700;
  color: #14294a;
  margin-bottom: 20px;
}
.faq-coming-soon-text {
  font-family: 'Work Sans', sans-serif;
  font-size: 16px;
  color: #4b5a68;
  line-height: 1.7;
  margin-bottom: 0;
}
</style>

<!-- Intro split -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="Advanced Dental Patient Support" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Patient Help</span>
      <h2 class="sp-split-heading">Common Questions</h2>
      <p class="sp-split-text" style="font-size: 17px; line-height: 1.85; color: #14294a; font-weight: 500; margin-top: 15px;">
        Have a question about our practices, safety, or dental hygiene? We are compiling answers to help our community learn more about their dental health.
      </p>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="sp-split-cta">Call Our Office →</a>
    </div>
  </div>
</div>

<!-- Message Section -->
<div class="faq-coming-soon">
  <div class="container">
    <div class="faq-coming-soon-card">
      <div class="faq-coming-soon-icon">
        ℹ️
      </div>
      <h3 class="faq-coming-soon-title">Common Questions</h3>
      <p class="faq-coming-soon-text">
        coming soon - no actual FAQ content has been published.
      </p>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow">Still Have Questions?</span>
    <h2 class="sp-cta-strip__title">Get Direct Answers From Our Team</h2>
    <p class="sp-cta-strip__text">We are always happy to clarify treatment plans, scheduling slots, or billing details over the phone.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
