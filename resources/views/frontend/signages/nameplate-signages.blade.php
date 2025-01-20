@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/nameplate-signage1.svg')}}" alt="Name Plate Signage">
                <div class="carousel-caption-custom">
                    <h1>Custom Nameplate Designs for Home & Office Space</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Why Choose Us for Custom Nameplates</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/nameplate-signage2.svg')}}" alt="Name Plate Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    If you are looking for a custom nameplate design, we can help. Here you will get customized name plate designs, including trendy and unique designs for office space or home. A home nameplate can express your thoughts and admiration of art. On the other hand, an office nameplate can establish your brand identity very well. Let’s explore our range of nameplate designs for home and office spaces.
                </p>
                <p class="brand-description">
                    For your perfect door nameplate design, we can suggest the best option as per your reference. Here, you will come across various designs, colors, materials, and decorative elements. It can enhance the entrance look and establish your statement. Whether it is a minimal or classy nameplate for your living room or front door, you can opt for diverse fiber, wood, or metal base nameplates with acrylic letters. So, choose your custom nameplate’s shape, size, color, and design to decorate your home’s entry point effortlessly!</p>
               
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Designer Nameplates Crafted for <br> Your Needs</h2>

        <div class="row align-items-center">

            <div class="col-lg-6">
                <p class="brand-description">
                    Customize your designer nameplates according to your specific needs and choices, at Brand Signage, a brand known for delivering the best selection of handmade nameplates. It can be said that every office owner or homeowner has their own choice for decorating an office or home. By keeping this in mind, we offer a unique name plate designs collection where you can choose your custom nameplate designs to match your vibe. For office name plates you can opt for a customized steel plate design where you can easily craft your name, designation, and office name. On the other hand, for nameplates to be placed at home, you can choose an elegant & colorful wooden or PVC plate that gives a sweet message to visitors and guests. We ensure that you will get industry-standard material and a top-notch safety guarantee that will go on for a long time. It’s time to showcase your personal taste or brand name uniquely with the best quality nameplates available at Brand Signages.
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/nameplate-signage3.svg')}}" alt="Name Plate Signage" class="img-fluid">
                </div>
            </div>
          
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of nameplates for Your Home & Office</h2>
            <p class="card-text text-center">A nameplate is one of the best ways to showcase your building number or address. Here are different types of nameplate materials:</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/nameplate-signage4.svg')}}" class="why-card-img-top"
                        alt="Wooden">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wooden</h3>
                        <p class="card-text">Wooden nameplates are one of the most used materials for crafting nameplates. When you want a classy & wooden finish nameplate design, Wooden material is the best choice. It can suit a rustic, earthy & natural look at your house door. On the other hand, for office desk name plaque, Wooden name plates are also suitable.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/nameplate-signage5.svg')}}" class="why-card-img-top"
                        alt="Acrylic">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Acrylic</h3>
                        <p class="card-text">For modern and lightweight nameplates, you can choose acrylic nameplates. These types of nameplates are available in unique designs that will match your preferences. However, you can personalize nameplate by using this material according to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/nameplate-signage6.svg')}}" class="why-card-img-top"
                        alt="Steel">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Steel</h3>
                        <p class="card-text">Steel material is for a premium look. This type of nameplate is best for outdoor use because it is weatherproof and long-lasting. It is the perfect addition to an office desk name plaque and a modern home.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/nameplate-signage7.svg')}}" class="why-card-img-top"
                        alt="Marble">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Marble</h3>
                        <p class="card-text">Marble is one of the old and heritage styles of nameplates that have been used for years. If you take a look at heritage buildings, you will come across how marble nameplates are used there. However, if you want to add a timeless touch to your house door nameplate, then use marble nameplates.</p>
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
                                <img src="{{asset('frontend/Images/nameplate-signage4.svg')}}" class="why-card-img-top"
                                    alt="Wooden">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wooden</h3>
                                    <p class="card-text">Wooden nameplates are one of the most used materials for crafting nameplates. When you want a classy & wooden finish nameplate design, Wooden material is the best choice. It can suit a rustic, earthy & natural look at your house door. On the other hand, for office desk name plaque, Wooden name plates are also suitable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/nameplate-signage5.svg')}}" class="why-card-img-top"
                                    alt="Acrylic">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Acrylic</h3>
                                    <p class="card-text">For modern and lightweight nameplates, you can choose acrylic nameplates. These types of nameplates are available in unique designs that will match your preferences. However, you can personalize nameplate by using this material according to your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/nameplate-signage6.svg')}}" class="why-card-img-top"
                                    alt="Steel">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Steel</h3>
                                    <p class="card-text">Steel material is for a premium look. This type of nameplate is best for outdoor use because it is weatherproof and long-lasting. It is the perfect addition to an office desk name plaque and a modern home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/nameplate-signage5.svg')}}" class="why-card-img-top"
                                    alt="Acrylic">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Acrylic</h3>
                                    <p class="card-text">For modern and lightweight nameplates, you can choose acrylic nameplates. These types of nameplates are available in unique designs that will match your preferences. However, you can personalize nameplate by using this material according to your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/nameplate-signage6.svg')}}" class="why-card-img-top"
                                    alt="Steel">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Steel</h3>
                                    <p class="card-text">Steel material is for a premium look. This type of nameplate is best for outdoor use because it is weatherproof and long-lasting. It is the perfect addition to an office desk name plaque and a modern home.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/nameplate-signage7.svg')}}" class="why-card-img-top"
                                    alt="Marble">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Marble</h3>
                                    <p class="card-text">Marble is one of the old and heritage styles of nameplates that have been used for years. If you take a look at heritage buildings, you will come across how marble nameplates are used there. However, if you want to add a timeless touch to your house door nameplate, then use marble nameplates.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Choose What is The Best for You</h2>
            <p class="card-text text-center">Nameplates are useful in both personal and business settings. How to choose the best <br> personalized nameplate for your needs is as follows:</p>

        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/nameplate-signage8.svg')}}" alt="Office Desk nameplates" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Office Desk nameplates</h5>
                            <p class="text-content">These types of nameplates can feature names, job titles, and even inspirational quotes are perfect for identifying employees and personalizing workspaces. They improve workstation aesthetics and convey professionalism.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/nameplate-signage9.svg')}}" alt="Mailbox nameplates" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Mailbox nameplates</h5>
                            <p class="text-content">These nameplates can include apartment numbers, business names, or family member’s names and are ideal for personalizing your home or workplace mailbox. They can last in outdoor conditions for their sturdy materials like wood, steel, or acrylic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/nameplate-signage10.svg')}}" alt="Door Nameplates"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Door Nameplates</h5>
                            <p class="text-content">Door nameplates make a warm impression and are perfect for both residential and business entrances. They can provide style and clarity by showcasing certain names, titles, or business logos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/nameplate-signage11.svg')}}" alt="Gifting Ideas" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Gifting Ideas</h5>
                            <p class="text-content">Personalized nameplates can be the best gift ideas and useful presents. There are many options in terms of design, material and more. You can choose one of the design plates that have been engraved with the recipient's name, house number, or name.In office space, nameplates are used to present staff names, corporate logos, and titles which are useful tools for improving organization and projecting professionalism. These are used for branding or employee appreciation. For the ideal fit, choose according to your purpose and available space!</p>
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
                        <p class="card-text testimonial-card-text">I ordered an acrylic door nameplate for my new home. I love to have it! It is really beautiful and matches my expectations. The color combinations and font style are nice. The material of the door nameplate is durable also. Thank You!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/nameplate-signage12.svg')}}" alt="Priya Agarwal" class="client-img">
                            <div>
                                <div class="client-name">Priya Agarwal</div>
                                <div class="client-role">Bank Manager</div>
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
                        <p class="card-text testimonial-card-text">I ordered Steel nameplates for my office space. Their service and brand understanding, help me to get the best office steel nameplate. They gave the entrance a touch of elegance. The material quality was excellent, and the engraved corporate logo looked great.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/nameplate-signage13.svg')}}" alt="Rajiv Gupta" class="client-img">
                            <div>
                                <div class="client-name">Rajiv Gupta</div>
                                <div class="client-role">Freelance Writer</div>
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
                        <p class="card-text testimonial-card-text">I purchased wooden nameplates for a DIY store. It was better than I could have imagined! The engraving gave my front door a rustic appeal, and the execution was superb. Visitors have been complimenting me a lot!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/nameplate-signage14.svg')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Mohit Saraf</div>
                                <div class="client-role">Graphic Designer</div>
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
                        <p class="card-text testimonial-card-text">I got a beautiful personalized nameplate to give my friend! The design was unique, and the recipient loved the thoughtful personalization. Highly recommended for gifting!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/nameplate-signage15.svg')}}" alt="Neha Mahor" class="client-img">
                            <div>
                                <div class="client-name">Neha Mahor</div>
                                <div class="client-role">Teacher</div>
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
                        <p class="card-text testimonial-card-text">We bought marble nameplates for our business building, and they gave the entrance a refined touch. The marble quality was excellent, and the engraved corporate logo, and building address looked great.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/nameplate-signage16.svg')}}" alt="Amitav Kapoor" class="client-img">
                            <div>
                                <div class="client-name">Amitav Kapoor</div>
                                <div class="client-role">Fashion Designer</div>
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
                                    <p class="card-text testimonial-card-text">I ordered an acrylic door nameplate for my new home. I love to have it! It is really beautiful and matches my expectations. The color combinations and font style are nice. The material of the door nameplate is durable also. Thank You!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nameplate-signage12.svg')}}" alt="Priya Agarwal" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Agarwal</div>
                                            <div class="client-role">Bank Manager</div>
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
                                    <p class="card-text testimonial-card-text">I ordered Steel nameplates for my office space. Their service and brand understanding, help me to get the best office steel nameplate. They gave the entrance a touch of elegance. The material quality was excellent, and the engraved corporate logo looked great.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nameplate-signage13.svg')}}" alt="Rajiv Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rajiv Gupta</div>
                                            <div class="client-role">Freelance Writer</div>
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
                                    <p class="card-text testimonial-card-text">I purchased wooden nameplates for a DIY store. It was better than I could have imagined! The engraving gave my front door a rustic appeal, and the execution was superb. Visitors have been complimenting me a lot!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nameplate-signage14.svg')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Mohit Saraf</div>
                                            <div class="client-role">Graphic Designer</div>
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
                                    <p class="card-text testimonial-card-text">I purchased wooden nameplates for a DIY store. It was better than I could have imagined! The engraving gave my front door a rustic appeal, and the execution was superb. Visitors have been complimenting me a lot! <br> <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nameplate-signage14.svg')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Mohit Saraf</div>
                                            <div class="client-role">Graphic Designer</div>
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
                                    <p class="card-text testimonial-card-text">I got a beautiful personalized nameplate to give my friend! The design was unique, and the recipient loved the thoughtful personalization. Highly recommended for gifting!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nameplate-signage15.svg')}}" alt="Neha Mahor" class="client-img">
                                        <div>
                                            <div class="client-name">Neha Mahor</div>
                                            <div class="client-role">Teacher</div>
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
                                    <p class="card-text testimonial-card-text">We bought marble nameplates for our business building, and they gave the entrance a refined touch. The marble quality was excellent, and the engraved corporate logo, and building address looked great.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nameplate-signage16.svg')}}" alt="Amitav Kapoor" class="client-img">
                                        <div>
                                            <div class="client-name">Amitav Kapoor</div>
                                            <div class="client-role">Fashion Designer</div>
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
                 Which type of Nameplate is best for Home?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>There are different types of nameplates available for home settings. 1st you determine where you place the nameplate and the purpose of the nameplate. If it is a mailbox nameplate, then opt for a steel nameplate or if it is only for showcasing your home name, then you can choose an acrylic or wooden nameplate. However, it is completely up to you whichever you want to customize your home nameplate as well.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can you suggest the perfect font for the Nameplate?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>There are a few common and most-used fonts for nameplates:</p>
                <ul>
                    <li>Blackletter</li>
                    <li>Fraktur</li>
                    <li>News</li>
                    <li>Textura</li>
                    <li>xmas</li>
                    <li>German</li>
                    <li>1800s</li>
                    <li>1990s</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How to choose the suitable size and shape of a nameplate for office space?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Consider your office space, visibility, and elegance when selecting the size and design of your nameplate. Use larger plates for easier reading in broader areas. Custom shapes provide originality, while rectangular designs work well in professional contexts. For a unified appearance, make sure the plate matches your office's décor, has all the necessary details, and adheres to your brand.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the factors that should be followed when you buy a nameplate?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>First, understand the purpose of placing the nameplate and the location where it will be placed. When you understand these, you can move to the shape, colour, material, size, and font style. Apart from these, you will get guidance from us to get the best custom nameplate designs for your office space or home</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How to get my nameplate customised?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>There are a lot of customization options available from which you can choose. Along with this, you can share your preference in terms of nameplate materials, shape, size, and designs, we will provide custom nameplate designs.</p>
            </div>
        </div>

    </div>
</section>
@endsection