@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/safety-signages-2.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/customstyle/neon-signages-2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/neon-sign-board-bangalore.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;0,700;1,600;1,700&family=Roboto:wght@400;500;700&family=Abril+Fatface&family=Allura&family=Anton&family=Audiowide&family=Bebas+Neue&family=Boogaloo&family=Caveat:wght@700&family=Charm&family=Cinzel:wght@700&family=Comfortaa:wght@700&family=Cookie&family=Cormorant+Garamond:ital,wght@1,600&family=Dancing+Script:wght@700&family=Great+Vibes&family=Lobster&family=Montserrat:wght@700&family=Orbitron:wght@700&family=Oswald:wght@700&family=Permanent+Marker&family=Pinyon+Script&family=Playfair+Display:ital,wght@1,700&family=Poiret+One&family=Sacramento&family=Satisfy&family=Space+Mono&family=Special+Elite&family=Titan+One&display=swap" rel="stylesheet">
@endpush
@section('content')

{{-- ====================================================
     SAFETY SIGNAGES HERO BANNER
     ==================================================== --}}
<section class="ss2-hero-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6">
                <div class="ss2-hero-content">
                    <div class="ss2-hero-badges">
                        
                        <span class="ss2-badge">200+ Safety Signs</span>
                        <span class="ss2-badge">Custom Printing</span>
                    </div>

                    <h1 class="ss2-hero-title">Safety Signs for Workplaces <br>& Public Spaces</h1>

                    <p class="ss2-hero-desc">
                        Elevate hazard communication with durable, regulation-ready safety signs built for factories, offices, warehouses, construction sites and public areas. Our thoughtfully crafted safety signs go beyond basic warnings to ensure compliance, clarity, and lasting protection.
                    </p>

                    <div class="ss2-hero-ctas">
                        <button type="button" class="ss2-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                            Get A Quote <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <button type="button" class="ss2-btn-secondary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                            Start Your Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ====================================================
     SAFETY SIGNAGES SPECS & INTERACTIVE GALLERY
     ==================================================== --}}
