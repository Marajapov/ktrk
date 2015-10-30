@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Аталышы</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Орусча аталышы</label>
            {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Файл</label>
      <!--       {!! Form::file('file', array('multiple'=>true), ["class" => "form-control", "required" => true]) !!} -->
            {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary">сактоо</button>

<a href="{{ route('admin.photoParent.index') }}" class="btn btn-default">артка</a>
