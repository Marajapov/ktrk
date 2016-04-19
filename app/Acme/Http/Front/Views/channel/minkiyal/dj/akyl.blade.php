@extends('Front::channel.minkiyal.default')
@section('title', "Акыл Жеңишбек уулу")
@section('styles')
     <link rel="stylesheet" href="{{asset('css/goodshare.css')}}">

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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/4.png')}}" alt="">
					<div class="pluso share-buttons">
						<button class="goodshare btn-fb">
						<i class="fa fa-facebook"></i></button>
						<button class="goodshare btn-vk">
						<i class="fa fa-vk"></i></button>
						<button class="goodshare btn-ok">
						<i class="fa fa-odnoklassniki"></i></button>
						<button class="goodshare btn-gp">
						<i class="fa fa-google-plus"></i></button>
						<button class="goodshare btn-tw">
						<i class="fa fa-twitter"></i></button>
					</div>				
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Менин атым: Акыл Жеңишбек уулу.</li>
					<li><span>Туулган күнүм:</span> Музыка сабагынан мугалим</li>
					<li><span>Кесибим боюнча:</span> Дипломат-котормочу, (2-кесибим MBA-Мастер делового администрирование).</li>
					<li><span>Кантип ди-джеей болуп калгам:</span> Эл сыяктуу эле кастингкке катышып, өтүп кеткем.Ошол кундон ушул күнгө чейин кызматымды кылып келе жатам.</li>
					<li><span>Миң Кыял FMде эмнени сүйөм:</span>Ммм...Бирин айтсамэкинчиси капа болуп калышы мүмкүн ошондуктан баарын сүйөөммм.</li>
					<li><span>Мен  эфирде... </span>Жасалмалуулукту жаман коргондуктон жеке жашоом менен окшош эле, болгону жумуш учурунда жоопкерчиликтуу болууга аракет кылам. </li>
					<li><span>Эфирден сырткары жактырганым:</span> Алар өтө коп айта берсем кагаз бутпөйт го  </li>
					<li><span>Сүйүп жеген тамагым: </span> Балыктан жасалган баардык тамактар. </li>
					<li><span>Мени таасирленткен китеп:</span>Чынгыз Айтматовдун баардык чыгармалары.</li>
					<li><span>Мен сүйүп угам:</span>Жан дүйнөсү таза адамдардын шынгыр күлкүсүн.</li>
					<li><span>Мен сүйүп көргөн кино:</span>Кино коп корбойм анткени убакыт аз, бирок мелодрама жанырындагы анан комедиялар жагат.</li>
					<li><span class="person-nons">Мультфилим коруудон озгочо дем куч алып балалык кундорго кайткым келет бирок....</span></li>
					<li><span>Балалыктагы кыялым:</span>Чоон курсактуу киши болуу болчу, ал кыялым орундалды эми калганына аракет кылуудамын.</li>
				</ul>

				</div>

               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/kalykov.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/kalykov.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/ayana.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/ayana.jpg')}}" />
						  </a>
  						  <a href="{{asset('images/channels/minkiyal/kalykov.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/kalykov.jpg')}}" />
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