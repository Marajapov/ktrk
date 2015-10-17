<div class="top-right-block col-md-3">

    <div class="panel panel-default ctg-panel" data-spy="affix" data-offset-top="220">
        <div class="panel-heading">
            <h3 class="panel-title"><span>Категориялар</span></h3>
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

        <img src="{{ asset('images/ads_240x400.jpg') }}" alt=""/>
    </a>

</div><!-- end of left categories -->