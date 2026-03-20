@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Outdoor Graphics – Built to Withstand and Impress',
                'desc' =>
                    'Weather-resistant outdoor graphic solutions that keep your brand visible, vibrant, and impossible to miss — rain or shine, day and night.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'Maximum Visibility Outdoor Branding for Every Location',
                'desc' =>
                    'From building facades to fleet wraps and construction hoardings, our outdoor graphics ensure your brand commands attention at every turn.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'Durable Materials, Bold Designs, Outdoor Performance',
                'desc' =>
                    'Engineered for outdoor conditions with UV-stable inks, weatherproof substrates, and professional installation for long-lasting brand impact.',
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
        <h2>Dominate the Outdoors with High-Performance Outdoor Graphics <br>by Brand Signages</h2>
        <p>Outdoor graphics are your brand's most powerful public-facing communication tool. At Brand Signages, we specialize
            in producing and installing large-format outdoor graphics built to perform in all weather conditions. Our range includes expertly crafted
            <a href="building-wraps" style="color:#E43D12; text-decoration:none;"><b>building facade wraps</b></a>,
            <a href="vehicle-graphics" style="color:#E43D12; text-decoration:none;"><b>vehicle fleet graphics</b></a>,
            <a href="mesh-banners" style="color:#E43D12; text-decoration:none;"><b>mesh banners</b></a>,
            outdoor <b>flex printing</b>, and construction site graphic solutions designed for businesses that demand
            maximum visibility and long-term outdoor performance.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => 'led-1', 'title' => 'Building Facade Wraps', 'class' => 'red-title'],
                    ['img' => 'led-2', 'title' => 'Vehicle & Fleet Graphics', 'class' => 'red-title'],
                    ['img' => 'led-3', 'title' => 'Mesh & Perforated Banners', 'class' => 'red-title'],
                    ['img' => 'led-4', 'title' => 'Outdoor Flex Printing', 'class' => 'red-title'],
                    ['img' => 'led-5', 'title' => 'Construction Site Graphics', 'class' => 'red-title'],
                ];
            @endphp
            @foreach ($galleryItems as $item)
                <div class="impact-card">
                    <div class="impact-card-inner">
                        <img src="/frontend/Images/led/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}" class="impact-image">
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
                    <img src="{{ asset('frontend/Images/home/led-sign-bg.webp') }}" alt="Outdoor Graphics by Brand Signages" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Outdoor Graphics: Engineering Visibility That Can't Be Ignored</h2>
                <p class="brand-description">
                    Outdoor graphics are a 24/7 marketing asset — silently promoting your brand to thousands of potential
                    customers every single day. Whether mounted on a building, displayed at a construction site, or wrapped
                    around a vehicle, high-quality outdoor graphics significantly increase brand recall for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail chains</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>real estate developers</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>logistics companies</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>event organizers</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>franchise businesses</strong></a>
                    across India.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>All-Weather Durability:</b> Materials tested against UV exposure, heavy rainfall, and temperature
                        extremes for multi-year outdoor performance without colour degradation.
                    </li>
                    <li class="mb-3">
                        <b>Large-Format Precision Printing:</b> Crystal-clear imagery and vivid colours at any scale —
                        from single window graphics to full building wraps.
                    </li>
                    <li>
                        <b>Professional Site Installation:</b> Trained teams ensure safe, accurate, and efficient
                        deployment at any height, surface, or outdoor location.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/outdoor-graphics" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive Outdoor Graphics</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp') }}" class="card-img-center" alt="Building Facade Wraps">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Building & Facade Wraps</h5>
                                <p class="We-Elevate-Brands-text">Transform entire building exteriors into massive brand billboards that attract attention from significant distances with vivid, weather-resistant prints.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp') }}" class="card-img-center" alt="Vehicle Fleet Wraps">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Vehicle Fleet Wraps</h5>
                                <p class="We-Elevate-Brands-text">Turn your vehicles into mobile advertising units with full or partial wraps that carry your brand message across every road and route.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp') }}" class="card-img-center" alt="Outdoor Mesh Banners">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Outdoor Mesh Banners</h5>
                                <p class="We-Elevate-Brands-text">Wind-resistant, perforated mesh banners ideal for scaffolding, fences, construction boundaries, and open outdoor structures.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/crystal-led-6.webp') }}" class="card-img-center" alt="Outdoor Flex Printing">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Outdoor Flex Printing</h5>
                                <p class="We-Elevate-Brands-text">High-brightness, UV-resistant flex prints for hoardings, billboards, and outdoor advertising frames at any size and scale.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/sky-sgn-board-2.webp') }}" class="card-img-center" alt="Outdoor Vinyl Graphics">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Weatherproof Vinyl Graphics</h5>
                                <p class="We-Elevate-Brands-text">Cast vinyl outdoor graphics engineered for Indian climatic conditions, offering 5–7 year lifespan with no fading or delamination.</p>
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

