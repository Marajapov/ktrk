@extends('Front::channel.muzkanal.default')
@section('title', "Хит-Парад")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')
<!-- Main slider -->
<div class="container">
  <div class="row">
    
    <div class="panel clearfix panel-hitparad">
      <div class="col-md-8 topchart topchart-top">
        <div class="panel-heading">
          <div class="panel-title">
            <h4 class="show-title">
            <a href="#">Музыка</a>
            <i class="fa fa-caret-right"></i>
            <span>Хит-Парад ТОП-10</span>
            </h4>
          </div>
        </div>
        <div class="panel-body">
          <div class="col-xs-12 toplist videofix" style="margin-bottom: 15px;">
            @if($hitNumbers)
            @foreach($hitNumbers as $key => $hit)
              @if($key == 0)
              <div class="dateFromTo center">
                <p>Дата: {{ $hit->to_date }} - {{ $hit->from_date}}</p>
              </div>
              @endif
            @endforeach
            @foreach($hitNumbers as $key => $hit)
            <div class="row topborder">
            
              <div class="col-xs-1 topnumber">
                <h2>{{ $key+1 }}</h2>
              </div>
              <div class="col-xs-1 topimg">
                <!-- abakan -->
              </div>
              
              <div class="col-xs-8 topartist">
                <h3>{{ $hit->media_name }}</h3>
              </div>

              <div class="col-xs-1 toplike">
                
                <input type="hidden" value="1" name="like">
                <span class="topcounts">{{$hit->like_count}}</span>
                <button type="hidden" class="like-button" data-container="body" data-toggle="popover" data-placement="left" data-content="{{ trans('radiopages.VoteYes') }}">
                <i class="fa fa-star red-tooltip" ></i>
                <!-- data-toggle="tooltip" data-placement="right" title="Like"                            -->
                </button>
                
              </div>
              <div class="col-xs-1 topclip">
                <a href="{{route('muzkanal.video', $hit)}}"><i class="glyphicon glyphicon-play"></i> </a>
              </div>
            </div>
            @endforeach
            @endif
          </div>

            <nav>
              <ul class="pagination">

                  <li>
                      <a href="{{ route('muzkanal.week', ['page' => 1]) }}" class="btn btn-default @if($hitNumbers->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                  </li>
                  <li>
                      <a href="{{ $hitNumbers->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  </li>

                  @for($i = 0, $j = 1; $i < $hitNumbers->total(); $i+=$perPage)
                      <li class="@if(($j > $hitNumbers->currentPage()+10) || ($j < $hitNumbers->currentPage()-10)) hidden @endif">
                          <a href="{{ route('muzkanal.week', ['page' => $j]) }}" class="btn btn-default @if($hitNumbers->currentPage() == $j) active @endif">
                              {{ $j++ }}
                          </a>
                      </li>
                  @endfor

                  <li>
                      <a href="{{ $hitNumbers->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                  </li>

                  <li>
                      <a href="{{ route('muzkanal.week', ['page' => ceil($hitNumbers->total()/$perPage)]) }}" class="btn btn-default @if($hitNumbers->currentPage() == ceil($hitNumbers->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                  </li>

              </ul>
            </nav>

        </div>
      </div>
      <div class="col-md-4 topchart topchart-fix">
        <div class="panel" style="box-shadow: none;">
          <div class="panel-heading">
            <div class="panel-title">
              <h4 class="show-title">
              <span>{{ trans('radiopages.WeekHit') }}</span>
              </h4>
            </div>
          </div>
          @if($hitNumbers)
          @foreach($hitNumbers->take(1) as $hit)
          <div class="hit-nedeli">
            <!-- abakan2             -->
          </div>
          @endforeach
          @endif
          <div class="panel-body">
            
            <div class="well tandoo">
              @if(app()->getlocale() == 'ru')
              <span class="t-title"><p>Смотрите на телеканале “МУЗЫКА” КТРК Телепроект ХИТ – ПАРАД каждое воскресенье в 22:10. Голосуйте за лучший клип недели!</p></span>
              <span class="t-body"><p> Отправьте свой голос на короткий номер <strong>3315</strong> а также на наш номер в WHATSAPP <button type="button" class="btn btn-success btn-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i> 0550 70 33 15</button> и на сайте телеканала!</p></span>
              @elseif(app()->getlocale() == 'kg')
              <span class="t-title"><p>"МУЗЫКА" телеканалынын ХИТ-ПАРАД долбоорунун эң мыкты клибин тандаңыз.</p></span>
              <span class="t-body"><p> Добуш берүү <strong>3315</strong> кыска номуруна эфир аркылуу, <button type="button" class="btn btn-success btn-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i> 0550 70 33 15</button> номуруна WhatsApp тиркемесине жана биздин сайттан кабыл алынат.</p></span>
              @endif
              <div class="whatsapp text-center">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-bottom:15px;">
      <div class="row topvideos ">
        <div class="panel panel-default panel-carousel">
          <div class="panel-heading">
            <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
          </div>
          <div class="panel-body">
            <div class="col-md-12 videofix">
              <div class="carousel-slick">
                @if($MediaTop1)
                @foreach($MediaTop1 as $top1)
                <div class="col-md-4 col-xs-12">
                  <a href="{{ route('muzkanal.video', $top1)}}">
                  <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/></a>
                  <div class="item-desc">
                    <ul>
                      <a href="{{ route('muzkanal.video', $top1)}}">
                        <li class="item-artist">{{ $top1->getName() }}</li>
                      </a>
                    </ul>
                  </div>
                  @if($top1->exclusive == 1)
                  <div class="ishit">Экслюзив!</div>
                  @endif
                  <div class="views"><i class="fa fa-eye"></i>{{ $top1->getViewed() }}</div>
                </div>
                @endforeach
                @endif
              </div>
              <footer>
                <a href="#">
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
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
<!-- Fixed Sticky header -->
<script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>
<!-- Fixed Sticky header -->
<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
$(document).ready(function(){
$('[data-toggle="popover"]').popover();
});
</script>
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
$('.carousel-slick1').slick({
infinite: true,
slidesToShow: 3,
slidesToScroll: 1,
autoplay: false,
autoplaySpeed: 4500
});
}

if ($(window).width() < 768) {
$('.carousel-slick1').slick({
infinite: true,
slidesToShow: 2,
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
@stop