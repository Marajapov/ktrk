<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\Post\ModelName as Post;
// use Model\Channel\ModelName as Channel;
// use Model\Category\ModelName as Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 15;
        $posts = Post::orderBy('id', 'desc')->paginate($perPage);

        return view('Admin::post.index', [
            'posts' => $posts,
            'perPage' => $perPage,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = \Model\Tag\Tag::lists('name', 'id');
        $tags2 = \Model\Tag\Tag::lists('name', 'id');

        $PhotoParentList = \Model\PhotoParent\ModelName::lists('name', 'id')->toArray();

        $relatedPosts = \Model\Post\ModelName::where('title','<>','')->lists('title', 'id')->toArray();
        $relatedPosts2 = \Model\Post\ModelName::where('titleRu','<>','')->lists('titleRu', 'id')->toArray();
        return view('Admin::post.create', [
            'post' => new Post, 
            'tags' => $tags,
            'tags2' => $tags2,
            'PhotoParentList' => $PhotoParentList,
            'relatedPosts' => $relatedPosts,
            'relatedPosts2' => $relatedPosts2,

            ]);
    }

    public function froala_upload(Request $request)
    {
        header('Content-type: application/json');

        $folder = 'public/img/gallery';

        // Allowed extentions.
        $allowedExts = array("gif", "jpeg", "jpg", "png");

// Get filename.
        $temp = explode(".", $_FILES["file"]["name"]);

// Get extension.
        $extension = end($temp);

// An image check is being done in the editor but it is best to
// check that again on the server side.
// Do not use $_FILES["file"]["type"] as it can be easily forged.
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);

        if ((($mime == "image/gif")
                || ($mime == "image/jpeg")
                || ($mime == "image/pjpeg")
                || ($mime == "image/x-png")
                || ($mime == "image/png"))
            && in_array(strtolower($extension), $allowedExts)) {
            // Generate new random name.
            $name = sha1(microtime()) . "." . $extension;

            // Save file in the uploads folder.
            move_uploaded_file($_FILES["file"]["tmp_name"], getcwd() . $folder . $name);

            // Generate response.
            $response = new StdClass;
            $response->link = $folder . $name;
            $response->file_name = $name;
            echo stripslashes(json_encode($response));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $post = Post::create($request->except('tag_list','tag_list2','thumbnail','q'));
        
        $tags = $request->input('tag_list');
        $tags2 = $request->input('tag_list2');
        if(!empty($tags)){
            foreach ($tags as $key => $name)
            {
                if(!is_numeric($name))
                {
                    $tag = \Model\Tag\Tag::firstOrNew(['name' => $name]);
                    $tag->name = $name;
                    $tag->save();
                    $tags[$key] = $tag->id();
                }
            }// end foreach

        $post->tags()->attach($tags);

        }// end if

        if(!empty($tags2)){
            foreach ($tags2 as $key => $name)
            {
                if(!is_numeric($name))
                {
                    $tag = \Model\Tag\Tag::firstOrNew(['name' => $name]);
                    $tag->name = $name;
                    $tag->save();
                    $tags2[$key] = $tag->id();
                }
            }// end foreach

        $post->tags()->attach($tags2);

        }// end if

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $btw = rand(0,100);

            $name = $post->id().$btw.'.'.$file->getClientOriginalExtension();
            

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $post->thumbnail = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }


        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $relatedPosts = \Model\Post\ModelName::lists('title', 'id')->toArray();
        return view('Admin::post.show', [
            'post' => $post,
            'relatedPosts'=> $relatedPosts,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $PhotoParentList = \Model\PhotoParent\ModelName::lists('name', 'id')->toArray();
        $relatedPosts = \Model\Post\ModelName::lists('title', 'id')->toArray();
        $tags = \Model\Tag\Tag::lists('name', 'id');
        $tags2 = \Model\Tag\Tag::lists('name', 'id');

        return view('Admin::post.edit', [
            'post' => $post, 
            'tags' => $tags,
            'tags2' => $tags2,
            'relatedPosts' => $relatedPosts,
            'PhotoParentList' => $PhotoParentList,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $post->update($request->except('tag_list','tag_list2','thumbnail','q'));

        $tags = $request->input('tag_list');
        $tags2 = $request->input('tag_list2');

        if(!empty($tags)){
        foreach ($tags as $key => $name)
        {
            if(!is_numeric($name))
            {
                $tag = \Model\Tag\Tag::firstOrNew(['name' => $name]);
                $tag->name = $name;
                $tag->save();
                $tags[$key] = $tag->id();
            }
        }
        $post->tags()->sync($tags);
        }// end if

        if(!empty($tags2)){
        foreach ($tags2 as $key => $name)
        {
            if(!is_numeric($name))
            {
                $tag = \Model\Tag\Tag::firstOrNew(['name' => $name]);
                $tag->name = $name;
                $tag->save();
                $tags2[$key] = $tag->id();
            }
        }
        $post->tags()->sync($tags2);
        }// end if

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $btw = rand(0,100);

            $name = $post->id().$btw.'.'.$file->getClientOriginalExtension();
            

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $post->thumbnail = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }


        return redirect()->route('admin.post.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
