<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
use View;

use \Model\Background\ModelName as Background;
use \Model\Banner\ModelName as Banner;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;
use \Model\Schedule\ModelName as Schedule;

use \Model\PhotoParent\ModelName as PhotoParent;

class GalleryController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;

    public function __construct()
    {
        $lc = app()->getlocale();
        View::share('lc', $lc);

        # Background

        $backgroundMain = Background::where('published','=',true)->where('channel_id','=','2')->first();
        View::share('backgroundMain', $backgroundMain);


        # Banners

        $this->positionTop = Banner::where('positionTop','=','1')->where('channel_id','=','2')->first();
        $this->positionRight = Banner::where('positionRight','=','1')->where('channel_id','=','2')->first();
        $this->positionLeft = Banner::where('positionLeft','=','1')->where('channel_id','=','2')->first();
        $this->positionCenter = Banner::where('positionCenter','=','1')->where('channel_id','=','2')->first();
        $this->positionBottom = Banner::where('positionBottom','=','1')->where('channel_id','=','2')->first();
        View::share('positionTop', $this->positionTop);
        View::share('positionRight', $this->positionRight);
        View::share('positionLeft', $this->positionLeft);
        View::share('positionCenter', $this->positionCenter);
        View::share('positionBottom', $this->positionBottom);


        # News categories

        $categoriesNews = Category::where('general','=','1')->where('published','=','1')->where('order','>','0')->orderBy('order','asc')->get();
        View::share('categoriesNews', $categoriesNews);


        # Active Projects

        if($lc == 'kg'){
          $activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
        }else{
          $activeProjects = Project::where('extracolumn',true)->where('published',true)->where('status', true)->orderBy('name','asc')->orderBy('nameRu','asc')->get();
        }
        View::share('activeProjects', $activeProjects);


        # Live and next

        date_default_timezone_set('Asia/Bishkek');
        $now = date("d-m-Y H:i");
        $currentDate = date('d-m-Y');
        $currentTime = date('H:i');
        $weekDay = date('N', strtotime($now));

        $currentProgram = '';
        $nextProgram = '';

        $schedule = Schedule::where('channel_id',2)->where('date',$currentDate)->first();

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
        View::share('currentProgram', $currentProgram);
        View::share('nextProgram', $nextProgram);
    }

    public function index()
    {
        $perPage = 15;
        $galleries = PhotoParent::where('extracolumn','=','1')->where('published','=',true)->orderBy('id','desc')->paginate($perPage);

        return view('Front::gallery.index',[
            'perPage'=> $perPage,
            'galleries' => $galleries,
        ]);
    }

    public function single(PhotoParent $gallery)
    {
        $images = json_decode($gallery->images);

        return view('Front::gallery.single',[
            'images' => $images,
            'gallery' => $gallery,
        ]);
    }

}

