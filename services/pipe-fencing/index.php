<?php
$pageTitle        = "Pipe Fencing in Amarillo, TX | Homerun Fabrication";
$pageDescription  = "Welded pipe fencing, cattle pens, and alley chutes in Amarillo, TX. Heavy-duty livestock fencing for the Texas Panhandle since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/pipe-fencing";
$ogImage          = "/assets/images/covered-cattle-pen-with-heavy-duty-pipe-railing-960.webp";
$currentPage      = "services";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "/assets/images/covered-cattle-pen-with-heavy-duty-pipe-railing-960.webp";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Pipe Fencing", "item": "https://homerunfabrication.com/services/pipe-fencing" }
      ]
    },
    {
      "@type": "Service",
      "name": "Pipe Fencing & Cattle Pen Construction",
      "serviceType": "Agricultural Pipe Fencing",
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
      "description": "Welded pipe fencing, cattle pens, alley chutes, and corral systems built for ranching operations across the Texas Panhandle."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What size pipe do you use for cattle fencing?",
          "acceptedAnswer": { "@type": "Answer", "text": "We typically build cattle pens with 2-3/8 inch and 2-7/8 inch oilfield pipe for rails, with 4-1/2 inch or larger pipe for posts on heavy-use corners and gates. Pipe size goes up for working alleys and chutes that take cattle pressure." }
        },
        {
          "@type": "Question",
          "name": "Do you weld pipe fence in place or pre-build sections?",
          "acceptedAnswer": { "@type": "Answer", "text": "We weld in place. Posts are set in concrete, then rails are welded directly to the posts on site. This produces a continuous welded structure that handles cattle pressure better than pinned or bolted assemblies." }
        },
        {
          "@type": "Question",
          "name": "Can you build alley chutes with rubber matting?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We build complete working facilities including alley chutes with rubber matting, sweep tubs, palpation cages, head gates, and loading ramps. We coordinate with the customer's preferred working equipment or build the steel framework around it." }
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.6) 0%, rgba(15,28,36,0.85) 100%), url('/assets/images/covered-cattle-pen-with-heavy-duty-pipe-railing-960.webp');">
    <div class="container">
      <span class="page-eyebrow">Service &middot; Pipe Fencing</span>
      <h1>Pipe Fencing in Amarillo, TX</h1>
      <p class="page-sub">Heavy-duty welded pipe fence, cattle pens, alley chutes, and corral systems built for real West Texas ranching operations.</p>
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
        <li aria-current="page">Pipe Fencing</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication builds welded pipe fencing, cattle pens, and working facilities in Amarillo, TX and across the Texas Panhandle. Pipe fencing is welded steel pipe construction for livestock containment, working facilities, and ranch perimeters &mdash; rails of 2-3/8" or 2-7/8" oilfield pipe welded to set posts of larger 4-1/2"+ pipe. It's the standard for serious cattle operations because it stands up to pressure that breaks barbed wire and bends sucker rod. Most cattle pen jobs run several thousand dollars depending on linear footage, gate count, and working equipment.</p>
        <p>We've built corrals, alley chutes, working facilities, and perimeter pipe fence for ranches across the region since 2008 &mdash; welded in place, not pinned together.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image left, working facility -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="/assets/images/cattle-alley-chute-with-rubber-matting-built-by-960.webp" srcset="/assets/images/cattle-alley-chute-with-rubber-matting-built-by-480.webp 480w, /assets/images/cattle-alley-chute-with-rubber-matting-built-by-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Cattle alley chute with rubber matting built by Homerun Fabrication" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Working Facilities Built for Pressure</h2>
          <span class="section-rule"></span>
          <p>The difference between a working facility that lasts twenty years and one that's bent up after one season is the steel and the welds. Our cattle pens use heavy-gauge oilfield pipe, set posts in concrete, and continuous welded rails &mdash; no bolted brackets, no pinned connections, no slip joints to fail.</p>
          <p>That matters when you've got 1,400-pound cows pushing the alley, or a working chute taking the same brute force hit twice a day for years. Build it once, build it heavy.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>What does a complete cattle working facility include?</h2>
        <p>A complete Homerun Fabrication working facility typically includes a holding pen, sweep or crowd tub, alley with sliding gates, working chute with head gate (or steel framework around the customer's preferred chute), palpation cage, loading ramp to a truck or trailer, and heavy-duty entry/exit gates. Rubber matting in the alley reduces slips. We build the steel and integrate whatever working equipment the operation runs.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image right, covered working area -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Covered Working Areas</h2>
          <span class="section-rule"></span>
          <p>Working cattle in 100-degree heat or driving West Texas hail is brutal on both the cows and the crew. We build covered working areas &mdash; steel-framed roofs over the working chute and alley &mdash; that take the weather out of the equation.</p>
          <p>Cover spans are tied into the same red-iron framing we use for ag steel buildings, so they're rated for Panhandle wind loads and built to last as long as the pens underneath them.</p>
        </div>
        <div class="split-image">
          <img src="/assets/images/covered-working-area-with-pipe-railing-on-a-texa-960.webp" srcset="/assets/images/covered-working-area-with-pipe-railing-on-a-texa-480.webp 480w, /assets/images/covered-working-area-with-pipe-railing-on-a-texa-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Covered working area with pipe railing on a Texas Panhandle ranch" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- APPLICATIONS -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Pipe Fencing Applications</h2>
        <p class="section-sub">What we build for ranchers and ag operations across the Texas Panhandle.</p>
      </div>
      <div class="app-grid">
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="fence"></i></span>
          <div><h4>Cattle Pens &amp; Corrals</h4><p>Holding pens, sorting pens, and corral systems sized to your herd and your working flow.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="move-right"></i></span>
          <div><h4>Working Alleys &amp; Chutes</h4><p>Welded alleys, sweep tubs, and working chutes built for daily cattle pressure.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="layers"></i></span>
          <div><h4>Loading Ramps</h4><p>Truck and trailer loading ramps with non-slip surface and pipe sidewalls.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="square"></i></span>
          <div><h4>Perimeter Pipe Fence</h4><p>Continuous welded pipe perimeter for pastures, traps, and ranch entrances.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="door-open"></i></span>
          <div><h4>Gates &amp; Cattle Guards</h4><p>Heavy-duty welded gates, swing gates, sliding alley gates, and steel cattle guards.</p></div>
        </div>
        <div class="app-card" data-animate>
          <span class="app-icon"><i data-lucide="shield"></i></span>
          <div><h4>Covered Pen Roofing</h4><p>Steel-framed roof structures over working areas for shade and weather protection.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 3 — image left, barn interior pens -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="/assets/images/barn-interior-with-welded-pipe-livestock-pen-gat-960.webp" srcset="/assets/images/barn-interior-with-welded-pipe-livestock-pen-gat-480.webp 480w, /assets/images/barn-interior-with-welded-pipe-livestock-pen-gat-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Barn interior with welded pipe livestock pen gates by Homerun Fabrication" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Inside the Barn, Too</h2>
          <span class="section-rule"></span>
          <p>Pipe pens and gates inside a steel barn or covered facility get the same construction approach as outdoor pens &mdash; welded in place, sized to the layout, and tied into the structure. We integrate interior pens, alley dividers, and stall fronts directly into the building during construction, or retrofit them into an existing barn.</p>
          <p>If you're putting up a new ag building and want a complete working facility under one roof, we can build the steel structure and the interior pens as a single coordinated job.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section>
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>How We Build Pipe Fence</h2>
        <p class="section-sub">No bolt-together kits. Welded in place, built to last.</p>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="map"></i></div>
          <h3>1. Walk &amp; Layout</h3>
          <p>Site walk, herd size, working flow, and stake out the pen and alley footprint.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="pickaxe"></i></div>
          <h3>2. Set Posts</h3>
          <p>Pipe posts dropped in augered holes, plumbed, and set in concrete.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="zap"></i></div>
          <h3>3. Weld Rails</h3>
          <p>Continuous oilfield pipe rails welded directly to posts &mdash; no slip connections.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="check-circle"></i></div>
          <h3>4. Gates &amp; Equipment</h3>
          <p>Hang gates, integrate working equipment, and final walkthrough with the rancher.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>How long does a cattle pen and working facility build take?</h3>
        <p>A standard set of welded cattle pens with a working alley and chute typically takes 2 to 4 weeks on site, depending on linear footage, gate count, concrete pour times, and whether covered roofing is included. Larger operations with multiple pen blocks and integrated loading ramps run longer. We sequence pad work, post-setting, and welding so the operation can keep running cattle through during the build when needed.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section class="bg-alt">
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Need a New Set of Pens?</h3>
          <p>We'll come walk the site and lay it out with you.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Request a Quote</a>
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
        <h2>Pipe Fencing FAQs</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>What size pipe do you use for cattle fencing?</summary>
          <div class="faq-answer">We typically build cattle pens with 2-3/8 inch and 2-7/8 inch oilfield pipe for rails, with 4-1/2 inch or larger pipe for posts on heavy-use corners and gates. Pipe size goes up for working alleys and chutes that take cattle pressure.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Do you weld pipe fence in place or pre-build sections?</summary>
          <div class="faq-answer">We weld in place. Posts are set in concrete, then rails are welded directly to the posts on site. This produces a continuous welded structure that handles cattle pressure better than pinned or bolted assemblies.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Can you build alley chutes with rubber matting?</summary>
          <div class="faq-answer">Yes. We build complete working facilities including alley chutes with rubber matting, sweep tubs, palpation cages, head gates, and loading ramps. We coordinate with the customer's preferred working equipment or build the steel framework around it.</div>
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
          <h4>Steel Buildings</h4>
          <p>Cover the working area or build a complete agricultural steel barn over your pens.</p>
          <a href="/services/steel-buildings">Steel Buildings &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Custom Fabrication</h4>
          <p>Custom gates, hitches, mounts, and one-off ranch fabrication welded in our shop.</p>
          <a href="/services/custom-fabrication">Custom Fabrication &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Industrial Design</h4>
          <p>Engineered structural solutions for larger ag and commercial steel projects.</p>
          <a href="/services/industrial-design">Industrial Design &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Build Pens That Last</h2>
      <p>Welded pipe construction, set right the first time &mdash; for ranchers who work cattle.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
