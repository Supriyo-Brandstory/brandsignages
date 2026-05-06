@extends('frontend.layout.appLayout')
@section('content')
    
    <section class="hero-banner"
        style="background-image: url('{{ asset('frontend/Images/neo-led-banner.webp') }}'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Best Neon Sign Boards:<br> Illuminating Bright Neons</h1>
                    <p>Brand Signages offer premium neon signs crafted using advanced 2nd-gen <br>LED technology on high-quality 6 mm transparent acrylic. They are <br>energy-efficient, durable, and easy to install.
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
        <h2 class="hero-title  mb-4">Premium Neon Sign Boards</h2>
        <p class=" brand-description text-center mb-5">At <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Brand Signages</a>, we bring your brand to life with vibrant, custom-designed neon signboards that captivate and communicate. Our expertise spans stunning open-face neon signs, retro-style neon lights, and modern LED-neon hybrid boards- each tailored to reflect your unique brand identity. 

            <br>Whether you're a budding startup, retail business, restaurant, seasoned brand, or looking for neon signs for a special event or home, our neon solutions offer the perfect fusion of artistic flair and functional brilliance. Every sign is meticulously crafted to ensure visual appeal and durability, turning ordinary spaces into glowing experiences.
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

<section class="min-abt-section">
    <div class="container">
        <h2 class="min-abt-title text-center">2nd Gen LED Neon Signs– Brighter <br>Performance and Durability</h2>
        <div class="row align-items-center min-abt-main-row">
            <div class="col-lg-6">
                <div class="min-abt-img-box">
                    <img src="{{asset('frontend/Images/nl-1.webp')}}" alt="Neon Sign Board Bangalore" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="min-abt-content">
                    <p class="fs-20">Step into the spotlight with Brand Signages- where timeless neon signs meets cutting-edge LED innovation. 
                Our custom <a href="{{route('neon_sign_board_bangalore')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">neon sign boards</a>, elegantly mounted on crystal-clear acrylic bases, deliver a floating, ethereal glow 
                that transforms any space into a captivating masterpiece. Perfect for bold business logos, inspiring quotes, or
                 intricate designs, these signs command attention and etch your brand into memory.</p>
                    <p class="fs-20">Built with transparent acrylic backing, our neon signs create a clean halo effect that improves brightness and visibility. Powered by 2nd gen LED neon, they are energy-efficient, long-lasting, and suitable for indoor and outdoor use. The lightweight, shatter-resistant build ensures durability, while clear visibility is maintained in both day and night conditions. Available in multiple colors, fonts, and designs, these signs can be customized to match your business requirements.</p>
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

<style>
    .min-abt-section {
        padding: 60px 0;
    }
    .min-abt-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 40px;
        color: #222;
        line-height: 1.3;
    }
    .min-abt-main-row {
        margin-bottom: 30px;
    }
    .min-abt-img-box img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        object-fit: cover;
    }

    .min-abt-sub-img img {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.07);
        transition: all 0.3s ease;
        aspect-ratio: 4/3;
        object-fit: cover;
    }
    .min-abt-sub-img img:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    @media (max-width: 991px) {
        .min-abt-title {
            font-size: 28px;
        }
        .min-abt-img-box {
            margin-bottom: 30px;
        }
        .min-abt-content p {
            font-size: 18px;
            text-align: left;
        }
    }
</style>


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

<style>
    .neon-space-wrapper {
        display: flex;
        gap: 15px;
        height: 550px;
        width: 100%;
        margin-top: 40px;
    }
    .neon-space-item {
        position: relative;
        flex: 1;
        overflow: hidden;
        border-radius: 25px;
        transition: all 0.7s cubic-bezier(0.25, 1, 0.5, 1);
        cursor: pointer;
    }
    .neon-space-item.active {
        flex: 4;
    }
    /* When the wrapper is hovered, shrink the default active item */
    .neon-space-wrapper:hover .neon-space-item.active {
        flex: 1;
    }
    /* Expand the hovered item and ensure it stays expanded even if it was active */
    .neon-space-wrapper .neon-space-item:hover {
        flex: 4 !important;
    }
    .neon-space-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }
    .neon-space-item:hover img {
        transform: scale(1.08);
    }
    .neon-item-content {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.3) 50%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 25px;
        color: #fff;
    }
    .neon-orange-title {
        color: #fff;
        margin-bottom: 10px;
        font-weight: 700;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 1);
    }
    .vertical-title-box {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        transition: opacity 0.4s ease;
        width: 100%;
        display: flex;
        justify-content: center;
        pointer-events: none;
    }
    .vertical-title {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        white-space: nowrap;
        margin: 0;
        font-weight: 700;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }
    .horizontal-content {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.5s ease 0.2s;
        visibility: hidden;
    }
    .neon-space-item.active .vertical-title-box {
        opacity: 0;
    }
    .neon-space-wrapper:hover .neon-space-item.active .vertical-title-box {
        opacity: 1;
    }
    .neon-space-item:hover .vertical-title-box {
        opacity: 0 !important;
    }

    .neon-space-item.active .horizontal-content {
        opacity: 1;
        transform: translateY(0);
        visibility: visible;
    }
    .neon-space-wrapper:hover .neon-space-item.active .horizontal-content {
        opacity: 0;
        transform: translateY(30px);
        visibility: hidden;
    }
    .neon-space-item:hover .horizontal-content {
        opacity: 1 !important;
        transform: translateY(0) !important;
        visibility: visible !important;
    }
    .horizontal-content p {
        margin-bottom: 0;
        line-height: 1.6;
        font-weight: 400;
    }
    @media (max-width: 991px) {
        .neon-space-wrapper {
            flex-direction: column;
            height: auto;
            gap: 20px;
        }
        .neon-space-item {
            height: 350px;
            flex: none !important;
        }
        .vertical-title-box {
            display: none;
        }
        .horizontal-content {
            opacity: 1 !important;
            transform: none !important;
            visibility: visible !important;
        }
        .neon-item-content {
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        }
    }
