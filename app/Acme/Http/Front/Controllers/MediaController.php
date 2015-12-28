<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
        $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
        $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function mediaIndex(Request $request) // list of videos
    {
        $MediaCategories = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $categoriesVideos = array();
        $topCategoriesVideos = array();

        foreach($MediaCategories as $MediaCategory){

            $CategoryVideos = \Model\Media\ModelName::where('videoType','=',$MediaCategory->videoType)->orderBy('id','desc')->take(9)->get();
            $TopCategoryVideos = \Model\Media\ModelName::where('videoType','=',$MediaCategory->videoType)->orderBy('viewed','desc')->take(9)->get();

            $categoriesVideos = array_add($categoriesVideos, $MediaCategory->videoType, $CategoryVideos);
            $topCategoriesVideos = array_add($topCategoriesVideos, $MediaCategory->videoType, $TopCategoryVideos);
        }
//        dd($topCategoriesVideos);

        $mediaLastVideos = \Model\Media\ModelName::orderBy('id','desc')->take(9)->get();

        $mediaPops = \Model\Media\ModelName::orderBy('viewed','desc')->take(9)->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('id','desc')->get();

        return view('Front::media.index',[
            'mediaAll' => $mediaAll,
            'mediaLastVideos' => $mediaLastVideos,
            'MediaCategories' => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'mediaCategories'=>$MediaCategories,
            'backgroundMain' => $backgroundMain,
            'categoriesVideos' => $categoriesVideos,
            'topCategoriesVideos' => $topCategoriesVideos,
            'mediaPops' => $mediaPops
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

        if($lc == 'kg'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result){
                $videoProject = $result->getName();
            }else{
                $videoProject = '';
            }
            
            
            $result1 = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();    
            $getVideoTypeName = $result1->getName();

            $relatedVideos = \Model\Media\ModelName::where('name','<>','')->where('program','=',$projectId)->get();

        }elseif($lc == 'ru'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result != null){
                $videoProject = $result->getNameRu();    
            }else{
                $videoProject = '';
            }

            $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
            $getVideoTypeName = $result->getNameRu();


            $relatedVideos = \Model\Media\ModelName::where('nameRu','<>','')->where('program','=',$projectId)->get();

        }

        $MediaCategories = \Model\MediaCategory\ModelName::get();

        $projectList = \Model\Project\ModelName::get();

        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        
        $categories = \Model\Category\ModelName::all();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.video',[
            'video' => $video,
            'videoName' => $videoName,
            'videoProject' => $videoProject,
            'getVideoTypeName'=> $getVideoTypeName,
            'relatedVideos' => $relatedVideos,

            'mediaAll' => $mediaAll,
            'MediaCategories' => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('id','desc')->get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedVideos = \Model\Media\ModelName::where('program','=',$project->id)->get();


        return view('Front::media.project',[
                
                'project' => $project,
//                'MediaCategories'       => $MediaCategories,

                'mainBanner'   => $mainBanner,
                'categories'=>$categories,
                'projectList' => $projectList,
                'backgroundMain' => $backgroundMain,
                'relatedVideos' => $relatedVideos,

            ]
        );
    }

    public function allVideos()
    {
        $projectList = \Model\Project\ModelName::where('extracolumn','=','1')->orderBy('id','desc')->get();
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $perPage = 15;

        $allVideos = \Model\Media\ModelName::where('published','=',true)->orderBy('id','desc')->paginate($perPage);

        return view('Front::media.all',[
            'perPage'=> $perPage,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,
            ]
        );
    }

}

