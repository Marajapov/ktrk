@extends('Front::channel.muzkanal.default')
@section('title', $gallery->getName())
@section('styles')
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="og:url"                content="{{ Request::url()}}" />
	<meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="{{ $gallery->getName()}}" />
	<meta property="og:description"        content="{{ $gallery->getDescription() }}" />
	<meta property="og:image"              content="{{ asset($gallery->thumbnail_big) }}" />

	<link rel="stylesheet" href="{{asset('css/goodshare.css')}}">
	<link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')

	<!-- Main slider -->
	<div class="container">
		<div class="row imgmuz mb20">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title"><span>{{ trans('site.Galleries') }}</span></h3>
				</div>
				<div class="panel-body">
					<div class="panel-subbody">
						<div class="v-title">									
							{{ $gallery->getName() }}
							@if(auth()->user())
								<a class="v-edit" href="{{ route('admin.photoParent.edit', $gallery) }}" target="_blank">
									<i class="fa fa-pencil"></i>
									{{ trans('site.AdminPostEdit') }}
								</a>
							@endif
						</div>						
						<div class="m-extra g-extra clearfix">
							<div class="m-date v-date">
								{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getYear() }}
							</div>
							<div class="m-view v-view">
								<svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                    <g>
                                        <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                            C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                    </g>
                                </svg>
								{{ $gallery->viewed }}
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
							<ul id="imageGallery">
								@if($images != null)
									@foreach($images as $image)

										<li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
											<img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
										</li>
									@endforeach
								@endif
							</ul>
							<div class="g-desc">								
								{!! $gallery->getDescription() !!}
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
	<script src="{{ asset('js/lightslider.js') }}"></script>
	<script src="{{ asset('js/lightgallery/picturefill.min.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lightgallery.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-fullscreen.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-thumbnail.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-video.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-autoplay.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-zoom.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-hash.js') }}"></script>
	<script src="{{ asset('js/lightgallery/lg-pager.js') }}"></script>
	<script src="{{ asset('js/lightgallery/jquery.mousewheel.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#imageGallery').lightSlider({
				gallery:true,
				item:1 ,
				loop:true,
				thumbItem:8,
				slideMargin:0,
				enableDrag: true,
				currentPagerPosition:'right',
				onSliderLoad: function(el) {
					el.lightGallery({
						selector: '#imageGallery .lslide'
					});
				}
			});
		});
	</script>
@stop