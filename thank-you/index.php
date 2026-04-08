<?php
$pageTitle        = "Thank You | Homerun Fabrication";
$pageDescription  = "Thank you for contacting Homerun Fabrication. We will be in touch shortly.";
$canonicalUrl     = "";
$ogImage          = "";
$currentPage      = "";
$noindex          = true;
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">
  <section class="error-page">
    <div class="container">
      <div class="error-icon"><i data-lucide="check-circle"></i></div>
      <h1>Thank You</h1>
      <p>We received your message and will be in touch shortly. If your project is time-sensitive, call us directly at <a href="tel:+18066717930" style="color: var(--accent); font-weight: 700;">(806) 671-7930</a>.</p>
      <div class="error-links">
        <a href="/" class="btn-primary"><i data-lucide="home"></i> Back to Home</a>
        <a href="/services" class="btn-secondary btn-dark">View Services</a>
      </div>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
