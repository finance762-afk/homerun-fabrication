<?php
$pageTitle        = "Industrial Steel Design in Amarillo, TX | Homerun Fab";
$pageDescription  = "Engineered structural steel solutions in Amarillo, TX. Industrial fabrication for ag, oilfield, and commercial projects since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/industrial-design";
$ogImage          = "https://i.imgur.com/GxHRVdi.jpeg";
$currentPage      = "services";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "https://i.imgur.com/GxHRVdi.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Industrial Design", "item": "https://homerunfabrication.com/services/industrial-design" }
      ]
    },
    {
      "@type": "Service",
      "name": "Industrial Steel Design and Fabrication",
      "serviceType": "Engineered Industrial Steel Solutions",
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
      "description": "Engineered structural steel solutions and industrial fabrication for agricultural, oilfield, and commercial customers in the Texas Panhandle."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you work from existing engineering or do you handle the design too?",
          "acceptedAnswer": { "@type": "Answer", "text": "Both. We fabricate to existing engineered drawings and stamped plans, and we also work with customers from the requirements stage to develop a buildable steel solution. For projects that need a stamped engineer's drawing, we coordinate with engineering partners we've worked with for years." }
        },
        {
          "@type": "Question",
          "name": "What kinds of industrial fabrication do you handle?",
          "acceptedAnswer": { "@type": "Answer", "text": "Structural steel framework for ag and commercial buildings, load-bearing assemblies, custom equipment supports, oilfield service structures, conveyor framing, mezzanine framing, and similar industrial steel work. The common thread is engineered steel that has to handle a real load." }
        },
        {
          "@type": "Question",
          "name": "Can you handle large industrial projects or only small ones?",
          "acceptedAnswer": { "@type": "Answer", "text": "We've handled projects ranging from single fabricated assemblies to full agricultural steel buildings exceeding 10,000 square feet. The shop is sized for substantial work and we can scale crew and equipment to the job." }
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('https://i.imgur.com/GxHRVdi.jpeg');">
    <div class="container">
      <span class="page-eyebrow">Service &middot; Industrial Design</span>
      <h1>Industrial Steel Design in Amarillo, TX</h1>
      <p class="page-sub">Engineered structural steel solutions for ag, oilfield, and commercial operations &mdash; designed for the load and detailed for the environment.</p>
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
        <li aria-current="page">Industrial Design</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication provides industrial steel design and fabrication services in Amarillo, TX and across the Texas Panhandle. Industrial steel design takes a real-world load, environment, and use case and turns it into an engineered, fabricated steel solution &mdash; the structural framework of an agricultural building, a custom equipment support for an oilfield service yard, a mezzanine framework inside an industrial facility, or a load-bearing assembly built for specific stress conditions. The deliverable is fabricated steel that works.</p>
        <p>Since 2008 we've delivered engineered steel solutions for ranchers, ag suppliers, oilfield operators, and commercial builders &mdash; from a single fabricated assembly to a full structural framework.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image left, mid-build -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="https://i.imgur.com/Hty25UB.jpeg" alt="Interior mid-framing with ZIP System sheathing on a Homerun Fabrication industrial build" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Engineered Steel That Has to Work</h2>
          <span class="section-rule"></span>
          <p>Industrial steel doesn't get to fail. The stakes are different from residential or light commercial &mdash; a load-bearing assembly that bends or a structural connection that pulls is a safety problem and a production-stopper at the same time.</p>
          <p>We design and fabricate to that standard. That means specifying the right material grade for the load, detailing connections that carry stress through the geometry rather than relying on a single weld, and building with the assembly sequence and the inspection access in mind.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>What does the engineered steel process look like?</h2>
        <p>Most industrial design jobs start with a conversation about the load, the environment, and the constraints &mdash; what the steel has to support, where it has to fit, and what it can't interfere with. From there we work to drawings (stamped where required, in coordination with engineering partners), spec the material, fabricate the assemblies in our shop, and either deliver finished components or erect them on site. The shop runs full MIG and stick welding capabilities for structural section work.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image right -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>From Spec to Steel on Site</h2>
          <span class="section-rule"></span>
          <p>The advantage of having steel design and fabrication under the same roof as a building contractor is that we know how the part has to actually go up. A beautifully drawn assembly that can't be lifted into place by the crew on site doesn't help the customer. We design with the install in mind.</p>
          <ul class="check-list">
            <li>Material grades specified for load and environment</li>
            <li>Connection details that carry stress through geometry, not just welds</li>
            <li>Assemblies sized for the lift and the access on site</li>
            <li>Coordination with engineering partners for stamped drawings when needed</li>
            <li>Full MIG and stick welding for structural section work</li>
            <li>Fabrication and field erection by the same crew</li>
          </ul>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/JUVxGOI.jpeg" alt="Two-story Homerun Fabrication building under construction with steel and wood framing" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- APPLICATIONS -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Industrial Applications</h2>
        <p class="section-sub">Where engineered steel from our shop ends up.</p>
      </div>
      <div class="app-grid">
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="building"></i></span>
          <div><h4>Structural Frameworks</h4><p>Load-bearing steel framing for agricultural and commercial buildings.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="layers-3"></i></span>
          <div><h4>Mezzanines &amp; Platforms</h4><p>Engineered mezzanine and platform framing inside industrial facilities.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="settings"></i></span>
          <div><h4>Equipment Supports</h4><p>Custom steel supports for ag and oilfield equipment under real load.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="warehouse"></i></span>
          <div><h4>Service Yards</h4><p>Steel structures for oilfield service yards, equipment stands, and outdoor facilities.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="move-up-right"></i></span>
          <div><h4>Conveyor &amp; Process Framing</h4><p>Custom framing and supports for industrial conveyors and process equipment.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="compass"></i></span>
          <div><h4>Custom Engineered Assemblies</h4><p>One-off engineered steel assemblies built to drawing for specific industrial use.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>How an Industrial Job Runs</h2>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="message-square"></i></div>
          <h3>1. Requirements</h3>
          <p>Load, environment, footprint, constraints &mdash; we talk through what the steel has to do.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="pen-tool"></i></div>
          <h3>2. Design &amp; Drawings</h3>
          <p>Detailed shop drawings, stamped where required through engineering partners.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="hammer"></i></div>
          <h3>3. Shop Fabrication</h3>
          <p>Material in, structural welding, and finished assemblies built to spec in Amarillo.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="check-circle"></i></div>
          <h3>4. Delivery &amp; Erection</h3>
          <p>Delivered, set, and erected on site &mdash; or shipped as finished components.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>What grades and sizes of structural steel do you fabricate?</h3>
        <p>Our industrial work uses A36 and A572 structural steel in plate, wide-flange beams, channel, angle, square and rectangular tube, and red-iron sections. Material gauge and grade are specified to the load and environment &mdash; heavier sections for primary load paths, corrosion-resistant detailing for outdoor and oilfield exposure, and connection geometry sized to carry stress through the joint, not just the weld.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section>
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Have an Industrial Project?</h3>
          <p>Send us the load, the spec, and the constraints &mdash; we'll engineer the steel.</p>
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
        <h2>Industrial Design FAQs</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>Do you work from existing engineering or do you handle the design too?</summary>
          <div class="faq-answer">Both. We fabricate to existing engineered drawings and stamped plans, and we also work with customers from the requirements stage to develop a buildable steel solution. For projects that need a stamped engineer's drawing, we coordinate with engineering partners we've worked with for years.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>What kinds of industrial fabrication do you handle?</summary>
          <div class="faq-answer">Structural steel framework for ag and commercial buildings, load-bearing assemblies, custom equipment supports, oilfield service structures, conveyor framing, mezzanine framing, and similar industrial steel work. The common thread is engineered steel that has to handle a real load.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Can you handle large industrial projects or only small ones?</summary>
          <div class="faq-answer">We've handled projects ranging from single fabricated assemblies to full agricultural steel buildings exceeding 10,000 square feet. The shop is sized for substantial work and we can scale crew and equipment to the job.</div>
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
          <h4>Steel Buildings</h4>
          <p>Full steel building construction &mdash; shops, barns, agricultural, and commercial structures.</p>
          <a href="/services/steel-buildings">Steel Buildings &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Custom Fabrication</h4>
          <p>One-off welding and metal fabrication for parts and custom components.</p>
          <a href="/services/custom-fabrication">Custom Fabrication &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Manufacturing &amp; Assembly</h4>
          <p>Production-run fabrication and assembly for repeatable steel components.</p>
          <a href="/services/manufacturing-assembly">Manufacturing &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Engineered Steel, Built Right</h2>
      <p>For ag, oilfield, and commercial operators who need steel that performs.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
