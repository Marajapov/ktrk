<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct()
    {
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

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $projectList = \Model\Project\ModelName::get();

        return view('Front::media.index',[
            'mediaAll' => $mediaAll,
            'MediaCategories' => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function video($media)
    {
        $lc = app()->getlocale();
        $video = \Model\Media\ModelName::where('id','=',$media)->first(); // full video array
        
        $projectId = $video->program; // 0

        $videoType = $video->videoType; // serials

        if($lc == 'kg'){
            if($projectId != 0)
            {
                $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
                $videoProject = $result->getName();
                
                $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
                $getVideoTypeName = $result->getName();

            }else
            {
                //$result = \Model\Project\ModelName::where('id','=',$projectId)->first();
                $videoProject = 'abakan';
                $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
                $getVideoTypeName = $result->getName();
            }            
            
            $relatedVideos = \Model\Media\ModelName::where('name','<>','')->where('program','=',$projectId)->get();

        }elseif($lc == 'ru'){
            if($projectId != 0){
                $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
                $videoProject = $result->getName();
            
                $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
                $getVideoTypeName = $result->getNameRu();

                if($getVideoTypeName == null){
                    $getVideoTypeName = '';
                }
            }else{
                $videoProject = 'abakan';
                $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
                $getVideoTypeName = $result->getName();
            }
            

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
        $projectList = \Model\Project\ModelName::get();
        $MediaCategories = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.project',[
                
                'project' => $project,
                'MediaCategories'       => $MediaCategories,

                'mainBanner'   => $mainBanner,
                'categories'=>$categories,
                'projectList' => $projectList,
                'backgroundMain' => $backgroundMain,

            ]
        );
    }

}

