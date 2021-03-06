<header class="header">
	<div class="container">
		<div class="row">
			<div class="header-top clearfix">
				<div class="header-left">
					<div id="hamburger-menu">
                    	<a class="img-replace" href="#0">Menu</a>
                	</div>
					<a class="header-logo" href="{{route('front.home')}}">
						<img src="{{asset('images/logo-text.svg')}}">
					</a>
					<ul class="nav navbar-nav navbar-right langs">
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$lc}}</a>
                          <ul class="dropdown-menu">
                              	@if($lc == 'ru')
                                    <li><a href="/locale/kg">KG</a></li>
                                @elseif($lc == 'kg')
                                    <li><a href="/locale/ru">RU</a></li>
                                @endif
                          </ul>
                      </li>
                  </ul>
				</div>
				<div class="header-right hidden-xs hidden-sm">
					<ul class="clearfix">
						<li class="fb">
							<a href="https://www.facebook.com/KTRKkg">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
							</a>
						</li>
						<li class="tw">
							<a href="https://twitter.com/KTRK_kg">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/></svg>
							</a>
						</li>
						<li class="in">
							<a href="https://www.instagram.com/ktrk_live/">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z"/></svg>
							</a>
						</li>
						<li class="yt">
							<a href="https://www.youtube.com/channel/UCOD3MESjXSvqYZcWWnZkdMQ">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M0 7.345c0-1.294.16-2.59.16-2.59s.156-1.1.636-1.587c.608-.637 1.408-.617 1.764-.684C3.84 2.36 8 2.324 8 2.324s3.362.004 5.6.166c.314.038.996.04 1.604.678.48.486.636 1.588.636 1.588S16 6.05 16 7.346v1.258c0 1.296-.16 2.59-.16 2.59s-.156 1.102-.636 1.588c-.608.638-1.29.64-1.604.678-2.238.162-5.6.166-5.6.166s-4.16-.037-5.44-.16c-.356-.067-1.156-.047-1.764-.684-.48-.487-.636-1.587-.636-1.587S0 9.9 0 8.605v-1.26zm6.348 2.73V5.58l4.323 2.255-4.32 2.24z"/></svg>
							</a>
						</li>
						<li class="ok">
							<a href="http://ok.ru/ktrkkg">
								<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M9.67 11.626c.84-.19 1.652-.524 2.4-.993.564-.356.734-1.103.378-1.668-.356-.566-1.102-.737-1.668-.38-1.692 1.063-3.87 1.063-5.56 0-.566-.357-1.313-.186-1.668.38-.356.566-.186 1.312.38 1.668.746.47 1.556.802 2.397.993l-2.31 2.31c-.48.47-.48 1.237 0 1.71.23.236.54.354.85.354.31 0 .62-.118.85-.354L8 13.376l2.27 2.27c.47.472 1.237.472 1.71 0 .472-.473.472-1.24 0-1.71l-2.31-2.31zM8 8.258c2.278 0 4.13-1.852 4.13-4.128C12.13 1.852 10.277 0 8 0S3.87 1.852 3.87 4.13c0 2.276 1.853 4.128 4.13 4.128zM8 2.42c-.942 0-1.71.767-1.71 1.71 0 .942.768 1.71 1.71 1.71.943 0 1.71-.768 1.71-1.71 0-.943-.767-1.71-1.71-1.71z"/></svg>
							</a>
						</li>
						<li class="lang-switch">
							<a @if(app()->getlocale() == 'kg') class="active" @endif href="/locale/kg">Кырг</a>
							<a @if(app()->getlocale() == 'ru') class="active" @endif href="/locale/ru">Рус</a>
						</li>
						<li>
							<a id="searchToggle">
								<svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
									<g>
										<path d="M16.5,14.4c1.1-1.5,1.7-3.3,1.7-5.3c0-5-4.1-9.1-9.1-9.1S0,4.1,0,9.1s4.1,9.1,9.1,9.1c2,0,3.8-0.6,5.3-1.7l3.5,3.5l2.2-2.2
											L16.5,14.4z M3.1,9.1c0-3.4,2.7-6.1,6.1-6.1s6,2.7,6,6.1s-2.7,6-6,6S3.1,12.4,3.1,9.1z"/>
									</g>
								</svg>
							</a>
						</li>
					</ul>
					
					<div id="searchForm">
						<form class="" action="{{ route('front.search') }}" method="get">
							<div class="input-group">
								<input type="text" name="search" class="form-control" placeholder="{{trans('site.DataTableSearch')}}">
								<span class="input-group-btn">
									<button id="searchButton" class="btn btn-default" type="submit">
										<svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
											<g>
												<path d="M16.5,14.4c1.1-1.5,1.7-3.3,1.7-5.3c0-5-4.1-9.1-9.1-9.1S0,4.1,0,9.1s4.1,9.1,9.1,9.1c2,0,3.8-0.6,5.3-1.7l3.5,3.5l2.2-2.2
													L16.5,14.4z M3.1,9.1c0-3.4,2.7-6.1,6.1-6.1s6,2.7,6,6.1s-2.7,6-6,6S3.1,12.4,3.1,9.1z"/>
											</g>
										</svg>
									</button>
									<a id="closeForm" class="btn btn-default">
										<svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
											<path d="M16.4,0.4L10,6.8L3.6,0.4c-0.5-0.5-1.3-0.5-1.8,0L0.4,1.8c-0.5,0.5-0.5,1.3,0,1.8L6.8,10l-6.4,6.4c-0.5,0.5-0.5,1.3,0,1.8
											l1.4,1.4c0.5,0.5,1.3,0.5,1.8,0l6.4-6.5l6.4,6.4c0.5,0.5,1.3,0.5,1.8,0l1.4-1.4c0.5-0.5,0.5-1.3,0-1.8L13.2,10l6.4-6.4
											c0.5-0.5,0.5-1.3,0-1.8l-1.4-1.4C17.7-0.1,16.9-0.1,16.4,0.4z"/>
										</svg>
									</a>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="header-middle hidden-xs hidden-sm">
					<ul>
						<li>
							<a href="{{route('front.pages.teleprogram', 2)}}" class="now-live">
								<div class="now-live-info clearfix">      
									<div class="now-live-text us-headline clip">
										<span class="us-words-wrapper">
											<b class="is-visible" data-project="project-1">{{trans('site.NowLive')}}</b>
											<b data-project="project-2">{{trans('site.AfterLive')}}</b>
										</span>
									</div> 
								</div>                      
								<div class="now-live-title">
									<span id="project-1" class="is-visible">@if($currentProgram) {{$currentProgram->name}} @endif</span>
									<span id="project-2">@if($nextProgram) {{$nextProgram->name}} @endif</span>                                   
								</div>    
							</a>
						</li>
					</ul>
				</div>
			</div>
			<ul class="header-nav clearfix hidden-xs hidden-sm">
				<li>
					<a href="#">{{trans('site.NavAbout')}}</a>
					<div class="inner-nav text-nav">
						<div>
							<ul class="clearfix">
								<li>
									<a href="{{route('front.history')}}">{{trans('site.NavAboutHistory')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.leaders')}}">{{trans('site.NavAboutAdministration')}}</a>
								</li>
								<li>
									<a href="{{route('front.ns.index')}}">{{trans('site.NavAboutNS')}}</a>
								</li>
								<li>
									<a href="{{route('front.rs.index')}}">{{trans('site.NavAboutRS')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.strategy')}}">{{trans('site.NavAboutStrategy')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.report')}}">{{trans('site.NavAboutReport')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.normalbase')}}">{{trans('site.NavAboutBase')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.logo')}}">{{trans('site.NavAboutBranding')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.rrts')}}">{{trans('site.NavAboutRTC')}}</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">{{trans('site.NavNews')}}</a>
					<div class="inner-nav text-nav">
						<div>
							<ul class="clearfix">
								<li class="nav-all">
									<a href="{{route('front.general')}}">{{trans('site.PostAllNews')}}</a>
								</li>
								@foreach($categoriesNews as $row)
									<li>
										<a href="{{ route('front.category', $row) }}">{{$row->getTitle()}}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">Видеопортал</a>
					<div class="inner-nav text-nav">
						<div>
							<ul class="clearfix">
								<li class="nav-all">
									<a href="{{route('front.media.archive')}}">{{trans('site.AllProject')}}</a>
								</li>
								@foreach($activeProjects as $row)
									<li>
										<a href="{{ route('front.media.project', $row) }}">{{ $row->getNameOne() }}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">{{trans('site.NavTeleprogram')}}</a>
					<div class="inner-nav text-nav">
						<div>
							<ul class="clearfix">
								<li>
									<a href="{{route('front.pages.teleprogram', 2)}}">{{trans('site.NavTeleprogramKtrk')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 3)}}">{{trans('site.NavTeleprogramMusic')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 5)}}">{{trans('site.NavTeleprogramMadaniyat')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 4)}}">{{trans('site.NavTeleprogramBalastan')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 11)}}">{{trans('site.NavTeleprogramSport')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 6)}}">{{trans('site.NavTeleprogramKgRadio')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 7)}}">{{trans('site.NavTeleprogramBirinchi')}}</a>
								</li>
								<li>
									<a href="{{route('front.pages.teleprogram', 8)}}">Достук</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">ТВ</a>
					<div class="inner-nav header-channels">
						<div>
							<ul class="clearfix">
								<h4>
									{{trans('site.SelectTV')}}
								</h4>
								<li>
									<a href="{{route('front.home')}}">
										<img src="{{ asset('images/channels/nav/ktrk.png') }}" alt="КТРК">
									</a>
								</li>
								<li>
									<a href="{{route('muzkanal.home')}}">
										<img src="{{ asset('images/channels/small/music.png') }}" alt="Музыка">
									</a>
								</li>
								<li>
									<a href="{{route('balastan.home')}}">
										<img src="{{ asset('images/channels/nav/balastan.png') }}" alt="Баластан">
									</a>
								</li>
								<li>
									<a href="{{route('madaniyat.home')}}">
										<img src="{{ asset('images/channels/nav/mtt.png') }}" alt="Маданият">
									</a>
								</li>
								<li>
									<a href="{{route('sport.home')}}">
										<img src="{{ asset('images/channels/nav/sport.png') }}" alt="КТРК Спорт">
									</a>
								</li>
								<li>
									<a href="{{route('front.streams')}}">
										<img src="{{ asset('images/channels/nav/alatoo.png') }}" alt="Ала-Т00 24">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">Радио</a>
					<div class="inner-nav header-channels header-radios">
						<div>
							<ul class="clearfix">
								<h4>
									{{trans('site.SelectRadio')}}
								</h4>
								<li>
									<a href="{{route('kyrgyzradio.home')}}">
										<img src="{{ asset('images/channels/nav/kyrgyz.png') }}" alt="{{trans('site.NavTeleprogramKgRadio')}}">
									</a>
								</li>
								<li>
									<a href="{{route('birinchi.home')}}">
										<img src="{{ asset('images/channels/nav/birinchi.png') }}" alt="{{trans('site.NavTeleprogramBirinchi')}}">
									</a>
								</li>
								<li>
									<a href="{{route('dostuk.home')}}">
										<img src="{{ asset('images/channels/nav/dostuk.png') }}" alt="{{trans('site.NavTeleprogramDostuk')}}">
									</a>
								</li>
								<li>
									<a href="{{route('minkiyal.home')}}">
										<img src="{{ asset('images/channels/nav/minkiyal.png') }}" alt="{{trans('site.NavTeleprogramMinkiyal')}}">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="nav-live">
					<a href="{{route('front.streams')}}">
						<span class="own-btn own-btn-pink">
							<span id="blinkLive"></span>
							Live
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>

