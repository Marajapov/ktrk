@extends('Front::layouts.default')
@section('title', $post->getTitleRuOrKg())
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
@endsection()
@section('content')
    <div class="container main-wrapper">
        <div class="row">
            <section class="content clearfix">
                <div class="clearfix">
                    <div class="top-left-block col-md-9">
                        <div class="panel panel-default panel-article">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.Top news') }} <span class="divider"><i class="fa fa-circle"></i></span>
                                    <a href="{{ route('front.category', $post->category) }}">
                                        <span class="ctg">
                                            @if(app()->getlocale() == 'kg')
                                                {{ $post->category('category_id')->first()->title }}
                                            @else
                                                {{ $post->category('category_id')->first()->titleRu }}
                                            @endif
                                        </span>
                                    </a>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 block news-block">
                                    <h4 class="news-title">
                                        {{ $post->getTitleRuOrKg() }}
                                        <div class="extra">
                                            <span class="art-date"><i class="fa fa-calendar"></i>{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getYear() }}</span>
                                            <span class="art-view"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                        </div>
                                    </h4>
                                    <p class="post-thumb" href="{{ route('front.post', $post) }}">
                                        <img class="left" src="@if(empty($post->thumbnail_big)) {{  asset($post->thumbnail) }} @else {{  asset($post->thumbnail_big) }} @endif" alt="image">
                                    </p>
                                    {!! $content !!}
                                    <div class="carousel-post">
                                        @if($images != null)
                                            @foreach($images as $image)
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <footer>
                                    @if(auth()->user())
                                        <a class="post-edit" href="{{ route('admin.post.edit', $post) }}" target="_blank"><i class="fa fa-pencil"></i>{{ trans('site.AdminPostEdit') }}</a>
                                    @endif
                                    <a href="{{ route('front.general') }}">
                                        <span>{{ trans('site.PostAllNews') }}<i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>
                            </div>
                        </div>

                        @include('Front::partials.postBanner')

                        <div class="panel panel-default panel-related">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.TekteshNews') }}
                                </h3>
                            </div>
                            <div class="panel-body">
                                @foreach($relatedPosts as $relatedPost)
                                    @if($relatedPost->id == $post->id)
                                    @else
                                        <div class="col-md-4 block">
                                            <a href="{{ route('front.post', $relatedPost) }}" class="news-thumb">
                                                <img src="@if(empty($relatedPost->getFileBig())) {{ asset($relatedPost->getFile() )}} @else {{ asset($relatedPost->getFileBig()) }} @endif" alt=""/>
                                                <div class="extrarel">
                                                    <span class="art-date"><i class="fa fa-calendar"></i>{{ $relatedPost->getDay() }} {{ $relatedPost->getMonthRu() }}, {{ $relatedPost->getYear() }}</span>
                                                </div>
                                            </a>
                                            <a class="related-title" href="{{ route('front.post', $relatedPost) }}">
                                                {{ $relatedPost->getTitleRuOrKg() }}
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="panel panel-default panel-comments">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.Comments') }}
                                    <a class="commentadd" href="#respond">Оставить комментарий</a>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <ul class="comment-list">
                                    <li class="comment">
                                        <article>
                                            <footer class="comment-meta">
                                                <div class="comment-author">
								                    <span class="commentthumb">
									                    <img alt="" src="{{ asset('images/extra/profile.png') }}" class="avatar">
                                                    </span>
                                                    <span class="commentauthorname">Author Name</span>
                                                    <p href="#" class="commenttime">
                                                        <span>6 янв, 2016 13:43</span>
                                                    </p>
                                                </div>
                                            </footer>

                                            <div class="commentcontent">
                                                <p>Thank you for sharing,<br>
                                                    New year first article is really great !!</p>
                                                <p>Thanks you :)</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="comment">
                                        <article>
                                            <footer class="comment-meta">
                                                <div class="comment-author">
								                    <span class="commentthumb">
									                    <img alt="" src="{{ asset('images/extra/profile-2.png') }}" class="avatar">
                                                    </span>
                                                    <span class="commentauthorname">Author Name</span>
                                                    <p href="#" class="commenttime">
                                                        <span>6 янв, 2016 13:43</span>
                                                    </p>
                                                </div>
                                            </footer>

                                            <div class="commentcontent">
                                                <p>Thank you for sharing,<br>
                                                    New year first article is really great !!</p>
                                                <p>Thanks you :)</p>
                                            </div>
                                        </article>
                                    </li>
                                </ul>

                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Оставить комментарий
                                </h3>
                            </div>
                            <div class="panel-body">

                                <div class="comment-block">
                                    <div id="respond" class="comment-respond">
                                        <form action="" method="post" id="commentform" class="comment-form">
                                            <p class="comment-form-author">
                                                <label for="author">Имя <span class="required">*</span></label>
                                                <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="required">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input id="email" name="email" type="text" value="" size="30" aria-required="true" required="required">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Комментарий</label>
                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Отправить">
                                                <input type="hidden" name="comment_post_ID" value="25842" id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                            </p>
                                        </form>
                                    </div><!-- #respond -->
                                    <div class="clr"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    @include('Front::partials.leftCategories')
                </div>
            </section>
        </div>
    </div>
@stop