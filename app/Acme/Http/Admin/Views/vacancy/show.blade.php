@extends('Admin::layouts.default')
@section('title', $vacancy->getTitleOne())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title clearfix">
				<h4>{{ trans('site.Info') }}</h4>

	            <a href="{{ route('admin.vacancy.index') }}" class="btn btn-default pull-right btn-back">{{ trans('site.Back') }}</a>

	            {!! Form::open(['route' => ['admin.vacancy.destroy', $vacancy], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
	            <button type="submit" class="btn btn-danger" href="#">
	              <i class="fa fa-times"></i>
	              {{ trans('site.Delete') }}
	            </button>
	            {!! Form::close() !!}

	            <a href="{{ route('admin.vacancy.edit', $vacancy) }}" class="btn btn-success pull-right">
	              <i class="fa fa-edit"></i>
	              {{ trans('site.Change') }}
	            </a>
			</div>

			<div class="x_content post-info clearfix">
				<ul class="list-group">
					<li class="list-group-item">
						<p class="header">Миниатюра</p>
						<p class="body">
							@if($vacancy->isImage())
							<img src="{{ asset($vacancy->getFile()) }}" width="auto" height="120">
							@else
							<object width="auto" height="120" type="application/x-shockwave-flash" data="{{ asset($vacancy->getFile()) }}"></object>
							@endif
						</p>
					</li>
        			<li class="list-group-item">
			            <p class="header">Аталышы</p>
			            <p class="body">{{ $vacancy->getTitleOne() }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Описание</p>
			            <p class="body">{{ $vacancy->getShortdescOne() }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Специальность</p>
			            <p class="body">{{ $vacancy->getWorktimeOne() }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Локация</p>
			            <p class="body">{{ $vacancy->getLocationOne() }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Контент KG</p>
			            <p class="body">{!! $vacancy->getContentOne() !!}</p>
          			</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop
