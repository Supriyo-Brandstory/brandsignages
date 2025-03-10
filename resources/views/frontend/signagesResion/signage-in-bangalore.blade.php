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
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/banner1.webp')}}" alt="Signage Design for Coffee Brand by Our Signage Manufacturer">
                <div class="carousel-caption-custom">
                    <h2>High-Quality Sign Boards in Bangalore for Better Brand Visibility</h2>
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
        <h2 class="hero-title">Leading Signage Manufacturer - Brand Signages Bangalore</h2>
       

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/signage-2.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Brand Signages is one of the best signage manufacturers in Bangalore, providing high-class solutions for organizations of all sizes. As reliable signage makers, we are experts in making signage boards, acrylic sign boards, led signboards, and digital signage that uplift your brand visibility. Whether you require an outdoor sign, indoor signage, or a pylon sign, we render extraordinary outcomes customized to your needs.<br>Our signage company gives back-to-back signage solutions, from outline to installation. We design stainless steel, acrylic signs, lit signs, and glow sign boards that make a perpetual impact. For corporate offices, retail stores, and public spaces, our led signage and letter signage guarantee ultimate observability and fashion.  
                    
                    </p>
                <p class="brand-description">
                   With skillfulness in producing general display boards and led displays, we assist enterprises to be distinct with creative patterns and resistant substances. As one of the prominent sign board manufacturers in the area, we merge innovation and progressive technology to render signage that depicts your brand’s recognition.  <br>
Opt for Brand Signages for superior signages in Bangalore that are useful as well as gracefully attractive. Contact us soon for custom-fit signage solutions that fulfill your branding requirements.  
                </p>
            </div>
        </div>
    </div>
</section>
<x-coustom-inquiry-form />
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

