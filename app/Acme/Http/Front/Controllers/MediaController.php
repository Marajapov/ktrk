<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use View;

use \Model\MediaCategory\ModelName as MediaCategory;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;
use \Model\Media\ModelName as Media;

class MediaController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;

    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
        $this->positionleft = \Model\Banner\ModelName::where('positionLeft','=','1')->first();
        $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
        $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();

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

    public function mediaIndex(Request $request) // list of videos
    {
        $MediaCategories = \Model\MediaCategory\ModelName::where('published',true)->get();
        $mediaAll = \Model\Media\ModelName::get();

        $categoriesVideos = array();
        $topCategoriesVideos = array();

        foreach($MediaCategories as $MediaCategory){

            $CategoryVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=',$MediaCategory->videoType)->orderBy('id','desc')->take(9)->get();
            $TopCategoryVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=',$MediaCategory->videoType)->orderBy('viewed','desc')->take(9)->get();

            $categoriesVideos = array_add($categoriesVideos, $MediaCategory->videoType, $CategoryVideos);
            $topCategoriesVideos = array_add($topCategoriesVideos, $MediaCategory->videoType, $TopCategoryVideos);
        }

        $mediaLastVideos = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->take(9)->get();

        $mediaPops = \Model\Media\ModelName::where('published','=','1')->orderBy('viewed','desc')->take(9)->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();


        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }

        $anons = \Model\Anons\ModelName::where('channel','=','2')->where('description','')->where('descriptionRu','')->where('published','=','1')->get();

        return view('Front::media.index',[
            'mediaAll' => $mediaAll,
            'anons' => $anons,
            'mediaLastVideos' => $mediaLastVideos,
            'MediaCategories' => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'mediaCategories'=>$MediaCategories,
            'backgroundMain' => $backgroundMain,
            'categoriesVideos' => $categoriesVideos,
            'topCategoriesVideos' => $topCategoriesVideos,
            'mediaPops' => $mediaPops,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
            'lc' => $lc
            ]);
    }

    public function mediaIndexTest(Request $request)
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        $MediaCategories = \Model\MediaCategory\ModelName::where('published',true)->get();
        $mediaAll = \Model\Media\ModelName::get();

        $categoriesVideos = array();
        $topCategoriesVideos = array();

        foreach($MediaCategories as $MediaCategory){

            $CategoryVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=',$MediaCategory->videoType)->orderBy('id','desc')->take(9)->get();
            $TopCategoryVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=',$MediaCategory->videoType)->orderBy('viewed','desc')->take(9)->get();

            $categoriesVideos = array_add($categoriesVideos, $MediaCategory->videoType, $CategoryVideos);
            $topCategoriesVideos = array_add($topCategoriesVideos, $MediaCategory->videoType, $TopCategoryVideos);
        }

        $mediaLastVideos = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->take(12)->get();

        $mediaPops = \Model\Media\ModelName::where('published','=','1')->orderBy('viewed','desc')->take(9)->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();


        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }

        $anons = \Model\Anons\ModelName::where('channel','=','2')->where('published','=','1')->get();

        return view('Front::media.indexTest',[
            'mediaAll' => $mediaAll,
            'anons' => $anons,
            'mediaLastVideos' => $mediaLastVideos,
            'MediaCategories' => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'mediaCategories'=>$MediaCategories,
            'backgroundMain' => $backgroundMain,
            'categoriesVideos' => $categoriesVideos,
            'topCategoriesVideos' => $topCategoriesVideos,
            'mediaPops' => $mediaPops,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
            'lc' => $lc
            ]);
    }

    public function video($media)
    {
        $lc = app()->getlocale();

        $video = \Model\Media\ModelName::where('id','=',$media)->first(); // full video array

        $video->incrementViewed();

        $projectId = $video->program; // 0

        $videoType = $video->videoType; // serials
        $videoName = $video->name;

        $MediaCategory = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->where('published',true)->first();

        if($lc == 'kg'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result){
                $videoProject = $result->getName();
            }else{
                $videoProject = '';
            }
            
            
            $result1 = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->where('published',true)->first();
            $getVideoTypeName = $result1->getName();

            if($projectId > 0){
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } elseif($projectId  == 0) {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }


        }elseif($lc == 'ru'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result != null){
                $videoProject = $result->getNameRu();    
            }else{
                $videoProject = '';
            }

            $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->where('published',true)->first();
            $getVideoTypeName = $result->getNameRu();

            if($projectId > 0){
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } else {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }

        }

        $MediaCategories = \Model\MediaCategory\ModelName::where('published',true)->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }

        $mediaAll = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::media.video',[
            'video' => $video,
            'videoName' => $videoName,
            'videoProject' => $videoProject,
            'getVideoTypeName'=> $getVideoTypeName,
            'relatedVideos' => $relatedVideos,

            'mediaAll' => $mediaAll,
            'MediaCategories' => $MediaCategories,
            'MediaCategory' => $MediaCategory,

            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,

            'lc' => $lc
        ]);
    }

    public function videoTest (Media $video) {
        $lc = app()->getlocale();

        $video->incrementViewed();

        $projectId = $video->program; // 0

        $videoType = $video->videoType; // serials
        $videoName = $video->name;

        $MediaCategory = MediaCategory::where('videoType','=',$videoType)->where('published',true)->first();

        if($lc == 'kg'){
            $result = Project::where('id','=',$projectId)->first();
            if($result){
                $videoProject = $result->getName();
            }else{
                $videoProject = '';
            }            
            
            $result1 = MediaCategory::where('videoType','=',$videoType)->where('published',true)->first();
            $getVideoTypeName = $result1->getName();           


        }elseif($lc == 'ru'){
            $result = Project::where('id','=',$projectId)->first();
            if($result != null){
                $videoProject = $result->getNameRu();    
            }else{
                $videoProject = '';
            }

            $result = MediaCategory::where('videoType','=',$videoType)->where('published',true)->first();
            $getVideoTypeName = $result->getNameRu();

        }

        if($projectId > 0){
            $relatedVideos = Media::where('published','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('created_at','desc')->take(4)->get();
        } elseif($projectId  == 0) {
            $relatedVideos = Media::where('published','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('created_at','desc')->take(4)->get();
        }

        $MediaCategories = MediaCategory::where('published',true)->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = Project::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = Project::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }

        $mediaAll = Media::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::media.videoTest',[
            'video' => $video,
            'videoName' => $videoName,
            'videoProject' => $videoProject,
            'getVideoTypeName'=> $getVideoTypeName,
            'relatedVideos' => $relatedVideos,

            'mediaAll' => $mediaAll,
            'MediaCategories' => $MediaCategories,
            'MediaCategory' => $MediaCategory,

            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,

            'lc' => $lc
        ]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('program','=',$project->id)->orderBy('id','desc')->get();


        return view('Front::media.project',[
                
                'project' => $project,

                'mainBanner'   => $mainBanner,
                'projectList' => $projectList,
                'backgroundMain' => $backgroundMain,
                'relatedVideos' => $relatedVideos,

                'positionTop'    => $this->positionTop,
                'positionRight'  => $this->positionRight,
                'positionCenter' => $this->positionCenter,
                'positionBottom' => $this->positionBottom,
                'positionLeft' => $this->positionLeft,

                'lc' => $lc

            ]
        );
    }

    public function allVideos()
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
        $perPage = 15;

        $allVideos = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->paginate($perPage);

        return view('Front::media.all',[
            'perPage'=> $perPage,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,

            'lc' => $lc
        ]);
    }

    public function categoryVideos($mediaCategory)
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('nameRu','asc')->get();
        }
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();
        $perPage = 15;

        $allVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=',$mediaCategory->videoType)->orderBy('id','desc')->paginate($perPage);

        return view('Front::media.category',[
            'perPage'=> $perPage,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,
            'mediaCategory' => $mediaCategory,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,

            'lc' => $lc
        ]);
    }

}

