@extends('Front::layouts.default')
@section('title', $channel->getDisplay())

@section('content')

    <div class="row">
        <section class="content clearfix">
            <div class="top-left-block col-md-8">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span>Топ жаңылыктар</span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-4 block">

                            {{ $channel->getDisplay() }}

                            <a href="{{ route('balastan.posts')  }}">
                                <div class="overlay"></div>
                                <img src="{{ asset('images/image.jpeg') }}" alt=""/>
                                <h4>Новости Баластан</h4>
                            </a>
                        </div>

                        <footer>
                            <a href="#">
                                <span>Смотреть все <i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>

            </div>
        </section>
    </div>

@stop
