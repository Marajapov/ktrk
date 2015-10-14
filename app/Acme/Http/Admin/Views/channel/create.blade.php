@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

{!! Form::model($channel, ['route' => 'admin.channel.store']) !!}
@include('Admin::partials.forms.channel', $channel)
{!! Form::close() !!}

@stop

