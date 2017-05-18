<?php

namespace Front\Controllers;

use Request;
use Input;
use App\Http\Requests;
use \Model\PollVote\ModelName as Vote;
use \Model\Category\ModelName as Category;
use \Model\MediaCategory\ModelName as MediaCategory;
use \Model\Media\ModelName as Media;

class AjaxController extends Controller
{

    // AJAX CALL
    public function pollVote()
    {
        if(Request::ajax()) {
            $data = Input::all();
            $vote = $data['vote'];
            $today = date('d-m-Y');

            $votes = Vote::where('remote_addr','=',$_SERVER['REMOTE_ADDR'])->where('date','=',$today)->get();

            if(count($votes) == 0){
                $result = Vote::create([
                    'remote_addr' => $_SERVER['REMOTE_ADDR'],
                    'vote' => $vote,
                    'status' => 0,
                    'date' => $today 
            ]);

            $perfects = count(Vote::where('vote','=',1)->get());
            $goods = count(Vote::where('vote','=',2)->get());
            $notbads = count(Vote::where('vote','=',3)->get());
            $votesTotal = count(Vote::all());

            $perfectTotal = 100*round($perfects/$votesTotal, 3);
            $goodTotal = 100*round($goods/$votesTotal, 3);
            $notbadTotal = 100*round($notbads/$votesTotal, 3);

                return [
                    'status' => true,
                    'html' => '<ul class="list-group">
    <li class="list-group-item">
        <span>Отлично</span><span class="pull-right">'.$perfectTotal.'%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$perfectTotal.'%;">
                <span class="sr-only">'.$perfectTotal.'% Complete</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <span>Хорошо</span><span class="pull-right">'.$goodTotal.'%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$goodTotal.'%;">
                <span class="sr-only">'.$goodTotal.'% Complete</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <span>Удовлетворительно</span><span class="pull-right">'.$notbadTotal.'%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$notbadTotal.'%;">
                <span class="sr-only">'.$notbadTotal.'% Complete</span>
            </div>
        </div>
    </li>
</ul>'
                ];
            } else {

                $perfects = count(Vote::where('vote','=',1)->get());
                $goods = count(Vote::where('vote','=',2)->get());
                $notbads = count(Vote::where('vote','=',3)->get());
                $votesTotal = count(Vote::all());

                $perfectTotal = 100*round($perfects/$votesTotal, 3);
                $goodTotal = 100*round($goods/$votesTotal, 3);
                $notbadTotal = 100*round($notbads/$votesTotal, 3);

                return [
                    'status' => false,
                    'html' => '<ul class="list-group">
    <li class="list-group-item">
        <span>Отлично</span><span class="pull-right">'.$perfectTotal.'%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$perfectTotal.'%;">
                <span class="sr-only">'.$perfectTotal.'% Complete</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <span>Хорошо</span><span class="pull-right">'.$goodTotal.'%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$goodTotal.'%;">
                <span class="sr-only">'.$goodTotal.'% Complete</span>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <span>Удовлетворительно</span><span class="pull-right">'.$notbadTotal.'%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$notbadTotal.'%;">
                <span class="sr-only">'.$notbadTotal.'% Complete</span>
            </div>
        </div>
    </li>
</ul>'
                ];
            }

            

            $perfectTotal = Vote::where('vote','=','1');

            dd($perfectTotal);

            
        }
    }

