@extends('frontend.layout.appLayout')
@section('content')

<style>
    .process-list li::before {
    content: "";
    position: absolute;
    left: 0;
    color: #474747;
}
    </style>

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
                <img src="{{asset('frontend/Images/Banner.webp')}}" alt="Signage Manufacturing Company in Chennai">
                <div class="carousel-caption-custom">
                    <h1>Best Sign Board Manufacturers in Chennai- Brand Signages</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>    

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-1.webp')}}" alt="Top-rated Sign Board Manufacturers in Chennai">
                <div class="carousel-caption-custom">
                    <h1>Trusted Signage Manufacturers in Chennai- Brand Signages Chennai</h1>
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
        <h2 class="hero-title">Uplift Your Brand with Premier<br>Sign Board Manufacturers in Chennai </h2>
       

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/anna-salai-chennai.webp')}}" alt="Anna Salai Chennai Image" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
            <h2 class="brand-title">Expert Signage Manufacturers in Chennai</h2>
                <p class="brand-description">
                Are you looking for a reliable signage maker in Chennai? Brand Signages is the premier sign board manufacturers in Chennai with 10+ years of industry expertise. As a leading signage company located in Chennai, we design premium-quality sign boards for top companies. We serve small businesses, SMEs, and large-scale businesses across Chennai, Mumbai, <a href="{{route('signage_in_bangalore')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Bangalore</a>, and all over India.         
                </p>
                <p class="brand-description">
                Signages & sign boards are the most powerful branding tools to introduce, inform, and guide potential audiences. We are proud of our proficiency 
                in signage design services in Chennai for a decade. Our product range includes <a href="{{route('led_display_board_in_chennai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED sign boards </a>,
                       <a href="{{route('leading_digital_signages_manufacturer_in_chennai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">digital signage </a>,
                       <a href="{{route('acrylic_signages_in_chennai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">acrylic signage </a>,
                       <a href="{{route('custom_neon_sign_board_in_chennai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">neon signage </a>, and
                       <a href="{{route('metal_sign_in_chennai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">metal signage </a>.   
                </p>
                <ul class="process-list">
                        <li>
                        </i><span style="text-decoration: unset; color: #E43D12; font-weight: bold;"><i class="fas fa-map-marker-alt "></i> Location:</span> Senate Space, W-126, 3rd Floor, 3rd Avenue, Anna Nagar, Chennai -600040 
                        </li>
                        <li>
                        <span style="text-decoration: unset; color: #E43D12; font-weight: bold;"><i class="fas fa-phone"></i> Phone: </span><a href="tel:8006606080" class="text-decoration-none text-black">+91
                        8006606080</a>
                        </li>
                        <li>
                        <span style="text-decoration: unset; color: #E43D12; font-weight: bold;"><i class="fas fa-envelope"></i>
                             Email: </span> <a href="mailto:info@brandsinage.com"
                        class="text-decoration-none text-black">sales@brandsignages.com</a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</section>
<x-coustom-inquiry-form />

