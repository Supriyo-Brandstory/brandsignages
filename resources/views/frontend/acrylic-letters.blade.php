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
                    <img src="{{ asset('frontend/Images/led-sign-board/acrylic-led-letters-1.webp') }}" class="card-img-topx" alt="3D Acrylic Letter: Non-lit">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">3D Acrylic Letter: Non-lit</h5>

                        <!-- Price -->
                        <p class="mb-1 fw-bold text-black">₹1,500 – ₹3,500</p>

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
                    <img src="{{ asset('frontend/Images/led-sign-board/acrylic-led-letters-2.webp') }}" class="card-img-topx" alt="3D Acrylic Letter with ACP">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">3D Acrylic Letter with ACP</h5>

                        <p class="mb-1 fw-bold text-black">₹2,000 – ₹4,500</p>

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
                    <img src="{{ asset('frontend/Images/led-sign-board/acrylic-led-letters-1.webp') }}" class="card-img-topx" alt="3D Acrylic LED Letter">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">3D Acrylic LED Letter</h5>

                        <p class="mb-1 fw-bold text-black">₹3,500 – ₹7,500</p>

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
                    <img src="{{ asset('frontend/Images/led-sign-board/acrylic-led-letters-2.webp') }}" class="card-img-topx" alt="Acrylic LED Letter">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Letter</h5>

                        <p class="mb-1 fw-bold text-black">₹2,500 – ₹6,000</p>

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


@endsection