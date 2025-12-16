@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/name-boards/name-board-design-for-office-1.webp') }}'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Name Board Design for <br>Office- Crafted to Impress</h1>
                    <p>Looking for a standout name board design for your office? Brand Signages <br>is trusted expert in crafting fine-quality,
                     professional office name boards <br>to showcase your brand with clarity and style.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Start Your Project</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
       <!-- <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">Office Name Board</h1>

        </div>
       
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/name-boards/office-name-board-design-1.jpg" alt="Advocate Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-board-design-2.jpg" alt="Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-board-design-3.jpg" alt="Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-board-design-4.jpg" alt="Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-board-design-5.jpg" alt="Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-board-design-6.jpg" alt="Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-board-8.webp" alt="Office Name Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-product-details.webp" alt="Acrylic LED Sign Board Spefifications">
                </div>
              
            </div>

          
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/name-boards/office-name-board-design-1.jpg" alt="Advocate Office Name Board Design Sample" class="thumb active" data-index="0">
                <img src="/frontend/Images/name-boards/office-name-board-design-2.jpg" alt="Corporate Office Name Board Design Sample" class="thumb" data-index="1">
                <img src="/frontend/Images/name-boards/office-name-board-design-3.jpg" alt="Corporate Office Name Board Design Sample" class="thumb" data-index="2">
                <img src="/frontend/Images/name-boards/office-name-board-design-4.jpg" alt="Corporate Office Name Board Design Sample" class="thumb" data-index="3">
                <img src="/frontend/Images/name-boards/office-name-board-design-5.jpg" alt="Corporate Office Name Board Design Sample" class="thumb" data-index="4">
                <img src="/frontend/Images/name-boards/office-name-board-design-6.jpg" alt="Corporate Office Name Board Design Sample" class="thumb" data-index="5">
                <img src="/frontend/Images/name-boards/shop-name-board-8.webp" alt="Corporate Office Outdoor Name Board Design Sample" class="thumb" data-index="6">
                <img src="/frontend/Images/led-sign-board/acrylic-led-product-details.webp" alt="Acrylic LED Sign Board Spefifications" class="thumb" data-index="7">
            </div>
        </div>

        
        <div class="content">
            <h1 class="hero-banner_title">Office Name Board Designs</h1>
            <p class="subtitle"><b>Price: ₹1,000 - ₹30,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">A premium office name board serves as the foundation of your corporate identity, projecting sophistication, reliability, and authority. 
                Cutting-edge design, efficient LED lighting, and top-grade materials ensure your office name board look sharp day and night. Make a powerful statement
                 of professionalism and welcome clients with confidence, choose an office name board design that turns heads and opens doors.</p>
            <ul class="features">
                <li>100+ office name board designs (Largest Collection in India)</li>
                <li>Crafted with quality material- acrylic, LEDs, Neon, & ACP</li>
                <li>3D letters & LED lighting highlight your office name & logo</li>
                <li>PAN India service including design & installation</li>
                <li>Support services round the clock</li>
            </ul>

            <div class="buttons">
                <a href="#pricing" class="btn">Explore Pricing</a>
                <a href="{{ route('contact_us') }}" class="btn">Place Order</a>
            </div>
        </div>
    </div>-->

    <section class="instant-pricing">
        <div class="container pt-5">
            <h2>Premium Name Board Design for Office <br>Explore Endless Collection</h2>
            <p>Brand Signages presents you the widest collections of <b>office name board designs</b> crafted to elevate your workspace
                 identity. We offer premium yet affordable name board design for office across India, backed by quick delivery and
                  professional installation. Every office name board design is custom-designed, comes with a 4 year warranty, and 
                  includes clear, transparent pricing to ensure a smooth and reliable experience.</p>
            <p>Our office name boards come in multiple sizes, colour options, and lighting choices to suit different workspace needs.
                 We offer materials like acrylic, LED acrylic, metal, wood, vinyl, and flexible LED, allowing you to choose the right <b>mix
                  of durability and style</b>. Each office name board design is made to match your brand requirements and provide clear visibility
                   in any office setting.</p>
                  
            <!--<img src="/frontend/Images/name-boards/exclusive-office-name-boards.webp" alt="Exclusive Office Name Board Design by Brand Signages" class="shop-image">-->
               
        <div class="container">

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-1.webp')}}" class="card-img-center"
                                    alt="wooden name plate for a legal professional">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Wooden Name plate</h5>
                                </div>
                            </div>
                        </div>

                         <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-2.webp')}}" class="card-img-center"
                                    alt="Acrylic Name Board for Phoenix Global">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Acrylic Name Boards</h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-3.webp')}}" class="card-img-center"
                                    alt="Reception Name Board Designed with ACP Material">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Reception Name Board</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-13.webp')}}" class="card-img-center"
                                    alt="Office Name Board Designed with ACP Material">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Corporate Name Board</h5>
                                </div>
                            </div>
                        </div>

                         <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-4.webp')}}" class="card-img-center"
                                    alt="Metal Signage for Law Office">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Name Boards</h5>
                                </div>
                            </div>
                        </div>

                         <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-5.webp')}}" class="card-img-center"
                                    alt="Acrylic LED Office Name Board for Future Inc.">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Name Board</h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-6.webp')}}" class="card-img-center"
                                    alt="Metal Signage for Office">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Sign Board</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-7.webp')}}" class="card-img-center"
                                    alt="Office Name Board Acrylic LED Board Black Color">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Corporate Name Boards</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-8.webp')}}" class="card-img-center"
                                    alt="Corporate Name Boards Acrylic">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Corporate Name Boards</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-9.webp')}}" class="card-img-center"
                                    alt="Office Name Board">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Name Board</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-10.webp')}}" class="card-img-center"
                                    alt="Office Name Board">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Name Board</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-11.webp')}}" class="card-img-center"
                                    alt="Office Name Board">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Name Board</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('/frontend/Images/name-boards/office-name-12.webp')}}" class="card-img-center"
                                    alt="Office Name Board">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title">Office Name Board</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Navigation Arrows -->
                    <div class="We-Elevate-Brands-nav ">
                        <!-- Swap order: prev on left, next on right -->
                        <div class="We-Elevate-Brands-button-prev"></div>
                        <div class="We-Elevate-Brands-button-next"></div>
                    </div>

                </div>
            </div>

        </div>


            </div>
            <div class="text-center" style="padding: 20px 0;">
                <a href="#designs">
                    <button class="contact-btn">Browse More Designs</button>
                </a>
            </div>

             </div>
                       
        </div>
         
    </section>

    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{asset('frontend/Images/office-sign-board/office-name-boards.webp')}}"
                            alt="Shop Board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Why Your Workspace Needs a Professional Name Board</h2>
                    <p class="brand-description">
                        In any workplace, clarity and professionalism start right at the entrance. An office name board design isn’t just a label on the wall, it’s a core part
                         of how people understand your space, navigate it, and form their first opinion about your company. A well-designed office name board improves communication,
                          builds trust, and helps your brand stay consistent across every touchpoint.  Whether it is an  
                         <a style="color: #E43D12;text-decoration: none;"href="blogs/advocate-office-name-board-design-elements-for-professional-identity"><strong>advocate office</strong></a>, 
                         <a style="color: #E43D12;text-decoration: none;"href="blogs/construction-office-name-board-materials-design-best-practices"><strong>construction firm</strong></a>, 
                         <a style="color: #E43D12;text-decoration: none;"href="blogs/architect-office-name-board-style-purpose-and-design-inspiration"><strong>architect studio</strong></a>, 
                         <a style="color: #E43D12;text-decoration: none;"href="blogs/corporate-office-name-board-a-guide-to-design-materials-branding"><strong>corporate office</strong></a>, 
                         premium office name boards designs are crafted to suit every workspace.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <strong>Improves Navigation for Visitors:</strong> A clear office name board design immediately tells visitors and clients they're in the right place. 
                            It reduces confusion and creates a more organised experience.
                        </li>
                        <li class="mb-3">
                            <strong>Reflects Your Brand:</strong> The design, material choice, colours, and finish of your office name board all speak how your 
                            company operates. A neat, well-made board signals that your brand values quality.
                        </li>
                        <li class="mb-3">
                            <strong>Supports Brand Consistency:</strong> Whether it’s reception signage, cabin name plates, or department boards, consistent office name board 
                            design makes your branding stronger and easier to recognise.
                        </li>
                        <div class="mt-4">
                            <a href="contact-us" class="custom-btn">Start Your Project</a>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Material Options </br>Premium Office Name Board Designs</h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/uhouse.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">Metal Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Stainless steel office name boards are one of the most durable and cost-effective choices for modern
                                         businesses. We are experts in SS name board designs in custom sizes and styles to showcase your brand with clarity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/led-sign.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">LED Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">LED office name boards are a modern and versatile solution for professional branding. We create high-quality
                                         LED name boards that enhance your office presence, making your brand stand out.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/name-boards/digital-signages.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/digital-signages">Digital Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Digital office name boards add a dynamic and engaging element to modern workspaces. We design premium digital 
                                        signage for office that capture attention and enhance your brand’s professional presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/acrylic-sign.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">Acrylic Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Acrylic office name boards are a preferred choice for their sleek, professional finish and lasting appeal. We 
                                        craft acrylic name boards with precision and durability to elevate your office space.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/neon-sign2.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/neon-signages">Neon Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Neon office name boards are an excellent choice for businesses seeking vibrant, eye-catching visibility. Our expert 
                                        designers craft neon name boards that bring a modern and striking appeal to your office space.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Navigation Arrows -->
                    <div class="We-Elevate-Brands-nav ">
                        <!-- Swap order: prev on left, next on right -->
                        <div class="We-Elevate-Brands-button-prev"></div>
                        <div class="We-Elevate-Brands-button-next"></div>
                    </div>

                </div>
            </div>

        </div>
    </section>

     <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3 pb-5">
            <h2 class="hero-title">Office Name Board Pricing & Size Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board-design-1.webp')}}"
                            alt="Rivetoile Office LED Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
            <p class="fs-20">
                The cost of office name board design varies based on the material, size, design details, and installation 
                needs. For office signages such as reception boards, cabin boards, and large wall-mounted name boards, a 
                site visit helps us take accurate measurements.
            </p>

                    <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Name Board:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                        <li><b>Medium Name Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹12,000 – ₹20,000)</li>
                        <li><b>Large Name Boards:</b> 4 ft x 8 ft (₹20,000 – ₹30,000)</li>
                        <li><b>Custom Dimension:</b> Depends on your material & design</li>
                    </ul>

                    <p class="fs-20">
                        Each office name board is crafted using <b>high-quality materials</b>, clean design, and durable finishes 
                        suitable for indoor and semi-indoor spaces. You can <b>choose from multiple design</b> and lighting options 
                        such as <b>front-lit, backlit, edge-lit</b>, or <b>soft LED accents</b> to match your needs.
                    </p>

                <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
                            <button class="contact-btn">Book Order Now</button>
                    </a>
                </div>

