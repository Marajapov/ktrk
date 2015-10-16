@include('Front::messages.flash')

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

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Название</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">File</label>
            {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
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
            <label class="control-label">Расположение сверху (top)</label>
            {!! Form::hidden('positionTop', 0) !!}
            {!! Form::checkbox('positionTop', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Расположение по центру (center)</label>
            {!! Form::hidden('positionCenter', 0) !!}
            {!! Form::checkbox('positionCenter', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Расположение справа (right)</label>
            {!! Form::hidden('positionRight', 0) !!}
            {!! Form::checkbox('positionRight', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Расположение слева (left)</label>
            {!! Form::hidden('positionLeft', 0) !!}
            {!! Form::checkbox('positionLeft', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Расположение снизу (footer)</label>
            {!! Form::hidden('positionBottom', 0) !!}
            {!! Form::checkbox('positionBottom', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>


</div>

<button type="submit" class="btn btn-primary">сохранить</button>
<a href="{{ route('admin.banner.index') }}" class="btn btn-default">назад</a>
