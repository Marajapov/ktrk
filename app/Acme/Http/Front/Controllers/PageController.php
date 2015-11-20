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
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::pages.director', [
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function leadersPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.leaders', [
            'backgroundMain' => $backgroundMain,
            'categories'=>$categories,
            ]);
    }  

    public function strategyPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.strategy', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function normalbasePage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.normalbase', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function rrtsPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.rrts', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function reportPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.report', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function teleprogramPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.teleprogram', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function keneshPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.kenesh', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function editionkeneshPage()
    {
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.editionkenesh', [
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

}