</section>


    <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">Name Board Design of Office<br> Modern Inspiration for Workspace</h2>
            
            <p class="fs-20">Looking for the perfect name board design for office? Brand Signages branding you the <b>widest collection of office name board designs</b>
                 crafted for every type of workspace. Browse modern, classic, illuminated, and custom office name board designs all designed to match your brand identity. 
                 Start your office name board design project with smooth design support, quick production, expert installation, and durable materials that ensure 
                 long-lasting performance.</p>
                 </div>
    <!-- Add Blogs-->
     <div class="row con-fix2">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/corporate-office-name-board-a-guide-to-design-materials-branding" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/EsV2OTzrEUUAGjrpOXzsCa6sBs1CPae4g0O5hWja.jpg" alt="Corporate Office Name Board: A Guide to Design, Materials &amp; Branding">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">OFFICE NAME BOARD</span>
                            <span class="time">Office Name Board</span>
                        </div>
                        <h5 class="blog-card-title">Corporate Office Name Board: A Guide to Design, Materials &amp; Branding</h5>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/architect-office-name-board-style-purpose-and-design-inspiration" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/46IixlgPvKVGIEvL1ChMVL6sqJj7tRARQVryKvoj.jpg" alt="Architect Office Name Board: Style, Purpose, and Design Inspiration">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">ARCHITECT NAME BOARD</span>
                            <span class="time">Office Name Board</span>
                        </div>
                        <h5 class="blog-card-title">Architect Office Name Board: Style, Purpose, and Design Inspiration</h5>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/construction-office-name-board-materials-design-best-practices" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/mqJg5KUos0Cforc8V53lCsXb2DRu6Q8N9aRyQWt8.jpg" alt="Construction Office Name Board: Materials, Design &amp; Best Practices">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">CONSTRUCTION COMPANY BOARD</span>
                            <span class="time">Office Name Board</span>
                        </div>
                        <h5 class="blog-card-title">Construction Office Name Board: Materials, Design &amp; Best Practices</h5>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/advocate-office-name-board-design-elements-for-professional-identity" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/0JkmK0VAmreB2vOgbjL5wVkz98ObfFbFkVQpauYj.jpg" alt="Advocate Office Name Board: Design Elements for Professional Identity">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">ADVOCATE NAME BOARD</span>
                            <span class="time">Office Name Board</span>
                        </div>
                        <h5 class="blog-card-title">Advocate Office Name Board: Design Elements for Professional Identity</h5>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/ultimate-guide-to-office-reception-signage-make-the-right-first-impression" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/FLAAtgEPuON6RRCIHNI3ECWvChlzu9z5mC9sy2sD.jpg" alt="Ultimate Guide to Office Reception Signage: Make the Right First Impression">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">RECEPTION SIGNAGE</span>
                            <span class="time">Office Name Board</span>
                        </div>
                        <h5 class="blog-card-title">Office Reception Signage: Make the Right First Impression</h5>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/office-name-board-design-ideas-modern-inspiration-for-workplace" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/128OGM4WHmoCSgngsw8ZeEfzQ4FPfQDOnNPGWgFt.jpg" alt="Office Name Board Design Ideas: Modern Inspiration for Workplace">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">OFFICE NAME BOARD</span>
                            <span class="time">Office Name Board</span>
                        </div>
                        <h5 class="blog-card-title">Office Name Board Designs: Modern Inspiration for Workplace</h5>
                    </div>
                </div>
            </a>
        </div>
            </div>

            </div>

            </div>
        </div>
    </section>

    <section class="new-recent-works">
        <div class="container pt-5">
            <h2 class="hero-title  mb-6">High-end Name Board Projects Executed<br> by Brand Signages</h2>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/titan-store-sign-5.webp"
                            alt="LED Sign Board for Titan Watch- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Titan Showroom</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/fortis-hospital-name-board-5.webp"
                            alt="LED Sign Board for Fortis Hospital- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Fortis Hospital</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/cafe-mocha-name-board-4.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Café Mocha</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/tanishq.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Tanishq Showroom</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/prestidge-group-sign-board-5.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Prestige Group</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/medplus-shop-name-board-design.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>MedPlus Pharmacy</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/contact-us">
                    <button class="contact-btn">Start Your Project</button>
                </a>
            </div>


        </div>
    </section>


       <section>
        <div class="container pt-5">
            <h2 class="hero-title">Why Businesses Trust Brand Signages for <br>Office Name Board Design</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/name-boards/office-name-board-design.webp')}}"
                            alt="Brand Signages Latest Design - Premium Office Name Board" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="fs-20">
                        At <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com"><strong>Brand
                        Signages</strong></a>, we transform office entrances with expertly crafted name board designs that perfectly blend style, 
                        functionality, and brand identity. Every design is thoughtfully created to leave a lasting impression while reflecting 
                        your company’s unique personality.
                    <div class="faq-item active">
                        <button class="faq-question active">
                            Designs That Speak Your Brand
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer active">
                            <p>We deliver tailor-made office name boards that capture your brand’s essence, combining logos, taglines, and design 
                                elements for maximum visual impact.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Materials for Unmatched Durability
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>From metal and acrylic to wood and vinyl finishes, we use only top-quality materials to ensure your name board remains 
                                elegant and long-lasting.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Lighting & Tech. Integration
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Neon, LED, or backlit enhancements bring your office name board to life, ensuring your office name board shines brilliantly
                                 day and night.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Expertise & Precision Crafted
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>With 12+ years of expertise, 1000+ successful projects, and in-house manufacturing facility, our team meticulously plans every 
                                detail, from size and placement to aesthetic appeal, designs that exceed expectations.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="instant-pricing pt-5">
            <div class="container">
                <h2>Office Name Board Design with <br>Precision Manufacturing</h2>
                <p>The office name board design delivers a rare mix of refined elegance and brand authority, 
                    built with premium materials and engineered for clear, effortless visibility.  At Brand Signages we are the best office name board design 
                    makers with <b>24-hours production</b> capability and expertise.</p>
                <div class="scroll-loop-wrapper">
                    <div class="scroll-loop-track">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/panting.webp') }}" alt="Painting">
                                <p>Signage Painting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/MetalEtching.webp') }}" alt="Metal Etching">
                                <p>Metal Etching</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/MetalLaserCutting.webp') }}" alt="Metal Laser Cutting">
                                <p>Metal Laser Cutting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/AcrylicLaser.webp') }}" alt="Acrylic Laser Cutting">
                                <p>Acrylic Laser Cutting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/latex-printing.webp') }}" alt="Latex Printing">
                                <p>Latex Printing</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/uv-flat-print.webp') }}" alt="UV Flat Printing">
                                <p>UV Flat Printing</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/plotting.webp') }}" alt="Plotting">
                                <p>Plotting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/channel-letter.webp') }}" alt="Channel Letters">
                                <p>ACP Channel Letters</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/epoxy-letter.webp') }}" alt="Epoxy Letters">
                                <p>Epoxy Letters</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/3d-printing.webp') }}" alt="3D printing">
                                <p>3D Printing</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/led-letters.webp') }}" alt="LED Letters">
                                <p>LED Lettering</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
    </section>

     
 

    <section class="we-deliver">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <h2>Choose Brand Signages for Best Office Name Board Design</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Transparent pricing"
                                            class="img-fluid">
                                        <h3>Transparent Pricing</h3>
                                        <p>At <a style="color: #ffff;text-decoration: underline;" href="https://brandsignages.com"><strong>Brand Signages</strong></a>, we combine unmatched craftsmanship with fair pricing to provide exceptional office name boards. Our approach focuses on delivering superior design value while ensuring every investment enhances your brand.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="Wide Range of Product and Designs"
                                            class="img-fluid">
                                        <h3>Wide Design Collections</h3>
                                        <p>A curated range of distinctive office name board design categlogue, featuring contemporary, classic, and avant-garde styles. Each design can be tailored in form, finish, and color to create a signature look & corporate identity.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Environment Friendly Name Boards"
                                            class="img-fluid">
                                        <h3>Eco-Conscious Production</h3>
                                        <p>Sustainability drives every step of our manufacturing process. We employ environmentally responsible techniques, minimizing material wastage and using resources efficiently to craft office name boards that and planet-friendly.
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Quality Assurance Guarantee"
                                            class="img-fluid">
                                        <h3>Quality Assurance</h3>
                                        <p>Every office name board design we produce undergoes rigorous quality checks and adheres to top industry standards. From material integrity to design precision, our boards are crafted to deliver flawless performance and reliability.
                                        </p>
                                    </div>
                                </div>


                            </div>
            </section>


    <section class="new_client_section container pb-5">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/name-boards/chai-cafe-shop-name-board.webp') }}" alt="Our Clients">
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


    <!-- testimonial Feedback Section -->
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">What Our Clients Say About Us</h2>

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
                                    Our tech startup needed a signage solution that matched our innovative spirit. The Brand
                                    Signages team didn't just
                                    create a sign; they captured our company's essence. The LED sign board has become a
                                    conversation starter for clients
                                    and employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}"
                                        alt="Michael, CEO, Technova Innovations" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                    As a boutique hotel chain, brand consistency is everything. These custom signages
                                    transformed
                                    our branding across multiple locations. The attention to detail is remarkable - each
                                    piece
                                    feels uniquely crafted yet perfectly aligned with our brand identity.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}"
                                        alt="Asish, CEO, A Hotel Chain" class="rounded-circle me-3" width="50" height="50">
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
                                    We needed a visually appealing sign for our office location, and Brand Signages
                                    delivered a
                                    stunning LED sign board beyond our expectations. The direct communication and on-demand
                                    design
                                    process was seamless and stress-free.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}"
                                        alt="Nandini, CEO, A Real Estate Company" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                    like Bhive. But what they delivered went far beyond expectations. They didn’t just
                                    create
                                    signs – they crafted a visual identity that reflects our energy, innovation, and
                                    community spirit.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}"
                                        alt="Manager, Bhive Workspace" class="rounded-circle me-3" width="50" height="50">
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
   

    <section class="faq-section">
        <div class="container">
            <h1 class="faq-title">FAQs – Office Name Board Design</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What should I consider when choosing an office name board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>When selecting an office name board, both durability and aesthetics are important. Brand Signages ensures your board combines 
                        premium materials, long-lasting performance, and a visually appealing design that complements your office decor.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can my office name board be customised with a logo?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, Brand Signages crafts fully customised office name boards that include your logo, tagline, and brand elements, ensuring 
                        a unique and professional representation of your business.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What materials are best for office name boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We use a variety of materials including wood, metal, acrylic, glass, and ACP. Each material is chosen for its durability, 
                        elegance, and suitability for indoor or outdoor spaces. You can also opt for LED illuminated options for added visibility. 
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are LED or neon lights suitable for office name boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely, our LED, neon, and backlit name boards enhance visibility and create a striking impression, making your office 
                        brand stand out both day and night.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do I maintain my office name board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Regular cleaning with a soft cloth and avoiding harsh chemicals helps maintain your board’s finish. Brand Signages uses durable, 
                        weather-resistant materials to ensure long-term performance with minimal upkeep.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What sizes are ideal for office name boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The ideal size depends on placement and visibility requirements. We offer customised sizing to ensure your name board is clearly visible
                         from the right distance while maintaining aesthetic balance in your office space.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Brand Signages handle large office projects?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we provide PAN India services for both small and large office spaces. From individual boards to complete office signage solutions, 
                        our team ensures consistent quality and timely delivery.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <script>
let current = 0;
const slides = document.querySelectorAll('.slide');
const thumbs = document.querySelectorAll('.thumb');

function show(i) {
  slides[current].classList.remove('active');
  current = i;
  slides[current].classList.add('active');
}

document.querySelector('.next').onclick = () =>
  show((current + 1) % slides.length);

document.querySelector('.prev').onclick = () =>
  show((current - 1 + slides.length) % slides.length);

thumbs.forEach((t, i) => (t.onclick = () => show(i)));
</script>

@endsection