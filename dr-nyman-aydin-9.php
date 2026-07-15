<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Nyman Aydin, DMD - ' . SITE_ADDRESS;
$page_description = 'Nyman Aydin, DMD is a family and cosmetic dentist in ' . SITE_ADDRESS . '.';
$pageBannerTitle  = 'Dr. Nyman Aydin';
$pageBreadcrumbs  = [
    ['label' => 'Home',              'href' => '/'],
    ['label' => 'Meet Our Dentists', 'href' => 'meet-our-dentists-21'],
    ['label' => 'Dr. Nyman Aydin',   'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<section class="sp-section padd_top padd_bottom">
  <div class="container">

    <div class="sp-bio">

      <div class="sp-bio__photo-wrap">
        <img src="assets/images/dr-aydin.jpg" alt="Dr. Nyman Aydin" class="sp-bio__photo" />
      </div>

      <div class="sp-bio__content">
        <span class="sp-bio__specialty eyebrow">General &amp; Restorative Dentistry</span>
        <h2 class="sp-bio__name">Dr. Nyman Aydin</h2>
        <p class="sp-bio__text">Dr. Aydin obtained his Doctor of Medical Dentistry degree from UMDNJ New Jersey Dental School. Prior to entering private practice he also completed a general practice residency at Hackensack University Medical Center. There he received training in advanced dentistry such as implant restorations, implant placement and full mouth rehabilitations. Dr. Aydin is also proficient in general and cosmetic dentistry. As a member of multiple dental organizations such as the American Dental Association and the New Jersey Dental Association, Dr. Aydin is always in touch with the most advanced techniques in dentistry. He is continuing his education with post graduate courses in advanced implant surgery and bone grafting.</p>
        <div class="sp-bio__actions">
          <a href="/survey.php" class="sp-bio__btn-primary">Book an Appointment</a>
          <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="sp-bio__btn-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Get Started Today</span>
    <h2 class="sp-cta-strip__title">Ready to Schedule Your Visit?</h2>
    <p class="sp-cta-strip__text">Dr. Aydin and our team are welcoming new patients. Contact us today to schedule your appointment.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
