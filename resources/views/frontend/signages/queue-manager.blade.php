@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Queue Managers – Control Crowds, Elevate Your Brand',
                'desc' =>
                    'Strategically designed queue managers that streamline crowd movement, reduce wait-time frustration, and elevate the overall service experience.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'Professional Crowd Control for High-Traffic Environments',
                'desc' =>
                    'Tailored queue management solutions for airports, banks, hospitals, and retail environments — ensuring organized, safe, and efficient operations.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'Custom Queue Managers with Premium Stainless Steel Finishes',
                'desc' =>
                    'Built with high-grade materials and precision engineering, our queue managers provide long-lasting performance and a professional brand presence.',
            ],
        ];
    @endphp

    <div class="hero-slides-wrapper" id="heroSlider">
        @foreach ($slides as $slide)
            <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                <img src="/frontend/Images/led-sign-board/{{ $slide['img'] }}.webp"
                    alt="{{ $slide['title'] }}">

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
        <h2>Master the Art of Crowd Control with Premium Queue Managers <br>by Brand Signages</h2>
        <p>Queue managers are essential tools for maintaining order and delivering a superior customer experience in busy
            environments. At Brand Signages, we provide precision-engineered queue management systems that blend durability
            with professional aesthetics. Our product range includes expertly crafted
            <a href="retractable-belt-barriers" style="color:#E43D12; text-decoration:none;"><b>retractable belt barriers</b></a>,
            <a href="stainless-steel-stanchions" style="color:#E43D12; text-decoration:none;"><b>stainless steel stanchions</b></a>,
            <a href="wall-mounted-barriers" style="color:#E43D12; text-decoration:none;"><b>wall-mounted barrier units</b></a>,
            custom <b>branded belt stanchions</b>, and heavy-duty crowd control systems designed for businesses that want
            distinctive, high-impact queue management solutions.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => 'qm-1', 'title' => 'Elite Stainless Steel Barriers', 'class' => 'red-title'],
                    ['img' => 'qm-2', 'title' => 'Retail Floor Queue Systems', 'class' => 'red-title'],
                    ['img' => 'qm-3', 'title' => 'Retractable Belt Barriers', 'class' => 'red-title'],
                    ['img' => 'qm-4', 'title' => 'Custom Branded Stanchions', 'class' => 'red-title'],
                    ['img' => 'qm-5', 'title' => 'Heavy-Duty Crowd Control Systems', 'class' => 'red-title'],
                ];
            @endphp

            @foreach ($galleryItems as $item)
                <div class="impact-card">
                    <div class="impact-card-inner">
                        <img src="/frontend/Images/large-graphics/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}"
                            class="impact-image">
                        <div class="impact-title-box">
                            <span class="{{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <a href="#pricing">
            <button class="contact-btn">Check Pricing</button>
        </a>
    </div>
</section>

