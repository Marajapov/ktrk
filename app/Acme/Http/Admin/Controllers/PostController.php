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
        $relatedPosts = \Model\Post\ModelName::where('title','<>','')->lists('title', 'id')->toArray();
        $relatedPosts2 = \Model\Post\ModelName::where('titleRu','<>','')->lists('titleRu', 'id')->toArray();

        $tags = \Model\Tag\Tag::lists('name', 'id');
        $tags2 = \Model\Tag\Tag::lists('name', 'id');

        return view('Admin::post.edit', [
            'post' => $post, 
            'tags' => $tags,
            'tags2' => $tags2,
            'relatedPosts' => $relatedPosts,
            'relatedPosts2' => $relatedPosts2,
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
