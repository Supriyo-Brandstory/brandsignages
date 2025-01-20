@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/neonsign-bangalore1.svg')}}" alt="Prohibition Signs for Workplace Safety">
                <div class="carousel-caption-custom">
                    <h1>Office Desk Signs for Your Office</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection