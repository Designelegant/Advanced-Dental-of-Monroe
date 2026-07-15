<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Kids Dentist, Childrens Dentist in ' . SITE_ADDRESS . '';
$page_description = 'Family dentist, Nyman Aydin, DMD, is accepting new dental patients of all ages at the ' . SITE_ADDRESS2 . ' dentist office.';
$pageBannerTitle  = 'Pediatric Dentistry';
$pageBreadcrumbs  = [
    ['label' => 'Home',                 'href' => '/'],
    ['label' => 'Dental Services',      'href' => 'dental-services-7'],
    ['label' => 'Pediatric Dentistry',  'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>



<!-- FAQ section -->
<div class="sp-faq-section">
  <div class="container">
    <h2 class="sp-faq-section__heading">Parent &amp; Patient FAQs</h2>
    <div class="sp-faq">

      <div class="sp-faq-item">
        <div class="sp-faq-question">Are baby teeth really that important to my child?</div>
        <div class="sp-faq-answer">Yes — they aid speech, chewing, and guide permanent tooth eruption. Keeping them healthy prevents early loss that can cause crowding and alignment issues later.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">What should I use to clean my baby's teeth?</div>
        <div class="sp-faq-answer">Use a soft infant toothbrush or cloth from birth. Once teeth appear, brush 1–2 times per day to remove bacteria and food particles.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">Should I use toothpaste with my child?</div>
        <div class="sp-faq-answer">Use fluoridated toothpaste once brushing starts — a smear under age 2, pea-size for ages 2–5, with supervision to prevent swallowing.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">When should I schedule my child's first dental appointment?</div>
        <div class="sp-faq-answer">Around 12 months or shortly after the first tooth erupts. Early visits build familiarity and allow us to catch any concerns early.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">What about bedtime bottles or bedtime nursing?</div>
        <div class="sp-faq-answer">Use water only in bedtime bottles. After nursing, rinse or massage the gums to remove milk residue that can cause early decay.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">What should I do if my child has a toothache?</div>
        <div class="sp-faq-answer">Warm salt water rinse, cold compress, and children's acetaminophen (no aspirin on gums). Call our office promptly for an appointment.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">Are thumb sucking and pacifier habits harmful?</div>
        <div class="sp-faq-answer">They usually resolve on their own. An appliance may be recommended if habits persist past age 3 to prevent bite or alignment problems.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">How often does my child need to see the dentist?</div>
        <div class="sp-faq-answer">Every six months as a general rule, though the interval is personalized based on the child's individual oral health needs.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">How do I make my child's diet safe for their teeth?</div>
        <div class="sp-faq-answer">Encourage a balanced diet, limit sugars and starches between meals, and avoid sticky sweets that cling to tooth surfaces.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">What are dental sealants and how do they work?</div>
        <div class="sp-faq-answer">Thin plastic coatings applied to the chewing surfaces of back teeth block food particles and bacteria from reaching the grooves where decay most often starts.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">How do I know if my child is getting enough fluoride?</div>
        <div class="sp-faq-answer">It depends on local water fluoride levels. Supplements may be prescribed; fluoride toothpaste is recommended for all children once brushing begins.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">What can I do to protect my child's teeth during sports?</div>
        <div class="sp-faq-answer">A custom-fitted mouth guard provides the best protection against sports-related dental injuries. We can fit one at your next visit.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">What if my child's permanent tooth is knocked out?</div>
        <div class="sp-faq-answer">Stay calm — handle the tooth by the crown only, try to reinsert it or store in milk, and come to our office immediately. Time is critical.</div>
      </div>

      <div class="sp-faq-item">
        <div class="sp-faq-question">How safe is dental digital radiography?</div>
        <div class="sp-faq-answer">Very safe — digital X-rays expose children to a fraction of the radiation of traditional film. Lead aprons are always used to minimize exposure further.</div>
      </div>

    </div>
  </div>
</div>

<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow eyebrow">Family-Friendly Care</span>
    <h2 class="sp-cta-strip__title">Every Age, Every Smile</h2>
    <p class="sp-cta-strip__text">From a child's first visit to a teenager's checkup, we are here for every stage of your family's dental health.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