<section class="ss2-specs-gallery-section">
    <div class="container">
        {{-- Top Gallery & Specifications Grid --}}
        <div class="row g-5 align-items-stretch mb-5">
            {{-- Left Column: Interactive Product Gallery --}}
            <div class="col-lg-6">
                <div class="ss2-gallery-wrap">
                    {{-- Main Image Display --}}
                    <div class="ss2-main-img-box">
                        <img src="{{ asset('frontend/Images/safety-01.webp') }}" id="ss2MainImg" alt="Safety Signage Spec" class="img-fluid ss2-main-img">
                    </div>

                    {{-- Thumbnail Strip --}}
                    <div class="ss2-thumbs-strip">
                        <div class="ss2-thumb-item active" data-img="{{ asset('frontend/Images/safety-01.webp') }}">
                            <img src="{{ asset('frontend/Images/safety-01.webp') }}" alt="Safety Sign 1">
                        </div>
                        <div class="ss2-thumb-item" data-img="{{ asset('frontend/Images/safety-02.webp') }}">
                            <img src="{{ asset('frontend/Images/safety-02.webp') }}" alt="Safety Sign 2">
                        </div>
                        <div class="ss2-thumb-item" data-img="{{ asset('frontend/Images/safety-03.webp') }}">
                            <img src="{{ asset('frontend/Images/safety-03.webp') }}" alt="Safety Sign 3">
                        </div>
                        <div class="ss2-thumb-item" data-img="{{ asset('frontend/Images/safety-04.webp') }}">
                            <img src="{{ asset('frontend/Images/safety-04.webp') }}" alt="Safety Sign 4">
                        </div>
                        <div class="ss2-thumb-item" data-img="{{ asset('frontend/Images/safety-05.webp') }}">
                            <img src="{{ asset('frontend/Images/safety-05.webp') }}" alt="Safety Sign 5">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Specification Table --}}
            <div class="col-lg-6">
                <div class="ss2-specs-table">
                    <div class="ss2-spec-row">
                        <div class="ss2-spec-label">Types</div>
                        <div class="ss2-spec-value">Warning / Prohibition / Emergency Exit / Fire Safety / First Aid / Caution</div>
                    </div>
                    <div class="ss2-spec-row">
                        <div class="ss2-spec-label">Material</div>
                        <div class="ss2-spec-value">Reflective Vinyl / Photoluminescent / ACP / Acrylic / Aluminium</div>
                    </div>
                    <div class="ss2-spec-row">
                        <div class="ss2-spec-label">Content</div>
                        <div class="ss2-spec-value">Warning Symbols / Safety Instructions / Prohibition Icons / Danger Labels</div>
                    </div>
                    <div class="ss2-spec-row">
                        <div class="ss2-spec-label">Illumination</div>
                        <div class="ss2-spec-value">Self-illuminating / Reflective / LED Backlit</div>
                    </div>
                    <div class="ss2-spec-row">
                        <div class="ss2-spec-label">System</div>
                        <div class="ss2-spec-value">Modular / Permanent Adhesive / Magnetic Mount</div>
                    </div>
                    <div class="ss2-spec-row">
                        <div class="ss2-spec-label">Installation</div>
                        <div class="ss2-spec-value">Included (Post Installation)</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Description Content --}}
        <div class="ss2-specs-description mt-5">
            <h2 class="ss2-desc-title mb-4">Safety Signs For a Safer, Smarter Workplace</h2>

            <p class="ss2-desc-p">
                Safety signs play a critical role in protecting people across factories, offices, hospitals, schools, warehouses, construction sites, and public spaces. Well-designed safety signage systems reduce accidents, ensure legal compliance, and create a culture where hazards are seen, understood, and avoided. From warning labels to emergency exit markers, the right safety sign keeps everyone informed and out of harm's way.
            </p>
            
            <div class="ss2-expandable-text" id="ss2ExpandableContent">
                <h2 class="ss2-desc-title mb-4">Explore Importance of Safety Signs</h2>
                <p class="ss2-desc-p">
                    <b>1. Accident Prevention:</b> Safety signs alert workers and visitors to dangers before they become incidents- reducing slips, falls, chemical exposure, and equipment-related injuries.
                    <br>
                    <b>2. Legal Compliance:</b> Regulatory bodies require proper hazard communication. Safety signs help businesses meet workplace safety laws and avoid penalties.
                    <br>
                    <b>3. Clear Communication:</b> Visual cues are processed faster than text. Safety signs convey instructions and warnings instantly, even in high-stress situations.
                    <br>
                    <b>4. Emergency Preparedness:</b> In emergencies, clear signage guides people to exits, fire extinguishers, and first aid stations, improving response times and saving lives.
                </p>
                <h2 class="ss2-desc-title mb-4">Types of Safety Signs</h2>
                <p class="ss2-desc-p">
                    Safety signs are categorized by their specific function within a workplace or public space. Each type uses standardized colors, symbols, and shapes to communicate instantly. Below is a breakdown of the most common safety sign types, their purposes, and the materials typically used for each.
                </p>

                <table class="table table-bordered ss2-desc-table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Purpose</th>
                            <th>Common Material</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Hazard Warning Signs</strong></td>
                            <td>Alert to potential dangers</td>
                            <td>Reflective Vinyl / ACP</td>
                        </tr>
                        <tr>
                            <td><strong>Prohibition Signs</strong></td>
                            <td>Indicate forbidden actions</td>
                            <td>Acrylic / Aluminium</td>
                        </tr>
                        <tr>
                            <td><strong>Mandatory Action Signs</strong></td>
                            <td>Require specific behavior</td>
                            <td>Steel / Acrylic</td>
                        </tr>
                        <tr>
                            <td><strong>Emergency Exit Signs</strong></td>
                            <td>Guide during evacuations</td>
                            <td>Photoluminescent / LED</td>
                        </tr>
                        <tr>
                            <td><strong>Fire Safety Signs</strong></td>
                            <td>Mark extinguishers & alarms</td>
                            <td>Glow-in-Dark / Steel</td>
                        </tr>
                        <tr>
                            <td><strong>First Aid Signs</strong></td>
                            <td>Locate medical equipment</td>
                            <td>Acrylic / PVC</td>
                        </tr>
                        <tr>
                            <td><strong>General Caution Signs</strong></td>
                            <td>Highlight minor risks</td>
                            <td>Reflective Vinyl / ACP</td>
                        </tr>
                    </tbody>
                </table>

                <h2 class="ss2-desc-title mb-4">Benefits of Safety Signs for Businesses</h2>
                <p class="ss2-desc-p">
                    <strong>Protected Workforce</strong><br>
                    Employees work with confidence when hazards are clearly marked, reducing anxiety and improving productivity.
                </p>
                <p class="ss2-desc-p">
                    <strong>Reduced Liability</strong><br>
                    Properly placed safety signs demonstrate due diligence, protecting businesses from lawsuits and insurance claims.
                </p>
                <p class="ss2-desc-p">
                    <strong>Faster Emergency Response</strong><br>
                    Clearly marked exits, fire equipment, and first aid stations enable quicker action during critical situations.
                </p>
                <p class="ss2-desc-p">
                    <strong>Professional Safety Culture</strong><br>
                    A workplace with visible, well-maintained safety signage signals that employee wellbeing is a top priority.
                </p>
            </div>
            <div class="mt-3">
                <button type="button" class="ss2-read-more-link" id="ss2ReadMoreToggle">
                    <span id="ss2ReadMoreText">Read More</span> <i class="fa-solid fa-arrow-right" id="ss2ReadMoreIcon"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Gallery Image Switcher
    var mainImg = document.getElementById('ss2MainImg');
    var thumbs = document.querySelectorAll('.ss2-thumb-item');

    thumbs.forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            thumbs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');
            var newSrc = this.getAttribute('data-img');
            if (mainImg && newSrc) {
                mainImg.style.opacity = '0.5';
                setTimeout(function () {
                    mainImg.src = newSrc;
                    mainImg.style.opacity = '1';
                }, 150);
            }
        });
    });

    // Read More Expand / Collapse Toggle
    var readMoreBtn = document.getElementById('ss2ReadMoreToggle');
    var expandableContent = document.getElementById('ss2ExpandableContent');
    var readMoreText = document.getElementById('ss2ReadMoreText');
    var readMoreIcon = document.getElementById('ss2ReadMoreIcon');

    if (readMoreBtn && expandableContent) {
        readMoreBtn.addEventListener('click', function () {
            var isExpanded = expandableContent.classList.contains('expanded');
            if (isExpanded) {
                expandableContent.classList.remove('expanded');
                if (readMoreText) readMoreText.textContent = 'Read More';
                if (readMoreIcon) readMoreIcon.className = 'fa-solid fa-arrow-right';
            } else {
                expandableContent.classList.add('expanded');
                if (readMoreText) readMoreText.textContent = 'Read Less';
                if (readMoreIcon) readMoreIcon.className = 'fa-solid fa-arrow-up';
            }
        });
    }
});
</script>





