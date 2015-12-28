@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h4>{{ trans('site.AdminBannerCreate') }}</h4>
			</div>

			<div class="x_content">
				{!! Form::model($banner, ['route' => 'admin.banner.store', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
				@include('Admin::partials.forms.banner', $banner)
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/select/select2.min.css') }}"/>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
@stop

@section('scripts')
 <script src="{{ asset('js/admin/select/select2.full.js') }}"></script>
 <script type="text/javascript">
    $('#tag_list').select2({
        ajax: {
            url: "/api/tags",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    tag: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: 'Выберите тег',
        tags: true,
        tokenSeparators: [',', ' '],
        minimumInputLength: 1,
    });
</script>
@stop

