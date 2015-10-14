@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('content')

{!! Form::model($banner, ['route' => 'admin.banner.store', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.banner', $banner)
{!! Form::close() !!}

@stop

