@include('Front::messages.flash')

<div class="row">

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">code</label>
            {!! Form::text('code', null, ["class" => "form-control", "required" => true, "title" => "", "list" => "codes"]) !!}
        </div>
    </div>

    <datalist id="codes">
        @foreach($codes as $code)
        <option value="{{ $code }}"/>
        @endforeach
    </datalist>

    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">new window</label>
            {!! Form::hidden('newtab', 0) !!}
            {!! Form::checkbox('newtab', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label class="control-label">название</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label class="control-label">url</label>
            {!! Form::text('url', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>



</div>

<button type="submit" class="btn btn-primary">сохранить</button>
<a href="{{ route('admin.menu.index') }}" class="btn btn-default">назад</a>