<nav id="main-nav" class="mobile-nav visible-xs visible-sm">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          {{trans('site.NavAbout')}}
	        </a>
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
	        <ul>
	        	<li>
	        		<a href="{{route('front.history')}}">
	        			{{trans('site.NavAboutHistory')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.pages.leaders')}}">
	        			{{trans('site.NavAboutAdministration')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.ns.index')}}">
	        			{{trans('site.NavAboutNS')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.rs.index')}}">
	        			{{trans('site.NavAboutRS')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.pages.strategy')}}">
	        			{{trans('site.NavAboutStrategy')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.pages.report')}}">
	        			{{trans('site.NavAboutReport')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.pages.normalbase')}}">
	        			{{trans('site.NavAboutBase')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.pages.logo')}}">
	        			{{trans('site.NavAboutBranding')}}
	        		</a>
	        	</li>
	        	<li>
	        		<a href="{{route('front.pages.rrts')}}">
	        			{{trans('site.NavAboutRTC')}}
	        		</a>
	        	</li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	         	{{trans('site.NavNews')}}
	        </a>
	      </h4>
	    </div>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	      		<ul>
	      			<li>
	      				<a href="{{route('front.general')}}">{{trans('site.PostAllNews')}}</a>
	      			</li>
	      			@foreach($categoriesNews as $row)
						<li>
							<a href="{{ route('front.category', $row) }}">{{$row->getTitle()}}</a>
						</li>
					@endforeach
	      		</ul>	        
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingThree">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	          Видеопортал
	        </a>
	      </h4>
	    </div>
	    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	      <div class="panel-body">
	        <ul>
	        	<li>
	        		<a href="{{route('front.media.archive')}}">{{trans('site.AllProject')}}</a>
	        	</li>
				@foreach($activeProjects as $row)
					<li>
						<a href="{{ route('front.media.project', $row) }}">{{ $row->getNameOne() }}</a>
					</li>
				@endforeach
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingFour">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	          {{trans('site.NavTeleprogram')}}
	        </a>
	      </h4>
	    </div>
	    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
	      <div class="panel-body">
	        <ul>
	        	<li>
					<a href="{{route('front.pages.teleprogram', 2)}}">{{trans('site.NavTeleprogramKtrk')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 3)}}">{{trans('site.NavTeleprogramMusic')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 5)}}">{{trans('site.NavTeleprogramMadaniyat')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 4)}}">{{trans('site.NavTeleprogramBalastan')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 11)}}">{{trans('site.NavTeleprogramSport')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 6)}}">{{trans('site.NavTeleprogramKgRadio')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 7)}}">{{trans('site.NavTeleprogramBirinchi')}}</a>
				</li>
				<li>
					<a href="{{route('front.pages.teleprogram', 8)}}">Достук</a>
				</li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingFive">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	          ТВ
	        </a>
	      </h4>
	    </div>
	    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
	      <div class="panel-body">
	        <ul>
	        	<li>
					<a href="{{route('front.home')}}">
						КТРК
					</a>
				</li>
				<li>
					<a href="{{route('muzkanal.home')}}">
						Музыка
					</a>
				</li>
				<li>
					<a href="{{route('balastan.home')}}">
						Баластан
					</a>
				</li>
				<li>
					<a href="{{route('madaniyat.home')}}">
						Маданият
					</a>
				</li>
				<li>
					<a href="{{route('sport.home')}}">
						КТРК Спорт
					</a>
				</li>
				<li>
					<a href="{{route('front.streams')}}">
						Ала-Т00 24
					</a>
				</li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingSix">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
	          Радио
	        </a>
	      </h4>
	    </div>
	    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
	      <div class="panel-body">
	        <ul>
	        	<li>
					<a href="{{route('kyrgyzradio.home')}}">
						{{trans('site.NavTeleprogramKgRadio')}}
					</a>
				</li>
				<li>
					<a href="{{route('birinchi.home')}}">
						{{trans('site.NavTeleprogramBirinchi')}}
					</a>
				</li>
				<li>
					<a href="{{route('dostuk.home')}}">
						{{trans('site.NavTeleprogramDostuk')}}
					</a>
				</li>
				<li>
					<a href="{{route('minkiyal.home')}}">
						{{trans('site.NavTeleprogramMinkiyal')}}
					</a>
				</li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default panel-online">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a href="{{route('front.streams')}}">
	          <span id="blinkLive2" class=""></span>
				Live
	        </a>
	      </h4>
	    </div>	    
	  </div>
	</div>
    <ul class="social clearfix">
    	<li>
    		<a href="https://www.facebook.com/KTRKkg">
				<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
			</a>
    	</li>
		<li>
		   <a href="https://twitter.com/KTRK_kg">
				<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/></svg>
			</a>
		</li>
		<li>			
		   <a href="https://www.instagram.com/ktrk_live/">
				<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z"/></svg>
			</a>
		</li>
		<li>
			<a href="https://www.youtube.com/channel/UCOD3MESjXSvqYZcWWnZkdMQ">
				<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M0 7.345c0-1.294.16-2.59.16-2.59s.156-1.1.636-1.587c.608-.637 1.408-.617 1.764-.684C3.84 2.36 8 2.324 8 2.324s3.362.004 5.6.166c.314.038.996.04 1.604.678.48.486.636 1.588.636 1.588S16 6.05 16 7.346v1.258c0 1.296-.16 2.59-.16 2.59s-.156 1.102-.636 1.588c-.608.638-1.29.64-1.604.678-2.238.162-5.6.166-5.6.166s-4.16-.037-5.44-.16c-.356-.067-1.156-.047-1.764-.684-.48-.487-.636-1.587-.636-1.587S0 9.9 0 8.605v-1.26zm6.348 2.73V5.58l4.323 2.255-4.32 2.24z"/></svg>
			</a>
		</li>
		<li>
			<a href="http://ok.ru/ktrkkg">
				<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M9.67 11.626c.84-.19 1.652-.524 2.4-.993.564-.356.734-1.103.378-1.668-.356-.566-1.102-.737-1.668-.38-1.692 1.063-3.87 1.063-5.56 0-.566-.357-1.313-.186-1.668.38-.356.566-.186 1.312.38 1.668.746.47 1.556.802 2.397.993l-2.31 2.31c-.48.47-.48 1.237 0 1.71.23.236.54.354.85.354.31 0 .62-.118.85-.354L8 13.376l2.27 2.27c.47.472 1.237.472 1.71 0 .472-.473.472-1.24 0-1.71l-2.31-2.31zM8 8.258c2.278 0 4.13-1.852 4.13-4.128C12.13 1.852 10.277 0 8 0S3.87 1.852 3.87 4.13c0 2.276 1.853 4.128 4.13 4.128zM8 2.42c-.942 0-1.71.767-1.71 1.71 0 .942.768 1.71 1.71 1.71.943 0 1.71-.768 1.71-1.71 0-.943-.767-1.71-1.71-1.71z"/></svg>
			</a>
		</li>
    </ul>
    <form action="{{ route('front.search') }}" method="get">
    	<div class="input-group">
			<input type="text" name="search" class="form-control" placeholder="{{trans('site.DataTableSearch')}}">
			<span class="input-group-btn">
				<button id="searchButton" class="btn btn-default" type="submit">
					<svg x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
						<g>
							<path d="M16.5,14.4c1.1-1.5,1.7-3.3,1.7-5.3c0-5-4.1-9.1-9.1-9.1S0,4.1,0,9.1s4.1,9.1,9.1,9.1c2,0,3.8-0.6,5.3-1.7l3.5,3.5l2.2-2.2
								L16.5,14.4z M3.1,9.1c0-3.4,2.7-6.1,6.1-6.1s6,2.7,6,6.1s-2.7,6-6,6S3.1,12.4,3.1,9.1z"/>
						</g>
					</svg>
				</button>
			</span>
		</div>
    </form>
</nav> <!-- mobile-nav -->

<div id="shadow-layer"></div>