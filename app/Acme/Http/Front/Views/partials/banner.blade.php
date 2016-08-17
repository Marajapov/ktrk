<div class="clearfix">
    <div class="banner-ads">
        @if($positionTop)
            @foreach($positionTop as $positionTop)
            <div>
                <div class="col-md-12 text-center ads top-ad hidden-xs">
                    <a href="@if(!empty($positionTop->linkTo)){{ $positionTop->linkTo }} @else # @endif" target="_blank">
                        <img src="@if(!empty($positionTop->file)) {{ asset($positionTop->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt="phot1"/>
                    </a>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>