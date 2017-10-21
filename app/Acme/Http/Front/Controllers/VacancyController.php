<?php
namespace Front\Controllers;

use Illuminate\Http\Request;
use \Model\Vacancy\ModelName as Vacancy;
use \Model\VacancyNews\ModelName as VacancyNews;

class VacancyController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
    
    public function __construct()
    {

        $this->positionTop = Banner::where('positionTop','=','1')->where('channel_id','=','2')->first();
        $this->positionRight = Banner::where('positionRight','=','1')->where('channel_id','=','2')->first();
        $this->positionLeft = Banner::where('positionLeft','=','1')->where('channel_id','=','2')->first();
        $this->positionCenter = Banner::where('positionCenter','=','1')->where('channel_id','=','2')->first();
        $this->positionBottom = Banner::where('positionBottom','=','1')->where('channel_id','=','2')->first();
        $this->innerPages = Banner::where('extracolumn','=','1')->where('channel_id','=','2')->first();
        View::share('positionTop', $this->positionTop);
        View::share('positionRight', $this->positionRight);
        View::share('positionLeft', $this->positionLeft);
        View::share('positionCenter', $this->positionCenter);
        View::share('positionBottom', $this->positionBottom);
        View::share('innerPages', $this->innerPages);
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function vacancy(){
           
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $vacancy = \Model\Vacancy\ModelName::where('published','=','1')->where('title','<>','')->orderBy('id', 'desc')->take('10')->get();
            $vacancynews = \Model\VacancyNews\ModelName::where('published','=',1)->where('title','<>','')->orderBy('id','desc')->take('10')->get(); 
        }elseif($lc == 'ru'){
            $vacancy = \Model\Vacancy\ModelName::where('published','=','1')->where('titleRu','<>','')->orderBy('id', 'desc')->take('10')->get();
            $vacancynews = \Model\VacancyNews\ModelName::where('published','=',1)->where('titleRu','<>','')->orderBy('id','desc')->take('10')->get();
        }
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::vacancy.vacancy', [
            'lc' =>$lc,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            'backgroundMain' => $backgroundMain,
            'vacancy' => $vacancy,
            'vacancynews' => $vacancynews
        ]);
        
    }

    public function vacancies(Request $request){

        $lc = app()->getlocale();
        $perPage = 20;
        if($lc == 'kg'){
            $vacancies = \Model\Vacancy\ModelName::where('published','=','1')->where('title','<>','')->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru'){
            $vacancies = \Model\Vacancy\ModelName::where('published','=','1')->where('titleRu','<>','')->orderBy('id', 'desc')->paginate($perPage);
        }
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::vacancy.vacancies', [
            'lc' =>$lc,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            'backgroundMain' => $backgroundMain,
            'vacancies' => $vacancies,
            'perPage' => $perPage
        ]);
    }

    public function news(){
        
        $lc = app()->getlocale();
        $perPage = 20;
        if($lc == 'kg'){
            $news = \Model\VacancyNews\ModelName::where('published','=','1')->where('title','<>','')->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru'){
            $news = \Model\VacancyNews\ModelName::where('published','=','1')->where('titleRu','<>','')->orderBy('id', 'desc')->paginate($perPage);
        }
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

        return view('Front::vacancy.news', [
            'lc' =>$lc,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            'backgroundMain' => $backgroundMain,
            'news' => $news,
            'perPage' => $perPage
        ]);
    }

    public function post($vacancynews)
    {
        $lc = app()->getlocale(); 
        $vacancynews->incrementViewed();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

       return view('Front::vacancy.post', [
            'lc' =>$lc,
            'vacancynews' => $vacancynews,
            'backgroundMain' => $backgroundMain 
        ]);
    }

    public function job($vacancy)
    {
        $lc = app()->getlocale(); 

        $vacancy->incrementViewed();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','2')->first();

       return view('Front::vacancy.job', [
            'lc' =>$lc,
            'vacancy' => $vacancy,
            'backgroundMain' => $backgroundMain 
        ]);
    }

}

