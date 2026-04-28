@extends('admin.layout.main')
@section('title', 'Custom Pages | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Custom Pages</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <div class="mb-3">
                            <a class="btn btn-sm btn-outline-success" href="{{ route('custom-pages.create') }}">Add Custom Page</a>
                            <a class="btn btn-sm btn-outline-primary float-end" href="{{ route('custom-pages.manage-css') }}">Manage CSS</a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">CSS</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($pages->currentPage() - 1) * $pages->perPage() + 1;
                                @endphp
                                @foreach ($pages as $page)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->slug }}</td>
                                        <td>{{ $page->custom_css ?? 'None' }}</td>
                                        <td>
                                            <a href="{{ route('custom_page.show', $page->slug) }}" target="_blank" class="me-2"><i class="ri-eye-fill"></i></a>
                                            <a href="{{ route('custom-pages.edit', $page->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('custom-pages.destroy', $page->id) }}" class="d-inline-block pl-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm" data-toggle="tooltip" title='Delete'>
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