<section class="process-section">
        <div class="container">
            <h2 class="process-title">Hassle-Free Signage Solutions for Your Business</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-design">
                            <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="On-demand Design">
                        </div>
                        <h3>On-demand Design</h3>
                        <p>Our creative team of sign board makers in Chennai offers flexible, personalized signage solutions. We transform your ideas into compelling visual narratives that strengthen your brand presence.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-deliver">
                            <img src="{{asset('frontend/Images/on-time.webp')}}" alt="Timely Deliver">
                        </div>
                        <h3>Timely Deliver</h3>
                        <p>We optimize workflows, maintain stringent timelines, and coordinate logistics to guarantee
                            project completion without compromising quality or design integrity.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-purchase">
                            <img src="{{asset('frontend/Images/transaction.webp')}}" alt="Direct Purchase">
                        </div>
                        <h3>Direct Purchase</h3>
                        <p>Our streamlined purchasing pathway eliminates complexity, connecting you straight to creative
                            brilliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">We are The Leading <br>Signage Manufacturers in Chennai</h2>
        <p class="card-text text-center">As one of the leading signboard manufacturers in Chennai, we offer signage solutions creatively crafted to meet the diverse needs of all businesses. From advanced LED sign boards to elegant acrylic signage, each type serves a unique purpose and adds value to your brand. Here are the kinds of sign boards in Chennai you can opt from:</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-10.webp')}}" alt="Top-rated Sign Board Manufacturers in Chennai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">LED Sign Boards</h2>
                <p class="brand-description">
                    LED Sign boards are widely recognized for its observability and energy-efficiency. LED signs are perfect for storefronts, restaurants, and commercial places. Our LED signage boards are visually remarkable and simple to maintain.
                <a href="{{route('led_display_board_in_chennai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More </a>
                </p>
                <h2 class="brand-title">Acrylic Sign Boards </h2>
                <p class="brand-description">
                    Our acrylic signage is ideal for indoor as well as outdoor usage. Lightweight and persistent, these sign boards can be tailored with your brand's logo and message. Acrylic led letters can also be attached for an illuminating outcome. 
                    <a href="{{route('acrylic_signages_in_chennai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More </a>
                </p>
                <h2 class="brand-title">Metal Sign Boards</h2>
                <p class="brand-description">
                    Strong and durable, metal sign boards built from stainless steel or aluminum. They are perfect for Corporate office signs, building signs, wayfinder signage, and architectural landmarks. 
                   <br> <a href="{{route('metal_sign_in_chennai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Digital Sign Boards</h2>
                <p class="brand-description">
                If you require vibrant and communicative signage, our digital signage solutions are the ideal preference. These compose of LED displays, LED signage boards, and other high-tech solutions to retain your audience engrossed. 
                    <a href="{{route('leading_digital_signages_manufacturer_in_chennai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More </a>
                </p>
                <h2 class="brand-title">Custom Sign Boards </h2>
                <p class="brand-description">
                    Customized to your branding requirements, custom signage solutions can be made using ACP sign boards wood, or metal. These boards can be outlined to mirror your brand’s exceptional recognition, guaranteeing a permanent impact. 
                    <a href="{{route('custom_neon_sign_board_in_chennai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More </a>
                </p>
                <h2 class="brand-title">Neon Glow Signs </h2>
                <p class="brand-description">
                    Ideal for organizations seeking to make a striking remark, neon signage, and neon signs are vibrant, colorful, and spectacular. They are mostly used in cafes, bars, and entertainment zones, creating a lively ambiance. 
                    <a href="{{route('custom_neon_sign_board_in_chennai')}}" style="text-decoration:unset;color:#e43d12"> >> Know More </a>
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-11.webp')}}" alt="Top-rated Sign Board Manufacturers in Chennai" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Best Signage Solutions for Businesses in Chennai</h2>
            <p class="card-text text-center">
                We offer customized signage solutions for several industries, making certain that your brand is highlighted. As expert sign board manufacturers, we provide a huge array of signage alternatives to fulfill your needs. We guarantee that our sign boards are long-lasting, efficient, and noticeable. Let us assist your business in making a lasting influence!
                </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Chennai ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Healthcare Industry  </h3>
                        <p class="card-text">We outline signage boards that assist in supporting patients and guests, along with wayfinding signage, building signage, and digital signage for hospitals, clinics, and healthcare centers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-5.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Chennai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Restaurant & Hospitality</h3>
                        <p class="card-text">Our sign work comprises LED signage boards, outdoor signs, and acrylic signage that improves the ambiance and assists customers in seamlessly steering your restaurant, cafe, or hotel.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                            alt="Signage Manufacturing Company in Chennai">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3"> Retail Businesses</h3>
                            <p class="card-text">We generate custom signage solutions such as acrylic LED letters, LED displays, and corrugated box signage that pull attention to your outlet, boosting your products and services efficiently.</p>
                        </div>
                    </div>
            </div>
            
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Chennai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Offices</h3>
                        <p class="card-text"> We offer polished and competent signage alternatives like stainless steel and ACP sign boards for your office or building. These consist of directional signage, office branding, and informative signage.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-77.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Chennai">
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
                                    alt="Signage Manufacturing Company in Chennai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Healthcare Industry  </h3>
                                    <p class="card-text">We outline signage boards that assist in supporting patients and guests, along with wayfinding signage, building signage, and digital signage for hospitals, clinics, and healthcare centers.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Chennai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Restaurant & Hospitality</h3>
                                    <p class="card-text">Our sign work comprises LED signage boards, outdoor signs, and acrylic signage that improves the ambiance and assists customers in seamlessly steering your restaurant, cafe, or hotel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Chennai">
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
                                <img src="{{asset('frontend/Images/events-mumbai.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Chennai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Event Signage</h3>
                                    <p class="card-text">Event signage is a go-to choice for your brand's live performance - a strategic communication tool that guides, inspires, and connects. We can create large-scale brand signages to create cohesive experiences, amplify your message, and leave a memorable impression.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-6.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Chennai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate Offices</h3>
                                    <p class="card-text">Corporate office signage reflects your company's theme- professionalism, innovation, and purpose-driven. As the best, sign board manufacturer, we will produce thoughtfully designed signs to communicate your organization's values, culture, and commitment to excellence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-77.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Chennai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Signage  </h3>
                                    <p class="card-text">Whether you require an LED sign, ACP sign, or acrylic signage, our team of proficient designers will produce a solution that suits your brand flawlessly. From sign boards to ignited displays, we provide back-to-back signage pattern and installation services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls" style="top: -45px;">
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


