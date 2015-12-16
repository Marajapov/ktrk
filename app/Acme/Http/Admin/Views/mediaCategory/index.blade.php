@extends('Admin::layouts.default')
@section('title', "Media Categories")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">

      <div class="x_title clearfix">
        <h4>{{ trans('site.AdminMediaCategoryMedias') }}</h4>
        <a href="{{ route('admin.mediaCategory.create') }}" class="btn btn-success pull-right">
          <i class="fa fa-plus"></i>
          {{ trans('site.AdminMediaCategoryNewC') }}
        </a>
      </div>

			<div class="x_content">

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($mediaCategories as $mediaCategory)
					<a href="{{ route('admin.mediaCategory.show', $mediaCategory) }}" class="list-group-item">{{ $mediaCategory->getName() }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop


