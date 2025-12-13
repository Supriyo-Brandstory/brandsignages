@extends('frontend.layout.appLayout')
@section('content')


<section class="hero-banner"
        style="background-image: url('{{ asset('frontend/Images/oudoor-signage-boards.webp') }}'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Outdoor Sign Board <br>for Better Brand Visibility</h1>
                    <p>Looking for a standout outdoor sign board for your business? <br>Brand Signages is a trusted expert in crafting high-quality, durable <br>outdoor sign boards that showcase your brand with visibility, <br>style, and lasting impact.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Get a Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Durable and Eye-Catching Outdoor Sign<br> Brand Signages </h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/outddor-sign-3.jpg')}}" alt="Outdoor Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">We are Creative Outdoor Sign Board Designers</h2>
                <p class="brand-description">
                At Brand Signages, we are the premier choice for outdoor signage in India. As a creative team of experts with over 10+ years of industry experience, we specialize
                 in crafting jaw-dropping outdoor sign boards that perfectly blend vibrant colors, modern fonts, durable materials, and innovative elements to captivate your
                  audience and drive real results. Our outdoor signage solutions are fully customizable to reflect your brand identity while ensuring maximum visibility and lasting impact.
                </p>
                <p class="brand-description">
                As the <b>No. 1 outdoor sign board manufacturer</b> in India, we pride ourselves on delivering immersive, high-impact solutions that stand out in any 
                environment. Our outdoor sign board product range inlcudes <a href="door-signages" style="color:#E43D12; text-decoration:none;"><strong>door sign board</strong></a>, <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>shop name board</strong></a>, <a href="name-board-design-for-office-bangalore" style="color:#E43D12; text-decoration:none;"><strong>office name board</strong></a>, etc. If you're eady to transform your brand's 
                presence, we deliver custom outdoor sign boards that deliver lasting impact.</p>
                <div class="mt-4">
                            <a href="contact-us" class="custom-btn">Contact Us Now</a>
                        </div> 
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Why Outdoor Sign Boards Are Essential</h2>
                <p class="brand-description">
                Outdoor sign boards are more than just displays, they're powerful marketing tools that highlight your unique offerings, boost foot traffic, and increase sales. 
                In today's digital age, modern signages with embedded QR codes allow customers to scan instantly, explore your business online, and make purchases on the spot.
                </p>
                <p class="brand-description">
                <b>Creates a Lasting Brand Impression:</b> A well-designed outdoor shop name board instantly draws in customers, building strong brand recognition. It serves as a 
                permanent landmark, making your location easily identifiable for locals and visitors alike.</p>
                <p class="brand-description">
                <b>Durability and Versatility:</b> Unlike temporary marketing like posters or flyers, our outdoor signs are built to last. Using weather-resistant materials, 
                they withstand rain, sun, and wind while offering endless customization options.</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/outdoor-sign-4.webp')}}" alt="Outdoor Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>


    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Our Outdoor Sign Board </br>Product Range</h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/freestanding.webp')}}" class="card-img-center"
                                    alt="Freestanding Outdoor Signs">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="contact-us">Freestanding Outdoor Signs</a></h5>
                                    <p class="We-Elevate-Brands-text">A freestanding sign, anchored directly to the ground without being attached to any building or establishment, comes in different forms like pylon or pole signs, monoliths, and monuments. </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/outdoor-signage5.webp')}}" class="card-img-center"
                                    alt="Outdoor Banners">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="contact-us">Outdoor Banners</a></h5>
                                    <p class="We-Elevate-Brands-text">Simple outdoor banners placed outside your store are a cost-effective yet useful way to make the passerby audiences stop at the store and decide about buying the products or services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/outdoor-led.webp')}}" class="card-img-center"
                                    alt="Illuminated Outdoor Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="led-acrylic-3d-glow-sign-board">LED Outdoor Signage</a></h5>
                                    <p class="We-Elevate-Brands-text">With attractive LED lights attached to the signages, the visibility of the signages can be doubled. The illuminated boards comprise neon, LED or other fluorescent lights and deliver maximum impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/outdoor-signage7.webp')}}" class="card-img-center"
                                    alt="PVC Outdoor Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="contact-us">PVC Outdoor Signage</a></h5>
                                    <p class="We-Elevate-Brands-text">Made of polyvinyl chloride, PVC outdoor signage works as a durable, lightweight, low-maintenance and affordable marketing tool. Suitable for diverse weather conditions and used for multiple purposes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/outdoor-digital.webp')}}" class="card-img-center"
                                    alt="Outdoor Digital Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="digital-signages">Digital Signage</a></h5>
                                    <p class="We-Elevate-Brands-text">Also known as digital displays, digital signage is a dynamic form of high-visibility outdoor business signage. Promote services, events, and special offers through engaging, real-time visual content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/outdoor-signage9.webp')}}" class="card-img-center"
                                    alt="Aluminium Outdoor Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="metal-signages">Aluminium Outdoor Signage</a></h5>
                                    <p class="We-Elevate-Brands-text">Made of composite aluminium sheets strengthened with polyethylene plastic from the core, this type of outdoor signage is lightweight. It is ideal for strong and permanent outdoor board signs.</p>
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



