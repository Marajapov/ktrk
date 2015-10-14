@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('content')

{!! Form::model($user, ['route' => 'admin.user.store']) !!}
@include('Admin::partials.forms.user', $user)
{!! Form::close() !!}

@stop

