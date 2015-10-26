@extends('Admin::layouts.default')
@section('title', $photoChild->getName())

@section('content')

{!! Form::model($photoChild, ['route' => 'admin.photoChild.store', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.photoChild', $photoChild)
{!! Form::close() !!}

@stop

