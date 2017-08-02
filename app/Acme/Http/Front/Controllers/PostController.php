<?php
namespace Front\Controllers;

use Illuminate\Http\Request;
use View;

use \Model\Banner\ModelName    	as Banner;
use \Model\Category\ModelName   as Category;
use \Model\Post\ModelName       as Post;
use \Model\Project\ModelName    as Project;
use \Model\Schedule\ModelName   as Schedule;
use \Model\Comment\ModelName    as Comment;

class PostController extends Controller
{
  	protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
  
  	public function __construct()
  	{
		$lc = app()->getlocale();

		# Background

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
		View::share('backgroundMain', $backgroundMain);


		# Banners

		$this->positionTop = Banner::where('positionTop','=','1')->where('channel_id','=','2')->first();
		$this->positionRight = Banner::where('positionRight','=','1')->where('channel_id','=','2')->first();
		$this->positionLeft = Banner::where('positionLeft','=','1')->where('channel_id','=','2')->first();
		$this->positionCenter = Banner::where('positionCenter','=','1')->where('channel_id','=','2')->first();
		$this->positionBottom = Banner::where('positionBottom','=','1')->where('channel_id','=','2')->first();


		# News categories

		$categoriesNews = Category::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->get();
		View::share('categoriesNews', $categoriesNews);


		# Active Projects

		if($lc == 'kg'){
		  $activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
		}else{
		  $activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
		}
		View::share('activeProjects', $activeProjects);


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
		View::share('currentProgram', $currentProgram);
		View::share('nextProgram', $nextProgram);
  	}


  	# Custom Functions
  	public static function rusdate($d, $format = 'j %MONTH% Y', $offset = 0)
  	{
	  	$montharr = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
	  	$dayarr = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
   
	  	$d += 3600 * $offset;
   
	  	$sarr = array('/%MONTH%/i', '/%DAYWEEK%/i');
	  	$rarr = array( $montharr[date("m", $d) - 1], $dayarr[date("N", $d) - 1] );
   
	  	$format = preg_replace($sarr, $rarr, $format); 
	  	return date($format, $d);
  	}

  	public function all()
  	{
		$lc = app()->getlocale();
		$date = null;

		$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

		if($lc == 'kg'){
			$postAll = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->orderBy('id','desc')->get();
			
		 	$topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->where('number','=','88')->where('created_at','>',$weekFromNow)->orderBy('updated_at','desc')->take(6)->get();

		 	if(count($topArticles) > 0){
				$topArticles = $topArticles;   
		 	}else{
				$topArticles = null;
		 	}

		 	$popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			
		 	if(count($popArticles) > 0){
				$popArticles = $popArticles;
		 	}else{
				$popArticles = null;
		 	}

		}elseif($lc == 'ru'){
		 	$postAll = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->orderBy('id','desc')->get();
		}

	  if($lc == 'kg'){
		 $weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
			
		 $topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->where('number','=','88')->where('created_at','>',$weekFromNow)->orderBy('updated_at','desc')->take(6)->get();

		 if(count($topArticles) > 0){
			$topArticles = $topArticles;   
		 }else{
			$topArticles = null;
		 }

		 $popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			
		 if(count($popArticles) > 0){
			$popArticles = $popArticles;
		 }else{
			$popArticles = null;
		 }

	  }elseif($lc == 'ru'){
		 $weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
			
		 $topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('numberRu','=','88')->where('created_at','>',$weekFromNow)->orderBy('updated_at','desc')->take(6)->get();

		 if(count($topArticles) > 0){
			$topArticles = $topArticles;   
		 }else{
			$topArticles = null;
		 }

		 $popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();

		 if(count($popArticles) > 0){
			$popArticles = $popArticles;
		 }else{
			$popArticles = null;
		 }
	  }

	  $categories = \Model\Category\ModelName::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->get();

	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
	$leftCategories = array();
	$middleCategories = array();
	$rightCategories = array();
	$posts = array();
	$headerPosts = array();

	  foreach($categories as $key=>$category){

		 if($lc == 'kg'){

			$categoryHeaderPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('id','desc')->take(1)->get();
			foreach($categoryHeaderPosts as $categoryHeaderPost){
				$headerPosts[] = $categoryHeaderPost;
			}
			if(count($categoryHeaderPosts) == 0 ){
				unset($categories[$key]);
			}

			$categoryPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('id','desc')->take(2)->skip(1)->get();
			foreach($categoryPosts as $categoryPost){
				$posts[] = $categoryPost;
			}

		 } elseif($lc == 'ru') {

			$categoryHeaderPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('id','desc')->take(1)->get();
			foreach($categoryHeaderPosts as $categoryHeaderPost){
				$headerPosts[] = $categoryHeaderPost;
			}
			if(count($categoryHeaderPosts) == 0 ){
				unset($categories[$key]);
			}

			$categoryPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('id','desc')->take(2)->skip(1)->get();
			foreach($categoryPosts as $categoryPost){
				$posts[] = $categoryPost;
			}

		}
	  }

	  session(['categories'=>$categories]);

	  foreach (session('categories') as $key1=>$category1) {
		 $key1 = $key1+1;
		 if($key1 % 3 == 1){
			$leftCategories[] = $category1;
		 } else if($key1 % 3 == 2){
			$middleCategories[] = $category1;
		 } else if($key1 % 3 == 0){
			$rightCategories[] = $category1;
		 }
	  }

	  return view('Front::post.postsTest',[
	  'postAll' => $postAll,
	  'headerPosts' => $headerPosts,
	  'posts' => $posts,
	  'topArticles' => $topArticles,
	  'popArticles' => $popArticles,
	  'categories'=>$categories,
	  'leftCategories'=>$leftCategories,
	  'middleCategories'=>$middleCategories,
	  'rightCategories'=>$rightCategories,
	  'backgroundMain' => $backgroundMain,
	  'positionTop'    => $this->positionTop,
	  'positionRight'  => $this->positionRight,
	  'positionCenter' => $this->positionCenter,
	  'positionBottom' => $this->positionBottom,
	  'positionLeft'  => $this->positionLeft,

	  'lc' => $lc,
	  'date' => $date,
	]);
  }

