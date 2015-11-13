@extends('Front::layouts.default')
@section('title', '2013 - 2015 - жылга карай КТРКнын Өнүгүү стратегиясынын долбоору | КТРК')
@sectin('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
@stop
@section('content')
	<style>
	.rsarticles blockquote a:focus, a:hover {
    color: #23527c !important;
    text-decoration: underline !important;
    cursor: pointer;
} 
	</style>
	 <div class="container main-wrapper">
            <div class="row">
                <section class="content clearfix">
	                <div class="clearfix">
                        <div class="top-left-block col-md-9">
                            <div class="panel panel-default">
		                        
                    		</div><!-- end panel default -->
                        </div>
	                @include('Front::partials.leftCategories')
	                </div>
                </section>
            </div>
        </div>
@stop