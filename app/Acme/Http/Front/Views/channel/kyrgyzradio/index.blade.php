@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радиосу")
@section('styles')
@endsection
@section('content')
    @include('Front::channel.kyrgyzradio.nav')

    <div id="kyrgyzhome" class="container">
        <section id="main-slider" style="margin-bottom: 30px;">
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

      <section>
        <div class="container no-padding">
          <div class="info">
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#" data-toggle="modal" data-target="#myModal">
                <img src="http://ktrk.dev/images/anons/61455876197.png" class="img-responsive" alt="">
                <h3>test1</h3>
              </a>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                </div>
              </div>
            </div>
          </div>
          <div class="info">
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#" data-toggle="modal" data-target="#myModal">
                <img src="http://ktrk.dev/images/anons/61455876197.png" class="img-responsive" alt="">
                <h3>test1</h3>
              </a>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                </div>
              </div>
            </div>
          </div>
          <div class="info">
            <div class="col-md-3 col-sm-12 postshow">
              <a href="#" data-toggle="modal" data-target="#myModal">
                <img src="http://ktrk.dev/images/anons/61455876197.png" class="img-responsive" alt="">
                <h3>test1</h3>
              </a>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                </div>
              </div>
            </div>
          </div>

          <div class="info">
            <div class="col-md-3 col-sm-12">
              <div class="panel panel-default programtitle">
                <div class="panel-heading" style="padding: 5px;">
                  <h3 class="panel-title"><span> - ПРОГРАММА ПЕРЕДАЧ - </span></h3>
                </div>
                <div class="centered">
                  <div id="nt-example1-container" >
                    <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                    <i class="fa fa-arrow-down" id="nt-example1-next" style="right:40px;"></i>
                    <ul id="nt-example1" data-tabs="nt-example1">
                      <li style="">
                        <span>12:30</span>
                        <h4>
                          <p>NON STOP (KG CLIPS)</p>
                        </h4>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        <section id="cta2">
            <div class="container">
                <div class="text-center">
                    <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Кыргыз радиосу</span> - жан дүйнөнүн азыгы </h2>
                    <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">“Кыргыз радиосу көөнөрбөс мурастар казынасы</p>
                </div>
            </div>
        </section>
        <section id="cta" class="wow fadeIn">
            <div class="row">
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
            </div>
        </section>
        <!--/#cta-->
        <section id="services" >
            <div class="container">
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
            </div>
            <!--/.container-->
        </section>
        <!--/#services-->
        <!--/#cta-->
        <section id="portfolio">
            <div class="container">
                <div class="section-header2">
                    <h2 class="section-title text-center wow fadeInDown">Сүрөттөр</h2>
                </div>
                <div class="panel-body">
                    <section>
                        @if($photoGalleries != null)
                            @foreach($photoGalleries as $photoGallery)
                                <div class="col-md-4">
                                    <div class="gallery-item">
                                        <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}" class="thumb">
                                            <img src="{{ asset($photoGallery->status) }}" alt="...">
                                            <i class="fa fa-camera"></i>
                                            <div class="extra">
                                                <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                            </div>
                                        </a>
                                        <h2>
                                            <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                                        </h2>
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
            </div>
            <!--/.container-->
        </section>

        <!--/#cta-->
        <section id="about">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Кыргыз Радиосу жөнүндө</h2>
                    <p class="text-center wow fadeInDown">Радионун негизги урааны “Кыргыз радиосу - жан дүйнөнүн азыгы”. <br> “Кыргыз радиосу көөнөрбөс мурастар казынасы!”</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 wow fadeInLeft">
                        <h3 class="column-title"  style="width: 112%;">.</h3>
                        <!-- 16:9 aspect ratio -->
                        <div class="img-responsive">
                            <img src="{{asset('images/channels/kg-radio.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-9 wow fadeInRight">
                        <h3 class="column-title" style="text-align: left;">Тарыхы</h3>
                        <p>Кыргыз радиосу мурдагы Улуттук мамлекеттик радионун курамынан 2009-жылы июнь айында өзүнчө адабий-музыкалык канал катары бөлүнүп чыккан. Кыргыз радиосу улуттук идеологияны жүргүзгөн, калкка рухий азык тараткан, элибиздин көркөм дөөлөттөрүн жайылткан, адабий-музыкалык багытта жан дүйнөнү тазарткан, адеп-ахлак, каада-салттын мектеби болгон уникалдуу радио. Кыргыз радиосунун концепциясы  - көркөм өнөрдүн таасири аркылуу жалпы угармандардын жан дүйнөсүн байытуу, тарбиялоо. </p>
                        <p>Ырасында эле “Адабият –элдин сезими, элдин рухий турмушунун жемиши” (В.Белинский) же болбосо музыканын тили көтөрүлбөй турган тил. Ал жандын тили (А.Ауэрбах) - деп таамай айтылгандай, адабият менен музыка бүтүндөй элди тазалыкка, адамгерчиликке тарбиялай турган курал. Кыргыз радиосу ушул улуу максатты аркалайт. </p>
                        <p>Күн сайын 12(он эки) саттык уктуруулар эфирге чыгат. Уктуруулар жалаң кыргыз тилинде даярдалат. Уктуруулардын сапатын жакшыртып, угармандардын катарын көбөйтүү максатында редакция жамааты ар убакта талкууларды, талдоолорду өткөрүп, өз кызматын өтөп бүткөн уктурууларды жаап, жаңы долбоорлордун үстүндө изденип, эфирге даярдап келишет. Ошол эле учурда Радионун жүзүн чагылдырып турган роликтер маал-маалы менен жаңыланып турат. Бүгүнкүдөй саясатташкан , күнүмдүк көйгөйлөр адамдын адамдын акыл-эсин чарчатып турган кымгуут заманда угармандардын жан дүйнөсүнө азык берип, эс алууга багыттап, жакшылыкка үндөп келаткан Кыргыз Радиосунун келечеги алдыда</p>
                    </div>
                </div>
                <div class="section-header">
                    <p class="text-justify wow fadeInDown">.</p>
                </div>
            </div>
        </section>
    </div>
@stop
@section('footerscript2')

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