<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        
        return view('Front::pages.history', [
            'lc' => $lc,
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

//    public function leaderPage($leader)
//    {
//        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
//        return view('Front::pages.leader', [
//            'leader' => $leader,
//            'backgroundMain' => $backgroundMain,
//        ]);
//    }

    public function strategyPage()
    {
        $lc = app()->getlocale();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.strategy', [
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function normalbasePage()
    {
        $lc = app()->getlocale();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.normalbase', [
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function rrtsPage()
    {
        $lc = app()->getlocale();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.rrts', [
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function reportPage()
    {
        $lc = app()->getlocale();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.report', [
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'categories' => $categories,
            ]);
    }

    public function teleprogramPage()
    {
//        $mytime = Carbon\Carbon::now();
//        echo $mytime->toDateTimeString();
//
//        dd($mytime);

        $now = Carbon::now('Asia/Bishkek');

        $currentDate = $now->format('d-m-Y');
        $currentTime = $now->format('H:i');

        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        return view('Front::pages.teleprogram', [
            'currentDate' => $currentDate,
            'currentTime' => $currentTime,
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

