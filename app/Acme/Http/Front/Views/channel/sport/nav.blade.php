		<header>
			<div class="top-header clearfix">
				<div class="container">
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
						<ul class="nav navbar-nav navbar-right social-buttons">
							<li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="ok"><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
							<li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<button class="btn btn-3 btn-l icon-tv btn-top"><span>{{ trans('radiopages.Live') }}</span></button>
						</ul>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="banner-top">
					<img src="{{asset('images/channels/sport/banner.png')}}" alt="">
				</div>
			</div>

			<div class="container">
				<div class="main-header main-header-top">
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
									<img src="{{asset('images/channels/sport-channel.png')}}" alt="">
								</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right sport-nav">
									<li><a href="{{ route('sport.home') }}">{{ trans('radiopages.Home') }}</a></li>
									<li><a href="#">{{ trans('radiopages.aboutChannel') }}</a></li>
									<li><a href="{{ route('sport.teleprogram') }}">Телепрограмма</a></li>
									<li><a href="{{ route('sport.allnews') }}">{{ trans('site.RedKeneshNews') }}</a></li>
									<li><a href="{{ route('sport.videos') }}">Видео</a></li>
									<li><a href="{{ route('sport.gallery') }}">{{ trans('radiopages.PhotoReporter') }}</a></li>
								</ul>
	                            <ul class="lang">
	                                <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
	                                <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
	                            </ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>