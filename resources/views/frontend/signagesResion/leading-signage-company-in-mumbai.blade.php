@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai.webp')}}" alt="Signage Manufacturing Company in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Best Sign Board Makers in Mumbai, Navi Mumbai, & Thane</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-1.webp')}}" alt="Signage Manufacturing Company in Mumbai">
                <div class="carousel-caption-custom">
                    <h2>Best Sign Board Manufacturers in Mumbai</h2>
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
        <h2 class="hero-title">Enhance Brand Recognition with Sign Board Manufacturers in Mumbai</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/signages-mumbai.webp')}}" alt="Leading Signage Manufacturing Company in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">#1 Signage Company in Mumbai</h2>
                <p class="brand-description">
                Brand Signages is the premier sign board manufacturers in Mumbai with 10+ years of rich industry experience. As leading sign makers, we design premium-quality
                 sign boards for top companies. We serve small businesses, SMEs, and large-scale businesses across Mumbai, <a href="{{route('signage_company_in_chennai')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Chennai</a> , 
                 <a href="{{route('signage_in_bangalore')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Bangalore</a>, and all over India.
                </p>
                <p class="brand-description">
                Signages & sign boards are the most powerful branding tools to introduce, inform, and guide potential audiences. We are proud of our proficiency 
                in signage design services in Mumbai for a decade. Our product range includes <a href="{{route('led_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED sign boards </a>,
                       <a href="{{route('digital_signages_manufacturer_in_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">digital signage </a>,
                       <a href="{{route('premium_acrylic_sign_boards_in_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">acrylic signage </a>,
                       <a href="{{route('neon_sign_board_in_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">neon signage </a>, and
                       <a href="{{route('stainless_steel_sign_board_manufacturer_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">metal signage </a>.  
                </p>
                <p class="brand-description">We do it progressively:</p>
                <ul class="process-list">
                        <li>
                            Our experts recognize your industry type, targeted audience and branding goals. 
                        </li>
                        <li>
                            Our expert designers consider the best materials, colors, and typography for signage. 
                        </li>
                        <li>
                            After manufacturing, we do a quality control check to ensure everything is up to the mark. 
                        </li>
                    </ul>
        </div>
    </div>
