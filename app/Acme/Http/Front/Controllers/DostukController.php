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
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

         // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languagekg()->published()->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languageru()->published()->orderBy('id','desc')->get();
        }

//        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        return view('Front::channel.dostuk.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'allPost' => $allPost,

            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        return view('Front::channel.dostuk.posts', ['channel' => $channel]);
    }
    public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('dostuk','=','1')->orderBy('id', 'desc')->paginate($perPage);        


        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();        
        return view('Front::channel.dostuk.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,

            ]);
    }

    public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.dostuk.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            ]);
    }
   // For photos page Dostuk 
    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('id','=',$galleryId)->first();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.dostuk.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            ]);
    }


}
