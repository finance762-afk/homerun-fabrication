<?php
/**
 * nav.php — fixed top navigation
 * Expects $currentPage to be set on each page.
 */
$currentPage = $currentPage ?? '';
function nav_active($page, $current) {
  return $page === $current ? ' aria-current="page"' : '';
}
?>
<nav class="navbar" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="/" class="nav-logo" aria-label="Homerun Fabrication — Home">
      <img src="https://i.imgur.com/oTQIMmj.png" alt="Homerun Fabrication" width="180" height="50">
    </a>

    <ul class="nav-menu" role="menubar">
      <li role="none">
        <a href="/" class="nav-link" role="menuitem"<?php echo nav_active('home', $currentPage); ?>>Home</a>
      </li>
      <li role="none" class="has-dropdown">
        <a href="/services" class="nav-link" role="menuitem" aria-haspopup="true"<?php echo nav_active('services', $currentPage); ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li role="none"><a href="/services/steel-buildings" role="menuitem">Steel Buildings</a></li>
          <li role="none"><a href="/services/barndominiums" role="menuitem">Barndominiums</a></li>
          <li role="none"><a href="/services/custom-fabrication" role="menuitem">Custom Fabrication</a></li>
          <li role="none"><a href="/services/pipe-fencing" role="menuitem">Pipe Fencing</a></li>
          <li role="none"><a href="/services/prototyping" role="menuitem">Prototyping</a></li>
          <li role="none"><a href="/services/industrial-design" role="menuitem">Industrial Design</a></li>
          <li role="none"><a href="/services/manufacturing-assembly" role="menuitem">Manufacturing &amp; Assembly</a></li>
        </ul>
      </li>
      <li role="none">
        <a href="/service-area" class="nav-link" role="menuitem"<?php echo nav_active('service-area', $currentPage); ?>>Service Area</a>
      </li>
      <li role="none">
        <a href="/about" class="nav-link" role="menuitem"<?php echo nav_active('about', $currentPage); ?>>About</a>
      </li>
      <li role="none">
        <a href="/contact" class="nav-link" role="menuitem"<?php echo nav_active('contact', $currentPage); ?>>Contact</a>
      </li>
    </ul>

    <a href="tel:+18066717930" class="nav-phone nav-phone-desktop">
      <i data-lucide="phone"></i>
      (806) 671-7930
    </a>

    <button class="hamburger" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>
