@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Аты жөнү</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Канал</label>
            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Роль</label>
            {!! Form::select('role', ['ADMIN' => 'admin', 'MANAGER' => 'manager'], null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-xs-6">
        <div class="form-group">
            <label class="control-label">Почта</label>
            {!! Form::email('email', null, ["class" => "form-control tinymce-container"]) !!}
        </div>
    </div>


</div>

<button type="submit" class="btn btn-primary">Сактоо</button>
<a href="{{ route('admin.user.index') }}" class="btn btn-default">Артка</a>
