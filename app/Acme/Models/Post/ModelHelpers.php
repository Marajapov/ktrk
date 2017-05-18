<?php
namespace Model\Post;

trait ModelHelpers
{
    public function incrementViewed($step = 1)
    {
        $this->viewed += $step;
        $this->save();
    }

    public function isPublished()
    {
        return $this->published == true;
    }

    public function isImage()
    {
        $exists = \Storage::disk('public')->exists($this->getFile());

        $type = $exists ? \Storage::disk('public')->mimeType($this->getFile()) : '';

        return in_array($type, ['image/png', 'image/jpg', 'image/jpeg', 'image/gif']);
    }

    public function isChannelIcon($query)
    {
        $channel = \Model\Channel\ModelName::where('id','=',$query)->first();
        return $channel->file;
    }

    public function relatedFunctionLeft($postId){

        $lc=app()->getlocale();
        $relatedPost = \Model\Post\ModelName::where('id','=',$postId)->first();
        if($lc == 'ru'){
            $title = $relatedPost->titleRu;
        }else{
            $title = $relatedPost->title;
        }
        if($relatedPost->thumbnail_big){
            $thumbnail = $relatedPost->thumbnail_big;
        } else{
            $thumbnail = $relatedPost->thumbnail;
        }

        return '
        <span>
            <aside class="pull-left">
                <div class="topics-box">
                    <div class="topics">
                        <div class="topic clearfix">

                            <a class="t-thumb" href="'. route('front.post', [$postId, $lc]) .'">
                                <img alt="alt photo text" src="'. asset($thumbnail).'">
                            </a>
                            <div class="t-info">
                                <a class="js-dh" href="'. route('front.post', [$postId, $lc]) .'">'.$relatedPost->getTitleRuOrKg() .'</a>
                                <div class="t-extra clearfix">
                                    <div class="t-date">'.$relatedPost->getDay().' '.$relatedPost->getMonthRu().', '.$relatedPost->getYear().'</div>
                                    <div class="t-view"><svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>'.$relatedPost->getViewed().'</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </span>
        ';

    }

    public function relatedFunctionRight($postId){

        $lc=app()->getlocale();
        $relatedPost = \Model\Post\ModelName::where('id','=',$postId)->first();
        if($lc == 'ru'){
            $title = $relatedPost->titleRu;
        }else{
            $title = $relatedPost->title;
        }
        if($relatedPost->thumbnail_big){
            $thumbnail = $relatedPost->thumbnail_big;
        } else{
            $thumbnail = $relatedPost->thumbnail;
        }

        return '
        <span>
            <aside class="pull-right">
                <div class="topics-box">
                    <div class="topics">
                        <div class="topic clearfix">
                            <a class="t-thumb" href="'. route('front.post', [$postId, $lc]) .'">
                                <img alt="alt photo text" src="'. asset($thumbnail) .'">
                            </a>
                            <div class="t-info">
                                <a class="js-dh" href="'. route('front.post', [$postId, $lc]) .'">'.$relatedPost->getTitleRuOrKg() .'</a>
                                <div class="t-extra clearfix">
                                    <div class="t-date">'.$relatedPost->getDay().' '.$relatedPost->getMonthRu().', '.$relatedPost->getYear().'</div>
                                    <div class="t-view"><svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>'.$relatedPost->getViewed().'</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </span>
        ';

    }

