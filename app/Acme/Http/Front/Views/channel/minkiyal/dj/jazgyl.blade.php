@extends('Front::channel.minkiyal.default')
@section('title', "Жазгүл Жолдубай кызы")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/1.png')}}" alt="">			
				</div>
				<div class="person-info col-sm-8">
				<ul>
					<li class="person-name">Мен  Жазгүл Жолдубай кызы </li>
					<li>Жадыраган жаздын 24дө төрөлгөм. </li>
					<li><span>Кесибим боюнча:</span>Балалыгыман бери кыялданган кесибим журналист.</li>
					<li><span>Кантип ди-джеей болуп калгам:</span>Менин жашоомдогу ийгилигим ди-джей болгонум. </li>
					<li><span>Радиодо болгон кызыктуу окуя:</span>Эфирде ар бир күнүбүз шаң, күлкү  жана кызыктуу окуялар менен  коштолот.</li>
					<li><span class="person-nons">Миң Кыял FMде эфиримди жана кесиптештеримди сүйөм. </span></li>
					<li>Мен, эфирде тамашакөй  жана энергиялуу, ал эми  жашоодо жөнөкөймүн.</li>
					<li><span>Эфирден сырткары жактырганым үй бүлөм менен  болуу.</span></li>
					<li><span>Сүйүп жеген тамагым:</span>Күлчөтай, анткени камырды жакшы көрөм.</li>
					<li>Сүйүп ичкен суусундугум шабдалы ширеси.</li>
					<li><span>Мени таасирленткен китеп: </span>Касымалы Жантөшовдун  “Каныбек” романы. Анткени ал китепти 5-классымда окуп бүткөм.</li>
					<li><span>Мен сүйүп угам:</span>Албетте сүйүү жөнүндө ырларды,  себеби  романтикмин.</li>

					<li><span>Мен сүйүп көргөн кино:</span>Мен көбүнчө Латын Американын сериалдарын жактырып көрөм. Алардын ичинен Аргентинанын “Дикий ангел” сериалын кайра кайра көрөм. </li>
					<li>Өзүм бала кыял мүнөздө болгондуктан, бөбөктөрүмдөн талашып көргөн  мультфилимим “Лунтик”.</li>

					<li><span>Балалыктагы кыялым:</span>Майами шаарына баруу болчу. Азыр да кыялым өз күчүндө.  </li>
					<li><span>Жашоодогу негизги максатым абдан чон. Буюурса баарына жетем деп ишенем.</span></li>

				</ul>

				</div>
               </div>
				<div class="col-md-offset-1 col-md-10" style="padding: 20px;">
					<div class="row">
						<div id="aniimated-thumbnials">
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/1.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/1.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/2.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/2.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/3.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/3.jpg')}}" />
						  </a>

						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/4.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/4.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/5.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/5.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/6.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/6.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/7.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/7.jpg')}}" />
						  </a>
						  <a href="{{asset('images/channels/minkiyal/vj/jazgyl/8.jpg')}}">
						    <img class="resize" src="{{asset('images/channels/minkiyal/vj/jazgyl/8.jpg')}}" />
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