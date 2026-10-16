@extends('admin.layout.main')
@section('title', 'Manage CSS | ')
@section('content')
<div class="pagetitle d-flex justify-content-between align-items-center mb-3">
    <div>
        <h1>Manage CSS Files</h1>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('custom-pages.index') }}">Custom Pages</a></li>
                <li class="breadcrumb-item active">Manage CSS</li>
            </ol>
        </nav>
    </div>
    <a href="{{ route('custom-pages.index') }}" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Back to Custom Pages
    </a>
</div>

@if (Session::has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="flash-message">
        <i class="bi bi-check-circle me-1"></i>
        {{ Session::get('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle me-1"></i>
        <ul class="mb-0 ps-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<section class="section">
    <div class="row">
        <!-- Create CSS File Card -->
        <div class="col-lg-5 col-12 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white py-3 border-bottom">
                    <h5 class="card-title mb-0 p-0 fs-6 text-primary">
                        <i class="bi bi-plus-circle me-1"></i> Create New CSS File
                    </h5>
                </div>
                <div class="card-body pt-3">
                    <form action="{{ route('custom-pages.create-css') }}" method="POST" id="create-css-form">
                        @csrf
                        <div class="mb-3">
                            <label for="filename" class="form-label fw-semibold">Filename</label>
                            <div class="input-group">
                                <input type="text" name="filename" id="filename" class="form-control" required placeholder="e.g. custom-banner" value="{{ old('filename') }}">
                                <span class="input-group-text bg-light text-muted">.css</span>
                            </div>
                            <small class="text-muted">Enter filename without the .css extension.</small>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="content" class="form-label fw-semibold mb-0">CSS Code</label>
                                <span class="badge bg-light text-secondary border">CSS</span>
                            </div>
                            <div id="css-editor" style="height: 380px; width: 100%; border: 1px solid #dee2e6; border-radius: 0.375rem; font-size: 14px;"></div>
                            <textarea name="content" id="content" class="form-control d-none">{{ old('content') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-file-earmark-plus me-1"></i> Save CSS File
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Existing CSS Files Card -->
        <div class="col-lg-7 col-12 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 p-0 fs-6 text-primary">
                        <i class="bi bi-filetype-css me-1"></i> Existing CSS Files
                    </h5>
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill">
                        {{ count($cssFiles) }} {{ Str::plural('File', count($cssFiles)) }}
                    </span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="ps-3" style="width: 50px;">#</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col" class="text-end pe-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($cssFiles as $index => $file)
                                    <tr>
                                        <td class="ps-3 text-muted">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-file-code text-primary fs-5 me-2"></i>
                                                <span class="fw-semibold text-dark">{{ $file }}</span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-3">
                                            <a href="{{ route('custom-pages.edit-css', $file) }}" class="btn btn-sm btn-outline-primary me-1" title="Edit CSS">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('custom-pages.destroy-css', $file) }}" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-name="{{ $file }}" title="Delete CSS">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-5 text-muted">
                                            <i class="bi bi-file-earmark-code fs-1 d-block mb-2 text-secondary"></i>
                                            <p class="mb-0">No CSS files created yet.</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
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
            if (contentTextarea && contentTextarea.value) {
                editor.setValue(contentTextarea.value, -1);
            }

            editor.getSession().on('change', function() {
                if (contentTextarea) {
                    contentTextarea.value = editor.getValue();
                }
            });

            const form = document.getElementById('create-css-form');
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
