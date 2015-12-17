@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
@endsection
@section('content')
<div class="birinchiradio">
    <div class="container-fluid metatop">
        <div class="container onepadding">
            <nav class="top-nav">
                <ul>
                    @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                    @if(count($menu->submenus) > 0)
                    <li>
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($menu->submenus as $submenu)
                            <li><a href="{{ $submenu->getUrl() }}">{{ $submenu->getName() }}</a></li>
                            @endforeach
                        </ul>
                    </li>          
                    @else
                    <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li>    
                    @endif
                    @endforeach 
                </ul>
                <ul class="topradio pull-right">
                    <li><a href="{{ route('kyrgyzradio.home') }}">Кыргыз Радиосу</a></li>
                    <li><a href="{{ route('minkiyal.home') }}">Миң Кыял</a></li>
                    <li><a href="{{ route('dostuk.home') }}">Достук</a></li>
                    <li></li>
                </ul>


            </nav>
        </div>
    </div>
<div class="container-fluid cffix">
   <div class="col-md-12 topheader">
      <div class="container onepadding">
        <div class="language">
            <ul>
                <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
            </ul>
        </div>
         <div class="col-md-3">
            <nav>
               <ul>
                  <li class="sitemenu" id="site-channel1">
                     <a href="{{ route('birinchi.home') }}">
                        <img class="onelogos" src="{{ asset('images/channels/1-radio-notext.png')}}">
                        <span>Биринчи радио</span>
                        <h4>Биринчи ради</h4>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="col-md-9 oneheader onepadding">
            <ul class="nav navbar-nav chastota">
               <li>Бишкек 104.1</li>
               <li>{{ trans('radiopages.Issyk') }} 102.4</li>
               <li>Нарын 100.5</li>
               <li>Ош 100.7</li>
               <li>Баткен 104.2</li>
               <li>Жалал-Абад 104.7</li>
               <li>Талас 102.0</li>
            </ul>
            <ul class="nav navbar-nav oneline">
               <li><a class="time" href="#"><time>11:15</time></a></li>
               <li class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>{{ trans('radiopages.Live') }}</span></button></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right onesoc">
               <li class="onepost"><a href=""><i class="fa fa-facebook"></i><span>facebook</span></a></li>
               <li class="onetwit"><a href=""><i class="fa fa-twitter"></i><span>twitter</span></a></li>
            </ul>
         </div>
      </div>
      <div class="row" style="margin:0px;">
         <nav class="navbar">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header oneheaderone">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                  <span class="sr-only">Меню</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
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
                  <a class="navbar-brand" href="{{ route('birinchi.home') }}">{{ trans('radiopages.Home') }}</a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav onenavbar">
                     <li><a href="{{ route('birinchi.about') }}">{{ trans('radiopages.About') }}</a></li>
                     <li class="dropdown">
                        <a href="{{ route('birinchi.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('radiopages.Peredachi') }} <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Багыт</a></li>
                           <li><a href="#">Инсанат</a></li>
                           <li><a href="#">Кыргызстан</a></li>
                           <li><a href="#">Радиокүзөт</a></li>
                           <li><a href="#">Күндүн темасы</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="{{ route('birinchi.broadcastsprogramm') }}">
                           {{ trans('radiopages.Prperedach') }}
                        </a>
                     </li>
                     <li><a href="{{ route('birinchi.photos') }}"> {{ trans('radiopages.Photos') }}</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right logo-block onesearch">
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
                  </ul>

               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </div>
   </div>
</div>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row" style="margin-top:10px;">
                    <div class="col-md-9 onenewspage">
                        <div class="panel panel-default onearticle">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span> Новости </span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <h2>Кыргызская келин Оливия!</h2>
                                    <div class="muzimg">
                                        <img src="{{asset('images/channels/birinchiradio/olivia.jpg')}}" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                                        <iframe width="100%" height="auto" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/230240104&amp;color=ff5500&amp;show_artwork=false&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                                        <div class="audioinfo">
                                            <p><h4>Тема:</h4><h5>Кыргыз келини Оливия</h5></p>
                                            <p><h4>Алып баруучу:</h4><h5>Кыргыз кызы Кыргызгүл</h5></p>
                                            <p><h4>Маектешкен:</h4><h5>Оливия Браун</h5></p>
                                            <p><h6>Аудиону көчүрүп алуу:</h6><a class="audiosrc" title="Маустун оң жагын басып көчүрүп алсаңыз болот" href="{{asset('static/files/audio.mp3')}}" >Бактылуу Оливия <i class="fa fa-download"></i></a></p>
                                        </div>
                                    </div>

                                    <article>
                                        <p>
                                            Межнациональные браки в мире – тема давняя и уже привычная. Однако некоторые союзы разных этносов и культур все же еще способны удивить. Как например, история жительницы Пенсильвании Оливия Стивенс, которая вышла замуж за кыргызстанца Каната и стала настоящей кыргызской келинкой. Предлагаем вам узнать, как необычная влюбленная пара живет вместе.</p>

                                        <p>Канат несколько лет работает гидом, именно во время одного из туристических походов он встретился со своей будущей супругой Оливией.</p>


                                        <blockquote> «Канат предложил не только руку, но и целый комплект» </blockquote>

                                        <p>История Каната и Оливии начиналась просто - сначала общие встречи с друзьями и проводы домой, потом романтические отношения. Канат признается, что не делал предложение руки и сердца на закате солнца как в американских фильмах, он просто объяснил Оливии, что у него нет времени на пустые отношения и ему пора создавать семью.</p>

                                        <p>По словам Оливии, разговор с Канатом был открытый, он откровенно сказал, что хочет жениться:</p>
                                        <p>- Он единственный сын и живет с мамой. И это означало, что если я выхожу замуж за Каната, мы будем жить в Кыргызстане. Он предложил мне не только руку, но и целый комплект (смеется). Откровенность дала мне возможность оценить и выбрать. Я ведь даже не думала, что выйду за муж за кыргызстанца. Канат покорил меня своими личными качествами, он откровенный человек и с ним не бывает скучно. Он отличный муж, относится ко мне как к человеку, это очень редко можно встретить. Вся семья такая, они золотые. Это был для меня важный фактор.</p>
                                    </article>

                                </div>

                                <footer>
                                    <a href="#">
                                        <span>Архив <i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 onefix">
                        <div class="panel panel-default onelist">
                            <div class="panel-heading">
                                <h3 class="panel-title">Категории</h3>
                            </div>
                            <div class="panel-body">
                                <nav>
                                    <ul>
                                        <li><a href="">Политика</a></li>
                                        <li><a href="">Общество</a></li>
                                        <li><a href="">Эконоимка</a></li>                                    
                                        <li><a href="">Культура</a></li>
                                        <li><a href="">Спорт</a></li>
                                        <li><a href="">Происшествия</a></li>
                                        <li><a href="">Наука и образование</a></li>
                                        <li><a href="">Туризм</a></li>
                                        <li><a href="">Граница</a></li>
                                        <li><a href="">Сельское хозяйство</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
        	<div class="col-md-12">
        		<div class="panel">
        			
        		</div>
        	</div>
        </div>
    </div>   
</div>

@stop

@section('footerscript2')
   	<script src="{{ asset('js/audio/audioplayer.js') }}"></script>
        <script>
            $(function ()
            {
                $('audio').audioPlayer();
            });
        </script>
@stop