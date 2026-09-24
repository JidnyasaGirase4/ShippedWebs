<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shipped. — Get Your Free Deployment Playbook</title>
<meta name="description" content="See how we ship production-ready websites in 5 days flat — enter your info for the free one-pager.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/lead-funnel.css">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%230B1220'/%3E%3Ccircle cx='50' cy='50' r='16' fill='%234ADE80'/%3E%3C/svg%3E">
</head>
<body>

<main class="page">
  <div class="wrap">

    <a href="/" class="logo" aria-label="Shipped.">
      <img src="/images/logo.png" alt="Shipped." width="160" height="103">
    </a>

    <p class="eyebrow">***For Startups, Founders &amp; Small Businesses ONLY***</p>

    <h1 class="headline">How I Ship Production-Ready Websites In 5 Days (And How You Can Copy Our Exact Deployment Process To Get Your Site Live Faster — Or You Don't Pay)*</h1>

    <p class="subline">Without hiring a slow agency, waiting months on revisions, or launching a site that breaks the moment it gets real traffic</p>

    <p class="subline subline--strong">Enter Your Information Below And We'll Send You A One-Pager On How This Offer Works.</p>

    <button type="button" class="btn-cta" id="openModal">Get Started</button>

  </div>

  <footer class="site-footer">
    <p class="copyright">© Shipped. 2026</p>
    <p class="legal-links">
      <a href="/privacy">Privacy Policy</a> | <a href="#">Terms</a> | <a href="#">Refund Policy*</a> | <a href="#">Full Disclosure</a>
    </p>

    <p class="disclaimer">This site is not a part of the Meta / Facebook website or Meta Platforms, Inc. Additionally, this site is NOT endorsed by Meta or Facebook in any way. FACEBOOK is a trademark of Meta Platforms, Inc.</p>

    <p class="disclaimer">This website is operated and maintained by Shipped. Use of the website is governed by its Terms of Service and Privacy Policy.</p>

    <p class="disclaimer">Shipped. is a web design, development and deployment company. We do not sell a business opportunity, "get rich quick" program, or investment scheme. We build and ship websites — we do not guarantee specific business, traffic, or revenue outcomes from having a website built. All material is intellectual property and protected by copyright. Any duplication, reproduction, or distribution is strictly prohibited. Please see our Full Disclosure for important details.</p>

    <p class="disclaimer">Statements and depictions are the opinions, findings, or experiences of individual clients and generally reflect projects that have purchased our design and development services. Results vary, are not typical, and rely on individual project scope, timeline and third-party factors such as hosting, marketing and industry. Delivery timelines shown are estimates based on prior projects and are not guaranteed for every engagement.</p>

    <p class="disclaimer">The Company may link to content or refer to content and/or services created by or provided by third parties that are not affiliated with the Company. The Company is not responsible for such content and does not endorse or approve it. The Company may provide services by or refer you to third-party businesses. Some of these businesses have common interest and ownership with the Company.</p>
  </footer>
</main>

<!-- ===================== OPT-IN MODAL ===================== -->
<div class="modal-overlay" id="modalOverlay">
  <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <button type="button" class="modal-close" id="closeModal" aria-label="Close">&times;</button>

    <!-- Step 1: lead form -->
    <div class="modal-step" id="stepForm">
      <h2 class="modal-title" id="modalTitle">Enter Your Info Below And We'll Send You A One-Pager On How Our Guaranteed Deployment Process Works.</h2>

      <form id="leadForm" action="{{ route('leads.store') }}" method="POST" novalidate>
        @csrf
        <div class="field">
          <input type="text" id="firstName" name="first_name" placeholder="Enter Your First Name*" required>
        </div>

        <div class="field field--icon">
          <svg class="field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>
          </svg>
          <input type="email" id="email" name="email" placeholder="Enter Your Email Address*" required>
        </div>

        <div class="field field--phone">
          <label class="phone-code" for="countryCode">
            <span class="flag">🌐</span>
            <select id="countryCode" name="country_code" required>
              <option value="+1">+1</option>
              <option value="+44">+44</option>
              <option value="+91">+91</option>
              <option value="+61">+61</option>
              <option value="+971">+971</option>
            </select>
          </label>
          <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
        </div>

        <div class="field">
          <select id="whatYouDo" name="what_you_do" required>
            <option value="" disabled selected>Please describe what best fits you?*</option>
            <option value="founder">Startup Founder</option>
            <option value="business-owner">Small Business Owner</option>
            <option value="freelancer">Freelancer / Consultant</option>
            <option value="agency">Agency</option>
            <option value="marketer">Marketer</option>
            <option value="other">Other</option>
          </select>
        </div>

        <button type="submit" class="btn-cta btn-cta--block">WATCH NOW FOR FREE!</button>
        <p class="form-status" id="formStatus"></p>

        <p class="consent">By submitting this form, you authorise Shipped. &amp; its representatives to contact you with updates and notifications via Email/SMS/WhatsApp/Call. This will override DND/NDNC.</p>
      </form>
    </div>

    <!-- Step 2: video reveal -->
    <div class="modal-step" id="stepVideo" hidden>
      <h2 class="modal-title modal-title--sm">Here's How Our Deployment Process Works</h2>
      <div class="video-frame">
        <video class="video-player" controls playsinline preload="metadata">
          <source src="/images/ShippedWebs_Video_Updated2.mp4" type="video/mp4">
          Your browser does not support HTML video.
        </video>
      </div>
      <p class="consent">Thanks — check your inbox too, we're sending the one-pager over now.</p>
      <a href="/" class="btn-cta btn-cta--block">Visit Our Website</a>
    </div>

  </div>
</div>

<script src="/js/lead-funnel.js"></script>
</body>
</html>
