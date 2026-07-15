<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Dr. Monica Mossad - ' . SITE_ADDRESS2;
$page_description = 'Monica Mossad, DMD is a family and cosmetic dentist in ' . SITE_ADDRESS . '.';
$pageBannerTitle  = 'Dr. Monica Mossad';
$pageBreadcrumbs  = [
    ['label' => 'Home',              'href' => '/'],
    ['label' => 'Meet Our Dentists', 'href' => 'meet-our-dentists-21'],
    ['label' => 'Dr. Monica Mossad', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<section class="sp-section padd_top padd_bottom">
  <div class="container">

    <div class="sp-bio">

      <div class="sp-bio__photo-wrap">
        <img src="assets/images/dr-mossad.jpg" alt="Dr. Monica Mossad" class="sp-bio__photo" />
      </div>

      <div class="sp-bio__content">
        <span class="sp-bio__specialty eyebrow">Cosmetic &amp; Family Dentistry</span>
        <h2 class="sp-bio__name">Dr. Monica Mossad</h2>
        <p class="sp-bio__text">Dr. Mossad graduated from UMDNJ - New Jersey Dental school. She completed a General Practice residency at Hackensack University Medial Center. Before dental school, Dr. Mossad graduated from Rutgers University right here in New Jersey. She enjoys providing people with the ability to smile without being ashamed or embarrassed. Her work experience with young children and teens will make it easy for you to bring the whole family in for a great dental experience. Since Dr. Mossad is highly trained in all areas of general dentistry, we can accommodate all your dental needs right here in our office. Her patients have described her as gentle and caring.</p>
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
    <p class="sp-cta-strip__text">Dr. Mossad and our team are welcoming new patients. Contact us today to schedule your appointment.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
