@extends('Front::layouts.defaultShailoo')

@section('title', trans('shailoo.ShailooFull').' | КТРК')

@section('styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
@stop

@section('content')

    @include('Front::shailoo.header');

    <div class="container main-wrapper shailoo">
        <div class="row">
            <section class="content clearfix">
                <div class="clearfix">
                    <div class="top-left-block col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{route('front.shailoo')}}"><h3 class="panel-title"><span>{{ trans('shailoo.ShailooFull') }}</span></h3></a>
                            </div>
                            <div class="panel-body no-bottom">

                                <h4 class="panel-body-title">{{trans('shailoo.ShailooLast')}}</h4>

                                <div class="panel-body-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="{{route('front.shailoo.party', $post->category)}}">
                                                <img class="media-object" src="{{asset($post->category->description)}}" alt="{{$post->category->getTitle()}}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="news-adds clearfix">
                                                <a href="{{route('front.shailoo.party', $post->category)}}" class="">{{$post->category->getTitle()}}</a>
                                                <span class="news-time"> {{$post->getDay().' '.$post->getFullMonth().', '.$post->getTime()}}</span>
                                            </div>
                                            <h4 class="media-heading">
                                                {!!$post->getContentKG()!!}
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                                <footer>
                                    <a href="{{route('front.shailoo.all')}}">
                                        <span>{{trans('shailoo.ShailooAll')}} <i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>
                        </div>

                        <div id="comments" class="panel panel-default panel-comments">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.Comments') }} ({{count($comments)}})
                                    <a class="commentadd" href="#respond">{{trans('site.LeaveComment')}}</a>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <ul class="comment-list">

                                    @if($comments)

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

                                    @endif

                                </ul>

                                <div class="comment-block">
                                    <div id="respond" class="comment-respond">
                                        <h3>
                                            {{trans('site.LeaveComment')}}
                                        </h3>
                                        {!! Form::open(array('route' => 'front.comment', 'method' => 'post', 'id'=>'commentform', 'enctype' => 'multipart/form-data', 'class'=>'comment-form')) !!}
                                        <p class="comment-form-author clearfix">
                                            <label for="author">Имя <span class="required">*</span></label>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="required">
                                        </p>
                                        <p class="comment-form-email clearfix">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input id="email" name="email" type="text" value="" size="30" aria-required="true" required="required">
                                        </p>
                                        <p class="comment-form-comment clearfix">
                                            <label for="comment">Комментарий</label>
                                            <textarea id="comment" name="text" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                        </p>
                                        <div class="captcha clearfix">
                                            <label for="comment">Проверка (нажмите на )</label>
                                            <div class="g-recaptcha" data-sitekey="6Ld0jQ0UAAAAADZAtzv5LnLNsiPYy0BdAoPnwtfz"></div>
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

                    @include('Front::shailoo.sidebar')

                </div>
            </section>
        </div>
    </div>

@stop

@section('footerScript')

    @include('Front::shailoo.footer')

    {{-- Google reCaptcha --}}
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        @if(session('success') == 'true')
            swal("Спасибо!", "{{trans('site.CommentSuccess')}}", "success");
        @elseif(session('success') == 'false')
            swal("", "{{trans('site.CommentError')}}", "error");
        @endif
    </script>

@endsection