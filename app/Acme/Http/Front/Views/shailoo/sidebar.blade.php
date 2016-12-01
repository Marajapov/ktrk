<div class="top-right-block col-md-4">

    <div class="panel panel-default panel-debate">
        <div class="panel-heading">
            <h3 class="panel-title"><span>{{ trans('shailoo.ShailooPromo') }}</span></h3>
        </div>
        <div class="panel-body">

            @if($promoVideo)
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{$promoVideo->url}}" allowfullscreen=""></iframe>
                </div>

                <h4>{{$promoVideo->getName()}}</h4>
            @endif

        </div>
    </div>

    <div class="panel panel-default panel-vote">
        <div class="panel-heading">
            <h3 class="panel-title"><span>{{ trans('shailoo.ShailooVote') }}</span></h3>
        </div>
        <div class="panel-body sidebar-panel-body">

            <div class="col-md-12">
                <h4>{{ trans('shailoo.ShailooQuestion') }}</h4>

                <div id="poll" class="poll">
                    <form>

                        @foreach($categories as $category)

                            <div class="radio">
                                <input type="radio" name="vote{{$category->id}}" id="radio{{$category->id}}" value="{{$category->id}}" onclick="getVote(this.value)">
                                <label for="radio{{$category->id}}">
                                    {{$category->getTitle()}}
                                </label>
                            </div>

                        @endforeach

                        <div class="radio">
                            <input type="radio" name="vote99" id="radio99" value="99" onclick="getVote(this.value)">
                            <label for="radio99">
                                {{trans('shailoo.ShailooAgainst')}}
                            </label>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-default rating">
        <div class="panel-heading">
            <h3 class="panel-title">{{trans('shailoo.ShailooChart')}}</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <ul class="list-group">

                    @foreach($allCategories as $category)

                        <li class="list-group-item">
                            <span class="party-logo"><img src="{{asset($category->description)}}" alt=""/></span>
                            <a href="{{route('front.shailoo.party', $post->category)}}" class="party-title">
                                {{$category->getTitle()}}
                            </a>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="@if (count($allPosts) > 0)width:{{round($category->posts->count()*100/count($allPosts), 2).'%'}} @else 0% @endif">
                                    <span>
                                        @if(count($allPosts) > 0)
                                            {{round($category->posts->count()*100/count($allPosts), 2).' %'}}
                                        @else
                                            0 %
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>

        </div>
    </div>

</div>