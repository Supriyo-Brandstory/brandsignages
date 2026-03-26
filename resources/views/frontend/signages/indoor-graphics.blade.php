@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Indoor Graphics – Define Your Interior Brand Identity',
                'desc' =>
                    'Professionally crafted indoor graphics that enhance ambiance, reinforce brand messaging, and create inspiring interior environments for every business.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'Smart Indoor Signage for Corporate & Commercial Spaces',
                'desc' =>
                    'Our indoor graphics deliver consistent brand communication across every touchpoint — from retail floors to corporate lobbies and healthcare corridors.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'High-Resolution Indoor Graphics with Flawless Finishes',
                'desc' =>
                    'Premium materials and precision printing ensure every indoor graphic looks sharp, vibrant, and professional in any lighting condition.',
            ],
        ];
    @endphp

    <div class="hero-slides-wrapper" id="heroSlider">
        @foreach ($slides as $slide)
            <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                <img src="/frontend/Images/led-sign-board/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">
                <div class="hero-dark-overlay">
                    <div class="container container-large">
                        <div class="hero-content-final">
                            <h1 class="hero-msg-title">{{ $slide['title'] }}</h1>
                            <p class="hero-msg-desc">{{ $slide['desc'] }}</p>
                            <div class="hero-msg-actions">
                                <a href="{{ route('contact_us') }}" class="btn-impact primary">
                                    I am Interested <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="{{ route('contact_us') }}" class="btn-impact secondary">
                                    Get a Quote <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="hero-pagination-dots">
        @foreach ($slides as $index => $slide)
            <div class="dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
        @endforeach
    </div>
</section>

<section class="instant-pricing">
    <div class="container py-5">
        <h2>Make Every Interior Space Work Harder with Indoor Graphics <br>by Brand Signages</h2>
        <p>Indoor graphics are the backbone of a cohesive interior brand environment. At Brand Signages, we design and
            produce a comprehensive range of indoor graphic solutions — including
            <a href="ceiling-graphics" style="color:#E43D12; text-decoration:none;"><b>ceiling graphics</b></a>,
            <a href="floor-decals" style="color:#E43D12; text-decoration:none;"><b>floor decals</b></a>,
            <a href="window-films" style="color:#E43D12; text-decoration:none;"><b>window films</b></a>,
            acrylic standoff prints, <b>foam board displays</b>, and fabric lightboxes designed for businesses that
            want a distinctive and high-impact interior environment across every touchpoint.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => 'ig-1', 'title' => 'Ceiling & Hanging Graphics', 'class' => 'red-title'],
                    ['img' => 'ig-2', 'title' => 'Floor Decals & Wayfinding', 'class' => 'red-title'],
                    ['img' => 'ig-3', 'title' => 'Window Films & Frosted Glass', 'class' => 'red-title'],
                    ['img' => 'ig-4', 'title' => 'Foam Board & Standoff Displays', 'class' => 'red-title'],
                    ['img' => 'ig-5', 'title' => 'Fabric & Backlit Displays', 'class' => 'red-title'],
                ];
            @endphp
            @foreach ($galleryItems as $item)
                <div class="impact-card">
                    <div class="impact-card-inner">
                        <img src="/frontend/Images/large-graphics/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}" class="impact-image">
                        <div class="impact-title-box">
                            <span class="{{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <a href="#pricing"><button class="contact-btn">Check Pricing</button></a>
    </div>
</section>

