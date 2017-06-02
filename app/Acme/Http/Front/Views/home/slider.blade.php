<div class="section light-section slider-section">
	<div class="main-slider main-slider-for">
		@foreach($generalPosts as $key=>$post)
		<div class="slide">
			<img src="{{asset($post->thumbnail_big)}}">
		</div>
		@endforeach
	</div>	
	<div class="main-slider-nav">
		@foreach($generalPosts as $key=>$post)
		<div class="slide">
			<img src="{{asset($post->thumbnail_big)}}">
		</div>
		@endforeach
	</div>
</div>

<div class="section light-section slider-section">
	<div class="main-slider main-slider-2">
		@foreach($generalPosts as $key=>$post)
		<div class="slide">
			<img src="{{asset($post->thumbnail_big)}}">
		</div>
		@endforeach
	</div>	
	<div class="container slider-control"></div>
</div>