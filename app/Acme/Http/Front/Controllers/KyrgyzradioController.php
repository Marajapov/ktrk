<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class KyrgyzradioController extends Controller
{
    public function __construct()
    {
    }


    public function Home(Request $request)
    {


     // return view('Front::channel.kyrgyzradio.comingsoon',[]);

        $channel = \Model\Channel\ModelName::where('name','=','kyrgyzradio')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();
        
         // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('kyrgyzradio','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->orderBy('id','desc')->get();

        $anons = \Model\Anons\ModelName::where('channel','=','6')->where('kyrgyzradiotop','<>','1')->where('published','=','1')->orderBy('id','=','desc')->take(4)->get();
        $kyrgyzradiotop = \Model\Anons\ModelName::where('channel','=','6')->where('kyrgyzradiotop','=','1')->where('published','=','1')->orderBy('id','=','desc')->take(3)->get();
       
        $quote = \Model\Quote\ModelName::where('published','=','1')->where('channel', '=', '6')->orderBy('id','=','desc')->orderBy('id','desc')->get();

        $peredachi = \Model\Post\ModelName::where('kyrgyzradio','=',1)->published()->orderBy('id','desc')->take(3)->get(); 

        date_default_timezone_set('Asia/Bishkek');
        $now = date("d-m-Y H:i");
        $currentDate = date('d-m-Y');
        $currentTime = date('H:i');
        $weekDay = date('N', strtotime($now));

        if($channel){
            $schedule = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->where('date','=',$currentDate)->first();

            if(!empty($schedule)){
                $program = json_decode($schedule->program);
                // dd($program);
                $programNew = array_add($program, 'date', $schedule->date);
            }else{
                $program = '';
            }
        }

     // dd($program);
        return view('Front::channel.kyrgyzradio.index', [
            'channel' => $channel,
            'anons' => $anons,
            'kyrgyzradiotop' => $kyrgyzradiotop,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            'quote' => $quote,
            'currentDate' => $currentDate,
            'currentTime' => $currentTime,
            'program' => $program,
            'peredachi' => $peredachi,
            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

        return view('Front::channel.kyrgyzradio.posts', ['channel' => $channel]);
    }    

    public function about()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();
        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();
        return view('Front::channel.kyrgyzradio.about', [
            'channel' => $channel,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            ]);
    }

    public function citations()
    {
      $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();

      $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

      $quote = \Model\Quote\ModelName::where('published','=','1')->where('channel', '=', '6')->orderBy('id','=','desc')->orderBy('id','desc')->get();

      return view('Front::channel.kyrgyzradio.citations', [
        'channel' => $channel,
        'kyrgyzradioProjects' => $kyrgyzradioProjects,
        'quote' => $quote,
      ]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::get();
        $perPage = 12;
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();

        $relatedNews = \Model\Post\ModelName::where('kyrgyzradioProgram',$project->id)->where('published','=',true)->where('kyrgyzradio',1)->paginate($perPage);
        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();


        return view('Front::channel.kyrgyzradio.project',[
                
            'project' => $project,
            'perPage' => $perPage,
    //      'MediaCategories'       => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            ]
        );
    }

    public function anons()
    {
      $lc = app()->getlocale();
      $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();
      $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();
      $kyrgyzradiotop = \Model\Anons\ModelName::where('channel','=','6')->where('kyrgyzradiotop','=','1')->where('published','=','1')->orderBy('id','=','desc')->get();
      $perPage = 24;

      return view('Front::channel.kyrgyzradio.anons',[
          'lc' => $lc,
          'perPage' => $perPage,
          'backgroundMain' => $backgroundMain,
          'kyrgyzradioProjects' => $kyrgyzradioProjects,
          'kyrgyzradiotop' => $kyrgyzradiotop,
        ]
      );
    }

    public function anonses()
    {
      $lc = app()->getlocale();
      $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();
      $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();
      $kyrgyzradiotop = \Model\Anons\ModelName::where('channel','=','6')->where('kyrgyzradiotop','=','1')->where('published','=','1')->orderBy('id','=','desc')->get();
      $perPage = 24;
      $channel = \Model\Channel\ModelName::where('name','=','kyrgyzradio')->first();
      $currentDate = date('d-m-Y');
      $currentTime = date('H:i');


      if($channel){
        $schedule = \Model\Schedule\ModelName::where('channel_id','=',$channel->id)->where('date','=',$currentDate)->first();

        if(!empty($schedule)){
          $program = json_decode($schedule->program);
          // dd($program);
          $programNew = array_add($program, 'date', $schedule->date);
        }else{
          $program = '';
        }
      }

      return view('Front::channel.kyrgyzradio.anonses',[
          'lc' => $lc,
          'perPage' => $perPage,
          'backgroundMain' => $backgroundMain,
          'kyrgyzradioProjects' => $kyrgyzradioProjects,
          'kyrgyzradiotop' => $kyrgyzradiotop,
          'channel' => $channel,
          'currentDate' => $currentDate,
          'currentTime' => $currentTime,

          'program' => $program,
        ]
      );
    }

    public function show(\Model\Post\ModelName $post)
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

        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();
        
        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

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

        $weekFromNow = date('Y-m-d', strtotime('-10 days'));
        $popArticles = \Model\Post\ModelName::where('kyrgyzradio','=','1')->where('created_at','>',$weekFromNow)->languagekg()->orderBy('viewed','desc')->take(6)->get();
        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        }

        return view('Front::channel.kyrgyzradio.show', [
            'channel' => $channel,
            'post' => $post,
            'content' => $contentFinal,
            'backgroundMain' => $backgroundMain,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            'images' => $images,
            'popArticles' => $popArticles,  
            ]);
    }

    public function projects()
    {
        
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();       
        
        $perPage = 10;  
        
        $postAll = \Model\Post\ModelName::where('kyrgyzradio','=',1)->published()->orderBy('id','desc')->paginate($perPage);         
        
        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

        return view('Front::channel.kyrgyzradio.projects', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'perPage' => $perPage,
            'postAll' => $postAll,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            ]);
    }

        
    public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('kyrgyzradio')->first();
        $perPage = 24;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('kyrgyzradio','=','1')->orderBy('id', 'desc')->paginate($perPage);        

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();    

        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('kyrgyzradio','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();        
        return view('Front::channel.kyrgyzradio.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,

            ]);
    }

   // For photos page Dostuk 
    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('kyrgyzradio','=','1')->where('id','=',$galleryId)->first();
        $gallery->incrementViewed();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->where('channel_id','=','6')->first();

        $kyrgyzradioProjects = \Model\Project\ModelName::where('published','=',true)->where('kyrgyzradio', '=', 1)->get();

        return view('Front::channel.kyrgyzradio.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'kyrgyzradioProjects' => $kyrgyzradioProjects,
            ]);
    }


}