</section>
<x-coustom-inquiry-form />
<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Best Signage Solutions for Businesses in Mumbai</h2>
            <p class="card-text text-center">
                We offer customized signage solutions for several industries, making certain that your brand is highlighted. As expert sign board manufacturers, we provide a huge array of signage alternatives to fulfill your needs. We guarantee that our sign boards are long-lasting, efficient, and noticeable. Let us assist your business in making a lasting influence!
                </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Healthcare Industry  </h3>
                        <p class="card-text">We outline signage boards that assist in supporting patients and guests, along with wayfinding signage, building signage, and digital signage for hospitals, clinics, and healthcare centers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-5.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Restaurant & Hospitality</h3>
                        <p class="card-text">Our sign work comprises LED signage boards, outdoor signs, and acrylic signage that improves the ambiance and assists customers in seamlessly steering your restaurant, cafe, or hotel.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                            alt="Signage Manufacturing Company in Mumbai">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3"> Retail Businesses</h3>
                            <p class="card-text">We generate custom signage solutions such as acrylic LED letters, LED displays, and corrugated box signage that pull attention to your outlet, boosting your products and services efficiently.</p>
                        </div>
                    </div>
            </div>
            
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Offices</h3>
                        <p class="card-text"> We offer polished and competent signage alternatives like stainless steel and ACP sign boards for your office or building. These consist of directional signage, office branding, and informative signage.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-77.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Signage  </h3>
                        <p class="card-text">Whether you require an LED sign, ACP sign, or acrylic signage, our team of proficient designers will produce a solution that suits your brand flawlessly. From sign boards to ignited displays, we provide back-to-back signage pattern and installation services.</p>
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
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-4.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Healthcare Industry  </h3>
                                    <p class="card-text">We outline signage boards that assist in supporting patients and guests, along with wayfinding signage, building signage, and digital signage for hospitals, clinics, and healthcare centers.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Restaurant & Hospitality</h3>
                                    <p class="card-text">Our sign work comprises LED signage boards, outdoor signs, and acrylic signage that improves the ambiance and assists customers in seamlessly steering your restaurant, cafe, or hotel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3"> Retail Businesses</h3>
                                    <p class="card-text">We generate custom signage solutions such as acrylic LED letters, LED displays, and corrugated box signage that pull attention to your outlet, boosting your products and services efficiently.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3"> Retail Businesses</h3>
                                    <p class="card-text">We generate custom signage solutions such as acrylic LED letters, LED displays, and corrugated box signage that pull attention to your outlet, boosting your products and services efficiently.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-6.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate Offices</h3>
                                    <p class="card-text"> We offer polished and competent signage alternatives like stainless steel and ACP sign boards for your office or building. These consist of directional signage, office branding, and informative signage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-77.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Signage  </h3>
                                    <p class="card-text">Whether you require an LED sign, ACP sign, or acrylic signage, our team of proficient designers will produce a solution that suits your brand flawlessly. From sign boards to ignited displays, we provide back-to-back signage pattern and installation services.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Signage in Mumbai?</h2>
            <p class="card-text testimonial-card-text">We are distinct as one of the best sign board manufacturers, offering businesses high-class signage solutions. We’re dedicated to designing unique sign work that promotes your brand’s observability and influence. Choose Brand Signages and feel the difference.
            </p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-7.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Modern Designs</h5>
                            <p class="text-content">Our team produces creative signage designs aligning with the latest industry trends. From glossy acrylic signage to remarkable LED sign boards, we provide a range of signage solutions to fit each requirement.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-8.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Durability</h5>
                            <p class="text-content">We utilize standardized substances such as stainless steel, LED, and acrylic to make sure that your signage is durable. Our sign boards are made to be weather-resistant, perfect for indoor and outdoor use.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-12.webp')}}" alt="Signage Manufacturing Company in Mumbai " class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Warranty </h5>
                            <p class="text-content">We stand by the class of our work. All our signage products are available with a warranty, giving you a state of peace and quiet being aware that your investment is safeguarded.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-9.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Installation Service</h5>
                            <p class="text-content">As professional signage makers, we provide free installation services at any location near Mumbai. We ensure the sign board, whether it's a digital signage solution or an LED display, is installed promptly and safely.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-10.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Excellent Customer Service</h5>
                            <p class="text-content">As a reliable sign board maker in Mumbai, we have a dedicated customer support service. We work intimately with you through the  whole procedure, from signage design to installation, guaranteeing that your requirements are fulfilled.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-11.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Variety of Options</h5>
                            <p class="text-content">Whether you need office signage, wayfinding signs, restroom signs, or anything, we have it for you. Our product range includes LED signs, acrylic signage, digital signage, etc. to make your business distinct.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Types of Sign Boards We Manufacture</h2>
        <p class="card-text text-center">As one of the best sign board manufacturers, we supply a variety of sign boards to fit in your organizational requirements. Here are the various kinds of sign boards we produce:</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-13.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Acrylic Sign Boards</h2>
                <p class="brand-description">
                    Our acrylic signage is ideal for indoor as well as outdoor usage. Lightweight and persistent, these sign boards can be tailored with your brand's logo and message. Acrylic led letters can also be attached for an illuminating outcome.
                    <a href="{{route('premium_acrylic_sign_boards_in_mumbai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More</a>
                </p>
                <h2 class="brand-title">Metal Sign Boards  </h2>
                <p class="brand-description">
                    For an executive and polished appearance, our stainless steel and ACP sign boards are perfect. These are ideal for building signage and generating a permanent impact for your business.
                    <a href="{{route('stainless_steel_sign_board_manufacturer_mumbai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More</a>
                </p>
                <h2 class="brand-title">Digital Signage  </h2>
                <p class="brand-description">
                    If you require vibrant and communicative signage, our digital signage solutions are the ideal preference. These compose of LED displays, LED signage boards, and other high-tech solutions to retain your audience engrossed.
                    <a href="{{route('digital_signages_manufacturer_in_mumbai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Outdoor Sign Boards</h2>
                <p class="brand-description"> 
                    Our outdoor signs are shaped to combat rough weather situations. Whether it’s an LED sign or a corrugated box array, we guarantee that your outdoor sign stays dynamic and observable for an elongated span.
                    <a href="{{route('leading_signage_company_in_mumbai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More</a>
                </p>
                <h2 class="brand-title">Interior Sign Boards  </h2>
                <p class="brand-description">
                    For your internal business, we produce fashionable and operational interior signs. This comprises wayfinding signage, office signage, and signage design personalized to your place and brand recognition.
                    <a href="{{route('leading_signage_company_in_mumbai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More</a>
                </p>
                <h2 class="brand-title">Neon Glowing Signage </h2>
                <p class="brand-description">
                     Neon glowing signs provide a retro and lively appearance that captures attention. We design custom neon-style LED sign boards and neon lighting for organizations that wish to be distinct and create a fearless statement.
                    <a href="{{route('neon_sign_board_in_mumbai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More</a>
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-14.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-15.webp')}}" alt="Signage Manufacturing Company in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">LED Signs </h2>
                <p class="brand-description">
                    Our LED sign boards offer glowy, energy-saving solutions for your enterprise. Whether for exterior utility or as a factor of building signage, our LED signage alternatives are visually remarkable and simple to maintain.
                </p>
                <p class="brand-description">As a trustworthy sign board maker in Mumbai, we focus on supplying high-class signage that fulfills your exceptional needs. Select us for general sign work that uplifts your brand's presence!
                </p>
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
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-16.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-16.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-17.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-17.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-18.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-19.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-20.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-21.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-22.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/leading-signage-company-mumbai-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-23.webp')}}" class="img-fluid" alt="Signage Manufacturing Company in Mumbai"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">The acrylic signage board we bought from this signage company in Mumbai entirely modified our office! The design and installation were ideal. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Rajesh Kapoor</div>
                                <div class="client-role">Corporate Manager</div>
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
                        <p class="card-text testimonial-card-text">We required an outdoor sign for our restaurant, and this team supplied an excellent LED sign board that genuinely is outstanding. Superb service and standard!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Priya Sharma</div>
                                <div class="client-role">Restaurant Owner</div>
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
                        <p class="card-text testimonial-card-text">“I’ve worked with various signage companies, but these sign board manufacturers in Mumbai truly intrigued me with their inventive signage design and punctual delivery.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Amit Verma</div>
                                <div class="client-role">Retailer</div>
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
                        <p class="card-text testimonial-card-text">Our new LED signage board has given so much observability to our outlet. The team was competent, and the acrylic LED letters are high-spirited and resistant.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Natasha Mehra</div>
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
                        <p class="card-text testimonial-card-text">The ACP sign board they supplied for our building signage was far ahead of our expectations. The standard of the substances and the all-rounded coating was extraordinary.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Sanjay Desai</div>
                                <div class="client-role">Property Developer</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic signage board we bought from this signage company in Mumbai entirely modified our office! The design and installation were ideal. Highly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                      
                                        <div>
                                            <div class="client-name">Rajesh Kapoor</div>
                                            <div class="client-role">Corporate Manager</div>
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
                                    <p class="card-text testimonial-card-text">We required an outdoor sign for our restaurant, and this team supplied an excellent LED sign board that genuinely is outstanding. Superb service and standard!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
                                            <div class="client-role">Restaurant Owner</div>
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
                                    <p class="card-text testimonial-card-text">“I’ve worked with various signage companies, but these sign board manufacturers in Mumbai truly intrigued me with their inventive signage design and punctual delivery.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Amit Verma</div>
                                            <div class="client-role">Retailer</div>
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
                                    <p class="card-text testimonial-card-text">“I’ve worked with various signage companies, but these sign board manufacturers in Mumbai truly intrigued me with their inventive signage design and punctual delivery. <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Amit Verma</div>
                                            <div class="client-role">Retailer</div>
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
                                    <p class="card-text testimonial-card-text">Our new LED signage board has given so much observability to our outlet. The team was competent, and the acrylic LED letters are high-spirited and resistant.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Natasha Mehra</div>
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
                                    <p class="card-text testimonial-card-text">The ACP sign board they supplied for our building signage was far ahead of our expectations. The standard of the substances and the all-rounded coating was extraordinary.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Sanjay Desai</div>
                                            <div class="client-role">Property Developer</div>
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
                How to Choose a Signage?  
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Selecting the right signage board depends on business location, type, and branding requirements. You can choose a signage by:</p>
                <ul>
                    <li><strong>Requirements</strong> - First identify the requirements and based on that choose from various materials.</li>
                    <li><strong>Location & Visibility</strong> - Choose signage that stands out in your environment, whether you use it for indoors or outdoors.</li>
                    <li><strong>Design & Readability</strong> - Ensure the signage has fonts, high-contrast colors, and an eye-catching design.</li>
                    <li><strong>Hire Professionals</strong> - Collaborate with expert sign board manufacturers to get a high-quality and customized solution.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What Type of Signage Services do You Provide in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As a top-tier signage maker, we provide all types of indoor and outdoor signage. Our comprehensive range of signage services include:</p>
                <ul>
                    <li>Acrylic Signage</li>
                    <li>Metal Signage (Aluminum, Steel)</li>
                    <li>Neon Glow Signages</li>
                    <li>LED Signages</li>
                    <li>Digital Signages</li>
                </ul>
                <p>We also offer installation and maintenance support for all types of signage in Mumbai.</p> 
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the Time Period for Manufacturing and Delivering Signages?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The design and manufacturing time for a signboard is based on the size and complexity of the project. On average, it can take approximately 7 to 15 days for a sign board maker in Mumbai to finish a custom sign, along with installation.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is The Process for Bulk Signage Orders in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>You can also place bulk signage orders in Mumbai. We provide volume-based pricing model and custom pricing packages for signages. Whether you need a single piece or place bulk orders, we provide top-notch customer support services. We guarantee the most affordable signage solutions without compromising quality standards.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can You Install Signage Boards at My Location in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide signage installation to any specific location in Mumbai. As a reliable signage manufacturer, we guarantee a full-scale solution from design to manufacturing and installation. You can reach our customer support for any other queries.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How Can Signage be Profitable for My Business in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Signage in Mumbai plays a major part in enhancing your brand presence and attracting customers. A well-designed sign board can grasp awareness and promote customer experience, fostering all-rounded business victory.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I Get a Sample before Placing a Bulk Order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can definately place order for a single piece. This will help you know about the quality, durability, and design of our signage products before placing bulk ordwers. We want you to be completely satisfied with your choice, so feel free to request a sample to ensure it meets your expectations before making a commitment.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can You Create Signage for Events and Exhibitions in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we also provide signage for events and exhibitions in Mumbai. Whether you need banners, standees, directional signages, we have the right resources to meet your specific needs. As a industry leading signage manufacturer in Mumbai and india we provide custom signage solutions. </p>
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