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


Route::group(['prefix' => 'admin', 'middleware' => 'access:admin', 'namespace' => 'Admin\Controllers'], function(){
    Route::get('/',     ['as' => 'admin.home', 'uses' => 'HomeController@Home']);

    Route::resource('user', 'UserController');
    Route::resource('post', 'PostController');
    Route::resource('category', 'CategoryController');
    Route::resource('channel', 'ChannelController');

    Route::resource('media', 'MediaController');
    Route::resource('banner', 'BannerController');
    Route::resource('page', 'PageController');

    Route::resource('background', 'BackgroundController');
    Route::resource('mediaCategory', 'MediaCategoryController');

    Route::resource('photoParent','PhotoParentController');
    Route::resource('photoChild','PhotoChildController');
    Route::resource('peopleReporter','PeopleReporterController');

    Route::get('photoChild/create/{photoParent}', 'PhotoChildController@create');

    Route::get('post/create/{froala_upload}', 'PostController@froala_upload');




    Route::resource('menu', 'MenuController');
    Route::get ('menu/code/{code}', ['as' => 'admin.menu.code', 'uses' => 'MenuController@code']);
    Route::post('menu/save/{code}', ['as' => 'admin.menu.save', 'uses' => 'MenuController@save']);

});
