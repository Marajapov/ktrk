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

        return view('Front::media.index',[
            'mediaAll' => $mediaAll,
            'MediaCategories'       => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function mediaRtype($rtype) // list of videos rtype
    {
        $mediaAll = \Model\Media\ModelName::where('videoType','=',$rtype)->get();

        $MediaCategories = \Model\MediaCategory\ModelName::get();
        
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        
        return view('Front::media.rtype',[
            'mediaAll' => $mediaAll,  
            'rtype' => $rtype,

            'MediaCategories'       => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function mediaShow(\Model\Media\ModelName $media) // One video
    {
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.show',[
            'mediaPost' => $media,
            
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,

            ]
            );
    }

    public function video($media)
    {
        $lc = app()->getlocale();
        $video = \Model\Media\ModelName::where('id','=',$media)->first();
        
        

        $MediaCategories = \Model\MediaCategory\ModelName::get();
        
        $projectId = $video->program;

        $videoType = $video->videoType;

        if($lc == 'kg'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            $videoProject = $result->getName();
            $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();    
            $getVideoTypeName = $result->getName();

            $relatedVideos = \Model\Media\ModelName::where('name','<>','')->where('program','=',$projectId)->get();

        }else{
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            $videoProject = $result->getNameRu(); 
            $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
            $getVideoTypeName = $result->getNameRu();

            $relatedVideos = \Model\Media\ModelName::where('nameRu','<>','')->where('program','=',$projectId)->get();

        }

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
            'MediaCategories'       => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        dd($project);
        $MediaCategories = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.project',[
                'mediaPost' => $project,
                'MediaCategories'       => $MediaCategories,

                'mainBanner'   => $mainBanner,
                'categories'=>$categories,
                'backgroundMain' => $backgroundMain,

            ]
        );
    }

}

