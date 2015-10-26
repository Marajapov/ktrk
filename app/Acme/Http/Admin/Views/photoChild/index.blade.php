@extends('Admin::layouts.default')
@section('title', "Фотогалерея")

@section('content')

<div>
    <a href="{{ route('admin.photoChild.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>
<div class="list-group">
  @foreach($photoChilds as $photoChild)
  <a href="{{ route('admin.photoChild.show', $photoChild) }}" class="list-group-item">{{ $photoChild->getName() }}</a>
  @endforeach
</div>

@stop

