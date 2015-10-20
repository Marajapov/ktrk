<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function Home()
    {
        $channel = \Model\Channel\ModelName::general();

        $generalPosts = \Model\Post\ModelName::general($channel)->published()->take(6)->skip(0)->orderBy('id', 'desc')->get();

        $mediaLast = \Model\Media\ModelName::take(9)->get();
        $dayVideos = \Model\Media\ModelName::take(1)->orderBy('viewed','asc')->get();

        $positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $MediaCategories = \Model\MediaCategory\ModelName::get();
        $mediaPosts = \Model\Media\ModelName::get();

        $videoAll = \Model\Media\ModelName::get();
        
        return view('Front::home', [
            'generalPosts'   => $generalPosts,
            'dayVideos'      => $dayVideos,
            
            'positionTop'    => $positionTop,
            'positionRight'  => $positionRight,
            
            'backgroundMain' => $backgroundMain,
            'mediaLast'      => $mediaLast,
            'MediaCategories'       => $MediaCategories,
            'mediaPosts'       => $mediaPosts,
            ]);
    }

    public function Balastan()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.balastan.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,

            ]);
    }

    public function Muzkanal()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        return view('Front::channel.muzkanal.index', ['channel' => $channel]);
    }

    public function Ktr()
    {
        $channel = \Model\Channel\ModelName::name('ktr')->first();

        return view('Front::channel.ktr.index', ['channel' => $channel]);
    }

    public function Post(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();
        $categories = \Model\Category\ModelName::all();
        $positionTop = \Model\Banner\ModelName::where('published','=',true,'and','positionTop','=','1')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::post.post',[
            'post' => $post,
            'categories'=>$categories,
            'positionTop'    => $positionTop,
            'backgroundMain' => $backgroundMain,
            ]);

    }

    public function Page(\Model\Page\ModelName $page)
    {
        $page->incrementViewed();

        return view('Front::page',['page' => $page]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::general();
        
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::post.posts',[
            'channel' => $channel, 
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);

    }

    public function searchResult(Request $request)
    {
        $posts = \Model\Post\ModelName::search($request->input('search'))->get();
        $pages = \Model\Page\ModelName::search($request->input('search'))->get();
        $searchKey = $request->input('search');

        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::result', [
            'posts' => $posts,
            'pages' => $pages,
            'searchKey'=>$searchKey,

            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    // Category Page
    public function categoryPage(\Model\Category\ModelName $category)
    {
        $category_id = $category->id;
        $posts = \Model\Post\ModelName::where('category_id','=',$category_id)->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::category.index',[
            'posts' => $posts,
            'category' => $category,

            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function mediaPage(\Model\Media\ModelName $media)
    {
        
        /*$mediaPost = \Model\Media\ModelName::where('id','=',$media);
        dd($mediaPost);*/


        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.index',[
            'mediaPost' => $media,
            
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,

            ]
            );
    }

}

