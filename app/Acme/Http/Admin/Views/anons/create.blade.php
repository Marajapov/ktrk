@extends('Admin::layouts.default')
@section('title', trans('site.AdminAnonsNew'))

@section('styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>

        <!-- Include Editor style. -->
    <link href="{{ asset('froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/char_counter.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/code_view.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/colors.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/emoticons.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/file.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/fullscreen.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/image.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/image_manager.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/line_breaker.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/table.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/video.css')}}">
@endsection

@section('content')

    <div class="row modals">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h4>{{ trans('site.AdminAnonsNew') }}</h4>
                </div>

                <div class="x_content">
                    {!! Form::model($anons, ['route' => 'admin.anons.store', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
                        @include('Admin::partials.forms.anons', $anons)
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

    <!-- Initialize the editor. -->
    <script>
        $(function() {
            $('#editKg').froalaEditor({
                language: 'ru',
                height: 300,
                placeholderText: '{{ trans('site.AdminPostEnterText') }}',

                imageUploadParam: 'file',
                imageUploadURL: "{{ asset('froala/upload_image.php') }}",

                imageManagerLoadURL: "{{ asset('froala/load_images.php') }}"

            });
        });
    </script>

    <script>
        $.FroalaEditor.DEFAULTS.key = 'Xf1onF2phouE4kf==';
    </script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script>
         @if(session('success') == 'true')
            $(document).ready(function () {
                $('#minkiyalAnons').removeClass('hidden');
            });
         @endif
    </script>

    <script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });

        $("#category").change(function()
        {
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

                    // balastan
                    if(data == 4) {
                        $('#balastanAnons').show();                        
                        $('#minkiyalAnons').hide();
                        $('#nameKg').show();
                        $('#nameRu').show();
                        $('#editorTextArea').hide();
                        $('#linkArea').show();
                        $('#weekDayKg').show();
                        $('#weekDayRu').show();
                        $('#timeArea').show();
                        $('#thumbForm').show();
                        $('#publish').show();
                    } 

                    // minkiyal
                    else if(data == 9){
                        $('#balastanAnons').hide();                        
                        $('#minkiyalAnons').show();
                        $('#nameKg').show();
                        $('#nameRu').hide();
                        $('#editorTextArea').show();
                        $('#linkArea').hide();
                        $('#weekDayKg').hide();
                        $('#weekDayRu').hide();
                        $('#timeArea').hide();
                        $('#thumbForm').show();
                        $('#publish').show();
                    }            

                    // ktrk videoportal
                    else if(data == 2){
                        $('#balastanAnons').hide();                        
                        $('#minkiyalAnons').hide();
                        $('#nameKg').show();
                        $('#nameRu').show();
                        $('#editorTextArea').hide();
                        $('#linkArea').show();
                        $('#weekDayKg').show();
                        $('#weekDayRu').show();
                        $('#timeArea').show();
                        $('#thumbForm').show();
                        $('#publish').show();
                    }                     

                    // music
                    else if(data == 3){
                        $('#balastanAnons').hide();                        
                        $('#minkiyalAnons').hide();
                        $('#nameKg').show();
                        $('#nameRu').show();
                        $('#editorTextArea').hide();
                        $('#linkArea').show();
                        $('#weekDayKg').show();
                        $('#weekDayRu').show();
                        $('#timeArea').hide();
                        $('#thumbForm').show();
                        $('#publish').show();
                    }                     

                    // kyrgyzradio
                    else if(data == 6){
                        $('#balastanAnons').hide();                        
                        $('#minkiyalAnons').hide();
                        $('#nameKg').show();
                        $('#nameRu').hide();
                        $('#editorTextArea').hide();
                        $('#linkArea').hide();
                        $('#weekDayKg').hide();
                        $('#weekDayRu').hide();
                        $('#timeArea').hide();
                        $('#thumbForm').show();
                        $('#publish').show();
                    }                     

                    // dostuk
                    else if(data == 8){
                        $('#balastanAnons').hide();                        
                        $('#minkiyalAnons').hide();
                        $('#nameKg').show();
                        $('#nameRu').hide();
                        $('#editorTextArea').hide();
                        $('#linkArea').hide();
                        $('#weekDayKg').hide();
                        $('#weekDayRu').hide();
                        $('#timeArea').hide();
                        $('#thumbForm').show();
                        $('#publish').show();
                    } 

                    else {
                        $('#balastanAnons').hide();                        
                        $('#minkiyalAnons').hide();
                        $('#nameKg').hide();
                        $('#nameRu').hide();
                        $('#editorTextArea').hide();
                        $('#linkArea').hide();
                        $('#weekDayKg').hide();
                        $('#weekDayRu').hide();
                        $('#timeArea').hide();
                        $('#thumbForm').hide();
                        $('#publish').hide();
                    }

                }
            });
        });
    });
    </script>
@stop


