<?php
/**
 * head.php — shared <head> template
 *
 * Page-level variables expected (set before include):
 *   $pageTitle, $pageDescription, $canonicalUrl, $ogImage,
 *   $currentPage, $schemaMarkup, $useSwiper, $useTilt, $useTyped,
 *   $heroImagePreload (optional)
 */
$pageTitle       = $pageTitle       ?? 'Homerun Fabrication';
$pageDescription = $pageDescription ?? '';
$canonicalUrl    = $canonicalUrl    ?? '';
$ogImage         = $ogImage         ?? '';
$currentPage     = $currentPage     ?? '';
$schemaMarkup    = $schemaMarkup    ?? '';
$useSwiper       = $useSwiper       ?? false;
$useTilt         = $useTilt         ?? false;
$useTyped        = $useTyped        ?? false;
$heroImagePreload = $heroImagePreload ?? '';
$noindex         = $noindex         ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <?php if ($noindex): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>
  <?php if ($canonicalUrl): ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <?php endif; ?>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <?php if ($canonicalUrl): ?>
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <?php endif; ?>
  <?php if ($ogImage): ?>
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <?php endif; ?>
  <meta property="og:site_name" content="Homerun Fabrication">

  <!-- Preconnect / DNS prefetch -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://unpkg.com">
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://i.imgur.com">

  <!-- Google Fonts — Oswald + Source Sans 3 (industrial/construction pairing) -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Heading font preload (Oswald 600) -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752HT8Ghe4.woff2" crossorigin>

  <?php if ($heroImagePreload): ?>
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>">
  <?php endif; ?>

  <?php if ($useSwiper): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Stylesheet (cache-busted) -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=4">

  <!-- Favicon -->
  <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

  <!-- GA4 placeholder -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXX');
  </script> -->

  <?php if ($currentPage === 'home'): ?>
  <!-- GSC verification placeholder (homepage only) -->
  <!-- <meta name="google-site-verification" content="XXXXXXX"> -->
  <?php endif; ?>

  <?php if ($schemaMarkup): ?>
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>
</head>
<body>
  <a href="#main-content" class="skip-link">Skip to content</a>
