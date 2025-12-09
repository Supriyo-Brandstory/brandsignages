@extends('frontend.layout.appLayout')

@section('content')

<div class="container py-5">
    <div class="bread-cum-menu">
        <p><a href="{{ route('index') }}">Home</a> / Acrylic Letters</p>
    </div>
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
                            ⭐⭐⭐⭐⭐ <span class="text-dark">(23 Reviews)</span>
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

<section class="process-section">
    <div class="container">
        <h2 class="process-title">Acrylic Letters- Modern, High Visibility Signages</h2>
        <p class="card-text testimonial-card-text text-center pb-2">Acrylic letters deliver a clean, contemporary look that instantly elevates any storefront, reception wall, or 
            interior brand display. Precision-cut edges, smooth finishes, and custom sizes, thicknesses and colors make an acrylic letter a versatile solution for businesses 
            that want durable, low-maintenance, high-impact signage. Lightweight yet sturdy, these letters resist UV and moisture, retain their clarity over time, and provide a polished,
             professional appearance that strengthens brand perception.
            </p>
        <div class="row">
            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-design">
                        <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="High-Impact Visibility">
                    </div>
                    <h3>High-Impact Visibility</h3>
                    <p>Acrylic letters create a clean, modern, and professional appearance that immediately grabs attention. Their precise edges, smooth finish, and polished look make your storefront, office, or reception 
                        wall stand out, helping your brand make a lasting first impression on visitors and customers.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-deliver">
                        <img src="{{asset('frontend/Images/promotion.png')}}" style="width: 20%" alt="Customized & Brand-Focused">
                    </div>
                    <h3>Customized & Brand-Focused</h3>
                    <p>
                       With options for size, font, color, thickness, and finish, acrylic letters can be fully tailored to reflect your brand identity. Whether it’s your company name, logo, or tagline, these letters provide
                        a sleek and consistent branding solution that enhances the aesthetic of any space.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/easy-installation.png')}}" style="width:17%" alt="Durable and Long Lasting">
                    </div>
                    <h3>Durable & Long-Lasting</h3>
                    <p>Built from high-quality acrylic, these letters are resistant to UV, moisture, and fading, ensuring your signage retains its premium appearance over time. Low-maintenance and sturdy, they are a 
                        practical investment for both indoor and outdoor branding applications.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/durable.png')}}" style="width: 20%" alt="Modern Aesthetics">
                    </div>
                    <h3>Modern Aesthetics</h3>
                    <p>The sleek, three-dimensional design of acrylic letters adds a contemporary touch to any business space, from storefronts to reception walls. Available in multiple colors, finishes, and thicknesses,
                         these letters can be engraved, embossed, or layered to create a distinctive brand identity.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-card">
                    <div class="icon-purchase">
                        <img src="{{asset('frontend/Images/energy.png')}}" style="width: 20%" alt="LED Upgrade Option">
                    </div>
                    <h3>LED Upgrade</h3>
                    <p>For businesses seeking additional visibility at night or in low-light conditions, acrylic letters can be upgraded with LED modules to become illuminated Acrylic LED Letters, combining premium 
                        aesthetics with functional lighting for maximum brand impact.
                    </p>
                </div>
            </div>
            <div class="col-md-4 contact-section">
                <p class="card-text"><strong>As leading manufacturer of Acrylic LED Letters, we combine innovation, precision, and craftsmanship in every design. Illuminate your brand with sleek, premium Acrylic LED letters 
                    that captures attention day and night.</strong></p>
                <a href="{{route('contact_us')}}">
                    <button class="contact-btn">Submit Enquiry</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">Acrylic Letters- FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">
                What are The Common Applications of Acrylic Letters?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic letter signages are widely used across various industries due to their versatility and
                    durability:</p>
                <ul>
                    <li>Corporate Offices: Directional signs, room identification, branding displays.</li>
                    <li>Retail Spaces: Promotional displays, and product information signs.</li>
                    <li>Restaurants: Menu boards, special displays.</li>
                    <li>Hospitals: Wayfinding systems to guide patients.</li>
                    <li>Events: Awards plaques or recognition displays.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Long Do Acrylic Letters Typically Last?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>With proper care and maintenance, acrylic letters can last several years without
                    significant wear or fading. Their resistance to UV rays ensures that colors remain vibrant over
                    time, making them an excellent long-term investment for any business.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Does Acrylic Signage Compare to Other Signage Materials?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Here is a comprehensive comparison of acrylic signboards with other signage materials:</p>
                <ul>
                    <li>Durability: More impact-resistant than glass; won’t shatter easily.</li>
                    <li>Weight: Lighter than glass or metal; easier to install.</li>
                    <li>Weather Resistance: Suitable for both indoor and outdoor use without warping.</li>
                    <li>Customization: Easier to mold into various shapes compared to wood or metal.</li>
                </ul>
                <p>These benefits make acrylic a preferred choice among businesses seeking effective signage
                    solutions.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What’s The Best Way to Clean and Maintain Acrylic Signage Boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>According to experts, these are the steps to clean acrylic signboards:</p>
                <ul>
                    <li>Use a soft cloth (microfiber works best) with mild soap mixed with water.</li>
                    <li>Gently wipe the surface without applying excessive pressure.</li>
                    <li>Avoid using abrasive cleaners or materials that could scratch the surface.</li>
                    <li>Regular maintenance will keep them looking new; consider cleaning every few weeks depending
                        on exposure to dirt or dust.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Acrylic Signage Boards be Used for Outdoor Advertising?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic signage with LED is ideal for outdoor advertising due to its weather-resistant
                    properties:</p>
                <ul>
                    <li>They can withstand rain, sun exposure, and varying temperatures without deteriorating
                        quickly.</li>
                    <li>For outdoor applications, ensure any printed graphics use UV-resistant inks or coatings to
                        prevent fading over time.</li>
                    <li>Additionally, using thicker sheets enhances durability against potential impacts from
                        environmental factors like wind or debris.</li>
                    <li>This makes them an excellent choice for businesses looking to increase visibility outdoors
                        while maintaining quality over time.</li>
                </ul>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How Do Acrylic Signage Boards Contribute to Brand Visibility?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic signaages improve brand visibility by offering an elegant and professional appearance. 
                    They can be customized with bright colors, 3D letters, and unique designs to attract attention. Acrylic 
                    letters also come with LED illuminated options for better visibility at night. High-quality printing and soft 
                    finishes make logos and text stand out.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
             Can LED Lighting be Integrated into Acrylic Signage Boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, LED lighting can be added to acrylic letters to make them look more visually striking. 
                    Businesses often use backlit or illuminated acrylic signs to improve visibility, especially in areas with 
                    low light. The LED-illuminated acrylic signage is commonly used in retail shops, restaurants, hotels, and corporate 
                    offices. It gives an elegant look, better brand recognition, and engagement. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
             Can Acrylic Signage Boards Withstand Extreme Weather Conditions?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signs are durable and can overcome various climate conditions. They bear rain, wind, 
                    and sunshine, so they can be used for both internal and external purposes. High-quality acrylic does 
                    not fade easily, even in excessive cold or heat. However, for hard exterior environments, companies 
                    can use additional coatings to increase durability. Acrylic signs are also water resistant, which 
                    prevents moisture damage. Adequate maintenance can make them a reliable option for long-term usage.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Acrylic Signage Boards be Customized in Terms of Shape and Size?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signaling boards can be tailored in several shapes and sizes to adjust your specific requirements. 
                    They can be cut into exceptional designs, from simple rectangles to complicated logos and letters. You can select 
                    thickness, color, and finish (bright or matte) to suit your branding. Acrylic signs can also include 3D letters or 
                    LED lighting for additional effect. We provide custom acrylic signage design services to clients across India. </p>
            </div>
        </div>

    </div>
</section>



@endsection