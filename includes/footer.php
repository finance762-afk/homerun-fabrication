<?php
/**
 * footer.php — site footer + script loaders
 * Honors $useSwiper, $useTilt, $useTyped flags set on each page.
 */
$useSwiper = $useSwiper ?? false;
$useTilt   = $useTilt   ?? false;
$useTyped  = $useTyped  ?? false;
?>
<footer class="site-footer">
  <div class="footer-grid">
    <div>
      <h4>Homerun Fabrication</h4>
      <p>
        Homerun Fabrication is a metal fabrication company based in Amarillo, Texas, serving the Texas Panhandle. We specialize in steel buildings, barndominiums, custom fabrication, pipe fencing, and industrial design. Licensed and insured.
      </p>
      <p style="margin-top: var(--space-md);">
        18771 19th Street<br>
        Amarillo, TX 79124<br>
        <a href="tel:+18066717930">(806) 671-7930</a><br>
        <a href="mailto:coreyhomer@att.net">coreyhomer@att.net</a><br>
        Hours: By Appointment
      </p>
    </div>

    <div>
      <h4>Explore</h4>
      <a href="/">Home</a>
      <a href="/services">Services</a>
      <a href="/service-area">Service Area</a>
      <a href="/about">About</a>
      <a href="/contact">Contact</a>
    </div>

    <div>
      <h4>Services</h4>
      <a href="/services/steel-buildings">Steel Buildings</a>
      <a href="/services/barndominiums">Barndominiums</a>
      <a href="/services/custom-fabrication">Custom Fabrication</a>
      <a href="/services/pipe-fencing">Pipe Fencing</a>
      <a href="/services/prototyping">Prototyping</a>
      <a href="/services/industrial-design">Industrial Design</a>
      <a href="/services/manufacturing-assembly">Manufacturing &amp; Assembly</a>
    </div>
  </div>

  <div class="footer-bottom">
    <div>&copy; <?php echo date('Y'); ?> Homerun Fabrication. All Rights Reserved.</div>
    <div><a href="https://www.pageoneinsights.com" target="_blank" rel="dofollow">Web Design &amp; Hosting by Page One Insights, LLC</a></div>
  </div>
</footer>

<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="arrow-up"></i>
</button>

<!-- Lucide Icons — MUST load before animations.js -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>

<?php if ($useSwiper): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>
<?php if ($useTilt): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
<?php endif; ?>
<?php if ($useTyped): ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
<?php endif; ?>

<!-- Site Scripts -->
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>
</body>
</html>
