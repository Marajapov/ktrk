@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')

{!! Form::model($media, ['route' => ['admin.media.update', $media], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.media', $media)
{!! Form::close() !!}

@stop

