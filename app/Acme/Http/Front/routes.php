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

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/balastan', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'balastan.home',   'uses' => 'BalastanController@Home']);
    Route::get('/posts', ['as' => 'balastan.posts',   'uses' => 'BalastanController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/muzkanal', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'muzkanal.home',   'uses' => 'HomeController@Muzkanal']);
    Route::get('/posts', ['as' => 'muzkanal.posts',   'uses' => 'MuzkanalController@posts']);
    Route::get('/radio', ['as' => 'muzkanal.radio',   'uses' => 'MuzkanalController@radio']);
    Route::get('/about', ['as' => 'muzkanal.about',   'uses' => 'MuzkanalController@about']);
    Route::get('/video', ['as' => 'muzkanal.video',   'uses' => 'MuzkanalController@video']);
    Route::get('/videos', ['as' => 'muzkanal.videos',   'uses' => 'MuzkanalController@videos']);
    Route::get('/hitparad', ['as' => 'muzkanal.hitparad',   'uses' => 'MuzkanalController@hitparad']);
    Route::get('/photos', ['as' => 'muzkanal.photos',   'uses' => 'MuzkanalController@photos']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'ktr.home',   'uses' => 'HomeController@Ktr']);
    Route::get('/posts', ['as' => 'ktr.posts',   'uses' => 'KtrController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/madaniyat', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'madaniyat.home',   'uses' => 'MadaniyatController@Home']);
    Route::get('/posts', ['as' => 'madaniyat.posts',   'uses' => 'MadaniyatController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'front.home',   'uses' => 'HomeController@Home']);
    Route::get('/posts/general', ['as' => 'front.general',   'uses' => 'HomeController@Posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/kyrgyzradio', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'kyrgyzradio.home',   'uses' => 'KyrgyzradioController@Home']);
    Route::get('/posts', ['as' => 'kyrgyzradio.posts',   'uses' => 'KyrgyzradioController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/birinchi', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'birinchi.home',   'uses' => 'BirinchiController@Home']);
    Route::get('/posts', ['as' => 'birinchi.posts',   'uses' => 'BirinchiController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/dostuk', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'dostuk.home',   'uses' => 'DostukController@Home']);
    Route::get('/posts', ['as' => 'dostuk.posts',   'uses' => 'DostukController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/minkiyal', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'minkiyal.home',   'uses' => 'MinkiyalController@Home']);
    Route::get('/posts', ['as' => 'minkiyal.posts',   'uses' => 'MinkiyalController@posts']);

});

Route::group(['domain' => 'ktrk.dev', 'prefix' => '/baldar', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'baldar.home',   'uses' => 'BaldarController@Home']);
    Route::get('/posts', ['as' => 'baldar.posts',   'uses' => 'BaldarController@posts']);

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
    
    Route::get('media', ['as' => 'front.media.index', 'uses' => 'MediaController@mediaIndex']); // List of videos
    Route::get('media/{rtype}', ['as' => 'front.media.rtype', 'uses' => 'MediaController@mediaRtype']); // List of videos 2
    Route::get('media/{media}', ['as' => 'front.media', 'uses' => 'MediaController@mediaShow']); // One video
    


    Route::get('history', ['as' => 'front.history', 'uses' => 'PageController@historyPage']);
    Route::get('director', ['as' => 'front.pages.director', 'uses' => 'PageController@directorPage']);
    Route::get('leaders', ['as' => 'front.pages.leaders', 'uses' => 'PageController@leadersPage']);
    Route::get('strategy', ['as' => 'front.pages.strategy', 'uses' => 'PageController@strategyPage']);
    Route::get('normalbase', ['as' => 'front.pages.normalbase', 'uses' => 'PageController@normalbasePage']);
    Route::get('rrts', ['as' => 'front.pages.rrts', 'uses' => 'PageController@rrtsPage']);
    Route::get('report', ['as' => 'front.pages.report', 'uses' => 'PageController@reportPage']);
    Route::get('teleprogram', ['as' => 'front.pages.teleprogram', 'uses' => 'PageController@teleprogramPage']);
    Route::get('kenesh', ['as' => 'front.pages.kenesh', 'uses' => 'PageController@keneshPage']);
    Route::get('editionkenesh', ['as' => 'front.pages.editionkenesh', 'uses' => 'PageController@editionkeneshPage']);
    

Route::get('locale/{locale?}',   ['as' => 'locale',   'uses' => 'CommonController@setLocale']);

});


