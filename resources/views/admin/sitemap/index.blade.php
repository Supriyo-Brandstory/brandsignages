@extends('admin.layout.main')
@section('title', 'Add SEO Entry | ')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        @if(!empty($sitemap))
                            Edit Sitemap Entry
                        @else
                            Add New Sitemap Entry
                        @endif
                        </h5>
                    @if (Session::has('success'))
                    <p id="flash-message" class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('sitemap.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="script" class="form-label">Sitemap</label>
                            <textarea name="sitemap" id="script" class="form-control" rows="5"
                                placeholder="Enter the script here">{{ old('sitemap', $sitemap->sitemap ?? '') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('seo.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
