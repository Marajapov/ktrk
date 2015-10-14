@extends('Front::layouts.login')
@section('title', "Вход")

@section('content')
<div class="row col-md-12" style="background: white; padding: 20px; margin: 10px;">
    <div class="row col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        {!! Form::open(['route' => 'front.login', 'role' => 'form', 'method' => 'POST']) !!}

        <div class="input-group bottom-padding">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => true, 'maxlength' => 100, 'title' => "Введите почту", 'placeholder' => "Почта"]) !!}
        </div>
        <br>

        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'maxlength' => 100, 'placeholder'=>'Пароль']) !!}
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
        {!! Form::close() !!}

        <br>
        @include('Front::messages.flash')
        @stop

    </div><!-- end row-->
</div>
