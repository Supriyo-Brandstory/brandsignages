@extends('frontend.layout.appLayout')

@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('frontend/Images/new/service-banner.webp') }}');">
        <div class="container text-left">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Signage Design & Manufacturing Services</h1>
                    <p class="text-white mt-3" style="font-size: 1.2rem; max-width: 700px;">
                        From conceptual design to expert manufacturing and installation, we provide end-to-end signage solutions that elevate your brand and engage your audience.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('contact_us') }}" class="contact-btn" style="text-decoration: none;">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Overview -->
    <section class="Sign_Boards">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5">
                    <h2 class="fw-bold">Your Trusted Signage Manufacturing Partner</h2>
                    <p class="mt-3">Brand Signages is a leading provider of professional signage solutions across India. We specialize in creating high-quality, durable, and visually stunning sign boards that help businesses make a lasting impression. Our expertise spans across multiple industries, including retail, hospitality, corporate, and healthcare.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box">
                        <img src="{{ asset('frontend/Images/home/creative-design.png') }}" alt="Creative Design" class="img-fluid">
                        <h3>Design Consultation</h3>
                        <p>Our creative team works with you to transform your brand vision into effective signage designs.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box">
                        <img src="{{ asset('frontend/Images/home/expert-precision.png') }}" alt="Expert Precision" class="img-fluid">
                        <h3>Precision Manufacturing</h3>
                        <p>Using state-of-the-art technology, we manufacture signs with unmatched accuracy and finish.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box">
                        <img src="{{ asset('frontend/Images/home/premium-quality.png') }}" alt="Premium Quality" class="img-fluid">
                        <h3>Quality Assurance</h3>
                        <p>Every piece undergoes rigorous quality checks to ensure it meets our high standards before delivery.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box">
                        <img src="{{ asset('frontend/Images/home/timely-deliver-2.png') }}" alt="Timely Delivery" class="img-fluid">
                        <h3>Seamless Installation</h3>
                        <p>Our expert technicians ensure your signage is installed perfectly for maximum visibility and impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    <section class="We-Elevate-Brands-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="We-Elevate-Brands-heading fw-bold">Comprehensive Signage Solutions</h2>
                <p>Explore our wide range of premium signage products designed for every business need.</p>
            </div>

            <div class="row g-4">
                @php
                    $services = [
                        ['route' => 'led_acrylic_glow_sign', 'img' => 'led-sign.webp', 'title' => 'LED Sign Boards', 'desc' => 'Durable and energy-efficient LED boards for 24/7 brand visibility.'],
                        ['route' => 'digital_signages', 'img' => 'digital-signage2.webp', 'title' => 'Digital Signages', 'desc' => 'Dynamic displays for modern, high-impact retail and corporate branding.'],
                        ['route' => 'metal_signages', 'img' => 'uhouse.webp', 'title' => 'Metal & Steel Signages', 'desc' => 'Premium stainless steel and metal signs for long-lasting sophistication.'],
                        ['route' => 'arcylic_signages', 'img' => 'acrylic-sign.webp', 'title' => 'Acrylic Signages', 'desc' => 'Glossy, vibrant acrylic signs with unmatched clarity and precision.'],
                        ['route' => 'neon_signages', 'img' => 'neon-sign2.webp', 'title' => 'Neon Sign Boards', 'desc' => 'Retro-style neon signs to give your brand a unique and trendy glow.'],
                        ['route' => 'outdoor_signages', 'img' => 'outdoor-sign.webp', 'title' => 'Outdoor Signage', 'desc' => 'Weather-resistant outdoor solutions designed for maximum road-side impact.'],
                        ['route' => 'indoor_signages', 'img' => 'retail-sign.webp', 'title' => 'Indoor Signage', 'desc' => 'Elegant interior signs tailored for office, retail, and hospital environments.'],
                        ['route' => 'banner_printing', 'img' => 'large-graphics/bp-1.webp', 'title' => 'Large Format Printing', 'desc' => 'High-resolution banner printing for events, exhibitions, and promotions.'],
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="card We-Elevate-Brands-card h-100 shadow-sm border-0">
                            <img src="{{ asset('frontend/Images/' . (strpos($service['img'], '/') !== false ? $service['img'] : 'home/' . $service['img'])) }}" alt="{{ $service['title'] }}" class="card-img-top" onerror="this.src='{{ asset('frontend/Images/new/service-banner.webp') }}'">
                            <div class="card-body">
                                <h5 class="fw-bold"><a href="{{ route($service['route']) }}" class="text-dark text-decoration-none">{{ $service['title'] }}</a></h5>
                                <p class="small text-muted mb-3">{{ $service['desc'] }}</p>
                                <a href="{{ route($service['route']) }}" class="text-danger fw-bold text-decoration-none small" style="text-decoration: none;">View Details <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Manufacturing Capabilities -->
    <section class="instant-pricing">
        <div class="container py-5">
            <h2 class="text-center mb-4">Advanced Manufacturing Technology</h2>
            <p class="text-center mb-5">Our 24-hour production facility is equipped with industry-leading machinery to deliver precision in every sign.</p>
            <div class="scroll-loop-wrapper">
                <div class="scroll-loop-track">
                    @php
                        $tech = [
                            ['img' => 'panting.webp', 'name' => 'Painting'],
                            ['img' => 'MetalEtching.webp', 'name' => 'Metal Etching'],
                            ['img' => 'MetalLaserCutting.webp', 'name' => 'Metal Laser Cutting'],
                            ['img' => 'AcrylicLaser.webp', 'name' => 'Acrylic Laser'],
                            ['img' => 'latex-printing.webp', 'name' => 'Latex Printing'],
                            ['img' => 'uv-flat-print.webp', 'name' => 'UV Flat Printing'],
                            ['img' => 'plotting.webp', 'name' => 'Plotting'],
                            ['img' => 'channel-letter.webp', 'name' => 'Channel Letters'],
                            ['img' => '3d-printing.webp', 'name' => '3D Printing'],
                            ['img' => 'led-letters.webp', 'name' => 'LED Letters'],
                        ];
                    @endphp
                    @for ($i = 0; $i < 3; $i++)
                        @foreach ($tech as $t)
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/' . $t['img']) }}" alt="{{ $t['name'] }}">
                                <p>{{ $t['name'] }}</p>
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="new_custom-stats-section">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h2 class="new_custom-stats-number">10+</h2>
                    <p class="new_custom-stats-label">Years In Signage Design</p>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 position-relative">
                    <div class="new_custom-divider-left d-none d-md-block"></div>
                    <h2 class="new_custom-stats-number">12,000+</h2>
                    <p class="new_custom-stats-label">Deliveries Done</p>
                    <div class="new_custom-divider-right d-none d-md-block"></div>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="new_custom-stats-number">2,500+</h2>
                    <p class="new_custom-stats-label">Client Base</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="new_custom-why-choose py-5">
        <div class="container">
            <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages?</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="new_custom-box new_custom-light-box d-flex flex-column justify-content-between h-100">
                        <p>We craft signage designs that speak volumes and attract your audience from a distance, ensuring your brand stands out in any environment.</p>
                        <h4 class="new_custom-title">Industry Expertise</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="new_custom-box new_custom-image-box" style="background-image: url('{{ asset('frontend/Images/home/why-choose-2.webp') }}'); height: 300px; background-size: cover; background-position: center;">
                        <div class="new_custom-overlay">
                            <h4 class="new_custom-title text-white">Proven Experience</h4>
                            <p class="text-white small">10 years of experience partnering with major brands across India in various industries and verticals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="new_custom-box new_custom-light-box-3 d-flex flex-column justify-content-between h-100">
                        <h4 class="new_custom-title">Unmatched Excellence</h4>
                        <p>Our commitment to quality and innovation makes us an unmatched competitor in sign board design and manufacturing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Logo Loop -->
    <section class="new_client_section container py-5">
        <h2 class="new_client_section-title">Trusted by Leading B2B Brands</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients" class="img-fluid rounded-4">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">
                <div class="new_client_section-wrapper">
                    @for ($row = 1; $row <= 3; $row++)
                        <div class="new_client_section-row new_client_section-row-{{ $row }}">
                            @php
                                $logos = [
                                    'client1', 'client2', 'client3', 'client4', 'client5', 'client6',
                                    'client7', 'client8', 'client9', 'client10', 'client11', 'client12',
                                    'client13', 'client14', 'client15', 'client16', 'client17', 'client18'
                                ];
                            @endphp
                            @foreach ($logos as $logo)
                                <div class="new_client_section-client">
                                    <img src="{{ asset('frontend/Images/client-logo/' . $logo . '.webp') }}" alt="Client Logo">
                                </div>
                            @endforeach
                            <!-- Loop duplication -->
                            @foreach ($logos as $logo)
                                <div class="new_client_section-client">
                                    <img src="{{ asset('frontend/Images/client-logo/' . $logo . '.webp') }}" alt="Client Logo">
                                </div>
                            @endforeach
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="new_testimonial-swiper-section py-5">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>
            <div class="position-relative">
                <div class="new_testimonial-button-prev">
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Prev" width="40" height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Next" width="40" height="40">
                </div>
                <div class="swiper new_testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                                <p class="description">Brand Signages delivered exactly what we needed for our hospital branding. Their attention to detail and ability to handle large-scale projects is impressive.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                    <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Operations Manager – Horizon Hospitals</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                                <p class="description">The LED sign board was a game changer for our cafe. The vibrant colors and precise lighting really made us stand out on the street.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                    <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Café Bloom</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bs-sgn-cta-section position-relative text-white">
    <img src="http://brandsignages.test/frontend/Images/large-graphics/ig-14.webp" class="w-100" style="height:450px; object-fit:cover;" alt="Indoor Graphics CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Ready to Elevate Your Brand Presence?</h2>
        <p class="text-light mb-4">Experience the Brand Signages difference. From premium materials to expert craftsmanship, we ensure your brand gets the visibility it deserves.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('contact_us') }}" class="btn text-white fw-semibold px-5 py-3" style="background:#e6390a; border-radius:12px; text-decoration: none;">Get a Quote</a>
            <a href="tel:+918006606080" class="btn fw-semibold px-5 py-3" style="background:#fff; color:#222; border-radius:12px; text-decoration: none;">Call Experts</a>
        </div>
    </div>
</section>

@endsection