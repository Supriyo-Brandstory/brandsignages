@extends('frontend.layout.appLayout')

@section('content')
<style>
    .page-our-clients {
        color: #ffffff;
        min-height: 100vh;
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .page-our-clients h1, .page-our-clients h2, .page-our-clients h3 {
        color: #262626;
    }
    .page-our-clients p {
        color: #262626;
    }
    .client-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    .client-item {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        /* padding: 20px; */
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        height: 120px;
    }
    .client-item:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-5px);
        border-color: #E43D12;
    }
    .client-item img {
        max-width: 100%;
        max-height: 100%;
        filter: grayscale(100%) brightness(150%);
        transition: all 0.3s ease;
    }
    .client-item:hover img {
        filter: grayscale(0%) brightness(100%);
    }
    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }
    .section-title h1 {
        font-weight: 700;
        margin-bottom: 20px;
        background: linear-gradient(45deg, #9b2c10ff, #E43D12);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .section-title p {
        max-width: 700px;
        margin: 0 auto;
    }
</style>

<div class="page-our-clients">
    <div class="container">
        <div class="section-title">
            <h1>Our Trusted Clients</h1>
            <p>We've had the privilege of working with some of the most innovative brands across India, providing them with premium signage solutions that elevate their brand presence.</p>
        </div>

        <div class="client-grid">
            @for ($i = 1; $i <= 18; $i++)
                <div class="client-item">
                    <img src="{{ asset('frontend/Images/client-logo/client' . $i . '.webp') }}" alt="Client {{ $i }}">
                </div>
            @endfor
        </div>

        <div class="mt-5 text-center">
            <h2 class="mb-4">Ready to elevate your brand?</h2>
            <p class="mb-4">Join our growing list of satisfied partners and let's create something extraordinary together.</p>
            <a href="{{ route('contact_us') }}" class="contact-btn" style="text-decoration: none; padding: 15px 40px; font-size: 1.1rem;">Get a Free Quote</a>
        </div>
    </div>
</div>
@endsection
