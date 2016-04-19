@extends('Front::channel.minkiyal.default')
@section('title', "Бекзат Калыбек уулу")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/6.png')}}" alt="">
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
					<li class="person-name">Менин атым: Бекзат Калыбек уулу</li>
					<li>Туулган күнүм  менен уч тамгадан турган айдын 19  да  куттуктасаңар болот!</li>
					<li><span>Кесибим боюнча:</span> Журналист.</li>
					<li><span>Кантип ди-джеей болуп калгам:</span> Ошо кезде жашоонун бир сыры чечилген го...</li>
					<li><span>Радиодо болгон кызыктуу окуя:</span>Чүчкүрүктү токтото албай арты –артынан күлгөнүм.</li>
					<li><span class="person-nons">Миң Кыял FMде эмнени сүйөм: угуп жаткан угармандын үнүн.</span></li>
					<li>Мен  эфирде ото эле шайырмын, жашоодо деле дал өзүндөй. </li>
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
            </div>
         </div>
      </div>
@stop
@section('footerScript')
@stop