<section class="np-hero-section py-5">
    <div class="container" id="gallery-container">
        <div class="row align-items-start g-5">
            {{-- Left Side: Text Content --}}
            <div class="col-lg-6">
                <div class="np-hero-text-content">
                    <h2 class="hero-title text-start mb-4">Making Safety Impossible to Ignore- Brand Signages</h2>
                    <p class="brand-description mb-4">
                        Safety signage is your first line of defense. It guides behavior, warns of hazards, and ensures emergency instructions are understood instantly- before hesitation becomes injury. Clear, well-placed safety sign helps prevent accidents, promotes compliance, and creates a safer environment for employees, visitors, and customers alike.
                    </p>
                    <p class="brand-description mb-0">
                        At <a href="{{ route('index') }}" class="ss2-text-link">Brand Signages</a>, we engineer high-visibility safety solutions for roads, <a href="{{ route('fire_safety_signages') }}" class="ss2-text-link">fire safety sign</a>, 
                        industrial workplace, and public spaces. Built to endure harsh conditions and demanding environments, our signs don't just meet compliance standards—they reduce incidents, protect your people, and reinforce a culture where 
                        safety is visible, respected, and followed. 
                    </p>
                    <div class="mt-4">
                        <button type="button" class="ss2-btn-secondary ss2-btn-orange" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                            Start Your Project <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Right Side: Smooth Infinite Dual-Direction Vertical Marquee --}}
            <div class="col-lg-6">
                <div class="np-marquee-wrapper">
                    <div class="np-marquee-grid">
                        
                        {{-- Column 1: Scrolls Upwards (Bottom to Top) --}}
                        <div class="np-marquee-col col-up">
                            <div class="np-marquee-track track-up">
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-06.webp')}}" alt="A Frame Signages">
                                    <div class="np-card-badge">A Frame Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-07.webp')}}" alt="Warning Safety Signages">
                                    <div class="np-card-badge">Warning Safety Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-08.webp')}}" alt="Under Construction Signages">
                                    <div class="np-card-badge">Under Construction Signages</div>
                                </div>
                                {{-- Duplicate set for continuous seamless loop --}}
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-06.webp')}}" alt="A Frame Signages">
                                    <div class="np-card-badge">A Frame Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-07.webp')}}" alt="Warning Safety Signages">
                                    <div class="np-card-badge">Warning Safety Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-08.webp')}}" alt="Under Construction Signages">
                                    <div class="np-card-badge">Under Construction Signages</div>
                                </div>
                            </div>
                        </div>

                        {{-- Column 2: Scrolls Downwards (Top to Bottom) --}}
                        <div class="np-marquee-col col-down">
                            <div class="np-marquee-track track-down">
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-09.webp')}}" alt="Do Not Enter Signages">
                                    <div class="np-card-badge">Do Not Enter Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-10.webp')}}" alt="Exit Signages">
                                    <div class="np-card-badge">Exit Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-11.webp')}}" alt="Emergency Exit Signages">
                                    <div class="np-card-badge">Emergency Exit Signages</div>
                                </div>
                                {{-- Duplicate set for continuous seamless loop --}}
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-09.webp')}}" alt="Do Not Enter Signages">
                                    <div class="np-card-badge">Do Not Enter Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-10.webp')}}" alt="Exit Signages">
                                    <div class="np-card-badge">Exit Signages</div>
                                </div>
                                <div class="np-marquee-card">
                                    <img src="{{asset('frontend/Images/safety-11.webp')}}" alt="Emergency Exit Signages">
                                    <div class="np-card-badge">Emergency Exit Signages</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Explore Safety Signage by Use Type</h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="/directional-signages" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/directional-sign-212.webp') }}"
                                        class="card-img-center" alt="Acrylic LED Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="/directional-signages">Directional Signs</a></h5>
                                        <p class="We-Elevate-Brands-text">Directional signs feature clean, intuitive layouts with bold arrows and high-contrast lettering 
                                            to guide foot and vehicle traffic effortlessly. Available in reflective, illuminated, or weather-resistant finishes, 
                                            ensurs seamless navigation.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="/construction-safety-signages" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/construction-safety-212.webp') }}"
                                        class="card-img-center" alt="Aluminum LED Channel Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a
                                                href="/construction-safety-signages">Construction Safety Signs</a></h5>
                                        <p class="We-Elevate-Brands-text">Construction safety signs deliver bold, high-visibility warnings with UV-resistant printing.
                                             Customizable with hazard classifications, PPE requirements, and regulatory symbols, they keep workers informed and compliant
                                              in demanding environments.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="/fire-safety-signages" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/fire-safety-sign-212.webp') }}"
                                        class="card-img-center" alt="2D Stencil Cut Sign Boards">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a
                                                href="/fire-safety-signages">Fire Safety Sign</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">Fire safety signs utilize photoluminescent or LED-backed illumination for instant visibility 
                                            during power failures. Engineered with fire-retardant materials and standardized emergency symbols, they clearly mark exits, 
                                            extinguishers, and assembly points.
                                        </p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="/prohibitory-signages" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/prohibition-sign-212.webp') }}"
                                        class="card-img-center" alt="3D Crystal LED Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="/prohibitory-signages">Prohibition Signage</a></h5>
                                        <p class="We-Elevate-Brands-text">Prohibition signage combines striking red-and-white contrast with universal pictograms to enforce 
                                            restrictions clearly and immediately. Crafted from durable, fade-resistant materials for indoor and outdoor use, they effectively
                                             communicate banned activities.</p>
                                    </div>
                            </div>
                        </div>

                    </div>
                    <!-- Navigation Arrows -->
                    <div class="We-Elevate-Brands-nav ">
                        <!-- Swap order: prev on left, next on right -->
                        <div class="We-Elevate-Brands-button-prev"></div>
                        <div class="We-Elevate-Brands-button-next"></div>
                    </div>

                </div>
            </div>


        </div>
    </section>

