@include('Front::messages.flash')
<script type="text/javascript" src="/vendor/tinymce/js/tinymce/tinymce.min.js"></script>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">channel</label>
            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-8">
        <div class="form-group">
            <label class="control-label">название</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">опубликовать</label>
            {!! Form::hidden('published', 0) !!}
            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">general</label>
            {!! Form::hidden('general', 0) !!}
            {!! Form::checkbox('general', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">текст</label>
            {!! Form::textarea('content', null, ["class" => "form-control tinymce-container"]) !!}
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary">сохранить</button>
<a href="{{ route('admin.page.index') }}" class="btn btn-default">назад</a>

<script type="text/javascript">
    tinymce.init({
        selector: "textarea.tinymce-container",
        language: "ru",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste textcolor",
        ],
        toolbar: "fontselect fontsizeselect forecolor | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | undo redo",
        font_formats: "Calibri=calibri,helvetica,sans-serif;"+
        "Helvetica=helvetica;"+
        "Times New Roman=times new roman,times;"+
        "Verdana=verdana,geneva;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Courier New=courier new,courier;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Impact=impact,chicago;",

        relative_urls: false,
        image_advtab: true ,
    });
</script>
