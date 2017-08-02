<?php
namespace Api\Controllers;

use Illuminate\Http\Request;

use \Model\Post\ModelName as Post;
use \Model\Category\ModelName as Category;

class PostController extends Controller
{
    public function __construct() {}

    public function PostsKg(Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;
            $postsBeforePaginate = Post::
                    where('title','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();

            $posts = Post::customPaginate($postsBeforePaginate, $perPage);
        } else {
            $posts = Post::
                    where('title','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($posts, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function PostsRu(Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;
            $postsBeforePaginate = Post::
                    where('titleRu','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();

            $posts = Post::customPaginate($postsBeforePaginate, $perPage);
        } else {
            $posts = Post::
                    where('titleRu','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($posts, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function PostKg(Post $post)
    {
        if($post->title)
            return response()->json($post, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        else
            return 'Маалымат орус тилинде гана жеткиликтүү.';
    }

    public function PostRu(Post $post)
    {
        if($post->titleRu)
            return response()->json($post, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        else
            return 'Информация доступна только на кыргызском языке.';
    }

    public function CategoryPostsKg(Category $category, Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;
            $postsBeforePaginate = Post::
                    where('category_id',$category->id)->
                    where('title','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();

            $posts = Post::customPaginate($postsBeforePaginate, $perPage);
        } else {
            $posts = Post::
                    where('category_id',$category->id)->
                    where('title','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($posts, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function CategoryPostsRu(Category $category, Request $request)
    {
        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;
            $postsBeforePaginate = Post::
                    where('category_id',$category->id)->
                    where('titleRu','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();

            $posts = Post::customPaginate($postsBeforePaginate, $perPage);
        } else {
            $posts = Post::
                    where('category_id',$category->id)->
                    where('titleRu','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($posts, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function PopularPostsKg(Request $request)
    {
        $weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;
            $postsBeforePaginate = Post::
                    where('title','<>','')->
                    where('general',true)->
                    where('published', true)->
                    where('created_at','>',$weekFromNow)->
                    orderBy('viewed','desc')->
                    take($total)->
                    get();

            $posts = Post::customPaginate($postsBeforePaginate, $perPage);
        } else {
            $posts = Post::
                    where('title','<>','')->
                    where('general',true)->
                    where('published', true)->
                    orderBy('created_at','desc')->
                    take($total)->
                    get();
        }

        return response()->json($posts, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function PopularPostsRu(Request $request)
    {
        $weekFromNow = date('Y-m-d H:i', strtotime('-7 days'));

        $total = $request->total;

        if($request->perPage){
            $perPage = $request->perPage;
            $postsBeforePaginate = Post::
                    where('titleRu','<>','')->
                    where('general',true)->
                    where('published', true)->
                    where('created_at','>',$weekFromNow)->
                    orderBy('viewed','desc')->
                    take($total)->
                    get();

            $posts = Post::customPaginate($postsBeforePaginate, $perPage);
        } else {
            $posts = Post::
                    where('titleRu','<>','')->
                    where('general',true)->
                    where('published', true)->
                    where('created_at','>',$weekFromNow)->
                    orderBy('viewed','desc')->
                    take($total)->
                    get();
        }

        return response()->json($posts, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function Categories()
    {
        $categories = Category::
                        where('published', true)->
                        where('general', true)->
                        where('order','>',0)->
                        orderBy('order','asc')->
                        get();

        return response()->json($categories, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }
}
