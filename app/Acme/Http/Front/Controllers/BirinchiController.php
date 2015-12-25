<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class BirinchiController extends Controller
{
    public function __construct()
    {
    }

    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();

        $generalPosts = \Model\Post\ModelName::where('birinchi','=',1)->where('general','=','1')->take(3)->orderBy('id','desc')->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('birinchi','=',1)->languagekg()->published()->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('birinchi','=',1)->languageru()->published()->orderBy('id','desc')->get();
        }
        
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $categories = \Model\Category\ModelName::all();

        return view('Front::channel.birinchi.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'generalPosts' => $generalPosts,
            'allPost' => $allPost,
            'birinchiProjects' => $birinchiProjects,
            'categories'=>$categories,
            ]);
    }

    public function allbroadcasts()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();

           return view('Front::channel.birinchi.allbroadcasts', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects
            ]);
    }
    public function about()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.about', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            ]);
    }


    public function broadcast(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();

           return view('Front::channel.birinchi.broadcast', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            ]);
    }
    public function broadcasts(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('birinchiProgram','=',$project->id)->get();

        // dd($relatedNews);

        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();


        return view('Front::channel.birinchi.broadcasts',[
                
            'project' => $project,
    //      'MediaCategories'       => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'birinchiProjects' => $birinchiProjects,                

            ]
        );
    }

    public function photos()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.photos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function broadcastsprogramm()
    {
        $channel = \Model\Channel\ModelName::where('name','=','birinchi')->first();
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

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

//        dd($programs);

        return view('Front::channel.birinchi.broadcastsprogramm', [
            'lc' => $lc,
            'currentDate' => $currentDate,
            'currentTime' => $currentTime,
            'backgroundMain' => $backgroundMain,
            'schedules' => $schedules,
            'programs' => $programs,
            'week' => $week,
        ]);

    }

    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',$project->id)->get();

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();


        return view('Front::channel.birinchi.project',[
                
            'project' => $project,
    //                'MediaCategories'       => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'birinchiProjects' => $birinchiProjects,                

            ]
        );
    }

}
