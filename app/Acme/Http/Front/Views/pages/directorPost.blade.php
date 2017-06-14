@extends('Front::layouts.default')
@section('title', $post->getTitle())
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
@endsection()
@section('content')
    <div class="container main-wrapper">
        <div class="row">
            <section class="content clearfix">
                <div class="clearfix">
                    <div class="top-left-block col-md-9">
                        <div class="panel panel-default panel-article">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.Top news') }} <span class="divider"><i class="fa fa-circle"></i></span>
                                    <a href="{{ route('front.category', $post->category) }}"><span class="ctg">
                        @if(app()->getlocale() == 'kg')
                                                {{ $post->category('category_id')->first()->title }}
                                            @else
                                                {{ $post->category('category_id')->first()->titleRu }}
                                            @endif
                        </span></a>
                                </h3>
                            </div>

                            <div class="panel-body clearfix">
                                <div class="col-md-12 block news-block">
                                    <span class="hidden" id="postId">{{ $post->id }}</span>
                                    <span class="hidden" id="orphusAction">{{ route('front.orphus') }}</span>
                                    <p class="post-thumb" href="{{ route('front.post', $post) }}">
                                        <span class="post-title">

                                            {{ $post->getTitleRuOrKg() }}
                                        </span>
                                        <a id="post-thumb" href="@if(empty($post->thumbnail_big)){{  asset($post->thumbnail) }}@else{{ asset($post->thumbnail_big) }}@endif">
                                            <img class="left" src="@if(empty($post->thumbnail_big)) {{  asset($post->thumbnail) }} @else {{  asset($post->thumbnail_big) }} @endif" alt="image">
                                        </a>
                                        {{--@if($post->thumb_desc || $post->thumb_desc_ru)<span class="thumb_desc">{{ $post->getThumbnailDesc() }}</span>@endif--}}
                                        @if($post->thumb_author)<span class="thumb_author"> Фото: {{ $post->thumb_author }}</span>@endif
                                    </p>

                                    <div class="extra">
                                        <span class="art-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getYear() }}</span>
                                        <span class="art-view"><i class="fa-view"></i>{{ $post->getViewed() }}</span>
                                    </div>
                                <div>                                    
                                    {!! $post->getEmbed() !!}                                    
                                </div>
                                    {!! $post->getContent() !!}                                   

                                </div>

                                <p>
                                    <a href="http://orphus.ru" id="orphus" class="hidden" target="_blank"><img alt="Система Orphus" src="{{ asset('js/orphus.gif') }}" border="0" width="240" height="80" /></a>
                                </p>

                                <div class="orphus-mistake pull-right">
                                    <div class="media">
                                        <div class="media-body media-middle">
                                            <h4>
                                                @if($lc=='kg')
                                                    Эгерде ката тапсаңыз, текстти белгилеп Ctrl+Enter басыңыз
                                                @elseif($lc == 'ru')
                                                    Если вы обнаружили ошибку, выделите текст и нажмите Ctrl+Enter
                                                @endif
                                            </h4>
                                        </div>
                                        <div class="media-right media-middle">
                                            <span class="media-object">
                                                <i class="fa fa-exclamation-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <footer class="with-share">
                                    @if(auth()->user())
                                        <a class="post-edit" href="{{ route('admin.post.edit', $post) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}</a>
                                    @endif

                                    <div class="pluso share-buttons">
                                        <button class="goodshare btn-fb" data-type="fb">
                                            <i class="fa fa-facebook"></i>
                                            <span data-counter="fb"></span>
                                        </button>
                                        <!-- Button with share to Facebook & share counter -->
                                        <button class="goodshare btn-vk" data-type="vk">
                                            <i class="fa fa-vk"></i>
                                            <span data-counter="vk"></span>
                                        </button>
                                        <button class="goodshare btn-ok" data-type="ok">
                                            <i class="fa fa-odnoklassniki"></i>
                                            <span data-counter="ok"></span>
                                        </button>
                                        <button class="goodshare btn-gp" data-type="gp">
                                            <i class="fa fa-google-plus"></i>
                                            <span data-counter="gp"></span>
                                        </button>
                                        <button class="goodshare btn-tw" data-type="tw">
                                            <i class="fa fa-twitter"></i>
                                            {{--<span data-counter="tw"></span>--}}
                                        </button>
                                    </div>

                                    <a href="{{ route('front.general') }}">
                                        <span>{{ trans('site.PostAllNews') }}<i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>
                            </div>
                        </div>
                        @include('Front::partials.postBanner')
                        <div class="panel panel-default panel-related">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.TekteshNews') }}
                                </h3>
                            </div>
                            <div class="panel-body">
                                @foreach($relatedPosts as $relatedPost)
                                    @if($relatedPost->id == $post->id)
                                    @else
                                        <div class="col-md-4 block">
                                            <a href="{{ route('front.post', [$relatedPost, $lc]) }}" class="news-thumb">
                                                <img src="@if(empty($relatedPost->getFile()))images/live_bg.png @else {{ asset($relatedPost->getFile()) }} @endif" alt=""/>
                                            </a>
                                            <a class="related-title" href="{{ route('front.post', [$relatedPost, $lc]) }}">
                                                {{ $relatedPost->getTitleRuOrKg() }}
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @include('Front::partials.leftCategories')
                </div>
            </section>
        </div>
    </div>
@stop