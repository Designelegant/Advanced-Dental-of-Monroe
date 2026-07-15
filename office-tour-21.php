<?php
require_once __DIR__ . '/config.php';
$useSubpageCSS    = true;
$pageTitle        = 'Dental Office Tour | Dentist Monroe Township | Advanced Dental of Monroe';
$page_description = 'Take a tour of our state-of-the-art dental office in Monroe Township, NJ.';
$pageBannerTitle  = 'Office Tour';
$pageBreadcrumbs  = [
    ['label' => 'Home',           'href' => '/'],
    ['label' => 'Patient Center', 'href' => 'index.php#patient-center'],
    ['label' => 'Office Tour',    'href' => ''],
];
require __DIR__ . '/header.php';
require __DIR__ . '/page-banner.php';
?>

<style>
.tour-gallery-section {
  padding: 80px 0;
  background: #fbf7f1;
  text-align: center;
}

.tour-gallery-title {
  font-family: 'Playfair Display', serif;
  font-size: 36px;
  font-weight: 700;
  color: #14294a;
  margin-bottom: 12px;
}

.tour-gallery-sub {
  font-family: 'Work Sans', sans-serif;
  font-size: 16px;
  color: #4b5a68;
  margin-bottom: 48px;
}

.tour-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  max-width: 1100px;
  margin: 0 auto;
}

.tour-card {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(20, 41, 74, 0.06);
  border: 1px solid rgba(20, 41, 74, 0.05);
  aspect-ratio: 4 / 3;
  cursor: pointer;
  background: #fff;
}

.tour-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.tour-card:hover img {
  transform: scale(1.06);
}

.tour-overlay {
  position: absolute;
  inset: 0;
  background: rgba(20, 41, 74, 0.4);
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.tour-card:hover .tour-overlay {
  opacity: 1;
}

.tour-zoom-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: #fff;
  color: #14294a;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  font-size: 20px;
}

/* Lightbox Modal */
.lightbox-modal {
  position: fixed;
  inset: 0;
  background: rgba(13, 29, 53, 0.95);
  z-index: 10000;
  display: none;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.lightbox-modal.is-active {
  display: flex;
  opacity: 1;
}

.lightbox-content {
  position: relative;
  max-width: 90vw;
  max-height: 80vh;
}

.lightbox-content img {
  max-width: 100%;
  max-height: 80vh;
  border-radius: 6px;
  box-shadow: 0 20px 50px rgba(0,0,0,0.5);
  object-fit: contain;
}

.lightbox-close {
  position: absolute;
  top: -50px;
  right: 0;
  background: transparent;
  border: none;
  color: #fff;
  font-size: 32px;
  cursor: pointer;
  line-height: 1;
}

.lightbox-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.15);
  border: none;
  color: #fff;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  transition: background 0.2s ease;
}

.lightbox-nav:hover {
  background: rgba(255,255,255,0.3);
}

.lightbox-prev {
  left: -70px;
}

.lightbox-next {
  right: -70px;
}

@media (max-width: 991px) {
  .tour-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    padding: 0 20px;
  }
}

@media (max-width: 767px) {
  .tour-gallery-section {
    padding: 60px 0;
  }
  .tour-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .lightbox-prev {
    left: -20px;
    top: auto;
    bottom: -60px;
    transform: none;
  }
  .lightbox-next {
    right: -20px;
    top: auto;
    bottom: -60px;
    transform: none;
  }
  .lightbox-close {
    top: -45px;
    right: 10px;
  }
}
</style>

<!-- Gallery Section -->
<div class="tour-gallery-section">
  <div class="container">
    <h2 class="tour-gallery-title">Our Office</h2>
    <p class="tour-gallery-sub">Click any photo below to expand and view our modern facilities</p>

    <div class="tour-grid">
      <!-- 6 interior office photos -->
      <div class="tour-card" onclick="openLightbox(0)">
        <img src="assets/images/office_img1.jpg" alt="Dental Office Tour Photo #1 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(1)">
        <img src="assets/images/office_img2.jpg" alt="Dental Office Tour Photo #2 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(2)">
        <img src="assets/images/office_img3.jpg" alt="Dental Office Tour Photo #3 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(3)">
        <img src="assets/images/office_img4.jpg" alt="Dental Office Tour Photo #4 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(4)">
        <img src="assets/images/office_img5.jpg" alt="Dental Office Tour Photo #5 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(5)">
        <img src="assets/images/office_img6.jpg" alt="Dental Office Tour Photo #6 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(6)">
        <img src="assets/images/office_img7.jpg" alt="Dental Office Tour Photo #7 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      <div class="tour-card" onclick="openLightbox(7)">
        <img src="assets/images/office_img8.jpg" alt="Dental Office Tour Photo #8 - Monroe Township, NJ" loading="lazy">
        <div class="tour-overlay">
          <div class="tour-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
            <path d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

<!-- Lightbox Modal Container -->
<div id="lightboxModal" class="lightbox-modal">
  <div class="lightbox-content">
    <button class="lightbox-close" onclick="closeLightbox()">×</button>
    <button class="lightbox-nav lightbox-prev" onclick="prevImage()">❮</button>
    <img id="lightboxImg" src="" alt="Office Tour Expanded View">
    <button class="lightbox-nav lightbox-next" onclick="nextImage()">❯</button>
  </div>
</div>

<!-- CTA strip -->
<section class="sp-cta-strip">
  <div class="container">
    <span class="sp-cta-strip__eyebrow">Visit Us In Person</span>
    <h2 class="sp-cta-strip__title">Ready to Experience Comfortable Care?</h2>
    <p class="sp-cta-strip__text">We are currently accepting new patients of all ages in Monroe Township and surrounding communities.</p>
    <div class="sp-cta-strip__actions">
      <a href="/survey.php" class="btn-banner-primary">Request Appointment</a>
      <a href="<?= htmlspecialchars(SITE_HREF) ?>" class="btn-banner-outline">Call <?= htmlspecialchars(SITE_PHONE) ?></a>
    </div>
  </div>
</section>

<script>
var images = [
  "assets/images/office_img1.jpg",
  "assets/images/office_img2.jpg",
  "assets/images/office_img3.jpg",
  "assets/images/office_img4.jpg",
  "assets/images/office_img5.jpg",
  "assets/images/office_img6.jpg",
  "assets/images/office_img7.jpg",
  "assets/images/office_img8.jpg"
];
var currentIndex = 0;

function openLightbox(index) {
  currentIndex = index;
  document.getElementById('lightboxImg').src = images[currentIndex];
  var modal = document.getElementById('lightboxModal');
  modal.classList.add('is-active');
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  var modal = document.getElementById('lightboxModal');
  modal.classList.remove('is-active');
  document.body.style.overflow = '';
}

function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  document.getElementById('lightboxImg').src = images[currentIndex];
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  document.getElementById('lightboxImg').src = images[currentIndex];
}

// Close on background click
document.getElementById('lightboxModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeLightbox();
  }
});

// Key bindings
document.addEventListener('keydown', function(e) {
  var modal = document.getElementById('lightboxModal');
  if (modal.classList.contains('is-active')) {
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') prevImage();
    if (e.key === 'ArrowRight') nextImage();
  }
});
</script>

<?php require __DIR__ . '/footer.php'; ?>
