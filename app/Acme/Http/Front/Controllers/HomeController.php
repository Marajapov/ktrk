<?php
namespace Front\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Input;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    protected $positionTop, $positionRight, $positionCenter, $positionBottom;
    
    public function __construct()
    {
        $this->positionTop = \Model\Banner\ModelName::where('positionTop','=','1')->first();
        $this->positionRight = \Model\Banner\ModelName::where('positionRight','=','1')->first();
        $this->positionCenter = \Model\Banner\ModelName::where('positionCenter','=','1')->first();
        $this->positionBottom = \Model\Banner\ModelName::where('positionBottom','=','1')->first();
    }
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function Home()
    {
        $lc = app()->getlocale();
        $channel = \Model\Channel\ModelName::general();
       
        if($lc == 'kg'){
            $generalPosts = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languagekg()->take(6)->skip(0)->orderBy('id', 'desc')->get();    
            $projects = \Model\Project\ModelName::having('name','<>','')->get();
        }elseif($lc == 'ru'){
            $generalPosts = \Model\Post\ModelName::general($channel)->published()->where('general','=','1')->languageru()->take(6)->skip(0)->orderBy('id', 'desc')->get();    
            $projects = \Model\Project\ModelName::where('nameRu','<>','')->get();
        }

        $dayVideo1 = \Model\Media\ModelName::where('dayVideo','=','1')->first();
        $dayVideo2 = \Model\Media\ModelName::where('dayVideo','=','2')->first();
        $dayVideo3 = \Model\Media\ModelName::where('dayVideo','=','3')->first();
        $dayVideo4 = \Model\Media\ModelName::where('dayVideo','=','4')->first();
        $dayVideo5 = \Model\Media\ModelName::where('dayVideo','=','5')->first();

        if($dayVideo1){
            $dayVideo1 = $dayVideo1;
        } else {
            $dayVideo1 = '';
        }
        if($dayVideo2){
            $dayVideo2 = $dayVideo2;
        } else {
            $dayVideo2 = '';
        }
        if($dayVideo3){
            $dayVideo3 = $dayVideo3;
        } else {
            $dayVideo3 = '';
        }
        if($dayVideo4){
            $dayVideo4 = $dayVideo4;
        } else {
            $dayVideo4 = '';
        }
        if($dayVideo5){
            $dayVideo5 = $dayVideo5;
        } else {
            $dayVideo5 = '';
        }

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        $peopleReporters = \Model\PeopleReporter\ModelName::where('published','=',true)->get();


        // Photo Gallery
        $photoGalleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->take('10')->orderBy('id','desc')->get();
        

        $MediaCategories = \Model\MediaCategory\ModelName::orderBy('id','asc')->get();
        $mediaPosts = \Model\Media\ModelName::orderBy('id','desc')->get();


        $categoriesVideos = array();

        foreach($MediaCategories as $MediaCategory){

            $CategoryVideos = \Model\Media\ModelName::where('videoType','=',$MediaCategory->videoType)->orderBy('id','desc')->take(9)->get();

            $categoriesVideos = array_add($categoriesVideos, $MediaCategory->videoType, $CategoryVideos);
        }

        $mediaLastVideos = \Model\Media\ModelName::orderBy('id','desc')->take(9)->get();
        $defaultVideo = 'pnrUhMN8H4Y';
        return view('Front::home', [
            
            'generalPosts'   => $generalPosts,
            'dayVideo1'      => $dayVideo1,
            'dayVideo2'      => $dayVideo2,
            'dayVideo3'      => $dayVideo3,
            'dayVideo4'      => $dayVideo4,
            'dayVideo5'      => $dayVideo5,
            'defaultVideo'   => $defaultVideo,

            'positionTop'    => $this->positionTop,
            'positionRight'  => $this->positionRight,
            'positionCenter' => $this->positionCenter,
            'positionBottom' => $this->positionBottom,
            'peopleReporters' => $peopleReporters,
            'photoGalleries' => $photoGalleries,
            
            'backgroundMain' => $backgroundMain,
            'MediaCategories' => $MediaCategories,
            'categoriesVideos' => $categoriesVideos,
            'mediaLastVideos' => $mediaLastVideos,
            'projects' => $projects,
            ]);
    }

    

    public function Post(\Model\Post\ModelName $post)
    {
        $lc = app()->getlocale();

        $post->incrementViewed();

        $categories = \Model\Category\ModelName::all();
        $positionTop = \Model\Banner\ModelName::top()->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        
        if(($post->parentId != '0') && ($post->parentId != null))
        {
            $parentId = $post->parentId;
            $parentId = \Model\PhotoParent\ModelName::where('id','=',$parentId)->first();
            $photoChilds = \Model\PhotoChild\ModelName::where('parentId','=',$parentId->id)->get();
            
        }else{
            $parentId = '0';
            $photoChilds = '0';
        }

        if($post->related1 != null){
            $related1Post = \Model\Post\ModelName::where('id','=',$post->related1)->first();
        }else{
            $related1Post = null;
        }

        if($post->related2 != null){
            $related2Post = \Model\Post\ModelName::where('id','=',$post->related2)->first();
        }else{
            $related2Post = null;
        }

        if($post->related3 != null){
            $related3Post = \Model\Post\ModelName::where('id','=',$post->related3)->first();
        }else{
            $related3Post = null;
        }
        if($lc == 'kg'){
            $relatedPosts = \Model\Post\ModelName::where('category_id','=',$post->category_id)->languagekg()->take(6)->skip(0)->orderBy('id', 'desc')->get();
        }elseif($lc == 'ru'){
            $relatedPosts = \Model\Post\ModelName::where('category_id','=',$post->category_id)->languageru()->take(6)->skip(0)->orderBy('id', 'desc')->get();
        }
        

        return view('Front::post.post',[
            'post' => $post,

            'related1Post' => $related1Post,
            'related2Post' => $related2Post,
            'related3Post' => $related3Post,

            'relatedPosts' => $relatedPosts,

            'parentId'=> $parentId,
            'photoChilds'=> $photoChilds,

            'categories'=>$categories,
            'positionTop'    => $positionTop,
            'backgroundMain' => $backgroundMain,
            ]);

    }

     public function Posts()
    {        
        $lc = app()->getlocale();
        $perPage = 10;
        if($lc == 'kg'){
            $postAll = \Model\Post\ModelName::where('general','=','1')->where('title','<>','')->orderBy('id','desc')->paginate($perPage);    
        }elseif($lc == 'ru'){
            $postAll = \Model\Post\ModelName::where('general','=','1')->where('titleRu','<>','')->orderBy('id','desc')->paginate($perPage);
        }
        

        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::post.posts',[
            'perPage'=> $perPage,
            'postAll' => $postAll,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);

    }


    public function Balastan()
    {
        $channel = \Model\Channel\ModelName::name('balastan')->first();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::channel.balastan.index', [
            'channel' => $channel,
            'backgroundMain' => $backgroundMain,

            ]);
    }

    public function Muzkanal()
    {
        $channel = \Model\Channel\ModelName::name('muzkanal')->first();

        return view('Front::channel.muzkanal.index', ['channel' => $channel]);
    }

    public function Ktr()
    {
        $channel = \Model\Channel\ModelName::name('ktr')->first();

        return view('Front::channel.ktr.index', ['channel' => $channel]);
    }
    public function Page(\Model\Page\ModelName $page)
    {
        $page->incrementViewed();

        return view('Front::page',['page' => $page]);
    }

    public function searchResult(Request $request)
    {
        $posts = \Model\Post\ModelName::search($request->input('search'))->get();
        $pages = \Model\Page\ModelName::search($request->input('search'))->get();
        $searchKey = $request->input('search');

        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::result', [
            'posts' => $posts,
            'pages' => $pages,
            'searchKey'=>$searchKey,

            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    // Category Page
    public function categoryPage(\Model\Category\ModelName $category)
    {
        $lc = app()->getlocale();
        $perPage = 10;
        $category_id = $category->id;

        if($lc == 'kg'){
            $posts = \Model\Post\ModelName::where('category_id','=',$category_id)->where('title','<>','')->orderBy('id','desc')->paginate($perPage);
        }else{
            $posts = \Model\Post\ModelName::where('category_id','=',$category_id)->where('titleRu','<>','')->orderBy('id','desc')->paginate($perPage);
        }


        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::category.index',[
            'perPage'=> $perPage,
            'posts' => $posts,
            'category' => $category,

            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
        ]);


        
    }

    public function mediaPage(\Model\Media\ModelName $media)
    {
        
        /*$mediaPost = \Model\Media\ModelName::where('id','=',$media);
        dd($mediaPost);*/


        $mainBanner = \Model\Background\ModelName::where('name','=','main')->first();
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $mediaPop = \Model\Media\ModelName::where()->get();

        return view('Front::media.index',[
            'mediaPost' => $media,
            
            'mainBanner'   => $mainBanner,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,

            ]
            );
    }

    public function filterResult(Request $request)
    {
        $lc = app()->getlocale();
        $df = $request->dateFrom;
        $dt = $request->dateTo;

        $dateFrom = date('Y-m-d',strtotime($df));
        $dateTo = date('Y-m-d',strtotime($dt));

        $perPage = 10;

        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        
        if($lc == 'kg' AND $df != '' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->datefromkg($df)->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'kg' AND $df != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->datefromkg($df)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'kg' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru' AND $df != '' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->datefromru($df)->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru' AND $df != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->datefromru($df)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
        }else{
            $postAllFromTo = \Model\Post\ModelName::published()->orderBy('id', 'desc')->paginate($perPage);
        }
        
        return view('Front::post.posts',[
            'perPage'=> $perPage,
            'postAll' => $postAllFromTo,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function filterResultCategory(Request $request)
    {
        $category_id = $request->category;
        $category = \Model\Category\ModelName::where('id','=',$category_id)->first();
        $lc = app()->getlocale();
        $df = $request->dateFrom;
        $dt = $request->dateTo;

        $dateFrom = date('Y-m-d',strtotime($df));
        $dateTo = date('Y-m-d',strtotime($dt));

        $perPage = 10;
        
        $categories = \Model\Category\ModelName::all();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();
        
        if($lc == 'kg' AND $df != '' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromkg($df)->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'kg' AND $df != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromkg($df)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'kg' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datetokg($dt)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru' AND $df != '' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromru($df)->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru' AND $df != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datefromru($df)->orderBy('id', 'desc')->paginate($perPage);
        }elseif($lc == 'ru' AND $dt != ''){
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->datetoru($dt)->orderBy('id', 'desc')->paginate($perPage);
        }else{
            $postAllFromTo = \Model\Post\ModelName::published()->where('category_id','=',$category_id)->orderBy('id', 'desc')->paginate($perPage);
        }

        return view('Front::category.index',[
            'perPage'=> $perPage,
            'category'=> $category,
            'posts' => $postAllFromTo,
            'categories'=>$categories,
            'backgroundMain' => $backgroundMain,
            ]);
    }

    public function Galleries()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $galleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('id','desc')->get();

        return view('Front::gallery.galleries',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,

            'galleries' => $galleries,
        ]);
    }

    public function Gallery(Request $request, $galleryId)
    {
        $lc = app()->getlocale();

        $gallery = \Model\PhotoParent\ModelName::where('id','=',$galleryId)->first();
        $images = json_decode($gallery->images);

        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        return view('Front::gallery.gallery',[
            'lc' => $lc,
            'images' => $images,
            'backgroundMain' => $backgroundMain,
            'gallery' => $gallery,
            ]);
    }

    public function Reporter()
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

//        $galleries = \Model\PhotoParent\ModelName::where('extracolumn','=','1')->where('published','=',true)->orderBy('id','desc')->get();

        return view('Front::reporter.index',[
            'lc' => $lc,
            'backgroundMain' => $backgroundMain,

//            'galleries' => $galleries,
        ]);
    }

    public function ReporterAdd(Request $request)
    {
        $lc = app()->getlocale();
        $backgroundMain = \Model\Background\ModelName::where('published','=',true)->first();

        $reporter = \Model\PeopleReporter\ModelName::create($request->except('images','video','q'));

        $images = $request->file('images');
        $rules = array(
            'image' => 'image'
        );

        $result = array();

        if($request->hasFile('images'))
        {
            foreach($images as $key=>$image)
            {
                $target = array('image' => $image);
                $validator = Validator::make($target, $rules);

                if ($validator->fails())
                {
                    return redirect()->route('front.reporter');
                }
                else
                {
                    $storage = \Storage::disk('public');
                    $destinationPath = 'froala/uploads';
                    $storage->makeDirectory($destinationPath);

                    $filename = time().$key.'.'.$image->getClientOriginalExtension();

                    Image::make($_FILES['images']['tmp_name'][$key])->heighten(600)->save($destinationPath.'/'.$filename);

                    $files_array = array();
                    $files_array = array_collapse([$files_array, [
                        'id' => $key+1,
                        'name' => $filename
                    ]]);

                    $result = array_add($result, $key , $files_array);
                    $jsonresult = json_encode($result);

                    $reporter->thumbnail = $jsonresult;
                    $reporter->save();
                }
            }
        }

        $video = $request->file('video');
        $video_rules = array(
            'video' => 'mimes:mimes:m4v,avi,flv,mp4,mov,3gp | max:51200'
        );

        if($request->hasFile('video')){
            $targetVideo = array(
                'video' => $video
            );
            $validator = Validator::make($targetVideo, $video_rules);

            if ($validator->fails())
            {
                return redirect()->route('front.reporter');
            }
            else
            {
                $storage = \Storage::disk('public');
                $destinationPath = 'froala/videos';
                $storage->makeDirectory($destinationPath);

                $filename = time().'.'.$video->getClientOriginalExtension();
                $video->move($destinationPath, $filename);

                $reporter->video = $filename;
                $reporter->save();
            }
        }

        return redirect()->route('front.reporter');
    }
}

