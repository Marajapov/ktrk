@extends('Admin::layouts.default')
@section('title', $mediaCategory->getName())

@section('content')

{!! Form::model($mediaCategory, ['route' => ['admin.mediaCategory.update', $mediaCategory], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.mediaCategory', $mediaCategory)
{!! Form::close() !!}

@stop

