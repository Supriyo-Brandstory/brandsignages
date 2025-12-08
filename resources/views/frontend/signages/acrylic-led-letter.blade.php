@extends('frontend.layout.appLayout')
@section('content')

<div class="newly-bannersection">
    <div class="bar">
        <h1 class="hero-banner_title">Acrylic LED Letter</h1>
    </div>

   
<div class="slide-wrapper" style="display: flex; gap: 20px; padding-left: 20px;">
        <!-- Left Side: 3 Visible Thumbnails -->
        <div class="thumbnails-left" style="display: flex; flex-direction: column; gap: 10px; flex-shrink: 0;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-letters-1.webp" class="thumb active" data-index="0" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-letters-2.webp" class="thumb" data-index="1" style="width: 80px; height: 80px; cursor: pointer;">
            <img src="/frontend/Images/led-sign-board/acrylic-led-letters-3.webp" class="thumb" data-index="2" style="width: 80px; height: 80px; cursor: pointer;">
        </div>

        <!-- Right Side: Main Slider -->
        <div class="main-slide-wrapper" style="position: relative; flex-grow: 1;">
            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-letters-1.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-letters-2.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-letters-3.webp" alt="Acrylic LED Letter" style="width: 100%; max-width: 500px; height: auto; border-radius: 6px;">
                </div>
            </div>

            <!-- Navigation -->

        </div>
    </div>
   
    <!-- Content stays unchanged -->
    <div class="content">
        <h1 class="hero-banner_title">Acrylic LED Letter</h1>
        <p class="subtitle"><b>★★★★★ (150 customer reviews)</b></p>

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


   
            <!-- Bottom Action Buttons -->
           
        <!-- Tabs Box Ends -->

    </div>
</section>
    
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Recent Client Reviews</h2>

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
                                    Our tech startup needed a signage solution that matched our innovative spirit. The
                                    design team didn't just create a sign; they captured our company's entire essence.
                                    The LED-powered brand display has become a conversation starter for clients and
                                    employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy- Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sneha Reddy</h6>
                                        <small class="text-muted">Marketing Head – Urban Retail Co.</small>
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
                                    We needed stunning, durable, and regulation-compliant signage for our hospital,
                                    and Brand Signages delivered exactly what we asked for. Their attention to detail
                                    is excellent, which helped us enhance the patient experience.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema - Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Seema Nayak</h6>
                                        <small class="text-muted">Operations Manager– Horizon Hospitals</small>
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
                                    From initial conceptualization to execution, they executed our café signage project
                                    seamlessly. They perfectly captured the aesthetics of our brand with vibrant acrylic
                                    signs and a neon board that has quickly become an Instagram favorite among local people.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Founder – Café Bloom</small>
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
                                    We needed elegant indoor and outdoor corporate signage that matched our branding.
                                    Brand Signages impressed us with their quick turnaround, premium finish, and seamless
                                    coordination throughout the signage project.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Director– Nova Consulting Group</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



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





@endsection