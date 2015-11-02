@extends('Admin::layouts.default')
@section('title', "Директор баракчасы")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.peopleReporter.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы макала</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="page-title">
                        <div class="title_left">
                            <h3>Макалалар</h3>
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
					@foreach($peopleReporters as $peopleReporter)

					<div class="@if(!$peopleReporter->isPublished()) alert alert-danger list-group-item @endif list-group-item">
						<i>{{ $peopleReporter->id() }}. </i><a href="{{ route('admin.peopleReporter.show', $peopleReporter) }}">{{ $peopleReporter->getName() }}</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>



@stop

