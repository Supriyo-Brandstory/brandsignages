@extends('frontend.layout.appLayout')
@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/service-page.css') }}" />
@endpush


    <section class="hero-banner"
        style="background-image: url('{{ asset('frontend/Images/new/service-banner.webp') }}');">
        <div class="container text-left">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Signage Design & Manufacturing</h1>
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

    <section style="background: #f8f9fa">
        <div class="contact-container">
            <div class="text-center">
            <h2 class="card-heading">
                Sign Board Manufacturer- PAN India Services
            </h2>
            <p class="fs-20" style="text-align: left">
                Brand Signages is a leading signage manufacturer, delivering high-quality and visually impactful signage solutions for businesses
                 across India. With years of expertise, we have successfully worked with a wide range of industries, helping brands improve visibility
                  and attract more customers. Our offerings include LED sign boards, 3D signage, 2D boards, acrylic signage, stainless steel (SS)
                   letters, high-rise signage, pylon signs, retail store signage, real estate signage, backlit signage, and more- each crafted with
                    precision and premium materials to ensure long-lasting performance.</p><br>

            </div>
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-6 contact-info">
                    <h2 class="card-heading">Get in Touch with Brand Signages</h2>
                    <p class="desc">Contact Brand Signages, India's leading sign board manufacturer, for
                        high-quality custom acrylic, neon, metal, LED sign boards and digital signage solutions. Let’s bring
                        your brand to life!</p>
                        <div class="process-card">
                            <h3>Contact Info</h3>
                            <p class="fs-20"> <a href="mailto:sales@brandsignages.com" class="ainfo"><i class="fa fa-envelope"
                            aria-hidden="true"></i> <b>sales@brandsignages.com</b></a></p>
                            <p class="fs-20"> <a href="tel:+91 8006606080" class="ainfo"><i class="fa fa-phone" aria-hidden="true"></i> <b>+91
                            8006606080</b> </a></p>
                            <p class="fs-20"> <a href="https://g.co/kgs/6RzVfm1" class="ainfo">
                                
                                <span>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                                <span>Brand Signages, 5th Floor, BrandStory
                                    Ventures, Surya Chambers, 34, Domlur I
                                    Stage, Amarjyoti Layout, Domlur,
                                    Bengaluru, Karnataka 560071
                                </span>
                            </a>
                        </p>
                    </div>
                    
                </div>
                
                <!-- Contact Form -->
                <div class="col-md-6">
                    <form class="form-contact" action="{{ route('contact.store') }}" method="POST">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        @csrf
                        <input type="text" class="form-control mb-3" name="first_name" placeholder="Full Name*" required>
                        <input type="email" class="form-control mb-3" name="email" placeholder="Email*" required>
                        <input type="tel" class="form-control mb-3" name="phone_number" placeholder="Phone Number*"
                        required>
                        <textarea class="form-control mb-3" name="message" rows="3" placeholder="Your message..." required></textarea>
                        
                        <!-- CAPTCHA Image -->
                        <div class="form-group mt-3">
                            <label for="captcha">Enter the CAPTCHA code:</label>
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img src="{{ captcha_src('flat') }}" id="captcha-image" class="img-thumbnail mr-2"
                                style="cursor: pointer; width: 40%;" onclick="refreshCaptcha()">
                                <button type="button " class="btn btn-outline-secondary" onclick="refreshCaptcha()">
                                    <i class="fas fa-sync-alt"></i> Refresh
                                </button>
                            </div>
                            @if ($errors->has('captcha'))
                            <small class="text-danger d-block my-2">{{ $errors->first('captcha') }}</small>
                            @endif
                            <input type="text" class="form-control" name="captcha" placeholder="Enter CAPTCHA" required>
                        </div>
                        
                        <button type="submit" class="contact-btn w-100">Send Message</button>
                    </form>
                    
                    <script>
                    function refreshCaptcha() {
                        // Add timestamp to prevent caching
                        var timestamp = Date.now();
                        document.getElementById('captcha-image').src = '{{ captcha_src() }}?' + timestamp;

                        // Alternative using fetch API if you prefer
                        /*
                        fetch('{{ route('captcha.refresh') }}')
                            .then(response => response.json())
                            .then(data => {
                                document.getElementById('captcha-image').src = data.captcha;
                            });
                        */
                    }
                </script>

            </div>
        </div>
    </div>
