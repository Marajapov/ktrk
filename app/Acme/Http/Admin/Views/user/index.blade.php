@extends('Admin::layouts.default')
@section('title', "Users")

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.user.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы колдонуучу</a>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				    <div class="page-title">
                        <div class="title_left">
                            <h3>Баардык колдонуучулар</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Издөө...">
                                    <span class="input-group-btn">
                            		<button class="btn btn-default" type="button">ОК!</button></span>
                                </div>
                            </div>
                        </div>
                    </div>
				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($users as $user)
					<a href="{{ route('admin.user.show', $user) }}" class="list-group-item">{{ $user->getName() }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

<a href="{{ route('admin.user.index', ['page' => 1]) }}" class="btn btn-default @if($users->currentPage() == 1) disabled @endif">Башы</a>
<a href="{{ $users->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a href="{{ $users->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>

@for($i = 0, $j = 1; $i < $users->total(); $i+=$perPage)
<a href="{{ route('admin.user.index', ['page' => $j]) }}" class="btn btn-default @if($users->currentPage() == $j) disabled @endif">{{ $j++ }}</a>
@endfor

<a href="{{ route('admin.user.index', ['page' => ceil($users->total()/$perPage)]) }}" class="btn btn-default @if($users->currentPage() == ceil($users->total()/$perPage)) disabled @endif">Аягы</a>


@stop

