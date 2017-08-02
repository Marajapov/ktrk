<?php
namespace Front\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Input;
use View;
use Response;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;

class DirectorController extends Controller
{
  protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;

  public function __construct()
  {

	 $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
	 $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
	 $this->positionLeft = \Model\Banner\ModelName::where('positionLeft','=','1')->first();
	 $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
	 $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();

	 $categoriesNews = Category::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->get();
	 $lc = app()->getlocale();
	 if($lc == 'kg'){
		  $activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
	 }else{
		  $activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
	 }

	 # Current program
	 date_default_timezone_set('Asia/Bishkek');
	 $now = date("d-m-Y H:i");
	 $currentDate = date('d-m-Y');
	 $currentTime = date('H:i');
	 $weekDay = date('N', strtotime($now));

	 $currentProgram = '';
	 $nextProgram = '';

	 $schedule = \Model\Schedule\ModelName::where('channel_id',2)->where('date',$currentDate)->first();

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

	 View::share('categoriesNews', $categoriesNews);
	 View::share('activeProjects', $activeProjects);
	 View::share('currentProgram', $currentProgram);
	 View::share('nextProgram', $nextProgram);

  }

  public function index()
  {
	 $lc = app()->getlocale();
	 $perPage = 18; // количество постов на странице

	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 $leftPosts = $rightPosts = array();

	 if($lc == 'kg'){
		$directorPosts = \Model\Post\ModelName::where('director','=','1')->languagekg()->orderBy('id','desc')->paginate($perPage);
		foreach ($directorPosts as $key => $row) {
			if($key % 2 == 0){
				$leftPosts[] = $row;
			} else {
				$rightPosts[] = $row;				
			}
		}
	 }else{
		$directorPosts = \Model\Post\ModelName::where('director','=','1')->languageru()->orderBy('id','desc')->paginate($perPage);
		foreach ($directorPosts as $key => $row) {
			if($key % 2 == 0){
				$leftPosts[] = $row;
			} else {
				$rightPosts[] = $row;				
			}
		}
	 }
	 $fbpost = \Model\Post\ModelName::where('director','<>','1')->where('fbpost','=','1')->orderBy('id','desc')->take(5)->get();
	 if($fbpost){
		$fbpost = $fbpost;
	 }else {
		$fbpost = null;
	 }
	 return view('Front::director.index', [
		'backgroundMain' => $backgroundMain,
		'directorPosts' => $directorPosts,
		'leftPosts' => $leftPosts,
		'rightPosts' => $rightPosts,
		'lc' => $lc,
		'perPage' => $perPage,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
		'fbpost' => $fbpost,
	 ]);
  }

  // Director Post Function
  public function directorPost(\Model\Post\ModelName $post)
  {
	 $lc = app()->getlocale();

	 $fbpost = \Model\Post\ModelName::where('director','<>','1')->where('fbpost','=','1')->orderBy('id','desc')->get();
	 if($fbpost){
		$fbpost = $fbpost;
	 }else {
		$fbpost = null;
	 }

	 $post->incrementViewed();

	 $categories = \Model\Category\ModelName::where('general',true)->published()->get();
	 $positionTop = \Model\Banner\ModelName::top()->first();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 if(($post->parentId != '0') && ($post->parentId != null))
	 {
		$parentId = $post->parentId;
		$parentId = \Model\PhotoParent\ModelName::where('id','=',$parentId)->first();
		$photoChilds = \Model\PhotoChild\ModelName::where('parentId','=',$parentId->id)->get();

	 }else{
		$parentId = '0';
		$photoChilds = '0';
	 }

	 if($post->related1 != null){
		$related1Post = \Model\Post\ModelName::where('id','=',$post->related1)->first();
	 }else{
		$related1Post = null;
	 }

	 if($post->related2 != null){
		$related2Post = \Model\Post\ModelName::where('id','=',$post->related2)->first();
	 }else{
		$related2Post = null;
	 }

	 if($post->related3 != null){
		$related3Post = \Model\Post\ModelName::where('id','=',$post->related3)->first();
	 }else{
		$related3Post = null;
	 }
	 if($lc == 'kg'){
		$relatedPosts = \Model\Post\ModelName::where('category_id','=',$post->category_id)->where('fbpost','<>','1')->languagekg()->take(6)->skip(0)->orderBy('id', 'desc')->get();
	 }elseif($lc == 'ru'){
		$relatedPosts = \Model\Post\ModelName::where('category_id','=',$post->category_id)->where('fbpost','<>','1')->languageru()->take(6)->skip(0)->orderBy('id', 'desc')->get();
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

	 return view('Front::pages.directorPost',[
		'post' => $post,
		'lc' => $lc,
		'fbpost' => $fbpost,

		'related1Post' => $related1Post,
		'related2Post' => $related2Post,
		'related3Post' => $related3Post,

		'relatedPosts' => $relatedPosts,
		'topArticles' => $topArticles,
		'popArticles' => $popArticles,

		'parentId'=> $parentId,
		'photoChilds'=> $photoChilds,

		'categories'=>$categories,
		'positionTop'    => $positionTop,
		'backgroundMain' => $backgroundMain,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);

  }

}