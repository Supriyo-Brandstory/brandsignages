@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/coffee-shop-menu.svg')}}" alt="Acrylic Signages">
                <div class="carousel-caption-custom">
                    <h1>Elevate Your Brand with Premium Acrylic Signages</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="hero-title">Why Choose Acrylic Signage?</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/office2.svg')}}" alt="Acrylic Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Brand Identity and Brand Signages</h2>
                <p class="brand-description">
                    Acrylic sign boards are versatile and can be used for displays in different environments. You
                    can choose from various styles, like clear signboards, transparent boards, and LED boards to
                    create a visual brand. These boards can help businesses build a long-lasting impression on
                    customers. For example, if you use a lucite signboard, you can cut it into different sizes and
                    convert it into a plaque or nameplate because of its malleability.
                </p>
                <p class="brand-description">
                    People love these options because they add a modern look without being overbearing. Their
                    professional, glossy finish speaks volumes, making them ideal for offices and large enterprises.
                    You can choose a rectangular acrylic sign or any other shape that adds versatility and special
                    effects.
                </p>
                <p class="brand-description">
                    So why should you choose acrylic signboards over other materials? Aren’t they expensive? First,
                    they are budget-friendly over a glass or metallic board and are convenient to use outdoors.
                    These boards are versatile, durable, and weather-resistant, meaning businesses don’t have to
                    change them. Brands don’t have to invest much while installing the boards outdoors in city
                    centers. Acrylic is recyclable, a slay for eco-conscious brands and green marketing efforts.
                    They are also easy to maintain even if they get minor scratches, which means a sustainable
                    brand.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">How Acrylic Signage Can Enhance <br> Your Business Spaces
            </h2>
            <p class="card-text text-center">Acrylic signboards have a significant role in defining modern marketing
                and creating a visual <br> space. Here is how companies are using them to build relationships with
                customers:</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/on-site-consulting.svg')}}" class="why-card-img-top" alt="Brand Identity & Promotion">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Brand Identity & Promotion</h3>
                        <p class="card-text">Acrylic signages are great for branding and marketing because they
                            offer simplicity and versatility. You can clarify your brand’s vision, standards, and
                            accreditations, and exhibit your products and services. These white acrylic signboards
                            are visible from a distance and can lure in more footfalls.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/top-tier-designs.svg')}}" class="why-card-img-top" alt="Corporate & Professional Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate & Professional Signage</h3>
                        <p class="card-text">Acrylic nameplates and plaques are installed for an employee to put on
                            a door or a desk. These signboards can have a wooden finish and a natural lamination to
                            give them a professional and polished look. You will find these in corporate places or
                            high-rise buildings, especially in the lobbies or corporate archways.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/skilled-workforce.svg')}}" class="why-card-img-top" alt="Commercial & Retail Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Commercial & Retail Displays</h3>
                        <p class="card-text">However, the best use of acrylic signage is in retail or commerce. If
                            you want to personalize, you can use the lettering method to create unique and minimal
                            boards. Acrylic signboards are neat in low-light conditions. No, it is not about
                            aesthetics, it's about functionality and serviceability in the long run.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/on-site-consulting.svg')}}" class="why-card-img-top" alt="Brand Identity & Promotion">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Brand Identity & Promotion</h3>
                                    <p class="card-text">Acrylic signages are great for branding and marketing
                                        because they offer simplicity and versatility. You can clarify your brand’s
                                        vision, standards, and accreditations, and exhibit your products and
                                        services. These white acrylic signboards are visible from a distance and can
                                        lure in more footfalls.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/top-tier-designs.svg')}}" class="why-card-img-top" alt="Corporate & Professional Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate & Professional Signage</h3>
                                    <p class="card-text">Acrylic nameplates and plaques are installed for an
                                        employee to put on a door or a desk. These signboards can have a wooden
                                        finish and a natural lamination to give them a professional and polished
                                        look. You will find these in corporate places or high-rise buildings,
                                        especially in the lobbies or corporate archways. Plexiglass signboards are
                                        mostly used in high-range retail showrooms. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/skilled-workforce.svg')}}" class="why-card-img-top" alt="Commercial & Retail Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Commercial & Retail Displays</h3>
                                    <p class="card-text">However, the best use of acrylic signage is in retail or
                                        commerce. If you want to personalize, you can use the lettering method to
                                        create unique and minimal boards. Acrylic signboards are neat in low-light
                                        conditions. No, it is not about aesthetics, it's about functionality and
                                        serviceability in the long run.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Types of Acrylic Sign Boards</h2>
            <p class="card-text testimonial-card-text">Acrylic signboards have a significant role in defining modern
                marketing and creating a visual space. Here is how companies <br> are using them to build
                relationships with customers:</p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board1.svg')}}" alt="Clear Acrylic Signage" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Clear Acrylic Signage</h5>
                            <p class="text-content">These acrylic signboards are best for companies looking for a
                                minimal yet stylish look. They have a transparent background and can mounted on the
                                wall or used as free-standing signboards. This makes them perfect for small spaces,
                                like cabins, desks, or nameplates. These can be enhanced with LEDs to illuminate the
                                simple fonts and create an aesthetic effect.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board2.svg')}}" alt="Lucite Signage Boards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Lucite Signage Boards</h5>
                            <p class="text-content">Are you looking for high-end acrylic signage for your corporate
                                office? Lucite signboards are upgraded versions because they provide a luxurious
                                glass-like finish. They reflect light to create a holographic effect. These are
                                quite durable and can be customized with acrylic letters and beads.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board3.svg')}}" alt="Transparent Acrylic Plaques" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Transparent Acrylic Plaques</h5>
                            <p class="text-content">This custom acrylic plaque emphasizes the text or message you
                                want to give your audience. You can use these nameplates for award ceremonies or
                                recognition events, like corporate “Hall of Fame”. This rectangle acrylic style
                                displays your achievements and accreditations even with small fonts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board4.svg')}}" alt="Acrylic Display Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic Display Signs</h5>
                            <p class="text-content">These acrylic sign boards have vibrant graphics and are suitable
                                for indoor/ outdoor events. We can customize them per your requirements, and you can
                                change the panel to suit the occasion or decor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board5.svg')}}" alt="Plexiglass Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Plexiglass Signs</h5>
                            <p class="text-content">Have you seen restaurant menus with laminated backgrounds and
                                exchangeable panels? Or the acrylic sign board with directions? These are all
                                examples of plexiglass signs with acrylic letters engraved on them.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board6.svg')}}" alt="Acrylic signage with LED" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic signage with LED</h5>
                            <p class="text-content">You can choose acrylic signage with LED to add sophistication
                                and night-time visibility. You can choose colored or other LED styles that fit your
                                vision. The thickness of these LED acrylic signboards can vary between 1 mm to 18
                                mm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="testimonial section ">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customer Testimonial</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The acrylic sign we installed has
                            transformed our storefront! It’s eye-catching and professional, and the team
                            has gone above and beyond to fulfill our requirements! Our foot traffic has
                            increased significantly since we put it up</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/jeesun.svg')}}" alt="Jeesun" class="client-img">
                            <div>
                                <div class="client-name">Jeesun</div>
                                <div class="client-role">Grocery Store Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">We chose transparent plaques for our
                            awards ceremony, and they looked stunning! The quality exceeded our
                            expectations, everyone commented on how beautiful they were</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/seema.svg')}}" alt="Seema" class="client-img">
                            <div>
                                <div class="client-name">Seema</div>
                                <div class="client-role">Fashion Entrepreneur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Our office looks more professional
                            with the new acrylic signs, they elevate our brand image and make our space
                            more cohesive <br> <br> <br></p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/angelica.svg')}}" alt="Angelica" class="client-img">
                            <div>
                                <div class="client-name">Angelica</div>
                                <div class="client-role">CEO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The LED acrylic signage has drawn so
                            much attention, our foot traffic has increased significantly! It sets us
                            apart from competitors</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/abdul.svg')}}" alt="Abdul" class="client-img">
                            <div>
                                <div class="client-name">Abdul</div>
                                <div class="client-role">Corporate employee</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">We love the customization options
                            available, our unique sign represents our brand! The team was helpful
                            throughout the process</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anirudh.svg')}}" alt="Anirudh" class="client-img">
                            <div>
                                <div class="client-name">Anirudh</div>
                                <div class="client-role">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonialCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The acrylic sign we installed has
                                        transformed our storefront! It’s eye-catching and professional, and the team
                                        has gone above and beyond to fulfill our requirements! Our foot traffic has
                                        increased significantly since we put it up</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/jeesun.svg')}}" alt="Jeesun" class="client-img">
                                        <div>
                                            <div class="client-name">Jeesun</div>
                                            <div class="client-role">Grocery Store Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">We chose transparent plaques for our
                                        awards ceremony, and they looked stunning! The quality exceeded our
                                        expectations, everyone commented on how beautiful they were</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/seema.svg')}}" alt="Seema" class="client-img">
                                        <div>
                                            <div class="client-name">Seema</div>
                                            <div class="client-role">Fashion Entrepreneur</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Our office looks more professional
                                        with the new acrylic signs, they elevate our brand image and make our space
                                        more cohesive</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/angelica.svg')}}" alt="Angelica" class="client-img">
                                        <div>
                                            <div class="client-name">Angelica</div>
                                            <div class="client-role">CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Our office looks more professional
                                        with the new acrylic signs, they elevate our brand image and make our space
                                        more cohesive <br> <br> <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/angelica.svg')}}" alt="Angelica" class="client-img">
                                        <div>
                                            <div class="client-name">Angelica</div>
                                            <div class="client-role">CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED acrylic signage has drawn so
                                        much attention, our foot traffic has increased significantly! It sets us
                                        apart from competitors</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/abdul.svg')}}" alt="Abdul" class="client-img">
                                        <div>
                                            <div class="client-name">Abdul</div>
                                            <div class="client-role">Corporate employee</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">We love the customization options
                                        available, our unique sign represents our brand! The team was helpful
                                        throughout the process</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anirudh.svg')}}" alt="Anirudh" class="client-img">
                                        <div>
                                            <div class="client-name">Anirudh</div>
                                            <div class="client-role">Restaurant Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-carousel-controls">
                <button id="prevButton" class="testimonial-carousel-control" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="testimonial-carousel-control" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators testimonial-carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="hero-title">Acrylic LED Signages</h2>
        <p class="card-text testimonial-card-text text-center pb-2">Acrylic LED signages are the talk of the town
            because they combine aesthetics and practical functionality. <br> These offer great value for money and
            provide a long-standing performance in any condition:</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/acrylic-led-signages1.svg')}}" alt="Acrylic Led Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Enhanced Visibility</h2>
                <p class="brand-description">
                    The bright illumination from LED lights ensures your acrylic signage stands out even in
                    low-light conditions, attracting more attention. These can enhance your office or store, and
                    give it a sleek and modern look.
                </p>
                <h2 class="brand-title">Dynamic Promotions</h2>
                <p class="brand-description">
                    With customizable colors and effects, businesses can change their messaging easily to reflect
                    promotions or seasonal offers. These signboards are best for showing brand deals, limited-time
                    offers, or attracting audience attention from people walking in the location.
                </p>
                <h2 class="brand-title">Energy Efficiency</h2>
                <p class="brand-description">
                    LED lights consume less power than traditional lighting options, reducing operational costs
                    while providing consistent brightness. The glow sign board will brilliantly present your brand
                    to people, and turn them into potential customers.
                </p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Durability</h2>
                <p class="brand-description">
                    Acrylic with LED technology creates a robust signage solution that withstands weather conditions
                    without fading or deteriorating. We use premium and malleable materials to create versatile and
                    durable products for brands. This is a practical solution compared to other display marketing
                    products available in the market.
                </p>
                <h2 class="brand-title">Modern Aesthetic and Ease of Installation</h2>
                <p class="brand-description">
                    The sleek look of illuminated acrylic signs adds a contemporary touch to any business
                    environment, enhancing overall brand perception. You can choose any color to illuminate the
                    board and even the nature of the finish. You can engrave and emboss acrylic logos to boost the
                    visual appeal and stand out from the competition.
                </p>
                <p class="brand-description">
                    But it’s not the only factor to consider. These acrylic signboards are easy to install, and our
                    manual will make it even easier. If you want to choose an option, you can set your budget after
                    researching “acrylic led sign board price” and then make a decision.
                </p>
                <p class="brand-description">
                    Do you know one of the shortcuts to making waves in marketing and branding? Investing in acrylic
                    LED signage that speaks your language.
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/acrylic-led-signages2.svg')}}" alt="Acrylic Led Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What are the common applications of acrylic signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic signage boards are widely used across various industries due to their versatility and
                    durability:</p>
                <ul>
                    <li>Corporate Offices: Directional signs, room identification, branding displays.</li>
                    <li>Retail Spaces: Promotional displays, and product information signs.</li>
                    <li>Restaurants: Menu boards, special displays.</li>
                    <li>Hospitals: Wayfinding systems to guide patients.</li>
                    <li>Events: Awards plaques or recognition displays.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long do acrylic signage boards typically last?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>With proper care and maintenance, acrylic signage boards can last several years without
                    significant wear or fading. Their resistance to UV rays ensures that colors remain vibrant over
                    time, making them an excellent long-term investment for any business.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How does acrylic signage compare to other signage materials?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Here is a comprehensive comparison of acrylic signboards with other signage materials:</p>
                <ul>
                    <li>Durability: More impact-resistant than glass; won’t shatter easily.</li>
                    <li>Weight: Lighter than glass or metal; easier to install.</li>
                    <li>Weather Resistance: Suitable for both indoor and outdoor use without warping.</li>
                    <li>Customization: Easier to mold into various shapes compared to wood or metal.</li>
                </ul>
                <p>These benefits make acrylic a preferred choice among businesses seeking effective signage
                    solutions.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What’s the best way to clean and maintain acrylic signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>According to experts, these are the steps to clean acrylic signboards:</p>
                <ul>
                    <li>Use a soft cloth (microfiber works best) with mild soap mixed with water.</li>
                    <li>Gently wipe the surface without applying excessive pressure.</li>
                    <li>Avoid using abrasive cleaners or materials that could scratch the surface.</li>
                    <li>Regular maintenance will keep them looking new; consider cleaning every few weeks depending
                        on exposure to dirt or dust.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can acrylic signage boards be used for outdoor advertising?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic signage with LED is ideal for outdoor advertising due to its weather-resistant
                    properties:</p>
                <ul>
                    <li>They can withstand rain, sun exposure, and varying temperatures without deteriorating
                        quickly.</li>
                    <li>For outdoor applications, ensure any printed graphics use UV-resistant inks or coatings to
                        prevent fading over time.</li>
                    <li>Additionally, using thicker sheets enhances durability against potential impacts from
                        environmental factors like wind or debris.</li>
                    <li>This makes them an excellent choice for businesses looking to increase visibility outdoors
                        while maintaining quality over time.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection