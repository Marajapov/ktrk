<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use View;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;
use \Model\Banner\ModelName as Banner;

class RsController extends Controller
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

    public function index(Request $request) // list of videos
    {

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $posts = \Model\Post\ModelName::where('rs','=','1')->published()->languagekg()->take(10)->skip(6)->orderBy('id', 'desc')->get();
            $popPosts = \Model\Post\ModelName::where('rs','=','1')->published()->languagekg()->take(6)->skip(0)->orderBy('id', 'desc')->get();
        }elseif($lc == 'ru'){
            $posts = \Model\Post\ModelName::where('rs','=','1')->published()->languageru()->take(10)->skip(6)->orderBy('id', 'desc')->get();
            $popPosts = \Model\Post\ModelName::where('rs','=','1')->published()->languageru()->take(6)->skip(0)->orderBy('id', 'desc')->get();
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::rs.index',[
            'posts' => $posts,
            'popPosts' => $popPosts,
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function about()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.about',[
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function faq()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.faq',[
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function procedure()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.procedure',[
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function posts()
    {
        $perPage = 10;
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('rs','=','1')->where('title','<>','')->orderBy('id','desc')->paginate($perPage);
        }elseif($lc == 'ru'){
            $postAll = \Model\Post\ModelName::where('rs','=','1')->where('title','<>','')->orderBy('id', 'desc')->paginate($perPage);
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.posts',[
            'postAll' => $postAll,
            'perPage' => $perPage,
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function post(\Model\Post\ModelName $post)
    {
        $lc = app()->getlocale();

        $post->incrementViewed();

        // Photo Gallery
        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
        if($parent)
        {
            $images = json_decode($parent->images);
        }else{
            $images = null;
        }


        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.post',[
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
            'images' => $images,
        ]);
    }

    public function person($person)
    {
        if($person == 1){
            $person = 1;
        } else if($person == 2) {
            $person = 2;
        }
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.person',[
            'backgroundMain' => $backgroundMain,
            'person' => $person,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function contacts()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.contacts',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

}

