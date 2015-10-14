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
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        return view('Front::channel.madaniyat.index', ['channel' => $channel]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('madaniyat')->first();

        return view('Front::channel.madaniyat.posts', ['channel' => $channel]);
    }


}
