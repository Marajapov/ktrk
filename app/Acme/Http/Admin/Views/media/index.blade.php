@extends('Admin::layouts.default')
@section('title', "Channels")

@section('content')

<div>
    <a href="{{ route('admin.media.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>

<div class="row">
    @foreach($medias as $media)
    <div class="col-sm-4">
        <a href="{{ route('admin.media.show', $media) }}">
        @if($media->isImage())
            <img src="{{ $media->getUrl() }}" class="img-responsive">
        @else
            <img src="http://img.youtube.com/vi/{{ $media->getUrl() }}/sddefault.jpg" class="img-responsive">
        @endif
        </a>
        <p>{!! $media->getName() !!}</p>
    </div>
    @endforeach
</div>

@stop

