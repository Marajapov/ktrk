@extends('Admin::layouts.default')
@section('title', "Users")

@section('content')

<div>
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>

<div class="list-group">
@foreach($users as $user)
    <a href="{{ route('admin.user.show', $user) }}" class="list-group-item">{{ $user->getName() }}</a>
@endforeach
</div>

<a href="{{ route('admin.user.index', ['page' => 1]) }}" class="btn btn-default @if($users->currentPage() == 1) disabled @endif">Начало</a>
<a href="{{ $users->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a href="{{ $users->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>

@for($i = 0, $j = 1; $i < $users->total(); $i+=$perPage)
<a href="{{ route('admin.user.index', ['page' => $j]) }}" class="btn btn-default @if($users->currentPage() == $j) disabled @endif">{{ $j++ }}</a>
@endfor

<a href="{{ route('admin.user.index', ['page' => ceil($users->total()/$perPage)]) }}" class="btn btn-default @if($users->currentPage() == ceil($users->total()/$perPage)) disabled @endif">Конец</a>

@stop

