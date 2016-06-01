@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
    <link rel="stylesheet" href="{{asset('css/slicebox.css')}}">
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
@include('Front::channel.minkiyal.navs')
    <div class="main-container">
        <section id="djs" class="container">
            <div id="templatemo_events" class="container_wapper">
                <div class="container-fluid djs-body" >
                    <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <div class="event_box_wap event_animate_left">
                            <div class="event_box_img">
                                <img src="http://dostuk.ktrk.kg/images/channels/dostuk/about/1.jpg" class="img-responsive" alt="Web Design Trends" />
                            </div>
                            <div class="event_box_caption">
                                <h1>Нуржан Керменбаев</h1>
                                <p><span class="glyphicon glyphicon-time"></span> В эфире: 18:00 – 20:00 (Пн–Пт)</p>
                                <p class="text-center">
                                    <a class="show-djs" href="{{ route('minkiyal.dj_info') }}">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
                        <div class="event_box_wap event_animate_left">
                            <div class="event_box_img">
                                <img src="http://dostuk.ktrk.kg/images/channels/dostuk/about/1.jpg" class="img-responsive" alt="Web Design Trends" />
                            </div>
                            <div class="event_box_caption">
                                <h1>Нуржан Керменбаев</h1>
                                <p><span class="glyphicon glyphicon-time"></span> В эфире: 18:00 – 20:00 (Пн–Пт)</p>
                                <p class="text-center">
                                    <a class="show-djs" href="#">
                                        толук маалымат
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
@section('footerScript')
@stop