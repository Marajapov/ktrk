@extends('Admin::layouts.default')
@section('title', "Banner")

@section('content')

<div>
    <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>

<div class="list-group">
@foreach($banners as $banner)
    <a href="{{ route('admin.banner.show', $banner) }}" class="list-group-item">{{ $banner->getName() }} ({{ $banner->category->getTitle()  }})</a>
@endforeach
</div>

@stop

