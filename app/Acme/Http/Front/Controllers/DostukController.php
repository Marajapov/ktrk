<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class DostukController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        // return view('Front::channel.dostuk.comingsoon',[]);
        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

         // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languagekg()->take(6)->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languageru()->take(6)->orderBy('id','desc')->get();
        }

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();
        $anons = \Model\Anons\ModelName::where('channel','=','8')->where('published','=','1')->where('dostuktop','<>','1')->orderBy('id','=','desc')->take(10)->get();
        $dostuktop = \Model\Anons\ModelName::where('channel','=','8')->where('dostuktop','=','1')->where('published','=','1')->orderBy('id','=','desc')->take(3)->get();

        return view('Front::channel.dostuk.index', [
            'channel' => $channel,
            'anons' => $anons,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'allPost' => $allPost,
            'dostukProjects' => $dostukProjects,
            'dostuktop' => $dostuktop,

            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        return view('Front::channel.dostuk.posts', ['channel' => $channel]);
    }

    public function allnews()
    {
        
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languagekg()->published()->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languageru()->published()->orderBy('id','desc')->get();
        }

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        return view('Front::channel.dostuk.allnews', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'allPost' => $allPost,
            'dostukProjects' => $dostukProjects,

            ]);
    }
    
    public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('dostuk','=','1')->orderBy('id', 'desc')->paginate($perPage);        


        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();        
        return view('Front::channel.dostuk.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,
            'dostukProjects' => $dostukProjects,
            ]);
    }

    public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();
        $project = \Model\Project\ModelName::where('dostuk','=', true)->first();

        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();
        $relatedNews = \Model\Project\ModelName::where('id','<>',$project->id)->where('id','<>',$post->id)->where('published','=',true)->where('dostuk','=',$project->id)->orderBy('id','desc')->take(8)->get();
        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
        if($parent != null){
            $images = json_decode($parent->images);    
        }else{
            $images = null;
        }
        
           return view('Front::channel.dostuk.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'dostukProjects' => $dostukProjects,
            'images' => $images,
            'project' => $project,
            'relatedNews' => $relatedNews,
            ]);
    }
    
    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Project\ModelName::where('published','=',true)->where('dostuk','=',$project->id)->get();

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();


        return view('Front::channel.dostuk.project',[
                
            'project' => $project,
    //      'MediaCategories'       => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'dostukProjects' => $dostukProjects,                

            ]
        );
    }

    public function about()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();
        return view('Front::channel.dostuk.about',[                
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'dostukProjects' => $dostukProjects,               
            ]
        );
    }

   // For photos page Dostuk 
    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('id','=',$galleryId)->first();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        return view('Front::channel.dostuk.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'dostukProjects' => $dostukProjects,
            ]);
    }


}