{{-- ====================================================
     SMARTER SAFETY SIGNAGE FOR SAFER WORKSPACES SECTION
     ==================================================== --}}
<section class="ss2-workspace-section py-5">
    <div class="container py-4">
        <div class="row justify-content-end">
            <div class="col-lg-7 col-md-10 text-white">
                <h2 class="ss2-workspace-title mb-4">
                    Smart Safety Signage for Workspace Safety & Compliance
                </h2>
                
                <p class="ss2-workspace-desc mb-4">
                    At Brand Signages, we engineer safety signs that do more than display warnings- they deliver clarity. Every sign is manufactured to meet strict industry compliance standards and local safety codes, ensuring your facility passes inspections without question. We use high-grade, weather-resistant materials and fade-proof inks built to withstand chemicals, extreme temperatures, heavy traffic, and industrial wear.
                </p>
                
                <p class="ss2-workspace-desc mb-4">
                   We understand that no two environments share the same risks, which is why we offer fully tailored solutions- from custom pictograms and multilingual messaging to site-specific dimensions and mounting options. Our team partners with you from initial risk assessment and design proofing through manufacturing and installation guidance, delivering expert consultation, and fast turnaround times.
                </p>
                <div class="mt-4">
                    <button type="button" class="ss2-workspace-btn" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                        Get A Quote <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ====================================================
     SAFETY SIGNAGES THAT BUILD AWARENESS BEFORE RISK APPEARS
     ==================================================== --}}
<section class="ss2-awareness-risk-section py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            {{-- Left Side: Text Content --}}
            <div class="col-lg-6">
                <div class="ss2-awareness-risk-content">
                    <h2 class="ss2-section-title mb-4">
                        Safety Signage That Builds Awareness Before Risk Appears
                    </h2>
                    
                    <p class="ss2-section-desc mb-4">
                        Safety signage is the silent infrastructure of any secure environment. It guides movement, defines boundaries, and creates an unspoken agreement about how a space should be navigated. In fast-moving workplaces and high-traffic public areas, these visual cues help people make the right decisions instinctively- without hesitation, without confusion.
                    </p>
                    
                    <p class="ss2-section-desc mb-0">
                        Strategically placed safety and prohibition signs create smoother workflows, stronger emergency preparedness, and a culture where safe behavior becomes second nature. Beyond immediate protection, a well-planned signage system supports regulatory compliance.
                    </p>
                </div>
            </div>

            {{-- Right Side: Image safety-13.webp --}}
            <div class="col-lg-6">
                <div class="ss2-awareness-risk-img-wrap">
                    <img src="{{ asset('frontend/Images/safety-13.webp') }}" alt="Safety Signages That Build Awareness Before Risk Appears" class="img-fluid ss2-awareness-risk-img">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ====================================================
     SAFETY COMMUNICATION THAT WORKS WHEN IT MATTERS MOST
     ==================================================== --}}
