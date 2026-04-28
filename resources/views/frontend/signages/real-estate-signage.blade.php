@extends('frontend.layout.appLayout')
@section('content')

<section class="safety-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badges">
                    <div class="hero-badge">RERA Compliant</div>
                    <div class="hero-badge">Site Hoardings</div>
                    <div class="hero-badge">UV-Protected Print</div>
                </div>

                <div class="col-lg-6 visible-mobile">
                    <div class="hero-image">
                        <img src="{{ asset('frontend/Images/generated/real_estate_hero.png') }}" class="img-fluid" alt="Real Estate Signage">
                        <div class="hero-float-card">
                            <strong>Real Estate Signages</strong>
                            <span>Hoardings • Experience Centres • Wayfinding</span>
                        </div>
                    </div>
                </div>

                <h1>Real Estate Signages- <br>Selling Lifestyles, Not Just Buildings</h1>

                <p class="mt-3">
                    Maximise your property's perceived value with immersive signage and branding solutions
                    designed for developers. From large-format site hoardings to luxury marketing galleries —
                    we create impressions that convert prospects into buyers before the first brick is laid.
                </p>

                <div class="hero-cta mt-4 d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Start Your Project</a>
                    <a href="#solutions" class="btn btn-outline-light">View Solutions</a>
                </div>
            </div>

            <div class="col-lg-6 hidden-mobile">
                <div class="hero-image">
                    <img src="{{ asset('frontend/Images/generated/real_estate_hero.png') }}" class="img-fluid" alt="Real Estate Signage">
                    <div class="hero-float-card">
                        <strong>Real Estate Signages</strong>
                        <span>500+ Projects Branded • 1M+ Sq.ft Hoardings</span>
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
                <h2>Turn Your Project Site Into <br>a Powerful Marketing Asset</h2>
                <p>
                    Real estate branding is about establishing authority and desirability before the first
                    unit is sold. A well-executed signage system across your site perimeter, experience
                    centre, and wayfinding zones builds buyer confidence and communicates the lifestyle
                    promise of your development — visually, immediately, and memorably.
                </p>
                <p>
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>Brand Signages</strong></a> provides
                    comprehensive real estate signage solutions for developers — from UV-protected
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>site hoardings</strong></a>
                    and structural MS frame installations to luxury experience centre interiors, RERA disclosure
                    boards, and project wayfinding systems. Engineered for site conditions, built for brand impact.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Start Your Project →</a>
            </div>

            <div class="signage-right">
                <div class="signage-item tall">
                    <img src="{{ asset('frontend/Images/generated/real_estate_hero.png') }}" alt="">
                    <div class="card-label">Site Hoardings</div>
                </div>
                <div class="signage-item short">
                    <img src="{{ asset('frontend/Images/generated/real_estate_internal.png') }}" alt="">
                    <div class="card-label">Experience Centre Branding</div>
                </div>
                <div class="signage-item short">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt="">
                    <div class="card-label">Project Wayfinding</div>
                </div>
                <div class="signage-item tall">
                    <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=600&q=80" alt="">
                    <div class="card-label">Sales Gallery Signage</div>
                </div>
                <div class="signage-item tall">
                    <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=80" alt="">
                    <div class="card-label">RERA Disclosure Boards</div>
                </div>
                <div class="signage-item short">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=80" alt="">
                    <div class="card-label">Amenity & Site Safety Signs</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="safety-communication">
    <div class="container">
        <div class="layout">
            <div class="safety-image">
                <img src="{{ asset('frontend/Images/generated/real_estate_internal.png') }}" alt="Real Estate Experience Centre Signage">
            </div>
            <div>
                <h3>Immersive Property Marketing <br>From Site to Sale</h3>
                <p>
                    Real estate signage must do far more than display a project name. It must communicate
                    aspiration, establish premium positioning, and guide buyers through the decision journey —
                    from the moment they see your hoarding on the highway to when they step into the
                    sample flat and imagine their future.
                </p>
                <p>
                    Our real estate signage solutions cover the full development lifecycle: site perimeter
                    hoardings with UV-stable graphics, structural MS frames, RERA-compliant disclosure boards,
                    bespoke experience centre interiors, backlit floor plan displays, outdoor pylon signage,
                    and project wayfinding for completed campuses. Built for tropical weather, engineered
                    for maximum developer ROI.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Start Your Project</a>
            </div>
        </div>
    </div>
</section>