<section class="led-signs-manufacturing">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-imagex">
                    <img src="{{ asset('frontend/Images/large-graphics/ig-6.webp') }}" alt="Indoor Graphics by Brand Signages" class="img-fluid rounded-3">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Indoor Graphics: Where Design Meets Direction</h2>
                <p class="brand-description">
                    The interior of your space is a direct extension of your brand. Strategic indoor graphics guide visitors,
                    reinforce brand values, and create an atmosphere that leaves a lasting impression. From wayfinding systems
                    that reduce confusion to bold brand installations that inspire your team, indoor graphics serve every
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail store</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>corporate office</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>hospital</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>hotel lobby</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>educational institution</strong></a>
                    across India.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Comprehensive Wayfinding:</b> Direct customers and staff effortlessly through complex
                        environments with intuitive, clearly printed directional graphic systems.
                    </li>
                    <li class="mb-3">
                        <b>Consistent Brand Atmosphere:</b> Maintain a unified visual identity across all interior spaces,
                        from reception areas to restrooms and stairwells.
                    </li>
                    <li>
                        <b>Flexible Display Formats:</b> Choose from rigid, flexible, backlit, or fabric formats to suit
                        any interior design requirement and budget.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/indoor-graphics" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive Indoor Graphics</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ig-7.webp') }}" class="card-img-center" alt="Retail POS Graphics">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Retail Point-of-Sale Graphics</h5>
                                <p class="We-Elevate-Brands-text">Eye-catching in-store displays that drive purchase decisions and highlight offers, promotions, and new arrivals effectively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ig-8.webp') }}" class="card-img-center" alt="Office Wayfinding">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Office Wayfinding Systems</h5>
                                <p class="We-Elevate-Brands-text">Cohesive directional graphics that make navigation intuitive and reinforce professional branding across your entire office floor.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ig-9.webp') }}" class="card-img-center" alt="Backlit Fabric Lightboxes">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Backlit Fabric Lightboxes</h5>
                                <p class="We-Elevate-Brands-text">Vibrant, evenly illuminated fabric graphics that command attention in any low-light interior setting or branded display environment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ig-10.webp') }}" class="card-img-center" alt="Floor Graphics">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Floor Graphics & Decals</h5>
                                <p class="We-Elevate-Brands-text">Anti-slip, high-durability floor graphics ideal for wayfinding, promotional messaging, and branded experiences in high-footfall areas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ig-11.webp') }}" class="card-img-center" alt="Window Films">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Window Films & Frosted Glass</h5>
                                <p class="We-Elevate-Brands-text">Decorative and functional window films that add privacy, aesthetics, and brand presence to glass partitions and shopfront windows.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="We-Elevate-Brands-nav">
                    <div class="We-Elevate-Brands-button-prev"></div>
                    <div class="We-Elevate-Brands-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ig-section">
  <div class="ig-container">
 
    <div class="ig-grid">
 
      <div class="ig-card ig-card--retail">
        <div class="ig-card__img-wrap">
          <img src="frontend/Images/large-graphics/ig-12.webp" alt="Indoor Retail Graphics"/>
        </div>
        <div class="ig-card__strip"></div>
        <div class="ig-card__body">
          <p class="ig-card__label">Retail &amp; Commercial</p>
          <h3 class="ig-card__title">Retail &amp; Commercial Interiors</h3>
          <ul class="ig-features">
            <li>
              <span class="ig-feat__icon"><i class="fas fa-store"></i></span>
              <span class="ig-feat__text">POS &amp; In-Store Display Graphics</span>
            </li>
            <li>
              <span class="ig-feat__icon"><i class="fas fa-palette"></i></span>
              <span class="ig-feat__text">Full-Colour CMYK Precision Print</span>
            </li>
            <li>
              <span class="ig-feat__icon"><i class="fas fa-layer-group"></i></span>
              <span class="ig-feat__text">Matte, Gloss &amp; Backlit Options</span>
            </li>
          </ul>
        </div>
      </div>
 
      <div class="ig-card ig-card--corp">
        <div class="ig-card__img-wrap">
          <img src="frontend/Images/large-graphics/ig-13.webp" alt="Corporate Indoor Graphics"/>
        </div>
        <div class="ig-card__strip"></div>
        <div class="ig-card__body">
          <p class="ig-card__label">Corporate &amp; Office</p>
          <h3 class="ig-card__title">Corporate &amp; Office Interiors</h3>
          <ul class="ig-features">
            <li>
              <span class="ig-feat__icon"><i class="fas fa-building"></i></span>
              <span class="ig-feat__text">Wayfinding &amp; Directional Systems</span>
            </li>
            <li>
              <span class="ig-feat__icon"><i class="fas fa-ruler-combined"></i></span>
              <span class="ig-feat__text">Custom Sizes for Any Space</span>
            </li>
            <li>
              <span class="ig-feat__icon"><i class="fas fa-calendar-check"></i></span>
              <span class="ig-feat__text">3–5 Year Indoor Lifespan</span>
            </li>
          </ul>
        </div>
      </div>
 
    </div>
 
  </div>
