/* ==========================================================================
   ANIMATIONS — IntersectionObserver scroll reveals + stat counters
   ========================================================================== */
(function () {
  'use strict';

  // Skip animations entirely if user prefers reduced motion
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion) {
    document.querySelectorAll('[data-animate]').forEach(el => el.classList.add('in-view'));
    document.querySelectorAll('[data-counter]').forEach(el => {
      el.textContent = el.getAttribute('data-counter');
    });
    return;
  }

  // ----- Scroll reveal observer -----
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;

        // Stagger grid children
        if (el.parentElement && (
          el.parentElement.classList.contains('grid-2') ||
          el.parentElement.classList.contains('grid-3') ||
          el.parentElement.classList.contains('grid-asym')
        )) {
          const siblings = Array.from(el.parentElement.children);
          const idx = siblings.indexOf(el);
          el.style.transitionDelay = Math.min(idx * 100, 400) + 'ms';
        }

        el.classList.add('in-view');
        revealObserver.unobserve(el);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('[data-animate]').forEach(el => revealObserver.observe(el));

  // ----- Stat counter -----
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const target = parseFloat(el.getAttribute('data-counter')) || 0;
      const duration = parseInt(el.getAttribute('data-duration') || '1800', 10);
      const suffix = el.getAttribute('data-suffix') || '';
      const start = performance.now();

      function tick(now) {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const value = Math.floor(target * eased);
        el.textContent = value.toLocaleString() + suffix;
        if (progress < 1) requestAnimationFrame(tick);
        else el.textContent = target.toLocaleString() + suffix;
      }
      requestAnimationFrame(tick);
      counterObserver.unobserve(el);
    });
  }, { threshold: 0.4 });

  document.querySelectorAll('[data-counter]').forEach(el => counterObserver.observe(el));
})();
