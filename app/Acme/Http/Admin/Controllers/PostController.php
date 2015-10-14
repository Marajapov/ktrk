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
        $perPage = 5;
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
        return view('Admin::post.create', ['post' => new Post, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->except('tag_list','thumbnail'));

        $tags = $request->input('tag_list');
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

        $post->tags()->attach($tags);

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/thumbnail';
            $name = $post->id().'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

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
        return view('Admin::post.show', [
            'post' => $post,
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
        $tags = \Model\Tag\Tag::lists('name', 'id');
        return view('Admin::post.edit', ['post' => $post, 'tags' => $tags]);
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
        $post->update($request->except('tag_list'));

        $tags = $request->input('tag_list');
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

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/banner';
            $name = $post->id().'.'.$file->getClientOriginalExtension();

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
