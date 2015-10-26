<!DOCTYPE html>
<html lang="ру">
<head>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.css') }}">
    
    <!-- Admin page styles -->
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/admin/font-awesome.min.css') }}"/>
    <!-- Custom styling plus plugins -->
    <link rel="stylesheet" href="{{ asset('css/admin/custom.css') }}"/>

    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
    <script src="{{ asset('js/admin/nprogress.js') }}"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <!-- FontAwesome Styles-->
          <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />

   

          <!-- Latest compiled and minified JavaScript -->
          <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
          <script src="{{ asset('js/bootstrap.min.js') }}"></script>
          @yield('styles')
          <title>
            @yield('title')
        </title>
    </head>
    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
           <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

             <div class="navbar nav_title" style="border: 0;">
                <a href="{{ route('admin.home') }}" class="site_title"><i class="fa fa-bank"></i> <span>Жогорку Кеңеш!</span></a>
            </div>
            <div class="clearfix"></div>

            @include('Admin::partials.header')
            @yield('header')
        </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">

        <div class="nav_menu">
            <nav class="" role="navigation">
                <div class="nav toggle ">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>
                           {{ auth()->user()->getName() }} 
                           <span class=" fa fa-arrow-down"></span>
                       </a>
                       <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li><a href="javascript:;"><i class="fa fa-user-secret"></i> &nbsp; Кабинет</a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fa fa-cog"></i> &nbsp; Оңдоолор </a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fa fa-info"></i> &nbsp; Жардам</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:document.getElementById('logout-form').submit()"><i class="fa fa-power-off"></i> &nbsp; Чыгуу</a></li>
                    </ul>
                </li>                    

            </ul>

        </nav>
    </div>

</div>
<!-- /top navigation -->

<div class="right_col" role="main">
    @yield('content')

</div>



</div><!--end page-wrapper-->
</div><!--end page-inner-->

<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>

<!-- bootstrap progress js -->
<script src="{{ asset('js/admin/progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('js/admin/custom.js') }}"></script>
<script>
    NProgress.done();
</script>
</body>
</html>