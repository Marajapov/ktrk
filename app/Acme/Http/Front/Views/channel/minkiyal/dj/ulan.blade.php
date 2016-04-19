@extends('Front::channel.minkiyal.default')
@section('title', "Улан Улукболсун")
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
					<img class="d-img" src="{{asset('images/channels/minkiyal/vj/3.png')}}" alt="">
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
            </div>
         </div>
      </div>
@stop
@section('footerScript')
@stop