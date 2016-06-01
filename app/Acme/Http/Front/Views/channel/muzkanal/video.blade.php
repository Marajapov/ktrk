@extends('Front::channel.muzkanal.default')
@section('title', $muzkanalvideo->getName())
@section('styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:url"                content="{{ Request::url()}}" />
  <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
  <meta property="og:type"               content="article" />
  <meta property="og:title"              content="{{ $muzkanalvideo->getName()}}" />
  <meta property="og:description"        content="{{ $muzkanalvideo->getContent() }}" />
  @if($muzkanalvideo->thumbnail_big)
    <meta property="og:image"              content="{{ asset($muzkanalvideo->thumbnail_big) }}" />
  @else
    <meta property="og:image"              content="http://img.youtube.com/vi/{{ $muzkanalvideo->getUrl() }}" />
  @endif

  <link rel="stylesheet" href="{{asset('css/goodshare.css')}}">

  <link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
@endsection
@section('content')
  @include('Front::channel.muzkanal.nav')
  <!-- Main slider -->
  <div class="container">
    <div class="row fullvideo">
      <i class="videoonepage"></i>
      <div class="col-md-9 videopage">
        <div class="panel panel-video">
          <div class="panel-title">
            <h4 class="show-title">
              <a href="{{route ('muzkanal.videos')}}">Музыка</a>
              <i class="fa fa-caret-right"></i>
              <span>{{ $muzkanalvideo->getName()}}</span>
            </h4>
          </div>
          <div class="panel-body">
            <div class="row">
              <article class="col-md-12" data-cat="all-videos">
                <div class="embed-responsive embed-responsive-16by9 show-video">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $muzkanalvideo->getUrl()}}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                </div>
              </article>
            </div>
            <div class="col-md-12 no-padding" style="margin-top: 15px;">
              <span class="content">{!! $muzkanalvideo->getContent() !!}</span>

              <div class="col-md-12 no-padding" style="margin-bottom: 30px">

                @if(auth()->user())
                  <span class="art-edit"><a href="{{ route('admin.media.edit', $muzkanalvideo) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}
                      {{--<span class="glyphicon glyphicon-pencil"></span>--}}  </a>
                    @endif
                  </span>

                <span class="show-extra">
                  <span class="show-date">{{ $muzkanalvideo->getDay() }} {{ $muzkanalvideo->getMonthRu() }}, {{ $muzkanalvideo->getYear() }}</span>
                  <span class="show-view">
                      <i class="fa-view"></i>{{ $muzkanalvideo->viewed }}
                  </span>
                </span>
              </div>

              <footer style="text-align: center">
                <div class="pluso share-buttons">
                  <button class="goodshare btn-fb" data-type="fb">
                    <i class="fa fa-facebook"></i>
                    <span data-counter="fb"></span>
                  </button>
                  <!-- Button with share to Facebook & share counter -->
                  <button class="goodshare btn-vk" data-type="vk">
                    <i class="fa fa-vk"></i>
                    <span data-counter="vk"></span>
                  </button>
                  <button class="goodshare btn-ok" data-type="ok">
                    <i class="fa fa-odnoklassniki"></i>
                    <span data-counter="ok"></span>
                  </button>
                  <button class="goodshare btn-gp" data-type="gp">
                    <i class="fa fa-google-plus"></i>
                    <span data-counter="gp"></span>
                  </button>
                  <button class="goodshare btn-tw" data-type="tw">
                    <i class="fa fa-twitter"></i>
                  </button>
                </div>
              </footer>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3 videopage">
        <div class="panel panel-video">
          <div class="panel-title">
            <h4 class="show-title">
              <span>{{ trans('radiopages.TopCLips') }}</span>
            </h4>
          </div>
          <div class="panel-body">
            <div class="righttopvideo">
              @if($MediaTop1)
                @foreach($MediaTop1 as $top1)

                  <div class="col-md-12" style="margin-bottom:10px;   border-left: 1px solid #A5A2A2;     padding: initial;">
                    <a href="{{ route('muzkanal.video', $top1)}}">
                      <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/></a>
                    @if($top1->exclusive == 1)
                      <div class="ishit">Эксклюзив!</div>
                    @endif
                    <div class="views"><i class="fa fa-eye"></i>{{ $top1->getViewed() }}</div>
                    <div class="item-desc">
                      <ul>
                        <a href="{{ route('muzkanal.video', $top1)}}">
                          <li class="item-artist">{{ $top1->getName() }}</li>
                        </a>
                      </ul>
                    </div>
                  </div>

                @endforeach
              @endif
            </div>
            <footer>
              <a href="{{ route('muzkanal.videos')}}">
                <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
              </a>
            </footer>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-bottom:20px;">
      <div class="col-md-12">
        <div class="row topvideos videostyle">
          <div class="panel panel-default panel-carousel gallery">
            <div class="panel-heading">
              <h3 class="panel-title"><span>{{ trans('radiopages.RelatedCLips') }}</span></h3>
            </div>
            <div class="panel-body">
              <div class="col-md-12 videofix">
                <div class="carousel-slick">
                  @foreach($relatedmuzkanalVideos as $relatedmuzkanalVideo)
                    <div class="col-md-4 col-xs-12">
                      <a href="{{ route('muzkanal.video', $relatedmuzkanalVideo)}}">
                        <img src="http://img.youtube.com/vi/{{ $relatedmuzkanalVideo->getUrl() }}/mqdefault.jpg" alt=""/></a>
                      <div class="item-desc">
                        <ul>
                          <a href="{{ route('muzkanal.video', $relatedmuzkanalVideo)}}">
                            <li class="item-artist">{{ $relatedmuzkanalVideo->getName() }}</li>
                          </a>
                        </ul>
                      </div>
                      @if($relatedmuzkanalVideo->exclusive == 1)
                        <div class="ishit">Эксклюзив!</div>
                      @endif
                      <div class="views"><i class="fa fa-eye"></i>{{ $relatedmuzkanalVideo->getViewed() }}</div>
                    </div>
                  @endforeach
                </div>
                <footer>
                  <a href="{{ route('muzkanal.videos')}}">
                    <span>{{ trans('radiopages.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                  </a>
                </footer>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
@section('footerScript')
  <script src="{{asset('js/goodshare.js')}}"></script>
  <script>
    $(window).load(function(){
      $('.goodshare').each(function(){
        var span = $(this).children('span');
        var counter = span.text();
        if((counter==0) || (counter=='')){
          $(this).addClass('empty');
        }
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $(".search-toggle").click(function () {
        $(".logo-block").addClass("search-show");
        $(".form-search").addClass("visible");
      });
      $(".close-search").click(function () {
        $(".logo-block").removeClass("search-show");
        $(".form-search").removeClass("visible");
      });
    });
  </script>
  <script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.roundabout.js') }}"></script>
  <!-- Fixed Sticky header -->
  <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>
  <!-- Fixed Sticky header -->
  <!--Carousel-->
  <script>
    if ($(window).width() > 768) {
      $('.carousel-slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4500
      });
    }

    if ($(window).width() < 768) {
      $('.carousel-slick').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4500
      });
    }

  </script>
  <script>
    $(document).ready(function () {
      var likes = 12;
      var dislikes = 6;
      $('.like').attr('data-likes', likes);
      $('.dislike').attr('data-dislikes', dislikes);
      $('.text').click(function () {
        $('.like').toggleClass('like_active');
        $('.dislike').toggleClass('dislike_active');
        if ($('.text').text() == 'Vote') {
          $('.text').text('Cancel');
        } else {
          $('.text').text('Vote');
        }
      })
      $('.like').click(function () {
        likes++;
        $('.like').attr('data-likes', likes);
        $('.like').removeClass('like_active');
        $('.dislike').removeClass('dislike_active');
        $('.text').text('Vote');
      })
      $('.dislike').click(function () {
        dislikes++;
        $('.dislike').attr('data-dislikes', dislikes);
        $('.like').removeClass('like_active');
        $('.dislike').removeClass('dislike_active');
        $('.text').text('Vote');
      })
    })
  </script>
@stop