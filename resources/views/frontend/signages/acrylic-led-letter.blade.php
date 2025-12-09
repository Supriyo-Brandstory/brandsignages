@extends('frontend.layout.appLayout')
@section('content')

<div class="newly-bannersection mt-5">
    <div class="bread-cum-menu w-100 px-3">
        <p><a href="{{ route('index') }}">Home</a> / <a href="{{ route('acrylic_letters') }}">Acrylic Letters</a> / Acrylic LED Letter</p>
    </div>



    <div class="slide-wrapper" style="display: flex; gap: 20px; padding-left: 20px; padding-right: 20px;">
        <!-- Left Side: 3 Visible Thumbnails -->
        <div class="thumbnails-left" style="display: flex; flex-direction: column; gap: 10px; flex-shrink: 0;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-letter-1.webp" class="thumb active" data-index="0" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-letter-2.jpeg" class="thumb" data-index="1" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-letter-3.webp" class="thumb" data-index="2" style="width: 80px; height: 80px; cursor: pointer;">
        </div>

        <!-- Right Side: Main Slider -->
        <div class="main-slide-wrapper" style="position: relative; flex-grow: 1;">
            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-letter-1.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-letter-2.jpeg" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-letter-3.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
            </div>

            <!-- Navigation -->

        </div>
    </div>

    <!-- Content stays unchanged -->
    <div class="content">
        <h1 class="hero-banner_title">Acrylic LED Letter</h1>
        <p class="subtitle"><b>⭐⭐⭐⭐⭐ (20 Reviews)</b></p>

        <div class="divider"></div>
        <p class="price-big">
            <b>₹200 - ₹1,000</b> <small>+ GST</small>
        </p>
        <p class="fs-20"><b>Acrylic LED Letter-</b> Modern illuminated signage solution that combines precision-cut acrylic lettering with energy-efficient LED
            lighting. The glowing effect enhances visibility day and night, delivering a premium, attention-grabbing look ideal for branding, storefronts, and
            indoor displays.</p>
        <p class="price-big">
            <b>Key Features:</b>
        </p>
        <ul class="features-list">
            <li class="fs-20"><b>Premium Acrylic Build:</b> High-quality acrylic ensures a clean finish, durability, and performance.</li>
            <li class="fs-20"><b>LED Illumination:</b> Energy-efficient LEDs provide bright lighting for visibility indoors & outdoors.</li>
            <li class="fs-20"><b>Elegant 3D Look:</b> Precision-cut letters, layered depth offer a modern, eye-catching appearance.</li>
            <li class="fs-20"><b>Fully Customizable:</b> Preferred size, font, and style (front-lit, back-lit, or edge-lit).</li>
            <li class="fs-20"><b>Versatile Installation:</b> Suitable for storefronts, reception, wall branding, and retail spaces.</li>
            <li class="fs-20"><b>Low Maintenance:</b> Weather-resistant acrylic and LEDs ensure minimal care and best performance.</li>
        </ul>
        <p class="fs-20">Upgrade your brand presence with Acrylic LED Letters- a sleek, illuminated signage solution that combines style,
            visibility, and durability.</p>
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
            <b>Category: <a href="arcylic-signages" style="color: #E43D12; text-decoration: none;">Acrylic Signage</a>, <a href="acrylic-letters" style="color: #E43D12; text-decoration: none;">Acrylic Letters</a>, <a href="3d-acrylic-letter-non-lit" style="color: #E43D12; text-decoration: none;">Non-Lit Letter</a>, <a href="3d-led-acrylic-letters" style="color: #E43D12; text-decoration: none;">3D Acrylic LED</a>, <a href="3d-acp-letter-acrylic" style="color: #E43D12; text-decoration: none;">Acrylic with ACP</a></b>
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
                    <p class="price-big"><b>Acrylic LED Letter- Description</b></p>
                    <p class="fs-20">Elevate your branding with Acrylic LED Letter, engineered for clear readability and clean visual finish. Each letter is CNC-cut for precision and paired with high-brightness LED modules,
                        ensuring <b>consistent illumination</b> without hotspots or shadow gaps. The acrylic surface delivers a smooth, glass-like appearance, making the sign boards look premium even
                        when turned off.<br>
                        Built for real-world use, these letters retain clarity and brightness against dust, weather, and UV exposure, making them suitable for both indoor and outdoor environments. Installation options
                        include front-lit, back-lit, side-lit, or edge-lit styles depending on the mood and visibility requirements. Perfect for retail stores, hospitality spaces, corporate offices, and architectural
                        signage, <b>Acrylic LED Letters</b> offer a clean, modern aesthetic while maintaining functionality, durability, and energy efficiency.
                    </p>
                    <div class="action-buttons">
                        <a href="led-acrylic-3d-glow-sign-board" class="btn btn-blue fs-20">About LED Sign Board</a>
                        <a href="https://share.google/XAiKaiNNVNKgNJWRG" target="_blank" class="btn btn-red fs-20">Check Latest Reviews</a>
                    </div>

                    <br>

                    <p class="price-big"><b>Acrylic LED Letter- Pricing Information</b></p>
                    <p class="fs-20">The cost of Acrylic LED Letters depends on factors such as letter height, acrylic thickness, font style, lighting style (front-lit, back-lit, edge-lit), and customization requirements.
                        Pricing is usually calculated per running inch and can vary based on design detail, illumination type, and finish quality. On average, Acrylic LED Letter range from <b>₹250 to ₹1,200 per inch</b>, depending
                        on specifications, build quality, and lighting features.<br>

                        As one of the leading acrylic LED letter manufacturers in Bangalore and across India, we provide durable, precision-cut acrylic letters tailored to your brand. For accurate
                        pricing based on your design, reach out to our sales team at <a href="tel:+918006606080" style="color: #E43D12; text-decoration: none;" aria-label="Call us at +91 80066 06080"><strong>+91 80066 06080</strong></a>
                        and schedule a meeting, or fill out <a href="contact-us" style="color: #E43D12; text-decoration: none;"><strong>contact form</strong></a>. Our team will review your requirements and share the most suitable and cost-effective quotation.
                    </p>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>Acrylic LED Letters- Important Features</b></p>
                    <ul class="fs-20">
                        <li><b>Crystal-Clear Finish:</b> Manufactured using cast acrylic for superior clarity, sharp edges, and a premium glass-like look.</li>

                        <li><b>Precision Manufacturing:</b> CNC and laser cutting ensure consistent letter shape, alignment, and detail accuracy.</li>

                        <li><b>Consistent Illumination:</b> High-brightness LEDs are positioned to avoid hotspots, ensuring even glow across the letter surface.</li>

                        <li><b>Multiple Lighting Styles:</b> Available in front-lit, back-lit (halo), edge-lit, and dual-lit options depending on design and visibility needs.</li>

                        <li><b>True-to-Brand Color Matching:</b> Supports Pantone, RAL, matte, gloss, metallic, and gradient finishes for exact brand identity replication.</li>

                        <li><b>Lightweight & Clean Installation:</b> Slim construction allows mounting without bulky hardware, ideal for glass walls, reception panels, and retail spaces.</li>

                        <li><b>Built for Long-Term Use:</b> UV-stable acrylic prevents yellowing, while sealed LED modules resist moisture and dust.</li>

                        <li><b>Energy Optimized:</b> Low-watt LED system consumes significantly less power than traditional neon or fluorescent lighting.</li>

                        <li><b>Silent Operation:</b> No flicker, buzzing, or startup delay, perfect for indoor and outdoor environments.</li>

                        <li><b>Wide Application Compatibility:</b> Suited for corporate branding, mall stores, hotel signage, indoor wayfinding, and decorative brand elements.</li>
                    </ul>


                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>LED Acrylic Letters- Benefits</b></p>
                    <p class="fs-20">
                        <b>Premium Brand Visibility:</b>
                        <br>
                        Acrylic LED letters deliver high clarity and brightness, ensuring your brand stands out clearly in both well-lit 
                        and low-light environments.
                    </p>

                    <p class="fs-20">
                        <b>Precision-Crafted Lettering:</b>
                        <br>
                        Made using CNC or laser-cutting technology, each letter maintains sharp edges, accurate spacing, and consistent proportions 
                        for a clean, professional appearance.
                    </p>

                    <p class="fs-20">
                        <b>Uniform Illumination:</b>
                        <br>
                        Built with high-efficiency LEDs and optimized internal diffusion, the light distribution remains smooth without hotspots, 
                        shadows, or uneven glow.
                    </p>

                    <p class="fs-20">
                        <b>Lightweight Yet Durable:</b>
                        <br>
                        Acrylic offers an ideal balance of strength and weight resistant to corrosion, cracking, fading, and moisture, making it 
                        reliable for indoor and outdoor use.
                    </p>
                    <p class="fs-20">
                        <b>Customizable to Any Style:</b>
                        <br>
                        Available in multiple thicknesses, gloss levels, colors, and lighting styles (front-lit, edge-lit, back-lit), allowing
                         seamless alignment with brand identity and design aesthetics.
                    </p>
                    <p class="fs-20">
                        <b>Energy-Efficient Lighting:</b>
                        <br>
                        LED technology consumes significantly less power compared to traditional lighting, reducing operational costs while maintaining
                         high brightness levels.
                    </p>
                    <p class="fs-20">
                        <b>Long Lifespan & Low Maintenance:</b>
                        <br>
                        Minimal upkeep is required LED modules are long-lasting, and the smooth acrylic surface can be easily cleaned without
                         specialized products.
                    </p>
                    <p class="fs-20">
                        <b>Flexible Installation Options:</b>
                        <br>
                        Suitable for reception areas, storefronts, lobby walls, commercial interiors, malls, showrooms, and facade branding without
                         requiring heavy structural support.
                    </p>
                    <p class="fs-20">
                        <b>Modern, Minimal, & Eye-Catchy:</b>
                        <br>
                        The combination of illuminated acrylic and clean cut-letter styling creates a contemporary look ideal for 
                        premium and modern business environments.
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
                    <p class="fs-20"><strong>1. What are Acrylic LED Letters made of?</strong></p>
                    Acrylic LED Letters are made using high-grade acrylic sheets paired with high-efficiency LED lighting modules. The acrylic provides a sleek, premium finish, while the LED lights 
                    offer bright, uniform illumination suitable for indoor and outdoor environments.</p>

                    <p class="fs-20"><strong>2. Can Acrylic LED Letters be customized in design?</strong></p>
                    <p>Yes, Acrylic LED Letters can be fully customized. You can choose the size, font style, thickness, lighting style (front-lit, backlit, edge-lit), and color options. Logo 
                        shapes, symbols, and brand elements can also be added for a tailored visual identity.</p>

                    <p class="fs-20"><strong>3. How are Acrylic LED Letters installed?</strong></p>
                    <p>Installation is simple and depends on the mounting surface. Letters can be fixed using stud mounts, spacers, or adhesive methods. Professional installation ensures proper 
                        wiring, alignment, and a clean finish.</p>

                    <p class="fs-20"><strong>4. Are Acrylic LED Letters suitable for outdoor use?</strong></p>
                    <p>Yes, they are designed to perform well outdoors. The acrylic and LED components are weather-resistant, UV-protected, and moisture-safe, ensuring long-term
                         durability even in sun, rain, or dust.</p>

                    <p class="fs-20"><strong>5. What are the common applications of Acrylic LED Letters?</strong></p>
                    <p>Acrylic LED Letters are widely used for storefronts, shopfronts, reception branding, office walls, real estate buildings, façade signage, event branding, retail displays,
                         and directional signage anywhere visibility and modern branding are needed.</p>

                    <p class="fs-20"><strong>6. What kind of maintenance do Acrylic LED Letters require?</strong></p>
                    <p>Very minimal upkeep is needed. Occasional dusting or wiping with a soft cloth keeps them clean. The LEDs are long-lasting and energy-efficient, requiring little to no 
                        maintenance over years of operation.</p>
                    <p class="fs-20"><strong>7. Can Acrylic LED Letters be made in color-changing or dimmable lighting?</strong></p>
                    <p>Yes, depending on preference, Acrylic LED Letters can include warm, cool, RGB, or Smart LED modules with options like dimming control or app-based color 
                        changing (available upon request).</p>
                    <p class="fs-20"><strong>8. Do Acrylic LED Letters consume a lot of electricity?</strong></p>
                    <p>No. These letters use energy-efficient LED modules that provide high brightness while consuming low power, making them economical compared to
                         neon and traditional lighting.</p>

                </div>

            </div>




            <!-- Product Information -->
            <div class="tab-pane" id="information">

                </p>

                <p class="fs-20 mb-2"><strong>Material</strong></p>
                <ul class="info-list fs-20">
                    <li>Premium cast acrylic designed for high clarity and precise light transmission.</li>
                    <li>Integrated energy-efficient LED modules ensure even illumination and consistent brightness over time.</li>
                    <li>Optional backing materials such as aluminium, PVC, or ACP available for added structural support and outdoor durability.</li>
                </ul>

                <p class="fs-20 mb-2"><strong>Size</strong></p>
                    <ul class="info-list fs-20">
                        <li>Standard sizes available in 6”, 12”, 18”, and 24”.</li>
                        <li>Fully customizable dimensions based on viewing distance, installation height, or architectural layout.</li>
                    </ul>

                    <p class="fs-20 mb-2"><strong>Thickness</strong></p>
                    <ul class="info-list fs-20">
                        <li>Available in 5mm, 8mm, 10mm, 12mm, and 20mm depending on lighting configuration (front-lit, backlit, or edge-lit).</li>
                        <li>Custom thickness options available for enhanced depth and premium 3D visual impact.</li>
                    </ul>

                <p class="fs-20 mb-2"><strong>Weight</strong></p>
                <ul class="info-list fs-20">
                    <li>Lightweight construction for easy handling and efficient installation.</li>
                    <li>Engineered to support integrated LED wiring without adding heavy load to mounting surfaces.</li>
                </ul>

                <p class="fs-20 mb-2"><strong>LED Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Available in Warm White, Cool White, RGB, RGB-W, and Smart App-Controlled Color-Changing LEDs.</li>
                    <li>Energy-efficient, low-heat LED modules designed for long lifespan and consistent brightness.</li>
                </ul>

                <p class="fs-20 mb-2"><strong>Color Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Available in solid, transparent, frosted, matte, or tinted acrylic options.</li>
                    <li>Face-layer options: mirror gold, mirror silver, rose gold, brushed metal, matte black, chrome, or fully customized brand colors.</li>
                </ul>

                <p class="fs-20 mb-2"><strong>Finish</strong></p>
                <ul class="info-list fs-20">
                    <li>High-gloss finish available for a clean, modern, and reflective appearance.</li>
                    <li>Matte and frosted finishes available for diffused, soft light output and subtle branding.</li>
                    <li>Optional metallic or layered front finish for elevated luxury aesthetics.</li>
                </ul>

                <p class="fs-20 mb-2"><strong>Mounting Options</strong></p>
                <ul class="info-list fs-20">
                    <li>Stud mounting for secure and long-term outdoor signage applications.</li>
                    <li>High-strength adhesive mounting for clean indoor installations on smooth surfaces and glass.</li>
                    <li>Spacer installation for floating lettering, wall glow effects, and enhanced 3D depth.</li>
                </ul>

                <p class="fs-20 mb-2"><strong>Additional Features</strong></p>
                <ul class="info-list fs-20">
                    <li>Waterproof, dust-resistant, and UV-stable build ensures long-lasting clarity and no yellowing.</li>
                    <li>LED lifespan of 30,000–50,000+ hours with minimal power consumption.</li>
                    <li>CNC and laser-cut precision ensures accurate alignment, smooth edges, and premium craftsmanship.</li>
                    <li>Low-maintenance design requires only occasional cleaning to maintain illumination and appearance.</li>
                </ul>

            </div>

            <div class="tab-pane" id="review">

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Niharika Shinde</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">The Acrylic LED letter signage completely upgraded the look of my boutique. Super clean finish.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Anuj Saxena</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Good brightness and even glow. The LED Acrylic Letter board stands out clearly day and night.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Sneha Agarwal</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Really impressed with the uniform lighting and finishing. Looks premium.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Ramesh Pawar</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">The Acrylic LED Sign Board has made our restaurant much more visible from the main road.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Bhavika Jain</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Clean edges, good glow and perfect sizing. Looks exactly like the design shared earlier.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Yusuf Ansari</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">High brightness but still soft on eyes. The Acrylic LED Letter board looks outstanding.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Mitali Ghosh</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Nice finishing and proper alignment. The LED Acrylic Letter style feels very elegant.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Tejas Salunke</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Installation team did a professional job. The glow is uniform without any hotspots.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Krishna Narang</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Perfect choice for modern interiors. The Acrylic LED Sign Board looks very premium in person.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Sandeep Mishra</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Exactly what I needed for my clinic signage. Good glow and visibility from far.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Ritika Kapoor</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Very high quality material. Looks luxurious and durable.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Sumit Tiwari</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Worth every rupee. The LED Acrylic Letter design added a premium touch to my store.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Payal Jadhav</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Looks classy and modern. The acrylic surface is smooth and reflective.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Rahul Chauhan</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">The Acrylic LED letter signage improved our brand visibility drastically. Great job.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Harleen Kaur</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Perfect lighting tone and neat cable management. Looks premium and neat.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Dev Sharma</h6>
                        <div class="review-rating mb-1">★★★★☆</div>
                        <p class="text-muted mb-0">Good detailing and durable build. No flickering or brightness issues.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Zara Sheikh</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Looks stunning after installation. Exactly the premium look we expected.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Vijay Nair</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">The Acrylic LED Sign Board is visible from long distance and looks very professional.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Aarav Singh</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Smooth finishing, great brightness and perfect proportion. Highly satisfied.</p>
                    </div>
                </div>

                <div class="review-item d-flex gap-3 mb-4">
                    <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
                    <div class="review-content">
                        <h6 class="mb-1">Pranita Kolhe</h6>
                        <div class="review-rating mb-1">★★★★★</div>
                        <p class="text-muted mb-0">Looks rich and polished. The LED glow gives our reception wall a premium feel.</p>
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
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(23 reviews)</span>
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
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(15 reviews)</span>
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
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(19 reviews)</span>
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
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(20 reviews)</span>
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