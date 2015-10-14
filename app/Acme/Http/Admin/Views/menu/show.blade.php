@extends('Admin::layouts.default')
@section('title', $menu->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.channel.menu.destroy', $channel, $menu], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
    <a href="{{ route('admin.channel.menu.edit', [$channel, $menu]) }}" class="btn btn-primary">edit</a>
    <button class="btn btn-danger" type="submit">delete</button>
    {!! Form::close() !!}
</div>


<div>
    <h3>{{ $menu->getName() }}</h3>

    <hr>
    <p>{!! $menu->getParent() !!}</p>
</div>

@stop

