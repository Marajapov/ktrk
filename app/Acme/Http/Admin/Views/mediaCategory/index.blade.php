@extends('Admin::layouts.default')
@section('title', "Media Categories")

@section('content')
<div class="contents">
<div >
    <a href="{{ route('admin.mediaCategory.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Создать</a>
</div>
<hr>
<div class="list-group">
  @foreach($mediaCategories as $mediaCategory)
  <a href="{{ route('admin.mediaCategory.show', $mediaCategory) }}" class="list-group-item">{{ $mediaCategory->getName() }}</a>
  @endforeach

</div>
</div>
@stop

