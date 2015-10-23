<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class KyrgyzradioController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.kyrgyzradio.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

        return view('Front::channel.kyrgyzradio.posts', ['channel' => $channel]);
    }


}
