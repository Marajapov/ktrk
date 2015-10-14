@extends('Admin::layouts.default')
@section('title', $page->getName())

@section('content')

{!! Form::model($page, ['route' => 'admin.page.store']) !!}
@include('Admin::partials.forms.page', $page)
{!! Form::close() !!}

@stop

