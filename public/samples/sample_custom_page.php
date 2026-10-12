<!-- 
======================================================================
BRAND SIGNAGES - SAMPLE CUSTOM PAGE TEMPLATE (WITHOUT HEADER & FOOTER)
======================================================================
PAGE METADATA (Optional - auto-detected during Bulk Upload):
Title: Premium Sign Board Manufacturers in YourCity
Slug: sign-board-manufacturers-in-yourcity
CSS: 

IMPORTANT GUIDELINES:
1. DO NOT include <html>, <head>, <body>, <header>, or <footer> tags!
2. The website header and footer are automatically provided by the layout.
3. You can use standard HTML, <style> tags, Bootstrap classes, and Blade syntax like {{ asset(...) }}.
======================================================================
-->

<style>
    .hero-banner {
        padding: 70px 0;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), #1c1c1c;
        color: #ffffff;
        background-size: cover;
        background-position: center;
    }
    .hero-banner_title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
    }
    .custom-section-title {
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 15px;
    }
    .custom-card {
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 24px;
        height: 100%;
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .custom-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    .contact-btn {
        background-color: #E43D12;
        color: #ffffff;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 4px;
        text-decoration: none;
        display: inline-block;
        transition: background 0.3s ease;
    }
    .contact-btn:hover {
        background-color: #c9340e;
        color: #ffffff;
    }
</style>

<!-- Hero Banner Section -->
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-banner_title">Premium Sign Board <br>Manufacturers in YourCity</h1>
                <p class="lead mb-4">Capture attention and build brand authority with durable, bespoke signage solutions crafted for businesses across all industries.</p>
                <div>
                    <a href="{{ route('contact_us') }}" class="contact-btn">Get a Free Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About / Overview Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="custom-section-title">High-Impact Custom Signboards in YourCity</h2>
                <p class="text-secondary">
                    Signages are one of the most powerful brand touchpoints for your business. Whether you need eye-catching outdoor LED displays, corporate 3D acrylic letters, or subtle interior directional signs, we design and produce signboards that reflect your brand identity with clarity.
                </p>
                <p class="text-secondary">
                    Manufactured with weather-resistant materials and ultra-bright illumination, our signs are engineered to provide maximum visibility day and night while minimizing energy consumption.
                </p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="ri-checkbox-circle-fill text-danger me-2"></i> Custom laser-cut designs to exact specifications</li>
                    <li class="mb-2"><i class="ri-checkbox-circle-fill text-danger me-2"></i> Weatherproof, UV-resistant premium grade materials</li>
                    <li class="mb-2"><i class="ri-checkbox-circle-fill text-danger me-2"></i> Turnkey service from fabrication to on-site installation</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/Images/home/brandsignages-banner.webp') }}" alt="Custom Signage Showcase" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Services / Offerings Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="custom-section-title">Signage Products We Deliver</h2>
            <p class="text-muted">Explore our popular commercial signage categories</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="custom-card">
                    <h4 class="fw-bold mb-3">LED Display Boards</h4>
                    <p class="text-muted">High-lumen LED illuminated signages designed for storefronts, retail plazas, and exterior building branding.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <h4 class="fw-bold mb-3">3D Acrylic Letters</h4>
                    <p class="text-muted">Modern front-lit and back-lit 3D letters tailored for corporate reception areas and office lobbies.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <h4 class="fw-bold mb-3">Neon & Glow Signs</h4>
                    <p class="text-muted">Eye-catching custom flex-neon lighting crafted for restaurants, bars, retail stores, and creative studios.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blogs Section (Optional dynamic Blade loop) -->
@if (isset($blogs) && count($blogs) > 0)
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="custom-section-title">Latest Articles & Insights</h2>
        </div>
        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-md-4">
                    <div class="custom-card">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded mb-3" style="height: 180px; width: 100%; object-fit: cover;">
                        <h5 class="fw-bold">{{ Str::limit($blog->title, 55) }}</h5>
                        <p class="text-muted small">{{ Str::limit(strip_tags($blog->description), 90) }}</p>
                        <a href="{{ url('/blogs/' . $blog->slug) }}" class="text-danger fw-semibold text-decoration-none">Read More &rarr;</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action Banner -->
<section class="py-5 text-center text-white" style="background-color: #121212;">
    <div class="container">
        <h2 class="mb-3 text-white">Need a Signboard Tailored to Your Brand?</h2>
        <p class="lead mb-4 text-white-50">Get in touch with our signage design consultants for an on-site survey and quotation.</p>
        <a href="{{ route('contact_us') }}" class="contact-btn">Talk to Our Team</a>
    </div>
</section>
