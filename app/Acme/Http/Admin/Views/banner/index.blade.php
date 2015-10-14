@extends('Admin::layouts.default')
@section('title', "Banner")

@section('content')

<div>
    <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">create</a>
</div>
<hr>

@foreach($banners as $banner)
<div>
    <h3><a href="{{ route('admin.banner.show', $banner) }}">{{ $banner->getName() }}</a> ({{ $banner->category->getName()  }})</h3>
    <p>{!! $banner->getName() !!}</p>
</div>
<hr>
@endforeach

@stop

