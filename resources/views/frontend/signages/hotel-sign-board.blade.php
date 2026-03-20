@extends('frontend.layout.appLayout')
@section('content')

<section class="safety-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badges">
                    <div class="hero-badge">ADA Compliant</div>
                    <div class="hero-badge">Luxury Finishes</div>
                    <div class="hero-badge">Silent Installation</div>
                </div>

                <div class="col-lg-6 visible-mobile">
                    <div class="hero-image">
                        <img src="{{ asset('frontend/Images/hotel-restaurant-signs.webp') }}" class="img-fluid" alt="Hotel Signage">
                        <div class="hero-float-card">
                            <strong>Hotel Signages</strong>
                            <span>Wayfinding • Room ID • Lobby • Amenities</span>
                        </div>
                    </div>
                </div>

                <h1>Hotel Signages- <br>Crafting Five-Star First Impressions</h1>

                <p class="mt-3">
                    Elevate your guest experience with elegant, bespoke hotel signage systems designed to
                    blend seamlessly with your architecture and define your luxury brand. From the entrance
                    facade to the suite door — every sign tells your property's story.
                </p>

                <div class="hero-cta mt-4 d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Define Your Brand</a>
                    <a href="#solutions" class="btn btn-outline-light">View Solutions</a>
                </div>
            </div>

            <div class="col-lg-6 hidden-mobile">
                <div class="hero-image">
                    <img src="{{ asset('frontend/Images/hotel-restaurant-signs.webp') }}" class="img-fluid" alt="Hotel Signage">
                    <div class="hero-float-card">
                        <strong>Hotel Signages</strong>
                        <span>500+ Hotels Branded • 50,000+ Signs Delivered</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="signage-editorial" id="solutions">
    <div class="container">
        <div class="signage-layout">
            <div class="signage-left">
                <h2>Turn Every Corridor Into <br>a Five-Star Experience</h2>
                <p>
                    Hotel signage is the silent concierge of your property. It guides guests from arrival
                    to suite without interruption, communicates the quality of your brand at every touchpoint,
                    and ensures that even in unfamiliar surroundings, every visitor feels confident and
                    welcomed. Done right, it becomes an invisible luxury.
                </p>
                <p>
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>Brand Signages</strong></a> provides
                    bespoke hotel signage solutions — from architecturally matched lobby logos and
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>floor directories</strong></a>
                    to custom room identifiers, ADA Braille integration, amenity wayfinding, and fire
                    compliance signage. Every piece is fabricated to match your property's interior design
                    mood and aesthetic intent.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Start Your Project →</a>
            </div>

            <div class="signage-right">
                <div class="signage-item tall">
                    <img src="{{ asset('frontend/Images/hotel-restaurant-signs.webp') }}" alt="">
                    <div class="card-label">Lobby & Facade Signage</div>
                </div>
                <div class="signage-item short">
                    <img src="{{ asset('frontend/Images/reception-indoor-sign.webp') }}" alt="">
                    <div class="card-label">Reception & Directory Boards</div>
                </div>
                <div class="signage-item short">
                    <img src="{{ asset('frontend/Images/industry-hospitality.webp') }}" alt="">
                    <div class="card-label">Suite & Room Identifiers</div>
                </div>
                <div class="signage-item tall">
                    <img src="{{ asset('frontend/Images/restaurant-signage2.webp') }}" alt="">
                    <div class="card-label">Restaurant & Bar Signage</div>
                </div>
                <div class="signage-item tall">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=600&q=80" alt="">
                    <div class="card-label">Amenity Wayfinding</div>
                </div>
                <div class="signage-item short">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=600&q=80" alt="">
                    <div class="card-label">ADA & Braille Signage</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="safety-communication">
    <div class="container">
        <div class="layout">
            <div class="safety-image">
                <img src="{{ asset('frontend/Images/reception-indoor-sign.webp') }}" alt="Hotel Reception Signage">
            </div>
            <div>
                <h3>The Art of Guest Navigation <br>in Luxury Hospitality</h3>
                <p>
                    Intuitive wayfinding is the silent concierge of your property. We specialise in interior
                    and exterior hotel signage that enhances the guest journey from arrival to suite —
                    reducing confusion, eliminating the need to ask for directions, and letting every guest
                    feel at ease in your property from the first moment.
                </p>
                <p>
                    Our hotel signage range includes polished metal lobby logos, bespoke room identifiers,
                    floor directories, spa and gym directional signs, restaurant and bar signage, emergency
                    egress systems, and ADA Braille-compliant modules — all fabricated in architecturally
                    matched materials including brass, titanium, tempered glass, and hand-polished acrylic.
                    Delivered with silent installation that respects your guests.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Get a Proposal</a>
            </div>
        </div>
    </div>
</section>

