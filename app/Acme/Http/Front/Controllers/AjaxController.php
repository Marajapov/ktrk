<?php

namespace Front\Controllers;

use Request;
use Input;
use App\Http\Requests;
use \Model\PollVote\ModelName as Vote;
use \Model\Category\ModelName as Category;

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

  public function teleprogramChangeChannel(){
    if(Request::ajax()) {
      $data = Input::all();
      return $data['id'];
    }
  }
}
