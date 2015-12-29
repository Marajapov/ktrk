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

    public function relatedFunction($postId){

        $relatedPost = \Model\Post\ModelName::where('id','=',$postId)->first();

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
                          <a class="t-thumb" href="'. route('front.post', $postId) .'">
                            <img alt="alt photo text" src="'. asset($relatedPost->getFile()) .'">
                          </a>
                          <div class="t-info">
                              <a class="js-dh" href="'. route('front.post', $postId).'">'.$relatedPost->getTitle().'</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </aside></div>
        ';

    }

    public function twoRelatedFunction($postId, $postId2){

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
                          <a class="t-thumb" href="'. route('front.post', $postId) .'">
                            <img alt="alt photo text" src="'. asset($relatedPost->getFile()) .'">
                          </a>
                          <div class="t-info">
                              <a class="js-dh" href="'. route('front.post', $postId).'">'.$relatedPost->getTitle().'</a>
                          </div>
                        </div>
                        <div class="topic clearfix">
                          <div class="t-date">
                                    <span class="date">
                                    <span class="time">'. $relatedPost2->getTime() .'</span>
                                      '. $relatedPost2->getDay().' '.$relatedPost2->getMonthRu().', '.$relatedPost2->getYear().'
                                    </span>
                          </div>
                          <a class="t-thumb" href="'. route('front.post', $postId) .'">
                            <img alt="alt photo text" src="'. asset($relatedPost2->getFile()) .'">
                          </a>
                          <div class="t-info">
                              <a class="js-dh" href="'. route('front.post', $postId).'">'.$relatedPost2->getTitle().'</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </aside></div>
        ';

    }
}
