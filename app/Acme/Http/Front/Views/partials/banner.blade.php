<div class="clearfix">
	<a href="@if(!empty($positionTop->linkTo)){{ $positionTop->linkTo }} @else # @endif" target="_blank" class="col-md-12 text-center ads top-ad">
	    <img src="@if(!empty($positionTop->file)) {{ asset($positionTop->file) }} @else {{ asset('img/banner/banner-sport.png') }} @endif" alt="phot1"/>
	</a>
</div>