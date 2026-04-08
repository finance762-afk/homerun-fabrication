<?php
$pageTitle        = "Services | Homerun Fabrication, Amarillo TX";
$pageDescription  = "Steel buildings, barndominiums, custom welding, pipe fencing, and metal fabrication in Amarillo, TX. Texas Panhandle since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services";
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
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" }
      ]
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://homerunfabrication.com/#business",
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
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ============ PAGE HERO ============ -->
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('https://i.imgur.com/lGNo1JA.jpeg');">
    <div class="container">
      <span class="page-eyebrow">Homerun Fabrication &middot; Amarillo, TX</span>
      <h1>Our Services &mdash; Homerun Fabrication, Amarillo, TX</h1>
      <p class="page-sub">From steel erection to finished kitchens, pipe corrals to custom prototypes &mdash; Homerun Fabrication delivers ground-up metal construction across the Texas Panhandle.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
      </div>
    </div>
  </section>

  <!-- ============ BREADCRUMB ============ -->
  <div class="breadcrumb-band">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li aria-current="page">Services</li>
      </ol>
    </div>
  </div>

  <!-- ============ ANSWER-FIRST INTRO ============ -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication provides metal fabrication and ground-up steel construction services in Amarillo, TX and throughout the Texas Panhandle. Since 2008, we have built steel shops, barndominiums, agricultural facilities, and custom fabricated components for property owners, ranchers, and commercial operators across an 80-mile radius from Amarillo.</p>
        <p>Every service below is delivered by the same in-house crew &mdash; from the first crane lift to the final piece of trim. One contractor, one timeline, one phone call when you need an answer.</p>
      </div>
    </div>
  </section>

  <!-- ============ SERVICES GRID ============ -->
  <section class="bg-alt" aria-labelledby="services-grid-heading">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2 id="services-grid-heading">What We Build</h2>
        <p class="section-sub">Seven core services covering everything from raw steel to fully finished living spaces.</p>
      </div>

      <div class="services-grid">
        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="building-2"></i></div>
          <h3>Steel Buildings</h3>
          <p>Engineered shops, barns, and commercial structures built with red-iron framing, metal siding, and rollup doors. Sized and braced for Panhandle wind loads.</p>
          <a href="/services/steel-buildings" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="home"></i></div>
          <h3>Barndominiums</h3>
          <p>Steel-frame homes built ground-up &mdash; erection, ZIP System sheathing, exterior, and full interior finish-out under one contractor. Move-in ready when we hand you the keys.</p>
          <a href="/services/barndominiums" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="wrench"></i></div>
          <h3>Custom Fabrication</h3>
          <p>MIG and stick welding, structural steel components, brackets, and one-off metalwork built to drawing or to-spec on the shop floor in Amarillo.</p>
          <a href="/services/custom-fabrication" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="fence"></i></div>
          <h3>Pipe Fencing</h3>
          <p>Heavy-duty welded pipe fencing, cattle pens, alley chutes, and corral systems built for real West Texas livestock pressure &mdash; not bolt-together kits.</p>
          <a href="/services/pipe-fencing" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="lightbulb"></i></div>
          <h3>Prototyping</h3>
          <p>Single-unit prototypes and proof-of-concept fabrication for inventors, engineers, and operations refining a design before committing to production.</p>
          <a href="/services/prototyping" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="drafting-compass"></i></div>
          <h3>Industrial Design</h3>
          <p>Engineered steel solutions for ag, oilfield, and commercial operations &mdash; designed and detailed for the load and the environment they have to work in.</p>
          <a href="/services/industrial-design" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="cog"></i></div>
          <h3>Manufacturing &amp; Assembly</h3>
          <p>Repeat production runs, weldments, and assembly services for parts and structures that need consistency batch after batch.</p>
          <a href="/services/manufacturing-assembly" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ MID-PAGE INLINE CTA ============ -->
  <section>
    <div class="container">
      <div class="inline-cta" data-animate>
        <div>
          <h3>Have a Project in Mind?</h3>
          <p>Tell us what you're building and we'll walk the site with you.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Request a Quote</a>
          <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WHAT TO EXPECT ============ -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>One Crew, Start to Finish</h2>
        <p class="section-sub">Most steel contractors hand off the build halfway through. We don't.</p>
      </div>
      <div class="two-col-text" data-animate>
        <p>Homerun Fabrication runs every phase of your project under one company. That starts with the consultation &mdash; a real site walk, not a phone quote &mdash; and continues through engineering, steel erection, framing, exterior enclosure, and interior finishing.</p>
        <p>For a barndominium, that means the same crew who sets your I-beams will hang your drywall, install your kitchen cabinets, and trim out your bathrooms. For a shop building, it means the team welding your purlins is the team installing your rollup door.</p>
        <p>This matters in West Texas. Wind loads are real here, lead times for materials swing month to month, and a fragmented build schedule leaves your project sitting half-finished. With one accountable crew, the work moves.</p>
        <p>Whether you're putting up a 30x40 shop, building a two-story barndominium, or fabricating a custom run of steel components, the conversation starts the same way: tell us what you're trying to build and what you need it to do.</p>
      </div>
    </div>
  </section>

  <!-- ============ CLOSING CTA ============ -->
  <section class="closing-cta" aria-label="Get a quote">
    <div class="container">
      <h2>Let's Build It</h2>
      <p>From a single weld job to a fully finished barndominium &mdash; tell us what you need and we'll quote it from the ground up.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