<section class="safety-editorial-x">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-7">
                <div class="editorial-copy">
                    <h3>Hotel Signages That Define <br>Luxury Before Words Do</h3>
                    <p>
                        In luxury hospitality, every detail matters. The quality of your suite identifier, the
                        finish on your lobby directory, the clarity of your spa wayfinding — each one communicates
                        your brand's commitment to excellence. Guests notice when signage feels considered and
                        intentional. They notice even more when it doesn't. A cohesive, beautifully crafted hotel
                        signage system is the invisible infrastructure of a five-star experience.
                    </p>
                    <p>
                        By deploying a unified system of <a href="/hotel-signages" style="color:#E43D12; text-decoration:none;"><strong>hotel wayfinding signages</strong></a>
                        and <a href="/safety-signages" style="color:#E43D12; text-decoration:none;"><strong>fire safety signages</strong></a>
                        across every zone — from the entrance porte-cochère to the penthouse floor — properties
                        create a guest journey that feels effortless, premium, and entirely on-brand. Well-planned
                        hotel signage also supports accessibility compliance, reduces staff load, and prepares
                        your property for international safety inspections.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="case-stack">
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">ITC Grand Central <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Lobby & Floor Wayfinding</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Taj West End <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Heritage Property Rebrand</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Grand Heritage Resort <span class="case-arrow">↗</span></span>
                            <span class="case-meta">250+ Villa Signage System</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="safety-flow">
    <div class="container flow-wrapper">
        <header class="flow-header">
            <h2>Signage That Performs When Guests Are Watching Closely</h2>
            <p>
                Hotel signage is scrutinised at a level no other sector demands. It must look flawless
                under high ambient light, withstand daily cleaning with premium chemicals, and maintain
                a brand-new appearance for years — while meeting fire safety, ADA accessibility, and
                international hospitality compliance standards simultaneously.
            </p>
            <p>
                We are among India's most trusted hospitality signage manufacturers, having served 500+
                hotels, resorts, and luxury properties with end-to-end signage solutions — from pre-opening
                installations to post-possession refreshes.
            </p>
        </header>

        <div class="flow-list">
            <div class="flow-item left">
                <span class="flow-no">01</span>
                <div class="flow-content">
                    <h4>Aesthetic Audit &amp; Creative Prototyping</h4>
                    <p>
                        We begin by analysing your property's interior design mood, material palette, and
                        brand standards — then produce physical samples in premium finishes (brass, titanium,
                        etched glass, hand-polished acrylic) for your approval before full fabrication begins.
                    </p>
                </div>
            </div>

            <div class="flow-item right">
                <span class="flow-no">02</span>
                <div class="flow-content">
                    <h4>Artisanal Fabrication with Premium Materials</h4>
                    <p>
                        Our hotel signages are manufactured using hand-finished metals, fingerprint-resistant
                        coatings, non-porous surfaces that withstand daily housekeeping protocols, and
                        seamless gapless joinery with hidden fixings — creating a clean, minimalist
                        aesthetic that feels architecturally integrated, not installed.
                    </p>
                </div>
            </div>

            <div class="flow-item left">
                <span class="flow-no">03</span>
                <div class="flow-content">
                    <h4>Silent Installation Around Guest Operations</h4>
                    <p>
                        Our teams work during off-peak hours with noiseless equipment and a phased
                        floor-by-floor approach — ensuring guest sleep cycles, ongoing F&amp;B operations,
                        and spa appointments are never disrupted throughout the entire installation process.
                    </p>
                </div>
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
                <div class="new_client_section-row new_client_section-row-1">
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti"></div>
                </div>
                <div class="new_client_section-row new_client_section-row-2">
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara"></div>
                </div>
                <div class="new_client_section-row new_client_section-row-3">
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers"></div>
                    <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon"></div>
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
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">Brand Signages understood our design intent perfectly. The suite identifiers they produced were absolute works of art — the brushed brass finish matched our interior mood board exactly and guests consistently comment on the quality of the details.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="General Manager" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">General Manager</h6><small class="text-muted">Leading 5-Star Hotel Chain</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">Their coordination with our MEP and interior design teams during the pre-opening phase was exceptional. Every sign was installed silently, on schedule, and to exact specifications. The quality is unmatched in the market.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Project Director" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Project Director</h6><small class="text-muted">Luxury Resort Developer</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">We did a complete wayfinding refresh across all 18 floors without a single guest complaint. The team worked nights, cleaned up perfectly every morning, and delivered a signage system that genuinely elevated the feel of the entire property.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Rooms Division Manager" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Rooms Division Manager</h6><small class="text-muted">International Boutique Hotel Group</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <h1 class="faq-title">Hotel Signage FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">Can you match signage to bespoke interior finishes like brass or marble?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We specialise in high-end material matching. We fabricate signage in hand-polished brass, brushed titanium, etched glass, or marble-inlaid substrates — working directly from your interior designer's mood boards and material specifications.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you provide silent installation for functioning hotel properties?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Absolutely. Our teams work during off-peak hours using noiseless tools and a phased approach to ensure guest sleep cycles, F&B operations, and spa appointments are never disrupted during installation or refresh projects.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Are your hotel signages ADA and Braille compliant?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. All public area and guest floor signage is manufactured to meet ADA standards, including Grade 2 Braille, tactile characters, and high-contrast colour specifications — ensuring full accessibility for all guests.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">What materials do you recommend for hotel room identifiers?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Popular choices for luxury properties include hand-polished brass, brushed stainless steel, PVD-coated titanium, and anodised aluminium — all available with modular insert systems that allow staff to update room numbers or clinician names without tools.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you supply photoluminescent emergency exit signs for hotels?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We supply and install photoluminescent emergency egress and exit signs that exceed global life-safety standards — providing 8+ hours of independent visibility during complete power failure, as required by international fire compliance codes.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Can you handle a complete pre-opening signage programme?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We manage full pre-opening signage programmes — from initial site visit and design sign-off through fabrication, phased installation, snagging, and final handover — coordinating closely with your interior designers, project managers, and MEP contractors.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">How do you ensure signage finishes remain pristine over time?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We use fingerprint-resistant specialist coatings, non-porous substrates that withstand daily housekeeping chemicals, and precision gapless joinery that eliminates crevices for dust accumulation — maintaining a brand-new appearance throughout the product lifecycle.</p></div>
        </div>
    </div>
</section>

@endsection