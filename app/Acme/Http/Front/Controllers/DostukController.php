<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class DostukController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.dostuk.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        return view('Front::channel.dostuk.posts', ['channel' => $channel]);
    }


}
