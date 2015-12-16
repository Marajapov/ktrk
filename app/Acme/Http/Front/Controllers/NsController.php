<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class NsController extends Controller
{
    public function __construct()
    {
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
            $posts = \Model\Post\ModelName::where('ns','=','1')->published()->languagekg()->take(10)->skip(2)->orderBy('id', 'desc')->get();    
            $popPosts = \Model\Post\ModelName::where('ns','=','1')->published()->languagekg()->take(2)->skip(0)->orderBy('id', 'desc')->get();
        }elseif($lc == 'ru'){
            $posts = \Model\Post\ModelName::where('ns','=','1')->published()->languageru()->take(10)->skip(2)->orderBy('id', 'desc')->get();  
            $popPosts = \Model\Post\ModelName::where('ns','=','1')->published()->languageru()->take(2)->skip(0)->orderBy('id', 'desc')->get();  
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::ns.index',[
            'posts' => $posts,
            'popPosts' => $popPosts,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function team()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.team',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function posts()
    {
        $perPage = 10;
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('ns','=','1')->where('title','<>','')->orderBy('id','desc')->paginate($perPage);
        }elseif($lc == 'ru'){
            $postAll = \Model\Post\ModelName::where('ns','=','1')->where('title','<>','')->orderBy('id', 'desc')->paginate($perPage);
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.posts',[
            'postAll' => $postAll,
            'perPage' => $perPage,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function post(\Model\Post\ModelName $post)
    {
        $lc = app()->getlocale();

        $post->incrementViewed();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.post',[
            'post' => $post,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function galleries()
    {
        $galleries = \Model\PhotoParent\ModelName::where('ns','=','1')->where('published','=','1')->get();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.galleries',[
            'galleries' => $galleries,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function gallery(Request $request)
    {
        $id = $request->photoParentId;
        $row = \Model\PhotoParent\ModelName::where('id','=',$id)->first();
        $images = json_decode($row->images); // array of images
        
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.gallery',[
            'lc' => $lc,
            'images' => $images,
            'row' => $row,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function reports()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.reports',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function contacts()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.contacts',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

}

