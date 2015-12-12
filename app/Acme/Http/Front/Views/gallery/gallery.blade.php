@extends('Front::layouts.default')
@section('title', $row->getName())

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
@endsection()

@section('content')
  <div class="container main-wrapper">
    <div class="row">
    	<section class="content clearfix">

            <div class="clearfix">
                <div class="top-left-block col-md-12">
                    <div class="panel panel-default panel-videos">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Галерея
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="grid-gallery" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/5.jpg') }}" alt="img26">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/5.jpg') }}" alt="img25">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/10.png') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                    </ul>
                                </section><!-- // grid-wrap -->
                                
                                <section class="slideshow">
                                    <ul>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/10.png') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{{ asset('images/1.jpg') }}" alt="img24">
                                            </figure>
                                        </li>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">УПРАВЛЯЙТЕ С ПОМОЩЬЮ СТРЕЛОК</div>
                                </section><!-- // slideshow -->
                            </div>
                        </div>

                        <a href="#" class="text-center ads">
                            <img src="images/ads_1.jpg" alt=""/>
                        </a>

                    </div>

                    <div class="top-right-block col-md-3 hidden">
                        <div class="panel panel-default ctg-panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Категориялар</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="row">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <a href="#">Саясат жана коом</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Экономика жана бизнес</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Музыка жана чыгармачылык</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Илим жана билим</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Айыл чарба</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Маданият</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Спорт</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Ден соолук</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Балдар</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Интернет жана технологиялар</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Коргонуу жана коопсуздук</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Коррупция</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Кылмыш</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Дин</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Аналитика</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Аймактык жаңылыктар</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Чек ара</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Экология</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Туризм</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Укук коргоо</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <a href="#" class="text-center ads ads-300x250">
                            <img src="images/ads_240x400.jpg" alt=""/>
                        </a>

                    </div>

                </div>

        </section>
    </div><!-- end row-->
  </div><!-- end container main-wrapper -->

@stop
@section('footerscript2')
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>

<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
@endsection
