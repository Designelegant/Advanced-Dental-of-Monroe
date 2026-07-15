<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Office Policies | Monroe Township | Family Dentist';
$page_description = 'At our dental practice in Monroe Township we reserve a specific time for your appointments, try to maximize insurance benefits, and have several payment options to make dental treatment affordable.';
$pageBannerTitle  = 'Office Policies';
$pageBreadcrumbs  = [
    ['label' => 'Home',           'href' => '/'],
    ['label' => 'Patient Center', 'href' => 'index.php#patient-center'],
    ['label' => 'Office Policies', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<!-- Appointments Section -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Advanced Dental of Monroe Lobby" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Your Visit</span>
      <h2 class="sp-split-heading">Appointments</h2>
      <p class="sp-split-text" style="font-size: 17px; line-height: 1.85; color: #14294a; font-weight: 500; margin-top: 15px;">
        New patients, arrive 15 minutes early and bring completed new patient forms. Returning patients, arrive at least 5 minutes early for check-in.
      </p>
      <a href="/survey.php" class="sp-split-cta">Book Appointment →</a>
    </div>
  </div>
</div>

<!-- Cancellations Section -->
<div class="sp-split-section sp-split-section--alt">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="Treatment scheduling at Advanced Dental" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Scheduling Flexibility</span>
      <h2 class="sp-split-heading">Cancellations</h2>
      <p class="sp-split-text" style="font-size: 17px; line-height: 1.85; color: #14294a; font-weight: 500; margin-top: 15px;">
        24 hour notice requested to cancel or reschedule.
      </p>
      <a href="/survey.php" class="sp-split-cta">Reschedule Visit →</a>
    </div>
  </div>
</div>

<!-- Payment & Insurance Section -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Consultation and billing options" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Financial Options</span>
      <h2 class="sp-split-heading">Payment &amp; Insurance</h2>
      
      <p class="sp-split-subheading" style="color: #14294a; font-size: 16px; font-weight: 700; margin-top: 10px;">Accepted Payment Methods:</p>
      <p class="sp-split-text" style="font-weight: 500; color: #2f6fb0; margin-bottom: 12px;">
        Cash, checks, Visa, Mastercard, Discover, American Express
      </p>
      
      <p class="sp-split-subheading" style="color: #14294a; font-size: 16px; font-weight: 700; margin-top: 10px;">Financing Options:</p>
      <p class="sp-split-text" style="font-weight: 500; color: #2f6fb0; margin-bottom: 20px;">
        Carecredit financing available
      </p>
      
      <p class="sp-split-text" style="border-top: 1px solid #e7e0d3; padding-top: 15px;">
        We practice courtesy verification of coverage and file claims on the patient's behalf, but the patient is ultimately responsible for all charges, including deductibles, co-insurance, and non-covered procedures.
      </p>
    </div>
  </div>
</div>

<!-- Emergencies Section -->
<div class="sp-split-section sp-split-section--alt">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Emergency contact support" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Immediate Care</span>
      <h2 class="sp-split-heading">Emergencies</h2>
      <p class="sp-split-text" style="font-size: 17px; line-height: 1.85; color: #14294a; font-weight: 500; margin-top: 15px;">
        Patients of record should call the office for emergency information.
      </p>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="sp-split-cta">Call Now: <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow">Have Questions?</span>
    <h2 class="sp-cta-strip__title">We Are Here to Assist You</h2>
    <p class="sp-cta-strip__text">Call our helpful administrative team for any specific questions about insurance, billing, or scheduling.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
