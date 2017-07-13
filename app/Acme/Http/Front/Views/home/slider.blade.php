<div class="section light-section slider-section">
	<div class="main-slider container">
		@if($sliderProjects)
            @foreach($sliderProjects as $key=>$row)
                <div class="slide">
                    <figure>
                        <img src="{{asset($row->getThumbnail())}}">
                        <figcaption>
                            <div class="inner">
                                <span class="slide-datetime">
                                    <span class="slide-date">
                                        @if($row->getWeekDayOne())
                                            {{$row->getWeekDayOne()}}
                                        @else
                                            &nbsp;
                                        @endif
                                    </span>
                                    <span class="slide-time">{{$row->getTime()}}</span>
                                </span>
                                <a class="slide-title" href="{{$row->getUrl()}}">
                                    {{$row->getNameOne()}}
                                </a>
                                <div class="slide-extra clearfix">
                                    <span class="slide-desc">
                                        {!! str_limit($row->getDesc(), 220, ' ...')!!}
                                    </span>
                                </div>
                            </div>                                  
                        </figcaption>
                    </figure>
                </div>                
            @endforeach
        @endif
	</div>	
</div>