@extends('frontend.layout.appLayout')
@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}" />
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/neon-sign-board-bangalore.css') }}" />
@endpush

<section class="hero-banner"
    style="background-image: url('{{ asset('frontend/Images/neo-led-banner.webp') }}'); ">
    <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <h1 class="hero-banner_title">Best Neon Signage Boards in<br>Bangalore- Signs That Speak Loud</h1>
                <p>Brand Signages is a premier digital signage manufacturer with 12+ years <br>of experience.
                    We create digital displays, interactive kiosk for all industries. With <br>in-house manufacturing
                    setup
                    in Bangalore, we deliver PAN India services.
                </p>
                <a href="https://brandsignages.com/contact-us">
                    <button class="contact-btn">Book a Demo Call</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5" id="gallery-container">
        <h2 class="hero-title  mb-4">Premium Neon Signboards Bangalore- <br> Bold, Brilliant, and Unforgettable</h2>
        <p class=" text-center mb-5">Add a fresh touch to your space and create a lasting impression with luminous neon lights that bring your branding to life.
            Brand Signages is the premier neon signage board manufacturer in Bangalore. We offer custom neon signboards in Bangalore for businesses with striking visuals and exceptional build quality. 
                From outdoor neon signs to sleek acrylic neon boards, our solutions enhance both branding and decor. We design spectacular neon signs perfect for businesses looking for eye-catching, 
                stylish, and durable signage. Our expertise spans stunning open-face neon signs, retro-style neon lights, and modern LED-neon hybrid boards.
        <br>Stand out from the crowd with expertly crafted neon signboards from <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Brand Signages</a>. Our neon sign boards are lightweight, affordable, and energy-efficient compared to others. 
            We deliver the most iconic and technologically advanced neon signs with unmatched quality and standards. 
        </p>

        <div class="row align-items-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-1.webp')}}" data-lightbox="Neon Light Design" data-title="Image 1">
                    <img src="{{asset('frontend/Images/neon-1.webp')}}" class="img-fluid" alt="Neon Light Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-2.webp')}}" data-lightbox="Neon Light Signboard Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/neon-2.webp')}}" class="img-fluid" alt="Neon Light Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-3.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 3">
                    <img src="{{asset('frontend/Images/neon-3.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-4.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-4.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-5.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-5.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-6.webp')}}" data-lightbox="Neon Light Sign Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-6.webp')}}" class="img-fluid" alt="Neon Light Sign Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-7.webp')}}" data-lightbox="Neon Sign Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-7.webp')}}" class="img-fluid" alt="Neon Sign Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-8.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-8.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="min-abt-section">
    <div class="container">
        <h2 class="min-abt-title text-center">Premium Neon Signboards Bangalore- <br> Bold, Brilliant, and Unforgettable</h2>
        <div class="row align-items-center min-abt-main-row">
            <div class="col-lg-6">
                <div class="min-abt-img-box">
                    <img src="{{asset('frontend/Images/nl-1.webp')}}" alt="Neon Sign Board Bangalore" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="min-abt-content">
                    <p>Add a fresh touch to your space and create a lasting impression with luminous neon lights that bring your branding to life. Brand Signages is the premier neon signage board manufacturer in Bangalore. We offer custom neon signboards in Bangalore for businesses with striking visuals and exceptional build quality. From outdoor neon signs to sleek acrylic neon boards, our solutions enhance both branding and decor. We design spectacular neon signs perfect for businesses looking for eye-catching, stylish, and durable signage. Our expertise spans stunning open-face neon signs, retro-style neon lights, and modern LED-neon hybrid boards.</p>
                    <p>Stand out from the crowd with expertly crafted neon signboards from <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Brand Signages</a>. Our neon sign boards are lightweight, affordable, and energy-efficient compared to others. We deliver the most iconic and technologically advanced neon signs with unmatched quality and standards.</p>
                </div>
            </div>
        </div>
        <div class="row min-abt-gallery-row">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="min-abt-sub-img">
                     <img src="{{asset('frontend/Images/nl-2.webp')}}" alt="Neon Design" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="min-abt-sub-img">
                     <img src="{{asset('frontend/Images/nl-3.webp')}}" alt="Neon Design" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="min-abt-sub-img">
                     <img src="{{asset('frontend/Images/nl-4.webp')}}" alt="Neon Design" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container d-block d-lg-flex justify-content-between align-items-start mt-0 mt-lg-5 mb-0 mb-lg-5">
    <div class="info">
    <div class="d-flex gap-3">
    <i class="fas fa-map-marker-alt fa-2x icon"></i>
    <div>
      <h3>Corporate Office</h3>
      <p>Brand Signages, 5th Floor, BrandStoryVentures, Surya Chambers, 34, Domlur I Stage, Amarjyoti Layout, Domlur, Bengaluru, Karnataka 560071</p>
    </div>
    </div>
    <div class="d-flex gap-3">
        <i class="fas fa-map-marker-alt fa-2x icon"></i>
        <div>
          <h3>Manufacturing Facility</h3>
          <p>34, Domlur I Stage, Amarjyoti Layout, Domlur, Bengaluru, Karnataka 560071</p>
        </div>
        </div>
        <div class="d-flex gap-3">
            <i class="fas fa-clock fa-2x icon"></i>
            <div>
                <h3>Timing</h3>
                <p>Monday – Saturday: 9.30 AM – 8:00 PM</p>
            </div>
            </div>

