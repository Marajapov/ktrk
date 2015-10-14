@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')

<div>
    {!! Form::open(['route' => ['admin.media.destroy', $media], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
    <a href="{{ route('admin.media.edit', $media) }}" class="btn btn-primary">edit</a>
    <button class="btn btn-danger" type="submit">delete</button>
    {!! Form::close() !!}
</div>


<div>
    <h3>{{ $media->getName() }}</h3>
    <span class="pull-right badge"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;&nbsp;{{ $media->getViewed() }}</span>
    <hr>
    @if($media->isImage())
    <img src="{{ $media->getUrl() }}" class="img-responsive">
    @else
    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $media->getUrl() }}?rel=0" frameborder="0" allowfullscreen></iframe>
    @endif
</div>

@stop

