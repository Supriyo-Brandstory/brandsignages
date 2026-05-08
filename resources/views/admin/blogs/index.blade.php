@extends('admin.layout.main')
@section('title', 'Blogs | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Blogs</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <form action="{{ route('blogs.index') }}" method="GET" class="d-flex">
                                    <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Search blogs..." value="{{ request('search') }}">
                                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                                    @if(request('search'))
                                        <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-secondary ms-2">Clear</a>
                                    @endif
                                </form>
                            </div>
                            <div class="col-md-6 text-end">
                                <a class="btn btn-sm btn-outline-success" href="{{ route('blogs.create') }}">Add Blog</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Reading Time</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($blogs->currentPage() - 1) * $blogs->perPage() + 1;
                                @endphp
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image"
                                                height="50px" width="50px">
                                        </td>
                                        <td>{{ $blog->topic }}</td>
                                        <td>{{ $blog->reding_time }} mins</td>
                                        <td>
                                            <a href="{{ route('blogs.edit', $blog->id) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}"
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
                        {{ $blogs->appends(['search' => request('search')])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
