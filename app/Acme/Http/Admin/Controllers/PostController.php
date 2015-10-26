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

        $relatedPosts = \Model\Post\ModelName::lists('title', 'id')->toArray();
        return view('Admin::post.create', [
            'post' => new Post, 
            'tags' => $tags,
            'relatedPosts' => $relatedPosts,

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
        $post = Post::create($request->except('tag_list','thumbnail','photo1','photo2','photo3','photo4','photo5','photo6','photo7','photo8','photo9','photo10'));

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

        if($request->hasFile('photo1'))
        {
            $file = $request->file('photo1');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo1 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo2'))
        {
            $file = $request->file('photo2');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo2 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo3'))
        {
            $file = $request->file('photo3');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo3 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo4'))
        {
            $file = $request->file('photo4');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo4 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo5'))
        {
            $file = $request->file('photo5');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo5 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo6'))
        {
            $file = $request->file('photo6');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo6 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo7'))
        {
            $file = $request->file('photo7');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo7 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo8'))
        {
            $file = $request->file('photo8');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo8 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo9'))
        {
            $file = $request->file('photo9');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo9 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo10'))
        {
            $file = $request->file('photo10');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo10 = $dir.'/'.$name;
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
        $post->update($request->except('tag_list','thumbnail','photo1','photo2','photo3','photo4','photo5','photo6','photo7','photo8','photo9','photo10'));

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
            $dir  = 'img/thumbnail';

            $name = $post->id().'.'.$file->getClientOriginalExtension();
            

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $post->thumbnail = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo1'))
        {
            $file = $request->file('photo1');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo1 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo2'))
        {
            $file = $request->file('photo2');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo2 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo3'))
        {
            $file = $request->file('photo3');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo3 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo4'))
        {
            $file = $request->file('photo4');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo4 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo5'))
        {
            $file = $request->file('photo5');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo5 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo6'))
        {
            $file = $request->file('photo6');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo6 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo7'))
        {
            $file = $request->file('photo7');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo7 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo8'))
        {
            $file = $request->file('photo8');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo8 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo9'))
        {
            $file = $request->file('photo9');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo9 = $dir.'/'.$name;
            $post->save();
            $file->move($dir, $name);
        }

        if($request->hasFile('photo10'))
        {
            $file = $request->file('photo10');
            $dir  = 'img/photogalery';
            $time = rand();
            $name = $time.'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $post->photo10 = $dir.'/'.$name;
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
