@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.channel.destroy', $channel], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
    <a href="{{ route('admin.channel.edit', $channel) }}" class="btn btn-primary">Редактировать</a>
    <button class="btn btn-danger" type="submit">Удалить</button>
    {!! Form::close() !!}
</div>

<h2><span class="label label-default">Все пользователя канала - {{ $channel->getDisplay() }} ({{ $channel->getName()}})</span></h2>
<div class="list-group">
@foreach($channel->users as $user)
    <a href="{{ route('admin.user.show', $user) }}" class="list-group-item">{{ $user->getName() }}</a>

@endforeach
</div>


@stop

