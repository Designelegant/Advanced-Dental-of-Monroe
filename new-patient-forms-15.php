<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'New Patient Forms | Dentist Monroe Township, NJ 08831';
$page_description = 'Find your new patient forms here before your first dental appointment with your dentist in Monroe Township, NJ.';
$pageBannerTitle  = 'New Patient Forms';
$pageBannerpara  = 'We are happy to offer our patient forms online. Please feel free to print and fill them out at your convenience before your visit.';
$pageBreadcrumbs  = [
    ['label' => 'Home',           'href' => '/'],
    ['label' => 'Patient Center', 'href' => 'index.php#patient-center'],
    ['label' => 'New Patient Forms', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<style>
.forms-section {
  padding: 80px 0;
  background: #fbf7f1;
}
.forms-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  max-width: 1100px;
  margin: 0 auto 48px;
}
.form-card {
  background: #fff;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(20, 41, 74, 0.04);
  border: 1px solid rgba(20, 41, 74, 0.05);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.form-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(20, 41, 74, 0.08);
}
.form-icon {
  width: 54px;
  height: 54px;
  border-radius: 12px;
  background: rgba(47, 111, 176, 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #2f6fb0;
  margin-bottom: 24px;
}
.form-title {
  font-family: 'Playfair Display', serif;
  font-size: 22px;
  font-weight: 700;
  color: #14294a;
  margin-bottom: 12px;
}
.form-desc {
  font-family: 'Work Sans', sans-serif;
  font-size: 15px;
  color: #4b5a68;
  line-height: 1.6;
  margin-bottom: 30px;
}
.form-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #14294a;
  color: #fff;
  padding: 14px 28px;
  border-radius: 30px;
  text-decoration: none;
  font-family: 'Work Sans', sans-serif;
  font-size: 15px;
  font-weight: 600;
  transition: background 0.3s ease;
  margin-top: auto;
}
.form-btn:hover {
  background: #2f6fb0;
}
.form-btn svg {
  margin-right: 8px;
}
.adobe-reader-prompt {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  font-family: 'Work Sans', sans-serif;
  font-size: 15px;
  color: #4b5a68;
  line-height: 1.6;
  border-top: 1px solid #e7e0d3;
  padding-top: 30px;
}
.adobe-reader-link {
  color: #2f6fb0;
  font-weight: 600;
  text-decoration: underline;
}
@media (max-width: 991px) {
  .forms-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
}
@media (max-width: 767px) {
  .forms-grid {
    grid-template-columns: 1fr;
  }
  .form-card {
    padding: 30px;
  }
}
</style>

<!-- Intro Section -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Patient Consultation Room" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Patient Center</span>
      <h2 class="sp-split-heading">New Patient Forms</h2>
      <p class="sp-split-text" style="font-size: 17px; line-height: 1.8; color: #14294a; font-weight: 500;">
        We are happy to offer our patient forms online. Please feel free to print and fill them out at your convenience before your visit.
      </p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Forms Section -->
<div class="forms-section">
  <div class="container">
    <div class="forms-grid">
      <!-- Form 1 -->
      <div class="form-card">
        <div>
          <div class="form-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
              <polyline points="10 9 9 9 8 9"/>
            </svg>
          </div>
          <h3 class="form-title">New Patient Registration</h3>
          <p class="form-desc">Please download, print and complete this form before your first dental appointment.</p>
        </div>
        <a href="https://members.dentalwebservices.com/common/patient-forms/dental-health-history.pdf" class="form-btn" onclick="alert('Download started...'); return false;">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/>
          </svg>
          Download PDF
        </a>
      </div>

      <!-- Form 2 -->
      <div class="form-card">
        <div>
          <div class="form-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3 class="form-title">Notice of Privacy Practices</h3>
          <p class="form-desc">This notice describes how health information about you may be used and disclosed and how you can get access to this information.</p>
        </div>
        <a href="https://members.dentalwebservices.com/common/patient-forms/dental-hipaa-privacy-practices.pdf" class="form-btn" onclick="alert('Download started...'); return false;">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/>
          </svg>
          Download PDF
        </a>
      </div>

      <!-- Form 3 -->
      <div class="form-card">
        <div>
          <div class="form-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
              <polyline points="10 9 9 9 8 9"/>
            </svg>
          </div>
          <h3 class="form-title">HIPAA Form</h3>
          <p class="form-desc">Please download, print and complete this form before your first dental appointment. This form confirms that you read our Notice of Privacy Practices.</p>
        </div>
        <a href="https://members.dentalwebservices.com/common/patient-forms/dental-hipaa-acknowledgement.pdf" class="form-btn" onclick="alert('Download started...'); return false;">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/>
          </svg>
          Download PDF
        </a>
      </div>
    </div>

    <!-- Adobe reader prompt -->
    <div class="adobe-reader-prompt">
      <p>Includes an <a href="https://get.adobe.com/reader/" target="_blank" rel="noopener noreferrer" class="adobe-reader-link">Acrobat Reader</a> download prompt for patients unable to view PDFs.</p>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow">Ready for Your First Visit?</span>
    <h2 class="sp-cta-strip__title">Schedule Your Monroe Appointment Today</h2>
    <p class="sp-cta-strip__text">We strive to make every step of your dental journey as seamless and convenient as possible.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
