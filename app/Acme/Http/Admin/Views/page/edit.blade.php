@extends('Admin::layouts.default')
@section('title', $page->getName())

@section('content')

{!! Form::model($page, ['route' => ['admin.page.update', $page], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.page', $page)
{!! Form::close() !!}

@stop

