@extends('Admin::layouts.default')
@section('title', $menu->getName())

@section('content')

{!! Form::model($menu, ['route' => 'admin.menu.store']) !!}
@include('Admin::partials.forms.menu', [$menu, $codes])
{!! Form::close() !!}

@stop

