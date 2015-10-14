@extends('Front::layouts.default')
@section('title', $channel->getDisplay())

@section('content')

    {{ $channel->getDisplay() }}
    <hr>

    <a href="{{ route('muzkanal.posts')  }}">Новости</a>

<hr>


@stop