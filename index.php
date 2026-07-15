<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Dentist Monroe Township, NJ 08831 | Nyman Aydin, DMD';
$page_description  = 'Dentist Nyman Aydin, DMD is accepting new dental patients in Monroe Township, NJ 08831. Call (848) 337-5042 to request an appointment.';
require __DIR__ . '/header.php';
?>

<!-- Hero -->
<section id="home" class="hero hero_banner_section">
  <img src="assets/images/office-1.jpg" alt="<?= htmlspecialchars(SITE_NAME) ?> reception area" class="hero__bg" />
  <div class="hero__overlay"></div>
  <div class="container">
    <div class="hero__content">
      <h1 class="hero__title h1">Family dentistry in Monroe Township, NJ</h1>
      <p class="hero__lead p-lead">From routine dental exams, dental X-rays, dental cleanings, filling cavities, teeth whitening, and minor dental surgery to more advanced procedures such dental implants, crowns, and other cosmetic and restorative dental procedures.</p>
      <div class="hero__actions">
        <a href="/survey.php" class="btn-hero-primary">Book Your Visit</a>
        <a href="#doctors" class="btn-hero-outline">Meet the Doctors</a>
      </div>
    </div>
  </div>
</section>

<!-- Trust strip -->
<section class="trust-strip padd_top60 padd_bottom60">
  <div class="container">
    <div class="trust-item">
      <div class="trust-item__icon">
        <!-- Family / people -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="8" cy="7" r="3"/>
          <path d="M3 21v-2a4 4 0 0 1 4-4h2a4 4 0 0 1 4 4v2"/>
          <circle cx="17" cy="8" r="2.5"/>
          <path d="M14.5 21v-1.5a3.5 3.5 0 0 1 3.5-3.5 3.5 3.5 0 0 1 3.5 3.5V21"/>
        </svg>
      </div>
      <span class="trust-item__title h5">Family-Friendly Care</span>
      <span class="trust-item__sub text-sub">Every age, every smile</span>
    </div>
    <div class="trust-item">
      <div class="trust-item__icon">
        <!-- Clock / same-day -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="12" cy="12" r="9"/>
          <polyline points="12 7 12 12 15 15"/>
        </svg>
      </div>
      <span class="trust-item__title h5">Same-Day Dentistry</span>
      <span class="trust-item__sub text-sub">Efficient, modern technology</span>
    </div>
    <div class="trust-item">
      <div class="trust-item__icon">
        <!-- Shield with checkmark / insurance -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M12 2l8 4v6c0 4.4-3.4 8.5-8 10C7.4 20.5 4 16.4 4 12V6l8-4z"/>
          <polyline points="9 12 11 14 15 10"/>
        </svg>
      </div>
      <span class="trust-item__title h5">Most Insurances Accepted</span>
      <span class="trust-item__sub text-sub">Plus CareCredit financing</span>
    </div>
    <div class="trust-item">
      <div class="trust-item__icon">
        <!-- User + plus / new patient -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <line x1="19" y1="8" x2="19" y2="14"/>
          <line x1="22" y1="11" x2="16" y2="11"/>
        </svg>
      </div>
      <span class="trust-item__title h5">New Patients Welcome</span>
      <span class="trust-item__sub text-sub">Same-week appointments</span>
    </div>
  </div>
</section>

<!-- Experience -->
<section class="experience padd_top padd_bottom">
  <div class="container">
    <div class="experience__text">
      <span class="section-eyebrow section-eyebrow--blue eyebrow">The Experience</span>
      <h2 class="section-title h2">A Practice That Feels Like Home</h2>
      <p class="section-body p-body">For over 20 years, <?= htmlspecialchars(SITE_NAME) ?> has combined comfortable, modern facilities with genuine, unhurried care. From your child's first cleaning to a parent's dental implant, our team takes the time to explain every step and put you at ease.</p>
      <a href="#services" class="text-link a-primary">Explore Our Services &rarr;</a>
    </div>
    <div class="experience__image-wrap">
      <img src="assets/images/office-6.jpg" alt="Treatment room at <?= htmlspecialchars(SITE_NAME) ?>" />
    </div>
  </div>
</section>