<section class="led-signs-manufacturing">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-imagex">
                    <img src="{{ asset('frontend/Images/large-graphics/qm-6.webp') }}"
                        alt="Queue Manager by Brand Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="hero-title text-start">Queue Managers: Built with Order & Professionalism</h2>
                <p class="brand-description">
                    Queue managers are much more than simple barriers — they are strategic tools for optimizing space and
                    defining the customer journey. Over the years, professional crowd control solutions have evolved into a
                    must-have operational element for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail checkouts</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>bank lobbies</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>airport terminals</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>healthcare facilities</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>hotels & hospitality venues</strong></a>,
                    and high-footfall commercial spaces across India.
                    Today in 2025, queue managers continue to redefine how businesses handle crowds — offering
                    customization, branding opportunities, and safety-compliant crowd flow solutions.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Optimized Traffic Velocity:</b> A well-placed queue manager isn't just a barrier — it's a
                        flow director. It guides customers through clear pathways, reduces confusion, and maximizes
                        operational throughput at every service point.
                    </li>
                    <li class="mb-3">
                        <b>Safety & Compliance Excellence:</b> Queue managers work around the clock — maintaining secure
                        boundaries, defining emergency lanes, and ensuring a structured, compliant environment in even
                        the most crowded spaces.
                    </li>
                    <li>
                        <b>Premium Brand Image:</b> Quality queue management signals discipline, investment, and
                        professionalism. Customers notice before they reach the counter, and a well-organised queue tells
                        them your service standards are non-negotiable.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/queue-manager" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Product Options for<br>Exclusive Queue Managers</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="retractable-belt-stanchions" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-7.webp') }}"
                                    class="card-img-center" alt="Classic Retractable Stanchions">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="retractable-belt-stanchions">Classic Retractable Stanchions</a></h5>
                                    <p class="We-Elevate-Brands-text">The versatile industry standard for everyday crowd
                                        control in retail and commercial spaces. Available in multiple belt colours and
                                        post finishes to match your brand environment.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="executive-stainless-stanchions" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-8.webp') }}"
                                    class="card-img-center" alt="Executive Stainless Collection">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="executive-stainless-stanchions">Executive Stainless Collection</a></h5>
                                    <p class="We-Elevate-Brands-text">Premium stainless steel stanchions available in
                                        Chrome, Brush, and Gold finishes — ideal for high-end corporate environments,
                                        luxury retail, and premium hospitality venues.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="wall-mounted-barriers" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-9.webp') }}"
                                    class="card-img-center" alt="Wall-Mounted Barrier Units">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="wall-mounted-barriers">Wall-Mounted Barrier Units</a></h5>
                                    <p class="We-Elevate-Brands-text">Fixed, space-saving belt barrier solutions ideal
                                        for doorways, ticket counters, and restricted areas where floor-standing
                                        stanchions are not practical.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="branded-belt-stanchions" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-10.webp') }}"
                                    class="card-img-center" alt="Branded Belt Stanchions">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="branded-belt-stanchions">Custom Branded Belt Stanchions</a></h5>
                                    <p class="We-Elevate-Brands-text">Durable stanchions with custom logo-printed
                                        retractable belts that reinforce your brand identity while maintaining
                                        professional crowd control at every queue point.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="outdoor-crowd-control" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-11.webp') }}"
                                    class="card-img-center" alt="Outdoor Crowd Control Systems">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="outdoor-crowd-control">Outdoor Crowd Control Systems</a></h5>
                                    <p class="We-Elevate-Brands-text">Heavy-duty, weather-resistant stanchion systems
                                        designed specifically for outdoor environments, events, and parking zones —
                                        ensuring long-lasting performance in all conditions.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="rope-barrier-stanchions" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-12.webp') }}"
                                    class="card-img-center" alt="Rope Barrier Stanchions">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="rope-barrier-stanchions">Rope Barrier Stanchions</a></h5>
                                    <p class="We-Elevate-Brands-text">Elegant velvet and twisted rope barrier stanchions
                                        that add a premium, VIP feel to high-end events, theatre lobbies, and exclusive
                                        retail brand environments.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="signage-top-stanchions" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-13.webp') }}"
                                    class="card-img-center" alt="Signage Top Stanchions">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="signage-top-stanchions">Signage Top Stanchions</a></h5>
                                    <p class="We-Elevate-Brands-text">Queue stanchions with integrated signage toppers
                                        for displaying directional information, promotional messages, and wayfinding
                                        content directly at the queue line.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <a href="post-and-chain-barriers" style="text-decoration:none; color:inherit;">
                                <img src="{{ asset('frontend/Images/large-graphics/qm-14.webp') }}"
                                    class="card-img-center" alt="Post and Chain Barriers">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="post-and-chain-barriers">Post & Chain Barriers</a></h5>
                                    <p class="We-Elevate-Brands-text">Sturdy post and chain barrier systems offering
                                        a durable, industrial-grade crowd control solution perfect for parking lots,
                                        warehouses, and large outdoor facilities.</p>
                                </div>
                            </a>
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

