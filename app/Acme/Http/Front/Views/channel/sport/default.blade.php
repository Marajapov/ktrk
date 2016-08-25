<!DOCTYPE html>
<html lang="ру">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/sport.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">


    @yield('styles')

    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script>
        $(window).load(function(){
            $("#header").sticky({ topSpacing: 0 });
        });
    </script>
    <style>
        body{
            @if($backgroundMain != null) background: url('{{ asset($backgroundMain->getFile()) }}') no-repeat;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            @endif
        }
    </style>

</head>
<body class="sport">
    @yield('content')

    <div class="container prefooter clearfix">
        <div class="infooter">
            <div class="col-md-4" style="padding: 20px 0;text-align: center;">
                <a href="http://ktrkdev.ktrk.kg/" target="_blank">
                    <img src="{{ asset('images/banner_320x70.gif') }}" style="width: auto;" alt=""/>
                </a>
            </div>
            <div class="footer-channels">
                <ul>
                    <li>
                        <a href="{{ route('front.home') }}">
                            <img src="{{ asset('images/channels/small/1.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('muzkanal.home') }}">
                            <img src="{{ asset('images/channels/small/2.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('balastan.home') }}">
                            <img src="{{ asset('images/channels/small/3.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('madaniyat.home') }}">
                            <img src="{{ asset('images/channels/small/4.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kyrgyzradio.home') }}">
                            <img src="{{ asset('images/channels/small/5.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('birinchi.home') }}">
                            <img src="{{ asset('images/channels/small/6.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dostuk.home') }}">
                            <img src="{{ asset('images/channels/small/7.png') }}" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('minkiyal.home') }}">
                            <img src="{{ asset('images/channels/small/8.png') }}" alt=""/>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-info clearfix">
                <div class="col-md-4 apps-logo">
                    <p>
                        {{ trans('site.KtrkApp') }}
                    </p>
                    <ul>
                        <li>
                            <a href="https://play.google.com/store/apps/details?id=ktrk.kg.app">
                                <img src="{{ asset('images/android.png') }}" alt="ktrk_adnroid"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://itunes.apple.com/kg/app/ktrk-official/id1004194204">
                                <img src="{{ asset('images/ios.png') }}" alt="ktrk_ios"/>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-8 footer-menu">

                    <ul>
                        <li><a href="{{ route('front.home') }}">{{ trans('site.Homepage') }}</a></li>
                        <li>/</li>
                        <li><a href="{{ route('front.media.index') }}">Видеопортал</a></li><li>/</li>
                        <li><a href="{{ route('front.pages.program') }}">Программа</a></li><li>/</li>
                        {{--<li><a href="#">{{ trans('site.Ads') }}</a></li><li>/</li>--}}
                        <li><a href="{{ route('front.pages.reklama') }}">{{ trans('site.Ads') }}</a></li><li>/</li>
                        {{--<li><a href="#">{{ trans('site.Contacts') }}</a></li>--}}
                        <li><a href="{{ route('front.pages.contacts') }}">{{ trans('site.Contacts') }}</a></li>
                    </ul>        
                </div>               

            </div>
            <div class="footer-trademark">          
                <div class="footer-top">
                    <div class="col-md-8">
                        <h4 class="copyright"><i class="fa fa-copyright"></i>{{ trans('site.TradeMark') }}, 2010-<?php echo date("Y"); ?>. {{ trans('site.TradeMarkAll') }} </h4>
                        <h4 class="copyright">{{ trans('site.TradeMarkRegulations') }} </h4>   
                        <h4 class="copyright">{{ trans('site.TradeMarkRegulations2') }} </h4>   
                        <h4 class="copyright">{{ trans('site.TradeMarkRegulations3') }} </h4>                    
                        <h4 class="copyright">{{ trans('site.TradeMarkRegulations4') }} </h4>                    
                    </div>
                    <div class="col-md-4">
                        <h4 class="copyrightSide">{{ trans('site.TradeMarkAddress') }}</h4>
                        <h4 class="copyrightSide">{{ trans('site.TradeMarkTel') }} </h4>
                        <h4 class="copyrightSide">{{ trans('site.TradeMarkPart') }} </h4>
                        <h4 class="copyrightSide">{{ trans('site.TradeMarkEmail') }} </h4>            
                        <h4 class="copyrightSide">{{ trans('site.TradeMarkKtrk') }} </h4>
                        <h4 class="copyrightSide"><p class="text-right" style="margin: 5px 0 0; font-size: 14px;">{{ trans('site.Developed') }} <a href="http://ulut.kg/" target="_blank">Улут Софт</a></p> </h4>
                    </div>              
                </div>
                <div class="container footer-bottom">

                </div>
            </div>
        </div>
    </div>

    @include('Front::channel.sport.footer')