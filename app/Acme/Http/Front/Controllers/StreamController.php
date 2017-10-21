<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Input;
use View;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;

use \Model\Comment\ModelName as Comment;
use \Model\Post\ModelName as Post;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;
use \Model\Banner\ModelName as Banner;
use \Model\Stream\ModelName as Stream;

class StreamController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
    
    public function __construct()
    {

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
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function stream()
    {
        $streamKTRK = Stream::where('id',5)->first()->incrementViewed();
        
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $streams = \Model\Stream\ModelName::where('published','=','1')->where('title','<>','')->orderBy('id', 'desc')->get();
        }elseif($lc == 'ru'){
            $streams = \Model\Stream\ModelName::where('published','=','1')->where('titleRu','<>','')->orderBy('id', 'desc')->get();
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::streams', [
            'lc' =>$lc,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            'backgroundMain' => $backgroundMain,
            'streams' => $streams,
        ]);
        
    }

}

