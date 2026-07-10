@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">

@endpush

@section('content')
<!-- Custom Stylesheet link fallback if push is not handled by layout -->
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">

<div class="ds2-page-wrapper hs-2wrapper">
    <!-- 1. Hero Showcase 2-Slider Carousel Section -->
    <section class="ds2-hero-wrapper">
        <div id="ds2HeroCarousel" class="swiper ds2-hero-swiper">
            
            <!-- Explicit Slider Indicators (Right Side Dots) -->
            <!-- <div class="ds2-slider-dots"></div> -->

            <div class="swiper-wrapper">
                
                <!-- SLIDE 1 -->
                <div class="swiper-slide">
                    <div class="ds2-slide-bg d-none d-md-block" style="background-image: url('{{ asset('frontend/Images/hs-01.webp.webp') }}');"></div>
                    <div class="ds2-slide-bg d-block d-md-none" style="background-image: url('{{ asset('frontend/Images/hs-01.webp.webp') }}');"></div>
                    <div class="ds2-slide-overlay"></div>
                    <div class="container ds2-hero-content-container">
                        <div class="ds2-hero-textbox">
                            <h1 class="ds2-hero-title">Medical Signage Solutions for Hospitals & Clinics</h1>
                            <p class="ds2-hero-description">
                                Brand Signages is a premier digital signage manufacturer with 12+ years of experience. We create digital displays, interactive kiosk for all industries. With in-house manufacturing setup in Bangalore, we deliver PAN India services.
                            </p>
                            <div>
                                <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                                    Book A Demo Call <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

         
        </div>
    </section>

    <!-- 2. Healthcare & Hospital Signages Section -->
    <section class="ds2-premium-home-section hs2-section-white">
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <h2 class="ds2-main-title hs2-main-title-custom">Healthcare & Hospital Signages for Modern Industry Needs</h2>
                </div>
            </div>
            <div class="row align-items-stretch ">
                <div class="col-lg-6">
                    <div class="hs2-body-text-block">
                        <p class="mb-4">Our medical signages are designed to meet the requirements of patient care and operational efficiency within healthcare institutions. These are designed to guide patients through large, complex facilities and deliver real-time appointments and updates. If you combine modern technologies, you have hospital signage that attracts attention and creates a long-lasting impression.</p>
                        <p class="mb-4">Digital displays, interactive wayfinding systems, and mobile applications are transforming static signs into dynamic communication tools that can be updated in real time. Whether you need them for external or internal usage, we got you covered. We have a creative team that will align with your vision and will take care of the entire process till installation. This shift not only enhances patient navigation but also fosters a more engaging environment by providing timely updates on wait times, health tips, and hospital news.</p>
                        <p class="mb-0">So how can you create a cohesive identity as a healthcare institution? You can do it by investing in modern signage solutions to instill trust and support among patients. These boards offer both informative and aesthetic appeal and boost the overall patient experience.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ds2-premium-img-wrap shadow rounded-4 hs2-img-container">
                        <img src="{{ asset('frontend/Images/hs-02.webp') }}" alt="Healthcare & Hospital Signages" class="hs2-img-fit">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Explore Hospital/Medical Signages by Use Type (3-Card Carousel Slider) -->
    <section class="ds2-software-grid-section d hs2-section-gray">
        <div class="container">
            <h2 class="ds2-main-title text-center ">Hospital/Medical Signages by Use Type</h2>

            <div id="ds2CardSlider" class="swiper ds2-card-swiper ds2-card-slider-wrapper">
                <div class="swiper-wrapper">
                    
                    <!-- Card 1: Directional and Wayfinding Signages -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Directional and Wayfinding Signages</h3>
                                <p class="ds2-feature-card-text">
                                    Directional and wayfinding signages are essential in hospitals to help patients and visitors navigate complex environments efficiently. Signage in your hospital space reduces confusion and anxiety, ensuring that individuals can find their way to appointments.
                                </p>
                                <a href="{{ route('contact_us') }}" class="ds2-feature-card-link">Contact Us &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-1.webp') }}" alt="Directional and Wayfinding Signages">
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Informational and Educational Signage -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                             <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Informational and Educational Signage</h3>
                                <p class="ds2-feature-card-text">
                                    Informational and educational medical signages play a crucial role in enhancing patient understanding of hospital services and health-related topics. These signs provide essential details about policies, procedures, available services, and health awareness initiatives.
                                </p>
                                <a href="{{ route('contact_us') }}" class="ds2-feature-card-link">Contact Us &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-2.webp') }}" alt="Informational and Educational Signage">
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Safety and Compliance Signages -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Safety and Compliance Signages</h3>
                                <p class="ds2-feature-card-text">
                                    Safety signages are vital in a hospital space for ensuring the well-being of patients, visitors, and staff. These healthcare signages communicate critical information regarding emergency exits, safety protocols, and regulatory guidelines that must be adhered to.
                                </p>
                                <a href="{{ route('contact_us') }}" class="ds2-feature-card-link">Contact Us &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-3.webp') }}" alt="Safety and Compliance Signages">
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Safety and Compliance Signages 2 -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Safety and Compliance Signages</h3>
                                <p class="ds2-feature-card-text">
                                    Safety signages are vital in a hospital space for ensuring the well-being of patients, visitors, and staff. These healthcare signages communicate critical information regarding emergency exits, safety protocols, and regulatory guidelines that must be adhered to.
                                </p>
                                <a href="{{ route('contact_us') }}" class="ds2-feature-card-link">Contact Us &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-4.webp') }}" alt="Safety and Compliance Signages">
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Digital Signages -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Digital Signages</h3>
                                <p class="ds2-feature-card-text">
                                    Digital signage within hospitals provides interactive and dynamic displays to be updated in real-time. These screens serve important hospital news and schedules for outpatient services or educational content about health topics. Additionally, these can engage patients with entertaining content.
                                </p>
                                <a href="{{ route('contact_us') }}" class="ds2-feature-card-link">Contact Us &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-5.webp') }}" alt="Digital Signages">
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Branding Signages -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Branding Signages</h3>
                                <p class="ds2-feature-card-text">
                                    Branding signages play a significant role in establishing a hospital's identity while providing essential information about departments and services. These signs typically feature the clinic's logo prominently along with department names and room labels that help create a cohesive brand experience.
                                </p>
                                <a href="{{ route('contact_us') }}" class="ds2-feature-card-link">Contact Us &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-6.webp') }}" alt="Branding Signages">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Slider Pagination Indicators (Pill + Circle Dot matching design) -->
                <div class="ds2-card-slider-indicators"></div>
            </div>

        </div>
    </section>

    <!-- 4. Where to Use Signages in Hospital (Swiper 2-Column Card Slider) -->
    <section class="ds2-software-grid-section hs2-section-white d">
        <div class="container">
            <h2 class="ds2-main-title text-center ">Where to Use Signages in Hospital</h2>

            <div id="ds2UseSlider" class="swiper ds2-card-swiper ds2-card-slider-wrapper d hs2-use-slider">
                <div class="swiper-wrapper">
                    
                    <!-- Slide 1: Hospital Digital LED screens -->
                    <div class="swiper-slide h-auto">
                        <div class="card  border-0 shadow-sm rounded-4 hs2-use-card">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 cardcontent">
                                    <h3 class="ds2-feature-card-title hs2-use-card-title">Hospital Digital LED screens</h3>
                                    <p class="ds2-feature-card-text hs2-use-card-text">
                                        Digital signage of the hospital instantly captures attention and is selected for advertisements and informative presentations. These screens are eye-catching and versatile, unlike traditional hospital signs. These can be used to display wait times, health tips, and entertainment, reducing their anxiety.
                                    </p>
                                    <a href="{{ route('contact_us') }}" class="ds2-feature-card-link hs2-use-card-link">Contact Us &rarr;</a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded-4 overflow-hidden shadow-sm hs2-use-img-wrap">
                                        <img src="{{ asset('frontend/Images/hs-3.webp') }}" alt="Hospital Digital LED screens" class="hs2-img-fit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Dental clinic signboard -->
                    <div class="swiper-slide h-auto">
                        <div class="card  border-0 shadow-sm rounded-4 hs2-use-card">
                            <<div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 cardcontent">
                                    <h3 class="ds2-feature-card-title hs2-use-card-title">Dental clinic signboard</h3>
                                    <p class="ds2-feature-card-text hs2-use-card-text">
                                        A well-designed dental clinic signboard will tell people what to expect, the specialties, and the services. These should be placed outside the clinic where it is easily visible, of course, the text should be presented in big, bold letters. You can use them to share infographics on dental health to encourage patients to seek treatment, especially through rotating messages and special promotions.
                                    </p>
                                    <a href="{{ route('contact_us') }}" class="ds2-feature-card-link hs2-use-card-link">Contact Us &rarr;</a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded-4 overflow-hidden shadow-sm hs2-use-img-wrap">
                                        <img src="{{ asset('frontend/Images/hs-4.webp') }}" alt="Dental clinic signboard" class="hs2-img-fit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Touchscreens -->
                    <div class="swiper-slide h-auto">
                        <div class="card  border-0 shadow-sm rounded-4 hs2-use-card">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 cardcontent">
                                    <h3 class="ds2-feature-card-title hs2-use-card-title">Touchscreens</h3>
                                    <p class="ds2-feature-card-text hs2-use-card-text">
                                        Nowadays, people don't like reading from signboards, they need something interactive. Touchscreens offer that outlet to people, as they can access data with their fingertips. People will engage more, and create an overall positive experience. If you place them around lobbies, waiting areas, and other areas to elevate wayfinding.
                                    </p>
                                    <a href="{{ route('contact_us') }}" class="ds2-feature-card-link hs2-use-card-link">Contact Us &rarr;</a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded-4 overflow-hidden shadow-sm hs2-use-img-wrap">
                                        <img src="{{ asset('frontend/Images/hs-5.webp') }}" alt="Touchscreens" class="hs2-img-fit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Video Walls -->
                    <div class="swiper-slide h-auto">
                        <div class="card  border-0 shadow-sm rounded-4 hs2-use-card">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 cardcontent">
                                    <h3 class="ds2-feature-card-title hs2-use-card-title">Video Walls</h3>
                                    <p class="ds2-feature-card-text hs2-use-card-text">
                                        Video walls are an innovative medical signage solution for displaying large-scale visual content in hospitals. They are particularly useful in high-traffic areas such as lobbies or waiting rooms where they can showcase important information or promotional content related to hospital services. The versatility of video walls allows hospitals to display a variety of content simultaneously.
                                    </p>
                                    <a href="{{ route('contact_us') }}" class="ds2-feature-card-link hs2-use-card-link">Contact Us &rarr;</a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded-4 overflow-hidden shadow-sm hs2-use-img-wrap">
                                        <img src="{{ asset('frontend/Images/hs-6.webp') }}" alt="Video Walls" class="hs2-img-fit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Slider Pagination Indicators (Pill + Circle Dot) -->
                <div class="ds2-use-slider-indicators ds2-card-slider-indicators"></div>
            </div>

        </div>
    </section>

    <!-- 5. Interior & Exterior Hospital Signages Section -->
    <section class="ds2-premium-home-section py-5 hs2-section-gray">
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <h2 class="ds2-main-title hs2-main-title-custom">Interior & Exterior Hospital Signages</h2>
                </div>
            </div>
            <div class="row align-items-stretch ">
                <div class="col-lg-6">
                    <div class="hs2-body-text-block">
                        <p class="mb-4">An interior hospital signage helps patients find their way through the hospital without being uncomfortable. If these boards are well-designed, they can be used for entertainment and educational purposes. Patient families can look at these signs and learn something new or pass the time. These include nameplates, departments, rooms, floor identifiers, and kiosks. These help patients reach the doctor or the room on time, instead of going in circles. They can also add a touch of color and warmth to the environment without compromising quality and professionalism.</p>
                        <p class="mb-4">A hospital's digital signage can play a vital role in creating a first impression, right from where patients enter the building. These can also help in directing people to specific wings, saving time and money. If positioned strategically, these can help, instead of distracting and irritating. These are used in the entry arches, parking lots, elevators, and staircases. Healthcare institutes can use lighting and other systems to make it more welcoming to patients and improve overall patient experience.</p>
                        <p class="mb-0">You can ask for customization of these signages to fit your brand’s perspective, and create a holistic environment.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ds2-premium-img-wrap shadow rounded-4 hs2-img-container">
                        <img src="{{ asset('frontend/Images/hs-03.webp') }}" alt="Interior & Exterior Hospital Signages" class="hs2-img-fit">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- 6. What Our Clients Say (Testimonials) Section -->
    <section class="ds2-testimonial-section">
        <!-- Background Watermark Text -->
        <div class="ds2-testimonial-bg-text">Feedback</div>

        <div class="container">
            <!-- Header with Title & Arrow Navigation Buttons -->
            <div class="ds2-testimonial-header">
                <h2 class="ds2-testimonial-title">Feedback from Our Valuable Clients</h2>
                <div class="ds2-testimonial-controls">
                    <button class="ds2-testimonial-control-btn ds2-testimonial-prev" type="button" aria-label="Previous Testimonials">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="ds2-testimonial-control-btn ds2-testimonial-next" type="button" aria-label="Next Testimonials">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Testimonials Swiper Slider -->
            <div id="ds2TestimonialCarousel" class="swiper ds2-testimonial-swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Slide 1: Dr. Rajesh Kumar -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    The new wayfinding signage has completely transformed the patient experience at Apollo. Visitors can now easily locate different departments, and our patient families consistently comment on how easy the facility is to navigate.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Dr. Rajesh Kumar</h3>
                                <p class="ds2-testimonial-author-title">Director of Operations – Apollo Hospitals</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Seema Nayak -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    We needed stunning, durable, and regulation-compliant signage for our hospital, and Brand Signages delivered exactly what we asked for. Their attention to detail is excellent, which helped us enhance the patient experience.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Seema Nayak</h3>
                                <p class="ds2-testimonial-author-title">Operations Manager – Fortis Hospital</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Vinay Gupta -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    From site assessment to silent night installation, the entire process was managed professionally. The Braille and ADA-compliant signs met every audit requirement and the modular room ID system has made clinician name updates effortless for our team.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Vinay Gupta</h3>
                                <p class="ds2-testimonial-author-title">Facility Head – Max Healthcare</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Dr. S. Mukherjee -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    Exceptional turnaround time on our multi-floor hospital signage project. Their colour-coding logic for departments was intuitive and our NABH audit team specifically praised the clarity and compliance of the signage layout.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Dr. S. Mukherjee</h3>
                                <p class="ds2-testimonial-author-title">Founder – City Clinics Group</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- 9. FAQs Section -->
    <section class="faq-section">
          <div class="container">
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
                        brand visibility and audience engagement across multiple platforms and environments.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    What is Electronic Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Electronic signage refers to any display system using LED or LCD screens to show information, advertising, or dynamic content. It is often used interchangeably with digital signage. At Brand Signages, our electronic signage solutions include commercial displays, video walls, digital standees, and interactive kiosks- all built for 24/7 business use across retail, hospitals, corporate offices, and more.</p>
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

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined') {
        // 1. Initialize Hero Showcase Swiper
        var heroSwiper = new Swiper('#ds2HeroCarousel', {
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.ds2-slider-dots',
                clickable: true,
                bulletClass: 'ds2-dot-btn',
                bulletActiveClass: 'active',
                renderBullet: function (index, className) {
                    return '<button type="button" class="' + className + '" aria-label="Slide ' + (index + 1) + '"></button>';
                }
            },
            navigation: {
                nextEl: '.ds2-hero-next',
                prevEl: '.ds2-hero-prev',
            }
        });

        // 2. Initialize feature card swiper
        var cardSwiper = new Swiper('#ds2CardSlider', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.ds2-card-slider-indicators',
                clickable: true,
                bulletClass: 'ds2-card-indicator-btn',
                bulletActiveClass: 'active',
                renderBullet: function (index, className) {
                    return '<button type="button" class="' + className + '" aria-label="Go to slide ' + (index + 1) + '"></button>';
                }
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });

        // 2.5 Initialize use location swiper
        var useSwiper = new Swiper('#ds2UseSlider', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            // autoplay: {
            //     delay: 5500,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: '.ds2-use-slider-indicators',
                clickable: true,
                bulletClass: 'ds2-card-indicator-btn',
                bulletActiveClass: 'active',
                renderBullet: function (index, className) {
                    return '<button type="button" class="' + className + '" aria-label="Go to slide ' + (index + 1) + '"></button>';
                }
            }
        });

        // 3. Initialize Testimonial Swiper
        var testimonialSwiper = new Swiper('#ds2TestimonialCarousel', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.ds2-testimonial-next',
                prevEl: '.ds2-testimonial-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 2,
                }
            }
        });
    }

    // 4. Tab Switcher Logic
    var tabs = document.querySelectorAll('.ds2-industry-tab-btn');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var targetTab = this.getAttribute('data-tab');
            tabs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');

            var panes = document.querySelectorAll('.ds2-industry-pane');
            panes.forEach(function (p) { p.classList.remove('active'); });
            var targetPane = document.getElementById(targetTab);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });

    // 5. FAQ Accordion Logic
    var faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(function(question) {
        question.addEventListener('click', function() {
            var item = this.parentElement;
            var isActive = item.classList.contains('active');
            
            // Close all
            document.querySelectorAll('.faq-item').forEach(function(i) {
                i.classList.remove('active');
            });
            
            // Toggle active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>
@endsection
