@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/digital-sign1.webp')}}" alt="Digital Signages">
                <div class="carousel-caption-custom">
                    <h1>Leading Digital Signage Manufacturer Company in India</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>

        </div>
    </div>
</section>



<section>
    <div class="container py-5">
        <h2 class="hero-title">Uplift Your Brand Image with <br> Digital Signage Boards</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/digital-sign2.webp')}}" alt="Digital Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Digital signages have emerged as essential tools for enhancing visual communication across
                    various industries. These advanced solutions serve sectors such as corporate offices, retail,
                    hospitality, food services, banking, and education, providing dynamic and engaging ways to
                    convey information. As leading digital signage manufacturers, we design digital display boards for 
                    renowned brands to display announcements and performance metrics, helping foster a collaborative 
                    and engaging environment.
                </p>
                <p class="brand-description">
                    For the food industry, digital menu boards allow for quick updates that can drive impulse
                    purchases. In banking, we will streamline customer interactions by providing essential
                    information like wait times and service options. Educational institutions utilize digital
                    signage to keep students and staff informed about schedules, events, and important
                    announcements.
                </p>
                <p class="brand-description">
                    Brand Signages is one of the top 10 digital signage manufacturers in India. We offer state-of-the-art tech integration, better  
                    visibility, dynamic content, and real-time updates, making digital signages more effective 
                    than static signs. As a reputable digital signage company, we help businesses 
                    enhance brand presence, boost customer engagement, and drive foot traffic.
                </p>

            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Commercial Grade Digital Signage Display <br> Manufacturer in Bangalore</h2>
            <p class="card-text text-center">Brand Signages stands as a leader in digital signage manufacturing, offering high-quality, 
                commercial grade digital signage solutions. Our <br>custom solutions enhance visibility and engagement, making them perfect for 
                advertising, sharing information, and boosting customer interaction.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign3.webp')}}" class="why-card-img-top" alt="Commercial Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Commercial Displays</h3>
                        <p class="card-text">We design versatile digital signage dispalys to be used in retail environments,
                            corporate settings, and educational institutions. They deliver stunning visuals and can
                            be customized to fit any branding requirement.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign4.webp')}}" class="why-card-img-top" alt="Digital Standee">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital Standee</h3>
                        <p class="card-text">Digital standees assist businesses in capturing attention at events,
                            trade shows, or retail spaces. Their portability and ease of use make them perfect for
                            showcasing promotions or important information.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign5.webp')}}" class="why-card-img-top" alt="Flat Panel Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Flat Panel Displays</h3>
                        <p class="card-text">Flat panel displays offer an innovative way to display high-resolution
                            images and videos. These are flexible, and you can customize them for indoor and outdoor
                            use.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign6.webp')}}" class="why-card-img-top" alt="Outdoor Display Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Outdoor Display Signage</h3>
                        <p class="card-text">Outdoor digital signage is prepared to withstand environmental
                            challenges while delivering vibrant content that remains visible even in direct
                            sunlight. This makes them essential for outdoor advertising campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign7.jpg')}}" class="why-card-img-top" alt="Display Video Wall">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Display Video Wall</h3>
                        <p class="card-text">Display Video Walls create immersive experiences by combining multiple
                            screens into a large display. They are perfect for high-traffic areas where capturing
                            audience attention is needed for brands to make a distinct impression.</p>
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
                                <img src="{{asset('frontend/Images/digital-sign3.webp')}}" class="why-card-img-top"
                                    alt="Commercial Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Commercial Displays</h3>
                                    <p class="card-text">We design versatile digital signage displays to be used in retail
                                        environments, corporate settings, and educational institutions. They deliver
                                        stunning visuals and can be customized to fit any branding requirement. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign4.webp')}}" class="why-card-img-top"
                                    alt="Digital Standee">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital Standee</h3>
                                    <p class="card-text">Digital standees assist businesses in capturing attention
                                        at events, trade shows, or retail spaces. Their portability and ease of use
                                        make them perfect for showcasing promotions or important information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign5.webp')}}" class="why-card-img-top"
                                    alt="Flat Panel Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flat Panel Displays</h3>
                                    <p class="card-text">Flat panel displays offer an innovative way to display
                                        high-resolution images and videos. These are flexible, and you can customize
                                        them for indoor and outdoor use.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign5.webp')}}" class="why-card-img-top"
                                    alt="Flat Panel Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flat Panel Displays</h3>
                                    <p class="card-text">Flat panel displays offer an innovative way to display
                                        high-resolution images and videos. These are flexible, and you can customize
                                        them for indoor and outdoor use.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign6.webp')}}" class="why-card-img-top"
                                    alt="Outdoor Display Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Outdoor Display Signage</h3>
                                    <p class="card-text">Outdoor display signage is prepared to withstand
                                        environmental challenges while delivering vibrant content that remains
                                        visible even in direct sunlight. This makes them essential for outdoor
                                        advertising campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign7.jpg')}}" class="why-card-img-top"
                                    alt="Display Video Wall">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Display Video Wall</h3>
                                    <p class="card-text">Display Video Walls create immersive experiences by
                                        combining multiple screens into a large display. They are perfect for
                                        high-traffic areas where capturing audience attention is needed for brands
                                        to make a distinct impression.</p>
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


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Digital Signages</h2>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign8.webp')}}" alt="On-time installation" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">On-time installation</h5>
                            <p class="text-content">Our team ensures on-time installation of all digital signage displays, 
                                minimizing downtime and allowing you to start reaping the benefits. We coordinate every aspect 
                                of the installation process, thus ensuring a seamless transition from planning to execution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign9.webp')}}" alt="Industry Grade Products" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Industry Grade Products</h5>
                            <p class="text-content">Our industry-grade digital signs are built to last and perform
                                under various conditions. We source high-quality materials and leverage the latest
                                technology to ensure our solutions are reliable and effective.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign10.webp')}}" alt="Experienced professionals"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Experienced professionals</h5>
                            <p class="text-content">We are among the best digital signage companies with expertise in
                                digital signage technology. Our innovative solutions are designed to deliver high-impact, 
                                dynamic content that drives customer engagement and enhances brand visibility.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign11.webp')}}" alt="Happy Customer Base" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Happy Customer Base</h5>
                            <p class="text-content">Our happy customer base is a testament to our focus on providing tailored customer 
                                experience and meeting their digital signage needs. Being among the best digital signage companies in india, 
                                we prioritize understanding your specific requirements and delivering signage solutions that exceed expectations. 
                                We have received praise for our responsiveness, professionalism, and the impact they have on their communication strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="process-section">
    <div class="container">
        <h2 class="process-title">About Our Digital Signage Boards</h2>
        <div class="row">

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-design">
                        <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="Quality LED Sign Boards">
                    </div>
                    <h3>Smart Digital Displays</h3>
                    <p>No External Media Player: Our displays work seamlessly without additional hardware
                       Universal Compatibility: Supports Android, LG webOS, Samsung Tizen, Windows 
                       Content Scheduling: Quickly add playlists, media files, or promotional campaigns</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-deliver">
                        <img src="{{asset('frontend/Images/on-time.webp')}}" alt="Comprehensive CMS">
                    </div>
                    <h3>Specifications</h3>
                    <p>Minimum Order Quantity: 1 Unit
                    Display Type: LED / OLED / E-Ink (Customizable)
                    Body Material: Aluminum, acrylic, Polycarbonate, Glass
                    Lighting Type: LED / Backlit LCD for superior brightness
                    Available Sizes: 15-inch, 18-inch, 24-inch, 32-inch, 55-inch
                    Shape Options: Rectangle, Square, Curved, Ultra-Wide
                    Viewing Angle: 178° - 270° for maximum visibility</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/transaction.webp')}}" alt="Support service">
                    </div>
                    <h3>Support service</h3>
                    <p>We deliver end-to-end signage solutions from design to installation ensuring seamless deployment, 
                        minimal downtime, and long-term reliability. Our commitment to customer satisfaction has helped
                        us build a loyal customer base that trusts our expertise and relies on us for their digital
                        signage needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class=" py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customized Solutions for Every <br> Industry</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-corporate-office.webp')}}" class="why-card-img-top" alt="Corporate Office">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Office</h3>
                        <p class="card-text">We are considered among digital signage comapnies in India because our
                            products enhance internal communication and streamline information sharing. Companies
                            can use them to display announcements showcasing performance metrics.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-retail.webp')}}" class="why-card-img-top" alt="Retail">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Retail</h3>
                        <p class="card-text">We provide vibrant digital display boards that attract customers and
                            promote products. Our solutions enable retailers to showcase promotions, highlight new
                            arrivals, and create an engaging shopping experience that drives sales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-hospitality.webp')}}" class="why-card-img-top" alt="Hospitality">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Hospitality</h3>
                        <p class="card-text">Our interactive digital signs enhance guest experiences for visitors
                            staying in hotels and motels. These boards can help people check in and promote
                            facilities and events, thus helping brands effectively communicate with guests.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=" py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-food.webp')}}" class="why-card-img-top" alt="Food">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Food</h3>
                        <p class="card-text">We design digital menu boards to be placed in restaurants and cades to
                            boost customer engagement. These boards can show updated prices dynamically, thus giving
                            the latest information to customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-banking.webp')}}" class="why-card-img-top" alt="Banking">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Banking</h3>
                        <p class="card-text">In banking, digital signage can streamline customer interactions by
                            displaying wait times, service information, and promotional offers. Our solutions help
                            banks improve customer service while maintaining a professional appearance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-education.webp')}}" class="why-card-img-top" alt="Education">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Education</h3>
                        <p class="card-text">As a digital signage company, our products enhance communication among
                            students, staff, and visitors. You can use them to display schedules and promote events
                            to create an informed campus environment.</p>
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
                        <p class="card-text testimonial-card-text">Introducing digital signage into our office was a
                            turning point. The modern displays wow our clients and keep the team motivated. Updating
                            messages in real time is so convenient. It’s like adding life to the workspace!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anita-sharma.webp')}}" alt="Anita Sharma" class="client-img">
                            <div>
                                <div class="client-name">Anita Sharma</div>
                                <div class="client-role">Operations Manager</div>
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
                        <p class="card-text testimonial-card-text">Our manufacturing units are spread across India,
                            and keeping the team aligned was a challenge. Digital signage simplifies communication
                            by providing updates, safety guidelines, and performance metrics at a glance</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/rajiv-menon.webp')}}" alt="Rajiv Menon" class="client-img">
                            <div>
                                <div class="client-name">Rajiv Menon</div>
                                <div class="client-role">CEO, Bharat Logistics</div>
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
                        <p class="card-text testimonial-card-text">We added digital signage at our jewelry
                            showrooms, and the response has been fantastic. Customers appreciate the interactive
                            features and beautiful product showcases. It has elevated their shopping experience
                            significantly</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/priya-desai.webp')}}" alt="Priya Desai" class="client-img">
                            <div>
                                <div class="client-name">Priya Desai</div>
                                <div class="client-role">Marketing Head, Shree Gold & Diamonds</div>
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
                        <p class="card-text testimonial-card-text">Running a chain of cafés, and updating menus and
                            promos used to be a hassle. Digital signage not only made it easy but also helped us
                            increase sales by 30%. It’s stylish, practical, and great for business!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/arjun-khanna.webp')}}" alt="Arjun Khanna" class="client-img">
                            <div>
                                <div class="client-name">Arjun Khanna</div>
                                <div class="client-role">Owner, Brew Bliss Café</div>
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
                        <p class="card-text testimonial-card-text">The digital signage system at our co-working
                            space has taken professionalism to the next level. Clients love it, and our staff finds
                            it incredibly easy to manage. It's been an amazing addition to our brand</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/sneha-reddy.webp')}}" alt="Sneha Reddy" class="client-img">
                            <div>
                                <div class="client-name">Sneha Reddy</div>
                                <div class="client-role">HR Director, Nexus Workspaces</div>
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
                                    <p class="card-text testimonial-card-text">Introducing digital signage into our
                                        office was a turning point. The modern displays wow our clients and keep the
                                        team motivated. Updating messages in real time is so convenient. It’s like
                                        adding life to the workspace!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anita-sharma.webp')}}" alt="Anita Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Anita Sharma</div>
                                            <div class="client-role">Operations Manager</div>
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
                                    <p class="card-text testimonial-card-text">Our manufacturing units are spread
                                        across India, and keeping the team aligned was a challenge. Digital signage
                                        simplifies communication by providing updates, safety guidelines, and
                                        performance metrics at a glance</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rajiv-menon.webp')}}" alt="Rajiv Menon" class="client-img">
                                        <div>
                                            <div class="client-name">Rajiv Menon</div>
                                            <div class="client-role">CEO, Bharat Logistics</div>
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
                                    <p class="card-text testimonial-card-text">We added digital signage at our
                                        jewelry showrooms, and the response has been fantastic. Customers appreciate
                                        the interactive features and beautiful product showcases. It has elevated
                                        their shopping experience significantly</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya-desai.webp')}}" alt="Priya Desai" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Desai</div>
                                            <div class="client-role">Marketing Head, Shree Gold & Diamonds</div>
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
                                    <p class="card-text testimonial-card-text">We added digital signage at our
                                        jewelry showrooms, and the response has been fantastic. Customers appreciate
                                        the interactive features and beautiful product showcases. It has elevated
                                        their shopping experience significantly</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya-desai.webp')}}" alt="Priya Desai" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Desai</div>
                                            <div class="client-role">Marketing Head, Shree Gold & Diamonds</div>
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
                                    <p class="card-text testimonial-card-text">Running a chain of cafés, and
                                        updating menus and promos used to be a hassle. Digital signage not only made
                                        it easy but also helped us increase sales by 30%. It’s stylish, practical,
                                        and great for business!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/arjun-khanna.webp')}}" alt="Arjun Khanna" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun Khanna</div>
                                            <div class="client-role">Owner, Brew Bliss Café</div>
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
                                    <p class="card-text testimonial-card-text">The digital signage system at our
                                        co-working space has taken professionalism to the next level. Clients love
                                        it, and our staff finds it incredibly easy to manage. It's been an amazing
                                        addition to our brand</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/sneha-reddy.webp')}}" alt="Sneha Reddy" class="client-img">
                                        <div>
                                            <div class="client-name">Sneha Reddy</div>
                                            <div class="client-role">HR Director, Nexus Workspaces</div>
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
                What services does a digital signage company offer?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Digital signage companies in India offer comprehensive solutions including hardware (displays, screens),
                    software (content management), custom content creation, installation, technical support,
                    strategy consulting, and industry-specific digital communication solutions tailored to enhance
                    brand visibility and audience engagement across multiple platforms and environments</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How does digital signage enhance customer engagement?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Digital signage boosts customer engagement by delivering dynamic, interactive visual content that
                    captures attention, personalizes messaging, provides real-time information, and creates
                    immersive brand experiences across multiple touchpoints, transforming traditional communication
                    into compelling, memorable interactions.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can digital signage be customized for specific business needs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A digital sign company offers extensive customization across multiple dimensions:</p>
                <ul>
                    <P>1. Industry-Specific Solutions:</P>
                    <ul>
                        <ul>
                            <li>Retail: Product showcases, promotions, interactive catalogs</li>
                            <li>Healthcare: Patient information, wayfinding, queue management</li>
                            <li>Corporate: Internal communications, performance dashboards</li>
                            <li>Education: Campus announcements, event schedules</li>
                            <li>Hospitality: Menu boards, guest information, event details</li>
                        </ul>
                    </ul>
                    <p>2. Content Customization:</p>
                    <ul>
                        <ul>
                            <li>Brand-aligned design aesthetics</li>
                            <li>Dynamic content scheduling</li>
                            <li>Real-time updates</li>
                            <li>Multilingual support</li>
                            <li>Personalized messaging</li>
                            <li>Interactive elements</li>
                        </ul>
                    </ul>
                    <p>3. Technical Customization:</p>
                    <ul>
                        <ul>
                            <li>Screen size and configuration</li>
                            <li>Mounting options</li>
                            <li>Integration with existing systems</li>
                            <li>Cloud-based or local content management</li>
                            <li>Mobile device compatibility</li>
                            <li>Custom hardware configurations</li>
                        </ul>
                    </ul>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What types of content can be displayed on digital signage screens?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Digital signage display screens can display a wide variety of content, enhancing engagement and
                    communication. This includes text-based content, visual content like images and infographics,
                    and multimedia content—including videos, slideshows, and live feeds—provides dynamic
                    storytelling opportunities that engage viewers on multiple sensory levels.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How easy is it to update and manage content on digital signage systems?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Users can remotely update displays in real time, schedule content, and access templates for
                    consistency. Analytics tools also provide insights into performance, enabling businesses to
                    optimize messaging and enhance audience engagement efficiently.</p>

            </div>
        </div>
    </div>
</section>
@endsection