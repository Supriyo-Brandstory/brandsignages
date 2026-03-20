@extends('frontend.layout.appLayout')
@section('content')

<section class="safety-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badges">
                    <div class="hero-badge">RBI Compliant</div>
                    <div class="hero-badge">Multi-Branch Rollout</div>
                    <div class="hero-badge">Premium Finishes</div>
                </div>

                <div class="col-lg-6 visible-mobile">
                    <div class="hero-image">
                        <img src="{{ asset('frontend/Images/generated/bank_hero.png') }}" class="img-fluid" alt="Bank Signage">
                        <div class="hero-float-card">
                            <strong>Banking Signages</strong>
                            <span>Facades • ATM • Digital Boards • Interiors</span>
                        </div>
                    </div>
                </div>

                <h1>Bank Signages- <br>Define Trust at Every Branch</h1>

                <p class="mt-3">
                    In the banking sector, signage is more than identification — it's a symbol of stability,
                    professionalism, and trust. Our premium banking signage solutions are engineered for
                    institutional scale, brand consistency, and strict regulatory compliance across every touchpoint.
                </p>

                <div class="hero-cta mt-4 d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Request Consultation</a>
                    <a href="#solutions" class="btn btn-outline-light">View Solutions</a>
                </div>
            </div>

            <div class="col-lg-6 hidden-mobile">
                <div class="hero-image">
                    <img src="{{ asset('frontend/Images/generated/bank_hero.png') }}" class="img-fluid" alt="Bank Signage">
                    <div class="hero-float-card">
                        <strong>Banking Signages</strong>
                        <span>1,200+ Branches Branded Across India</span>
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
                <h2>Earning Trust at Every <br>Customer Touchpoint</h2>
                <p>
                    Banking signage is more than direction — it builds credibility at scale. A unified,
                    well-executed signage system across all branches reinforces regulatory trust, guides customers
                    intuitively, and communicates your institution's authority from the first glance.
                </p>
                <p>
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>Brand Signages</strong></a> provides
                    end-to-end banking signage solutions — from high-impact <a href="/" style="color:#E43D12; text-decoration:none;"><strong>external facades</strong></a>
                    and ATM branding to digital rate boards and interior wayfinding. Trusted by leading banks for
                    multi-branch rollouts with 100% brand accuracy, on-time delivery, and compliance-ready
                    fabrication at institutional scale.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Start Your Project →</a>
            </div>

            <div class="signage-right">
                <div class="signage-item tall">
                    <img src="{{ asset('frontend/Images/generated/bank_hero.png') }}" alt="">
                    <div class="card-label">External Branch Facades</div>
                </div>
                <div class="signage-item short">
                    <img src="{{ asset('frontend/Images/generated/bank_internal.png') }}" alt="">
                    <div class="card-label">ATM Branding & Enclosures</div>
                </div>
                <div class="signage-item short">
                    <img src="https://images.unsplash.com/photo-1601597111158-2fceff292cdc?w=600&q=80" alt="">
                    <div class="card-label">Digital Rate Boards</div>
                </div>
                <div class="signage-item tall">
                    <img src="https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?w=600&q=80" alt="">
                    <div class="card-label">Interior Wayfinding</div>
                </div>
                <div class="signage-item tall">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80" alt="">
                    <div class="card-label">Counter & Teller Signage</div>
                </div>
                <div class="signage-item short">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&q=80" alt="">
                    <div class="card-label">Pylon & Totem Signs</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="safety-communication">
    <div class="container">
        <div class="layout">
            <div class="safety-image">
                <img src="{{ asset('frontend/Images/generated/bank_internal.png') }}" alt="Bank Interior Signage">
            </div>
            <div>
                <h3>Premium Signage <br>for Financial Institutions</h3>
                <p>
                    Bank signage is held to a higher standard. It must communicate authority, inspire confidence,
                    and function flawlessly across thousands of locations — from flagship city branches to
                    rural banking centres. Every element, from the pylon sign at the entrance to the counter
                    identifiers inside, shapes how customers perceive your institution.
                </p>
                <p>
                    Our comprehensive range of banking signage includes architectural channel letters, LED
                    facades, ATM surrounds, digital kiosks, Braille-compliant service boards, mandatory
                    disclosure displays, and security graphics. Designed for durability, compliance, and
                    consistent brand execution across any number of locations, any distance apart.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Request Consultation</a>
            </div>
        </div>
    </div>
</section>

