<?php

namespace Front\Controllers;

use Request;
use Input;
use App\Http\Requests;
use \Model\PollVote\ModelName as Vote;
use \Model\Category\ModelName as Category;
use \Model\MediaCategory\ModelName as MediaCategory;
use \Model\Media\ModelName as Media;
use \Model\Post\ModelName as Post;
use \Model\Project\ModelName as Project;
use \Model\Tag\Tag as Tag;

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

		if($media->thumbnail_big){
			$result .= asset($media->thumbnail_big);
		}
		else{
			$result .= 'http://img.youtube.com/vi/'.$media->getUrl().'/hqdefault.jpg';
		}

		$result .= '" alt="'.$media->getName().'" />
						<div class="overlay">
							<div class="media-extra">
								<span class="media-date">'.$media->getDay().' '.$media->getMonthRu().', '.$media->getTime().'</span>
								<svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
									<g>
										<path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
											C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
									</g>
								</svg>
								<span class="media-view">'.$media->viewed.'</span>
							</div>
						</div>
						<svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
							<g transform="translate(0,-952.36218)">
								<path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
									c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
									L11.7,961.3z"/>
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

	public function searchPgNews(){
		if(Request::ajax()) {
			$data = Input::all();

			$lc = app()->getlocale();
			$searchKey = $data['search'];

			$perPage = $data['perPage'];
			$currentPage = $data['page'];

			$tag = Tag::where('name', '=', $searchKey)->first();

			$leftPosts = $middlePosts = $rightPosts = array();

			if($lc == 'kg'){
				$tagPosts = $tag->posts()->where('title','<>','')->orderBy('created_at','desc')->get();
				$posts = Post::search($searchKey)->where('title','<>','')->orderBy('created_at','desc')->get();

				$mergedPosts = $posts->merge($tagPosts)->sortByDesc('created_at')->paginate($perPage);

				foreach ($mergedPosts as $key => $row) {
					if($key % 3 == 0){
					  	$leftPosts[] = $row;
					} elseif ($key % 3 == 1) {
					  	$middlePosts[] = $row;
					} else {
					  	$rightPosts[] = $row;       
					}
				}
			}else{
				$tagPosts = $tag->posts()->where('titleRu','<>','')->orderBy('created_at','desc')->get();
				$namePosts = Post::search($searchKey)->where('titleRu','<>','')->orderBy('created_at','desc')->get();

				$posts = $tagPosts->merge($namePosts);

				$mergedPosts = $posts->sortByDesc('created_at')->forPage($currentPage, $perPage);
				$totalPostsPages = ceil(count($posts)/$perPage);

			  	foreach ($mergedPosts as $key => $row) {
					if($key % 3 == 0){
					  	$leftPosts[] = $row;
					} elseif ($key % 3 == 1) {
					  	$middlePosts[] = $row;
					} else {
					  	$rightPosts[] = $row;      
					}
			  	}
			}

			$left = $middle = $right = '';

			foreach ($leftPosts as $post) {
				$left .= '
				<div class="cat-post news-body">
                    <div class="post-extra clearfix">';
                        if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes'){
                        	$left .= '
                        	<span class="post-file">';                                                        
                                if($post->getIsPhoto() == 'yes'){
                                	$left .= '
                                    <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g>
                                            <g transform="translate(-428.000000, -532.000000)">
                                                <g transform="translate(428.000000, 532.000000)">
                                                    <g>
                                                        <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                            c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                            C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                            c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                            L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                            C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                            C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                            C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>';
                                }                                	
                                if($post->getIsVideo() == 'yes'){
                                	$left .= '
                                    <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g transform="translate(0,-952.36218)">
                                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                L11.7,961.3z"/>
                                        </g>
                                    </svg>';
                                }                                    
                            $left .= '</span>';
                            }
                        $left .= '
                        <span class="post-date">'.$post->getDay().' '.$post->getMonthRu().' ';
                        if(date('Y') != $post->getYear()) {
                        	$left .= $post->getYear();
                        } 
                    	$left .= ', '.$post->getTime().'</span>
                        <span class="post-views">                                                        
                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                <g>
                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                </g>
                            </svg>
                            '.$post->getViewed().'
                        </span>                                                    
                    </div>
                    <a class="post-title" href="'.route('front.post', [$post, $lc]).'">
                        '.$post->getTitleRuOrKg().'
                    </a>
                </div>
				';
			}

			foreach ($middlePosts as $post) {
				$middle .= '
				<div class="cat-post news-body">
                    <div class="post-extra clearfix">';
                        if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes'){
                        	$middle .= '
                        	<span class="post-file">';                                                        
                                if($post->getIsPhoto() == 'yes'){
                                	$middle .= '
                                    <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g>
                                            <g transform="translate(-428.000000, -532.000000)">
                                                <g transform="translate(428.000000, 532.000000)">
                                                    <g>
                                                        <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                            c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                            C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                            c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                            L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                            C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                            C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                            C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>';
                                }                                	
                                if($post->getIsVideo() == 'yes'){
                                	$middle .= '
                                    <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g transform="translate(0,-952.36218)">
                                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                L11.7,961.3z"/>
                                        </g>
                                    </svg>';
                                }                                    
                            $middle .= '</span>';
                            }
                        $middle .= '
                        <span class="post-date">'.$post->getDay().' '.$post->getMonthRu().' ';
                        if(date('Y') != $post->getYear()) {
                        	$middle .= $post->getYear();
                        } 
                    	$middle .= ', '.$post->getTime().'</span>
                        <span class="post-views">                                                        
                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                <g>
                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                </g>
                            </svg>
                            '.$post->getViewed().'
                        </span>                                                    
                    </div>
                    <a class="post-title" href="'.route('front.post', [$post, $lc]).'">
                        '.$post->getTitleRuOrKg().'
                    </a>
                </div>
				';
			}

			foreach ($rightPosts as $post) {
				$right .= '
				<div class="cat-post news-body">
                    <div class="post-extra clearfix">';
                        if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes'){
                        	$right .= '
                        	<span class="post-file">';                                                        
                                if($post->getIsPhoto() == 'yes'){
                                	$right .= '
                                    <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g>
                                            <g transform="translate(-428.000000, -532.000000)">
                                                <g transform="translate(428.000000, 532.000000)">
                                                    <g>
                                                        <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                            c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                            C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                            c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                            L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                            C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                            C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                            C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>';
                                }                                	
                                if($post->getIsVideo() == 'yes'){
                                	$right .= '
                                    <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g transform="translate(0,-952.36218)">
                                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                L11.7,961.3z"/>
                                        </g>
                                    </svg>';
                                }                                    
                            $right .= '</span>';
                            }
                        $right .= '
                        <span class="post-date">'.$post->getDay().' '.$post->getMonthRu().' ';
                        if(date('Y') != $post->getYear()) {
                        	$right .= $post->getYear();
                        } 
                    	$right .= ', '.$post->getTime().'</span>
                        <span class="post-views">                                                        
                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                <g>
                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                </g>
                            </svg>
                            '.$post->getViewed().'
                        </span>                                                    
                    </div>
                    <a class="post-title" href="'.route('front.post', [$post, $lc]).'">
                        '.$post->getTitleRuOrKg().'
                    </a>
                </div>
				';
			}

			return array(
				'left' => $left,
				'middle' => $middle,
				'right' => $right
			);

		}
	}

	public function searchPgMedia(){
		if(Request::ajax()) {
			$data = Input::all();

			$lc = app()->getlocale();
			$searchKey = $data['search'];

			$perPage = $data['perPage'];
			$currentPage = $data['page'];

		  	$medias = Media::search($searchKey)->orderBy('created_at','desc')->get();

		  	$medias = collect($medias);

		  	$medias = $medias->forPage($currentPage, $perPage);

		  	$return = '';

		  	foreach ($medias as $media) {
		  		$return .= '
		  			<div class="portfolio">
                        <div class="portfolio-wrapper">
                            <div class="media-image">
                                <a href="'.route('front.media.video', $media).'">
                                    <img src="';
                                    if($media->thumbnail_big)
                                    	$return .= asset($media->thumbnail_big);
                                   	else 
                                   		$return .= 'http://img.youtube.com/vi/'.$media->getUrl().'/hqdefault.jpg';
                                   	$return .= '" alt="'.$media->getName().'" />
                                    <div class="overlay">
                                        <div class="media-extra">
                                            <span class="media-date">'.$media->getDay().' '.$media->getMonthRu();
                                            if(date('Y') != $media->getYear()) 
                                            	$return .= ' '.$media->getYear();
                                        	$return .= ', '.$media->getTime().'</span>
                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                <g>
                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                </g>
                                            </svg>
                                            <span class="media-view">'.$media->viewed.'</span>
                                        </div>
                                    </div>
                                    <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                        <g transform="translate(0,-952.36218)">
                                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                L11.7,961.3z"/>
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

		  	return $return;

		}
	}
}