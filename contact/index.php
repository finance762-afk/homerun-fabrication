<?php
$pageTitle        = "Contact Homerun Fabrication | Amarillo, TX";
$pageDescription  = "Contact Homerun Fabrication in Amarillo, TX. Call (806) 671-7930 for steel buildings, barndominiums, and metal fabrication quotes.";
$canonicalUrl     = "https://homerunfabrication.com/contact";
$ogImage          = "https://i.imgur.com/AYsPb3v.jpeg";
$currentPage      = "contact";
$useSwiper        = false;
$useTilt          = false;
$useTyped         = false;

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://homerunfabrication.com/" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://homerunfabrication.com/contact" }
      ]
    },
    {
      "@type": "ContactPage",
      "name": "Contact Homerun Fabrication",
      "url": "https://homerunfabrication.com/contact",
      "mainEntity": {
        "@type": "LocalBusiness",
        "name": "Homerun Fabrication",
        "telephone": "+1-806-671-7930",
        "email": "coreyhomer@att.net",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "18771 19th Street",
          "addressLocality": "Amarillo",
          "addressRegion": "TX",
          "postalCode": "79124",
          "addressCountry": "US"
        }
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
  <section class="page-hero" style="background-image: linear-gradient(180deg, rgba(15,28,36,0.7) 0%, rgba(15,28,36,0.9) 100%), url('https://i.imgur.com/AYsPb3v.jpeg');">
    <div class="container">
      <span class="page-eyebrow">Contact &middot; Amarillo, TX</span>
      <h1>Contact Homerun Fabrication &mdash; Amarillo, TX</h1>
      <p class="page-sub">Tell us what you're building. We'll quote it from the ground up.</p>
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-band">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li aria-current="page">Contact</li>
      </ol>
    </div>
  </div>

  <!-- CONTACT GRID -->
  <section>
    <div class="container">
      <div class="contact-grid">

        <!-- FORM -->
        <div class="contact-form-card">
          <h2>Request a Quote</h2>
          <p class="form-intro">Send us the details of your project &mdash; size, scope, location, and timeline. Corey or someone on the crew will get back to you to set up a site walk.</p>

          <form action="https://db.pageone.cloud/functions/v1/leads/homerun-fabrication" method="POST">
            <input type="hidden" name="_next" value="https://homerunfabrication.com/thank-you">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="New Inquiry from homerunfabrication.com">
            <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
            <input type="text" name="_honey" class="form-honey" tabindex="-1" autocomplete="off">

            <div class="form-row">
              <div class="form-group">
                <input type="text" id="name" name="name" placeholder=" " required>
                <label for="name">Full Name *</label>
              </div>
              <div class="form-group">
                <input type="tel" id="phone" name="phone" placeholder=" " required>
                <label for="phone">Phone *</label>
              </div>
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" placeholder=" " required>
              <label for="email">Email *</label>
            </div>

            <div class="form-group">
              <select id="project_type" name="Project Type" required>
                <option value="">Select Project Type *</option>
                <option value="Steel Building">Steel Building</option>
                <option value="Barndominium">Barndominium</option>
                <option value="Custom Fabrication">Custom Fabrication</option>
                <option value="Pipe Fencing">Pipe Fencing</option>
                <option value="Prototyping">Prototyping</option>
                <option value="Industrial Design">Industrial Design</option>
                <option value="Manufacturing &amp; Assembly">Manufacturing &amp; Assembly</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div class="form-group">
              <textarea id="details" name="Project Details" placeholder=" " required></textarea>
              <label for="details">Project Details *</label>
            </div>

            <button type="submit" class="btn-primary">Send Message <i data-lucide="send"></i></button>
          </form>
        </div>

        <!-- SIDEBAR -->
        <aside class="contact-sidebar">
          <div class="contact-info-card">
            <h3>Get in Touch</h3>

            <div class="contact-row">
              <i data-lucide="phone"></i>
              <div>
                <span class="label">Phone</span>
                <a href="tel:+18066717930">(806) 671-7930</a>
              </div>
            </div>

            <div class="contact-row">
              <i data-lucide="mail"></i>
              <div>
                <span class="label">Email</span>
                <a href="mailto:coreyhomer@att.net">coreyhomer@att.net</a>
              </div>
            </div>

            <div class="contact-row">
              <i data-lucide="map-pin"></i>
              <div>
                <span class="label">Address</span>
                <span class="value">18771 19th Street<br>Amarillo, TX 79124</span>
              </div>
            </div>

            <div class="contact-row">
              <i data-lucide="clock"></i>
              <div>
                <span class="label">Hours</span>
                <span class="value">By Appointment</span>
              </div>
            </div>

            <div class="contact-row">
              <i data-lucide="map"></i>
              <div>
                <span class="label">Service Area</span>
                <span class="value">80-mile radius from Amarillo, TX</span>
              </div>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>

  <!-- MAP -->
  <section class="bg-alt">
    <div class="container">
      <div class="section-head" data-animate>
        <span class="section-rule"></span>
        <h2>Find Us in Amarillo</h2>
        <p class="section-sub">18771 19th Street, Amarillo, TX 79124 &mdash; visits by appointment.</p>
      </div>
      <div class="map-embed" data-animate>
        <iframe
          src="https://www.google.com/maps?q=18771+19th+Street,+Amarillo,+TX+79124&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Map of Homerun Fabrication, Amarillo, TX"></iframe>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
