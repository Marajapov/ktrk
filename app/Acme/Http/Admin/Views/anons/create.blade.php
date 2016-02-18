@extends('Admin::layouts.default')
@section('title', trans('site.AdminAnonsNew'))

@section('styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>

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
                    <h4>{{ trans('site.AdminAnonsNew') }}</h4>
                </div>

                <div class="x_content">
                    {!! Form::model($anons, ['route' => 'admin.anons.store', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
                        @include('Admin::partials.forms.anons', $anons)
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script>
         @if(session('success') == 'true')
            $(document).ready(function () {
                $('#minkiyalAnons').removeClass('hidden');
            });
         @endif
    </script>

    <script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });

        $("#category").change(function()
        {
            var id=$(this).val();
            var dataString = 'id='+ id;
            var url = "create";

            $.ajax
            ({
                type: "POST",
                url: url,
                data: dataString,
                cache: false,
                success: function(data)
                {
                    // minkiyal
                    if(data == 9){
                        $('#minkiyalAnons').show();
                        $('#nameKg').show();
                    } else {
                        $('#minkiyalAnons').hide();
                        $('#nameKg').hide();
                    }

                    // balastan
                    if(data == 4) {
                        $('#balastanAnons').show();
                    } else {
                        $('#balastanAnons').hide();
                    }
                }
            });
        });
    });
    </script>
@stop


