@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

{!! Form::model($channel, ['route' => 'admin.channel.store', 'enctype' => 'multipart/form-data']) !!}
@include('Admin::partials.forms.channel', $channel)
{!! Form::close() !!}

@stop