</section>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
    :root {
      --cream:   #f5f2ec;
      --white:   #ffffff;
      --ink:     #1a1a1a;
      --ink-mid: #4a4a4a;
      --ink-lt:  #888;
      --accent:  #c8a96e;
      --accent2: #3d6b5e;
      --rule:    #e0dbd2;
    }
 
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
    }
 
    /* ── SECTION ───────────────────────────────── */
    .ig-section {
      background: var(--cream);
      padding: 90px 24px;
      position: relative;
      overflow: hidden;
    }
 
    /* subtle diagonal texture */
    .ig-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        repeating-linear-gradient(
          -45deg,
          transparent,
          transparent 40px,
          rgba(200,169,110,.05) 40px,
          rgba(200,169,110,.05) 41px
        );
      pointer-events: none;
    }
 
    .ig-container {
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }
 
    /* ── EYEBROW ────────────────────────────────── */
    .ig-eyebrow {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 14px;
    }
    .ig-eyebrow span {
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--accent);
    }
    .ig-eyebrow::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--accent);
      opacity: .4;
    }
 
    /* ── HEADING ────────────────────────────────── */
    .ig-heading {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.2rem, 5vw, 3.4rem);
      font-weight: 300;
      color: var(--ink);
      line-height: 1.15;
      margin-bottom: 56px;
      max-width: 520px;
    }
    .ig-heading em {
      font-style: italic;
      color: var(--accent2);
    }
 
    /* ── GRID ───────────────────────────────────── */
    .ig-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
    }
 
    /* ── CARD ───────────────────────────────────── */
    .ig-card {
      background: var(--white);
      border-radius: 3px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      box-shadow: 0 2px 24px rgba(0,0,0,.06);
      transition: transform .35s ease, box-shadow .35s ease;
    }
    .ig-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 48px rgba(0,0,0,.12);
    }
 
    /* image wrapper */
    .ig-card__img-wrap {
      position: relative;
      overflow: hidden;
      height: 240px;
    }
    .ig-card__img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .6s ease;
    }
    .ig-card:hover .ig-card__img-wrap img {
      transform: scale(1.04);
    }
 
    /* colour strip */
    .ig-card--retail  .ig-card__strip { background: var(--accent); }
    .ig-card--corp    .ig-card__strip { background: var(--accent2); }
    .ig-card__strip {
      height: 3px;
      width: 100%;
    }
 
    /* body */
    .ig-card__body {
      padding: 36px 36px 40px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
 
    .ig-card__label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: .18em;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
    .ig-card--retail  .ig-card__label { color: var(--accent); }
    .ig-card--corp    .ig-card__label { color: var(--accent2); }
 
    .ig-card__title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.35rem, 2.4vw, 1.65rem);
      font-weight: 600;
      color: var(--ink);
      line-height: 1.25;
      margin-bottom: 28px;
    }
 
    /* features list */
    .ig-features {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0;
      flex: 1;
    }
 
    .ig-features li {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 14px 0;
      border-bottom: 1px solid var(--rule);
    }
    .ig-features li:first-child { border-top: 1px solid var(--rule); }
 
    .ig-feat__icon {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 14px;
      transition: transform .25s ease;
    }
    .ig-card--retail  .ig-feat__icon { background: #fdf5e8; color: var(--accent); }
    .ig-card--corp    .ig-feat__icon { background: #eaf2ef; color: var(--accent2); }
 
    .ig-features li:hover .ig-feat__icon { transform: scale(1.15) rotate(-5deg); }
 
    .ig-feat__text {
      font-size: 14px;
      font-weight: 400;
      color: var(--ink-mid);
      line-height: 1.45;
    }
 
 
    @media (max-width: 768px) {
      .ig-section { padding: 60px 18px; }
      .ig-grid { grid-template-columns: 1fr; gap: 22px; }
      .ig-card__img-wrap { height: 200px; }
      .ig-card__body { padding: 26px 24px 30px; }
      .ig-heading { margin-bottom: 40px; }
    }
  </style>

<section class="position-relative text-white">
    <img src="{{ asset('frontend/Images/large-graphics/ig-14.webp') }}" class="w-100" style="height:450px; object-fit:cover;" alt="Indoor Graphics CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Indoor Graphics: The Most Captive Branding Space Your Business Owns</h2>
        <p class="text-light mb-4">Every interior surface is an opportunity to communicate, inspire, and convert. Stop letting your walls, floors, and windows go to waste. With Brand Signages' indoor graphics, your interior becomes a high-performance branding machine that works silently every single day.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('contact_us') }}" class="btn text-white fw-semibold px-5 py-3" style="background:#e6390a; border-radius:12px;">I am Interested</a>
            <a href="{{ route('contact_us') }}" class="btn fw-semibold px-5 py-3" style="background:#e9e9e9; color:#222; border-radius:12px;">Get a Quote</a>
        </div>
    </div>
</section>
<style>
@media (max-width: 768px) {
    section.position-relative {
        height: auto !important;
        display: flex;
        flex-direction: column;
    }

    section.position-relative img {
        height: 600px !important; /* Increased height for mobile room */
        object-position: center;
    }

    section.position-relative .translate-middle {
        position: absolute !important;
        top: 50% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) !important;
        width: 90% !important;
        padding: 0 15px;
    }

    section.position-relative h2 {
        font-size: 1.5rem !important;
        line-height: 1.3;
    }

    section.position-relative p {
        font-size: 0.9rem !important;
        margin-bottom: 1.5rem !important;
    }

    section.position-relative .d-flex {
        flex-direction: column !important;
        gap: 10px !important;
    }

    section.position-relative .btn {
        width: 100% !important;
        padding: 12px !important;
        font-size: 0.95rem !important;
    }
}
</style>
<section class="new_client_section container">
    <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
    <div class="row">
        <div class="col-md-5 new_client_section-image col-12">
            <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}" alt="Indoor Graphics Client - Brand Signages">
        </div>
        <div class="col-md-7 new_client_section-scrolling col-12">
            <div class="new_client_section-wrapper">
                <div class="new_client_section-row new_client_section-row-1">
                    @foreach(['client1','client2','client3','client4','client5','client6','client1','client2','client3','client4','client5','client6'] as $c)
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/'.$c.'.webp') }}" alt="Our Client"></div>
                    @endforeach
                </div>
                <div class="new_client_section-row new_client_section-row-2">
                    @foreach(['client7','client8','client9','client10','client11','client12','client7','client8','client9','client10','client11','client12'] as $c)
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/'.$c.'.webp') }}" alt="Our Client"></div>
                    @endforeach
                </div>
                <div class="new_client_section-row new_client_section-row-3">
                    @foreach(['client13','client14','client15','client16','client17','client18','client13','client14','client15','client16','client17','client18'] as $c)
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/'.$c.'.webp') }}" alt="Our Client"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new_testimonial-swiper-section">
    <div class="container">
        <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>
        <div class="position-relative">
            <div class="new_testimonial-button-prev">
                <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40" height="40">
            </div>
            <div class="new_testimonial-button-next">
                <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40" height="40">
            </div>
            <div class="swiper new_testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">Our tech startup needed indoor graphics that matched our innovative spirit. The design team didn't just create signs — they captured our company's entire essence. The graphics have become a conversation starter for every client who visits our office.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Marketing Head – Urban Retail Co.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed stunning, regulation-compliant indoor graphics for our hospital and Brand Signages delivered exactly what we asked for. Their attention to detail is excellent, which helped us significantly enhance the patient experience.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Operations Manager – Horizon Hospitals</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">From the initial concept to final installation, they executed our café indoor graphics project seamlessly. The vibrant prints and window films have created an atmosphere that's become an Instagram favourite among our local customers.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Café Bloom</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed elegant indoor corporate graphics that matched our branding perfectly. Brand Signages impressed us with their quick turnaround, premium finish, and seamless coordination throughout the signage project.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Vikram Sharma</h6><small class="text-muted">Director – Nova Consulting Group</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title py-5">Indoor Graphics FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What types of indoor graphics does Brand Signages offer?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We offer a wide range of indoor graphic solutions including wall murals, floor decals, window films, ceiling graphics, foam board prints, acrylic standoff displays, fabric lightboxes, and point-of-sale display materials — all customized to your brand specifications and space requirements.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can I get fully customized indoor graphics for my business?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer <b>fully customized indoor graphics</b> tailored to your brand identity, space dimensions, and messaging goals. Our design team works closely with you to develop graphics that are both visually compelling and functionally effective across every area of your interior.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What are the advantages of indoor graphics for branding?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Indoor graphics transform ordinary interior surfaces into powerful brand communication tools. They improve wayfinding, elevate the customer experience, reinforce brand identity, boost employee morale, and can be easily updated or replaced without renovation — making them a cost-efficient and highly flexible branding investment.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Are indoor graphics safe for food and healthcare environments?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer materials that are specifically formulated to be non-toxic, low-VOC, and compliant with hygiene standards required in <b>healthcare, food service, and educational environments</b>. Please inform our team of your specific requirements during the consultation process.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long do indoor graphics last?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our indoor graphics typically last <b>3 to 5 years</b> with normal interior conditions. We use premium materials with UV-stable inks that resist fading, peeling, and wear, ensuring your graphics remain impactful throughout their operational lifespan.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How quickly can indoor graphics be produced and installed?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Standard production timelines range from <b>3 to 7 working days</b> depending on size, quantity, and complexity. For urgent requirements, we offer expedited production. Installation is carried out by our trained team and can typically be completed overnight to avoid disruption to your business operations.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can indoor graphics be removed without damaging surfaces?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer removable adhesive options designed to peel away cleanly without leaving residue or damaging the underlying surface. This is ideal for leased premises, temporary campaigns, and seasonal interior updates.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you provide indoor graphic installation across India?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, Brand Signages provides indoor graphic production and professional installation services <b>across Bangalore and all major cities in India within 10 working days</b>. Our installation teams ensure bubble-free application, clean edges, and a perfectly finished result every time.</p></div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.impact-slide');
        const dots = document.querySelectorAll('.dot');
        let current = 0;
        let slideInterval;

        function showImpactSlide(n) {
            slides[current].classList.remove('active');
            dots[current].classList.remove('active');
            current = (n + slides.length) % slides.length;
            slides[current].classList.add('active');
            dots[current].classList.add('active');
        }

        window.goToSlide = function(n) {
            showImpactSlide(n);
            resetInterval();
        }

        function nextImpactSlide() { showImpactSlide(current + 1); }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextImpactSlide, 5000);
        }

        resetInterval();
    });
</script>

@endsection
