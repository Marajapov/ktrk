@extends('Front::layouts.default')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/articles.css') }}">

@endsection

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
                                {{ trans('site.Top news') }}
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

                                    @foreach($postAll as $post)

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
                                    </ul>
                                </div>

                                <nav>
                                    <ul class="pagination">
                                        
                                        <li>
                                            <a href="{{ route('front.general', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
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
                                            <a href="{{ route('front.general', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
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

@section('footerScript')
    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ru.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/collapse.js') }}"></script>

    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#datetimepicker1').datetimepicker({
                locale: 'ru',
                format: 'L'
            });
            $('#datetimepicker2').datetimepicker({
                locale: 'ru',
                format: 'L'
            });
        });
    </script>

    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>

    <script src="{{ asset('js/AnimOnScroll.js') }}"></script>
    <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {} );
    </script> 


@stop