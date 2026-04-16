@extends('admin.layout.main')
@section('title', 'Manage CSS | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage CSS Files</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        
                        <div class="row">
                            <div class="col-md-4">
                                <h6>Create New CSS File</h6>
                                <form action="{{ route('custom-pages.create-css') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="filename" class="form-label">Filename (without .css)</label>
                                        <input type="text" name="filename" id="filename" class="form-control" required placeholder="e.g. style">
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">CSS Content</label>
                                        <div id="css-editor" style="height: 300px; width: 100%; border: 1px solid #ced4da; border-radius: 0.375rem; font-size: 14px;"></div>
                                        <textarea name="content" id="content" class="form-control" style="display:none;" placeholder="body { ... }"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">Create CSS</button>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <h6>Existing CSS Files</h6>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Filename</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cssFiles as $file)
                                            <tr>
                                                <td>{{ $file }}</td>
                                                <td>
                                                    <a href="{{ route('custom-pages.edit-css', $file) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <form method="POST" action="{{ route('custom-pages.destroy-css', $file) }}" class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger show_confirm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ext-language_tools.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ace.require("ace/ext/language_tools");
        const editor = ace.edit("css-editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/css");
        
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            showPrintMargin: false,
            fontSize: "14px"
        });

        const contentTextarea = document.getElementById('content');
        editor.getSession().on('change', function() {
            contentTextarea.value = editor.getValue();
        });
    });
</script>
@endsection
