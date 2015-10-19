@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.channel.destroy', $channel], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
    <a href="{{ route('admin.channel.edit', $channel) }}" class="btn btn-primary">Редактировать</a>
    <button class="btn btn-danger" type="submit">Удалить</button>
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

