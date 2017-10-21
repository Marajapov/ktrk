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
    <meta property="og:image"              content="http://img.youtube.com/vi/{{ $muzkanalvideo->getUrl() }}/hqdefault.jpg" />
  @endif

  <link rel="stylesheet" href="{{ asset('css/audio/jquery.jscrollpane.css') }}"/>

  <script src="{{asset('js/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('js/jquery.jscrollpane.min.js')}}"></script>
  <script>
    $(function(){
      $('.scroll-pane').jScrollPane();
    });
  </script>
@endsection
@section('content')
  @include('Front::channel.muzkanal.nav')
  <!-- Main slider -->
  <div class="container">
    <div class="row fullvideo mb20">
      <div class="col-md-12 videopage v-block">
        <div class="panel panel-video">
          <div class="panel-heading">
            <h3 class="panel-title"><span>{{ trans('radiopages.Clips') }}</span></h3>
          </div>
          <div class="panel-body">
            <div class="panel-subbody">
              @if($muzkanalvideo->program)
                <div class="panel-subheading clearfix">               
                  <span>
                      <a href="{{route('muzkanal.project', $muzkanalvideo->hasProject)}}">
                          {{$muzkanalvideo->hasProject->getNameOne()}}
                      </a>
                  </span>
                </div>
                            @endif
              <div class="v-title">                 
                {{ $muzkanalvideo->getName() }}
                @if(auth()->user())
                  <a class="v-edit" href="{{ route('admin.media.edit', $muzkanalvideo) }}" target="_blank">
                    <i class="fa fa-pencil"></i>
                    {{ trans('site.AdminPostEdit') }}
                  </a>
                @endif
              </div>
              <div class="m-extra v-extra clearfix">
                @if($muzkanalvideo->exclusive == 1)
                  <div class="m-hit l-hit">Эксклюзив</div>
                @endif
                <div class="m-date v-date">
                  {{ $muzkanalvideo->getDay() }} {{ $muzkanalvideo->getMonthRu() }}, {{ $muzkanalvideo->getYear() }}
                </div>
                <div class="m-view v-view">
                  	<svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                    	<g>
                        	<path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                    	</g>
                	</svg>
                  {{ $muzkanalvideo->getViewed() }}
                </div>
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
              </div>
              <div class="panel-content">
                <div class="v-player clearfix">
                  <div class="embed-responsive embed-responsive-16by9 show-video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $muzkanalvideo->getUrl()}}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                  </div>
                  <div class="r-videos">
                    <div class="scroll-pane">
                      <div class="scroll-inner">
                        @if($relatedMedias)
                          @foreach($relatedMedias as $row)

                            <div class="m-block r-block">
                              <a class="m-thumb r-thumb" href="{{ route('muzkanal.video', $row)}}">
                                  <img src="http://img.youtube.com/vi/{{ $row->getUrl()}}/mqdefault.jpg" alt="{{ $row->getName() }}"/>
                              </a>
                              <div class="r-right">
                                <div class="m-extra r-extra clearfix">  
                                    @if($row->program)
                                        <a class="m-project r-project" href="#">
                                            {{$row->hasProject->getNameOne()}}
                                        </a>
                                    @endif                                  
                                    @if($row->exclusive)
                                        <div class="m-hit r-hit">Эксклюзив</div>
                                    @endif
                                    <div class="m-date r-date">
                                      {{ $muzkanalvideo->getDay() }} {{ $muzkanalvideo->getMonthRu() }}, {{ $muzkanalvideo->getYear() }}
                                    </div>
                                    <div class="m-view r-view">
                                        <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                            <g>
                                                <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                            </g>
                                        </svg>
                                        {{ $row->getViewed() }}
                                    </div>
                                </div>
                                <div class="m-title r-title">
                                    <a href="{{ route('muzkanal.video', $row)}}">
                                        {{ $row->getName() }}
                                    </a>
                                </div>
                              </div>
                          </div>                            
                          @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                {!! $muzkanalvideo->getContent() !!}
                
                <div class="col-md-12">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb20">
      <div class="col-md-12">
        <div class="row p-blocks topvideos">
          <div class="panel panel-default panel-carousel">          
            <div class="panel-heading">
              <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
            </div>
            <div class="panel-body">
              <div class="topclips">
                @if($MediaTop1)
                  @foreach($MediaTop1 as $top1)
                  <div class="m-block p-block">
                    <a class="m-thumb p-thumb" href="{{ route('muzkanal.video', $top1)}}">
                      <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/>
                    </a>
                    <div class="m-desc p-desc">
                      <div class="m-extra p-extra clearfix">
                        @if($top1->exclusive == 1)
                          <div class="m-hit p-hit">Эксклюзив!</div>
                        @endif
                        <div class="m-view p-view">
                          <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                              <g>
                                  <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                      C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                              </g>
                          </svg>
                          {{ $top1->getViewed() }}
                        </div>
                      </div>
                      <div class="m-title p-title">
                        <a href="{{ route('muzkanal.video', $top1)}}">
                          {{ $top1->getName() }}
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                @endif
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
  <!--Carousel-->
  <script>
    if ($(window).width() > 768) {      
      $('.topclips').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4500
      });
    }

    if ($(window).width() < 768) {
      $('.topclips').slick({
          infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4500
      });
    }

  </script>
@stop