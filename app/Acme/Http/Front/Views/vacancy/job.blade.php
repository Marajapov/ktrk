@extends('Front::layouts.defaultInit')
@section('title', $vacancy->getTitleOne())

@section('styles')    
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vertex.css') }}">
@endsection

@section('content')
    <div id="vacansy" class="container main-wrapper">
        <div class="row">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"> 
                        {{ $vacancy->getTitleOne() }}
                    </h3>
                </div>
                <div class="panel-body">
                  
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerScript')
@stop