    public function relatedMediaFunctionLeft($media){

        $relatedMedia = \Model\Media\ModelName::where('id','=',$media)->first();

        if($relatedMedia->thumbnail_big){
            return '
                <span>
                    <aside class="pull-left">
                        <div class="topics-box">
                            <div class="topics">
                                <div class="topic clearfix">
                                    <a class="t-thumb" href="'. route('front.media.video', $relatedMedia) .'">
                                        <img alt="alt photo text" src="'. asset($relatedMedia->thumbnail_big) .'">
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 81 100" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                            <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                            <div class="t-view"><svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg></i>'.$relatedMedia->getViewed().'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </span>
            ';
        } else {
            return '
                <span>
                    <aside class="pull-left">
                        <div class="topics-box">
                            <div class="topics">
                                <div class="topic clearfix">
                                    <a class="t-thumb" href="'. route('front.media.video', $relatedMedia) .'">
                                        <img src="http://img.youtube.com/vi/'.$relatedMedia->getUrl().'/mqdefault.jpg" alt="'.$relatedMedia->getName().'">
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 81 100" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                        <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                        <div class="t-view"><svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>'.$relatedMedia->getViewed().'</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </span>
            ';
        }



    }

    public function relatedMediaFunctionRight($media){

        $relatedMedia = \Model\Media\ModelName::where('id','=',$media)->first();

        if($relatedMedia->thumbnail_big){
            return '
                <span>
                    <aside class="pull-right">
                        <div class="topics-box">
                            <div class="topics">
                                <div class="topic clearfix">
                                    <a class="t-thumb" href="'. route('front.media.video', $relatedMedia) .'">
                                        <img alt="alt photo text" src="'. asset($relatedMedia->thumbnail_big) .'">
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 81 100" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                            <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                            <div class="t-view"><svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>'.$relatedMedia->getViewed().'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </span>
            ';
        } else {
            return '
                <span>
                    <aside class="pull-right">
                        <div class="topics-box">
                            <div class="topics">
                                <div class="topic clearfix">
                                    <a class="t-thumb" href="'. route('front.media.video', $relatedMedia) .'">
                                        <img src="http://img.youtube.com/vi/'.$relatedMedia->getUrl().'/mqdefault.jpg" alt="'.$relatedMedia->getName().'">
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 81 100" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                        <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                        <div class="t-view"><svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>'.$relatedMedia->getViewed().'</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </span>
            ';
        }

    }

    public function twoRelatedFunction($postId, $postId2){

        $lc=app()->getlocale();
        if($lc == 'ru'){
            $title = $relatedPost->titleRu;
        }else{
            $title = $relatedPost->title;
        }
        $relatedPost = \Model\Post\ModelName::where('id','=',$postId)->first();
        $relatedPost2 = \Model\Post\ModelName::where('id','=',$postId2)->first();

        return '<div>
        <aside>
                    <div class="topics-box">
                      <h2>'.trans('site.MatpoTeme').'</h2>
                      <div class="topics">
                        <div class="topic clearfix">
                          <div class="t-date">
                                    <span class="date">
                                    <span class="time">'. $relatedPost->getTime() .'</span>
                                      '. $relatedPost->getDay().' '.$relatedPost->getMonthRu().', '.$relatedPost->getYear().'
                                    </span>
                          </div>
                          <a class="t-thumb" href="'. route('front.post', [$postId, $lc]) .'">
                            <img alt="alt photo text" src="'. asset($relatedPost->getFile()) .'">
                          </a>
                          <div class="t-info">
                              <a class="js-dh" href="'. route('front.post', [$postId, $lc]).'">'.$relatedPost->getTitleRuOrKg().'</a>
                          </div>
                        </div>
                        <div class="topic clearfix">
                          <div class="t-date">
                                    <span class="date">
                                    <span class="time">'. $relatedPost2->getTime() .'</span>
                                      '. $relatedPost2->getDay().' '.$relatedPost2->getMonthRu().', '.$relatedPost2->getYear().'
                                    </span>
                          </div>
                          <a class="t-thumb" href="'. route('front.post', [$postId, $lc]) .'">
                            <img alt="alt photo text" src="'. asset($relatedPost2->getFile()) .'">
                          </a>
                          <div class="t-info">
                              <a class="js-dh" href="'. route('front.post', [$postId, $lc]).'">'.$relatedPost2->getTitleRuOrKg().'</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </aside></div>
        ';

    }

    public function liveForRtmp()
    {
        return '
            <div id="liveStream"></div>
        ';
    }
}