<section class="container py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Your Reliable Partner for Perfect <br>Outdoor Sign Boards</h2>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-sign-6.jpg')}}" alt="Reverse Glow Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Get Sample Designs</h5>
                            <p class="text-content">We provide sample design concepts to help you visualise the final signage before production. This allows you to review layout, material finish, colour combinations, and overall impact, ensuring the final sign aligns perfectly with your brand requirements.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage11.webp')}}" alt="Metal Backlit" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Service and Support</h5>
                            <p class="text-content">Our team offers end-to-end service and support, from initial consultation and design planning to manufacturing and installation. With a focus on professionalism and timely execution, we ensure a smooth experience and consistent communication throughout the project.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage12.webp')}}" alt="Premium Metal Letters and Signage"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Price & Size Guide</h5>
                            <p class="text-content">We assist you with clear pricing and size recommendations based on your location, visibility needs, and budget. Our experts guide you in selecting the right dimensions and materials to achieve maximum impact while maintaining cost efficiency.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage13.webp')}}" alt="Stainless Steel Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Sustainable Printing</h5>
                            <p class="text-content">As we are moving toward a future where sustainability becomes a
                                primary concern, focusing on sustainable printing in signage boards is important.
                                Eco-friendly boards with elements soothing to the eyes are helpful to carry forward
                                your business mission toward a secure future.</p>
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Excellent products with exclusive
                            features. I loved the beautiful outdoor signage boards I purchased from
                            Brand Signage. They are durable, attractive and perfectly aligned with my
                            business brand <br> <br></p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/rohit-verma.webp')}}" alt="Rohit Verma" class="client-img">
                            <div>
                                <div class="client-name">Rohit Verma</div>
                                <div class="client-role">Event Management Company Owner</div>
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
                        <p class="card-text testimonial-card-text">Brand Signage has a wide collection
                            of outdoor signage. I recently bought some of their products for my shop and
                            I must say they provide the best quality signage options</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/priya-menon.webp')}}" alt="Priya Menon" class="client-img">
                            <div>
                                <div class="client-name">Priya Menon</div>
                                <div class="client-role">Boutique Owner</div>
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
                        <p class="card-text testimonial-card-text">I appreciate the products as well as
                            the customer service! If you are looking for high-quality outdoor signage
                            boards, Brand Signage should be your first choice.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/karan-mehta.webp')}}" alt="Karan Mehta" class="client-img">
                            <div>
                                <div class="client-name">Karan Mehta</div>
                                <div class="client-role">Gym and Fitness Studio Owner</div>
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
                        <p class="card-text testimonial-card-text">“Highly impressive! Good products,
                            smooth delivery process and prompt customer service. I enjoyed my shopping
                            experience with Brand Signage.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/ananya-reddy.webp')}}" alt="Ananya Reddy" class="client-img">
                            <div>
                                <div class="client-name">Ananya Reddy</div>
                                <div class="client-role">Cafe Chain Owner</div>
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
                        <p class="card-text testimonial-card-text">One of the most trusted destinations
                            for signage boards. The diversity in the product catalogue, customization
                            options, and hassle-free purchasing process make me feel like coming back to
                            Brand Signage again.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/sandeep-gupta.webp')}}" alt="Sandeep Gupta" class="client-img">
                            <div>
                                <div class="client-name">Sandeep Gupta</div>
                                <div class="client-role">Automobile Workshop Owner</div>
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
                                    <p class="card-text testimonial-card-text">Excellent products with exclusive
                                        features. I loved the beautiful outdoor signage boards I purchased from
                                        Brand Signage. They are durable, attractive and perfectly aligned with my
                                        business brand <br> <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rohit-verma.webp')}}" alt="Rohit Verma" class="client-img">
                                        <div>
                                            <div class="client-name">Rohit Verma</div>
                                            <div class="client-role">Event Management Company Owner</div>
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
                                    <p class="card-text testimonial-card-text">Brand Signage has a wide collection
                                        of outdoor signage. I recently bought some of their products for my shop and
                                        I must say they provide the best quality signage options</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya-menon.webp')}}" alt="Priya Menon" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Menon</div>
                                            <div class="client-role">Boutique Owner</div>
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
                                    <p class="card-text testimonial-card-text">I appreciate the products as well as
                                        the customer service! If you are looking for high-quality outdoor signage
                                        boards, Brand Signage should be your first choice.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/karan-mehta.webp')}}" alt="Karan Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Mehta</div>
                                            <div class="client-role">Gym and Fitness Studio Owner</div>
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
                                    <p class="card-text testimonial-card-text">I appreciate the products as well as
                                        the customer service! If you are looking for high-quality outdoor signage
                                        boards, Brand Signage should be your first choice.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/karan-mehta.webp')}}" alt="Karan Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Mehta</div>
                                            <div class="client-role">Gym and Fitness Studio Owner</div>
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
                                    <p class="card-text testimonial-card-text">“Highly impressive! Good products,
                                        smooth delivery process and prompt customer service. I enjoyed my shopping
                                        experience with Brand Signage.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/ananya-reddy.webp')}}" alt="Ananya Reddy" class="client-img">
                                        <div>
                                            <div class="client-name">Ananya Reddy</div>
                                            <div class="client-role">Cafe Chain Owner</div>
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
                                    <p class="card-text testimonial-card-text">One of the most trusted destinations
                                        for signage boards. The diversity in the product catalogue, customization
                                        options, and hassle-free purchasing process make me feel like coming back to
                                        Brand Signage again.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/sandeep-gupta.webp')}}" alt="Sandeep Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Sandeep Gupta</div>
                                            <div class="client-role">Automobile Workshop Owner</div>
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
        <h2 class="my-5">Outdoor Signages in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/leading-signage-company-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Outdoor Signages Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/signage-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Outdoor Signages Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Outdoor Signages Bangalore">
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
                What fonts should we use for outdoor signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Talk with a signage expert or research on your own to find a font that is easy to read, clearly
                    visible and legible. Also, it must align with your brand tone and be attractive enough to grab
                    people’s attention at the very first impression.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is waterproof material for signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Outdoor signages made of materials like PVC board, vinyl acrylic or plexiglass and aluminium can
                    stand the test of time. Being waterproof, they can withstand rainfall along with other weather
                    hazards.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the difference between regular signage vs. digital signboards for outdoor marketing?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A regular signboard for the outdoors includes static text and/or images to showcasing a brand
                    message whereas a digital signboard includes dynamic videos, pictures and texts sometimes with
                    lighting attached to the board.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the benefits of using outdoor signage boards for my business?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Outdoor signage boards are designed to enhance your brand visibility, attract attention, 
                    and communicate your message effectively. They are durable, weather-resistant, and customizable to match your 
                    branding needs. These signs help promote services, events, and special offers, drawing more foot traffic and 
                    increasing customer engagement.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long do outdoor signage boards last? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The lifespan of outdoor signage boards depends on the materials used and environmental factors. At Brand Signages, 
                    we use high-quality materials like acrylic, metal, and durable LED options that are built to withstand harsh weather 
                    conditions. With proper maintenance, our outdoor signage boards can last for many years, providing long-term value for 
                    your business.</p>
            </div>
        </div>


    </div>
</section>


@endsection