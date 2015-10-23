<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function historyPage()
    {   
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        
        return view('Front::pages.history', [
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function directorPage()
    {
        return view('Front::pages.director');
    }

 
   

}

