@include('Front::messages.flash')

<div class="panel panel-success">
  <div class="panel-body">

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminUserName') }}</label>
      <div class="col-sm-2">
        {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">E-mail</label>
      <div class="col-sm-2">
        {!! Form::email('email', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">Канал</label>
      <div class="col-sm-2" style="padding-top: 7px;">
        {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "selectpicker","data-live-search"=>"true", "required" => true, "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">Роль</label>
      <div class="col-sm-2" style="padding-top: 7px;">
        {!! Form::select('role', ['admin' => 'Админ', 'manager' => 'Менеджер', 'ns'=>'НС','birinchi'=> 'Биринчи', 'muzkanal'=> 'Музыка'], null, ["class" => "selectpicker","data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">Пароль</label>
      <div class="col-sm-2">
        {!! Form::password('password', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

  </div>
</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.user.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
