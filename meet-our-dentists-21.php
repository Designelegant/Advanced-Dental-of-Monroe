<?php
require_once __DIR__ . '/config.php';
$pageTitle        = 'Meet our Dentists ' . SITE_ADDRESS2;
$page_description = 'Meet our dentists practicing in ' . SITE_ADDRESS . '.';
$pageBannerTitle  = 'Meet Our Dentists';
$pageBreadcrumbs  = [
    ['label' => 'Home',              'href' => '/'],
    ['label' => 'Meet Our Dentists', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<section class="interior-page padd_top padd_bottom">
  <div class="container">
    <div class="dentist-cards">

      <a href="dr-monica-mossad-17" class="dentist-card">
        <div class="dentist-card__photo-wrap">
          <img src="assets/images/dr-mossad.jpg" alt="Dr. Monica Mossad" class="dentist-card__photo" />
        </div>
        <div class="dentist-card__info">
          <h2 class="dentist-card__name h3">Dr. Monica Mossad</h2>
          <!-- <span class="dentist-card__specialty text-sub">Cosmetic &amp; Family Dentistry</span> -->
          <span class="dentist-card__cta a-primary">Learn More →</span>
        </div>
      </a>

      <a href="dr-nyman-aydin-9" class="dentist-card">
        <div class="dentist-card__photo-wrap">
          <img src="assets/images/dr-aydin.jpg" alt="Dr. Nyman Aydin" class="dentist-card__photo" />
        </div>
        <div class="dentist-card__info">
          <h2 class="dentist-card__name h3">Dr. Nyman Aydin</h2>
          <!-- <span class="dentist-card__specialty text-sub">General &amp; Restorative Dentistry</span> -->
          <span class="dentist-card__cta a-primary">Learn More →</span>
        </div>
      </a>

    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
