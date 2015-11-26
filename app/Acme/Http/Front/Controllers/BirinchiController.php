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

    


}
