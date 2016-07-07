@extends('Front::channel.sport.default')
@section('title', "Спорт")
@section('styles')
@endsection
@section('content')
 @include('Front::channel.sport.nav')
		<div class="container-fluid middle-info">
			<div class="container">
				<div class="sport-tv clearfix">
				    <a class="main" href="#">Телепрограмма <span>7 июль, среда</span></a>
				    <div class="tele-programma">
				        <ul>
				            <li class="tele-item live">				            	
				                <span class="time">22:00</span>
				            	<span class="name">Евро-2016. Ачылыш. Финал</span>
				            	
				            </li>
				            <li class="tele-item">
				                <span class="time">22:00</span>
				            	<span class="name">Евро-2016. Ачылыш. Финал</span>				            
				            </li>
				            <li class="tele-item">
				                <span class="time">22:00</span>
				            	<span class="name">Евро-2016</span>				            
				            </li>
				            <li class="tele-item">
				                <span class="time">01:00</span>
				            	<span class="name">Германия-Португалия</span>				            
				            </li>
				            <li class="tele-item">
				                <span class="time">22:00</span>
				            	<span class="name">Евро-2016</span>				            
				            </li>

				            <li class="tele-item">
				                <span class="time">22:00</span>
				            	<span class="name">Евро-2016</span>				            
				            </li>
				        </ul>
				    </div>
				</div>
			</div>
		</div>
		<div class="container">
			<section class="slider">
				<div class="slider-top">
					<div>						
						<div class="box-slider">
							<img src="{{asset('images/channels/sport/slider3.jpg')}}" alt="">
							<div class="slider-title">
								<span><a href="#">Неудержимые викинги, которые сделали Евро-2016 незабываемым</a></span>
								<a href="#" class="btn btn-more btn-s icon-right">Подробнее</a>
							</div>
						</div>
					</div>
					<div>
						<div class="box-slider">
							<img src="{{asset('images/channels/sport/slider2.jpg')}}" alt="">
							<div class="slider-title">
								<span><a href="#">Как «Зенит» переживет потерю Халка</a></span>
								<a href="#" class="btn btn-more btn-s icon-right">Подробнее</a>
							</div>
						</div>
					</div>
					<div>
						<div class="box-slider">
							<img src="{{asset('images/channels/sport/slider1.jpg')}}" alt="">
							<div class="slider-title">
								<span><a href="#">«Краснодар» готовится к новому сезону: тренировки даже на скамейке запасных</a></span>
								<a href="#" class="btn btn-more btn-s icon-right">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-bottom">
					<div>
						<div class="slider-preview">
							<img src="{{asset('images/channels/sport/slider3.jpg')}}" alt="">
							<div class="overlay"></div>	
							<div class="preview-title">
								<span>Неудержимые викинги, которые сделали Евро-2016 незабываемым</span>
							</div>													
						</div>
					</div>
					<div>
						<div class="slider-preview">
							<img src="{{asset('images/channels/sport/slider2.jpg')}}" alt="">
							<div class="overlay"></div>	
							<div class="preview-title">
								<span>Как «Зенит» переживет потерю Халка</span>
							</div>													
						</div>
					</div>
					<div>
						<div class="slider-preview">
							<img src="{{asset('images/channels/sport/slider1.jpg')}}" alt="">
							<div class="overlay"></div>	
							<div class="preview-title">
								<span>«Краснодар» готовится к новому сезону: тренировки даже на скамейке запасных</span>
							</div>													
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="container">
			<div class="video clearfix">
				<div class="col-md-8 main-video">	
					<div class="heading-title">
						<a href="#" class="name">Видео</a>
						<div class="border"></div>
						<a href="#" class="link-top">Баардыгы</a>
					</div>
					<div class="row margin-with-bottom2">
						<div class="col-md-8 video-three">	
							<div class="video-box">
								<figure class="effect-roxy">
									<img src="{{asset('images/channels/sport/slider1.jpg')}}" alt="" />
									<figcaption>
										<h2><span>Германия- Португалия</span></h2>
										<p>Финалдык матчтын таймашы</p>
										<a href="#" class="btn btn-title btn-s icon-right">Көрүү</a>
									</figcaption>			
								</figure>
							</div>					
						</div>
						<div class="col-md-4 video-three">
							<a href="#">
								<div class="video-box margin-with-bottom2 imgsize">
									<img src="{{asset('images/channels/sport/slider2.jpg')}}" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">07.07.2016</span>
										<span class="title">Уэльс - Португалия</span>
									</div>
								</div>
							</a>
						</div>					
						<div class="col-md-4 video-three">
							<a href="#">
								<div class="video-box imgsize">
									<img src="{{asset('images/channels/sport/slider2.jpg')}}" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">10.07.2016</span>
										<span class="title">Евро-2016. Ачылыш. Финал</span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row	">
						<div class="col-md-4 video-three">
							<a href="#">
								<div class="video-box imgsize">
									<img src="{{asset('images/channels/sport/slider3.jpg')}}" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">10.07.2016</span>
										<span class="title">Евро-2016. Португалия. Тапшыруу аземи</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 video-three">
							<a href="#">
								<div class="video-box imgsize">
									<img src="{{asset('images/channels/sport/slider1.jpg')}}" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">10.07.2016</span>
										<span class="title">Евро-2016. Португалия. Тапшыруу аземи</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 video-three">
							<a href="#">
								<div class="video-box imgsize">
									<img src="{{asset('images/channels/sport/slider2.jpg')}}" alt="" />
									<div class="overlay"></div>
									<div class="video-info">
										<span class="date">10.07.2016</span>
										<span class="title">Евро-2016. Португалия. Тапшыруу аземи</span>
									</div>
								</div>
							</a>	
						</div>
					</div>
				</div>
				<div class="col-md-4 sidebar">
					<div class="heading-title">
						<a href="#" class="name">Жаңылыктар</a>
						<div class="border"></div>
						<a href="#" class="link-top">Баардыгы</a>
					</div>
					<ul class="side-post">
						<li>
							<div class="media">
		                      <div class="media-left">
		                        <a href="#">
		                          <img class="media-object thumb" src="http://www.ktrk.kg/img/thumbnail/45841466146450.jpg" alt="image">
		                        </a>
		                      </div>
		                      <div class="media-body">
		                        <a class="media-heading" href="#">Европа чемпионатын көрсөтүү укуктары боюнча түшүндүрмө</a>
		                        <div class="extra">
		                          <span class="datetime">17 Июнь</span>
		                        </div>
		                      </div>
		                    </div>
						</li>
						<li>
							<div class="media">
	                          <div class="media-left">
	                            <a href="#">
	                              <img class="media-object thumb" src=" http://www.ktrk.kg/img/thumbnail/44951465960399.jpg " alt="image">
	                            </a>
	                          </div>
	                          <div class="media-body">
	                            <a class="media-heading" href="#">КТРКнын экинчи кабатындагы кеңселеринин расмий ачылышы </a>
	                            <div class="extra">
	                              <span class="datetime">15 Июнь</span>
	                            </div>
	                          </div>
	                        </div>
						</li>
						<li>
							<div class="media">
	                          <div class="media-left">
	                            <a href="http://www.ktrk.kg/director/post/4104">
	                              <img class="media-object thumb" src=" http://www.ktrk.kg/img/thumbnail/41041464844968.jpg " alt="image">
	                            </a>
	                          </div>
	                          <div class="media-body">
	                            <a class="media-heading" href="http://www.ktrk.kg/director/post/4104/kg">Азаттык телеберүүлөрү</a>
	                            <div class="extra">
	                              <span class="datetime">2 , Июнь, 11:22</span>
	                            </div>
	                          </div>
	                        </div>
						</li>
						<li>
							<div class="media">
	                          <div class="media-left">
	                            <a href="http://www.ktrk.kg/director/post/2954">
	                              <img class="media-object thumb" src=" http://www.ktrk.kg/img/thumbnail/29541461220409.jpg " alt="image">
	                            </a>
	                          </div>
	                          <div class="media-body">
	                            <a class="media-heading" href="http://www.ktrk.kg/director/post/2954/kg">КТРК ден соолукту чындоого үндөйт</a>
	                            <div class="extra">
	                              <span class="datetime">20 , Апр, 15:23</span>
	                            </div>
	                          </div>
	                        </div>
						</li>
						<li>
							<div class="media">
	                          <div class="media-left">
	                            <a href="http://www.ktrk.kg/director/post/2654">
	                              <img class="media-object thumb" src=" http://www.ktrk.kg/img/thumbnail/26541460446981.jpg " alt="image">
	                            </a>
	                          </div>
	                          <div class="media-body">
	                            <a class="media-heading" href="http://www.ktrk.kg/director/post/2654/kg">КТРК кызматкерлеринин унаа токтотуучу жайы курулуп бүттү</a>
	                            <div class="extra">
	                              <span class="datetime">12 , Апр, 12:25</span>
	                            </div>
	                          </div>
	                        </div>
						</li>
						<li>
							<div class="media">
	                          <div class="media-left">
	                            <a href="http://www.ktrk.kg/director/post/2270">
	                              <img class="media-object thumb" src=" http://www.ktrk.kg/img/thumbnail/22701459223356.png " alt="image">
	                            </a>
	                          </div>
	                          <div class="media-body">
	                            <a class="media-heading" href="http://www.ktrk.kg/director/post/2270/kg">КТРКнын жылдык иши боюнча кыскача инфографика</a>
	                            <div class="extra">
	                              <span class="datetime">29 , Март, 15:44</span>
	                            </div>
	                          </div>
	                        </div>
						</li>
						<li>
							<div class="media">
	                          <div class="media-left">
	                            <a href="http://www.ktrk.kg/director/post/2211">
	                              <img class="media-object thumb" src=" http://www.ktrk.kg/img/thumbnail/22111458976328.jpg " alt="image">
	                            </a>
	                          </div>
	                          <div class="media-body">
	                            <a class="media-heading" href="http://www.ktrk.kg/director/post/2211/kg">КТРК: "Алтын казынадагы" баалангыс чыгармалар, ыр, күүлөр санарип, китеп, дисктерге көчүрүлдү</a>
	                            <div class="extra">
	                              <span class="datetime">26 , Март, 13:36</span>
	                            </div>
	                          </div>
	                        </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="photos clearfix">
				<div class="panel">	
					<div class="panel-title">				
						<div class="heading-title">
							<a href="#" class="name">Сүрөт баяндар</a>
							<div class="border"></div>
							<a href="#" class="link-top">Баардыгы</a>
						</div>
					</div>			
				</div>			
				<div class="panel-body">
					<div class="row photo-top">		
						<div class="col-md-6 photo-left-right">
							<div class="photo-item-main photo-item">
								<figure class="effect-roxy">
									<img src="http://www.ktrk.kg/img/thumbnail/1661458293855_big.JPG" alt="" />
									<div class="overlay"></div>
									<figcaption>
										<h2><span>КТРКда Нооруз майрамы белгиленди </span></h2>
										<a href="#" class="btn btn-title btn-s icon-right">Көрүү</a>
									</figcaption>			
								</figure>
							</div>
						</div>
						<div class="col-md-6 photo-left-right">							
							<div class="col-md-6 col-sm-12 photo-item">
		                         <a href="#">
		                            <div class="item-box">
		                            	<img src="http://www.ktrk.kg/img/thumbnail/1491456840210_big.jpg" alt=""/>
			                            <div class="overlay"></div>
			                            <div class="item-info">			                            	
				                            <span class="datetime"><i class="fa fa-calendar"></i>07.02.2016</span>
				                            <span class="titlename">
				                              Чүй облусунун 90 жылдыгына карата иш-чара (1-бөлүк)
				                            </span>
			                            </div>
		                            </div>
		                         </a>
							</div>						
							<div class="col-md-6 col-sm-12 photo-item">
		                         <a href="#">
		                            <div class="item-box">
		                            <img src="http://www.ktrk.kg/img/thumbnail/2391464335933_big.jpg" alt=""/>
		                            	<div class="item-info">			                            		
				                            <span class="datetime"><i class="fa fa-calendar"></i>07.02.2016</span>
				                            <span class="titlename">
				                              Бүгүн Куралдуу күчтөрдүн күнү
				                            </span>
		                            	</div>
		                            </div>
		                         </a>
							</div>						
							<div class="col-md-6 col-sm-12 photo-item">
		                         <a href="#">
		                            <div class="item-box">
		                            	<img src="http://www.ktrk.kg/img/thumbnail/2561467120970_big.jpg" alt=""/>
		                            	<div class="overlay"></div>
		                            	<div class="item-info">
				                            <span class="datetime"><i class="fa fa-calendar"></i>07.02.2016</span>
				                            <span class="titlename">
				                              Кыз-жигит Сармерден: Нарындын жигиттери менен Кара-Кулжанын айымдары 
				                            </span>		                            		
		                            	</div>
		                            </div>		                        
		                         </a>
							</div>
							<div class="col-md-6 col-sm-12 photo-item">
		                         <a href="#">
		                            <div class="item-box">	
		                            	<img src="http://www.ktrk.kg/img/thumbnail/2071460731352_big.jpg" alt=""/>
			                            <div class="overlay"></div>
			                            <div class="item-info">			                            	
				                            <span class="datetime"><i class="fa fa-calendar"></i>07.02.2016</span>
				                            <span class="titlename">
				                              Кыз-жигит Сармерден: Нарындын кыздары - Кеминдин мырзалары
				                            </span>
			                            </div>
		                            </div>
		                         </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="margin-with-bottom"></div>

@stop
@section('footerscript2')
<script>
	$('.slider-top').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots: true,
		asNavFor: '.slider-bottom'
	});
	$('.slider-bottom').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-top',
		dots: true,
		centerMode: true,
		focusOnSelect: true
	});
	$('.slider-photo').slick({
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 1
	});
</script>
@endsection