<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Tooth Extractions in Monroe Township, NJ | Monroe Township Tooth Extractions | Tooth Extractions in 08831';
$page_description = 'Family dentist in Monroe Township, NJ offering tooth extractions in a comfortable, caring environment.';
$pageBannerTitle  = 'Tooth Extractions';
$pageBreadcrumbs  = [
    ['label' => 'Home',              'href' => '/'],
    ['label' => 'Dental Services',   'href' => 'dental-services-7'],
    ['label' => 'Tooth Extractions', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Intro split -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Gentle tooth extraction care" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Gentle, Caring Extractions</span>
      <h2 class="sp-split-heading">When Removing a Tooth Is the Right Choice</h2>
      <p class="sp-split-text">In extreme cases where a tooth cannot be saved, an extraction will be performed.
</p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Types of extractions -->
<div class="sp-features two_card">
  <div class="container">
    <div class="sp-features__header">
      <span class="sp-features__eyebrow">Common Reasons for Extraction</span>
      <h2 class="sp-features__heading">When Is an Extraction Necessary?</h2>
    </div>
    <div class="sp-icon-grid">

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2C8.5 2 6 5 6 8c0 2 .8 4 1.5 6S9 19 12 19s3.5-2 4.5-5S18 10 18 8c0-3-2.5-6-6-6z"/><path d="M12 8v4"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Wisdom Teeth</h3>
        <p class="sp-icon-card__text">Wisdom teeth are the molars farthest back in the mouth, usually erupting after age 18. They often become impacted, causing gum disease, infection, decay, or tumors — usually extracted at the first sign of impaction.</p>
      </div>

      <div class="sp-icon-card">
        <div class="sp-icon-card__icon">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 8v4M12 16h.01"/></svg>
        </div>
        <h3 class="sp-icon-card__title">Severe Infection</h3>
        <p class="sp-icon-card__text">In cases of severe infection where restorative approaches will not save a tooth, an extraction may be necessary.
</p>
      </div>

    </div>
  </div>
</div>



<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">We're Here to Help</span>
    <h2 class="sp-cta-strip__title">Experiencing Tooth Pain?</h2>
    <p class="sp-cta-strip__text">Don't wait — contact our office today and we'll get you seen as quickly as possible in a comfortable, caring environment.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
