@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')

{!! Form::model($media, ['route' => 'admin.media.store']) !!}
@include('Admin::partials.forms.media', $media)
{!! Form::close() !!}

@stop

