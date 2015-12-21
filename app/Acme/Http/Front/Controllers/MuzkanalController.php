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
        $MediaPop1 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->orderBy('id', 'desc')->skip('0')->take('5')->get();
        $MediaPop2 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->orderBy('id', 'desc')->skip('5')->take('5')->get();
        $MediaPop3 = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->orderBy('id', 'desc')->skip('10')->take('5')->get();
        
        //Top clips
        $MediaTop1 = \Model\Media\ModelName::orderBy('viewed','desc')-> take(6)->get();
        $MediaTop2 = \Model\Media\ModelName::orderBy('viewed','desc')->skip('6')->take(6)->get();

        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('muzkanal','=','1')->where('published','=',true)->take('10')->orderBy('id','asc')->get();

        return view('Front::channel.muzkanal.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'MediaPop1' => $MediaPop1,
            'MediaPop2' => $MediaPop2,
            'MediaPop3' => $MediaPop3,

            'MediaTop1' => $MediaTop1,
            'MediaTop2' => $MediaTop2,

            'photoGalleries' => $photoGalleries,
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
        $relatedmuzkanalVideos = \Model\Media\ModelName::where('videoType','=', $videoType)->get();
        $relatedmuzkanalVideos2 = \Model\Media\ModelName::where('videoType','=', $videoType)->get();

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
        $perPage = 8;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('muzkanal','=','1')->orderBy('id', 'desc')->paginate($perPage);

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

  public function photos()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.muzkanal.photos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
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
