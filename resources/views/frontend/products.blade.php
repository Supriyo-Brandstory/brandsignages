@extends('frontend.layout.appLayout')

@section('content')

<section class="hero-banner"
    style="background-image: url('{{asset('frontend/Images/new/service-banner.webp')}}');">
    <div class="container">
        <h1 class="hero-banner_title">Signage Design Services</h1>
    </div>
</section>

<div class="container new_servicespage-wrapper py-5">

    <h2 class="text-center mb-5 new_servicespage-title">
        Delivering Signages To Help You <br> Grow Your Business
    </h2>

    <h3 class="category-title">Popular Signages</h3>
    <div class="row g-4">

        @php
        $products = [
            [
                'title' => 'Metal & Steel Signages',
                'img' => 'service-10.webp',
                'link' => 'https://brandsignages.com/metal-signages'
            ],
            [
                'title' => 'LED Sign Board',
                'img' => 'service-9.webp',
                'link' => 'https://brandsignages.com/led-acrylic-3d-glow-sign-board'
            ],
            [
                'title' => 'Outdoor Signages',
                'img' => 'service-8.webp',
                'link' => 'https://brandsignages.com/outdoor-signages'
            ],
            [
                'title' => 'Interior Signages',
                'img' => 'service-7.webp',
                'link' => 'https://brandsignages.com/arcylic-signages'
            ],
            [
                'title' => 'Digital Signages',
                'img' => 'service-6.webp',
                'link' => 'https://brandsignages.com/digital-signages'
            ],
            [
                'title' => 'Event & Tradeshow Sign',
                'img' => 'service-4.webp',
                'link' => '#'
            ],
            [
                'title' => 'Retractable Banners',
                'img' => 'service-3.webp',
                'link' => '#'
            ],
        ];
        @endphp

        @foreach($products as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <a href="{{ $item['link'] }}" class="product-link">
                <div class="product-card">
                    <img src="{{asset('frontend/Images/new/'.$item['img'])}}" alt="{{ $item['title'] }}">
                    <div class="product-info">
                        <p class="product-title">{{ $item['title'] }}</p>
                        <span class="product-cta">View Details</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

    {{-- ================= CATEGORY 2 ================= --}}
    <h3 class="category-title mt-5">Signage Making</h3>
    <div class="row g-4">

        @php
        $products2 = [
            [
                'title' => 'Neon Sign Boards',
                'img' => 'neon-5.webp',
                'link' => route('neon_signages')
            ],
            [
                'title' => 'Acrylic Signages',
                'img' => 'acrylic-c2.jpeg',
                'link' => route('arcylic_signages')
            ],
            [
                'title' => 'Metal Signages',
                'img' => 'metal-stainless-steel-chennai-1.webp',
                'link' => route('metal_signages')
            ],
            [
                'title' => 'Digital Signages',
                'img' => 'digital-signages-manufacturer-in-mumbai-1.webp',
                'link' => route('digital_signages')
            ],
            [
                'title' => 'LED Sign Boards',
                'img' => 'led-sign-2.webp',
                'link' => route('led_acrylic_glow_sign')
            ],
        ];
        @endphp

        @foreach($products2 as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <a href="{{ $item['link'] }}" class="product-link">
                <div class="product-card">
                    <img src="{{asset('frontend/Images/new/'.$item['img'])}}" alt="{{ $item['title'] }}">
                    <div class="product-info">
                        <p class="product-title">{{ $item['title'] }}</p>
                        <span class="product-cta">View Details</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

    {{-- ================= CATEGORY 3 ================= --}}
    <h3 class="category-title mt-5">Indoor and Outdoor Signages</h3>
    <div class="row g-4">

        @php
        $products3 = [
            [
                'title' => 'Name Board Signages',
                'img' => 'name-palets-2.webp',
                'link' => route('nameplate_signages')
            ],
            [
                'title' => 'Outdoor Signages',
                'img' => 'signage-in-chennai-1.webp',
                'link' => route('outdoor_signages')
            ],
            [
                'title' => 'Indoor Signages',
                'img' => 'signage-2.webp',
                'link' => route('indoor_signages')
            ],
            [
                'title' => 'Lollipop Pylon Signages',
                'img' => 'lolipop-pylon-1.webp',
                'link' => route('lollipop_pylon_signage')
            ],
            [
                'title' => 'Room Number Signs',
                'img' => 'room-number-1.webp',
                'link' => route('room_name_plates')
            ],
            [
                'title' => 'Door Front Signages',
                'img' => 'signage-21.webp',
                'link' => route('door_signages')
            ],
            [
                'title' => 'House Number Signs',
                'img' => 'name-palets-1.webp',
                'link' => route('house_number_signages')
            ],
        ];
        @endphp

        @foreach($products3 as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <a href="{{ $item['link'] }}" class="product-link">
                <div class="product-card">
                    <img src="{{asset('frontend/Images/new/'.$item['img'])}}" alt="{{ $item['title'] }}">
                    <div class="product-info">
                        <p class="product-title">{{ $item['title'] }}</p>
                        <span class="product-cta">View Details</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

    {{-- ================= CATEGORY 4 ================= --}}
    <h3 class="category-title mt-5">Safety and Directional</h3>
    <div class="row g-4">

        @php
        $products4 = [
            [
                'title' => 'Safety Signages',
                'img' => 'safety-1.webp',
                'link' => route('safety_signages')
            ],
            [
                'title' => 'Directional Signages',
                'img' => 'direction-sign-1.webp',
                'link' => route('directional_signages')
            ],
            [
                'title' => 'Construction Safety Signs',
                'img' => 'construction-fire-safety-signages-in-mumbai-1.webp',
                'link' => route('construction_safety_signages')
            ],
            [
                'title' => 'Fire Safety Signages',
                'img' => 'fireextinguishersignage.jpg',
                'link' => route('fire_safety_signages')
            ],
            [
                'title' => 'Prohibitory Signages',
                'img' => 'Prohibitory-3.webp',
                'link' => route('prohibitory_signages')
            ],
            [
                'title' => 'Restroom Signages',
                'img' => 'restroom-1.webp',
                'link' => route('restroom_signages')
            ],
        ];
        @endphp

        @foreach($products4 as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <a href="{{ $item['link'] }}" class="product-link">
                <div class="product-card">
                    <img src="{{asset('frontend/Images/new/'.$item['img'])}}" alt="{{ $item['title'] }}">
                    <div class="product-info">
                        <p class="product-title">{{ $item['title'] }}</p>
                        <span class="product-cta">View Details</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

{{-- ================= STYLES ================= --}}
<style>

.new_servicespage-title {
    /* font-size: 1.8rem; */
    font-weight: 600;
    color: #111;
}

.category-title {
    /* font-size: 1.4rem; */
    font-weight: 600;
    margin-bottom: 20px;
    color: #111;
}

/* LINK */
.product-link {
    text-decoration: none;
    display: block;
    cursor: pointer;
}

/* CARD */
.product-card {
    position: relative;
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #eee;
    transition: all 0.35s ease;
    cursor: pointer;
}

.product-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 16px 40px rgba(0,0,0,0.18);
}

.product-card:active {
    transform: scale(0.98);
}

/* IMAGE */
.product-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.product-card:hover img {
    transform: scale(1.08);
}

/* INFO OVERLAY */
.product-info {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;

    background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0.2));
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);

    max-height: 80px;
    overflow: hidden;

    transition: max-height 0.5s ease;

    pointer-events: none; /* keeps full card clickable */
}

.product-card:hover .product-info {
    max-height: 100%;
}

/* TITLE */
.product-title {
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 6px;
    transition: all 0.3s ease;
}

.product-card:hover .product-title {
    font-size: 20px;
}

/* CTA (View Details) */
.product-cta {
    font-size: 13px;
    color: #fff;
    font-weight: 500;
    text-align: center;
    background: #e33c12;
    padding: 6px 12px;
    border-radius: 5px;
    display: inline-block;

    opacity: 0;
    transform: translateY(12px);
    transition: all 0.3s ease;
}

.product-card:hover .product-cta {
    opacity: 1;
    transform: translateY(0);
}
</style>

@endsection