(function () {
  var toggle  = document.getElementById('navToggle');
  var nav     = document.getElementById('mobileNav');
  var overlay = document.getElementById('navOverlay');
  var close   = document.getElementById('navClose');

  function openNav() {
    nav.classList.add('is-open');
    overlay.classList.add('is-open');
    document.body.classList.add('nav-open');
    toggle.setAttribute('aria-expanded', 'true');
    nav.setAttribute('aria-hidden', 'false');
  }

  function closeNav() {
    nav.classList.remove('is-open');
    overlay.classList.remove('is-open');
    document.body.classList.remove('nav-open');
    toggle.setAttribute('aria-expanded', 'false');
    nav.setAttribute('aria-hidden', 'true');
  }

  toggle.addEventListener('click', openNav);
  close.addEventListener('click', closeNav);
  overlay.addEventListener('click', closeNav);

  nav.querySelectorAll('a').forEach(function (link) {
    if (!link.classList.contains('mobile-nav__child--parent')) {
      link.addEventListener('click', closeNav);
    }
  });

  // Mobile accordion toggles
  nav.querySelectorAll('.mobile-nav__accordion-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var panel = btn.nextElementSibling;
      var isOpen = btn.getAttribute('aria-expanded') === 'true';
      // Close all other panels
      nav.querySelectorAll('.mobile-nav__accordion-btn').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
        b.nextElementSibling.classList.remove('is-open');
      });
      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        panel.classList.add('is-open');
      }
    });
  });

  // FAQ Accordion toggles
  document.querySelectorAll('.sp-faq-question').forEach(function (question) {
    question.addEventListener('click', function () {
      var item = question.parentElement;
      item.classList.toggle('is-open');
    });
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });
})();
