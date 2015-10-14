@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.banner.destroy', $banner], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
    <a href="{{ route('admin.banner.edit', $banner) }}" class="btn btn-primary">edit</a>
    <button class="btn btn-danger" type="submit">delete</button>
    {!! Form::close() !!}
</div>


<div>
    <h3>{{ $banner->getName() }}</h3>
    <p>category: <a href="{{ route('admin.category.show', $banner->category) }}">{{ $banner->category->getName()  }}</a></p>
    <hr>
    @if($banner->isImage())
    <img src="{{ asset($banner->getFile()) }}">
    @else
    <object width="400" height="200" type="application/x-shockwave-flash" data="{{ asset($banner->getFile()) }}"></object>
    @endif
</div>
@stop

