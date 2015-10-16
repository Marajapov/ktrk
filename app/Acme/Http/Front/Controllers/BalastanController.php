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

        return view('Front::channel.balastan.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();

        return view('Front::channel.balastan.posts', ['channel' => $channel]);
    }


}
