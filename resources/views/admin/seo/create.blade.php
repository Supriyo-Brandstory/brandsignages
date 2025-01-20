@extends('admin.layout.main')
@section('title', 'Add SEO Entry | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Add New SEO Entry</h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('seo.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="page_url" class="form-label">Page URL</label>
                                <input type="text" name="page_url" id="page_url" class="form-control"
                                    value="{{ old('page_url') }}" placeholder="Enter page URL" required>
                            </div>

                            <div class="mb-3">
                                <label for="script" class="form-label">Script</label>
                                <textarea name="script" id="script" class="form-control" rows="5"
                                    placeholder="Enter the script here">{{ old('script') }}</textarea>
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
