@extends('Front::layouts.default')
@section('title', $channel->getDisplay() . ' posts')

@section('content')

<div class="container main-wrapper">
    <div class="row">
        <section class="content clearfix">

            <div class="clearfix">
                <div class="top-left-block col-md-9">
                    <div class="panel panel-default panel-articles">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Жаңылыктар
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12 block news-block">

                                <div class="row">
                                    <ul class="grid" id="grid">
                                    @foreach($channel->posts as $post)
                                        <li>
                                            <div class="pin">
                                                <div class="pin-body">
                                                    <a class="news-title" href="#"><h4>{{ $post->getTitle() }}</h4></a>
                                                    <div class="news-img">
                                                        <a class="main-img" href="article.html"><img src="{{ asset('images/image.jpeg') }}" /><i class="fa fa-play-circle-o"></i></a>
                                                        <div class="news-channel">
                                                            <a href="channel.html">
                                                                <img src="{{ asset($post->isChannelIcon($post->channel_id))}}" alt=""/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        {!! $result = substr($post->getContent(),0,300) !!}
                                                        
                                                        <a href="{{ route('front.post', $post) }}" class="read-more">толугу менен</a>
                                                    </p>
                                                </div>
                                                <div class="pin-footer">
                                                    <a class="news-ctg" href="#">
                                                        <h4>{{ $post->category('category_id')->first()->title }}</h4>
                                                    </a>
                                                    <h4 class="news-datetime pull-right">{{ $post->getViewed() }}, {{ $post->getCreated() }}</h4>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach 
                                        
                                    </ul>
                                </div>

                                <nav>
                                    <ul class="pagination">
                                        
<li>
    <a href="{{ route('front.general', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">Начало</a>
</li>
<li>
    <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
</li>
<li>
    <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
</li>

@for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
<li>
    <a href="{{ route('front.general', ['page' => $j]) }}" class="active btn btn-default @if($postAll->currentPage() == $j) disabled @endif">{{ $j++ }}</a>
</li>
@endfor

<li>
    <a href="{{ route('front.general', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">Конец</a>
</li>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>

                    <a href="#" class="text-center ads">
                        <img src="images/ads_1.jpg" alt=""/>
                    </a>

                </div>

                @include('Front::partials.leftCategories')

            </div>

        </section>
    </div>
</div>

@stop
