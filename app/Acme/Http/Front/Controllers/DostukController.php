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


        return view('Front::channel.dostuk.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        return view('Front::channel.dostuk.posts', ['channel' => $channel]);
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
