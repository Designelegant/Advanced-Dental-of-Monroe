<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Dental Procedures | General and Cosmetic Dentistry in ' . SITE_ADDRESS2 . '. Nyman Aydin, DMD';
$page_description = SITE_NAME . ' - We offer a wide range of dental procedures in our ' . SITE_ADDRESS2 . ' dental office. Call ' . SITE_PHONE . ' for more information today.';
$pageBannerTitle  = 'Dental Services';
$pageBreadcrumbs  = [
    ['label' => 'Home',            'href' => '/'],
    ['label' => 'Dental Services', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<section class="sp-section padd_top padd_bottom">
  <div class="container">

    <p class="sp-services-intro">We perform the following procedures in our office. Click a service to learn more. If you have questions, please call our office to schedule an appointment.</p>

    <div class="sp-hub-grid">

      <!-- Cleaning & Prevention -->
      <a href="cleaning-and-prevention-10" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-1.jpg" alt="Cleaning and Prevention" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Cleaning &amp; Prevention</div>
          <p class="sp-hub-card__text">Cleanings, Exams, Brushing, Flossing, Mouth Rinses, Periodontal Disease</p>
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

      <!-- Cosmetic Procedures -->
      <a href="cosmetic-procedures-11" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-5.jpg" alt="Cosmetic Procedures" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Cosmetic Procedures</div>
          <p class="sp-hub-card__text">Teeth Whitening, Bonding, Veneers, Fillings, Inlays & Onlays, Crowns, Fixed Bridges</p>
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

      <!-- Restorative Procedures -->
      <a href="restorative-procedures-12" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-6.jpg" alt="Restorative Procedures" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Restorative Procedures</div>
          <p class="sp-hub-card__text">Fillings, Inlays & Onlays, Crowns, Fixed Bridges, Root Canal Therapy</p>
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

      <!-- Dental Implants -->
      <a href="dental-implants-13" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-1.jpg" alt="Dental Implants" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Dental Implants</div>
          <p class="sp-hub-card__text">Tooth Implants, Implant Dentures</p>
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

      <!-- Tooth Extractions -->
      <a href="tooth-extractions-14" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-5.jpg" alt="Tooth Extractions" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Tooth Extractions</div>
          <p class="sp-hub-card__text">Wisdom Teeth, Infection, Routine Extractions
</p>
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

      <!-- Pediatric Dentistry -->
      <a href="pediatric-dentistry-16" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-6.jpg" alt="Pediatric Dentistry" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Pediatric Dentistry</div>
          
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

      <!-- Same-Day Dentistry -->
      <a href="same-day-dentistry-18" class="sp-hub-card">
        <div class="sp-hub-card__header">
          <img src="assets/images/office-1.jpg" alt="Same-Day Dentistry" loading="lazy">
        </div>
        <div class="sp-hub-card__body">
          <div class="sp-hub-card__title">Same-Day Dentistry</div>
       
          <span class="sp-hub-card__cta">Learn More →</span>
        </div>
      </a>

    </div>
  </div>
</section>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">We're Here For You</span>
    <h2 class="sp-cta-strip__title">Have Questions About a Procedure?</h2>
    <p class="sp-cta-strip__text">Call our office or fill out our contact form and our team will be happy to help you find the right care.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
