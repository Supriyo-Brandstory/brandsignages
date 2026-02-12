@extends('admin.layout.main')
@section('title', 'Create Menu | ')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Menu Item</h5>
                        <form action="{{ route('menus.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="url" class="col-sm-2 col-form-label">URL / Path</label>
                                <div class="col-sm-10">
                                    <input type="text" name="url" class="form-control">
                                    <small class="text-muted">Use 'javascript:void(0)' for parent items with megamenu, or
                                        use full URL/path.</small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="menu_type" class="col-sm-2 col-form-label">Menu Type</label>
                                <div class="col-sm-10">
                                    <select name="menu_type" class="form-control">
                                        <option value="standard">Standard</option>
                                        <option value="mega-parent">Mega Parent</option>
                                        <option value="mega-category">Mega Category</option>
                                        <option value="mega-item">Mega Item</option>
                                        <option value="mega-sub-item">Mega Sub Item</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label">Icon (FontAwesome)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="icon" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tag" class="col-sm-2 col-form-label">Tag (e.g. KARNATAKA)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tag" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
