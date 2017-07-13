<?php
namespace Front\Controllers;
use Illuminate\Http\Request;

use \Model\MediaCategory\ModelName as MediaCategory;
use \Model\Category\ModelName as Category;
use \Model\Project\ModelName as Project;

class SportController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom, $positionLeft;
    
    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->where('channel_id','=','11')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->where('channel_id','=','11')->first();
        $this->positionLeft = \Model\Banner\ModelName::where('positionLeft','=','1')->where('channel_id','=','11')->first();
        $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->where('channel_id','=','11')->first();
        $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->where('channel_id','=','11')->first();
    }


    public function Home(Request $request)
    {
        // start
         $visitor = $_SERVER['REMOTE_ADDR'];
         //date_default_timezone_set("Asia/Bishkek");
         $today = date('d.m.Y');
         //dd($visitor,$today);
         $date1 = date('d.m.Y', strtotime('12.09.16'));
         $date2 = date('d.m.Y', strtotime('12.09.18'));
         
        if(($today >= $date1) && ($today <= $date2)){
            $array_ip_1 = array('217.29','185.88','185.66','185.54','185.53','185.53','185.48','185.29','185.20','185.91.132','212.97','212.42','195.54','195.38','109.71','95.215','77.235','46.251','46.235','46.226','37.218','31.192','31.186','83.229','85.113','85.115','94.143','93.171','93.170','93.170','92.245','91.229','91.229','91.228','91.213','91.207','91.205','91.192','89.237','213.14');

          $array_ip_2 = array('178.21','178.21','176.12','176.12','158.18','158.18','109.20','185.11','185.13','213.14','212.24','212.11','195.21','195.11','194.17','194.15','194.15','193.10','185.13');
            
           $array_ip_3 = array('212.2.','5.57.','127.0.');
           $array_ip_4 = array('81.88.','81.20.','92.62.','80.72.','95.87.','77.95.','62.76.','57.92.','31.41.','31.29.'); 
            
            $result = substr($visitor, 0, 6);  
            
           if(in_array($result,$array_ip_1) == $result){ // 4
                $flag = 1;
          }elseif(in_array($result,$array_ip_2) == $result){ // 5
              $flag = 1;
          }elseif(in_array($result,$array_ip_3) == $result){ // 6
              $flag = 1;
          }elseif(in_array($result,$array_ip_4) == $result){ // 3
              $flag = 1;
          }else{
             $flag = 0;
           }

           session(['flag2'=> $flag]);
         }


        $lc = app()->getlocale();
        $channel = \Model\Channel\ModelName::where('name','=','sport')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $anons = \Model\Anons\ModelName::where('channel','=','11')->where('published','=','1')->orderBy('id','=','desc')->take(3)->get();
        $anonsbottom1 = \Model\Media\ModelName::where('sport','=','1')->where('published','=',true)->where('sportanons','=','1')->orderBy('id','desc')->take('1')->get();
        $anonsbottom2 = \Model\Media\ModelName::where('sport','=','1')->where('published','=',true)->where('sportanons','=','2')->orderBy('id','desc')->take('1')->get();
        $anonsbottom3 = \Model\Media\ModelName::where('sport','=','1')->where('published','=',true)->where('sportanons','=','3')->orderBy('id','desc')->take('1')->get();
        $topVideos1 = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->orderBy('id','desc')->skip('0')->take('1')->get();
        $topVideos2 = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->orderBy('id','desc')->skip('1')->take('2')->get();
        $topVideos3 = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->orderBy('id','desc')->skip('3')->take('3')->get();

        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('sport','=','1')->where('title','<>','')->orderBy('id','desc')->take('8')->get();
            $photoGalleries1 = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('name','<>','')->orderBy('id','desc')->skip('0')->take('1')->get();
            $photoGalleries2 = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('name','<>','')->orderBy('id','desc')->skip('1')->take('4')->get();
        }else{
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('sport','=','1')->where('titleRu','<>','')->orderBy('id','desc')->take('8')->get();
            $photoGalleries1 = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('nameRu','<>','')->orderBy('id','desc')->skip('0')->take('1')->get();
            $photoGalleries2 = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('nameRu','<>','')->orderBy('id','desc')->skip('1')->take('4')->get();
        }
        

       date_default_timezone_set('Asia/Bishkek');
        $now = date("d-m-Y H:i");
        $currentDate = date('d-m-Y');
        $currentTime = date('H:i');
        $weekDay = date('N', strtotime($now));

        if($channel){
            $schedule = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->where('date','=',$currentDate)->first();
            if($schedule){
                $program = json_decode($schedule->program);
                $count = count($program);
            }else{
                $program = '';
                $count = 1;
            }
        }

        return view('Front::channel.sport.index', [
            'lc' => $lc,
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'anons' => $anons,
            'anonsbottom1' => $anonsbottom1,
            'anonsbottom2' => $anonsbottom2,
            'anonsbottom3' => $anonsbottom3,
            'topVideos1' => $topVideos1,
            'topVideos2' => $topVideos2,
            'topVideos3' => $topVideos3,
            'postAll' => $postAll,
            'photoGalleries1' => $photoGalleries1,
            'photoGalleries2' => $photoGalleries2,
            'program' => $program,
            'count' => $count = ($count) ? $count : 1,
            'currentDate' => $currentDate,
            'currentTime' => $currentTime,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }

   public function allnews()
    {
        $channel = \Model\Channel\ModelName::name('sport')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $perPage = 10;
        $lc = app()->getlocale();
        $weekFromNow = date('Y-m-d', strtotime('-10 days'));
        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('sport','=','1')->where('title','<>','')->orderBy('id','desc')->paginate($perPage);
            $popArticles = \Model\Post\ModelName::where('sport','=','1')->where('created_at','>',$weekFromNow)->languagekg()->orderBy('viewed','desc')->get();
        }else{
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('sport','=','1')->where('titleRu','<>','')->orderBy('id','desc')->paginate($perPage);
            $popArticles = \Model\Post\ModelName::where('sport','=','1')->where('created_at','>',$weekFromNow)->languageru()->orderBy('viewed','desc')->get();
        }
        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        }

        return view('Front::channel.sport.allnews', [
            'lc' => $lc,
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'perPage' => $perPage,
            'postAll' => $postAll,
            'popArticles' => $popArticles,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

        ]);
    }
