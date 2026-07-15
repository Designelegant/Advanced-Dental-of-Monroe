<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Botox in Monroe Township, NJ';
$page_description = 'Get rid of those wrinkles with Botox. Call (848) 337-5042 for your next appointment.';
$pageBannerTitle  = 'Botox';
$pageBreadcrumbs  = [
    ['label' => 'Home',            'href' => '/'],
    ['label' => 'Dental Services',  'href' => 'dental-services-7'],
    ['label' => 'Botox',            'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Intro Section -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="Botox Treatment Monroe Township" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Cosmetic Enhancements</span>
      <h2 class="sp-split-heading">Botox in Monroe Township, NJ</h2>
      <p class="sp-split-subheading" style="font-family: 'Work Sans', sans-serif; font-size: 16.5px; font-weight: 600; color: #2f6fb0; margin: 10px 0 20px;">
        Get rid of those wrinkles with Botox. Call <?= htmlspecialchars(SITE_PHONE) ?> for your next appointment.
      </p>
      <p class="sp-split-text">
        You've probably heard of Botox Cosmetic, but did you know: it's the first and only FDA-approved treatment to temporarily smooth moderate to severe forehead lines, crow's feet lines, and frown lines in adults; and it's a one-of-a-kind formulation. So if you're bothered by those deepening lines and have thought about treatment to temporarily reduce them, ask for Botox Cosmetic by name.
      </p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Details Section -->
<div class="sp-split-section sp-split-section--alt">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Botox Results and Information" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Authentic Results</span>
      <h2 class="sp-split-heading">Why Choose Botox Cosmetic?</h2>
      <p class="sp-split-text">
        Because only Botox Cosmetic gives you Botox Cosmetic results. Make it part of what you do - for you.
      </p>
      <p class="sp-split-text" style="margin-top: 15px;">
        For additional product information and before/after comparisons, you can visit the official <a href="https://www.botoxcosmetic.com" target="_blank" rel="noopener noreferrer" style="color: #2f6fb0; font-weight: 600; text-decoration: underline;">Botox Cosmetic Website</a>.
      </p>
      <a href="/survey.php" class="sp-split-cta">Schedule Your Appointment →</a>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Smooth and Rejuvenate</span>
    <h2 class="sp-cta-strip__title">Book Your Botox Evaluation Today</h2>
    <p class="sp-cta-strip__text">Enjoy a refreshed, natural look with our professional cosmetic options in Monroe Township.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
