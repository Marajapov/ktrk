<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
use \Model\MediaCategory\ModelName as MediaCategory;
class MadaniyatController extends Controller
{
  public function __construct()
  {
  }


  public function Home()
  {

    return view('Front::channel.madaniyat.comingsoon',[]);

    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    $lc = app()->getlocale();
        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('birinchi','=',1)->where('birinchiProgram','<','0')->where('title','<>','')->published()->orderBy('id','desc')->take(4)->get();
        }else{
            $postAll = \Model\Post\ModelName::where('birinchi','=',1)->where('birinchiProgram','<','0')->where('titleRu','<>','')->published()->orderBy('id','desc')->take(4)->get();
        }

    return view('Front::channel.madaniyat.test', [
      'channel' => $channel,
      'backgroundMain' => $backgroundMain,
      'lc' => $lc,
      'postAll' => $postAll,
    ]);
  }

  public function Test(Request $request)
  {

//    return view('Front::channel.madaniyat.comingsoon',[]);

    $banner = \Model\Anons\ModelName::where('channel','=','5')->where('published','=','1')->where('madaniyatsoon','<>','1')->orderBy('id','=','desc')->take(3)->get();    

    $anons = \Model\Anons\ModelName::where('channel','=','5')->where('published','=','1')->where('madaniyatsoon','=','1')->orderBy('id','=','desc')->take(5)->get();
    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    $lc = app()->getlocale();
    if($lc == 'kg'){
        $postAll = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('title','<>','')->where('birinchiProgram','>',0)->take(4)->get();
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
    }else{
        $postAll = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('titleRu','<>','')->where('birinchiProgram','>',0)->take(4)->get();
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
    }
    $photoGalleries = \Model\PhotoParent\ModelName::where('birinchi','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->take(6)->get(); 

    $media = \Model\Media\ModelName::where('published','=','1')->where('madaniyat','=','1')->orderBy('viewed','desc')->take(9)->get();
    $projectList = \Model\Project\ModelName::where('madaniyat','=','1')->orderBy('id','desc')->get(); 

    return view('Front::channel.madaniyat.test', [
      'channel' => $channel,
      'backgroundMain' => $backgroundMain,
      'lc' => $lc,
      'postAll' => $postAll,
      'photoGalleries' => $photoGalleries,
      'anons' => $anons,
      'banner' => $banner,
      'birinchiProjects' => $birinchiProjects,
      'media' => $media,
      'projectList' => $projectList,
    ]);
  }

  public function Posts()
  {
    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    return view('Front::channel.madaniyat.posts', ['channel' => $channel]);
  }

  public function about()
  {
    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    return view('Front::channel.madaniyat.about', [
      'channel' => $channel,
      'backgroundMain' => $backgroundMain,
    ]);
  }
  public function photos()
  {
    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
    $madaniyatProjects = \Model\Project\ModelName::where('published','=',true)->where('madaniyat', '=', 1)->get();
    
    $lc = app()->getlocale();
    if($lc == 'kg'){
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
    }else{
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
    }

    return view('Front::channel.madaniyat.photos', [      
      'lc' => $lc,
      'channel' => $channel,
      'backgroundMain' => $backgroundMain,
      'madaniyatProjects' => $madaniyatProjects,
      'birinchiProjects' => $birinchiProjects,
    ]);
  }
  public function broadcasts()
  {
    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    return view('Front::channel.madaniyat.broadcasts', [
      'channel' => $channel,
      'backgroundMain' => $backgroundMain,
    ]);
  }

  public function ComingSoon()
  {
    $lc = app()->getlocale();
    return view('Front::channel.madaniyat.comingsoon',[
      'lc' => $lc
    ]);
  }

  public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $perPage = 12;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('birinchi','=','1')->orderBy('id', 'desc')->paginate($perPage);        
        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }
        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('birinchi','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->paginate($perPage);       
        return view('Front::channel.madaniyat.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,
            'birinchiProjects' => $birinchiProjects,  

            ]);
    }

    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('birinchi','=','1')->where('id','=',$galleryId)->first();
        $gallery->incrementViewed();
        if($gallery != null){

        $images = json_decode($gallery->images);
    }else{
        $images = null;
    }
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'birinchiProjects' => $birinchiProjects,
            ]);
    }

  public function videos()
  {
    $channel = \Model\Channel\ModelName::name('madaniyat')->first();

    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    return view('Front::channel.madaniyat.videos', [
      'channel' => $channel,
      'backgroundMain' => $backgroundMain,
    ]);
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
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();

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
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('madaniyat','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } elseif($projectId  == 0) {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('madaniyat','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
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
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('madaniyat','=','1')->where('id','<>',$video->id)->where('program','=',$projectId)->orderBy('id','desc')->get();
            } else {
                $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('madaniyat','=','1')->where('id','<>',$video->id)->where('videoType','=',$videoType)->orderBy('id','desc')->get();
            }

        }

        $MediaCategories = \Model\MediaCategory\ModelName::get();

        $projectList = \Model\Project\ModelName::where('madaniyat','=','1')->orderBy('id','desc')->get();

        $mediaAll = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.madaniyat.video',[
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
            'birinchiProjects' => $birinchiProjects
        ]);
    }


    public function allVideos()
    {
        $projectList = \Model\Project\ModelName::where('madaniyat','=','1')->orderBy('id','desc')->get();
        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $perPage = 15;

        $allVideos = \Model\Media\ModelName::where('published','=','1')->where('madaniyat','=','1')->orderBy('id','desc')->paginate($perPage);
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi', '=', 1)->get();

        return view('Front::channel.madaniyat.all',[
            'perPage'=> $perPage,
            'mainBanner'   => $mainBanner,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'allVideos' => $allVideos,
            'birinchiProjects' => $birinchiProjects,
        ]);
    }

    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::where('madaniyat','=','1')->orderBy('id','desc')->get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::where('published','=','1')->orderBy('id','desc')->get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedVideos = \Model\Media\ModelName::where('published','=','1')->where('program','=',$project->id)->orderBy('id','desc')->get();
        $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('madaniyat', '=', 1)->get();


        return view('Front::channel.madaniyat.project',[
                
                'project' => $project,
                'mainBanner'   => $mainBanner,
                'projectList' => $projectList,
                'backgroundMain' => $backgroundMain,
                'relatedVideos' => $relatedVideos,
                'birinchiProjects' => $birinchiProjects,

            ]
        );
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
            return redirect()->route('birinchi.home');
        }

        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $weekFromNow = date('Y-m-d', strtotime('-10 days'));

        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get(); 
            $popArticles = \Model\Post\ModelName::where('birinchi','=','1')->where('created_at','>',$weekFromNow)->languagekg()->where('birinchiProgram','>',0)->orderBy('viewed','desc')->get();   
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
            $popArticles = \Model\Post\ModelName::where('birinchi','=','1')->where('created_at','>',$weekFromNow)->languageru()->where('birinchiProgram','>',0)->orderBy('viewed','desc')->get();
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

           return view('Front::channel.madaniyat.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            'content' => $contentFinal,
            'images' => $images,
            'popArticles' => $popArticles,              
            'lc' => $lc        
            ]);
    }

    public function allnews()
    {
        $channel = \Model\Channel\ModelName::name('birinchi')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $perPage = 10; 
        $lc = app()->getlocale();
        $weekFromNow = date('Y-m-d', strtotime('-10 days'));
        if($lc == 'kg'){
          
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('title','<>','')->where('birinchiProgram','>',0)->paginate($perPage);
            $popArticles = \Model\Post\ModelName::where('birinchi','=','1')->where('created_at','>',$weekFromNow)->languagekg()->where('birinchiProgram','>',0)->orderBy('viewed','desc')->get();   
        }else{

            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('titleRu','<>','')->where('birinchiProgram','>',0)->paginate($perPage); 
            $popArticles = \Model\Post\ModelName::where('birinchi','=','1')->where('created_at','>',$weekFromNow)->languageru()->where('birinchiProgram','>',0)->orderBy('viewed','desc')->get();    
        }

        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        } 

           return view('Front::channel.madaniyat.allnews', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'birinchiProjects' => $birinchiProjects,
            'perPage' => $perPage,
            'postAll' => $postAll,
            'popArticles' => $popArticles,
            'lc' => $lc
            ]);
    }

    public function projects(\Model\Project\ModelName $project)
    {
        $lc = app()->getlocale();
        if($lc == 'kg' && ($project->name != '')){         
        }elseif($lc == 'ru' && ($project->nameRu != '')){           
        }else{
            return redirect()->route('birinchi.home');
        }

        $projectList = \Model\Project\ModelName::get();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Post\ModelName::where('published','=',true)->where('birinchi','=','1')->where('birinchiProgram','=',$project->id)->get();

        // dd($relatedNews);

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('name','<>','' )->get();    
        }else{
            $birinchiProjects = \Model\Project\ModelName::where('published','=',true)->where('birinchi','=',1)->where('nameRu','<>','' )->get();
        }



        return view('Front::channel.madaniyat.projects',[
                
            'project' => $project,
    //      'MediaCategories'       => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'birinchiProjects' => $birinchiProjects,                

            ]
        );
    }

}
