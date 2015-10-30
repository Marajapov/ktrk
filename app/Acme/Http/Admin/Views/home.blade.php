@extends('Admin::layouts.default')
@section('title', "Admin panel")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">          
            </div>

            <!-- top tiles -->
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Колдонуучулар</span>
                        <div class="count">2500</div>
                        <span class="count_bottom"><i class="green"></i> Акыркы 24 сатта</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Сайтка киришти</span>
                        <div class="count">4258</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> Акыркы 24 сатта</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Видео көрүлдү</span>
                        <div class="count green">1230</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> Акыркы 24 сатта</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Макала окулду</span>
                        <div class="count">4,567</div>
                        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i></i> Акыркы 24 сатта</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Пикир калтырышты</span>
                        <div class="count">31</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Акыркы 24 сатта</span>
                    </div>
                </div>
                <div class=" col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                    <div class="left"></div>
                    <div class="right">
                        <span class="count_top"><i class="fa fa-user"></i> Жаңы макалалар</span>
                        <div class="count">25</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Акыркы 24 сатта</span>
                    </div>
                </div>

            </div>

            <!-- /top tiles -->
        </div>
       
    </div>    

    <!-- left infobar -->
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <h2>Таск бар</h2>
            <div class="row">     
            </div>

        </div>
    </div>
    <!-- left infobar -->
    <!-- right infobar -->
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <h2>Оң инфобар</h2>               
            <div class="row">
            </div>

        </div>
    </div>
    <!-- right infobar -->

    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="x_panel">
            <h2>Жумалык рейтинг</h2>               
            <div class="row">
            </div>

        </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel">
            <h2>Колдонуучулар рейтинги</h2>               
            <div class="row">
            </div>

        </div>
    </div>
</div>


<div class="row col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">


	@include('Front::messages.flash')
	@stop

    </div><!-- end row-->