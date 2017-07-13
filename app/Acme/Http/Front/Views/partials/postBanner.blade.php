<div class="ad-block">
 	<a href="@if($positionBottom) {{ $positionBottom->linkTo }} @else # @endif">
	    <img src="@if(!empty($positionBottom->file)) {{ asset($positionBottom->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt=""/>
	</a>
</div>