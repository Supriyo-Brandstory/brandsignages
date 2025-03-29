@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/led-signage1.webp')}}" alt="LED Signage">
                <div class="carousel-caption-custom">
                    <h1>Top LED Sign Board Manufacturers and Suppliers</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Best LED Signage Board Manufacturers for Custom LED Signs</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signage2.webp')}}" alt="Best LED Signage Manufacturers" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                    <p class="brand-description">
                    LED sign boards are a modern branding solution with compact digital screens used in storefronts, banks, hospitals, and almost everywhere. Different from traditional signage, LED sign boards show dynamic content on digital displays providing better visibility and impact. 
                    </p>
                    <p class="brand-description">
                    Being an industry-leading LED signage manufacturer, Brand Signages offers energy-efficient LED sign boards. We combine quality and innovation to design energy-efficient LED sign boards. From amazing LED reverse light signs, and digital LED to acrylic LED signages we offer a range of solutions. 
                    </p>
                    <p class="brand-description">
                    Brand Signages is the best LED sign board manufacturers, trusted by top businesses. With over a decade of expertise, we have worked with 100+ businesses across India.  
                    </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of LED Signage Boards We Offer</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                        alt="Acrylic LED Sign Board">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Acrylic LED Sign Board</h3>
                        <p class="card-text">Acrylic LED Sign Board is a visually appealing signage solution made from durable acrylic material, illuminated with LED lights. These are one of the most used signage boards for restaurants and cafes, retail stores, event exhibitions, corporate offices, hotel resorts, shopping malls, and outdoor advertising. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage4.webp')}}" class="why-card-img-top" alt="Digital LED Display Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital LED Display Boards</h3>
                        <p class="card-text">Digital LED Display Boards use LED technology to display dynamic content, including text, images, and videos. Any type of retail store or outlet can use it to promote their offer or newly launched product with interactive digital LED screens. It can create an impressive customer experience and attract foot traffic. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                        alt="Digital Backlit Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Backlit Boards</h3>
                        <p class="card-text">LED Backlit Boards are illuminated signboards where LED lights are placed behind the display surface, creating a glowing effect. Digital backlit boards are the perfect choice for making brand names unforgettable. By placing them in strategic spots and striking design, backlit signs can establish a strong brand presence.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                        alt="LED Reverse Light Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Reverse Light Sign</h3>
                        <p class="card-text">LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo or glow effect around the letters. LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands out, day or night.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                        alt="LED Message Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Message Boards</h3>
                        <p class="card-text">LED Message Boards are digital display boards that use LED technology to showcase customizable text and messages, ideal for real-time updates, advertisements, and information display. If you're looking for captivating message boards that can easily communicate with your customers or visitors, LED message boards are the best option. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                        alt="Glowing Light Sign Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Glowing Light Sign Boards</h3>
                        <p class="card-text">Glowing Light Sign Boards are illuminated signage solutions that use LED or neon lights to create a vibrant, eye-catching glow. Glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces.</p>
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
                                <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                                    alt="Acrylic LED Sign Board">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Acrylic LED Sign Board</h3>
                                    <p class="card-text">Acrylic LED Sign Board is a visually appealing signage solution made from durable acrylic material, illuminated with LED lights. These are one of the most used signage boards for restaurants and cafes, retail stores, event exhibitions, corporate offices, hotel resorts, shopping malls, and outdoor advertising. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage4.webp')}}" class="why-card-img-top" alt="Digital LED Display Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital LED Display Boards</h3>
                                    <p class="card-text">Digital LED Display Boards use LED technology to display dynamic content, including text, images, and videos. Any type of retail store or outlet can use it to promote their offer or newly launched product with interactive digital LED screens. It can create an impressive customer experience and attract foot traffic.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                                    alt="Digital Backlit Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Backlit Boards</h3>
                                    <p class="card-text">LED Backlit Boards are illuminated signboards where LED lights are placed behind the display surface, creating a glowing effect. Digital backlit boards are the perfect choice for making brand names unforgettable. By placing them in strategic spots and striking design, backlit signs can establish a strong brand presence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                                    alt="LED Reverse Light Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Reverse Light Sign</h3>
                                    <p class="card-text">LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo or glow effect around the letters. LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands out, day or night.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                                    alt="LED Message Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Message Boards</h3>
                                    <p class="card-text">LED Message Boards are digital display boards that use LED technology to showcase customizable text and messages, ideal for real-time updates, advertisements, and information display. If you're looking for captivating message boards that can easily communicate with your customers or visitors, LED message boards are the best option. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                                    alt="Glowing Light Sign Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Glowing Light Sign Boards</h3>
                                    <p class="card-text">Glowing Light Sign Boards are illuminated signage solutions that use LED or neon lights to create a vibrant, eye-catching glow. Glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
                <button id="prevButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>

