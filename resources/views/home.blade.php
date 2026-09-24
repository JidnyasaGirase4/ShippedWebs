<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $settings->site_name }} — Websites built like production infrastructure</title>
<meta name="description" content="{{ $settings->meta_description }}">
<meta property="og:title" content="{{ $settings->site_name }} — Websites built like production infrastructure">
<meta property="og:description" content="{{ $settings->meta_description }}">
<meta property="og:type" content="website">
<meta name="author" content="{{ $settings->founder_name }}">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%230B1220'/%3E%3Ccircle cx='50' cy='50' r='16' fill='%234ADE80'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "{{ $settings->site_name }}",
  "founder": {
    "@type": "Person",
    "name": "{{ $settings->founder_name }}",
    "jobTitle": "DevOps Engineer"
  },
  "description": "{{ $settings->meta_description }}"
}
</script>
</head>
@php
  $waLink = 'https://wa.me/'.$settings->whatsapp_number.'?text='.rawurlencode("Hi {$settings->site_name}! 👋\nI'm interested in building a website for my business. I'd like to know more about your services.");
@endphp
<body>

<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

<header>
  <nav>
    <a class="logo" href="/" aria-label="Shipped."><img class="logo-img" src="/images/logo.png" alt="Shipped." width="760" height="240"></a>
    <div class="nav-links">
      <a href="#work">Work</a>
      <a href="#services">Services</a>
      <a href="#process">Process</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="nav-right">
      <a href="#contact" class="nav-cta">Get a quote</a>
      <button type="button" class="btn-book nav-book" data-book>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M3 9.5h18M8 2.5v4M16 2.5v4"/>
        </svg>
        Book a 1:1 meeting
      </button>
      <button class="menu-btn" id="menuBtn" aria-label="Toggle menu" aria-expanded="false">☰</button>
    </div>
  </nav>
  <div class="mobile-menu" id="mobileMenu">
    <a href="#work">Work</a>
    <a href="#services">Services</a>
    <a href="#process">Process</a>
    <a href="#contact">Contact</a>
    <a href="#contact" class="nav-cta">Get a quote</a>
    <button type="button" class="btn-book menu-book" data-book>
      <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M3 9.5h18M8 2.5v4M16 2.5v4"/>
      </svg>
      Book a 1:1 meeting
    </button>
  </div>
</header>

