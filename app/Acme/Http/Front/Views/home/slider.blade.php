<div class="section light-section slider-section">
	<div class="main-slider container">
		@if($generalPosts)
            @foreach($generalPosts as $key=>$post)
                <div class="slide">
                    <figure>
                        <img src="{{asset($post->thumbnail_big)}}">
                        <figcaption>
                            <div class="inner">
                                <a class="slide-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                    Миллионер болгуң келеби?
                                </a>
                                <div class="slide-extra clearfix">
                                    <span class="slide-desc">
                                        Коомдук телерадиоберүү корпорациясынын жаңы “Миллионер болгуң келеби?” теледолбооруна катышып, 1 миллион сом утуңуз. Өз күчүнүзгө, билимиңизге ишенсеңиз, аталган долбоордун катышуучусу болуңуз.
                                    </span>
                                    <span class="slide-datetime">
                                        <span class="slide-date">{{ trans('site.Sunday') }}</span>
                                        <span class="slide-time">21:55</span>
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