<section class="safety-editorial-x">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-7">
                <div class="editorial-copy">
                    <h3>Real Estate Signages That Sell <br>the Vision Before the Possession</h3>
                    <p>
                        In real estate, perception precedes purchase. A buyer's confidence in your project
                        is shaped long before they meet your sales team — by the quality of your site hoarding,
                        the authority of your pylon sign, and the luxury feel of your experience centre. These
                        visual signals communicate the promise of your development and the credibility of your
                        brand as a developer.
                    </p>
                    <p>
                        By deploying a unified system of <a href="/real-estate-signages" style="color:#E43D12; text-decoration:none;"><strong>real estate signages</strong></a>
                        and <a href="/safety-signages" style="color:#E43D12; text-decoration:none;"><strong>site safety signages</strong></a>
                        across every touchpoint, developers create a seamless brand journey from the road to the
                        show flat. Well-executed property signage also ensures RERA compliance, communicates
                        project milestones, and helps position your development above competing projects in the
                        same micro-market.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="case-stack">
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Prestige Group <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Township Signage Rollout</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Puravankara <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Experience Centre Branding</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Adarsh Developers <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Site Hoarding & Safety Signs</span>
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
            <h2>Property Signage That Works From Launch Day to Handover</h2>
            <p>
                Real estate signage must survive tropical weather, communicate luxury under direct sun,
                and remain structurally safe through monsoon conditions — all while maintaining a premium
                visual standard that reflects your development's positioning. The right signage partner
                understands both the engineering demands and the marketing imperative.
            </p>
            <p>
                We are among India's most experienced real estate signage manufacturers, delivering
                site-wide branding solutions for townships, luxury residential projects, commercial
                developments, and integrated communities.
            </p>
        </header>

        <div class="flow-list">
            <div class="flow-item left">
                <span class="flow-no">01</span>
                <div class="flow-content">
                    <h4>Site Analysis &amp; Creative Strategy</h4>
                    <p>
                        We conduct a detailed survey of your project's visibility zones, traffic flow,
                        and buyer persona — then develop a visual identity and signage strategy that aligns
                        with your property's USP and positions it above competing developments in the
                        same micro-market.
                    </p>
                </div>
            </div>

            <div class="flow-item right">
                <span class="flow-no">02</span>
                <div class="flow-content">
                    <h4>Structural Fabrication for All Weather Conditions</h4>
                    <p>
                        Our site hoardings use UV-stable inks, weather-shield vinyl with matte lamination,
                        and industrial-grade MS structural frames engineered to withstand high wind loads
                        and monsoon conditions — maintaining a premium appearance for 2+ years across
                        the entire project lifecycle.
                    </p>
                </div>
            </div>

            <div class="flow-item left">
                <span class="flow-no">03</span>
                <div class="flow-content">
                    <h4>RERA Compliance &amp; Rapid Deployment</h4>
                    <p>
                        All mandatory RERA disclosure boards, site safety signage, and public boundary
                        markers are designed and fabricated to meet current regulatory requirements.
                        Our modular production systems allow us to brand 500+ running feet of site
                        perimeter and deploy fully in days — not weeks.
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
                            <p class="description">The site hoarding rollout for our township project was incredibly fast. The quality of graphics really helped set a premium tone for the development and significantly boosted walk-in enquiries from the very first week.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="VP Marketing" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">VP Marketing</h6><small class="text-muted">Tier-1 National Developer</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">Professional installation and strong structural engineering — their signage withstood the entire monsoon season without fading or shifting. The RERA disclosure boards were also delivered exactly to specification on day one.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Head of Construction" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Head of Construction</h6><small class="text-muted">Luxury Residential Builder</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">The experience centre branding they created for our flagship project elevated the entire sales process. Buyers walked in and immediately felt the premium quality of the development — the signage alone contributed to closing multiple units early.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sales Director" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sales Director</h6><small class="text-muted">Integrated Township Developer</small></div>
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
        <h1 class="faq-title">Real Estate Signage FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">How long do outdoor site hoardings last in extreme weather?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our hoardings use UV-stable inks and structural frames designed for 2+ years of site exposure. They are engineered to withstand high wind loads and monsoon conditions without fading, tearing, or structural failure.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you provide mandatory RERA disclosure boards?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We provide standard-compliant RERA disclosure boards and construction site safety signage that meet all current regulatory requirements for real estate developments.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Can you brand our sales experience centre and sample flats?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We specialise in luxury interior branding for experience centres — including backlit floor plan displays, feature wall graphics, reception logos, material display boards, and branded wayfinding that creates a premium buyer journey.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">How quickly can you deploy site perimeter hoardings?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our modular production systems allow us to fabricate and install 500+ running feet of site perimeter branding within days of design approval — ensuring your site looks market-ready from day one of launch.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you provide project wayfinding for completed residential campuses?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We provide end-to-end project wayfinding for delivered developments — including block identifiers, amenity direction signs, parking signage, lobby directories, and maintenance area signs that maintain brand consistency post-possession.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Can site signage be updated as project phases progress?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. Our modular hoarding systems are designed for rapid re-skinning — allowing you to update graphics as new phases launch, construction milestones are hit, or sales messaging evolves, without full structural replacement.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you supply pylon and totem signs for project sites?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We manufacture and install illuminated pylon signs, totem signs, and double-sided road-facing boards that establish dominant visibility for your project from key traffic arteries and approach roads.</p></div>
        </div>
    </div>
</section>

@endsection