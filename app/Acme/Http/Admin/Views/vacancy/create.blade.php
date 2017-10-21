@extends('Admin::layouts.default')
@section('title', 'Вакансия')

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
      <div class="x_title">
        <h4>Жаңы вакансия</h4>
      </div>
			<div class="x_content">
				{!! Form::model($vacancy, ['route' => 'admin.vacancy.store', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
				@include('Admin::partials.forms.vacancy', $vacancy)
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

            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });

            var send = XMLHttpRequest.prototype.send,
                token = $('meta[name=_token]').attr('content');
            XMLHttpRequest.prototype.send = function(data) {
                this.setRequestHeader('X-CSRF-Token', token);
                return send.apply(this, arguments);
            };

            $('#editKg, #editRu').froalaEditor({
                language: 'ru',
                height: 300,
                toolbarSticky: false,
                placeholderText: '{{ trans('site.AdminPostEnterText') }}',

                imageUploadParam: 'file',
                imageUploadURL: "{{route('admin.post.watermark')}}",

                imageManagerLoadURL: "{{ asset('froala/load_images.php') }}"

            }).on('froalaEditor.image.beforeUpload', function (e, editor, images) {
            });
        });
    </script>

    <script>
        $.FroalaEditor.DEFAULTS.key = 'Xf1onF2phouE4kf==';
    </script>

@stop

