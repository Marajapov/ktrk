@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
@endsection

@section('content')
<div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>{{ trans('site.AdminUserChange') }}</h4>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                {!! Form::model($user, ['route' => 'admin.user.newPassword']) !!}
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Пароль</label>
                            <input name="password" type="password" class="form-control" placeholder="Пароль">
                            <input name="userId" type="hidden" value="{{ $userId }}" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль еще раз</label>
                            <input name="password2" type="password" class="form-control" placeholder="Пароль еще раз">
                        </div>
                    </div>
                </div>

                <div class="action">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <a href="#" onclick="history.go(-1);" class="btn btn-default">Назад</a>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
@stop