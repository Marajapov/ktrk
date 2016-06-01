@extends('Front::channel.minkiyal.default')
@section('title', "Канат Кадыржан")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/5.png')}}" alt="">			
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Менин атым: Канат Кадыржан</li>
					<li><span>Туулган күнүм менен</span> Берекелүү күздүн экинчи күнүндө  куттуктасаңыздар болот! Ошол үчүн берекелүү окшойм… :) </li>
					<li><span>Кесибим боюнча:</span> Журналист.</li>
					<li><span>Кантип ди-джеей болуп калгам:</span>Өзүмдагы таң калам!!</li>
					<li><span>Радиодо болгон кызыктуу окуя:</span>Эсимде таңкы шоу программа алып барып жатып,эфирге 15 мүнөт убакыт калганда кофе ичип алууга шашып калдым. Коридордон өтүп кайра студияга кирип баратсам биз менен кошо эфирге келчү коногубуз да келип калган экен.Ал инсанды жанынан көргөнүмө толкунданып саламатсызбы деп кофени өзүмдүн ак көйнөгүмө жана анын  көйнөгүнө төгүп алганым эсимден кетпейт… Ии деп эле калдык...:)</li>
					<li><span class="person-nons">Миң Кыял FMде эмнени сүйөм: Шандуу атмосфераны...</span></li>
					<li><span>Мен эфирде :</span>-“Ишти так аткарып шайыр жүрөм”. Жашоодо : -“Көп сүйлөбөгөн оор басырыктуу”... Анткени эфирден чарчап калат окшойм.... Девелееее.Менин жанымда болсоңуз түшүнөсүз...</li>
					<li><span>Эфирден сырткары жактырганым:</span>Оюууй көп да...</li>
					<li><span>Сүйүп жеген тамагым:</span>Америкада 500 граммдык 2600 доллардан сатылуучу шоколад чыгат.Аталышы : «Chocopologie by Knipschildt». Курамында натуралдуу, пайдалуу азыктар көп, анын сактоо мөөнөтү кылымга чейин. Эмне үчүн баса кымбат жана башка жерде жок  дешиңиз мүмкун.Анткени түзүмүн сыр кылып жазышпайт экен. Мен жылына эки жолу чыпалактын тырмагындай болгон көлөмүн ооз тийип турам. Ал жакта досторум жашашат.</li>
					<li><span>Кандай суусундук жактырам:</span>МММ баарын эле го…:)</li>
					<li><span>Мени таасирленткен китеп: </span>Айтпайм билип аласыздар да.</li>
					<li><span>Мен сүйүп угам:</span>Жакшы каалоо тилектерди жана ырларды, кичинекей балдардын ыйлаганын.</li>
					<li><span>Мен сүйүп көргөн кино:</span>Орус элинин кинолорун көрүүдөн тажабайм</li>
					<li><span>Бөбөктөрумдөн  талашып:</span>Кайсы мультик трендде турса, ошону көрөм.</li>

					<li><span>Балалыктагы кыялым:</span> Көп.Алар орундалып келе жатат.</li>
					<li><span>Жашоодогу негизги максатым:</span>Көп сүйлөм болуп кетет окшойт. Ошон үчүн кыскача жооп:-“Максатым  бир гана каалоолорум менен жашоонун өзгөрүлүшүнө жараша кете берет”.</li>

				</ul>

				</div>
               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/vj/kanat/1.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/kanat/1.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/kanat/2.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/kanat/2.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/kanat/3.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/kanat/3.jpg')}}" />
						  </a>

						  <a href="{{asset('images/channels/minkiyal/vj/kanat/4.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/kanat/4.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/kanat/5.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/kanat/5.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/kanat/6.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/kanat/6.jpg')}}" />
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