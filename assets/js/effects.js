/* ==========================================================================
   EFFECTS — navbar, mobile menu, ripple, back-to-top, GA4 stubs
   ========================================================================== */
(function () {
  'use strict';

  // ----- Navbar scroll class -----
  const navbar = document.querySelector('.navbar');
  function onScroll() {
    if (!navbar) return;
    if (window.scrollY > 80) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ----- Mobile menu toggle -----
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');
  let overlay = document.querySelector('.nav-overlay');
  if (!overlay) {
    overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    document.body.appendChild(overlay);
  }

  function closeMenu() {
    if (!hamburger || !navMenu) return;
    hamburger.classList.remove('active');
    navMenu.classList.remove('open');
    overlay.classList.remove('active');
    document.body.classList.remove('menu-open');
    hamburger.setAttribute('aria-expanded', 'false');
  }
  function openMenu() {
    if (!hamburger || !navMenu) return;
    hamburger.classList.add('active');
    navMenu.classList.add('open');
    overlay.classList.add('active');
    document.body.classList.add('menu-open');
    hamburger.setAttribute('aria-expanded', 'true');
  }

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
      if (navMenu.classList.contains('open')) closeMenu();
      else openMenu();
    });
    navMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
    overlay.addEventListener('click', closeMenu);
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) closeMenu();
    });
  }

  // ----- Ripple effect on .btn-primary -----
  document.querySelectorAll('.btn-primary').forEach(btn => {
    btn.addEventListener('click', function (e) {
      const rect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      ripple.className = 'ripple';
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
      ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
      this.appendChild(ripple);
      setTimeout(() => ripple.remove(), 600);
    });
  });

  // ----- Ticker pause-on-hover handled by CSS, but ensure track is duplicated -----
  document.querySelectorAll('.ticker-strip .ticker-track').forEach(track => {
    if (track.children.length === 1) {
      track.appendChild(track.children[0].cloneNode(true));
    }
  });

  // ----- Back to top -----
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) backToTop.classList.add('visible');
      else backToTop.classList.remove('visible');
    }, { passive: true });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ----- GA4 conversion stubs -----
  document.querySelectorAll('a[href^="tel:"]').forEach(el => {
    el.addEventListener('click', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'phone_call', { event_category: 'contact', event_label: el.href });
      }
    });
  });

  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', { event_category: 'contact', event_label: window.location.pathname });
      }
    });
  });
})();
