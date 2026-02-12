@extends('admin.layout.main')
@section('title', 'Menus | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Menus</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('menus.create') }}">Add Menu</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Parent</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($menus->currentPage() - 1) * $menus->perPage() + 1;
                                @endphp
                                @foreach ($menus as $menu)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $menu->title }}</td>
                                        <td>{{ $menu->parent->title ?? 'None' }}</td>
                                        <td>{{ $menu->url }}</td>
                                        <td>{{ $menu->menu_type }}</td>
                                        <td>{{ $menu->order }}</td>
                                        <td>
                                            <a href="{{ route('menus.edit', $menu->id) }}"><i
                                                    class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('menus.destroy', $menu->id) }}"
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
                        {{ $menus->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
