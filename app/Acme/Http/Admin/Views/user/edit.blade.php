@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('content')

{!! Form::model($user, ['route' => ['admin.user.update', $user], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.user', $user)
{!! Form::close() !!}

@stop

