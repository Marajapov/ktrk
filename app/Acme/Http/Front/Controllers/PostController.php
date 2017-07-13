<?php
namespace Front\Controllers;

use View;

use \Model\Project\ModelName    as Banner;
use \Model\Category\ModelName   as Category;
use \Model\Post\ModelName       as Post;
use \Model\Project\ModelName    as Project;
use \Model\Schedule\ModelName   as Schedule;

class PostController extends Controller
{
	protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
	
	public function __construct()
	{
		$lc = app()->getlocale();

		# Banners

		$this->positionTop = Banner::where('positionTop','=','1')->where('channel_id','=','2')->first();
		$this->positionRight = Banner::where('positionRight','=','1')->where('channel_id','=','2')->first();
		$this->positionLeft = Banner::where('positionLeft','=','1')->where('channel_id','=','2')->first();
		$this->positionCenter = Banner::where('positionCenter','=','1')->where('channel_id','=','2')->first();
		$this->positionBottom = Banner::where('positionBottom','=','1')->where('channel_id','=','2')->first();


		# News categories

		$categoriesNews = Category::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->get();


		# Active Projects

		if($lc == 'kg'){
			$activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
		}else{
			$activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
		}


		# Live and next

		date_default_timezone_set('Asia/Bishkek');
		$now = date("d-m-Y H:i");
		$currentDate = date('d-m-Y');
		$currentTime = date('H:i');
		$weekDay = date('N', strtotime($now));

		$currentProgram = '';
		$nextProgram = '';

		$schedule = Schedule::where('channel_id',2)->where('date',$currentDate)->first();

		if($schedule){
			$program = array();
			$program = json_decode($schedule->program);
			foreach ($program as $key => $row) {
				if($key < count($program)-1){
					if( (strtotime($row->time) <= strtotime($currentTime)) && (strtotime($currentTime) < strtotime($program[$key+1]->time)) ){
						$currentProgram = $row;
						$nextProgram = $program[$key+1];
					}
				}
				
			}
		}


		# Shared globally

		View::share('categoriesNews', $categoriesNews);
		View::share('activeProjects', $activeProjects);
		View::share('currentProgram', $currentProgram);
		View::share('nextProgram', $nextProgram);
	}

	public function categoryPage(Category $category)
	{
		$lc = app()->getlocale();
		$perPage = 10;
		$category_id = $category->id;

		if($lc == 'kg'){
			$posts = \Model\Post\ModelName::where('general','=','1')->where('published','=','1')->where('category_id','=',$category_id)->where('title','<>','')->orderBy('id','desc')->paginate($perPage);
		}else{
			$posts = \Model\Post\ModelName::where('general','=','1')->where('published','=','1')->where('category_id','=',$category_id)->where('titleRu','<>','')->orderBy('id','desc')->paginate($perPage);
		}

		if($lc == 'kg'){
			$topArticles = \Model\Post\ModelName::where('general','=','1')->where('title','<>','')->where('number','=','88')->orderBy('updated_at','desc')->take(6)->get();
			if(count($topArticles) > 0){
				$topArticles = $topArticles;   
			}else{
				$topArticles = null;
			}
			$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
			$popArticles = \Model\Post\ModelName::where('general','=','1')->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			if(count($popArticles) > 0){
				$popArticles = $popArticles;
			}else{
				$popArticles = null;
			}
		}elseif($lc == 'ru'){
			$topArticles = \Model\Post\ModelName::where('general','=','1')->where('titleRu','<>','')->where('numberRu','=','88')->orderBy('updated_at','desc')->take(6)->get();
			if(count($topArticles) > 0){
				$topArticles = $topArticles;   
			}else{
				$topArticles = null;
			}
			$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
			$popArticles = \Model\Post\ModelName::where('general','=','1')->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			if(count($popArticles) > 0){
				$popArticles = $popArticles;
			}else{
				$popArticles = null;
			}
		}

		$categories = \Model\Category\ModelName::where('general','=','1')->get();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		return view('Front::category.indexTest',[
			'perPage'=> $perPage,
			'posts' => $posts,
			'category' => $category,
			'topArticles' => $topArticles,
			'popArticles' => $popArticles,

			'categories'=>$categories,
			'backgroundMain' => $backgroundMain,
			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,
			'positionLeft'  => $this->positionLeft,
			'lc' => $lc,
		]);
	}

}

