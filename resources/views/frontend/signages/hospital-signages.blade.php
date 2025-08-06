@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/hospital-signage1.webp')}}" alt="Slide 1">
                <div class="carousel-caption-custom">
                    <h1>Medical Signage Solutions for Hospitals & Clinics</h1>
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
        <h2 class="hero-title">Healthcare & Hospital Signages for <br> Modern Industry Needs</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/hospital-signage2.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Our medical signages are designed to meet the requirements of patient care and operational efficiency within healthcare institutions. These are designed to guide patients through large, complex facilities and deliver real-time appointments and updates. If you combine modern technologies, you have hospital signage that attracts attention and creates a long-lasting impression.</p>
                <p class="brand-description">
                    Digital displays, interactive wayfinding systems, and mobile applications are transforming static signs into dynamic communication tools that can be updated in real time. Whether you need them for external or internal usage, we got you covered. We have a creative team that will align with your vision and will take care of the entire process till installation. This shift not only enhances patient navigation but also fosters a more engaging environment by providing timely updates on wait times, health tips, and hospital news.</p>
                <p class="brand-description">
                    So how can you create a cohesive identity as a healthcare institution? You can do it by investing in modern signage solutions to instill trust and support among patients. These boards offer both informative and aesthetic appeal and boost the overall patient experience.</p>
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Benefits of Using Signages in <br> Hospital/ Healthcare</h2>

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <p class="brand-description">
                    The healthcare sector is complicated and is more confusing during rush hours. It can be daunting for people who have visited hospitals before, never mind those who just moved into the locality. But they can feel at ease by looking at the signage of the hospital, rather than going over different counters, kiosks, and desks.</p>
                <p class="brand-description">
                    How can you use digital signage for your healthcare institution? You can share information about healthcare services, such as available packages, doctors available, and procedures done in the organization. If you want, you can also share additional information to help patients learn about the hospital or facts about healthcare. These boards can be used for navigation and help patients without creating too much hassle.</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/hospital-signage3.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>



<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Hospital/Medical Signages by Use Type</h2>
           
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/hospital-signage4.webp')}}" class="why-card-img-top"
                        alt="Directional and Wayfinding Signages">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Directional and Wayfinding Signages</h3>
                        <p class="card-text">Directional and wayfinding signages are essential in hospitals to help patients and visitors navigate complex environments efficiently. Signage in your hospital space reduces confusion and anxiety, ensuring that individuals can find their way to appointments, departments, and services without unnecessary stress.These hospital signages typically include arrows, department names, and room numbers, strategically placed at decision points such as intersections, elevators, and stairwells. For instance, a hospital might use blue for pediatric services and green for oncology departments, creating visual associations that guide users intuitively.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/hospital-signage5.webp')}}" class="why-card-img-top"
                        alt="Informational and Educational Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Informational and Educational Signage</h3>
                        <p class="card-text">Informational and educational medical signages play a crucial role in enhancing patient understanding of hospital services and health-related topics. These signs provide essential details about policies, procedures, available services, and health awareness initiatives that can empower patients to make informed decisions regarding their care. These are typically found in waiting areas, lobbies, and near treatment rooms.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/hospital-signage6.webp')}}" class="why-card-img-top"
                            alt="Illuminated Outdoor Signage">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Safety and Compliance Signages</h3>
                            <p class="card-text">Safety signages are vital in a hospital space for ensuring the well-being of patients, visitors, and staff. These healthcare signages communicate critical information regarding emergency exits, safety protocols, and regulatory guidelines that must be adhered to within the healthcare environment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/hospital-signage18.webp')}}" class="why-card-img-top"
                        alt="Digital Signages">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital Signages</h3>
                        <p class="card-text">Digital signage within hospitals by providing interactive and dynamic displays to be updated in real-time. These screens serve important hospital news and schedules for outpatient services or educational content about health topics. Additionally, these medical signages can engage patients with entertaining content while they wait for appointments.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/hospital-signage7.webp')}}" class="why-card-img-top"
                        alt="Branding Signages">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Branding Signages</h3>
                        <p class="card-text">Branding signages are integral to establishing a hospital's identity while providing essential information about departments and services. These signs typically feature the clinic’s logo prominently along with department names and room labels that help create a cohesive brand experience throughout the facility.
                            Moreover, medical signage used for branding can serve as a source of comfort for patients during stressful visits. They help patients feel more connected through thoughtful design elements.</p>
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
                                <img src="{{asset('frontend/Images/hospital-signage4.webp')}}" class="why-card-img-top"
                                    alt="Directional and Wayfinding Signages">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Directional and Wayfinding Signages</h3>
                                    <p class="card-text">Directional and wayfinding signages are essential in hospitals to help patients and visitors navigate complex environments efficiently. Signage in your hospital space reduces confusion and anxiety, ensuring that individuals can find their way to appointments, departments, and services without unnecessary stress.These hospital signages typically include arrows, department names, and room numbers, strategically placed at decision points such as intersections, elevators, and stairwells. For instance, a hospital might use blue for pediatric services and green for oncology departments, creating visual associations that guide users intuitively.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/hospital-signage5.webp')}}" class="why-card-img-top"
                                    alt="Informational and Educational Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Informational and Educational Signage</h3>
                                    <p class="card-text">Informational and educational medical signages play a crucial role in enhancing patient understanding of hospital services and health-related topics. These signs provide essential details about policies, procedures, available services, and health awareness initiatives that can empower patients to make informed decisions regarding their care. These are typically found in waiting areas, lobbies, and near treatment rooms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/hospital-signage6.webp')}}" class="why-card-img-top"
                                    alt="Illuminated Outdoor Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Safety and Compliance Signages</h3>
                                    <p class="card-text">Safety signages are vital in a hospital space for ensuring the well-being of patients, visitors, and staff. These healthcare signages communicate critical information regarding emergency exits, safety protocols, and regulatory guidelines that must be adhered to within the healthcare environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/hospital-signage6.webp')}}" class="why-card-img-top"
                                    alt="Illuminated Outdoor Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Safety and Compliance Signages</h3>
                                    <p class="card-text">Safety signages are vital in a hospital space for ensuring the well-being of patients, visitors, and staff. These healthcare signages communicate critical information regarding emergency exits, safety protocols, and regulatory guidelines that must be adhered to within the healthcare environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/hospital-signage18.webp')}}" class="why-card-img-top"
                                    alt="Digital Signages">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital Signages</h3>
                                    <p class="card-text">Digital signage within hospitals by providing interactive and dynamic displays to be updated in real-time. These screens serve important hospital news and schedules for outpatient services or educational content about health topics. Additionally, these medical signages can engage patients with entertaining content while they wait for appointments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/hospital-signage7.webp')}}" class="why-card-img-top"
                                    alt="Branding Signages">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Branding Signages</h3>
                                    <p class="card-text">Branding signages are integral to establishing a hospital's identity while providing essential information about departments and services. These signs typically feature the clinic’s logo prominently along with department names and room labels that help create a cohesive brand experience throughout the facility.
                                        Moreover, medical signage used for branding can serve as a source of comfort for patients during stressful visits. They help patients feel more connected through thoughtful design elements. <br> <br> <br> </p>
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


