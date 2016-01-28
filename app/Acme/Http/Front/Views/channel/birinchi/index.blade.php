@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
@endsection
@section('content')
    <div class="birinchiradio">
        @include('Front::channel.birinchi.nav')
        <div class="container homepage">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="hometreble">
                            <div class="col-md-12">
                                <h3 class="title">{{ trans('radiopages.Mainnews') }}</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 hoverslider">
                                    <div class="slider-for col-md-9 col-sm-12">
                                        @if($generalPosts)
                                            @foreach($generalPosts as $post)
                                                <div>
                                                    <div class="slide-info">
                                                        <a href="{{ route('birinchi.news', $post) }}" title="">
                                                        <img class="img" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt=""/>
                                                        </a>
                                                        <span class="slide-category">
                                                        {{ $post->category('category_id')->first()->getTitle() }}
                                                        </span>
                                                        <span class="slide-date">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="slider-nav col-md-3 col-sm-12">
                                        @if($generalPosts)
                                            @foreach($generalPosts as $post)
                                                <div>
                                                    <div class="switcher">
                                                        <h3 class="name">
                                                            <a href="{{ route('birinchi.news', $post) }}" title="">
                                                                {{ $post->getTitleRuOrKg() }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="homeleftcategory">
                            <div class="col-md-12">
                                <h3 class="title">Лента новостей</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="lenta">
                                    @if($lentaNews)
                                        @foreach($lentaNews as $lenta)
                                            <div class="lentanews">
                                                <span class="xdate">{{ $lenta->getTime()}}</span>
                                                <span class="xtitle"><a href="{{ route('birinchi.news', $lenta) }}">{{ $lenta->getTitleRuOrKg() }}</a></span>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <footer>
                                   <a href="{{ route('birinchi.allnews') }}">{{ trans('radiopages.Morenews') }}<i class="fa fa-arrow-circle-right"></i></a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($topCategories as $topCategory)
                    <div class="col-md-6 homenews">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title">{{ $topCategory->getTitle() }}</h3>
                            </div>
                            @if($posts)
                                @foreach($posts as $post)
                                    @if($post->category_id == $topCategory->id)
                                        <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                                            <article>
                                                <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                                    <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                                    <div class="card-info">
                                                        <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                    </div>
                                                </a>
                                                <h3 class="name headline">
                                                    <a href="{{ route('birinchi.news', $post) }}" title="">
                                                        {{ $post->getTitleRuOrKg() }}
                                                    </a>
                                                </h3>
                                            </article>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 shows">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titleshows">{{ trans('radiopages.Peredachi') }}<span class="label label-danger">АНОНС!</span></h3>
                            <!-- <h3 class="titleshowsright"><a href="{{ route('birinchi.allbroadcasts') }}">{{ trans('radiopages.AllPereadachi') }}<i class="fa fa-arrow-circle-right"></i></a></h3> -->
                        </div>

                        @if($birinchiProjects)
                            @foreach($birinchiProjects as $project)
                                @foreach($project->oneprogram()->take(6)->get() as $post)
                    
                                    <div class="blocknews2 col-md-4 col-sm-6 col-xs-12">
                                        <article>                                                             
                                            <a href="#" class="hovertext">
                                                <img class="blockimg" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                                <div class="desc"><span>{!! $post->getContent() !!}</span></div>
                                            </a>
                                            <h3 class="name headline">                                               
                                               {{ $post->getTitleRuOrKg() }}                                             
                                           </h3>
                                        </article>
                                    </div>
                  
<!--                                     <div class="blocknews col-md-4 col-sm-6 col-xs-12">
                                        <article>
                                            <a href="{{ route('birinchi.broadcast', $post) }}" class="image-link">
                                                <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                                <div class="card-info">
                                                    <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                    <a class="category" href="{{ route('front.category', $post->category) }}">
                                                        {{ $post->category('category_id')->first()->getTitle() }}
                                                    </a>
                                                </div>
                                            </a>
                                            <h3 class="name headline">
                                                <a href="{{ route('birinchi.broadcast', $post) }}" title="">
                                                    {{ $post->getTitleRuOrKg() }}
                                                </a>
                                            </h3>
                                        </article>
                                    </div> -->
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>

                @foreach($bottomCategories as $bottomCategory)
                    <div class="col-md-6 homenews">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title">{{ $bottomCategory->getTitle() }}</h3>
                            </div>
                            @if($posts)
                                @foreach($posts as $post)
                                    @if($post->category_id == $bottomCategory->id)
                                        <div class="blocknews col-md-4 col-sm-4 col-xs-12">
                                            <article>
                                                <a href="{{ route('birinchi.news', $post) }}" class="image-link">
                                                    <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif">
                                                    <div class="card-info">
                                                        <span class="date ">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                    </div>
                                                </a>
                                                <h3 class="name headline">
                                                    <a href="{{ route('birinchi.news', $post) }}" title="">
                                                        {{ $post->getTitleRuOrKg() }}
                                                    </a>
                                                </h3>
                                            </article>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-md-12 birinchigallery">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title">{{ trans('radiopages.Photos') }}</h3>
                            <h3 class="titleshowsright"><a href="{{ route('birinchi.allphotos') }}">{{ trans('radiopages.Allphotos') }}<i class="fa fa-arrow-circle-right"></i></a></h3>
                        </div>
                        @if($photoGalleries)
                            @foreach($photoGalleries as $photoGallery)
                                <div class="col-md-4">
                                    <a href="{{ route('birinchi.photos', $photoGallery) }}" class="photo-img">
                                        <img src="{{ asset($photoGallery->status) }}" alt="" />
                                        <span class="photo-overlay"></span>
                                    </a>
                                    <div class="photo-info">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="extraone">
                                                    <span class="e-datetime"><i class="fa  fa-calendar"></i>  {{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                                </div>
                                                <a href="{{ route('birinchi.photos', $photoGallery) }}">
                                                    <i class="fa fa-camera photo-icon"></i>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <h4 class="media-heading photo-name"><a href="{{route('birinchi.photos', $photoGallery)}}">{{ $photoGallery->getName() }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerscript2')
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            focusOnSelect: true,
            vertical:true,
            arrows:false
        });
    </script>

    <script>
        $('.slider-nav').on('mouseenter', '.slick-slide', function (e) {
            var $currTarget = $(e.currentTarget),
                index = $currTarget.data('slick-index'),
                slickObj = $('.slider-for').slick('getSlick');
            slickObj.slickGoTo(index);
        });
    </script>

@endsection