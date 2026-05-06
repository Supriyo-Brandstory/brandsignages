@extends('frontend.layout.appLayout')
@section('content')


@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/neon-sign-board-bangalore.css') }}" />
@endpush

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/neon-image.webp')}}" alt="Slide 1">
                <div class="carousel-caption-custom">
                    <h1>Best Neon Signage Boards in Bangalore- Signs That Speak Loud</h1>
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
        <h2 class="hero-title  mb-4">Premium Neon Sign Boards Bangalore- <br> Bold, Brilliant, and Unforgettable</h2>
        <p class="text-center mb-5 fs-20">Add a fresh touch to your space and create a lasting impression with luminous neon lights that bring your branding to life.
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




<section class="neon-space-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="why-text-heading mb-3">We Design Neon Signs for Every Space</h2>
            <p class="fs-20">We produce high-class neon lights in Bangalore for all setups. Redesign your place with glow signage shaped just for you!</p>
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
                    <h2>Bring Your Vision to Light with Brand Signages</h2>
                </div>
                <div class="col-md-8 col-12">

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



    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">

                <div class="new_client_section-wrapper">
                    <!-- Row 1 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                    </div>

                    <!-- Row 2 (Right to Left) -->
                    <div class="new_client_section-row new_client_section-row-2">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                    </div>

                    <!-- Row 3 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-3">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>


                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>

            <div class="position-relative">

                <!-- Navigation Arrows (placed OUTSIDE swiper container) -->
                <div class="new_testimonial-button-prev">
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40" height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40" height="40">
                </div>

                <!-- Swiper -->
                <div class="swiper new_testimonial-swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    Our tech startup needed a signage solution that matched our innovative spirit. The
                                    design team didn't just create a sign; they captured our company's entire essence.
                                    The LED-powered brand display has become a conversation starter for clients and
                                    employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy- Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sneha Reddy</h6>
                                        <small class="text-muted">Marketing Head – Urban Retail Co.</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We needed stunning, durable, and regulation-compliant signage for our hospital,
                                    and Brand Signages delivered exactly what we asked for. Their attention to detail
                                    is excellent, which helped us enhance the patient experience.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema - Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Seema Nayak</h6>
                                        <small class="text-muted">Operations Manager– Horizon Hospitals</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    From initial conceptualization to execution, they executed our café signage project
                                    seamlessly. They perfectly captured the aesthetics of our brand with vibrant acrylic
                                    signs and a neon board that has quickly become an Instagram favorite among local people.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Founder – Café Bloom</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We needed elegant indoor and outdoor corporate signage that matched our branding.
                                    Brand Signages impressed us with their quick turnaround, premium finish, and seamless
                                    coordination throughout the signage project.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Director– Nova Consulting Group</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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