<?php
namespace Model\Post;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
    
    public static function customPaginate($items,$perPage)
    {
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($items);

        //Define how many items we want to be visible in each page
        $perPage = $perPage;

        //Slice the collection to get the items to display in current page
        $currentPageSearchResults = $collection->slice($currentPage * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
        $paginatedSearchResults = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);

       return $paginatedSearchResults;
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
                                    <div class="t-view"><i class="fa fa-eye"></i>'.$relatedPost->getViewed().'</div>
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
                                    <div class="t-view"><i class="fa fa-eye"></i>'.$relatedPost->getViewed().'</div>
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
                                        <div class="overlay">
                                        </div>
                                        <i class="fa-video"></i>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                            <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                            <div class="t-view"><i class="fa fa-eye"></i>'.$relatedMedia->getViewed().'</div>
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
                                        <div class="overlay">
                                        </div>
                                        <i class="fa-video"></i>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                        <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                        <div class="t-view"><i class="fa fa-eye"></i>'.$relatedMedia->getViewed().'</div>
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
                                        <div class="overlay">
                                        </div>
                                        <i class="fa-video"></i>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                            <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                            <div class="t-view"><i class="fa fa-eye"></i>'.$relatedMedia->getViewed().'</div>
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
                                        <div class="overlay">
                                        </div>
                                        <i class="fa-video"></i>
                                    </a>
                                    <div class="t-info clearfix">
                                        <a class="js-dh" href="'. route('front.media.video', $relatedMedia) .'">'.$relatedMedia->getName() .'</a>
                                        <div class="t-extra clearfix">
                                        <div class="t-date">'.$relatedMedia->getDay().' '.$relatedMedia->getMonthRu().', '.$relatedMedia->getYear().'</div>
                                        <div class="t-view"><i class="fa fa-eye"></i>'.$relatedMedia->getViewed().'</div>
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



    // Vertex
    public function relatedFunctionLeftTest($postId){

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

    public function relatedFunctionRightTest($postId){

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

    public function relatedMediaFunctionLeftTest($media){

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
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                            <g transform="translate(0,-952.36218)">
                                                                <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                    c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                    L11.7,961.3z"/>
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
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                            <g transform="translate(0,-952.36218)">
                                                                <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                    c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                    L11.7,961.3z"/>
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

    public function relatedMediaFunctionRightTest($media){

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
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                            <g transform="translate(0,-952.36218)">
                                                                <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                    c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                    L11.7,961.3z"/>
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
                                        <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                            <g transform="translate(0,-952.36218)">
                                                                <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                                    c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                                    L11.7,961.3z"/>
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

    public function twoRelatedFunctionTest($postId, $postId2){

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
}
