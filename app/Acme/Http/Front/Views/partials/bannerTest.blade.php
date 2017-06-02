<a class="ad-block" href="@if(!empty($positionTop->linkTo)){{ $positionTop->linkTo }} @else # @endif" target="_blank">
    <img src="@if(!empty($positionTop->file)) {{ asset($positionTop->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt="phot1"/>
</a>