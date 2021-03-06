@extends('Admin::layouts.default')
@section('title', trans('site.AdminQuoteNew'))

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
                    <h4>{{ trans('site.AdminQuoteNew') }}</h4>
                </div>

                <div class="x_content">
                    {!! Form::model($quote, ['route' => 'admin.quote.store', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
                        @include('Admin::partials.forms.quote', $quote)
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
@stop


