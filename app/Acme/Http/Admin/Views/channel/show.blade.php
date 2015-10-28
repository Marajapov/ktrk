@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

<div>
	{!! Form::open(['route' => ['admin.channel.destroy', $channel], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүрүүгө макулсузбу?")']) !!}
	<a href="{{ route('admin.channel.edit', $channel) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>Өзгөртүү</a>
	<button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Өчүрүү</button>
	
	{!! Form::close() !!}
</div>

<h2>
	<span class="label label-default">Все пользователя канала - {{ $channel->getDisplay() }} ({{ $channel->getName()}})</span>

	@if($channel->isImage())
	<img src="{{ asset($channel->getFile()) }}" width="50" height="50">
	@else
	<object width="50" height="50" type="application/x-shockwave-flash" data="{{ asset($channel->getFile()) }}"></object>
	@endif
	
</h2>
<div class="list-group">
	@foreach($channel->users as $user)
	<a href="{{ route('admin.user.show', $user) }}" class="list-group-item">{{ $user->getName() }}</a>

	@endforeach
</div>


@stop
