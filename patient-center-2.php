<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Patient Center | Dentist in ' . SITE_ADDRESS2 . ' | ' . SITE_NAME;
$page_description = 'Monroe Township dentist ' . SITE_NAME . ' is accepting new patients. Access office tour, new patient forms, office policies, common questions, dental links, and emergency care information.';
$pageBannerTitle  = 'Patient Center';
$pageBreadcrumbs  = [
    ['label' => 'Home',           'href' => '/'],
    ['label' => 'Patient Center', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<section class="sp-section padd_top padd_bottom">
  <div class="container">

    <p class="sp-services-intro">We want your visit to be as comfortable and convenient as possible. Use the links below to explore our office, complete forms before your appointment, and get answers to common questions.</p>

    <div class="sp-hub-grid">

      <!-- Office Tour -->
      <a href="office-tour-21" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-1.jpg" alt="Office Tour" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Office Tour</div>
       
          <span class="sp-hub-card__cta">Take a Tour →</span>
        </div>
      </a>

      <!-- New Patient Forms -->
      <a href="new-patient-forms-15" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-5.jpg" alt="New Patient Forms" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">New Patient Forms</div>
     
          <span class="sp-hub-card__cta">Download Forms →</span>
        </div>
      </a>

      <!-- Office Policies -->
      <a href="office-policies-20" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-6.jpg" alt="Office Policies" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Office Policies</div>
       
          <span class="sp-hub-card__cta">Read Policies →</span>
        </div>
      </a>

      <!-- Common Questions -->
      <a href="common-questions-15" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-1.jpg" alt="Common Questions" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Common Questions</div>
        
          <span class="sp-hub-card__cta">View FAQs →</span>
        </div>
      </a>

      <!-- Dental Links -->
      <a href="dental-links-18" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-5.jpg" alt="Dental Links" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Dental Links</div>
        
          <span class="sp-hub-card__cta">Explore Links →</span>
        </div>
      </a>

      <!-- Emergency Care -->
      <a href="survey.php" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-6.jpg" alt="Emergency Care" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Emergency Care</div>
        
          <span class="sp-hub-card__cta">Get Help Now →</span>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">We're Here for You</span>
    <h2 class="sp-cta-strip__title">Ready to Schedule Your Visit?</h2>
    <p class="sp-cta-strip__text">We welcome new patients of all ages. Contact our Monroe Township office today and our friendly team will get you taken care of.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
