<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
use \Model\WeekMedias\ModelName as WeekMedias;
use \Model\Media\ModelName as Media;
use \Model\Project\ModelName as Project;

class MuzkanalController extends Controller
{
	public function __construct()
	{
		$this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
		$this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
		$this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
		$this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();
	}

	public function Home(Request $request)
	{
		// counter to nulling
		$dayofweek = date('w', strtotime(date('Y-m-d')));
		$today = date('Y-m-d');
		$from_date = date('Y-m-d', strtotime(' -7 day'));

		if($dayofweek == 1){
			$table = \Model\Media\ModelName::where('hitnumber','<>',0)->get();
			foreach ($table as $key => $row) {
				$updateTable = WeekMedias::create();
				$updateTable->media_id = $row->id;
				$updateTable->media_name = $row->name;
				$updateTable->media_url = $row->url;
				$updateTable->like_count = $row->like;
				$updateTable->from_date = $today;
				$updateTable->to_date = $from_date;
				$updateTable->save();
				$row->like = 0;
				$row->unlike = 0;
				$row->save();
			} // end foreach

		}
		
		// end
		// start
		$visitor = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set("Asia/Bishkek");
		$today = date('d.m.Y');
		$date1 = date('d.m.Y', strtotime('12.09.16'));
		$date2 = date('d.m.Y', strtotime('12.09.18'));
		if(($today >= $date1) && ($today <= $date2)){
			$array_ip_1 = array('217.29','185.88','185.66','185.54','185.53','185.53','185.48','185.29','185.20','185.91.132','212.97','212.42','195.54','195.38','109.71','95.215','77.235','46.251','46.235','46.226','37.218','31.192','31.186','83.229','85.113','85.115','94.143','93.171','93.170','93.170','92.245','91.229','91.229','91.228','91.213','91.207','91.205','91.192','89.237','213.14');

			$array_ip_2 = array('178.21','178.21','176.12','176.12','158.18','158.18','109.20','185.11','185.13','213.14','212.24','212.11','195.21','195.11','194.17','194.15','194.15','193.10','185.13');
			
			$array_ip_3 = array('212.2.','5.57.','127.1.');
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
				$flag = 0;
			}
			session(['flag3'=> $flag]);
		} 

		$channel = \Model\Channel\ModelName::where('name','=','muzkanal')->first();
		$lc = app()->getlocale();
		
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();
		$MediaPop1 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->skip('0')->take('5')->get();
		$MediaPop2 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->skip('5')->take('5')->get();
		$MediaPop3 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->skip('10')->take('5')->get();
		$lastVideos = Media::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->take(6)->get();
		
		$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
		$MediaTop1 = \Model\Media\ModelName::where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')->where('created_at','>',$weekFromNow)-> take(8)->get();
		$MediaTop2 = \Model\Media\ModelName::where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')->where('created_at','>',$weekFromNow)->skip(8)->take(6)->get();

		// Projects
		$projectVideos = Media::where('muzkanal',true)->where('program','>','0')->orderBy('created_at','desc')->take(8)->get();
		foreach ($projectVideos as $key => $row) {
			$project = \Model\Project\ModelName::where('id',$row->program)->first();
			if($project->extracolumn){
				$projectVideos->forget($key);   
			}
		}
		// dd($projectVideos);

		// Concert
		$Concert = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('concert','=', 1)->orderBy('id', 'desc')->take(8)->get();

		 // Photo Gallery
		$photoGalleries = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

		//Anons
		$anons1 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons1', '=', 1)->orderBy('id', 'desc')->first();
		$anons2 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons2', '=', 1)->orderBy('id', 'desc')->first();
		$anons3 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons3', '=', 1)->orderBy('id', 'desc')->first();

		$anonsslide = \Model\Anons\ModelName::where('channel','=','3')->where('published','=','1')->where('musictop','=','1')->orderBy('id','=','desc')->get();
		
		//Promo
		$promo = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('promo', '=', 1)->orderBy('id', 'desc')->first();

		$hitNumbers = \Model\Media\ModelName::where('hitnumber','>=','1')->orderBy('like','desc')->get();

		date_default_timezone_set('Asia/Bishkek');
		$now = date("d-m-Y H:i");
		$currentDate = date('d-m-Y');
		$currentTime = date('H:i');
		$weekDay = date('N', strtotime($now));