<section class="why-bg-light-pink py-5" style="background-color: #fff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for <br>Your Signage Needs in Chennai?</h2>
                <p class="card-text">With a team of expert designers and skilled craftsmen, we deliver high-quality signage solutions. 
                    Our expertise ensures your brand captures customer attention effectively.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/on-site-consulting.webp')}}" class="why-card-img-top" alt="Consulting">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">On-site consulting & planning</h3>
                            <p class="card-text">Our team will work closely with you and listen to your POV and brand
                                message. We will provide exactly what you need, no guesswork, no hassle, just
                                personalized and strategic planning for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/top-tier-designs.webp')}}" class="why-card-img-top" alt="Designs">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Top-tier Creative Designs</h3>
                            <p class="card-text">As creators of brand signage, we think that signs should not be
                                visually boring. We will create visuals that will become the talk of the town. Our team
                                members will marry creativity and smart thinking to make your brand pop.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Support">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Skilled workforce for installation</h3>
                            <p class="card-text">We treat signboards as art pieces, which means our work is not done
                                with just the installations. Moreover, we take special care while doing so, checking the
                                placement is perfect from every angle.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/time-delivery.webp')}}" class="why-card-img-top" alt="Quality">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Timely Delivery of signage boards</h3>
                            <p class="card-text">Delays and excuses are the bane of our existence. We know that a lot is
                                riding on our signage solutions, and that’s why we deliver digital signage solutions
                                within the deadline set ahead by the clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/quality-material.webp')}}" class="why-card-img-top" alt="Customer Service">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Quality material</h3>
                            <p class="card-text">We prioritize the material quality to ensure they can withstand harsh
                                weather and normal wear and tear. Our flexes and outdoor signs will tell the story for
                                years and keep the brand’s visual identity sharp.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="signageCarouselNew" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/on-site-consulting.webp')}}" class="why-card-img-top" alt="Consulting">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">On-site consulting & planning</h3>
                                        <p class="card-text">Our team will work closely with you and listen to your POV
                                            and brand message. We will provide exactly what you need, no guesswork, no
                                            hassle, just personalized and strategic planning for your business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/top-tier-designs.webp')}}" class="why-card-img-top" alt="Designs">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Top-tier Creative Designs</h3>
                                        <p class="card-text">As creators of brand signage, we think that signs should
                                            not be visually boring. We will create visuals that will become the talk of
                                            the town. Our team members will marry creativity and smart thinking to make
                                            your brand pop.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Workforce">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Skilled workforce for installation</h3>
                                        <p class="card-text">We treat signboards as art pieces, which means our work is
                                            not done with just the installations. Moreover, we take special care while
                                            doing so, checking the placement is perfect from every angle.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Support">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Skilled workforce for installation</h3>
                                        <p class="card-text">We treat signboards as art pieces, which means our work is
                                            not done with just the installations. Moreover, we take special care while
                                            doing so, checking the placement is perfect from every angle. <br> <br> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/time-delivery.webp')}}" class="why-card-img-top" alt="Quality">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Timely Delivery of signage boards</h3>
                                        <p class="card-text">Delays and excuses are the bane of our existence. We know
                                            that a lot is riding on our signage solutions, and that’s why we deliver
                                            digital signage solutions within the deadline set ahead by the clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/quality-material.webp')}}" class="why-card-img-top" alt="Customer Service">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Quality material</h3>
                                        <p class="card-text">We prioritize the material quality to ensure they can
                                            withstand harsh weather and normal wear and tear. Our flexes and outdoor
                                            signs will tell the story for years and keep the brand’s visual identity
                                            sharp.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="why-carousel-controls" style="top: -45px;">
                    <button id="prevButtonNew" class="why-carousel-control" type="button" data-bs-target="#signageCarouselNew"
                        data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextButtonNew" class="why-carousel-control" type="button" data-bs-target="#signageCarouselNew"
                        data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                </div>
    
                <div class="carousel-indicators why-carousel-indicators" style="margin-bottom: -0.8rem;">
                    <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                   
                </div>
            </div>
        </div>
    </section>


