@extends('Admin::layouts.default')
@section('title', "Фотогалерея")

@section('content')

<div>
    <a href="{{ route('admin.photoParent.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>
<div class="list-group">
  @foreach($photoParents as $photoParent)
  	<a href="{{ route('admin.photoParent.show', $photoParent) }}" class="list-group-item">{{ $photoParent->getName() }}</a>
  @endforeach
</div>

@stop

