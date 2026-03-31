@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'hb-1',
                'title' => 'Hoarding Boards – Make Your Brand Impossible to Ignore',
                'desc' =>
                    'Large-format, high-visibility hoarding boards engineered to capture attention, dominate the outdoor landscape, and communicate your message at scale.',
            ],
            [
                'img' => 'hb-2',
                'title' => 'Construction & Site Hoardings for Professional Project Branding',
                'desc' =>
                    'Transform construction perimeters into powerful brand canvases — maintaining safety, professionalism, and high-impact marketing simultaneously.',
            ],
            [
                'img' => 'hb-3',
                'title' => 'Robust Hoarding Solutions Built for Long-Term Outdoor Performance',
                'desc' =>
                    'Structurally sound and visually compelling hoardings built with weather-resistant materials for projects of any size, scale, and duration.',
            ],
        ];
    @endphp

    <div class="hero-slides-wrapper" id="heroSlider">
        @foreach ($slides as $slide)
            <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset('frontend/Images/large-graphics/' . $slide['img'] . '.webp') }}" alt="{{ $slide['title'] }}">
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
        <h2>Command Every Location with Premium Hoarding Boards <br>by Brand Signages</h2>
        <p>Hoarding boards are among the most impactful forms of outdoor advertising and project branding available. At
            Brand Signages, we design, fabricate, and install high-quality hoarding boards that secure construction sites
            while simultaneously acting as large-scale advertising platforms. Our range includes expertly crafted
            <a href="construction-hoardings" style="color:#E43D12; text-decoration:none;"><b>construction site hoardings</b></a>,
            <a href="acp-hoardings" style="color:#E43D12; text-decoration:none;"><b>ACP panel hoardings</b></a>,
            <a href="backlit-hoardings" style="color:#E43D12; text-decoration:none;"><b>illuminated hoardings</b></a>,
            real estate project boards, and modular <b>MS frame hoarding systems</b> designed for businesses that demand
            maximum impact from every project boundary.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => 'hb-4', 'title' => 'Construction Site Hoardings', 'class' => 'red-title'],
                    ['img' => 'hb-5', 'title' => 'Real Estate Project Boards', 'class' => 'red-title'],
                    ['img' => 'hb-6', 'title' => 'Retail Launch Hoardings', 'class' => 'red-title'],
                    ['img' => 'hb-7', 'title' => 'ACP Panel Hoarding Systems', 'class' => 'red-title'],
                    ['img' => 'hb-8', 'title' => 'Backlit & Illuminated Hoardings', 'class' => 'red-title'],
                ];
            @endphp
            @foreach ($galleryItems as $item)
                <div class="impact-card">
                    <div class="impact-card-inner">
                        <img src="{{ asset('frontend/Images/large-graphics/' . $item['img'] . '.webp') }}" alt="{{ $item['title'] }}" class="impact-image">
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
                    <img src="{{ asset('frontend/Images/large-graphics/hb-4.webp') }}" alt="Hoarding Boards by Brand Signages" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Hoarding Boards: Securing Sites, Amplifying Brands</h2>
                <p class="brand-description">
                    A hoarding board is not just a barrier — it is your brand's largest canvas in the physical world.
                    Well-designed, professionally installed hoardings communicate credibility, project scale, and brand
                    values to thousands of daily viewers. They are a must-have branding tool for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>real estate developers</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>infrastructure companies</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail fit-out projects</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>event organizers</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>commercial construction firms</strong></a>
                    across India.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Structural Integrity & Safety:</b> Fabricated with MS frames and ACP or plywood panels that
                        meet safety and compliance standards at every project site.
                    </li>
                    <li class="mb-3">
                        <b>High-Impact Visual Communication:</b> Large printable surfaces allow bold, clear brand
                        messaging that is visible from significant distances in any lighting condition.
                    </li>
                    <li>
                        <b>End-to-End Project Management:</b> From design and fabrication to installation and eventual
                        dismantling — we manage the complete hoarding lifecycle.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/hoarding-boards" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive Hoarding Boards</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/hb-9.webp') }}" class="card-img-center" alt="MS Frame Flex Hoardings">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">MS Frame Flex Hoardings</h5>
                                <p class="We-Elevate-Brands-text">Cost-effective, sturdy mild steel frame hoardings with large-format flex printing for maximum site coverage and brand visibility.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/hb-10.webp') }}" class="card-img-center" alt="ACP Panel Hoardings">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">ACP Panel Hoardings</h5>
                                <p class="We-Elevate-Brands-text">Premium aluminium composite panel hoardings offering superior finish, rigidity, and long-term weather resistance for high-end projects.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/hb-11.webp') }}" class="card-img-center" alt="Illuminated Night Hoardings">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Illuminated Night Hoardings</h5>
                                <p class="We-Elevate-Brands-text">Backlit and frontlit hoarding systems that keep your brand messaging visible and impactful day and night, around the clock.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/hb-12.webp') }}" class="card-img-center" alt="Plywood Base Hoardings">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Plywood Base Hoardings</h5>
                                <p class="We-Elevate-Brands-text">Durable, cost-efficient plywood panel hoardings ideal for mid-term construction projects requiring a strong and reliable boundary solution.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/hb-13.webp') }}" class="card-img-center" alt="Modular Reusable Hoardings">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Modular Reusable Systems</h5>
                                <p class="We-Elevate-Brands-text">Engineered modular hoarding systems designed for disassembly and reuse across multiple project sites, maximizing your investment value.</p>
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
          <img src="{{ asset('frontend/Images/large-graphics/hb-14.webp') }}" alt="Standard Hoarding Board"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">Construction Perimeters</p>
          <h3 class="bs-sgn-card__title">Standard Hoarding Boards</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-ruler-combined"></i></span>
              <span class="bs-sgn-feat__text">Custom Height & Width Available</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-tools"></i></span>
              <span class="bs-sgn-feat__text">MS Frame with Flex / ACP Cladding</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-cloud-rain"></i></span>
              <span class="bs-sgn-feat__text">Weatherproof for Outdoor Use</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="bs-sgn-card bs-sgn-card--corp">
        <div class="bs-sgn-card__img-wrap">
          <img src="{{ asset('frontend/Images/large-graphics/hb-15.webp') }}" alt="Illuminated Hoarding Board"/>
        </div>
        <div class="bs-sgn-card__strip"></div>
        <div class="bs-sgn-card__body">
          <p class="bs-sgn-card__label">High-Visibility Display</p>
          <h3 class="bs-sgn-card__title">Illuminated Hoarding Boards</h3>
          <ul class="bs-sgn-features">
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-lightbulb"></i></span>
              <span class="bs-sgn-feat__text">Frontlit & Backlit LED Options</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-moon"></i></span>
              <span class="bs-sgn-feat__text">24/7 Day & Night Visibility</span>
            </li>
            <li>
              <span class="bs-sgn-feat__icon"><i class="fas fa-layer-group"></i></span>
              <span class="bs-sgn-feat__text">ACP Panel or Flex Face Options</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bs-sgn-cta-section position-relative text-white">
    <img src="{{ asset('frontend/Images/large-graphics/hb-16.webp') }}" class="w-100" style="height:450px; object-fit:cover;" alt="Hoarding Boards CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Hoarding Boards: The Most Captive Advertising Space Your Project Can Own</h2>
        <p class="text-light mb-4">Every construction site is a blank canvas waiting to become your brand's biggest statement. Stop hiding behind plain barriers and start building brand equity from day one. With Brand Signages' hoarding solutions, your project perimeter becomes a powerful, professional, and high-visibility marketing platform.</p>
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
            <img src="{{ asset('frontend/Images/large-graphics/hb-17.webp') }}" alt="Hoarding Boards Client - Brand Signages">
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
                            <p class="description">Brand Signages handled our entire project hoarding from design to installation. The quality of fabrication is outstanding, and the branding on the hoarding has generated tremendous awareness for our upcoming development even before launch.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Marketing Head – Urban Retail Co.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed compliant, professional hoardings for our hospital expansion construction site. Brand Signages delivered structurally sound, visually impressive boards on time and within budget. Excellent project management throughout.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Operations Manager – Horizon Hospitals</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">The hoarding boards Brand Signages installed for our new outlet launch created enormous buzz in the area weeks before we opened. The illuminated panels looked absolutely stunning at night and drew so much attention from passersby.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Café Bloom</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We've used Brand Signages for hoarding boards across three construction projects now. Consistently excellent quality, professional installation, and their team handles every aspect of the process from start to finish without any hassle.</p>
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
        <h1 class="faq-title py-5">Hoarding Boards FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What exactly is a hoarding board and what is it used for?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>A hoarding board is a large-format temporary structure erected around construction sites, commercial launches, or events to create a secure perimeter while simultaneously serving as a large-scale advertising surface. They combine structural safety with powerful brand communication, making them an essential tool for any large outdoor project.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What materials are used in hoarding board construction?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We fabricate hoardings using <b>mild steel (MS) frames</b> or aluminium structures as the base, with cladding options including ACP sheets, plywood, or polycarbonate panels. The graphic surface is typically a high-resolution flex print or direct UV print on ACP, depending on the project requirements and budget.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can hoarding boards be reused after a project is complete?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, our modular hoarding frame systems are designed for disassembly and reuse across multiple project sites. The graphic panels can be replaced with new prints while retaining the structural framework — making it a <b>cost-efficient long-term solution</b> for developers and contractors with multiple ongoing projects.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What are the advantages of branded hoarding boards?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Branded hoardings transform a mandatory construction requirement into a powerful marketing asset. They generate pre-launch awareness, build brand credibility, communicate project details, and make a professional impression on thousands of daily passersby — all while fulfilling their primary function of securing your site perimeter.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long do hoarding boards last outdoors?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our hoarding boards are built to withstand extended outdoor exposure. The structural frames can last for many years with basic maintenance, while the graphic panels typically retain their visual quality for <b>2 to 5 years</b> depending on material choice, sun exposure, and local weather conditions.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you provide hoarding installation services across different cities?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, Brand Signages provides hoarding fabrication and installation services <b>across Bangalore and all over India</b>. Our experienced installation teams are deployed with all necessary equipment including boom lifts and scaffolding to complete installations safely and on schedule, regardless of site size or height requirements.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long does it take to fabricate and install hoarding boards?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Fabrication and installation timelines typically range from <b>7 to 15 working days</b> depending on the scale of the project, site accessibility, and material specifications. We conduct a site assessment prior to fabrication to ensure accurate dimensions and a smooth, efficient installation process.</p></div>
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
