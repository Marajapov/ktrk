@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
    <link rel="stylesheet" href="{{asset('css/slicebox.css')}}">
@endsection
@section('content')
    @include('Front::channel.minkiyal.nav')
    <nav id="main-menu" class="navbar navbar-minheader">
        <div class="container-fluid">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./#">
                        <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
                    </a>
                    <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./">Башкы</a></li>
                        <li><a href="./#report">Сүрөтбаяндар</a></li>
                        <li><a href="./#contacts">Биз жөнүндө</a></li>
                        <li><a href="./#">Ди-Джейлер</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="online">
                            <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
                            <object width="65" height="40" data="http://ktrk.kg/online/uppod.swf">
                                <param name="bgcolor" value="#ffffff" />
                                <param name="allowFullScreen" value="false" />
                                <param name="allowScriptAccess" value="false" />
                                <param name="audio" value="http://ktrk.kg/online/uppod.swf" />
                                <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://212.112.96.232:8081" />
                            </object>
                        </div>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>


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