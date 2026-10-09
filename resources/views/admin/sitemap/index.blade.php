@extends('admin.layout.main')
@section('title', 'Sitemap Management | ')
@section('content')
<section class="section dashboard">
    <!-- Stat Counter Cards -->
    <div class="row mb-3">
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Total URLs <span>| in Sitemap</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary-light text-primary" style="width: 48px; height: 48px; font-size: 24px; background: #e0f2fe; color: #0284c7;">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="mb-0 fw-bold" id="totalCounterCard">{{ $totalUrls }}</h4>
                            <span class="text-muted small pt-2">Active in sitemap.xml</span>
                            <div class="mt-1">
                                <a href="{{ url('sitemap.xml') }}" target="_blank" class="badge bg-primary text-white text-decoration-none">
                                    <i class="bi bi-box-arrow-up-right"></i> View Live Sitemap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Blog URLs <span>| in Sitemap</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-success" style="width: 48px; height: 48px; font-size: 24px; background: #dcfce7; color: #16a34a;">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="mb-0 fw-bold">{{ $blogUrls }}</h4>
                            <span class="text-muted small pt-2">Database Blogs: <strong class="text-dark">{{ $dbBlogs }}</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Pages & Static URLs <span>| in Sitemap</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-warning" style="width: 48px; height: 48px; font-size: 24px; background: #fef3c7; color: #d97706;">
                            <i class="bi bi-file-earmark-code"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="mb-0 fw-bold">{{ $pageUrls }}</h4>
                            <span class="text-muted small pt-2">Custom Pages: <strong class="text-dark">{{ $dbPages }}</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sitemap Edit & Sync Card -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-center mt-2 mb-3">
                        <div>
                            <h5 class="card-title mb-0 d-inline-block">
                                @if(!empty($sitemap))
                                    Edit Sitemap XML
                                @else
                                    Add New Sitemap
                                @endif
                            </h5>
                            <span class="badge bg-secondary ms-2" id="liveCounterBadge">{{ $totalUrls }} URLs detected</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="{{ url('sitemap.xml') }}" target="_blank" class="btn btn-outline-info btn-sm">
                                <i class="bi bi-box-arrow-up-right"></i> Open sitemap.xml
                            </a>
                            <form method="POST" action="{{ route('sitemap.sync') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to scan and auto-sync all blog posts and custom pages into the sitemap?')">
                                    <i class="bi bi-arrow-repeat"></i> Auto-Generate / Sync All Pages & Blogs
                                </button>
                            </form>
                        </div>
                    </div>

                    @if (Session::has('success'))
                        <div id="flash-message" class="alert alert-success alert-dismissible fade show">
                            <i class="bi bi-check-circle me-1"></i> {{ Session::get('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('sitemap.store') }}">
                        @csrf

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="sitemapTextarea" class="form-label fw-bold mb-0">Sitemap XML Content</label>
                                <small class="text-muted">Total &lt;loc&gt; entries: <span id="locCount" class="fw-bold text-primary">{{ $totalUrls }}</span></small>
                            </div>
                            <textarea name="sitemap" id="sitemapTextarea" class="form-control font-monospace" rows="18"
                                placeholder="Enter XML <url> tags here">{{ old('sitemap', $sitemap->sitemap ?? '') }}</textarea>
                            <small class="text-muted mt-1 d-block">
                                <i class="bi bi-info-circle"></i> Note: When a Blog or Custom Page is created, updated, or deleted, its URL is automatically managed in this list.
                            </small>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save"></i> Save Changes
                            </button>
                            <a href="{{ route('sitemap.index') }}" class="btn btn-secondary">Refresh</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const textarea = document.getElementById('sitemapTextarea');
        const locCount = document.getElementById('locCount');
        const liveCounterBadge = document.getElementById('liveCounterBadge');

        function updateCounter() {
            const val = textarea.value;
            const matches = val.match(/<loc>/gi);
            const count = matches ? matches.length : 0;
            if (locCount) locCount.textContent = count;
            if (liveCounterBadge) liveCounterBadge.textContent = count + ' URLs detected';
        }

        if (textarea) {
            textarea.addEventListener('input', updateCounter);
        }
    });
</script>
@endsection