<section class="container py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Your Guide to Perfect Outdoor Signage Boards</h2>
           
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/hospital-signage8.webp')}}" alt="Hospital Digital LED screens" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Hospital Digital LED screens</h5>
                            <p class="text-content">Digital signage of the hospital instantly captures attention and is selected for advertisements and informative presentations. These screens are eye-catching and versatile, unlike traditional hospital signs.  These can be used to display wait times, health tips, and entertainment, reducing their anxiety.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/hospital-signage9.webp')}}" alt="Dental clinic signboard" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Dental clinic signboard</h5>
                            <p class="text-content">A well-designed dental clinic signboard will tell people what to expect, the specialties, and the services. These should be placed outside the clinic where it is easily visible, of course,  the text should be presented in big, bold letters. You can use them to share infographics on dental health to encourage patients to seek treatment, especially through rotating messages and special promotions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/hospital-signage10.webp')}}" alt="Touchscreens"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Touchscreens</h5>
                            <p class="text-content">Nowadays, people don’t like reading from signboards, they need something interactive. Touchscreens offer that outlet to people, as they can access data with their fingertips. People will engage more, and create an overall positive experience. If you place them around lobbies, waiting areas, and other areas to elevate wayfinding.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/hospital-signage11.webp')}}" alt="Video Walls" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Video Walls</h5>
                            <p class="text-content">Video walls are an innovative medical signage solution for displaying large-scale visual content in hospitals. They are particularly useful in high-traffic areas such as lobbies or waiting rooms where they can showcase important information or promotional content related to hospital services. The versatility of video walls allows hospitals to display a variety of content simultaneously.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Interior & Exterior Hospital Signages</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/hospital-signage12.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    An interior hospital signage helps patients find their way through the hospital without being uncomfortable. If these boards are well-designed,  they can be used for entertainment and educational purposes. Patient families can look at these signs and learn something new or pass the time. These include nameplates, departments, rooms, floor identifiers, and kiosks. These help patients reach the doctor or the room on time, instead of going in circles. They can also add a touch of color and warmth to the environment without compromising quality and professionalism.</p>
                <p class="brand-description">
                    A hospital's digital signage can play a vital role in creating a first impression, right from where patients enter the building. These can also help in directing people to specific wings, saving time and money. If positioned strategically, these can help, instead of distracting and irritating. These are used in the entry arches, parking lots, elevators, and staircases. Healthcare institutes can use lighting and other systems to make it more welcoming to patients and improve overall patient experience.</p>
                <p class="brand-description">
                    You can ask for customization of these signages to fit your brand’s perspective, and create a holistic environment.</p>
                
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
                        <p class="card-text testimonial-card-text">As a physician, I often recommend our hospital to patients and their families. The new informational signages throughout the facility are fantastic! They not only highlight our services but also provide valuable health tips and educational content. <br></p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage13.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Sanjay Tak</div>
                                <div class="client-role">CMO</div>
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
                        <p class="card-text testimonial-card-text">Implementing a new signage system in our hospital has been transformative. We received numerous comments from patients who found the new wayfinding signs incredibly helpful. One patient said</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage14.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Samira</div>
                                <div class="client-role">vavasvsfvas</div>
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
                        <p class="card-text testimonial-card-text">Hearing from parents about their experiences in our clinic is invaluable. One mother wrote, 'The colorful signs and friendly staff made my child feel at ease during what could have been a scary visit.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage15.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Richard Lee</div>
                                <div class="client-role">Hospital Director</div>
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
                        <p class="card-text testimonial-card-text">A recent comment from a patient stated, 'I felt cared for every step of the way during my treatment.' Such heartfelt feedback not only boosts staff morale but also helps us identify areas for improvement and innovation in our care delivery.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage16.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Lisa Nguyen</div>
                                <div class="client-role">Surgeon</div>
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
                        <p class="card-text testimonial-card-text">The digital displays in the hospital lobby are a game-changer! Not only do they provide important announcements and updates, but they also showcase patient success stories that inspire hope.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage17.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Arvind Nair</div>
                                <div class="client-role">Dermatologist</div>
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
                                    <p class="card-text testimonial-card-text">As a physician, I often recommend our hospital to patients and their families. The new informational signages throughout the facility are fantastic! They not only highlight our services but also provide valuable health tips and educational content. <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/hospital-signage13.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Dr. Sanjay Tak</div>
                                            <div class="client-role">CMO</div>
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
                                    <p class="card-text testimonial-card-text">Implementing a new signage system in our hospital has been transformative. We received numerous comments from patients who found the new wayfinding signs incredibly helpful. One patient said</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/hospital-signage14.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Dr. Samira</div>
                                            <div class="client-role">vavasvsfvas</div>
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
                                    <p class="card-text testimonial-card-text">Hearing from parents about their experiences in our clinic is invaluable. One mother wrote, 'The colorful signs and friendly staff made my child feel at ease during what could have been a scary visit.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/hospital-signage15.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Richard Lee</div>
                                            <div class="client-role">Hospital Director</div>
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
                                    <p class="card-text testimonial-card-text">Hearing from parents about their experiences in our clinic is invaluable. One mother wrote, 'The colorful signs and friendly staff made my child feel at ease during what could have been a scary visit.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/hospital-signage15.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Richard Lee</div>
                                            <div class="client-role">Hospital Director</div>
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
                                    <p class="card-text testimonial-card-text">A recent comment from a patient stated, 'I felt cared for every step of the way during my treatment.' Such heartfelt feedback not only boosts staff morale but also helps us identify areas for improvement and innovation in our care delivery.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/hospital-signage16.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Dr. Lisa Nguyen</div>
                                            <div class="client-role">Surgeon</div>
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
                                    <p class="card-text testimonial-card-text">The digital displays in the hospital lobby are a game-changer! Not only do they provide important announcements and updates, but they also showcase patient success stories that inspire hope.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/hospital-signage17.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Dr. Arvind Nair</div>
                                            <div class="client-role">Dermatologist</div>
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

