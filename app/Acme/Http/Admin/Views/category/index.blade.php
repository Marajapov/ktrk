@extends('Admin::layouts.default')
@section('title', "Categories")

@section('content')

<div>
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>

<div class="list-group">
  @foreach($categories as $category)
  <a href="{{ route('admin.category.show', $category) }}" class="list-group-item">{{ $category->getTitle() }}</a>
  @endforeach
</div>

@stop

