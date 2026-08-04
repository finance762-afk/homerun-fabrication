<?php
$pageTitle        = "Manufacturing & Assembly | Amarillo, TX | Homerun Fab";
$pageDescription  = "Production manufacturing and contract assembly in Amarillo, TX. Repeat batch runs and weldments for ag and industrial customers since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/manufacturing-assembly";
$ogImage          = "/assets/images/lgno1ja-480.webp";
$currentPage      = "services";
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
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Manufacturing & Assembly", "item": "https://homerunfabrication.com/services/manufacturing-assembly" }
      ]
    },
    {
      "@type": "Service",
      "name": "Manufacturing and Assembly Services",
      "serviceType": "Contract Steel Manufacturing and Assembly",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Homerun Fabrication",
        "telephone": "+1-806-671-7930",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "18771 19th Street",
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
      "description": "Production manufacturing, batch fabrication, and assembly services for steel components and weldments serving ag, commercial, and industrial customers."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What batch sizes do you handle for production runs?",
          "acceptedAnswer": { "@type": "Answer", "text": "We've handled batch runs from a dozen units up through several hundred parts at a time. The right batch size depends on the part complexity, the available shop floor, and the customer's delivery schedule. We're happy to start with a pilot batch to confirm the process before committing to volume." }
        },
        {
          "@type": "Question",
          "name": "Do you assemble parts you didn't manufacture?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We offer contract assembly services for customers who supply their own components and need a shop with welding, fabrication, and assembly capacity to put them together. Bring us the parts and the assembly drawings." }
        },
        {
          "@type": "Question",
          "name": "Can you scale a prototype into a production run?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — and that's actually one of our strengths. Because we have prototype, custom fabrication, and production capacity in the same shop, we can take a one-off prototype, refine it into a production-ready design, and run the batch without handing the project off to another vendor." }
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('/assets/images/lgno1ja-480.webp');">
    <div class="container">
      <span class="page-eyebrow">Service &middot; Manufacturing &amp; Assembly</span>
      <h1>Manufacturing &amp; Assembly in Amarillo, TX</h1>
      <p class="page-sub">Production-run fabrication and contract assembly services for steel components &mdash; consistent batch after batch, built in our Amarillo shop.</p>
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
        <li aria-current="page">Manufacturing &amp; Assembly</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication provides production manufacturing and contract assembly services in Amarillo, TX and across the Texas Panhandle. Manufacturing and assembly is what you need when a single custom part needs to become twelve, or a hundred, or a thousand &mdash; all built to the same spec, all built right. For steel components and weldments, that means a shop with the welding capacity, material handling, and assembly space to run repeatable production without the part-to-part variation that breaks downstream tolerances.</p>
        <p>We run production batches and contract assembly for ag suppliers, commercial customers, and industrial operators since 2008 &mdash; the same shop that builds steel buildings runs the fabrication line.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image right -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Production Capacity, Without the Vendor Hassle</h2>
          <span class="section-rule"></span>
          <p>Most steel manufacturing customers in West Texas are stuck choosing between a one-man weld shop that can't run volume and a large industrial vendor that won't take orders under a certain size. Homerun Fabrication sits in the middle: we have the shop space, the welding equipment, and the crew to run production batches, but we're small enough to take orders that don't justify a national vendor.</p>
          <p>That means consistent parts, written quotes, real delivery dates, and a phone you can call when you need to talk to the person actually building your work.</p>
        </div>
        <div class="split-image">
          <img src="/assets/images/interior-of-homerun-fabrication-production-shop-960.webp" srcset="/assets/images/interior-of-homerun-fabrication-production-shop-480.webp 480w, /assets/images/interior-of-homerun-fabrication-production-shop-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Interior of Homerun Fabrication production shop with corrugated panel walls and red columns" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>What does a production run look like?</h2>
        <p>A typical production job starts with the customer's drawings or a prototype we built earlier. We quote unit cost and lead time, set up the fabrication and welding stations for that part, and run the batch with consistent fixturing so the parts come out matching one another. From there it's quality check, optional finishing or paint, packaging, and either pickup at the shop or delivery within our service area.</p>
      </div>
    </div>
  </section>

  <!-- CAPABILITIES GRID -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Manufacturing Capabilities</h2>
        <p class="section-sub">What we can run in batch.</p>
      </div>
      <div class="app-grid">
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="box"></i></span>
          <div><h4>Repeat Weldments</h4><p>Multi-part welded assemblies built to consistent spec across batch runs.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="package-2"></i></span>
          <div><h4>Steel Components</h4><p>Brackets, mounts, frames, and structural components in repeatable production volume.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="cog"></i></span>
          <div><h4>Contract Assembly</h4><p>Assembly of customer-supplied parts with welding and fabrication capacity in-house.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="layers"></i></span>
          <div><h4>Pre-Production Pilots</h4><p>Pilot batches to confirm tooling, fixturing, and process before scaling to volume.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="repeat"></i></span>
          <div><h4>Recurring Orders</h4><p>Standing orders for parts on a regular schedule, sized to your inventory needs.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="truck"></i></span>
          <div><h4>Delivery in Service Area</h4><p>Pickup at the shop or delivery within our 80-mile service radius from Amarillo.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image left -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="/assets/images/side-of-homerun-fabrication-metal-building-showi-960.webp" srcset="/assets/images/side-of-homerun-fabrication-metal-building-showi-480.webp 480w, /assets/images/side-of-homerun-fabrication-metal-building-showi-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Side of Homerun Fabrication metal building showing utility setup and equipment" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>From Prototype to Production</h2>
          <span class="section-rule"></span>
          <p>One of the practical advantages of running a shop that does prototyping, custom fabrication, and production under one roof is the handoff &mdash; or rather, the lack of one. A prototype we built last month doesn't get shipped to a different vendor when it's time to scale. The same crew that ironed out the weld sequence on the first piece runs the production batch on the next fifty.</p>
          <p>That continuity means fewer surprises, faster ramp-up, and parts that come out of the production run looking like the prototype that worked.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Production Run Process</h2>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="file-text"></i></div>
          <h3>1. Drawings &amp; Quote</h3>
          <p>Customer drawings or prototype, written unit cost, and a delivery schedule.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="settings-2"></i></div>
          <h3>2. Fixture &amp; Setup</h3>
          <p>Shop fixturing built for the part to keep tolerances consistent across the batch.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="zap"></i></div>
          <h3>3. Run the Batch</h3>
          <p>Production fabrication and welding with quality checks throughout the run.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="truck"></i></div>
          <h3>4. Deliver</h3>
          <p>Final inspection, optional finishing, packaging, and pickup or delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>How do you keep parts consistent across a production run?</h3>
        <p>Consistency comes from fixturing. Before we run a batch, we build a shop fixture or jig that holds the part in the same position for every weld &mdash; same setback, same alignment, same tack sequence. That keeps tolerances tight across 12 units or 200, and it's what separates a production shop from a one-off welder. Quality checks happen throughout the run, not just at the end.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section>
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Need Parts in Volume?</h3>
          <p>Send us the drawings or the prototype &mdash; we'll quote the run.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Request a Quote</a>
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
        <h2>Manufacturing &amp; Assembly FAQs</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>What batch sizes do you handle for production runs?</summary>
          <div class="faq-answer">We've handled batch runs from a dozen units up through several hundred parts at a time. The right batch size depends on the part complexity, the available shop floor, and the customer's delivery schedule. We're happy to start with a pilot batch to confirm the process before committing to volume.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Do you assemble parts you didn't manufacture?</summary>
          <div class="faq-answer">Yes. We offer contract assembly services for customers who supply their own components and need a shop with welding, fabrication, and assembly capacity to put them together. Bring us the parts and the assembly drawings.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Can you scale a prototype into a production run?</summary>
          <div class="faq-answer">Yes &mdash; and that's actually one of our strengths. Because we have prototype, custom fabrication, and production capacity in the same shop, we can take a one-off prototype, refine it into a production-ready design, and run the batch without handing the project off to another vendor.</div>
        </details>
      </div>

      <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- RELATED -->
  <section>
    <div class="container">
      <div class="section-head left" data-animate>
        <span class="section-rule"></span>
        <h2>Related Services</h2>
      </div>
      <div class="related-services">
        <div class="related-card">
          <h4>Prototyping</h4>
          <p>Build the first one before you scale to volume &mdash; one-off prototypes from our shop.</p>
          <a href="/services/prototyping">Prototyping &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Custom Fabrication</h4>
          <p>Custom welding, brackets, and one-off metal components.</p>
          <a href="/services/custom-fabrication">Custom Fabrication &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Industrial Design</h4>
          <p>Engineered structural steel solutions for ag, oilfield, and commercial use.</p>
          <a href="/services/industrial-design">Industrial Design &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Run the Batch in Amarillo</h2>
      <p>Production capacity, consistent parts, and a phone you can call.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
