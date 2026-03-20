@extends('frontend.layout.appLayout')
@section('content')

<section class="safety-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badges">
                    <div class="hero-badge">Digital Menu Boards</div>
                    <div class="hero-badge">Real-Time Updates</div>
                    <div class="hero-badge">Custom Content</div>
                </div>

                <div class="col-lg-6 visible-mobile">
                    <div class="hero-image">
                        <img src="{{asset('frontend/Images/restaurant-signage1.webp')}}" class="img-fluid" alt="Restaurant Digital Signage">
                        <div class="hero-float-card">
                            <strong>Restaurant Signages</strong>
                            <span>Digital Menu • Promotions • Brand Displays</span>
                        </div>
                    </div>
                </div>

                <h1>Restaurant Signages- <br>Make Your Menu the Star</h1>

                <p class="mt-3">
                    Transform your restaurant with dynamic digital sign boards that showcase menus,
                    promote offers, and capture attention day and night. Our restaurant signage solutions
                    go beyond static boards — they drive sales, enhance dining experiences, and give
                    you the power to update your messaging in real time.
                </p>

                <div class="hero-cta mt-4 d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Get a Quote</a>
                    <a href="#solutions" class="btn btn-outline-light">Start Your Project</a>
                </div>
            </div>

            <div class="col-lg-6 hidden-mobile">
                <div class="hero-image">
                    <img src="{{asset('frontend/Images/restaurant-signage1.webp')}}" class="img-fluid" alt="Restaurant Digital Signage">
                    <div class="hero-float-card">
                        <strong>Restaurant Signages</strong>
                        <span>Menu Boards • Promos • Feedback Displays</span>
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
                <h2>Turn Every Screen Into a <br>Sales-Driving Experience</h2>
                <p>
                    Digital signage has a significant impact on restaurant businesses — from showcasing
                    seasonal specials and happy hour offers to displaying vibrant food visuals that
                    influence ordering decisions before a customer even reaches the counter. Unlike print,
                    digital restaurant boards let you update pricing, introduce daily specials, and run
                    promotional animations in real time.
                </p>
                <p>
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>Brand Signages</strong></a> is a
                    premier partner for restaurants, cafés, QSRs, and food courts across India — providing
                    <a href="/" style="color:#E43D12; text-decoration:none;"><strong>digital menu boards</strong></a>,
                    promotional display screens, customer feedback boards, and brand signage that combine
                    high-impact visuals with easy content management. Customised for your brand, scheduled
                    for your service periods.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Start Your Project →</a>
            </div>

            <div class="signage-right">
                <div class="signage-item tall">
                    <img src="{{asset('frontend/Images/restaurant-signage2.webp')}}" alt="">
                    <div class="card-label">Digital Menu Boards</div>
                </div>
                <div class="signage-item short">
                    <img src="{{asset('frontend/Images/restaurant-signage3.webp')}}" alt="">
                    <div class="card-label">Food Display Screens</div>
                </div>
                <div class="signage-item short">
                    <img src="{{asset('frontend/Images/restaurant-signage4.webp')}}" alt="">
                    <div class="card-label">Customer Feedback Boards</div>
                </div>
                <div class="signage-item tall">
                    <img src="{{asset('frontend/Images/restaurant-signage5.webp')}}" alt="">
                    <div class="card-label">Visual Content Boards</div>
                </div>
                <div class="signage-item tall">
                    <img src="{{asset('frontend/Images/restaurant-signage6.webp')}}" alt="">
                    <div class="card-label">Promotion & Offers Displays</div>
                </div>
                <div class="signage-item short">
                    <img src="{{asset('frontend/Images/restaurant-signage11.webp')}}" alt="">
                    <div class="card-label">Brand & Entrance Signage</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="safety-communication">
    <div class="container">
        <div class="layout">
            <div class="safety-image">
                <img src="{{asset('frontend/Images/restaurant-signage8.webp')}}" alt="Restaurant Digital Menu Board">
            </div>
            <div>
                <h3>Smarter Restaurant Signage <br>for Higher Sales &amp; Better Experiences</h3>
                <p>
                    The best restaurant digital signage doesn't just display a menu — it guides decisions,
                    creates appetite appeal, and drives upsells. High-resolution food photography displayed
                    at point-of-sale, animated combo promotions, and real-time special boards all influence
                    what customers order and how much they spend per visit.
                </p>
                <p>
                    Our restaurant signage solutions include digital menu boards for QSRs and cafés,
                    LED illuminated entrance sign boards, neon brand displays, acrylic wall logos, promotion
                    screens, and touch-enabled customer feedback kiosks. All managed through user-friendly
                    content software that requires no technical expertise — update your menu in minutes
                    from any device, any time.
                </p>
                <a href="{{ route('contact_us') }}" class="btn btn-brand-red">Get a Quote</a>
            </div>
        </div>
    </div>
