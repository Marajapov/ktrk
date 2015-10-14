@extends('Front::layouts.default')
@section('title', $channel->getDisplay() . ' posts')

@section('content')

<div class="panel panel-default latest-news">
    <div class="panel-heading">
        <h3 class="panel-title"><span>жаңылыктар</span></h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($channel->posts as $post)
            <li class="list-group-item news-item">
                <div class="news-body">
                    <a href="{{ route('front.post', $post) }}"><p>{{ $post->getTitle() }}</p></a>
                </div>
                <div class="news-adds clearfix">
                    <a href="#" class="pull-left">{{ $post->category('category_id')->first()->name }}</a>

                    <span class="news-time pull-right">{{ $post->getViewed() }}, {{ $post->getCreated() }}</span>
                </div>
                <div class="clearfix"></div>
            </li>
            @endforeach

        </ul>
    </div>
</div>

@stop
