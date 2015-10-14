@extends('Front::layouts.default')
@section('title', $channel->getDisplay())

@section('content')

    {{ $channel->getDisplay() }}
    <hr>

    <a href="{{ route('madaniyat.posts')  }}">Новости</a>

<hr>


@stop