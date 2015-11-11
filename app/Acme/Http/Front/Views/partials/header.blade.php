<div class="container-fluid main-header">
    <div class="container">

    <div class="row">
        <header class="top-menu">
            <div class="top-header clearfix">
                <div class="col-md-12 logo-block">
                    <div class="row">
                        <a class="logo" href="{{ route('front.home') }}">
                            <img src="{{ asset('images/ktrk_new.png') }}" alt=""/>
                        </a>

                        <nav class="top-nav clearfix">
                            <ul class="clearfix">
                                @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                                    @if(count($menu->submenus) > 0)
                                    <li>
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($menu->submenus as $submenu)
                                            <li><a href="{{ $submenu->getUrl() }}">{{ $submenu->getName() }}</a></li>
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
                            <li><a href="/locale/kg">KG</a></li>
                            <li><a href="/locale/ru">RU</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>

                        <form class="form-search" action="{{ route('front.search') }}" method="get">
                            <div class="form-group pull-right">
                                <input type="search" name="search" class="form-control" placeholder="Издөө"/>
                            </div>

                            <button class="btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                            <i class="fa fa-dot-circle-o"></i>
                            түз эфир
                        </button>

                        @include ("Front::partials.mainNav")                                              

                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

</div>