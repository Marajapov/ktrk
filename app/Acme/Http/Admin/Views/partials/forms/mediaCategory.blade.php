@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Аталышы: Кыргызча</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Аталышы: Орусча</label>
            {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Англисче кыскача аталышы</label>
            {!! Form::text('videoType', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Жайгаштыруу</label>
            {!! Form::hidden('published', 0) !!}
            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>


</div>

<button type="submit" class="btn btn-primary">сактоо</button>
<a href="{{ route('admin.category.index') }}" class="btn btn-default">артка</a>
