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

        $mediaAll = \Model\Media\ModelName::get();
        $dayVideos = \Model\Media\ModelName::take(1)->orderBy('viewed','asc')->get();

        $positionTop = \Model\Banner\ModelName::where('published','=',true,'and','positionTop','=','1')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::home', [
            'generalPosts'   => $generalPosts,
            'mediaAll'       => $mediaAll,
            'dayVideos'      => $dayVideos,
            'positionTop'    => $positionTop,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Balastan()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();

        return view('Front::channel.balastan.index', ['channel' => $channel]);
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
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::post.post',[
            'post' => $post,
            'categories'=>$categories,
            'mainBanner'   => $mainBanner,
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

        return view('Front::result', [
            'posts' => $posts,
            'pages' => $pages,
            ]);
    }

    // Category Page
    public function categoryPage()
    {
        $categories = \Model\Category\ModelName::get();
        return view('Front::category',[
            'categories' => $categories,
            ]);
    }
}

