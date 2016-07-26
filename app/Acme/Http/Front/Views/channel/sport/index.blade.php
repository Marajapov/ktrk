@extends('Front::channel.sport.default')
@section('title', "Спорт")
@section('styles')
@endsection
@section('content')
 @include('Front::channel.sport.nav')
		<div class="container">
			<div class="sport-tv clearfix">
			    <a class="main" href="#">Телепрограмма <span>21 июль, четверг</span></a>
			    <div class="tele-programma">
			    	<ul>
					@if($program)
                        @foreach($program as $key => $row)
                            @if(($key<(count($program)-1)) && (strtotime($program[$key]->time) <= strtotime($currentTime)) && (strtotime($currentTime) < strtotime($program[$key+1]->time)) )
	                            <li class="tele-item live">				            	
					                <span class="time">{{ $row->time }}
	                                    <span id="bcLive" class="bcLive"><i class="fa fa-circle"></i>live</span>
	                                </span>
					            	<span class="name">{{ $row->name }}</span>				            	
					           	</li>

                                @if($key == count($program)-2)
	                            <li class="tele-item">
					                <span class="time">{{ $program[$key+1]->time }}</span>
					            	<span class="name">{{ $program[$key+1]->name }}</span>				            
					            </li>
                                @else
                                 	@for($i=1;$i<8;$i++)
								<li class="tele-item">
				                	<span class="time">{{ $program[$key+$i]->time }}</span>
				            		<span class="name">{{ $program[$key+$i]->name }}</span>				            
				            	</li>
                                    @endfor
                                @endif

                            @endif
                        @endforeach
                    @endif		        
			        </ul>
			    </div>
			</div>
		</div>
		<div class="container">
			<section class="slider col-sm-12" id="slider">
				<div class="slider-top">
					@if($anons)
					@foreach($anons as $anons)
					<div>						
						<div class="box-slider">
							<img src="{{asset($anons->thumbnail)}}" alt="{{ $anons->getNameOne() }}">
							<div class="slider-title">
								<span><a href="{{ $anons->url }}">{{$anons->getNameOne()}}</a></span>
								<a href="{{ $anons->url }}" class="btn btn-more btn-s icon-right">{{ trans('radiopages.sportmore') }}</a>
							</div>
						</div>
					</div>
					@endforeach
					@endif  
				</div>
				<div class="slider-bottom">
					@if($anonsbottom)
					@foreach($anonsbottom as $anonsbottom)
					<div>
						<div class="slider-preview">
							<img src="{{asset($anonsbottom->thumbnail)}}" alt="{{ $anonsbottom->getNameOne() }}">
							<div class="overlay"></div>	
							<div class="preview-title">
								<span>{{$anonsbottom->getNameOne()}}</span>
							</div>													
						</div>
					</div>					
					@endforeach
					@endif  
				</div>
			</section>
		</div>
		<div class="container">
			<div class="video clearfix">
				<div class="col-md-8 main-video">	
					<div class="heading-title">
						<span class="name">Видео</span>
						<div class="border"></div>
						<a href="{{ route('sport.videos')}}" class="link-top">{{ trans('radiopages.toAll') }}</a>
					</div>
					<div class="row">
						@if($topVideos1)
						@foreach($topVideos1 as $topVideos1)
						<div class="col-md-8 video-three">	
							<div class="video-box">
								<figure class="effect-roxy">
									<img src="@if($topVideos1->thumbnail_big) {{ asset($topVideos1->thumbnail_big) }} @else http://img.youtube.com/vi/{{ $topVideos1->getUrl() }}/hqdefault.jpg @endif" alt="" />
									<figcaption class="col-sm-12">
										<h2><span> {{ $topVideos1->getName() }}</span></h2>
										<p>{{ $topVideos1->getDateFormatted() }}</p>
										<a href="{{ route('sport.video', $topVideos1) }}" class="btn btn-title btn-s icon-right">{{ trans('radiopages.toWatch') }}</a>
									</figcaption>			
								</figure>
							</div>					
						</div>
						@endforeach
						@endif
						@if($topVideos2)
						@foreach($topVideos2 as $topVideos2)
						<div class="col-md-4 video-three">
							<a href="{{ route('sport.video', $topVideos2) }}">
								<div class="video-box margin-with-bottom2 imgsize">
									<img src="@if($topVideos2->thumbnail_big) {{ asset($topVideos2->thumbnail_big) }} @else http://img.youtube.com/vi/{{ $topVideos2->getUrl() }}/hqdefault.jpg @endif" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">{{ $topVideos2->getDateFormatted() }}</span>
										<span class="title">{{ $topVideos2->getName() }}</span>
									</div>
								</div>
							</a>
						</div>
						@endforeach
						@endif
					</div>
					<div class="row">
						@if($topVideos3)
						@foreach($topVideos3 as $topVideos3)
						<div class="col-md-4 video-three">
							<a href="{{ route('sport.video', $topVideos3) }}">
								<div class="video-box margin-with-bottom2 imgsize">
									<img src="@if($topVideos3->thumbnail_big) {{ asset($topVideos3->thumbnail_big) }} @else http://img.youtube.com/vi/{{ $topVideos3->getUrl() }}/hqdefault.jpg @endif" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">{{ $topVideos3->getDateFormatted() }}</span>
										<span class="title">{{ $topVideos3->getName() }}</span>
									</div>
								</div>
							</a>
						</div>
						@endforeach
						@endif						
					</div>
				</div>
				<div class="col-md-4 sidebar">
					<div class="heading-title">
						<span class="name">{{ trans('site.RedKeneshNews') }}</span>
						<div class="border"></div>
						<a href="{{ route('sport.allnews')}}" class="link-top">{{ trans('radiopages.toAll') }}</a>
					</div>
					<ul class="side-post">
						@if($postAll)
						@foreach($postAll as $post)
						<li>
							<div class="media">
		                      <div class="media-left">
		                        <a href="{{ route('sport.news', [$post, $lc]) }}">
		                          <img class="media-object thumb" src="{{ asset($post->getFile()) }}" alt="image">
		                        </a>
		                      </div>
		                      <div class="media-body">
		                        <a class="media-heading" href="{{ route('sport.news', [$post, $lc]) }}">{{ $post->getTitleRuOrKg() }}</a>
		                        <div class="extra">
		                          <span class="datetime">{{ $post->getDay() }}, {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
		                        </div>
		                      </div>
		                    </div>
						</li>
						@endforeach
						@endif						
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="photos clearfix">
				<div class="panel">	
					<div class="panel-title">				
						<div class="heading-title">
							<span class="name">{{ trans('radiopages.PhotoReporter') }}</span>
							<div class="border"></div>
							<a href="{{route('sport.gallery')}}" class="link-top">{{ trans('radiopages.toAll') }}</a>
						</div>
					</div>			
				</div>			
				<div class="panel-body">
					<div class="row photo-top">
	                    @if($photoGalleries1)
	                      @foreach($photoGalleries1 as $photoGallery)
							<div class="col-md-6 photo-left-right">
								<div class="photo-item-main photo-item">
									<figure class="effect-roxy">
										<img src="{{ asset($photoGallery->thumbnail_big) }}" alt="" />
										<div class="overlay"></div>
										<figcaption>
											<h2>
												<span class="datetime"><i class="fa fa-calendar"></i>{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
												<span>{{ $photoGallery->getName() }}</span>
											</h2>
											<a href="{{ route('sport.photos', $photoGallery) }}" class="btn btn-title btn-s icon-right">{{ trans('radiopages.toWatch') }}</a>
										</figcaption>			
									</figure>
								</div>
							</div>
	                      @endforeach
	                    @endif
		
						<div class="col-md-6 photo-left-right">
                    		@if($photoGalleries2)
                      		@foreach($photoGalleries2 as $photoGallery)
							<div class="col-md-6 col-sm-12 photo-item">
		                         <a href="{{ route('sport.photos', $photoGallery) }}">
		                            <div class="item-box">
		                            	<img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
			                            <div class="overlay"></div>
			                            <div class="item-info">			                            	
				                            <span class="datetime"><i class="fa fa-calendar"></i>{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
				                            <span class="titlename">
				                              {{ $photoGallery->getName() }}
				                            </span>
			                            </div>
		                            </div>
		                         </a>
							</div>
                      		@endforeach
                    		@endif	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="margin-with-bottom"></div>

@stop
@section('footerscript2')
<script>
	$('.slider-top').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots: true,
		asNavFor: '.slider-bottom'
	});
	$('.slider-bottom').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-top',
		dots: false,
		centerMode: true,
		arrows: false,
		focusOnSelect: true
	});
	$('.slider-photo').slick({
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1
	});
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();

        blink($('#bcLive'), -1, 500);

        function blink(elem, times, speed) {
            if (times > 0 || times < 0) {
                if ($(elem).hasClass("blink"))
                    $(elem).removeClass("blink");
                else
                    $(elem).addClass("blink");
            }
            clearTimeout(function () {
                blink(elem, times, speed);
            });
            if (times > 0 || times < 0) {
                setTimeout(function () {
                    blink(elem, times, speed);
                }, speed);
                times -= .5;
            }
        }
    });
</script>
@endsection