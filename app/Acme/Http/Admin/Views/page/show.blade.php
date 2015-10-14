@extends('Admin::layouts.default')
@section('title', $page->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.page.destroy', $page], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
    <a href="{{ route('admin.page.edit', $page) }}" class="btn btn-primary">edit</a>
    <button class="btn btn-danger" type="submit">delete</button>
    {!! Form::close() !!}
</div>


<div>
    {{ $page->getName() }} <br>
    {!! $page->getContent() !!}
    <hr>
</div>

@stop

