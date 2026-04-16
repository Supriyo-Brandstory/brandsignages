@extends('admin.layout.main')
@section('title', 'Create Custom Page | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Custom Page</h5>
                        <form action="{{ route('custom-pages.store') }}" method="POST" id="custom-page-form">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" required onkeyup="generateSlug(this.value)">
                                </div>
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label d-flex justify-content-between">
                                    <span>HTML Body (Code View)</span>
                                    <button type="button" class="btn btn-sm btn-info" id="btn-visual-preview">
                                        <i class="bi bi-eye"></i> Visual Edit & Preview Mode
                                    </button>
                                </label>
                                <div id="code-editor" style="height: 500px; width: 100%; border: 1px solid #ced4da; border-radius: 0.375rem; font-size: 14px;"></div>
                                <textarea name="content" id="content" class="form-control" style="display:none;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="custom_css" class="form-label">Choose CSS</label>
                                <div class="input-group">
                                    <select name="custom_css" id="custom_css" class="form-control">
                                        <option value="">Select CSS</option>
                                        @foreach($cssFiles as $file)
                                            <option value="{{ $file }}">{{ $file }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-outline-secondary">Manage CSS</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="main-submit-btn">Create Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visual Editor Full Screen Container -->
    <div id="visual-preview-container" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:white; z-index:9999; overflow:hidden;">
        <iframe name="visual-editor-iframe" id="visual-editor-iframe" style="width:100%; height:100%; border:none;"></iframe>
        
        <button type="button" class="btn btn-success" id="btn-save-preview" style="position:fixed; bottom:30px; right:30px; border-radius: 50px; padding: 15px 30px; box-shadow: 0 4px 10px rgba(0,0,0,0.4); z-index:10000; font-weight:bold; display:none;">
            <i class="bi bi-save"></i> Save Changes
        </button>
        <button type="button" class="btn btn-danger" id="btn-close-preview" style="position:fixed; bottom:30px; right:200px; border-radius: 50px; padding: 15px 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.4); z-index:10000; font-weight:bold;">
            <i class="bi bi-x-circle"></i> Cancel
        </button>

        <form id="preview-form" target="visual-editor-iframe" method="POST" action="{{ route('custom-pages.visual-editor') }}" style="display:none;">
            @csrf
            <input type="hidden" name="content" id="preview-content">
            <input type="hidden" name="custom_css" id="preview-css">
        </form>
    </div>

    <script>
        function generateSlug(title) {
            const slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ext-language_tools.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Ace Editor
        ace.require("ace/ext/language_tools");
        const editor = ace.edit("code-editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/html");
        
        // Editor Options
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            showPrintMargin: false,
            fontSize: "14px"
        });

        const contentTextarea = document.getElementById('content');
        
        // Load initial content if any (though this is create page)
        editor.setValue(contentTextarea.value, -1);

        // Sync editor content back to textarea on change
        editor.getSession().on('change', function() {
            contentTextarea.value = editor.getValue();
        });

        const btnVisualPreview = document.getElementById('btn-visual-preview');
        const btnSavePreview = document.getElementById('btn-save-preview');
        const btnClosePreview = document.getElementById('btn-close-preview');
        const visualContainer = document.getElementById('visual-preview-container');
        const cssSelect = document.getElementById('custom_css');
        const mainForm = document.getElementById('custom-page-form');
        const previewForm = document.getElementById('preview-form');
        const previewContent = document.getElementById('preview-content');
        const previewCss = document.getElementById('preview-css');
        const iframe = document.getElementById('visual-editor-iframe');

        btnVisualPreview.addEventListener('click', function() {
            // Setup hidden form payload
            previewContent.value = editor.getValue();
            previewCss.value = cssSelect.value;
            
            // Show container & submit to iframe
            visualContainer.style.display = 'block';
            document.body.style.overflow = 'hidden';
            btnSavePreview.style.display = 'none'; // hide until ready
            
            previewForm.submit();
        });

        const closePreview = () => {
            iframe.src = 'about:blank';
            visualContainer.style.display = 'none';
            document.body.style.overflow = 'auto';
        };

        btnClosePreview.addEventListener('click', function() {
            if(confirm('Are you sure you want to discard your visual changes?')) {
                closePreview();
            }
        });

        btnSavePreview.addEventListener('click', function() {
            // Ask iframe for the content
            btnSavePreview.innerHTML = '<i class="bi bi-hourglass"></i> Saving...';
            iframe.contentWindow.postMessage('get_content', '*');
        });

        // Listen for messages from iframe
        window.addEventListener('message', function(event) {
            if (event.data === 'tinymce_ready') {
                btnSavePreview.style.display = 'inline-block';
            } else if (event.data && event.data.type === 'save_content') {
                // Update editor and submit
                editor.setValue(event.data.content, -1);
                contentTextarea.value = event.data.content;
                closePreview();
                btnSavePreview.innerHTML = '<i class="bi bi-save"></i> Save Changes';
                mainForm.submit();
            }
        });
    });
</script>
@endsection
