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

    public function about()
    {
        return view('Front::channel.muzkanal.about');
    }

      public function video()
    {
        return view('Front::channel.muzkanal.video');
    }

  public function videos()
    {
        return view('Front::channel.muzkanal.videos');
    }

  public function hitparad()
    {
        return view('Front::channel.muzkanal.hitparad');
    }

  public function photos()
    {
        return view('Front::channel.muzkanal.photos');
    }
    
  public function contacts()
    {
        return view('Front::channel.muzkanal.contacts');
    }


}
