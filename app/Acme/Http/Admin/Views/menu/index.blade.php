@extends('Admin::layouts.default')
@section('title', "Menus")

@section('content')

<div>
    <a href="{{ route('admin.menu.create') }}" class="btn btn-primary">create</a>
</div>
<hr>

@foreach($menus as $menu)
<div>
    <a href="{{ route('admin.menu.code', $menu->getCode()) }}">{{ $menu->getCode() }}</a>
</div>
@endforeach



@stop