public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $lc = app()->getlocale();

        if($lc == 'kg')
        {
            if($post->title == '')
            {
                app()->setlocale('ru');
                $lc = 'ru';
            }
            else
            {
                app()->setlocale('kg');
                $lc = 'kg';
            }
        }
        elseif($lc == 'ru')
        {
            if($post->titleRu == '')
            {
                app()->setlocale('kg');
                $lc = 'kg';
            }
            else
            {
                app()->setlocale('ru');
                $lc = 'ru';
            }
        }

        if($lc == 'kg' && ($post->title != '')){
        }elseif($lc == 'ru' && ($post->titleRu != '')){
        }else{
            return redirect()->route('sport.home');
        }

        $channel = \Model\Channel\ModelName::name('sport')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $weekFromNow = date('Y-m-d', strtotime('-10 days'));

        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
            $popArticles = \Model\Post\ModelName::where('sport','=','1')->where('created_at','>',$weekFromNow)->languagekg()->orderBy('viewed','desc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
            $popArticles = \Model\Post\ModelName::where('sport','=','1')->where('created_at','>',$weekFromNow)->languageru()->orderBy('viewed','desc')->get();
        }

        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();

        if($parent != null){
            $images = json_decode($parent->images);
        }else{
            $images = null;
        }

        if($lc == 'kg'){

            $contentOriginal = $post->getContent();


            $contentFinal = $contentOriginal;

            if($post->related1)
            {
                if(strpos($contentFinal, 'POST1LEFT') != false)
                {
                    $post1Pos = strripos($contentFinal, 'POST1LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeft($post->related1), $post1Pos, 9);
                }
                elseif(strpos($contentFinal, 'POST1RIGHT') != false)
                {
                    $post1Pos = strripos($contentFinal, 'POST1RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionRight($post->related1), $post1Pos, 10);
                }
            }

            if($post->related2)
            {
                if(strpos($contentFinal, 'POST2LEFT') != false)
                {
                    $post2Pos = strripos($contentFinal, 'POST2LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeft($post->related2), $post2Pos, 9);
                }
                elseif(strpos($contentFinal, 'POST2RIGHT') != false)
                {
                    $post2Pos = strripos($contentFinal, 'POST2RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionRight($post->related2), $post2Pos, 10);
                }
            }

            if($post->related3)
            {
                if(strpos($contentFinal, 'POST3LEFT') != false)
                {
                    $post3Pos = strripos($contentFinal, 'POST3LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeft($post->related3), $post3Pos, 9);
                }
                elseif(strpos($contentFinal, 'POST3RIGHT') != false)
                {
                    $post3Pos = strripos($contentFinal, 'POST3RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionRight($post->related3), $post3Pos, 10);
                }
            }

            if($post->relatedMedia1)
            {
                if(strpos($contentFinal, 'MEDIA1LEFT') != false)
                {
                    $media1Pos = strripos($contentFinal, 'MEDIA1LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeft($post->relatedMedia1), $media1Pos, 10);
                }
                elseif(strpos($contentFinal, 'MEDIA1RIGHT') != false)
                {
                    $media1Pos = strripos($contentFinal, 'MEDIA1RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRight($post->relatedMedia1), $media1Pos, 11);
                }
            }

            if($post->relatedMedia2)
            {
                if(strpos($contentFinal, 'MEDIA2LEFT') != false)
                {
                    $media2Pos = strripos($contentFinal, 'MEDIA2LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeft($post->relatedMedia2), $media2Pos, 10);
                }
                elseif(strpos($contentFinal, 'MEDIA2RIGHT') != false)
                {
                    $media2Pos = strripos($contentFinal, 'MEDIA2RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRight($post->relatedMedia2), $media2Pos, 11);
                }
            }

            if($post->relatedMedia3)
            {
                if(strpos($contentFinal, 'MEDIA3LEFT') != false)
                {
                    $media3Pos = strripos($contentFinal, 'MEDIA3LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeft($post->relatedMedia3), $media3Pos, 10);
                }
                elseif(strpos($contentFinal, 'MEDIA3RIGHT') != false)
                {
                    $media3Pos = strripos($contentFinal, 'MEDIA3RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRight($post->relatedMedia3), $media3Pos, 11);
                }
            }

        }elseif($lc == 'ru'){
            $contentOriginal = $post->getContent();

            $contentFinal = $contentOriginal;
            if($post->relatedRu1)
            {
                if(strpos($contentFinal, 'POST1LEFT') != false)
                {
                    $post1Pos = strripos($contentFinal, 'POST1LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeft($post->relatedRu1), $post1Pos, 9);
                }
                elseif(strpos($contentFinal, 'POST1RIGHT') != false)
                {
                    $post1Pos = strripos($contentFinal, 'POST1RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionRight($post->relatedRu1), $post1Pos, 10);
                }
            }

            if($post->relatedRu2)
            {
                if(strpos($contentFinal, 'POST2LEFT') != false)
                {
                    $post2Pos = strripos($contentFinal, 'POST2LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeft($post->relatedRu2), $post2Pos, 9);
                }
                elseif(strpos($contentFinal, 'POST2RIGHT') != false)
                {
                    $post2Pos = strripos($contentFinal, 'POST2RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionRight($post->relatedRu2), $post2Pos, 10);
                }
            }

            if($post->relatedRu3)
            {
                if(strpos($contentFinal, 'POST3LEFT') != false)
                {
                    $post3Pos = strripos($contentFinal, 'POST3LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionLeft($post->relatedRu3), $post3Pos, 9);
                }
                elseif(strpos($contentFinal, 'POST3RIGHT') != false)
                {
                    $post3Pos = strripos($contentFinal, 'POST3RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedFunctionRight($post->relatedRu3), $post3Pos, 10);
                }
            }

            if($post->relatedMediaRu1)
            {
                if(strpos($contentFinal, 'MEDIA1LEFT') != false)
                {
                    $media1Pos = strripos($contentFinal, 'MEDIA1LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeft($post->relatedMediaRu1), $media1Pos, 10);
                }
                elseif(strpos($contentFinal, 'MEDIA1RIGHT') != false)
                {
                    $media1Pos = strripos($contentFinal, 'MEDIA1RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRight($post->relatedMediaRu1), $media1Pos, 11);
                }
            }

            if($post->relatedMediaRu2)
            {
                if(strpos($contentFinal, 'MEDIA2LEFT') != false)
                {
                    $media2Pos = strripos($contentFinal, 'MEDIA2LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeft($post->relatedMediaRu2), $media2Pos, 10);
                }
                elseif(strpos($contentFinal, 'MEDIA2RIGHT') != false)
                {
                    $media2Pos = strripos($contentFinal, 'MEDIA2RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRight($post->relatedMediaRu2), $media2Pos, 11);
                }
            }

            if($post->relatedMediaRu3)
            {
                if(strpos($contentFinal, 'MEDIA3LEFT') != false)
                {
                    $media3Pos = strripos($contentFinal, 'MEDIA3LEFT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionLeft($post->relatedMediaRu3), $media3Pos, 10);
                }
                elseif(strpos($contentFinal, 'MEDIA3RIGHT') != false)
                {
                    $media3Pos = strripos($contentFinal, 'MEDIA3RIGHT');
                    $contentFinal = substr_replace($contentFinal, $post->relatedMediaFunctionRight($post->relatedMediaRu3), $media3Pos, 11);
                }
            }

        }

        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        }
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
            $relatedNews = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->languagekg()->where('category_id','=',$post->category_id)->orderBy('id','desc')->take(8)->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
            $relatedNews = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->languageru()->where('category_id','=',$post->category_id)->orderBy('id','desc')->take(8)->get();
        }

        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
        if($parent){
            $images = json_decode($parent->images);   
        }else{
            $images = null;
        }

        $parent2 = \Model\PhotoParent\ModelName::where('id','=',$post->parentId2)->first();
        if($parent2){
            $images2 = json_decode($parent2->images);    
        }else{
            $images2 = null;
        } 

        return view('Front::channel.sport.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'sportProjects' => $sportProjects,
            'content' => $contentFinal,
            'images' => $images,
            'popArticles' => $popArticles,
            'lc' => $lc,
            'projectList' => $projectList,
            'relatedNews' => $relatedNews,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            'images' => $images,
            'images2' => $images2  
        ]);
    }
    
    public function allvideos()
    {
        $perPage = 16;
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $allVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->orderBy('id','desc')->paginate($perPage);

        return view('Front::channel.sport.all',[
            'perPage' => $perPage,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }

    public function videos()
    {

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
        }
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        $weekFromNow = date('Y-m-d H:i', strtotime('-10 days'));

        $topVideos1 = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->skip('0')->take('1')->get();
        $topVideos2 = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->skip('1')->take('2')->get();
        $topVideos3 = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->where('created_at','>',$weekFromNow)->orderBy('viewed','desc')->skip('3')->take('2')->get();
        $allVideos = \Model\Media\ModelName::where('published','=','1')->where('videoType','=','sport')->where('sport','<=',1)->where('sportanons','<>','1')->where('sportanons','<>','2')->where('sportanons','<>','3')->orderBy('id','desc')->take('8')->get();
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }

        return view('Front::channel.sport.videos',[
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,
            'topVideos1' => $topVideos1,
            'topVideos2' => $topVideos2,
            'topVideos3' => $topVideos3,
            'sportProjects' => $sportProjects,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
        }

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $perPage = 16;
        $allVideos = \Model\Media\ModelName::where('published','=','1')->where('program','=',$project->id)->orderBy('id','desc')->paginate($perPage);
       
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }


        return view('Front::channel.sport.project',[

            'project' => $project,
            'perPage' => $perPage,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,
            'sportProjects' => $sportProjects,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

            ]
        );
    }


    public function video($media)
    {
        $lc = app()->getlocale();

        $video = \Model\Media\ModelName::where('id','=',$media)->first(); // full video array

        $video->incrementViewed();

        $projectId = $video->program; // 0

        $videoType = $video->videoType; // serials
        $videoName = $video->name;

        $MediaCategory = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }

        if($lc == 'kg'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result){
                $videoProject = $result->getName();
            }else{
                $videoProject = '';
            }

            $result1 = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
            $getVideoTypeName = $result1->getName();

            if($projectId > 0){
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } elseif($projectId  == 0) {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }


        }elseif($lc == 'ru'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result != null){
                $videoProject = $result->getNameRu();
            }else{
                $videoProject = '';
            }

            $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
            $getVideoTypeName = $result->getNameRu();

            if($projectId > 0){
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } else {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }

        }

        $MediaCategories = \Model\MediaCategory\ModelName::get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
        }

        $mediaAll = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        return view('Front::channel.sport.video',[
            'video' => $video,
            'videoName' => $videoName,
            'videoProject' => $videoProject,
            'getVideoTypeName'=> $getVideoTypeName,
            'relatedVideos' => $relatedVideos,

            'mediaAll' => $mediaAll,
            'MediaCategories' => $MediaCategories,
            'MediaCategory' => $MediaCategory,

            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'sportProjects' => $sportProjects,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }

    public function photos(Request $request, $galleryId)
    {

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        $gallery = \Model\PhotoParent\ModelName::where('sport','=','1')->where('id','=',$galleryId)->first();
        $gallery->incrementViewed();
        if($gallery != null){

            $images = json_decode($gallery->images);
        }else{
            $images = null;
        }
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
        }

        return view('Front::channel.sport.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'sportProjects' => $sportProjects,
            'projectList' => $projectList,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }
    public function gallery()
    {
        $channel = \Model\Channel\ModelName::name('sport')->first();
        $perPage = 12;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('sport','=','1')->orderBy('id', 'desc')->paginate($perPage);
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
            $photoGalleriesTop = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('name','<>','')->take('10')->orderBy('id','desc')->skip('0')->take('2')->get();
            $photoGalleries = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('name','<>','')->take('10')->orderBy('id','desc')->skip('2')->paginate($perPage);
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
            $photoGalleriesTop = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('nameRu','<>','')->take('10')->orderBy('id','desc')->take('2')->get();
            $photoGalleries = \Model\PhotoParent\ModelName::where('sport','=','1')->where('published','=',true)->where('nameRu','<>','')->take('10')->orderBy('id','desc')->skip('2')->paginate($perPage);
        }
        // Photo Gallery
        
        return view('Front::channel.sport.gallery', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleriesTop' => $photoGalleriesTop,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,
            'sportProjects' => $sportProjects,
            'projectList' => $projectList,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }

public function teleprogram(Request $request)
    {
        $channel = \Model\Channel\ModelName::where('name','=','sport')->first();
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        date_default_timezone_set('Asia/Bishkek');
        $now = date("d-m-Y H:i");
        $currentDate = date('d-m-Y');
        $currentTime = date('H:i');
        $weekDay = date('N', strtotime($now));

        if($channel){
            $schedules = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->orderBy('date', 'desc')->get();

            for($i=1; $i<=7; $i++){
                if($i < $weekDay){
                    $weekDayNew = date('d-m-Y', strtotime('-'.($weekDay - $i).' day'));
                    $week[] = $weekDayNew;
                } elseif ($i > $weekDay) {
                    $weekDayNew = date('d-m-Y', strtotime('+'.($i - $weekDay).' day'));
                    $week[] = $weekDayNew;
                } else {
                    $weekDayNew = date('d-m-Y', strtotime($now));
                    $week[] = $weekDayNew;
                }
            }
            if(!empty($schedules)){
                $programs = array();
                foreach($schedules as $schedule){
                    $scheduleWeek = date('N',strtotime($schedule->date));
                    for($j=0; $j<count($week);$j++){;
                        if(strtotime($week[$j]) == strtotime($schedule->date)){
                            $program = json_decode($schedule->program);
                            $programNew = array_add($program, 'date', $schedule->date);
                            $programs[] =$programNew;
                        }
                    }
                }
                $programs = array_reverse($programs);
            }
        }

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }
//        dd($programs);
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
        }

        return view('Front::channel.sport.teleprogram', [
            'lc' => $lc,
            'currentDate' => $currentDate,
            'currentTime' => $currentTime,
            'backgroundMain' => $backgroundMain,
            'schedules' => $schedules,
            'programs' => $programs,
            'week' => $week,
            'sportProjects' => $sportProjects,
            'projectList' => $projectList,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

        ]);
    }

    public function about()
    {
        $channel = \Model\Channel\ModelName::name('sport')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $lc = app()->getlocale();
       
        return view('Front::channel.sport.about', [
            'lc' => $lc,
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

        ]);
    }

    public function announcements()
    {
        $perPage = 10;
        $channel = \Model\Channel\ModelName::name('sport')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();
        $lc = app()->getlocale();

        $anons = \Model\Media\ModelName::where('sport','=','1')->where('published','=',true)->where('sportanons','>=','1')->orderBy('id','desc')->paginate($perPage);
       
        return view('Front::channel.sport.announcements', [
            'perPage' => $perPage,
            'lc' => $lc,
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'anons' => $anons,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,

        ]);
    }

    public function announcement($media)
    {
        $lc = app()->getlocale();

        $announcement = \Model\Media\ModelName::where('id','=',$media)->first(); // full video array

        $announcement->incrementViewed();

        $projectId = $announcement->program; // 0

        $videoType = $announcement->videoType; // serials
        $videoName = $announcement->name;

        $MediaCategory = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('name','<>','' )->orderBy('name','asc')->get();
        }else{
            $sportProjects = \Model\Project\ModelName::where('published','=',true)->where('sport','=',1)->where('nameRu','<>','' )->orderBy('nameRu','asc')->get();
        }

        if($lc == 'kg'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result){
                $videoProject = $result->getName();
            }else{
                $videoProject = '';
            }

            $result1 = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
            $getVideoTypeName = $result1->getName();

            if($projectId > 0){
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$announcement->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } elseif($projectId  == 0) {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$announcement->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }


        }elseif($lc == 'ru'){
            $result = \Model\Project\ModelName::where('id','=',$projectId)->first();
            if($result != null){
                $videoProject = $result->getNameRu();
            }else{
                $videoProject = '';
            }

            $result = \Model\MediaCategory\ModelName::where('videoType','=',$videoType)->first();
            $getVideoTypeName = $result->getNameRu();

            if($projectId > 0){
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$announcement->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } else {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('id','<>',$announcement->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }

        }

        $MediaCategories = \Model\MediaCategory\ModelName::get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('name','asc')->get();
        }else{
            $projectList = \Model\Project\ModelName::where('sport','=','1')->orderBy('nameRu','asc')->get();
        }

        $mediaAll = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','11')->first();

        return view('Front::channel.sport.announcement',[
            'announcement' => $announcement,
            'videoName' => $videoName,
            'videoProject' => $videoProject,
            'getVideoTypeName'=> $getVideoTypeName,
            'relatedVideos' => $relatedVideos,

            'mediaAll' => $mediaAll,
            'MediaCategories' => $MediaCategories,
            'MediaCategory' => $MediaCategory,

            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'sportProjects' => $sportProjects,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionLeft'  => $this->positionLeft,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
        ]);
    }


}
