@extends('frontend.layout.appLayout')

@section('content')
<section class="simple-impact-hero">
    @php
        $slides = [
            [
                'img' => 'led-banner-3',
                'title' => 'Wall Graphics – Transform Every Wall into a Brand Story',
                'desc' =>
                    'Designed to make a powerful first impression, our wall graphics turn blank surfaces into immersive brand experiences that captivate and inspire.',
            ],
            [
                'img' => 'led-banner-n',
                'title' => 'High-Impact Wall Graphics for Every Commercial Space',
                'desc' =>
                    'Our wall graphics deliver vivid imagery and sharp detail, making them perfect for offices, retail stores, hospitals, and hospitality venues.',
            ],
            [
                'img' => 'led-banner-n2',
                'title' => 'Custom Wall Graphics with Premium Vinyl Finishes',
                'desc' =>
                    'Crafted with high-grade materials and precision printing, our wall graphics provide long-lasting vibrancy and a truly professional interior aesthetic.',
            ],
        ];
    @endphp

    <div class="hero-slides-wrapper" id="heroSlider">
        @foreach ($slides as $slide)
            <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                <img src="/frontend/Images/led-sign-board/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">
                <div class="hero-dark-overlay">
                    <div class="container container-large">
                        <div class="hero-content-final">
                            <h1 class="hero-msg-title">{{ $slide['title'] }}</h1>
                            <p class="hero-msg-desc">{{ $slide['desc'] }}</p>
                            <div class="hero-msg-actions">
                                <a href="{{ route('contact_us') }}" class="btn-impact primary">
                                    I am Interested <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="{{ route('contact_us') }}" class="btn-impact secondary">
                                    Get a Quote <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="hero-pagination-dots">
        @foreach ($slides as $index => $slide)
            <div class="dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
        @endforeach
    </div>
</section>

<section class="instant-pricing">
    <div class="container py-5">
        <h2>Elevate Your Space with Stunning Wall Graphics <br>by Brand Signages</h2>
        <p>Wall graphics are one of the most cost-effective and visually impactful ways to define your brand environment.
            At Brand Signages, we craft precision-printed wall graphics using high-grade vinyl that delivers sharp imagery,
            rich colour, and lasting durability. Our range includes expertly crafted
            <a href="wall-murals" style="color:#E43D12; text-decoration:none;"><b>full-wall murals</b></a>,
            <a href="feature-walls" style="color:#E43D12; text-decoration:none;"><b>branded feature walls</b></a>,
            <a href="vinyl-wall-wraps" style="color:#E43D12; text-decoration:none;"><b>vinyl wall wraps</b></a>,
            custom <b>wall decals</b>, and decorative surface graphics designed for businesses that want a distinctive,
            high-impact interior environment.
        </p>

        <div class="impact-gallery-grid mt-5">
            @php
                $galleryItems = [
                    ['img' => '1', 'title' => 'Corporate Office Wall Murals', 'class' => 'red-title'],
                    ['img' => '2', 'title' => 'Retail Brand Feature Walls', 'class' => 'red-title'],
                    ['img' => '3', 'title' => 'Full Vinyl Wall Wraps', 'class' => 'red-title'],
                    ['img' => '4', 'title' => 'Custom Printed Wall Decals', 'class' => 'red-title'],
                    ['img' => '5', 'title' => 'Textured & 3D Wall Graphics', 'class' => 'red-title'],
                ];
            @endphp
            @foreach ($galleryItems as $item)
                <div class="impact-card">
                    <div class="impact-card-inner">
                        <img src="/frontend/Images/large-graphics/wg-{{ $item['img'] }}.webp" alt="{{ $item['title'] }}" class="impact-image">
                        <div class="impact-title-box">
                            <span class="{{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <a href="#pricing"><button class="contact-btn">Check Pricing</button></a>
    </div>
</section>

