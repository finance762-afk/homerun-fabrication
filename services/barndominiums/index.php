<?php
$pageTitle        = "Barndominiums in Amarillo, TX | Homerun Fabrication";
$pageDescription  = "Custom barndominium builder in Amarillo, TX. Steel-frame homes with finished kitchens, bathrooms, and living spaces. Texas Panhandle, since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/services/barndominiums";
$ogImage          = "/assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp";
$currentPage      = "services";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "/assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://homerunfabrication.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Barndominiums", "item": "https://homerunfabrication.com/services/barndominiums" }
      ]
    },
    {
      "@type": "Service",
      "name": "Barndominium Construction",
      "serviceType": "Custom Barndominium Builder",
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
      "description": "Custom barndominium construction including steel erection, framing, exterior, and full interior finish-out across the Texas Panhandle."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a barndominium cost in the Texas Panhandle?",
          "acceptedAnswer": { "@type": "Answer", "text": "Finished barndominiums in the Amarillo area generally run \$150 to \$225 per square foot turnkey, depending on finish level, ceiling heights, kitchen and bath upgrades, and shop space included. A 2,000 sq ft single-story finished build typically lands between \$300,000 and \$450,000." }
        },
        {
          "@type": "Question",
          "name": "Can you build a two-story barndominium?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We've built single-story, two-story, and shop-with-living-quarters barndominium configurations. Two-story builds use heavier column gauge and engineered floor joists, and are common when site footprint is limited or when the owner wants more interior square footage without doubling the slab." }
        },
        {
          "@type": "Question",
          "name": "What kind of interior finishes do you install?",
          "acceptedAnswer": { "@type": "Answer", "text": "Custom kitchens with quartz or granite countertops, full bathrooms with tile showers, LVP and tile flooring, stacked stone fireplaces, wood beam ceilings, custom cabinetry, walk-in closets, and trim-out. We work to your finish selections or help you pick from samples we've used on past builds." }
        },
        {
          "@type": "Question",
          "name": "Do barndominiums hold up in West Texas wind?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, when they're engineered correctly. Every Homerun Fabrication barndominium uses red-iron steel framing rated for 115 to 120 mph wind loads, with bracing, gauge, and anchor bolt patterns specified for the site exposure category. Steel-frame construction handles Panhandle wind better than conventional stick-framed homes." }
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.6) 0%, rgba(15,28,36,0.85) 100%), url('/assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp');">
    <div class="container">
      <span class="page-eyebrow">Service &middot; Barndominiums</span>
      <h1>Custom Barndominiums in Amarillo, TX</h1>
      <p class="page-sub">Steel-frame homes built ground-up &mdash; from the first column lift to a finished kitchen, bathroom, and living space ready to move into.</p>
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
        <li aria-current="page">Barndominiums</li>
      </ol>
    </div>
  </div>

  <!-- ANSWER-FIRST -->
  <section>
    <div class="container">
      <div class="service-intro">
        <p>Homerun Fabrication builds custom barndominiums in Amarillo, TX and across the Texas Panhandle. A barndominium is a steel-frame home &mdash; red-iron columns and rafters wrapped in metal siding and roofing outside, with a fully framed and finished interior inside. Most Panhandle builds run 1,500 to 3,500 square feet of living space, often combined with attached shop or garage space, and turnkey costs run roughly \$150 to \$225 per finished square foot depending on ceiling heights and finish level.</p>
        <p>We've been building barndos from the ground up since 2008 &mdash; one crew, one timeline, from steel erection through the final piece of trim around your kitchen window.</p>
      </div>
    </div>
  </section>

  <!-- WIDE GALLERY -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Recent Barndominium Builds</h2>
        <p class="section-sub">Steel frame, fully finished &mdash; built across the Texas Panhandle.</p>
      </div>

      <div class="wide-gallery">
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp" srcset="/assets/images/two-story-barndominium-built-by-homerun-fabricat-480.webp 480w, /assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp 960w" sizes="(max-width: 768px) 100vw, 1200px" alt="Two-story barndominium built by Homerun Fabrication at dusk in Amarillo, TX" loading="lazy" width="1200" height="900">
          <figcaption class="gallery-overlay"><span class="gallery-label">Two-Story Build</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/dark-charcoal-barndominium-with-covered-front-po-960.webp" srcset="/assets/images/dark-charcoal-barndominium-with-covered-front-po-480.webp 480w, /assets/images/dark-charcoal-barndominium-with-covered-front-po-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Dark charcoal barndominium with covered porch" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Charcoal Exterior</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/gray-barndominium-with-wood-post-porch-overhang-960.webp" srcset="/assets/images/gray-barndominium-with-wood-post-porch-overhang-480.webp 480w, /assets/images/gray-barndominium-with-wood-post-porch-overhang-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Gray barndominium with wood post porch overhang" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Wood Post Porch</span></figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — image right, exterior -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Steel-Frame Construction</h2>
          <span class="section-rule"></span>
          <p>The bones of every Homerun Fabrication barndominium are red-iron steel &mdash; columns and rafters set with a crane on a poured concrete pad. From there we frame the interior walls in dimensional lumber, sheath the exterior in ZIP System, and wrap the whole thing in metal siding and standing-seam or R-panel roofing.</p>
          <p>Why steel instead of conventional stick framing? Three reasons that matter in the Panhandle: wind load capacity, span flexibility, and longevity. Steel takes the structural load, lumber takes the interior partitions, and you end up with a home that handles 70+ mph gusts without flinching.</p>
        </div>
        <div class="split-image">
          <img src="/assets/images/dark-charcoal-barndominium-with-covered-front-po-960.webp" srcset="/assets/images/dark-charcoal-barndominium-with-covered-front-po-480.webp 480w, /assets/images/dark-charcoal-barndominium-with-covered-front-po-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Charcoal barndominium with covered front porch built by Homerun Fabrication" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate>
        <h2>What's included in a finished barndominium build?</h2>
        <p>Foundation and concrete pad, red-iron steel erection, wood framing, ZIP System sheathing, metal siding and roofing, windows and doors, insulation, electrical and plumbing rough-in, drywall, paint, custom kitchen cabinets, countertops (quartz or granite), tile or LVP flooring, full bathrooms with tile showers, fireplace (optional), wood beam ceilings (optional), trim, and final walkthrough. We can also include attached shop space, covered patios, and bi-fold patio doors.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 2 — image left, interior living -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="/assets/images/finished-barndominium-living-room-with-stone-fir-480.webp" alt="Finished barndominium living room with stacked stone fireplace and wood beam ceiling" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Custom Interiors, Finished In-House</h2>
          <span class="section-rule"></span>
          <p>The barndominiums we hand over have stacked stone fireplaces, wood beam ceilings, custom cabinetry, full tile showers, walk-in closets, and the kind of trim-out you'd expect from a custom home builder &mdash; because that's what we are once the steel is up.</p>
          <p>The same crew that erected your steel will hang your drywall, set your cabinets, run your trim, and walk you through the finished home. No handing the project off to a separate finish-out company halfway through, and no waiting weeks while a sub schedules you in.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 3 — image right, kitchen -->
  <section class="bg-alt">
    <div class="container">
      <div class="split split-why">
        <div class="split-content">
          <h2>Kitchens Built to Live In</h2>
          <span class="section-rule"></span>
          <p>The kitchen is where most barndominium owners spend the budget &mdash; and the time. We build kitchens with full-height custom cabinetry, quartz or granite countertops, large center islands, pendant lighting, walk-in pantries, and the appliance packages you actually want to cook on.</p>
          <ul class="check-list">
            <li>Custom cabinets in your choice of finish, depth, and door style</li>
            <li>Quartz, granite, or butcher block countertops with waterfall edges available</li>
            <li>Large islands with seating, prep sinks, and integrated power</li>
            <li>Pendant lighting, under-cabinet LED, and dimmable recessed</li>
            <li>Walk-in pantry with built-in shelving</li>
          </ul>
        </div>
        <div class="split-image">
          <img src="/assets/images/custom-kitchen-build-out-with-gray-cabinets-and-480.webp" alt="Custom barndominium kitchen with gray cabinets, quartz countertops, and pendant lights" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT 4 — image left, indoor/outdoor -->
  <section>
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="/assets/images/bi-fold-glass-doors-opening-to-a-covered-patio-i-960.webp" srcset="/assets/images/bi-fold-glass-doors-opening-to-a-covered-patio-i-480.webp 480w, /assets/images/bi-fold-glass-doors-opening-to-a-covered-patio-i-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Bi-fold glass doors opening to a covered patio in a Homerun Fabrication barndominium" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2>Indoor-Outdoor Living</h2>
          <span class="section-rule"></span>
          <p>Bi-fold or sliding patio door packages, covered porches, and wood-post overhangs let you open up the back of the house and live half-outside when the weather's right. This is one of the things barndominiums do well that conventional homes don't &mdash; the steel structure handles the wide spans, so you can open up an entire wall.</p>
          <p>We've built porches running the length of the home, breezeway connectors between living and shop space, and full outdoor kitchens under steel-roofed cover.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Barndominium Build Process</h2>
        <p class="section-sub">From concept to keys &mdash; here's how a Homerun Fabrication barndo gets built.</p>
      </div>
      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="pen-tool"></i></div>
          <h3>1. Design &amp; Plans</h3>
          <p>Floor plan, finish selections, shop integration, and a written scope you can build to.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="construction"></i></div>
          <h3>2. Pad &amp; Steel</h3>
          <p>Concrete pad, red-iron column and rafter erection, purlins, bracing, and roof sheeting.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="layers"></i></div>
          <h3>3. Frame &amp; Enclose</h3>
          <p>Wood interior framing, ZIP System, metal siding, windows, doors, and a sealed envelope.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="key"></i></div>
          <h3>4. Finish &amp; Handoff</h3>
          <p>Drywall, cabinets, flooring, fixtures, trim &mdash; final walkthrough and keys.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK 2 -->
  <section>
    <div class="container">
      <div class="answer-block" data-animate>
        <h3>How long does a barndominium take?</h3>
        <p>Most single-story barndominium builds run 5 to 7 months from concrete pour to finished walkthrough. Two-story builds and larger custom finish packages typically run 7 to 10 months. The biggest variables are material lead times, weather, and custom finish selections &mdash; we'll give you a realistic schedule when we quote the work, not an optimistic one.</p>
      </div>
    </div>
  </section>

  <!-- INLINE CTA -->
  <section>
    <div class="container">
      <div class="inline-cta">
        <div>
          <h3>Ready to Plan Your Barndominium?</h3>
          <p>Bring us the floor plan idea &mdash; or just the dirt.</p>
        </div>
        <div class="inline-cta-buttons">
          <a href="/contact" class="btn-primary">Start a Build</a>
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
        <h2>Barndominium FAQs</h2>
        <p class="section-sub">The questions we get most from Texas Panhandle landowners.</p>
      </div>
      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>How much does a barndominium cost in the Texas Panhandle?</summary>
          <div class="faq-answer">Finished barndominiums in the Amarillo area generally run $150 to $225 per square foot turnkey, depending on finish level, ceiling heights, kitchen and bath upgrades, and shop space included. A 2,000 sq ft single-story finished build typically lands between $300,000 and $450,000.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Can you build a two-story barndominium?</summary>
          <div class="faq-answer">Yes. We've built single-story, two-story, and shop-with-living-quarters barndominium configurations. Two-story builds use heavier column gauge and engineered floor joists, and are common when site footprint is limited or when the owner wants more interior square footage without doubling the slab.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>What kind of interior finishes do you install?</summary>
          <div class="faq-answer">Custom kitchens with quartz or granite countertops, full bathrooms with tile showers, LVP and tile flooring, stacked stone fireplaces, wood beam ceilings, custom cabinetry, walk-in closets, and trim-out. We work to your finish selections or help you pick from samples we've used on past builds.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Do barndominiums hold up in West Texas wind?</summary>
          <div class="faq-answer">Yes, when they're engineered correctly. Every Homerun Fabrication barndominium uses red-iron steel framing rated for 115 to 120 mph wind loads, with bracing, gauge, and anchor bolt patterns specified for the site exposure category. Steel-frame construction handles Panhandle wind better than conventional stick-framed homes.</div>
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
          <p>Just need the shell? Start with a turnkey steel shop or commercial building.</p>
          <a href="/services/steel-buildings">Steel Buildings &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Custom Fabrication</h4>
          <p>Custom welding and steel components for your build &mdash; railings, brackets, and more.</p>
          <a href="/services/custom-fabrication">Custom Fabrication &rarr;</a>
        </div>
        <div class="related-card">
          <h4>Pipe Fencing</h4>
          <p>Pair your barndo with welded pipe fencing for the perimeter or pasture.</p>
          <a href="/services/pipe-fencing">Pipe Fencing &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Build the Barndo You Actually Want</h2>
      <p>Custom designed, steel framed, and fully finished by one accountable crew.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
