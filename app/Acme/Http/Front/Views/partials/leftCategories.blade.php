<div class="top-right-block col-md-3 with-top-articles">

    <div class="panel panel-default panel-articles panel-top-articles">
        <div class="panel-heading">
            <h3 class="panel-title"><span>{{ trans('site.PostAktualno') }}</span></h3>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    @foreach($topArticles as $post)

                        <div class="media">

                            <div class="media-body">
                                <div class="extra">
                                    <span class="e-datetime">{{ $post->getDay() }} {{ $post->getMonthRu() }}</span>
                                    <a class="e-cat text-uppercase" href="{{ route('front.category', $post->category) }}"><span>{{ $post->category('category_id')->first()->getTitle() }}</span></a>
                                    {{-- <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span> --}}
                                </div>
                                <a class="media-heading" href="{{ route('front.post', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                            </div>

                        </div>

                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <a target="_blank" href="@if($positionRight) {{ $positionRight->linkTo }} @else # @endif" class="text-center ads ads-300x250 middle-ad">
        <img src="@if(!empty($positionRight->file)) {{ asset($positionRight->file) }} @else {{ asset('images/banner_250x250.png') }} @endif" alt="phot1"/>
    </a>

    {{--<div class="panel panel-default ctg-panel" data-spy="affix" data-offset-top="170" data-offset-bottom="225">--}}
    <div class="panel panel-default ctg-panel">
        <div class="panel-heading">
            <h3 class="panel-title"><span>{{ trans('site.AdminCategories') }}</span></h3>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <ul class="list-group">
                        @foreach($categories as $category)
                        <li class="list-group-item">
                            <a href="{{ route('front.category', $category) }}">{{ $category->getTitle() }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <a href="#" class="text-center ads ads-300x250 hidden">

        <img src="{{ asset('img/banner/2.jpg') }}" alt=""/>
    </a>

</div><!-- end of left categories -->