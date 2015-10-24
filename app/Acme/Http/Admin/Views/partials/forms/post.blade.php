@include('Front::messages.flash')
<script type="text/javascript" src="/vendor/tinymce/js/tinymce/tinymce.min.js"></script>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Канал</label>
            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Категория</label>
            {!! Form::select('category_id', \Model\Category\ModelName::lists('title', 'id')->toArray(), null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    {{-- <div class="col-sm-8">
        <div class="form-group">
            <label class="control-label">название</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div> --}}

    <div class="col-sm-8">
        <div class="form-group">
            <label class="control-label">Теги</label>
            {!! Form::select('tag_list[]', $tags, null, ["class" => "form-control", "id" => "tag_list", "multiple"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Опубликовать</label>
            {!! Form::hidden('published', 0) !!}
            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>


    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Анонс</label>
            {!! Form::hidden('announcement', 0) !!}
            {!! Form::checkbox('announcement', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Главная</label>
            {!! Form::hidden('general', 0) !!}
            {!! Form::checkbox('general', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Тема</label>
            {!! Form::text('title', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Текст</label>
            {!! Form::textarea('content', null, ["class" => "form-control tinymce-container"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Миниатюра</label>
            {!! Form::file('thumbnail', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 1</label>
            {!! Form::file('photo1', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 2</label>
            {!! Form::file('photo2', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 3</label>
            {!! Form::file('photo3', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 4</label>
            {!! Form::file('photo4', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 5</label>
            {!! Form::file('photo5', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 6</label>
            {!! Form::file('photo6', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 7</label>
            {!! Form::file('photo7', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 8</label>
            {!! Form::file('photo8', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 9</label>
            {!! Form::file('photo9', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Фото 10</label>
            {!! Form::file('photo10', null, ["class" => "form-control"]) !!}
        </div>
    </div>

    
    <div><br></div>

</div>

<button type="submit" class="btn btn-primary">сохранить</button>
<a href="{{ route('admin.post.index') }}" class="btn btn-default">назад</a>

<div><br></div>
<div><br></div>
<div><br></div>

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
