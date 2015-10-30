@extends('Front::layouts.login')
@section('title', "Вход")

@section('content')

<div class="loginform">

    <div class="logintitle clearfix">
         <div class="col-md-4 col-md-offset-4">
             <img src="{{ asset('images/logo_ktrk2.png') }}">
         </div>
                
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 buttonscry">
        <h4 style="text-align:center;color:#ECECEC;">Башкаруу панелине кирүү</h4>

            {!! Form::open(['route' => 'front.login', 'role' => 'form', 'method' => 'POST']) !!}

            <div class="input-group bottom-padding">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => true, 'maxlength' => 100, 'title' => "Email", 'placeholder' => "Email"]) !!}
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                {!! Form::password('password', ['class' => 'form-control', 'required' => true, 'maxlength' => 100, 'placeholder'=>'Сырсөз']) !!}
            </div>
            <br>
            <button class="btn btn-info loginbutton" type="submit">Кирүү</button>
            {!! Form::close() !!}

            <br>
            @include('Front::messages.flash')
            @stop

        </div><!-- end row-->
    </div>

</div>