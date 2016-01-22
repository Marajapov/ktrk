<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class KyrgyzradioController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {

        return view('Front::channel.kyrgyzradio.comingsoon',[]);
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        
         // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('kyrgyzradio','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('kyrgyzradio','=',1)->languagekg()->published()->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('kyrgyzradio','=',1)->languageru()->published()->orderBy('id','desc')->get();
        }

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

        return view('Front::channel.kyrgyzradio.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'allPost' => $allPost,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,

            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

        return view('Front::channel.kyrgyzradio.posts', ['channel' => $channel]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio','=',$project->id)->get();

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();


        return view('Front::channel.kyrgyzradio.project',[
                
            'project' => $project,
    //      'MediaCategories'       => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,                

            ]
        );
    }

    public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
        
        if($parent != null){
            $images = json_decode($parent->images);    
        }else{
            $images = null;
        }
        

           return view('Front::channel.kyrgyzradio.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            'images' => $images,
            ]);
    }

    public function allnews()
    {
        
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('kyrgyzradio','=',1)->languagekg()->published()->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('kyrgyzradio','=',1)->languageru()->published()->orderBy('id','desc')->get();
        }

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

        return view('Front::channel.kyrgyzradio.allnews', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'allPost' => $allPost,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            ]);
    }

        
    public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('kyrgyzradio','=','1')->orderBy('id', 'desc')->paginate($perPage);        

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();    

        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('kyrgyzradio','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();        
        return view('Front::channel.kyrgyzradio.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,

            ]);
    }

   // For photos page Dostuk 
    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('kyrgyzradio','=','1')->where('id','=',$galleryId)->first();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

        return view('Front::channel.kyrgyzradio.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            ]);
    }


}
