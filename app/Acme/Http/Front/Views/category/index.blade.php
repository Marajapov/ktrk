@extends('Front::layouts.default')
@section('title', $category->getTitle())

@section('content')
        <div class="container main-wrapper">

            <div class="row">


            <section class="content clearfix">

            <div class="clearfix">
                <div class="top-left-block col-md-9">
                    <div class="panel panel-default panel-articles">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ $category->getTitle()}}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12 block news-block">

                                <div class="row">
                                    <ul class="grid" id="grid">

                                    @foreach($posts as $post)
                                        <li>
                                            <div class="pin">
                                                <div class="pin-body">
                                                    <a class="news-title" href="#"><h4>{{ $post->getTitle() }}</h4></a>
                                                    @if($post->isImage())
                                                    <div class="news-img">
                                                        <a class="main-img" href="article.html"><img src="{{ asset($post->getFile()) }}" /></a>
                                                    </div>
                                                    @endif
                                                    
                                                    <p>
                                                        {!! $post->getContent()!!}
                                                        <a href="{{ route('front.post', $post) }}" class="read-more">толугу менен</a>
                                                    </p>
                                                </div>
                                                <div class="pin-footer clearfix">
                                                    <h4 class="news-datetime pull-right">30.09.2015 16:05</h4>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                        
                                    </ul>
                                </div>

                                <nav>
                                    <ul class="pagination">
                                        <li class="hidden">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>                    

                     <a href="#" class="text-center ads">
                        <img src="{{ asset('images/ads_1.jpg') }}" alt=""/>
                    </a>
                </div>
                @include('Front::partials.leftCategories')
            </div>

        </section>

            </div>

        </div>

@stop
