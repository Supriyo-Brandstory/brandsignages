@extends('admin.layout.main')
@section('title', 'SEO Management | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All SEO Entries</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <form action="{{ route('seo.index') }}" method="GET" class="d-flex">
                                    <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Search SEO entries..." value="{{ request('search') }}">
                                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                                    @if(request('search'))
                                        <a href="{{ route('seo.index') }}" class="btn btn-sm btn-secondary ms-2">Clear</a>
                                    @endif
                                </form>
                            </div>
                            <div class="col-md-6 text-end">
                                <a class="btn btn-sm btn-outline-success" href="{{ route('seo.create') }}">Add SEO Entry</a>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Page URL</th>
                                    <th scope="col">Script</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($seos->currentPage() - 1) * $seos->perPage() + 1;
                                @endphp
                                @foreach ($seos as $seo)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $seo->page_url }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($seo->script, 50) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($seo->created_at)->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <a href="{{ route('seo.edit', $seo->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('seo.destroy', $seo->id) }}"
                                                class="d-inline-block pl-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm"
                                                    data-toggle="tooltip" title='Delete'>
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $seos->appends(['search' => request('search')])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
