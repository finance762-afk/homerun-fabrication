<?php
$pageTitle        = "Service Area | Homerun Fabrication, Amarillo TX";
$pageDescription  = "80-mile radius from Amarillo, TX — Canyon, Hereford, Borger, Pampa, Dumas, and the Texas Panhandle. Steel buildings and barndominiums since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/service-area";
$ogImage          = "/assets/images/lgno1ja-480.webp";
$currentPage      = "service-area";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "/assets/images/lgno1ja-480.webp";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Service Area", "item": "https://homerunfabrication.com/service-area" }
      ]
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://homerunfabrication.com/#business",
      "name": "Homerun Fabrication",
      "telephone": "+1-806-671-7930",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "18771 19th Street",
        "addressLocality": "Amarillo",
        "addressRegion": "TX",
        "postalCode": "79124",
        "addressCountry": "US"
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": { "@type": "GeoCoordinates", "latitude": 35.2220, "longitude": -101.8313 },
        "geoRadius": 128747
      }
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- HERO -->
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('/assets/images/lgno1ja-480.webp');">
    <div class="container">
      <span class="page-eyebrow">Service Area &middot; Texas Panhandle</span>
      <h1>Service Area &mdash; Homerun Fabrication, Amarillo, TX</h1>
      <p class="page-sub">An 80-mile radius from Amarillo &mdash; covering the Texas Panhandle from Dumas to Tulia, Hereford to Pampa, and every working ranch and small town in between.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
      </div>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-band">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li aria-current="page">Service Area</li>
      </ol>
    </div>
  </div>

  <!-- INTRO -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication provides steel buildings, barndominiums, custom fabrication, and pipe fencing across an 80-mile radius from Amarillo, Texas. The service area covers the heart of the Texas Panhandle &mdash; from the cattle country south of Tulia, west through Hereford and Vega, north to Dumas, and east to Pampa and Borger. If you're inside that radius and you need something built in steel, we can be on your site for a walk and a quote.</p>
        <p>We've worked across every county in the region since 2008. The trip is part of the job out here.</p>
      </div>
    </div>
  </section>

  <!-- CITIES GRID -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Communities We Serve</h2>
        <p class="section-sub">Cities, towns, and rural communities within our 80-mile service radius.</p>
      </div>

      <div class="cities-grid">
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Amarillo, TX</h4>
          <p>Headquarters and home base. Steel buildings, barndominiums, and custom fabrication across the Amarillo metro and surrounding county.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Canyon, TX</h4>
          <p>South of Amarillo &mdash; barndominiums, ag steel buildings, and pipe fencing for ranches and rural homesites in the Palo Duro region.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Hereford, TX</h4>
          <p>West to Hereford for cattle facilities, working pens, and steel barns serving one of the Panhandle's biggest cattle communities.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Borger, TX</h4>
          <p>Northeast to Borger for industrial and oilfield steel work, equipment shops, and commercial fabrication.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Pampa, TX</h4>
          <p>East to Pampa for ag buildings, shops, and custom welding for ranching and oilfield service operations.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Dumas, TX</h4>
          <p>North to Dumas for steel buildings, equipment storage, and barndominium builds in Moore County.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Tulia, TX</h4>
          <p>South to Tulia and Swisher County for shops, hay storage, and pipe fencing for working cattle outfits.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Claude, TX</h4>
          <p>East of Amarillo to Claude and Armstrong County &mdash; ranch buildings, pens, and rural barndominium builds.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Vega, TX</h4>
          <p>West to Vega for steel ag buildings, equipment shops, and custom rural construction in Oldham County.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Bushland, TX</h4>
          <p>Just west of Amarillo &mdash; rural homesites, shops, and barndominium builds throughout the Bushland area.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Wildorado, TX</h4>
          <p>Further west on I-40 to Wildorado for ranch buildings, ag fabrication, and steel structures in Oldham County.</p>
        </div>
        <div class="city-card" data-animate>
          <h4><i data-lucide="map-pin"></i> Surrounding Communities</h4>
          <p>Plus all the smaller towns, ranches, and rural addresses inside the 80-mile radius. If you're not sure, call &mdash; we probably get out your way already.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES AVAILABLE -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Services Available Throughout the Service Area</h2>
        <p class="section-sub">Every Homerun Fabrication service is available across the full 80-mile radius.</p>
      </div>

      <div class="services-inline" data-animate>
        <a href="/services/steel-buildings"><i data-lucide="building-2"></i> Steel Buildings</a>
        <a href="/services/barndominiums"><i data-lucide="home"></i> Barndominiums</a>
        <a href="/services/custom-fabrication"><i data-lucide="wrench"></i> Custom Fabrication</a>
        <a href="/services/pipe-fencing"><i data-lucide="fence"></i> Pipe Fencing</a>
        <a href="/services/prototyping"><i data-lucide="lightbulb"></i> Prototyping</a>
        <a href="/services/industrial-design"><i data-lucide="drafting-compass"></i> Industrial Design</a>
        <a href="/services/manufacturing-assembly"><i data-lucide="cog"></i> Manufacturing &amp; Assembly</a>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section class="bg-alt">
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Outside the Radius?</h3>
          <p>Call us anyway &mdash; we'll let you know if we can make the trip.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Contact Us</a>
          <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
        </div>
      </div>
    </div>
  </section>

  <!-- MAP -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Service Area Map</h2>
        <p class="section-sub">Centered on Amarillo, TX 79124 &mdash; 80-mile radius across the Texas Panhandle.</p>
      </div>
      <div class="map-embed" data-animate>
        <iframe
          src="https://www.google.com/maps?q=Amarillo,+TX+79124&z=8&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Homerun Fabrication service area centered on Amarillo, TX"></iframe>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Ready to Build in the Panhandle?</h2>
      <p>From Amarillo out to every working ranch and small town in our 80-mile radius &mdash; we're ready to come walk your site.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
