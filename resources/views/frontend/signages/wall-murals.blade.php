@extends('frontend.layout.appLayout')

@section('content')
    <section class="simple-impact-hero">
        @php
            $slides = [
                [
                    'img' => 'wall-mount-1',
                    'title' => 'Wall Murals – Transform Entire Walls into Immersive Visual Experiences',
                    'desc' =>
                        'Our large-format wall murals turn blank walls into breathtaking brand narratives, scenic landscapes, and immersive art installations that leave a lasting impression.',
                ],
                [
                    'img' => 'wall-mount-5',
                    'title' => 'Stunning Custom Wall Murals for Commercial & Corporate Spaces',
                    'desc' =>
                        'From floor-to-ceiling brand murals to detailed photographic scenes, we create wall murals that redefine interior spaces for offices, hotels, hospitals, and retail environments.',
                ],
                [
                    'img' => 'wall-mount-4',
                    'title' => 'Premium Large-Format Wall Murals Printed with Vivid Precision',
                    'desc' =>
                        'Crafted on high-grade cast vinyl using UV-resistant inks, our wall murals deliver extraordinary colour depth, razor-sharp detail, and seamless installation on any scale.',
                ],
            ];
        @endphp

        <div class="hero-slides-wrapper" id="heroSlider">
            @foreach ($slides as $slide)
                <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="/frontend/Images/large-graphics/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">
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
            <h2>Make a Powerful Statement with Custom Wall Murals <br>by Brand Signages</h2>
            <p>Wall murals are the ultimate interior branding statement — transforming entire walls into immersive visual
                environments
                that inspire, engage, and communicate your brand story at scale. At Brand Signages, we produce large-format
                wall murals
                on premium cast vinyl and non-woven fabric using precision digital printing that delivers exceptional colour
                depth
                and seamless panel matching. Our offering includes breathtaking
                <a href="wall-graphics" style="color:#E43D12; text-decoration:none;"><b>branded wall graphics</b></a>,
                <a href="wall-decals" style="color:#E43D12; text-decoration:none;"><b>precision wall decals</b></a>,
                <a href="vinyl-wall-wraps" style="color:#E43D12; text-decoration:none;"><b>vinyl wall wraps</b></a>,
                <b>scenic photographic murals</b>, and full floor-to-ceiling brand installations designed for businesses
                that want
                a truly unforgettable interior presence.
            </p>

            <div class="impact-gallery-grid mt-5">
                @php
                    $galleryItems = [
                        ['img' => '1', 'title' => 'Corporate Office Brand Murals', 'class' => 'red-title'],
                        ['img' => '2', 'title' => 'Hospitality & Hotel Wall Murals', 'class' => 'red-title'],
                        ['img' => '3', 'title' => 'Scenic Photographic Murals', 'class' => 'red-title'],
                        ['img' => '4', 'title' => 'Retail Immersive Story Murals', 'class' => 'red-title'],
                        ['img' => '5', 'title' => 'Healthcare & Wellness Murals', 'class' => 'red-title'],
                    ];
                @endphp
                @foreach ($galleryItems as $item)
                    <div class="impact-card">
                        <div class="impact-card-inner">
                            <img src="/frontend/Images/large-graphics/wm-{{ $item['img'] }}.webp"
                                alt="{{ $item['title'] }}" class="impact-image">
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
                        <img src="{{ asset('frontend/Images/large-graphics/wm-6.webp') }}"
                            alt="Wall Murals by Brand Signages" class="img-fluid rounded-3">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Wall Murals: Where Art, Brand & Architecture Meet</h2>
                    <p class="brand-description">
                        Wall murals go beyond decoration — they define the entire character of a space and create immersive
                        environments that leave a lasting emotional impression. They have become an essential interior
                        feature for
                        <a href="#" style="color:#E43D12; text-decoration:none;"><strong>five-star hotels &
                                resorts</strong></a>,
                        <a href="#" style="color:#E43D12; text-decoration:none;"><strong>flagship retail
                                stores</strong></a>,
                        <a href="#" style="color:#E43D12; text-decoration:none;"><strong>hospitals & wellness
                                centres</strong></a>,
                        <a href="#" style="color:#E43D12; text-decoration:none;"><strong>corporate
                                headquarters</strong></a>, and
                        <a href="#" style="color:#E43D12; text-decoration:none;"><strong>educational
                                campuses</strong></a>
                        across India. In 2025, wall murals represent the highest form of interior brand expression —
                        delivering a visual impact that no other signage or graphic medium can match.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <b>Seamless Large-Format Printing:</b> Our state-of-the-art printers produce murals at any size
                            with perfectly matched panel seams, delivering one uninterrupted visual from floor to ceiling.
                        </li>
                        <li class="mb-3">
                            <b>Extraordinary Colour Depth & Detail:</b> Using wide-gamut UV inks and premium cast vinyl, we
                            reproduce photographic imagery, fine art, and brand graphics with outstanding fidelity at scale.
                        </li>
                        <li>
                            <b>Long-Lasting Durability:</b> Our wall murals are built to last for years — resistant to
                            fading,
                            humidity, and surface wear — ensuring your investment continues to impress for the long term.
                        </li>
                        <div class="mt-4">
                            <a href="blogs/wall-murals" class="custom-btn">Explore More</a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Types of Wall Murals We<br>Create & Install</h2>
            </div>
            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card">
                                <img src="{{ asset('frontend/Images/large-graphics/wm-7.webp') }}" class="card-img-center"
                                    alt="Brand Identity Murals">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Brand Identity Murals</h5>
                                    <p class="We-Elevate-Brands-text">Large-scale murals that bring your brand story,
                                        values, and visual identity to life across entire feature walls in lobbies,
                                        boardrooms, and open office areas.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card">
                                <img src="{{ asset('frontend/Images/large-graphics/wm-8.webp') }}" class="card-img-center"
                                    alt="Scenic Photomurals">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Scenic Photo Murals</h5>
                                    <p class="We-Elevate-Brands-text">Breathtaking high-resolution photographic murals
                                        featuring landscapes, cityscapes, nature scenes, and abstract imagery that create a
                                        sense of depth and space.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card">
                                <img src="{{ asset('frontend/Images/large-graphics/wm-9.webp') }}" class="card-img-center"
                                    alt="Custom Illustrated Murals">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Custom Illustrated Murals</h5>
                                    <p class="We-Elevate-Brands-text">Bespoke hand-drawn or digitally illustrated mural
                                        designs created exclusively for your brand — unique, ownable, and impossible to
                                        replicate.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card">
                                <img src="{{ asset('frontend/Images/large-graphics/wm-10.webp') }}"
                                    class="card-img-center" alt="Abstract Pattern Murals">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Abstract & Pattern Murals</h5>
                                    <p class="We-Elevate-Brands-text">Geometric, organic, and gradient pattern murals that
                                        add visual rhythm and contemporary sophistication to corporate and hospitality
                                        interiors.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card">
                                <img src="{{ asset('frontend/Images/large-graphics/wm-11.webp') }}"
                                    class="card-img-center" alt="Ceiling & Floor Murals">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Ceiling & Floor Murals</h5>
                                    <p class="We-Elevate-Brands-text">360-degree mural installations extending beyond walls
                                        to ceilings and floors — creating fully immersive branded environments for premium
                                        retail and hospitality spaces.</p>
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
                        <img src="{{ asset('frontend/Images/large-graphics/wm-12.webp') }}" alt="Indoor Wall Murals" />
                    </div>
                    <div class="bs-sgn-card__strip"></div>
                    <div class="bs-sgn-card__body">
                        <p class="bs-sgn-card__label">Atmospheric Design</p>
                        <h3 class="bs-sgn-card__title">Indoor Wall Murals</h3>
                        <ul class="bs-sgn-features">
                            <li>
                                <span class="bs-sgn-feat__icon"><i class="fas fa-expand-arrows-alt"></i></span>
                                <span class="bs-sgn-feat__text">Any Scale – Floor to Ceiling</span>
                            </li>
                            <li>
                                <span class="bs-sgn-feat__icon"><i class="fas fa-palette"></i></span>
                                <span class="bs-sgn-feat__text">Wide-Gamut CMYK + Spot Colour</span>
                            </li>
                            <li>
                                <span class="bs-sgn-feat__icon"><i class="fas fa-layer-group"></i></span>
                                <span class="bs-sgn-feat__text">Matte, Gloss, Fabric & Textured Finishes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bs-sgn-card bs-sgn-card--corp">
                    <div class="bs-sgn-card__img-wrap">
                        <img src="{{ asset('frontend/Images/large-graphics/wm-13.webp') }}" alt="Outdoor Wall Murals" />
                    </div>
                    <div class="bs-sgn-card__strip"></div>
                    <div class="bs-sgn-card__body">
                        <p class="bs-sgn-card__label">Durable Statements</p>
                        <h3 class="bs-sgn-card__title">Outdoor Wall Murals</h3>
                        <ul class="bs-sgn-features">
                            <li>
                                <span class="bs-sgn-feat__icon"><i class="fas fa-sun"></i></span>
                                <span class="bs-sgn-feat__text">UV-Stable Outdoor Cast Vinyl</span>
                            </li>
                            <li>
                                <span class="bs-sgn-feat__icon"><i class="fas fa-cloud-rain"></i></span>
                                <span class="bs-sgn-feat__text">Weatherproof, Waterproof & Anti-Fade</span>
                            </li>
                            <li>
                                <span class="bs-sgn-feat__icon"><i class="fas fa-calendar-check"></i></span>
                                <span class="bs-sgn-feat__text">5–7 Year Outdoor Durability</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bs-sgn-cta-section position-relative text-white">
        <img src="{{ asset('frontend/Images/large-graphics/wall-mount-3.webp') }}" class="w-100"
            style="height:450px; object-fit:cover;" alt="Wall Murals CTA">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
        <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
            <h2 class="fw-bold mb-3">Wall Murals: The Most Powerful Way to Define Your Brand Environment</h2>
            <p class="text-light mb-4">A wall mural does not just decorate a space — it transforms it entirely. It tells
                your story before anyone speaks a word, makes visitors stop and look, and gives your team an environment
                they are proud to work in every day. With Brand Signages, your largest walls become your most powerful brand
                asset.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('contact_us') }}" class="btn text-white fw-semibold px-5 py-3"
                    style="background:#e6390a; border-radius:12px;">I am Interested</a>
                <a href="{{ route('contact_us') }}" class="btn fw-semibold px-5 py-3"
                    style="background:#e9e9e9; color:#222; border-radius:12px;">Get a Quote</a>
            </div>
        </div>
    </section>

    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/large-graphics/wall-mount-2.webp') }}"
                    alt="Wall Murals Client - Brand Signages">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">
                <div class="new_client_section-wrapper">
                    <div class="new_client_section-row new_client_section-row-1">
                        @foreach (['client1', 'client2', 'client3', 'client4', 'client5', 'client6', 'client1', 'client2', 'client3', 'client4', 'client5', 'client6'] as $c)
                            <div class="new_client_section-client"><img
                                    src="{{ asset('frontend/Images/client-logo/' . $c . '.webp') }}" alt="Our Client"></div>
                        @endforeach
                    </div>
                    <div class="new_client_section-row new_client_section-row-2">
                        @foreach (['client7', 'client8', 'client9', 'client10', 'client11', 'client12', 'client7', 'client8', 'client9', 'client10', 'client11', 'client12'] as $c)
                            <div class="new_client_section-client"><img
                                    src="{{ asset('frontend/Images/client-logo/' . $c . '.webp') }}" alt="Our Client"></div>
                        @endforeach
                    </div>
                    <div class="new_client_section-row new_client_section-row-3">
                        @foreach (['client13', 'client14', 'client15', 'client16', 'client17', 'client18', 'client13', 'client14', 'client15', 'client16', 'client17', 'client18'] as $c)
                            <div class="new_client_section-client"><img
                                    src="{{ asset('frontend/Images/client-logo/' . $c . '.webp') }}" alt="Our Client"></div>
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
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40"
                        height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40"
                        height="40">
                </div>
                <div class="swiper new_testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}"
                                        alt="Quote" width="40" height="40"></div>
                                <p class="description">The floor-to-ceiling brand mural Brand Signages created for our
                                    headquarters lobby is nothing short of spectacular. It captures our company's journey in
                                    a way that resonates with every employee and visitor who walks through the door.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sneha Reddy</h6><small class="text-muted">Chief Brand Officer –
                                            Zenith Technologies</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}"
                                        alt="Quote" width="40" height="40"></div>
                                <p class="description">We commissioned scenic murals for the corridors and patient waiting
                                    areas of our hospital. The calming landscapes have genuinely transformed the atmosphere
                                    and our patient satisfaction scores have improved noticeably. Remarkable work.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Seema Nayak</h6><small class="text-muted">Administrator –
                                            Greenfield Medical Centre</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}"
                                        alt="Quote" width="40" height="40"></div>
                                <p class="description">Brand Signages produced a stunning custom illustrated mural for our
                                    flagship boutique. The seamless panel installation across the 18-foot wall was perfect,
                                    and the colour accuracy of the print exceeded all our expectations. Truly world-class.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6><small class="text-muted">Creative Director –
                                            Maison Aura</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}"
                                        alt="Quote" width="40" height="40"></div>
                                <p class="description">The wall murals installed throughout our resort property have
                                    completely elevated the guest experience. Guests constantly comment on the artwork and
                                    it has become a key part of our brand identity. The quality and installation were
                                    absolutely first-rate.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Vikram Sharma</h6><small class="text-muted">General Manager –
                                            Palms Heritage Resort</small>
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
            <h1 class="faq-title py-5">Wall Murals FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">What exactly are wall murals and how are they produced?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Wall murals are large-format, high-resolution prints produced on premium cast vinyl, non-woven
                        fabric, or specialty mural media, applied seamlessly across one or more wall panels. They are
                        created using state-of-the-art wide-format digital printers capable of reproducing photographic
                        detail, vivid artwork, and intricate brand graphics at any scale — from a single accent wall to an
                        entire building facade.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Can wall murals be designed fully from scratch for my brand?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Absolutely. We offer <b>fully bespoke mural design services</b> — from initial concept and artwork
                        development through to final production and installation. Our creative team works closely with you
                        to understand your brand identity, space, and vision, ensuring the final mural is a unique, on-brand
                        visual statement that no one else has.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">What size wall murals can you produce?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>We have no practical size limitation for wall murals. Our production capability allows us to print
                        and install murals for spaces ranging from a 3-metre accent wall to a 30-metre building exterior.
                        For very large installations, we produce seamlessly matched panels that are aligned precisely during
                        installation to create one uninterrupted visual.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">What surfaces can wall murals be applied to?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Our wall murals can be applied to most smooth and semi-smooth surfaces including painted walls,
                        plaster, concrete, gypsum board, MDF, glass, tiles, and ACP cladding. For textured or porous
                        surfaces, our installation team prepares the surface appropriately to ensure strong adhesion and a
                        perfectly finished result.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">How long do wall murals last?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Our indoor wall murals typically last <b>5 to 7 years</b> without significant fading or
                        deterioration. Outdoor murals produced on UV-stable cast vinyl with weatherproof laminate are
                        designed to perform for <b>5 to 7 years</b> even in direct sunlight, rain, and high-humidity
                        environments, making them an excellent long-term investment.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Can wall murals be removed or replaced without damaging the wall?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Yes, we offer removable adhesive options specifically designed for spaces where murals may need to be
                        updated or replaced in the future. These peel away cleanly without damaging the underlying wall
                        surface, making them ideal for leased commercial spaces or brands that refresh their interior look
                        periodically.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">How long does the production and installation process take?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Mural production typically takes <b>7 to 14 working days</b> depending on size, complexity, and
                        whether custom design work is required. Installation time varies from a few hours for small accent
                        murals to 2 to 3 days for large multi-panel installations, and is always scheduled to minimise
                        disruption to your operations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Do you provide wall mural installation services across India?<i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Yes, Brand Signages provides complete wall mural production and professional installation services
                        <b>across Bangalore and all major cities in India</b>. Our specialist installation teams are trained
                        to handle large-format mural projects with precision, ensuring seamless panel alignment, bubble-free
                        application, and a flawless finish on every project.</p>
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
