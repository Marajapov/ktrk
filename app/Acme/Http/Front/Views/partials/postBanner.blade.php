 <a class="ad-block" href="@if($positionBottom) {{ $positionBottom->linkTo }} @else # @endif">
    <img src="@if(!empty($positionBottom->file)) {{ asset($positionBottom->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt=""/>
</a>