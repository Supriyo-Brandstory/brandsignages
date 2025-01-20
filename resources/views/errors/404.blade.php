@extends('frontend.layout.appLayout')

@section('content')
<div class="error-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="error-container">
                    <div class="neon-404">404</div>
                    <div class="neon-text">PAGE NOT FOUND</div>
                    <a href="{{ route('index') }}" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection