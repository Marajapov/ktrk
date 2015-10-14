@extends('Front::layouts.default')
@section('title', $page->getName())

@section('content')

        <div>
            <h3>{{ $page->getName() }}
            <span class="pull-right badge"><span class="glyphicon glyphicon-eye-open"></span> &nbsp;&nbsp;{{ $page->getViewed() }}</span>
            </h3>
        </div>
        <hr>
        <div>
            <p>{{ $page->getContent() }}</p>
        </div>


@stop