<div class="contact-details">
        <div class="contact-item">
        <i class="fas fa-phone fa-2x icon"></i> <span>‪<a href="tel:+918006606080" style="text-decoration: unset;color:#E43D12;font-weight: bold;">+91 8006606080</a>‬</span>
        </div>
        <div class="contact-item">
        <i class="fas fa-envelope fa-2x icon"></i> <span><a href="mailto:sales@brandsignages.com" style="text-decoration: unset;color:#E43D12;font-weight: bold;">sales@brandsignages.com</a></span>
        </div>
      </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2458941156506!2d77.63487547484105!3d12.956111187357873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae154e854bc24d%3A0xca67160f8dc712fc!2sBrand%20Signages-%20Sign%20Board%20Manufacturers%20in%20Bangalore%20%7C%20LED%20%26%20Digital%20Signage%20Makers!5e0!3m2!1sen!2sin!4v1744381933145!5m2!1sen!2sin" width="600" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>





<section class="contact-loc-section">
    <div class="container">
        <div class="contact-loc-map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2458124951518!2d77.63487547392356!3d12.956116415219942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae154e854bc24d%3A0xca67160f8dc712fc!2sBrand%20Signages-%20Sign%20Board%20Manufacturers%20in%20Bangalore%20%7C%20LED%20Sign%20Board%20Makers!5e0!3m2!1sen!2sin!4v1777892990651!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="contact-loc-box checked-bg">
                    <div class="contact-loc-item">
                        <i class="fas fa-map-marker-alt contact-loc-icon"></i>
                        <div class="contact-loc-info">
                            <h3>Corporate Office</h3>
                            <p>Brand Signages, 5th Floor, BrandStoryVentures, Surya Chambers, 34, Domlur I Stage, Amarjyoti Layout, Domlur, Bengaluru, Karnataka 560071</p>
                        </div>
                    </div>
                    <div class="contact-loc-item">
                        <i class="fas fa-map-marker-alt contact-loc-icon"></i>
                        <div class="contact-loc-info">
                            <h3>Manufacturing Facility</h3>
                            <p>34, Domlur I Stage, Amarjyoti Layout, Domlur, Bengaluru, Karnataka 560071</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-loc-box">
                    <div class="contact-loc-item">
                        <i class="fas fa-clock contact-loc-icon"></i>
                        <div class="contact-loc-info">
                            <h3>Timing</h3>
                            <p>Monday – Saturday: 9.30 AM – 8:00 PM</p>
                        </div>
                    </div>
                    <div class="contact-loc-details-row">
                        <div class="contact-loc-detail">
                            <i class="fas fa-phone-alt contact-loc-icon"></i>
                            <a href="tel:+918006606080">+91 8006606080</a>
                        </div>
                        <div class="contact-loc-detail">
                            <i class="fas fa-envelope contact-loc-icon"></i>
                            <a href="mailto:sales@brandsignages.com">sales@brandsignages.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Bring Your Vision to Light with <br>Brand Signages’ Neon Signs in Bangalore</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image2.webp')}}" alt="Neon Light Sign Boards in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Brand Signages offers state-of-the-art <a href="{{route('neon_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">custom neon signboards</a>. Here are the reasons why we are a promising name in neon sign manufacturing:
                </p> 
                <h2 class="brand-title">Expert-led Customization</h2>
                <p class="brand-description">
                Brand Signages works with seasoned signage experts who design every piece of signage with creativity. You bring your vision to life with remarkable <b>neon signboards in Bangalore</b>. Our experts listen to your needs and create unique neon light designs with unmatched craftsmanship. 
                </p>
                <h2 class="brand-title">Latest Technology</h2>
                <p class="brand-description">
                We leverage the latest technology to create neon lights in Bangalore and serve all types of businesses across the city. We deliver top-of-the-line, innovative neon sign solutions backed by the latest industry trends and technological advancements.    
                </p>
                <h2 class="brand-title">Durable Solutions</h2>
                <p class="brand-description">
                We work with pinpoint precision while designing neon signboards. Our neon <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/name-board-designs-for-shops-bangalore"><strong>shop name board designs</strong></a> are designed to last for a long time, are energy efficient, and reduce the cost of maintenance. When it comes to neon lights in Bangalore, Brand Signages is best for custom-made neon lights. 
                </p>
                <h2 class="brand-title">Timely Delivery & Support</h2>
                <p class="brand-description">
                We optimize workflows, maintain stringent timelines, and coordinate logistics to guarantee project completion without compromising quality or design integrity. We provide 24*7 support services from design to installation and maintenance. 
                </p>

            </div>
        </div>
    </div>
