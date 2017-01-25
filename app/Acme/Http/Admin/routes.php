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
    Route::get('/weekMedias',     ['as' => 'admin.weekMedias', 'uses' => 'WeekMediaController@index']);

    // User routes
    Route::resource('user', 'UserController');
    Route::get('user/changePassword/{id}', ['as'=>'admin.user.changePassword', 'uses'=>'UserController@changePassword']);
    Route::post('user/newPassword', ['as'=>'admin.user.newPassword', 'uses'=>'UserController@newPassword']);

    //
    Route::resource('post', 'PostController');
    Route::resource('category', 'CategoryController');
    Route::resource('channel', 'ChannelController');

    // Media routes
    Route::resource('media', 'MediaController');
    Route::get('media.dayVideo1',['as' => 'admin.media.dayVideo1', 'uses' => 'MediaController@dayVideo1']);
    Route::get('media.dayVideo2',['as' => 'admin.media.dayVideo2', 'uses' => 'MediaController@dayVideo2']);
    Route::get('media.dayVideo3',['as' => 'admin.media.dayVideo3', 'uses' => 'MediaController@dayVideo3']);
    Route::get('media.dayVideo4',['as' => 'admin.media.dayVideo4', 'uses' => 'MediaController@dayVideo4']);
    Route::get('media.dayVideoRu1',['as' => 'admin.media.dayVideoRu1', 'uses' => 'MediaController@dayVideoRu1']);
    Route::get('media.search', ['as' => 'admin.media.search', 'uses' => 'MediaController@search']);
    
    Route::resource('banner', 'BannerController');
    Route::resource('page', 'PageController');

    Route::resource('background', 'BackgroundController');
    Route::resource('mediaCategory', 'MediaCategoryController');

    Route::resource('photoParent','PhotoParentController');
    Route::get('photoParent.destroyChild', ['as' => 'admin.photoParent.destroyChild', 'uses' => 'PhotoParentController@destroyChild']);
    Route::get('photoParent.photodelete', ['as' => 'admin.photoParent.photodelete', 'uses' => 'PhotoParentController@photodelete']);
    Route::get('photoParent.publish', ['as' => 'admin.photoParent.publish', 'uses' => 'PhotoParentController@publish']); // publish the Gallery
    Route::post('photoParent/addImages/{photoParent}', ['as' => 'admin.photoParent.addImages', 'uses' => 'PhotoParentController@addImages']); // add images

    Route::get('photoParent.unpublish', ['as' => 'admin.photoParent.unpublish', 'uses' => 'PhotoParentController@unpublish']); // unpublish the Gallery

    Route::post('photoParent/uploadFiles', ['as' => 'admin.photoParent.uploadFiles', 'uses' => 'AjaxController@uploadFiles']);
    Route::post('photoParent/create', 'AjaxController@selectChange');

    
    Route::resource('photoChild','PhotoChildController');
    Route::resource('peopleReporter','PeopleReporterController');
    Route::resource('project','ProjectController');

    Route::get('photoChild/create/{photoParent}', 'PhotoChildController@create');

    Route::resource('menu', 'MenuController');
    Route::get ('menu/code/{code}', ['as' => 'admin.menu.code', 'uses' => 'MenuController@code']);
    Route::post('menu/save/{code}', ['as' => 'admin.menu.save', 'uses' => 'MenuController@save']);


    Route::get('test', ['as' => 'admin.test', 'uses' => 'TestController@index']);

    Route::post('test/uploadFiles', ['as' => 'admin.test.uploadFiles', 'uses' => 'AjaxController@uploadFiles']);

    Route::post('test/store', ['as' => 'admin.test.store', 'uses' => 'TestController@store']);
    Route::get('test/show', ['as' => 'admin.show', 'uses' => 'TestController@show']);

    // added for latest post in main window last 6 posts
    Route::get('post/number/{number}', ['as' => 'admin.post.number', 'uses' => 'PostController@number']);
    Route::get('post/unnumber/{number}', ['as' => 'admin.post.unnumber', 'uses' => 'PostController@unnumber']);
    Route::get('post.search', ['as' => 'admin.post.search', 'uses' => 'PostController@search']);

    // added for latest Media in Muzkanal
    Route::get('media/number/{number}', ['as' => 'admin.media.number', 'uses' => 'MediaController@number']);
    Route::get('media/unnumber/{number}', ['as' => 'admin.media.unnumber', 'uses' => 'MediaController@unnumber']);

    // Schedule
    Route::resource('schedule', 'ScheduleController');
    Route::get('schedule/channel/{channel}',['as'=>'admin.schedule.channel','uses'=>'ScheduleController@channel']);

    //Comments
    Route::resource('comment', 'CommentController');
    Route::get('comment.approve', ['as' => 'admin.comment.approve', 'uses' => 'CommentController@approve']); // approve comment
    Route::get('comment.deny', ['as' => 'admin.comment.deny', 'uses' => 'CommentController@deny']); // deny comment

    //Anons
    Route::resource('anons','AnonsController');
    Route::post('anons/create', 'AjaxController@selectChange');

    //Quote
    Route::resource('quote','QuotesController');
    Route::get('/weekMedias/{from_date}/{to_date}', ['as' => 'admin.media.weekMediaSearch', 'uses' => 'WeekMediaController@weekMediaSearch']);

//    Watermark
    Route::post('post/watermark/',['as'=>'admin.post.watermark','uses'=>'PostController@watermark']);
    Route::post('post/postWatermark','AjaxController@postWatermark');
});
