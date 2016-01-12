<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class MadaniyatController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        return view('Front::channel.madaniyat.comingsoon',[]);
       
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        return view('Front::channel.madaniyat.posts', ['channel' => $channel]);
    }

    public function about()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.about', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }
    public function photos()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.photos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }
    public function broadcasts()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.broadcasts', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function ComingSoon()
    {
        $lc = app()->getlocale();
        return view('Front::channel.madaniyat.comingsoon',[
            'lc' => $lc
        ]);
    }

}
