<div class="main-header-xs visible-xs">
    <a href="{{ route('front.home') }}">
        <img src="{{ asset('images/ktrk_last.svg') }}" alt="Logo"/>
    </a>
    <a href="{{ route('front.live') }}" class="mobile-btn-live">
        <i class="fa fa-dot-circle-o"></i>
        {{ trans('site.Live') }}
    </a>
</div>

<button type="button" class="hamburger is-closed visible-xs" data-toggle="offcanvas">
    <span class="hamb-top"></span>
    <span class="hamb-middle"></span>
    <span class="hamb-bottom"></span>
</button>

<div class="bottom-bg"></div>

<div class="container-fluid main-header hidden-xs">
    <div class="container">

        <div class="row">
            <header class="top-menu">
                <div class="top-header clearfix">
                    <div class="col-md-12 logo-block">
                        <div class="row">
                            <a class="logo" href="{{ route('madaniyat.home') }}">
                                <div class="logo-img"><img id="slidecaption" src="{{ asset('images/channels/madaniyat/logo-no-text.png')}}" alt=""/></div>
                            </a>
                            <nav class="top-nav clearfix">
                                <ul class="clearfix">
                                    <li><a href="{{ route('front.home') }}">КТРК</a></li>
                                    <li>/</li>
                                    <li><a href="{{ route('muzkanal.home') }}">Музыка</a></li>
                                    <li>/</li>
                                    <li><a href="{{ route('madaniyat.home') }}">Маданият Тарых Тил</a></li>
                                    <li>/</li>
                                    <li><a href="{{ route('balastan.home') }}">Баластан</a></li>
                                    <li>/</li>
                                    <li><a href="{{ route('sport.home') }}">Спорт</a></li>
                                </ul>
                            </nav>

                            <ul class="soc">
                                <li class="tw"><a href="https://twitter.com/Madaniat2016"><i class="fa fa-twitter"></i></a></li>
                                <li class="fb"><a href="https://www.facebook.com/madaniyatkg/"><i class="fa fa-facebook"></i></a></li>
                                <li class="ok"><a href="https://ok.ru/group/54021149884512"><i class="fa fa-odnoklassniki"></i></a></li>
                                <li class="in"><a href="https://www.instagram.com/madaniat_maryh_mil/"><i class="fa fa-instagram"></i></a></li>
                            </ul>

                            <a class="search-toggle"><i class="fa fa-search"></i></a>

                            <form class="form-search" action="{{ route('front.search') }}" method="get">
                                <div class="form-group pull-right">
                                  @if(app()->getlocale() == 'kg')
                                    <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                                  @elseif(app()->getlocale() == 'ru')
                                    <input type="text" name="search" class="form-control" placeholder="Поиск"/>
                                  @endif
                                </div>

                                <a class="btn close-search">
                                    <i class="fa fa-close"></i>
                                </a>

                                <button class="btn submit-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <nav class="navbar">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('madaniyat.home') }}"><i class="fa fa-home"></i>{{ trans('radiopages.Home') }}</a></li>
                                            <li><a href="{{ route('madaniyat.about') }}"><i class="fa fa-info"></i>{{ trans('radiopages.Mabout') }}</a></li>
                                            <li class="dropdown">
                                                <a href="{{ route('madaniyat.media.all') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i>{{ trans('radiopages.Korsotuu') }}<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    @foreach($projectList as $project)
                                                    <li>
                                                        <a href="{{ route('madaniyat.media.project', $project) }}">{{ $project->getName() }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('madaniyat.allphotos') }}"><i class="fa fa-picture-o"></i>{{ trans('radiopages.Photos') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="lang">
                                <ul>
                                    <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                                    <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>

</div>