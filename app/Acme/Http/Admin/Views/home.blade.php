@extends('Admin::layouts.default')
@section('title', "Admin panel")

@section('content')
<h1 style="text-align:center">Улуу урматтуу депутат!</h1>
<h3 style="text-align:center; color:rgb(152, 65, 65);">Бүгүнкү күн боюнча отчет менен таанышсаңыз болот:</h3>
<div class="row top_tiles">
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-caret-square-o-right"></i>
			</div>
			<div class="count">258 жолу</div>

			<h3>Видеолоруңузду көрүштү</h3>
			<p>Акыркы 24 саатта.</p>
		</div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-comments-o"></i>
			</div>
			<div class="count">410 жолу</div>

			<h3>Нааразычылыгын билдиришти</h3>
			<p>Акыркы 24 саатта.</p>
		</div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-sort-amount-desc"></i>
			</div>
			<div class="count">12</div>

			<h3>Жаңы тарапташтарыңыз</h3>
			<p>Акыркы 24 саатта.</p>
		</div>
	</div>
	<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="tile-stats">
			<div class="icon"><i class="fa fa-check-square-o"></i>
			</div>
			<div class="count">31 доо</div>

			<h3>Арыз жөнөтүштү.</h3>
			<p>Акыркы 24 саатта.</p>
		</div>
	</div>
</div>
<div class="row col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">


	@include('Front::messages.flash')
	@stop

    </div><!-- end row-->