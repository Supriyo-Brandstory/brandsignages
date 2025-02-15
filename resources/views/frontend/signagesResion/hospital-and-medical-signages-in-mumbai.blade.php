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
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-1.webp')}}" alt="Custom Neon Sign Boards in Chennai">
                <div class="carousel-caption-custom">
                    <h1>Hospital and Medical Signages in Mumbai </h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-2.webp')}}" alt="Custom Neon Sign Boards in Chennai">
                <div class="carousel-caption-custom">
                    <h1>Hospital and Medical Signages in Mumbai </h1>
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
        <h2 class="hero-title">Hospital & Medical Signs - Brand Signages </h2>
       

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-3.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                {{-- <h2 class="brand-title">#1 LED Signage Manufacturers in Chennai               </h2> --}}
                <p class="brand-description">
                    We focus on making high-class hospital signs in Mumbai to make sure that your medical accommodation is operational as well as visually attractive. Our sign boards are outlined to render transparent directions, promote branding, and generate an embracing atmosphere for patients and guests. Whether you require a hospital sign, LED signage, or a digital standee, we have the ideal solution for you.  For healthcare accommodations of all sizes, we provide resistant and competent medical signs in Mumbai. From hospital signage boards to LED sign boards, our products are designed to fulfill your precise needs. These signs are not only efficient for interaction but also assist in creating faith with your audience through their contemporary and neat designs.  

                </p>
                <p class="brand-description">
                    If you operate a dental clinic, our professional dental clinic signs in Mumbai can exhibit your services while retaining a competent look. Our signage boards can be personalized to mirror your clinic’s branding, guaranteeing your patients feel relaxed and aware. We provide a huge array of solutions, comprising LED signage, sign boards, and hospital signage to fit the requirements of hospitals, clinics, and medical centers. Whether it’s a hospital signage board or a polished digital standee, we concentrate on rendering creative designs that make an impression. Select us for superior hospital signs in Mumbai and give your place a competent edge with dependable, trendy, and efficient sign solutions.  

                </p>
                </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Healthcare Signage in Mumbai?</h2>
            <p class="card-text text-center">When it comes to producing efficient and appealing hospital signs in Mumbai, we are distinct for our dedication to class, creativity, and customer contentment. Here’s why you should opt for us for your healthcare signage requirements.Opt for us for top-class medical signs in Mumbai that merge premier artistry, inventive design, and unique longevity.
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Premium Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Premium Signage</h3>
                        <p class="card-text">We provide a huge range of superior hospital signage boards that integrate usefulness with fashion and longevity. Whether it’s a glossy LED sign or a persistent sign board, our products make certain that your accommodation looks unique, advanced, and embracing.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-5.webp')}}" class="why-card-img-top"
                        alt="Custom Solutions ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Solutions </h3>
                        <p class="card-text"> Every healthcare accommodation is exceptional, which is why we offer entirely tailored medical signs in Mumbai. From dental clinic signs in Mumbai to huge-scale hospital signage, our team works nearly with you to craft inventive and pragmatic solutions customized to your particular needs.</p>
                    </div>
                </div>
            </div>
           
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                            alt="Quality Materials  ">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Quality Materials  </h3>
                            <p class="card-text">Our signage boards are shaped from standardized substances to ensure unique longevity and a sleep coating. Whether it’s a digital standee, LED sign board, or custom sign board, you can rely on us for dependable, durable products that retain their attraction.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-7.webp')}}" class="why-card-img-top"
                        alt="Quality Materials  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Cutting-Edge Design</h3>
                        <p class="card-text">We utilize the updated design schemes to produce creative LED signage and hospital signs that improve observability and fortify branding. Our innovative perspective makes sure that each hospital signage board we supply is distinctly in appearance while retaining productivity and translucency.</p>
                    </div>
                </div>
        </div>
           
          
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                        alt="2-Year Warranty">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">2-Year Warranty</h3>
                        <p class="card-text">All our sign boards are available with an extensive 2-year warranty, giving you a calm state of mind and guarantee of class. Whether it’s a hospital sign, medical sign, or a dental clinic sign, we stand by our products with a security that confirms long-run value. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-9.webp')}}" class="why-card-img-top"
                        alt="Comprehensive Solutions">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Comprehensive Solutions</h3>
                        <p class="card-text">From visualizing to installation, we offer back-to-back services for all kinds of hospital signs in Mumbai. Our skillfulness comprises LED signage, digital standees, and general signage boards for hospitals, clinics, and medical facilities, guaranteeing effortless delivery each time. </p>
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
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-4.webp')}}" class="why-card-img-top"
                                    alt="Premium Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Premium Signage</h3>
                                    <p class="card-text">We provide a huge range of superior hospital signage boards that integrate usefulness with fashion and longevity. Whether it’s a glossy LED sign or a persistent sign board, our products make certain that your accommodation looks unique, advanced, and embracing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Custom Solutions ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Solutions </h3>
                                    <p class="card-text"> Every healthcare accommodation is exceptional, which is why we offer entirely tailored medical signs in Mumbai. From dental clinic signs in Mumbai to huge-scale hospital signage, our team works nearly with you to craft inventive and pragmatic solutions customized to your particular needs.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                                    alt="Quality Materials  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Quality Materials  </h3>
                                    <p class="card-text">
                                        Our signage boards are shaped from standardized substances to ensure unique longevity and a sleep coating. Whether it’s a digital standee, LED sign board, or custom sign board, you can rely on us for dependable, durable products that retain their attraction.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-7.webp')}}" class="why-card-img-top"
                                    alt="Quality Materials  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Cutting-Edge Design</h3>
                                    <p class="card-text">We utilize the updated design schemes to produce creative LED signage and hospital signs that improve observability and fortify branding. Our innovative perspective makes sure that each hospital signage board we supply is distinctly in appearance while retaining productivity and translucency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                                    alt="2-Year Warranty">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">2-Year Warranty</h3>
                                    <p class="card-text">All our sign boards are available with an extensive 2-year warranty, giving you a calm state of mind and guarantee of class. Whether it’s a hospital sign, medical sign, or a dental clinic sign, we stand by our products with a security that confirms long-run value.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-9.webp')}}" class="why-card-img-top"
                                    alt="Comprehensive Solutions">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Comprehensive Solutions</h3>
                                    <p class="card-text">From visualizing to installation, we offer back-to-back services for all kinds of hospital signs in Mumbai. Our skillfulness comprises LED signage, digital standees, and general signage boards for hospitals, clinics, and medical facilities, guaranteeing effortless delivery each time.     </p>
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
        <h2 class="hero-title">Hospital & Medical Signages We Deliver   </h2>
        <p class="card-text text-center">We concentrate on designing a number of top-quality hospital signs in Mumbai to fulfill the multiple requirements of healthcare establishments. Our signages are crafted to support, acknowledge, and promote the experience of patients and guests. Here are the kinds of medical signs in Mumbai we supply:</p>
       
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-10.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Directional Signs</h2>
                <p class="brand-description">
                    Make sure of leveled steerage in your establishment with transparent and competent sign boards. Our directional signs assist patients and guests in finding their route effortlessly, reducing chaos and enhancing effectiveness.
                </p>
                <h2 class="brand-title">Emergency Signs</h2>
                <p class="brand-description">
                     We produce highly observable and dependable LED signage for emergency exits, fire safety, and first aid positions. These signage boards are crafted to make certain of security during serious circumstances.
                </p>
                <h2 class="brand-title">Informational Signs  </h2>
                <p class="brand-description">Our hospital signage boards offer significant details like visiting hours, hospital policies, and facility norms. These hospital signs are easily readable and positioned judiciously for ultimate visibility.
                </p>
               
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Clinic Signs</h2>
                <p class="brand-description">
                    We provide general clinic signs to depict your establishment’s branding. Whether it’s a glossy LED sign board or a customary sign board, our solutions serve all kinds of clinics, including general and professional ones.
                </p>
                <h2 class="brand-title">Doctor's Office Signs</h2>
                <p class="brand-description">
                    Competent sign boards for doctor’s offices assist in determining rooms and departments. These signs have a professional look while making sure that they are clear. 
                </p>
                <h2 class="brand-title">Treatment Room Signs  </h2>
                <p class="brand-description">With our creative LED display boards in Mumbai, organizations can focus on their brand seamlessly. Be it digital displays, outdoor LED advertising, or indoor LED boards, our solutions are shaped to improve your existence and render influential advertising outcomes. Have faith in us to supply standardized LED sign boards that make your brand illuminate!
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-11.webp')}}" alt="Prohibitory Signages" class="img-fluid">
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
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-12.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Outdoor Signs</h2>
                <p class="brand-description">
                    For outdoor branding, we supply resistant LED signage and digital standees. These are ideal for making your accommodation effortlessly recognized, even from far away. 
                </p>
                <h2 class="brand-title">Dental Clinic Signs </h2>
                <p class="brand-description">
                    We render contemporary dental clinic signs in Mumbai customized to exhibit your services. These hospital signage boards promote the elegant attraction and professionalism of your clinic.
                </p>
                <P class="brand-description">Select Brand Signage for superior medical signs in Mumbai that integrate operationality and style. From hospital signage boards to LED sign boards, our solutions make sure that your healthcare facility is distinct while supplying an effortless experience for patients and guests. Let us support you make a perpetual influence with proficiently designed hospital signs in Mumbai.</p>
               
            </div>
        </div>
    </div>
</section>
<section class="why-bg-lightS py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Benefits of Effective Healthcare Signage </h2>
            <p class="card-text text-center">Effective healthcare signage plays a critical part in enhancing the all-rounded working of medical establishments. Here are some major advantages of having the proper hospital signs in Mumbai.Opt for us for dependable medical signs in Mumbai to make certain that your establishment offers a favorable, professional, and secure atmosphere. Whether it’s a hospital sign, an LED sign, or a digital standee, we provide efficient signage solutions that fulfill your requirements and overpass expectations.
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-13.webp')}}" class="why-card-img-top"
                        alt="Improved Patient Experience">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Improved Patient Experience</h3>
                        <p class="card-text">Well-planned sign boards assist patients in seamlessly steerage the facility, minimizing stress and chaos. Transparent medical signs in Mumbai provide a seamless approach to significant zones, promoting the overall experience for patients and guests.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-14.webp')}}" class="why-card-img-top"
                        alt="Enhanced Branding ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Enhanced Branding </h3>
                        <p class="card-text">Hospital signage and LED sign boards are big instruments for reinforcing your brand recognition. Traditional hospital signage boards with logos and colors make your accommodation more identifiable, giving a competent appearance while augmenting observability in a combative market. Dental clinic signs in Mumbai also assist in generating a separate and embracing acknowledgment for your clinic.</p>
                    </div>
                </div>
            </div>
           
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-15.webp')}}" class="why-card-img-top"
                            alt="Compliance with Regulations  ">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Compliance with Regulations  </h3>
                            <p class="card-text">Healthcare accommodations are needed to fulfill a few rules in connection with security and attainability. With LED signage and signage boards depicting emergency exits, fire safety, and accessible paths, you guarantee abidance with domestic rules. Hospital signs crafted to meet these norms assist in safeguarding legal matters and improve patient security.</p>
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
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-13.webp')}}" class="why-card-img-top"
                                    alt="Improved Patient Experience">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Improved Patient Experience</h3>
                                    <p class="card-text">Well-planned sign boards assist patients in seamlessly steerage the facility, minimizing stress and chaos. Transparent medical signs in Mumbai provide a seamless approach to significant zones, promoting the overall experience for patients and guests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-14.webp')}}" class="why-card-img-top"
                                    alt="Enhanced Branding ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Enhanced Branding </h3>
                                    <p class="card-text">Hospital signage and LED sign boards are big instruments for reinforcing your brand recognition. Traditional hospital signage boards with logos and colors make your accommodation more identifiable, giving a competent appearance while augmenting observability in a combative market. Dental clinic signs in Mumbai also assist in generating a separate and embracing acknowledgment for your clinic.</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-15.webp')}}" class="why-card-img-top"
                                        alt="Compliance with Regulations  ">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Compliance with Regulations  </h3>
                                        <p class="card-text">Healthcare accommodations are needed to fulfill a few rules in connection with security and attainability. With LED signage and signage boards depicting emergency exits, fire safety, and accessible paths, you guarantee abidance with domestic rules. Hospital signs crafted to meet these norms assist in safeguarding legal matters and improve patient security.</p>
                                    </div>
                                </div>
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
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-16.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-17.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-18.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-19.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-20.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-21.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-22.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-23.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">The Hospital and Medical Signages in Mumbai we bought has modified our store’s observability. The outdoor LED display is bright and highly long-lasting. Wonderful job!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Amit Shah</div>
                                
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
                        <p class="card-text testimonial-card-text">We are excited with our traditional LED signs. The color LED display and moving display alternatives have made advertising our products very simple!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                          
                            <div>
                                <div class="client-name">Priya Menon</div>
                               
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
                        <p class="card-text testimonial-card-text">The LED sign board which we installed at our cafe has become an attention-getter. Its polished digital display and advanced design are wonderful!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                          
                            <div>
                                <div class="client-name">Rohan Kapoor</div>
                               
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
                        <p class="card-text testimonial-card-text">The LED boards we purchased for our showroom are top-class. The pixel LED technology and energy saving make them the ideal advertising solution.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                          
                            <div>
                                <div class="client-name">Sneha Joshi</div>
                                
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
                        <p class="card-text testimonial-card-text">Our indoor LED display panels have made a big change at the time of presentations and events. The wall-mounted LED screen is easy to operate and attention-grasping!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Vikram Desai.</div>
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
                                    <p class="card-text testimonial-card-text">The Hospital and Medical Signages in Mumbai we bought has modified our store’s observability. The outdoor LED display is bright and highly long-lasting. Wonderful job!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Amit Shah</div>
                                           
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
                                    <p class="card-text testimonial-card-text">Our restaurant's ambiance is improved with their custom LED signs. The LED digital boards make our menu and promotions distinctively attractive!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                      
                                        <div>
                                            <div class="client-name">Priya Menon</div>
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
                                    <p class="card-text testimonial-card-text">The LED sign board which we installed at our cafe has become an attention-getter. Its polished digital display and advanced design are wonderful!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                      
                                        <div>
                                            <div class="client-name">Rohan Kapoor</div>
                                          
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
                                    <p class="card-text testimonial-card-text">The LED sign board which we installed at our cafe has become an attention-getter. Its polished digital display and advanced design are wonderful! </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                      
                                        <div>
                                            <div class="client-name">Rohan Kapoor</div>
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
                                    <p class="card-text testimonial-card-text">The LED boards we purchased for our showroom are top-class. The pixel LED technology and energy saving make them the ideal advertising solution.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                      
                                        <div>
                                            <div class="client-name">Sneha Joshi</div>
                                         
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
                                    <p class="card-text testimonial-card-text">Our indoor LED display panels have made a big change at the time of presentations and events. The wall-mounted LED screen is easy to operate and attention-grasping!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Vikram Desai.</div>
                                           
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
                What are the benefits of utilizing LED display boards for organizations in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>LED display boards in Mumbai provide unparalleled observability, energy saving, and longevity. They are ideal for comprehensive advertising displays, guaranteeing your brand is distinct. With outdoor LED displays and indoor LED alternatives, these LED displays grasp attention and boost customer engagement.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How made-to-order are LED sign boards to align with particular branding requirements?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our custom LED signs are fully made-to-order. Whether you require a color LED display, moving display, or pixel LED private design, we customize the LED sign board to mirror your brand's recognition flawlessly. Opt from several sizes, colors, and animations to produce exceptional designs.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the life cycle of LED display boards and custom LED signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    LED boards and LED display panels have a long life cycle, generally persisting over 50,000 hours. Their longevity guarantees steady performance, making them a dependable preference for any organization.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide installation and upkeep services for LED signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we offer extensive installation and upkeep services. From organizing wall-mounted LED displays to upkeep advertising LED solutions, our team makes sure your LED light displays work effortlessly.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are LED sign boards appropriate for indoor as well as outdoor executions?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Definitely! Our LED sign boards are all-inclusive, and crafted for indoor LED and outdoor LED display usage. Whether you require a bright LED advertising display for the outdoors or a polished LED digital display for indoor places, we have all for you.
Our LED display boards in Mumbai are outlined to fulfill multiple business requirements, providing class, dependability, and unique performance.
                </p>
            </div>
        </div>
       
    </div>
</section>

@endsection