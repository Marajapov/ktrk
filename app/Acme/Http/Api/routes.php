<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix' => 'api', 'namespace' => 'Api\Controllers'], function(){

	#KG Routes

	//post
	Route::get('kg/posts', 'PostController@PostsKg');
	Route::get('kg/postsPaginated/{}', 'PostController@PostsKgPaginated');
	Route::get('kg/post/{post}', 'PostController@PostKg');
	Route::get('kg/category/{category}', 'PostController@CategoryPostsKg');
	Route::get('kg/popularPosts', 'PostController@PopularPostsKg');

	#RU Routes

	//ru
	Route::get('ru/posts', 'PostController@PostsRu');
	Route::get('ru/post/{post}', 'PostController@PostRu');
	Route::get('ru/category/{category}', 'PostController@CategoryPostsRu');
	Route::get('ru/popularPosts', 'PostController@PopularPostsRu');

	#Common Routes
	Route::get('post/categories', 'PostController@Categories');

	//media
	Route::get('media/videos', 'MediaController@Videos');
	Route::get('media/video/{media}', 'MediaController@Video');
	Route::get('media/projects', 'MediaController@Projects');
	Route::get('media/project/{project}', 'MediaController@Project');
	Route::get('media/project/{project}/videos', 'MediaController@ProjectVideos');
});
