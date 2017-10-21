<?php
namespace Api\Controllers;

use Illuminate\Http\Request;

use \Model\Media\ModelName as Media;
use \Model\MediaCategory\ModelName as MediaCategory;
use \Model\Project\ModelName as Project;

class MediaController extends Controller
{
    public function __construct() {}

    public function Videos(Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;

            $videosBeforePaginate = Media::
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();

            $videos = Media::customPaginate($videosBeforePaginate, $perPage);
        } else {
            $videos = Media::
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($videos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function Video(Media $media)
    {
        return response()->json($media, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function Project(Project $project)
    {
        return response()->json($project, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function Projects(Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;

            $projectsBeforePaginate = Project::
                    where('published', true)->
                    orderBy('id','asc')->
                    take($total)->
                    get();

            $projects = Project::customPaginate($projectsBeforePaginate, $perPage);
        } else {
            $projects = Project::
                    where('published', true)->
                    orderBy('id','asc')->
                    take($total)->
                    get();
        }

        return response()->json($projects, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function ProjectVideos(Project $project, Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;

            $videosBeforePaginate = Media::
                    where('program',$project->id)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();

            $videos = Media::customPaginate($videosBeforePaginate, $perPage);
        } else {
            $videos = Media::
                    where('program',$project->id)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($videos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }
}
