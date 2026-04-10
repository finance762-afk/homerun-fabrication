<?php
$pageTitle        = "Custom Metal Fabrication in Amarillo, TX | Homerun";
$pageDescription  = "Custom metal fabrication and welding in Amarillo, TX. Structural steel, brackets, and one-off components built in our shop since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/custom-fabrication";
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
        { "@type": "ListItem", "position": 3, "name": "Custom Fabrication", "item": "https://homerunfabrication.com/services/custom-fabrication" }
      ]
    },
    {
      "@type": "Service",
      "name": "Custom Metal Fabrication",
      "serviceType": "Custom Welding and Metal Fabrication",
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
      "description": "Custom welding and metal fabrication including structural steel, brackets, repair welding, and one-off steel components."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you take small custom welding jobs?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We handle one-off custom fabrication work alongside our larger building projects, including repair welding, custom brackets, structural patches, and small steel assemblies. Bring us the part or the drawing." }
        },
        {
          "@type": "Question",
          "name": "What types of welding do you offer?",
          "acceptedAnswer": { "@type": "Answer", "text": "We run MIG and stick welding for structural steel, mild steel plate, and heavier section work. Most of our fabrication uses MIG for production speed and stick for field repairs and heavier penetration on structural components." }
        },
        {
          "@type": "Question",
          "name": "Can you fabricate from a drawing or do I need finished plans?",
          "acceptedAnswer": { "@type": "Answer", "text": "Either works. We've built parts from a sketch on the back of an envelope and from full engineered shop drawings. The clearer the drawing, the closer the first part comes to spec, but we can work from a description and a measurement if that's what you have." }
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
      <span class="page-eyebrow">Service &middot; Custom Fabrication</span>
      <h1>Custom Metal Fabrication in Amarillo, TX</h1>
      <p class="page-sub">MIG and stick welding, structural steel, and one-off metal components built in our Texas Panhandle shop &mdash; from a single bracket to a full weldment.</p>
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
        <li aria-current="page">Custom Fabrication</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication is a custom metal fabrication and welding shop in Amarillo, TX serving the Texas Panhandle. Custom fabrication is the process of cutting, welding, and assembling raw steel into a finished part or structure built to your specs &mdash; a single replacement bracket, a custom trailer hitch, a structural patch on a tractor frame, or a full run of weldments for an industrial application. Most one-off jobs turn around in days, not weeks.</p>
        <p>Alongside our steel building and barndominium work, we run a full in-house fabrication shop with MIG and stick welding capabilities for structural, agricultural, and commercial customers since 2008.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image right -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>What Comes Out of Our Shop</h2>
          <span class="section-rule"></span>
          <p>The fabrication side of Homerun isn't a side project &mdash; it's how we got started. We weld structural steel for our own building projects, but we also take in custom work from contractors, ranchers, and operators who need a part built right.</p>
          <ul class="check-list">
            <li>Structural steel components &mdash; columns, beams, plate, brackets</li>
            <li>Repair welding on equipment, trailers, frames, and farm implements</li>
            <li>Custom mounts, hitches, and vehicle modifications</li>
            <li>Steel railings, gates, and ornamental work</li>
            <li>One-off prototypes and proof-of-concept parts</li>
            <li>Replacement parts fabricated to match a worn-out original</li>
          </ul>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/AYsPb3v.jpeg" alt="Homerun Fabrication shop building with stone wainscoting and signage in Amarillo, TX" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>What materials do you weld and fabricate?</h2>
        <p>Mild steel and structural steel make up the bulk of what we fabricate &mdash; A36 plate, square and rectangular tubing, channel, angle, pipe, and red-iron sections. We run MIG for production work and stick welding for heavier penetration on structural components and field repairs. Bring us the material spec or let us know what the part has to do, and we'll match it to the right base steel.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image left -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="https://i.imgur.com/J9csThM.jpeg" alt="Steel columns rising from a poured concrete slab on a Homerun Fabrication build site" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Built for the Job, Not the Catalog</h2>
          <span class="section-rule"></span>
          <p>The reason customers bring us custom work is that the off-the-shelf part doesn't exist, doesn't fit, or doesn't hold up. We build to the actual application &mdash; not a generic spec sheet.</p>
          <p>That means we'll look at the load, the environment, and the way the part will get used, then specify the steel gauge, the weld pattern, and the assembly approach to match. A bracket that's going to bolt to a feeder wagon and bounce down a county road every morning gets built differently than a bracket that's going to sit inside a climate-controlled shop. We pay attention to the difference.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>How a Custom Job Runs</h2>
        <p class="section-sub">Four steps from your idea to a finished steel part.</p>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="message-square"></i></div>
          <h3>1. Scope &amp; Sketch</h3>
          <p>Tell us what the part has to do. Bring drawings, a sample, or just a description.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="ruler"></i></div>
          <h3>2. Material &amp; Quote</h3>
          <p>We spec the steel, lay out the cuts, and quote the work in writing.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="zap"></i></div>
          <h3>3. Cut &amp; Weld</h3>
          <p>Material in the shop, parts cut to size, MIG or stick welded to spec.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="check-circle"></i></div>
          <h3>4. Finish &amp; Pickup</h3>
          <p>Grinding, prep, optional paint or primer, and pickup at the shop in Amarillo.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>How quickly can custom fab work turn around?</h3>
        <p>Most one-off welding jobs and small fabrication runs leave the shop in a few days to two weeks. Simple brackets, repair welds, and trailer fixes are usually quicker; larger weldments, parts that need specialty steel sourced, and projects requiring detailed shop drawings push longer. We give you a real lead time when we quote the work, not a guess.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section class="bg-alt">
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Have a Part That Needs Welding?</h3>
          <p>Call the shop or send us a photo of what you need built.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Send Us the Job</a>
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
        <h2>Custom Fabrication FAQs</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>Do you take small custom welding jobs?</summary>
          <div class="faq-answer">Yes. We handle one-off custom fabrication work alongside our larger building projects, including repair welding, custom brackets, structural patches, and small steel assemblies. Bring us the part or the drawing.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>What types of welding do you offer?</summary>
          <div class="faq-answer">We run MIG and stick welding for structural steel, mild steel plate, and heavier section work. Most of our fabrication uses MIG for production speed and stick for field repairs and heavier penetration on structural components.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Can you fabricate from a drawing or do I need finished plans?</summary>
          <div class="faq-answer">Either works. We've built parts from a sketch on the back of an envelope and from full engineered shop drawings. The clearer the drawing, the closer the first part comes to spec, but we can work from a description and a measurement if that's what you have.</div>
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
          <h4>Prototyping</h4>
          <p>Single-unit prototype fabrication for inventors and engineers refining a design.</p>
          <a href="/services/prototyping">Prototyping &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Manufacturing &amp; Assembly</h4>
          <p>Repeat production runs and batch fabrication of steel components.</p>
          <a href="/services/manufacturing-assembly">Manufacturing &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Industrial Design</h4>
          <p>Engineered structural steel solutions for industrial and commercial use cases.</p>
          <a href="/services/industrial-design">Industrial Design &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Bring Us the Job</h2>
      <p>Custom welds, custom parts, custom fabrication &mdash; built right in Amarillo.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
