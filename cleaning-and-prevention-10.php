<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Dental Exams in Monroe Township, NJ | Teeth Cleaning in Monroe Township, NJ';
$page_description = 'At our dental office in Monroe Township, NJ, we provide regular dental cleanings & exams, brushing, flossing, mouth rinses, and gum disease treatment, so you can have the best oral health.';
$pageBannerTitle  = 'Cleaning & Prevention';
$pageBreadcrumbs  = [
    ['label' => 'Home',                  'href' => '/'],
    ['label' => 'Dental Services',       'href' => 'dental-services-7'],
    ['label' => 'Cleaning & Prevention', 'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<style>
/* Guarantee consistent top padding for all split-sections on this page */
.sp-split-section {
  padding-top: 96px !important;
}
@media (max-width: 767px) {
  .sp-split-section {
    padding-top: 64px !important;
  }
}
</style>

<!-- Intro Section (1st Image) -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-1.jpg" alt="Cleaning &amp; Prevention Monroe Township" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Prevention First</span>
      <h2 class="sp-split-heading">Cleaning &amp; Prevention</h2>
      <p class="sp-split-text" >
        Prevention and early detection are the key to avoiding tooth decay and gum disease. A good home regimen, in addition to regular cleanings and exams, can prevent many expensive dental treatments. Prevention starts with controlling plaque, a colorless bacteria that sticks to the surface of your teeth, and calculus, a harder mineral deposit. These are the main sources of decay and periodontal disease. By maintaining a proper routine of daily hygiene, you can prevent most oral disease. Our hygienists are available to assist you with your hygiene and management of your gums.
      </p>
      <a href="/survey.php" class="sp-split-cta">Request an Appointment →</a>
    </div>
  </div>
</div>

<!-- Cleanings Section (2nd Image) -->
<div class="sp-split-section sp-split-section--alt">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Professional Dental Cleaning" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Professional Care</span>
      <h2 class="sp-split-heading">Cleanings</h2>
      <p class="sp-split-text">
        Regular dental cleanings, performed by a registered dental hygienist, are a crucial part of preventive dental care. By removing plaque and tartar, your oral health is enhanced and your risk of gingivitis and periodontal disease are reduced.
      </p>
      <p class="sp-split-text">
        Your dental hygienist will utilize manual instruments to remove moderate plaque and tartar buildup, or an ultrasonic device to scale away heavier buildup. The cleaning is finished with polishing, a pleasant procedure that cleans the surface of teeth, removes stains, and leaves the mouth feeling clean and refreshed.
      </p>
      <a href="/survey.php" class="sp-split-cta">Schedule a Cleaning →</a>
    </div>
  </div>
</div>

<!-- Exams Section (3rd Image) -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="Comprehensive Dental Exam" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Early Detection</span>
      <h2 class="sp-split-heading">Exams</h2>
      <p class="sp-split-text">
        No matter how diligent you are in your home dental care regimen, you should still get a dental exam and cleaning at least twice per year. The importance of regular dental exams cannot be overemphasized - dental exams are the cornerstone of good dental health. In particular, regular checkups are essential for early detection of more serious problems. Early detection makes treatment easier, less expensive and more successful and effective. During your dental exam, our dentist will perform the following routine checks:
      </p>
      <ul class="sp-split-list" style="margin-top: 15px;">
        <li>Examine and assess gum health; check for gum disease</li>
        <li>Diagnose any existing tooth decay</li>
        <li>When indicated, take and analyze x-rays, which may reveal decay, bone loss, abscesses, tumors, cysts, and other problems</li>
        <li>Screen for the presence of oral cancer</li>
        <li>Verify the stability of any existing fillings or other restorations</li>
        <li>Inform you of all findings and make treatment recommendations</li>
      </ul>
    </div>
  </div>
</div>

<!-- Home Care Habits (sp-features Grid with 3 Cards) -->
<div class="sp-features ">
  <div class="container">
    <div class="sp-features__header">
      <span class="sp-features__eyebrow">Hygiene Habits</span>
      <h2 class="sp-features__heading">Daily Home Care</h2>
    </div>
    <div class="sp-icon-grid sp-icon-grid--3">
      <!-- Brushing Card -->
      <div class="sp-icon-card">
        <div class="sp-icon-card__icon" style="color: #2f6fb0;">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="5"/>
            <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
          </svg>
        </div>
        <h3 class="sp-icon-card__title">Brushing</h3>
        <p class="sp-icon-card__text">
          As damaging as plaque can be, it is easily removed by mechanical brushing. Plaque deposits build up on the teeth fairly quickly after eating and drinking, and if they are not brushed away at least twice a day, they can lead to tooth decay and periodontal disease. It takes just one day for bacteria to build up enough to make your mouth susceptible to disease. If plaque is not removed, it hardens and becomes calculus (tartar). Calculus cannot be removed with regular brushing. Your hygienist has special instruments designed to remove tartar.
        </p>
      </div>

      <!-- Flossing Card -->
      <div class="sp-icon-card">
        <div class="sp-icon-card__icon" style="color: #2f6fb0;">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M12 2v20M7 6c0 3 10 3 10 0M7 18c0-3 10-3 10 0"/>
          </svg>
        </div>
        <h3 class="sp-icon-card__title">Flossing</h3>
        <p class="sp-icon-card__text">
          Daily flossing is an effective way to clean teeth where regular brushing can't reach. To floss properly, take 18" of dental floss, wrap it around the middle finger of each hand, and pinch it between your thumb and index finger. Pull the floss taut, then slide it gently between each tooth and under the gum line. Slide the floss up and down the side of each tooth to remove plaque buildup. Be sure to use a clean section of floss as you move from tooth to tooth.
        </p>
      </div>

      <!-- Mouth Rinses Card -->
      <div class="sp-icon-card">
        <div class="sp-icon-card__icon" style="color: #2f6fb0;">
          <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/>
          </svg>
        </div>
        <h3 class="sp-icon-card__title">Mouth Rinses</h3>
        <p class="sp-icon-card__text">
          Over-the-counter mouth rinses can help to fight bad breath, remove loose food particles after brushing, and freshen the mouth. However, mouth rinses are never a substitute for brushing, flossing, or regular dental examinations, and may disguise warning signs of periodontal disease.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Periodontal Disease Section (4th Image) -->
<div class="sp-split-section">
  <div class="sp-split-row">
    <div class="sp-split-image">
      <img src="assets/images/office-5.jpg" alt="Periodontal Disease Diagnosis Monroe Township" loading="lazy">
    </div>
    <div class="sp-split-body sp-split-body--navy">
      <span class="sp-split-tag">Gum Health</span>
      <h2 class="sp-split-heading">Periodontal Disease (Gum Disease)</h2>
      
      <div style="display:flex; flex-direction:column; gap:24px; margin-top:20px;">
        <div>
          <h3 class="sp-split-subheading" style="color:#9dc0e8; margin-bottom:6px; font-size:17.5px;">Gingivitis</h3>
          <p class="sp-split-text" style="font-size:15px; line-height:1.7;">
            Gingivitis is the early stages of periodontal disease, when only the soft tissues of the mouth are affected. Plaque buildup leads to tartar and bacteria below the gumline, which leads to inflamed, irritated, or bleeding gums. The good news is, gingivitis is reversible. A good professional cleaning, followed by regular brushing, flossing, and checkups, restores gums to good health by removing plaque and bacteria.
          </p>
        </div>
        
        <div>
          <h3 class="sp-split-subheading" style="color:#9dc0e8; margin-bottom:6px; font-size:17.5px;">Periodontitis</h3>
          <p class="sp-split-text" style="font-size:15px; line-height:1.7;">
            Periodontitis is marked by the breakdown of structures that surround, secure, and support the teeth. These structures include the bone, gums, and fibers which anchor the teeth to the gums. Periodontal disease is the number one cause of tooth loss in adults. Though bone that has been resorbed due to perio disease will not grow back, aggressive treatment and impeccable home care will keep it from getting worse.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Periodontal Diagnosis & Treatments Section (5th Image, Alt Background, Reversed) -->
<div class="sp-split-section ">
  <div class="sp-split-row sp-split-row--reverse">
    <div class="sp-split-image">
      <img src="assets/images/office-6.jpg" alt="Periodontal Disease Treatment Monroe Township" loading="lazy">
    </div>
    <div class="sp-split-body">
      <span class="sp-split-tag">Clinical Procedures</span>
      <h2 class="sp-split-heading">Diagnosis &amp; Treatments</h2>
      
      <div style="display:flex; flex-direction:column; gap:24px; margin-top:20px;">
        <div>
          <h3 class="sp-split-subheading" style="color:#14294a; margin-bottom:6px; font-size:17.5px; font-weight:700;">Diagnosis</h3>
          <p class="sp-split-text" style="font-size:15px; line-height:1.7;">
            Early signs of gum disease include redness, swelling, or inflammation around the gumline. If these warning signs appear, your dentist will check for calculus (tartar) below the gumline. Your dentist or hygienist may use a tool called a probe to test gums for bleeding and measure periodontal pockets. X-rays will be used to evaluate the bone level around your teeth. Though the main cause of gum disease is lack of oral hygiene, contributing factors include heavy smoking and diabetes.
          </p>
        </div>
        
        <div>
          <h3 class="sp-split-subheading" style="color:#14294a; margin-bottom:6px; font-size:17.5px; font-weight:700;">Treatments</h3>
          <p class="sp-split-text" style="font-size:15px; line-height:1.7;">
            Gingivitis is easily treated with a professional cleaning (prophy) and proper home care to remove the plaque before it becomes calculus. Contributing factors may be dry mouth (due to medications or medical conditions), braces, mouth-breathing, and many more. Periodontitis will require more aggressive treatment — a deep cleaning (scaling and root planing) may be recommended, broken into 2+ visits with anesthesia for comfort. A slow-released antibiotic and prescription mouth rinses may also be used. Perio patients frequently require cleanings and check-ups every 3-4 months.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Schedule Your Consultation Today</span>
    <h2 class="sp-cta-strip__title">Ready to Enhance Your Oral Health?</h2>
    <p class="sp-cta-strip__text">Our team is committed to delivering gentle, state-of-the-art care to keep your smile healthy and bright.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
