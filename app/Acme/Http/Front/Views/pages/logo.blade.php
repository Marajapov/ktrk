@extends('Front::layouts.default')
@section('title', 'КТРКнын эн белгиси | КТРК')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}"/>
@stop
@section('content')
    <div class="container main-wrapper">

            <div class="row">
                <div class="top-left-block col-md-9">
                 @if($lc=='kg')
                    <div class="panel panel-default panel-logo">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>КТРКнын эн белгиси</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="text-center">
                                <h4 style="font-weight: bold;">Урматтуу өнөктөштөр!</h4>
                            </div>
                                <title class="text-center" style="display: block;"></title>
                            <h4>Сиздер үчүн төмөндө  КТРКнын расмий эн белгисин колдонуу эрежелери тууралуу маалымат.</h4>
                            <hr>
                            <img src="{{asset('images/logo/LOGO_KTRK.png')}}" alt="">
                            <div class="orderby">
                                <ul>
                                    <li>КТРКнын эн белгиси уникалдуу фирмалык белгиден жана шрифттик жазуудан турат.</li>
                                    <li>Аталышы белгинин астында жазылган.</li>
                                    <li>Тексттик бөлүктү башка шрифт менен терүүгө, көлөмүн өзгөртүүгө жана белгиден бөлөк колдонууга болбойт.</li>
                                    <li>КТРКнын эн белгисинин негизги түсү  ак.</li>
                                    <li>Түссүз вариантта басып чыгаруу күңүрт боз түсү колдонулат.</li>
                                </ul>
                                <div class="logorgb">
                                    <div>C  36</div>
                                    <div>M 29</div>
                                    <div>Y  31</div>
                                    <div>K  0</div>                            
                                </div>                                
                                <div class="logorgb">
                                    <div> </div>
                                    <div>R 163</div>
                                    <div>G 163</div>
                                    <div> </div>                          
                                </div>
                                <div class="text-center">
                                    <h3>Эн белги төмөнкү форматтарда жеткиликтүү:</h3>
                                </div>
                                <hr>
                                <div class="variants">
                                    <div class="col-md-12 first">
                                        <div class="col-md-2">                                        
                                            <a href="{{asset('images/logo/fon.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="">
                                                <span>Фон AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/KTRK.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="">
                                                <span>КТРК PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/logo_ktrk.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="">
                                                <span>Лого КТРК AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="">
                                                <span>Лого КТРК EPS</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="">
                                                <span>Лого КТРК BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK2.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="">
                                                <span>Лого КТРК JPEG</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 first">
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="">
                                                <span>Лого КТРК PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="">
                                                <span>Лого КТРК TIF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK2.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="">
                                                <span>Лого КТРК AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/logo_ktrk.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="">
                                                <span>Лого КТРК JPEG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/logo_ktrk.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="">
                                                <span>Лого КТРК PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/fon.ai')}}">           
                                                <img src="{{asset('images/logo/rar.png')}}" alt="">
                                                <span>Шрифт КТРК</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="panel panel-default panel-logo">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>ЛОГО</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="text-center">
                                <h4 style="font-weight: bold;">Уважаемые партнеры!</h4>
                            </div>
                                <title class="text-center" style="display: block;"></title>
                            <h4>Для Вашего удобства, ниже представлена информация о правилах использования официального логотипа КТРК.</h4>
                            <hr>
                            <img src="{{asset('images/logo/LOGO_KTRK.png')}}" alt="">
                            <div class="orderby">
                                <ul>
                                    <li>Логотип КТРК состоит  из уникального  фирменного знака и шрифтового написания</li>
                                    <li>Название располагается под знаком.</li>
                                    <li>Текстовую часть нельзя перенабирать другим шрифтом, масштабировать и переносить относительно от знака.</li>
                                    <li>Основным цветом логотипа КТРК является белый.</li>
                                    <li>В версиях для печати в черно-белом варианте используется темно-серый.</li>
                                </ul>
                                <div class="logorgb">
                                    <div>C  36</div>
                                    <div>M 29</div>
                                    <div>Y  31</div>
                                    <div>K  0</div>                            
                                </div>                                
                                <div class="logorgb">
                                    <div> </div>
                                    <div>R 163</div>
                                    <div>G 163</div>
                                    <div> </div>                          
                                </div>
                                <div class="text-center">
                                    <h3>Логотип доступен в следующих форматах:</h3>
                                </div>
                                <hr>
                                <div class="variants">
                                    <div class="col-md-12 first">
                                        <div class="col-md-2">                                        
                                            <a href="{{asset('images/logo/fon.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="">
                                                <span>Фон AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/KTRK.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="">
                                                <span>КТРК PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/logo_ktrk.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="">
                                                <span>Лого КТРК AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="">
                                                <span>Лого КТРК EPS</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="">
                                                <span>Лого КТРК BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK2.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="">
                                                <span>Лого КТРК JPEG</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 first">
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="">
                                                <span>Лого КТРК PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="">
                                                <span>Лого КТРК TIF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/LOGO_KTRK2.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="">
                                                <span>Лого КТРК AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/logo_ktrk.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="">
                                                <span>Лого КТРК JPEG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/logo_ktrk.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="">
                                                <span>Лого КТРК PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                             <a href="{{asset('images/logo/fon.ai')}}">           
                                                <img src="{{asset('images/logo/rar.png')}}" alt="">
                                                <span>Шрифт КТРК</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
                <div class="top-right-block col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @if($lc=='kg')
                            <h3 class="panel-title"><span>Жаңылыктар</span></h3>
                            @else
                            <h3 class="panel-title"><span>Новости</span></h3>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop