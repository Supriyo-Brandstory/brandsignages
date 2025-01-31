@extends('frontend.layout.appLayout')
@section('content')
<style>
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        transition: all 0.3s ease-in-out;
    }

   

    .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .custom-btn {
        background-color: #E43D12;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #c03410;
    }

    .page-link {
        color: #e43d12 !important;
    }

    .active>.page-link,
    .page-link.active {
        background-color: #e43d12 !important;
        border-color: #e43d12 !important;
        color: #fff !important;
    }
.nav-l{
    background: #fcece7;
    border-radius: 5px;
    padding: 1px;
    
}
.nav-l a.nav-link {
    padding: 4px 0px;
    font-size: 17px;
    text-transform: capitalize;
}
.con-fix{
    padding: 30px 37px 30px !important;
}
.con-fix2{
    padding: 0px 37px 30px !important;
}
.row {
    margin: 0;
}

@media (min-width: 992px) {
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
        gap: 10px;
    }
}
    @media (max-width: 767px) {
        .custom-btn {
            padding: 8px 16px;
            font-size: 14px;
        }

        .col-4 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 15px;
        }
    }
    @media (max-width: 576px) {
    .carousel-caption-custom.xx {
        padding: 15px;
        bottom: 60%;
   
    }
    .con-fix2{
    padding: 0px 10px 30px !important;
}
    
}
</style>

{{-- Carousel Section --}}
@if(isset($latestBlogs) && count($latestBlogs) > 0)
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($latestBlogs as $index => $blog)
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="{{ $index }}" 
                class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($latestBlogs as $key => $blog)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' .$blog->image ?? 'default-image.jpg') }}" alt="{{ $blog->title }}">
                <div class="carousel-caption-custom">
                    <h2 class="mb-4">{{ $blog->title }}</h2>
                    <a href="{{ route('blogsVaritaion', $blog->slug) }}" class="custom-btn">Know More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@else
<section class="carousel-section" style="background-image: url('{{ asset('frontend/Images/categorybanner.jpg') }}');
background-size: cover;
background-position: center;
height: 400px;">
    <div class="carousel-caption-custom xx">
        @if(request('search'))
        <h2 style="text-transform: uppercase;">Search Results</h2>
   
        @elseif(isset($category))
        <h2 style="text-transform: uppercase;">{{$category->name}}</h2>
        <p style="text-transform: capitalize;">
            {{$category->description}}
        </p>
        @else
        <h2 style="text-transform: uppercase;">Coming Soon</h2>
        <p style="text-transform: capitalize;">
            We are working on this section, please check back later.
        @endif
    </div>
</section>
@endif

{{-- Navigation Section --}}
@if(isset($categories) && count($categories) > 0)
<section class="px-1 d-none d-lg-block">
    <nav class="navbar navbar-expand-lg navbar-light con-fix">
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-l">
                    <a class="nav-link active" aria-current="page" href="{{ route('blogs') }}">All</a>
                </li>

                @foreach ($categories as $category)
                @if ($category->subCategories->count())
                <li class="nav-item dropdown nav-l">
                    <a class="nav-link dropdown-toggle" href="{{ route('blogsVaritaion', $category->slug) }}">
                        {{ $category->name }} +
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($category->subCategories as $subCategory)
                        <li><a class="dropdown-item" href="{{ route('blogsVaritaion', $subCategory->slug) }}">{{ $subCategory->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li class="nav-item nav-l">
                    <a class="nav-link" href="{{ route('blogsVaritaion', $category->slug) }}">{{ $category->name }}</a>
                </li>
                @endif
                @endforeach
            </ul>

            <form method="GET" action="{{ route('blogs') }}" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="{{ request()->input('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
            
        </div>
    </nav>
</section>


@endif

{{-- Blogs Section --}}
@if(isset($allBlogs) && count($allBlogs) > 0)
<section class="px-1">
    <form method="GET" action="{{ route('blogs') }}" class="mb-4 d-block d-lg-none px-2 mt-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="{{ request()->input('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    <div class="row con-fix2">
        @foreach ($allBlogs as $blog)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">{{ strtoupper($blog->topic) }}</span>
                            <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                        </div>
                        <h5 class="blog-card-title">{{ $blog->title }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
        {{ $allBlogs->links() }}
    
</section>
@endif

{{-- If No Data, Show "Coming Soon" Section --}}


<script>
    document.querySelectorAll('.nav-item.dropdown').forEach(item => {
        item.addEventListener('mouseover', () => item.querySelector('.dropdown-menu')?.classList.add('show'));
        item.addEventListener('mouseleave', () => item.querySelector('.dropdown-menu')?.classList.remove('show'));
    });
</script>
@endsection