<section class="ss2-communication-section py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-10">
                <h2 class="ss2-section-title mb-4">
                    Custom Safety Sign Boards- Brand Signages
                </h2>
                
                <p class="ss2-section-desc mb-3">
                    Effective safety signage isn't about quantity- it's about clarity at the moment of decision. The right sign creates instant awareness, eliminates hesitation, and directs action in real-world situations where a split second can prevent a serious incident.
                </p>

                <p class="ss2-section-desc mb-0">
                    As one of India's leading safety sign board manufacturers, we combine competitive pricing, deep customization capabilities, and reliable on-time delivery to protect workplaces at scale.
                </p>
            </div>
        </div>

        <div class="row g-4">
            {{-- Card 1: Purpose-Driven Safety Signages --}}
            <div class="col-lg-4 col-md-6">
                <div class="ss2-feature-card">
                    <h3 class="ss2-feature-card-title">
                        Integrated Safety Systems
                    </h3>
                    <p class="ss2-feature-card-desc">
                        We design signage ecosystems that work together- guiding traffic flow, highlighting risk zones, and supporting rapid decision-making across your entire facility. Every sign is positioned and designed as part of a cohesive visual language.
                    </p>
                </div>
            </div>

            {{-- Card 2: Built for Visibility & Longevity --}}
            <div class="col-lg-4 col-md-6">
                <div class="ss2-feature-card">
                    <h3 class="ss2-feature-card-title">
                        Engineered for Visibility
                    </h3>
                    <p class="ss2-feature-card-desc">
                        We use industrial-grade materials, high-contrast color palettes, and weather-resistant finishes, our signs remain crisp and legible in demanding environments. We create sign boards for factory floors to outdoor construction sites, and public places.
                    </p>
                </div>
            </div>

            {{-- Card 3: Designed Around Real Environments --}}
            <div class="col-lg-4 col-md-12">
                <div class="ss2-feature-card">
                    <h3 class="ss2-feature-card-title">
                        Tailored to Requirements
                    </h3>
                    <p class="ss2-feature-card-desc">
                        No two facilities share the same risks or workflows. We customize every solution around your actual site conditions, traffic patterns, and compliance requirements. We ensure your safety messages are seen, understood, and followed.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>











    <section class="new_client_section">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            
            <div class="col-md-12 new_client_section-scrolling col-12">

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
{{-- ====================================================
     NEON CUSTOMER REVIEWS SECTION (nr-section)
     ==================================================== --}}