<section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Healthcare Signs in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/hospital-and-medical-signages-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Healthcare Signs Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/hospital-medical-signages-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Hospital Signs Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/hospital-signages-in-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Hospital Signages Bangalore">
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
                What is the purpose of medical signage in healthcare facilities?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The purpose of medical signage in healthcare facilities is multifaceted, significantly contributing to the overall efficiency and effectiveness of patient care. First and foremost, signage serves as a crucial navigation tool within often complex hospital environments. Clear and strategically placed wayfinding signs help patients and visitors locate departments, treatment areas, and services, reducing anxiety and confusion during what can be stressful visits.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the different types of medical signages available?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Here are some types of medical signage available out there:</p>
                <ul>
                    <li>Wayfinding (for navigation)</li>
                    <li>Informational (healthcare information)</li>
                    <li>Safety (fire evacuation)</li>
                    <li>Compliance signage (visual and audio guidance)</li>
                    <li>Digital signage (real-time updates)</li>
                    <li>Department signage (room identification)</li>
                    <li>Kiosks (for assisting)</li>
                    <li>Room number identification</li>
                    <li>Exit and emergency signage (outdoor usage)</li>
                    <li>Educational signage</li>
                    <li>Service signage</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do digital signages improve communication in hospitals and clinics?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Hospitals and clinics are always busy, they are serving people 24/7. When a patient enters the building, they may not know the location of each room. You can help them through digital signage. If placed strategically, these can help people with wayfinding, educational content, and real-time updates (changes in visiting hours). These can reduce anxiety among patients and help them pass the time without getting bored.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are medical signages customizable for specific healthcare environments?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, medical signages are highly customizable for specific healthcare environments. You can ask us to customize the signage according to size and materials.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What materials are commonly used for durable medical signages?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As a medical signage manufacturer, we have worked with different materials. We have used plastic signs because they are resistant to corrosion and weather. We would recommend aluminum and stainless steel for longevity and outdoor events. Acrylic is our top choice for versatility, but they are less durable.</p>
            </div>
        </div>

    </div>
</section>
@endsection