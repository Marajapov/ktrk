@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('content')
<div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title clearfix">
                <h4 class="pull-left">{{ trans('site.AdminPhotoParentChange') }}</h4>
            </div>
            <div class="x_content">
                {!! Form::model($photoParent, ['route' => ['admin.photoParent.update', $photoParent], 'method' => 'PUT', 'enctype' => 'multipart/form-data',  'class'=>'form-horizontal']) !!}
                @include('Admin::partials.forms.photoParent', $photoParent)
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
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

<script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>

<!-- Initialize the editor. -->
<script>
    $(function() {
        $('#editKg').froalaEditor({
            language: 'ru',
            height: 300,

            imageUploadParam: 'file',
            imageUploadURL: "{{ asset('froala/upload_image.php') }}",

            imageManagerLoadURL: "{{ asset('froala/load_images.php') }}"

        });
    });
</script>

<script>
    $(function() {
        $('#editRu').froalaEditor({
            language: 'ru',
            height: 300,

            imageUploadParam: 'file',
            imageUploadURL: "{{ asset('froala/upload_image.php') }}",

            imageManagerLoadURL: "{{ asset('froala/load_images.php') }}"
        })
    });
</script>

<script>$.FroalaEditor.DEFAULTS.key = 'Xf1onF2phouE4kf==';</script>

<script>
    $(document).ready(function(){

        @if($photoParent->watermark)
            $('#watermarkGroup').append('<div class="form-group"><label for="parentId" class="col-sm-2 control-label">{{ trans('site.Images') }}</label><div class="col-sm-10"><div class="dropzone" id="dropzoneFileUpload"></div><div id="dropzoneFilesUploaded"></div></div></div>');  
                var token = "{{ Session::getToken() }}";
                var url = "{{ route('admin.photoParent.uploadFiles') }}";
                Dropzone.autoDiscover = false;
                var myDropzone = new Dropzone("#dropzoneFileUpload", {
                    url: url,
                    dictDefaultMessage: "<i class='fa fa-image'></i><span class='subtext'>{{ trans('site.AdminPhotoParentImagesSelect') }}</span>",
                    params: {
                     _token: token
                    }
                });
                Dropzone.options.myAwesomeDropzone = {
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 1000, // MB
                    addRemoveLinks: true,
                    accept: function(file, done) {},
                };
                myDropzone.on('sending', function(file, xhr, formData){
                    formData.append('id', {{ $photoParent->watermark }});
                });
                myDropzone.on("success", function(file, response) {
                    $('#dropzoneFilesUploaded').append('<input type="hidden" name="images[]" value="'+response+'"/>');
                }); 
        @endif

        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });

        $("#watermark").change(function()
        {
            $('#watermarkGroup').html('');

            var id=$(this).val();
            var dataString = 'id='+ id;
            var url = "create";

            $.ajax
            ({
                type: "POST",
                url: url,
                data: dataString,
                cache: false,
                success: function(data)
                {
                    console.log(data);
                    $('#watermarkGroup').append('<div class="form-group"><label for="parentId" class="col-sm-2 control-label">{{ trans('site.Images') }}</label><div class="col-sm-10"><div class="dropzone" id="dropzoneFileUpload"></div><div id="dropzoneFilesUploaded"></div></div></div>');  
                    var token = "{{ Session::getToken() }}";
                    var url = "{{ route('admin.photoParent.uploadFiles') }}";
                    Dropzone.autoDiscover = false;
                    var myDropzone = new Dropzone("#dropzoneFileUpload", {
                        url: url,
                        dictDefaultMessage: "<i class='fa fa-image'></i><span class='subtext'>{{ trans('site.AdminPhotoParentImagesSelect') }}</span>",
                        params: {
                         _token: token
                        }
                    });
                    Dropzone.options.myAwesomeDropzone = {
                        paramName: "file", // The name that will be used to transfer the file
                        maxFilesize: 1000, // MB
                        addRemoveLinks: true,
                        accept: function(file, done) {},
                    };
                    myDropzone.on('sending', function(file, xhr, formData){
                        formData.append('id', data);
                    });
                    myDropzone.on("success", function(file, response) {
                        $('#dropzoneFilesUploaded').append('<input type="hidden" name="images[]" value="'+response+'"/>');
                    });                      
                }
            });
        });
    });
</script>
@endsection