@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/restroom-1.webp')}}" alt="Restroom Signs & Labels">
                <div class="carousel-caption-custom">
                    <h1> Buy Restroom Signages in India</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Looking for Custom Restroom Signs?</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/restroom-2.webp')}}" alt="Restroom Signs & Labels" class="img-fluid" style="height: 528px;">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Brand Signages is the go-to destination for custom restroom signs and labels, outlined to fulfill all your requirements for restroom signage. In case you require a toilet sign board for an office, a washroom sign board for a huge public space, or sophisticated bathroom signs for exclusive businesses, we have all for you.  Our collection comprises all from ADA restroom signs to gender restroom signs, providing lucidity, acceptance, and attraction. Require a family restroom sign or a unisex restroom label? We can produce designs that guarantee comprehensiveness and obtainability for all. Focus on hygiene with a competent wash hands sign, or add a clean sign for restroom preservation.</p>
                <p class="brand-description">
                    From men’s restroom signs to women’s restroom signs, our products are appropriate for multiple places like schools, hotels, shopping malls, and many more. Every bathroom sign is tailored with substances, fonts, and patterns to coordinate with your brand’s fashion.Have faith in us for long-lasting, standardized restroom signage that improves operationality and supplements the fittings of any bathroom door. Let your visitors discover their route effortlessly with lucid, appealing door signs customized to your needs.Select us for influential bathroom signs because a well-planned toilet sign conveys a significant message about your devotion to comfort and tidiness!</p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Order for Custom Restroom Signs or Check Available Range</h2>
            <p class="card-text text-center">Uplift your place with our exquisite and innovative custom restroom signs. In case you’re seeking operational restroom signage or <br> impressive funny bathroom signs, we provide a huge collection of alternatives personalized to your requirements. Be it toilet sign <br> boards for offices or washroom sign boards for public places, we have the ideal answer for each background.</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-3.webp')}}" class="why-card-img-top"
                        alt="Funny Bathroom Signages">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Funny Bathroom Signages</h3>
                        <p class="card-text">Attach a sense of comical aspect to your restrooms with eccentric and amusing signs that generate unforgettable moments for customers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-4.webp')}}" class="why-card-img-top"
                        alt="Informative Restrooms Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Informative Restrooms Signs</h3>
                        <p class="card-text">Guarantee submissiveness and cleanliness with pragmatic signs like “Handwriting Guidelines,” “Cleanliness Reminders,” and ADA-tractable restroom signs for obtainability.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-5.webp')}}" class="why-card-img-top"
                        alt="Office Restroom Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Office Restroom Signs</h3>
                        <p class="card-text">Make your workspace competent and arranged with polished restroom signage customized for the corporate landscape.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-6.webp')}}" class="why-card-img-top"
                        alt="Handwashing Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Handwashing Signs</h3>
                        <p class="card-text">Boost hygiene with lucid and optically attractive signs recollecting the significance of washing hands.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-7.webp')}}" class="why-card-img-top"
                        alt="Gender Restrooms Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Gender Restrooms Signs</h3>
                        <p class="card-text">Improve observability with fashionable men’s, women’s, unisex, and family restroom signs for divergent places.</p>
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
                                <img src="{{asset('frontend/Images/new/restroom-3.webp')}}" class="why-card-img-top"
                                    alt="Funny Bathroom Signages">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Funny Bathroom Signages</h3>
                                    <p class="card-text">Attach a sense of comical aspect to your restrooms with eccentric and amusing signs that generate unforgettable moments for customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-4.webp')}}" class="why-card-img-top"
                                    alt="Informative Restrooms Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Informative Restrooms Signs</h3>
                                    <p class="card-text">Guarantee submissiveness and cleanliness with pragmatic signs like “Handwriting Guidelines,” “Cleanliness Reminders,” and ADA-tractable restroom signs for obtainability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-5.webp')}}" class="why-card-img-top"
                                    alt="Office Restroom Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Office Restroom Signs</h3>
                                    <p class="card-text">Make your workspace competent and arranged with polished restroom signage customized for the corporate landscape.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-5.webp')}}" class="why-card-img-top"
                                    alt="Office Restroom Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Office Restroom Signs</h3>
                                    <p class="card-text">Make your workspace competent and arranged with polished restroom signage customized for the corporate landscape. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-6.webp')}}" class="why-card-img-top"
                                    alt="Handwashing Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Handwashing Signs</h3>
                                    <p class="card-text">Boost hygiene with lucid and optically attractive signs recollecting the significance of washing hands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-7.webp')}}" class="why-card-img-top"
                                    alt="Gender Restrooms Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Gender Restrooms Signs</h3>
                                    <p class="card-text">Improve observability with fashionable men’s, women’s, unisex, and family restroom signs for divergent places.</p>
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

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Why Opt for Our Restroom Signs?</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/restroom-8.webp')}}" alt="Restroom Signs & Labels" class="img-fluid" style="    height: 559px;">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Restroom signage solutions at Brand Signages are outlined to render transparent, resistant, and restrained barometers for all public as well as private places. In case you require a toilet sign board, a bathroom sign for a women's restroom, or a family restroom sign, we provide products that assure both usefulness and sophistication.</p>

                <p class="brand-description">
                    <span style="color: #E43D12;">Durable -</span> Designed to live through monotonous usage without striking a balance of class. <br>
                    <span style="color: #E43D12;">Long-lasting -</span> Shaped for prolonged rendition and dependability. <br>
                    <span style="color: #E43D12;">Water-Resistant -</span> Ideal for an airless atmosphere, preserving their view and operationality. <br>
                    <span style="color: #E43D12;">ADA Compliant - </span> Guarantees universality and attainability for all consumers. <br>
                    <span style="color: #E43D12;">Transparent and Observable -</span> Renders simple readability and recognition at a glimpse. <br>
                    <span style="color: #E43D12;">Cleanliness-Centric -</span> Fosters’s hygiene with simple messages. <br>
                    <span style="color: #E43D12;">Low Maintenance -</span> Simple to clean and keep for long-run utility. <br>
                </p>

                <p class="brand-description">
                    With an emphasis on resistance, fashion, and abidance, our washroom sign boards are ideal for offices, restaurants, and any area needing lucid bathroom signage. Rely on our proficiency to offer dependable solutions for your restroom cleaning requirements. Opt for Brand Signage for standard, submissiveness, and lasting worth in restroom signage.</p>
            </div>
        </div>
    </div>
