@extends('Admin::layouts.default')
@section('title', 'Создать новость')

@section('content')

<div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>{{ trans('site.AdminPostAddNew') }}</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                {!! Form::model($post, ['route' => 'admin.post.store', 'enctype' => 'multipart/form-data', 'multiple'=>true, 'id'=>'addNews']) !!}
                @include('Admin::partials.forms.post', [$post, $tags])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/select/select2.min.css') }}"/>
@stop

@section('scripts')
<script src="{{ asset('js/admin/select/select2.full.js') }}"></script>
<script type="text/javascript">
    $('#tag_list').select2({
        ajax: {
            url: "/api/tags",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    tag: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: 'Тег тандаңыз',
        tags: true,
        tokenSeparators: [',', ' '],
        minimumInputLength: 1,
    });

    $('#tag_list2').select2({
        ajax: {
            url: "/api/tags",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    tag: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: 'Тег тандаңыз',
        tags: true,
        tokenSeparators: [',', ' '],
        minimumInputLength: 1,
    });
</script>

<!-- Include JS files. -->
<script src="{{ asset('froala/js/froala_editor.min.js') }}"></script>

<!-- Include Plugins. -->
<script type="text/javascript" src="{{ asset('froala/js/plugins/align.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/char_counter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/code_view.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/colors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/emoticons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/entities.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/file.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/font_family.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/font_size.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/fullscreen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/image.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/image_manager.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/inline_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/line_breaker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/link.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/lists.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/paragraph_format.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/paragraph_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/quote.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/table.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/save.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/url.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('froala/js/plugins/video.min.js') }}"></script>

<!-- Include Language file if we'll use it. -->
<script type="text/javascript" src="{{ asset('froala/js/languages/ru.js') }}"></script>

<!-- Initialize the editor. -->
<script>
    $(function() {
        $('#editKg').froalaEditor({

            language: 'ru',

            imageUploadParam: 'file',
            imageUploadURL: "{{ asset('froala/upload_image.php') }}",

            imageManagerLoadURL: "{{ asset('froala/load_images.php') }}"

        }).on('froalaEditor.image.error', function (e, editor, error, response) {
            // Bad link.
            if (error.code == 1) { alert("Bad link"); }

            // No link in upload response.
            else if (error.code == 2) { alert("No link in upload response."); }

            // Error during image upload.
            else if (error.code == 3) { alert("Error during image upload."); }

            // Parsing response failed.
            else if (error.code == 4) { alert("Parsing response failed."); }

            // Image too text-large.
            else if (error.code == 5) { alert("Image too text-large."); }

            // Invalid image type.
            else if (error.code == 6) { alert("Invalid image type."); }

            // Image can be uploaded only to same domain in IE 8 and IE 9.
            else if (error.code == 7) { alert("Image can be uploaded only to same domain in IE 8 and IE 9."); }

            // Response contains the original server response to the request if available.
        });
    });
</script>

<script>
    $(function() {
        $('#editRu').froalaEditor({
            language: 'ru'
        })
    });
</script>

<script>
    $.FroalaEditor.DEFAULTS.key = 'Xf1onF2phouE4kf==';
</script>
@stop
