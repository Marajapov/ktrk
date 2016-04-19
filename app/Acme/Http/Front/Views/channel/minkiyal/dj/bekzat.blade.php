@extends('Front::channel.minkiyal.default')
@section('title', "Бекзат Калыбек уулу")
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
@include('Front::channel.minkiyal.nav')
@include('Front::channel.minkiyal.navs')

    <div class="container persons">
      <div class="col-md-12">
         <div class="panel" >
          <div class="panel-title">
             <h3></h3>
          </div>
            <div class="panel-body">
               <div class="row">
				<div class="col-sm-4">
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/6.png')}}" alt="">			
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Менин атым: Бекзат Калыбек уулу</li>
					<li>Туулган күнүм  менен үч тамгадан турган айдын 19 да куттуктасаңар болот! </li>
					<li><span>Кесибим боюнча:</span> Журналист.</li>
					<li><span>Кантип ди-джеей болуп калгам:</span>Ошо кезде жашоонун бир сыры чечилген го... </li>
					<li><span>Радиодо болгон кызыктуу окуя:</span>Чүчкүрүктү токтото албай арты –артынан күлгөнүм.</li>
					<li><span class="person-nons">Миң Кыял FMде эмнени сүйөм: угуп жаткан угармандын үнүн.</span></li>
					<li>Мен  эфирде өтө эле шайырмын, жашоодо деле дал өзүндөй. </li>
					<li><span>Эфирден сырткары жактырганым:</span>Обон созуп ырдаганым.</li>
					<li><span>Сүйүп жеген тамагым:</span>Лагман</li>
					<li>Жарманы чайкап-чайкап ичкенден ырахат алам.</li>

					<li><span>Мени таасирленткен китеп: </span>Расул Гамзатовдун “Менин Дагыстаным”</li>
					<li><span>Мен сүйүп угам:</span>Апамдын күлгөнүн, ымыркайдын бир деме деп эле сүйлөгөнүн.</li>
					<li><span>Мен сүйүп көргөн кино:</span>Никулин катышкан ар бир кинону, айрыкча “Операция Ы” фильмин жактырам.</li>
					<li>Мууз доору мультфильмин жакшы көрөм..</li>

					<li><span>Балалыктагы кыялым:</span>Чет өлкөлөргө баруу.</li>
					<li><span>Жашоодогу негизги максатым:</span>Принцип, туура чечим...............</li>

				</ul>

				</div>
               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/vj/bekzat/1.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/bekzat/1.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/bekzat/2.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/bekzat/2.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/bekzat/5.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/bekzat/5.jpg')}}" />
						  </a>

						  <a href="{{asset('images/channels/minkiyal/vj/bekzat/4.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/bekzat/4.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/bekzat/3.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/bekzat/3.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/bekzat/7.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/bekzat/7.jpg')}}" />
						  </a>


						</div>
					</div>
				</div>
            </div>
         </div>
      </div>
@stop
@section('footerScript')
<script src="{{ asset('js/lightslider.js') }}"></script>
<script src="{{ asset('js/lightgallery/picturefill.min.js') }}"></script>
<script src="{{ asset('js/lightgallery/lightgallery.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-fullscreen.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-thumbnail.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-video.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-autoplay.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-zoom.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-hash.js') }}"></script>
<script src="{{ asset('js/lightgallery/lg-pager.js') }}"></script>
<script src="{{ asset('js/lightgallery/jquery.mousewheel.min.js') }}"></script>

<script>
	$('#aniimated-thumbnials').lightGallery({
    thumbnail:true
}); 
</script>
@stop