@extends('Admin::layouts.default')
@section('title', "Posts")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.post.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы макала</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="page-title">
					<div class="title_left">
						<h3>Макалалар</h3>
					</div>
					<div class="title_right">
						<div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
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
						@foreach($posts as $post)
						<div class="@if(!$post->isPublished()) alert alert-danger list-group-item @endif list-group-item">
							<i>{{ $post->id() }}. </i><a href="{{ route('admin.post.show', $post) }}">{{ $post->getTitle() }}</a> ({{ $post->category->getTitle()  }})
						</div>
						@endforeach
					</div>

				</div>

				<a href="{{ route('admin.post.index', ['page' => 1]) }}" class="btn btn-default @if($posts->currentPage() == 1) disabled @endif">Башы</a>
				<a href="{{ $posts->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a href="{{ $posts->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>

				@for($i = 0, $j = 1; $i < $posts->total(); $i+=$perPage)
				<a href="{{ route('admin.post.index', ['page' => $j]) }}" class="btn btn-default @if($posts->currentPage() == $j) disabled @endif">{{ $j++ }}</a>
				@endfor

				<a href="{{ route('admin.post.index', ['page' => ceil($posts->total()/$perPage)]) }}" class="btn btn-default @if($posts->currentPage() == ceil($posts->total()/$perPage)) disabled @endif">Аягы</a>


			</div>
		</div>
	</div>

	@stop