<section class="led-signs-manufacturing">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-imagex">
                    <img src="{{ asset('frontend/Images/large-graphics/wg-6.webp') }}" alt="Wall Graphics by Brand Signages" class="img-fluid rounded-3">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="hero-title text-start">Wall Graphics: Built with Creativity & Precision</h2>
                <p class="brand-description">
                    Wall graphics are a powerful interior branding tool that communicates your values, culture, and identity at scale. Over the years, wall graphics have evolved into a must-have identity element for
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>corporate offices</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>retail showrooms</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>healthcare facilities</strong></a>,
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>hotels & restaurants</strong></a>, and
                    <a href="#" style="color:#E43D12; text-decoration:none;"><strong>educational institutions</strong></a>
                    across India. Today in 2025, wall graphics continue to redefine how businesses shape their interiors —
                    offering unlimited customization and precision-driven visual storytelling.
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Seamless Surface Coverage:</b> Precision-cut and perfectly aligned graphics that fit any wall
                        size or shape, delivering a flawless finish every time.
                    </li>
                    <li class="mb-3">
                        <b>Vivid, Long-Lasting Print:</b> UV-resistant inks and premium cast vinyl ensure your graphics
                        stay vibrant and impactful for years without peeling or fading.
                    </li>
                    <li>
                        <b>Brand Identity at Scale:</b> Wall graphics make your values visible at every corner of your
                        space — inspiring employees and impressing clients with every glance.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/wall-graphics" class="custom-btn">Explore More</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive Wall Graphics</h2>
        </div>
        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/wg-7.webp') }}" class="card-img-center" alt="Full Wall Murals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Full-Wall Murals</h5>
                                <p class="We-Elevate-Brands-text">Large-format, high-resolution murals printed on premium cast vinyl that create immersive visual environments for any interior space.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/wg-8.webp') }}" class="card-img-center" alt="Brand Feature Walls">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Brand Feature Walls</h5>
                                <p class="We-Elevate-Brands-text">Strategically designed branded walls that reinforce corporate identity in lobbies, boardrooms, and reception areas with bold precision.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/wg-9.webp') }}" class="card-img-center" alt="Removable Wall Decals">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Removable Wall Decals</h5>
                                <p class="We-Elevate-Brands-text">Flexible, residue-free decals perfect for temporary campaigns, seasonal promotions, and spaces requiring periodic creative refreshes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/wg-10.webp') }}" class="card-img-center" alt="Textured Wall Finishes">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Textured Wall Finishes</h5>
                                <p class="We-Elevate-Brands-text">Premium textured vinyl and 3D lenticular finishes that add depth, dimension, and a luxury feel to any interior wall surface.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card">
                            <img src="{{ asset('frontend/Images/large-graphics/wg-11.webp') }}" class="card-img-center" alt="Frosted Decorative Films">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title">Frosted & Decorative Films</h5>
                                <p class="We-Elevate-Brands-text">Elegant frosted, etched, and patterned films that transform glass partitions and smooth walls into sophisticated brand elements.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="We-Elevate-Brands-nav">
                    <div class="We-Elevate-Brands-button-prev"></div>
                    <div class="We-Elevate-Brands-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background:#f3f4f6;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="text-center p-5 rounded-4" style="background:#f8f9fb;">
                    <img src="{{ asset('frontend/Images/large-graphics/wm-12.webp') }}" class="img-fluid mb-4 rounded-4" alt="Indoor Wall Graphic">
                    <h4 class="fw-semibold mb-3">Indoor Wall Graphics</h4>
                    <div class="mx-auto mb-4" style="width:60%; height:1px; background:#ddd;"></div>
                    <div class="mb-4">
                        <i class="fas fa-ruler-combined fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Custom Sizes Available</p>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-palette fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Full-Colour CMYK Printing</p>
                    </div>
                    <div>
                        <i class="fas fa-layer-group fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Matte, Gloss & Satin Finishes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center p-5 rounded-4" style="background:#f8f9fb;">
                    <img src="{{ asset('frontend/Images/large-graphics/wm-13.webp') }}" class="img-fluid mb-4 rounded-4" alt="Outdoor Wall Graphic">
                    <h4 class="fw-semibold mb-3">Outdoor Wall Graphics</h4>
                    <div class="mx-auto mb-4" style="width:60%; height:1px; background:#ddd;"></div>
                    <div class="mb-4">
                        <i class="fas fa-sun fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">UV-Resistant Outdoor Vinyl</p>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-cloud-rain fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">Weatherproof & Waterproof</p>
                    </div>
                    <div>
                        <i class="fas fa-calendar-check fs-5 mb-2"></i>
                        <p class="mb-0 text-muted">3–7 Year Outdoor Lifespan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative text-white">
    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1600" class="w-100" style="height:450px; object-fit:cover;" alt="Wall Graphics CTA">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.3));"></div>
    <div class="position-absolute top-50 start-50 translate-middle text-center px-3" style="max-width:900px;">
        <h2 class="fw-bold mb-3">Wall Graphics: The Most Powerful Interior Branding Tool You're Not Using</h2>
        <p class="text-light mb-4">Your walls are silent salespeople working 24/7. Transform them into compelling brand narratives with precision-printed wall graphics that inspire your team, impress your clients, and reinforce your identity at every glance. With Brand Signages, your space speaks before you do.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('contact_us') }}" class="btn text-white fw-semibold px-5 py-3" style="background:#e6390a; border-radius:12px;">I am Interested</a>
            <a href="{{ route('contact_us') }}" class="btn fw-semibold px-5 py-3" style="background:#e9e9e9; color:#222; border-radius:12px;">Get a Quote</a>
        </div>
    </div>
</section>

