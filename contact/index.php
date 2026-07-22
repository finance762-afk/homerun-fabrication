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

            <!-- spam shield: signed render timestamp + JS interaction signal -->
            <?php $__ft_ts = (string) time(); ?>
            <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'); ?>">
            <input type="hidden" name="_js" value="" class="js-shield-field">
            <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
            <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
            <?php } ?>
            <?php if (empty($GLOBALS['__p1_consent_css'])) { $GLOBALS['__p1_consent_css'] = 1; ?>
            <style>
            .p1-consent{margin:14px 0;text-align:left}
            .p1-consent-set{border:0;margin:0;padding:0}
            .p1-consent-legend{font-size:13px;font-weight:600;padding:0;margin-bottom:6px}
            .p1-consent-item{display:flex;gap:8px;align-items:flex-start;margin-bottom:8px;font-size:12px;line-height:1.5;cursor:pointer}
            .p1-consent-item input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
            .p1-consent-line{display:flex;gap:8px;align-items:flex-start;font-size:12px;line-height:1.45;cursor:pointer}
            .p1-consent-line input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
            .p1-consent a{text-decoration:underline}
            </style>
            <?php } ?>
            <!-- TCPA 2025/2026 consent — terms_accepted is REQUIRED by the leads endpoint -->
            <div class="p1-consent">
              <fieldset class="p1-consent-set">
                <legend class="p1-consent-legend">Communication Consent</legend>
                <label class="p1-consent-item">
                  <input type="checkbox" name="email_opt_in" value="yes">
                  <span><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo htmlspecialchars($siteName ?? ($site['name'] ?? 'us')); ?>
                  about my inquiry, services, and promotions. I can unsubscribe at any time.</span>
                </label>
                <label class="p1-consent-item">
                  <input type="checkbox" name="sms_opt_in" value="yes">
                  <span><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                  <?php echo htmlspecialchars($siteName ?? ($site['name'] ?? 'us')); ?> at the number provided (appointment reminders, service updates, offers).
                  Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe,
                  HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
                </label>
                <label class="p1-consent-item">
                  <input type="checkbox" name="terms_accepted" value="yes" required>
                  <span>I have read and agree to the Terms of Service and Privacy Policy *</span>
                </label>
              </fieldset>
            </div>
            <input type="hidden" name="_consent_version" value="v2.1">
            <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? ''); ?>">
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
