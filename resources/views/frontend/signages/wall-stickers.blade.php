@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Wall Stickers – Bold, Bright & Ready to Impress',
                'desc' =>
                    'Our custom wall stickers combine vibrant full-colour printing with easy application, giving any wall an instant visual upgrade without the need for renovations.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'Decorative & Branded Wall Stickers for Every Interior',
                'desc' =>
                    'From minimalist logo stickers to full-panel illustrated designs, our wall stickers are crafted to complement any interior style and brand personality.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'Custom Printed Wall Stickers – Vivid, Durable & On-Brand',
                'desc' =>
                    'Produced on premium self-adhesive vinyl with UV-resistant inks, our wall stickers deliver lasting colour, clean edges, and effortless application every time.',
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
        <h2>Elevate Your Space with Eye-Catching Wall Stickers <br>by Brand Signages</h2>
        <p>Wall stickers are a versatile and cost-effective way to add personality, colour, and brand identity to any interior space.
            At Brand Signages, we produce custom wall stickers on premium self-adhesive vinyl using high-resolution digital printing
            that delivers vivid colour, sharp detail, and long-lasting finish. Our collection includes expertly produced
            <a href="wall-decals" style="color:#E43D12; text-decoration:none;"><b>precision wall decals</b></a>,
            <a href="wall-murals" style="color:#E43D12; text-decoration:none;"><b>full-wall murals</b></a>,
            <a href="vinyl-wall-wraps" style="color:#E43D12; text-decoration:none;"><b>vinyl wall wraps</b></a>,
            custom <b>wall graphics</b>, and decorative stickers designed for brands, businesses, and spaces that want
            a fresh, impactful look applied quickly and affordably.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => '1', 'title' => 'Branded Office Wall Stickers', 'class' => 'red-title'],
                    ['img' => '2', 'title' => 'Retail Window & Wall Stickers', 'class' => 'red-title'],
                    ['img' => '3', 'title' => 'Illustrated Decorative Stickers', 'class' => 'red-title'],
                    ['img' => '4', 'title' => 'Cut-Out Shape Wall Stickers', 'class' => 'red-title'],
                    ['img' => '5', 'title' => 'Large Format Wall Sticker Panels', 'class' => 'red-title'],
                ];
            @endphp
            @foreach ($galleryItems as $item)
                <div class="impact-card">
                    <div class="impact-card-inner">
                        <!-- <img src="/frontend/Images/led/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}" class="impact-image"> -->
                        <img src="/frontend/Images/large-graphics/ws-{{ $item['img'] }}.webp" alt="{{ $item['title'] }}" class="impact-image">
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
                    <img src="{{ asset('frontend/Images/large-graphics/ws-6.webp') }}" alt="Wall Stickers by Brand Signages" class="img-fluid rounded-3">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Wall Stickers: Vibrant Designs, Effortless Application</h2>
                <p class="brand-description">
                    Wall stickers bring colour, character, and brand storytelling to any surface with zero preparation and minimal installation time. They have grown into a trusted interior decoration and branding tool for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>children's learning centres</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail boutiques</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>food & beverage outlets</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>gyms & fitness studios</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>corporate offices</strong></a>
                    across India. In 2025, businesses continue to rely on wall stickers for fast, fresh, and fully customisable interiors that reflect their brand character.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Full-Colour High-Resolution Print:</b> Our stickers are produced on professional digital presses
                        that capture every detail, gradient, and colour nuance of your design with stunning accuracy.
                    </li>
                    <li class="mb-3">
                        <b>Multiple Finish Options:</b> Choose from gloss, matte, or satin laminate finishes to complement
                        your interior aesthetic and achieve the exact look you envision.
                    </li>
                    <li>
                        <b>Simple Self-Application or Professional Install:</b> Our wall stickers can be self-applied with
                        ease or installed by our professional team for larger, more complex designs.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/wall-stickers" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Types of Wall Stickers We<br>Design & Deliver</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ws-7.webp') }}" class="card-img-center" alt="Printed Wall Stickers">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Full-Colour Printed Stickers</h5>
                                <p class="We-Elevate-Brands-text">High-resolution digitally printed stickers in any size, shape, or colour — perfect for brand imagery, illustrations, and decorative wall panels.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ws-8.webp') }}" class="card-img-center" alt="Cut-Out Shape Stickers">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Die-Cut Shape Stickers</h5>
                                <p class="We-Elevate-Brands-text">Custom contour-cut stickers that follow the exact shape of your logo, icon, or design — no background, no borders, just clean precision.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ws-9.webp') }}" class="card-img-center" alt="Wallpaper Sticker Panels">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Wallpaper Sticker Panels</h5>
                                <p class="We-Elevate-Brands-text">Large-format sticker panels that cover entire wall sections with seamless patterns, scenic imagery, or brand illustrations — applied like wallpaper.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ws-10.webp') }}" class="card-img-center" alt="Transparent Stickers">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Clear & Transparent Stickers</h5>
                                <p class="We-Elevate-Brands-text">Printed on transparent vinyl for a floating, no-background look — ideal for glass surfaces, mirrors, and light-coloured walls where subtlety matters.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/ws-11.webp') }}" class="card-img-center" alt="Metallic Foil Stickers">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Metallic & Specialty Stickers</h5>
                                <p class="We-Elevate-Brands-text">Premium metallic gold, silver, and chrome finish stickers that add a luxury, high-end aesthetic to reception areas, boardrooms, and retail environments.</p>
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

