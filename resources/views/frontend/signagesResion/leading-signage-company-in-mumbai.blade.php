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
                <img src="{{asset('frontend/Images/new/signage-1.webp')}}" alt="Prohibition Signs for Workplace Safety">
                <div class="carousel-caption-custom">
                    <h1>Expert Signage Makers in Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/banner1.webp')}}" alt="Signage Design for Coffee Brand by Our Signage Manufacturer">
                <div class="carousel-caption-custom">
                    <h2>High-Quality Sign Boards in Bangalore for Better Brand Visibility</h2>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>

            
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Modern Acrylic Sign Boards in Bangalore - Perfect <br>Blend of Style and Strength</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/acrylic-sign-bangalore.webp')}}" alt="Acrylic Sign Boards" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Using an acrylic sign board adds a contemporary and polished touch to any space. Whether for a commercial office in Bangalore, retail outlet, or residential property, these high-quality signboards exude professionalism. Products like acrylic nameplates and acrylic wall signs offer a sleek appearance that enhances your branding. Their clean design makes them a popular choice for creating a lasting impression.

                </p>  
                <p class="brand-description">
                    Brand Signages is a top-tier acrylic sign board manufacturer in Bangalore. We provide acrylic LED signs, transparent boards, acrylic wall signs, and custom acrylic sign board designs to fulfill your extraordinary requirements. Our experts design premium quality signage solutions that uplift your brand’s existence. Showcase your brand's identity with expertly designed acrylic sign boards from Brand Signages.

                </p>
                <p class="brand-description">
                    At Brand Signages, we understand the essence of creating a lasting impact through effective branding. Our acrylic sign boards are crafted with innovation & precision, ensuring they not only enhance the aesthetic of your space but also communicate your brand’s values.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Industries We Serve with Custom Signages</h2>
            <p class="card-text text-center">At Brand Signages, we take pride in being among the best signage makers in Bangalore. Our traditional signage solutions serve a huge number of industries, rendering standardized sign boards and patterns that improve brand observability. Collaborate with Brand Signages to enhance your brand visibility with creative and resistant signages solutions.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-3.webp')}}" class="why-card-img-top"
                        alt="Apartment Signage Solutions">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Apartment Signage Solutions</h3>
                        <p class="card-text">We shape LED sign boards, acrylic sign boards, and pylon signs to assist citizens and guests in seamlessly finding buildings. Our glow signs and lit signs give sophistication and operationality to apartment buildings.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-4.webp')}}" class="why-card-img-top"
                        alt="Banking Sector Signage Services">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Banking Sector Signage Services</h3>
                        <p class="card-text">Banks rely on us for long-lasting stainless steel signage, LED displays, and competent signage boards that match their commercial branding.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/signage-5.webp')}}" class="why-card-img-top"
                            alt="Corporate Signage for Businesses">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Corporate Signage for Businesses</h3>
                            <p class="card-text">We generate spectacular letter signage, digital signage, and formal signage boards for corporate offices, guaranteeing a competent and embracing look.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-5.webp')}}" class="why-card-img-top"
                        alt="Corporate Signage for Businesses">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Signage for Businesses</h3>
                        <p class="card-text">We generate spectacular letter signage, digital signage, and formal signage boards for corporate offices, guaranteeing a competent and embracing look.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-6.webp')}}" class="why-card-img-top"
                        alt="Restaurant and Hotel Signage Designs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Restaurant and Hotel Signage Designs</h3>
                        <p class="card-text">From outdoor signs to fashionable indoor signage, we shape led signage and glow sign boards that appeal to clients and improve the atmosphere.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-7.webp')}}" class="why-card-img-top"
                        alt="Medical and Hospital Signages">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Medical and Hospital Signages</h3>
                        <p class="card-text">Our expertized sign board manufacturers create transparent and operational signage designs, comprising acrylic signs and display boards, perfect for hospitals and clinics.</p>
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
                                <img src="{{asset('frontend/Images/new/signage-3.webp')}}" class="why-card-img-top"
                                    alt="Apartment Signage Solutions">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Apartment Signage Solutions</h3>
                                    <p class="card-text">We shape LED sign boards, acrylic sign boards, and pylon signs to assist citizens and guests in seamlessly finding buildings. Our glow signs and lit signs give sophistication and operationality to apartment buildings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-4.webp')}}" class="why-card-img-top"
                                    alt="Banking Sector Signage Services">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Banking Sector Signage Services</h3>
                                    <p class="card-text">Banks rely on us for long-lasting stainless steel signage, LED displays, and competent signage boards that match their commercial branding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-5.webp')}}" class="why-card-img-top"
                                    alt="Corporate Signage for Businesses">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate Signage for Businesses</h3>
                                    <p class="card-text">We generate spectacular letter signage, digital signage, and formal signage boards for corporate offices, guaranteeing a competent and embracing look.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-5.webp')}}" class="why-card-img-top"
                                    alt="Corporate Signage for Businesses">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate Signage for Businesses</h3>
                                    <p class="card-text">We generate spectacular <a href="https://brandsignages.com/office-desk-signs-in-bangalore" target="_blank">office design signage</a>, digital signage, and nameplate signage boards for corporate offices, guaranteeing a competent and embracing look.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-6.webp')}}" class="why-card-img-top"
                                    alt="Restaurant and Hotel Signage Designs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Restaurant and Hotel Signage Designs</h3>
                                    <p class="card-text">From outdoor signs to fashionable indoor signage, we shape premium restaurant signage boards that appeal to clients and improve the atmosphere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-7.webp')}}" class="why-card-img-top"
                                    alt="Medical and Hospital Signages">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Medical and Hospital Signages</h3>
                                    <p class="card-text">Our expert sign board manufacturers create transparent and professional signage designs, comprising acrylic signs and display boards, perfect for hospitals and clinics.</p>
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
        <h2 class="hero-title">We Craft Excellence: Buy Custom <br>Signages in Bangalore </h2>
        <p class="card-text text-center">Signages are gaining popularity for their perfect blend of aesthetics and practical functionality. We are among the leading sign board makers in Bangalore, crafting innovative & high-quality signage solutions to elevate your brand's presence.</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/signage-8.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Unique Traditional Signages</h2>
                <p class="brand-description">
                    <ul>
                        <li>At Brand Signages, we feel honored to design traditional signages in Bangalore that are exceptional for their class and pattern. </li>
                        <li>Pioneer signage makers in Bangalore, we are experts in supplying signage solutions personalized to your desires. </li>
                        <li>From signboards to cutting-edge digital signage, we make sure that your brand illuminates each detail. </li>
                    </ul>
                </p>
                <h2 class="brand-title">Huge Collection of Products</h2>
                <p class="brand-description">
                    Our proficient board manufacturers produce:
                    <ul>
                        <li><a href="{{route('led_sign_board_in_bangalore')}}" style="text-decoration: unset;color:#E43D12">LED sign boards</a></li>
                        <li><a href="{{route('neon_sign_board_bangalore')}}" style="text-decoration: unset;color:#E43D12">Glow sign board</a></li>
                        <li><a href="{{route('acrylic_signage_manufacturer_bangalore')}}" style="text-decoration: unset;color:#E43D12">Acrylic sign boards</a></li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Solutions for</h2>
                <p class="brand-description">
                    
                    <ul>
                        <li>Remarkable outdoor signs.</li>
                        <li>Polished indoor signage.</li>
                        <li>Executive appearances for your corporate office.</li>
                    </ul>
                </p>
                <h2 class="brand-title">Designs that have Creativity and longevity</h2>
                <p class="brand-description">
                  
                    <ul>
                        <li>We also provide stainless steel and acrylic signs, letter signage, and LED displays to fulfill your branding targets.</li>
                        <li>Our digital display signs are ideal for organizations looking for high observability.</li>
                        <li>Our glow signs give gracefulness and attraction to any place. </li>
                    </ul>
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/signage-9.webp')}}" alt="Prohibitory Signages" class="img-fluid">
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
                    <img src="{{asset('frontend/Images/new/signage-10.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Dependable signage manufacturers in Bangalore</h2>
                <p class="brand-description">
                    <ul>
                        <li>We convert your wish to reality with creative signage designs that are operational and visibly attractive. </li>
                        <li>Contact Brand Signages soon to discover our superior range of sign boards in Bangalore and uplift your brand with distinction.</li>
                    </ul>
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
                        <p class="card-text testimonial-card-text">We placed an order for an acrylic sign board in Bangalore, and the standard goes beyond our expectations. The pattern was glossy, and the service was wonderful!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore12.webp')}}" alt="Ramesh K" class="client-img">
                            <div>
                                <div class="client-name">Ramesh K</div>
                                <div class="client-role">Corporate office owner</div>
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
                        <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore13.webp')}}" alt="Meera S" class="client-img">
                            <div>
                                <div class="client-name">Meera S</div>
                                <div class="client-role">Retail Business Owner</div>
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
                        <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore14.webp')}}" alt="Priya T" class="client-img">
                            <div>
                                <div class="client-name">Priya T</div>
                                <div class="client-role">HR Manager</div>
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
                        <p class="card-text testimonial-card-text">The team delivered beautiful acrylic wall signs that aligned our branding flawlessly. Their board manufacturer skillfulness is noticeable in the details</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore15.webp')}}" alt="Rohan Gupta" class="client-img">
                            <div>
                                <div class="client-name">Rajeev P</div>
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
                        <p class="card-text testimonial-card-text">From shaping to installation, their service was effortless. The acrylic signages Bangalore we bought have genuinely uplifted our business existence.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore16.webp')}}" alt="Ishita Mehta" class="client-img">
                            <div>
                                <div class="client-name">Suman G</div>
                                <div class="client-role">Entrepreneur</div>
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
                                    <p class="card-text testimonial-card-text">We placed an order for an acrylic sign board in Bangalore, and the standard goes beyond our expectations. The pattern was glossy, and the service was wonderful!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore12.webp')}}" alt="Ramesh K" class="client-img">
                                        <div>
                                            <div class="client-name">Ramesh K</div>
                                            <div class="client-role">Corporate office owner</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore13.webp')}}" alt="Meera S" class="client-img">
                                        <div>
                                            <div class="client-name">Meera S</div>
                                            <div class="client-role">Retail Business Owner</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore14.webp')}}" alt="Priya T" class="client-img">
                                        <div>
                                            <div class="client-name">Priya T</div>
                                            <div class="client-role">HR Manager</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night! <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore14.webp')}}" alt="Priya T" class="client-img">
                                        <div>
                                            <div class="client-name">Priya T</div>
                                            <div class="client-role">HR Manager</div>
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
                                    <p class="card-text testimonial-card-text">The team delivered beautiful acrylic wall signs that aligned our branding flawlessly. Their board manufacturer skillfulness is noticeable in the details</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore15.webp')}}" alt="Rohan Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rajeev P</div>
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
                                    <p class="card-text testimonial-card-text">From shaping to installation, their service was effortless. The acrylic signages Bangalore we bought have genuinely uplifted our business existence.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore16.webp')}}" alt="Ishita Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Suman G</div>
                                            <div class="client-role">Entrepreneur</div>
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

