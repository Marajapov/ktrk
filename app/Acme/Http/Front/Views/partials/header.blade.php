<div class="bottom-bg"></div>

<div class="container-fluid main-header">
    <div class="container">

    <div class="row">
        <header class="top-menu">
            <div class="top-header clearfix">
                <div class="col-md-12 logo-block">
                    <div class="row">
                        <a class="logo" href="{{ route('front.home') }}">
                            <img src="{{ asset('images/ktrk_last.svg') }}" alt=""/>
                        </a>

                        <nav class="top-nav clearfix">
                            <ul class="clearfix">
                                @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                                    @if(count($menu->submenus) > 0)
                                    <li>
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($menu->submenus as $submenu)
                                            <li><a href="{{ $submenu->getUrl() }}">@if(app()->getlocale() == 'kg'){{ $submenu->getName() }} @else {{ $submenu->getNameRu() }} @endif</a></li>
                                            @endforeach
                                        </ul>
                                    </li><li> / </li>
                                    
                                    @else
                                    <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li> <li> / </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>

                        <ul class="soc">
                            <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="ok"><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
                            <li class="yt"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <!--<li class="lang-title"><a>Язык:</a></li>-->
                            <!--<li class="dropdown lang">-->
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                                    <!--<span class="lang-type">KG</span>-->
                                    <!--<i class="fa fa-chevron-right"></i>-->
                                <!--</a>-->
                                <!--<ul class="dropdown-menu">-->
                                    <!--<li><a href="#">KG</a></li>-->
                                    <!--<li><a href="#">RU</a></li>-->
                                <!--</ul>-->
                            <!--</li>-->
                            <!--<li class="lang ru"><a href="#"><i class="ru"></i></a></li>-->
                            <!--<li class="lang kg"><a href="#"><i class="kg"></i></a></li>-->
                        </ul>

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

                        <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                            <i class="fa fa-dot-circle-o"></i>
                            {{ trans('site.Live') }}
                        </button>

                        @include ("Front::partials.mainNav")         

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