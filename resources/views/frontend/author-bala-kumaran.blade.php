@extends('frontend.layout.appLayout')
@section('content')
<style>
   
    .profile-card {
       
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .banner {
        background: #0077b5;
        height: 100px;
        position: relative;
    }

    .banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-info {
        padding: 20px;
        text-align: center;
    }

    .profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 5px solid white;
        position: relative;
        top: -50px;
        margin: 0 auto;
    }

    .profile-img img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .profile-name {
        margin-top: -40px;
    font-size: 24px;
    font-weight: bold;

    }

    .profile-location {
    font-size: 15px;
    color: #3e3e3e;
    font-weight: 500;
}

    .profile-stats {
        margin-top: 15px;
        display: flex;
        justify-content: space-around;
        color: gray;
        font-size: 0.9em;
    }

    .profile-actions {
        margin-top: 15px;
        display: flex;
        justify-content: space-around;
    }

    .btn {
        padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 500;
    }

    .btn-primary {
        background-color: #e43d12;
        color: white;
    }

    .btn-secondary {
        background-color: #f3f6f9;
        color: black;
        border: 1px solid gray;
    }

    @media (max-width: 480px) {
        .profile-location {
    font-size: 14px;
 
}
        .profile-info {
            padding: 10px;
        }

        .profile-actions {
            flex-direction: column;
            gap: 10px;
        }

        .btn {
            width: 100%;
        }
    }
</style>
<div class="container py-5">
<div class="profile-card">
    <div class="banner"></div>
    <div class="profile-info">
        <div class="profile-img">
            <img src="{{asset('frontend/Images/new/1737357404181.jpg')}}" alt="Manoj Kaliyannan">
        </div>
        <div class="profile-name">Manoj Kaliyannan</div>
        <div class="profile-location">Manoj Kaliyan is an experienced professional at Brand Signages, bringing his expertise in design, innovation, and customer-focused solutions to the company. With a deep understanding of the signage industry, Manoj plays a key role in helping businesses achieve their branding goals through high-quality, customized signage solutions.</div>
        
        <div class="profile-actions">
            <a href="https://in.linkedin.com/in/manojkaliyannan" style="text-decoration: unset" class="btn btn-primary">view profile</a>
            <a href="mailto:sales@brandsignages.com" class="btn btn-secondary"  style="text-decoration: unset">Message</a>
        </div>
    </div>
</div>
</div>

@endsection