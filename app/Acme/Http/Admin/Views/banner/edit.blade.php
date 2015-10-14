@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('content')

{!! Form::model($banner, ['route' => ['admin.banner.update', $banner], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.banner', $banner)
{!! Form::close() !!}

@stop

