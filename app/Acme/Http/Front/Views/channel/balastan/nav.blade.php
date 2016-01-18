<div class="container">
    <div class="row clearfix">
        <div class="bl-logo">
            <a href="{{ route('balastan.home') }}">
                <img src="{{ asset('images/channels/balastan_white_notext.png') }}" alt="Balastan Logo"/>
            </a>
        </div>
        <ul class="kidstopheader">
            <li>
                <a href="{{ route('balastan.about') }}">
                    <i class="fa fa-info-circle i2"></i>
                    <span>{{ trans('radiopages.BAbout') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('balastan.world') }}">
                    <i class="fa fa-star i3"></i>
                    <span>{{ trans('radiopages.Bworld') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('balastan.video') }}">
                    <i class="fa fa-play i4 "></i>
                    <span>Видео</span>
                </a>
            </li>
            <li>
                <a href="{{ route('balastan.allphotos') }}">
                    <i class="fa fa-picture-o i5"></i>
                    <span>{{ trans('radiopages.Photos') }}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-search i6"></i>
                </a>
            </li>
        </ul>
    </div>
</div>