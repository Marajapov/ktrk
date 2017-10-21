<?php

namespace Front\Controllers;

use Request;
use Input;
use App\Http\Requests;
use \Model\PollVote\ModelName as Vote;

class AjaxNsController extends Controller
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
                $bads = count(Vote::where('vote','=',4)->get());
                $votesTotal = $perfects+$goods+$notbads+$bads;

                $perfectTotal = 100*round($perfects/$votesTotal, 4);
                $goodTotal = 100*round($goods/$votesTotal, 4);
                $notbadTotal = 100*round($notbads/$votesTotal, 4);
                $badTotal = 100*round($bads/$votesTotal, 4);

        		return [
            		'status' => true,
            		'html' => '
                        <ul class="list-group">
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
                           <li class="list-group-item">
                                <span>Плохо</span><span class="pull-right">'.$badTotal.'%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$badTotal.'%;">
                                        <span class="sr-only">'.$badTotal.'% Complete</span>
                                    </div>
                                </div>
                            </li>
                    
                        </ul>'
            	];
            } else {

            	$perfects = count(Vote::where('vote','=',1)->get());
	        	$goods = count(Vote::where('vote','=',2)->get());
	        	$notbads = count(Vote::where('vote','=',3)->get());
                $bads = count(Vote::where('vote','=',4)->get());
                $votesTotal = $perfects+$goods+$notbads+$bads;

	        	$perfectTotal = 100*round($perfects/$votesTotal, 4);
	        	$goodTotal = 100*round($goods/$votesTotal, 4);
	        	$notbadTotal = 100*round($notbads/$votesTotal, 4);
                $badTotal = 100*round($bads/$votesTotal, 4);

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
                    
                       <li class="list-group-item">
                            <span>Плохо</span><span class="pull-right">'.$badTotal.'%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$badTotal.'%;">
                                    <span class="sr-only">'.$badTotal.'% Complete</span>
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
}
