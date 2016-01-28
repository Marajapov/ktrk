<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class BirinchiController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $lc = app()->getlocale();
        $posts = array();

        $categories = \Model\Category\ModelName::where('birinchi','=','1')->where('published','=','1')->where('orderBirinchi','<>','0')->orderBy('orderBirinchi','asc')->get();

        if($lc == 'kg'){
            $generalPosts = \Model\Post\ModelName::where('birinchi','=',1)->where('general','=','1')->languagekg()->take(3)->orderBy('id','desc')->get();
            $lentaNews = \Model\Post\ModelName::where('birinchi','=',1)->languagekg()->take(6)->orderBy('id','desc')->get();

            foreach($categories as $category){
                $categoryPosts = \Model\Post\ModelName::where('birinchi','=','1')->where('category_id','=',$category->id)->where('published','=','1')->where('title','<>','')->orderBy('id','desc')->take(3)->get();
                foreach($categoryPosts as $categoryPost){
                    $posts[] = $categoryPost;
                }
            }

            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();

        }else{
            $generalPosts = \Model\Post\ModelName::where('birinchi','=',1)->where('general','=','1')->languageru()->take(3)->orderBy('id','desc')->get();
            $lentaNews = \Model\Post\ModelName::where('birinchi','=',1)->languageru()->take(6)->orderBy('id','desc')->get();


            foreach($categories as $category){
                $categoryPosts = \Model\Post\ModelName::where('birinchi','=','1')->where('category_id','=',$category->id)->where('published','=','1')->where('titleRu','<>','')->orderBy('id','desc')->take(3)->get();
                foreach($categoryPosts as $categoryPost){
                    $posts[] = $categoryPost;
                }
            }

            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }

        $topCategories = \Model\Category\ModelName::where('birinchi','=','1')->where('published','=','1')->where('orderBirinchi','<>','0')->orderBy('orderBirinchi','asc')->take(4)->get();
        $bottomCategories = \Model\Category\ModelName::where('birinchi','=','1')->where('published','=','1')->where('orderBirinchi','<>','0')->orderBy('orderBirinchi','asc')->take(4)->skip(4)->get();

        $photoGalleries = \Model\PhotoParent\ModelName::where('birinchi','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.birinchi.index', [
            'channel' => $channel,
            'photoGalleries' => $photoGalleries,
            'backgroundMain' => $backgroundMain,

            'generalPosts' => $generalPosts,
            'lentaNews' => $lentaNews,
            'birinchiProjects' => $birinchiProjects,

            'posts' => $posts,
            'topCategories' => $topCategories,
            'bottomCategories' => $bottomCategories
        ]);
    }

    public function allbroadcasts()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }

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
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }

           return view('Front::channel.birinchi.about', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            ]);
    }

    public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('birinchi','=',1)->where('birinchiProgram','<>','1')->languagekg()->take(10)->skip(0)->published()->orderBy('id','desc')->get();    
            foreach ($allPost as $key => $value) {
                $category = \Model\Category\ModelName::where('id','=',$value->category_id)->where('titleRu','<>','')->first();
                $categories[] = $category;
                
            }
            
        }else{
            $allPost = \Model\Post\ModelName::where('birinchi','=',1)->where('birinchiProgram','<>','1')->languageru()->take(10)->skip(0)->published()->orderBy('id','desc')->get();
            foreach ($allPost as $key => $value) {
                $category = \Model\Category\ModelName::where('id','=',$value->category_id)->where('titleRu','<>','')->first();
                $categories[] = $category;
                
            }
        }

           return view('Front::channel.birinchi.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            'categories'=>$categories,            
            ]);
    }

        public function allnews()
    {
        
        $channel = \Model\Channel\ModelName::name('birinchi')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $perPage = 10;
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('birinchi','=',1)->where('title','<>','')->published()->orderBy('id','desc')->paginate($perPage);    
        }else{
            $postAll = \Model\Post\ModelName::where('birinchi','=',1)->where('titleRu','<>','')->published()->orderBy('id','desc')->paginate($perPage);
        }

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }
        $categories = \Model\Category\ModelName::all();

        return view('Front::channel.birinchi.allnews', [
            'perPage' => $perPage,
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'postAll' => $postAll,
            'birinchiProjects' => $birinchiProjects,
            'categories'=>$categories,


            ]);
    }


    public function broadcast(\Model\Post\ModelName $post)
    {
        $lc = app()->getlocale();
        if($lc == 'kg' && ($post->title != '')){          
        }elseif($lc == 'ru' && ($post->titleRu != '')){        
        }else{
            return redirect()->route('birinchi.home');
        }
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }

           return view('Front::channel.birinchi.broadcast', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            ]);
    }
    public function broadcasts(\Model\Project\ModelName $project)
    {
        $lc = app()->getlocale();
        if($lc == 'kg' && ($project->name != '')){         
        }elseif($lc == 'ru' && ($project->nameRu != '')){           
        }else{
            return redirect()->route('birinchi.home');
        }

        $projectList = \Model\Project\ModelName::get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('birinchiProgram','=',$project->id)->get();

        // dd($relatedNews);

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }



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

        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();

           return view('Front::channel.birinchi.photos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            ]);
    }

    public function broadcastsprogramm()
    {
        $channel = \Model\Channel\ModelName::where('name','=','birinchi')->first();
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }

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
            'birinchiProjects' => $birinchiProjects,
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

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }


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

    public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('birinchi','=','1')->orderBy('id', 'desc')->paginate($perPage);        
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }
        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('birinchi','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();        
        return view('Front::channel.birinchi.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,
            'birinchiProjects' => $birinchiProjects,  

            ]);
    }

    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('birinchi','=','1')->where('id','=',$galleryId)->first();
        if($gallery != null){

        $images = json_decode($gallery->images);
    }else{
        $images = null;
    }
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.birinchi.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'birinchiProjects' => $birinchiProjects,
            ]);
    }

}
