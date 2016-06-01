@extends('Front::channel.minkiyal.default')
@section('title', "Улан Улукболсун")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/3.png')}}" alt="">			
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Менин атым: Улан Улукболсун.</li>
					<li><span>Туулган күнүм менен:</span>Берекенин мезгили 21-ноябрда белек алам</li>
					<li><span>Кесибим боюнча:</span> Укаскачан агай :).</li>
					<li><span>Кантип ди-джеей болуп калгам:</span> Болгум келди,кыялым орундалды.</li>
					<li><span>Радиодо болгон кызыктуу окуя:</span>Күндө болот кызыктар.</li>
					<li><span class="person-nons">Миң Кыял FMде эмнени сүйөм: эх сүйөм го сүйом... :)</span></li>
					<li>Мен эфирде элпек, жашоодо токтоо.</li>
					<li><span>Эфирден сырткары жактырганым:</span>Кайра эле тажабай ыр угуу.</li>
					<li><span>Сүйүп жеген тамагым:</span>Ачка болсом баарын жейм </li>
					<li>Суусасаң  сүзмө ичсең сонун да...</li>
					<li><span>Мени таасирленткен китеп: </span>Гулсарат, ии баса анан  Алиппе.</li>
					<li><span>Мен сүйүп угам:</span>Жүрөгүм уккан ырларды</li>
					<li><span>Мен сүйүп көргөн кино:</span>Троя киносун өтө жакшы көрөм.</li>
					<li>Бөбөктөрүмдөн талашып “Сениби шашпа” мултьфильмин көрөм.</li>

					<li><span>Балалыктагы кыялым:</span>Кыял менен чонойгондо таанышкам.</li>
					<li><span>Жашоодогу негизги максатым:</span>Максат коюп жаша!!!</li>

				</ul>

				</div>
               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/vj/ulan/1.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/1.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/ulan/2.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/2.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/ulan/3.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/3.jpg')}}" />
						  </a>

						  <a href="{{asset('images/channels/minkiyal/vj/ulan/4.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/4.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/ulan/5.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/5.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/ulan/6.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/6.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/ulan/7.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/7.jpg')}}" />
						  </a>
						 <a href="{{asset('images/channels/minkiyal/vj/ulan/8.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/8.jpg')}}" />
						  </a>
						 <a href="{{asset('images/channels/minkiyal/vj/ulan/9.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/ulan/9.jpg')}}" />
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