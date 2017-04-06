<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;
use \Model\Comment\ModelName as Comment;
use \Model\Post\ModelName as Post;

class StreamController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
    
    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->where('channel_id','=','2')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->where('channel_id','=','2')->first();
        $this->positionLeft = \Model\Banner\ModelName::where('positionLeft','=','1')->where('channel_id','=','2')->first();
        $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->where('channel_id','=','2')->first();
        $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->where('channel_id','=','2')->first();
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function stream(){
            
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $streams = \Model\Stream\ModelName::where('published','=','1')->where('title','<>','')->orderBy('id', 'desc')->get();
        }elseif($lc == 'ru'){
            $streams = \Model\Stream\ModelName::where('published','=','1')->where('titleRu','<>','')->orderBy('id', 'desc')->get();
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::streams', [
            'lc' =>$lc,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            'backgroundMain' => $backgroundMain,
            'streams' => $streams,
        ]);
        
    }

}

