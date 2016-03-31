@extends('Front::channel.dostuk.default')
@section('title', "Достук Радиосу")
@section('styles')
@endsection
@section('content')
@include('Front::channel.dostuk.nav')
<section id="main-slider">
   <div class="banners">
      @if($anons->first())
      @foreach($anons as $row)
      <div>
         <img src="{{asset($row->thumbnail)}}" width="1366" alt="">
         <div class="container">
            <div class="banners-content">
               <h2><span>{{ $row->getNameOne() }}</span></h2>
            </div>
         </div>
      </div>
      @endforeach
      @endif
   </div>
</section>
@include('Front::channel.dostuk.header')
<div class="main-container">
<div id="homepage">
   <section id="anonses">
      <div class="row">
         @if($dostuktop)
         <div class="info">
            @foreach($dostuktop as $key=> $row)
            <div class="col-md-4 col-sm-12 postshow">
               <a href="#" data-toggle="modal" data-target="#{{ $key+99 }}">
                  <img src="{{asset($row->thumbnail)}}" class="img-responsive" alt="">
                  <h3>{{$row->name}}</h3>
               </a>
            </div>
            <!-- Modal -->
            <div id="{{ $key+99 }}" class="modal fade" role="dialog">
               <div class="modal-dialog modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">{{$row->name}}</h4>
                     </div>
                     <div class="modal-body">
                        {!! $row->getDesc() !!}
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @endif
              <div class="col-md-12">
                <footer class="allanons">
                  <a href="{{ route('dostuk.anons') }}">
                    <span>{{ trans('radiopages.AllAnons') }} <i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>
              </div>
         </div>
      </div>
   </section>
   <section id="services" >
      <div class="container">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Peredachi') }}</h2>
         </div>
         <div class="row">
            <div class="col-md-12">

               @if($dostukProjects) 
               <div class="shows-dostuk">
                  @foreach($dostukProjects as $key=> $project)
                  <div>
                  <div class="col-md-12 ukturuu">
                        <div class="media-info">
                           <img class="media-object" src="@if(!($project->getFile())) {{ asset('images/project_default.png') }} @else {{ asset($project->getFile()) }} @endif" alt="{{ $project->getNameOne() }}">

                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               @endif
               </div>
               <div class="col-md-12">
            </div>
         </div>
         <!--/.row-->    
      </div>
      <!--/.container-->
   </section>
   <!--/#services-->
   <section id="portfolio">
      <div class="container">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.PhotoReports') }}</h2>
         </div>
         <div class="panel-body">
            <section>
               @if($photoGalleries != null)
               @foreach($photoGalleries as $photoGallery)
               <div class="col-md-4">
                  <div class="gallery-item">
                     <a href="{{ route('dostuk.photos', $photoGallery) }}" class="thumb">
                        <img src="{{ asset($photoGallery->thumbnail_big) }}" alt="...">
                     </a>
                     <h2>
                        <div class="extra">
                           <span class="camera"> <i class="fa fa-camera"></i> </span>
                           <span class="date">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                        </div>                                              
                        <a href="{{ route('dostuk.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                     </h2>
                  </div>
               </div>
               @endforeach
               @endif
            </section>
            <footer>
               <a href="{{ route('dostuk.allphotos') }}">
               <span>{{ trans('radiopages.Allphotos') }} <i class="fa fa-arrow-circle-right"></i></span>
               </a>
            </footer>
         </div>
      </div>
      <!--/.container-->
   </section>
<!--/#get-in-touch-->
<section id="network" >
   <div class="container network">
      <div class="section-header">
         <h2 class="section-title text-center wow fadeInDown">Биз социалдык тармактарда</h2>
      </div>
      <div class="row">
         <div class="col-md-3">
            <div class="fb-page" style="height: 455px;overflow: hidden;" data-href="https://www.facebook.com/DostukRadiosu" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
               <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="https://www.facebook.com/DostukRadiosu"><a href="https://www.facebook.com/DostukRadiosu">ДОСТУК  FM радиосу</a></blockquote>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="background: #E6E6E6;padding: 0px;border-radius: 3px !important;border: 2px solid #E2E9ED;">
            <a class="twitter-timeline" href="https://twitter.com/DostukKtrk" data-widget-id="709249312098787329">Твиты от @DostukKtrk</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
         </div>
         <div class="col-md-3">
            <div id="ok_group_widget"></div>
            <script>
               !function (d, id, did, st) {
                 var js = d.createElement("script");
                 js.src = "https://connect.ok.ru/connect.js";
                 js.onload = js.onreadystatechange = function () {
                   if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                     if (!this.executed) {
                       this.executed = true;
                       setTimeout(function () {
                         OK.CONNECT.insertGroupWidget(id,did,st);
                       }, 0);
                     }
                   }}
                 d.documentElement.appendChild(js);
               }(document,"ok_group_widget","53948956410105","{width:263,height:455}");
            </script>
         </div>
         <div class="col-md-3">
            <iframe src="{{asset('images/channels/dostuk/inwidget/index.php?height=455&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:263px;height:455px;overflow:hidden;'></iframe>
         </div>
      </div>
   </div>
