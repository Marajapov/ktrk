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

Route::group(['domain' => 'balastan.ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'balastan.home',   'uses' => 'BalastanController@Home']);
    Route::get('/posts', ['as' => 'balastan.posts',   'uses' => 'BalastanController@posts']);

});

Route::group(['domain' => 'muzkanal.ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'muzkanal.home',   'uses' => 'HomeController@Muzkanal']);
    Route::get('/posts', ['as' => 'muzkanal.posts',   'uses' => 'MuzkanalController@posts']);

});

Route::group(['domain' => 'ktr.ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'ktr.home',   'uses' => 'HomeController@Ktr']);
    Route::get('/posts', ['as' => 'ktr.posts',   'uses' => 'KtrController@posts']);

});

Route::group(['domain' => 'madaniyat.ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'madaniyat.home',   'uses' => 'MadaniyatController@Home']);
    Route::get('/posts', ['as' => 'madaniyat.posts',   'uses' => 'MadaniyatController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'front.home',   'uses' => 'HomeController@Home']);
    Route::get('/posts/general', ['as' => 'front.general',   'uses' => 'HomeController@Posts']);

});



Route::group(['prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/post/{post}', ['as' => 'front.post',   'uses' => 'HomeController@Post']);
    Route::get('/page/{page}', ['as' => 'front.page',   'uses' => 'HomeController@Page']);
    Route::get('login', ['as' => 'front.login',   'uses' => 'AuthController@Login']);
    Route::post('login', ['as' => 'front.login',   'uses' => 'AuthController@postLogin']);
    Route::post('logout', ['as' => 'front.logout',   'uses' => 'AuthController@postLogout']);
    Route::get('media', ['as' => 'front.media',     'uses' => 'HomeController@getMedia']);
    Route::get('search', ['as' => 'front.search', 'uses' => 'HomeController@searchResult']);
    Route::get('category/{category}', ['as' => 'front.category', 'uses' => 'HomeController@categoryPage']);
    Route::get('media/{media}', ['as' => 'front.media', 'uses' => 'HomeController@mediaPage']);

});
