<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class RsController extends Controller
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

        return view('Front::rs.index',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function about()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.about',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function faq()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.faq',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function procedure()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.procedure',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function posts()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.posts',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function post()
    {
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.post',[
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function person($person)
    {
        if($person == 1){
            $person = 1;
        } else if($person == 2) {
            $person = 2;
        }
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.person',[
            'backgroundMain' => $backgroundMain,
            'person' => $person,
        ]);
    }

    public function contacts()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::rs.contacts',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

}

