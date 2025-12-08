@extends('frontend.layout.appLayout')
@section('content')

<div class="newly-bannersection mt-5">
    <div class="bread-cum-menu w-100 px-3">
        <p><a href="{{ route('index') }}">Home</a> / <a href="{{ route('acrylic_letters') }}">Acrylic Letters</a> / 3D Acrylic LED Letter</p>
    </div>
    <!-- CLEAN BREADCRUMB – NO INLINE STYLES -->

    <!-- Breadcrumb -->



    <div class="slide-wrapper" style="display: flex; gap: 10px; padding-left: 20px; padding-right: 20px;">
        <!-- Left Side: 3 Visible Thumbnails -->
        <div class="thumbnails-left" style="display: flex; flex-direction: column; gap: 10px; flex-shrink: 0;">
            <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters-1.webp" class="thumb active" data-index="0" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters-2.webp" class="thumb" data-index="1" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters-3.webp" class="thumb" data-index="2" style="width: 80px; height: 80px; cursor: pointer;">
        </div>

        <!-- Right Side: Main Slider -->
        <div class="main-slide-wrapper" style="position: relative; flex-grow: 1;">
            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters-1.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters-2.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters-3.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
            </div>

            <!-- Navigation -->

        </div>
    </div>

    <!-- Content stays unchanged -->
    <div class="content">
        <h1 class="hero-banner_title">3D Acrylic LED Letter</h1>
        <p class="subtitle"><b>⭐⭐⭐⭐⭐ (130 customer reviews)</b></p>

        <div class="divider"></div>
        <p class="price-big">
            <b>₹200 - ₹1,000.00</b> <small>+ GST</small>
        </p>
        <p class="fs-20"><b>3D Acrylic LED Letters-</b> High-quality 3D acrylic LED-illuminated letters curated for
            clarity, impact, and best performance. Crafted with optical-grade acrylic, precision CNC cutting, and LED 
            illumination, these letters offer a sleek modern finish ideal for high-visibility.</p>
        <p class="price-big">
            <b>Key Features:</b>
        </p>
        <ul class="features-list">
            <li class="fs-20"><b>Built to last:</b> Weather-resistant acrylic with long-term clarity.</li>
            <li class="fs-20"><b>Sleek 3D depth:</b> Clean multi-layer profile for a bold 3D effect.</li>
            <li class="fs-20"><b>Uniform Illumination:</b> Energy-efficient LEDs for day & night visibility.</li>
            <li class="fs-20"><b>Adjustable Contrast:</b> Sharp readability from close or long distance.</li>
            <li class="fs-20"><b>Custom Finish:</b> Fonts, colors, sizes, and lighting tailored to your brand.</li>
            <li class="fs-20"><b>Easy installation:</b> Concealed wiring and secure professional mounting.</li>
            <li class="fs-20"><b>Versatile Use:</b> Perfect for storefronts, offices, and hospitality brands.</li>
        </ul>
         <p class="fs-20">Acrylic LED Letters are built to impress with premium lighting aesthetics, weather-resistant durability, and 
            seamless installation ensuring your brand stands out day and night.</p>

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
            <b>Signage Category: <a href="led-acrylic-3d-glow-sign-board" style="color: #E43D12; text-decoration: none;">LED Sign Board</a>, <a href="led-aluminum-channel-letters" style="color: #E43D12; text-decoration: none;">Aluminum LED Letters</a>, <a href="3d-crystal-led-letters" style="color: #E43D12; text-decoration: none;">3D Crystal Letters</a>, <a href="sky-sign-boards" style="color: #E43D12; text-decoration: none;">Sky Signs</a></b>
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
                    <p class="fs-20">Crafted with a premium <b>three-layer build</b>, <b>acrylic face</b>, illuminated core, and durable backing, our 3D Acrylic LED Letters
                        come with 4 years warranty, offers a striking visual presence. <b>LED acrylic letter</b> sign boards offer clarity, elegance, and high visibility,
                        featuring clean edges and brilliant lighting. Whether placed indoors or outdoors, the <b>illuminated acrylic finish</b> ensures your brand stands out during the
                        day and shines effortlessly after sunset.<br>
                        The right 3D Acrylic letters can elevate your brand’s visibility and make a lasting impression. At Brand Signages, you can choose from a variety of front-lit,
                        <b>backlit</b>, <b>halo-lit</b>, and <b>dual-lit LED letters</b> in custom sizes, fonts, and colors. Explore our extensive collection of acrylic LED letters, consult with our experts,
                        and get fully customized sign boards that fits your brand perfectly. We also provide PAN India delivery and professional installation services.
                    </p>
                    <div class="action-buttons">
                        <a href="led-acrylic-3d-glow-sign-board" class="btn btn-blue fs-20">About LED Sign Board</a>
                        <a href="https://share.google/XAiKaiNNVNKgNJWRG" target="_blank" class="btn btn-red fs-20">Check Latest Reviews</a>
                    </div>

                    <br>

                    <p class="price-big"><b>3D Acrylic LED Letters- Pricing Terms</b></p>
                    <p class="fs-20">The cost of 3D acrylic LED letters varies based on size, thickness, color, lighting style, and finishing options. Pricing is calculated per running inch and changes with design complexity.
                        The provided cost per running inch is <b>₹200 to ₹1,000</b> based on complexity and customization.<br>

                        We are the top acrylic LED sign board manufacturer in Bangalore & India, delivering high-quality and custom LED Sign Boards. For more detailed information on pricing contact our sales team at <a href="tel:+918006606080" style="color: #E43D12; text-decoration: none;" aria-label="Call us at +91 80066 06080"><strong>+91 80066 06080</strong></a>
                        and schedule a meeting, or fill out <a href="contact-us" style="color: #E43D12; text-decoration: none;"><strong>contact form</strong></a>. In a detailed discussion our team can provide you the best affordable quotaion on acrylic LED sign board price.
                    </p>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>3D Acrylic LED Letters- Important Features</b></p>
                    <ul class="fs-20">
                        <li><b>Robust Construction:</b> Built using premium-grade acrylic paired with aluminum backing for long-lasting indoor and outdoor performance.</li>

                        <li class="fs-20"><b>Enhanced 3D Depth:</b> Layered letter profiles create a bold dimensional effect that instantly draws attention and elevates brand presence and appeal.</li>

                        <li class="fs-20"><b>Advanced LED System:</b> Comes with high-efficiency LEDs offering uniform lighting with options like halo glow, front illumination, or dual lighting.</li>

                        <li class="fs-20"><b>Superior Visibility:</b> Crisp finishes, vivid colors, and highly legible graphics ensure your signage remains clear and noticeable from long distances.</li>

                        <li class="fs-20"><b>Fully Customizable:</b> Tailored to your brand with custom lettering, logos, messaging, lighting style, finishes, and installation specifications.</li>

                        <li class="fs-20"><b>Quick & Secure Mounting:</b> Engineered with ready-to-install fixtures suitable for concrete walls, glass fronts, metal panels, ACP sheets, and reception backdrops.</li>

                        <li class="fs-20"><b>Multi-Purpose Use:</b> Ideal for commercial storefronts, corporate interiors, hospitality spaces, real estate projects, event branding, and outdoor building signage.</li>

                        <li class="fs-20"><b>UV & Weather Protection:</b> Coated with protection layers to prevent color fading, yellowing, cracks, or corrosion caused by sunlight, moisture, or extreme temperatures.</li>

                        <li class="fs-20"><b>Energy-Smart Illumination:</b> LED technology ensures strong brightness with minimal power consumption and extended operational lifespan.</li>

                        <li class="fs-20"><b>Standards Compliant:</b> Designed in alignment with signage regulations, branding norms, and building structure guidelines for seamless approval.</li>

                        <li class="fs-20"><b>Low Upkeep:</b> Designed with long-lasting LED modules and durable acrylic materials that resist dust and rain, requiring only occasional cleaning and minimal servicing.</li>

                        <li class="fs-20"><b>Noise-Free Operation:</b> Silent lighting technology ensures smooth, flicker-free illumination with zero buzzing or heat-related noise, providing a seamless visual experience.</li>

                        <li class="fs-20"><b>Premium Finish Options:</b> Available in matte, glossy, brushed steel, chrome, satin gold, metallic tones, with the flexibility to match exact brand colors.</li>

                        <li class="fs-20"><b>Precision Craftsmanship:</b> CNC precision cutting combined with laser-edge finishing delivers smooth, flawless edges and consistent detailing, resulting in a refined, high-end appearance.</li>
                    </ul>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>3D Acrylic LED Letters- Know The Benefits</b></p>
                    <p class="fs-20">
                        <b>Visibility & Impact</b>
                        <br>
                        3D Acrylic LED letters deliver high brightness and clarity, ensuring readability from long distances and multiple angles day or night. They help brands stand out in crowded environments like malls, corporate zones,
                        and high-traffic streets, improving attention and recall.
                    </p>

                    <p class="fs-20">
                        <b>Improved Recognition</b>
                        <br>
                        With clean typography and uniform lighting, these signs make business names and visuals easy to identify. Whether placed indoors or outdoors, they support strong brand presence and location awareness
                        without ongoing marketing effort.
                    </p>

                    <p class="fs-20">
                        <b>Easy Customization</b>
                        <br>
                        These letters can be tailored in size, color, lighting type (front-lit, backlit, halo-lit, etc.), and finish options like matte, gloss, brushed metal, or chrome making them suitable for various industries,
                        spaces, and branding styles.
                    </p>

                    <p class="fs-20">
                        <b>Durable & Cost-Efficient</b>
                        <br>
                        Made with weather-resistant acrylic, metal backing, and energy-efficient LEDs, these letters perform well in harsh climates while reducing power and maintenance costs. Their long lifespan ensures a strong
                        return on investment.
                    </p>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>Bangalore's Premier Acrylic & LED Sign Board Manufacturer</b></p>
                    <p class="fs-20">With <b>12+ years of expertise</b>, <b>a skilled design team</b>, and <b>cutting-edge machinery</b>, Brand Signages delivers top-tier, custom-made signboards across India. We specialize in glow signs, acrylic and LED boards,
                        and ACP signage in every shape, size, and color, ensuring <b>maximum visibility</b>, lasting durability, and a professional finish that leaves a lasting impression.
                    </p>
                    <div class="highlight-tags">
                        <span class="highlight-tag fs-20">Fastest Delivery</span>
                        <span class="highlight-tag fs-20">Quick Turnaround</span>
                        <span class="highlight-tag fs-20">Free Consultation</span>
                    </div>

                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>Frequently Asked Questions</b></p>
                    <p class="fs-20"><strong>1. What makes 3D LED Acrylic Letters durable and long-lasting?</strong></p>
                    3D Acrylic letters with LED lighting are durable, customizable, long-lasting, and highly visible. Made from precision-cut acrylic with energy-efficient LEDs, they work well for indoor or outdoor branding and signage.
                    High-quality acrylic combined with robust metal backing and premium LED modules, ensuring letters withstand weather, UV exposure, and everyday wear while maintaining vibrant illumination.</p>

                    <p class="fs-20"><strong>2. Can I get 3D Acrylic LED letters in custom shapes and fonts?</strong></p>
                    <p>Yes, all 3D LED Acrylic Letters are <b>fully customizable</b>. Choose your preferred fonts, sizes, colors, logos, and shapes to create signage that aligns perfectly with your brand identity.</p>

                    <p class="fs-20"><strong>3. Are 3D Acrylic LED Letters suitable for indoor and outdoor use?</strong></p>
                    <p>Absolutely, our LED-illuminated 3D Acrylic Letters are designed for both <b>indoor and outdoor applications</b>, providing consistent brightness and durability in offices, retail stores, restaurants, and building exteriors.</p>

                    <p class="fs-20"><strong>4. What types of LED lighting are available?</strong></p>
                    <p>Customers can select from <b>front-lit</b>, <b>backlit</b>, <b>halo-lit</b>, <b>dual-lit</b>, or <b>RGB color-changing LEDs</b>. Each option delivers bright, energy-efficient illumination tailored to your signage requirements.</p>

                    <p class="fs-20"><strong>5. How easy is the installation process?</strong></p>
                    <p>Installation is straightforward with user-friendly hardware and detailed instructions. Letters can be securely mounted on walls, glass, metal, or any flat surface, making setup fast and hassle-free.</p>

                    <p class="fs-20"><strong>6. Can I order letters in multiple sizes for the same project?</strong></p>
                    <p>Yes, Brand Signages offers flexible sizing. You can mix and match letter heights and thicknesses to create a visually balanced and professional signage layout.</p>

                    <p class="fs-20"><strong>7. Do these letters require frequent maintenance?</strong></p>
                    <p>No, the acrylic and LED combination is <b>low-maintenance</b>. Occasional cleaning is enough to keep the letters bright and looking brand-new for years.</p>

                    <p class="fs-20"><strong>8. Do You Provide LED Sign Board with Warranty and After-Sale Service in India?</strong></p>
                    <p>At Brand Signages, every LED sign board comes with a comprehensive <b>4-5 years warranty</b> and dedicated after-sales support. We ensure hassle-free maintenance, quick service response, and long-lasting performance. Our team stands by your signage even after installation, ensuring your investment continues to shine bright.</p>

                    <p class="fs-20"><strong>9. Do You Deliver LED Sign Boards PAN India?</strong></p>
                    <p>Yes, we deliver LED sign boards across <b>Bangalore, Chennai, Mumbai and all over India</b> within <b>15 Working Days</b>. Our logistics team ensures safe packaging and hassle-free delivery so that your signage reaches you in perfect condition.</p>
                </div>

            </div>




            <!-- Product Information -->
            <div class="tab-pane" id="information">

                </p>

                <!-- Material -->
                <p class="fs-20"><strong>Material</strong></p>
                <ul class="info-list fs-20">
                    <li>High-grade, weather-resistant acrylic panels for durability and clarity.</li>
                    <li>Sturdy aluminum frame for structural support and long-lasting performance.</li>
                    <li>Corrosion-proof and UV-resistant materials suitable for indoor and outdoor use.</li>
                </ul>
                <!-- Size -->
                <p class="fs-20"><strong>Size</strong></p>
                <ul class="info-list fs-20">
                    <li>Available in multiple standard sizes (6", 12", 24") with fully customizable dimensions.</li>
                    <li>Suitable for small storefronts, large building facades, and architectural signage.</li>
                </ul>
                <!-- Thickness -->
                <p class="fs-20"><strong>Thickness</strong></p>
                <ul class="info-list fs-20">
                    <li>Multiple thickness options: 1/4", 3/8", and 1/2" for varied visual depth and premium 3D effect.</li>
                    <li>Custom thickness available for high-impact visibility or layered design applications.</li>
                </ul>
                <!-- Weight -->
                <p class="fs-20"><strong>Weight</strong></p>
                <ul class="info-list fs-20">
                    <li>Lightweight yet robust for easy handling and quick installation.</li>
                    <li>Balanced design ensures secure mounting without compromising durability.</li>
                </ul>
                <!-- Color Options -->
                <p class="fs-20"><strong>Color Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Wide palette of colors to match brand guidelines.</li>
                    <li>Special finishes such as metallic tones, chrome, satin gold, matte, or gloss available.</li>
                    <li>Custom color matching for corporate branding or promotional campaigns.</li>
                </ul>
                <!-- Finish -->
                <p class="fs-20"><strong>Finish</strong></p>
                <ul class="info-list fs-20">
                    <li>Smooth polished finish for a premium, reflective look.</li>
                    <li>Matte finish for modern, understated elegance.</li>
                    <li>Options for textured or brushed finishes to add unique brand personality.</li>
                </ul>
                <!-- Lighting Options -->
                <p class="fs-20"><strong>Lighting Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Integrated LED illumination with front-lit, backlit, halo-lit, or dual-lit configurations.</li>
                    <li>Energy-efficient LEDs for low power consumption and high brightness.</li>
                    <li>Consistent illumination ensures maximum visibility in both day and night conditions.</li>
                    <li>Optional programmable or color-changing LEDs for dynamic signage.</li>
                </ul>

                <!-- Mounting Options -->
                <p class="fs-20"><strong>Mounting Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Includes versatile mounting hardware for walls, glass, metal panels, or ACP sheets.</li>
                    <li>Quick and secure installation with options for flush-mount or raised-mount setups.</li>
                    <li>Can be installed for indoor reception areas, outdoor storefronts, or large-scale facades.</li>
                </ul>

                <!-- Additional Features -->
                <p class="fs-20"><strong>Additional Features</strong></p>
                <ul class="info-list fs-20">
                    <li><b>Durability:</b> Resistant to UV, moisture, dust, and temperature changes.</li>
                    <li><b>Low Maintenance:</b> Long-lasting materials and LEDs require minimal upkeep.</li>
                    <li><b>Custom Branding:</b> Supports logos, taglines, and promotional graphics.</li>
                    <li><b>3D Design Elements:</b> Multi-layered construction creates depth, shadows, and a premium aesthetic.</li>
                    <li><b>Professional Craftsmanship:</b> CNC-cut and laser-finished edges for precise, clean visuals.</li>
                    <li><b>Compliance Ready:</b> Meets local signage regulations and safety standards.</li>
                    <li><b>Eco-Friendly:</b> Uses energy-efficient LED modules and recyclable materials wherever possible.</li>
                </ul>

            </div>

              <div class="tab-pane" id="review">

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle ">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Amit Verma</h6>
                        <div class="review-rating mb-1">
                            ★★★★☆
                        </div>
                        <p class="text-muted mb-0">Very happy with the 3D LED Acrylic Letters, they look premium and bright.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Priya Nair</h6>
                        <div class="review-rating mb-1">
                            ★★★★★
                        </div>
                        <p class="text-muted mb-0">Loved the finishing of the Acrylic LED letters, installation was smooth.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Rohit Sharma</h6>
                        <div class="review-rating mb-1">
                            ★★★☆☆
                        </div>
                        <p class="text-muted mb-0">I ordered Acrylic LED letters for my restaurant and they completely changed the way the exterior looks. Many customers compliment the board!</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Meera Krishnan</h6>
                        <div class="review-rating mb-1">
                            ★★★★☆
                        </div>
                        <p class="text-muted mb-0">Installation was smooth and the LED Acrylic Letter signage looks premium. Worth every rupee.</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Farhan Shaikh</h6>
                        <div class="review-rating mb-1">
                            ★★★★☆
                        </div>
                        <p class="text-muted mb-0">The acrylic letters are bright and well-constructed. Great visibility even during daylight.</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Manoj Kumar</h6>
                        <div class="review-rating mb-1">
                            ★★★★☆
                        </div>
                        <p class="text-muted mb-0">We installed 3D LED Acrylic Letters last month and they still look brand new, even with rain and heat. Very durable.</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Tanvi Mukherjee</h6>
                        <div class="review-rating mb-1">
                            ★★★★★
                        </div>
                        <p class="text-muted mb-0">Very classy looking acrylic LED letters. Adds a premium feel to the storefront.</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Arjun Mehta</h6>
                        <div class="review-rating mb-1">
                            ★★★★★
                        </div>
                        <p class="text-muted mb-0">The Acrylic LED letters helped our signage stand out. Earlier no one noticed the board now everyone does.</p>
                    </div>
                </div>
                                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Sneha Kulkarni</h6>
                        <div class="review-rating mb-1">
                            ★★★★★
                        </div>
                        <p class="text-muted mb-0">Nice glow effect at night. Acrylic LED Sign looks elegant and premium.</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Yogesh Patel</h6>
                        <div class="review-rating mb-1">
                            ★★★★★
                        </div>
                        <p class="text-muted mb-0">Loved the finishing and the spacing between each acrylic letter. Very neat work.</p>
                    </div>
                </div>
                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Ayesha Siddiqui</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Honestly didn’t expect this level of finishing. Perfect size and uniform lighting.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Devendra Rawat</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Good job on the LED Acrylic Letter setup. Took slightly longer but result was worth it.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Karan Chopra</h6>
                        <div class="review-rating mb-1">★★★☆☆</div>
                        <p class="text-muted mb-0">Very premium product, looks high-end.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Ritu Sharma</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">The 3D LED Acrylic Letters are sharp and well aligned. The glow is soft, perfect for my boutique.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Vikram Singh</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Good brightness and perfect look.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Shreya Patil</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">We upgraded our old board to Acrylic LED letters and the difference is huge. Looks very modern now.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Rahul Jain</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Good product and smooth installation.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Divya Das</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">The letters look much better than vinyl boards. Feels premium and attracts attention.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Abhishek Chatterjee</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Finishing is excellent and the lighting is uniform. No complaints.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Varsha Gupta</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">The LED Acrylic Letter board is now the highlight of our storefront. Even in daylight it stands out.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Kunal Bansal</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Experience was good overall, happy with the quality.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Payal Thakur</h6>
                        <div class="review-rating mb-1">★★★☆☆</div>
                        <p class="text-muted mb-0">The acrylic letters look modern and fresh. Installation team was polite and helpful.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Ankit Pandey</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Worth the investment. These 3D LED Acrylic Letters definitely make branding look premium.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Parth Desai</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Glow is consistent and clear, no dim spots. Very impressed.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Sonal Shah</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Looks elegant and matches the design shared during consultation.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Naveen Reddy</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">We ordered backlit Acrylic LED letters and the final finish matched the digital preview perfectly.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Harshita Rao</h6>
                        <div class="review-rating mb-1">★★★☆☆</div>
                        <p class="text-muted mb-0">Simple, clean and premium signage. Exactly what I wanted.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Imran Khan</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">These 3D LED Acrylic Letters make our brand visible from far away. Good for high-traffic roads.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar">
                        <img src="{{asset('frontend/Images/profile-icon.webp')}}" alt="User" class="rounded-circle">
                    </div>
                    <div class="review-content">
                        <h6 class="mb-1">Reema Kulkarni</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Good support, fast delivery and great outcome. Happy customer.</p>
                    </div>
                </div>



            </div>

            <!-- Bottom Action Buttons -->

            <!-- Tabs Box Ends -->

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