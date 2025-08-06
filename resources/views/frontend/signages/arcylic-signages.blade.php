@extends('frontend.layout.appLayout')
@section('content')

<style>
    .pree{
    font-size: 20px;
}
@media (max-width: 768px) {
    .pree{
        font-size: 15px;
    }
    </style>
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/coffee-shop-menu.webp')}}" alt="Acrylic Signage -Coffee Shop Menu">
                <div class="carousel-caption-custom">
                    <h1>Stunning Acrylic Signages in Bangalore</h1>
                    <p class="pree">Light up your brand with custom acrylic LED signboards that stand out.</p>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5" id="gallery-container">
        <h2 class="hero-title  mb-4">Acrylic LED Signages – Designed to Dazzle, Built to Endure</h2>
        <p class=" text-center mb-5">At <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Brand Signages</a>, we specialize in transforming ideas into illuminated reality with premium-quality acrylic LED signages. Our offerings include a wide range of styles from acrylic glow sign boards, <a href="{{route('led_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED name boards</a>, to 3D acrylic letter signs, and more to match your unique branding goals. 

            <br>We work with businesses of all scales, startups looking to make a bold entrance or established names aiming to refresh their presence. Each signage is crafted with attention to detail, blending modern aesthetics with long-lasting LED performance. With Brand Signages, your message doesn’t just appear- it radiates distinction.
        </p>            

        <div class="row align-items-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-sign-1.webp')}}" data-lightbox="Acrylic LED Signboard" data-title="Image 1">
                    <img src="{{asset('frontend/Images/acrylic-led-sign-1.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-sinnboard-2.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/acrylic-led-sinnboard-2.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-3.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 3">
                    <img src="{{asset('frontend/Images/acrylic-led-signboard-3.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-4.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-signboard-4.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-5.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-signboard-5.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-sign-board-7.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-sign-board-7.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-sign-board-8.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-sign-board-8.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="hero-title">Acrylic LED Signage Specifications</h2>
        {{-- <p class="card-text testimonial-card-text text-center pb-2">Acrylic LED signages are the talk of the town
            because they combine aesthetics and practical functionality. <br> 
            At Brand Signages, we offer acrylic LED signages that provide excellent value for money, delivering <br> 
            long-lasting performance in any condition.</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/imsk.webp')}}" alt="Acrylic Led Signages Design" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Premium Material Range</h2>
                <p class="brand-description">
                    We use high-quality acrylic sheets with thickness options starting from 1 mm up to 18 mm, ensuring durability without compromising on design flexibility.                </p>
                <h2 class="brand-title">Vibrant Color Choices</h2>
                <p class="brand-description">
                    Select from a variety of solid, transparent, frosted, and illuminated color options, including classic shades and RGB lighting effects to match your brand's identity.
                </p>
                <h2 class="brand-title">Fully Customizable Designs</h2>
                <p class="brand-description">
                    From laser-cut letters to bespoke logo panels, we offer complete customization in terms of shape, size, finish, and illumination style, suitable for both indoor and outdoor branding.
                </p>
                <h2 class="brand-title">Built for Outdoor and Indoor Use</h2>
                <p class="brand-description">
                    Our acrylic LED signages are made to perform in varied environments—resistant to fading, moisture, and temperature changes, while maintaining visual impact over time.
                </p>
                <h2 class="brand-title">Easy Installation                </h2>
                <p class="brand-description">
                    Each signage is crafted with installation convenience in mind, offering multiple mounting options and a clean setup process for walls, glass panels, or freestanding displays.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="process-section">
    <div class="container">
        <h2 class="process-title">Acrylic LED Signages Help Businesses Promote Effectively</h2>
        <p class="card-text testimonial-card-text text-center pb-2">In a crowded marketplace, visibility is everything. Acrylic LED signages from Brand Signages act as a 24/7 brand ambassador, silently promoting your business—even when you're closed. Placed near storefronts, in high-footfall zones, or at key touchpoints, these signages draw immediate attention with their vibrant illumination and sleek design.

           <br> More than just visual appeal, they help build brand recognition and customer trust, making your business look professional, modern, and reliable. Whether you're aiming to boost walk-ins, strengthen your identity, or simply stand out in a competitive area, our acrylic LED signboards offer a powerful, low-maintenance way to leave a lasting impression.
            </p>
        <div class="row">
            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-design">
                        <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="On-demand Design">
                    </div>
                    <h3>Enhanced Visibility                    </h3>
                    <p>Our modern acrylic LED signage ensures your brand stands out even in low-light conditions, attracting more attention. These signs can elevate the appearance of your office or store, giving it a sleek, modern, and professional look.                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-deliver">
                        <img src="{{asset('frontend/Images/promotion.png')}}" style="width: 20%" alt="Timely Deliver">
                    </div>
                    <h3>Dynamic Promotions                    </h3>
                    <p>
                        With customizable colors and effects, businesses can change their messaging easily to reflect promotions or seasonal offers. Our acrylic sign boards are best for showing brand deals, limited-time offers, or attracting audience attention from people walking in the location.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/energy.png')}}" style="width:17%" alt="Direct Purchase">
                    </div>
                    <h3>Energy Efficiency</h3>
                    <p>LED lights consume less power than traditional lighting options, reducing operational costs while providing consistent brightness. Our glow sign board will brilliantly present your brand to people and turn them into potential customers.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/durable.png')}}" style="width: 20%" alt="Direct Purchase">
                    </div>
                    <h3>Durability</h3>
                    <p>Acrylic with LED technology creates a robust signage solution that withstands weather conditions without fading or deteriorating. We use premium and malleable materials to create versatile and durable products for brands. This is a practical solution compared to other display marketing products available in the market.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/easy-installation.png')}}" style="width: 20%" alt="Direct Purchase">
                    </div>
                    <h3>Modern Aesthetics and Ease of Installation                    </h3>
                    <p>The sleek look of illuminated acrylic signages adds a contemporary touch to any business environment, enhancing overall brand perception. You can choose any color to illuminate the board and even the nature of the finish. You can engrave and emboss acrylic logos to boost the visual appeal and stand out from the competition.
                    </p>
                </div>
            </div>
            <div class="col-md-4 contact-section">
                <p class="card-text"><strong>As premier LED signage makers, we bring innovation, precision, and artistry to every design. Let’s illuminate your brand—connect with us today!</strong></p>
                <a href="{{route('contact_us')}}">
                    <button class="contact-btn">Contact Us</button>
                </a>
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

<section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Acrylic Signages in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/premium-acrylic-sign-boards-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Acrylic Signages Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/acrylic-signages-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Acrylic Signages Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/acrylic-signage-manufacturer-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Acrylic Signages Bangalore">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Bangalore</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQs</h1>

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
<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs through our articles.</p>

        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
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
                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="text-center">
            <a href="{{ route('blogs') }}">
                <button class="contact-btn">See All Blogs</button>
            </a>
            </div>
        </div>
    </div>
</section>
@endsection