<!--<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Sign Boards in Chennai?  </h2>
            <p class="card-text text-center">When it comes to sign boards in Chennai, we provide more than just products. We offer signage solutions that are designed to improve your brand’s existence. Here’s why we are the best choice for all your signage requirements in Mumbai: </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-3.webp')}}" class="why-card-img-top"
                        alt="Years of Experience ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Years of Experience </h3>
                        <p class="card-text">With a decade of skillfulness as a signboard manufacturer in Chennai, we have worked with multiple businesses, from startups to retail and corporate. With 10+ years of expertise, we supply standardized sign boards customized to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-4.webp')}}" class="why-card-img-top"
                        alt="Installation and Maintenance  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Installation and Maintenance  </h3>
                        <p class="card-text">We provide 360 degree services, comprising design, installation, and maintenance of your signage boards. Whether you require a new LED sign board or an acrylic sign, our experts make certain of an effortless installation and long-run upkeep, making sure your signages remains glowing.  </p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/signage-in-chennai-5.webp')}}" class="why-card-img-top"
                            alt="Quality Materials">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Quality Materials</h3>
                            <p class="card-text">We utilize only the best-quality materials for digital signage, acrylic signage, LED signage, and neon signages. Whether you choose metal sign boards or backlit boards, you can be confirmed of longevity and superior standards. We offer LED signs, digital signage, and more, all built to last for an extended time.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-6.webp')}}" class="why-card-img-top"
                        alt="Design Expertise">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Design Expertise</h3>
                        <p class="card-text">Our sign board makers in Chennai bring innovative design skillfulness to the table. From polished digital signs to comprehensive neon signs, our team makes sure that your signboard not only satisfies operational requirements but is also distinct in appearance. We make general hospital signs, safety signage, and LED signage, making sure each design suits accurately with your brand picture and place.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-8.webp')}}" class="why-card-img-top"
                        alt="Wide Range of Options">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wide Range of Options</h3>
                        <p class="card-text">We provide a wide range of sign boards, including LED sign boards, Acrylic sign boards, neon glow signs, and digital signage. No matter what trend or kind of signage board you are seeking, we have all for you.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-in-chennai-9.webp')}}" class="why-card-img-top"
                        alt="Affordable and Timely Delivery">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Affordable and Timely Delivery</h3>
                        <p class="card-text"> As reliable sign board manufacturers, we guarantee punctual delivery and reasonable pricing without adjusting on quality. Whether you require a traditional LED sign for a corporate building or safety signage for your office, we are dedicated to deliver on time.</p>
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
                                <img src="{{asset('frontend/Images/new/signage-in-chennai-3.webp')}}" class="why-card-img-top"
                                    alt="Years of Experience ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Years of Experience </h3>
                                    <p class="card-text">With a decade of skillfulness as a signboard manufacturer in Chennai, we have worked with multiple businesses, from startups to retail and corporate. With 10+ years of expertise, we supply standardized sign boards customized to your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-in-chennai-4.webp')}}" class="why-card-img-top"
                                    alt="Installation and Maintenance  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Installation and Maintenance  </h3>
                                    <p class="card-text">We provide 360 degree services, comprising design, installation, and maintenance of your signage boards. Whether you require a new LED sign board or an acrylic sign, our experts make certain of an effortless installation and long-run upkeep, making sure your signages remains glowing.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-in-chennai-5.webp')}}" class="why-card-img-top"
                                    alt="Quality Materials">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Quality Materials</h3>
                                    <p class="card-text">We utilize only the best-quality materials for digital signage, acrylic signage, LED signage, and neon signages. Whether you choose metal sign boards or backlit boards, you can be confirmed of longevity and superior standards. We offer LED signs, digital signage, and more, all built to last for an extended time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-in-chennai-6.webp')}}" class="why-card-img-top"
                                    alt="Design Expertise">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Design Expertise</h3>
                                    <p class="card-text">Our sign board makers in Chennai bring innovative design skillfulness to the table. From polished digital signs to comprehensive neon signs, our team makes sure that your signboard not only satisfies operational requirements but is also distinct in appearance. We make general hospital signs, safety signage, and LED signage, making sure each design suits accurately with your brand picture and place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-in-chennai-8.webp')}}" class="why-card-img-top"
                                    alt="Wide Range of Options">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wide Range of Options</h3>
                                    <p class="card-text">We provide a wide range of sign boards, including LED sign boards, ACP sign boards, neon glow signs, and digital signage. No matter what trend or kind of signage board you are seeking, we have all for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-in-chennai-9.webp')}}" class="why-card-img-top"
                                    alt="Affordable and Timely Delivery">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Affordable and Timely Delivery</h3>
                                    <p class="card-text"> As reliable sign board manufacturers, we guarantee punctual delivery and reasonable pricing without adjusting on quality. Whether you require a traditional LED sign for a corporate building or safety signage for your office, we are dedicated to rendering on time.</p>
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
</section>-->



