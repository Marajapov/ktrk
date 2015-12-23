<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class MuzkanalController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $MediaPop1 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->skip('0')->take('5')->get();
        $MediaPop2 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->skip('5')->take('5')->get();
        $MediaPop3 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->skip('10')->take('5')->get();
        
        //Top clips

        $MediaTop1 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')-> take(6)->get();
        $MediaTop2 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('viewed','desc')->skip('6')->take(6)->get();


        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

        //Anons
        $anons1 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons1', '=', 1)->first();
        $anons2 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons2', '=', 1)->first();
        $anons3 = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('muzkanalanons3', '=', 1)->first();
        
        //Promo
        $promo = \Model\Media\ModelName:: where('muzkanal', '=', 1)->where('published','=',true)->where('promo', '=', 1)->first();
       
        return view('Front::channel.muzkanal.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'MediaPop1' => $MediaPop1,
            'MediaPop2' => $MediaPop2,
            'MediaPop3' => $MediaPop3,

            'MediaTop1' => $MediaTop1,
            'MediaTop2' => $MediaTop2,

            'photoGalleries' => $photoGalleries,
            'anons1' => $anons1,
            'anons2' => $anons2,
            'anons3' => $anons3,
            'promo' => $promo,

            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        return view('Front::channel.muzkanal.posts', ['channel' => $channel]);
    }

    public function radio()
    {
        return view('Front::channel.muzkanal.radio');
    }

    public function about()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.muzkanal.about', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

      public function video(Request $request, $id)
    {

        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $muzkanalvideo = \Model\Media\ModelName::where('id','=', $id)->first();
        $muzkanalvideo->incrementViewed();

        //Related Videos
        $videoType = $muzkanalvideo->videoType; 
        $relatedmuzkanalVideos = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('videoType','=', $videoType)->get();
        $relatedmuzkanalVideos2 = \Model\Media\ModelName::where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->where('videoType','=', $videoType)->get();

        return view('Front::channel.muzkanal.video', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'muzkanalvideo' => $muzkanalvideo,
            'relatedmuzkanalVideos' => $relatedmuzkanalVideos,
            'relatedmuzkanalVideos2' => $relatedmuzkanalVideos2,
            ]);
    }

  public function videos()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->where('muzkanalanons1','<>','1')->where('muzkanalanons2','<>','1')->where('muzkanalanons3','<>','1')->where('promo','<>','1')->orderBy('id', 'desc')->paginate($perPage);

        return view('Front::channel.muzkanal.videos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'postAll' => $postAll,
            'perPage' => $perPage,
            ]);
    }

  public function hitparad()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.muzkanal.hitparad', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

  public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->orderBy('id', 'desc')->paginate($perPage);        


        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();        
        return view('Front::channel.muzkanal.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,

            ]);
    }



        // For photos page One gallery 
     public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('id','=',$galleryId)->first();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.muzkanal.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            ]);
    }

}
