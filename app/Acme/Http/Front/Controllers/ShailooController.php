<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use View;

use \Model\Category\ModelName as Category;
use \Model\Post\ModelName as Post;
use \Model\Media\ModelName as Media;
use \Model\Comment\ModelName as Comment;
use \Model\Project\ModelName as Project;

class ShailooController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;

    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
        $this->positionLeft = \Model\Banner\ModelName::where('positionLeft','=','1')->first();
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
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function index(Request $request) // list of videos
    {
        $lc = app()->getlocale();

        $posts = Post::where('extracolumn', true)->orderBy('created_at','desc')->take(8)->get();
        $allPosts = Post::where('extracolumn', true)->orderBy('created_at','desc')->get();

        $categories = Category::where('ns', true)->published()->get();
        $allCategories = Category::where('ns', true)->get();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $promoVideo = Media::where('extracolumn',true)->where('published',true)->orderBy('id','desc')->first();

        return view('Front::shailoo.index',[
            'categories' => $categories,
            'allCategories' => $allCategories,
            'posts' => $posts,
            'allPosts' => $allPosts,
            'promoVideo' => $promoVideo,

            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function all(Request $request) // list of posts
    {
        $lc = app()->getlocale();

        $perPage = 15;

        $posts = Post::where('extracolumn', true)->orderBy('created_at','desc')->paginate($perPage);
        $allPosts = Post::where('extracolumn', true)->orderBy('created_at','desc')->get();

        $categories = Category::where('ns', true)->published()->get();
        $allCategories = Category::where('ns', true)->get();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $promoVideo = Media::where('extracolumn',true)->where('published',true)->orderBy('id','desc')->first();

        return view('Front::shailoo.all',[
            'perPage' => $perPage,
            'categories' => $categories,
            'allCategories' => $allCategories,
            'posts' => $posts,
            'allPosts' => $allPosts,
            'promoVideo' => $promoVideo,

            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function post(Post $post) // single post
    {
        $lc = app()->getlocale();

        $comments = Comment::where('resourceType','=','post')->where('resourceId','=',$post->id)->where('approved','=','1')->orderBy('id','desc')->get();

        $allPosts = Post::where('extracolumn', true)->orderBy('created_at','desc')->get();

        $categories = Category::where('ns', true)->published()->get();
        $allCategories = Category::where('ns', true)->get();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $promoVideo = Media::where('extracolumn',true)->where('published',true)->orderBy('id','desc')->first();

        return view('Front::shailoo.post',[
            'comments' => $comments,
            'categories' => $categories,
            'allCategories' => $allCategories,
            'post' => $post,
            'allPosts' => $allPosts,
            'promoVideo' => $promoVideo,

            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

    public function party(Category $category) // list of party posts
    {
        $lc = app()->getlocale();

        $perPage = 15;

        $posts = Post::where('extracolumn', true)->where('category_id', $category->id)->orderBy('created_at','desc')->paginate($perPage);
        $allPosts = Post::where('extracolumn', true)->orderBy('created_at','desc')->get();

        $categories = Category::where('ns', true)->published()->get();
        $allCategories = Category::where('ns', true)->get();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $promoVideo = Media::where('extracolumn',true)->where('published',true)->orderBy('id','desc')->first();

        return view('Front::shailoo.all',[
            'perPage' => $perPage,
            'categories' => $categories,
            'allCategories' => $allCategories,
            'posts' => $posts,
            'allPosts' => $allPosts,
            'promoVideo' => $promoVideo,

            'backgroundMain' => $backgroundMain,
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'positionLeft' => $this->positionLeft,
        ]);
    }

}