<section class="safety-editorial-x">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-7">
                <div class="editorial-copy">
                    <h3>Bank Signages That Communicate <br>Strength Before a Word Is Said</h3>
                    <p>
                        Banking institutions operate in a landscape where trust is everything. A consistent,
                        well-designed signage system reinforces that trust before a customer even steps through
                        the door. From the channel-letter fascia that dominates the high street to the compliance
                        board inside the branch — every sign must perform with precision, durability, and brand
                        fidelity across hundreds or thousands of locations simultaneously.
                    </p>
                    <p>
                        By deploying a unified system of <a href="/bank-signages" style="color:#E43D12; text-decoration:none;"><strong>banking signages</strong></a>
                        and <a href="/safety-signages" style="color:#E43D12; text-decoration:none;"><strong>safety signages</strong></a>
                        across every branch, financial institutions create an environment of clarity, compliance,
                        and confidence. Well-executed bank signage also accelerates regulatory audits, reduces
                        customer confusion at service counters, and signals a professional, well-managed institution
                        to every visitor.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="case-stack">
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">State Bank Authority <span class="case-arrow">↗</span></span>
                            <span class="case-meta">500+ Branches National Rollout</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">HDFC Bank <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Executive Interior Signage</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">ICICI Regional Hub <span class="case-arrow">↗</span></span>
                            <span class="case-meta">ATM & Facade Branding</span>
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
            <h2>Signage That Performs at Institutional Scale</h2>
            <p>
                Banking signage must maintain perfect brand consistency whether installed in Mumbai or a
                remote rural branch. That demands a partner with proven logistics, compliance expertise,
                and fabrication capability — not just a sign manufacturer. The right signage system
                protects your brand equity across every location, every day.
            </p>
            <p>
                We are among India's most trusted bank signage manufacturers, delivering multi-branch
                rollouts with zero brand deviation, competitive pricing, and on-time execution PAN India.
            </p>
        </header>

        <div class="flow-list">
            <div class="flow-item left">
                <span class="flow-no">01</span>
                <div class="flow-content">
                    <h4>Institutional Audit &amp; Technical Design</h4>
                    <p>
                        We begin with a detailed review of your existing brand assets, spatial requirements,
                        and regulatory obligations — then engineer compliance-ready blueprints that adhere
                        to global brand standards and RBI safety protocols before a single sign is made.
                    </p>
                </div>
            </div>

            <div class="flow-item right">
                <span class="flow-no">02</span>
                <div class="flow-content">
                    <h4>Precision Fabrication with Certified Materials</h4>
                    <p>
                        Our bank signages are manufactured using marine-grade stainless steel, high-quality
                        acrylics, laser-accurate metal lettering, and energy-efficient LED modules — engineered
                        to look premium and last for decades in high-traffic, high-exposure environments.
                    </p>
                </div>
            </div>

            <div class="flow-item left">
                <span class="flow-no">03</span>
                <div class="flow-content">
                    <h4>Synchronised Multi-Branch Rollout</h4>
                    <p>
                        Coordinated installation across multiple regions simultaneously — ensuring zero
                        deviation in brand execution, consistent quality standards, and minimal operational
                        downtime at every branch, whether it's 10 locations or 1,000.
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
                            <p class="description">Brand Signages managed our 200-branch rebranding seamlessly. The consistency across regions was impeccable — every branch looked identical to the design intent, delivered on time and within budget.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Operations Head" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Operations Head</h6><small class="text-muted">Leading Private Sector Bank</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">Their ATM surrounds significantly improved our brand visibility in high-traffic urban areas. The quality of materials and professionalism of the installation team was truly exceptional.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Marketing Director" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Marketing Director</h6><small class="text-muted">Global Banking Corporation</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">We needed compliance-ready signage across all 85 new branches with tight timelines. Brand Signages delivered every single sign on schedule, with zero brand deviations. Highly recommended for institutional-scale projects.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Branch Expansion Head" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Branch Expansion Head</h6><small class="text-muted">National Co-operative Bank</small></div>
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
        <h1 class="faq-title">Banking Signage FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">Can you manage a pan-India branch rebranding rollout?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we specialise in high-volume, multi-location rollouts. Our logistics and installation teams are equipped to handle 100+ branches simultaneously with strict brand adherence and on-time delivery across urban and rural locations.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">What materials do you use for premium branch facades?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We use marine-grade stainless steel, high-quality acrylics, and energy-efficient LED modules to ensure branch signage looks premium and lasts for decades in high-exposure outdoor environments.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Are your banking signages RBI and compliance ready?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. All our banking signage solutions are designed to comply with RBI guidelines and global banking safety standards, including mandatory disclosure displays, accessible service boards, and fire-rated material specifications.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you provide Braille and ADA-compliant signage for banks?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We manufacture tactile and Braille-compliant signage for ATMs, service counters, and public areas — ensuring your branches meet accessibility standards for differently-abled customers.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">How do you ensure brand consistency across hundreds of branches?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We maintain centralised quality control across all fabrication. Every sign is produced from the same master design files, colour references, and material specifications — ensuring identical output regardless of quantity or geography.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Can you handle ATM branding and enclosure signage?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We provide custom illuminated ATM surrounds, security graphics, and enclosure branding that increase your ATM's visibility and brand recall — whether on-site or at off-branch locations.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Do you supply digital rate boards and interactive kiosks?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. We provide centralised digital display networks for real-time interest rate updates, exchange rate boards, and interactive customer service kiosks that integrate with your branch's existing systems.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">What is your installation process for functioning bank branches?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our installation teams work outside banking hours to ensure zero disruption to customer service. We coordinate with branch managers and security personnel for seamless, safe, and clean execution at every location.</p></div>
        </div>
    </div>
</section>

@endsection