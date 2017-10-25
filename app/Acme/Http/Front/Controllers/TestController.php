<?php
namespace Front\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Input;
use View;
use Response;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;
use \Model\Banner\ModelName as Banner;
use \Model\Schedule\ModelName as Schedule;

class TestController extends Controller
{
	protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;

	public function __construct()
	{
		$lc = app()->getlocale();
		View::share('lc', $lc);

		# Background

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
		View::share('backgroundMain', $backgroundMain);

		$this->positionTop = Banner::where('positionTop','=','1')->where('channel_id','=','2')->first();
		$this->positionRight = Banner::where('positionRight','=','1')->where('channel_id','=','2')->first();
		$this->positionLeft = Banner::where('positionLeft','=','1')->where('channel_id','=','2')->first();
		$this->positionCenter = Banner::where('positionCenter','=','1')->where('channel_id','=','2')->first();
		$this->positionBottom = Banner::where('positionBottom','=','1')->where('channel_id','=','2')->first();
		$this->innerPages = Banner::where('extracolumn','=','1')->where('channel_id','=','2')->first();
		View::share('positionTop', $this->positionTop);
		View::share('positionRight', $this->positionRight);
		View::share('positionLeft', $this->positionLeft);
		View::share('positionCenter', $this->positionCenter);
		View::share('positionBottom', $this->positionBottom);
		View::share('innerPages', $this->innerPages);

		$categoriesNews = Category::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->get();
		$lc = app()->getlocale();
		if($lc == 'kg'){
		  	$activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
		}else{
		  	$activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
		}

	 	// Current program
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

	 View::share('categoriesNews', $categoriesNews);
	 View::share('activeProjects', $activeProjects);
	 View::share('currentProgram', $currentProgram);
	 View::share('nextProgram', $nextProgram);
	}
	/**
	* Show the application dashboard to the user.
	*
	* @return Response
	*/
	public function historyPage()
	{

	 return view('Front::pages.test', []);
	}

	public function directorPage()
	{
	 $lc = app()->getlocale();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 if($lc == 'kg'){
		$directorPosts = \Model\Post\ModelName::where('director','=','1')->languagekg()->orderBy('id','desc')->get();
	 }else{
		$directorPosts = \Model\Post\ModelName::where('director','=','1')->languageru()->orderBy('id','desc')->get();
	 }
	 $fbpost = \Model\Post\ModelName::where('director','<>','1')->where('fbpost','=','1')->orderBy('id','desc')->take(5)->get();
	 if($fbpost){
		$fbpost = $fbpost;
	 }else {
		$fbpost = null;
	 }
	 return view('Front::pages.director', [
		'backgroundMain' => $backgroundMain,
		'directorPosts' => $directorPosts,
		'lc' => $lc,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
		'fbpost' => $fbpost,
	 ]);
	}