<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Our Latest Design Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-13.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-13.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-14.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-14.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-15.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-15.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-16.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-16.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-17.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-17.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-18.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-18.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-19.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-19.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-in-chennai-20.webp')}}" data-lightbox="Sign Board Manufacturers in Chennai" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/signage-in-chennai-20.webp')}}" class="img-fluid" alt="Sign Board Manufacturers in Chennai"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">We have been coordinating with this company for many years for all our signage requirements. Their sign boards in Chennai are always top-class, and their LED sign boards are an ideal fit for our organizations. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-in-chennai-21.webp')}}" alt=" Rajesh Kumar" class="client-img">
                            <div>
                                <div class="client-name"> Rajesh Kumar</div>
                                <div class="client-role"> Retail Business Owner</div>
                                
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
                        <p class="card-text testimonial-card-text">We purchased an acrylic signboard for our restaurant, and it looks wonderful. Honestly one of the finest sign board manufacturers in Chennai</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-in-chennai-22.webp')}}" alt="Priya Sharma" class="client-img">
                            <div>
                                <div class="client-name">Priya Sharma</div>
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
                        <p class="card-text testimonial-card-text">The LED signage solutions supplied by these sign board makers in Chennai have modified our storefront. The LED sign board which they installed is vibrant, simple, and unique in its way.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-in-chennai-23.webp')}}" alt="Ankit Patel" class="client-img">
                            <div>
                                <div class="client-name">Ankit Patel</div>
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
                        <p class="card-text testimonial-card-text">We required a hospital sign, and the standard of their work was beyond our expectations. Thanks for the exclusive service!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-in-chennai-24.webp')}}" alt="Dr. S. Ramanathan" class="client-img">
                            <div>
                                <div class="client-name">Dr. S. Ramanathan</div>
                                <div class="client-role">Hospital Administrator</div>
                                
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
                        <p class="card-text testimonial-card-text">We were seeking neon signage for our cafe, and they rendered perfectly what we needed. The neon sign is bright and grasps attention, just as we expected.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-in-chennai-25.webp')}}" alt="Meera Gupta" class="client-img">
                            <div>
                                <div class="client-name">Meera Gupta</div>
                                <div class="client-role">Cafe Owner</div>
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
                                    <p class="card-text testimonial-card-text">We have been coordinating with this company for many years for all our signage requirements. Their sign boards in Chennai are always top-class, and their LED sign boards are an ideal fit for our organizations. Highly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-in-chennai-21.webp')}}" alt=" Rajesh Kumar" class="client-img">
                                        <div>
                                            <div class="client-name"> Rajesh Kumar</div>
                                            <div class="client-role"> Retail Business Owner</div>

                                           
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
                                    <p class="card-text testimonial-card-text">The team of sign board manufacturers in Chennai was wonderful. The ACP signboard they built for our office is polished and competent, and their service was unique. We are very content.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-in-chennai-22.webp')}}" alt="Priya Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
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
                                    <p class="card-text testimonial-card-text">The LED signage solutions supplied by these sign board makers in Chennai have modified our storefront. The LED sign board which they installed is vibrant, simple, and unique in its way.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-in-chennai-23.webp')}}" alt="Ankit Patel" class="client-img">
                                        <div>
                                            <div class="client-name">Ankit Patel</div>
                                            <div class="client-role">Restaurant Owner</div>
                                          
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
                                    <p class="card-text testimonial-card-text">The outdoor sign they formed for our store is noticeable and resistant. The glow sign is attractive at night. Brand Signages Chennai is our one-stop signage company!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-in-chennai-23.webp')}}" alt="Ankit Patel" class="client-img">
                                        <div>
                                            <div class="client-name">Ankit Patel</div>
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
                                    <p class="card-text testimonial-card-text">We required a hospital sign, and the standard of their work was beyond our expectations. Thanks for the exclusive service!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-in-chennai-24.webp')}}" alt="Dr. S. Ramanathan" class="client-img">
                                        <div>
                                            <div class="client-name">Dr. S. Ramanathan</div>
                                            <div class="client-role">Hospital Administrator</div>
                                         
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
                                    <p class="card-text testimonial-card-text">We were seeking neon signage for our cafe, and they rendered perfectly what we needed. The neon sign is bright and grasps attention, just as we expected.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-in-chennai-25.webp')}}" alt="Meera Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Meera Gupta</div>
                                            <div class="client-role">Cafe Owner</div>
                                           
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
        <h1 class="faq-title">Signages Chennai FAQs</h1>

        <div class="faq-item">
                <button class="faq-question">
                    What is Signage Used for?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Signage or branding signs are used for various purposes across different industries to communicate messages, enhance branding, and enhance navigation. Here are the key uses of signage:</p>
                    <ul>
                        <li>Branding & Marketing – Businesses use signage to display their logo, promote offers, and enhance brand visibility.</li>
                        <li>Wayfinding & Navigation – Helps people find directions in malls, hospitals, offices, and public spaces.</li>
                        <li>Safety & Compliance – Includes fire safety signs, construction signs, and hazard warnings to ensure safety.</li>
                        <li>Retail & Advertising – Digital and traditional signage in stores to promote products and boost sales.</li>
                        <li>Corporate & Office Use – Nameplates, department signs, and meeting room displays for organization and professionalism.</li>
                        <li>Event & Exhibition Signage – Used for banners, standees, and digital screens to guide attendees.</li>
                        <li>Informational Signage – Displays important messages, notices, or public announcements.</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Do I Choose a Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Choosing a signage depends on many factors, including your business type, location, and branding goals. Here’s how to make the right choice:</p>
                    <ul>
                        <li>Purpose – Determine whether the signage is for branding, wayfinding, promotions, or safety.</li>
                        <li>Location & Visibility – Choose signage that stands out in your environment, whether indoor or outdoor.</li>
                        <li>Right Material – Opt for durable materials based on weather conditions and usage.</li>
                        <li>Design & Readability – Ensure the signage has clear fonts, high-contrast colors, and an eye-catching design.</li>
                        <li>The Right Lighting – Consider LED or illuminated signs for better visibility, especially at night.</li>
                        <li>Hire Professionals – Collaborate with expert sign board manufacturers to get a high-quality, customized solution.</li>
                    </ul>
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
                What types of signages do you offer in Chennai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide various types of sign boards in Chennai. These are LED sign boards, digital signage, neon signage, acrylic signage, safety signage, and more. Our range encircles all kinds of business and commercial requirements, be it storefronts or corporate signage and outdoor displays.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long does it take to design and install custom signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The time needed for manufacturing and installation of a signboard is based on the type and intricacy of the design. Usually, it takes approximately a few days to complete manufacturing process. For custom LED sign boards, may take more time due to the technical aspects included. After that, we install the signage at your locations. We make certain of punctual delivery and installation while retaining quality.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you offer signage installation services in Chennai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we offer installation services for all the signboards we create. Our proficient team will make sure that your LED sign board, backlit board, or any other signage is installed well and securely, complying with all security norms and rules.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are your signages weather-resistant and durable for outdoor use?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we design outdoor signages to be weather-resistant and durable for outdoor usage. We use best-quality materials like acrylic, metal, and LED that can withstand extreme weather conditions, ensuring lasting performance & visibility in both summer and rainy days.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can you personalize sign boards for particular business requirements?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! As reliable signboard makers in Chennai, we emphasize offering tailored signage solutions. Whether you require a hospital sign, a neon sign, or an exceptional digital sign, we can produce a sign board customized to your organization. Our design team collaborates with you to know your specific requirements.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What factors influence the cost of signages in Chennai?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The cost of signages in Chennai may vary based on several factors, including:
                    <ul>
                        <li>Material: The type of material (e.g., acrylic, neon, steel, or LED) influences the overall price.</li>
                        <li>Size and Design: Larger or more intricate custom designs generally cost more due to increased labor and material use.</li>
                        <li>Customization: Unique features such as custom logos, colors, or lighting options may increase the cost.</li>
                        <li>Location: Installation charges can vary based on the site’s location and accessibility.</li>
                        <li>Quantity: Bulk orders may come with discounts, while single pieces or special orders can be a little costly.</li>
                    </ul>
                    We offer competitive pricing for all our sign boards, ensuring that you get the best value for your investment.
                </p>
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