<section class="hero">
  <div>
    <div class="eyebrow"><span class="dash"></span>{{ $settings->hero_eyebrow }}</div>
    <h1>{!! str_replace('shipped', '<span>shipped</span>', e($settings->hero_title)) !!}</h1>
    <p class="lede">{{ $settings->hero_subtitle }}</p>
    <div class="cta-row">
      <a href="#contact" class="btn-primary">Start your project</a>
      <a href="#work" class="btn-ghost">See our work</a>
    </div>
    <button type="button" class="cta-alt" data-book>
      or book a free 1:1 call <span class="arrow" aria-hidden="true">→</span>
    </button>
  </div>

  <!-- Deploy terminal: the pitch, run as a command.
       Decorative, so aria-hidden — the copy already carries the meaning.

       Everything here is flat, natively-rendered text in a plain rectangle.
       That is the whole point: the previous isometric stack pushed small mono
       labels through a perspective matrix and they came out mushy, which is
       why the labels had to live outside it. No 3D subtree, no resample, no
       counter-rotation to maintain — the type stays sharp at any zoom.

       The reveal is one-shot CSS on load (type the command, tick the steps,
       land on green) and then it holds. A looping animation in the hero
       competes with the CTAs for attention; a single run doesn't. -->
  <div class="hero-viz" aria-hidden="true">
    <video class="hero-video" controls playsinline preload="metadata" aria-label="ShippedWebs website deployment video">
      <source src="/images/ShippedWebs_Video_Updated2.mp4" type="video/mp4">
    </video>
    <div class="term">
      <div class="term__bar">
        <span class="term__dots"><i></i><i></i><i></i></span>
        <span class="term__title">shippedwebs — deploy</span>
        <span class="term__env">prod</span>
      </div>

      <div class="term__body">
        <p class="term__cmd"><span class="term__prompt">$</span><span class="term__typed">ship deploy --prod</span></p>

        <ul class="term__steps">
          <li class="term__step" style="--i:0">
            <span class="term__tick">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 12.5 5 5L20 6.5"/></svg>
            </span>
            <span class="term__name">build</span>
            <span class="term__leader"></span>
            <span class="term__time">1.8s</span>
          </li>
          <li class="term__step" style="--i:1">
            <span class="term__tick">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 12.5 5 5L20 6.5"/></svg>
            </span>
            <span class="term__name">optimise assets</span>
            <span class="term__leader"></span>
            <span class="term__time">0.6s</span>
          </li>
          <li class="term__step" style="--i:2">
            <span class="term__tick">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 12.5 5 5L20 6.5"/></svg>
            </span>
            <span class="term__name">deploy to edge</span>
            <span class="term__leader"></span>
            <span class="term__time">2.1s</span>
          </li>
          <li class="term__step" style="--i:3">
            <span class="term__tick">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 12.5 5 5L20 6.5"/></svg>
            </span>
            <span class="term__name">health check</span>
            <span class="term__leader"></span>
            <span class="term__time">200 OK</span>
          </li>
        </ul>

        <div class="term__live">
          <span class="term__pulse"></span>
          <span class="term__live-tag">LIVE</span>
          <span class="term__url">yoursite.com</span>
        </div>

        <ul class="term__stats">
          <li><b>98</b> Lighthouse</li>
          <li><b>0.4s</b> TTFB</li>
          <li><b>99.99%</b> uptime</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="pipeline-strip">
  <div class="wrap">
    <div class="p-stage done"><span class="dot"></span>DESIGN</div>
    <span class="p-arrow">→</span>
    <div class="p-stage done"><span class="dot"></span>BUILD</div>
    <span class="p-arrow">→</span>
    <div class="p-stage done"><span class="dot"></span>DEPLOY</div>
    <span class="p-arrow">→</span>
    <div class="p-stage"><span class="dot"></span>LIVE, MONITORED, YOURS</div>
  </div>
</div>

<div class="stats-strip">
  <div class="wrap">
    @foreach ($stats as $stat)
    <div class="stat">
      <div class="num">{{ $stat->number }}</div>
      <div class="label">{{ $stat->label }}</div>
    </div>
    @endforeach
  </div>
</div>

<section id="work">
  <div class="section-head">
    <div class="eyebrow"><span class="dash"></span>{{ $settings->work_eyebrow }}</div>
    <h2>{{ $settings->work_heading }}</h2>
    <p>{{ $settings->work_subtext }}</p>
  </div>

  <div class="work-grid">

    @foreach ($workItems as $item)
    <article class="work-card">
      <a class="work-shot" href="{{ $item->url }}" target="_blank" rel="noopener"
         aria-label="Open {{ $item->title }} in a new tab">
        <div class="shot-bar">
          <span class="dot"></span><span class="dot"></span><span class="dot"></span>
          <span class="shot-url">{{ $item->display_url }}</span>
        </div>
        <div class="shot-frame">
          <img src="{{ $item->screenshot_url }}" alt="{{ $item->title }} homepage screenshot"
               width="1280" height="860" loading="lazy" decoding="async">
        </div>
        <span class="shot-status"><span class="live-dot"></span>Live</span>
      </a>

      <div class="work-body">
        <h3>{{ $item->title }} @if ($item->category)<span class="work-cat">&mdash; {{ $item->category }}</span>@endif</h3>
        <p class="work-line">{{ $item->description }}</p>
        <ul class="work-tags">@foreach ($item->tagList() as $tag)<li>{{ $tag }}</li>@endforeach</ul>
        <a class="work-link" href="{{ $item->url }}" target="_blank" rel="noopener">Visit the live site <span aria-hidden="true">&rarr;</span></a>
      </div>
    </article>
    @endforeach

  </div>
