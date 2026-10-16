@extends('admin.layout.main')
@section('title', 'Edit CSS | ')
@section('content')
<div class="pagetitle d-flex justify-content-between align-items-center mb-3">
    <div>
        <h1>Edit CSS File</h1>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('custom-pages.index') }}">Custom Pages</a></li>
                <li class="breadcrumb-item"><a href="{{ route('custom-pages.manage-css') }}">Manage CSS</a></li>
                <li class="breadcrumb-item active">{{ $filename }}</li>
            </ol>
        </nav>
    </div>
    <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Back to Manage CSS
    </a>
</div>

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 p-0 fs-6 text-primary">
                        <i class="bi bi-pencil-square me-1"></i> Editing File: <span class="badge bg-light text-primary border">{{ $filename }}</span>
                    </h5>
                    <span class="badge bg-light text-secondary border">CSS</span>
                </div>
                <div class="card-body pt-3">
                    <form action="{{ route('custom-pages.update-css', $filename) }}" method="POST" id="edit-css-form">
                        @csrf
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="css-editor" class="form-label fw-semibold mb-0">CSS Code</label>
                            </div>
                            <div id="css-editor" style="height: 520px; width: 100%; border: 1px solid #dee2e6; border-radius: 0.375rem; font-size: 14px;"></div>
                            <textarea name="content" id="content" class="form-control d-none">{{ $content }}</textarea>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> Update CSS
                            </button>
                            <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-outline-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ext-language_tools.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof ace !== 'undefined') {
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
            if (contentTextarea) {
                editor.setValue(contentTextarea.value, -1);
                editor.getSession().on('change', function() {
                    contentTextarea.value = editor.getValue();
                });
            }

            const form = document.getElementById('edit-css-form');
            if (form) {
                form.addEventListener('submit', function() {
                    if (contentTextarea) {
                        contentTextarea.value = editor.getValue();
                    }
                });
            }
        }
    });
</script>
@endsection
