@extends('frontend.layout.appLayout')
@section('content')
<style>
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        transition: all 0.3s ease-in-out;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.02);
    }

    .card-img img {
        width: 100%;
        height: 235px;
        object-fit: cover;
    }

    .card-body {
        padding: 15px;
    }

    .badge {
        background-color: #E43D12;
        color: white;
        font-size: 12px;
        border-radius: 4px;
        padding: 6px 12px;
    }

    .time {
        font-size: 12px;
        color: #6c757d;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0;
        color: #212121;
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
    padding: 30px 37px 0px !important;
}

@media (min-width: 992px) {
    .navbar-expand-lg .navbar-nav {
        flex-direction: row;
        gap: 10px;
    }
}
    @media (max-width: 767px) {
        .card-title {
            font-size: 16px;
        }

        .badge {
            font-size: 10px;
        }

        .time {
            font-size: 10px;
        }

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
</style>

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ([0, 1, 2] as $index)
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="{{ $index }}" 
                    class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ([
                ['image' => 'frontend/Images/banner1.webp', 'text' => 'Expert Signage Manufacturers for Quality Sign Boards'],
                ['image' => 'frontend/Images/Banner.webp', 'text' => 'High-Quality Signage by the #1 Sign Board Makers in India'],
                ['image' => 'frontend/Images/banner3.webp', 'text' => 'India\'s Leading Sign Board Makers for Branded Signage Solutions']
            ] as $key => $slide)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['text'] }}">
                    <div class="carousel-caption-custom">
                        <h2>{{ $slide['text'] }}</h2>
                        <button class="custom-btn">Know More</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="px-1">
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

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn contact-btn" type="submit">Search</button>
            </form>
        </div>
    </nav>
</section>

<section class="px-1">
    <div class="row con-fix ">
        @foreach ($allBlogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">{{ strtoupper($blog->topic) }}</span>
                                <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                            </div>
                            <h5 class="card-title">{{ $blog->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        <div class="row py-5 px-3">
            {{ $allBlogs->links() }}
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.nav-item.dropdown').forEach(item => {
        item.addEventListener('mouseover', () => item.querySelector('.dropdown-menu')?.classList.add('show'));
        item.addEventListener('mouseleave', () => item.querySelector('.dropdown-menu')?.classList.remove('show'));
    });
</script>
@endsection
