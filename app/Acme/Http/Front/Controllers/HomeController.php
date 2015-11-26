<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom;
    
    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
        $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
        $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function Home()
    {

        $lc = app()->getlocale();
        $channel = \Model\Channel\ModelName::general();
       
        if($lc == 'kg'){
            $generalPosts = \Model\Post\ModelName::general($channel)->published()->languagekg()->take(6)->skip(0)->orderBy('id', 'desc')->get();    
            $projects = \Model\Project\ModelName::having('name','<>','')->get();
        }elseif($lc == 'ru'){
            $generalPosts = \Model\Post\ModelName::general($channel)->published()->languageru()->take(6)->skip(0)->orderBy('id', 'desc')->get();    
            $projects = \Model\Project\ModelName::where('nameRu','<>','')->get();

        }

        $mediaLast = \Model\Media\ModelName::take(9)->get();
        
        $rDayVideo = \Model\Media\ModelName::having('dayVideo','=','1')->take(1)->skip(0)->orderBy('created_at','desc')->first();

        if($rDayVideo != null){
            $dayVideo = $rDayVideo;
        }else{
            $dayVideo = \Model\Media\ModelName::take(1)->skip(0)->orderBy('id', 'desc')->first();
        }
        
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $peopleReporters = \Model\PeopleReporter\ModelName::where('published','=',true)->get();

        //$parentId = \Model\PhotoParent\ModelName::where()->first();
        //$photoChilds = \Model\PhotoChild\ModelName::where('parentId','=',$parentId->id)->get();

        

        $MediaCategories = \Model\MediaCategory\ModelName::get();
        $mediaPosts = \Model\Media\ModelName::get();

        $videoAll = \Model\Media\ModelName::get();
        
        return view('Front::home', [
            'generalPosts'   => $generalPosts,
            'dayVideo'      => $dayVideo,
            
            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'peopleReporters' => $peopleReporters,
            //'parentId' => $parentId,
            
            'backgroundMain' => $backgroundMain,
            'mediaLast'      => $mediaLast,
            'MediaCategories'       => $MediaCategories,
            'mediaPosts'       => $mediaPosts,
            'projects' => $projects,
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
        $positionTop = \Model\Banner\ModelName::top()->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        
        if(($post->parentId != '0') && ($post->parentId != null))
        {
            $parentId = $post->parentId;
            $parentId = \Model\PhotoParent\ModelName::where('id','=',$parentId)->first();
            $photoChilds = \Model\PhotoChild\ModelName::where('parentId','=',$parentId->id)->get();
            
        }else{
            $parentId = '0';
            $photoChilds = '0';
        }

        if($post->related1 != null){
            $related1Post = \Model\Post\ModelName::where('id','=',$post->related1)->first();
        }else{
            $related1Post = null;
        }

        if($post->related2 != null){
            $related2Post = \Model\Post\ModelName::where('id','=',$post->related2)->first();
        }else{
            $related2Post = null;
        }

        if($post->related3 != null){
            $related3Post = \Model\Post\ModelName::where('id','=',$post->related3)->first();
        }else{
            $related3Post = null;
        }
        $relatedPosts = \Model\Post\ModelName::where('category_id','=',$post->category_id)->get();

        return view('Front::post.post',[
            'post' => $post,

            'related1Post' => $related1Post,
            'related2Post' => $related2Post,
            'related3Post' => $related3Post,

            'relatedPosts' => $relatedPosts,

            'parentId'=> $parentId,
            'photoChilds'=> $photoChilds,

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
        $perPage = 10;
        
        $channel = \Model\Channel\ModelName::general();

        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::post.posts',[
            'perPage'=> $perPage,
            'channel' => $channel,
            'postAll' => $channel->posts()->paginate($perPage),
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

        $positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
        $positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
        $positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();
        
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::category.index',[
            'posts' => $posts,
            'category' => $category,

            'positionTop'    => $positionTop,
            'positionRight'  => $positionRight,
            'positionCenter' => $positionCenter,
            'positionBottom' => $positionBottom,

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

    public function filterResult(Request $request)
    {
        return view('Front::media.index',[
            ]);
    }

}

