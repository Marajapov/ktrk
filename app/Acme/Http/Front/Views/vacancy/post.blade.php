@extends('Front::layouts.defaultInit')
@section('title', $vacancynews->getTitleOne())

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
                        {{$vacancynews->getTitleOne()}}
                    </h3>              
                    <div class="extra">
                        <span class="art-date"><i class="fa fa-calendar"></i>{{ $vacancynews->getDay() }} {{ $vacancynews->getMonthRu() }}, {{ $vacancynews->getTime() }}</span>
                        <span class="art-view"><i class="fa fa-eye"></i>{{ $vacancynews->getViewed() }}</span>
                    </div>
                </div>
                <div class="panel-body">
                    <article>
                        {!! $vacancynews->getContent() !!}
                    </article>
                </div>
            </div>
            <div class="panel">
                
            </div>
        </div>
    </div>
@stop

@section('footerScript')
@stop