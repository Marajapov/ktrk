@extends('Front::layouts.defaultShailoo')

@section('title', trans('shailoo.ShailooFull').' | КТРК')

@section('styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
@stop

@section('content')

    @include('Front::shailoo.header');

    <div class="container main-wrapper shailoo">
        <div class="row">
            <section class="content clearfix">
                <div class="clearfix">
                    <div class="top-left-block col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{route('front.shailoo')}}"><h3 class="panel-title"><span>{{ trans('shailoo.ShailooFull') }}</span></h3></a>
                            </div>
                            <div class="panel-body">

                                <h4 class="panel-body-title">{{trans('shailoo.ShailooAll')}}</h4>

                                <div class="panel-body-content">

                                    @foreach($posts as $post)
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{{route('front.shailoo.party', $post->category)}}">
                                                    <img class="media-object" src="{{asset($post->category->description)}}" alt="{{$post->category->getTitle()}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="news-adds clearfix">
                                                    <a href="{{route('front.shailoo.party', $post->category)}}" class="">{{$post->category->getTitle()}}</a>
                                                    <span class="news-time"> {{$post->getDay().' '.$post->getFullMonth().', '.$post->getTime()}}</span>
                                                </div>
                                                <h4 class="media-heading">
                                                    {!!$post->getContentKG()!!}
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <nav>
                                    <ul class="pagination">

                                        <li>
                                            <a href="{{ route('front.shailoo.all', ['page' => 1]) }}" class="btn btn-default @if($posts->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ $posts->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>

                                        @for($i = 0, $j = 1; $i < $posts->total(); $i+=$perPage)
                                            <li class="@if(($j > $posts->currentPage()+3) || ($j < $posts->currentPage()-3)) hidden @endif">
                                                <a href="{{ route('front.shailoo.all', ['page' => $j]) }}" class="btn btn-default @if($posts->currentPage() == $j) active @endif">
                                                    {{ $j++ }}
                                                </a>
                                            </li>
                                        @endfor

                                        <li>
                                            <a href="{{ $posts->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>

                                        <li>
                                            <a href="{{ route('front.shailoo.all', ['page' => ceil($posts->total()/$perPage)]) }}" class="btn btn-default @if($posts->currentPage() == ceil($posts->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                        </li>

                                    </ul>
                                </nav>

                            </div>
                        </div>

                    </div>

                    @include('Front::shailoo.sidebar')

                </div>
            </section>
        </div>
    </div>

@stop

@section('footerScript')

    @include('Front::shailoo.footer')

@endsection