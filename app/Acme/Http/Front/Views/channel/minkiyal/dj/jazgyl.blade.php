@extends('Front::channel.minkiyal.default')
@section('title', "Жазгүл Жолдубай кызы")
@section('styles')
      <link rel="stylesheet" href="{{asset('css/goodshare.css')}}">
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
            </div>
         </div>
      </div>
@stop
@section('footerScript')
@stop