<!-- Services -->
<section id="services" class="services padd_top padd_bottom">
  <div class="container">
    <div class="section-header">
      <span class="section-eyebrow eyebrow">Our Services</span>
      <h2 class="section-title h2">Care for Every Stage of <em>Life</em></h2>
    </div>

    <div class="services__layout">

      <!-- Top row: featured card + 3 stacked cards -->
      <div class="services__top">

        <!-- Featured: Dental Implants -->
        <div class="svc-featured">
          <div class="svc-featured__watermark">ADM</div>
          <div class="svc-icon-ring">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M12 2C9 2 6.5 4.5 6.5 7.5c0 2 .7 3.8 1.3 5.7.5 1.7.7 3.2.7 4.8 0 1.1.9 2 2 2h3c1.1 0 2-.9 2-2 0-1.6.2-3.1.7-4.8.6-1.9 1.3-3.7 1.3-5.7C17.5 4.5 15 2 12 2z"/>
            </svg>
          </div>
          <div class="svc-featured__body">
            <h3 class="svc-featured__title h2">Dental Implants</h3>
            <p class="svc-featured__desc p-md">Permanent solutions for a lifetime of confidence â€” placed and restored in-house.</p>
          </div>
          <a href="#contact" class="svc-arrow-btn" aria-label="Learn more about dental implants">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </div>

        <!-- Right column: 3 stacked row cards -->
        <div class="services__right">
          <a href="#contact" class="svc-item">
            <div class="svc-icon-ring svc-icon-ring--sm">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 2l8 4v6c0 4.4-3.4 8.5-8 10C7.4 20.5 4 16.4 4 12V6l8-4z"/>
                <polyline points="9 12 11 14 15 10"/>
              </svg>
            </div>
            <div class="svc-item__body">
              <h3 class="svc-item__title eyebrow">Cleaning &amp; Prevention</h3>
              <p class="svc-item__desc p-xs">Healthy smiles start with regular care.</p>
            </div>
            <span class="svc-item__arrow" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </span>
          </a>

          <a href="#contact" class="svc-item">
            <div class="svc-icon-ring svc-icon-ring--sm">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 3l1.8 5.5H21l-5.8 4.2 2.2 6.8L12 15.8 6.6 19.5l2.2-6.8L3 8.5h7.2L12 3z"/>
              </svg>
            </div>
            <div class="svc-item__body">
              <h3 class="svc-item__title eyebrow">Cosmetic Procedures</h3>
              <p class="svc-item__desc p-xs">Whitening, veneers, and smile makeovers.</p>
            </div>
            <span class="svc-item__arrow" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </span>
          </a>

          <a href="#contact" class="svc-item">
            <div class="svc-icon-ring svc-icon-ring--sm">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M2 17L5 7l5 4 2-6 2 6 5-4 3 10H2z"/>
                <path d="M2 17h20"/>
              </svg>
            </div>
            <div class="svc-item__body">
              <h3 class="svc-item__title eyebrow">Restorative Procedures</h3>
              <p class="svc-item__desc p-xs">Crowns, bridges, and fillings done right.</p>
            </div>
            <span class="svc-item__arrow" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </span>
          </a>
        </div>
      </div>

      <!-- Bottom row: 2 cards -->
      <div class="services__bottom">
        <a href="#contact" class="svc-item">
          <div class="svc-icon-ring svc-icon-ring--sm">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="9"/>
              <polyline points="12 7 12 12 15 15"/>
            </svg>
          </div>
          <div class="svc-item__body">
            <h3 class="svc-item__title">Same-Day Dentistry</h3>
            <p class="svc-item__desc">Efficient care that fits your schedule.</p>
          </div>
          <span class="svc-item__arrow" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </span>
        </a>

        <a href="#contact" class="svc-item">
          <div class="svc-icon-ring svc-icon-ring--sm">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="10" r="8"/>
              <path d="M9 13.5s1 1.5 3 1.5 3-1.5 3-1.5"/>
              <circle cx="9.5" cy="8.5" r="1" fill="currentColor" stroke="none"/>
              <circle cx="14.5" cy="8.5" r="1" fill="currentColor" stroke="none"/>
            </svg>
          </div>
          <div class="svc-item__body">
            <h3 class="svc-item__title">Pediatric Dentistry</h3>
            <p class="svc-item__desc">Gentle first visits your kids will smile about.</p>
          </div>
          <span class="svc-item__arrow" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </span>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Doctors -->
