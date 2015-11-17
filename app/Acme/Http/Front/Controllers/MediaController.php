<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function mediaIndex(Request $request) // list of videos
    {
        $MediaCategories = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.index',[
            'mediaAll' => $mediaAll,
            'MediaCategories'       => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function mediaRtype($rtype) // list of videos rtype
    {
        $mediaAll = \Model\Media\ModelName::where('videoType','=',$rtype)->get();

        $MediaCategories = \Model\MediaCategory\ModelName::get();
        
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        
        return view('Front::media.rtype',[
            'mediaAll' => $mediaAll,  
            'rtype' => $rtype,

            'MediaCategories'       => $MediaCategories,

            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function mediaShow(\Model\Media\ModelName $media) // One video
    {
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::media.show',[
            'mediaPost' => $media,
            
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,

            ]
            );
    }


}

