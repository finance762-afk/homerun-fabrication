<?php
$pageTitle        = "Steel Buildings & Barndominiums in Amarillo, TX";
$pageDescription  = "Custom steel buildings, barndominiums, and metal fabrication in Amarillo, TX. Ground-up builds across the Texas Panhandle since 2008.";
$canonicalUrl     = "https://homerunfabrication.com/";
$ogImage          = "/assets/images/gxhrvdi-480.webp";
$currentPage      = "home";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;
$heroImagePreload = "/assets/images/gxhrvdi-480.webp";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://homerunfabrication.com/#business",
      "name": "Homerun Fabrication",
      "image": "/assets/images/logo.png",
      "url": "https://homerunfabrication.com/",
      "telephone": "+1-806-671-7930",
      "email": "coreyhomer@att.net",
      "founder": "Corey Homer",
      "foundingDate": "2008",
      "priceRange": "\$\$-\$\$\$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "18771 19th Street",
        "addressLocality": "Amarillo",
        "addressRegion": "TX",
        "postalCode": "79124",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 35.2220,
        "longitude": -101.8313
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        "description": "By Appointment"
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": 35.2220,
          "longitude": -101.8313
        },
        "geoRadius": 128747
      },
      "description": "Homerun Fabrication is a metal fabrication company based in Amarillo, Texas, building custom steel structures, barndominiums, pipe fencing, and agricultural facilities across the Texas Panhandle since 2008."
    },
    {
      "@type": "Organization",
      "@id": "https://homerunfabrication.com/#org",
      "name": "Homerun Fabrication",
      "url": "https://homerunfabrication.com/",
      "logo": "/assets/images/logo.png",
      "founder": "Corey Homer",
      "foundingDate": "2008"
    },
    {
      "@type": "WebSite",
      "url": "https://homerunfabrication.com/",
      "name": "Homerun Fabrication",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://homerunfabrication.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does a barndominium take to build?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most barndominium builds take 4 to 8 months from steel erection to final interior handoff, depending on size, finish level, and weather. A standard 2,000 sq ft single-story build typically falls in the 5 to 6 month range when material lead times are normal."
          }
        },
        {
          "@type": "Question",
          "name": "What size steel buildings do you construct?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We build steel structures from small 30x40 shops up through large commercial and agricultural buildings exceeding 10,000 square feet. Spans, eave heights, and bay layouts are all engineered to spec for the intended use, whether that is equipment storage, livestock, or commercial operations."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle the full build or just the steel work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Homerun Fabrication handles the complete build from the ground up. That includes site prep coordination, steel erection, wood framing, exterior siding and roofing, ZIP System sheathing, windows and doors, insulation, and full interior finishing including kitchens, bathrooms, flooring, and trim."
          }
        },
        {
          "@type": "Question",
          "name": "What areas around Amarillo do you serve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We serve an 80-mile radius from Amarillo, covering the Texas Panhandle including Canyon, Hereford, Borger, Pampa, Dumas, Tulia, Claude, Vega, Bushland, Wildorado, and the surrounding rural communities."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started on a custom project?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Call (806) 671-7930 or send a message through our contact form. We will set up a consultation to walk through your site, intended use, budget range, and design ideas, then provide a written quote with a build timeline."
          }
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

  <!-- ============ HERO ============ -->
  <section class="hero hero-home" aria-label="Homerun Fabrication hero">
    <div class="container">
      <span class="hero-eyebrow">Amarillo, TX &middot; Since 2008</span>
      <h1>Steel Buildings &amp; Barndominiums Built to Last</h1>
      <p class="hero-sub">Custom metal fabrication serving the Texas Panhandle since 2008. From the first steel beam to the final interior trim &mdash; one company, start to finish.</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">Get a Free Quote <i data-lucide="arrow-right"></i></a>
        <a href="/services" class="btn-secondary">View Our Work</a>
      </div>
      <div class="hero-trust">
        <span>Call:</span>
        <a href="tel:+18066717930"><i data-lucide="phone"></i> (806) 671-7930</a>
      </div>
    </div>
  </section>

  <!-- ============ TRUST BADGE STRIP ============ -->
  <section class="trust-strip" aria-label="Key differentiators">
    <div class="container">
      <div class="trust-grid">
        <div class="trust-item">
          <i data-lucide="calendar"></i>
          <span>Since 2008</span>
        </div>
        <div class="trust-item">
          <i data-lucide="map-pin"></i>
          <span>80-Mile Service Radius</span>
        </div>
        <div class="trust-item">
          <i data-lucide="hard-hat"></i>
          <span>Steel Through Finish</span>
        </div>
        <div class="trust-item">
          <i data-lucide="ruler"></i>
          <span>Custom Built to Spec</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ IDENTITY SENTENCE (entity signal, near top of body) ============ -->
  <div class="identity-band">
    <div class="container">
      <p><strong>Homerun Fabrication</strong> is a licensed metal fabrication company based in Amarillo, Texas, building custom steel structures, barndominiums, pipe fencing, and agricultural facilities across the Texas Panhandle.</p>
    </div>
  </div>

  <!-- ============ SERVICES GRID ============ -->
  <section aria-labelledby="services-heading">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2 id="services-heading">What We Build</h2>
        <p class="section-sub">Steel structures and metalwork engineered for West Texas conditions &mdash; from agricultural facilities to fully finished living spaces.</p>
      </div>

      <div class="services-grid">
        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="building-2"></i></div>
          <h3>Steel Buildings</h3>
          <p>Engineered shops, barns, and commercial structures built with red-iron framing, metal siding, and rollup doors sized to your operation.</p>
          <a href="/services/steel-buildings" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="home"></i></div>
          <h3>Barndominiums</h3>
          <p>Steel-frame homes built ground-up &mdash; erection, framing, ZIP System sheathing, exterior, and full interior finish-out under one roof.</p>
          <a href="/services/barndominiums" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="wrench"></i></div>
          <h3>Custom Fabrication</h3>
          <p>MIG and stick welding, structural steel components, brackets, and one-off metalwork built to drawing or to-spec on the shop floor.</p>
          <a href="/services/custom-fabrication" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="fence"></i></div>
          <h3>Pipe Fencing</h3>
          <p>Heavy-duty pipe fencing, cattle pens, working chutes, and corral systems built to take real West Texas livestock pressure.</p>
          <a href="/services/pipe-fencing" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="lightbulb"></i></div>
          <h3>Prototyping</h3>
          <p>Single-unit prototypes and proof-of-concept fabrication for inventors, engineers, and operations refining a design before production.</p>
          <a href="/services/prototyping" class="service-link">Learn More <i data-lucide="arrow-right"></i></a>
        </article>

        <article class="service-card" data-animate>
          <div class="service-icon"><i data-lucide="drafting-compass"></i></div>
          <h3>Industrial Design</h3>
          <p>Engineered steel solutions for ag, oilfield, and commercial operations &mdash; designed and detailed for the load and the environment.</p>
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

  <!-- ============ WHY HOMERUN — split image left ============ -->
  <section class="bg-alt" aria-labelledby="why-heading">
    <div class="container">
      <div class="split split-why">
        <div class="split-image">
          <img src="/assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp" srcset="/assets/images/two-story-barndominium-built-by-homerun-fabricat-480.webp 480w, /assets/images/two-story-barndominium-built-by-homerun-fabricat-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Two-story barndominium built by Homerun Fabrication at dusk in the Texas Panhandle" loading="lazy" width="800" height="600">
        </div>
        <div class="split-content">
          <h2 id="why-heading">Why Homerun Fabrication</h2>
          <span class="section-rule"></span>
          <p>Nearly two decades of building in the Texas Panhandle &mdash; structures engineered for the wind, the heat, and the work they have to do.</p>
          <ul class="feature-list">
            <li>
              <span class="feature-icon"><i data-lucide="layers"></i></span>
              <div>
                <h4>Built Ground-Up</h4>
                <p>Site to slab to steel to interior trim. We don't sub it out and we don't disappear after the frame is up.</p>
              </div>
            </li>
            <li>
              <span class="feature-icon"><i data-lucide="wind"></i></span>
              <div>
                <h4>West Texas Engineered</h4>
                <p>Wind ratings, gauge selection, and bracing specified for Panhandle conditions &mdash; not generic Gulf Coast plans.</p>
              </div>
            </li>
            <li>
              <span class="feature-icon"><i data-lucide="award"></i></span>
              <div>
                <h4>Since 2008</h4>
                <p>Founded by Corey Homer with nearly 20 years of structural and finish-out experience across hundreds of builds.</p>
              </div>
            </li>
            <li>
              <span class="feature-icon"><i data-lucide="hammer"></i></span>
              <div>
                <h4>Steel Frame Through Finished Interior</h4>
                <p>One crew, one accountable contact &mdash; from red iron to kitchen cabinets and bathroom tile.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ STAT COUNTERS ============ -->
  <section class="stats-band" aria-label="Company stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item" data-animate>
          <span class="stat-number"><span data-counter="17" data-suffix="">0</span><span class="stat-suffix">+</span></span>
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

  <!-- ============ FROM STEEL FRAME TO FINISHED INTERIOR — split reverse ============ -->
  <section aria-labelledby="process-heading">
    <div class="container">
      <div class="split split-reverse split-why">
        <div class="split-content">
          <h2 id="process-heading">From Steel Frame to Finished Interior</h2>
          <span class="section-rule"></span>
          <p>Most steel building contractors hand you a shell and walk away. Homerun Fabrication runs the complete build under one company &mdash; so the same crew that sets your I-beams installs your kitchen.</p>
          <p>Steel erection comes first: red-iron columns, purlins, and bracing engineered for Panhandle wind loads. Then wood framing, ZIP System sheathing, metal siding, and roofing seal the envelope. From there it's insulation, electrical and plumbing rough-in, drywall, cabinets, flooring, and trim &mdash; right through to a finished kitchen, bathroom, and living space ready to move into.</p>
          <p>It's how a barndominium should be built: one team, one timeline, one number to call when you have a question.</p>
          <a href="/about" class="btn-secondary btn-dark" style="margin-top: var(--space-md);">More About Homerun &rarr;</a>
        </div>
        <div class="split-image">
          <img src="/assets/images/finished-barndominium-living-room-with-stone-fir-480.webp" alt="Finished barndominium living room with stone fireplace and wood beam ceiling built by Homerun Fabrication" loading="lazy" width="800" height="600">
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WORK GALLERY ============ -->
  <section class="bg-alt" aria-labelledby="gallery-heading">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2 id="gallery-heading">Recent Work</h2>
        <p class="section-sub">Steel buildings, barndominiums, and finished interiors built across the Texas Panhandle.</p>
      </div>

      <div class="gallery-grid">
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/dark-charcoal-barndominium-with-covered-front-po-960.webp" srcset="/assets/images/dark-charcoal-barndominium-with-covered-front-po-480.webp 480w, /assets/images/dark-charcoal-barndominium-with-covered-front-po-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Dark charcoal barndominium with covered front porch built by Homerun Fabrication" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Barndominium</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/finished-steel-shop-interior-with-high-ceilings-960.webp" srcset="/assets/images/finished-steel-shop-interior-with-high-ceilings-480.webp 480w, /assets/images/finished-steel-shop-interior-with-high-ceilings-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Finished steel shop interior with high ceilings and LED lighting" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Shop Interior</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/custom-kitchen-build-out-with-gray-cabinets-and-480.webp" alt="Custom kitchen build-out with gray cabinets and pendant lights inside a Homerun Fabrication barndominium" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Kitchen Build-Out</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/covered-cattle-pen-with-heavy-duty-pipe-railing-960.webp" srcset="/assets/images/covered-cattle-pen-with-heavy-duty-pipe-railing-480.webp 480w, /assets/images/covered-cattle-pen-with-heavy-duty-pipe-railing-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Covered cattle pen with heavy-duty pipe railing in the Texas Panhandle" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Cattle Facilities</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/completed-steel-building-with-tan-siding-and-att-960.webp" srcset="/assets/images/completed-steel-building-with-tan-siding-and-att-480.webp 480w, /assets/images/completed-steel-building-with-tan-siding-and-att-960.webp 960w, /assets/images/completed-steel-building-with-tan-siding-and-att-1600.webp 1600w" sizes="(max-width: 768px) 100vw, 800px" alt="Completed steel building with tan siding and attached garage" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Steel Building</span></figcaption>
        </figure>
        <figure class="gallery-item" data-animate>
          <img src="/assets/images/bi-fold-glass-doors-opening-to-a-covered-patio-i-960.webp" srcset="/assets/images/bi-fold-glass-doors-opening-to-a-covered-patio-i-480.webp 480w, /assets/images/bi-fold-glass-doors-opening-to-a-covered-patio-i-960.webp 960w" sizes="(max-width: 768px) 100vw, 800px" alt="Bi-fold glass doors opening to a covered patio in a custom Homerun Fabrication living space" loading="lazy" width="800" height="600">
          <figcaption class="gallery-overlay"><span class="gallery-label">Custom Living Space</span></figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- ============ PROCESS — How We Build ============ -->
  <section aria-labelledby="how-heading">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2 id="how-heading">How We Build</h2>
        <p class="section-sub">Four phases. One crew. From the first sketch to the keys in your hand.</p>
      </div>

      <div class="process-grid">
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="clipboard-list"></i></div>
          <h3>1. Consultation &amp; Design</h3>
          <p>Site walk, intended use, budget range, and a written scope with engineered drawings.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="construction"></i></div>
          <h3>2. Steel Erection &amp; Framing</h3>
          <p>Red-iron columns, purlins, and wood framing &mdash; plumb, square, and braced for Panhandle wind.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="home"></i></div>
          <h3>3. Exterior &amp; Enclosure</h3>
          <p>ZIP System sheathing, metal siding, roofing, windows, and doors &mdash; sealed against the elements.</p>
        </div>
        <div class="process-step" data-animate>
          <div class="step-num"><i data-lucide="check-circle"></i></div>
          <h3>4. Interior Finishing &amp; Handoff</h3>
          <p>Insulation, drywall, cabinets, flooring, and trim &mdash; finished, walked, and handed over.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="bg-alt" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2 id="faq-heading">Frequently Asked Questions</h2>
        <p class="section-sub">Answers to the questions we get most often from Texas Panhandle property owners.</p>
      </div>

      <div class="faq-list">
        <details class="faq-item" data-animate>
          <summary>How long does a barndominium take to build?</summary>
          <div class="faq-answer">Most barndominium builds take 4 to 8 months from steel erection to final interior handoff, depending on size, finish level, and weather. A standard 2,000 sq ft single-story build typically falls in the 5 to 6 month range when material lead times are normal.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>What size steel buildings do you construct?</summary>
          <div class="faq-answer">We build steel structures from small 30x40 shops up through large commercial and agricultural buildings exceeding 10,000 square feet. Spans, eave heights, and bay layouts are all engineered to spec for the intended use &mdash; equipment storage, livestock, or commercial operations.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>Do you handle the full build or just the steel work?</summary>
          <div class="faq-answer">Homerun Fabrication handles the complete build from the ground up. That includes site prep coordination, steel erection, wood framing, exterior siding and roofing, ZIP System sheathing, windows and doors, insulation, and full interior finishing including kitchens, bathrooms, flooring, and trim.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>What areas around Amarillo do you serve?</summary>
          <div class="faq-answer">We serve an 80-mile radius from Amarillo, covering the Texas Panhandle including Canyon, Hereford, Borger, Pampa, Dumas, Tulia, Claude, Vega, Bushland, Wildorado, and the surrounding rural communities.</div>
        </details>
        <details class="faq-item" data-animate>
          <summary>How do I get started on a custom project?</summary>
          <div class="faq-answer">Call (806) 671-7930 or send a message through our <a href="/contact">contact form</a>. We'll set up a consultation to walk through your site, intended use, budget range, and design ideas, then provide a written quote with a build timeline.</div>
        </details>
      </div>
    </div>
  </section>

  <!-- ============ CLOSING CTA ============ -->
  <section class="closing-cta" aria-label="Get a quote">
    <div class="container">
      <h2>Ready to Build?</h2>
      <p>From custom steel buildings to fully finished barndominiums &mdash; tell us what you need and we'll build it from the ground up.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Request a Quote <i data-lucide="arrow-right"></i></a>
        <a href="tel:+18066717930" class="btn-secondary"><i data-lucide="phone"></i> Call (806) 671-7930</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