</section>

<section id="services">
  <div class="section-head">
    <div class="eyebrow"><span class="dash"></span>{{ $settings->services_eyebrow }}</div>
    <h2>{{ $settings->services_heading }}</h2>
    <p>{{ $settings->services_subtext }}</p>
  </div>
  @php
    $serviceIcons = [
      '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M4 9h16"/><path d="M8 14h8"/><path d="M8 17.5h5"/>',
      '<path d="m12 2.5 9 4.75-9 4.75-9-4.75 9-4.75z"/><path d="m3 12 9 4.75L21 12"/><path d="m3 16.75 9 4.75 9-4.75"/>',
      '<ellipse cx="12" cy="6" rx="8" ry="3"/><path d="M4 6v6c0 1.66 3.58 3 8 3s8-1.34 8-3V6"/><path d="M4 12v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"/>',
      '<circle cx="9.5" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2.5 3.5h2.8l2.6 11.1a1.8 1.8 0 0 0 1.8 1.4h7.6a1.8 1.8 0 0 0 1.8-1.4L21 7.2H6.2"/>',
    ];
  @endphp
  <div class="services-grid">
    @foreach ($services as $index => $item)
    <div class="service-card">
      <span class="service-icon">
        <span class="service-num">{{ sprintf('%02d', $index + 1) }}</span>
        <span class="i3d"><span class="i3d__box">
          <span class="i3d__face i3d__face--a"><svg viewBox="0 0 24 24">{!! $serviceIcons[$index % count($serviceIcons)] !!}</svg></span>
          <span class="i3d__face i3d__face--b"><svg viewBox="0 0 24 24"><path d="M4 12h13"/><path d="m12 6.5 6 5.5-6 5.5"/></svg></span>
        </span></span>
      </span>
      <div class="service-body">
        <h3>{{ $item->title }}</h3>
        <p>{{ $item->description }}</p>
      </div>
    </div>
    @endforeach
  </div>
</section>

<section id="process">
  <div class="section-head">
    <div class="eyebrow"><span class="dash"></span>{{ $settings->process_eyebrow }}</div>
    <h2>{{ $settings->process_heading }}</h2>
    <p>{{ $settings->process_subtext }}</p>
  </div>
  <div class="process">
    @foreach ($processSteps as $index => $item)
    <div class="stage-card">
      <div class="stage-num"><span class="i3d__box"><span class="i3d__face i3d__face--a">{{ $index + 1 }}</span><span class="i3d__face i3d__face--b"><svg viewBox="0 0 24 24"><path d="m4 12.5 5 5L20 6.5"/></svg></span></span></div>
      <h3>{{ $item->title }}</h3>
      <p>{{ $item->description }}</p>
    </div>
    @endforeach
  </div>
</section>

<section>
  <div class="section-head">
    <div class="eyebrow"><span class="dash"></span>{{ $settings->why_eyebrow }}</div>
    <h2>{{ $settings->why_heading }}</h2>
  </div>
  <div class="why-grid">
    @foreach ($whyItems as $index => $item)
    <div class="why-item">
      <div class="num">// {{ sprintf('%02d', $index + 1) }}</div>
      <h3>{{ $item->title }}</h3>
      <p>{{ $item->description }}</p>
    </div>
    @endforeach
  </div>
</section>

