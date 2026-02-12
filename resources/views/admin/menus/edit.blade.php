@extends('admin.layout.main')
@section('title', 'Edit Menu | ')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Menu Item</h5>
                        <form action="{{ route('menus.update', $menu->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" value="{{ $menu->title }}"
                                        required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="url" class="col-sm-2 col-form-label">URL / Path</label>
                                <div class="col-sm-10">
                                    <input type="text" name="url" class="form-control" value="{{ $menu->url }}">
                                    <small class="text-muted">Use 'javascript:void(0)' for parent items with megamenu, or
                                        use full URL/path.</small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="menu_type" class="col-sm-2 col-form-label">Menu Type</label>
                                <div class="col-sm-10">
                                    <select name="menu_type" class="form-control">
                                        <option value="standard" {{ $menu->menu_type == 'standard' ? 'selected' : '' }}>
                                            Standard</option>
                                        <option value="mega-parent"
                                            {{ $menu->menu_type == 'mega-parent' ? 'selected' : '' }}>Mega Parent</option>
                                        <option value="mega-category"
                                            {{ $menu->menu_type == 'mega-category' ? 'selected' : '' }}>Mega Category
                                        </option>
                                        <option value="mega-item" {{ $menu->menu_type == 'mega-item' ? 'selected' : '' }}>
                                            Mega Item</option>
                                        <option value="mega-sub-item"
                                            {{ $menu->menu_type == 'mega-sub-item' ? 'selected' : '' }}>Mega Sub Item
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label">Icon (FontAwesome)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="icon" class="form-control" value="{{ $menu->icon }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tag" class="col-sm-2 col-form-label">Tag (e.g. KARNATAKA)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tag" class="form-control" value="{{ $menu->tag }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('menus.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
