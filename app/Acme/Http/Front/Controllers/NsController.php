<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class NsController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function index(Request $request) // list of videos
    {

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::ns.index',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function team()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.team',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function posts()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.posts',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function post()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.post',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function galleries()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.galleries',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function gallery()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.gallery',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function reports()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.reports',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function contacts()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::ns.contacts',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

}

