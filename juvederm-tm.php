<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Juvederm in Monroe Township, NJ';
$page_description = 'Get rid of those wrinkles with Juvederm. Call (848) 337-5042 for your next appointment.';
$pageBannerTitle  = 'Juvederm';
$pageBreadcrumbs  = [
    ['label' => 'Home',            'href' => '/'],
    ['label' => 'Dental Services',  'href' => 'dental-services-7'],
    ['label' => 'Juvederm',         'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Intro Section -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Juvederm Treatment Monroe Township" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Cosmetic Enhancements</span>
      <h2 class="sp-split-heading">Juvederm in Monroe Township, NJ</h2>
      <p class="sp-split-subheading" style="font-family: 'Work Sans', sans-serif; font-size: 16.5px; font-weight: 600; color: #2f6fb0; margin: 10px 0 20px;">
        Get rid of those wrinkles with Juvederm. Call <?= htmlspecialchars(SITE_PHONE) ?> for your next appointment.
      </p>
      <p class="sp-split-text">
        Juvederm injectable gel is a safe, effective gel that restores volume to the skin and smoothes away moderate to severe facial wrinkles and folds. Juvederm is the first FDA-approved hyaluronic acid dermal filler proven safe and effective for persons of color.
      </p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Details Section -->
<div class="sp-split-section sp-split-section--alt">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Hyaluronic Acid Dermal Filler Treatment" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Natural &amp; Smooth Results</span>
      <h2 class="sp-split-heading">Hyaluronic Acid Dermal Filler</h2>
      <p class="sp-split-text">
        The Juvederm gel is made of hyaluronic acid with a smooth consistency, allowing for easy injections and instant, natural-looking results. There is no pre-testing needed for this procedure.
      </p>
      <p class="sp-split-text">
        Topical or injectable anesthesia may be used during this procedure to numb the treatment area and minimize any potential discomfort. The results of this procedure are available right away and can usually last for up to a year, the longest results available from any hyaluronic acid product.
      </p>
      <a href="/survey.php" class="sp-split-cta">Schedule Your Consultation →</a>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Look and Feel Your Best</span>
    <h2 class="sp-cta-strip__title">Schedule Your Juvederm Visit Today</h2>
    <p class="sp-cta-strip__text">Our team is dedicated to providing comfortable, personalized care to help you achieve your aesthetic goals.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
