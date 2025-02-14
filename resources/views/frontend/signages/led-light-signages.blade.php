@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/led-signage1.webp')}}" alt="LED Signage">
                <div class="carousel-caption-custom">
                    <h1>LED Light Signage Boards Online</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Custom LED Sign Boards for a Lasting Impact</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signage2.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    LED sign boards are a modern signage solution that enhances brand visibility with eye-catching and energy-efficient lighting. Best for both indoor and outdoor usage, LED sign boards offer durability and customization making them a preferred choice for businesses.</p>
                    <p class="brand-description">
                        Brand Signages is a leading LED sign board manufacturer in Bangalore & India, combining quality and innovation to meet your signage needs. From amazing LED reverse light signs, and digital LED to acrylic LED signages we offer a range of solutions. 
                    </p>
                    <p class="brand-description">Our expert LED signage makers have worked with different types of businesses or brands. Our product range includes acrylic LED sign boards, LED message boards, digital backlit boards, and more. Our passion and dedication drive us to create diverse signage styles. We are ready to push boundaries to showcase your brand with a brand-new LED sign board. </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of LED Signage boards that we offer</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                        alt="Acrylic LED Sign Board">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Acrylic LED Sign Board</h3>
                        <p class="card-text">Acrylic LED Sign Boards have versatile uses to enhance brand impact and visibility. They are one of the most used LED signage boards for restaurants and cafes, retail stores, event exhibitions, corporate offices, hotel resorts, and shopping malls' outdoor advertising. Our Acrylic LED sign board can create a lasting impression and a strong identity for your business.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage4.webp')}}" class="why-card-img-top" alt="Digital LED Display Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital LED Display Boards</h3>
                        <p class="card-text">Turn your display board to Digital LED display boards. It is an ideal choice for advertising. Any type of retail store or outlet can use it to promote their offer or newly launched product. It can create an impressive customer experience that helps to get potential customers. We provide high-resolution Digital LED sign boards that attract your new customers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                        alt="Digital Backlit Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital Backlit Boards</h3>
                        <p class="card-text">It is another famous light box used in the educational, health, and retail sectors. Digital backlit boards are the perfect choice for making brand names unforgettable. They ensure high engagement in the crowd. By placing in strategic spots and using striking design, backlit signs can establish a strong brand presence.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                        alt="LED Reverse Light Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Reverse Light Sign</h3>
                        <p class="card-text">Our quality LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. It can capture your visitors or customer’s attention instantly. Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands out, day or night.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                        alt="LED Message Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Message Boards</h3>
                        <p class="card-text">Boost your brand communication with our LED message boards. If you're looking for captivating message boards that can easily communicate with your customers or visitors, LED message boards are the best option. You can use it for promotions or to convey crucial information. Choose from our dynamic range of LED message boards to light up your brand message.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                        alt="Glowing Light Sign Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Glowing Light Sign Boards</h3>
                        <p class="card-text">The glowing sign board is mostly used as a sign to enhance brand visibility. Our glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces. Choose our customizable designs that match your demand, maintain your brand aesthetics, and elevate your business presence effectively.</p>
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
                                    <p class="card-text">Acrylic LED Sign Boards have versatile uses to enhance brand impact and visibility. They are one of the most used LED signage boards for restaurants and cafes, retail stores, event exhibitions, corporate offices, hotel resorts, and shopping malls' outdoor advertising. Our Acrylic LED sign board can create a lasting impression and a strong identity for your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage4.webp')}}" class="why-card-img-top" alt="Digital LED Display Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital LED Display Boards</h3>
                                    <p class="card-text">Turn your display board to Digital LED display boards. It is an ideal choice for advertising. Any type of retail store or outlet can use it to promote their offer or newly launched product. It can create an impressive customer experience that helps to get potential customers. We provide high-resolution Digital LED sign boards that attract your new customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                                    alt="Digital Backlit Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital Backlit Boards</h3>
                                    <p class="card-text">It is another famous light box used in the educational, health, and retail sectors. Digital backlit boards are the perfect choice for making brand names unforgettable. They ensure high engagement in the crowd. By placing in strategic spots and using striking design, backlit signs can establish a strong brand presence.</p>
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
                                    <p class="card-text">Our quality LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. It can capture your visitors or customer’s attention instantly. Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands out, day or night.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                                    alt="LED Message Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Message Boards</h3>
                                    <p class="card-text">Boost your brand communication with our LED message boards. If you're looking for captivating message boards that can easily communicate with your customers or visitors, LED message boards are the best option. You can use it for promotions or to convey crucial information. Choose from our dynamic range of LED message boards to light up your brand message.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                                    alt="Glowing Light Sign Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Glowing Light Sign Boards</h3>
                                    <p class="card-text">The glowing sign board is mostly used as a sign to enhance brand visibility. Our glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces. Choose our customizable designs that match your demand, maintain your brand aesthetics, and elevate your business presence effectively.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Our LED Light Sign Board</h2>
            <p class="card-text testimonial-card-text">Why did you choose our LED light sign board? You are investing in the dedication that gives you the best quality advertising display and <br>
                 exceptional customer service. Whether it is a glowing sign board or letter board, each light sign board will offer exceptional performance <br>
                  and the best solution for your brand.</p>
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
                            <p class="text-content">We always prioritize our customer satisfaction.  From primary consultation to light board installation, you will get end-to-end support. Our passionate team ensures a flawless experience. We are always available for assistance, maintenance, and guidance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage12.webp')}}" alt="Future Innovations" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Future Innovations</h5>
                            <p class="text-content">We are ready to push ourselves to bring innovations that match your preferences. In the constantly evolving market, it is important to embrace new LED signage technology and provide top-notch solutions that gear up your brand presence.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Led Light Name Boards for Shop</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signage13.webp')}}" alt="LED Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    LED light name boards ensure your brand stands out. These are a significant branding tool for any type of shop. These boards ensure your shop stands out, gaining attention with their glow sign and attractive designs. LED boards enhance your store’s aesthetic appeal and professional image.</p>
                <p class="brand-description">
                    LED signage boards are made with energy-efficient materials which you can alter as per your preference.  It can go for a long time and  save your electricity bills. Customize your LED signage boards in different  typefaces, logos and colors that will reflect the style of your store. LED boards efficiently convey your brand's message, whether it's through a bright, unique design or a clean, contemporary appearance.</p>
                <p class="brand-description">
                    These weather-resistant, low-maintenance boards are perfect for malls, storefronts, or independent stores. To increase foot traffic, improve your shop's visibility, and make a lasting impression on potential consumers, get an LED light name board. Shine brightly and get attention with ease!
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