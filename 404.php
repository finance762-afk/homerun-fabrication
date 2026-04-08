<?php
http_response_code(404);
$pageTitle        = "Page Not Found | Homerun Fabrication";
$pageDescription  = "The page you're looking for doesn't exist or has been moved.";
$canonicalUrl     = "";
$ogImage          = "";
$currentPage      = "";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">
  <section class="error-page">
    <div class="container">
      <div class="error-icon"><i data-lucide="alert-triangle"></i></div>
      <span class="error-code">404</span>
      <h1>Page Not Found</h1>
      <p>The page you're looking for doesn't exist or has been moved. Try one of the links below to get back on track.</p>
      <div class="error-links">
        <a href="/" class="btn-primary"><i data-lucide="home"></i> Back to Home</a>
        <a href="/services" class="btn-secondary btn-dark">View Services</a>
        <a href="/contact" class="btn-secondary btn-dark">Contact Us</a>
      </div>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
