@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/door-signage1.webp')}}" alt="Door Signage">
                <div class="carousel-caption-custom">
                    <h1>Door Signs: Making a Lasting Impression</h1>
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
        <h2 class="hero-title">Elevate Your Home Entrance with <br> Elegance</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/door-signage2.webp')}}" alt="Door Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Make your home entrance look more inviting with a stylish, elegant door signboard. The door of your home is the element responsible for creating a first impression upon people’s minds, whether first-time visitors or frequently-coming friends and relatives. Placing thoughtful, beautifully crafted signage on the door adorns your home exquisitely. Signboards on the door with names mentioned or art crafted brighten up your entrance space at home.
                </p>
                <p class="brand-description">
                    Nowadays, diverse entrance and exit signs made by professional artisans are available online. Brand Signage, being a trusted signage manufacturing brand, offers durable, stylish, and sophisticated signage for doors with a personalised touch for all. Homeowners, realtors, residential construction workers, and others- all are welcome to visit the Brand Signage website and pick up the preferred door signage that suits your needs the most.
                </p>
                <p class="brand-description">
                    Ranging from simple, rustic, and Mediterranean to modern, aesthetic, sleek, and sophisticated - all types of door signs are offered at Brand Signage. With a team of highly-skilled craftsmen, the company offers a vast range of adorable and customisation signs for your doors. Known for style and durability, our door signs are loved by homeowners and business owners worldwide.
                </p>    
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Do You Need a Door Sign?</h2>
            <p class="card-text text-center">A door sign is a signboard showcasing pictorial, lettered, or numbered matter, that is placed on a door that is visible from the exterior <br> of the premise. It can be made of wood, fiber, aluminum, PVC board, etc. Reasons why one should opt for a door sign are as follows:</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/door-signage3.webp')}}" class="why-card-img-top"
                        alt="Holds a Welcoming or Warning Message">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Holds a Welcoming or Warning Message</h3>
                        <p class="card-text">A door sign is useful for welcoming or restricting visitors at a certain place. For example, a “Restricted Space” signboard in an office or factory prevents people from having random access. On the other hand, the entrance doors of tourist spots often showcase door signs like “Welcome to the Wonderland” and invite visitors with warm gestures.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/door-signage4.webp')}}" class="why-card-img-top"
                        alt="Makes Your Space Look More Aesthetic">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Makes Your Space Look More Aesthetic</h3>
                        <p class="card-text">Whether it is your home, office, resort, or other spaces, creative and unique door signs can make your space look elegant, exhibiting your personality and style. They enhance the charm of the place, making it more appealing.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/door-signage5.webp')}}" class="why-card-img-top"
                            alt="Guides people about what is behind the door">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Guides people about what is behind the door</h3>
                            <p class="card-text">Door signs are not only to enhance the beauty of the home or office space. It has crucial functionalities as well like guiding people about what’s inside. Suppose it is a restroom, another private place, a hallway, or a seminar room, that can be easily mentioned using a clear and concise door sign.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/door-signage6.webp')}}" class="why-card-img-top"
                        alt="Door signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Door signage</h3>
                        <p class="card-text">Is an elegant and useful element to deck up your personal or professional space and make it easy to navigate.</p>
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
                                <img src="{{asset('frontend/Images/door-signage3.webp')}}" class="why-card-img-top"
                                    alt="Holds a Welcoming or Warning Message">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Holds a Welcoming or Warning Message</h3>
                                    <p class="card-text">A door sign is useful for welcoming or restricting visitors at a certain place. For example, a “Restricted Space” signboard in an office or factory prevents people from having random access. On the other hand, the entrance doors of tourist spots often showcase door signs like “Welcome to the Wonderland” and invite visitors with warm gestures.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage4.webp')}}" class="why-card-img-top"
                                    alt="Makes Your Space Look More Aesthetic">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Makes Your Space Look More Aesthetic</h3>
                                    <p class="card-text">Whether it is your home, office, resort, or other spaces, creative and unique door signs can make your space look elegant, exhibiting your personality and style. They enhance the charm of the place, making it more appealing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage5.webp')}}" class="why-card-img-top"
                                    alt="Guides people about what is behind the door">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Guides people about what is behind the door</h3>
                                    <p class="card-text">Door signs are not only to enhance the beauty of the home or office space. It has crucial functionalities as well like guiding people about what’s inside. Suppose it is a restroom, another private place, a hallway, or a seminar room, that can be easily mentioned using a clear and concise door sign.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage4.webp')}}" class="why-card-img-top"
                                    alt="Makes Your Space Look More Aesthetic">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Makes Your Space Look More Aesthetic</h3>
                                    <p class="card-text">Whether it is your home, office, resort, or other spaces, creative and unique door signs can make your space look elegant, exhibiting your personality and style. They enhance the charm of the place, making it more appealing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage5.webp')}}" class="why-card-img-top"
                                    alt="Guides people about what is behind the door">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Guides people about what is behind the door</h3>
                                    <p class="card-text">Door signs are not only to enhance the beauty of the home or office space. It has crucial functionalities as well like guiding people about what’s inside. Suppose it is a restroom, another private place, a hallway, or a seminar room, that can be easily mentioned using a clear and concise door sign. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage6.webp')}}" class="why-card-img-top"
                                    alt="Door signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Door signage</h3>
                                    <p class="card-text">Is an elegant and useful element to deck up your personal or professional space and make it easy to navigate.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Types of Door Signs We Deliver</h2>
            <p class="card-text text-center">From indicating a specific room’s presence to giving a warning for entering a significant space, door signboards serve many purposes. <br> Some of the common types include:</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/door-signage7.webp')}}" alt="Name Plates" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Name Plates</h5>
                    <p class="text-content">It is mostly seen in front of a house door gate, on the office desk of notable dignitaries, etc. With them, identifying houses or treating official professionals properly becomes easy.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/door-signage8.webp')}}" alt="Warning Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Warning Signs</h5>
                            <p class="text-content">When there is danger inside, warning sign boards are hung to make people alert about the possible consequences of going inside. In the mining industry and many other fields, such signboards are quite common.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/door-signage9.webp')}}" alt="Instructions" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Instructions</h5>
                            <p class="text-content">A significant place like a reputed personality’s cabin, etc. is found with signboards mentioning instructions, hung in front of the main door of the space. Also, instruction boards are used to guide visitors in tourist spots.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/door-signage10.webp')}}" alt="Personalized Message" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Personalized Message</h5>
                            <p class="text-content">Sometimes, personalised messages are written on signboards and sent to specific people, as a part of various brands’ digital marketing campaigns.Whether it is a welcome sign for the front door or open closed sign for the door, Brand Signage is your ultimate destination for all types of door signs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/door-signage11.webp')}}" alt="Do Not Disturb" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Do Not Disturb</h5>
                            <p class="text-content">To maintain privacy or confidentiality in professional spaces, “Do Not Disturb boards” are often hung, mostly as temporary. It is typically hung on a door’s handle denoting that the people inside don’t want to be disturbed in any way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">The Perfect Materials to Match <br> Every Aesthetic</h2>
            <p class="card-text text-center">Nowadays, a wide range of materials are used to manufacture door signs. Among them, the most popular ones are:</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/door-signage17.webp')}}" class="why-card-img-top"
                        alt="Acrylic">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Acrylic</h3>
                        <p class="card-text">With a sleek and professional appearance, Acrylic signboards become a popular choice for many businesses. It helps to improve their brand impression making their products or services attractive to people. Thus, mostly used in attention-grabbing storefronts, directions in large facilities, etc. acrylic signs convey important information and work as an effective branding technique.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/door-signage18.webp')}}" class="why-card-img-top"
                        alt="Wood">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wood</h3>
                        <p class="card-text">A piece of wooden signboard adds a rustic look to the space wherever it is placed. For a simple yet elegant style, wooden signboards are often used in entrance and exit signs of large bungalows, house nameplates, and so on.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/door-signage12.webp')}}" class="why-card-img-top"
                            alt="Metal">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Metal</h3>
                            <p class="card-text">To ensure durability and sophistication at once, metal signboards hold a special position. Metals like aluminum, stainless steel, etc. create a glossy and fine look for the door signs. Directional signs, wayfinding signboards, brand information in a company, etc. can be presented well with stylish and impactful metal signboards.</p>
                        </div>
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
                                <img src="{{asset('frontend/Images/door-signage17.webp')}}" class="why-card-img-top"
                                    alt="Acrylic">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Acrylic</h3>
                                    <p class="card-text">With a sleek and professional appearance, Acrylic signboards become a popular choice for many businesses. It helps to improve their brand impression making their products or services attractive to people. Thus, mostly used in attention-grabbing storefronts, directions in large facilities, etc. acrylic signs convey important information and work as an effective branding technique.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage18.webp')}}" class="why-card-img-top"
                                    alt="Wood">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wood</h3>
                                    <p class="card-text">A piece of wooden signboard adds a rustic look to the space wherever it is placed. For a simple yet elegant style, wooden signboards are often used in entrance and exit signs of large bungalows, house nameplates, and so on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/door-signage12.webp')}}" class="why-card-img-top"
                                    alt="Metal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Metal</h3>
                                    <p class="card-text">To ensure durability and sophistication at once, metal signboards hold a special position. Metals like aluminum, stainless steel, etc. create a glossy and fine look for the door signs. Directional signs, wayfinding signboards, brand information in a company, etc. can be presented well with stylish and impactful metal signboards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Expertly Crafted Signs for Your Doors</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/door-signage13.webp')}}" alt="Door Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Doors take you to a space; sometimes a warm welcoming area like home, or sometimes, a professional world filled with passion and purpose. In this scenario, door signs work as a subtle symbol depicting the essence of what is behind it.
                    <br>
                    Well-crafted and unique door signs create lasting impressions while conveying the necessary information. Diverse types of door signs serve various purposes. For example, a sleek and modern acrylic sign is perfect for a corporate setting whereas rustic, wooden signage is ideal to enhance the warmth and charm of the ambience in a cafe.
                    <br>
                    Suitable signage becomes an integral part of the place’s overall aesthetics.  Personalisation makes it more special. Also, style and functionality are two crucial things to be taken good care of, while choosing door signage.
                    <br>
                    Hence, investing in a durable, stylish, and unique door signboard helps in many ways.
                    <br>
                    Whether it is your business space, home, or other setting, suitable door signage speaks volumes about the area. Brand Signage, as a leading signage company, understands it well and offers a wide range of door signboards made of various materials.
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
                        <p class="card-text testimonial-card-text">A trusted brand for door signage. I would love to recommend Brand Signage for high-end door signages</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/door-signage14.webp')}}" alt="Divya Reddy" class="client-img">
                            <div>
                                <div class="client-name">Divya Reddy</div>
                                <div class="client-role">Marketing Manager</div>
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
                        <p class="card-text testimonial-card-text">If you’re looking for stylish yet durable door signboards, look no further than Brand Signage. I recently bought nameplates for my office and they are wonderful.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/door-signage15.webp')}}" alt="Karan Singh" class="client-img">
                            <div>
                                <div class="client-name">Karan Singh</div>
                                <div class="client-role">Business Owner</div>
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
                        <p class="card-text testimonial-card-text">Appreciate the dedication and determination of Brand Signage to offer best-quality door signages</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/door-signage16.webp')}}" alt="Meera Iyer" class="client-img">
                            <div>
                                <div class="client-name">Meera Iyer</div>
                                <div class="client-role">Chartered Accountant</div>
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
                                    <p class="card-text testimonial-card-text">A trusted brand for door signage. I would love to recommend Brand Signage for high-end door signages</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/door-signage14.webp')}}" alt="Divya Reddy" class="client-img">
                                        <div>
                                            <div class="client-name">Divya Reddy</div>
                                            <div class="client-role">Marketing Manager</div>
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
                                    <p class="card-text testimonial-card-text">If you’re looking for stylish yet durable door signboards, look no further than Brand Signage. I recently bought nameplates for my office and they are wonderful.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/door-signage15.webp')}}" alt="Karan Singh" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Singh</div>
                                            <div class="client-role">Business Owner</div>
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
                                    <p class="card-text testimonial-card-text">Appreciate the dedication and determination of Brand Signage to offer best-quality door signages</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/door-signage16.webp')}}" alt="Meera Iyer" class="client-img">
                                        <div>
                                            <div class="client-name">Meera Iyer</div>
                                            <div class="client-role">Chartered Accountant</div>
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
                                    <p class="card-text testimonial-card-text">A trusted brand for door signage. I would love to recommend Brand Signage for high-end door signages</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/door-signage14.webp')}}" alt="Divya Reddy" class="client-img">
                                        <div>
                                            <div class="client-name">Divya Reddy</div>
                                            <div class="client-role">Marketing Manager</div>
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
                                    <p class="card-text testimonial-card-text">If you’re looking for stylish yet durable door signboards, look no further than Brand Signage. I recently bought nameplates for my office and they are wonderful.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/door-signage15.webp')}}" alt="Karan Singh" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Singh</div>
                                            <div class="client-role">Business Owner</div>
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
                                    <p class="card-text testimonial-card-text">Appreciate the dedication and determination of Brand Signage to offer best-quality door signages</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/door-signage16.webp')}}" alt="Meera Iyer" class="client-img">
                                        <div>
                                            <div class="client-name">Meera Iyer</div>
                                            <div class="client-role">Chartered Accountant</div>
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
                What signage is required for a fire door?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A fire door signage mentioning “CAUTION” and other relevant information is ideal for a fire door. An eye-catching colour like red can be used to distinguish the signboard and alert people at first glance. Quick safety precautions against emergency fire hazards should be mentioned on the signboard.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do automatic doors need signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes. it is better to put a sign in front of the automatic doors to draw users’ attention and avoid any accident or mishandling of the door. Thus, a smooth and safe entrance is ensured.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How to attach a sign to a door?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>There are many ways to attach a sign to a door. You can simply hang it on the door handle, which is mostly done for Do Not Disturb boards. Also, you can use removable command strips at the top or bottom corners of the signboards and place them.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are door signs waterproof?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Most door sign boards are made waterproof, to make them withstand the impacts of rain, dust, sunlight, etc. However, if you’re customizing the signs, you must mention them beforehand to avoid any miscommunication further.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is acrylic signage expensive?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The cost of an acrylic door signboard depends on the size of the board, matters written there and availed customisation options. Acrylic signage mostly is not expensive, whereas signs made of wood or composite materials can be a little costly.</p>
            </div>
        </div>

    </div>
</section>
@endsection