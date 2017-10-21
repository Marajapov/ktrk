<?php
namespace Front\Controllers;

use Illuminate\Http\Request;
use Input;
use View;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;

use \Model\Comment\ModelName as Comment;
use \Model\Post\ModelName as Post;
use \Model\Media\ModelName as Media;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;
use \Model\Anons\ModelName as Anons;
use \Model\Banner\ModelName as Banner;
use \Model\Schedule\ModelName as Schedule;
use \Model\Tag\Tag as Tag;

class HomeController extends Controller
{
	protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
	
	public function __construct()
	{
        $lc = app()->getlocale();
		View::share('lc', $lc);

		# Background

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
		View::share('backgroundMain', $backgroundMain);


		# Banners

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

	public function Live(){
			
		$lc = app()->getlocale();

		$channel = \Model\Channel\ModelName::general();

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		return view('Front::live', [
			'lc' =>$lc,

			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionLeft'  => $this->positionLeft,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,

			'backgroundMain' => $backgroundMain,
		]);
		
	}

	public function Home()
	{
		// start
		$visitor = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set("Asia/Bishkek");
		$today = date('d.m.Y');
		$date1 = date('d.m.Y', strtotime('12.09.16'));
		$date2 = date('d.m.Y', strtotime('12.09.18'));

		if(($today >= $date1) && ($today <= $date2)){
			$array_ip_1 = array('217.29','185.88','185.66','185.54','185.53','185.53','185.48','185.29','185.20','185.91.132','212.97','212.42','195.54','195.38','109.71','95.215','77.235','46.251','46.235','46.226','37.218','31.192','31.186','83.229','85.113','85.115','94.143','93.171','93.170','93.170','92.245','91.229','91.229','91.228','91.213','91.207','91.205','91.192','89.237','213.14');

			$array_ip_2 = array('178.21','178.21','176.12','176.12','158.18','158.181','109.20','185.11','185.13','213.14','212.24','212.11','195.21','195.11','194.17','194.15','194.15','193.10','185.13');

			//$array_ip_3 = array('212.2.','5.57.','127.0.');
			$array_ip_3 = array('212.2.','5.57.','127.0.');
			$array_ip_4 = array('81.88.','81.20.','92.62.','80.72.','95.87.','77.95.','62.76.','57.92.','31.41.','31.29.');

			$result = substr($visitor, 0, 6);

			if(in_array($result,$array_ip_1) == $result){ // 4
				$flag = 1;
			}elseif(in_array($result,$array_ip_2) == $result){ // 5
				$flag = 1;
			}elseif(in_array($result,$array_ip_3) == $result){ // 6
				$flag = 1;
			}elseif(in_array($result,$array_ip_4) == $result){ // 3
				$flag = 1;
			}else{
				$flag = 1; // else 1 for kg zone : 0 for all zones;
			}
			session_start();
			session(['flag'=> $flag]);
		}

		$lc = app()->getlocale();
		$channel = \Model\Channel\ModelName::general();
		$channels = \Model\Channel\ModelName::take(8)->skip(1)->get();

		if($lc == 'kg'){

			$livePost = Post::where('general',true)->where('live',true)->where('published',true)->languagekg()->first();

			$generalPosts = array();

			if($livePost){
				$generalPosts[] = $livePost;
			} else {
				$generalPost1 = \Model\Post\ModelName::general($channel)->published()->having('number','=',1)->languagekg()->first();
				if($generalPost1 == null){
					$generalPost1 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(32)->first();
				}
				if($generalPost1) $generalPosts[] = $generalPost1;
			}

			$generalPost2 = \Model\Post\ModelName::general($channel)->published()->having('number','=',2)->languagekg()->first();
			if($generalPost2 == null){
				$generalPost2 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(17)->first();
			}
			if($generalPost2) $generalPosts[] = $generalPost2;

			$generalPost3 = \Model\Post\ModelName::general($channel)->published()->having('number','=',3)->languagekg()->first();
			if($generalPost3 == null){
				$generalPost3 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(22)->first();
			}
			if($generalPost3) $generalPosts[] = $generalPost3;

			$generalPost4 = \Model\Post\ModelName::general($channel)->published()->having('number','=',4)->languagekg()->first();
			if($generalPost4 == null){
				$generalPost4 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(33)->first();
			}
			if($generalPost4) $generalPosts[] = $generalPost4;

			$generalPost5 = \Model\Post\ModelName::general($channel)->published()->having('number','=',5)->languagekg()->first();
			if($generalPost5 == null){
				$generalPost5 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(44)->first();
			}
			if($generalPost5) $generalPosts[] = $generalPost5;

			$generalPost6 = \Model\Post\ModelName::general($channel)->published()->having('number','=',6)->languagekg()->first();
			if($generalPost6 == null){
				$generalPost6 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(51)->first();
			}
			if($generalPost6) $generalPosts[] = $generalPost6;

			$projects = \Model\Project\ModelName::having('name','<>','')->get();
			$directorPosts = \Model\Post\ModelName::where('director','=','1')->orderBy('created_at','desc')->take(3)->languagekg()->get();
			$reporterPosts = \Model\Post\ModelName::where('reporter','=','1')->orderBy('created_at','desc')->take(15)->languagekg()->get();
			$multimedia = Category::where('title','Мультимедиа')->first();
			if($multimedia){
				$multimediaPosts = \Model\Post\ModelName::where('category_id',$multimedia->id)->orderBy('created_at','desc')->take(8)->languagekg()->get();    
			} else {
				$multimediaPosts = null;
			}

			//Slider Projects
			$sliderProjects = Anons::where('channel','2')->desckg()->languagekg()->published()->orderBy('media','asc')->get();

		} elseif($lc == 'ru'){

			$livePost = Post::where('general',true)->where('live',true)->where('published',true)->languageru()->first();

			$generalPosts = array();

			if($livePost){
				$generalPosts[] = $livePost;
			} else {
				$generalPost1 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',1)->languageru()->first();
				if($generalPost1 == null){
					$generalPost1 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(32)->first();
				}
				if($generalPost1) $generalPosts[] = $generalPost1;
			}

			$generalPost2 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',2)->languageru()->first();
			if($generalPost2 == null){
				$generalPost2 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(17)->first();
			}
			if($generalPost2) $generalPosts[] = $generalPost2;

			$generalPost3 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',3)->languageru()->first();
			if($generalPost3 == null){
				$generalPost3 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(22)->first();
			}
			if($generalPost3) $generalPosts[] = $generalPost3;

			$generalPost4 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',4)->languageru()->first();
			if($generalPost4 == null){
				$generalPost4 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(33)->first();
			}
			if($generalPost4) $generalPosts[] = $generalPost4;

			$generalPost5 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',5)->languageru()->first();
			if($generalPost5 == null){
				$generalPost5 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(44)->first();
			}
			if($generalPost5) $generalPosts[] = $generalPost5;

			$generalPost6 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',6)->languageru()->first();
			if($generalPost6 == null){
				$generalPost6 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(51)->first();
			}
			if($generalPost6) $generalPosts[] = $generalPost6;

			$projects = \Model\Project\ModelName::where('nameRu','<>','')->get();
			$directorPosts = \Model\Post\ModelName::where('director','=','1')->orderBy('created_at','desc')->take(3)->languageru()->get();
			$reporterPosts = \Model\Post\ModelName::where('reporter','=','1')->orderBy('created_at','desc')->take(15)->languageru()->get();

			$multimedia = Category::where('titleRu','Мультимедиа')->first();            
			$multimedia = Category::where('title','Мультимедиа')->first();
			if($multimedia){
				$multimediaPosts = \Model\Post\ModelName::where('category_id',$multimedia->id)->orderBy('created_at','desc')->take(8)->languageru()->get();    
			} else {
				$multimediaPosts = null;
			}

			//Slider Projects
			$sliderProjects = Anons::where('channel','2')->descru()->languageru()->published()->orderBy('media','asc')->get();

		}

		if($lc == 'kg'){
			$latestPosts = \Model\Post\ModelName::where('general',true)->where('live','<>','1')->published()->having('number','=','99')->where('general','=','1')->where('fbpost','<>','1')->languagekg()->take(6)->orderBy('created_at','desc')->get();
		}elseif($lc == 'ru'){
			$latestPosts = \Model\Post\ModelName::where('general',true)->where('live','<>','1')->published()->having('numberRu','=','99')->where('general','=','1')->where('fbpost','<>','1')->languageru()->take(6)->orderBy('created_at','desc')->get();
		}

		$dayVideos = array();
		$dayVideo1 = \Model\Media\ModelName::where('dayVideo','=','1')->first();
		$dayVideoRu1 = \Model\Media\ModelName::where('dayVideo','=','11')->first();
		$dayVideo2 = \Model\Media\ModelName::where('dayVideo','=','2')->first();
		$dayVideo3 = \Model\Media\ModelName::where('dayVideo','=','3')->first();
		$dayVideo4 = \Model\Media\ModelName::where('dayVideo','=','4')->first();

		if($dayVideo1 && $lc=='kg'){
			$dayVideo1 = $dayVideo1;
			$dayVideos[] = $dayVideo1;
		} elseif($dayVideoRu1 && $lc=='ru') {
			$dayVideo1 = $dayVideoRu1;
			$dayVideos[] = $dayVideoRu1;
		} else {
			$dayVideo1 = '';
		}
		if($dayVideo2){
			$dayVideo2 = $dayVideo2;
			$dayVideos[] = $dayVideo2;
		} else {
			$dayVideo2 = '';
		}
		if($dayVideo3){
			$dayVideo3 = $dayVideo3;
			$dayVideos[] = $dayVideo3;
		} else {
			$dayVideo3 = '';
		}
		if($dayVideo4){
			$dayVideo4 = $dayVideo4;
			$dayVideos[] = $dayVideo4;
		} else {
			$dayVideo4 = '';
		}

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
		$peopleReporters = \Model\PeopleReporter\ModelName::where('published','=',true)->get();

		// Photo Gallery
		$photoGalleryFirst = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('created_at','desc')->first();
		$photoGalleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('created_at','desc')->take(4)->skip(1)->get();

		$MediaCategories = \Model\MediaCategory\ModelName::orderBy('created_at','asc')->get();
		$mediaPosts = \Model\Media\ModelName::orderBy('created_at','desc')->get();

		$categoriesVideos = array();

		foreach($MediaCategories as $MediaCategory){
			$CategoryVideos = \Model\Media\ModelName::where('videoType','=',$MediaCategory->videoType)->where('published','=','1')->orderBy('created_at','desc')->take(9)->get();
			$categoriesVideos = array_add($categoriesVideos, $MediaCategory->videoType, $CategoryVideos);
		}

		$mediaLastVideos = \Model\Media\ModelName::where('published','=','1')->orderBy('created_at','desc')->take(12)->get();

		$defaultVideo = 'rjXSurFi8uQ';

		// News
		$categories = \Model\Category\ModelName::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->take(9)->get();

		$leftCategories = $middleCategories = $rightCategories = $posts = $headerPosts = array();

		foreach($categories as $key=>$category){

			if($lc == 'kg'){

				$categoryHeaderPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('created_at','desc')->take(1)->get();
				foreach($categoryHeaderPosts as $categoryHeaderPost){
					$headerPosts[] = $categoryHeaderPost;
				}
				if(count($categoryHeaderPosts) == 0 ){
					unset($categories[$key]);
				}

				$categoryPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('created_at','desc')->take(1)->skip(1)->get();
				foreach($categoryPosts as $categoryPost){
					$posts[] = $categoryPost;
				}

			} elseif($lc == 'ru') {

				$categoryHeaderPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('created_at','desc')->take(1)->get();
				foreach($categoryHeaderPosts as $categoryHeaderPost){
					$headerPosts[] = $categoryHeaderPost;
				}
				if(count($categoryHeaderPosts) == 0 ){
					unset($categories[$key]);
				}

				$categoryPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('created_at','desc')->take(1)->skip(1)->get();
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

		return view('Front::home', [

			'lc' =>$lc,

			'livePost'   => $livePost,
			'generalPosts'   => $generalPosts,

			'dayVideo1'      => $dayVideo1,
			'dayVideo2'      => $dayVideo2,
			'dayVideo3'      => $dayVideo3,
			'dayVideo4'      => $dayVideo4,
			'defaultVideo'   => $defaultVideo,
			'dayVideos'   => $dayVideos,

			'peopleReporters' => $peopleReporters,
			'photoGalleries' => $photoGalleries,
			'photoGalleryFirst' => $photoGalleryFirst,

			'MediaCategories' => $MediaCategories,
			'categoriesVideos' => $categoriesVideos,
			'mediaLastVideos' => $mediaLastVideos,
			'projects' => $projects,
			'directorPosts' => $directorPosts,
			'reporterPosts' => $reporterPosts,
			'latestPosts' => $latestPosts,
			'multimediaPosts' => $multimediaPosts,

			'headerPosts' => $headerPosts,
			'posts' => $posts,
			'categories' => $categories,
			'leftCategories'=>$leftCategories,
			'middleCategories'=>$middleCategories,
			'rightCategories'=>$rightCategories,

			'sliderProjects'=>$sliderProjects,

			'channels' => $channels,
		]);
	}	public function HomeVertex()
	{
		// start
		$visitor = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set("Asia/Bishkek");
		$today = date('d.m.Y');
		$date1 = date('d.m.Y', strtotime('12.09.16'));
		$date2 = date('d.m.Y', strtotime('12.09.18'));

		if(($today >= $date1) && ($today <= $date2)){
			$array_ip_1 = array('217.29','185.88','185.66','185.54','185.53','185.53','185.48','185.29','185.20','185.91.132','212.97','212.42','195.54','195.38','109.71','95.215','77.235','46.251','46.235','46.226','37.218','31.192','31.186','83.229','85.113','85.115','94.143','93.171','93.170','93.170','92.245','91.229','91.229','91.228','91.213','91.207','91.205','91.192','89.237','213.14');

			$array_ip_2 = array('178.21','178.21','176.12','176.12','158.18','158.181','109.20','185.11','185.13','213.14','212.24','212.11','195.21','195.11','194.17','194.15','194.15','193.10','185.13');

			//$array_ip_3 = array('212.2.','5.57.','127.0.');
			$array_ip_3 = array('212.2.','5.57.','127.0.');
			$array_ip_4 = array('81.88.','81.20.','92.62.','80.72.','95.87.','77.95.','62.76.','57.92.','31.41.','31.29.');

			$result = substr($visitor, 0, 6);

			if(in_array($result,$array_ip_1) == $result){ // 4
				$flag = 1;
			}elseif(in_array($result,$array_ip_2) == $result){ // 5
				$flag = 1;
			}elseif(in_array($result,$array_ip_3) == $result){ // 6
				$flag = 1;
			}elseif(in_array($result,$array_ip_4) == $result){ // 3
				$flag = 1;
			}else{
				$flag = 1; // else 1 for kg zone : 0 for all zones;
			}
			session_start();
			session(['flag'=> $flag]);
		}

		$lc = app()->getlocale();
		$channel = \Model\Channel\ModelName::general();
		$channels = \Model\Channel\ModelName::take(8)->skip(1)->get();

		if($lc == 'kg'){

			$livePost = Post::where('general',true)->where('live',true)->where('published',true)->languagekg()->first();

			$generalPosts = array();

			if($livePost){
				$generalPosts[] = $livePost;
			} else {
				$generalPost1 = \Model\Post\ModelName::general($channel)->published()->having('number','=',1)->languagekg()->first();
				if($generalPost1 == null){
					$generalPost1 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(32)->first();
				}
				if($generalPost1) $generalPosts[] = $generalPost1;
			}

			$generalPost2 = \Model\Post\ModelName::general($channel)->published()->having('number','=',2)->languagekg()->first();
			if($generalPost2 == null){
				$generalPost2 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(17)->first();
			}
			if($generalPost2) $generalPosts[] = $generalPost2;

			$generalPost3 = \Model\Post\ModelName::general($channel)->published()->having('number','=',3)->languagekg()->first();
			if($generalPost3 == null){
				$generalPost3 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(22)->first();
			}
			if($generalPost3) $generalPosts[] = $generalPost3;

			$generalPost4 = \Model\Post\ModelName::general($channel)->published()->having('number','=',4)->languagekg()->first();
			if($generalPost4 == null){
				$generalPost4 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(33)->first();
			}
			if($generalPost4) $generalPosts[] = $generalPost4;

			$generalPost5 = \Model\Post\ModelName::general($channel)->published()->having('number','=',5)->languagekg()->first();
			if($generalPost5 == null){
				$generalPost5 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(44)->first();
			}
			if($generalPost5) $generalPosts[] = $generalPost5;

			$generalPost6 = \Model\Post\ModelName::general($channel)->published()->having('number','=',6)->languagekg()->first();
			if($generalPost6 == null){
				$generalPost6 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->orderBy('created_at','desc')->take(1)->skip(51)->first();
			}
			if($generalPost6) $generalPosts[] = $generalPost6;

			$projects = \Model\Project\ModelName::having('name','<>','')->get();
			$directorPosts = \Model\Post\ModelName::where('director','=','1')->orderBy('created_at','desc')->take(3)->languagekg()->get();
			$reporterPosts = \Model\Post\ModelName::where('reporter','=','1')->orderBy('created_at','desc')->take(15)->languagekg()->get();
			$multimedia = Category::where('title','Мультимедиа')->first();
			if($multimedia){
				$multimediaPosts = \Model\Post\ModelName::where('category_id',$multimedia->id)->orderBy('created_at','desc')->take(8)->languagekg()->get();    
			} else {
				$multimediaPosts = null;
			}

			//Slider Projects
			$sliderProjects = Anons::where('channel','2')->desckg()->languagekg()->published()->orderBy('media','asc')->get();

		} elseif($lc == 'ru'){

			$livePost = Post::where('general',true)->where('live',true)->where('published',true)->languageru()->first();

			$generalPosts = array();

			if($livePost){
				$generalPosts[] = $livePost;
			} else {
				$generalPost1 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',1)->languageru()->first();
				if($generalPost1 == null){
					$generalPost1 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(32)->first();
				}
				if($generalPost1) $generalPosts[] = $generalPost1;
			}

			$generalPost2 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',2)->languageru()->first();
			if($generalPost2 == null){
				$generalPost2 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(17)->first();
			}
			if($generalPost2) $generalPosts[] = $generalPost2;

			$generalPost3 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',3)->languageru()->first();
			if($generalPost3 == null){
				$generalPost3 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(22)->first();
			}
			if($generalPost3) $generalPosts[] = $generalPost3;

			$generalPost4 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',4)->languageru()->first();
			if($generalPost4 == null){
				$generalPost4 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(33)->first();
			}
			if($generalPost4) $generalPosts[] = $generalPost4;

			$generalPost5 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',5)->languageru()->first();
			if($generalPost5 == null){
				$generalPost5 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(44)->first();
			}
			if($generalPost5) $generalPosts[] = $generalPost5;

			$generalPost6 = \Model\Post\ModelName::general($channel)->published()->having('numberRu','=',6)->languageru()->first();
			if($generalPost6 == null){
				$generalPost6 = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->orderBy('created_at','desc')->take(1)->skip(51)->first();
			}
			if($generalPost6) $generalPosts[] = $generalPost6;

			$projects = \Model\Project\ModelName::where('nameRu','<>','')->get();
			$directorPosts = \Model\Post\ModelName::where('director','=','1')->orderBy('created_at','desc')->take(3)->languageru()->get();
			$reporterPosts = \Model\Post\ModelName::where('reporter','=','1')->orderBy('created_at','desc')->take(15)->languageru()->get();

			$multimedia = Category::where('titleRu','Мультимедиа')->first();            
			$multimedia = Category::where('title','Мультимедиа')->first();
			if($multimedia){
				$multimediaPosts = \Model\Post\ModelName::where('category_id',$multimedia->id)->orderBy('created_at','desc')->take(8)->languageru()->get();    
			} else {
				$multimediaPosts = null;
			}

			//Slider Projects
			$sliderProjects = Anons::where('channel','2')->descru()->languageru()->published()->orderBy('media','asc')->get();

		}

		if($lc == 'kg'){
			$latestPosts = \Model\Post\ModelName::where('general',true)->where('live','<>','1')->published()->having('number','=','99')->where('general','=','1')->where('fbpost','<>','1')->languagekg()->take(6)->orderBy('created_at','desc')->get();
		}elseif($lc == 'ru'){
			$latestPosts = \Model\Post\ModelName::where('general',true)->where('live','<>','1')->published()->having('numberRu','=','99')->where('general','=','1')->where('fbpost','<>','1')->languageru()->take(6)->orderBy('created_at','desc')->get();
		}

		$dayVideos = array();
		$dayVideo1 = \Model\Media\ModelName::where('dayVideo','=','1')->first();
		$dayVideoRu1 = \Model\Media\ModelName::where('dayVideo','=','11')->first();
		$dayVideo2 = \Model\Media\ModelName::where('dayVideo','=','2')->first();
		$dayVideo3 = \Model\Media\ModelName::where('dayVideo','=','3')->first();
		$dayVideo4 = \Model\Media\ModelName::where('dayVideo','=','4')->first();

		if($dayVideo1 && $lc=='kg'){
			$dayVideo1 = $dayVideo1;
			$dayVideos[] = $dayVideo1;
		} elseif($dayVideoRu1 && $lc=='ru') {
			$dayVideo1 = $dayVideoRu1;
			$dayVideos[] = $dayVideoRu1;
		} else {
			$dayVideo1 = '';
		}
		if($dayVideo2){
			$dayVideo2 = $dayVideo2;
			$dayVideos[] = $dayVideo2;
		} else {
			$dayVideo2 = '';
		}
		if($dayVideo3){
			$dayVideo3 = $dayVideo3;
			$dayVideos[] = $dayVideo3;
		} else {
			$dayVideo3 = '';
		}
		if($dayVideo4){
			$dayVideo4 = $dayVideo4;
			$dayVideos[] = $dayVideo4;
		} else {
			$dayVideo4 = '';
		}

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
		$peopleReporters = \Model\PeopleReporter\ModelName::where('published','=',true)->get();

		// Photo Gallery
		$photoGalleryFirst = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('created_at','desc')->first();
		$photoGalleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('created_at','desc')->take(4)->skip(1)->get();

		$MediaCategories = \Model\MediaCategory\ModelName::orderBy('created_at','asc')->get();
		$mediaPosts = \Model\Media\ModelName::orderBy('created_at','desc')->get();

		$categoriesVideos = array();

		foreach($MediaCategories as $MediaCategory){
			$CategoryVideos = \Model\Media\ModelName::where('videoType','=',$MediaCategory->videoType)->where('published','=','1')->orderBy('created_at','desc')->take(9)->get();
			$categoriesVideos = array_add($categoriesVideos, $MediaCategory->videoType, $CategoryVideos);
		}

		$mediaLastVideos = \Model\Media\ModelName::where('published','=','1')->orderBy('created_at','desc')->take(12)->get();

		$defaultVideo = 'rjXSurFi8uQ';

		// News
		$categories = \Model\Category\ModelName::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->take(9)->get();

		$leftCategories = $middleCategories = $rightCategories = $posts = $headerPosts = array();

		foreach($categories as $key=>$category){

			if($lc == 'kg'){

				$categoryHeaderPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('created_at','desc')->take(1)->get();
				foreach($categoryHeaderPosts as $categoryHeaderPost){
					$headerPosts[] = $categoryHeaderPost;
				}
				if(count($categoryHeaderPosts) == 0 ){
					unset($categories[$key]);
				}

				$categoryPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('created_at','desc')->take(1)->skip(1)->get();
				foreach($categoryPosts as $categoryPost){
					$posts[] = $categoryPost;
				}

			} elseif($lc == 'ru') {

				$categoryHeaderPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('created_at','desc')->take(1)->get();
				foreach($categoryHeaderPosts as $categoryHeaderPost){
					$headerPosts[] = $categoryHeaderPost;
				}
				if(count($categoryHeaderPosts) == 0 ){
					unset($categories[$key]);
				}

				$categoryPosts = \Model\Post\ModelName::where('general','=','1')->where('live',false)->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('created_at','desc')->take(1)->skip(1)->get();
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

		return view('Front::home2', [

			'lc' =>$lc,

			'livePost'   => $livePost,
			'generalPosts'   => $generalPosts,

			'dayVideo1'      => $dayVideo1,
			'dayVideo2'      => $dayVideo2,
			'dayVideo3'      => $dayVideo3,
			'dayVideo4'      => $dayVideo4,
			'defaultVideo'   => $defaultVideo,
			'dayVideos'   => $dayVideos,

			'peopleReporters' => $peopleReporters,
			'photoGalleries' => $photoGalleries,
			'photoGalleryFirst' => $photoGalleryFirst,

			'MediaCategories' => $MediaCategories,
			'categoriesVideos' => $categoriesVideos,
			'mediaLastVideos' => $mediaLastVideos,
			'projects' => $projects,
			'directorPosts' => $directorPosts,
			'reporterPosts' => $reporterPosts,
			'latestPosts' => $latestPosts,
			'multimediaPosts' => $multimediaPosts,

			'headerPosts' => $headerPosts,
			'posts' => $posts,
			'categories' => $categories,
			'leftCategories'=>$leftCategories,
			'middleCategories'=>$middleCategories,
			'rightCategories'=>$rightCategories,

			'sliderProjects'=>$sliderProjects,

			'channels' => $channels,
		]);
	}

	public function Balastan()
	{
		$channel = \Model\Channel\ModelName::name('balastan')->first();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		return view('Front::channel.balastan.index', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,

			]);
	}

	public function Muzkanal()
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();

		return view('Front::channel.muzkanal.index', ['channel' => $channel]);
	}

	public function Ktr()
	{
		$channel = \Model\Channel\ModelName::name('ktr')->first();

		return view('Front::channel.ktr.index', ['channel' => $channel]);
	}

	public function Page(\Model\Page\ModelName $page)
	{
		$page->incrementViewed();

		return view('Front::page',['page' => $page]);
	}

	public function search(Request $request)
	{
		$lc = app()->getlocale();
		$searchKey = $request->input('search');

		$perPage = 18;
		$currentPage = 1;

		$tag = Tag::where('name', '=', $searchKey)->first();
		
		$programs = Project::search($searchKey)->orderBy('created_at','desc')->get();

		$categories = Category::where('general','=','1')->get();

		$leftPosts = $middlePosts = $rightPosts = array();
	 	$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

		if($lc == 'kg'){
			if($tag){
				$tagPosts = $tag->posts()->where('title','<>','')->orderBy('created_at','desc')->get();
			} else {
				$tagPosts = collect();
			}
			$namePosts = Post::search($searchKey)->where('title','<>','')->orderBy('created_at','desc')->get();

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

			$topArticles = Post::where('general','=','1')->where('live',false)->where('title','<>','')->where('created_at','>',$weekFromNow)->where('number','=','88')->orderBy('created_at','desc')->take(6)->get();
			if(count($topArticles) > 0){
				$topArticles = $topArticles;   
			}else{
				$topArticles = null;
			}

			$popArticles = Post::where('general','=','1')->where('live',false)->where('title','<>','')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->take(6)->get();
			if(count($popArticles) > 0){
				$popArticles = $popArticles;
			}else{
				$popArticles = null;
			}
		}else{
			if($tag){
				$tagPosts = $tag->posts()->where('title','<>','')->orderBy('created_at','desc')->get();
			} else {
				$tagPosts = collect();
			}
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

		  	$topArticles = Post::where('general','=','1')->where('live',false)->where('titleRu','<>','')->where('created_at','>',$weekFromNow)->where('numberRu','=','88')->orderBy('created_at','desc')->take(6)->get();
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

	  	$medias = Media::search($searchKey)->orderBy('created_at','desc')->get();

	  	$mergedMedias = collect($medias);

	  	$mergedMedias = $mergedMedias->forPage($currentPage, $perPage);
		$totalMediaPages = ceil(count($medias)/$perPage);

		return view('Front::result', [
			'posts' => $posts,
			'medias' => $mergedMedias,
			'tag' => $tag,

			'perPage' => $perPage,
			'currentPage' => $currentPage,
			'totalPostsPages' => $totalPostsPages,
			'totalMediaPages' => $totalMediaPages,

			'programs' => $programs,			
			'searchKey'=>$searchKey,
			'categories'=>$categories,

			'mergedPosts' => $mergedPosts,
			'leftPosts' => $leftPosts,
			'middlePosts' => $middlePosts,
			'rightPosts' => $rightPosts,

			'topArticles' =>$topArticles,
			'popArticles' =>$popArticles,
			]);
	}

	public function mediaPage(\Model\Media\ModelName $media)
	{
		
		/*$mediaPost = \Model\Media\ModelName::where('id','=',$media);
		dd($mediaPost);*/


		$mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
		$categories = \Model\Category\ModelName::where('general','=','1')->get();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		$mediaPop = \Model\Media\ModelName::where()->get();

		return view('Front::media.index',[
			'mediaPost' => $media,
			
			'mainBanner'   => $mainBanner,
			'categories'=>$categories,
			'backgroundMain' => $backgroundMain,

			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,
			'positionLeft'  => $this->positionLeft,

		]);
	}

	public function filterResult(Request $request)
	{
		$lc = app()->getlocale();
		$df = $request->dateFrom;
		$dt = $request->dateTo;

		$dateFrom = date('Y-m-d',strtotime($df));
		$dateTo = date('Y-m-d',strtotime($dt));

		$perPage = 10;

		$categories = \Model\Category\ModelName::where('general','=','1')->get();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

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
		
		if($lc == 'kg' AND $df != '' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->datefromkg($df)->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'kg' AND $df != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->datefromkg($df)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'kg' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'ru' AND $df != '' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->datefromru($df)->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'ru' AND $df != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->datefromru($df)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'ru' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
		}else{
			$postAllFromTo = \Model\Post\ModelName::published()->orderBy('id', 'desc')->paginate($perPage);
		}
		
		return view('Front::post.posts',[
			'perPage'=> $perPage,
			'postAll' => $postAllFromTo,
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

	public function filterResultCategory(Request $request)
	{
		$category_id = $request->category;
		$category = \Model\Category\ModelName::where('id','=',$category_id)->first();
		$lc = app()->getlocale();
		$df = $request->dateFrom;
		$dt = $request->dateTo;

		$dateFrom = date('Y-m-d',strtotime($df));
		$dateTo = date('Y-m-d',strtotime($dt));

		$perPage = 10;
		
		$categories = \Model\Category\ModelName::where('general','=','1')->get();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

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
		
		if($lc == 'kg' AND $df != '' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromkg($df)->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'kg' AND $df != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromkg($df)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'kg' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'ru' AND $df != '' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromru($df)->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'ru' AND $df != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromru($df)->orderBy('id', 'desc')->paginate($perPage);
		}elseif($lc == 'ru' AND $dt != ''){
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
		}else{
			$postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->orderBy('id', 'desc')->paginate($perPage);
		}

		return view('Front::category.index',[
			'perPage'=> $perPage,
			'category'=> $category,
			'posts' => $postAllFromTo,
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

	public function Galleries()
	{
		$lc = app()->getlocale();
		$perPage = 15;
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		$galleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('id','desc')->paginate($perPage);

		return view('Front::gallery.galleries',[
			'lc' => $lc,
			'perPage'=> $perPage,
			'backgroundMain' => $backgroundMain,
			'galleries' => $galleries,
			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,
			'positionLeft'  => $this->positionLeft,
		]);
	}

	public function Gallery(Request $request, $galleryId)
	{
		$lc = app()->getlocale();

		$gallery = \Model\PhotoParent\ModelName::where('id','=',$galleryId)->first();
		$gallery->incrementViewed();
		$images = json_decode($gallery->images);

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		return view('Front::gallery.gallery',[
			'lc' => $lc,
			'images' => $images,
			'backgroundMain' => $backgroundMain,
			'gallery' => $gallery,
			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,
			'positionLeft'  => $this->positionLeft,
		]);
	}

	public function Reporter()
	{
		$lc = app()->getlocale();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

//        $galleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('id','desc')->get();

		return view('Front::reporter.index',[
			'lc' => $lc,
			'backgroundMain' => $backgroundMain,
			'positionTop'    => $this->positionTop,
			'positionRight'  => $this->positionRight,
			'positionCenter' => $this->positionCenter,
			'positionBottom' => $this->positionBottom,
			'positionLeft'  => $this->positionLeft,
		]);
	}

	public function ReporterAdd(Request $request)
	{
		$lc = app()->getlocale();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

		$reporter = \Model\PeopleReporter\ModelName::create($request->except('images','video','q'));

		$images = $request->file('images');
		$rules = array(
			'image' => 'image'
		);

		$result = array();

		if($request->hasFile('images'))
		{
			foreach($images as $key=>$image)
			{
				$target = array('image' => $image);
				$validator = Validator::make($target, $rules);

				if ($validator->fails())
				{
					return redirect()->route('front.reporter');
				}
				else
				{
					$storage = \Storage::disk('public');
					$destinationPath = 'froala/uploads';
					$storage->makeDirectory($destinationPath);

					$filename = time().$key.'.'.$image->getClientOriginalExtension();

					Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);

					$files_array = array();
					$files_array = array_collapse([$files_array, [
						'id' => $key+1,
						'name' => $filename
					]]);

					$result = array_add($result, $key , $files_array);
					$jsonresult = json_encode($result);

					$reporter->thumbnail = $jsonresult;
					$reporter->save();
				}
			}
		}

		$video = $request->file('video');
		$video_rules = array(
			'video' => 'mimes:mimes:m4v,avi,flv,mp4,mov,3gp | max:51200'
		);

		if($request->hasFile('video')){
			$targetVideo = array(
				'video' => $video
			);
			$validator = Validator::make($targetVideo, $video_rules);

			if ($validator->fails())
			{
				return redirect()->route('front.reporter');
			}
			else
			{
				$storage = \Storage::disk('public');
				$destinationPath = 'froala/videos';
				$storage->makeDirectory($destinationPath);

				$filename = time().'.'.$video->getClientOriginalExtension();
				$video->move($destinationPath, $filename);

				$reporter->video = $filename;
				$reporter->save();
			}
		}

		return redirect()->route('front.reporter');
	}
}

