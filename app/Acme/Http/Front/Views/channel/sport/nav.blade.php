		<header>
			<div class="container">
				<div class="top-header clearfix">	
					<div class="col-sm-12 clearfix">
						<div class="header-top clearfix">					
							<ul class="nav navbar-nav all-channels">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('radiopages.AllChannels') }}: <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{ route('front.home') }}">КТРК</a></li>
										<li><a href="{{ route('balastan.home') }}">Баластан</a></li>
										<li><a href="{{ route('madaniyat.home') }}">Маданият.Тарых.Тил</a></li>
										<li><a href="{{ route('muzkanal.home') }}">Музыка</a></li>
									</ul>
								</li>
							</ul>
	                        <ul class="nav navbar-nav lang">
	                            <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
	                            <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
	                        </ul>
							<ul class="nav navbar-nav navbar-right social-buttons">
								<li class="tw"><a href="//twitter.com/ktrksport"><i class="fa fa-twitter"></i></a></li>
								<li class="fb"><a href="//www.facebook.com/KTRKSport/"><i class="fa fa-facebook"></i></a></li>
								<li class="ok"><a href="//ok.ru/profile/573048081049"><i class="fa fa-odnoklassniki"></i></a></li>
								<li class="in"><a href="//www.instagram.com/ktrksport/"><i class="fa fa-instagram"></i></a></li>
								<li class="in"><a href="//www.youtube.com/channel/UC5jPZDWHWxKnuy_jMDzlrlA"><i class="fa fa-youtube"></i></a></li>
								<button id="btnLive" type="button" class="btn-sport" data-toggle="modal" data-target="#liveModal" id="popover" data-container="body" data-toggle="popover" data-placement="bottom" data-content="{{ trans('radiopages.Soon') }}"><span>{{ trans('radiopages.Live') }}</span></button>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="banner-top">
					 <a href="@if($positionTop) {{ $positionTop->linkTo }} @else # @endif">
					    <img src="@if(!empty($positionTop->file)) {{ asset($positionTop->file) }} @else {{asset('images/channels/sport/banner.png')}} @endif" alt=""/>
					</a>
				</div>
			</div>
			<div class="container">
				<div id="header" class="main-header main-header-top">
					<nav class="navbar navbar-sport">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="{{ route('sport.home') }}">
									<img src="{{asset('images/channels/sport-channel.gif')}}" alt="">
								</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right sport-nav">
									<li><a href="{{ route('sport.home') }}">{{ trans('radiopages.Home') }}</a></li>
									<li><a href="{{ route('sport.about') }}">{{ trans('radiopages.aboutChannel') }}</a></li>
									<li><a href="{{ route('sport.teleprogram') }}">Телепрограмма</a></li>
									<li><a href="{{ route('sport.allnews') }}">{{ trans('site.RedKeneshNews') }}</a></li>
									<li><a href="{{ route('sport.videos') }}">Видео</a></li>
									<li><a href="{{ route('sport.gallery') }}">{{ trans('radiopages.SurotBayan') }}</a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
		@if (session('flag2') == 1 )
		<div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button id="playerStop" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                <h4 class="modal-title" id="liveModalLabel">{{ trans('radiopages.Live') }} - КТРК СПОРТ</h4>
		            </div>
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col-md-12 modal-block">
		                      <div id="player"></div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		@else
		<div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="playerStop" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="liveModalLabel">{{ trans('site.Live') }} - КТРК</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal-block">
                      <div style="height: 200px; width: 100%; text-align: center; padding-top: 100px;">
                          Трансляция заблокирована в Вашей стране!
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		@endif