<section class="container py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for LED Sign Boards</h2>
            <p class="card-text testimonial-card-text">Because we are the top-tier LED signage manufacturers backed with 10+ years of expertise. Whether it is a<br> glowing LED sign board or acrylic LED signs, each sign board offers exceptional performance and designed <br>to reflect your brand identity.</p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage9.webp')}}" alt="Quality Assurance" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Quality Assurance</h5>
                            <p class="text-content">Quality assurance is the base of Brand Signage. Our signage board goes through various technical tests to ensure high standard quality and durability. It will go on for a long time as you invest in a permanent product. We are committed to giving excellent LED signage boards that elevate your brand image.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage10.webp')}}" alt="Customization Options" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Customization Options</h5>
                            <p class="text-content">By understanding your brand, you will get customization options that will meet your brand identity. From font choice to acrylic led sign board design, and lighting effects, our team will discuss with you and give multiple options that will suit your brand identity.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage11.webp')}}" alt="Customer Satisfaction"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Customer Satisfaction</h5>
                            <p class="text-content">We always prioritize our customer satisfaction.  From primary consultation to LED signage installation, you will get end-to-end support. Our passionate team ensures a flawless experience. We are always available for assistance, maintenance, and guidance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage12.webp')}}" alt="Future Innovations" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Future Innovations</h5>
                            <p class="text-content">We are ready to push ourselves to bring innovations that match your preferences. In the constantly evolving market, we leverage LED signage technology and provide top-notch solutions that gear up your brand presence.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Benefits of LED Sign Boards</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signage13.webp')}}" alt="LED Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    <b>Eye-Catching Designs -</b> LED signage boards use dynamic digital screens and make your brand stand out.</p>
                <p class="brand-description">
                    <b>Powerful Tool for Advertising -</b> LED signboards offer customized content and illuminated options for attracting customers and boosting visibility.</p>
                <p class="brand-description">
                    <b>Long-Lasting Durability -</b> These signages are designed with energy-efficient technology to ensure low electricity consumption and extended lifespan. 
                </p>
                <p class="brand-description">
                    <b>Installation & Maintenance -</b> Other than traditional sign boards, it does not require upkeep. LED signage boards are lightweight and easy-to-install solutions. 
                </p>    
                <p class="brand-description">
                As a premier LED signage manufacturer company, we stay updated with industry standards. We have a team of experienced designers and a management unit to maintain 
                operations. Being trusted by 100+ businesses, we provide the best signage design and manufacturing services all over India. We are also a leading manufacturer of 
                digital signage working with top companies. 
                </p>
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
                        <p class="card-text testimonial-card-text">The LED light signage board meets my expectations. Their customer service suggestions help us to get the best light signage board. I ordered steel letters and neon sign boards that are perfect for my store. Highly recommend it.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage14.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Meenal Jain</div>
                                <div class="client-role">Beauty Product Store Owner</div>
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
                        <p class="card-text testimonial-card-text">I loved how they understood my brand and crafted the acrylic signage to match my brand perfectly. Great service too!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage15.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Rajesh Iyer</div>
                                <div class="client-role">Bookstore and Stationery Shop Owner</div>
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
                        <p class="card-text testimonial-card-text">After installing their digital led sign board, our store's foot traffic has increased. It's a real head-turner, especially at night. Fantastic product!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage16.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Shivani Desai</div>
                                <div class="client-role">Home Decor Store Owner</div>
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
                        <p class="card-text testimonial-card-text">The signage board is energy-efficient and built to last. Its bright, and clear edge made a significant difference in our brand visibility.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage17.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Amitabh Patel</div>
                                <div class="client-role">Organic Grocery Store Owner</div>
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
                        <p class="card-text testimonial-card-text">I ordered a glowing sign board for my retail store, the team was attentive, and the results were outstanding! From design to delivery, the process was smooth and hassle-free. Loved it!</p> <br>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage18.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Farhan Qureshi</div>
                                <div class="client-role">Car Rental Service Owner</div>
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
                                    <p class="card-text testimonial-card-text">The LED light signage board meets my expectations. Their customer service suggestions help us to get the best light signage board. I ordered steel letters and neon sign boards that are perfect for my store. Highly recommend it.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage14.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Meenal Jain</div>
                                            <div class="client-role">Beauty Product Store Owner</div>
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
                                    <p class="card-text testimonial-card-text">I loved how they understood my brand and crafted the acrylic signage to match my brand perfectly. Great service too!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage15.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh Iyer</div>
                                            <div class="client-role">Bookstore and Stationery Shop Owner</div>
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
                                    <p class="card-text testimonial-card-text">After installing their digital led sign board, our store's foot traffic has increased. It's a real head-turner, especially at night. Fantastic product!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage16.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Shivani Desai</div>
                                            <div class="client-role">Home Decor Store Owner</div>
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
                                    <p class="card-text testimonial-card-text">After installing their digital led sign board, our store's foot traffic has increased. It's a real head-turner, especially at night. Fantastic product!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage16.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Shivani Desai</div>
                                            <div class="client-role">Home Decor Store Owner</div>
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
                                    <p class="card-text testimonial-card-text">The signage board is energy-efficient and built to last. Its bright, and clear edge made a significant difference in our brand visibility.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage17.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Amitabh Patel</div>
                                            <div class="client-role">Organic Grocery Store Owner</div>
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
                                    <p class="card-text testimonial-card-text">I ordered a glowing sign board for my retail store, the team was attentive, and the results were outstanding! From design to delivery, the process was smooth and hassle-free. Loved it!</p> <br>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage18.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Farhan Qureshi</div>
                                            <div class="client-role">Car Rental Service Owner</div>
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
                What are the advantages of using LED light sign boards? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                    <P>There are a few advantages of using LED light sign boards:</P>
                    <ul>
                        <ul>
                            <li>Low Energy Consumer: LED sign boards consume a low amount of electricity.</li>
                            <li>Weatherproof: it is weatherproof and safe to place in an outdoor palace.</li>
                            <li>Low Maintenance: They are easy to maintain and more effective to place in any location.</li>
                            <li>Customizable: You can easily personalize your light sign board according to your brand image.</li>
                        </ul>
                    </ul>     
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can LED sign boards be customized for my business?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can easily customize your brand’s LED sign boards. You can choose color, design, style, font, and lighting effects that match your brand identity effortlessly.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I Use LED Light Sign Board for Outdoor Use?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can use LED light sign boards for outdoor places. They are weatherproof, long-lasting, which offer superior visibility in a variety of outdoor settings. They are ideal for both during the day and at night for boosting brand visibility because of their brilliant illumination.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                LED sign boards compared to traditional signage- which one is better in energy-efficient?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>It is one of the most significant questions that you should know when you choose LED sign boards. In the matter of energy saving, LED sign boards are always top of the list. You can save electricity up to 80% compared to neon signage. They are an environmentally and cost effective option for all types of enterprises. Its lower maintenance and long-lasting lifespan make it suitable for any setting.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do LED light sign boards go for a long period?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, it can go on for a long period. However, there are a few factors that play a significant role in the lifespan of LED light sign boards. They are- manufacturer of LED light signage boards and the material that is used. It can be said, the LED light sign board’s lifespan can range from 4,000 to 13,000 hours. However, the industry standard is 10,000 hours which is more than 1 year.</p>
            </div>
        </div>

    </div>
</section>

    @endsection