</section>


<section class="neon-space-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="why-text-heading mb-3">We Design Neon Signs for Every Space</h2>
            <p>We produce high-class neon lights in Bangalore for all setups. Redesign your place with glow signage shaped just for you!</p>
        </div>

        <div class="neon-space-wrapper">
            <!-- Neon Signs for Bar -->
            <div class="neon-space-item active">
                <img src="{{asset('frontend/Images/nl-5.webp')}}" alt="Neon Signs for Bar">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Signs for Bar</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Signs for Bar</h3>
                        <p>Add vibrant energy to your bar with stylish neon signs. Create an inviting atmosphere with custom neon sign boards featuring bold colors and eye-catching designs.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Lights for Restaurants -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-6.webp')}}" alt="Neon Lights for Restaurants">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Lights for Restaurants</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Lights for Restaurants</h3>
                        <p>Elevate your restaurant’s atmosphere with bold, custom neon lights that seamlessly blend style and function. With their sleek, modern appeal, neon lights bring a fresh energy to any restaurant setting.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Sign Logo -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-7.webp')}}" alt="Neon Sign Logo">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Sign Logo</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Sign Logo</h3>
                        <p>Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, sign boards implant life in your logo in a shining, unforgettable manner.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Sign Party Decor -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-8.webp')}}" alt="Neon Sign Party Decor">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Sign Party Decor</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Sign Party Decor</h3>
                        <p>Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, sign boards implant life in your logo in a shining, unforgettable manner.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Signs for Home -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-9.webp')}}" alt="Neon Signs for Home">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Signs for Home</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Signs for Home</h3>
                        <p>Give individuality to your living area with tailored neon sign boards. Whether for a comfort zone or your entertainment zone, these LED signage pieces are ideal for home decor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="we-deliver"
        style="background: url('{{ asset('frontend/Images/nl-10.webp') }}') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Bring Your Vision to Light with Brand Signages’ Neon Signs in Bangalore</h2>
                </div>
                <div class="col-md-8 col-12">
                    <p>
                        Brand Signages offers state-of-the-art custom neon signboards. Here are the reasons why we are a promising name in neon sign manufacturing:
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/person-ico.webp') }}" alt="In-House Experts"
                                    class="img-fluid">
                                <h3>Expert-led Customization</h3>
                                <p>
                                    Brand Signages works with seasoned signage experts who design every piece of signage with creativity. You bring your vision to life with remarkable neon signboards in Bangalore. Our experts listen to your needs and create unique neon light designs with unmatched craftsmanship.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/settings-ico.webp') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Latest Technology</h3>
                                <p>We leverage the latest technology to create neon lights in Bangalore and serve all types of businesses across the city. We deliver top-of-the-line, innovative neon sign solutions backed by the latest industry trends and technological advancements.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/trusted-ico.webp') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>Durable Solutions</h3>
                                <p>We work with pinpoint precision while designing neon signboards. Our neon lights are designed to last for a long time, are energy efficient, and reduce the cost of maintenance. When it comes to neon lights in Bangalore, Brand Signages is best for custom-made neon lights.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/speed-ico.webp') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>Timely Delivery & Support</h3>
                                <p>We optimize workflows, maintain stringent timelines, and coordinate logistics to guarantee project completion without compromising quality or design integrity. We provide 24*7 support services from design to installation and maintenance.
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
                        <p class="card-text testimonial-card-text">The custom neon signs in Bangalore we purchased from Brand Signages entirely changed our bar’s ambiance. The lively colors and class are unparalleled, inserting an exceptional and high-spirited environment that fascinates more customers! </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore11.webp')}}" alt="Ravi S" class="client-img">
                            <div>
                                <div class="client-name">Ravi S</div>
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
                        <p class="card-text testimonial-card-text">I required a neon signboard in Bangalore for my restaurant, got it delivered and it was far ahead of my expectations. The shine and simplicity are mind-blowing, and the sign has become a predominant aspect of our establishment!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore12.webp')}}" alt="Madhuri" class="client-img">
                            <div>
                                <div class="client-name">Madhuri</div>
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
                        <p class="card-text testimonial-card-text">The neon lights in Bangalore we installed at our corporate office appear to be polished and competent. They’re energy-saving and exactly fit our branding requirements, rendering an advanced, luxurious feel to our office place.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore13.webp')}}" alt="Arjun K" class="client-img">
                            <div>
                                <div class="client-name">Arjun K</div>
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
                        <p class="card-text testimonial-card-text">Our wedding decor was improved by eye-catching custom neon signs. The team delivered immense support and were on time, making our auspicious day even more remarkable with customized, shining designs!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore14.webp')}}" alt="Megha P" class="client-img">
                            <div>
                                <div class="client-name">Megha P</div>
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
                        <p class="card-text testimonial-card-text">I bought a glow signage board for my house, and it’s the main attraction of my living space. The contemporary design and alluring shine create the ideal ambiance. Thank you!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore15.webp')}}" alt="Nikhil T" class="client-img">
                            <div>
                                <div class="client-name">Nikhil T</div>
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
                                    <p class="card-text testimonial-card-text">The custom neon signs in Bangalore we purchased from Brand Signages entirely changed our bar’s ambiance. The lively colors and class are unparalleled, inserting an exceptional and high-spirited environment that fascinates more customers! </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore11.webp')}}" alt="Ravi S" class="client-img">
                                        <div>
                                            <div class="client-name">Ravi S</div>
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
                                    <p class="card-text testimonial-card-text">I required a neon signboard in Bangalore for my restaurant, got it delivered and it was far ahead of my expectations. The shine and simplicity are mind-blowing, and the sign has become a predominant aspect of our establishment!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore12.webp')}}" alt="Madhuri" class="client-img">
                                        <div>
                                            <div class="client-name">Madhuri</div>
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
                                    <p class="card-text testimonial-card-text">The neon lights in Bangalore we installed at our corporate office appear to be polished and competent. They’re energy-saving and exactly fit our branding requirements, rendering an advanced, luxurious feel to our office place.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore13.webp')}}" alt="Arjun K" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun K</div>
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
                                    <p class="card-text testimonial-card-text">The neon lights in Bangalore we installed at our corporate office appear to be polished and competent. They’re energy-saving and exactly fit our branding requirements, rendering an advanced, luxurious feel to our office place. <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore13.webp')}}" alt="Arjun K" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun K</div>
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
                                    <p class="card-text testimonial-card-text">Our wedding decor was improved by eye-catching custom neon signs. The team delivered immense support and were on time, making our auspicious day even more remarkable with customized, shining designs!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore14.webp')}}" alt="Megha P" class="client-img">
                                        <div>
                                            <div class="client-name">Megha P</div>
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
                                    <p class="card-text testimonial-card-text">I bought a glow signage board for my house, and it’s the main attraction of my living space. The contemporary design and alluring shine create the ideal ambiance. Thank you!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore15.webp')}}" alt="Nikhil T" class="client-img">
                                        <div>
                                            <div class="client-name">Nikhil T</div>
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
        <h1 class="faq-title">Neon Sign FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What is the delivery timing for a neon sign order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The delivery timing for neon sign boards in Bangalore generally is between 7-10 business days, based on the personalization and order size.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long does a neon signboard last?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Neon signboard typically lasts between 3 to 7 years, depending on usage, weather conditions, and proper maintenance. While the high-quality glass tubes and gases used in neon signs are durable, periodic servicing is necessary to ensure optimal brightness and performance over time.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do neon signs come with a warranty?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, our neon signs come with a standard warranty of 2 years. The warranty covers manufacturing defects, electrical components, and workmanship issues. For more details, we recommend discussing your specific signage requirements with our team. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can neon signs be used outdoors? Are they weatherproof?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, neon signboards can also be used outdoors, but they must be designed for exterior use. Our outdoor neon signs are weatherproof and built with protective materials to withstand rain, dust, and extreme temperatures. If you're looking for neon signage for outdoor use in Bangalore, we ensure the materials and installation are suited for local climate conditions.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is it possible to customize neon LED signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide complete customization of neon lights to align with your business needs, consisting of exceptional shapes, designs, and colors.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I see samples of neon signage designs before ordering?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide design mockups on demand before placing an order. You can review our portfolio to see different styles, colors, and layouts we’ve created for various clients.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I get a custom neon sign with my company logo and name?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes! We specialize in designing custom neon signs in Bangalore, including company logos and brand names. Our team ensures high-quality craftsmanship to enhance your brand visibility with a unique and eye-catching neon display.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                 Do you deliver neon sign boards in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we deliver neon sign boards across Bangalore and surrounding areas. Our team ensures safe and timely delivery, providing high-quality LED signage solutions tailored to your needs. Contact Brand Signages today for customized neon signage!</p>
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