<div class="header-test">
    <div class="container">
        <div class="row">
            <div class="header-left">
                <a class="header-logo" href="#">
                    <img src="{{asset('images/logo-text.svg')}}">
                </a>

                <ul class="header-nav">
                    <li>
                        <a href="#">Новости</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <div class="page-header-i ">
        <div class="container">

            <div class="row">
                <nav class="menu top-nav">
                    <ul class="main-menu clearfix">
                        @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $key=>$menu)
                            @if(count($menu->submenus) > 0)
                                <li>
                                    <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">
                                        @if(app()->getlocale() == 'kg')
                                            {{ $menu->getName() }}
                                        @else
                                            {{ $menu->getNameRu() }}
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach($menu->submenus as $submenu)
                                            <li><a href="{{ $submenu->getUrl() }}">@if(app()->getlocale() == 'kg'){{ $submenu->getName() }} @else {{ $submenu->getNameRu() }} @endif</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $menu->getUrl() }}">
                                        @if(app()->getlocale() == 'kg')
                                            {{ $menu->getName() }}
                                        @else
                                            {{ $menu->getNameRu() }}
                                        @endif
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <ul class="lang">
                        <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг<span></span></a></li>
                        <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус<span></span></a></li>
                    </ul>

                </nav>

                <div class="sub-menu clearfix">

                    <button id="btnLive" class="btn btn-live" data-toggle="modal" data-target="#liveModal">
                        Онлайн
                        <i class="fa fa-circle"></i>
                    </button>

                    <ul class="soc">
                        <li class="tw"><a href="https://twitter.com/KTRK_kg"><i class="fa fa-twitter"></i></a></li>
                        <li class="fb"><a href="https://www.facebook.com/KTRKkg"><i class="fa fa-facebook"></i></a></li>
                        <li class="ok"><a href="http://ok.ru/ktrkkg"><i class="fa fa-odnoklassniki"></i></a></li>
                        <li class="yt"><a href="https://www.youtube.com/channel/UCOD3MESjXSvqYZcWWnZkdMQ"><i class="fa fa-youtube"></i></a></li>
                        <li class="in"><a href="https://www.instagram.com/ktrk_live/"><i class="fa fa-instagram"></i></a></li>
                        <li class="search-form">
                            <a id="searchToggle" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                            <form id="searchForm" class="hidden">
                                <input type="text" name="searchText">
                                <span id="searchClose">
                                    <i class="fa fa-close"></i>
                                </span>
                                <button id="searchButton" type="submit" name="searchSubmit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('front.home') }}" class="logo">
                    <img src="{{asset('images/logo_new.png')}}" alt="ktrk">
                </a>

                <div class="header-decor-l"></div>
                <div class="header-decor-r"></div>
            </div>

        </div>

    </div>
</div>