</section>

<section class="safety-editorial-x">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-7">
                <div class="editorial-copy">
                    <h3>Restaurant Signages That Drive <br>Orders Before the Menu Is Opened</h3>
                    <p>
                        Digital restaurant signage works from the moment a potential customer walks past your
                        entrance. An eye-catching neon brand board or a vibrant food display screen visible
                        from the street can be the difference between a browsing walk-by and a paying customer.
                        Inside, digital menu boards reduce perceived wait times, promote high-margin items,
                        and keep the dining experience feeling current and engaging.
                    </p>
                    <p>
                        By combining dynamic <a href="/restaurant-signages" style="color:#E43D12; text-decoration:none;"><strong>digital restaurant signages</strong></a>
                        with well-crafted <a href="/brand-signages" style="color:#E43D12; text-decoration:none;"><strong>brand signages</strong></a>
                        — from your entrance board to your interior walls — restaurants create a cohesive visual
                        identity that reinforces brand recall, builds loyalty, and positions your outlet above
                        the competition in any high-footfall food and beverage environment.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="case-stack">
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Café Mocha <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Café Signage & Menu Boards</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">Café Bloom <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Neon & Digital Brand Display</span>
                        </div>
                    </a>
                    <a href="/case-studies" class="case-row">
                        <div class="case-line"></div>
                        <div class="case-content">
                            <span class="case-title">QSR Chain Rollout <span class="case-arrow">↗</span></span>
                            <span class="case-meta">Multi-Outlet Digital Menus</span>
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
            <h2>Restaurant Signage That Works Every Service Hour</h2>
            <p>
                Restaurant signage isn't a one-time installation — it's a living communication tool that
                should evolve with your menu, your promotions, and your brand. Digital restaurant displays
                let you manage morning breakfast menus, midday lunch specials, and evening dinner promotions
                — all from a single device, without reprinting a single sheet.
            </p>
            <p>
                We are among India's most trusted restaurant sign board manufacturers and digital signage
                providers, serving cafés, QSRs, fine dining restaurants, food courts, and franchise chains
                with end-to-end signage solutions and ongoing content support.
            </p>
        </header>

        <div class="flow-list">
            <div class="flow-item left">
                <span class="flow-no">01</span>
                <div class="flow-content">
                    <h4>Enhanced Customer Engagement &amp; Appetite Appeal</h4>
                    <p>
                        Vibrant food photography, animated promotions, and QR code integrations on digital
                        menu boards capture customer attention and build appetite appeal — creating a deeper
                        connection with your brand and encouraging diners to explore more of your menu.
                    </p>
                </div>
            </div>

            <div class="flow-item right">
                <span class="flow-no">02</span>
                <div class="flow-content">
                    <h4>Real-Time Updates for Maximum Sales Flexibility</h4>
                    <p>
                        Update pricing, switch meal-period menus, promote limited-time offers, and highlight
                        sold-out items instantly — with no printing costs, no waste, and no delay. Our
                        user-friendly content management system requires no technical expertise to operate.
                    </p>
                </div>
            </div>

            <div class="flow-item left">
                <span class="flow-no">03</span>
                <div class="flow-content">
                    <h4>Brand Visibility That Works Inside &amp; Outside</h4>
                    <p>
                        From neon brand boards and LED entrance signs visible from the street, to acrylic
                        wall logos and illuminated interiors — our restaurant signage solutions build brand
                        recall from the kerb to the counter, making your outlet unforgettable in crowded
                        food and beverage markets.
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
                            <p class="description">The digital menu boards transformed the way we present our dishes. Customers love the vibrant visuals, and updating menus has never been easier — we now change our daily specials in minutes from our phone.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/restaurant-signage12.webp') }}" alt="Sarah" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sarah</h6><small class="text-muted">Café Owner</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">We've seen a noticeable increase in sales since installing the digital signage. Highlighting our combo offers and seasonal dishes with vibrant visuals has significantly boosted our average ticket value per customer.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/restaurant-signage13.webp') }}" alt="Pooja Singh" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Pooja Singh</h6><small class="text-muted">Fusion Cuisine Restaurant Owner</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">Our branding really comes alive with the digital displays. The neon entrance board and interior screen combination has helped us stand out in a very crowded market and become a recognisable destination in the area.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/restaurant-signage15.webp') }}" alt="Ishika" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Ishika</h6><small class="text-muted">Bistro Owner</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon" width="40" height="40"></div>
                            <p class="description">The ability to make real-time updates across all our franchise locations from a single dashboard has saved us enormous time and printing costs. Highly recommend Brand Signages for any multi-outlet F&B operation.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/restaurant-signage16.webp') }}" alt="Namrata" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Namrata</h6><small class="text-muted">Fast-Food Chain Manager</small></div>
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
        <h1 class="faq-title">Restaurant Signage FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">How does digital signage improve the customer experience in restaurants?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Digital restaurant signage enhances customer experience by displaying vibrant food visuals, real-time promotions, and menu information that simplifies ordering decisions. It reduces perceived wait times, creates appetite appeal, and allows for interactive elements like QR code menus and customer feedback screens.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Can digital menu boards be customised for different meal times?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. With scheduling features in our content management software, you can automatically switch displays for breakfast, lunch, and dinner periods. Real-time updates also allow you to highlight limited-time offers, seasonal dishes, and happy hour specials without any technical expertise.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">What types of content can be displayed on restaurant digital signage?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Restaurant digital boards can display dynamic menus with food photography and prices, promotional offers and combo deals, chef preparation videos, brand content, social media feeds, customer testimonials, entertainment content to reduce perceived wait times, and internal staff communications.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">How does digital signage help increase restaurant sales?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Digital menu boards drive upsells and cross-sells by prominently featuring high-margin items, combo offers, and seasonal specials with compelling visuals. Real-time updates allow you to capitalise on demand trends, run flash promotions, and adjust pricing — all of which increase average transaction values.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Is the content management system easy for restaurant staff to use?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. Our intuitive software requires no technical expertise. Restaurant staff can update menus, schedule promotions, and manage content across single or multiple locations from any device — with changes reflecting on screens within minutes.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">What types of restaurant signage do you offer beyond digital menu boards?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>We offer LED entrance sign boards, neon brand displays for reception and selfie walls, acrylic wall logos, illuminated counter fascias, promotional screens, customer feedback kiosks, outdoor menu display boards, and window graphics — all fully customisable to your restaurant's brand identity.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Can you manage signage across multiple restaurant franchise locations?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes. Our centralised content management system allows franchise operators to update content across all outlets from a single dashboard — ensuring consistent brand messaging, promotional compliance, and real-time menu accuracy across every location simultaneously.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question">What is the installation and turnaround time for restaurant signage?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Once the design is approved, standard restaurant signage is produced and installed within 5–10 days. Digital display systems including hardware supply, content setup, and installation are typically completed within 7–14 days depending on location and scope.</p></div>
        </div>
    </div>
</section>

@endsection