@extends('Front::layouts.default')
@section('title', $post->getTitle())

@section('content')
        <div class="container main-wrapper">

            <div class="row">
                <section class="content clearfix">

                    <div class="clearfix">
                        <div class="top-left-block col-md-9">
                            <div class="panel panel-default panel-article">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        Жаңылыктар <span class="divider"><i class="fa fa-circle"></i></span>
                                        <a href=""><span class="ctg">{{ $post->category('category_id')->first()->title }}</span></a></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 block news-block">
                                        <h4 class="news-title">
                                            {{ $post->getTitle() }}
                                            <span><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                        </h4>
                                        <p>
                                            {!! $post->getContent() !!}
                                        </p>

                                        <div class="carousel-post">
                                            @if(!empty($post->getPhoto1()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto1()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto2()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto2()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto3()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto3()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto4()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto4()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto5()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto5()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto6()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto6()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto7()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto7()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto8()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto8()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto9()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto9()) }}" alt=""/></a></div>
                                            @endif

                                            @if(!empty($post->getPhoto10()))
                                            <div class="col-md-4"><a href="#"><img src="{{ asset($post->getPhoto10()) }}" alt=""/></a></div>
                                            @endif
                                        </div>
                                    </div>

                                    <footer>                                        
                                        <a href="#">
                                            <span>Бардык жаңылыктар <i class="fa fa-arrow-circle-right"></i></span>
                                        </a>
                                    </footer>
                                </div>
                            </div>

                            <a href="#" class="text-center ads">
                                <img src="{{ asset('images/ads_1.jpg') }}" alt=""/>
                            </a>

                            <div class="panel panel-default panel-related">
                                <div class="panel-body">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Тектеш жаңылыктар
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4 block">
                                            <a href="#" class="news-thumb">
                                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                            </a>
                                            <a href="#">
                                                <h4>Название новости Название новости Название новости</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-4 block">
                                            <a href="#" class="news-thumb">
                                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                            </a>
                                            <a href="#">
                                                <h4>Название новости Название новости Название новости</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-4 block">
                                            <a href="#" class="news-thumb">
                                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                            </a>
                                            <a href="#">
                                                <h4>Название новости Название новости Название новости</h4>
                                            </a>
                                        </div>

                                        <div class="col-md-4 block">
                                            <a href="#" class="news-thumb">
                                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                            </a>
                                            <a href="#">
                                                <h4>Название новости Название новости Название новости</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-4 block">
                                            <a href="#" class="news-thumb">
                                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                            </a>
                                            <a href="#">
                                                <h4>Название новости Название новости Название новости</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-4 block">
                                            <a href="#" class="news-thumb">
                                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                            </a>
                                            <a href="#">
                                                <h4>Название новости Название новости Название новости</h4>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        @include('Front::partials.leftCategories')

                    </div>

                </section>

            </div>

        </div>

@stop
