<div class="container-fluid main-header">
    <div class="container">

    <div class="row">
        <header class="top-menu">
            <div class="top-header clearfix">
                <div class="col-md-12 logo-block">
                    <div class="row">
                        <a class="logo" href="#">
                            <img src="{{ asset('images/logo_kg.png') }}" alt=""/>
                        </a>

                        <nav class="top-nav clearfix">
                            <ul class="clearfix">
                                @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                                    @if(count($menu->submenus) > 0)
                                    <li>
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($menu->submenus as $submenu)
                                            <li><a href="#">{{ $submenu->getName() }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @else
                                    <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li>
                                    @endif


                                @endforeach
                                    <li>
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">КТРК</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Тарыхы</a></li>
                                            <li><a href="#">Жетекчилер</a></li>
                                            <li><a href="#">Стратегия</a></li>
                                            <li><a href="#">Нормативдик база</a></li>
                                            <li><a href="#">РРТЦ</a></li>
                                            <li><a href="#">Отчет</a></li>
                                        </ul>
                                    </li>
                                    <li>/</li>
                                    <li><a href="#">Видеопортал</a></li>
                                    <li>/</li>
                                    <li><a href="#">Телепрограмма</a></li>
                                    <li>/</li>
                                    <li><a href="#">Байкоочу кеңеш</a></li>
                                    <li>/</li>
                                    <li><a href="#">Редакциялык кеңешчи</a></li>
                            </ul>
                        </nav>

                        <ul class="soc">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>

                        <form class="form-search" action="{{ route('front.search') }}" method="get">
                            <div class="form-group pull-right">
                                <input type="search" name="search" class="form-control" placeholder="Издөө"/>
                            </div>

                            <button class="btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <button class="btn btn-danger btn-live">
                            <i class="fa fa-dot-circle-o"></i>
                            түз эфир
                        </button>

                        <div class="tv-radio">
                            <a id="tv" href="#" title="Телеканалдар" data-toggle="modal" data-target="#tvModal"><img src="{{ asset('images/tv.svg') }}" alt=""/></a>
                            <div class="divider"></div>
                            <a href="#" title="Радиостанциялар" data-toggle="modal" data-target="#radioModal"><img src="{{ asset('images/radio.svg') }}" alt=""/></a>
                        </div>

                        <div class="tv-radio hidden">
                            <div class="component component-tv">
                                <!-- Start Nav Structure -->
                                <button class="cn-button" id="cn-button-tv"><img src="{{ asset('images/tv.svg') }}" alt=""/></button>
                                <div class="cn-wrapper" id="cn-wrapper-tv">
                                    <ul>
                                        <li><a href="balastan.ktrk.kg"><img src="{{ asset('images/channels/balastan.svg') }}" alt="Баластан"/></a></li>
                                        <li><a href="muzkanal.ktrk.kg"><img src="{{ asset('images/channels/muztv.png') }}" alt="Муз ТВ"/></a></li>
                                        <li><a href="madaniayt.ktrk.kg"><img src="{{ asset('images/channels/madaniyat.png') }}" alt="Маданият"/></a></li>
                                    </ul>
                                </div>
                                <div id="cn-overlay-tv" class="cn-overlay"></div>
                                <!-- End Nav Structure -->
                            </div>
                            <div class="divider"></div>
                            <div class="component component-radio">
                                <!-- Start Nav Structure -->
                                <button class="cn-button" id="cn-button-radio"><img src="{{ asset('images/radio.svg') }}" alt=""/></button>
                                <div class="cn-wrapper" id="cn-wrapper-radio">
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('images/channels/kg-radio.png') }}" alt="Кыргыз радиосу"/></a></li>
                                        <li><a href="#"><img src="{{ asset('images/channels/1-radio.png') }}" alt="Биринчи Радио"/></a></li>
                                        <li><a href="#"><img src="{{ asset('images/channels/dostuk.png') }}" alt="Достук"/></a></li>
                                        <li><a href="#"><img src="{{ asset('images/channels/min-kiyal.png') }}" alt="Мин Кыял"/></a></li>
                                        <li><a href="#"><img src="{{ asset('images/channels/baldar.png') }}" alt="Балдар ФМ"/></a></li>
                                    </ul>
                                </div>
                                <div id="cn-overlay-radio" class="cn-overlay"></div>
                                <!-- End Nav Structure -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

</div>