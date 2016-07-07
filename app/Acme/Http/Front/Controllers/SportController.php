<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
use \Model\MediaCategory\ModelName as MediaCategory;
class SportController extends Controller
{
    public function __construct()
    {
    }


    public function Home(Request $request)
    {

        $channel = \Model\Channel\ModelName::where('name','=','sport')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        return view('Front::channel.sport.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    


}