</style>


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
                                <p>We leverage the 2nd-gen LED neon technology to create neon lights and serve all types of businesses across the city. We deliver top-of-the-line, innovative neon sign solutions backed by the latest industry trends and technological advancements.
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

<section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Neon Sign Board in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/neon-sign-board-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Neon Sign Boards Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/custom-neon-sign-boards-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Neon Sign Boards Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/neon-sign-board-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Neon Sign Boards Bangalore">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Bangalore</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="faq-section">
    <div class="faq-container">
      <h1 class="faq-title">FAQs</h1>
      
      <div class="faq-item">
        <button class="faq-question">
            What are Neon Light Signs Made of?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are manufactured from glass tubes filled with inert gases like neon, mercury vapor, and argon. 
            When an electric current goes through the gases, they ionize and emit light. Different gases create different colors, 
            with neon gas producing the classic red-orange glow. We also provide modern alternatives like LED technology for better 
            energy efficiency and durability.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What is The Delivery Timing for a Neon Sign Order?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>The delivery timing for neon sign boards  generally is between 7-10 business days, based on the personalization and order size.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            How Long Do Neon Light Signs Typically Last?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs generally have a lifespan of approximately 15,000 to 30,000 hours, depending on several factors such as usage, 
            environment, and the materials used. Proper maintenance & care can extend the lifespan, ensuring the sign remains vibrant and 
            functional for years. It's worth noting that LED neon signs, which are energy-efficient alternatives, can last significantly longer, 
            often reaching up to 50,000 hours or more.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Can Neon Light Signs be Used Outdoors?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes, neon light signs can be used outdoors if they are specifically designed with durable, weather-resistant materials and waterproof features. Whether it is a garden party or an open-air rooftop dinner, neon lights can illuminate the space with their bright charm.</p>
           </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Are Neon Light Signs Energy-efficient?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are energy-efficient compared to incandescent lighting. They consume less power due to the use of inert gases and low voltage. However, modern alternatives like LED neon signs are even more energy-efficient, offering lower power consumption and longer lifespans while maintaining vibrant illumination.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            How Much Do Custom Neon Signs Cost?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <p>The cost of custom neon signs is influenced by several key factors:</p>
            <ul>
                <li>Larger signs require more materials and time to manufacture, resulting in higher costs.</li>
                <li>Detailed, intricate designs with multiple colors or graphics typically increase the price.</li>
                <li>The choice of materials, such as premium LEDs or high-quality silicone tubing, can impact the cost.</li>
                <li>Fully custom signs tailored to specific branding or design preferences often come at a higher price</li>
                <li>Optional features, such as adjustable brightness or motion effects, can also lead to a higher cost</li>
                <li>Transparent pricing breakdown</li>
                <li>Delivery and installation</li>
            </ul>
            <p>On average, custom neon signs can range from ₹4,000 to ₹50,000 or more, depending on these factors. For a precise quote, 
                it's advisable to contact the manufacturer directly to discuss your specific design requirements.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What is The Installation Process for Neon Light Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon signs are usually mounted on a wall, hung from ceilings, or placed on supports. The installation process involves securing 
            the sign, connecting the power supply, and ensuring proper wiring. Traditional neon signs require an expert installation due to the 
            glass tube and high voltage requirements. LED neon signs are easier to install, frequently using easy wall supports or adhesive backing. 
            For outdoor usage, proactive coating is necessary. It is essential to follow safety guidelines and work with experts for safe installation 
            and lasting durability.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What Maintenance is Required for Neon Light Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs require cleaning to remove dust, keeping them bright and visible. Use a smooth fabric or a dry brush to clean the tubes gently. 
            Avoid using strong water jets or harsh chemicals, mainly in conventional neon signs. Periodically, check the power supply and connections to ensure 
            proper functioning. LED neon signs require minimal preservation as compared to conventional neon, which may require gas refills over time. With 
            proper care, neon signs can last for years at the same time as retaining their brightness and effectiveness.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What are The Benefits of Using Neon Light Signs for Branding?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <ul>
                <li>Neon light signs attract attention with their vivid and colorful brightness, helping businesses stand out.</li>
                <li>They add an exceptional and elegant element, improving the brand's identity.</li>
                <li>Neon signs work well for both interior and external use, attracting customers day and night.</li>
                <li>They can be personalized to match the colors of the brand or logos.</li>
                <li>Neon LED signs are efficient in energy and durable, offering an affordable branding solution.</li>
            </ul>
            <p>Whether for a restaurant, retail store, bar, or event, neon signage companies create unforgettable impressions and boost visibility.</p>
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