  public function post(Post $post, $locale="kg", $title = "")
	{
		$post->incrementViewed();
		
		if($post->getTilda()){
			echo file_get_contents($post->getTilda());
			dd();
		}

		$lc = in_array($locale, ['kg', 'ru'])? $locale : 'kg';

		app()->setlocale($lc);
		$categories = \Model\Category\ModelName::where('general','=','1')->published()->get();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
		$parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
		if($parent){
			$images = json_decode($parent->images);   
		}else{
			$images = null;
		}

		$parent2 = \Model\PhotoParent\ModelName::where('id','=',$post->parentId2)->first();
		if($parent2){
			$images2 = json_decode($parent2->images);    
		}else{
			$images2 = null;
		}

		if($lc == 'kg'){
			$relatedPosts = array();
			$postTagsKg = $post->getTagListAttributeKg();
			if($postTagsKg){
				foreach ($postTagsKg as $key => $postTagKg) {
					$postTagPostsKg = $postTagKg->posts()->where('id','<>',$post->id)->where('live',false)->orderBy('created_at','desc')->get();
					$relatedPosts = $postTagPostsKg->merge($relatedPosts);
				}
				$relatedPosts = $relatedPosts->sortByDesc('created_at')->take(6);
			}

			$contentOriginal = $post->getContent();
			$contentFinal = $contentOriginal;
			if($post->related1)
			{
				if(strpos($contentFinal, 'POST1LEFT') != false)
				{
					$post1Pos = strripos($contentFinal, 'POST1LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeftTest($post->related1), $post1Pos, 9);
				}
				elseif(strpos($contentFinal, 'POST1RIGHT') != false)
				{
					$post1Pos = strripos($contentFinal, 'POST1RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionRightTest($post->related1), $post1Pos, 10);
				}
			}

			if($post->related2)
			{
				if(strpos($contentFinal, 'POST2LEFT') != false)
				{
					$post2Pos = strripos($contentFinal, 'POST2LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeftTest($post->related2), $post2Pos, 9);
				}
				elseif(strpos($contentFinal, 'POST2RIGHT') != false)
				{
					$post2Pos = strripos($contentFinal, 'POST2RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionRightTest($post->related2), $post2Pos, 10);
				}
			}

			if($post->related3)
			{
				if(strpos($contentFinal, 'POST3LEFT') != false)
				{
					$post3Pos = strripos($contentFinal, 'POST3LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeftTest($post->related3), $post3Pos, 9);
				}
				elseif(strpos($contentFinal, 'POST3RIGHT') != false)
				{
					$post3Pos = strripos($contentFinal, 'POST3RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionRightTest($post->related3), $post3Pos, 10);
				}
			}

			if($post->relatedMedia1)
			{
				if(strpos($contentFinal, 'MEDIA1LEFT') != false)
				{
					$media1Pos = strripos($contentFinal, 'MEDIA1LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeftTest($post->relatedMedia1), $media1Pos, 10);
				}
				elseif(strpos($contentFinal, 'MEDIA1RIGHT') != false)
				{
					$media1Pos = strripos($contentFinal, 'MEDIA1RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRightTest($post->relatedMedia1), $media1Pos, 11);
				}
			}

			if($post->relatedMedia2)
			{
				if(strpos($contentFinal, 'MEDIA2LEFT') != false)
				{
					$media2Pos = strripos($contentFinal, 'MEDIA2LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeftTest($post->relatedMedia2), $media2Pos, 10);
				}
				elseif(strpos($contentFinal, 'MEDIA2RIGHT') != false)
				{
					$media2Pos = strripos($contentFinal, 'MEDIA2RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRightTest($post->relatedMedia2), $media2Pos, 11);
				}
			}

			if($post->relatedMedia3)
			{
				if(strpos($contentFinal, 'MEDIA3LEFT') != false)
				{
					$media3Pos = strripos($contentFinal, 'MEDIA3LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeftTest($post->relatedMedia3), $media3Pos, 10);
				}
				elseif(strpos($contentFinal, 'MEDIA3RIGHT') != false)
				{
					$media3Pos = strripos($contentFinal, 'MEDIA3RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRightTest($post->relatedMedia3), $media3Pos, 11);
				}
			}

			$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
			$topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->where('number','=','88')->where('created_at','>',$weekFromNow)->orderBy('updated_at','desc')->take(6)->get();

			if(count($topArticles) > 0){
				$topArticles = $topArticles;   
			}else{
				$topArticles = null;
			}

			$popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			if(count($popArticles) > 0){
				$popArticles = $popArticles;
			}else{
				$popArticles = null;
			}

		}elseif($lc == 'ru'){
			$relatedPosts = array();
			$postTagsRu = $post->getTagListAttributeRu();
			if($postTagsRu){
				foreach ($postTagsRu as $key => $postTagRu) {
					$postTagPostsRu = $postTagRu->posts()->where('id','<>',$post->id)->where('live',false)->orderBy('created_at','desc')->get();
					$relatedPosts = $postTagPostsRu->merge($relatedPosts);
				}
				$relatedPosts = $relatedPosts->sortByDesc('created_at')->take(6);
			}
		   
			$contentOriginal = $post->getContent();
			$contentFinal = $contentOriginal;
			if($post->relatedRu1)
			{
				if(strpos($contentFinal, 'POST1LEFT') != false)
				{
					$post1Pos = strripos($contentFinal, 'POST1LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeftTest($post->relatedRu1), $post1Pos, 9);
				}
				elseif(strpos($contentFinal, 'POST1RIGHT') != false)
				{
					$post1Pos = strripos($contentFinal, 'POST1RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionRightTest($post->relatedRu1), $post1Pos, 10);
				}
			}

			if($post->relatedRu2)
			{
				if(strpos($contentFinal, 'POST2LEFT') != false)
				{
					$post2Pos = strripos($contentFinal, 'POST2LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeftTest($post->relatedRu2), $post2Pos, 9);
				}
				elseif(strpos($contentFinal, 'POST2RIGHT') != false)
				{
					$post2Pos = strripos($contentFinal, 'POST2RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionRightTest($post->relatedRu2), $post2Pos, 10);
				}
			}

			if($post->relatedRu3)
			{
				if(strpos($contentFinal, 'POST3LEFT') != false)
				{
					$post3Pos = strripos($contentFinal, 'POST3LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeftTest($post->relatedRu3), $post3Pos, 9);
				}
				elseif(strpos($contentFinal, 'POST3RIGHT') != false)
				{
					$post3Pos = strripos($contentFinal, 'POST3RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedFunctionRightTest($post->relatedRu3), $post3Pos, 10);
				}
			}

			if($post->relatedMediaRu1)
			{
				if(strpos($contentFinal, 'MEDIA1LEFT') != false)
				{
					$media1Pos = strripos($contentFinal, 'MEDIA1LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeftTest($post->relatedMediaRu1), $media1Pos, 10);
				}
				elseif(strpos($contentFinal, 'MEDIA1RIGHT') != false)
				{
					$media1Pos = strripos($contentFinal, 'MEDIA1RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRightTest($post->relatedMediaRu1), $media1Pos, 11);
				}
			}

			if($post->relatedMediaRu2)
			{
				if(strpos($contentFinal, 'MEDIA2LEFT') != false)
				{
					$media2Pos = strripos($contentFinal, 'MEDIA2LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeftTest($post->relatedMediaRu2), $media2Pos, 10);
				}
				elseif(strpos($contentFinal, 'MEDIA2RIGHT') != false)
				{
					$media2Pos = strripos($contentFinal, 'MEDIA2RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRightTest($post->relatedMediaRu2), $media2Pos, 11);
				}
			}

			if($post->relatedMediaRu3)
			{
				if(strpos($contentFinal, 'MEDIA3LEFT') != false)
				{
					$media3Pos = strripos($contentFinal, 'MEDIA3LEFT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeftTest($post->relatedMediaRu3), $media3Pos, 10);
				}
				elseif(strpos($contentFinal, 'MEDIA3RIGHT') != false)
				{
					$media3Pos = strripos($contentFinal, 'MEDIA3RIGHT');
					$contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRightTest($post->relatedMediaRu3), $media3Pos, 11);
				}
			}

			$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
			$topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->where('numberRu','=','88')->orderBy('updated_at','desc')->take(6)->get();
			if(count($topArticles) > 0){
				$topArticles = $topArticles;   
			}else{
				$topArticles = null;
			}

			$popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			if(count($popArticles) > 0){
				$popArticles = $popArticles;
			}else{
				$popArticles = null;
			}
		}

		$comments = Comment::where('resourceType','=','post')->where('resourceId','=',$post->id)->where('approved','=','1')->orderBy('id','desc')->get();

		if($lc == 'kg') {
			$words = explode(" ", $post->title);
		} else {
			$words = explode(" ", $post->titleRu);
		}

		return view('Front::post.postTest',[
			'lc' => $lc,
			'post' => $post,
			'words' => $words,
			'topArticles' => $topArticles,
			'popArticles' => $popArticles,

			'relatedPosts' => $relatedPosts,

			'images' => $images,
			'images2' => $images2,
			'content' => $contentFinal,
			'comments' => $comments,

			'categories'=>$categories,
			'backgroundMain' => $backgroundMain,
			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,
			'positionLeft'  => $this->positionLeft,
			]);

	}


  public function filterDateGeneral(Request $request)
  {
	$lc = app()->getlocale();
	$date = $request->d;
	$sectionDesc = $this->rusdate( strtotime($date), 'j %MONTH%, Y' );
	$perPage = 36;

	$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

	$categories = Category::where('general','=','1')->get();
	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

	$leftPosts = $middlePosts = $rightPosts = array();

	if($lc == 'kg'){
	  $posts = Post::where('general','=','1')->where('published','=','1')->where('title','<>','')->whereDate('created_at','=', $date)->orderBy('created_at','desc')->paginate($perPage);

	  foreach ($posts as $key => $row) {
		if($key % 3 == 0){
		  $leftPosts[] = $row;
		} elseif ($key % 3 == 1) {
		  $middlePosts[] = $row;
		} else {
		  $rightPosts[] = $row;       
		}
	  }
	}else{
	  $posts = Post::where('general','=','1')->where('published','=','1')->where('titleRu','<>','')->whereDate('created_at','=', $date)->orderBy('created_at','desc')->paginate($perPage);

	  foreach ($posts as $key => $row) {
		if($key % 3 == 0){
		  $leftPosts[] = $row;
		} elseif ($key % 3 == 1) {
		  $middlePosts[] = $row;
		} else {
		  $rightPosts[] = $row;       
		}
	  }
	}

	if($lc == 'kg'){
	  $topArticles = Post::where('general','=','1')->where('title','<>','')->where('number','=','88')->orderBy('updated_at','desc')->take(6)->get();
	  if(count($topArticles) > 0){
		$topArticles = $topArticles;   
	  }else{
		$topArticles = null;
	  }

	  $popArticles = Post::where('general','=','1')->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
	  if(count($popArticles) > 0){
		$popArticles = $popArticles;
	  }else{
		$popArticles = null;
	  }
	}elseif($lc == 'ru'){
	  $topArticles = Post::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->where('numberRu','=','88')->orderBy('updated_at','desc')->take(6)->get();
		 if(count($topArticles) > 0){
			 $topArticles = $topArticles;   
		 }else{
			 $topArticles = null;
		 }

		 $popArticles = Post::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
		 if(count($popArticles) > 0){
			 $popArticles = $popArticles;
		 }else{
			 $popArticles = null;
		 }
	}

	return view('Front::post.postsFilter',[
	  'perPage'=> $perPage,
	  'date'=> $date,
	  'sectionDesc'=> $sectionDesc,

	  'posts' => $posts,
	  'leftPosts' => $leftPosts,
	  'middlePosts' => $middlePosts,
	  'rightPosts' => $rightPosts,

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

  public function categoryPage(Category $category)
  {
	$lc = app()->getlocale();
	$perPage = 36;
	$date = null;
	$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

	$category_id = $category->id;

	$leftPosts = $middlePosts = $rightPosts = array();

	if($lc == 'kg'){
	  $posts = \Model\Post\ModelName::where('general','=','1')->where('published','=','1')->where('category_id','=',$category_id)->where('title','<>','')->orderBy('id','desc')->paginate($perPage);

	  foreach ($posts as $key => $row) {
		if($key % 3 == 0){
		  $leftPosts[] = $row;
		} elseif ($key % 3 == 1) {
		  $middlePosts[] = $row;
		} else {
		  $rightPosts[] = $row;       
		}
	  }
	}else{
	  $posts = \Model\Post\ModelName::where('general','=','1')->where('published','=','1')->where('category_id','=',$category_id)->where('titleRu','<>','')->orderBy('id','desc')->paginate($perPage);

	  foreach ($posts as $key => $row) {
		if($key % 3 == 0){
		  $leftPosts[] = $row;
		} elseif ($key % 3 == 1) {
		  $middlePosts[] = $row;
		} else {
		  $rightPosts[] = $row;       
		}
	  }
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
	  $topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->where('numberRu','=','88')->orderBy('updated_at','desc')->take(6)->get();
			if(count($topArticles) > 0){
				$topArticles = $topArticles;   
			}else{
				$topArticles = null;
			}

			$popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
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
	  'date'=> $date,

	  'posts' => $posts,
	  'leftPosts' => $leftPosts,
	  'middlePosts' => $middlePosts,
	  'rightPosts' => $rightPosts,


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

  public function filterDateCategory(Request $request)
  {
	$lc = app()->getlocale();
	$category = $request->category;
	$date = $request->d;
	$sectionDesc = $this->rusdate( strtotime($date), 'j %MONTH%, Y' );
	$perPage = 36;

	$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

	$categories = \Model\Category\ModelName::where('general','=','1')->get();
	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

	$leftPosts = $middlePosts = $rightPosts = array();

	if($lc == 'kg'){
	  $posts = \Model\Post\ModelName::where('general','=','1')->where('published','=','1')->where('category_id','=',$category->id)->where('title','<>','')->whereDate('created_at','=', $date)->orderBy('created_at','desc')->paginate($perPage);

	  foreach ($posts as $key => $row) {
		if($key % 3 == 0){
		  $leftPosts[] = $row;
		} elseif ($key % 3 == 1) {
		  $middlePosts[] = $row;
		} else {
		  $rightPosts[] = $row;       
		}
	  }
	}else{
	  $posts = \Model\Post\ModelName::where('general','=','1')->where('published','=','1')->where('category_id','=',$category->id)->where('titleRu','<>','')->whereDate('created_at','=', $date)->orderBy('created_at','desc')->paginate($perPage);

	  foreach ($posts as $key => $row) {
		if($key % 3 == 0){
		  $leftPosts[] = $row;
		} elseif ($key % 3 == 1) {
		  $middlePosts[] = $row;
		} else {
		  $rightPosts[] = $row;       
		}
	  }
	}

	if($lc == 'kg'){
	  $topArticles = \Model\Post\ModelName::where('general','=','1')->where('title','<>','')->where('number','=','88')->orderBy('updated_at','desc')->take(6)->get();
	  if(count($topArticles) > 0){
		$topArticles = $topArticles;   
	  }else{
		$topArticles = null;
	  }

	  $popArticles = \Model\Post\ModelName::where('general','=','1')->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
	  if(count($popArticles) > 0){
		$popArticles = $popArticles;
	  }else{
		$popArticles = null;
	  }
	}elseif($lc == 'ru'){
	  $topArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->where('numberRu','=','88')->orderBy('updated_at','desc')->take(6)->get();
		 if(count($topArticles) > 0){
			 $topArticles = $topArticles;   
		 }else{
			 $topArticles = null;
		 }

		 $popArticles = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
		 if(count($popArticles) > 0){
			 $popArticles = $popArticles;
		 }else{
			 $popArticles = null;
		 }
	}

	return view('Front::category.indexTest',[
	  'perPage'=> $perPage,
	  'date'=> $date,
	  'sectionDesc'=> $sectionDesc,

	  'posts' => $posts,
	  'leftPosts' => $leftPosts,
	  'middlePosts' => $middlePosts,
	  'rightPosts' => $rightPosts,


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

