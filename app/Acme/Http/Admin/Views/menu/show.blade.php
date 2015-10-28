@extends('Admin::layouts.default')
@section('title', $menu->getName())

@section('content')

<div>
	{!! Form::open(['route' => ['admin.channel.menu.destroy', $channel, $menu], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүрүүгө макулсузбу?")']) !!}
	<a href="{{ route('admin.channel.menu.edit', [$channel, $menu]) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>Өзгөртүү</a>
	<button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Өчүрүү</button>
	
	{!! Form::close() !!}
</div>


<div>
	<h3>{{ $menu->getName() }}</h3>

	<hr>
	<p>{!! $menu->getParent() !!}</p>
</div>

@stop

