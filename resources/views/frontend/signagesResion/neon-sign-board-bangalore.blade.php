@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/neon-image.webp')}}" alt="Neon Light Sign Boards in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Best Neon Sign Board Bangalore- Brand Signages</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5" id="gallery-container">
        <h2 class="hero-title  mb-4">Premium Neon Signboards Bangalore <br> Bold, Brilliant, and Unforgettable</h2>
        <p class=" text-center mb-5">Brand Signages is the leading supplier of neon sign board in Bangalore. With over 10 years of experience, we design high-quality and customized neon signs for top businesses. 
                From outdoor neon signs to sleek acrylic neon boards, our solutions enhance both branding and decor. We design spectacular neon signs perfect for businesses looking for eye-catching, 
                stylish, and durable signage. Our expertise spans stunning open-face neon signs, retro-style neon lights, and modern LED-neon hybrid boards – each tailored to reflect your unique brand identity.
        </p>            

        <div class="row align-items-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-1.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 1">
                    <img src="{{asset('frontend/Images/neon-1.webp')}}" class="img-fluid" alt="Neon Signboard Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-2.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/neon-2.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
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
                    <a href="{{asset('frontend/Images/neon-6.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-6.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-7.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-7.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
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

<div class="container d-flex flex-column flex-md-row justify-content-between align-items-start my-5">
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
        <i class="fas fa-phone fa-2x icon"></i> <span>‪<a href="tel:+918006606080">+91 8006606080</a>‬</span>
        </div>
        <div class="contact-item">
        <i class="fas fa-envelope fa-2x icon"></i> <span><a href="mailto:sales@brandsignages.com">sales@brandsignages.com</a></span>
        </div>
      </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2458941156506!2d77.63487547484105!3d12.956111187357873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae154e854bc24d%3A0xca67160f8dc712fc!2sBrand%20Signages-%20Sign%20Board%20Manufacturers%20in%20Bangalore%20%7C%20LED%20%26%20Digital%20Signage%20Makers!5e0!3m2!1sen!2sin!4v1744381933145!5m2!1sen!2sin" width="600" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <style>


    .info, .map {
      flex: 1 1 100%;
      padding: 20px;
    }
 .info h3 {
      margin-bottom: 10px;
      color: #111;
      font-size: 22px;
    }

    .info p {
      margin: 5px 0 15px;
      line-height: 1.6;
    }
    .info .icon {
    font-size: 20px;
    padding: 7px;
    color: #E43D12;
    }

    .highlight {
      font-weight: bold;
    }

    .contact-details {
    display: flex;
    gap: 20px;
    margin: 20px 0 0;
}
 .contact-item {
        display: flex;
    align-items: center;
    margin-bottom: 10px;
    border: solid 1px #8080804a;
    border-radius: 5px;
    padding: 20px 15px;
    width: 100%;
    }

    .contact-item span {
      margin-left: 10px;
      color: #E43D12;
    }

    .map iframe {
      width: 100%;
      height: 370px;
      border: none;
    }

    @media (min-width: 768px) {
      .container {
        flex-wrap: nowrap;
      }
      .info {
        flex: 1;
      }
.map {
        flex: 1;
      }
    }
  </style>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Bring Your Vision to Light with <br>Neon Signs in Bangalore</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image2.webp')}}" alt="Neon Light Sign Boards in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Looking for neon signs? Unique and spectacular neon signs are the best branding element to enhance your space. Whether 
                    you're a budding startup, retail business, restaurant, seasoned brand, or looking for neon signs for a special event or 
                    home, our neon solutions offer the perfect fusion of artistic flair and functional brilliance. Every sign is meticulously
                     crafted to ensure visual appeal and durability, turning ordinary spaces into glowing experiences. 
                </p> 
                <p class="brand-description">
                <a href="{{route('neon_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Neon signs</a> are energy-efficient, long-lasting, and available in a variety of colors and design patterns. Choose from acrylic neon boards, neon glow 
                signage boards, or custom neon designs to achieve the perfect look for your brand. Whether you need a single sign or bulk orders, we cater to all requirements.
                </p>
                <p class="brand-description">
                 Get premium quality neon signs crafted according to your individual preferences from Brand Signage and elevate your space effortlessly.</p>
                <ul class="process-list">
                        <li>
                            We craft the best-quality, custom neon signages to meet your needs.
                        </li>
                        <li>
                            Our neon signages are energy-efficient, durable, and visually appealing.
                        </li>
                        <li>
                            We offer expert design and installation services for a seamless experience.
                        </li>
                    </ul>

            </div>
        </div>
    </div>
