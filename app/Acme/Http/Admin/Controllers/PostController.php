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

        $post = Post::create($request->except('tag_list','thumbnail','q','related1','related2','related3'));
        
        $tags = $request->input('tag_list');
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

        // Start Related posts on create
        $related1 = $request->input('related1');
        if($related1 != 'default'){
            $space = ' ';
            $content1 = $request->input('content');
            $mystring = $content1;
            $findme   = 'admin/post/1';
            $pos = strpos($mystring, $findme);
            $newstr = substr_replace($content1, 'http://1000.ktrk.kg/post/'.$related1, $pos, 12);
            $post->content = $newstr;
            $post->save();
        } // end if
        $related2 = $request->input('related2');
        if($related2 != 'default'){
            $space = ' ';
            $content2 = $request->input('content');
            $mystring = $content2;
            $findme   = 'admin/post/2';
            $pos = strpos($mystring, $findme);
            $newstr = substr_replace($content2, 'http://1000.ktrk.kg/post/'.$related1, $pos, 12);
            $post->content = $newstr;
            $post->save();
        } // end if 2
        $related3 = $request->input('related3');
        if($related3 != 'default'){
            $space = ' ';
            $content3 = $request->input('content');
            $mystring = $content3;
            $findme   = 'admin/post/3';
            $pos = strpos($mystring, $findme);
            $newstr = substr_replace($content3, 'http://1000.ktrk.kg/post/'.$related1, $pos, 12);
            $post->content = $newstr;
            $post->save();
        } // end if 3
        // end related posts on create

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
        $relatedPosts = \Model\Post\ModelName::lists('title', 'id')->toArray();
        $tags = \Model\Tag\Tag::lists('name', 'id');

        return view('Admin::post.edit', [
            'post' => $post, 
            'tags' => $tags,
            'relatedPosts' => $relatedPosts,
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
        
        $post->update($request->except('tag_list','thumbnail','q','related1','related2','related3'));

        $tags = $request->input('tag_list');
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


        // Related posts
        $related1 = $request->input('related1');
        if($related1 != 'default'){
            $space = ' ';
            $content1 = $request->input('content');
            $mystring = $content1;
            $findme   = 'admin/post/1';
            $pos = strpos($mystring, $findme);
            $newstr = substr_replace($content1, 'http://1000.ktrk.kg/post/'.$related1, $pos, 12);
            $post->content = $newstr;
            $post->save();
        } // end if
        $related2 = $request->input('related2');
        if($related2 != 'default'){
            $space = ' ';
            $content2 = $request->input('content');
            $mystring = $content2;
            $findme   = 'admin/post/2';
            $pos = strpos($mystring, $findme);
            $newstr = substr_replace($content2, 'http://1000.ktrk.kg/post/'.$related1, $pos, 12);
            $post->content = $newstr;
            $post->save();
        } // end if 2
        $related3 = $request->input('related3');
        if($related3 != 'default'){
            $space = ' ';
            $content3 = $request->input('content');
            $mystring = $content3;
            $findme   = 'admin/post/3';
            $pos = strpos($mystring, $findme);
            $newstr = substr_replace($content3, 'http://1000.ktrk.kg/post/'.$related1, $pos, 12);
            $post->content = $newstr;
            $post->save();
        } // end if 3
        // end related posts

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
