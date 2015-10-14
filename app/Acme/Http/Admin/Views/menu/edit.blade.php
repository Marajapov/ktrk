@extends('Admin::layouts.default')
@section('title', $menu->getName())

@section('content')

{!! Form::model($menu, ['route' => ['admin.menu.update', $menu], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.menu', $menu)
{!! Form::close() !!}

@stop

