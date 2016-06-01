@extends('Front::channel.minkiyal.default')
@section('title', "Акыл Жеңишбек уулу")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/4.png')}}" alt="">			
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Менин атым: Акыл Жеңишбек уулу.</li>
					<li><span>Туулган күнүм:</span>  Аптаптуу ысык жай мезгилинин экинчи айынын жыйырма жетинчи күнү жарык дүйнөгө таңга маал келгем.</li>
					<li><span>Кесибим боюнча:</span>  Музыка сабагынан мугалим :)</li>
					<li><span>Кантип ди-джеей болуп калгам:</span>  Эл сыяктуу эле кастингге катышып, өтүп кеткем. Ошол күндөн ушул күнгө чейин кызматымды аткарып келе жатам.</li>
					<li><span>Миң Кыял FMде эмнени сүйөм:</span>  Ммм...Бирин айтсам экинчиси капа болуп калышы мүмкүн, ошондуктан баарын сүйөммм.</li>
					<li><span>Мен  эфирде... </span> Жасалмалуулукту жаман көргөндүктөн жеке жашоом менен окшош эле, болгону жумуш учурунда жоопкерчиликтүү болууга аракет кылам. </li>
					<li><span>Эфирден сырткары жактырганым:</span> Алар өтө коп айта берсем кагаз бутпөйт го :) </li>
					<li><span>Сүйүп жеген тамагым: </span> Балыктан жасалган баардык тамактар. </li>
					<li><span>Мени таасирленткен китеп:</span> Чынгыз Айтматовдун баардык чыгармалары.</li>
					<li><span>Мен сүйүп угам:</span> Жан дүйнөсү таза адамдардын шыңгыр күлкүсүн</li>
					<li><span>Мен сүйүп көргөн кино:</span> Кино көп көрбөйм, анткени убакыт аз, бирок мелодрама жанрындагы анан комедиялар жагат.</li>
					<li><span class="person-nons">Мультфильм көрүүдөн өзгөчө дем күч алып балалык күндөргө кайткым келет бирок....</span></li>
					<li><span>Балалыктагы кыялым:</span> Чоң курсактуу киши болуу болчу, ал кыялым орундалды,  эми калганына аракет кылуудамын.</li>
				</ul>

				</div>

               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/vj/akyl/1.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/akyl/1.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/akyl/4.JPG')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/akyl/4.JPG')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/akyl/5.JPG')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/akyl/5.JPG')}}" />
						  </a>

						  <a href="{{asset('images/channels/minkiyal/vj/akyl/2.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/akyl/2.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/akyl/3.JPG')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/akyl/3.JPG')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/akyl/6.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/akyl/6.jpg')}}" />
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