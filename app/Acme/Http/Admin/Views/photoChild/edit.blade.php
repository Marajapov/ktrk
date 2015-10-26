@extends('Admin::layouts.default')
@section('title', $photoChild->getName())

@section('content')

{!! Form::model($photoChild, ['route' => ['admin.photoChild.update', $photoChild], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.photoChild', $photoChild)
{!! Form::close() !!}

@stop

