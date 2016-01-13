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

                        <div id="comments" class="panel panel-default panel-comments">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.Comments') }}
                                    <a class="commentadd" href="#respond">Оставить комментарий</a>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <ul class="comment-list">
                                    @foreach($comments as $key=>$comment)
                                        <li class="comment">
                                            <article>

                                                <footer class="comment-meta">
                                                    <div class="comment-author">
								                    <span class="commentthumb">
									                    <img alt="" src="@if($key%2==0){{ asset('images/extra/profile.png') }}@else{{ asset('images/extra/profile-2.png') }}@endif" class="avatar">
                                                    </span>
                                                        <span class="commentauthorname">{{ $comment->author }}</span>
                                                        <p href="#" class="commenttime">
                                                            <span>{{ $comment->getDay() }} {{ $comment->getMonth() }}, {{ $comment->getYear() }} {{ $comment->getTime() }}</span>
                                                        </p>
                                                    </div>
                                                </footer>

                                                <div class="commentcontent">
                                                    {{ $comment->text }}
                                                </div>

                                                <div class="commentreply hidden">
                                                    <a class="comment-reply-link" href="#" aria-label="Reply to Author Name">Ответить</a>
                                                </div>

                                            </article>
                                        </li>
                                    @endforeach

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
                                        {!! Form::open(array('route' => 'front.comment', 'method' => 'post', 'id'=>'commentform', 'enctype' => 'multipart/form-data', 'class'=>'comment-form')) !!}
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
                                            <textarea id="comment" name="text" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                        </p>
                                        <div class="captcha">
                                            <label for="comment">&nbsp;</label>
                                            <div class="g-recaptcha" data-sitekey="6LcBGBUTAAAAAIuKMiXH16edZGH4hRR58GJgqeDq"></div>
                                        </div>
                                        <div class="hidden">
                                            <input type="hidden" name="resourceId" value="{{ $post->id }}"/>
                                            <input type="hidden" name="resourceType" value="post"/>
                                        </div>
                                        <p class="form-submit">
                                            <input type="submit" id="submit" class="submit" value="Отправить">
                                        </p>
                                        {!! Form::close() !!}
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

@section('footerScript')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection