<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
class MuzkanalController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        return view('Front::channel.muzkanal.index', ['channel' => $channel]);
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


}
