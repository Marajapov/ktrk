@include('Front::messages.flash')

<div class="panel panel-default">
  <div class="panel-heading">Изменение данных</div>
  <div class="panel-body">
    
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label class="control-label">Название</label>
                {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Статус</label>
                {!! Form::hidden('published', 0) !!}
                {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
            </div>
        </div>

        <div class="col-sm-10">
            <div class="form-group">
                <label class="control-label">Дисплей</label>
                {!! Form::text('display', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>

    </div>

    <button type="submit" class="btn btn-primary">сохранить</button>
    <a href="{{ route('admin.channel.index') }}" class="btn btn-default">назад</a>

  </div>
</div>