</section>

<section class="container py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Our Restroom Signs by Use Type</h2>
            <p class="card-text text-center">At Brand Signages, we offer a multiple collection of restroom signage shaped to meet the exclusive <br> requirements of any accommodation. Be it all-gender restroom signs accessible restroom signs and <br> directional restroom signs, our range makes sure of transparency and submissiveness.</p>

        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/restroom-9.webp')}}" alt="All Gender Restroom Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">All Gender Restroom Signs</h5>
                            <p class="text-content">For considerate places, our all-gender restroom signs and unisex restroom alternatives foster obtainability and justness. Whether you want a gender restroom sign for a family restroom or a woman’s restroom, our patterns confirm that all feel embraced.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/restroom-10.webp')}}" alt="Accessible Restroom Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Accessible Restroom Signs</h5>
                            <p class="text-content">Our accessible restroom signs meet ADA standards, making them perfect for public restrooms. In case it’s a men’s restroom sign, a women's restroom sign, or a toilet sign for a bathroom door, we focus on the apparentness and simplicity of apprehension.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/restroom-11.webp')}}" alt="Directional Restroom Signs"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Directional Restroom Signs</h5>
                            <p class="text-content">Precise indications are crucial, and our directional restroom signs make searching for accomodations effortless. These washroom sign boards are best for huge areas, providing support to make sure that your visitors feel comfortable.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/restroom-12.webp')}}" alt="Resistant and Standardized Substances" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Resistant and Standardized Substances</h5>
                            <p class="text-content">Designed with long-lasting, water-proof substances, our bathroom signs maintain their standards in congested places. From wash hands signs to restroom clean door signs, each product maintains tidiness and comfort. Select our sign boards for washrooms for high-quality design and dependability, customized for each restroom signage need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-18.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-24.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-25.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-25.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">The restroom signage that we got was ideal! Lucid, long-lasting, and water-proof—our public restroom now seems arranged and competent</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/restroom-13.webp')}}" alt="Sarah M" class="client-img">
                            <div>
                                <div class="client-name">Sarah M</div>
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
                        <p class="card-text testimonial-card-text">We like the unisex restroom and family restroom signs. They’re simple to read and assist us in balance and bias-free surroundings</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/restroom-14.webp')}}" alt="Daniel P" class="client-img">
                            <div>
                                <div class="client-name">Daniel P</div>
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
                        <p class="card-text testimonial-card-text">Our women's restroom signs and men’s restroom signs suit appropriately on every bathroom door. The standard is excellent!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/restroom-15.webp')}}" alt="Priya R" class="client-img">
                            <div>
                                <div class="client-name">Priya R</div>
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
                        <p class="card-text testimonial-card-text">The wash hands signs and ADA restroom signs go down well with our employees’ and visitors’. Exclusive pattern and are very pragmatic</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/restroom-16.webp')}}" alt="Jason K" class="client-img">
                            <div>
                                <div class="client-name">Jason K</div>
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
                        <p class="card-text testimonial-card-text">We updated your toilet sign boards, and they’ve made a huge contrast in administering visitors. Highly suggest these bathroom signs!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/restroom-17.webp')}}" alt="Emily T" class="client-img">
                            <div>
                                <div class="client-name">Emily T</div>
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
                                    <p class="card-text testimonial-card-text">The restroom signage that we got was ideal! Lucid, long-lasting, and water-proof—our public restroom now seems arranged and competent</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/restroom-13.webp')}}" alt="Sarah M" class="client-img">
                                        <div>
                                            <div class="client-name">Sarah M</div>
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
                                    <p class="card-text testimonial-card-text">We like the unisex restroom and family restroom signs. They’re simple to read and assist us in balance and bias-free surroundings</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/restroom-14.webp')}}" alt="Daniel P" class="client-img">
                                        <div>
                                            <div class="client-name">Daniel P</div>
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
                                    <p class="card-text testimonial-card-text">Our women's restroom signs and men’s restroom signs suit appropriately on every bathroom door. The standard is excellent!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/restroom-15.webp')}}" alt="Priya R" class="client-img">
                                        <div>
                                            <div class="client-name">Priya R</div>
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
                                    <p class="card-text testimonial-card-text">Our women's restroom signs and men’s restroom signs suit appropriately on every bathroom door. The standard is excellent!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/restroom-15.webp')}}" alt="Priya R" class="client-img">
                                        <div>
                                            <div class="client-name">Priya R</div>
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
                                    <p class="card-text testimonial-card-text">The wash hands signs and ADA restroom signs go down well with our employees’ and visitors’. Exclusive pattern and are very pragmatic</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/restroom-16.webp')}}" alt="Jason K" class="client-img">
                                        <div>
                                            <div class="client-name">Jason K</div>
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
                                    <p class="card-text testimonial-card-text">We updated your toilet sign boards, and they’ve made a huge contrast in administering visitors. Highly suggest these bathroom signs!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/restroom-17.webp')}}" alt="Emily T" class="client-img">
                                        <div>
                                            <div class="client-name">Emily T</div>
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
                How can I personalize my restroom signs with particular patterns or text?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide completely tailored restroom signage, permitting you to customize toilet or washroom sign boards with extraordinary patterns, colors, or text to suit your brand or theme.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What substances make your custom restroom signs strong and permanent?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our bathroom signs are designed from premium quality, indestructible substances. These resistant sign boards for washrooms are outlined to withstand continuous usage, guaranteeing durable rendition.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide restroom signs that abide by obtainability norms?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, our range consists of ADA restroom signs, like women's restroom signs, men's restroom signs, and unisex restroom signs, making sure of abiding with attainability rules.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I select from fashions, like witty or informational restroom signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, of course! We offer a huge collection, from funny wash hands signs to competent gender and family restroom signs, appropriate for any public restroom or personal place.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do your signs guarantee waterproofing and longevity in high-moisture atmospheres?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our bathroom signs are water-proof accomplishes, making them ideal for humid places like bathroom doors and making sure that they remain undamaged and comprehensible for a longer period.</p>
            </div>
        </div>

    </div>
</section>


@endsection