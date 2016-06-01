<div class="container">
    <div class="row clearfix nav">
        <div class="bl-logo">
            <a href="{{ route('balastan.home') }}">
                <img src="{{ asset('images/channels/balastan_white_notext.png') }}" alt="Balastan Logo"/>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>You can edit this CSS if you want<br /> and if you need.</h2>
                <div class="col-md-6 .col-md-offset-3">
                   <ul class="social">
                      <li class="facebook"><a href="http://facebook.com/alterowo"><i class="fa fa-facebook fa-3x"></i></a></li>
                      <li class="twitter"><a href="http://twitter.com/Kyokushinowa"><i class="fa fa-twitter fa-3x"></i></a></li>
                      <li class="behance2"><a href="https://www.behance.net/Kurnikowa"><i class="fa fa-behance fa-3x"></i></a></li>
                    </ul>
                </div>
            </div>
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
                    <span>Баластан</span>
                </a>
            </li>
            <li>
                <a href="{{ route('balastan.videos') }}">
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
                  <div class="logo-block search-block">
                     <a class="search-toggle"><i class="fa fa-search"></i></a>
                     <form class="form-search" action="{{ route('front.search') }}" method="get">
                        <div class="form-group pull-right">
                           <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                        </div>
                        <a class="btn close-search">
                        <i class="fa fa-close"></i>
                        </a>
                        <button class="btn submit-search" type="submit">
                        <i class="fa fa-search"></i>
                        </button>
                     </form>
                  </div>
            </li>
        </ul>
        <div class="langs">
            <ul>
                <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
            </ul>
        </div>
    </div>
</div>