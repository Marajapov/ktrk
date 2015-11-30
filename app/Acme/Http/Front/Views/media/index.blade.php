@extends('Front::layouts.default')
@section('title', 'Видеопортал | КТРК')

@section('content')

  <div class="shows-slider">
    <div class="slider-overlay"></div>
    <div class="shows-carousel container">
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/projects/ala-too.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          <h4>Ала-Тоо</h4>
          <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
          <span class="show-time">19:30 / 21:30</span>
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/projects/jumakairyk.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          <h4>Жумакайрык</h4>
          <span class="show-day">{{ trans('site.Sunday') }}</span>
          <span class="show-time">21:00</span>
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="{{ asset('images/projects/zamana.jpg') }}" alt=""/>
        </a>
        <div class="show-info">
          <h4>Замана</h4>
          <span class="show-day">{{ trans('site.Monday') }} - {{ trans('site.Friday') }}</span>
          <span class="show-time">07:00</span>
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="images/anons/1.jpg" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="images/anons/2.jpg" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
      <div>
        <div class="overlay"></div>
        <a href="#">
          <img src="images/anons/3.jpg" alt=""/>
        </a>
        <div class="show-info">
          жекшемби 21:00
        </div>
      </div>
    </div>
  </div>

  <div class="container main-wrapper">

    <div class="row">
      <section class="content clearfix">

        <div class="clearfix">
          <div class="top-left-block col-md-12">
            <div class="panel panel-default panel-videos">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Видеопортал
                </h3>
              </div>
              <div class="panel-body">

                <ul id="myTabs" class="nav nav-tabs">
                  @foreach($mediaCategories as $key=>$MediaCategory)
                    <li class="@if($MediaCategory->getVideoType() == 'all') active @endif">
                      <a href="#{{ $MediaCategory->getVideoType() }}" data-toggle="tab">{{ $MediaCategory->getName() }}</a>
                    </li>
                  @endforeach
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  @foreach($mediaCategories as $key=>$MediaCategory)
                    <div role="tabpanel" class="tab-pane @if($MediaCategory->getVideoType() == 'all') active @endif clearfix" id="{{ $MediaCategory->getVideoType() }}">
                      <div class="row">
                        {{-- @foreach($mediaAll as $media) --}}
                          <div class="col-md-3 media-ctg">
                            @include('Front::partials.leftMediaCategories')
                          </div>
                        <div class="col-md-9 panel panel-default media-videos">
                          <div class="row">

                            <div class="panel-heading">
                              <h3>Акыркы видеолор</h3>
                            </div>

                            <div class="panel-body">
                              @foreach($mediaAll as $key=>$media)
                                <article class="col-md-4" data-cat="all-videos">
                                  <a href="#" class="img">
                                    <img src="http://img.youtube.com/vi/cwLRQn61oUY/mqdefault.jpg" alt=""/>
                                    <h4><i class="fa fa-play-circle-o"></i>Замана</h4>
                                  </a>
                                  <a href="#" class="title">
                                    <h4>{{-- $media->videoType()->getName() --}} {{ $MediaCategory->getName() }}</h4>
                                  </a>
                                </article>
                              @endforeach
                            </div>

                            <div class="panel-heading">
                              <h3>Топ видеолор</h3>
                            </div>

                            <div class="panel-body">
                              <article class="col-md-4" data-cat="all-videos">
                                <a href="#" class="img">
                                  <img src="http://img.youtube.com/vi/cwLRQn61oUY/mqdefault.jpg" alt=""/>
                                  <h4><i class="fa fa-play-circle-o"></i>Замана</h4>
                                </a>
                                <a href="#" class="title">
                                  <h4>{{-- $media->videoType()->getName() --}} {{ $MediaCategory->getName() }}</h4>
                                </a>
                              </article>
                              
                              
                            </div>

                          </div>
                        </div>

                        {{-- @endforeach --}}
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>

@stop

@section('footerScript')

  <script>
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
  </script>

  <script>

    //    var current = $('.shows-carousel').slick('slickCurrentSlide');

    $('.shows-carousel').slick({
//        autoplay: true,
//        autoplaySpeed: 2000,
      centerPadding: '0',
      dots: true,
      infinite: true,
      slidesToShow: 1,
      speed: 600
    });
  </script>
@stop
