@extends('admin.layout.main')
@section('title', 'Edit CSS | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit CSS: {{ $filename }}</h5>
                        <form action="{{ route('custom-pages.update-css', $filename) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div id="css-editor" style="height: 500px; width: 100%; border: 1px solid #ced4da; border-radius: 0.375rem; font-size: 14px;"></div>
                                <textarea name="content" id="content" class="form-control" style="display:none;">{{ $content }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update CSS</button>
                            <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-secondary">Cancel</a>
                        </form>
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
        editor.setValue(contentTextarea.value, -1);

        editor.getSession().on('change', function() {
            contentTextarea.value = editor.getValue();
        });
    });
</script>
@endsection