</section>


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">From Bold to Beautiful – Neon <br>Signs for Every Space</h2>
            <p class="card-text text-center">We produce high-class neon lights in Bangalore for all setups. Redesign your place with glow <br> signage shaped just for you!</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/neonsign-bangalore6.webp')}}" alt="Neon Signs for Bar" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Neon Signs for Bar</h5>
                    <p class="text-content">Add vibrant energy to your bar with stylish neon signs. Create an inviting atmosphere with custom neon sign boards featuring bold colors and eye-catching designs.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore7.webp')}}" alt="Neon Lights for Restaurants" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Lights for Restaurants</h5>
                            <p class="text-content">Elevate your restaurant’s atmosphere with bold, custom neon lights that seamlessly blend style and function. With their sleek, modern appeal, neon lights bring a fresh energy to any restaurant setting.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore8.webp')}}" alt="Neon Sign Logo" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Sign Logo</h5>
                            <p class="text-content">Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, sign boards implant life in your logo in a shining, unforgettable manner.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore9.webp')}}" alt="Neon Sign Party Decor" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Sign Party Decor</h5>
                            <p class="text-content">Spice up your parties with innovative neon LED signs. From birthdays to weddings, our custom neon signs make for memorable party decor that brightens up your festivities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore10.webp')}}" alt="Neon Signs for Home" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Signs for Home</h5>
                            <p class="text-content">Give individuality to your living area with tailored neon sign boards. Whether for a comfort zone or your entertainment zone, these LED signage pieces are ideal for home decor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

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
                        <p>Our creative team of sign board makers in Bangalore offers flexible, personalized signage solutions. We transform your ideas into compelling visual narratives that strengthen your brand presence.</p>
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


<section class="why-bg-light-pink py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for <br>Neon Sign Boards?</h2>
                <p class="card-text">Brand Signages is among the best neon sign board manufacturers in Bangalore backed with 10+ years of expertise. Our solutions comprise everything from flex neon signs to glass neon signs personalized to fulfill your requirements.</p>
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
                        <img src="{{asset('frontend/Images/neon-image5.webp')}}" class="why-card-img-top" alt="Neon Sign Design">
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
                        <img src="{{asset('frontend/Images/neon-image6.webp')}}" class="why-card-img-top" alt="Quality Materials">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Quality material</h3>
                            <p class="card-text">We prioritize the material quality to ensure they can withstand harsh
                                weather and normal wear and tear. Our flexes and outdoor signs will tell the story for
                                years and keep the brand’s visual identity sharp.</p>
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
                                    <img src="{{asset('frontend/Images/neon-image5.webp')}}" class="why-card-img-top" alt="Designs">
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
                                    <img src="{{asset('frontend/Images/neonsign-bangalore4.webp')}}" class="why-card-img-top" alt="Energy Efficient">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Energy Efficiency</h3>
                                        <p class="card-text">Our neon signs are designed to utilize modern LED neon technology, 
                                            providing unique radiance while absorbing the least energy. These neon lights not only 
                                            minimize electricity expenses but are also sustainable.</p>
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
                                    <img src="{{asset('frontend/Images/neon-image6.webp')}}" class="why-card-img-top" alt="Quality Materials">
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

    <!--<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Multicolor Neon Lights and Signs for <br> Every Space</h2>
  
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image8.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-6">
                <p class="brand-description">
                    If you’re looking for an illuminated sign with different colours combined in one design, check out premium quality multicolour neon lights and signs from us. With an added touch of personalisation, these neon signs and lights are ideal for your indoor and outdoor spaces.</p>
             
                <p class="brand-description">
                    The comprehensive range of diverse colours makes the multicoloured neon lights and signs more special than others. Whether it’s a get-together at your drawing room, a house party in the broad hallway, or an event on your rooftop, multicolour neon lights from Brand Signage can create the ambience you look for.</p>
             
                <p class="brand-description">
                    To illuminate your space in your desired way, you must rely upon trusted neon light manufacturers as they offer long-lasting yet stylish products. However, if you have made up your mind to purchase multi-colour neon signs for personal or professional spaces, we are here with the best collections of them.</p>
                
                <p class="brand-description">
                    Brighten your space and rejuvenate your mind with our exclusive neon signs suitable for all purposes</p>
                
            </div>
        </div>
    </div>
</section>-->


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

<!--<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
        
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-sign111.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/neon-sign111(2).webp')}}" class="img-fluid" alt="Neon sign board Bangalore" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-sign112.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/neon-sign112(1).webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neonsign-bangalore18.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/neonsign-bangalore18.webp')}}" class="img-fluid" alt="neon sign board Nangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-signs113.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/neon-signs113(1).webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-signs114.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/neon-signs114(1).webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-signs115.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/neon-signs115(1).webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neonsign-bangalore22.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/neonsign-bangalore22.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neonsign-bangalore23.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/neonsign-bangalore23.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
        </div>

    </div>
</section>-->

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