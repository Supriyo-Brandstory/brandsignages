@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/metal-signage.webp')}}" alt="Metal Signage Boards">
                <div class="carousel-caption-custom">
                    <h1>Metal & Steel Signage Boards for Your Space</h1>
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
        <h2 class="hero-title">Uplift Your Brand Image with Custom <br>Metal Signage Boards</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/metal-signage2.webp')}}" alt="Metal Signage Boards" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">#1 Metal Signage Makers</h2>
                <p class="brand-description">
                    Elevate your business with eye-catching signage that reflects professionalism and durability. Opting for premium-quality metal signage is an effective way to enhance your brand's visibility and make a lasting impression. 

                </p>
                <p class="brand-description">
                    Brand Signages is the top metal signage manufacturer, specializing in creating custom metal signage boards. We design premium aluminum and stainless steel metal signages, ensuring both durability and a premium finish. We design metal signage boards for indoor and outdoor usage, crafted with the highest quality standards.

                </p>
                <p class="brand-description">
                    Our stainless steel signage can withstand weather conditions, perfect for outdoor usage. Aluminum signages are designed to match your brand's unique identity, offering shiny, matte, and other finish options for a flawless look. Whether you need a nameplate, outdoor signage, or interior signs, our metal signage is versatile and adaptable to meet your needs. 

                </p>
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Metal Signage Boards: Industries <br> We Serve</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/metal-signage3.webp')}}" class="why-card-img-top" alt="Real Estate">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Real Estate</h3>
                        <p class="card-text">Metal signage boards extend professionalism to a brand’s visual
                            identity and presence. Realtors prefer them because of their durability and resistance
                            to adverse weather patterns. These are mainly used for listing properties, posting open
                            house announcements, and giving directions.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/metal-signage4.webp')}}" class="why-card-img-top" alt="Corporate Office">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Office</h3>
                        <p class="card-text">Corporate offices use polished stainless steel signages for branding or delivering
                            information to help employees and guests navigate the office floor. The stainless steel <a href="https://brandsignages.com/office-signages" style="text-decoration: unset;color:#E43D12">office signage boards</a> 
                            are modern, and aesthetic, and offer excellent resistance to wear.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/metal-signage5.webp')}}" class="why-card-img-top" alt="Retail Outlets">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Retail Outlets</h3>
                        <p class="card-text">Retailers prefer metal signage to display attractive designs and
                            messages to customers. Brands use these to tell people about products, ongoing
                            promotions, or sales offers. The polished stainless steel extends functionality and
                            aesthetics to these boards.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/metal-signage6.webp')}}" class="why-card-img-top" alt="Industrial Settings">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Industrial Settings</h3>
                        <p class="card-text">In industrial settings, metal signage boards serve critical<a href="https://brandsignages.com/construction-safety-signages" style="text-decoration: unset;color:#E43D12">construction safety signs</a> and
                            operational purposes. They are often used for hazard warnings, equipment labels, and
                            directional signage. Their robustness is crucial in environments where they may be
                            exposed to harsh conditions.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/metal-signage7.webp')}}" class="why-card-img-top" alt="Hospitality Industry">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Hospitality Industry</h3>
                        <p class="card-text">The hospitality sector employs metal signage for branding and guest
                            navigation. From <a href="https://brandsignages.com/indoor-signages" style="text-decoration: unset;color:#E43D12">hotel entrance signs</a> to room numbers and directional indicators, metal
                            signage enhances the guest experience while projecting a high-quality image of the
                            establishment</p>
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
                                <img src="{{asset('frontend/Images/metal-signage3.webp')}}" class="why-card-img-top" alt="Real Estate">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Real Estate</h3>
                                    <p class="card-text">Metal signage boards extend professionalism to a brand’s
                                        visual identity and presence. Realtors prefer them because of their
                                        durability and resistance to adverse weather patterns. These are mainly used
                                        for listing properties, posting open house announcements, and giving
                                        directions (in entryways, receptions, or outside lifts).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/metal-signage4.webp')}}" class="why-card-img-top"
                                    alt="Corporate Office">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate Office</h3>
                                    <p class="card-text">Corporate offices use polished stainless for branding or
                                        giving information to help employees and guests navigate the office floor.
                                        The stainless steel boards are modern, and aesthetic, and offer resistance
                                        to wear.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/metal-signage5.webp')}}" class="why-card-img-top"
                                    alt="Retail Outlets">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Retail Outlets</h3>
                                    <p class="card-text">Retailers prefer metal signage to display attractive
                                        designs and messages to customers. Brands use these to tell people about
                                        products, ongoing promotions, or sales offers. The polished stainless steel
                                        extends functionality and aesthetics to these boards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/metal-signage5.webp')}}" class="why-card-img-top"
                                    alt="Retail Outlets">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Retail Outlets</h3>
                                    <p class="card-text">Retailers prefer metal signage to display attractive
                                        designs and messages to customers. Brands use these to tell people about
                                        products, ongoing promotions, or sales offers. The polished stainless steel
                                        extends functionality and aesthetics to these boards. <br> <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/metal-signage6.webp')}}" class="why-card-img-top"
                                    alt="Industrial Settings">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Industrial Settings</h3>
                                    <p class="card-text">In industrial settings, metal signage boards serve critical
                                    <a href="https://brandsignages.com/construction-safety-signages" style="text-decoration: unset;color:#E43D12">construction safety signs</a> and operational purposes. They are often used for hazard warnings,
                                        equipment labels, and directional signage. Their robustness is crucial in
                                        environments where they may be exposed to harsh conditions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/metal-signage7.webp')}}" class="why-card-img-top"
                                    alt="Hospitality Industry">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Hospitality Industry</h3>
                                    <p class="card-text">The hospitality sector employs metal signage for branding
                                        and guest navigation. From <a href="https://brandsignages.com/indoor-signages" style="text-decoration: unset;color:#E43D12">hotel entrance signs</a> to room numbers and
                                        directional indicators, metal signage enhances the guest experience while
                                        projecting a high-quality image of the establishment</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Types of Metal Signages We Make</h2>
            <p class="card-text testimonial-card-text">At Brand Signages, we are the best metal and steel signage boards manufacturer in India.
                 <br> Our premium quality and durable signage solutions create a professional, impactful statement for your brand. Our metal signboards 
                 <br>include options such as: 
            </p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/metal-signage8.webp')}}" alt="Reverse Glow Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Reverse Glow Signs</h5>
                            <p class="text-content">Reverse glow signs enhance the sign's visibility in low-light
                                conditions but also add a modern touch to any environment. Ideal for businesses
                                looking to make a statement at night, reverse glow signs are ideal for storefronts,
                                restaurants, and event venues, ensuring your brand stands out after dark.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/metal-signage9.webp')}}" alt="Metal Backlit" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Metal Backlit</h5>
                            <p class="text-content">Metal backlit signs feature a light source behind the face,
                                highlighting the graphics and text, making them pop. These are particularly
                                effective in high-traffic areas and can be customized in various shapes and sizes.
                                Whether used for outdoor advertising, these signs create an inviting atmosphere that
                                draws customers in.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/metal-signage10.webp')}}" alt="Reflective Metal Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Reflective Metal Signs</h5>
                            <p class="text-content">Reflective metal signage ensures high visibility even in dim
                                lighting or nighttime conditions. These signs are essential for safety applications,
                                such as traffic signs or emergency exit indicators, where visibility is critical.
                                They can also be used creatively in promotional settings to enhance visibility
                                during events or exhibitions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/metal-signage11.webp')}}" alt="Premium Metal Letters and Signage"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Premium Metal Letters and Signage</h5>
                            <p class="text-content">Our premium steel signage board can provide a sophisticated and
                                upscale appearance. You can show the message with letters in various fonts, sizes,
                                and finishes. Whether mounted on walls or used as standalones, they add a touch of
                                elegance to your branding.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/metal-signage12.webp')}}" alt="Stainless Steel Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Stainless Steel Signs</h5>
                            <p class="text-content">Stainless steel sign boards are best for internal and external
                                usage, as they offer extensive versatility. Sign boards with a glossy finish can be
                                used indoors, but large boards are best for outdoor visibility. Some sectors that
                                might benefit like corporations, showrooms, buildings, hotels, hospitals, schools,
                                and colleges.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/metal-signage13.webp')}}" alt="Aluminium Sign Boards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Aluminium Sign Boards</h5>
                            <p class="text-content">Aluminum sign boards are resistant to rust and corrosion and can
                                be easily customized with graphics, and logos. These are mainly used for directional
                                signs to promotional displays and can provide versatility and longevity.</p>
                        </div>
                    </div>
                </div>
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
                        <p class="card-text testimonial-card-text">The metal backlit signs we purchased transformed
                            our storefront! They not only draw customers in but also enhance our brand image. The
                            team was incredibly helpful in the design process, and the final product exceeded our
                            expectations. We’ve seen a noticeable increase in foot traffic since installation</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/m-client1.webp')}}" alt="Vincent" class="client-img">
                            <div>
                                <div class="client-name">Vincent</div>
                                <div class="client-role">Goa</div>
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
                        <p class="card-text testimonial-card-text">I ordered reverse glow signs for my listings, and
                            the results have been fantastic! They attract attention even at night, making my
                            properties stand out. The quality is top-notch, and the installation was seamless. I’ve
                            received numerous compliments from clients about how professional they look</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/m-client2.webp')}}" alt="Aman" class="client-img">
                            <div>
                                <div class="client-name">Aman</div>
                                <div class="client-role">Grocery shop owner</div>
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
                        <p class="card-text testimonial-card-text">The premium metal letters we ordered for our
                            hotel lobby have added a touch of elegance to our space. Guests often comment on how
                            beautiful they are! The customization options were extensive, and the installation was
                            quick and professional. Truly a worthwhile investment</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/m-client3.webp')}}" alt="Deepak" class="client-img">
                            <div>
                                <div class="client-name">Deepak</div>
                                <div class="client-role">Restaurant operator</div>
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
                        <p class="card-text testimonial-card-text">Our aluminum sign boards have been a game changer
                            for wayfinding in our facility. They are lightweight yet sturdy, making them easy to
                            install and move as needed. The graphics are clear and vibrant, helping visitors
                            navigate with ease. Excellent service throughout the process!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/m-client4.webp')}}" alt="Seema" class="client-img">
                            <div>
                                <div class="client-name">Seema</div>
                                <div class="client-role">CEO of a retail company</div>
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
                        <p class="card-text testimonial-card-text">We needed reflective metal signs for our outdoor
                            seating area, and they work perfectly! They’re highly visible at night, ensuring our
                            guests find us easily. The durability is impressive; they’ve held up wonderfully against
                            the weather. Fantastic service and quality!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/m-client5.webp')}}" alt="Razia" class="client-img">
                            <div>
                                <div class="client-name">Razia</div>
                                <div class="client-role">Fashion entrepreneur</div>
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
                                    <p class="card-text testimonial-card-text">The metal backlit signs we purchased
                                        transformed our storefront! They not only draw customers in but also enhance
                                        our brand image. The team was incredibly helpful in the design process, and
                                        the final product exceeded our expectations. We’ve seen a noticeable
                                        increase in foot traffic since installation</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/m-client1.webp')}}" alt="Vincent" class="client-img">
                                        <div>
                                            <div class="client-name">Vincent</div>
                                            <div class="client-role">Goa</div>
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
                                    <p class="card-text testimonial-card-text">I ordered reverse glow signs for my
                                        listings, and the results have been fantastic! They attract attention even
                                        at night, making my properties stand out. The quality is top-notch, and the
                                        installation was seamless. I’ve received numerous compliments from clients
                                        about how professional they look</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/m-client2.webp')}}" alt="Aman" class="client-img">
                                        <div>
                                            <div class="client-name">Aman</div>
                                            <div class="client-role">Grocery shop owner</div>
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
                                    <p class="card-text testimonial-card-text">The premium metal letters we ordered
                                        for our hotel lobby have added a touch of elegance to our space. Guests
                                        often comment on how beautiful they are! The customization options were
                                        extensive, and the installation was quick and professional. Truly a
                                        worthwhile investment</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/m-client3.webp')}}" alt="Deepak" class="client-img">
                                        <div>
                                            <div class="client-name">Deepak</div>
                                            <div class="client-role">Restaurant operator</div>
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
                                    <p class="card-text testimonial-card-text">The premium metal letters we ordered
                                        for our hotel lobby have added a touch of elegance to our space. Guests
                                        often comment on how beautiful they are! The customization options were
                                        extensive, and the installation was quick and professional. Truly a
                                        worthwhile investment</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/m-client3.webp')}}" alt="Deepak" class="client-img">
                                        <div>
                                            <div class="client-name">Deepak</div>
                                            <div class="client-role">Restaurant operator</div>
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
                                    <p class="card-text testimonial-card-text">Our aluminum sign boards have been a
                                        game changer for wayfinding in our facility. They are lightweight yet
                                        sturdy, making them easy to install and move as needed. The graphics are
                                        clear and vibrant, helping visitors navigate with ease. Excellent service
                                        throughout the process!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/m-client4.webp')}}" alt="Seema" class="client-img">
                                        <div>
                                            <div class="client-name">Seema</div>
                                            <div class="client-role">CEO of a retail company</div>
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
                                    <p class="card-text testimonial-card-text">We needed reflective metal signs for
                                        our outdoor seating area, and they work perfectly! They’re highly visible at
                                        night, ensuring our guests find us easily. The durability is impressive;
                                        they’ve held up wonderfully against the weather. Fantastic service and
                                        quality!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/m-client5.webp')}}" alt="Razia" class="client-img">
                                        <div>
                                            <div class="client-name">Razia</div>
                                            <div class="client-role">Fashion entrepreneur</div>
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
                What are the advantages of using metal signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Metal signage offers numerous advantages that make it an ideal choice for businesses and
                    organizations seeking effective communication tools. These metal signages are made from
                    stainless steel, aluminum, etc., and can resist harsh weather. The sleek finish and modern
                    aesthetic of metal signs enhance brand image and create a positive first impression on
                    customers. Metal signs can be customized with various finishes, such as brushed, polished, or
                    matte to enhance visibility. Businesses can create unique signage that aligns with their
                    branding needs. While the initial investment may be higher, their longevity and low maintenance
                    requirements make them cost-effective over time.</p>

            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How durable are metal signage boards compared to other materials?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Metal signage boards are significantly more durable than many other materials commonly used for
                    signs, such as wood, plastic, and acrylic. Metal signs, particularly those made from aluminum or
                    steel, are engineered to withstand harsh weather conditions. Another advantage of metal signage
                    is low maintenance requirements. Wood may need regular refinishing and plastic can fade, metal
                    signs typically only require occasional cleaning to maintain their appearance.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can metal signage be used for both indoor and outdoor applications?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, metal signage can be used for both indoor and outdoor applications, making it a versatile
                    choice for various settings and purposes. They are utilized in indoor environments such as
                    corporate offices, retail stores, and hospitality venues. They can serve multiple functions,
                    including wayfinding, branding, and decorative elements. Metal signage is particularly
                    advantageous due to its durability and weather resistance. This makes them ideal for
                    storefronts, directional signs, and promotional displays in high-traffic areas.</p>

            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What types of finishes are available for metal signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Metal signage can be finished in a variety of ways to enhance its appearance and durability. A
                    gloss finish provides a shiny, smooth surface that reflects light to display the message and
                    products. A matte finish offers a non-reflective surface with a subtle texture, used for indoor
                    signs as it reduces glare and provides a professional look.
                </p>
                <p>A metallic finish is often applied to aluminum and acrylic signs, providing an eye-catching shine
                    that enhances visual appeal. Reflective finishes are essential for signs that need to be visible
                    at night, such as road signs. A textured finish adds a unique and creative element to signage,
                    simulating materials like stone, brick, or wood
                </p>
                <p>Laminated finishes involve applying a protective layer over the sign's surface, providing
                    resistance against scratches and fading. Anodizing is a process that oxidizes the metal surface
                    to create a dense protective film, enhancing corrosion resistance. The brushed finish involves
                    creating fine lines on the metal surface through grinding, resulting in a textured appearance
                    that reflects light differently depending on the angle.
                </p>

            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do I maintain and clean my metal signage to ensure longevity?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>You can maintain your metal signage by regularly dusting your metal sign or hiring a professional
                    team to clean the metal signboards. If you have them indoors, you can try wiping them gently
                    with professional cleaning solutions. When your metal sign starts to lose its luster, consider
                    using a specialized metal polish suitable for the type of metal used in your sign. A protective
                    sealant can prevent oxidation by shielding it from environmental elements.</p>
            </div>
        </div>
    </div>
</section>
@endsection