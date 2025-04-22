@extends('frontend.layout.appLayout')
@section('content')

<style>
    .why-carousel-controls, .testimonial-carousel-controls {
    position: absolute;
    top: -34px;
    right: 15px;
    transform: translateY(0);
}
</style>

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/digital-sign1.webp')}}" alt="Digital Signages">
                <div class="carousel-caption-custom">
                    <h1>Best Digital Signage Manufacturer & Supplier Company- Brand Signages</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section>
    <div class="container py-5">
        <h2 class="hero-title">Uplift Your Brand Image with <br> Digital Signages</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/digi-1.webp')}}" alt="Digital Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">#1 Digital Signage Company</h2>
                <p class="brand-description">
                Brand Signages is the premier digital signage manufacturer, backed by 10+ years of expertise. We have in-house facility for digital signage hardware manufacturing, software, and CMS technology experts. We are an ISO certified digital signage manufacturer and supplier situated in Bangalore, serving clients across PAN India.
                </p>
                <ul class="process-list">
                        <li>
                        <b>Effortless Content Control:</b> Our in-house built digital signage CMS empowers you to schedule, update, and manage content in real-time.
                        </li>
                        <li>
                        <b>Advanced Display Technology:</b> We provide cutting-edge digital displays, including ultra-HD screens and interactive kiosks to enhance brand visibility & engagement.
                        </li>
                        <li>
                        <b>Smart Network Integration:</b> Our signage CMS systems are seamlessly connected, allowing for instant updates, remote accessibility, and content delivery across multiple locations.
                        </li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="process-section">
    <div class="container">
        <h2 class="process-title">About Our Digital Signage Boards</h2>
        <div class="row">

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-design">
                        <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="Quality LED Sign Boards">
                    </div>
                    <h3>Smart Digital Displays</h3>
                    <p><strong>No External Media Player:</strong> Our displays work seamlessly without additional hardware<br>
                    <strong>Remote Display Control:</strong> Reboot and manage single or multiple displays<br>
                    <strong>Universal Compatibility:</strong> Supports Android, LG webOS, Samsung Tizen, Windows<br> 
                    <strong>Content Scheduling:</strong> Quickly add playlists, media files, or promotional campaigns<br></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-deliver">
                        <img src="{{asset('frontend/Images/on-time.webp')}}" alt="Comprehensive CMS">
                    </div>
                    <h3>Specifications</h3>
                    <p><strong>Minimum Order Quantity:</strong> 1 Unit<br>
                    <strong>Display Type:</strong> LED / OLED / E-Ink (Customizable)<br>
                    <strong>Body Material:</strong> Aluminum, acrylic, Polycarbonate, Glass<br>
                    <strong>Lighting Type:</strong> LED / Backlit LCD for superior brightness<br>
                    <strong>Available Sizes:</strong> 15-inch, 18-inch, 24-inch, 32-inch, 55-inch<br>
                    <strong>Shape Options:</strong> Rectangle, Square, Curved, Ultra-Wide<br>
                    <strong>Viewing Angle:</strong> 178° - 270° for maximum visibility</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/transaction.webp')}}" alt="Support service">
                    </div>
                    <h3>Support service</h3>
                    <p>We deliver end-to-end signage solutions from design to installation ensuring seamless deployment, 
                        minimal downtime, and long-term reliability. Our commitment to customer satisfaction has helped
                        us build a loyal customer base that trusts our expertise and relies on us for their digital
                        signage needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Explore Our Products- Digital <br> Signage Manufacturers</h2>
            <p class="card-text text-center">Brand Signages stands as a leader in digital signage manufacturing, offering high-quality, commercial-grade digital signage and in-house CMS.
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign3.webp')}}" class="why-card-img-top" alt="Commercial Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Commercial Displays</h3>
                        <p class="card-text">We design versatile digital signage dispalys to be used in retail environments,
                            corporate settings, and educational institutions. They deliver stunning visuals and can
                            be customized to fit any branding requirement.</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Send Inquiry</a>
                        </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign4.webp')}}" class="why-card-img-top" alt="Digital Standee">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital Standee</h3>
                        <p class="card-text">Digital standees assist businesses in capturing attention at events,
                            trade shows, or retail spaces. Their portability and ease of use make them perfect for
                            showcasing promotions or important information.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign5.webp')}}" class="why-card-img-top" alt="Flat Panel Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Flat Panel Displays</h3>
                        <p class="card-text">Flat panel displays offer an innovative way to display high-resolution
                            images and videos. These are flexible, and you can customize them for indoor and outdoor
                            use.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign6.webp')}}" class="why-card-img-top" alt="Outdoor Display Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Outdoor Display Signage</h3>
                        <p class="card-text">Outdoor digital signage is prepared to withstand environmental
                            challenges while delivering vibrant content that remains visible even in direct
                            sunlight. This makes them essential for outdoor advertising campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digital-sign7.jpg')}}" class="why-card-img-top" alt="Display Video Wall">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Display Video Wall</h3>
                        <p class="card-text">Display Video Walls create immersive experiences by combining multiple
                            screens into a large display. They are perfect for high-traffic areas where capturing
                            audience attention is needed for brands to make a distinct impression.</p>
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
                                <img src="{{asset('frontend/Images/digital-sign3.webp')}}" class="why-card-img-top"
                                    alt="Commercial Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Commercial Displays</h3>
                                    <p class="card-text">We design versatile digital signage displays to be used in retail
                                        environments, corporate settings, and educational institutions. They deliver
                                        stunning visuals and can be customized to fit any branding requirement. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign4.webp')}}" class="why-card-img-top"
                                    alt="Digital Standee">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital Standee</h3>
                                    <p class="card-text">Digital standees assist businesses in capturing attention
                                        at events, trade shows, or retail spaces. Their portability and ease of use
                                        make them perfect for showcasing promotions or important information.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign5.webp')}}" class="why-card-img-top"
                                    alt="Flat Panel Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flat Panel Displays</h3>
                                    <p class="card-text">Flat panel displays offer an innovative way to display
                                        high-resolution images and videos. These are flexible, and you can customize
                                        them for indoor and outdoor use.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign5.webp')}}" class="why-card-img-top"
                                    alt="Flat Panel Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flat Panel Displays</h3>
                                    <p class="card-text">Flat panel displays offer an innovative way to display
                                        high-resolution images and videos. These are flexible, and you can customize
                                        them for indoor and outdoor use.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign6.webp')}}" class="why-card-img-top"
                                    alt="Outdoor Display Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Outdoor Display Signage</h3>
                                    <p class="card-text">Outdoor display signage is prepared to withstand
                                        environmental challenges while delivering vibrant content that remains
                                        visible even in direct sunlight. This makes them essential for outdoor
                                        advertising campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digital-sign7.jpg')}}" class="why-card-img-top"
                                    alt="Display Video Wall">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Display Video Wall</h3>
                                    <p class="card-text">Display Video Walls create immersive experiences by
                                        combining multiple screens into a large display. They are perfect for
                                        high-traffic areas where capturing audience attention is needed for brands
                                        to make a distinct impression.</p>
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


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Digital Signages</h2>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign8.webp')}}" alt="On-time installation" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">In-House Experts</h5>
                            <p class="text-content">From CMS software to digital displays production, we have a dedicated manufacturing unit and in-house team of experts. 
                                We provide digital signage installation and support services across PAN India. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign9.webp')}}" alt="Industry Grade Products" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Industry Grade Products</h5>
                            <p class="text-content">Our digital signages combine robust hardware with advanced display technology and a Content 
                                Management System. We have a PAN India support network.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign10.webp')}}" alt="Experienced professionals"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">10 Years of Expertise</h5>
                            <p class="text-content">We are among the best digital signage companies with expertise in digital signage technology. 
                                We have a modern manufacturing facility for digital signage production.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digital-sign11.webp')}}" alt="Happy Customer Base" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Network and Customer Support</h5>
                            <p class="text-content">Being among the best digital signage companies in India, we prioritize understanding your specific 
                                requirements and delivering digital signage solutions that exceed expectations. We utilize a wide partner network for 
                                better support and services. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=" py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customized Solutions for Every <br> Industry</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-corporate-office.webp')}}" class="why-card-img-top" alt="Corporate Office">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Office</h3>
                        <p class="card-text">We are considered among digital signage comapnies because our
                            products enhance internal communication and streamline information sharing. Companies
                            can use digital <a href="https://brandsignages.com/office-signages" style="text-decoration: unset;color:#E43D12">office signages</a> to display announcements showcasing performance metrics.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-retail.webp')}}" class="why-card-img-top" alt="Retail">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Retail</h3>
                        <p class="card-text">We provide vibrant digital display boards that attract customers and
                            promote products. Our solutions enable retailers to showcase promotions, highlight new
                            arrivals, and create an engaging shopping experience that drives sales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-hospitality.webp')}}" class="why-card-img-top" alt="Hospitality">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Hospitality</h3>
                        <p class="card-text">Our interactive <a href="https://brandsignages.com/restaurant-signages" style="text-decoration: unset;color:#E43D12">digital menu boards</a> enhance the guest experience for visitors dining at restaurants. 
                            These boards can help people check in and promote facilities and events, thus helping brands effectively communicate with guests.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=" py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-food.webp')}}" class="why-card-img-top" alt="Food">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Food</h3>
                        <p class="card-text">We design <a href="https://brandsignages.com/restaurant-signages" style="text-decoration: unset;color:#E43D12">digital menu boards</a> to be placed in restaurants and cades to
                            boost customer engagement. These boards can show updated prices dynamically, thus giving
                            the latest information to customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-banking.webp')}}" class="why-card-img-top" alt="Banking">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Banking</h3>
                        <p class="card-text">In banking, digital signage can streamline customer interactions by
                            displaying wait times, service information, and promotional offers. Our solutions help
                            banks improve customer service while maintaining a professional appearance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/industry-education.webp')}}" class="why-card-img-top" alt="Education">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Education</h3>
                        <p class="card-text">As a digital signage company, our products enhance communication among
                            students, staff, and visitors. You can use them to display schedules and promote events
                            to create an informed campus environment.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Benefits of Choosing Digital Signages for Branding</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/digital-signage-benefits.webp')}}" alt="Digital Signage Benefits" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    <b>Customer Engagement: </b>Digital signage employs dynamic visual content and videos to attract customer attention. Digital displays help in improving customer engagement, visibility, and retention using interactive visuals.</p>
                <p class="brand-description">
                    <b>Real-time Content: </b>You can easily update content with digital signage on the go. Whether it is a limited-time deal, black friday sale, or product promotion, digital signage is the most preferred signage solution.</p>
                <p class="brand-description">
                    <b>Long-term Benefits: </b>Unlike TV ads and other traditional marketing, digital signage is more engaging and cost-effective in the long run. You can update the contents in real-time, which saves on print costs.   
                </p>   
                <p class="brand-description">
                Brand Signages is a premier digital signage manufacturer with 10+ years of industry expertise. We understand every business is unique and creates digital signage solutions tailored to your brand’s specific needs, ensuring maximum engagement.  
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
                        <p class="card-text testimonial-card-text">Introducing digital signage into our office was a
                            turning point. The modern displays wow our clients and keep the team motivated. Updating
                            messages in real time is so convenient. It’s like adding life to the workspace!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anita-sharma.webp')}}" alt="Anita Sharma" class="client-img">
                            <div>
                                <div class="client-name">Anita Sharma</div>
                                <div class="client-role">Operations Manager</div>
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
                        <p class="card-text testimonial-card-text">Our manufacturing units are spread across India,
                            and keeping the team aligned was a challenge. Digital signage simplifies communication
                            by providing updates, safety guidelines, and performance metrics at a glance</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/rajiv-menon.webp')}}" alt="Rajiv Menon" class="client-img">
                            <div>
                                <div class="client-name">Rajiv Menon</div>
                                <div class="client-role">CEO, Bharat Logistics</div>
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
                        <p class="card-text testimonial-card-text">We added digital signage at our jewelry
                            showrooms, and the response has been fantastic. Customers appreciate the interactive
                            features and beautiful product showcases. It has elevated their shopping experience
                            significantly</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/priya-desai.webp')}}" alt="Priya Desai" class="client-img">
                            <div>
                                <div class="client-name">Priya Desai</div>
                                <div class="client-role">Marketing Head, Shree Gold & Diamonds</div>
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
                        <p class="card-text testimonial-card-text">Running a chain of cafés, and updating menus and
                            promos used to be a hassle. Digital signage not only made it easy but also helped us
                            increase sales by 30%. It’s stylish, practical, and great for business!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/arjun-khanna.webp')}}" alt="Arjun Khanna" class="client-img">
                            <div>
                                <div class="client-name">Arjun Khanna</div>
                                <div class="client-role">Owner, Brew Bliss Café</div>
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
                        <p class="card-text testimonial-card-text">The digital signage system at our co-working
                            space has taken professionalism to the next level. Clients love it, and our staff finds
                            it incredibly easy to manage. It's been an amazing addition to our brand</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/sneha-reddy.webp')}}" alt="Sneha Reddy" class="client-img">
                            <div>
                                <div class="client-name">Sneha Reddy</div>
                                <div class="client-role">HR Director, Nexus Workspaces</div>
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
                                    <p class="card-text testimonial-card-text">Introducing digital signage into our
                                        office was a turning point. The modern displays wow our clients and keep the
                                        team motivated. Updating messages in real time is so convenient. It’s like
                                        adding life to the workspace!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anita-sharma.webp')}}" alt="Anita Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Anita Sharma</div>
                                            <div class="client-role">Operations Manager</div>
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
                                    <p class="card-text testimonial-card-text">Our manufacturing units are spread
                                        across India, and keeping the team aligned was a challenge. Digital signage
                                        simplifies communication by providing updates, safety guidelines, and
                                        performance metrics at a glance</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rajiv-menon.webp')}}" alt="Rajiv Menon" class="client-img">
                                        <div>
                                            <div class="client-name">Rajiv Menon</div>
                                            <div class="client-role">CEO, Bharat Logistics</div>
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
                                    <p class="card-text testimonial-card-text">We added digital signage at our
                                        jewelry showrooms, and the response has been fantastic. Customers appreciate
                                        the interactive features and beautiful product showcases. It has elevated
                                        their shopping experience significantly</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya-desai.webp')}}" alt="Priya Desai" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Desai</div>
                                            <div class="client-role">Marketing Head, Shree Gold & Diamonds</div>
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
                                    <p class="card-text testimonial-card-text">We added digital signage at our
                                        jewelry showrooms, and the response has been fantastic. Customers appreciate
                                        the interactive features and beautiful product showcases. It has elevated
                                        their shopping experience significantly</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya-desai.webp')}}" alt="Priya Desai" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Desai</div>
                                            <div class="client-role">Marketing Head, Shree Gold & Diamonds</div>
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
                                    <p class="card-text testimonial-card-text">Running a chain of cafés, and
                                        updating menus and promos used to be a hassle. Digital signage not only made
                                        it easy but also helped us increase sales by 30%. It’s stylish, practical,
                                        and great for business!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/arjun-khanna.webp')}}" alt="Arjun Khanna" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun Khanna</div>
                                            <div class="client-role">Owner, Brew Bliss Café</div>
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
                                    <p class="card-text testimonial-card-text">The digital signage system at our
                                        co-working space has taken professionalism to the next level. Clients love
                                        it, and our staff finds it incredibly easy to manage. It's been an amazing
                                        addition to our brand</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/sneha-reddy.webp')}}" alt="Sneha Reddy" class="client-img">
                                        <div>
                                            <div class="client-name">Sneha Reddy</div>
                                            <div class="client-role">HR Director, Nexus Workspaces</div>
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
                <p>Digital signage systems offer potential advantages for nearly all businesses aiming to enhance communication with both customers and employees.</p> 
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
                <p>Assembly equipment or supports may be required to install the screens correctly. According to the configuration, extra accessories can be integrated such as 
                    touch screens and speakers so that the signage is more communicative and appealing to users.</p> 
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is The Average Lifespan of Digital Signage Displays?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The lifespan of a digital display is based on its usage and quality. Most digital screens last between 50,000 
                    and 100,000 hours and work for 5 to 10 years with sufficient attention. LED screens usually last longer than 
                    LCD screens. If you are used indoors with moderate brightness, screens last longer. Outdoor screens bear climatic 
                    conditions, so they may require extra protection. Periodic upkeep, such as cleaning and software updates, assists 
                    in extending the life of the screen and keeping it working effectively.</p> 
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                Can Digital Signage Display Content in Multiple Languages?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can show content in several languages with digital signage. Digital signage systems present textual content 
                    alongside images and videos in various languages to achieve superior communication effectiveness. Confirms that customers, 
                    workers, and visitors comprehend essential information clearly, irrespective of the language they speak, enhancing their 
                    experience with the business or service. </p> 
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Can Digital Signage Help Improve In-store Sales?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Digital signage is super effective in grabbing customer attention immediately. With bright and striking screens you can show discounts, 
                    and special offers to attract foot traffic. Contents like product demonstrations or customer reviews can generate trust. In restaurants, 
                    digital menus make the order easier and highlight best-selling items. Stores can wear interactive screens to highlight desired products. 
                    Digital signage also permits companies to update promotions promptly without printing new posters. </p> 
            </div>
        </div>

    </div>
</section>

 
<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Digital Signage</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the digital signage through our articles.</p>

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