<section id="testimonials">
  <div class="section-head reveal">
    <div class="eyebrow"><span class="dash"></span>{{ $settings->testimonials_eyebrow }}</div>
    <h2>{{ $settings->testimonials_heading }}</h2>
  </div>
  <div class="testimonial-grid">
    @foreach ($testimonials as $item)
    <div class="testimonial-card reveal">
      <div class="quote-mark">"</div>
      <p class="quote">{{ $item->quote }}</p>
      <div class="who">
        <div class="avatar">{{ $item->avatar_letter }}</div>
        <div>
          <div class="who-name">{{ $item->name }}</div>
          <div class="who-role">{{ $item->role }}</div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<section id="faq">
  <div class="section-head reveal">
    <div class="eyebrow"><span class="dash"></span>{{ $settings->faq_eyebrow }}</div>
    <h2>{{ $settings->faq_heading }}</h2>
  </div>
  <div class="faq-list">
    @foreach ($faqs as $item)
    <div class="faq-item reveal">
      <button class="faq-q">{{ $item->question }} <span class="icon">+</span></button>
      <div class="faq-a"><p>{{ $item->answer }}</p></div>
    </div>
    @endforeach
  </div>
</section>

<section id="contact">
  <div class="contact-box">
    <div>
      <h2>{{ $settings->contact_heading }}</h2>
      <p class="lede">{{ $settings->contact_subtext }}</p>
      <ul class="contact-list">
        <li><b>Response time</b> — {{ $settings->response_time }}</li>
        <li><b>Instagram</b> — <a href="{{ $settings->instagram_url }}" target="_blank" rel="noopener">{{ $settings->instagram_handle }}</a></li>
        <li><b>Email</b> — <a href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a></li>
      </ul>

      <div class="book-panel">
        <p>Rather talk it through? Pick a time that suits you and we'll walk through your idea, scope and budget on a 30-minute call.</p>
        <button type="button" class="btn-book" data-book>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M3 9.5h18M8 2.5v4M16 2.5v4"/>
          </svg>
          Book a 1:1 meeting
        </button>
      </div>
    </div>
    <form id="contactForm" action="{{ route('enquiries.store') }}" method="POST">
      @csrf
      <input type="hidden" name="type" value="contact">

      <label for="name">Your name</label>
      <input type="text" id="name" name="name" required placeholder="Full name">

      <label for="contact">Email or phone</label>
      <input type="text" id="contact" name="contact_value" required placeholder="How should I reach you?">

      <label for="type">What do you need?</label>
      <select id="type" name="project_type">
        <option>Landing page</option>
        <option>Static website</option>
        <option>Dynamic website with admin panel</option>
        <option>E-commerce website with admin panel</option>
        <option>Not sure yet</option>
      </select>

      <label for="details">Tell me a bit more</label>
      <textarea id="details" name="details" placeholder="What's the site for, and any deadline?"></textarea>

      <button type="submit" class="btn-primary">Send request</button>
      <div class="form-status" id="formStatus"></div>
    </form>
  </div>
</section>

