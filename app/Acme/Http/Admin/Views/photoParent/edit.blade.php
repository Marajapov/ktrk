@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('content')

{!! Form::model($photoParent, ['route' => ['admin.photoParent.update', $photoParent], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.photoParent', $photoParent)
{!! Form::close() !!}

@stop