<section class="py-5" style="background:#f3f4f6;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="text-center p-5 rounded-4" style="background:#f8f9fb;">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=900" class="img-fluid mb-4 rounded-4" alt="Building Wrap">
                    <h4 class="fw-semibold mb-3">Static Outdoor Graphics</h4>
                    <div class="mx-auto mb-4" style="width:60%; height:1px; background:#ddd;"></div>
                    <div class="mb-4">
                        <i class="fas fa-building fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Building Wraps & Facade Graphics</p>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-sun fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">UV-Resistant, Weatherproof Vinyl</p>
                    </div>
                    <div>
                        <i class="fas fa-calendar-check fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">5–7 Year Outdoor Lifespan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center p-5 rounded-4" style="background:#f8f9fb;">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=900" class="img-fluid mb-4 rounded-4" alt="Vehicle Wrap">
                    <h4 class="fw-semibold mb-3">Mobile Outdoor Graphics</h4>
                    <div class="mx-auto mb-4" style="width:60%; height:1px; background:#ddd;"></div>
                    <div class="mb-4">
                        <i class="fas fa-truck fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Vehicle & Fleet Wraps</p>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-ruler-combined fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Full & Partial Wrap Options</p>
                    </div>
                    <div>
                        <i class="fas fa-palette fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Full-Colour High-Resolution Print</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative text-white">
    <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?q=80&w=1600" class="w-100" style="height:450px; object-fit:cover;" alt="Outdoor Graphics CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Outdoor Graphics: Your Brand's Biggest Stage Is Right Outside</h2>
        <p class="text-light mb-4">Every building, every vehicle, every construction fence is an opportunity to communicate your brand to thousands of people daily. Stop letting prime outdoor real estate go unbranded. With Brand Signages, your outdoor presence becomes your most powerful marketing channel — working silently and continuously around the clock.</p>
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
            <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}" alt="Outdoor Graphics Client - Brand Signages">
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
                            <p class="description">Brand Signages wrapped our entire fleet with our new brand identity. The quality of the prints is outstanding — sharp, vibrant, and perfectly applied. Our vehicles now drive brand awareness across the city every single day.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Marketing Head – Urban Retail Co.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We commissioned outdoor building wraps for our hospital expansion project and Brand Signages delivered exceptional results. The graphics have held up beautifully through monsoon season with zero fading or peeling.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Operations Manager – Horizon Hospitals</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">The outdoor signage and facade graphics Brand Signages created for our new outlet have been incredible for driving footfall. Professional installation, vibrant colours, and it's held up perfectly over the past year.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Café Bloom</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed high-impact outdoor graphics for our corporate campus and Brand Signages exceeded every expectation. The coordination, quality, and installation speed were all first-class from start to finish.</p>
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
        <h1 class="faq-title py-5">Outdoor Graphics FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What types of outdoor graphics does Brand Signages offer?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We offer a comprehensive range of outdoor graphic solutions including building facade wraps, vehicle and fleet graphics, outdoor flex printing, mesh banners, construction site hoardings, perforated window films, and weatherproof vinyl graphics — all custom-produced and professionally installed.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long do outdoor graphics last in Indian weather conditions?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our outdoor graphics are produced using <b>UV-resistant, weatherproof materials</b> specifically suited for tropical and variable weather conditions. Depending on the material chosen, outdoor graphics can last anywhere from <b>3 to 7 years</b> while retaining their colour vibrancy and structural integrity.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can outdoor graphics be applied to glass and metal surfaces?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer specialised vinyl formulations designed for glass, metal, ACP panels, concrete, and brick surfaces. Our team conducts a thorough site assessment to recommend the most appropriate adhesive and material combination for each specific surface type.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What are the advantages of outdoor graphics over traditional signage?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Outdoor graphics offer <b>unmatched scale, flexibility, and visual impact</b> at a fraction of the cost of fabricated signage. They can cover large areas quickly, be updated or replaced easily, and are available in a far wider range of formats including vehicle wraps, mesh banners, and full building skins.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you handle installation for large-scale outdoor graphic projects?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Absolutely. We have an experienced installation team equipped to handle projects at any scale — from small shopfront graphics to multi-storey building wraps. We manage all safety requirements, scaffolding, and boom lift operations to ensure safe and efficient installation.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How quickly can outdoor graphics be produced and installed?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Standard production and installation timelines range from <b>7 to 14 working days</b> depending on project scale, surface type, and installation complexity. For time-sensitive projects, we offer expedited production and flexible installation scheduling.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you provide outdoor graphic services across India?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, Brand Signages provides outdoor graphic production and professional installation services <b>across Bangalore and all major cities in India</b>. Our logistics and installation teams are deployed pan-India to handle projects of any size and complexity on schedule.</p></div>
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