@extends('Front::layouts.default')
@section('title', 'КТРКнын эн белгиси | КТРК')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}"/>
@stop
@section('content')
    <div class="container main-wrapper">

            <div class="row">
                <div class="top-left-block col-md-12">
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
                            <div class="orderby clearfix">
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
                                <div class="variants clearfix">
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
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Ала Тоо 24</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/Ala-too24/Ala-too24.png')}}" alt="Ала Тоо 24" style="background:#E81701;">  
                                        <span>Ала-Тоо 24 телеканалынын эн белгиси төмөнкү форматтарда жеткиликтүү</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/Ala-too24/Ala-too24.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Маданият Тарых Тил телеканалы</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/madaniyat/madaniyat.png')}}" alt="Маданият Тарых Тил" style="background:#860023;">  
                                        <span>Маданият Тарых Тил телеканалынын эн белгиси  төмөнкү форматтарда жеткиликтүү</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/madaniyat/madaniyat.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>МУЗЫКА</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/music/music.png')}}" alt="МУЗЫКА" style="">  
                                        <span>МУЗЫКА телеканалынын эн белгиси  төмөнкү форматтарда жеткиликтүү</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/music/music.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>БАЛАСТАН</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/balastan/balastan.png')}}" alt="БАЛАСТАН" style="background:#ff6160;">  
                                        <span>БАЛАСТАН телеканалынын эн белгиси  төмөнкү форматтарда жеткиликтүү</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/balastan/balastan.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>КТРК СПОРТ</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/sport/sport.png')}}" alt="КТРК СПОРТ" style="background:#007A3C;">  
                                        <span>КТРК СПОРТ телеканалынын эн белгиси  төмөнкү форматтарда жеткиликтүү</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/sport/sport.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Биринчи радио</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/birinchiradio/birinchiradio.png')}}" alt="Биринчи радио" style="">  
                                        <span>Биринчи радио эн белгиси</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/birinchiradio/birinchiradio.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Кыргыз радиосу</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/kyrgyzradio/kyrgyzradio.png')}}" alt="Кыргыз радиосу" style="">  
                                        <span>Кыргыз радиосу эн белгиси</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Миң кыял FM </h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/minkyalfm/minkyalfm.png')}}" alt="Миң кыял FM" style="">  
                                        <span>Миң кыял FM эн белгиси</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/minkyalfm/minkyalfm.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Достук радиосу</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/dostuk/dostuk.png')}}" alt="Достук радиосу" style="">  
                                        <span>Достук радиосу эн белгиси</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/dostuk/dostuk.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Балдар FM</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/baldarfm/baldarfm.png')}}" alt="Балдар FM" style="">  
                                        <span>Балдар FM эн белгиси</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/baldarfm/baldarfm.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
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
                            <div class="orderby clearfix">
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
                                <div class="variants clearfix">
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
                                <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Ала Тоо 24</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/Ala-too24/Ala-too24.png')}}" alt="Ала Тоо 24" style="background:#E81701;">  
                                        <span>Логотип круглосуточного информационного телеканала Ала-Тоо 24 доступен в следующих форматах</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/Ala-too24/Ala-too24.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/Ala-too24/Ala-too24.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Маданият Тарых Тил</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/madaniyat/madaniyat.png')}}" alt="Маданият Тарых Тил" style="background:#860023;">  
                                        <span>Логотип культурно-просветительного канала Маданият Тарых Тил доступен в следующих форматах</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/madaniyat/madaniyat.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>МУЗЫКА</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/music/music.png')}}" alt="МУЗЫКА" style="">  
                                        <span>Логотип музыкально-развлекательного канала МУЗЫКА доступен в следующих форматах</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/music/music.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/music/music.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>БАЛАСТАН</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/balastan/balastan.png')}}" alt="БАЛАСТАН" style="background:#ff6160;">  
                                        <span>Логотип детского образовательного канала БАЛАСТАН доступен в следующих форматах</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/balastan/balastan.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/balastan/balastan.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>КТРК СПОРТ</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/sport/sport.png')}}" alt="КТРК СПОРТ" style="background:#007A3C;">  
                                        <span>Логотип спортивного телеканала КТРК СПОРТ доступен в следующих форматах</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/sport/sport.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/sport/sport.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Биринчи радио</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/birinchiradio/birinchiradio.png')}}" alt="Биринчи радио" style="">  
                                        <span>Логотип радиостанции Биринчи радио</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/birinchiradio/birinchiradio.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/birinchiradio/birinchiradio.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Кыргыз радиосу</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/kyrgyzradio/kyrgyzradio.png')}}" alt="Кыргыз радиосу" style="">  
                                        <span>Логотип радиостанции Кыргыз радиосу</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/kyrgyzradio/kyrgyzradio.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/madaniyat/madaniyat.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Миң кыял FM </h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/minkyalfm/minkyalfm.png')}}" alt="Миң кыял FM" style="">  
                                        <span>Логотип радиостанции Миң кыял FM</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/minkyalfm/minkyalfm.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/minkyalfm/minkyalfm.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Достук радиосу</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/dostuk/dostuk.png')}}" alt="Достук радиосу" style="">  
                                        <span>Логотип радиостанции Достук радиосу</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/dostuk/dostuk.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/dostuk/dostuk.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-radio clearfix"> 
                                <div class="text-center">
                                    <h3>Балдар FM</h3>
                                </div>
                                <hr>
                                <div class="variants clearfix">
                                    <div class="col-md-4 main-logo">
                                        <img src="{{asset('images/logo/baldarfm/baldarfm.png')}}" alt="Балдар FM" style="">  
                                        <span>Логотип радиостанции Балдар FM</span>                                       
                                    </div>
                                    <div class="col-md-8 second form-icon">
                                        <div class="col-md-3 form-icon">                                        
                                            <a href="{{asset('images/logo/baldarfm/baldarfm.ai')}}">           
                                                <img src="{{asset('images/logo/ai.jpg')}}" alt="AI">
                                                <span>AI</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.bmp')}}">           
                                                <img src="{{asset('images/logo/BMP.png')}}" alt="BMP">
                                                <span>BMP</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.eps')}}">           
                                                <img src="{{asset('images/logo/eps.jpg')}}" alt="EPS">
                                                <span>EPS</span>                                  
                                            </a>
                                        </div>                                        
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.jpg')}}">           
                                                <img src="{{asset('images/logo/jpeg.jpg')}}" alt="JPEG">
                                                <span>JPEG</span>                                  
                                            </a>
                                        </div>                                    
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.pdf')}}">           
                                                <img src="{{asset('images/logo/pdf.jpg')}}" alt="PDF">
                                                <span>PDF</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.png')}}">           
                                                <img src="{{asset('images/logo/png.jpg')}}" alt="PNG">
                                                <span>PNG</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.psd')}}">           
                                                <img src="{{asset('images/logo/psd.jpg')}}" alt="PSD">
                                                <span>PSD</span>                                  
                                            </a>
                                        </div>
                                        <div class="col-md-3 form-icon">
                                             <a href="{{asset('images/logo/baldarfm/baldarfm.tif')}}">           
                                                <img src="{{asset('images/logo/tif.jpg')}}" alt="TIF">
                                                <span>TIF</span>                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>

@stop