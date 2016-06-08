<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class DostukController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        // return view('Front::channel.dostuk.comingsoon',[]);
        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

         // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('published','=',true)->take('6')->orderBy('id','desc')->get();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languagekg()->take(6)->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languageru()->take(6)->orderBy('id','desc')->get();
        }

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();
        $anons = \Model\Anons\ModelName::where('channel','=','8')->where('published','=','1')->where('dostuktop','<>','1')->orderBy('id','=','desc')->take(10)->get();
        $dostuktop = \Model\Anons\ModelName::where('channel','=','8')->where('dostuktop','=','1')->where('published','=','1')->orderBy('id','=','desc')->take(3)->get();

        $project = \Model\Project\ModelName::where('dostuk','=', true)->first();

        return view('Front::channel.dostuk.index', [
            'channel' => $channel,
            'anons' => $anons,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'allPost' => $allPost,
            'dostukProjects' => $dostukProjects,
            'dostuktop' => $dostuktop,
            'project' => $project,

            ]);
    }

    public function Posts()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        return view('Front::channel.dostuk.posts', ['channel' => $channel]);
    }

    public function allnews()
    {
        
        $channel = \Model\Channel\ModelName::name('dostuk')->first();

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languagekg()->published()->orderBy('id','desc')->get();    
        }else{
            $allPost = \Model\Post\ModelName::where('dostuk','=',1)->languageru()->published()->orderBy('id','desc')->get();
        }

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        return view('Front::channel.dostuk.allnews', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'allPost' => $allPost,
            'dostukProjects' => $dostukProjects,

            ]);
    }
    
    public function allphotos()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $perPage = 12;

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        $postAll = \Model\Media\ModelName::where('published','=',true)->where('dostuk','=','1')->orderBy('id', 'desc')->paginate($perPage);        


        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->paginate($perPage);        
        return view('Front::channel.dostuk.allphotos', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'photoGalleries' => $photoGalleries,
            'postAll' => $postAll,
            'perPage' => $perPage,
            'dostukProjects' => $dostukProjects,
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
        $project = \Model\Project\ModelName::where('dostuk','=', true)->first();

        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();       
        
        
        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
        if($parent != null){
            $images = json_decode($parent->images);    
        }else{
            $images = null;
        }

        if($lc == 'kg'){
            $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->where('name','<>','' )->get();
            $relatedNews = \Model\Project\ModelName::where('id','<>',$project->id)->where('id','<>',$post->id)->where('published','=',true)->where('dostuk','=',$project->id)->orderBy('id','desc')->where('name','<>','' )->take(8)->get();
            
            $weekFromNow = date('Y-m-d', strtotime('-700 days'));
            $popArticles = \Model\Post\ModelName::where('dostuk','=','1')->where('created_at','>',$weekFromNow)->languagekg()->orderBy('viewed','desc')->take(6)->get();
            if(count($popArticles) > 0){
                $popArticles = $popArticles;
            }else{
                $popArticles = null;
            }
        }else{
             $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->where('nameRu','<>','' )->get();
            $relatedNews = \Model\Project\ModelName::where('id','<>',$project->id)->where('id','<>',$post->id)->where('published','=',true)->where('dostuk','=',$project->id)->orderBy('id','desc')->where('nameRu','<>','' )->take(8)->get();

            $weekFromNow = date('Y-m-d', strtotime('-700 days'));
            $popArticles = \Model\Post\ModelName::where('dostuk','=','1')->where('created_at','>',$weekFromNow)->languageru()->orderBy('viewed','desc')->take(6)->get();
            if(count($popArticles) > 0){
                $popArticles = $popArticles;
            }else{
                $popArticles = null;
            }
        }
        
           return view('Front::channel.dostuk.news', [
            'channel' => $channel,
            'post' => $post,
            'content' => $contentFinal,
            'backgroundMain' => $backgroundMain,
            'dostukProjects' => $dostukProjects,
            'images' => $images,
            'project' => $project,
            'relatedNews' => $relatedNews,
            'lc' => $lc,
            'popArticles' => $popArticles,
            ]);
    }
    
    public function project(\Model\Project\ModelName $project)
    {
        $projectList = \Model\Project\ModelName::get();
        $lc = app()->getlocale();
//        $MediaCategory = \Model\MediaCategory\ModelName::get();
        $mediaAll = \Model\Media\ModelName::get();

        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $relatedNews = \Model\Project\ModelName::where('published','=',true)->where('dostuk','=',$project->id)->get();

        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();


        return view('Front::channel.dostuk.project',[
                
            'project' => $project,
    //      'MediaCategories'       => $MediaCategories,
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'projectList' => $projectList,
            'backgroundMain' => $backgroundMain,
            'relatedNews' => $relatedNews,
            'dostukProjects' => $dostukProjects,                
            'lc' => $lc,                

            ]
        );
    }

    public function projects()
    {
        $channel = \Model\Channel\ModelName::name('dostuk')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $perPage = 10; 
        $lc = app()->getlocale();
        $weekFromNow = date('Y-m-d', strtotime('-100  days'));
        if($lc == 'kg'){
          
            $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk','=',1)->where('name','<>','' )->get();
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('dostuk','=','1')->where('title','<>','')->where('dostukProgram','>',0)->paginate($perPage);
            $popArticles = \Model\Post\ModelName::where('dostuk','=','1')->where('created_at','>',$weekFromNow)->languagekg()->where('dostukProgram','>',0)->orderBy('viewed','desc')->get();   
        }else{

            $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk','=',1)->where('nameRu','<>','' )->get();
            $postAll = \Model\Post\ModelName::where('published','=',true)->where('dostuk','=','1')->where('titleRu','<>','')->where('dostukProgram','>',0)->paginate($perPage); 
            $popArticles = \Model\Post\ModelName::where('dostuk','=','1')->where('created_at','>',$weekFromNow)->languageru()->where('dostukProgram','>',0)->orderBy('viewed','desc')->get();    
        }

        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        } 

           return view('Front::channel.dostuk.projects', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'dostukProjects' => $dostukProjects,
            'perPage' => $perPage,
            'postAll' => $postAll,
            'popArticles' => $popArticles,
            'lc' => $lc,
            ]);
    }

     public function categoryPage(\Model\Category\ModelName $category)
    {
        $lc = app()->getlocale();
        $perPage = 12;
        $category_id = $category->id;

        if($lc == 'kg'){
            $posts = \Model\Post\ModelName::where('dostuk','=','1')->where('published','=','1')->where('category_id','=',$category_id)->where('title','<>','')->orderBy('id','desc')->paginate($perPage);
        }else{
            $posts = \Model\Post\ModelName::where('dostuk','=','1')->where('published','=','1')->where('category_id','=',$category_id)->where('titleRu','<>','')->orderBy('id','desc')->paginate($perPage);
        }

        $categories = \Model\Category\ModelName::where('dostuk','=','1')->get();  
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $lc = app()->getlocale();
        if($lc == 'kg'){
            $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk','=',1)->where('name','<>','' )->get();    
        }else{
            $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk','=',1)->where('nameRu','<>','' )->get();
        }
        
        return view('Front::channel.dostuk.category',[
            'lc' =>$lc,
            'perPage'=> $perPage,
            'posts' => $posts,
            'category' => $category,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            'dostukProjects' => $dostukProjects,

        ]);
        
    }

    public function about()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();
        return view('Front::channel.dostuk.about',[                
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
            'dostukProjects' => $dostukProjects,               
            ]
        );
    }

    public function anons()
    {
      $lc = app()->getlocale();
      $perPage = 12;
      $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
      $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();
      $anons = \Model\Anons\ModelName::where('channel','=','8')->where('published','=','1')->where('dostuktop','<>','1')->orderBy('id','=','desc')->take(10)->get();
      $dostuktop = \Model\Anons\ModelName::where('channel','=','8')->where('dostuktop','=','1')->where('published','=','1')->orderBy('id','=','desc')->take(3)->get();
      $dostuk = \Model\Anons\ModelName::where('channel','=','8')->where('dostuktop','=','1')->where('published','=','1')->orderBy('id','=','desc')->paginate($perPage); 

      return view('Front::channel.dostuk.anons',[
          'lc' => $lc,
          'perPage' => $perPage,
          'anons' => $anons,
          'backgroundMain' => $backgroundMain,
          'dostukProjects' => $dostukProjects,
          'dostuktop' => $dostuktop,
          'dostuk' => $dostuk,
        ]
      );
    }

   // For photos page Dostuk 
    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('dostuk','=','1')->where('id','=',$galleryId)->first();
        $gallery->incrementViewed();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $dostukProjects = \Model\Project\ModelName::where('published','=',true)->where('dostuk', '=', 1)->get();

        return view('Front::channel.dostuk.photos',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            'dostukProjects' => $dostukProjects,
            ]);
    }


}
