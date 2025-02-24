@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/coffee-shop-menu.webp')}}" alt="Acrylic Signage -Coffee Shop Menu">
                <div class="carousel-caption-custom">
                    <h1>Best Acrylic Signage Boards: Eye-catching Signages</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="hero-title">Modern & Versatile Acrylic Signboards at Brand Signages</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/glow-acrylic-sign.webp')}}" alt="Acrylic Signage Design for Office" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">#1 Acrylic Signages for Your Branding</h2>
                <p class="brand-description">
                Branding is more important than ever to establish your brand identity and engage customers. Signage is the most important branding asset and a way to represent your brand. Among all other options, acrylic sign boards are the premier choice for companies, available in different designs and colors. Also, acrylic sign board is the sleekest and most visually striking signage suited for indoor and outdoor use. 
                </p>
                <p class="brand-description">
                Brand Signages is the top provider of custom acrylic sign boards with eye-catching 3D designs. We design multicolor, stylish, and 3D acrylic boards (laser cut) to make your brand stand apart. Whether you need acrylic signs for corporate offices, retail stores, events, or outdoor acrylic signs for storefronts and public spaces, we are a trusted name in the industry. Our experts design weather-resistant and high-quality acrylic signages to ensure long-lasting durability. 
                </p>
                <p class="brand-description">
                You can choose from transparent acrylic signs, 3D letters, and LED-illuminated acrylic signboards that are designed to grab attention. Whether you want to enhance your storefront or transform your office interior, our expertly designed acrylic signages will ensure the maximum impact and engagement.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Premium Acrylic Signages to Enhance <br> Your Business Spaces
            </h2>
            <p class="card-text text-center">Acrylic signboards have a significant role in defining modern marketing
                and creating a visual <br> space. Brand Signages is a leading acrylic signage maker, delivering visually 
                striking solutions that enhance your brand presence.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/on-site-consulting.webp')}}" class="why-card-img-top" alt="Brand Identity & Promotion">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Brand Identity & Promotion</h3>
                        <p class="card-text">Acrylic signages are great for branding and marketing because they
                            offer simplicity and versatility. <a href="https://brandsignages.com/" style="text-decoration: unset;color:#E43D12">Brand Signages</a>
                            can help you clarify your brand’s vision, standards, and accreditations with premium acrylic signs. Our acrylic signages are highly 
                            visible from a distance, attracting more foot traffic to your business.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/top-tier-designs.webp')}}" class="why-card-img-top" alt="Corporate & Professional Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate & Professional Signage</h3>
                        <p class="card-text">In a corporate space, acrylic signages and plaques are installed to add a 
                            professional touch, allowing employees to personalize their doors or desks with clarity and style.
                            Acrylic signboards can be designed with a natural lamination to give them a professional and polished look. 
                            We design acrylic signs for corporate spaces or high-rise buildings, especially in lobbies or corporate archways.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Commercial & Retail Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Commercial & Retail Displays</h3>
                        <p class="card-text">However, the best use of acrylic signage is in retail or commerce. If you're looking to personalize, 
                            we create unique and minimalist boards using customized lettering methods. Acrylic signboards are neat in low-light conditions. 
                            We provide solutions that prioritize professional look, long-term functionality, and ease of maintenance, not just aesthetics.
                        </p>
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
                                <img src="{{asset('frontend/Images/on-site-consulting.webp')}}" class="why-card-img-top" alt="Brand Identity & Promotion">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Brand Identity & Promotion</h3>
                                    <p class="card-text">Acrylic signages are great for branding and marketing because they
                            offer simplicity and versatility. Brand Signages can help you clarify your brand’s vision, standards, and accreditations with premium acrylic sign boards. Our acrylic signages are highly 
                            visible from a distance, attracting more foot traffic to your business.
                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/top-tier-designs.webp')}}" class="why-card-img-top" alt="Corporate & Professional Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate & Professional Signage</h3>
                                    <p class="card-text">In a corporate space, acrylic signages and plaques are installed to add a 
                            professional touch, allowing employees to personalize their doors or desks with clarity and style.
                            Acrylic signboards can be designed with a natural lamination to give them a professional and polished look. 
                            We design acrylic signs for corporate spaces or high-rise buildings, especially in lobbies or corporate archways. 
                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Commercial & Retail Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Commercial & Retail Displays</h3>
                                    <p class="card-text">However, the best use of acrylic signage is in retail or commerce. If you're looking to personalize, 
                            we create unique and minimalist boards using customized lettering methods. Acrylic signboards are neat in low-light conditions. 
                            We provide solutions that prioritize professional look, long-term functionality, and ease of maintenance, not just aesthetics.
                        </p>
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
            <h2 class="display-4 mb-3 why-text-heading">Types of Acrylic Sign Boards We Deliver</h2>
            <p class="card-text testimonial-card-text">Acrylic sign boards are the modern marketing trend that is designed to provide a 
                professional look.<br> Our acrylic sign boards are available in a variety of options as:</p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board2.webp')}}" alt="Clear Acrylic Signage" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Glow Sign Acrylic Boards</h5>
                            <p class="text-content">Glow sign acrylic boards are illumination signages that use neon lighting or LED to 
                                enhance visibility around the clock. These are perfect for storefronts and restaurants looking for high-impact 
                                branding.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/accrylic-c1.jpeg')}}" alt="Lucite Signage Boards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">3D Acrylic Letter Boards</h5>
                            <p class="text-content">A3D acrylic letters feature raised letters mostly used for company logos or storefronts. 
                                3D letter acrylic signages are the perfect go-to option for brands to make a lasting impact.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board3.webp')}}" alt="Transparent Acrylic Plaques" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Frosted Acrylic Signboards</h5>
                            <p class="text-content">Frosted acrylic signage is a brand-new trending design with a matte finish. We get frosted acrylic sign board 
                                design orders mostly for reception and office interiors.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board4.webp')}}" alt="Acrylic Display Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Transparent Acrylic Signboards</h5>
                            <p class="text-content">Transparent acrylic boards come with a glass-like and transparent finish. Transparent acrylic boards are the preferred 
                                choice for hotels, corporate offices, and reception areas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-sign-board5.webp')}}" alt="Plexiglass Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Backlit Acrylic Signboards</h5>
                            <p class="text-content">Backlit acrylics are designed with LED lighting to create attractive visuals. Designed to grab instant attention, 
                                backlit acrylic boards are perfect for busy areas like malls and retail spaces. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/acrylic-c2.jpeg')}}" alt="Acrylic signage with LED" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">UV Printed Acrylic Signboards</h5>
                            <p class="text-content">UV-printed acrylic sign boards utilize advanced UV (Ultra Violet) printing technology to create eye-catching designs. 
                                These are ideal for various branding elements like logos and graphics. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<section>
    <div class="container py-5">
        <h2 class="hero-title">Why Choose Us for Acrylic Signage Boards</h2>
        <p class="card-text testimonial-card-text text-center pb-2">Acrylic LED signages are the talk of the town
            because they combine aesthetics and practical functionality. <br> 
            At Brand Signages, we offer acrylic LED signages that provide excellent value for money, delivering <br> 
            long-lasting performance in any condition.</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/acrylic-signs-3.webp')}}" alt="Acrylic Led Signages Design" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Enhanced Visibility</h2>
                <p class="brand-description">
                    Our modern acrylic LED signages ensures your brand stands out even in
                    low-light conditions, attracting more attention. These signages can elevate 
                    the appearance of your office or store, giving it a sleek, modern, and professional look.
                </p>
                <h2 class="brand-title">Dynamic Promotions</h2>
                <p class="brand-description">
                    With customizable colors and effects, businesses can change their messaging easily to reflect
                    promotions or seasonal offers. Our acrylic sign boards are best for showing brand deals, limited-time
                    offers, or attracting audience attention from people walking in the location.
                </p>
                <h2 class="brand-title">Energy Efficiency</h2>
                <p class="brand-description">
                    LED lights consume less power than traditional lighting options, reducing operational costs
                    while providing consistent brightness. Our glow sign board will brilliantly present your brand
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
                    The sleek look of illuminated acrylic signages adds a contemporary touch to any business
                    environment, enhancing overall brand perception. You can choose any color to illuminate the
                    board and even the nature of the finish. You can engrave and emboss acrylic logos to boost the
                    visual appeal and stand out from the competition.
                </p>
                <p class="brand-description">
                At Brand Signages, we take pride in designing exceptional acrylic signages that not only boosts your brand 
                visibility but also transforms your space with a sleek, contemporary flair. Crafted with precision, our acrylic 
                LED boards are built to withstand the test of time, offering effortless installation and a lasting visual impact.
                </p>
                <p class="brand-description">
                 Whether you're aiming to captivate attention in a corporate setting or create an unforgettable presence in retail, our innovative 
                 signage solutions make sure your brand shines bright in any environment.
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/glow-acrylic-sign-4.webp')}}" alt="Glow Acrylic Led Signages" class="img-fluid">
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The acrylic sign we installed has
                            transformed our storefront! It’s eye-catching and professional, and the team
                            has gone above and beyond to fulfill our requirements! Our foot traffic has
                            increased significantly since we put it up</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/jeesun.webp')}}" alt="Jeesun" class="client-img">
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">We choose transparent plaques for our
                            awards ceremony, and they looked stunning! The quality exceeded our
                            expectations, everyone commented on how beautiful they were</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/seema.webp')}}" alt="Seema" class="client-img">
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Our office looks more professional
                            with the new acrylic signs, they elevate our brand image and make our space
                            more cohesive <br> <br> <br></p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/angelica.webp')}}" alt="Angelica" class="client-img">
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The LED acrylic signage has drawn so
                            much attention, our foot traffic has increased significantly! It sets us
                            apart from competitors</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/abdul.webp')}}" alt="Abdul" class="client-img">
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">We love the customization options
                            available, our unique sign represents our brand! The team was helpful
                            throughout the process</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anirudh.webp')}}" alt="Anirudh" class="client-img">
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The acrylic sign we installed has
                                        transformed our storefront! It’s eye-catching and professional, and the team
                                        has gone above and beyond to fulfill our requirements! Our foot traffic has
                                        increased significantly since we put it up</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/jeesun.webp')}}" alt="Jeesun" class="client-img">
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">We chose transparent plaques for our
                                        awards ceremony, and they looked stunning! The quality exceeded our
                                        expectations, everyone commented on how beautiful they were</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/seema.webp')}}" alt="Seema" class="client-img">
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Our office looks more professional
                                        with the new acrylic signs, they elevate our brand image and make our space
                                        more cohesive</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/angelica.webp')}}" alt="Angelica" class="client-img">
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Our office looks more professional
                                        with the new acrylic signs, they elevate our brand image and make our space
                                        more cohesive <br> <br> <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/angelica.webp')}}" alt="Angelica" class="client-img">
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED acrylic signage has drawn so
                                        much attention, our foot traffic has increased significantly! It sets us
                                        apart from competitors</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/abdul.webp')}}" alt="Abdul" class="client-img">
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">We love the customization options
                                        available, our unique sign represents our brand! The team was helpful
                                        throughout the process</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anirudh.webp')}}" alt="Anirudh" class="client-img">
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

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What are The Common Applications of Acrylic Signage Boards?
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
                How Long Do Acrylic Signage Boards Typically Last?
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
                How Does Acrylic Signage Compare to Other Signage Materials?
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
                What’s The Best Way to Clean and Maintain Acrylic Signage Boards?
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
                Can Acrylic Signage Boards be Used for Outdoor Advertising?
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
        <div class="faq-item">
            <button class="faq-question">
                How Do Acrylic Signage Boards Contribute to Brand Visibility?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic signaling boards improve brand visibility by offering an elegant and professional appearance. 
                    They can be customized with bright colors, 3D letters, and unique designs to attract attention. Acrylic 
                    boards also come with illuminated options for better visibility at night. High-quality printing and soft 
                    finishes make logos and text stand out. By maintaining a strong and attractive presence, acrylic signage 
                    helps companies create a memorable brand image, which makes it easier for customers to recognize and trust 
                    the brand.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
             Can LED Lighting be Integrated into Acrylic Signage Boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, LED lighting can be added to acrylic signage boards to make them look more visually striking. 
                    Businesses often use backlit or illuminated acrylic signs to improve visibility, especially in areas with 
                    low light. The LED-illuminated acrylic signage is commonly used in retail shops, restaurants, hotels, and corporate 
                    offices. It gives an elegant look, better brand recognition, and engagement. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
             Can Acrylic Signage Boards Withstand Extreme Weather Conditions?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signs are durable and can overcome various climate conditions. They bear rain, wind, 
                    and sunshine, so they can be used for both internal and external purposes. High-quality acrylic does 
                    not fade easily, even in excessive cold or heat. However, for hard exterior environments, companies 
                    can use additional coatings to increase durability. Acrylic signs are also water resistant, which 
                    prevents moisture damage. Adequate maintenance can make them a reliable option for long-term usage.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Acrylic Signage Boards be Customized in Terms of Shape and Size?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signaling boards can be tailored in several shapes and sizes to adjust your specific requirements. 
                    They can be cut into exceptional designs, from simple rectangles to complicated logos and letters. You can select 
                    thickness, color, and finish (bright or matte) to suit your branding. Acrylic signs can also include 3D letters or 
                    LED lighting for additional effect. We provide custom acrylic signage design services to clients across India. </p>
            </div>
        </div>

    </div>
</section>
@endsection