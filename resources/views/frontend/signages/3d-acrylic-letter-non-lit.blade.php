@extends('frontend.layout.appLayout')
@section('content')

<div class="newly-bannersection mt-5">
    <div class="bread-cum-menu w-100 px-3">
        <p><a href="{{ route('index') }}">Home</a> / <a href="{{ route('acrylic_letters') }}">Acrylic Letters</a> / 3D Acrylic Letter: Non-lit</p>
    </div>


    <div class="slide-wrapper" style="display: flex; gap: 20px; padding-left: 20px; padding-right: 20px;">
        <!-- Left Side: 3 Visible Thumbnails -->
        <div class="thumbnails-left" style="display: flex; flex-direction: column; gap: 10px; flex-shrink: 0;">
            <img src="/frontend/Images/led-sign-board/acrilc-letters-1.webp" class="thumb active" data-index="0" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-letters-2.webp" class="thumb" data-index="1" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-letters-3.webp" class="thumb" data-index="2" style="width: 80px; height: 80px; cursor: pointer;">
        </div>

        <!-- Right Side: Main Slider -->
        <div class="main-slide-wrapper" style="position: relative; flex-grow: 1;">
            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/acrilc-letters-1.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-letters-2.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-letters-3.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
            </div>

            <!-- Navigation -->

        </div>
    </div>

    <!-- Content stays unchanged -->
    <div class="content">
        <h1 class="hero-banner_title">3D Acrylic Letter: Non-lit</h1>
        <p class="subtitle"><b>⭐⭐⭐⭐⭐ (150 customer reviews)</b></p>

        <div class="divider"></div>
        <p class="price-big">
            <b>₹100 - ₹800</b> <small>+ GST</small>
        </p>
        <p class="fs-20"><b>3D Acrylic Letters-</b> Clean and modern signage crafted for long-lasting performance, offering
            a bold three-dimensional appearance to elevate your brand presence.</p>
        <p class="price-big">
            <b>Key Features:</b>
        </p>
        <ul class="features-list">
            <li class="fs-20"><b>Durable Acrylic Build:</b> Durable & weather-resistant for indoor & outdoor.</li>
            <li class="fs-20"><b>Clean 3D Finish:</b> CNC-cut edges for sharp, professional lettering.</li>
            <li class="fs-20"><b>Custom Choices:</b> Custom sizes, fonts, logo, messaging, & color options.</li>
            <li class="fs-20"><b>Easy Installation:</b> Comes with stud or tape mounting based on application.</li>
            <li class="fs-20"><b>Low Maintenance:</b> Lightweight, easy to clean, & no electrical components.</li>
        </ul>
        <p class="fs-20">3D Acrylic Letters (Non-Lit) offer a sleek and professional way to display your brand. Designed for clarity, durability, and versatility, they’re
            suitable for storefronts, offices, reception areas, and display walls.</p>
        <div class="buttons">
            <a href="#information"
                class="btn"
                onclick="event.preventDefault();
            document.querySelector('.tab-btn[data-tab=\'information\']').click();
            setTimeout(() => {
                document.querySelector('#information').scrollIntoView({behavior: 'smooth'});
            }, 100);">
                Check Specs.
            </a>
            <a href="{{ route('contact_us') }}" class="btn">Get Quote</a>
        </div>

        <div class="divider"></div>
        <p class="fs-20">
            <b>3D Signage Category: <a href="led-acrylic-3d-glow-sign-board" style="color: #E43D12; text-decoration: none;">3D LED Letters</a>, <a href="led-aluminum-channel-letters" style="color: #E43D12; text-decoration: none;">Aluminum LED Letters</a>, <a href="3d-crystal-led-letters" style="color: #E43D12; text-decoration: none;">3D Crystal Letters</a>, <a href="sky-sign-boards" style="color: #E43D12; text-decoration: none;">3D Sky Signs</a></b>
        </p>
    </div>
</div>