	public function leadersPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.leaders', [
		'backgroundMain' => $backgroundMain,
		'categories'=>$categories,
		'lc' => $lc,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);

	}

	//    public function leaderPage($leader)
	//    {
	//        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	//        return view('Front::pages.leader', [
	//            'leader' => $leader,
	//            'backgroundMain' => $backgroundMain,
	//        ]);
	//    }

	public function strategyPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.strategy', [
		'lc' => $lc,
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}

	public function normalbasePage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.normalbase', [
		'lc' => $lc,
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}

	public function rrtsPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.rrts', [
		'lc' => $lc,
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}

	public function reportPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.report', [
		'lc' => $lc,
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}

	public function TeleprogramPage(Request $request)
	{
	 $lc = app()->getlocale();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 $channels = \Model\Channel\ModelName::where('published','=','1')->get();
	 $channels2 = \Model\Channel\ModelName::where('published','=','1')->lists('display', 'id')->toArray();

	 date_default_timezone_set('Asia/Bishkek');
	 $now = date("d-m-Y H:i");
	 $currentDate = date('d-m-Y');
	 $currentTime = date('H:i');
	 $weekDay = date('N', strtotime($now));

	 $channel = \Model\Channel\ModelName::where('id','=',2)->first();

	 if($channel){
		$schedules = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->orderBy('date', 'desc')->get();

		for($i=1; $i<=7; $i++){
		  if($i < $weekDay){
			 $weekDayNew = date('d-m-Y', strtotime('-'.($weekDay - $i).' day'));
			 $week[] = $weekDayNew;
		  } elseif ($i > $weekDay) {
			 $weekDayNew = date('d-m-Y', strtotime('+'.($i - $weekDay).' day'));
			 $week[] = $weekDayNew;
		  } else {
			 $weekDayNew = date('d-m-Y', strtotime($now));
			 $week[] = $weekDayNew;
		  }
		}

		if(!empty($schedules)){
		  $programs = array();
		  for($j=0; $j<count($week);$j++){
			 foreach($schedules as $schedule){
				if(strtotime($week[$j]) == strtotime($schedule->date)){
				  $program = json_decode($schedule->program);
				  $programNew = array_add($program, 'date', $schedule->date);
				  $programs[] =$programNew;
				}
			 }
		  }
		}
	 }

	//    $programs = array();
	//    $schedules = array();
	//    $channel = '';

	 return view('Front::pages.teleprogram', [
		'lc' => $lc,
		'currentDate' => $currentDate,
		'currentTime' => $currentTime,
		'backgroundMain' => $backgroundMain,
		'channels' => $channels,
		'channels2' => $channels2,
		'schedules' => $schedules,
		'programs' => $programs,
		'channel' => $channel,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}

	public function ChannelTeleprogram($channel)
	{
	 $lc = app()->getlocale();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 $channels = \Model\Channel\ModelName::where('published','=','1')->get();
	 $channels2 = \Model\Channel\ModelName::where('published','=','1')->lists('display', 'id')->toArray();

	 date_default_timezone_set('Asia/Bishkek');
	 $now = date("d-m-Y H:i");
	 $currentDate = date('d-m-Y');
	 $currentTime = date('H:i');
	 $weekDay = date('N', strtotime($now));

	 $channel = \Model\Channel\ModelName::where('id','=',$channel->id)->first();

	 if($channel){
		$schedules = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->orderBy('date', 'desc')->get();

		for($i=1; $i<=7; $i++){
		  if($i < $weekDay){
			 $weekDayNew = date('d-m-Y', strtotime('-'.($weekDay - $i).' day'));
			 $week[] = $weekDayNew;
		  } elseif ($i > $weekDay) {
			 $weekDayNew = date('d-m-Y', strtotime('+'.($i - $weekDay).' day'));
			 $week[] = $weekDayNew;
		  } else {
			 $weekDayNew = date('d-m-Y', strtotime($now));
			 $week[] = $weekDayNew;
		  }
		}

		if(!empty($schedules)){
		  $programs = array();
		  for($j=0; $j<count($week);$j++){
			 foreach($schedules as $schedule){
				if(strtotime($week[$j]) == strtotime($schedule->date)){
				  $program = json_decode($schedule->program);
				  $programNew = array_add($program, 'date', $schedule->date);
				  $programs[] =$programNew;
				}
			 }
		  }
		}
	 }

	//        dd($programs);
	 return view('Front::pages.teleprogram', [
		'lc' => $lc,
		'currentDate' => $currentDate,
		'currentTime' => $currentTime,
		'backgroundMain' => $backgroundMain,
		'schedules' => $schedules,
		'programs' => $programs,
		'week' => $week,
		'channels' => $channels,
		'channels2' => $channels2,
		'channel' => $channel,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);

	}

	public function keneshPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.ns', [
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
		'lc' => $lc,
	 ]);
	}

	public function editionkeneshPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.editionkenesh', [
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
		'lc' => $lc,
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

	public function Reklama()
	{
	 $lc = app()->getlocale();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 return view('Front::pages.reklama',[
		'lc'            => $lc,
		'backgroundMain' => $backgroundMain,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}

	public function Contacts()
	{
	 $lc = app()->getlocale();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

	 return view('Front::pages.contacts',[
		'lc'            => $lc,
		'backgroundMain' => $backgroundMain,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
	 ]);
	}
	public function logoPage()
	{
	 $lc = app()->getlocale();
	 $categories = \Model\Category\ModelName::all();
	 $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
	 return view('Front::pages.logo', [
		'backgroundMain' => $backgroundMain,
		'categories' => $categories,
		'positionTop'    => $this->positionTop,
		'positionRight'  => $this->positionRight,
		'positionCenter' => $this->positionCenter,
		'positionBottom' => $this->positionBottom,
		'positionLeft'  => $this->positionLeft,
		'lc' => $lc,
	 ]);
	}
}