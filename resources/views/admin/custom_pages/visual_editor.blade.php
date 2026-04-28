@extends('frontend.layout.appLayout')

@section('content')
    @if($custom_css)
        <link rel="stylesheet" href="{{ asset('frontend/customstyle/' . $custom_css) }}">
    @endif

    <div class="custom-page-content" id="visual-editor" style="min-height: 70vh;">
        {!! $content !!}
    </div>

    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: '#visual-editor',
                inline: true,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | image | code | help',
                images_upload_handler: function (blobInfo, progress) {
                    return new Promise((resolve, reject) => {
                        let formData = new FormData();
                        formData.append('files[]', blobInfo.blob(), blobInfo.filename());
                        formData.append('path', 'uploads/pages');
                        
                        let xhr = new XMLHttpRequest();
                        xhr.open('POST', '{{ route("admin.media.upload") }}');
                        // CSRF from parent window if possible, but easier to just use standard meta if present, 
                        // wait frontend layout has csrf-token
                        let metaToken = document.querySelector('meta[name="csrf-token"]');
                        if (metaToken) {
                            xhr.setRequestHeader('X-CSRF-TOKEN', metaToken.getAttribute('content'));
                        }

                        xhr.onload = function () {
                            if (xhr.status === 200) {
                                resolve('/storage/uploads/pages/' + blobInfo.filename());
                            } else {
                                reject('HTTP Error: ' + xhr.status);
                            }
                        };
                        xhr.send(formData);
                    });
                },
                file_picker_callback: function(callback, value, meta) {
                    if (meta.filetype === 'image') {
                        var w = 800;
                        var h = 600;
                        var left = (screen.width - w) / 2;
                        var top = (screen.height - h) / 4;

                        window.open('{{ route("admin.media.index") }}?picker=1', 'MediaManager', 'width=' + w + ',height=' + h + ',top=' + top + ',left=' + left);

                        window.addEventListener('message', function(event) {
                            if (event.data && event.data.type === 'media_manager_select') {
                                callback(event.data.url, { alt: event.data.name });
                            }
                        }, { once: true });
                    }
                }
            });
            
            // Notify parent window that tinymce is ready
            window.parent.postMessage('tinymce_ready', '*');
        });
        
        // Listen for save request from parent
        window.addEventListener('message', function(event) {
            if (event.data === 'get_content') {
                var content = tinymce.get('visual-editor').getContent();
                window.parent.postMessage({ type: 'save_content', content: content }, '*');
            }
        });
    </script>
@endsection
