@extends('Front::channel.minkiyal.default')
@section('title', "Расул Мырзатегин")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/2.png')}}" alt="">
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
					<li class="person-name">Мен  Расул Мырзатегин</li>
					<li>Туулган күнүм менен, кычыраган кыштын 25-барагында  куттуктасаңар болот! </li>
					<li><span>Кесибим боюнча:</span> Дипломат-котормочу, (2-кесибим MBA-Мастер делового администрирование).</li>
					<li><span>Кантип ди-джеей болуп калгам:</span> Талантымды көрсөттүм, байкашты, баалашты анан ди-джейликке алышты :).</li>

					<li><span>Радиодо болгон кызыктуу окуя:</span> Эфирдеги ар бир программанын жүрүшү, келген коноктор менен болгон маектер кызыктарга бай. Алардын айрымдарын сизге жолукканда айтып берем. Сөз берем :)!</li>
					<li><span class="person-nons">Миң Кыял FMде, Миң деген нерселерди суйом.</span></li>
					<li>Мен, эфирде шайыр-шайдоот, кыялкеч жана романтикмин, жасалмасы жок, эфирде кандай болсом, жашоодо дагы ошондоймун. </li>
					<li><span>Эфирден сырткары жактырганым:</span>  Дүйнөлүк адабиятка саякаттап, китеп окуу. Психологиялык китептерди кызыгуу менен барактагандан тажабайм</li>
					<li>Сүйүп жеген тамагым: Француз Киш Лорени жана ГМО кошулбаган азыктар.</li>
					<li>Суусундуктардан  жер жемиштер менен жалбыз аралашкан чайды  жактырам.</li>
					<li>Мени таасирленткен китеп: Стивен Р.Кови “7 навыков высокоэффективных людей”.</li>
					<li>Поп жана лаундж музыкасын сүйүп угам.</li>
					<li>«Биринчи мугалим», «Пока не сыграл в ящик»,  кинолорун кайталап көрүүдөн тажабайм.</li>
					<li>Мультфильмдердин фанаты эмесмин. Бирок Том менен Джэррини коруп коем)).</li>
					<li>Балалыктагы кыялым: Буюрса баардыгы чет-четинен орундалып келет. </li>
					<li>Жашоодогу негизги максатым: Шаг назад не в моих правилах! Адамсынбы? Айттынбы? Аткар!</li>

				</ul>

				</div>
               </div>
            </div>
         </div>
      </div>
@stop
@section('footerScript')
@stop