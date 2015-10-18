@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Название</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Выберите тип медии</label>
            {!! Form::select('resource_type', \Model\MediaCategory\ModelName::lists('name', 'id')->toArray(), null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Описание</label>
            {!! Form::textarea('description', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">URL of the image : If video then youtube video id</label>
            {!! Form::text('url', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Type : image or video</label>
            {!! Form::select('type', ['image'=>'Картинка','video'=>'Видео'], null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Опубликовать</label>
            {!! Form::hidden('published', 0) !!}
            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary">сохранить</button>

<a href="{{ route('admin.media.index') }}" class="btn btn-default">назад</a>
