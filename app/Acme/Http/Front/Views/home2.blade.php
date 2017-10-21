@extends('Front::layouts.default2')

@section('title', trans('site.Homepage').' - КТРК' )

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@endsection

@section('content')
@stop

@section('footerScript')
	<script src="{{asset('js/mobile-nav.js')}}"></script>
@endsection