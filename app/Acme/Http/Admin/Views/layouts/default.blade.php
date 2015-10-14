<!DOCTYPE html>
<html lang="ру">
<head>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.css') }}">
    <!-- FontAwesome Styles-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div id="page-inner">

        @include('Admin::partials.header')
        @yield('header')
            <div class="container">
            @yield('content')


            </div>

        </div><!--end page-wrapper-->
    </div><!--end page-inner-->
</div><!-- end wrapper-->
    @yield('scripts')
</body>
</html>
