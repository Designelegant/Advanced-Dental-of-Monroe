<?php
/**
 * Inner page banner partial.
 *
 * Required variables (set before including this file):
 *   $pageBannerTitle   string  — H1 text shown in the banner
 *   $pageBreadcrumbs   array   — [ ['label' => '', 'href' => ''] ]
 *                                Last crumb has no href (current page).
 */
?>
<section class="page-banner">
  <div class="container">

    <?php if (!empty($pageBreadcrumbs)): ?>
    <nav class="page-banner__breadcrumb" aria-label="Breadcrumb">
      <?php foreach ($pageBreadcrumbs as $i => $crumb): ?>
        <?php if (!empty($crumb['href'])): ?>
          <a href="<?= htmlspecialchars($crumb['href']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
        <?php else: ?>
          <span><?= htmlspecialchars($crumb['label']) ?></span>
        <?php endif; ?>
        <?php if ($i < count($pageBreadcrumbs) - 1): ?>
          <span class="page-banner__sep" aria-hidden="true">›</span>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <?php endif; ?>

    <div class="page_banner_inner_para_content">
      <h1 class="page-banner__title h1"><?= htmlspecialchars($pageBannerTitle) ?></h1>
      <?php if (!empty($pageBannerpara)): ?>
      <p class="page_banner__para"><?= htmlspecialchars($pageBannerpara) ?></p>
    <?php endif; ?>
    </div>

    <div class="page-banner__actions">
      <a href="/survey.php" class="btn-banner-primary">Book Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">
        Call Now: <?= htmlspecialchars(SITE_PHONE) ?>
      </a>
    </div>

  </div>
</section>
