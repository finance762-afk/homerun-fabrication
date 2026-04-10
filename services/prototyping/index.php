<?php
$pageTitle        = "Prototype Fabrication in Amarillo, TX | Homerun Fab";
$pageDescription  = "Custom metal prototype fabrication in Amarillo, TX. Single-unit and small-batch steel prototypes for inventors and engineers since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/prototyping";
$ogImage          = "https://i.imgur.com/hP3ywCs.jpeg";
$currentPage      = "services";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "https://i.imgur.com/hP3ywCs.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Prototyping", "item": "https://homerunfabrication.com/services/prototyping" }
      ]
    },
    {
      "@type": "Service",
      "name": "Custom Metal Prototyping",
      "serviceType": "Prototype Fabrication",
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
      "description": "Single-unit and small-batch metal prototype fabrication for inventors, engineers, and operators refining a design before production."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How fast can you turn around a prototype?",
          "acceptedAnswer": { "@type": "Answer", "text": "Most single-unit steel prototypes turn around in 1 to 3 weeks once we have the drawings or a clear scope, depending on material lead times and complexity. Simple weldments can be quicker; assemblies that involve sourcing specialty stock take longer." }
        },
        {
          "@type": "Question",
          "name": "Will you sign an NDA on a prototype project?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We routinely sign non-disclosure agreements on prototype work for inventors and engineering customers. Send the NDA along with your initial scope and we'll review and sign before we start." }
        },
        {
          "@type": "Question",
          "name": "Can you help refine the design or do you only build what I bring?",
          "acceptedAnswer": { "@type": "Answer", "text": "Both. We build what you bring, and we also flag practical issues we see on the shop floor — material substitutions, weld access, joint design, or assembly sequence that would make the part stronger, cheaper, or easier to produce in volume. The feedback comes free with the first prototype." }
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('https://i.imgur.com/hP3ywCs.jpeg');">
    <div class="container">
      <span class="page-eyebrow">Service &middot; Prototyping</span>
      <h1>Prototype Fabrication in Amarillo, TX</h1>
      <p class="page-sub">Single-unit and small-batch steel prototypes &mdash; turning concepts and drawings into physical metal parts you can test, measure, and refine.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Start a Prototype <i data-lucide="arrow-right"></i></a>
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
        <li aria-current="page">Prototyping</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication offers custom metal prototyping in Amarillo, TX and throughout the Texas Panhandle. Prototype fabrication is the process of building a single working version of a part, assembly, or piece of equipment so it can be tested before committing to a production run. For steel and metal prototypes, that means a one-off welded assembly built to a drawing or sketch, then handed back for fit, function, and load testing. Most prototypes turn around in 1 to 3 weeks.</p>
        <p>Our in-house welding shop and fabrication capabilities let us move fast from drawing to physical part &mdash; whether you're an inventor, an engineer at a regional ag supplier, or an operator testing a custom solution before scaling it.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image right -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>From Drawing to Physical Part</h2>
          <span class="section-rule"></span>
          <p>The gap between a CAD drawing and a working steel part is where most prototype projects get stuck. Tolerances that look fine on screen don't account for weld shrinkage. Joint geometries that look elegant on paper turn out to block welder access. Material specs from a catalog don't always match what's actually in stock.</p>
          <p>That's where an in-house fabrication shop earns its keep. We build the first part, hand it back with notes on what we'd change for production, and iterate from there.</p>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/ArVl8TB.jpeg" alt="Interior of Homerun Fabrication metal building used for prototype and fabrication work" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>Who do you build prototypes for?</h2>
        <p>Inventors developing a patented product. Engineers at regional ag and oilfield suppliers refining a new fixture or tool. Ranchers and operators with a custom solution they want built before they commit to a full production order. Anyone who needs to hold a physical version of an idea in their hands and put real load on it before going to volume.</p>
      </div>
    </div>
  </section>

  <!-- CAPABILITIES GRID -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Prototype Capabilities</h2>
        <p class="section-sub">What we can build &mdash; and what we can iterate on.</p>
      </div>
      <div class="app-grid">
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="layers"></i></span>
          <div><h4>Welded Assemblies</h4><p>Multi-piece weldments built from plate, tube, channel, or angle to a drawing or sketch.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="tractor"></i></span>
          <div><h4>Ag Equipment Parts</h4><p>Custom brackets, frames, hitches, and tooling for agricultural and ranch equipment.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="cog"></i></span>
          <div><h4>Mechanical Assemblies</h4><p>One-off fixtures, jigs, and mechanical assemblies for testing concepts.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="lightbulb"></i></span>
          <div><h4>Patent Prototypes</h4><p>Working physical prototypes for inventors and product developers under NDA.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="repeat"></i></span>
          <div><h4>Iteration Builds</h4><p>Second and third prototype rounds incorporating real-world test feedback.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="package"></i></span>
          <div><h4>Pre-Production Samples</h4><p>Short pre-production runs before full manufacturing &mdash; we can scale into batch.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Prototype Process</h2>
        <p class="section-sub">From the first call to a part in your hand.</p>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="file-text"></i></div>
          <h3>1. Scope &amp; NDA</h3>
          <p>Initial scope, drawings or sketches, and a signed NDA if needed.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="ruler"></i></div>
          <h3>2. Quote &amp; Material</h3>
          <p>Material spec, fabrication plan, and a written quote with timeline.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="zap"></i></div>
          <h3>3. Build</h3>
          <p>Cut, weld, and assemble the prototype on the shop floor.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="message-circle"></i></div>
          <h3>4. Hand Off &amp; Iterate</h3>
          <p>Hand off the part with shop-floor feedback, then iterate or scale to production.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>What does prototype fabrication cost?</h3>
        <p>Single-unit prototype costs depend on the complexity, the material, and the time required to fixture the part for welding. Simple weldments can run a few hundred dollars; more complex assemblies with sourced specialty stock and detailed welding routinely fall between \$1,500 and \$5,000 per prototype. We give you a written quote with material, labor, and lead time before any cuts are made.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section class="bg-alt">
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Have an Idea You Need Built?</h3>
          <p>Send us your drawings or scope &mdash; NDAs welcome.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Start a Prototype</a>
          <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Prototyping FAQs</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>How fast can you turn around a prototype?</summary>
          <div class="faq-answer">Most single-unit steel prototypes turn around in 1 to 3 weeks once we have the drawings or a clear scope, depending on material lead times and complexity. Simple weldments can be quicker; assemblies that involve sourcing specialty stock take longer.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Will you sign an NDA on a prototype project?</summary>
          <div class="faq-answer">Yes. We routinely sign non-disclosure agreements on prototype work for inventors and engineering customers. Send the NDA along with your initial scope and we'll review and sign before we start.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Can you help refine the design or do you only build what I bring?</summary>
          <div class="faq-answer">Both. We build what you bring, and we also flag practical issues we see on the shop floor — material substitutions, weld access, joint design, or assembly sequence that would make the part stronger, cheaper, or easier to produce in volume. The feedback comes free with the first prototype.</div>
        </details>
      </div>

      <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- RELATED -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head left" data-animate>
        <span class="section-rule"></span>
        <h2>Related Services</h2>
      </div>
      <div class="related-services">
        <div class="related-card">
          <h4>Custom Fabrication</h4>
          <p>One-off welding and metal fabrication for parts and components.</p>
          <a href="/services/custom-fabrication">Custom Fabrication &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Manufacturing &amp; Assembly</h4>
          <p>Scale your prototype into a batch run or full production line.</p>
          <a href="/services/manufacturing-assembly">Manufacturing &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Industrial Design</h4>
          <p>Engineered steel solutions for industrial and commercial applications.</p>
          <a href="/services/industrial-design">Industrial Design &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Build the First One. Then Build the Rest.</h2>
      <p>From drawing to physical part to production run &mdash; one shop, start to finish.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
