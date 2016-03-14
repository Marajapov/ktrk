@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радиосу")
@section('styles')
@endsection
@section('content')
@include('Front::channel.kyrgyzradio.nav')
<div id="kyrgyzhome" class="container">
   <section id="main-slider">
      @if($anons->first())
      <div class="owl-carousel">
         @foreach($anons as $row)
         <div class="item">
            <img src="{{asset($row->thumbnail)}}" height="358" width="1600" alt="">
            <div class="slider-inner">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="carousel-content">
                           <h2><span>{{ $row->getNameOne() }}</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.item-->
         @endforeach
      </div>
      <!--/.owl-carousel-->
      @endif
   </section>
   <!--/#main-slider-->
   <section id="anonses">
      <div class="row">
         @if($kyrgyzradiotop)
         <div class="info">
            @foreach($kyrgyzradiotop as $key=> $row)
            <div class="col-md-3 col-sm-12 postshow">
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
            <div class="col-md-3 col-xs-12 pull-right programtitle">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>Уктуруулар программасы</span></h3>
                  </div>
                  @if($program)
                  <div class="centered">
                     <div id="nt-example1-container" >
                        <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                        <i class="fa fa-arrow-down" id="nt-example1-next" style="right:40px;"></i>
                        <ul id="nt-example1" data-tabs="nt-example1">
                           @foreach($program as $row)
                           <li style="">
                              <span>{{ $row->time }}</span>
                              <h4>
                                 <p>{{ $row->name }}</p>
                              </h4>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
                  @endif
               </div>
            </div>
         </div>
         
      </div>
   </section>
   <section id="cta2">
         <div class="text-center">
            <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Кыргыз радиосу</span> - жан дүйнөнүн азыгы </h2>
            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">“Кыргыз радиосу көөнөрбөс мурастар казынасы</p>
         </div>
   </section>
   <section id="cta" class="wow fadeIn">
         <div class="col-md-12">
            @if($quote)
            <div class="quotes-hidden hidden">
               @foreach($quote as $top)
               <div>
                  <img src="{{asset($top->file)}}" alt="">
                  <i class="fa fa-quote-left"></i>
                  <p>{{ $top->getDesc() }}</p>
                  <span class="name">
                  {{ $top->getAuthor() }}
                  </span>
               </div>
               @endforeach
            </div>
            <div class="quotes">
               @foreach($quote as $top)
               <div>
                  <img src="{{asset($top->file)}}" alt="">
                  <i class="fa fa-quote-left"></i>
                  <p>{{ $top->getDesc() }}</p>
                  <span class="name">
                  {{ $top->getAuthor() }}
                  </span>
               </div>
               @endforeach
            </div>
            @endif
         </div>
   </section>
   <!--/#cta-->
   <section id="services" class="hidden">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Уктуруулар</h2>
         </div>
         <div class="row">
            <div class="features">
               @if($kyrgyzradioProjects)
               @foreach($kyrgyzradioProjects as $key=> $project)
               @if($project->kgprogram()->first())
               <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                  <div class="media service-box">
                     <div class="media-body">
                        <div role="tabpanel">
                           <ul class="nav main-tab nav-justified" role="tablist">
                              <li role="presentation" class="active">
                                 <a href="#{{ $project->id}}" role="tab" data-toggle="tab" aria-controls="{{ $project->id}}" aria-expanded="true">{{ $project->getName() }}</a>
                              </li>
                              <li role="presentation">
                                 <a href="#{{ $key+99 }}" role="tab" data-toggle="tab" aria-controls="{{ $key+99 }}" aria-expanded="false">Уктуруу жөнүндө</a>
                              </li>
                           </ul>
                           <div id="tab-content" class="tab-content">
                              <div role="tabpanel" class="tab-pane fade active in" id="{{ $project->id}}" aria-labelledby="{{ $project->id}}">
                                 <div class="onenews">
                                    <div class="panel panel-articles">
                                       <div class="panel-body">
                                          @if($project->kgprogram()->get())
                                          @foreach($project->kgprogram()->get() as $post)
                                          <div class="media">
                                             <div class="media-left">
                                                <a href="{{ route('kyrgyzradio.news', $post) }}">
                                                <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                                                </a>
                                             </div>
                                             <div class="media-body">
                                                <div class="extra">
                                                   <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                   <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                                </div>
                                                <a class="media-heading" href="{{ route('kyrgyzradio.news', $post) }}">{{ $post->getTitle() }}</a>
                                             </div>
                                          </div>
                                          @endforeach
                                          @endif
                                       </div>
                                       <footer>
                                          <a href="{{ route('kyrgyzradio.allnews') }}">Баардык жаңылыктар<i class="fa fa-arrow-right"></i></a>
                                       </footer>
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="{{ $key+99 }}" aria-labelledby="{{ $key+99 }}">
                                 <p>{{ $project->description }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/.col-md-4-->
               @endif
               @endforeach
               @endif
            </div>
         </div>
         <!--/.row-->
   </section>
   <!--/#services-->
   <!--/#cta-->
   <section id="portfolio">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Сүрөтбаяндар</h2>
         </div>
         <div class="panel-body">
            <section>
               @if($photoGalleries != null)
               @foreach($photoGalleries as $photoGallery)
               <div class="col-md-4">
                  <div class="gallery-item">
                     <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}" >
                        <img src="{{ asset($photoGallery->thumbnail_big) }}" alt="...">
                        <div class="extra">
                           <span class="datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                           <h2>
                              <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                           </h2>
                        </div>
                     </a>
                  </div>
               </div>
               @endforeach
               @endif
            </section>
            <footer>
               <a href="{{ route('kyrgyzradio.allphotos') }}">
               <span>Баардык сүрөттөр <i class="fa fa-arrow-circle-right"></i></span>
               </a>
            </footer>
         </div>
   </section>
   <!--/#cta-->
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
            <a class="twitter-timeline" href="https://twitter.com/kyrgyzradiosu" data-widget-id="709260510542368768">Твиты от @kyrgyzradiosu</a>
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
   <section id="about">
         <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Кыргыз Радиосу жөнүндө</h2>
            <p class="text-center wow fadeInDown">Радионун негизги урааны “Кыргыз радиосу - жан дүйнөнүн азыгы”. <br> “Кыргыз радиосу көөнөрбөс мурастар казынасы!”</p>
         </div>
         <div class="row">
             
            <div class="col-sm-12 abouttext wow fadeInRight">
            <h3 class="column-title text-center">Тарыхы</h3>
               <img src="{{asset('images/channels/kg-radio.png')}}" alt="" class="img-responsive fadeInLeft" style="
               float: left;">
               <p>Кыргыз радиосу мындан 80 жыл мурун, тагыраак айтканда, 1931-жылы негизделген. Ал кездеги техникалык жана чыгармачылык мүмкүнчүлүк чектелүү болгондуктан уктурууларды берүү ыкмасы азыркыдан кыйла айырмаланып турган.</p>
               <p>Мезгил өтүп радио кызматкерлеринин тажрыйбасы улам арта  берди.  Жергиликтүү кызматкерлерди ал кезде СССРдин курамындагы башка шаарларга кыска мөөнөттөгү окууларга жөнөтүп, алардын билим деңгээлин, тажрыйбасын өнүктүрүп турушкан. Ошентип 80 жылдын ичинде Кыргыз Радиосунун техникалык жана чыгармачылык мүмкүнчүлүктөрү кеңейип, улам жаңы бийиктиктерди багынтып олтуруп, бүгүнкү күндөгү деңгээлине келип жетти. </p>
               <p>Кыргыз Радиосунда 80 жылдын ичинде радиодо кандай гана чыгармачыл адамдар иштеген жок. Алардын көбү азыр ардагер кызматкерлер. Угарман журтуна аты-жөнү белгилүү болуп, кадыр-сыйга ээ болгон кесиптештерибиз кыйла көп. </p>
               <a class="show-btn" href="{{ route('kyrgyzradio.about')}}">
                  толук маалымат
                  </a>
            </div>

         </div>
   </section>
   <section id="get-in-touch">
      <div class="section-footer">
         <h2 class="section-title text-center wow fadeInDown">Байланыш</h2>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-xs-12">
                  <div class="section-header3">            
                      <h2 class="section-title text-center wow fadeInDown">Дареги</h2>
                      <p class="text-center wow fadeInDown">Кыргызстан, Бишкек  шаары.</p>
                      <p class="text-center wow fadeInDown">Жаш Гвардия бульвары, 59</p>
                  </div>
            </div>
            <div class="col-md-4 col-xs-12">
               <div class="section-header3">            
                   <h2 class="section-title text-center wow fadeInDown">Байланыш телефон:</h2>
                   <p class="text-center wow fadeInDown">Түз эфирге чыгуу: (0312) 65-66-10, 65-67-04</p>
                   <p class="text-center wow fadeInDown">Редакциянын номери: (0312) 39-15-54</p>
               </div>
            </div>            
            <div class="col-md-4 col-xs-12">
               <div class="section-header3">            
                   <h2 class="section-title text-center wow fadeInDown">Сайт:</h2>
                   <p class="text-center wow fadeInDown">www.ktrk.kg/kyrgyzradio</p>
                   <p class="text-center wow fadeInDown">www.facebook.com/kyrgyzradiosu</p>
               </div> 
            </div>
         </div> 
      </div>
      <div class="section-footer chastoty">
         <h2 class="section-title text-center wow fadeInDown">Жыштыктар</h2>
         <ol class=" text-center wow breadcrumb">
            <li>Чүй 106.9</li>
            <li>Жалад-Абад 105.9</li>
            <li>Талас 107.6</li>
            <li>Ысык-Көл 106.0</li>
            <li>Нарын 103.2</li>
            <li>Ош УКВ 71.69 жана 71.81</li>
            <li>Ош УКВ 71.69 жана 71.81</li>
            <li>Баткен УКВ 70.88 жана 68.48</li>
         </ol>
      </div>
   </section><!--/#get-in-touch-->
</div>
@stop
@section('footerScript')
    <!-- Programm title Anima -->
    <script src="{{ asset('js/audio/jquery.newsTicker.js') }}"></script>
    <script>
        var nt_title = $('#nt-title').newsTicker({
            row_height: 30,
            max_rows: 1,
            duration: 3000,
            pauseOnHover: 1
        });
        var nt_example1 = $('#nt-example1').newsTicker({
            row_height: 30,
            max_rows: 3,
            duration: 4000,
            prevButton: $('#nt-example1-prev'),
            nextButton: $('#nt-example1-next')
        });

        var state = 'stopped';
        var speed;
        var add;

    </script>
@stop