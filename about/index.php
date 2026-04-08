<?php
$pageTitle        = "About Homerun Fabrication | Amarillo, TX Builder";
$pageDescription  = "Founded in 2008 by Corey Homer. Custom steel buildings and barndominiums across the Texas Panhandle, built ground-up by one accountable crew.";
$canonicalUrl     = "https://homerunfabrication.com/about";
$ogImage          = "https://i.imgur.com/AYsPb3v.jpeg";
$currentPage      = "about";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "https://i.imgur.com/AYsPb3v.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://homerunfabrication.com/about" }
      ]
    },
    {
      "@type": "Organization",
      "@id": "https://homerunfabrication.com/#org",
      "name": "Homerun Fabrication",
      "url": "https://homerunfabrication.com/",
      "logo": "https://i.imgur.com/oTQIMmj.png",
      "founder": {
        "@type": "Person",
        "name": "Corey Homer",
        "jobTitle": "Founder & Owner"
      },
      "foundingDate": "2008",
      "telephone": "+1-806-671-7930",
      "email": "coreyhomer@att.net",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "14001 White Tail Avenue",
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
    },
    {
      "@type": "Person",
      "name": "Corey Homer",
      "jobTitle": "Founder & Owner",
      "worksFor": {
        "@type": "Organization",
        "name": "Homerun Fabrication"
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.65) 0%, rgba(15,28,36,0.88) 100%), url('https://i.imgur.com/AYsPb3v.jpeg');">
    <div class="container">
      <span class="page-eyebrow">About Us &middot; Since 2008</span>
      <h1>About Homerun Fabrication &mdash; Amarillo, TX</h1>
      <p class="page-sub">Founded by Corey Homer in 2008 &mdash; nearly two decades of ground-up steel construction across the Texas Panhandle.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Talk to Corey <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> (806) 671-7930</a>
      </div>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-band">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li aria-current="page">About</li>
      </ol>
    </div>
  </div>

  <!-- INTRO -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication is a metal fabrication and construction company based in Amarillo, Texas, founded by Corey Homer in 2008. What started as a welding and custom fabrication operation has grown into a full-service builder of steel structures, barndominiums, agricultural facilities, and finished living spaces across the Texas Panhandle.</p>
        <p>The work hasn't changed much from day one: build it right, build it ourselves, and stand behind it.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image right — Corey's story -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Built by Corey Homer</h2>
          <span class="section-rule"></span>
          <p>Corey Homer founded Homerun Fabrication in Amarillo in 2008 with a welder, a shop, and a reputation for showing up. Nearly two decades later, the operation has grown into a full ground-up construction company &mdash; but the approach is the same. Corey is on the job site. The crew is the same crew. The work happens in front of the customer, not behind a wall of subcontractors.</p>
          <p>That hands-on approach is what built the company, and it's what most customers tell us is the difference between Homerun and the rest of the field. When you call, you talk to the person actually building your project. When you walk the site mid-build, the same crew that erected your steel is the crew framing your interior walls.</p>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/AYsPb3v.jpeg" alt="Homerun Fabrication shop building with stone wainscoting and signage in Amarillo, TX" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image left — what sets us apart -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="https://i.imgur.com/dMdt0AE.jpeg" alt="Two-story barndominium built by Homerun Fabrication at dusk in the Texas Panhandle" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>One Crew. Steel Through Finish.</h2>
          <span class="section-rule"></span>
          <p>Most steel building contractors hand off the project halfway through. They erect the shell, drop the keys with a finish-out company, and disappear. We don't run our work that way. The same Homerun Fabrication crew that pours your concrete pad and sets your red-iron columns will hang your drywall, install your kitchen cabinets, and walk you through your finished home.</p>
          <ul class="check-list">
            <li>Single-crew accountability from foundation to final walkthrough</li>
            <li>Steel erection, framing, exterior, and interior finishing all in-house</li>
            <li>Engineered for Texas Panhandle wind loads &mdash; not generic kit plans</li>
            <li>Direct line to the owner, not a layered chain of project managers</li>
            <li>Written quotes, real timelines, no surprises after the contract is signed</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 3 — image right — range of work -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>From Cattle Pens to Custom Kitchens</h2>
          <span class="section-rule"></span>
          <p>The range of work that comes through the Homerun shop reflects what the Texas Panhandle actually needs built. One week it's a heavy-duty welded pipe corral for a working cattle operation outside Hereford. The next week it's a finished barndominium kitchen with quartz countertops and a stacked stone fireplace. The week after that it's an engineered steel framework for a commercial customer in Borger.</p>
          <p>That breadth isn't an accident &mdash; it's the result of running a real fabrication shop alongside a construction company. The same crew that welds 2-7/8" oilfield pipe into a working chute also frames a wall, sets a cabinet, and trims out a window. The skills compound. The customer benefits.</p>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/C2ZjmOA.jpeg" alt="Finished barndominium living room with stacked stone fireplace and wood beam ceiling by Homerun Fabrication" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 4 — image left — shop -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="https://i.imgur.com/hP3ywCs.jpeg" alt="Interior of Homerun Fabrication shop with high ceilings, LED lighting, and tools" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Built for West Texas</h2>
          <span class="section-rule"></span>
          <p>Every structure Homerun Fabrication puts up is engineered for the conditions out here. That means real wind load specifications &mdash; 115 to 120 mph minimum &mdash; with bracing, anchor bolts, and column gauge sized for the exposure category of the actual site. It means metal siding and roofing rated for the heat and the hail. It means foundation and concrete work that accounts for the soil and the freeze-thaw cycle in the Panhandle.</p>
          <p>Generic plans drawn for the Gulf Coast don't survive long up here. We build for the country we live in.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 5 — image right — agricultural side -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Serving the Texas Panhandle</h2>
          <span class="section-rule"></span>
          <p>Homerun Fabrication operates out of Amarillo and serves a roughly 80-mile radius across the Texas Panhandle &mdash; Canyon, Hereford, Borger, Pampa, Dumas, Tulia, Claude, Vega, Bushland, Wildorado, and the surrounding rural communities. The crew travels the region weekly, and most quotes start with a real site walk &mdash; not a phone call.</p>
          <p>If you're inside the service area and you're trying to figure out what it would take to build something in steel, the conversation starts the same way: tell us what you need, and we'll tell you what it'll take to build it right.</p>
        </div>
        <div class="split-image">
          <img src="https://i.imgur.com/5cECBcL.jpeg" alt="Covered cattle pen with welded pipe railing built by Homerun Fabrication for a Texas Panhandle ranch" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- STAT COUNTERS -->
  <section class="stats-band" aria-label="Company stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item" data-animate>
          <span class="stat-number"><span data-counter="17">0</span><span class="stat-suffix">+</span></span>
          <span class="stat-label">Years in Business</span>
        </div>
        <div class="stat-item" data-animate>
          <span class="stat-number"><span data-counter="80">0</span><span class="stat-suffix"> mi</span></span>
          <span class="stat-label">Service Radius</span>
        </div>
        <div class="stat-item" data-animate>
          <span class="stat-number">100s</span>
          <span class="stat-label">Of Structures Built</span>
        </div>
        <div class="stat-item" data-animate>
          <span class="stat-number">1</span>
          <span class="stat-label">Company, Start to Finish</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Let's Talk About Your Project</h2>
      <p>Whether it's a shop, a barndo, a working facility, or a custom fabrication run &mdash; bring it to us.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Start the Conversation <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