<section class="pt-0 pb-5">
    <div class="container">

        <!-- Your Tabs Box Starts Here -->
        <div class="product-tabs-box">

            <!-- Tab Buttons -->
            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="description">Description</button>
                <button class="tab-btn" data-tab="information">Product Information</button>
                <button class="tab-btn" data-tab="review">Reviews</button>

            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane active" id="description">
                    <p class="price-big"><b>3D Acrylic LED Letters- Description</b></p>
                    <p class="fs-20">Give your business a bold and professional look with <b>3D Acrylic Letters</b>. Built for a wide range of signage needs, these letters offer strong visual
                        impact without illumination. Made from durable, high-grade acrylic, each piece delivers a smooth finish and precise dimensional form suitable for indoor or
                        outdoor use.<br>
                        Ideal for storefronts, offices, walls, exhibitions, and branding displays, these letters provide a modern, minimal aesthetic that helps your message stand out clearly.
                        Whether it’s a business name, logo, or custom text, our 3D acrylic lettering adds depth, style, and lasting durability to any space.
                    </p>
                    <div class="action-buttons">
                        <a href="led-acrylic-3d-glow-sign-board" class="btn btn-blue fs-20">About LED Sign Board</a>
                        <a href="https://share.google/XAiKaiNNVNKgNJWRG" target="_blank" class="btn btn-red fs-20">Check Latest Reviews</a>
                    </div>

                    <br>

                    <p class="price-big"><b>3D Acrylic Letters- Pricing Information</b></p>
                    <p class="fs-20">The pricing for 3D acrylic letters depends on several factors such as size, thickness, font style, finish (matte, gloss, or metallic), and customization
                        requirements. Our 3D acrylic sign boards are customizable and costs are generally calculated per running inch and may vary based on design complexity. The average price range is <b>₹100 to ₹800</b> per running inch, depending
                        on specifications.<br>

                        As one of the leading acrylic letter signage manufacturers in Bangalore and across India, we provide durable, precision-cut acrylic letters tailored to your brand. For accurate
                        pricing based on your design, reach out to our sales team at <a href="tel:+918006606080" style="color: #E43D12; text-decoration: none;" aria-label="Call us at +91 80066 06080"><strong>+91 80066 06080</strong></a>
                        and schedule a meeting, or fill out <a href="contact-us" style="color: #E43D12; text-decoration: none;"><strong>contact form</strong></a>. Our team will review your requirements and share the most suitable and cost-effective quotation.
                    </p>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>3D Acrylic Letters- Important Features</b></p>
                    <ul class="fs-20">
                        <li><b>Durable Acrylic Build:</b> Made from high-quality acrylic, custom-built designed to resist cracking, weather damage, and fading.</li>

                        <li><b>Clean 3D Appearance:</b> Precision-cut letters offer sharp edges and noticeable depth for a modern, professional look.</li>

                        <li><b>Customizable Design:</b> Highly customizable in multiple sizes, fonts, colors, and finishes to match brand guidelines or architectural themes.</li>

                        <li><b>Lightweight & Easy to Install:</b> Delivered with mounting options such as studs, tape, or brackets depending on surface type.</li>

                        <li><b>Low Maintenance:</b> No electrical components, requires only simple cleaning to maintain clarity and shine.</li>

                        <li><b>Indoor & Outdoor Ready:</b> Suitable for reception areas, glass walls, storefronts, exhibition displays, directional signage, and corporate branding.</li>

                        <li><b>Premium Finish Options:</b> Offered in matte, gloss, textured, frosted, metallic, and mirror finishes.</li>

                        <li><b>Weather & UV Resistant:</b> Engineered to maintain color and structure even in sunlight, moisture, or varying temperatures.</li>

                        <li><b>Precise Manufacturing:</b> CNC and laser cutting technology ensures uniform thickness, smooth curves, and consistent detailing.</li>

                        <li><b>Versatile Use Cases:</b> Ideal for businesses, showrooms, retail stores, educational institutions, hospitality spaces, and branding environments.</li>
                    </ul>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>3D Acrylic Letters- Benefits</b></p>
                    <p class="fs-20">
                        <b>Strong Visual Appeal</b>
                        <br>
                        The dimensional structure of 3D acrylic letters creates a bold and professional look that stands out in any space. The clean edges and polished surface enhance readability
                        from multiple viewing angles, making your branding noticeable and memorable.
                    </p>

                    <p class="fs-20">
                        <b>Brand Recognition</b>
                        <br>
                        With precise lettering and refined finishing, these signs reinforce brand identity without requiring illumination. They offer a clean and sophisticated appearance suitable for
                        modern interiors, reception areas, storefronts, and architectural branding.
                    </p>

                    <p class="fs-20">
                        <b>Easy to Customize</b>
                        <br>
                        Sizes, fonts, thicknesses, and color options can be tailored to match your brand. Finishes such as matte, gloss, metallic, mirror, and textured styles allow businesses to
                        create signage that aligns perfectly with their visual identity.
                    </p>

                    <p class="fs-20">
                        <b>Durable and Long-Lasting</b>
                        <br>
                        Made from weather-resistant acrylic, these letters are built to withstand sunlight, moisture, dust, and varying temperatures, ensuring reliable performance indoors or outdoors.
                    </p>
                    <p class="fs-20">
                        <b>Versatile & Low Maintenance</b>
                        <br>
                        Designed for a wide range of applications such as offices, retail spaces, reception walls, or building facades these letters require minimal upkeep, with simple cleaning
                        enough to maintain clarity and appearance over time.
                    </p>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>Premier Acrylic Sign Board Manufacturer- Brand Signages</b></p>
                    <p class="fs-20">We are a premier acrylic sign board manufacturer in Bangalore, Mumbai, and Chennai with <b>12+ years of expertise</b>, skilled design team, and <b>cutting-edge CNC machinery</b>.
                        We specialize in acrylic sign board, LED sign board, digital signage, neon sign board design and manufacturing with PAN India delivery facilities. We design 3D acrylic letters in
                        all size, shape, and colors with <b>expert-led installation</b> services for brands across India.
                    </p>
                    <div class="highlight-tags">
                        <span class="highlight-tag fs-20">Fastest Delivery</span>
                        <span class="highlight-tag fs-20">Quick Turnaround</span>
                        <span class="highlight-tag fs-20">Free Consultation</span>
                    </div>

                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>Frequently Asked Questions</b></p>
                    <p class="fs-20"><strong>1. What material are 3D Acrylic Letters made from?</strong></p>
                    Our 3D acrylic letters are crafted from premium-grade cast acrylic, known for its clarity, strength, and resistance to fading. This material ensures a clean cut, smooth finish, and long-lasting
                    durability for both indoor and outdoor environments.</p>

                    <p class="fs-20"><strong>2. Can I customize the size, font, and design of 3D Acrylic Letters?</strong></p>
                    <p>Yes, you can fully customize dimensions, fonts, thickness, colors, logos, and finish options such as matte, gloss, frosted, or metallic. This flexibility allows you to align your signage
                        with brand guidelines or interior themes.</p>

                    <p class="fs-20"><strong>3. Are 3D Acrylic Letters suitable for both indoor and outdoor use?</strong></p>
                    <p>Absolutely, these letters are weather-resistant, UV-stable, and durable, making them suitable for reception areas, storefronts, office walls, directional signage, exhibitions,
                        and outdoor branding applications.</p>

                    <p class="fs-20"><strong>4. How easy is the installation process for 3D Acrylic Letters?</strong></p>
                    <p>Installation is simple and secure. Based on surface requirements, letters can be mounted using studs, industrial-grade adhesive tape, or brackets. We provide guidance and support
                        to ensure proper placement and alignment.</p>

                    <p class="fs-20"><strong>5. Do 3D Acrylic Letters require regular maintenance?</strong></p>
                    <p>Maintenance is minimal. Occasional cleaning with a soft cloth and mild cleaner is enough to keep the letters looking polished and clear. Since they have no electrical components, they
                        require zero servicing beyond surface cleaning.</p>

                    <p class="fs-20"><strong>6. Do you offer support and delivery services for 3D Acrylic Letters?</strong></p>
                    <p>Yes, we provide full assistance from design consultation to installation coordination. Our team also offers PAN-India delivery with safe packaging to ensure your
                        signage arrives in perfect condition.</p>

                </div>

            </div>




            <!-- Product Information -->
            <div class="tab-pane" id="information">


                <p class="fs-20"><strong>Material</strong></p>
                <ul class="info-list fs-20">
                    <li>Premium-grade cast acrylic designed for durability and long-term clarity.</li>
                    <li>UV and weather-resistant material suitable for both indoor and outdoor installations.</li>
                    <li>Optional aluminum or PVC backing available for large-scale or structural signage needs.</li>
                </ul>

                <p class="fs-20"><strong>Size</strong></p>
                <ul class="info-list fs-20">
                    <li>Standard sizes include 6”, 12”, 18”, and 24”.</li>
                    <li>Custom dimensions available to match branding requirements and installation space.</li>
                </ul>

                <p class="fs-20"><strong>Thickness</strong></p>
                <ul class="info-list fs-20">
                    <li>Available in 3mm, 5mm, 8mm, 10mm, and 12mm thickness options.</li>
                    <li>Custom thickness available for increased depth and layered effects.</li>
                </ul>

                <p class="fs-20"><strong>Weight</strong></p>
                <ul class="info-list fs-20">
                    <li>Lightweight design for easy handling and mounting.</li>
                    <li>Engineered for secure installation without requiring heavy support structures.</li>
                </ul>

                <p class="fs-20"><strong>Color Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Available in a wide range of standard and custom brand colors.</li>
                    <li>Finish options include solid, transparent, frosted, metallic, and mirror styles.</li>
                </ul>

                <p class="fs-20"><strong>Finish</strong></p>
                <ul class="info-list fs-20">
                    <li>Gloss finish for a reflective and premium appearance.</li>
                    <li>Matte finish for a modern and understated look.</li>
                    <li>Optional textured or brushed style for unique brand character.</li>
                </ul>

                <p class="fs-20"><strong>Mounting Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Stud mounting for long-term secure installations.</li>
                    <li>High-strength adhesive mounting for clean and quick setup on smooth surfaces.</li>
                    <li>Spacer installation available for raised or 3D floating appearance.</li>
                </ul>

                <p class="fs-20"><strong>Additional Features</strong></p>
                <ul class="info-list fs-20">
                    <li>Weatherproof and UV-resistant to prevent fading or discoloration.</li>
                    <li>Low-maintenance build requiring only occasional cleaning.</li>
                    <li>Designed with CNC and laser cutting for accuracy, smooth edges, and premium finish.</li>
                </ul>

            </div>

            <div class="tab-pane" id="review">

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle ">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">John Doe</h6>
                        <div class="review-rating mb-1">
                            ★★★★☆
                        </div>
                        <p class="text-muted mb-0">
                            Great experience, very professional and friendly team!
                        </p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Sarah Williams</h6>
                        <div class="review-rating mb-1">
                            ★★★★★
                        </div>
                        <p class="text-muted mb-0">
                            Excellent service! I highly recommend them.
                        </p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Michael Brown</h6>
                        <div class="review-rating mb-1">
                            ★★★☆☆
                        </div>
                        <p class="text-muted mb-0">
                            Good but could be a bit faster.
                        </p>
                    </div>
                </div>
            </div>





        </div>