<section class="bs-sgn-section">
  <div class="bs-sgn-container">
    <div class="bs-sgn-grid">
      <div class="bs-sgn-card bs-sgn-card--retail">
        <div class="bs-sgn-card__img-wrap">
          <img src="{{ asset('frontend/Images/large-graphics/ws-12.webp') }}" alt="Indoor Wall Stickers"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Quick Interiors</p>
          <h3 class="bs-sgn-card__title">Indoor Wall Stickers</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-fill-drip"></i></span>
              <span class="bs-sgn-feat__text">Full-Colour CMYK Printing</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-layer-group"></i></span>
              <span class="bs-sgn-feat__text">Gloss, Matte & Satin Finishes</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-cut"></i></span>
              <span class="bs-sgn-feat__text">Custom Sizes & Die-Cut Shapes</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="bs-sgn-card bs-sgn-card--corp">
        <div class="bs-sgn-card__img-wrap">
          <img src="{{ asset('frontend/Images/large-graphics/ws-13.webp') }}" alt="Outdoor Wall Stickers"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Weatherproof Decals</p>
          <h3 class="bs-sgn-card__title">Outdoor Wall Stickers</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-sun"></i></span>
              <span class="bs-sgn-feat__text">UV-Resistant Outdoor Vinyl</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-tint-slash"></i></span>
              <span class="bs-sgn-feat__text">Waterproof & Weatherproof</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-calendar-check"></i></span>
              <span class="bs-sgn-feat__text">2–5 Year Outdoor Lifespan</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bs-sgn-cta-section position-relative text-white">
    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1600" class="w-100" style="height:450px; object-fit:cover;" alt="Wall Stickers CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Wall Stickers: The Simplest Way to Make Any Space Come Alive</h2>
        <p class="text-light mb-4">Every wall is a canvas waiting to tell your story. Our custom wall stickers make it easy and affordable to turn any interior into a vivid, brand-forward environment that employees enjoy and customers remember. With Brand Signages, your walls go from blank to brilliant without breaking your budget or your schedule.</p>
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
            <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}" alt="Wall Stickers Client - Brand Signages">
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
                            <p class="description">We ordered custom wall stickers for our new cafe and the results were absolutely incredible. The colours are vibrant, the print quality is outstanding, and our customers keep taking photos in front of them. Huge thanks to the Brand Signages team!</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Co-Founder – The Brew District</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">Brand Signages supplied and installed large wall sticker panels throughout our kids learning centre. The children love the colourful illustrations and parents always comment on how welcoming the space feels. Perfect execution!</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Director – Little Stars Academy</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We had wall stickers installed across our gym with motivational graphics and our brand identity. The installation was smooth, the stickers are holding up brilliantly, and the energy they add to the space is undeniable.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – IronEdge Fitness</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">The metallic logo stickers Brand Signages made for our reception wall are stunning. Every visitor notices them immediately and it sets exactly the premium tone we wanted for our brand. Exceptional quality and service.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Vikram Sharma</h6><small class="text-muted">CEO – Luminary Wealth Advisors</small></div>
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
        <h1 class="faq-title py-5">Wall Stickers FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What are custom wall stickers and what are they made of?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Custom wall stickers are self-adhesive vinyl graphics produced using high-resolution digital printing. They are made from premium cast or calendared vinyl with pressure-sensitive adhesive backing, available in removable or permanent options depending on your application requirement and surface type.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can wall stickers be fully customised with my own design or brand artwork?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, all our wall stickers are <b>100% customised</b> to your specifications. You can provide your own artwork, logo, or design brief, or work with our in-house design team to create something from scratch. We produce stickers in any size, shape, colour, and finish to match your brand identity and interior requirements.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Are wall stickers suitable for commercial and business environments?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Absolutely. Our commercial-grade wall stickers are specifically designed for business environments including offices, retail stores, restaurants, gyms, clinics, and hospitality venues. They are produced on durable vinyl that withstands high-traffic conditions, humidity, and varying temperatures without peeling or fading.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What finish options are available for wall stickers?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We offer a wide range of finish options including <b>gloss, matte, satin, metallic gold, metallic silver, chrome, transparent, and frosted</b>. Each finish creates a distinct aesthetic effect and is suited to different environments. Our team can recommend the best finish based on your interior style and branding requirements.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long do wall stickers last and are they easy to maintain?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our indoor wall stickers typically last <b>2 to 5 years</b> with normal use and are extremely easy to maintain — simply wipe with a damp cloth. Outdoor wall stickers made from UV-resistant vinyl can last 2 to 4 years even in direct sunlight, rain, and varying weather conditions.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can I apply wall stickers myself or do I need professional installation?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Smaller wall stickers come with application instructions and can be self-applied by following our step-by-step guide. For larger panels, intricate multi-part designs, or commercial installations requiring precision alignment, we strongly recommend our professional installation service to ensure a flawless, bubble-free result.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What surfaces can wall stickers be applied to?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our wall stickers adhere effectively to smooth painted walls, glass, tiles, metal, wood, and plastic surfaces. For best results, the surface should be clean, dry, and free from dust or grease prior to application. We do not recommend application on heavily textured, damp, or freshly painted surfaces.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you provide wall sticker services across India?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, Brand Signages produces and installs custom wall stickers <b>across Bangalore and all major cities in India</b>. Whether you need a single sticker for a home office or hundreds of branded stickers for a nationwide retail rollout, our team is equipped to deliver on time and to specification.</p></div>
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