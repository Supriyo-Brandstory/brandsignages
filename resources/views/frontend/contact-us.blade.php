@extends('frontend.layout.appLayout')
@section('content')
<style>
    .contact-container {
     
        padding: 40px 100px;
        background: #f8f9fa;
    }
    .contact-info {
    padding: 0 30px;
    border-radius: 8px;
}
    
h2.card-heading {
    text-align: left;
    margin-bottom: 20px;
}
i.fa {
    color: #e43d12;
    margin-right: 5px;
}
.ainfo{
    text-decoration: unset;
    color: black;
}
@media (max-width: 768px) {
    .contact-container {
     
     padding: 40px 20px;
     background: #f8f9fa;
 }
 @media (max-width: 576px) {
    .carousel-item {
        height: auto;
    }
}
}
</style>
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/contact-1.webp')}}" alt="Get in Touch with Brand Signages – Your Trusted Sign Board  Manufacturer!s" class="img-fluid">
               
            </div>
        </div>
    </div>
</section>
<div class="contact-container">
    <div class="row">
        <!-- Contact Info -->
        <div class="col-md-6 contact-info">
            <h2 class="card-heading">Get in Touch with Brand Signages</h2>
            <p class="brand-description">Contact Brand Signages, India's leading sign board manufacturer, for high-quality custom acrylic, neon, metal, LED sign boards and digital signage solutions. Let’s bring your brand to life!</p>
            <div class="process-card">
                <h3>Contact Info</h3>
               <p> <a href="mailto:sales@brandsignages.com" class="ainfo"><i class="fa fa-envelope" aria-hidden="true"></i> sales@brandsignages.com </a></p>
               <p> <a href="tel:+91 8006606080" class="ainfo"><i class="fa fa-phone" aria-hidden="true"></i> +91 8006606080 </a></p>
               <p> <a href="https://g.co/kgs/6RzVfm1" class="ainfo">

                <span>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                </span> 
                <span>Brand Signages, 5th Floor, BrandStory
                    Ventures, Surya Chambers, 34, Domlur I
                    Stage, Amarjyoti Layout, Domlur,
                    Bengaluru, Karnataka 560071
                </span>
                </a>
            </p>
            </div>
           
        </div>
        
        <!-- Contact Form -->
        <div class="col-md-6">
        
        
     <form class="form-contact" action="{{ route('contact.store') }}" method="POST">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    @csrf
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="first_name" placeholder="First Name*" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name*" required>
        </div>
    </div>
    <input type="email" class="form-control" name="email" placeholder="Email*" required>
    <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number*" required>
    <textarea class="form-control" name="message" rows="3" placeholder="Your message..." required></textarea>
    
    <!-- CAPTCHA Image -->
    <div class="form-group mt-3">
        <label for="captcha">Enter the CAPTCHA code:</label>
        <div class="d-flex align-items-center mb-2 gap-3">
            <img src="{{ captcha_src('flat') }}" id="captcha-image" class="img-thumbnail mr-2" style="cursor: pointer; width: 40%;" onclick="refreshCaptcha()">
            <button type="button " class="btn btn-outline-secondary" onclick="refreshCaptcha()">
                <i class="fas fa-sync-alt"></i> Refresh
            </button>
        </div>
         @if($errors->has('captcha'))
            <small class="text-danger d-block my-2">{{ $errors->first('captcha') }}</small>
        @endif
        <input type="text" class="form-control" name="captcha" placeholder="Enter CAPTCHA" required>
       
    </div>
    
    <button type="submit" class="contact-btn w-100">Send Message</button>
</form>

<script>
function refreshCaptcha() {
    // Add timestamp to prevent caching
    var timestamp = Date.now();
    document.getElementById('captcha-image').src = '{{ captcha_src() }}?' + timestamp;
    
    // Alternative using fetch API if you prefer
    /*
    fetch('{{ route("captcha.refresh") }}')
        .then(response => response.json())
        .then(data => {
            document.getElementById('captcha-image').src = data.captcha;
        });
    */
}
</script>

        
        </div>
    </div>
</div>

@endsection