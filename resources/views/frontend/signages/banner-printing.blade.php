@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Banner Printing – Make Every Message Count',
                'desc' =>
                    'High-quality, vibrant banner printing solutions designed to promote your brand, events, and offers with maximum visual clarity and impact.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'Flex, Fabric & Vinyl Banners Tailored to Your Needs',
                'desc' =>
                    'From trade show pull-ups to outdoor flex banners and branded event backdrops, we print banners that stand out and speak volumes for your brand.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'Fast Turnaround, Sharp Print, Lasting Durability',
                'desc' =>
                    'Precision banner printing with quick delivery timelines ensuring you never miss a launch, event, or critical promotional deadline.',
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
        <h2>Professional Banner Printing for Every Brand Occasion <br>by Brand Signages</h2>
        <p>Banners remain one of the most versatile and cost-effective marketing tools for businesses of all sizes. At
            Brand Signages, we offer end-to-end banner printing services covering a comprehensive range of formats. Our
            range includes expertly produced
            <a href="flex-banners" style="color:#E43D12; text-decoration:none;"><b>outdoor flex banners</b></a>,
            <a href="pull-up-banners" style="color:#E43D12; text-decoration:none;"><b>pull-up roll banner stands</b></a>,
            <a href="fabric-banners" style="color:#E43D12; text-decoration:none;"><b>indoor fabric banners</b></a>,
            custom <b>event backdrops</b>, and mesh banners designed for businesses that want sharp, vibrant, and
            professionally finished promotional materials delivered on time, every time.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => 'bp-1', 'title' => 'Outdoor Flex Banners', 'class' => 'red-title'],
                    ['img' => 'bp-2', 'title' => 'Pull-Up & Roll-Up Stands', 'class' => 'red-title'],
                    ['img' => 'bp-3', 'title' => 'Fabric & Textile Banners', 'class' => 'red-title'],
                    ['img' => 'bp-4', 'title' => 'Event Backdrop Banners', 'class' => 'red-title'],
                    ['img' => 'bp-5', 'title' => 'Mesh & Perforated Banners', 'class' => 'red-title'],
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
                    <img src="{{ asset('frontend/Images/large-graphics/bp-6.webp') }}" alt="Banner Printing by Brand Signages" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Banner Printing: Every Size, Every Surface, Every Deadline</h2>
                <p class="brand-description">
                    The right banner at the right place can dramatically increase footfall, awareness, and conversions.
                    Banner printing is an essential marketing tool for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail businesses</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>trade show exhibitors</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>event organizers</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>corporate brands</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>hospitality businesses</strong></a>
                    across India. Today in 2025, banner printing continues to be one of the most reliable, fast, and
                    flexible solutions for time-sensitive promotional campaigns.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Wide Format Printing Capability:</b> Print sizes from A3 to 100 feet and beyond with no
                        compromise on image resolution, colour accuracy, or text sharpness.
                    </li>
                    <li class="mb-3">
                        <b>Diverse Material Options:</b> Choose from vinyl, flex, fabric, mesh, backlit film, or canvas
                        based on your display environment and specific campaign requirements.
                    </li>
                    <li>
                        <b>Rapid Production & Delivery:</b> Fast-track printing options available to meet the tightest
                        deadlines without ever sacrificing print quality or finish.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/banner-printing" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive Banner Printing</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/bp-7.webp') }}" class="card-img-center" alt="Outdoor Flex Banners">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Outdoor Flex & Vinyl Banners</h5>
                                <p class="We-Elevate-Brands-text">Durable, weatherproof banners ideal for storefronts, hoardings, events, and outdoor promotional displays requiring long-term visibility.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/bp-8.webp') }}" class="card-img-center" alt="Pull-Up Banner Stands">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Pull-Up Roll Banner Stands</h5>
                                <p class="We-Elevate-Brands-text">Portable, professional roll-up banners perfect for exhibitions, trade shows, conferences, and retail activations with instant setup.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/bp-9.webp') }}" class="card-img-center" alt="Event Backdrop Banners">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Custom Event Backdrops</h5>
                                <p class="We-Elevate-Brands-text">Large-format branded backdrops for press events, product launches, award nights, and corporate functions that demand a polished finish.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/bp-10.webp') }}" class="card-img-center" alt="Fabric Banners">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Fabric & Textile Banners</h5>
                                <p class="We-Elevate-Brands-text">Premium dye-sublimation fabric banners offering a high-end, wrinkle-resistant finish ideal for retail interiors, exhibitions, and corporate displays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/bp-11.webp') }}" class="card-img-center" alt="Mesh Banners">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Mesh & Perforated Banners</h5>
                                <p class="We-Elevate-Brands-text">Wind-resistant, lightweight mesh banners designed for scaffolding, fences, and outdoor structures where airflow management is essential.</p>
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
          <img src="{{ asset('frontend/Images/large-graphics/bp-12.webp') }}" alt="Indoor Banner Printing"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Indoor Banners</p>
          <h3 class="bs-sgn-card__title">Indoor Banner Printing</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-print"></i></span>
              <span class="bs-sgn-feat__text">Fabric, Vinyl & Backlit Options</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-palette"></i></span>
              <span class="bs-sgn-feat__text">Photo-Realistic CMYK Printing</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-ruler-combined"></i></span>
              <span class="bs-sgn-feat__text">Custom Sizes from A3 to 20ft+</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="bs-sgn-card bs-sgn-card--corp">
        <div class="bs-sgn-card__img-wrap">
          <img src="{{ asset('frontend/Images/large-graphics/bp-13.webp') }}" alt="Outdoor Banner Printing"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Outdoor Banners</p>
          <h3 class="bs-sgn-card__title">Outdoor Banner Printing</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-sun"></i></span>
              <span class="bs-sgn-feat__text">UV-Resistant, Weatherproof Flex</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-cloud-rain"></i></span>
              <span class="bs-sgn-feat__text">Waterproof & Wind-Resistant</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-shipping-fast"></i></span>
              <span class="bs-sgn-feat__text">Pan-India Delivery in 2–4 Days</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bs-sgn-cta-section position-relative text-white">
    <img src="{{ asset('frontend/Images/large-graphics/bp-14.webp') }}" class="w-100" style="height:450px; object-fit:cover;" alt="Banner Printing CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Banner Printing: The Most Versatile Promotional Tool Your Brand Can Deploy</h2>
        <p class="text-light mb-4">Say goodbye to generic, low-quality prints that fade before your campaign ends. With Brand Signages, every banner is a precision-crafted communication tool — sharp, vibrant, and professionally finished to represent your brand at its absolute best. From one piece to a thousand, we deliver on time, every time.</p>
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
            <img src="{{ asset('frontend/Images/large-graphics/bp-15.webp') }}" alt="Banner Printing Client - Brand Signages">
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
                            <p class="description">Brand Signages printed our entire trade show banner set with stunning colour accuracy and quality. Everything arrived on time and looked incredibly professional at the exhibition. We received so many compliments on our display setup.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Marketing Head – Urban Retail Co.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed banners printed urgently for a hospital awareness campaign and Brand Signages delivered within 24 hours with excellent quality. The prints were vibrant, sharp, and exactly what we needed. Truly impressive service.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Operations Manager – Horizon Hospitals</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">The event backdrop and outdoor flex banners Brand Signages produced for our café launch were absolutely brilliant. The colours were vivid, the prints were crisp, and they helped us create a memorable brand presence from day one.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Café Bloom</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We've relied on Brand Signages for all our banner printing requirements across multiple corporate events. Consistent quality, reliable delivery, and their design team always ensures the final print exceeds our expectations every single time.</p>
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
        <h1 class="faq-title py-5">Banner Printing FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What types of banners does Brand Signages offer?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We offer a comprehensive range of banner printing solutions including outdoor flex banners, indoor fabric banners, pull-up roll banner stands, event backdrop banners, mesh and perforated banners, backlit transparencies, vinyl banners, and canvas prints — all available in custom sizes and finishes.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What file formats do you accept for banner printing?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We accept all major print-ready file formats including <b>PDF, AI, EPS, PSD</b>, and high-resolution JPEG or PNG files. For best results, files should be submitted in CMYK colour mode at a minimum resolution of 150 DPI at actual print size. Our design team is also available to assist with artwork preparation and layout.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What is the minimum order quantity for banner printing?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We print banners in quantities as low as a <b>single unit</b>, making our service accessible to individuals, startups, and small businesses as well as large enterprises requiring bulk quantities. Volume discounts are available for larger orders — contact our team for a customised quotation.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What are the advantages of professional banner printing?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Professional banner printing ensures <b>consistent colour accuracy, sharp text, and durable materials</b> that represent your brand at its best. Unlike budget printing, our banners resist fading, tearing, and weather damage — ensuring your investment delivers maximum promotional value throughout the campaign lifecycle.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How quickly can banners be printed and delivered?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Standard production time for most banner orders is <b>2 to 4 working days</b> after artwork approval. We also offer same-day and next-day printing services for urgent requirements, subject to availability and order size. Pan-India delivery is available, or you can opt for in-store pickup from our facility.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can banners be printed in custom sizes?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we print banners in <b>any custom size</b> from small A3 displays to banners over 100 feet in length. Our large-format printing equipment handles any dimension without compromising resolution or colour quality, ensuring every banner looks as sharp up close as it does from a distance.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you deliver banner printing orders across India?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we deliver banner printing orders <b>across Bangalore and all over India within 3 to 7 working days</b>. Our logistics team ensures safe packaging — rolled or flat as appropriate — so your banners arrive in perfect, print-ready condition without any creasing or damage.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Are your banners suitable for outdoor use in Indian weather?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our outdoor banners are printed on <b>UV-resistant, weatherproof flex and vinyl materials</b> specifically engineered to withstand India's tropical climate including monsoon rains, direct sunlight, and humidity. Outdoor banners typically retain their vibrancy for 1 to 3 years depending on sun exposure and environmental conditions.</p></div>
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
