@extends('Admin::layouts.default')
@section('title', $background->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.background.destroy', $background], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүрүүгө макулсузбу?")']) !!}
    <a href="{{ route('admin.background.edit', $background) }}" class="btn btn-primary">edit</a>
    <button class="btn btn-danger" type="submit">delete</button>
    {!! Form::close() !!}
</div>


<div>
    <h3>{{ $background->getName() }}</h3>
    
    @if($background->isImage())
    <img src="{{ asset($background->getFile()) }}" width="800" height="600">
    @else
    <object width="600" height="400" type="application/x-shockwave-flash" data="{{ asset($background->getFile()) }}"></object>
    @endif
</div>

@stop