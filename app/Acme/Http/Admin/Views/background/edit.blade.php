@extends('Admin::layouts.default')
@section('title', $background->getName())

@section('content')

{!! Form::model($background, ['route' => ['admin.background.update', $background], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.background', $background)
{!! Form::close() !!}

@stop

