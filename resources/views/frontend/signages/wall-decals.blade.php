@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Wall Decals – Peel, Stick & Transform Any Space Instantly',
                'desc' =>
                    'Designed for effortless application and stunning visual impact, our wall decals let you rebrand any space without the mess of paint or permanent fixtures.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'High-Quality Wall Decals for Offices, Retail & More',
                'desc' =>
                    'Our precision-cut wall decals deliver crisp graphics and vibrant colour, making them the ideal choice for corporate branding, retail promotions, and interior décor.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'Custom Wall Decals – Your Brand, Your Design, Any Wall',
                'desc' =>
                    'Fully customised to your brand specifications, our wall decals are produced on premium removable vinyl for a flawless finish that leaves no residue behind.',
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
        <h2>Elevate Your Space with Premium Wall Decals <br>by Brand Signages</h2>
        <p>Wall decals are one of the fastest and most affordable ways to refresh your brand environment without any major renovation.
            At Brand Signages, we craft precision-cut wall decals on premium removable vinyl that delivers sharp lines,
            rich colour, and clean removal. Our range includes expertly produced
            <a href="wall-graphics" style="color:#E43D12; text-decoration:none;"><b>branded wall graphics</b></a>,
            <a href="wall-murals" style="color:#E43D12; text-decoration:none;"><b>full-wall murals</b></a>,
            <a href="vinyl-wall-wraps" style="color:#E43D12; text-decoration:none;"><b>vinyl wall wraps</b></a>,
            custom <b>wall stickers</b>, and decorative decals designed for businesses that want a quick, impactful
            interior refresh with zero permanent commitment.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => 'led-1', 'title' => 'Corporate Logo Wall Decals', 'class' => 'red-title'],
                    ['img' => 'led-2', 'title' => 'Retail Promotional Decals', 'class' => 'red-title'],
                    ['img' => 'led-3', 'title' => 'Motivational Quote Decals', 'class' => 'red-title'],
                    ['img' => 'led-4', 'title' => 'Custom Illustrated Wall Decals', 'class' => 'red-title'],
                    ['img' => 'led-5', 'title' => 'Frosted & Translucent Decals', 'class' => 'red-title'],
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
                    <img src="{{ asset('frontend/Images/home/led-sign-bg.webp') }}" alt="Wall Decals by Brand Signages" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Wall Decals: Built for Speed, Style & Flexibility</h2>
                <p class="brand-description">
                    Wall decals offer the perfect combination of visual impact and practical flexibility — no nails, no paint, no mess. Over the years, they have become the go-to interior branding solution for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>startup offices</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail stores</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>clinics & salons</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>cafés & restaurants</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>co-working spaces</strong></a>
                    across India. In 2025, wall decals continue to be a top choice for businesses seeking fast, flexible, and cost-effective branding that can evolve as quickly as their brand does.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Residue-Free Removal:</b> Our removable vinyl decals peel off cleanly without damaging paint
                        or leaving behind any sticky residue — perfect for rented premises.
                    </li>
                    <li class="mb-3">
                        <b>Precision Die-Cut Finish:</b> Every decal is cut with laser-like accuracy to follow the exact
                        contour of your logo, text, or illustration for a clean, professional look.
                    </li>
                    <li>
                        <b>Quick Turnaround:</b> From design approval to installation, our wall decals are produced and
                        delivered fast — ideal for campaign launches, store openings, and event setups.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/wall-decals" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Types of Wall Decals We<br>Produce & Install</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp') }}" class="card-img-center" alt="Logo Wall Decals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Logo Wall Decals</h5>
                                <p class="We-Elevate-Brands-text">Precision die-cut vinyl decals of your brand logo, applied cleanly to office walls, reception areas, and storefronts for an instant branded look.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp') }}" class="card-img-center" alt="Typography Decals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Typography & Quote Decals</h5>
                                <p class="We-Elevate-Brands-text">Motivational quotes, brand taglines, and custom text in any font or style — cut from premium vinyl and applied directly to your walls.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp') }}" class="card-img-center" alt="Illustrated Decals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Custom Illustrated Decals</h5>
                                <p class="We-Elevate-Brands-text">Brand-specific illustrations, characters, and graphic elements produced as full-colour printed decals for unique, eye-catching interior environments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/crystal-led-6.webp') }}" class="card-img-center" alt="Frosted Decals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Frosted Glass Decals</h5>
                                <p class="We-Elevate-Brands-text">Elegant frosted vinyl decals applied to glass partitions and windows for privacy, branding, and a polished, professional look.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/led-sign-board/sky-sgn-board-2.webp') }}" class="card-img-center" alt="Floor Decals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Floor & Surface Decals</h5>
                                <p class="We-Elevate-Brands-text">Heavy-duty anti-slip decals for floors, staircases, and counters — ideal for directional signage, promotions, and branded wayfinding.</p>
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
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=900" class="img-fluid mb-4 rounded-4" alt="Removable Wall Decal">
                    <h4 class="fw-semibold mb-3">Removable Wall Decals</h4>
                    <div class="mx-auto mb-4" style="width:60%; height:1px; background:#ddd;"></div>
                    <div class="mb-4">
                        <i class="fas fa-undo fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Residue-Free Removal</p>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-palette fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Full-Colour Digital Printing</p>
                    </div>
                    <div>
                        <i class="fas fa-cut fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Precision Die-Cut Contours</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center p-5 rounded-4" style="background:#f8f9fb;">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=900" class="img-fluid mb-4 rounded-4" alt="Permanent Wall Decal">
                    <h4 class="fw-semibold mb-3">Permanent Wall Decals</h4>
                    <div class="mx-auto mb-4" style="width:60%; height:1px; background:#ddd;"></div>
                    <div class="mb-4">
                        <i class="fas fa-shield-alt fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Strong Permanent Adhesive</p>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-sun fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">UV & Fade Resistant Inks</p>
                    </div>
                    <div>
                        <i class="fas fa-calendar-check fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">3–5 Year Indoor Lifespan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative text-white">
    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1600" class="w-100" style="height:450px; object-fit:cover;" alt="Wall Decals CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Wall Decals: The Fastest Way to Brand Any Space Without Renovation</h2>
        <p class="text-light mb-4">Blank walls are missed branding opportunities. Our custom wall decals transform any surface into a compelling visual statement — in hours, not days. Whether you're launching a new campaign, refreshing your office, or decorating a retail space, Brand Signages delivers precision-cut decals that stick to your vision, not your walls forever.</p>
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
            <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}" alt="Wall Decals Client - Brand Signages">
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
                            <p class="description">Brand Signages created beautiful custom wall decals for our entire co-working space. The application was flawless, the colours are incredibly sharp, and the whole installation was done in a single day with zero disruption to our members.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Operations Head – WorkNest Spaces</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed removable decals for a seasonal campaign across five store locations. Brand Signages delivered on time, the decals looked stunning, and they came off without a single scratch on our walls. Exceptional service!</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Retail Manager – Zestify Fashion</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">The frosted glass decals they made for our office partitions look absolutely premium. They add privacy while keeping our open office feel, and the branding element ties the whole space together perfectly.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Pixel & Co. Design Studio</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">From design to installation, the entire process was smooth and professional. Our clinic walls now feature beautiful brand decals that create a calming and trustworthy environment for our patients.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Vikram Sharma</h6><small class="text-muted">Director – ClearSkin Clinics</small></div>
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
        <h1 class="faq-title py-5">Wall Decals FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What are wall decals and how are they different from wall stickers?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Wall decals are precision die-cut vinyl graphics designed for professional brand application on walls and surfaces. Unlike generic wall stickers, decals are produced on commercial-grade vinyl with either permanent or removable adhesive, offering a far superior finish, durability, and customisation capability suited for business environments.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can wall decals be removed without damaging the wall or paint?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, our removable wall decals are specifically engineered to peel off cleanly without leaving any adhesive residue or causing damage to painted walls. They are ideal for leased office spaces, rented retail units, and any location where permanent alteration is not permitted.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What surfaces are wall decals compatible with?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our wall decals adhere well to most smooth and semi-smooth surfaces including painted walls, glass partitions, tiles, MDF panels, and metal surfaces. We recommend a clean, dry, and grease-free surface for best adhesion results. Our team can advise you on the best material choice based on your specific surface type.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can I order fully custom wall decals with my logo and brand colours?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Absolutely. All our wall decals are <b>fully customised</b> to your brand's specifications. You can submit your logo, artwork, or design brief and our team will produce precision-cut or full-colour printed decals that perfectly match your brand identity, space dimensions, and aesthetic requirements.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long do wall decals last indoors?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our indoor wall decals typically last <b>3 to 5 years</b> without significant fading or edge lifting when applied correctly. We use premium vinyl and UV-resistant inks that maintain colour vibrancy even in well-lit, air-conditioned environments such as offices, retail stores, and clinics.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What is the minimum order quantity for custom wall decals?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We accept orders of any size — from a single decal for a reception wall to bulk orders for multi-location rollouts. There is no minimum order requirement. Whether you need one bespoke piece or hundreds of identical decals across multiple branches, we can accommodate your requirement efficiently.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long does it take to produce and deliver wall decals?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Standard production time is <b>3 to 7 working days</b> depending on size, complexity, and quantity. For urgent requirements, we offer expedited production options. Installation is typically completed within a few hours to one day depending on the scope of the project.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you provide wall decal installation services across India?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, Brand Signages provides end-to-end wall decal production and professional installation services <b>across Bangalore and all major cities in India</b>. Our experienced installation teams ensure bubble-free, perfectly aligned application on every project, regardless of size or complexity.</p></div>
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