@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
	      <div class="x_title">
	        <h4>{{ trans('site.AdminPhotoParentAddNew') }}</h4>
	      </div>

			<div class="x_content">
				{!! Form::model($photoParent, ['route' => 'admin.photoParent.store', 'enctype' => 'multipart/form-data',  'class'=>'form-horizontal']) !!}
				@include('Admin::partials.forms.photoParent', $photoParent)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
@endsection

