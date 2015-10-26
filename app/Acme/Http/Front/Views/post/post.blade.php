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

                                            @if(!empty($post->related1))
                                                <div class="related1">
                                                    <a href="{{ route('front.post', $post->related1) }}">{{ $related1Post->getName() }}</a>        
                                                </div>
                                            @endif

                                            @if(!empty($post->related1))
                                                <div class="related2">
                                                    <a href="{{ route('front.post', $post->related2) }}">{{ $related2Post->getName() }}</a>        
                                                </div>
                                            @endif

                                            @if(!empty($post->related3))
                                                <div class="related3">
                                                    <a href="{{ route('front.post', $post->related3) }}">{{ $related3Post->getName() }}</a>        
                                                </div>
                                            @endif
                                        <p>
                                            {!! $post->getContent() !!}

                                        </p>

                                        <div class="carousel-post">
                                            @if(!empty($parentId))
                                                @foreach($photoChilds as $photoChild)
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        <img src="{{ asset($photoChild->getFile()) }}" alt=""/>
                                                    </a>
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                     <aside>
                                        <div class="topics-box">
                                            <h2>Материалы по теме</h2>
                                            <div class="topics">
                                                <div class="topic clearfix">
                                                    <div class="t-date"><span class="date"><span class="time">14:29</span> 22 июля 2015</span></div>
                                                    <a class="t-thumb" href="http://lenta.ru/articles/2015/07/22/gaidar/">
                                                        <img alt="Михаил Саакашвили" src="http://icdn.lenta.ru/images/2015/07/21/20/20150721204846199/tabloid_5a8978c051d2e41f475126dc569058da.jpg">
                                                    </a>
                                                    <div class="t-info">
                                                        <h4><a class="js-dh" href="http://lenta.ru/articles/2015/07/22/gaidar/">Старожилам здесь не место</a></h4>
                                                        <div class="short">Зачем Михаил Саакашвили назначил своим замом Марию Гайдар</div>
                                                    </div>
                                                </div>
                                                <div class="topic clearfix">
                                                    <div class="t-date"><span class="date"><span class="time">14:29</span> 22 июля 2015</span></div>
                                                    <a class="t-thumb" href="http://lenta.ru/articles/2015/07/22/gaidar/">
                                                        <img alt="Михаил Саакашвили" src="http://icdn.lenta.ru/images/2015/07/21/20/20150721204846199/tabloid_5a8978c051d2e41f475126dc569058da.jpg">
                                                    </a>
                                                    <div class="t-info">
                                                        <h4><a class="js-dh" href="http://lenta.ru/articles/2015/07/22/gaidar/">Старожилам здесь не место</a></h4>
                                                        <div class="short">Зачем Михаил Саакашвили назначил своим замом Марию Гайдар</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>

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