<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages?</h2>
            <p class="card-text text-center">Brand Signages is your credible associate for high-class signages in Bangalore. As one of the top signage makers in Bangalore, we render innovative signage solutions customized to your extraordinary requirements.Choose Brand Signages for inventive signage designs that assist your organization to be noticeable. Contact us soon for top-class signboard solutions personalized to your requirements.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-11.webp')}}" class="why-card-img-top"
                        alt="Skillfulness and Inventiveness">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Skillfulness and Inventiveness</h3>
                        <p class="card-text">
                            Our group of expert board manufacturers utilizes modern technology to shape an array of signage boards, comprising led sign boards, acrylic sign boards, and glow sign boards.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-12.webp')}}" class="why-card-img-top"
                        alt="Wide Range of Products">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wide Range of Products</h3>
                        <p class="card-text">
                            We deliver everything from outdoor signs and pylon signs to indoor signage and digital signage. Our stainless steel and acrylic signs are ideal for contemporary branding.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-13.webp')}}" class="why-card-img-top"
                        alt="Custom Solutions">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Solutions</h3>
                        <p class="card-text">
                            Whether you require glossy LED signage for a corporate office or a spectacularly lit sign for your storefront, we create custom signages that mirror your brand’s individuality.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-14.webp')}}" class="why-card-img-top"
                        alt="Standard and Longevity">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Standard and Longevity</h3>
                        <p class="card-text text-start">
                            Our sign boards in Bangalore are designed with superior substances to guarantee perpetual rendition and bright visuals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/signage-15.webp')}}" class="why-card-img-top"
                        alt="Trusted Signage Company">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Trusted Signage Company</h3>
                        <p class="card-text">
                            With many years of experience as one of the best signage manufacturers in Bangalore, we have created goodwill for distinction, trustworthiness, and customer contentment.
                        </p>
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
                                <img src="{{asset('frontend/Images/new/signage-11.webp')}}" class="why-card-img-top"
                                    alt="Skillfulness and Inventiveness">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Skillfulness and Inventiveness</h3>
                                    <p class="card-text">
                                        Our group of expert board manufacturers utilizes modern technology to shape an array of signage boards, comprising led sign boards, acrylic sign boards, and glow sign boards.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-12.webp')}}" class="why-card-img-top"
                                    alt="Wide Range of Products">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wide Range of Products</h3>
                                    <p class="card-text">
                                        We deliver everything from outdoor signs and pylon signs to indoor signage and digital signage. Our stainless steel and acrylic signs are ideal for contemporary branding.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-13.webp')}}" class="why-card-img-top"
                                    alt="Custom Solutions">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Solutions</h3>
                                    <p class="card-text">
                                        Whether you require glossy LED signage for a corporate office or a spectacularly lit sign for your storefront, we custioze signages that mirror your brand’s individuality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-13.webp')}}" class="why-card-img-top"
                                    alt="Custom Solutions">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Solutions</h3>
                                    <p class="card-text">
                                        Whether you require glossy LED signage for a corporate office or a spectacularly lit sign for your storefront, we custioze signages that mirror your brand’s individuality.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-14.webp')}}" class="why-card-img-top"
                                    alt="Standard and Longevity">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Standard and Longevity</h3>
                                    <p class="card-text">
                                        Our sign boards in Bangalore are designed with superior substances to guarantee perpetual rendition and bright visuals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/signage-15.webp')}}" class="why-card-img-top"
                                    alt="Trusted Signage Company">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Trusted Signage Company</h3>
                                    <p class="card-text">
                                        With many years of experience as the best signage manufacturers in Bangalore, we have created goodwill for distinction, trustworthiness, and customer contentment.
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
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
<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/signage-21.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-20.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/hospital-20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-23.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/signage-23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/construction-safety-slide-3.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/construction-safety-slide-3.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-24.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/led-sign-24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-26.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/signage-26.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-27.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/signage-27.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/signage-28.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/signage-28.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">Brand Signages is incomparable! They produced a remarkable led sign board for our corporate office. I highly recommend them as the best signage makers in Bangalore!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-16.webp')}}" alt="Rahul Sharma" class="client-img">
                            <div>
                                <div class="client-name">Rahul Sharma</div>
                                
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
                        <p class="card-text testimonial-card-text">We purchased an acrylic signboard for our restaurant, and it looks wonderful. Honestly one of the finest sign board manufacturers in Bangalore</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-17.webp')}}" alt="Priya Sharma" class="client-img">
                            <div>
                                <div class="client-name">Priya Sharma</div>
                               
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
                        <p class="card-text testimonial-card-text">The outdoor sign they formed for our store is noticeable and resistant. The glow sign is attractive at night. Brand Signages Bangalore is our one-stop signage company!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-18.webp')}}" alt="Ankit Mehta" class="client-img">
                            <div>
                                <div class="client-name">Ankit Mehta</div>
                               
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
                        <p class="card-text testimonial-card-text">We wanted a general pylon sign, and their team provided exactly what we needed. Their signage solutions are creative and reasonable</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-19.webp')}}" alt="Neha Gupta" class="client-img">
                            <div>
                                <div class="client-name">Neha Gupta</div>
                                
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
                        <p class="card-text testimonial-card-text">The prohibition signage we purchased, comprising no entry and no smoking signage, reached promptly and was completely what we required. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/signage-21.webp')}}" alt="Arjun Verma" class="client-img">
                            <div>
                                <div class="client-name">Arjun Verma</div>
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
                                    <p class="card-text testimonial-card-text">Brand Signages is incomparable! They produced a remarkable led sign board for our corporate office. I highly recommend them as the best signage makers in Bangalore!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-16.webp')}}" alt="Rahul Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Rahul Sharma</div>
                                           
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
                                    <p class="card-text testimonial-card-text">We purchased an acrylic signboard for our restaurant, and it looks wonderful. Honestly one of the finest sign board manufacturers in Bangalore</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-17.webp')}}" alt="Priya Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
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
                                    <p class="card-text testimonial-card-text">The outdoor sign they formed for our store is noticeable and resistant. The glow sign is attractive at night. Brand Signages Bangalore is our one-stop signage company!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-18.webp')}}" alt="Ankit Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Ankit Mehta</div>
                                          
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
                                    <p class="card-text testimonial-card-text">The outdoor sign they formed for our store is noticeable and resistant. The glow sign is attractive at night. Brand Signages Bangalore is our one-stop signage company!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-19.webp')}}" alt="Ankit Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Ankit Mehta</div>
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
                                    <p class="card-text testimonial-card-text">We wanted a general pylon sign, and their team provided exactly what we needed. Their signage solutions are creative and reasonable</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-19.webp')}}" alt="Neha Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Neha Gupta</div>
                                         
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
                                    <p class="card-text testimonial-card-text">Brand Signages Bangalore formulated a superb LED display for our office. Their service was prompt, and the outcome was simply perfect. They are the best signage manufacturers in Bangalore!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/signage-21.webp')}}" alt="Arjun Verma" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun Verma</div>
                                           
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
                How much does signages cost?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Signage cost depends on the material, size, and complexity of design. Generally vinyl signages cost less while acrylic, digital, stainless steel, and <a href="https://brandsignages.com/neon-sign-board-bangalore" target="_blank" style="color: #E43D12"> neon signs</a> are more expensive. Additional features like digital components, illumination may have an influence on final product costing. The cost of signage can be a few hundred to several thousand rupees depending on the requirements. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is a signage company?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Signage companies design, manufacture, and install different types of signages for organizations and businesses. Signage company in Bangalore expertise in creating informational, branding, safety, and promotional signages. Signages are made with different types of materials like acrylic, stainless steel, neon, LED, digital displays, etc. They offer branding, signages design, and installation services to help businesses enhance visibility. 
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Why should I choose Brand Signages for my sign requirements?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Because <a href="https://brandsignages.com/" target="_blank" style="color: #E43D12">Brand Signages</a> is one of the leading sign board manufacturing companies in Bangalore. We offer custom signage solutions designed to meet specific business requirements. Our product range includes safety signs, directional signs, <a href="https://brandsignages.com/digital-signage-company-bangalore" target="_blank" style="color: #E43D12">digital displays</a>, <a href="https://brandsignages.com/safety-signages-in-bangalore" target="_blank" style="color: #E43D12">safety signs</a>, and more. We ensure each design conveys a better brand message and stands out from the rest, and communicates effectively. 
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Does Brand Signages provide routine signage solutions for organizations in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we provide routine signage solutions for organizations in Bangalore & all over India. As credible signage makers in Bangalore, we make branding signages, safety signages, directional signages, informational signages, and more to fulfill your branding requirements. Our signage solutions ensure compliances and branding across industries like retail, healthcare, education institution, office, etc. Contact us for high-quality custom sign board requirements.

                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide signage installation services throughout Bangalore?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! We not only produce high-class signage boards in Bangalore, but we also provide competent installation services for all kinds of signage boards, comprising outdoor signs, indoor signage, glow sign boards, and more.
                </p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                What kinds of substances are utilized for producing resistant and high-class signages?


                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Premium quality and resistant signages are made with durable materials like stainless steel that provide a sleek and professional. Acrylic signages have a glossy finish and yet are ideal for using indoor and outdoor. Aluminum signage is another option that is rust proof and suitable for outdoor signages.
                </p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How can I request a custom design or quote for my signage requirements?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    You can simply contact us to talk about your needs. Whether you require a digital display sign, acrylic sign board, LED signage, or neon sign, our team will assist you through the method and offer a custom quote.

                </p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                What industries do you cater to in your signage solutions?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We serve several industries, consisting of real estate, banks, restaurants, hospitals, and corporate offices, designing customized signage designs based on specific requirements.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection