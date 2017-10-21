@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>
@endsection

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

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap-tokenfield.js') }}"></script>

    <script>
    	var homeTop = $('#positionLeft'),
    		homeBottom = $('#positionCenter'),
    		homeRight = $('#positionRight'),
    		innerTop = $('#positionTop'),
    		innerBottom = $('#positionBottom'),
    		innerRight = $('#extracolumn'),
            sportTop = $('#sportTop'),
            sportBottom = $('#sportBottom'),
            birinchiTop = $('#birinchiTop'),
    		birinchiBottom = $('#birinchiBottom'),
    		birinchiRight = $('#birinchiRight');

    	$('.positions').hide();
	    function hideCheckboxes(...cbx){
	    	$('.positions').show();
	    	$('.positions').children().show();
	    	for(var i=0; i<cbx.length; i++){
	    		cbx[i].parent().parent().parent().hide();
	    	}
	    }
    	$('[name=channel_id]').change(function(){
    		var id = $(this).val();
    		if(id==2)			{ hideCheckboxes(sportTop, sportBottom, birinchiTop, birinchiBottom, birinchiRight); }
    		else if(id==11) 	{ hideCheckboxes(homeTop, homeBottom, homeRight, innerTop, innerBottom, innerRight, birinchiTop, birinchiBottom, birinchiRight); }
    		else if(id==7) 		{ hideCheckboxes(homeTop, homeBottom, homeRight, innerTop, innerBottom, innerRight, sportTop, sportBottom); }
    	});
    </script>
@stop


