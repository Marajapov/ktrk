<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class BirinchiController extends Controller
{
    public function __construct()
    {
    }

    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.birinchi.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function broadcasts()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.broadcasts', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }
    public function about()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.about', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function news()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.news', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function photos()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.photos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function broadcastsprogramm()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
         $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

           return view('Front::channel.birinchi.broadcastsprogramm', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }




}