</section>
   <!--/#portfolio-->
   <section id="about">
      <div class="container">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.AboutDostuk') }}</h2>
         </div>
         @if(app()->getlocale() == 'kg')
         <div class="row">
            <div class="container">
               <h3 class="column-title">Эл достугуна доо кетирбей ыр менен достукка көпүрө болууга ниет кылган радио - "Достук" радиосу</h3>
            </div>
            <div class="col-sm-12 wow fadeInRight">
               <img src="{{asset('images/channels/dostuk.png')}}" alt="" class="img-responsive fadeInLeft" style="
                  float: left;">                  
               <h4> Радио адегенде интернет аркылуу чыга баштаган, ал эми 2015-жылдан тарта аны  санариптик пакеттен табууга болот. «Радионун негизги максаты - өлкөбүздө жашаган этностор аралык достук мамилелердин өнүгүшүнө жана бекемделишине көмөк көрсөтүү эсептелет».</h4>
               <h4>Радио КТРКнын 2013-2015-жылдарга карата өнүгүү стратегиясына, ошондой эле мамлекет башчысынын жарлыгы менен кабыл алынган Кыргызстандагы этностор аралык мамилелер концепциясына ылайык ачылууда. Радионун берүүлөр сеткасы маданият, тарых, искусство жана адабиятка байланышкан темаларды камтыйт. Өлкөбүздө ушундай радионун ачылышы менен Кыргыз Республикасында жашап жатышкан этностордун өз маданий баалуулуктары менен алмашып турушу үчүн аянтча түзүүгө басым коюлат.Ошондой эле радиодо президенттин мамлекеттик тилди өнүктүрүү жөнүндө жарлыгынын аткарылышы үчүн кыргыз тилин окуп-үйрөнүү боюнча өз алдынча долбоор орун алмакчы. </h4>
               <a class="show-btn" href="{{ route('dostuk.about')}}">
               толук маалымат
               </a>
            </div>
         </div>
         @elseif(app()->getlocale() == 'ru')
         <div class="row">
            <div class="container">
               <h3 class="column-title">Радио "ДОСТУК" вещает в онлайн-режиме на сайте www.ktrk.kg в познавательном, литературном и музыкальном формате. </h3>
            </div>
            <div class="col-sm-12 wow fadeInRight">
               <img src="{{asset('images/channels/dostuk.png')}}" alt="" class="img-responsive fadeInLeft" style="
                  float: left;">
               <h3>Основными целями радио "Достук" являются:</h3>
               <h4>• прославление многоязычия и дружбы народов;</h4>
               <h4>• создание высококачественных радиопрограмм в интересах удовлетворения культурно</h4>
               <h4>• углубление и расширение диалога радио со слушателями;</h4>
               <h4>• Цель нашей радиостанции заключается в том, чтобы просвещать молодежь в таких важнейших сферах культуры, как музыка, литература, кино и театр. Знакомить с классическими образцами и культовыми личностями в этих сферах, а также освещать последние достижения, достойные внимания. Тем самым мы хотим расширить кругозор молодежи, повысить ее образованность, помочь воспитать вкус на лучших достижениях литературы, музыки, кино и театра.</h4>
               <h4>• Время   вещания составляет 9 часов в сутки. Программы  выходят в  эфир  на  кыргызском, русском, польском, украинском, дунганском, уйгурском, татарском, узбекском,турецком  языках </h4>
               <a class="show-btn" href="{{ route('dostuk.about')}}">
               подробнее
               </a>
            </div>
         </div>
         @endif
      </div>
   </section>
   <!--/#about-->
   <section id="get-in-touch">
      <div class="container">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Volna2') }}</h2>
         </div>
         <div class="section-header3">
            <div class="center">
               <div class="center">
                  <div class="col-md-12">
                 
                     <div class="col-md-6" style="text-align: right;">
                        <p>8:00-17:00</p>
                     </div>
                  @if(app()->getlocale() == 'kg')
                     <div class="col-md-6">
                        <p>Ар улуттун ырлары жана дүйнөлүк музыка</p>
                     </div>
                  @elseif(app()->getlocale() == 'ru')
                     <div class="col-md-6">
                        <p>Музыка народов мира</p>
                     </div>
                  @endif
                  </div>
               </div>
            </div>
            <div class="section-header3">
            @if(app()->getlocale() == 'kg')
               <h2 class="section-title text-center wow fadeInDown">“Биринчи” радионун толкунунда:</h2>
               <p class="text-center wow fadeInDown">Ишемби саат 10.00-18.00<br> Жекшемби саат 17.00-21.00</p>               
            @elseif(app()->getlocale() == 'ru')
               <h2 class="section-title text-center wow fadeInDown">На волне Биринчи радио:</h2>
               <p class="text-center wow fadeInDown">10.00-18.00 суббота<br> 17:00-21:00 воскресенье</p>
            @endif
            <h2 class="section-title text-center wow fadeInDown">Онлайн</h2>
               <p class="text-center wow fadeInDown"><a href="http://www.ktrk.kg/online/online-dostuk.php" onclick="window.open(this.href, '', 'scrollbars=1,height='+Math.min(210, screen.availHeight)+',width='+Math.min(400, screen.availWidth)); return false;" style="color:#fff;">http://www.ktrk.kg/online/online-dostuk.php</a></p>
            </div>
         </div>
   </section>

   <section id="contacts">
<div class="container">
      <div class="section-header">
         <h2 class="section-title text-center wow fadeInDown">{{ trans('site.BaikoochuKeneshContacts')}}</h2>
      </div>
            @if(app()->getlocale() == 'kg')
            <div class="row">
               <div class="col-md-4 address">
                  <h3><i class="fa fa-map-marker"></i> {{ trans('radiopages.Address') }}</h3>
                  <ul>
                     <li><i class="fa fa-location-arrow"></i> Кыргызстан, Бишкек  шаары</li>
                     <li><i class="fa fa-home"></i> Жаш Гвардия бульвары, 59</li>
                  </ul>
               </div>
               <div class="col-md-4 address">
                  <h3><i class="fa fa-phone"></i> Байланыш телефон:</h3>
                  <ul>
                     <li><i class="fa fa-microphone"></i> Редакция: 0312 65 85 05</li>
                     <li><i class="fa fa-commenting-o"></i> Студия: 0312 65 66 04 <span style="  display: inherit; text-align: center;">0312 39 21 90</span></li>
                  </ul>
               </div>
               <div class="col-md-4 address">
                  <h3><i class="fa fa-envelope-o"></i>Сайт:</h3>
                  <ul>
                     <li><i class="fa fa-home"></i>Сайт: ktrk.kg/dostuk</li>
                     <li><i class="fa fa-microphone"></i>Онлайн: ktrk.kg/online/dostuk.php</li>
                  </ul>
               </div>
            </div>
            @elseif(app()->getlocale() == 'ru')
            <div class="row">
               <div class="col-md-4 address">
                  <h3><i class="fa fa-map-marker"></i> {{ trans('radiopages.Address') }}</h3>
                  <ul>
                     <li><i class="fa fa-location-arrow"></i> Кыргызстан г. Бишкек</li>
                     <li><i class="fa fa-home"></i>блв.Молодой Гвардии, 599</li>
                  </ul>
               </div>
               <div class="col-md-4 address">
                  <h3><i class="fa fa-phone"></i>Контактный телефон:</h3>
                  <ul>
                     <li><i class="fa fa-microphone"></i> Редакция: 0312 65 85 05</li>
                     <li><i class="fa fa-commenting-o"></i> Студия: 0312 65 66 04 <span style="  display: inherit; text-align: center;">0312 39 21 90</span></li>
                  </ul>
               </div>
               <div class="col-md-4 address">
                  <h3><i class="fa fa-envelope-o"></i>Сайт:</h3>
                  <ul>
                     <li><i class="fa fa-home"></i>Сайт: ktrk.kg/dostuk</li>
                     <li><i class="fa fa-microphone"></i>Онлайн: ktrk.kg/online/dostuk.php</li>
                  </ul>
               </div>
            </div>
            @endif
</div>
   </section>
   </div>
</div>
@stop
@section('footerScript')
<script>
   $('.banners').slick({
     dots: false,
     infinite: true,
     arrows: true,
     speed: 300,
     slidesToShow: 1,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 3500
   });

   $('.shows-dostuk').slick({
     infinite: true,
     slidesToShow: 3,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2500
   });
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
   fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@stop