<?php
namespace Front\Controllers;
use Illuminate\Http\Request;
class MinkiyalController extends Controller
{
    public function __construct()
    {
    }


    public function Home()
    {
        

        $channel = \Model\Channel\ModelName::name('minkiyal')->first();

        $anons = \Model\Anons\ModelName::where('channel','=','9')->where('minkiyaltop','<>','1')->where('minkiyalbottom','<>','1')->where('published','=','1')->orderBy('id','=','desc')->get();
        $anonstop = \Model\Anons\ModelName::where('channel','=','9')->where('minkiyaltop','=','1')->where('published','=','1')->orderBy('id','=','desc')->take(4)->get();
        $anonsbottom = \Model\Anons\ModelName::where('channel','=','9')->where('minkiyalbottom','=','1')->where('published','=','1')->orderBy('id','=','desc')->take(4)->get();

        $popArticles = \Model\Post\ModelName::where('minkiyal','=','1')->languagekg()->orderBy('id','desc')->take(3)->get();
        
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $photoGalleries = \Model\PhotoParent\ModelName::where('minkiyal','=','1')->where('published','=',true)->orderBy('id','desc')->take(6)->get();

        $videoLive = \Model\Media\ModelName::where('published','=',true)->where('minkiyal','=','1')->orderBy('id', 'desc')->take(4)->get();        

            return view('Front::channel.minkiyal.index', [
                'channel' => $channel,
                'anons' => $anons,
                'anonstop' => $anonstop,
                'anonsbottom' => $anonsbottom,
                'backgroundMain' => $backgroundMain,
                'photoGalleries' => $photoGalleries,
                'popArticles' => $popArticles,
                'videoLive' => $videoLive,
                ]);
  }

    public function Posts()
    {
        $perPage = 12;
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $channel = \Model\Channel\ModelName::name('minkiyal')->first();
        $photoGalleries = \Model\PhotoParent\ModelName::where('minkiyal','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->paginate($perPage);        
        return view('Front::channel.minkiyal.posts', [
            'channel' => $channel,
            'photoGalleries' => $photoGalleries,
            'backgroundMain' => $backgroundMain,
            'perPage' => $perPage,
            ]);
    }

  public function about()
  {
    $lc = app()->getlocale();
    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    return view('Front::channel.minkiyal.about',[
        'lc' => $lc,
        'backgroundMain' => $backgroundMain,
      ]);
  }

    public function news(\Model\Post\ModelName $post)
    {
        $post->incrementViewed();

        $channel = \Model\Channel\ModelName::name('minkiyal')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        
        $minkiyalProjects = \Model\Project\ModelName::where('published','=',true)->where('minkiyal', '=', 1)->get();

        $parent = \Model\PhotoParent\ModelName::where('id','=',$post->parentId)->first();
        

        if($parent != null){
            $images = json_decode($parent->images);    
        }else{
            $images = null;
        }   

        $relatedNews = \Model\Post\ModelName::where('published','=',true)->where('minkiyal','=','1')->languagekg()->where('category_id','=',$post->category_id)->orderBy('id','desc')->take(8)->get();

        $weekFromNow = date('Y-m-d', strtotime('-17 days'));
        $popArticles = \Model\Post\ModelName::where('minkiyal','=','1')->where('created_at','>',$weekFromNow)->languagekg()->orderBy('viewed','desc')->take(6)->get();
        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        }

        return view('Front::channel.minkiyal.news', [
            'channel' => $channel,
            'post' => $post,
            'backgroundMain' => $backgroundMain,
            'minkiyalProjects' => $minkiyalProjects,
            'images' => $images,
            'popArticles' => $popArticles,  
            'relatedNews' => $popArticles  
            ]);
    }

    public function allnews()
    {
        
        $channel = \Model\Channel\ModelName::name('minkiyal')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();       
        
        $perPage = 10;  
        
        $postAll = \Model\Post\ModelName::where('minkiyal','=',1)->published()->orderBy('id','desc')->paginate($perPage);         
        
        $minkiyalProjects = \Model\Project\ModelName::where('published','=',true)->where('minkiyal', '=', 1)->get();
        $weekFromNow = date('Y-m-d', strtotime('-17 days'));
        $popArticles = \Model\Post\ModelName::where('minkiyal','=','1')->where('created_at','>',$weekFromNow)->languagekg()->orderBy('viewed','desc')->take(6)->get();
        if(count($popArticles) > 0){
            $popArticles = $popArticles;
        }else{
            $popArticles = null;
        }

        return view('Front::channel.minkiyal.allnews', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,
            'perPage' => $perPage,
            'postAll' => $postAll,
            'minkiyalProjects' => $minkiyalProjects,
            'popArticles' => $popArticles,
            ]);
    }

    public function djRasul()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj.rasul',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }    
    public function djAkyl()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj.akyl',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }
    public function djKanat()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj.kanat',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }    
    public function djBekzat()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj.bekzat',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }     
    public function djUlan()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj.ulan',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }     
    public function djJazgyl()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj.jazgyl',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    } 

    public function djs()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.djs',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function dj_info()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.minkiyal.dj_info',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,
        ]);
    }

    public function Gallery(Request $request, $galleryId)
    {

        $gallery = \Model\PhotoParent\ModelName::where('minkiyal','=','1')->where('published','=',true)->where('id','=',$galleryId)->first();
        $gallery->incrementViewed();
        $images = json_decode($gallery->images);
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    
        return view('Front::channel.minkiyal.post',[
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            ]);
    }

  public function live()
  {
    $lc = app()->getlocale();
    $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

    return view('Front::channel.minkiyal.live',[
        'lc' => $lc,
        'backgroundMain' => $backgroundMain,
      ]);
  }

}