<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <a class="logo" href="/" aria-label="Shipped."><img class="logo-img" src="/images/logo.png" alt="Shipped." width="760" height="240"></a>
      <p>{{ $settings->footer_tagline }}</p>
      <span class="footer-status"><span class="dot"></span>{{ $settings->availability_text }}</span>
    </div>

    <nav class="footer-col" aria-label="Explore">
      <h4>Explore</h4>
      <ul>
        <li><a href="#services">Services</a></li>
        <li><a href="#process">Process</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="/lead-funnel">Free Deployment Playbook</a></li>
        <li><a href="/privacy">Privacy Policy</a></li>
      </ul>
    </nav>

    <nav class="footer-col" aria-label="Get in touch">
      <h4>Get in touch</h4>
      <ul>
        <li>
          <a class="social-link social-wa" href="{{ $waLink }}" target="_blank" rel="noopener">
            <span class="social-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.15c-1.48 0-2.93-.4-4.19-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.7 8.24-8.23 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43-.14-.01-.31-.01-.48-.01-.17 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.25 3.74.59.26 1.06.41 1.42.52.6.19 1.14.16 1.57.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.14-1.18-.06-.11-.22-.17-.47-.29z"/></svg>
            </span>
            WhatsApp
          </a>
        </li>
        <li>
          <a class="social-link social-ig" href="{{ $settings->instagram_url }}" target="_blank" rel="noopener">
            <span class="social-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41-.56-.22-.96-.48-1.38-.9-.42-.42-.68-.82-.9-1.38-.16-.42-.36-1.06-.41-2.23-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41 1.27-.06 1.65-.07 4.85-.07M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63c-.79.3-1.46.72-2.13 1.38C1.35 2.68.93 3.35.63 4.14.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.3.79.72 1.46 1.38 2.13.67.66 1.34 1.08 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56.79-.3 1.46-.72 2.13-1.38.66-.67 1.08-1.34 1.38-2.13.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91-.3-.79-.72-1.46-1.38-2.13C21.32 1.35 20.65.93 19.86.63 19.1.33 18.22.13 16.95.07 15.67.01 15.26 0 12 0z"/><path d="M12 5.84A6.16 6.16 0 1 0 18.16 12 6.16 6.16 0 0 0 12 5.84zM12 16a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"/><circle cx="18.41" cy="5.59" r="1.44"/></svg>
            </span>
            {{ $settings->instagram_handle }}
          </a>
        </li>
        <li>
          <a class="social-link social-mail" href="mailto:{{ $settings->contact_email }}">
            <span class="social-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 2v.51l-8 4.99-8-4.99V6h16zm0 12H4V8.87l7.47 4.66a1 1 0 0 0 1.06 0L20 8.87V18z"/></svg>
            </span>
            {{ $settings->contact_email }}
          </a>
        </li>
        <li>
          <a class="social-link social-arrow" href="#contact">
            <span class="social-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h14M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            Start a project
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="footer-bottom">
    <p>&copy; <span id="year"></span> {{ $settings->site_name }} All rights reserved.</p>
    <p>Built like production infrastructure by {{ $settings->founder_name }}.</p>
  </div>
</footer>

<div class="floating-contact">
  <a href="{{ $waLink }}" class="fab whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm0 18.15c-1.48 0-2.93-.4-4.19-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.7 8.24-8.23 8.24zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43-.14-.01-.31-.01-.48-.01-.17 0-.43.06-.66.31-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.25 3.74.59.26 1.06.41 1.42.52.6.19 1.14.16 1.57.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.14-1.18-.06-.11-.22-.17-.47-.29z"/></svg>
  </a>
</div>

<button class="back-to-top" id="backToTop" aria-label="Back to top">↑</button>

<!-- ==========================================================================
     BOOKING OVERLAY
     Three steps live in here at once; script.js shows exactly one at a time.
     The markup is inert until script.js wires it up — the calendar grid and
     the slot list are both rendered from JS, so nothing here hardcodes a date.
     ========================================================================== -->
