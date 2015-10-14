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

        return view('Front::channel.balastan.index', ['channel' => $channel]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();

        return view('Front::channel.balastan.posts', ['channel' => $channel]);
    }


}
