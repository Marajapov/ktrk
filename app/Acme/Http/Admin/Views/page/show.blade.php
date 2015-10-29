@extends('Admin::layouts.default')
@section('title', $page->getName())

@section('content')

<div>
	{!! Form::open(['route' => ['admin.page.destroy', $page], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүрүүгө макулсузбу?")']) !!}
	<a href="{{ route('admin.page.edit', $page) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>Өзгөртүү</a>
	<button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Өчүрүү</button>
	
	{!! Form::close() !!}
</div>


<div>
	{{ $page->getName() }} <br>
	{!! $page->getContent() !!}
	<hr>
</div>

@stop