    public function shailooPollVote()
    {
        if(Request::ajax()) {
            $data = Input::all();
            $vote = $data['vote'];
            $today = date('d-m-Y');

            $votes = Vote::where('remote_addr','=',$_SERVER['REMOTE_ADDR'])->where('vote','<>','1')->where('vote','<>','2')->where('vote','<>','3')->where('date','=',$today)->get();

            if(count($votes) == 0){

                $result = Vote::create([
                    'remote_addr' => $_SERVER['REMOTE_ADDR'],
                    'vote' => $vote,
                    'status' => 0,
                    'date' => $today
                ]);

                $votesTotal = count(Vote::where('vote','<>','1')->where('vote','<>','2')->where('vote','<>','3')->get());

                $categories = Category::where('ns', true)->published()->get();

                $list = '<ul class="list-group rating">';

                foreach ($categories as $category) {
                    $categoryVotes = count(Vote::where('vote','=',$category->id)->get());
                    $categoryTotal = round($categoryVotes*100/$votesTotal, 2);

                    $list .= '
                        <li class="list-group-item">
                            <span class="party-logo"><img src="'.asset($category->description).'" alt=""/></span>
                            '.$category->getTitle().'
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: '.$categoryTotal.'%;">
                                    <span>'.$categoryTotal.' %</span>
                                </div>
                            </div>
                        </li>
                    ';
                }

                $againstVotes  = count(Vote::where('vote','=','99')->get());
                $againstTotal = round($againstVotes*100/$votesTotal, 2);

                $list .= '
                    <li class="list-group-item">
                        <span class="party-logo"><img src="'.asset('images/shailoo/party/against.jpg').'" alt=""/></span>
                        '.trans('shailoo.ShailooAgainst').'
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: '.$againstTotal.'%;">
                                <span>'.$againstTotal.' %</span>
                            </div>
                        </div>
                    </li>
                ';

                $list .= '</ul>';


                return [
                    'status' => true,
                    'html' => $list
                ];
            } else {

                $votesTotal = count(Vote::where('vote','<>','1')->where('vote','<>','2')->where('vote','<>','3')->get());

                $categories = Category::where('ns', true)->published()->get();

                $list = '<ul class="list-group rating">';

                foreach ($categories as $category) {
                    $categoryVotes = count(Vote::where('vote','=',$category->id)->get());
                    $categoryTotal = round($categoryVotes*100/$votesTotal, 2);

                    $list .= '
                        <li class="list-group-item">
                            <span class="party-logo"><img src="'.asset($category->description).'" alt=""/></span>
                            '.$category->getTitle().'
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: '.$categoryTotal.'%;">
                                    <span>'.$categoryTotal.' %</span>
                                </div>
                            </div>
                        </li>
                    ';
                }

                $againstVotes  = count(Vote::where('vote','=','99')->get());
                $againstTotal = round($againstVotes*100/$votesTotal, 2);

                $list .= '
                    <li class="list-group-item">
                        <span class="party-logo"><img src="'.asset('images/shailoo/party/against.jpg').'" alt=""/></span>
                        '.trans('shailoo.ShailooAgainst').'
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: '.$againstTotal.'%;">
                                <span>'.$againstTotal.' %</span>
                            </div>
                        </div>
                    </li>
                ';

                $list .= '</ul>';


                return [
                    'status' => false,
                    'html' => $list
                ];
            }

        }
    }

  public function teleprogramChangeChannel()
  {
    if(Request::ajax()) {
      $data = Input::all();
      return $data['id'];
    }
  }

  public function homeVideoportal() 
  {
    if(Request::ajax()) {
        $data = Input::all();
        $type=$data['type'];
        $cat = MediaCategory::where('videoType',$type)->first();

    if($type == 'total'){
        $videos = Media::where('published',true)->orderBy('created_at','desc')->take(12)->get();        
    } else {
        $videos = Media::where('published',true)->where('videoType',$type)->orderBy('created_at','desc')->take(12)->get();
    }     

    $result = '';

    foreach ($videos as $key => $media) {
        $result .= '
        <div class="portfolio">
            <div class="portfolio-wrapper">
                <div class="media-image">
                    <a href="'.route('front.media.video', $media).'">
                        <img src="';

        if($media->thumbnail){
            $result .= asset($media->thumbnail);
        }
        else{
            $result .= 'http://img.youtube.com/vi/'.$media->getUrl().'/hqdefault.jpg';
        }

        $result .= '" alt="'.$media->getName().'" />
                        <div class="overlay">
                            <div class="media-extra">
                                <span class="media-date">'.$media->getDay().' '.$media->getMonthRu().', '.$media->getTime().'</span>
                                <i class="fa-view"></i>
                                <span class="media-view">'.$media->viewed.'</span>
                            </div>
                        </div>
                        <svg class="play-button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 81 100" xml:space="preserve">
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
                </div>
                <div class="media-title">
                    <a href="'.route('front.media.video', $media).'">
                        '.$media->getName().'
                    </a>
                </div>

            </div>
        </div>
        ';
    }

    return $result;
    }
  }
}