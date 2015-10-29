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
            <label class="control-label">Аталышы</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Файл</label>
            {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>
    
    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">Жайгаштыруу</label>
            {!! Form::hidden('published', 0) !!}
            {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>
  
    <div class=" col-md-12 raspoloj">
        <div class="form-group">
            <label class="control-label">Үстү жагында (top)</label>
            {!! Form::hidden('positionTop', 0) !!}         
            {!! Form::checkbox('positionTop', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
           <div class="topbanner"></div>
        </div>
    </div>

    <div class="col-md-12 raspoloj">
        <div class="form-group">
            <label class="control-label">Ортодо жайгашуу (center)</label>
            {!! Form::hidden('positionCenter', 0) !!}
            {!! Form::checkbox('positionCenter', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                  <div class="topbanner"></div>
        </div>
    </div>

    <div class="col-md-12 raspoloj">
        <div class="form-group">
            <label class="control-label">Оң жагында (right)</label>
            {!! Form::hidden('positionRight', 0) !!}
            {!! Form::checkbox('positionRight', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                   <div class="topbanner"></div>
        </div>
    </div>

    <div class="col-md-12 raspoloj">
        <div class="form-group">
            <label class="control-label">Сол жагында (left)</label>
            {!! Form::hidden('positionLeft', 0) !!}
            {!! Form::checkbox('positionLeft', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                  <div class="topbanner"></div>
        </div>
    </div>

    <div class="col-md-12 raspoloj">
        <div class="form-group">
            <label class="control-label">Ылдый жагында (footer)</label>
            {!! Form::hidden('positionBottom', 0) !!}
            {!! Form::checkbox('positionBottom', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <div class="topbanner"></div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">сактоо</button>
<a href="{{ route('admin.banner.index') }}" class="btn btn-default">артка</a>
