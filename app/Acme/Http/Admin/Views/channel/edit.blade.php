@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

{!! Form::model($channel, ['route' => ['admin.channel.update', $channel], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.channel', $channel)
{!! Form::close() !!}

@stop