</section>


<div class="container py-5">
    <h2 class="mb-4">Related Products</h2>
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6 col-12">
            <a href="/3d-acrylic-letter-non-lit" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('frontend/Images/led-sign-board/acrilc-letters-1.webp') }}" class="card-img-topx" alt="3D Acrylic Letter: Non-lit">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">3D Acrylic Letter: Non-lit</h5>

                        <!-- Price -->
                        <p class="mb-1 fw-bold text-black">₹100 – ₹800</p>

                        <!-- 5 Star Rating -->
                        <p class="mb-1 text-warning">
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(120 reviews)</span>
                        </p>

                        <!-- Small Description -->
                        <p class="text-muted small">Premium non-lit acrylic letters perfect for branding.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6 col-12">
            <a href="/3d-acp-letter-acrylic" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('frontend/Images/led-sign-board/acrylic-led-acp-letter-1.webp') }}" class="card-img-topx" alt="3D Acrylic Letter with ACP">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">3D Acrylic Letter with ACP</h5>

                        <p class="mb-1 fw-bold text-black">₹100 – ₹800</p>

                        <p class="mb-1 text-warning">
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(98 reviews)</span>
                        </p>

                        <p class="text-muted small">Durable ACP base with premium acrylic finish.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-3 col-md-6 col-12">
            <a href="/3d-led-acrylic-letters" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('frontend/Images/led-sign-board/3d-acrylic-led-letters-3.webp') }}" class="card-img-topx" alt="3D Acrylic LED Letter">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">3D Acrylic LED Letter</h5>

                        <p class="mb-1 fw-bold text-black">₹200 – ₹1,000</p>

                        <p class="mb-1 text-warning">
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(150 reviews)</span>
                        </p>

                        <p class="text-muted small">Bright LED-lit acrylic letters for high visibility.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-3 col-md-6 col-12">
            <a href="/acrylic-led-letter" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('frontend/Images/led-sign-board/acrylic-led-letter-1.webp') }}" class="card-img-topx" alt="Acrylic LED Letter">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Letter</h5>

                        <p class="mb-1 fw-bold text-black">₹200 – ₹1,000</p>

                        <p class="mb-1 text-warning">
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(110 reviews)</span>
                        </p>

                        <p class="text-muted small">Elegant LED acrylic letters for indoor & outdoor use.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>


