<?php
$pageTitle        = "Steel Buildings in Amarillo, TX | Homerun Fabrication";
$pageDescription  = "Engineered steel buildings in Amarillo, TX. Shops, barns, and commercial structures built for Texas Panhandle wind loads since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/steel-buildings";
$ogImage          = "https://i.imgur.com/lGNo1JA.jpeg";
$currentPage      = "services";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "https://i.imgur.com/lGNo1JA.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Steel Buildings", "item": "https://homerunfabrication.com/services/steel-buildings" }
      ]
    },
    {
      "@type": "Service",
      "name": "Steel Building Construction",
      "serviceType": "Steel Building Construction",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Homerun Fabrication",
        "telephone": "+1-806-671-7930",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "14001 White Tail Avenue",
          "addressLocality": "Amarillo",
          "addressRegion": "TX",
          "postalCode": "79124",
          "addressCountry": "US"
        }
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": { "@type": "GeoCoordinates", "latitude": 35.2220, "longitude": -101.8313 },
        "geoRadius": 128747
      },
      "description": "Ground-up steel building construction including shops, barns, agricultural storage, and commercial structures, engineered for Texas Panhandle wind loads."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a steel building cost in Amarillo, TX?",
          "acceptedAnswer": { "@type": "Answer", "text": "A turnkey 30x40 steel shop typically runs in the \$45,000 to \$75,000 range depending on eave height, door packages, insulation, and concrete work. Larger commercial spans push higher based on engineering loads, finish-out, and site prep. We provide a written quote after a site walk." }
        },
        {
          "@type": "Question",
          "name": "What wind load do you build steel buildings for in the Texas Panhandle?",
          "acceptedAnswer": { "@type": "Answer", "text": "We engineer steel buildings to meet or exceed the 115 to 120 mph wind load requirements common across the Amarillo region, with bracing, anchor bolts, and gauge thickness specified for the exposure category of each site. Open ag sites get heavier bracing than urban lots." }
        },
        {
          "@type": "Question",
          "name": "Do you pour the concrete pad for the steel building?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We coordinate site prep, pour the concrete pad with proper anchor bolt placement, and erect the steel from there. Slab thickness, rebar, and footings are sized to the building load and intended use." }
        }
      ]
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- HERO -->
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('https://i.imgur.com/lGNo1JA.jpeg');">
    <div class="container">
      <span class="page-eyebrow">Service &middot; Steel Buildings</span>
      <h1>Steel Buildings in Amarillo, TX</h1>
      <p class="page-sub">Engineered shops, barns, and commercial steel structures built ground-up for Texas Panhandle wind loads, weather, and hard use.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Get a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
      </div>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-band">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li aria-current="page">Steel Buildings</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST INTRO -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication builds engineered steel buildings in Amarillo, TX and across the Texas Panhandle. A steel building is a red-iron framed structure on a poured concrete pad &mdash; columns and rafters set with a crane, purlins and girts welded in, then enclosed with metal siding, rollup doors, and walk-in doors. Most Panhandle shops run 30x40 to 60x100 feet with eave heights from 12 to 18 feet, and turnkey costs typically range from \$45,000 for a basic shop up past \$200,000 for larger insulated commercial spans.</p>
        <p>Since 2008 we've erected hundreds of steel structures &mdash; agricultural barns, equipment shops, hay storage, commercial warehouses, and ranch facilities &mdash; engineered for the wind, weather, and workload they have to handle.</p>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 1 -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>What's included in a turnkey steel building?</h2>
        <p>A complete Homerun Fabrication steel building package includes site coordination, concrete pad with engineered footings and anchor bolts, red-iron columns and rafters set by crane, purlins and girts, R-panel metal siding and roofing, trim, gutters, rollup doors sized to your equipment, walk-in entry doors, and optional insulation, electrical rough-in, and interior framing. We can stop at the shell or carry it through to a finished interior &mdash; your call.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image right -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Built for the Way You Use It</h2>
          <span class="section-rule"></span>
          <p>A shop for working on diesel pickups needs different bay heights, door widths, and pad strength than a hay barn. We engineer every steel building to the actual job &mdash; not a catalog kit.</p>
          <ul class="check-list">
            <li>Eave heights from 12 ft for standard shops up to 20+ ft for equipment and lifts</li>
            <li>Bay layouts and column spacing sized to your trucks, tractors, or work flow</li>
            <li>Rollup door packages from 10x10 service doors to 16x16+ equipment access</li>
            <li>Concrete pad thickness and rebar engineered to the load you'll actually park on it</li>
            <li>Insulation packages from vapor barrier only up through fully insulated commercial</li>
          </ul>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/OcsS5C4.jpeg" alt="Completed Homerun Fabrication metal shop with tan siding and rollup door in Amarillo, TX" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image left -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="https://i.imgur.com/FFg8OXE.jpeg" alt="Interior of Homerun Fabrication steel building with red purlins and OSB subfloor" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Engineered for Panhandle Wind</h2>
          <span class="section-rule"></span>
          <p>Generic steel building plans drawn for the Gulf Coast or the Midwest don't survive long out here. The Texas Panhandle is a real wind exposure category &mdash; we've seen 70+ mph gusts roll across open pasture more than once a year.</p>
          <p>Every Homerun Fabrication steel building is detailed for 115 to 120 mph wind loads at minimum, with anchor bolt patterns, column gauge, knee bracing, and roof bracing all sized for the exposure category of your specific site. Open ag sites get heavier bracing than urban lots, and we specify accordingly &mdash; not by checking a box on a kit order form.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- APPLICATIONS -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Steel Building Applications</h2>
        <p class="section-sub">What we build most across the Texas Panhandle.</p>
      </div>
      <div class="app-grid">
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="wrench"></i></span>
          <div><h4>Equipment Shops</h4><p>Diesel bays, lifts, welding shops, and tool storage built for serious mechanical work.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="tractor"></i></span>
          <div><h4>Ag Barns &amp; Implement Sheds</h4><p>Open-bay storage for tractors, hay, and implements with the spans you actually need.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="warehouse"></i></span>
          <div><h4>Commercial Warehouses</h4><p>Insulated commercial steel buildings for storage, distribution, and light industrial use.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="cog"></i></span>
          <div><h4>Industrial &amp; Oilfield</h4><p>Equipment yards, pump rooms, and service buildings built for hard-use field operations.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="box"></i></span>
          <div><h4>Hay &amp; Feed Storage</h4><p>Tall-eave open-front structures sized for round bales, square bales, and feed inventory.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="home"></i></span>
          <div><h4>Shop-House Combos</h4><p>Combination shop and living quarters &mdash; the entry point to a full barndominium build.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Steel Building Construction Process</h2>
        <p class="section-sub">From raw dirt to a finished, locked structure.</p>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="map"></i></div>
          <h3>1. Site &amp; Pad</h3>
          <p>Site walk, layout, footings, and an engineered concrete pad with anchor bolts set to spec.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="construction"></i></div>
          <h3>2. Steel Erection</h3>
          <p>Red-iron columns and rafters set by crane, plumbed, braced, and bolted up tight.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="layers"></i></div>
          <h3>3. Purlins &amp; Sheeting</h3>
          <p>Purlins and girts welded in, then R-panel siding, roofing, trim, and gutters installed.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="check-circle"></i></div>
          <h3>4. Doors &amp; Handoff</h3>
          <p>Rollup and walk-in doors hung, optional insulation and electrical, final walkthrough.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>How long does a steel building take to put up?</h3>
        <p>Most 30x40 to 60x80 shops are weather-tight in 6 to 10 weeks from the day the pad is poured, assuming standard material lead times. Larger commercial spans, full insulation, and interior finish-out add time. Crane work for the actual steel erection on a typical shop is 2 to 4 days.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section>
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Ready to Price Your Steel Building?</h3>
          <p>Tell us the size, the use, and the site &mdash; we'll come walk it.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Get a Quote</a>
          <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Steel Building FAQs</h2>
        <p class="section-sub">Answers from real Panhandle steel building projects.</p>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>How much does a steel building cost in Amarillo, TX?</summary>
          <div class="faq-answer">A turnkey 30x40 steel shop typically runs in the $45,000 to $75,000 range depending on eave height, door packages, insulation, and concrete work. Larger commercial spans push higher based on engineering loads, finish-out, and site prep. We provide a written quote after a site walk.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>What wind load do you build steel buildings for in the Texas Panhandle?</summary>
          <div class="faq-answer">We engineer steel buildings to meet or exceed the 115 to 120 mph wind load requirements common across the Amarillo region, with bracing, anchor bolts, and gauge thickness specified for the exposure category of each site. Open ag sites get heavier bracing than urban lots.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Do you pour the concrete pad for the steel building?</summary>
          <div class="faq-answer">Yes. We coordinate site prep, pour the concrete pad with proper anchor bolt placement, and erect the steel from there. Slab thickness, rebar, and footings are sized to the building load and intended use.</div>
        </details>
      </div>

      <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- RELATED SERVICES -->
  <section>
    <div class="container">
      <div class="section-head left" data-animate>
        <span class="section-rule"></span>
        <h2>Related Services</h2>
      </div>
      <div class="related-services">
        <div class="related-card">
          <h4>Barndominiums</h4>
          <p>Take your steel building one step further with a fully finished interior, kitchen, and living quarters.</p>
          <a href="/services/barndominiums">Explore Barndominiums &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Custom Fabrication</h4>
          <p>Custom welding and one-off steel components fabricated in our Amarillo shop.</p>
          <a href="/services/custom-fabrication">Custom Fabrication &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Industrial Design</h4>
          <p>Engineered structural steel solutions for commercial and industrial operations.</p>
          <a href="/services/industrial-design">Industrial Design &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Build It Right the First Time</h2>
      <p>Engineered for Panhandle wind, built by the same crew that hands you the keys.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