</section>

    <!-- Expertise Overview -->
    <section class="Sign_Boards" style="background: url('https://images.pexels.com/photos/30886455/pexels-photo-30886455.jpeg?_gl=1*81v7if*_ga*MTMzNDEzMTk0My4xNzc0OTUwMTQz*_ga_8JE65Q40S6*czE3Nzc3MjEyMjEkbzQkZzEkdDE3Nzc3MjEzNTYkajQyJGwwJGgw'); background-size: cover; margin:0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-5">
                    <h2 class="fw-bold">Your Trusted Signage Manufacturing Partner</h2>
                    <p class="mt-3">Brand Signages is a leading provider of professional signage solutions across India. We specialize in creating high-quality, durable, and visually stunning sign boards that help businesses make a lasting impression. Our expertise spans across multiple industries, including retail, hospitality, corporate, and healthcare.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box" style="background: rgba(255, 255, 255, 0.7);">
                        <img src="{{ asset('frontend/Images/home/creative-design.png') }}" alt="Creative Design" class="img-fluid">
                        <h3>Design Consultation</h3>
                        <p>Our creative team works with you to transform your brand vision into effective signage designs.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box" style="background: rgba(255, 255, 255, 0.7);">
                        <img src="{{ asset('frontend/Images/home/expert-precision.png') }}" alt="Expert Precision" class="img-fluid">
                        <h3>Precision Manufacturing</h3>
                        <p>Using state-of-the-art technology, we manufacture signs with unmatched accuracy and finish.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box" style="background: rgba(255, 255, 255, 0.7);">
                        <img src="{{ asset('frontend/Images/home/premium-quality.png') }}" alt="Premium Quality" class="img-fluid">
                        <h3>Quality Assurance</h3>
                        <p>Every piece undergoes rigorous quality checks to ensure it meets our high standards before delivery.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Sign_Boards-box" style="background: rgba(255, 255, 255, 0.7);">
                        <img src="{{ asset('frontend/Images/home/timely-deliver-2.png') }}" alt="Timely Delivery" class="img-fluid">
                        <h3>Seamless Installation</h3>
                        <p>Our expert technicians ensure your signage is installed perfectly for maximum visibility and impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    <section class="zigzag-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold">Comprehensive Signage Solutions</h2>
                <p class="fs-20">Explore our wide range of premium signage products designed for every business need.</p>
            </div>

            @php
                $services = [
                    [
                        'route' => 'led_acrylic_glow_sign',
                        'img' => 'led-sign.webp',
                        'title' => 'LED Sign Boards',
                        'desc' => 'Our LED sign boards are crafted using high-intensity diodes that ensure your business remains visible even in broad daylight. Built with weather-resistant housings and premium acrylic, these signs offer unmatched longevity and are 7X more energy-efficient than traditional lighting solutions. We focus on uniform illumination and precision-engineered modules to provide a consistent brand glow 24/7.'
                    ],
                    [
                        'route' => 'digital_signages',
                        'img' => 'digital-signage2.webp',
                        'title' => 'Digital Signages',
                        'desc' => 'Transform your customer experience with ultra-high-definition digital displays. From standalone interactive kiosks to massive synchronized video walls, our digital signage solutions offer cloud-based content control, allowing you to update promotions and information instantly across multiple locations. These dynamic displays are perfect for modern retail environments and corporate communication hubs.'
                    ],
                    [
                        'route' => 'metal_signages',
                        'img' => 'uhouse.webp',
                        'title' => 'Metal & Steel Signages',
                        'desc' => 'Ideal for corporate headquarters and luxury retail outlets, our metal signages are laser-cut with industrial precision. We offer a variety of sophisticated finishes including brushed, polished, and titanium-coated stainless steel that resist corrosion even in harsh outdoor environments. These signs provide a sense of permanence and prestige that reflects the strength and stability of your brand.'
                    ],
                    [
                        'route' => 'arcylic_signages',
                        'img' => 'acrylic-sign.webp',
                        'title' => 'Acrylic Signages',
                        'desc' => 'Acrylic signs provide a modern, glass-like finish that is both lightweight and incredibly durable. Utilizing state-of-the-art UV printing and diamond polishing techniques, we ensure vibrant color reproduction and crystal-clear edges. Whether it is for a high-end reception desk or a creative office interior, our acrylic signage solutions deliver a sleek, contemporary aesthetic that impresses every visitor.'
                    ],
                    [
                        'route' => 'neon_signages',
                        'img' => 'neon-sign2.webp',
                        'title' => 'Neon Sign Boards',
                        'desc' => 'Our modern LED neon flex technology provides the iconic, nostalgic glow of traditional neon without the fragility and high power consumption of glass tubes. These energy-efficient signs are perfect for cafes, boutique bars, and lifestyle brands looking to create a vibrant, Instagram-worthy atmosphere. Fully customizable in a spectrum of colors, our neon boards are designed to be the focal point of any space.'
                    ],
                    [
                        'route' => 'outdoor_signages',
                        'img' => 'outdoor-sign.webp',
                        'title' => 'Outdoor Signage',
                        'desc' => 'Engineered to withstand the most challenging weather conditions, including intense UV rays and heavy rainfall, our outdoor signage solutions are built for maximum road-side impact. From massive pylons and monoliths to building wraps and hoardings, we utilize high-contrast designs and robust structural engineering to ensure your brand message is legible and impactful from a great distance.'
                    ],
                    [
                        'route' => 'indoor_signages',
                        'img' => 'retail-sign.webp',
                        'title' => 'Indoor Signage',
                        'desc' => 'Enhance navigation and reinforce your brand identity within your physical space. Our indoor signage solutions include intuitive wayfinding systems, professional directional signs, and branded wall graphics that create a cohesive and welcoming environment. We specialize in tailoring signs for diverse sectors including corporate offices, multi-specialty hospitals, and expansive retail malls.'
                    ],
                    [
                        'route' => 'banner_printing',
                        'img' => 'large-graphics/bp-1.webp',
                        'title' => 'Large Format Printing',
                        'desc' => 'Utilizing advanced latex and UV-curing printing technology, we produce large-scale graphics with stunning photographic detail and exceptional color accuracy. Whether you need high-resolution banners for a corporate event, backdrop graphics for an exhibition, or durable hoardings for a construction site, we deliver high-quality prints on a wide range of durable substrates to meet your specific requirements.'
                    ],
                ];
            @endphp

            @foreach ($services as $index => $service)
                <div class="row align-items-center zigzag-item">
                    <div class="col-lg-6 {{ $index % 2 != 0 ? 'order-lg-2' : '' }}">
                        <div class="zigzag-image">
                            <img src="{{ asset('frontend/Images/' . (strpos($service['img'], '/') !== false ? $service['img'] : 'home/' . $service['img'])) }}" 
                                 alt="{{ $service['title'] }}" 
                                 class="img-fluid" 
                                 onerror="this.src='{{ asset('frontend/Images/new/service-banner.webp') }}'">
                        </div>
                    </div>
                    <div class="col-lg-6 {{ $index % 2 != 0 ? 'order-lg-1' : '' }}">
                        <div class="zigzag-content">
                            <h3 class="zigzag-title">{{ $service['title'] }}</h3>
                            <p class="zigzag-description">{{ $service['desc'] }}</p>
                            <a href="{{ route($service['route']) }}" class="view-details-link">
                                View Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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



    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">

                <div class="new_client_section-wrapper">
                    <!-- Row 1 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                    </div>

                    <!-- Row 2 (Right to Left) -->
                    <div class="new_client_section-row new_client_section-row-2">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                    </div>

                    <!-- Row 3 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-3">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>


                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>

            <div class="position-relative">

                <!-- Navigation Arrows (placed OUTSIDE swiper container) -->
                <div class="new_testimonial-button-prev">
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40" height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40" height="40">
                </div>

                <!-- Swiper -->
                <div class="swiper new_testimonial-swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    Our tech startup needed a signage solution that matched our innovative spirit. The
                                    design team didn't just create a sign; they captured our company's entire essence.
                                    The LED-powered brand display has become a conversation starter for clients and
                                    employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy- Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sneha Reddy</h6>
                                        <small class="text-muted">Marketing Head – Urban Retail Co.</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We needed stunning, durable, and regulation-compliant signage for our hospital,
                                    and Brand Signages delivered exactly what we asked for. Their attention to detail
                                    is excellent, which helped us enhance the patient experience.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema - Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Seema Nayak</h6>
                                        <small class="text-muted">Operations Manager– Horizon Hospitals</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    From initial conceptualization to execution, they executed our café signage project
                                    seamlessly. They perfectly captured the aesthetics of our brand with vibrant acrylic
                                    signs and a neon board that has quickly become an Instagram favorite among local people.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
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
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We needed elegant indoor and outdoor corporate signage that matched our branding.
                                    Brand Signages impressed us with their quick turnaround, premium finish, and seamless
                                    coordination throughout the signage project.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Director– Nova Consulting Group</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection