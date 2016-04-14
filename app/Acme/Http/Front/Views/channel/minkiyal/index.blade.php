@extends('Front::channel.minkiyal.default')
@section('title', "Миң Кыял Фм")
@section('styles')
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
<nav id="main-menu" class="navbar navbar-minheader container-fluid">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
            <img src="{{asset('images/channels/min-kiyal-min.png')}}" alt="">
            <h4 class="minkiyal_brand">Миң кыял FM</h4>
            </a>
            <!-- <p class="navbar-text">Кыялдар орундалат</p> -->
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Башкы барак" class="red-tooltip"><i class="fa fa-home"></i></a></li>
               <li><a href="#report" data-toggle="tooltip" data-placement="bottom" title="Сүрөтбаяндар" class="red-tooltip"><i class="fa fa-picture-o"></i></a></li>
               <li><a href="#about" data-toggle="tooltip" data-placement="bottom" title="Биз жөнүндө" class="red-tooltip"><i class="fa fa-info-circle"></i></a></li>
               <li><a href="{{route('minkiyal.djs')}}" data-toggle="tooltip" data-placement="bottom" title="Диджейлер" class="red-tooltip"><i class="fa fa-microphone"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <div class="online">
                  <h3><i class="fa fa-microphone"></i>Түз эфир</h3>
                  <object width="65" height="40" data="http://www.ktrk.kg/online/uppod.swf">
                     <param name="bgcolor" value="#ffffff" />
                     <param name="allowFullScreen" value="false" />
                     <param name="allowScriptAccess" value="false" />
                     <param name="audio" value="http://www.ktrk.kg/online/uppod.swf" />
                     <param name="flashvars" value="comment=KTRK&amp;st=03AEEZykN3Q3Q3QH3zkOk1mwXRWNvz3b1XAxYTtj1mzC5kA2uyb1kOk1mwXRWNvhzdwf9vwjzC5k=jQZi6jNf1kOk1mwXRWHNXzBGDY31X=jOkZ2sN6HsQfzC5kev0kttj1vL2NXzC5k1sQE3Q2GkTCGfFdGJTCHwXpvQXeWNhHm0X1hsNkTWwWTSUhTd0kNtj1JTWwf9vwnY31DX1CYLex5W=jaktjR1i6W0kbSal1C0V9Rv1XAuaTtj1tzC5kb42Qi63Gktj1ozfUrd&amp;file=http://85.113.29.232:8081" />
                  </object>
               </div>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
</nav>
<div id="main-slider">
    <div class="banners">
        @if($anons)
            @foreach($anons as $banners)
                <div>
                    <img src="{{asset($banners->thumbnail)}}" width="1366" height="550" alt="">
                    <div class="container">
                        <div class="banners-content">
                            {{--<h2><span>{{ $row->getNameOne() }}</span></h2>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div class="container main_back">
    <div class="trouble">
        <div class="slider-overlay"></div>
        @if($anonstop)
           <div class="t-block">
           @foreach($anonstop as $key=> $row)
              <div>
                  <div class="overlay"></div>
                     <a href="{{ $row->url }}">
                     <img src="{{asset($row->thumbnail)}}" alt=""/>
                     </a>
                  <div class="show-info">
                    <!--  <h4>Аяна </h4>
                     <span class="show-day">16-10-94</span>
                     <span class="show-time">11:55</span> -->
                  </div>
              </div>
              @endforeach
           </div>
         @endif
    </div>

   <div class="info">
      @if($videoLive)
      <div id="allposts">
      <h3 class="title-left" style="padding-bottom: 20px;">Видео Live</h3>
         @foreach($videoLive as $key=> $live)
         <div class="col-md-3 col-sm-12 postshow">
            <a href="#">
               <img src="{{asset($live->thumbnail)}}" class="img-responsive" alt="">
               <span class="postshow-name">
                  <h3>{{$live->name}}</h3>
               </span>
            </a>
         </div>
         @endforeach
      </div>
      @endif
   </div>
   <div class="newsstream">
      <div class="col-md-7">
         <div class="row">
         <h3 class="title-left" style="padding-bottom: 5px;">Жанылыктар</h3>
         <h3 class="allright"><a href="{{ route('minkiyal.allnews')}}">Баардыгы <i class="fa fa-arrow-right"></i></a></h3>
         @if($popArticles)
            @foreach($popArticles as $post)
            <div class="col-md-4 col-sm-12 postshow">
               <a href="#" data-toggle="modal" data-target="#{{ $key+99 }}">
                  <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                  <span class="postshow-name">
                     <div class="extra">
                        <span class="date">{{ $post->getDay() }} , {{ $post->getMonthRu() }}</span>
                        <span class="views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                     </div>
                     <a class="media-heading" href="{{ route('minkiyal.news', $post) }}">{{ $post->getTitle() }}</a>
                  </span>
               </a>
            </div>
            @endforeach
         @endif
         </div>
      </div>
      <div class="col-md-5">
      <!-- <h3 class="title-left">YouTube</h3> -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uVri5f7Y080?rel=0&amp;controls=0&amp;showinfo=0" style="height: 235px;"></iframe>
      </div>
      </div>
   </div>

   <div class="dijeys">
      <h3 class="title-left" style="padding-bottom: 5px;">Диджейлер</h3>
      <div class="row">
         <div class="radio-dj">
           <div>
               <div class="col-md-12">
                  <div class="hexagon">
                     <img class="d-img" src="{{asset('images/channels/minkiyal/vj/2.png')}}" alt="">            
                  </div>
                   <div class="d-info">
<!--                      <div class="work">
                        <span>DJ</span>
                     </div> -->
                     <span class="name">Расул Мырзатегин</span>
                  </div>
               </div> 
           </div>
           <div>
               <div class="col-md-12">
                  <div class="hexagon">
                     <img class="d-img" src="{{asset('images/channels/minkiyal/vj/1.png')}}" alt="">            
                  </div>
                   <div class="d-info">
<!--                      <div class="work">
                        <span>DJ</span>
                     </div> -->
                     <span class="name">Жазгүл Жолдубай кызы</span>
                  </div>
               </div> 
           </div>
           <div>
               <div class="col-md-12">
                  <div class="hexagon">
                     <img class="d-img" src="{{asset('images/channels/minkiyal/vj/3.png')}}" alt="">            
                  </div>
                   <div class="d-info">
<!--                      <div class="work">
                        <span>DJ</span>
                     </div> -->
                     <span class="name">Улан Улукболсун</span>
                  </div>
               </div>
           </div>
           <div>
               <div class="col-md-12">
                  <div class="hexagon">
                     <img class="d-img" src="{{asset('images/channels/minkiyal/vj/4.png')}}" alt="">            
                  </div>
                   <div class="d-info">
<!--                      <div class="work">
                        <span>DJ</span>
                     </div> -->
                     <span class="name">Акыл Жеңишбек уулу</span>
                  </div>
               </div>
           </div>
           <div>
               <div class="col-md-12">
                  <div class="hexagon">
                     <img class="d-img" src="{{asset('images/channels/minkiyal/vj/5.png')}}" alt="">            
                  </div>
                   <div class="d-info">
<!--                      <div class="work">
                        <span>DJ</span>
                     </div> -->
                     <span class="name">Канат Кадыржан</span>
                  </div>
               </div>
           </div>
           <div>
               <div class="col-md-12">
                  <div class="hexagon">
                     <img class="d-img" src="{{asset('images/channels/minkiyal/vj/6.png')}}" alt="">            
                  </div>
                   <div class="d-info">
<!--                      <div class="work">
                        <span>DJ</span>
                     </div> -->
                     <span class="name">Бекзат Калыбек уулу</span>
                  </div>
               </div>
           </div>
         </div>
      </div>
   </div>
   <div class="allgallery clearfix">
      <div class="title">
         <h3>Сүрөтбаяндар</h3>
         <h3 class="allright"><a href="{{ route('minkiyal.posts')}}">Баардыгы <i class="fa fa-arrow-right"></i></a></h3>
      </div>
      @if($photoGalleries)
      <div class="row allcol">
         @foreach($photoGalleries as $photoGallery)
         <div class="col-md-4 second">
            <a href="{{ route('minkiyal.post', $photoGallery) }}">
               <img src="{{ asset($photoGallery->thumbnail_big) }}" class="img-responsive" alt="">
               <h3>{{ $photoGallery->getName() }}</h3>
            </a>
            <div class="extra">
               <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}</span>
            </div>
         </div>
         @endforeach
      </div>
      @endif
   </div>
   <div class="info_shows">
       <h3>Уктуруулар</h3>
      <div class="row">
         <div class="col-md-3 col-sm-12 postshow">
            <a href="#" data-toggle="modal" data-target="#modal1">
               <img src="http://dostuk.ktrk.kg/images/anons/161455946978.png" class="img-responsive" alt="">
               <h3>БАЛ КАЙМАК</h3>
            </a>
         </div>
         <!-- Modal -->
         <div id="modal1" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                     <h4 class="modal-title">БАЛ КАЙМАК</h4>
                  </div>
                  <div class="modal-body">
                     “БАЛ КАЙМАК” –  мүнөзү боюнча куттуктоо программасы. Аталган программа күнүнө 3 жолу түз эфирде чыгат. “Бал каймак” аркылуу радионун угармандар менен тыгыз байланышы түзүлүп турат. Угармандар бул программанын алкагында түз эфирдеги телефон аркылуу байланышка чыгып, куттуктоо, салам жана каалоо-тилектерин айта алышат. Ошондой эле, 10 00 кыска номерине СМС-билдирүү жиберүү аркылуу да куттуктоолорун өз дарегине жеткире алышат.
                     <br/>
                     <span>08:00-10:00</span><br/>
                     <span>13:00-14:00</span><br/>
                     <span>22:00-23:00</span>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12 postshow">
            <a href="#" data-toggle="modal" data-target="#modal2">
               <img src="http://dostuk.ktrk.kg/images/anons/161455946978.png" class="img-responsive" alt="">
               <h3>СВЕТ ЖОК</h3>
            </a>
         </div>
         <!-- Modal -->
         <div id="modal2" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                     <h4 class="modal-title">СВЕТ ЖОК</h4>
                  </div>
                  <div class="modal-body">
                     “СВЕТ ЖОК” –  мүнөзү боюнча таанышуу программасы. Жалгыздыктан тажаган угармандар үчүн жакшы мүмкүнчүлүк. Сүйүктүүсүн же жакшы дос, санаалаш, пикирлеш тапкысы келген угармандар түз эфирдеги телефон аркылуу байланышка чыгып, өзүнүн критерийлерин айтып, телефондорун таштайт. Ушул эле учурда бул программанын алкагында эң активдүү ролду 10 00 кыска номериндеги СМС-кызматы ойнойт.
                     <br/>
                     <span>Дүйшөмбү-Жума. 24:00-01:00</span>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12 postshow">
            <a href="#" data-toggle="modal" data-target="#modal4">
               <img src="http://dostuk.ktrk.kg/images/anons/161455946978.png" class="img-responsive" alt="">
               <h3>ПАТЕФОН</h3>
            </a>
         </div>
         <!-- Modal -->
         <div id="modal4" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                     <h4 class="modal-title">ПАТЕФОН</h4>
                  </div>
                  <div class="modal-body">
                     “ПАТЕФОН” – мүнөзү боюнча көңүл ачуучу жана конкурстук программа. Уктурууга музыкалык аспаптардын биринде ойной алган 4 ырчы катышат. Булар эки-экиден командага бөлүнүп өз ара күч сынашат. Таймаштын талабына ылайык, катышуучулар музыкалык аспаптын коштоосунда жандуу үн менен бир куплеттен ырдап берүүлөрү керек. Тапшырма катары кайсыдыр бир тамга берилет, аткарыла турган чыгарманын биринчи куплети ушул тамгадан башталышы зарыл. Мисалы: к тамгасы берилсе, “кыргыз жери сүйөм сени”. Программанын жеңүүчүлөрү түз эфирдеги телефон аркылуу байланышка чыккан жети угармандын добушу менен аныкталат. Ошондой эле 1037 кыска номерине келген СМС-добуштар, студияга ырчыларга колдоо тобу катары келген 8 угармандардын добушу   да эсепке алынат. Программа негизинен кыргыз музыка дүйнөсү  жандуу үн менен ырдоого шыктуу таланттардан уучу кур эмес экендигин далилдөө.
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12 postshow">
            <a href="#" data-toggle="modal" data-target="#modal3">
               <img src="http://dostuk.ktrk.kg/images/anons/161455946978.png" class="img-responsive" alt="">
               <h3>BashBarmak-show</h3>
            </a>
         </div>
         <!-- Modal -->
         <div id="modal3" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                     <h4 class="modal-title">BashBarmak-show</h4>
                  </div>
                  <div class="modal-body">
                     “BashBarmak-show” –  мүнөзү боюнча көңүл ачуучу программа. Эфирдик классификациясы боюнча эки саатык кечки шоу. Бул программанын алкагында угармандар, эки саат бою бир катар шаттуу оюндарга катышып, керектүү кеңештерди, гороскопту угуп, программанын башталышында тандалып алынган күндүн темасы боюнча пикир алышат.
                     <br/>
                     <span>Дүйшөмбү-Жума. 17:00-19:00</span>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="network">
      <div class="title" style="margin:0;margin-bottom: 10px;">
         <h3>Биз социалдык тармактарда </h3>
      </div>
      <div class="row">
         <div class="col-md-3">
            <div class="fb-page" style="height: 455px;overflow: hidden;" data-href="https://www.facebook.com/MinKyalFm/?ref=hl" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
               <div class="fb-xfbml-parse-ignore">
                  <blockquote cite="https://www.facebook.com/MinKyalFm/?ref=hl"><a href="https://www.facebook.com/MinKyalFm/?ref=hl">МИҢ КЫЯЛ  FM радиосу</a></blockquote>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="background: #E6E6E6;padding: 0px;border-radius: 3px !important;">
            <a class="twitter-timeline" href="https://twitter.com/mk1000radio" data-widget-id="700201477931925504">Твиты от @mk1000radio</a>
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
               }(document,"ok_group_widget","57765907202108","{width:253,height:455}");
            </script>
         </div>
         <div class="col-md-3">
            <iframe src="{{asset('images/channels/minkiyal/inwidget/index.php?height=455&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:235px;height:455px;overflow:hidden;'></iframe>
         </div>
      </div>
   </div>
   <div class="aboutfm">
      <div class="title">
         <h3>“МИҢ КЫЯЛ FM” РАДИОСУ ЖӨНҮНДӨ </h3>
      </div>
      <div class="col-sm-12 wow fadeInRight">
         <img src="{{asset('images/channels/min-kiyal.png')}}" alt="" class="img-responsive fadeInLeft" style="
            float: left; height: 220px; width: auto; padding-right: 10px;">
         <h4> Кыргыз Коомдук Телерадиокорпорациянын 3-каналы болгон “Миң кыял FM” радиосу 2007-жылы 1-январда ачылган. Кыргыз улуттук Радиосунун 1, 2–программаларынан эфирдик классификациясы аркылуу кескин айырмаланат, тактап айтканда, “Миң-Кыял  FM” 80% музыкадан, 20%ы маалыматтан турат. Радио программаларын музыкалык-маалыматтык форматтын  принциптерин сактоо менен кыргыз тилинде гана даярдайт. Музыкалык саясаты боюнча Кыргызстандык гана аткаруучулардын кыргыз жана орус тилдүү чыгармаларын угармандар арасында жайылта турган алгачкы радиостанция. Ошондой эле рекламалык кызмат дагы эки тилде жүргүзүлөт. Маалымат таратууда “Миң кыял FM” радиосу “Би-Би-Си” Бүткүл дүйнөлүк  маалымат кызматы менен өнөктөш экендиги менен өзгөчөлүү. </h4>
         <h4>“Миң кыял FM” Бишкек шаары жана Чүй облусу боюнча <span class="minkiyal_fm">FM 103.7 МГ ц</span> жыштыгында,  “стерео” режиминде,  жалпы көлөмү 24 саат  бою  иш алып барат. Мындан сырткары,  радиостанция учурда Баткенде <span class="minkiyal_fm">FM 102.2 МГ ц</span>, Ош жана Жалал Абад облустары боюнча  <span class="minkiyal_fm">FM 106.3 МГ ц</span>, Нарын облусунда  <span class="minkiyal_fm">FM 107.7 МГ ц</span>, Талас облусунда <span class="minkiyal_fm">FM 105.7 МГ ц</span>, Ысык Көл облусунда <span class="minkiyal_fm">FM 100.6 МГ ц</span> жыштыктарында уктурулат.</h4>
      </div>
      <div class="col-sm-12">
         <a class="show-btn text-center" href="{{ route('minkiyal.about')}}">
         толук маалымат
         </a>
      </div>
   </div>
   <div class="infobar">
      <div class="contacts">
         <div class="title">
            <h3>Байланыш</h3>
         </div>
         <div class="row">
            <div class="col-md-4 address">
               <h3><i class="fa fa-map-marker"></i> Дареги</h3>
               <ul>
                  <li><i class="fa fa-location-arrow"></i> Кыргызстан, Бишкек  шаары</li>
                  <li><i class="fa fa-home"></i> Жаш Гвардия бульвары, 59</li>
               </ul>
            </div>
            <div class="col-md-4 address">
               <h3><i class="fa fa-phone"></i> Байланыш телефон:</h3>
               <ul>
                  <li><i class="fa fa-microphone"></i> Түз эфир: 0312 65 37 14</li>
                  <li><i class="fa fa-commenting-o"></i> sms-портал: 10 00</li>
               </ul>
            </div>
            <div class="col-md-4 address">
               <h3><i class="fa fa-envelope-o"></i>E-mail:</h3>
               <ul>
                  <li><i class="fa fa-envelope"></i> mkfmradio@gmail.com</li>
                  <li><i class="fa fa-facebook-official"></i>facebook.com/MinKyalFm</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</body>
@stop
@section('footerScript')
<script>
   $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
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
</script>
<script>
   $('.anons-carousel').slick({
     autoplay: true,
     autoplaySpeed: 6500,
     centerPadding: '0',
     dots: true,
     arrows: false,
     infinite: true,
     slidesToShow: 2,
     speed: 400,
   });
</script>
<script>

$('.t-block').slick({
  centerMode: true,
  centerPadding: '180px',
  slidesToShow: 1,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

   $('.radio-dj').slick({
     slidesToShow: 4,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 3500,
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