<section class="nr-section py-5">
    <div class="container">
        <div class="row g-4">
            
            {{-- Left Sidebar Column --}}
            <div class="col-lg-4 col-md-4 nr-sidebar-col">
                <div class="nr-sidebar-box pe-lg-3">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <i class="fa-solid fa-star text-warning fs-4"></i>
                        <span class="fs-2 fw-bold text-dark">4.8</span>
                    </div>
                    <h3 class="nr-sidebar-title">Our Client Reviews</h3>
                    <p class="text-muted mb-3">
                        1,500 total &bull; <a href="https://g.page/r/CfwSx40PFmfKEAI/review" class="text-primary text-decoration-underline">Write a Review</a>
                    </p>

                    {{-- Progress Bars Card --}}
                    <div class="nr-progress-card p-3 rounded-3 border mb-4 bg-white">
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">5-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar" style="width: 98%; background-color: #e43d12;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">98%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">4-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar" style="width: 4%; background-color: #e43d12;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">4%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">3-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 0.5%;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">&lt;1%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">2-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 0.5%;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">&lt;1%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-0">
                            <span class="small text-muted" style="width: 45px;">1-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 0.5%;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">&lt;1%</span>
                        </div>
                    </div>

                    {{-- Customer Photos Thumbnail Row --}}
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <img src="{{ asset('frontend/Images/safety-c.png') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <img src="{{ asset('frontend/Images/safety-a.c.webp.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <img src="{{ asset('frontend/Images/safety-v.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <img src="{{ asset('frontend/Images/safety-Customer.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center border" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-camera text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Cards Grid (2 Columns) --}}
            <div class="col-lg-8 col-md-8">
                <div class="row g-4">
                    
                    {{-- Column 1 --}}
                    <div class="col-md-6 d-flex flex-column gap-4">
                        
                        {{-- Card 1: Rahul Verma (Text Only) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Rahul Verma</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <h4 class="nr-review-title">Perfect for our warehouse</h4>
                            <p class="nr-review-desc">We ordered custom safety signs for our factory floor and they turned out even better than expected. The reflective material is...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 2: A.G. (With Image safety-a.c.webp.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-a.c.webp.webp') }}" alt="Fire Exit Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Akash Gupta</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">The fire exit signs we ordered are clearly visible even in low light conditions. Excellent print quality and the aluminum backing feels...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 3: Priya N. (With Image safety-Customer.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-Customer.webp') }}" alt="Emergency Extinguisher Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Priya N.</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">These safety signs are exactly what our facility needed. Bright, durable, and fully compliant with local fire safety regulations. Amazing...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 4: Anjali Rana (Text Only) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Anjali Rana</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <h4 class="nr-review-title">Highly recommended</h4>
                            <p class="nr-review-desc">We installed prohibition signs across our manufacturing plant and the quality is outstanding. Very professional finish and clear messaging.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 5: R.K. (With Image safety-r.k.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-r.k.webp') }}" alt="Construction Site Warning Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Rakesh Kumar</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">The construction safety signs are holding up perfectly on our job site. Weatherproof and highly visible even from a distance. Great work...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                    </div>

                    {{-- Column 2 --}}
                    <div class="col-md-6 d-flex flex-column gap-4">
                        
                        {{-- Card 1: C. (With Image safety-c.png) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-c.png') }}" alt="Caution Wet Floor Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Chaitra Verma</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Excellent safety signage for our commercial complex. The anti-slip floor signs are clearly visible and the adhesive backing made installation...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 2: Vamshi (Text Only) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Vamshi</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">We ordered directional signs for our hospital campus and the wayfinding is now seamless. Patients and visitors find their way easily...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 3: V. (With Image safety-v.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-v.webp') }}" alt="Photoluminescent Exit Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Vimla Banu</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">The photoluminescent exit signs glow brilliantly in complete darkness. Exactly what we needed for emergency preparedness and compliance.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 4: Mayur Sharma (With Image safety-Mayur-Sharma.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-Mayur-Sharma.webp') }}" alt="Mandatory PPE Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Mayur Sharma</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">The mandatory PPE signs for our manufacturing unit are crisp and professional. Every worker notices them and compliance has improved...</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 5: Anika Mehta (With Image safety-Anika-Mehta.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/safety-Anika-Mehta.webp') }}" alt="High Voltage Warning Sign" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Anika Mehta</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">The high voltage warning signs are bold and impossible to miss. Great customization options and the metal frames feel incredibly durable.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- End Detailed Information Section --}}
        <div class="nr-info-card-wrapper mt-5 mb-4">
            <p class="nr-info-card-desc">Brand Signages provides comprehensive safety signage solutions designed to protect people and ensure compliance across every environment. From industrial workplaces and construction sites to hospitals, schools, and commercial buildings, our safety signs deliver clear visual communication that reduces risk and supports regulatory readiness.</p>

            <h3 class="nr-info-card-heading">Reflective vs. Standard Safety Signs</h3>
            <p class="nr-info-card-desc">Not all safety signs perform equally in every environment, and choosing the right type matters more than most buyers realize. A standard safety sign works well in well-lit indoor spaces where visibility is never in question. A reflective safety sign, on the other hand, is engineered with high-visibility reflective film that catches and returns light from vehicle headlights, flashlights, or emergency lighting—making it essential for roads, parking facilities, warehouses with vehicle traffic, and outdoor industrial zones.</p>

            <div class="nr-info-collapse-content collapse" id="nrInfoMoreContent">
                <h3 class="nr-info-card-heading">Understanding Safety Sign Materials and Durability</h3>
                <p class="nr-info-card-desc">The material you choose determines how long your safety signage remains effective. Aluminum composite signs offer excellent rigidity and weather resistance for outdoor use, while PVC and acrylic options suit indoor environments where moisture and chemical exposure are minimal. For extreme industrial conditions, we recommend industrial-grade aluminum with protective lamination, which resists fading, scratching, and corrosion over years of exposure.</p>
                <p class="nr-info-card-desc">Checking the material specification before you order isn't optional if your sign is going outdoors or into a demanding workplace. It's the single detail that determines whether your safety signage remains legible through seasons of use or needs replacement after the first monsoon or chemical spill.</p>

                <h3 class="nr-info-card-heading">Why LED-Illuminated Safety Signs Are Worth It</h3>
                <p class="nr-info-card-desc">Beyond standard printed signs, LED-illuminated and photoluminescent safety signs offer critical advantages for emergency scenarios. LED exit signs remain visible during power failures, while photoluminescent signs absorb ambient light and glow in darkness without any electrical connection. These options are ideal for fire exits, stairwells, and evacuation routes where visibility can mean the difference between a safe exit and a dangerous delay.</p>
                <p class="nr-info-card-desc">Whether it's for a high-rise building, a manufacturing plant, or a public facility, illuminated safety signage delivers the same bold visibility as standard signs with the added reliability of always-on performance.</p>

                <h3 class="nr-info-card-heading">Types of Safety Signs for Every Environment</h3>
                <p class="nr-info-card-desc">Safety signage isn't one-size-fits-all. Brand Signages produces a full range of sign types to match specific hazards and compliance needs: prohibition signs that restrict dangerous activities, warning signs that alert people to potential risks, mandatory signs that enforce required actions like PPE use, emergency signs that mark exits and first-aid stations, and fire safety signs that identify extinguishers and hydrants. Each category follows standardized color coding and symbol conventions so the message is understood instantly, regardless of language barriers.</p>

                <h3 class="nr-info-card-heading">Fully Customized to Your Site Requirements</h3>
                <p class="nr-info-card-desc">Every safety sign from Brand Signages can be built around your specific operational needs—whether that's bilingual messaging for a diverse workforce, custom dimensions for unusual mounting spaces, site-specific hazard warnings, or branded color schemes that align with your corporate identity while maintaining compliance. You choose the size, material, finish, and messaging, and our team ensures the final product meets both your aesthetic standards and regulatory obligations.</p>

                <h3 class="nr-info-card-heading">A Signage System Built for Real Protection</h3>
                <p class="nr-info-card-desc">A safety sign is more than a wall fixture- it's a layer of protection. Whether you're upgrading a factory floor, a hospital corridor, or a public roadway, Brand Signages' custom safety sign solutions are built to deliver clarity, durability, and compliance in any environment, indoors or out.</p>
            </div>
        
            <a class="nr-info-readmore-link my-2 d-inline-block" data-bs-toggle="collapse" href="#nrInfoMoreContent" role="button" aria-expanded="false" aria-controls="nrInfoMoreContent" onclick="toggleReadMoreText(this)">
                ➤ Read More
            </a>

            <div class="mt-3">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#globalContactPopup" class="nr-info-touch-btn">
                    Get In Touch <span class="touch-arrow"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 10.5L10.5 3.5M10.5 3.5H4.66667M10.5 3.5V9.33333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </a>
            </div>
        </div>

        <script>
        function toggleReadMoreText(btn) {
            setTimeout(function() {
                if (btn.getAttribute('aria-expanded') === 'true') {
                    btn.innerHTML = '➤ Read Less';
                } else {
                    btn.innerHTML = '➤ Read More';
                }
            }, 150);
        }
        </script>

    </div>
</section>




<section class="why-bg-light-pink py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs
                    through our articles.</p>
            </div>

            <div class="row">
                @if (!empty($blogs) && count($blogs) > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                            <a href="{{ route('blogsVaritaion', $blog->slug) }}" class="text-decoration-none">
                                <div class="blog-card">
                                    <div class="blog-card-img">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="badge">{{ strtoupper($blog->topic) }}</span>
                                            <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                                        </div>
                                        <h5 class="blog-card-title">{{ $blog->title }}</h5>
                                        <p class="card-text">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
                <div class="text-center">
                    <a href="{{ route('blogs') }}">
                        <button class="contact-btn">See All Blogs</button>
                    </a>
                </div>
            </div>
        </div>
</section>

<section class="faq-section" id="npd-faqs">
    <div class="faq-container">
      <h1 class="faq-title">Frequently Asked Questions</h1>
      
      <div class="faq-item">
        <button class="faq-question">
            What Materials Are Used for Safety Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Brand Signages manufactures safety signs using industrial-grade materials selected for durability and visibility. Our standard options include aluminum composite panels for outdoor and heavy-duty use, rigid PVC for indoor environments, and photoluminescent films for emergency exit signage. Reflective sheeting is applied to road and construction signs to ensure high visibility at night. All materials are weather-resistant, fade-proof, and designed to maintain legibility under demanding industrial, commercial, and outdoor conditions.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What Is the Delivery Time for Safety Sign Orders?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Standard safety sign orders are typically delivered within 5–8 business days. For bulk orders, custom-sized signs, or highly personalized designs with specific compliance requirements, delivery may extend to 10–12 business days. We prioritize on-time delivery without compromising on quality or regulatory accuracy.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            How Long Do Safety Signs Typically Last?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>With proper installation and minimal maintenance, our safety signs last 5 to 10 years or more. Outdoor aluminum signs with protective lamination resist corrosion, UV fading, and physical wear, while indoor PVC and acrylic signs maintain their finish even longer. Photoluminescent signs retain their glow-in-the-dark properties for approximately 7 years under normal conditions.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Can Safety Signs Be Used Outdoors?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes. Brand Signages produces outdoor-rated safety signs using weatherproof aluminum, UV-stable inks, and corrosion-resistant fasteners. These signs are engineered to withstand rain, extreme heat, dust, and chemical exposure without losing visibility or structural integrity. Reflective and illuminated options are also available for low-light or high-traffic outdoor environments such as roads, construction zones, and parking facilities.</p>
           </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Are Your Safety Signs Compliant with Regulations?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes. All our safety signs are designed in accordance with OSHA, ISO 7010, and local Indian safety standards. We use standardized color coding, symbols, and pictograms to ensure universal understanding across language barriers. Whether you need fire safety signs, prohibition signage, or mandatory PPE boards, each product is manufactured to support regulatory compliance and workplace safety audits.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            How Much Do Custom Safety Signs Cost?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <p>The cost of custom safety signs depends on several factors:</p>
            <ul>
                <li>Larger signs require more material and production time, increasing the overall cost.</li>
                <li>Specialized materials such as reflective film, photoluminescent backing, or aluminum composite affect pricing.</li>
                <li>Custom graphics, bilingual text, or branded color schemes may add to production complexity.</li>
                <li>Bulk orders typically reduce the per-unit cost significantly.</li>
                <li>Optional features such as LED illumination or anti-graffiti coating can increase the price.</li>
                <li>All quotes include a transparent breakdown with no hidden charges.</li>
                <li>Delivery and installation support are factored into the final cost where applicable.</li>
            </ul>
            <p>On average, standard safety signs range from ₹150 to ₹3,000 per unit, while large-format or illuminated custom signs may cost more. For an exact quote, contact Brand Signages with your specifications.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What Is the Installation Process for Safety Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Most Brand Signages safety signs come with pre-drilled holes, adhesive backing, or mounting brackets for quick and secure installation. Wall-mounted signs can typically be fixed using standard screws and anchors. For floor signs, heavy-duty adhesive ensures slip-resistant placement. Larger outdoor signs or illuminated boards may require professional mounting, and our team provides installation guidance or on-site support upon request.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What Maintenance Is Required for Safety Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Safety signs require minimal maintenance. Wipe the surface periodically with a soft, damp cloth to remove dust, grease, or chemical residue. Avoid abrasive cleaners that may damage reflective or laminated finishes. For outdoor signs, inspect mounting hardware annually to ensure stability. Photoluminescent signs should be exposed to ambient light regularly to maintain their glow capacity. With basic care, your signage will remain fully effective for years.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What Types of Safety Signs Does Brand Signages Offer?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <ul>
                <li><strong>Warning Signs:</strong> Alert people to potential hazards such as high voltage, slippery floors, or chemical risks.</li>
                <li><strong>Prohibition Signs:</strong> Restrict dangerous or unauthorized activities using bold red-and-white symbols.</li>
                <li><strong>Mandatory Signs:</strong> Enforce required actions such as wearing helmets, gloves, or safety goggles.</li>
                <li><strong>Emergency Signs:</strong> Mark evacuation routes, first-aid stations, and emergency equipment locations.</li>
                <li><strong>Fire Safety Signs:</strong> Identify fire extinguishers, hydrants, alarms, and assembly points.</li>
                <li><strong>Directional Signs:</strong> Guide foot and vehicle traffic efficiently across facilities and campuses.</li>
                <li><strong>Construction Safety Signs:</strong> Provide site-specific hazard warnings and compliance notices for job sites.</li>
            </ul>
            <p>Each category follows standardized design conventions to ensure immediate recognition and compliance across all workplace and public environments.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            Why Are Safety Signs Important for Workplaces?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Safety signs are a critical component of any risk management strategy. They communicate hazards, enforce protocols, and guide behavior without requiring verbal instruction—essential in noisy, fast-moving, or multilingual environments. Properly placed signage reduces accidents, supports emergency preparedness, ensures regulatory compliance, and demonstrates that an organization prioritizes employee and public welfare. In short, safety signs transform written policies into visible, everyday protection.</p>
        </div>
      </div>

    </div>
  </section>




{{-- ====================================================
     LIGHTBOX MODAL FOR GALLERY & REVIEW IMAGES
     ==================================================== --}}
<div class="nr-modal" id="nrImageModal">
    <span class="nr-modal-close" id="nrModalClose">&times;</span>
    <button class="nr-modal-btn nr-modal-prev" id="nrModalPrev"><i class="fa-solid fa-chevron-left"></i></button>
    <div class="nr-modal-content-wrap">
        <img class="nr-modal-img" id="nrModalImg" src="" alt="Zoomed Review Image">
    </div>
    <button class="nr-modal-btn nr-modal-next" id="nrModalNext"><i class="fa-solid fa-chevron-right"></i></button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("nrImageModal");
    var modalImg = document.getElementById("nrModalImg");
    var closeBtn = document.getElementById("nrModalClose");
    var prevBtn = document.getElementById("nrModalPrev");
    var nextBtn = document.getElementById("nrModalNext");

    // Gather all zoomable images on the page
    var imagesList = [];
    var activeIndex = -1;

    // Find all images inside review masonry cards & top review photo attachments
    function refreshImagesList() {
        imagesList = [];
        var selectors = [
            ".nr-sidebar-box img",
            ".nr-card img"
        ];
        document.querySelectorAll(selectors.join(",")).forEach(function (el) {
            if (imagesList.indexOf(el.src) === -1) {
                imagesList.push(el.src);
            }
            // Attach image click handler (Opens Lightbox Gallery)
            el.style.cursor = "pointer";
            el.addEventListener("click", function (e) {
                e.stopPropagation();
                var src = e.target.src;
                activeIndex = imagesList.indexOf(src);
                openModal(src);
            });
        });

        // Attach Read More click handlers (TEXT EXPANSION ONLY)
        document.querySelectorAll(".nr-readmore").forEach(function (btn) {
            btn.style.cursor = "pointer";
            btn.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                var card = this.closest(".nr-card");
                if (card) {
                    var desc = card.querySelector(".nr-review-desc");
                    if (desc) {
                        desc.classList.toggle("expanded");
                        if (desc.classList.contains("expanded")) {
                            this.textContent = "Show less";
                        } else {
                            this.textContent = "Read more";
                        }
                    }
                }
            });
        });
    }

    function openModal(src) {
        modal.style.display = "flex";
        modalImg.src = src;
        document.body.style.overflow = "hidden"; // Disable background scrolling
    }

    function closeModal() {
        modal.style.display = "none";
        document.body.style.overflow = "";
    }

    function showPrev() {
        if (imagesList.length === 0) return;
        activeIndex = (activeIndex - 1 + imagesList.length) % imagesList.length;
        modalImg.src = imagesList[activeIndex];
    }

    function showNext() {
        if (imagesList.length === 0) return;
        activeIndex = (activeIndex + 1) % imagesList.length;
        modalImg.src = imagesList[activeIndex];
    }

    closeBtn.addEventListener("click", closeModal);
    prevBtn.addEventListener("click", function(e) {
        e.stopPropagation();
        showPrev();
    });
    nextBtn.addEventListener("click", function(e) {
        e.stopPropagation();
        showNext();
    });

    // Close on clicking overlay background
    modal.addEventListener("click", function (e) {
        if (e.target === modal || e.target === document.querySelector('.nr-modal-content-wrap')) {
            closeModal();
        }
    });

    // Keyboard support
    document.addEventListener("keydown", function (e) {
        if (modal.style.display === "flex") {
            if (e.key === "Escape") closeModal();
            if (e.key === "ArrowLeft") showPrev();
            if (e.key === "ArrowRight") showNext();
        }
    });

    refreshImagesList();
});
</script>
<style>
    @media (max-width: 768px) {


    .ds2-cities-section {
        padding: 0 20px !important;
    }
    section#npd-faqs {
    padding: 32px !important;
}
section.why-bg-light-pink.py-5 {
    padding: 0 24px;
    p{
        text-align: left !important;
    }
}
    }
</style>
@endsection