@extends('Front::layouts.default')
@section('title', $category->getTitle())

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/articles.css') }}">

@endsection

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

                                <div class="date-filter clearfix">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                            </div>
                                        </div>

                                        <div class="pull-left form-divider">
                                            -
                                        </div>

                                        <div class="form-group col-md-2">
                                            <div class="input-group date" id="datetimepicker2">
                                                <input type="text" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <button type="submit" class="btn btn-default btn-filter">
                                                фильтр
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="">

                                    @foreach($posts as $post)

                                        <div class="media">

                                            <div class="media-left">
                                                <a href="{{ route('front.post', $post) }}">
                                                    <img class="media-object thumb" src="@if(empty($post->getFile()))images/2.jpg @else {{ asset($post->getFile()) }} @endif" alt="image">
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                 <div class="extra">
                                                    <span class="e-datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }} , {{ $post->getTime() }}</span>
                                                    <a class="e-cat text-uppercase" href="{{ route('front.category', $post->category) }}"><span>{{ $post->category('category_id')->first()->title }}</span></a>
                                                    <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                                </div>

                                                <a class="media-heading" href="{{ route('front.post', $post) }}">{{ $post->getTitle() }}</a>
                                                <h5 class="media-desc">
                                                    {!! $result = substr($post->getContent(),0,300) !!}
                                                </h5>
                                            </div>

                                        </div>

                                    @endforeach

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