<div class="booking-overlay" id="bookingOverlay" role="dialog" aria-modal="true" aria-labelledby="bookingTitle" hidden>
  <div class="booking-modal">
    <button class="booking-close" id="bookingClose" aria-label="Close booking">✕</button>

    <aside class="booking-aside">
      <img class="logo-img" src="/images/logo.png" alt="Shipped." width="760" height="240">
      <h3 id="bookingTitle">Project discovery
         call</h3>
      <p>A 1:1 call where we go through what you're building, what it needs to do, and what it'll cost. No pitch deck.</p>
      <ul class="booking-meta">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
          <span id="bookingDuration">30 min</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="6" width="13" height="12" rx="2"/><path d="M15.5 10.5l6-3.5v10l-6-3.5z"/></svg>
          Google Meet
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 0 1 0 18a15 15 0 0 1 0-18z"/></svg>
          <span id="bookingTz">Asia/Kolkata</span>
        </li>
        <li class="picked" id="bookingPicked" hidden>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M3 9.5h18M8 2.5v4M16 2.5v4"/></svg>
          <span id="bookingPickedText"></span>
        </li>
      </ul>
    </aside>

    <div class="booking-main">

      <!-- step 1 — day + slot -->
      <section class="booking-step active" data-step="1">
        <div class="booking-pick">
          <div class="cal-col">
            <div class="cal-head">
              <span class="cal-month" id="calMonth">—</span>
              <div class="cal-nav">
                <button type="button" id="calPrev" aria-label="Previous month">‹</button>
                <button type="button" id="calNext" aria-label="Next month">›</button>
              </div>
            </div>
            <div class="cal-grid" id="calGrid" role="grid" aria-labelledby="calMonth"></div>
            <p class="cal-note" id="calNote"></p>
          </div>

          <div class="slot-col">
            <div class="slot-head" id="slotHead">Pick a date</div>
            <div class="slot-list" id="slotList">
              <p class="slot-empty">Pick a day to see the open times.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- step 2 — details. Posts to the same Formspree inbox as the contact form. -->
      <section class="booking-step" data-step="2">
        <h4>Your details</h4>
        <p class="step-lede">So I know who I'm meeting and what to prepare.</p>

        <form class="booking-form" id="bookingForm" action="{{ route('enquiries.store') }}" method="POST">
          @csrf
          <input type="hidden" name="type" value="booking">

          <div class="field">
            <label for="bkName">Your name <span class="req">*</span></label>
            <input type="text" id="bkName" name="name" required autocomplete="name" placeholder="Full name">
          </div>
          <div class="field">
            <label for="bkEmail">Email address <span class="req">*</span></label>
            <input type="email" id="bkEmail" name="email" required autocomplete="email" placeholder="you@company.com">
          </div>
          <div class="field">
            <label for="bkPhone">Phone / WhatsApp <span class="req">*</span></label>
            <input type="tel" id="bkPhone" name="phone" required autocomplete="tel" placeholder="+91 …">
          </div>
          <div class="field">
            <label for="bkBudget">Budget <span class="req">*</span></label>
            <select id="bkBudget" name="budget" required>
              <option value="">Select a range</option>
              <option>Under ₹15,000</option>
              <option>₹15,000 – ₹40,000</option>
              <option>₹40,000 – ₹1,00,000</option>
              <option>₹1,00,000+</option>
              <option>Not sure yet</option>
            </select>
          </div>
          <div class="field full">
            <label for="bkNotes">Anything that would help me prepare</label>
            <textarea id="bkNotes" name="details" placeholder="What the site is for, what you already have, any deadline."></textarea>
          </div>

          <!-- filled in by script.js from the slot chosen in step 1 -->
          <input type="hidden" name="requested_date" id="bkDate">
          <input type="hidden" name="requested_time" id="bkTime">
          <input type="hidden" name="timezone" id="bkTzField">
          <input type="hidden" name="visitor_timezone" id="bkVisitorTz">
          <div class="hp" aria-hidden="true">
            <label for="bkGotcha">Leave this empty</label>
            <input type="text" id="bkGotcha" name="_gotcha" tabindex="-1" autocomplete="off">
          </div>

          <div class="booking-actions">
            <button type="button" class="booking-back" id="bookingBack">← Back to calendar</button>
            <button type="submit" class="btn-primary" id="bookingSubmit">Confirm booking</button>
          </div>
          <div class="form-status" id="bookingStatus" role="status" aria-live="polite"></div>
        </form>
      </section>

      <!-- step 3 — confirmation -->
      <section class="booking-step" data-step="3">
        <div class="booking-done">
          <div class="tick" aria-hidden="true">✓</div>
          <h4>Time held.</h4>
          <p>Your request is in my inbox. I'll confirm by email and send the Google Meet link — usually within a few hours.</p>
          <div class="when" id="bookingWhen"></div>
          <div class="done-actions">
            <a class="btn-book" id="bookingGcal" href="#" target="_blank" rel="noopener">
              <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M3 9.5h18M8 2.5v4M16 2.5v4"/>
              </svg>
              Add to my calendar
            </a>
            <button type="button" class="btn-primary" id="bookingDoneClose">Done</button>
          </div>
        </div>
      </section>

    </div>
  </div>
</div>

<script src="/js/script.js"></script>
</body>
</html>
