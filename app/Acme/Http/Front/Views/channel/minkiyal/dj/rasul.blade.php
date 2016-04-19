@extends('Front::channel.minkiyal.default')
@section('title', "Расул Мырзатегин")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/2.png')}}" alt="">			
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Мен  Расул Мырзатегин</li>
					<li>Туулган күнүм менен, кычыраган кыштын 25-барагында  куттуктасаңар болот! </li>
					<li><span>Кесибим боюнча:</span> Дипломат-котормочу, (2-кесибим MBA-Мастер делового администрирование).</li>
					<li><span>Кантип ди-джеей болуп калгам:</span> Талантымды көрсөттүм, байкашты, баалашты анан ди-джейликке алышты :).</li>

					<li><span>Радиодо болгон кызыктуу окуя:</span> Эфирдеги ар бир программанын жүрүшү, келген коноктор менен болгон маектер кызыктарга бай. Алардын айрымдарын сизге жолукканда айтып берем. Сөз берем :)!</li>
					<li><span class="person-nons">Миң Кыял FMде, Миң деген нерселерди суйом.</span></li>
					<li>Мен, эфирде шайыр-шайдоот, кыялкеч жана романтикмин, жасалмасы жок, эфирде кандай болсом, жашоодо дагы ошондоймун. </li>
					<li><span>Эфирден сырткары жактырганым:</span>  Дүйнөлүк адабиятка саякаттап, китеп окуу. Психологиялык китептерди кызыгуу менен барактагандан тажабайм</li>
					<li><span>Сүйүп жеген тамагым:</span> Француз Киш Лорени жана ГМО кошулбаган азыктар.</li>
					<li>Суусундуктардан  жер жемиштер менен жалбыз аралашкан чайды  жактырам.</li>
					<li>Мени таасирленткен китеп: Стивен Р.Кови “7 навыков высокоэффективных людей”.</li>
					<li>Поп жана лаундж музыкасын сүйүп угам.</li>
					<li>«Биринчи мугалим», «Пока не сыграл в ящик»,  кинолорун кайталап көрүүдөн тажабайм.</li>
					<li>Мультфильмдердин фанаты эмесмин. Бирок Том менен Джэррини коруп коем)).</li>
					<li><span>Балалыктагы кыялым:</span> Буюрса баардыгы чет-четинен орундалып келет. </li>
					<li><span>Жашоодогу негизги максатым:</span> Шаг назад не в моих правилах! Адамсынбы? Айттынбы? Аткар!</li>

				</ul>

				</div>
               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/vj/rasul/1.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/1.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/rasul/2.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/2.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/rasul/3.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/3.jpg')}}" />
						  </a>

						  <a href="{{asset('images/channels/minkiyal/vj/rasul/4.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/4.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/rasul/5.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/5.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/rasul/6.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/6.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/rasul/7.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/7.jpg')}}" />
						  </a>
						 <a href="{{asset('images/channels/minkiyal/vj/rasul/8.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/8.jpg')}}" />
						  </a>
						 <a href="{{asset('images/channels/minkiyal/vj/rasul/9.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/rasul/9.jpg')}}" />
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