<section id="doctors" class="doctors padd_top padd_bottom">
  <div class="container">
    <div class="section-header--wide">
      <span class="section-eyebrow section-eyebrow--blue eyebrow">Meet Your Dentists</span>
      <h2 class="section-title h2">A Team You Can Trust</h2>
      <p class="section-lead p-body">Committed to excellence, Dr. Aydin and Dr. Mossad bring decades of combined experience to every family they treat.</p>
    </div>
    <div class="doctors__grid">
      <div class="doctor-card">
        <a href="/dr-nyman-aydin-9"><img src="assets/images/dr-aydin.jpg" alt="Dr. Nyman Aydin" class="doctor-card__photo" /></a>
        <div class="doctor-card__info">
          <h3 class="doctor-card__name h4"><a href="/dr-nyman-aydin-9">Dr. Nyman Aydin</a></h3>
          <!-- <span class="doctor-card__specialty text-sub">General &amp; Restorative Dentistry</span> -->
        </div>
      </div>
      <div class="doctor-card">
        <a href="/dr-monica-mossad-17"><img src="assets/images/dr-mossad.jpg" alt="Dr. Monica Mossad" class="doctor-card__photo" /></a>
        <div class="doctor-card__info">
          <h3 class="doctor-card__name h4"><a href="/dr-monica-mossad-17">Dr. Monica Mossad</a></h3>
          <!-- <span class="doctor-card__specialty text-sub">Cosmetic &amp; Family Dentistry</span> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Reviews -->
<section id="reviews" class="reviews padd_top padd_bottom">
  <div class="container">
    <div class="reviews_inner_blk">
      <div class="reviews__inner">
        <span class="section-eyebrow reviews__eyebrow eyebrow">5-Star Care</span>
        <h2 class="reviews__title h2">Real Patient Experiences</h2>
        <p class="reviews__body p-body">For years, families throughout Monroe Township have trusted us for gentle, honest dental care. Read what our patients have to say.</p>
      </div>
      <div class="reviews-grid">
        <article class="rev reveal in">
          <div class="stars">
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
          </div>
          <p>"I cannot say enough wonderful things about Advanced Dental of Monroe and the incredible work they did on my implant. From start to finish, the entire process was painless, seamless, and stress free. The final result exceeded all of my expectations. My implant looks absolutely flawless. It blends perfectly with my natural teeth and veneers. The color, shape, and size are an exact match. Dr. Aydin and Dr. Mossad's attention to detail and level of craftsmanship are truly exceptional. If you're considering an implant or any dental work, I highly recommend Advanced Dental of Monroe. I couldn't be happier with my smile!"</p>

          <div class="by">
            <span class="av">E</span>
            <div><b>Erica M.</b><span>Google review</span></div>
          </div>
        </article>
        <article class="rev reveal in">
          <div class="stars">
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
          </div>
          <p>"I’ve been a patient of Dr. Aydin’s for several years. Probably one of the best dentists i’ve been to. He makes beautiful crowns—yep, in most circumstances you walk out same day with a perfectly fitted, perfectly matched crown, no annoying temporaries. He gives you a beautiful smile but, just as important, is dedicated to his patients’ complete dental health. The practice also has a great hygienist who provides painless deep cleaning and also is extremely knowledgeable about dental health. The staff is super—very accommodating and friendly. This is a group of just really nice people who are great at what they do. I’m planning to move early next year but will continue as a patient because Dr. Aydin is worth the drive. Highest recommendation. A+++"</p>

          <div class="by">
            <span class="av">L</span>
            <div><b>Lois G.</b><span>Google review</span></div>
          </div>
        </article>
        <article class="rev reveal in">
          <div class="stars">
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
            <svg viewBox="0 0 24 24"><path d="m12 2 3 6.5 7 .6-5.3 4.6 1.6 6.9L12 17.8 5.7 20.6l1.6-6.9L2 9.1l7-.6L12 2Z"></path></svg>
          </div>
          <p>"Today was my first visit and it was very good. The office staff are very nice. The hygienist Edwina was very nice, professional and efficient. Dr Aydin was great. I was in good hands and was welcomed as a new patient. Great experience!"</p>
          <div class="by">
            <span class="av">P</span>
            <div><b>Patricia P.</b><span>Google review</span></div>
          </div>
        </article>
      </div>

      <div class="reviews__actions">
        <a href="https://www.google.com/maps/place/Advanced+Dental+of+Monroe/@40.3597107,-74.386385,17z/data=!4m8!3m7!1s0x89c3d01bdb094dab:0xd02b5de31fd9ef03!8m2!3d40.3597107!4d-74.386385!9m1!1b1!16s%2Fg%2F1pp2vbtbc!5m1!1e4?hl=en&entry=ttu&g_ep=EgoyMDI2MDcxMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn-reviews-white">Read More Reviews</a>
        <a href="https://search.google.com/local/writereview?placeid=ChIJq00J2xvQw4kRA-_ZH-NdK9A" target="_blank" class="btn-reviews-outline">Leave a Review</a>
      </div>
    </div>
  </div>
