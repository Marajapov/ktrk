@extends('Front::channel.sport.default')
@section('title', "Спорт")
@section('styles')
@endsection
@section('content')
@include('Front::channel.sport.nav')
		<div class="container">
			<div class="sport-tv clearfix">
			    <a class="main" href="{{ route('sport.teleprogram') }}">Телепрограмма <span>{{ date("Y:m:d")}}</span></a>
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
                                
                                 	@for($i=1;$i<$last = ($count-($key+1)) +1;$i++)
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
				<div class="anonses">
					<a href="{{ route('sport.announcements') }}" class="anons-link"><span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span></a>
					@if($anonsbottom1)
					@foreach($anonsbottom1 as $anonsbottom)
					<div class="col-md-4 no-padding">
						<div class="slider-preview">
							<!-- <span class="dates-a">{{ $anonsbottom->getDateFormatted() }}</span> -->
							<a data-toggle="modal" data-toggle="modal" data-target="#myModal">
								<img src="{{asset($anonsbottom->thumbnail_big)}}" alt="{{ $anonsbottom->getName() }}">
								<div class="overlay"></div>	
								<div class="preview-title">
									<span>{{$anonsbottom->getName()}}</span>
								</div>													
							</a>
						</div>
					</div>					
					@endforeach
					@endif
					@if($anonsbottom2)
					@foreach($anonsbottom2 as $anonsbottom)
					<div class="col-md-4 no-padding">
						<div class="slider-preview">
							<!-- <span class="dates-a">{{ $anonsbottom->getDateFormatted() }}</span> -->
							<a data-toggle="modal" data-toggle="modal" data-target="#myModal2">
								<img src="{{asset($anonsbottom->thumbnail_big)}}" alt="{{ $anonsbottom->getName() }}">
								<div class="overlay"></div>	
								<div class="preview-title">
									<span>{{$anonsbottom->getName()}}</span>
								</div>
							</a>													
						</div>
					</div>					
					@endforeach
					@endif 
					@if($anonsbottom3)
					@foreach($anonsbottom3 as $anonsbottom)
					<div class="col-md-4 no-padding">
						<div class="slider-preview">
							<!-- <span class="dates-a">{{ $anonsbottom->getDateFormatted() }}</span> -->
							<a data-toggle="modal" data-toggle="modal" data-target="#myModal3">
								<img src="{{asset($anonsbottom->thumbnail_big)}}" alt="{{ $anonsbottom->getName() }}">
								<div class="overlay"></div>	
								<div class="preview-title">
									<span>{{$anonsbottom->getName()}}</span>
								</div>
							</a>													
						</div>
					</div>					
					@endforeach
					@endif   
				</div>
			</section>
			@if($anonsbottom1)
			@foreach($anonsbottom1 as $anonsbottom1)
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">{{$anonsbottom1->getName()}}</h4>
			      </div>
			      <div class="modal-body">		      	
			         	{!! $anonsbottom1->getContent()!!}
			         	<div class="embed-responsive embed-responsive-16by9 show-video">
			            	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $anonsbottom1->getUrl()}}"></iframe>
			         	</div>
			      </div>
			      <div class="modal-footer">
			      		<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $anonsbottom1->getDay() }} {{ $anonsbottom1->getMonthRu() }}, {{ $anonsbottom1->getTime() }}</span>
			      </div>
			    </div>
			  </div>
			</div>
			@endforeach
			@endif
			@if($anonsbottom2)
			@foreach($anonsbottom2 as $anonsbottom2)
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">{{$anonsbottom2->getName()}}</h4>
			      </div>
			      <div class="modal-body">		        
			         	{!! $anonsbottom2->getContent()!!}
			         	<div class="embed-responsive embed-responsive-16by9 show-video">
			            	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $anonsbottom2->getUrl()}}"></iframe>
			         	</div>
			      </div>
			      <div class="modal-footer">
			      		<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $anonsbottom2->getDay() }} {{ $anonsbottom2->getMonthRu() }}, {{ $anonsbottom2->getTime() }}</span>
			      </div>
			    </div>
			  </div>
			</div>
			@endforeach
			@endif
			@if($anonsbottom3)
			@foreach($anonsbottom3 as $anonsbottom3)
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">{{$anonsbottom3->getName()}}</h4>
			      </div>
			      <div class="modal-body">
		         	{!! $anonsbottom3->getContent()!!}
		         	<div class="embed-responsive embed-responsive-16by9 show-video">
		            	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $anonsbottom3->getUrl()}}"></iframe>
		         	</div>			      		
			      	</div>
			      <div class="modal-footer">			      	
                    <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $anonsbottom3->getDay() }} {{ $anonsbottom3->getMonthRu() }}, {{ $anonsbottom3->getTime() }}</span>
			      </div>
			    </div>
			  </div>
			</div>
			@endforeach
			@endif
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
					<div class="row banner-middle">
						<a href="@if($positionCenter) {{ $positionCenter->linkTo }} @else # @endif">
						    <img src="@if(!empty($positionCenter->file)) {{ asset($positionCenter->file) }} @else {{asset('images/channels/sport/banner-middle.png')}} @endif" alt=""/>
						</a>
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
							<span class="name" style="text-transform: capitalize;font-size: 18px;">{{ trans('radiopages.SurotBayan') }}</span>
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
		<div class="container">
      <div class="col-md-12 no-padding">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="heading-title">
              <span class="name">{{ trans('radiopages.Wearesocial')}}</span>
              <div class="border"></div>
            </div>
          </div>
          <div class="panel-body popular">
            <div class="col-sm-3 no-padding">
              <div class="fb-page" style="height: 460px;overflow: hidden;" data-href="https://www.facebook.com/KTRKSport" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/KTRKSport"><a href="https://www.facebook.com/KTRKSport/">КТРК СПОРТ</a></blockquote>
                  </div>
              </div>  
            </div>
            <div class="col-sm-3">
                <a class="twitter-timeline" data-height="460" href="https://twitter.com/ktrksport">Твиты Ktrksport</a> 
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>              
            </div>
            <div class="col-sm-3">
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
                    }(document,"ok_group_widget","52921979764889","{width:263,height:460}");
                </script>
            </div>
            <div class="col-sm-3">
              <iframe src="{{asset('images/channels/sport/inwidget/index.php?height=460&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:263px;height:455px;overflow:hidden;'></iframe>
            </div>

          </div>
          <br>
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
		dots: true
	});
	$('.slider-photo').slick({
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1
	});
</script>
<script>
   $(function(){
       var url = $('#myModal iframe').attr('src');
       $('.modal').click(function() {
           $('#myModal iframe').show();
           $('#myModal iframe').attr('src', url);
       });
       $('button.close').click(function() {
           $('#myModal').hide();
           $('#myModal').attr('src', '');
       });
   });
   
   $(function(){
       var url = $('#myModal2 iframe').attr('src');
       $('.modal').click(function() {
           $('#myModal2 iframe').show();
           $('#myModal2 iframe').attr('src', url);
       });
       $('button.close').click(function() {
           $('#myModal2').hide();
           $('#myModal2').attr('src', '');
       });
   });
   
   $(function(){
       var url = $('#myModal3 iframe').attr('src');
       $('.modal').click(function() {
           $('#myModal3 iframe').show();
           $('#myModal3 iframe').attr('src', url);
       });
       $('button.close').click(function() {
           $('#myModal3').hide();
           $('#myModal3').attr('src', '');
       });
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

@endsection