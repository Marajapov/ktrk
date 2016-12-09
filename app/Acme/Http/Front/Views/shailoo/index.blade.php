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
                            <div class="panel-body no-bottom">

                                <h4 class="panel-body-title">{{trans('shailoo.ShailooLast')}}</h4>

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
                                                <a href="{{route('front.shailoo.post',[$post, '#respond'])}}">
                                                    <div class="media-heading">
                                                        {!!$post->getContentKG()!!}
                                                    </div>

                                                    <span class="leave-comment">
                                                        <i class="fa fa-comment"></i> ({{count($post->comments())}}) {{trans('site.Reply')}}
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <footer>
                                    <a href="{{route('front.shailoo.all')}}">
                                        <span>{{trans('shailoo.ShailooAll')}} <i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{trans('shailoo.ShailooProgramm')}}</h3>
                            </div>
                            <div class="panel-body">

                                <table class="table table-bordered">
                                    <tbody>
                                    <tr class="top-head-row">
                                        <td class="text-center text-info text-" colspan="3"><strong>с 28 ноября по 2 декабря в 22:10 до 23:30 в эфире КТРК состоятся дебаты</strong></td>
                                    </tr>
                                    <tr class="head-row">
                                        <td class="text-center"><strong>Дата</strong></td>
                                        <td class="text-center"><strong>Партии</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">28 ноября</td>
                                        <td class="text-center">Народная Демократическая Партия Кыргызстана, Демократ, Таза Кыргызстан</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">29 ноября</td>
                                        <td class="text-center">Актив, Мекеним Кыргызстан, Улуу Кыргызстан</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">30 ноября</td>
                                        <td class="text-center">СДПК, Кыргызстан, Аалам</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">1 декабря</td>
                                        <td class="text-center">Өнүгүү-Прогресс, Партия Коммунистов, Республика-Ата-Журт</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">2 декабря</td>
                                        <td class="text-center">Партия Зеленых, Жаңы доор</td>
                                    </tr>

                                    </tbody>
                                </table>
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