<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore17.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore24.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>

    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                Are acrylic signages appropriate for outdoor landscapes?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signage in Bangalore is perfect for outdoor usage. Our outdoor acrylic products, comprising acrylic LED signages and ACP sign boards, are weather-proof and long-lasting, making them ideal for all sorts of environmental circumstances.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What diversities of acrylic signage alternatives does Brand Signages provide?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Brand Signages provides a huge collection of acrylic signage alternatives, comprising acrylic sign boards, acrylic wall signs, acrylic name plates, glow sign boards, LED sign boards, and acrylic LED signs. We offer order-made designs to suit your business requirements.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long can acrylic signage bear environmental circumstances?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic sign boards are highly persistent and can last for a number of years, even in difficult outdoor situations. Our premium quality acrylic signage is made to bear rough weather, UV rays, and other environmental aspects.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is any exceptional maintenance needed to maintain acrylic signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Upkeeping acrylic signage boards is simple. Just clean them with a soft cloth and light detergent to keep their appearance like new. No exceptional maintenance is needed.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How fast can Brand Signages provide a traditional acrylic signage order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide instant delivery for traditional acrylic signage orders. According to the design and intricacy, we usually deliver in a few days or a week.</p>
            </div>
        </div>

    </div>
</section>

@endsection