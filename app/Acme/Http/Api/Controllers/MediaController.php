<?php
namespace Api\Controllers;

use Illuminate\Http\Request;

use \Model\Media\ModelName as Media;
use \Model\MediaCategory\ModelName as MediaCategory;
use \Model\Project\ModelName as Project;

class MediaController extends Controller
{
    public function __construct() {}

    public function Videos()
    {
        $videos = Media::
                    where('published', true)->
                    orderBy('created_at','desc')->
                    // take(50)-> //optional
                    get();

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

    public function Projects()
    {
        $projects = Project::
                        where('published',1)->
                        orderBy('id','asc')->
                        get();
        return response()->json($projects, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function ProjectVideos(Project $project)
    {
        $videos = Media::
                    where('program',$project->id)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    // take(50)-> //optional
                    get();

        return response()->json($videos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }
}
