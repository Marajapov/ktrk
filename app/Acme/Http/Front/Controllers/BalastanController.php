<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class BalastanController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $firstMedia = \Model\Media\ModelName::where('balastan','=','1')->orderBy('id','desc')->first();
        $medias = \Model\Media\ModelName::where('balastan','=','1')->take(6)->orderBy('id','desc')->get();

        return view('Front::channel.balastan.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,

            'firstMedia' => $firstMedia,
            'medias' => $medias,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();

        return view('Front::channel.balastan.posts', ['channel' => $channel]);
    }
  public function about()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.balastan.about', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function world()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.balastan.world', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }
    public function photos()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.balastan.photos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }   
    public function video()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.balastan.video', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

}