<script>
    // Simple thumbnail click functionality
    document.querySelectorAll('.thumb').forEach(thumb => {
        thumb.addEventListener('click', () => {
            // Remove active class from all thumbs
            document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');

            // Show corresponding slide
            let index = thumb.dataset.index;
            document.querySelectorAll('.main-slider .slide').forEach((slide, i) => {
                slide.classList.toggle('active', i == index);
            });
        });
    });
</script>

<script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const target = this.getAttribute('data-tab');

            // Remove active from all buttons and panes
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));

            // Add active to clicked button and target pane
            this.classList.add('active');
            document.getElementById(target).classList.add('active');
        });
    });
</script>






<style>
    .main-slider .slide {
        overflow: hidden;
        cursor: zoom-in;
        border-radius: 6px;
        /* Match existing border radius */
    }

    .main-slider .slide img {
        transition: transform 0.3s ease;
        transform-origin: center center;
        width: 100%;
        height: auto;
    }

    .main-slider .slide:hover img {
        cursor: crosshair;
    }
</style>
<script>
    document.querySelectorAll('.main-slider .slide').forEach(container => {
        const img = container.querySelector('img');

        container.addEventListener('mousemove', function(e) {
            const rect = container.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            img.style.transformOrigin = `${x}% ${y}%`;
            img.style.transform = "scale(2)"; // Zoom level
        });

        container.addEventListener('mouseleave', function() {
            img.style.transformOrigin = "center center";
            img.style.transform = "scale(1)";
        });
    });
</script>

@endsection