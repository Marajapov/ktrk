<div class="clearfix">
	<div class="col-md-12 text-center ads top-ad">
    <a href="@if(!empty($positionTop->linkTo)){{ $positionTop->linkTo }} @else # @endif" target="_blank">
      <img src="@if(!empty($positionTop->file)) {{ asset($positionTop->file) }} @else {{ asset('img/banner/banner-sport.jpg') }} @endif" alt="phot1"/>
    </a>
  </div>
</div>