		if($channel){
			$schedule = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->where('date','=',$currentDate)->first();

			if(!empty($schedule)){
				$program = json_decode($schedule->program);
				// dd($program);
				$programNew = array_add($program, 'date', $schedule->date);
			}else{
				$program = '';
			}
		}
		return view('Front::channel.muzkanal.indexTest', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'MediaPop1' => $MediaPop1,
			'MediaPop2' => $MediaPop2,
			'MediaPop3' => $MediaPop3,

			'MediaTop1' => $MediaTop1,
			'MediaTop2' => $MediaTop2,
			'Concert' => $Concert,

			'photoGalleries' => $photoGalleries,
			'anons1' => $anons1,
			'anons2' => $anons2,
			'anons3' => $anons3,
			'promo' => $promo,
			'hitNumbers' => $hitNumbers,
			'anonsslide' => $anonsslide,

			'lc' => $lc,            
			'currentDate' => $currentDate,
			'currentTime' => $currentTime,
			'program' => $program,

			'lastVideos' => $lastVideos,
			'projectVideos' => $projectVideos,
			]);
	}

	public function Posts()
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		return view('Front::channel.muzkanal.posts', ['channel' => $channel]);
	}

	public function radio()
	{
		return view('Front::channel.muzkanal.radio');

	}

	public function about()
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		$anons1 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons1', '=', 1)->first();
		$anons2 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons2', '=', 1)->first();
		$anons3 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons3', '=', 1)->first();
	  

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		return view('Front::channel.muzkanal.about', [
			'channel' => $channel,
			'anons1' => $anons1,
			'anons2' => $anons2,
			'anons3' => $anons3,
			'backgroundMain' => $backgroundMain,
			]);
	}

	public function video(Request $request, Media $media)
	{
		$lc = app()->getlocale();
		$media->incrementViewed();

		$channel = \Model\Channel\ModelName::where('name','=','muzkanal')->first();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		$weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));
		$MediaTop1 = \Model\Media\ModelName::where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')-> take(6)->get();
	   

		//Related Videos
		$videoType = $media->videoType; 
		$relatedmuzkanalVideos = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('videoType','=', $videoType)->take(8)->get();

		if($media->program){
			$relatedMedias = Media::where('muzkanal',true)->where('program',$media->program)->where('id','<>',$media->id)->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('created_at','desc')->take(8)->get();
		} else {
			$relatedMedias = array();
			$mediaTags = $media->tags;
			if($mediaTags){
				foreach ($mediaTags as $key => $tag) {
					$mediaTagPosts = $tag->medias()->where('muzkanal',true)->where('id','<>',$media->id)->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('created_at','desc')->get();
					$relatedMedias = $mediaTagPosts->merge($relatedMedias);
				}
				$relatedMedias = $relatedMedias->sortByDesc('created_at')->take(8);
			}
		}
		

		return view('Front::channel.muzkanal.video', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'muzkanalvideo' => $media,
			'MediaTop1' => $MediaTop1,
			'relatedmuzkanalVideos' => $relatedmuzkanalVideos,
			'relatedMedias' => $relatedMedias,

			'lc' => $lc,            
		]);
	}

	public function videos()
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();
		$perPage = 16;

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();
		
		//New clips
		$MediaNew = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->paginate($perPage);        

		//Top clips
		$MediaTop = \Model\Media\ModelName::where('muzkanal','=','1')->
		whereRaw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 14 DAY) AND NOW()')->
		where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')
		->where('muzkanalanons3','<>','1')->where('promo','<>','1')
		->orderBy('viewed','desc')->paginate($perPage);

		//Exclusive 
		$MediaLive = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('exclusive','=', 1)->orderBy('id', 'desc')->paginate($perPage);  
		$Concert = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('concert','=', 1)->orderBy('id', 'desc')->paginate($perPage); 

		$musicProjects = Project::where('muzkanal', true)->where('published', true)->get();
	 
		return view('Front::channel.muzkanal.videos', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'MediaNew' => $MediaNew,
			'MediaTop' => $MediaTop,
			'MediaLive' => $MediaLive,
			'Concert' => $Concert,
			'perPage' => $perPage,
			'musicProjects' => $musicProjects,
			]);
	}

	public function project(Project $project)
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();
		$perPage = 16;

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();
		
		//New clips
		$medias = Media::where('muzkanal',true)
					   ->where('program',$project->id)
					   ->where('muzkanalanons1','<>','1')
					   ->where('muzkanalanons2','<>','1')
					   ->where('muzkanalanons3','<>','1')
					   ->where('promo','<>','1')
					   ->orderBy('created_at','desc')
					   ->paginate($perPage);
	 
		return view('Front::channel.muzkanal.project', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'perPage' => $perPage,
			'project' => $project,
			'medias' => $medias,
		]);
	}

  public function hitparad()
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		$hitNumbers = \Model\Media\ModelName::where('hitnumber','>=','1')->orderBy('like','desc')->get();

		//Top clips
		$MediaTop1 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')-> take(6)->get();
		$MediaTop2 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')->skip('6')->take(6)->get();

		//Promo
		$promo = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('promo', '=', 1)->first();

		return view('Front::channel.muzkanal.hitparad', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'hitNumbers' => $hitNumbers,
			'MediaTop1' => $MediaTop1,
			'MediaTop2' => $MediaTop2,
			'promo' => $promo,
			]);
	}

  public function allphotos()
	{
		$channel = \Model\Channel\ModelName::name('muzkanal')->first();
		$perPage = 12;

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();   


		// Photo Gallery
		$photoGalleries = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('published','=',true)->orderBy('created_at','desc')->paginate($perPage);   

		return view('Front::channel.muzkanal.allphotos', [
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'photoGalleries' => $photoGalleries,
			'perPage' => $perPage,

			]);
	}



		// For photos page One gallery 
	 public function Gallery(Request $request, $galleryId)
	{

		$gallery = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('id','=',$galleryId)->first();
		$gallery->incrementViewed();
		$images = json_decode($gallery->images);

		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		return view('Front::channel.muzkanal.photos',[
			'images' => $images,
			'backgroundMain' => $backgroundMain,
			'gallery' => $gallery,
			]);
	}

	public function teleprogram(Request $request)
	{
		$channel = \Model\Channel\ModelName::where('name','=','muzkanal')->first();
		$lc = app()->getlocale();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

		date_default_timezone_set('Asia/Bishkek');
		$now = date("d-m-Y H:i");
		$currentDate = date('d-m-Y');
		$currentTime = date('H:i');
		$weekDay = date('N', strtotime($now));

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
				foreach($schedules as $schedule){
					$scheduleWeek = date('N',strtotime($schedule->date));
					for($j=0; $j<count($week);$j++){;
						if(strtotime($week[$j]) == strtotime($schedule->date)){
							$program = json_decode($schedule->program);
							$programNew = array_add($program, 'date', $schedule->date);
							$programs[] =$programNew;
						}
					}
				}
				$programs = array_reverse($programs);
			}
		}



		return view('Front::channel.muzkanal.teleprogram', [
			'lc' => $lc,
			'currentDate' => $currentDate,
			'currentTime' => $currentTime,
			'backgroundMain' => $backgroundMain,
			'schedules' => $schedules,
			'programs' => $programs,
			'week' => $week,
		]);
	}

	public function popular()
	{
	$channel = \Model\Channel\ModelName::name('muzkanal')->first();
	$perPage = 16;

	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

	//New clips
	$MediaNew = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->paginate($perPage);

	//Top clips
	$MediaTop = \Model\Media\ModelName::where('muzkanal','=','1')->
	whereRaw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 10 DAY) AND NOW()')->
	where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')
	  ->where('muzkanalanons3','<>','1')->where('promo','<>','1')
	  ->orderBy('viewed','desc')->paginate($perPage);

	//Exclusive
	$MediaLive = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('exclusive','=', 1)->orderBy('id', 'desc')->paginate($perPage);
	$Concert = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('concert','=', 1)->orderBy('id', 'desc')->paginate($perPage);

	return view('Front::channel.muzkanal.popular', [
	  'channel' => $channel,
	  'backgroundMain' => $backgroundMain,
	  'MediaNew' => $MediaNew,
	  'MediaTop' => $MediaTop,
	  'MediaLive' => $MediaLive,
	  'Concert' => $Concert,
	  'perPage' => $perPage,
	]);
  }

  public function newvideos()
  {
	$channel = \Model\Channel\ModelName::name('muzkanal')->first();
	$perPage = 16;

	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

	//New clips
	$MediaNew = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->paginate($perPage);

	//Top clips
	$MediaTop = \Model\Media\ModelName::where('muzkanal','=','1')->
	whereRaw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 10 DAY) AND NOW()')->
	where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')
	  ->where('muzkanalanons3','<>','1')->where('promo','<>','1')
	  ->orderBy('viewed','desc')->paginate($perPage);

	//Exclusive
	$MediaLive = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('exclusive','=', 1)->orderBy('id', 'desc')->paginate($perPage);
	$Concert = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('concert','=', 1)->orderBy('id', 'desc')->paginate($perPage);

	return view('Front::channel.muzkanal.newvideos', [
	  'channel' => $channel,
	  'backgroundMain' => $backgroundMain,
	  'MediaNew' => $MediaNew,
	  'MediaTop' => $MediaTop,
	  'MediaLive' => $MediaLive,
	  'Concert' => $Concert,
	  'perPage' => $perPage,
	]);
  }

  public function exclusive()
  {
	$channel = \Model\Channel\ModelName::name('muzkanal')->first();
	$perPage = 16;

	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

	//New clips
	$MediaNew = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->paginate($perPage);

	//Top clips
	$MediaTop = \Model\Media\ModelName::where('muzkanal','=','1')->
	whereRaw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 10 DAY) AND NOW()')->
	where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')
	  ->where('muzkanalanons3','<>','1')->where('promo','<>','1')
	  ->orderBy('viewed','desc')->paginate($perPage);

	//Exclusive
	$MediaLive = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('exclusive','=', 1)->orderBy('id', 'desc')->paginate($perPage);
	$Concert = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('concert','=', 1)->orderBy('id', 'desc')->paginate($perPage);

	return view('Front::channel.muzkanal.exclusive', [
	  'channel' => $channel,
	  'backgroundMain' => $backgroundMain,
	  'MediaNew' => $MediaNew,
	  'MediaTop' => $MediaTop,
	  'MediaLive' => $MediaLive,
	  'Concert' => $Concert,
	  'perPage' => $perPage,
	]);
  }

  public function concert()
  {
	$channel = \Model\Channel\ModelName::name('muzkanal')->first();
	$perPage = 16;

	$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();

	//New clips
	$MediaNew = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->paginate($perPage);

	//Top clips
	$MediaTop = \Model\Media\ModelName::where('muzkanal','=','1')->
	whereRaw('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 10 DAY) AND NOW()')->
	where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')
	  ->where('muzkanalanons3','<>','1')->where('promo','<>','1')
	  ->orderBy('viewed','desc')->paginate($perPage);

	//Exclusive
	$MediaLive = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('exclusive','=', 1)->orderBy('id', 'desc')->paginate($perPage);
	$Concert = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('concert','=', 1)->orderBy('id', 'desc')->paginate($perPage);

	return view('Front::channel.muzkanal.concert', [
	  'channel' => $channel,
	  'backgroundMain' => $backgroundMain,
	  'MediaNew' => $MediaNew,
	  'MediaTop' => $MediaTop,
	  'MediaLive' => $MediaLive,
	  'Concert' => $Concert,
	  'perPage' => $perPage,
	]);
  }

  public function like(Request $request, $like)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$today = date('Y-m-d');
		$id = $like;
		$one = 1;

		// counter to nulling
		$date = date('Y-m-d');
		$sunday = strtotime( "next monday");
		$deadDate = date('Y-m-d',$sunday);
		$row = \Model\Media\ModelName::where('id','=',$id)->first();
		// end

		$row = \Model\Media\ModelName::where('id','=',$id)->first();
		$rowtoday = $row->today;
		$rtoday = date('Y-m-d',strtotime($rowtoday));


		
		if(($rtoday == $today) && ($row->ip == $ip))
		{
			return redirect()->route('muzkanal.home');   
		}else{
			$row->like +=1;
			$row->ip = $ip;
			$row->today= $today;
			$row->save();
			return redirect()->route('muzkanal.home');
		}
	}

  public function likehp(Request $request, $likehp)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$today = date('Y-m-d');
		$id = $likehp;
		$one = 1;

		$row = \Model\Media\ModelName::where('id','=',$id)->first();
		$rowtoday = $row->today;
		$rtoday = date('Y-m-d',strtotime($rowtoday));
		
		if(($rtoday == $today) && ($row->ip == $ip))
		{
			return redirect()->route('muzkanal.hitparad');   
		}else{
			$row->like +=1;
			$row->ip = $ip;
			$row->today= $today;
			$row->save();
			return redirect()->route('muzkanal.hitparad');
		}
	}


	public function unlike(Request $request, $unlike)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$today = date('Y-m-d');
		$id = $unlike;
		$one = 1;
		$row = \Model\Media\ModelName::where('id','=',$id)->first();
		$rowtoday = $row->today;
		$rtoday = date('Y-m-d',strtotime($rowtoday));
		
		if(($today == $rtoday) && ($ip ==$row->ip))
		{
			return redirect()->route('muzkanal.home');   
		}else{
			$row->like +=1;
			$row->ip = $ip;
			$row->today= $today;
			$row->save();
			return redirect()->route('muzkanal.home');
		}

		$row->unlike +=1;
		$row->save();
		return redirect()->route('muzkanal.home');
	}

	public function weekMediaSearch(Request $request)
	{
		$perPage = 10;
		$hitNumbers = WeekMedias::orderBy('like_count','desc')->paginate($perPage);

		$channel = \Model\Channel\ModelName::name('muzkanal')->first();
		$backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','3')->first();
		//Top clips
		$MediaTop1 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')-> take(6)->get();
		$MediaTop2 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')->skip('6')->take(6)->get();

		//Promo
		$promo = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('promo', '=', 1)->first();

		return view('Front::channel.muzkanal.week', [
			'perPage'=> $perPage,
			'channel' => $channel,
			'backgroundMain' => $backgroundMain,
			'hitNumbers' => $hitNumbers,
			'MediaTop1' => $MediaTop1,
			'MediaTop2' => $MediaTop2,
			'promo' => $promo,
			]);

	}
}
