@extends('frontend.layout.appLayout')
@section('content')

    <style>
        .why-carousel-controls,
        .testimonial-carousel-controls {
            position: absolute;
            top: -34px;
            right: 15px;
            transform: translateY(0);
        }
    </style>

    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/digital-signages-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="hero-banner_title">Best Digital Signage Manufacturer & Supplier in Bangalore</h1>

                    <a href="https://brandsignages.com/contact-us" class="mt-3 d-block">
                        <button class="contact-btn ">Get Free Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Transform Your Brand Visibility with<br>Digital Signages</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/digital-signages-banner-1.webp')}}" alt="Cafe Rosco Signage"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="brand-description">
                        Digital signage offers an engaging way to showcase your brand, grabbing attention with vibrant
                        visuals and real-time updates. From digital display boards and video walls to digital standees,
                        businesses in Bangalore are utilizing digital signage to enhance customer engagement. </p>
                    <p class="brand-description">
                        Brand Signages is the premier digital signage manufacturer in Bangalore, backed by 10+ years of
                        expertise. We have in-house facility for digital signage hardware manufacturing, software, and CMS
                        technology experts. We are an ISO certified digital signage manufacturer and supplier, serving
                        clients across PAN India.
                    </p>
                    <p>As the best digital signage vendors in Bangalore, <a href="https://brandsignages.com/"
                            style="color: #E43D12">Brand Signages</a> focuses on designing high-quality displays that align
                        seamlessly with your brand identity. Whether it’s a video wall or a floor stand display board, our
                        products deliver unparalleled standards. Transform your space with innovative digital signage
                        solutions today.</p>
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bgrowth-slider-section">
        <div class="bgrowth-header">
            <h2>About Our Digital Display Boards</h2>

        </div>

        <div class="swiper bgrowth-swiper-2 container">
            <div class="swiper-pagination"></div> <!-- should be inside swiper, before swiper-wrapper -->
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/Smart-Digital-Displays.webp') }}"
                                alt="Smart-Digital-Displays" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="bgrowth-content">
                                <h3>Smart Digital Displays</h3>
                                <p>
                                    No External Media Player: Our displays work seamlessly without additional hardware
                                </p>
                                <p>Remote Display Control: Reboot and manage single or multiple displays</p>
                                <p>Universal Compatibility: Supports Android, LG webOS, Samsung Tizen, Windows</p>
                                <p class="">Content Scheduling: Quickly add playlists, media files, or promotional campaigns
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/smart-digital-Specifications.webp') }}"
                                alt="smart-digital-Specifications" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="bgrowth-content">
                                <h3>Specifications</h3>
                                <p>
                                    Minimum Order Quantity: 1 Unit
                                </p>
                                <p>Display Type: LED / OLED / E-Ink (Customizable)</p>
                                <p>Body Material: Aluminum, acrylic, Polycarbonate, Glass</p>
                                <p>Lighting Type: LED / Backlit LCD for superior brightness</p>
                                <p>Available Sizes: 15-inch, 18-inch, 24-inch, 32-inch, 55-inch</p>
                                <p>Shape Options: 1Rectangle, Square, Curved, Ultra-Wide</p>
                                <p>Viewing Angle: 178° - 270° for maximum visibility</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/smar-digital-Installation-Support.webp') }}"
                                alt="smar-digital-Installation-Support" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="bgrowth-content">
                                <h3>Installation & Support</h3>
                                <p>
                                    We deliver end-to-end signage solutions from design to installation ensuring seamless
                                    deployment, minimal downtime, and long-term reliability. Our commitment to customer
                                    satisfaction has helped us build a loyal customer base that trusts our expertise and
                                    relies on us for their digital signage needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Add more slides if needed -->
            </div>

        </div>
    </section>

          <section class="why-choose-signage">
            <div class="why-choose-container container">
                <h2 class="why-title">Customized Solutions for Every<br>Industry</h2>
                

                <div class="why-grid">
                    <div class="why-box">
                        <img src="{{asset('frontend/Images/Corporate-Office.png')}}" alt="Corporate Office"
                            class="why-icon">
                        <h3>Corporate Office</h3>
                        <p>
                           We are considered among digital signage comapnies because our products enhance internal communication and streamline information sharing. Companies can use digital <a href="https://brandsignages.com/office-signages" style="color: #E43D12">office signages</a> to display announcements showcasing performance metrics.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/Retail.png')}}" alt="Retail"
                            class="why-icon">
                        <h3>Retail</h3>
                        <p>
                          We provide vibrant digital display boards that attract customers and promote products. Our solutions enable retailers to showcase promotions, highlight new arrivals, and create an engaging shopping experience that drives sales.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/Hospitality.png')}}" alt="Hospitality"
                            class="why-icon">
                        <h3>Hospitality</h3>
                        <p>
                            Our interactive digital signages elevate the guest experience across hospitality venues by offering dynamic, real-time information. From simplifying check-ins and wayfinding to promoting on-site dining, amenities, and events, these displays help hotels and resorts communicate seamlessly.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/Food.png')}}" alt="Food"
                            class="why-icon">
                        <h3>Food</h3>
                        <p>
                            We design <a href="https://brandsignages.com/restaurant-signages" style="color: #E43D12">digital menu boards</a> to be placed in restaurants and cades to boost customer engagement. These boards can show updated prices dynamically, thus giving the latest information to customers.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/Banking.png')}}" alt="Banking"
                            class="why-icon">
                        <h3>Banking</h3>
                        <p>
                           In banking, digital signage can streamline customer interactions by displaying wait times, service information, and promotional offers. Our solutions help banks improve customer service while maintaining a professional appearance.
                        </p>
                    </div>
                    <div class="why-box">
                        <img src="{{asset('frontend/Images/Education.png')}}" alt="Education"
                            class="why-icon">
                        <h3>Education</h3>
                        <p>
                          As a digital signage company, our products enhance communication among students, staff, and visitors. You can use them to display schedules and promote events to create an informed campus environment.
                        </p>
                    </div>

                   
                </div>
            </div>
        </section>


 <section>
        <div class="container pt-5">
            <h2 class="hero-title">Benefits of Digital Signages for Branding</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/Benefits-of-Digital-Signages-for-Branding.webp')}}" alt="Benefits-of-Digital-Signages-for-Branding"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="brand-description">
                       Brand Signages is a premier digital signage manufacturer with 10+ years of industry expertise. We understand every business is unique and creates digital signage solutions tailored to your brand’s specific needs, ensuring maximum engagement. </p>
                   <div class="faq-item active">
                <button class="faq-question active">
                    Customer Engagement
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer active">
                    <p>Digital signage employs dynamic visual content and videos to attract customer attention. Digital displays help in improving customer engagement, visibility, and retention using interactive visuals.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Real-time Content
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage employs dynamic visual content and videos to attract customer attention. Digital displays help in improving customer engagement, visibility, and retention using interactive visuals.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Long-term Benefits
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage employs dynamic visual content and videos to attract customer attention. Digital displays help in improving customer engagement, visibility, and retention using interactive visuals.</p>
                   
                </div>
            </div>
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section class="we-deliver" style="background: url('{{ asset('frontend/Images/Why-Choose-Us-for-Digital-Signages.webp') }}') no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>Why Choose Us for Digital Signages</h2>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/In-House-Experts.png') }}" alt="In-House Experts"
                                        class="img-fluid">
                                    <h3>In-House Experts</h3>
                                    <p>
                                        From CMS software to digital displays production, we have a dedicated manufacturing unit and in-house team of experts. We provide digital signage installation and support services across PAN India.
                                                                   </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/Industry-Grade-Products.png') }}" alt="Industry Grade Products"
                                        class="img-fluid">
                                    <h3>Industry Grade Products</h3>
                                    <p>Our digital signages combine robust hardware with advanced display technology and a Content Management System. We have a PAN India support network.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/10-Years-of-Expertise.png') }}" alt="10 Years of Expertise"
                                        class="img-fluid">
                                    <h3>10 Years of Expertise</h3>
                                    <p>We are among the best digital signage companies with expertise in digital signage technology. We have a modern manufacturing facility for digital signage production.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/Network-and-Customer-Support.png') }}" alt="Network and Customer Support"
                                        class="img-fluid">
                                    <h3>Network and Customer Support</h3>
                                    <p>Being among the best digital signage companies in India, we prioritize understanding your specific requirements and delivering digital signage solutions that exceed expectations. We utilize a wide partner network for better support and services.
                                    </p>
                                </div>
                            </div>

                        </div>
        </section>  
         <!-- testimonial Feedback Section -->
        <section class="new_testimonial-swiper-section">
            <div class="container">
                <h2 class="text-center mb-md-5 mb-3">Customer Testimonial</h2>

                <div class="position-relative">

                    <!-- Navigation Arrows (placed OUTSIDE swiper container) -->
                    <div class="new_testimonial-button-prev">
                        <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40"
                            height="40">
                    </div>
                    <div class="new_testimonial-button-next">
                        <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40"
                            height="40">
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
                                        <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}" alt="Michael, CEO, Technova Innovations"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Michael</h6>
                                            <small class="text-muted">CEO, Technova Innovations</small>
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
                                        As a boutique hotel chain, brand consistency is everything. These custom signages transformed 
                                        our brand experience across multiple locations. The attention to detail is remarkable - each piece 
                                        feels uniquely crafted yet perfectly aligned with our brand identity.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}" alt="Asish, CEO, A Hotel Chain"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Asish</h6>
                                            <small class="text-muted">CEO, A Hotel Chain</small>
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
                                        We needed urgent signage for our new retail location, and they delivered beyond expectations. The direct 
                                        communication and on-demand design process made the experience seamless and stress-free.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}" alt="Nandini, CEO, A Real Estate Company"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Nandini</h6>
                                            <small class="text-muted">CEO, A Real Estate Company</small>
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
                                        We weren’t sure if a signage company could capture the essence of a dynamic workspace 
                                        like Bhive. But what they delivered went far beyond expectations. They didn’t just create 
                                        signs – they crafted a visual identity that reflects our energy, innovation, and community spirit. 
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}" alt="Manager, Bhive Workspace"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Sai Teja</h6>
                                            <small class="text-muted">Manager, Bhive Workspace</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
 


    <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Digital Signage</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the digital signage
                    through our articles.</p>

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
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
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
       <section class="faq-section">
        <div class="faq-container">
            <h1 class="faq-title">FAQS</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What Digital Signage Solutions Do You Offer for Businesses?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer comprehensive solutions including hardware (displays, screens),
                        software (content management), custom content creation, installation, technical support,
                        strategy consulting, and industry-specific digital communication solutions tailored to enhance
                        brand visibility and audience engagement across multiple platforms and environments</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Does Digital Signage Enhance Customer Engagement?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage boosts customer engagement by delivering dynamic, interactive visual content that
                        captures attention, personalizes messaging, provides real-time information, and creates
                        immersive brand experiences across multiple touchpoints, transforming traditional communication
                        into compelling, memorable interactions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Digital Signage be Customized for Specific Business Needs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A digital sign company offers extensive customization across multiple dimensions:</p>
                    <ul>
                        <P>1. Industry-Specific Solutions:</P>
                        <ul>
                            <ul>
                                <li>Retail: Product showcases, promotions, interactive catalogs</li>
                                <li>Healthcare: Patient information, wayfinding, queue management</li>
                                <li>Corporate: Internal communications, performance dashboards</li>
                                <li>Education: Campus announcements, event schedules</li>
                                <li>Hospitality: Menu boards, guest information, event details</li>
                            </ul>
                        </ul>
                        <p>2. Content Customization:</p>
                        <ul>
                            <ul>
                                <li>Brand-aligned design aesthetics</li>
                                <li>Dynamic content scheduling</li>
                                <li>Real-time updates</li>
                                <li>Multilingual support</li>
                                <li>Personalized messaging</li>
                                <li>Interactive elements</li>
                            </ul>
                        </ul>
                        <p>3. Technical Customization:</p>
                        <ul>
                            <ul>
                                <li>Screen size and configuration</li>
                                <li>Mounting options</li>
                                <li>Integration with existing systems</li>
                                <li>Cloud-based or local content management</li>
                                <li>Mobile device compatibility</li>
                                <li>Custom hardware configurations</li>
                            </ul>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Types of Content Can be Displayed on Digital Signage Screens?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage display screens can display a wide variety of content, enhancing engagement and
                        communication. This includes text-based content, visual content like images and infographics,
                        and multimedia content—including videos, slideshows, and live feeds—provides dynamic
                        storytelling opportunities that engage viewers on multiple sensory levels.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Easy is It to Update and Manage Content on Digital Signage Systems?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Users can remotely update displays in real time, schedule content, and access templates for
                        consistency. Analytics tools also provide insights into performance, enabling businesses to
                        optimize messaging and enhance audience engagement efficiently.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    What Industries Can Benefit from Digital Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage can be a game changer in branding for many industries. Here’s a breakdown:</p>
                    <ul>
                        <li>Retail stores use digital signage to showcase new arrivals and exclusive offers.</li>
                        <li>Restaurants use digital boards to showcase menus and special offers.</li>
                        <li>Hospitals and clinics use them to provide essential information to patients.</li>
                        <li>Hotels use it to highlight amenities, services, and guide guests.</li>
                        <li>Banks utilize digital signage to inform customers about their services.</li>
                    </ul>
                    <p>Digital signage systems offer potential advantages for nearly all businesses aiming to enhance
                        communication with both customers and employees.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Industries Can Benefit from Digital Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A digital signage system needs some key hardware components. These are:</p>
                    <ul>
                        <li>First, a screen like an LED or LCD monitor to show the content.</li>
                        <li>Second, a multimedia or computer player to store and play content.</li>
                        <li>Third, a content management system (CMS) to organize and update what appears on the screen.</li>
                        <li>Many advanced systems also need an Internet connection for remote updates.</li>
                    </ul>
                    <p>Assembly equipment or supports may be required to install the screens correctly. According to the
                        configuration, extra accessories can be integrated such as
                        touch screens and speakers so that the signage is more communicative and appealing to users.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is The Average Lifespan of Digital Signage Displays?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The lifespan of a digital display is based on its usage and quality. Most digital screens last
                        between 50,000
                        and 100,000 hours and work for 5 to 10 years with sufficient attention. LED screens usually last
                        longer than
                        LCD screens. If you are used indoors with moderate brightness, screens last longer. Outdoor screens
                        bear climatic
                        conditions, so they may require extra protection. Periodic upkeep, such as cleaning and software
                        updates, assists
                        in extending the life of the screen and keeping it working effectively.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Can Digital Signage Display Content in Multiple Languages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can show content in several languages with digital signage. Digital signage systems present
                        textual content
                        alongside images and videos in various languages to achieve superior communication effectiveness.
                        Confirms that customers,
                        workers, and visitors comprehend essential information clearly, irrespective of the language they
                        speak, enhancing their
                        experience with the business or service. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Can Digital Signage Help Improve In-store Sales?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage is super effective in grabbing customer attention immediately. With bright and
                        striking screens you can show discounts,
                        and special offers to attract foot traffic. Contents like product demonstrations or customer reviews
                        can generate trust. In restaurants,
                        digital menus make the order easier and highlight best-selling items. Stores can wear interactive
                        screens to highlight desired products.
                        Digital signage also permits companies to update promotions promptly without printing new posters.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection