@extends('Front::channel.muzkanal.default')
@section('title', "Хит-Парад")
@section('styles')
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')
<!-- Main slider -->
<div class="container">
	<div class="row mb20">
		
		<div class="panel clearfix panel-hitparad">
			<div class="col-md-8 topchart topchart-top">
				<div class="panel-heading">
                  	<h3 class="panel-title"><span>Хит-Парад ТОП-10</span></h3>
               	</div>
				<div class="panel-body">
					<div class="col-xs-12 toplist videofix">
						@if($hitNumbers)
						@foreach($hitNumbers as $key => $hit)
						<div class="row topborder">
							<div class="col-xs-1 topnumber">
								<h2>{{ $key+1 }}</h2>
							</div>
							<div class="col-xs-1 topimg">
								<img src="http://img.youtube.com/vi/{{ $hit->getUrl()}}/mqdefault.jpg" alt="">
							</div>
							
							<div class="col-xs-8 topartist">
								<h3>{{ $hit->getName() }}</h3>
							</div>

							<div class="col-xs-1 toplike">
								{!! Form::open(['route' => ['muzkanal.likehp', $hit], 'method' => 'GET']) !!}
								<input type="hidden" value="1" name="like">
								<span class="topcounts">{{$hit->like}}</span>
								<button type="submit" class="like-button" data-container="body" data-toggle="popover" data-placement="left" data-content="{{ trans('radiopages.VoteYes') }}">
								<i class="fa fa-star red-tooltip" ></i>
								<!-- data-toggle="tooltip" data-placement="right" title="Like"                            -->
								</button>
								{!! Form::close() !!}
							</div>
							<div class="col-xs-1 topclip">
								<a href="{{route('muzkanal.video', $hit)}}"><i class="glyphicon glyphicon-play"></i> </a>
							</div>
						</div>
						@endforeach
						@endif
					</div>
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
						<iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $hit->getUrl()}}" frameborder="0" allowfullscreen></iframe>            
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
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
		$('[data-toggle="tooltip"]').tooltip()
	});
</script>
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