</section>

<!-- Contact / Location -->
<section id="contact" class="contact padd_top padd_bottom">
  <div class="container">

    <!-- Map + Info card -->
    <div class="contact__body">

      <!-- Contact details -->
      <div class="contact__details-card">

        <!-- Section header -->
        <div class="contact__header">
          <div class="contact__eyebrow-wrap">
            <span class="contact__eyebrow-dash"></span>
            <span class="section-eyebrow eyebrow">Visit Us</span>
          </div>
          <h2 class="contact__heading h2">Find Us in Monroe Township.</h2>
          <p class="contact__subtext p-body">Convenient parking, easy access, and a team that's always happy to see you. Stop by for your free consultation â€” we'd love to meet you.</p>
        </div>

        <div class="contact__detail-item">
          <div class="contact__detail-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
          </div>
          <div class="contact__detail-body">
            <span class="contact__detail-label label-xs">Address</span>
            <a href="<?= htmlspecialchars(SITE_ADDRESS_HREF) ?>" target="_blank" rel="noopener" class="contact__detail-value p-md">
              <?= htmlspecialchars(SITE_ADDRESS1) ?><br><?= htmlspecialchars(SITE_ADDRESS2) ?>
            </a>
          </div>
        </div>

        <div class="contact__detail-item">
          <div class="contact__detail-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
          </div>
          <div class="contact__detail-body">
            <span class="contact__detail-label label-xs">Phone</span>
            <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="contact__detail-value p-md"><?= htmlspecialchars(SITE_PHONE) ?></a>
          </div>
        </div>

        <div class="contact__detail-item">
          <div class="contact__detail-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
          </div>
          <div class="contact__detail-body">
            <span class="contact__detail-label label-xs">Email</span>
            <a href="<?= htmlspecialchars(SITE_EMAIL_HREF) ?>" class="contact_email_value contact__detail-value p-md"><?= htmlspecialchars(SITE_EMAIL) ?></a>
          </div>
        </div>

        <div class="contact__detail-item">
          <div class="contact__detail-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="9"/>
              <polyline points="12 7 12 12 15 15"/>
            </svg>
          </div>
          <div class="contact__detail-body">
            <span class="contact__detail-label label-xs">Office Hours</span>
            <span class="contact__detail-value p-md"><?= htmlspecialchars(SITE_HOURS) ?></span>
            <span class="contact__detail-value"><?= htmlspecialchars(SITE_HOURS_SUB) ?></span>
          </div>
        </div>

        <a href="<?= htmlspecialchars(SITE_ADDRESS_HREF) ?>" target="_blank" rel="noopener" class="contact__directions-btn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <polygon points="3 11 22 2 13 21 11 13 3 11"/>
          </svg>
          Get Directions
        </a>

      </div>

      <!-- Contact form card -->
      <div class="contact__info-card">

        <div class="contact__card-eyebrow">
          <span class="contact__eyebrow-dash"></span>
          Get in Touch
        </div>

        <h3 class="contact__card-title h3">Send Us a Message</h3>
        <p class="contact__card-desc p-md">Have a question or want to book an appointment? Fill out the form and our team will get back to you shortly.</p>

        <form class="contact-form" id="contact-form" action="#" method="post" novalidate>
          <div class="contact-form__row">
            <div class="contact-form__field">
              <label class="contact-form__label label-xs" for="cf-first-name">First Name</label>
              <input class="contact-form__input p-body" type="text" id="cf-first-name" name="first_name" placeholder="First Name" required />
              <span class="contact-form__error lbl_cf_first_name" style="display:none;">First name is required.</span>
            </div>
            <div class="contact-form__field">
              <label class="contact-form__label label-xs" for="cf-last-name">Last Name</label>
              <input class="contact-form__input p-body" type="text" id="cf-last-name" name="last_name" placeholder="Last Name" required />
              <span class="contact-form__error lbl_cf_last_name" style="display:none;">Last name is required.</span>
            </div>
          </div>
          <div class="contact-form__field">
            <label class="contact-form__label label-xs" for="cf-email">Email</label>
            <input class="contact-form__input p-body" type="email" id="cf-email" name="email" placeholder="Email" required />
            <span class="contact-form__error lbl_cf_email" style="display:none;">Email address is required.</span>
            <span class="contact-form__error lbl_cf_email_pattern" style="display:none;">Please enter a valid email address.</span>
          </div>
          <div class="contact-form__field">
            <label class="contact-form__label label-xs" for="cf-phone">Phone Number</label>
            <input class="contact-form__input p-body" type="tel" id="cf-phone" name="phone" placeholder="(000) 000-0000" />
            <span class="contact-form__error lbl_cf_phone" style="display:none;">Phone number is required.</span>
            <span class="contact-form__error lbl_cf_phone_pattern" style="display:none;">Please enter a valid phone number.</span>
          </div>
          <div class="contact-form__field">
            <label class="contact-form__label label-xs" for="cf-message">Message</label>
            <textarea class="contact-form__input contact-form__textarea p-body" id="cf-message" name="message" rows="4" placeholder="How can we help you?" required></textarea>
            <span class="contact-form__error lbl_cf_message" style="display:none;">Message is required.</span>
          </div>
          <div class="contact-form__field">
              <div class="contact_form__field_col">
                  <div class="disclaimer-msg form-checkbox">
                      <input type="checkbox" name="i_agree" id="i_agree" value="">
                      <label for="i_agree">I Consent to Receive SMS Notifications, Alerts & Upcoming Details from Advanced Dental of Monroe. Message frequency may vary. Message & data rates may apply. Text HELP for assistance. You may reply STOP to unsubscribe at any time.</label>
                      <label class="label1 lbl_i_agree" style="display:none;">This is required.</label>
                  </div>
                  <div class="disclaimer-msg form-checkbox">
                      <input type="checkbox" name="i_agree_marketing_messages" id="i_agree_marketing_messages" value="">
                      <label for="i_agree_marketing_messages">I Consent to Receive Occasional Marketing SMS Messages from Advanced Dental of Monroe. Message frequency varies. Message and data rates may apply. Reply STOP to opt out at any time.</label>
                      <label class="label1 lbl_i_agree_marketing_messages" style="display:none;">This is required.</label>
                  </div>
                  <div class="disclaimer-msg">
                      <p><a href="/privacy-policy" target="_blank">Privacy Policy</a> | <a href="/terms-conditions" target="_blank">Terms of Service</a></p>

                  </div>
              </div>
          </div>
          <button type="button" id="cf-submit" class="contact-form__submit">
            Send Message
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </button>
        </form>

      </div>



    </div>
  </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".rev p").forEach(function (p) {

            if (p.scrollHeight > 108) {

                const toggle = document.createElement("span");
                toggle.className = "read-toggle";
                toggle.textContent = "Read More";

                p.insertAdjacentElement("afterend", toggle);

                toggle.addEventListener("click", function () {
                    p.classList.toggle("expanded");

                    toggle.textContent = p.classList.contains("expanded")
                        ? "Read Less"
                        : "Read More";
                });

            } else {
                p.style.maxHeight = "none";
            }

        });

    });
</script>

<?php require __DIR__ . '/footer.php'; ?>