<section class="bs-sgn-section">
  <div class="bs-sgn-container">
    <div class="bs-sgn-grid">
      <div class="bs-sgn-card bs-sgn-card--retail">
        <div class="bs-sgn-card__img-wrap">
          <img src="{{ asset('frontend/Images/large-graphics/qm-15.webp') }}" alt="47 Inch Queue Manager"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Compact Control</p>
          <h3 class="bs-sgn-card__title">47" Queue Managers</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-weight-hanging"></i></span>
              <span class="bs-sgn-feat__text">Weight: 5.9 kg</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-arrows-alt-v"></i></span>
              <span class="bs-sgn-feat__text">Full Height: 31.5 Inches</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-arrows-alt-h"></i></span>
              <span class="bs-sgn-feat__text">Full Width: 51.2 Inches</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="bs-sgn-card bs-sgn-card--corp">
        <div class="bs-sgn-card__img-wrap">
          <img src="{{ asset('frontend/Images/large-graphics/qm-16.webp') }}" alt="57 Inch Queue Manager"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Wide Coverage</p>
          <h3 class="bs-sgn-card__title">57" Queue Managers</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-weight-hanging"></i></span>
              <span class="bs-sgn-feat__text">Weight: 6.83 kg</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-arrows-alt-v"></i></span>
              <span class="bs-sgn-feat__text">Full Height: 31.5 Inches</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-arrows-alt-h"></i></span>
              <span class="bs-sgn-feat__text">Full Width: 61.4 Inches</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bs-sgn-cta-section position-relative text-white">
    <img src="{{ asset('frontend/Images/large-graphics/qm-17.webp') }}" class="w-100" style="height:450px; object-fit:cover;" alt="Queue Manager CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Queue Managers: The Most Captive Ad Space Your Brand Can Own</h2>
        <p class="text-light mb-4">Say goodbye to plain ribbons and outdated crowd control methods. Introduce the latest medium of in-queue advertising with our branded queue managers. Showcase your promotional messages, product highlights, and brand visuals directly at the point where customers are most attentive — the queue line.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('contact_us') }}" class="btn text-white fw-semibold px-5 py-3" style="background:#e6390a; border-radius:12px;">I am Interested</a>
            <a href="{{ route('contact_us') }}" class="btn fw-semibold px-5 py-3" style="background:#e9e9e9; color:#222; border-radius:12px;">Get a Quote</a>
        </div>
    </div>
</section>

