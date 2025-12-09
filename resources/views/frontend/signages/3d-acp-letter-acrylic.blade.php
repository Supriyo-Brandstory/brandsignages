@extends('frontend.layout.appLayout')
@section('content')

<div class="newly-bannersection mt-5">
    <div class="bread-cum-menu w-100 px-3">
        <p><a href="{{ route('index') }}">Home</a> / <a href="{{ route('acrylic_letters') }}">Acrylic Letters</a> / 3D Acrylic Letter with ACP</p>
    </div>

    <div class="slide-wrapper" style="display: flex; gap: 20px; padding-left: 20px; padding-right: 20px;">
        <!-- Left Side: 3 Visible Thumbnails -->
        <div class="thumbnails-left" style="display: flex; flex-direction: column; gap: 10px; flex-shrink: 0;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-acp-letter-1.webp" class="thumb active" data-index="0" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-acp-2.webp" class="thumb" data-index="1" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-acp-3.webp" class="thumb" data-index="2" style="width: 80px; height: 80px; cursor: pointer;">
        </div>

        <!-- Right Side: Main Slider -->
        <div class="main-slide-wrapper" style="position: relative; flex-grow: 1;">
            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-acp-letter-1.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-acp-2.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-acp-3.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
            </div>

            <!-- Navigation -->

        </div>
    </div>

    <!-- Content stays unchanged -->
    <div class="content">
        <h1 class="hero-banner_title">3D Acrylic Letter with ACP</h1>
        <p class="subtitle"><b>⭐⭐⭐⭐⭐ (15 Reviews)</b></p>

        <div class="divider"></div>
        <p class="price-big">
            <b>₹100 - ₹800</b> <small>+ GST</small>
        </p>
        <p class="fs-20"><b>3D Acrylic Letter with ACP (Aluminum Composite Panel)-</b> 3D Acrylic Letters with ACP a stylish
            and durable signage solution. The solid ACP backing adds strength, while the three-dimensional
            acrylic letters create depth and visual impact.</p>
        <p class="price-big">
            <b>Key Features:</b>
        </p>
        <ul class="features-list">
            <li class="fs-20"><b>Durable Construction:</b> Acrylic mounted on ACP (Aluminium Composite Panel) for lasting performance.</li>
            <li class="fs-20"><b>Amazing 3D Effect:</b> Layered design with ACP, Acrylic, & LED creates strong visual appeal.</li>
            <li class="fs-20"><b>Customizable Styles:</b> Tailor letters, fonts, & colors to match any brand identity.</li>
            <li class="fs-20"><b>Bright LED Illumination:</b> Energy-efficient lighting ensures high visibility day and night.</li>
            <li class="fs-20"><b>Easy & Secure Installation:</b> Designed for quick setup on walls, glass, metal, or ACP surfaces.</li>
            <li class="fs-20"><b>Low Maintenance:</b> Durable materials and high-end LED modules require minimal upkeep.</li>
        </ul>
        <p class="fs-20">Enhance your brand visibility with our 3D LED Acrylic Letters on ACP, combining a decent style, visibility, and reliability.</p>
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
                    <p class="fs-20">Make your brand impossible to miss with <b>3D LED Acrylic Letters with ACP</b> (Aluminium Composite Panel). Combining durable, high-quality acrylic with a solid ACP backing,
                        these letters deliver precise 3D depth, clean edges, and vibrant illumination for maximum visibility. With best performance features this signage withstands indoor and outdoor
                        conditions without losing its shine.<br>
                        Designed for storefronts, offices, receptions, exhibitions, and building facades, this signage solution adds a modern and polished look while ensuring long-lasting performance. Whether
                        displaying your business name, logo, or custom messaging, our 3D LED acrylic letters create a bold, eye-catching impression both day and night.
                    </p>
                    <div class="action-buttons">
                        <a href="led-acrylic-3d-glow-sign-board" class="btn btn-blue fs-20">About LED Sign Board</a>
                        <a href="https://share.google/XAiKaiNNVNKgNJWRG" target="_blank" class="btn btn-red fs-20">Check Latest Reviews</a>
                    </div>

                    <br>

                    <p class="price-big"><b>3D LED Acrylic Letters on ACP- Pricing Information</b></p>
                    <p class="fs-20">The cost of 3D LED Acrylic Letters mounted on ACP (Aluminium Composite Panel) varies based on factors such as letter size, thickness, font style, finish, LED type, and
                        customization requirements. Prices are typically calculated per running inch and may change depending on design complexity and lighting options. The average price range is <b>₹200 to ₹800
                            per inch</b>, depending on specifications and features.<br>

                        As one of the leading acrylic letter signage manufacturers in Bangalore and across India, we provide durable, precision-cut acrylic letters tailored to your brand. For accurate
                        pricing based on your design, reach out to our sales team at <a href="tel:+918006606080" style="color: #E43D12; text-decoration: none;" aria-label="Call us at +91 80066 06080"><strong>+91 80066 06080</strong></a>
                        and schedule a meeting, or fill out <a href="contact-us" style="color: #E43D12; text-decoration: none;"><strong>contact form</strong></a>. Our team will review your requirements and share the most suitable and cost-effective quotation.
                    </p>
                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>3D LED Acrylic Letters on ACP- Important Features</b></p>
                    <ul class="fs-20">
                        <li><strong>Premium Build Quality:</strong> Made with top-grade acrylic letters mounted on durable ACP (Aluminium Composite Panel) for long-lasting performance in indoor and outdoor settings.</li>
                        <li><strong>Vibrant 3D Design:</strong> Precision-cut layered letters create depth and a striking three-dimensional appearance for maximum visual impact.</li>
                        <li><strong>Bright, Energy-Efficient LED Illumination:</strong> High-efficiency LEDs ensure uniform lighting that enhances visibility without increasing energy costs.</li>
                        <li><strong>Custom Branding Options:</strong> Fully customizable in size, fonts, colors, finishes, and logos to perfectly align with your brand identity.</li>
                        <li><strong>Wide Viewing Distance:</strong> Clear and sharp graphics with reflective elements make signage legible from far away, day or night.</li>
                        <li><strong>Flexible Mounting:</strong> Easy installation with stud mounts, adhesives, or spacers for walls, glass, metal panels, and ACP surfaces.</li>
                        <li><strong>Durable & Weather-Resistant:</strong> Acrylic and ACP combination is UV-stable, moisture-resistant, and designed to withstand heat, dust, and harsh weather conditions.</li>
                        <li><strong>Low Maintenance:</strong> Built to last with minimal upkeep—simple cleaning keeps the signage looking brand-new.</li>
                        <li><strong>Versatile Applications:</strong> Suitable for retail storefronts, corporate offices, reception areas, real estate projects, events, and exterior building signage.</li>
                        <li><strong>Standards-Compliant:</strong> Manufactured according to local signage regulations and industry norms to ensure safety, quality, and compliance.</li>
                        <li><strong>Enhanced Brand Visibility:</strong> Combines LED lighting, 3D depth, and premium finishes to make your business name or logo stand out prominently in any environment.</li>
                    </ul>

                    <hr class="visible-thin-divider">
                    <p class="price-big"><b>3D LED Acrylic Letters with ACP Base- Benefits</b></p>
                    <p class="fs-20">
                        <b>Striking Brand Presence:</b>
                        <br>
                        Make your business instantly recognizable with bold, illuminated 3D acrylic letters mounted on ACP panels that command attention
                        in any environment.
                    </p>

                    <p class="fs-20">
                        <b>Maximum Readability:</b>
                        <br>
                        Crisp, clean lettering and vibrant LED illumination ensure your signage is clear and legible from any distance, day or night.
                    </p>

                    <p class="fs-20">
                        <b>Sleek & Modern Aesthetic:</b>
                        <br>
                        Combines the contemporary look of acrylic with the smooth, durable ACP backing for a refined, high-end appearance.
                    </p>

                    <p class="fs-20">
                        <b>Fully Tailored Design:</b>
                        <br>
                        Customize fonts, sizes, colors, finishes, and layouts to perfectly match your brand identity and architectural style.
                    </p>
                    <p class="fs-20">
                        <b>Long-Lasting Durability:</b>
                        <br>
                        Weatherproof, UV-resistant, and low-maintenance materials guarantee lasting performance with minimal upkeep.
                    </p>
                    <p class="fs-20">
                        <b>Versatile Placement:</b>
                        <br>
                        Ideal for storefronts, corporate offices, reception areas, events, and exterior building signage adaptable to any space.
                    </p>
                    <p class="fs-20">
                        <b>Smart Investment:</b>
                        <br>
                        Combines premium materials with energy-efficient LED lighting, offering a cost-effective signage solution that enhances
                        visibility and brand recall.
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
                    <p class="fs-20"><strong>1. What materials are used in 3D LED Acrylic Letters with ACP?</strong></p>
                    These letters are crafted from high-quality, weather-resistant acrylic for clarity and durability, mounted on sturdy ACP (Aluminium Composite Panel) for structural support.
                    High-efficiency LED modules are integrated to provide bright, energy-saving illumination.</p>

                    <p class="fs-20"><strong>2. Can I customize the size, font, and design of the letters?</strong></p>
                    <p>Yes, the letters are fully customizable in terms of height, thickness, font style, colors, finishes, and layouts. Logos, taglines, or unique shapes can
                        also be incorporated to match your brand identity.</p>

                    <p class="fs-20"><strong>3. How easy is the installation process of 3D LED Acrylic Letters on ACP?</strong></p>
                    <p>Installation is straightforward. The signage can be mounted using studs, adhesive tape, or spacers depending on the surface type, such as walls, glass, metal, or ACP panels.
                        Mounting hardware and guidance are included for secure and precise placement.</p>

                    <p class="fs-20"><strong>4. Are these letters suitable for outdoor use?</strong></p>
                    <p>Absolutely, the combination of weather-resistant acrylic, durable ACP backing, and UV-protected coatings ensures that the letters withstand sunlight, rain, dust, and temperature
                        variations without fading or losing structural integrity.</p>

                    <p class="fs-20"><strong>5. What types of applications are ideal for 3D Acrylic LED letters?</strong></p>
                    <p>They are perfect for storefronts, corporate offices, reception areas, exhibitions, real estate projects, event branding, and exterior building signage- anywhere
                        you want to create a strong brand impression.</p>

                    <p class="fs-20"><strong>6. How is maintenance handled for 3D LED Acrylic Letters on ACP?</strong></p>
                    <p>Maintenance is minimal. The durable materials and energy-efficient LEDs require only occasional cleaning to remove dust and maintain brightness, ensuring
                        long-lasting performance with very low upkeep.</p>

                </div>

            </div>




            <!-- Product Information -->
            <div class="tab-pane" id="information">

                </p>

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
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Amit Verma</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">The Acrylic letters with ACP came out exactly as we wanted. Clean fonts and perfect spacing.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Tanya Kaur</h6>
                <div class="review-rating mb-1">★★★★☆</div>
                <p class="text-muted mb-0">Looks premium and modern. The ACP background really elevates the Acrylic letters.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Rishi Malhotra</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Loved the finishing. The Aluminum Acrylic Letters look sharp and very professional.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Simran D'Souza</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Installation was smooth and the result looks stylish. Perfect match to our branding colours.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Sagar Patil</h6>
                <div class="review-rating mb-1">★★★★☆</div>
                <p class="text-muted mb-0">Good quality Acrylic letters with ACP. Worth the investment for outdoor branding.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Madhuri Saxena</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Very premium looking signage. The letters are thick, glossy and perfectly aligned.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Kunal Shetty</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Unexpectedly classy. The ACP back panel combined with Acrylic letters gives a high-end finish.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Arpita Deshmukh</h6>
                <div class="review-rating mb-1">★★★★☆</div>
                <p class="text-muted mb-0">Looks beautiful! The Acrylic LED Letter sample was shown but we chose non-lit. Still looks amazing.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Sohail Khan</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Fonts look premium and balanced. Gives the storefront a polished identity.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar">
                <img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User">
            </div>
            <div class="review-content">
                <h6 class="mb-1">Megha Bharadwaj</h6>
                <div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Professional work and timely delivery. Very happy with the final Acrylic letters with ACP board.</p>
            </div>
        </div>

        <!-- continuing -->

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
            <div class="review-content">
                <h6 class="mb-1">Suresh Iyer</h6><div class="review-rating mb-1">★★★★☆</div>
                <p class="text-muted mb-0">Simple, neat and effective signage. The matte ACP background looks classy.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
            <div class="review-content">
                <h6 class="mb-1">Priya Mehra</h6><div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">The letters are sturdy and weather resistant. Perfect for outdoor use.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
            <div class="review-content">
                <h6 class="mb-1">Farhan Shaikh</h6><div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Very impressed with the precision cutting and polishing of the Acrylic letters.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
            <div class="review-content">
                <h6 class="mb-1">Kiran Joshi</h6><div class="review-rating mb-1">★★★★☆</div>
                <p class="text-muted mb-0">Looks premium and matches our wall texture perfectly. Good craftsmanship.</p>
            </div>
        </div>

        <div class="review-item d-flex gap-3 mb-4">
            <div class="review-avatar"><img src="{{asset('frontend/Images/profile-icon.webp')}}" class="rounded-circle" alt="User"></div>
            <div class="review-content">
                <h6 class="mb-1">Ashwin Rao</h6><div class="review-rating mb-1">★★★★★</div>
                <p class="text-muted mb-0">Strongly recommend. The Aluminum Acrylic Letters look high-end and are easy to maintain.</p>
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