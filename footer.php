<?php require_once __DIR__ . '/config.php'; ?>

<div class="map_main_section">
  <div class="map_main_sec_container" style="line-height: 0;">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.2287089599563!2d-74.38885812349521!3d40.3594528591226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3d01bdb094dab%3A0xd02b5de31fd9ef03!2sAdvanced%20Dental%20of%20Monroe!5e0!3m2!1sen!2sin!4v1784007630371!5m2!1sen!2sin"
      width="100%" height="450px" style="border: none;" title="<?= htmlspecialchars(SITE_NAME) ?> location map"
      allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<!-- Footer -->
<footer id="location" class="site-footer">
  <div class="container">
    <div class="footer__grid">
      <div class="footer__brand">
        <img src="assets/images/logo-white.svg" alt="<?= htmlspecialchars(SITE_NAME) ?>" class="footer__logo" />
        <p class="footer__tagline">Committed to excellence in family, cosmetic, and restorative dentistry in Monroe Township, NJ.</p>
      </div>
      <div class="footer__col">
        <span class="footer__col-heading label-xs">Explore</span>
        <a href="/" class="a-muted">Home</a>
        <a href="index.php#doctors" class="a-muted">Meet Our Dentists</a>
        <a href="index.php#services" class="a-muted">Dental Services</a>
        <a href="index.php#reviews" class="a-muted">Reviews</a>
      </div>
      <div class="footer__col">
        <span class="footer__col-heading label-xs">Patient Center</span>
        <a href="office-tour-21" class="a-muted">Office Tour</a>
        <a href="new-patient-forms-15" class="a-muted">New Patient Forms</a>
        <a href="office-policies-20" class="a-muted">Office Policies</a>
        <a href="common-questions-15" class="a-muted">Common Questions</a>
        <a href="dental-links-18" class="a-muted">Dental Links</a>
      </div>
      <div class="footer__col">
        <span class="footer__col-heading label-xs">Visit Us</span>
        <span><?= nl2br(htmlspecialchars(SITE_ADDRESS)) ?></span>
        <span><?= htmlspecialchars(SITE_PHONE) ?></span>
        <span><?= nl2br(htmlspecialchars(str_replace(' · ', "\n", SITE_HOURS))) ?></span>
      </div>
    </div>
    <div class="footer__bottom">
      <span>&copy; <?= date('Y') ?> <?= htmlspecialchars(SITE_NAME) ?>. All rights reserved.</span>
      <span><a href="privacy-policy" style="color: #fff; text-decoration: none;">Privacy Policy</a> &middot; <a
          href="terms-conditions" style="color: #fff; text-decoration: none;">Terms & Conditions</a></span>
    </div>
  </div>
</footer>

<script src="assets/js/main.js" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" defer></script>
<script src="assets/js/custom.js" defer></script>
<script src="https://cdn.userway.org/widget.js" data-account="SOUVbI1rtE" defer></script>


</body>
</html>
