@extends('Front::channel.dostuk.default')
@section('title', $gallery->getName())
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
<style>
	.main-container{
		margin:0px auto 0px auto !important; 
	}
</style>
@include('Front::channel.dostuk.navs')
	 <div class="main-container">

		<section id="portfolio">
				<div class="container">
						<div class="panel-heading">
							<h3 class="panel-title">
								{{ $gallery->getName() }}
								<span class="show-extra">
									<span class="show-date">{{ $gallery->getDay() }} {{ $gallery->getMonthRu() }}, {{ $gallery->getYear() }}</span>
									<span class="show-view">
											<i class="fa-view"></i>{{ $gallery->viewed }}
									</span>
								</span>
							</h3>
						</div>
						<div class="panel-body">
							<div class="row">
							 	<span>{!! $gallery->getDescription() !!}</span>
							 	<div id="imageGallery">
							 		<div class="slider-for">
		                                @if($images)   
		                                    @foreach($images as $image)
		                                        <div>
		                                            <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
		                                        </div>
		                                    @endforeach
		                                @endif
		                            </div>
		                            <div class="slider-nav">
		                                @if($images)
		                                    @if($images)
		                                        @foreach($images as $image)
		                                            <div>
		                                                <img class="img" src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
		                                            </div>
		                                        @endforeach
		                                    @endif
		                                @endif
		                            </div>							 		
							 	</div>
							 	<!-- <ul id="imageGallery">
								 	@foreach($images as $image)
										<li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
											 <img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
										</li>
								 	@endforeach
							 	</ul> -->
							</div>
						</div>
				</div><!--/.container-->
		</section><!--/#portfolio-->

	 </div>
	 @stop
	 @section('footerScript')
	 <script type="text/javascript">
		$(document).ready(function() {

			$('#imageGallery .slider-for').slick({
				slidesToShow: 1,
	            slidesToScroll: 1,
	            fade: true,
	            asNavFor: '#imageGallery .slider-nav',
	            arrows: true,
	            prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
	            nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'
			});

			$('#imageGallery .slider-nav').slick({
	            slidesToShow: 4,
	            slidesToScroll: 1,
	            asNavFor: '#imageGallery .slider-for',
	            centerMode: true,
	            focusOnSelect: true,
	            variableWidth: true,
	            arrows: false
	        });
		});
	 </script>
	 @stop