<section class="new_client_section container">
    <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
    <div class="row">
        <div class="col-md-5 new_client_section-image col-12">
            <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}" alt="Wall Graphics Client - Brand Signages">
        </div>
        <div class="col-md-7 new_client_section-scrolling col-12">
            <div class="new_client_section-wrapper">
                <div class="new_client_section-row new_client_section-row-1">
                    @foreach(['client1','client2','client3','client4','client5','client6','client1','client2','client3','client4','client5','client6'] as $c)
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/'.$c.'.webp') }}" alt="Our Client"></div>
                    @endforeach
                </div>
                <div class="new_client_section-row new_client_section-row-2">
                    @foreach(['client7','client8','client9','client10','client11','client12','client7','client8','client9','client10','client11','client12'] as $c)
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/'.$c.'.webp') }}" alt="Our Client"></div>
                    @endforeach
                </div>
                <div class="new_client_section-row new_client_section-row-3">
                    @foreach(['client13','client14','client15','client16','client17','client18','client13','client14','client15','client16','client17','client18'] as $c)
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/'.$c.'.webp') }}" alt="Our Client"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new_testimonial-swiper-section">
    <div class="container">
        <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>
        <div class="position-relative">
            <div class="new_testimonial-button-prev">
                <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40" height="40">
            </div>
            <div class="new_testimonial-button-next">
                <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40" height="40">
            </div>
            <div class="swiper new_testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">Brand Signages transformed our entire office with stunning wall graphics that perfectly captured our culture and values. The quality of print is exceptional — our employees love the atmosphere and clients are always impressed when they walk in.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sneha Reddy</h6><small class="text-muted">Marketing Head – Urban Retail Co.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We commissioned full-wall murals for our hospital corridors and the results were beyond our expectations. The graphics are vibrant, installation was seamless, and they've genuinely improved the patient experience in our facility.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Seema Nayak</h6><small class="text-muted">Operations Manager – Horizon Hospitals</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">The branded feature wall Brand Signages created for our café entrance has become a favourite photo spot for customers. It perfectly captures our brand personality and the craftsmanship is outstanding. Highly recommended!</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Sandeep Gupta</h6><small class="text-muted">Founder – Café Bloom</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                            <div class="mb-4"><img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote" width="40" height="40"></div>
                            <p class="description">We needed elegant wall graphics that matched our corporate branding. Brand Signages impressed us with their quick turnaround, premium finish, and seamless coordination throughout the entire project.</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma" class="rounded-circle me-3" width="50" height="50">
                                <div><h6 class="name">Vikram Sharma</h6><small class="text-muted">Director – Nova Consulting Group</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title py-5">Wall Graphics FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">What exactly are wall graphics and how are they made?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Wall graphics are large-format prints produced on high-quality vinyl or fabric and applied directly onto wall surfaces. They are created using precision digital printing technology that reproduces sharp imagery, vivid colours, and fine text at any scale — from small accent panels to entire floor-to-ceiling murals.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can I get fully customized wall graphics for my office or store?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer <b>completely custom wall graphics</b> tailored to your brand identity, space dimensions, and design vision. You can incorporate your logo, brand colours, custom illustrations, motivational quotes, product imagery, or any other visual content. Our design team works closely with you from concept to final installation.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What surfaces can wall graphics be applied to?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Our wall graphics can be applied to most smooth and semi-smooth surfaces including painted walls, glass partitions, wooden panels, tiles, MDF boards, and ACP cladding. Our installation team assesses each surface beforehand to ensure proper adhesion and a perfectly finished result.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">What are the advantages of using wall graphics for branding?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Wall graphics are a cost-effective branding solution that transforms plain interior walls into powerful communication tools. They enhance employee morale, impress visitors, reinforce brand identity, and can be updated or replaced without any major renovation — making them a highly flexible and impactful long-term investment.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long do wall graphics last?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Depending on the material and environment, our indoor wall graphics typically last <b>3 to 7 years</b> without significant fading or peeling. We use premium cast vinyl and UV-resistant inks to ensure maximum longevity in both air-conditioned and naturally ventilated spaces.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can wall graphics be removed without damaging the wall?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer removable vinyl options specifically designed to peel off cleanly without leaving adhesive residue or damaging the underlying paint. This is ideal for leased premises, temporary campaigns, or spaces that require periodic creative refreshes.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How long does it take to produce and install wall graphics?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Standard production time ranges from <b>5 to 10 working days</b> depending on size, complexity, and quantity. Installation is typically completed within one to two days for most projects, scheduled at a time convenient for your business to minimize operational disruption.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Are wall graphics suitable for outdoor use?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, we offer outdoor-grade wall graphic materials made with UV-resistant, weatherproof vinyl that can withstand direct sunlight, humidity, and varying temperatures. These are ideal for exterior building facades, outdoor retail frontages, and covered outdoor areas.</p></div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do you provide wall graphic installation services across India?<i class="faq-icon fa-solid fa-chevron-down"></i></button>
            <div class="faq-answer"><p>Yes, Brand Signages provides wall graphic production and professional installation services <b>across Bangalore and all major cities in India</b>. Our trained installation teams ensure precise alignment, bubble-free application, and a perfectly finished result on every project.</p></div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.impact-slide');
        const dots = document.querySelectorAll('.dot');
        let current = 0;
        let slideInterval;

        function showImpactSlide(n) {
            slides[current].classList.remove('active');
            dots[current].classList.remove('active');
            current = (n + slides.length) % slides.length;
            slides[current].classList.add('active');
            dots[current].classList.add('active');
        }

        window.goToSlide = function(n) {
            showImpactSlide(n);
            resetInterval();
        }

        function nextImpactSlide() { showImpactSlide(current + 1); }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextImpactSlide, 5000);
        }

        resetInterval();
    });
</script>

@endsection