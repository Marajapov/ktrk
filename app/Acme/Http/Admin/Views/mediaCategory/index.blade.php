@extends('Admin::layouts.default')
@section('title', "Media Categories")

@section('content')

<div>
    <a href="{{ route('admin.mediaCategory.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>
<div class="list-group">
  @foreach($mediaCategories as $mediaCategory)
  <a href="{{ route('admin.mediaCategory.show', $mediaCategory) }}" class="list-group-item">{{ $mediaCategory->getName() }}</a>
  @endforeach
</div>

@stop