<section class="new_client_section container">
    <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
    <div class="row">
        <div class="col-md-5 new_client_section-image col-12">
            <img src="{{ asset('frontend/Images/large-graphics/qm-18.webp') }}"
                alt="Queue Manager Installed by Brand Signages">
        </div>
        <div class="col-md-7 new_client_section-scrolling col-12">
            <div class="new_client_section-wrapper">
                <div class="new_client_section-row new_client_section-row-1">
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti - Our Client"></div>
                </div>
                <div class="new_client_section-row new_client_section-row-2">
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara - Our Client"></div>
                </div>
                <div class="new_client_section-row new_client_section-row-3">
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers - Our Client"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon - Our Client"></div>
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
                            <div class="mb-4">
                                <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40">
                            </div>
                            <p class="description">
                                We installed Brand Signages' queue managers across all our retail outlets and the
                                difference has been remarkable. Customer flow is smoother, queues are visibly more
                                organized, and the branded belt stanchions have added a premium feel to our checkout areas.
                            </p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy - Our Client" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="name">Sneha Reddy</h6>
                                    <small class="text-muted">Marketing Head – Urban Retail Co.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4">
                                <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40">
                            </div>
                            <p class="description">
                                Managing patient queues in a hospital is a serious challenge. Brand Signages provided
                                us with durable, regulation-compliant queue managers that have significantly improved
                                the patient experience and reduced crowding in our OPD waiting areas.
                            </p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema - Our Client" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="name">Seema Nayak</h6>
                                    <small class="text-muted">Operations Manager – Horizon Hospitals</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4">
                                <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40">
                            </div>
                            <p class="description">
                                Our café gets extremely busy during weekends and the queue managers from Brand Signages
                                have been a game changer. They look premium, match our brand aesthetic perfectly, and
                                our customers actually appreciate the organized queuing experience.
                            </p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="name">Sandeep Gupta</h6>
                                    <small class="text-muted">Founder – Café Bloom</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4">
                                <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40">
                            </div>
                            <p class="description">
                                We needed professional queue management systems for our corporate office building that
                                matched our brand identity. Brand Signages delivered exactly that — premium stainless
                                steel stanchions with custom branded belts and seamless installation throughout.
                            </p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma - Our Client" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="name">Vikram Sharma</h6>
                                    <small class="text-muted">Director – Nova Consulting Group</small>
                                </div>
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
        <h1 class="faq-title py-5">Queue Manager FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">
                What exactly is a Queue Manager and how does it work?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A queue manager is a crowd control system that uses stanchion posts connected by retractable belts,
                    ropes, or chains to create organized waiting lanes. They guide customers through structured pathways,
                    reduce crowding at service points, and improve the overall flow of people in high-traffic environments
                    like banks, retail stores, airports, and hospitals.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I get customized branded belt stanchions for my business?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we offer <b>fully custom branded queue managers</b> where your corporate logo, tagline, or
                    specific messaging can be printed directly onto the retractable belt. This transforms every queue
                    line into a subtle yet powerful brand touchpoint, reinforcing your identity at every customer
                    interaction.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What types of queue managers does Brand Signages offer?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide classic retractable belt stanchions, executive stainless steel collections, wall-mounted
                    barrier units, rope and velvet barrier stanchions, signage top stanchions, and outdoor heavy-duty
                    crowd control systems. You can choose from <b>multiple finish options</b> including Chrome, Brush
                    Steel, Black, and Gold to suit your brand environment and budget.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the advantages of using professional queue managers?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Professional queue managers improve customer flow, reduce perceived wait times, and enhance the
                    overall service experience. They are durable, low-maintenance, and contribute to a more organized,
                    professional appearance for your business. Branded stanchions also double as advertising assets,
                    making them a multi-functional investment for any high-traffic space.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the customization options for retractable belts?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We offer a wide range of belt lengths — typically <b>2m to 5m</b> — and a full spectrum of belt
                    colours to match your brand palette. Additionally, we provide custom branding services where your
                    corporate logo or specific messaging can be printed directly onto the belt for maximum brand
                    visibility at every queue point.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do Queue Managers improve business efficiency?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Queue managers streamline customer traffic by providing clear visual cues for where to stand and
                    wait. This reduces confusion, minimizes perceived wait times, and allows staff to serve customers
                    in a more structured and professional manner — leading to higher customer satisfaction scores and
                    improved operational productivity.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are your queue management systems suitable for outdoor use?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we offer <b>heavy-duty, weather-resistant stainless steel models</b> designed specifically for
                    outdoor environments, events, parking zones, and open-air venues. These are engineered to withstand
                    rain, UV exposure, and varying temperatures, ensuring long-lasting structural and visual performance
                    in all outdoor conditions.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Long Will It Take to Deliver Queue Managers?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The delivery time for queue managers typically ranges between <b>5 to 10 working days</b> depending
                    on the quantity, finish type, and customization requirements such as branded belt printing. Our
                    team ensures timely production and delivery while maintaining top-notch quality standards throughout
                    the process.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Queue Managers be used as advertising tools?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Absolutely. Queue managers with <b>custom printed retractable belts and signage toppers</b> are
                    highly effective advertising tools. When customers are waiting in a queue, they are a captive
                    audience — making the queue line one of the most underutilized advertising spaces in any retail
                    or commercial environment. Branded stanchions make every second of wait time a brand impression.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What finish options are available for stainless steel stanchions?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our stainless steel queue manager stanchions are available in <b>Chrome, Brushed Steel, Matte Black,
                    and Gold finishes</b>. Each finish is designed to complement different interior design styles —
                    from contemporary corporate offices and luxury retail spaces to modern hospitality venues and
                    healthcare facilities.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you offer affordable queue managers for small businesses?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, Brand Signages offers <b>affordable queue manager solutions</b> without compromising on quality.
                    Whether it's a compact two-stanchion setup for a small boutique or a large multi-lane system for
                    a supermarket, our range includes options to suit every scale of operation and every budget.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do You Provide Queue Manager Installation Support?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we offer <b>complete setup and installation guidance</b> for all queue manager systems.
                    Our team assists with queue layout planning, stanchion placement, and configuration to ensure
                    your crowd control setup is optimized for maximum flow efficiency and visual impact from day one.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do You Deliver Queue Managers PAN India?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we deliver queue managers across Bangalore and <b>all over India within 10 Working Days</b>.
                    Our logistics team ensures secure packaging and careful handling so that every stanchion and belt
                    component reaches you in perfect, ready-to-deploy condition.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Long Do Queue Managers Last?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>High-quality stainless steel queue managers are built for long-term use and typically last
                    <b>7 to 10 years or more</b> with proper maintenance. The retractable belt mechanisms are
                    engineered for millions of extension cycles, ensuring consistent, reliable performance throughout
                    the product's lifespan.</p>
            </div>
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

        function nextImpactSlide() {
            showImpactSlide(current + 1);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextImpactSlide, 5000);
        }

        resetInterval();
    });
</script>

@endsection
