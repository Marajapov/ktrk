<?php

/*
Баластан Routes
*/

Route::group(['domain' => '', 'prefix' => '/balastan', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'balastan.home',   'uses' => 'BalastanController@Home']);
    Route::get('posts', ['as' => 'balastan.posts',   'uses' => 'BalastanController@posts']);
    Route::get('world', ['as' => 'balastan.world',   'uses' => 'BalastanController@world']);
    Route::get('about', ['as' => 'balastan.about',   'uses' => 'BalastanController@about']);
    Route::get('video',['as' => 'balastan.video','uses'=> 'BalastanController@video'] );
    Route::get('videos',['as' => 'balastan.videos','uses'=> 'BalastanController@videos'] );
    Route::get('video/{video}',['as' => 'balastan.video','uses'=> 'BalastanController@video'] );
    Route::get('videos/{project}',['as' => 'balastan.project.videos','uses'=> 'BalastanController@projectVideos'] );
    Route::get('/allphotos',['as' => 'balastan.allphotos','uses'=> 'BalastanController@allphotos'] );
    Route::get('/photos/{gallery}',['as' => 'balastan.photos','uses'=> 'BalastanController@Gallery'] );

});

/*
Музыка Routes
*/

Route::group(['domain' => '', 'prefix' => '/music', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'muzkanal.home',   'uses' => 'MuzkanalController@Home']);
    Route::get('/test', ['as' => 'muzkanal.homeTest',   'uses' => 'MuzkanalController@HomeTest']);
    Route::get('/posts', ['as' => 'muzkanal.posts',   'uses' => 'MuzkanalController@posts']);
    Route::get('/radio', ['as' => 'muzkanal.radio',   'uses' => 'MuzkanalController@radio']);
    Route::get('/about', ['as' => 'muzkanal.about',   'uses' => 'MuzkanalController@about']);
    Route::get('/teleprogram', ['as' => 'muzkanal.teleprogram',   'uses' => 'MuzkanalController@teleprogram']);
    Route::get('/video/{media}', ['as' => 'muzkanal.video',   'uses' => 'MuzkanalController@video']);
    Route::get('/test/video/{media}', ['as' => 'muzkanal.video.test',   'uses' => 'MuzkanalController@videoTest']);
    Route::get('/videos', ['as' => 'muzkanal.videos',   'uses' => 'MuzkanalController@videos']);
    Route::get('/test/videos', ['as' => 'muzkanal.videos.test',   'uses' => 'MuzkanalController@videosTest']);
    Route::get('/project/{project}', ['as' => 'muzkanal.project',   'uses' => 'MuzkanalController@project']);
    Route::get('/videos/popular', ['as' => 'muzkanal.videos.popular',   'uses' => 'MuzkanalController@popular']);
    Route::get('/videos/newvideos', ['as' => 'muzkanal.videos.newvideos',   'uses' => 'MuzkanalController@newvideos']);
    Route::get('/videos/exclusive', ['as' => 'muzkanal.videos.exclusive',   'uses' => 'MuzkanalController@exclusive']);
    Route::get('/videos/concert', ['as' => 'muzkanal.videos.concert',   'uses' => 'MuzkanalController@concert']);
    Route::get('/hitparad', ['as' => 'muzkanal.hitparad',   'uses' => 'MuzkanalController@hitparad']);
    Route::get('/week', ['as' => 'muzkanal.week',   'uses' => 'MuzkanalController@weekMediaSearch']);

    Route::get('/allphotos',['as' => 'muzkanal.allphotos','uses'=> 'MuzkanalController@allphotos'] );
    Route::get('/photos/{gallery}',['as' => 'muzkanal.photos','uses'=> 'MuzkanalController@Gallery'] );
    Route::get('/like/{like}', ['as' => 'muzkanal.like', 'uses' => 'MuzkanalController@like']);
    Route::get('/unlike/{unlike}', ['as' => 'muzkanal.unlike', 'uses' => 'MuzkanalController@unlike']);
    Route::get('/likehp/{likehp}', ['as' => 'muzkanal.likehp', 'uses' => 'MuzkanalController@likehp']);

});

/*
КТРК Спорт Routes
*/

Route::group(['domain' => '', 'prefix' => '/sport', 'namespace' =>'Front\Controllers'], function(){
    Route::get('/', ['as' => 'sport.home', 'uses' => 'SportController@Home']);
    Route::get('/about', ['as' => 'sport.about', 'uses' => 'SportController@about']);
    Route::get('/announcements', ['as' => 'sport.announcements', 'uses' => 'SportController@announcements']);
    Route::get('/announcement/{announcement}', ['as' => 'sport.announcement', 'uses' => 'SportController@announcement']);
    Route::get('/allnews', ['as' => 'sport.allnews', 'uses' => 'SportController@allnews']);
    Route::get('/news{post}/{locale}', ['as' => 'sport.news', 'uses' => 'SportController@news']);
    Route::get('/videos', ['as' => 'sport.videos', 'uses' => 'SportController@videos']);
    Route::get('/video/{video}', ['as' => 'sport.video', 'uses' => 'SportController@video']);
    Route::get('/videos/all', ['as' => 'sport.videos.all', 'uses' => 'SportController@allvideos']);
    Route::get('/videos/project/{project}', ['as' => 'sport.videos.project', 'uses' => 'SportController@project']);
    Route::get('/photos/{gallery}', ['as' => 'sport.photos', 'uses' => 'SportController@photos']);
    Route::get('/gallery', ['as' => 'sport.gallery', 'uses' => 'SportController@gallery']);
    Route::get('/teleprogram', ['as' => 'sport.teleprogram', 'uses' => 'SportController@teleprogram']);
});

/*
Маданият Routes
*/

Route::group(['domain' => '', 'prefix' => '/madaniyat', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'madaniyat.home',   'uses' => 'MadaniyatController@Home']);
    Route::get('/test', ['as' => 'madaniyat.test',   'uses' => 'MadaniyatController@Test']);
    Route::get('/posts', ['as' => 'madaniyat.posts',   'uses' => 'MadaniyatController@posts']);
    Route::get('/about', ['as' => 'madaniyat.about',   'uses' => 'MadaniyatController@about']);
    Route::get('/photos/{gallery}', ['as' => 'madaniyat.photos',   'uses' => 'MadaniyatController@Gallery']);
    Route::get('/broadcasts', ['as' => 'madaniyat.broadcasts',   'uses' => 'MadaniyatController@broadcasts']);
    Route::get('/comingsoon', ['as' => 'madaniyat.comingsoon',   'uses' => 'MadaniyatController@ComingSoon']);
    Route::get('/allphotos', ['as' => 'madaniyat.allphotos',   'uses' => 'MadaniyatController@allphotos']);
    Route::get('/news/{post}/{locale}', ['as' => 'madaniyat.news',   'uses' => 'MadaniyatController@news']);
    Route::get('/allnews', ['as' => 'madaniyat.allnews',   'uses' => 'MadaniyatController@allnews']);
    Route::get('/projects/{project}', ['as' => 'madaniyat.projects',   'uses' => 'MadaniyatController@projects']);
    Route::get('/teleprogram', ['as' => 'madaniyat.teleprogram',   'uses' => 'MadaniyatController@teleprogram']);
    Route::get('media', ['as' => 'madaniyat.media.index', 'uses' => 'MadaniyatController@mediaIndex']); // List of videos
    Route::get('media/project/{project}', ['as' => 'madaniyat.media.project', 'uses' => 'MadaniyatController@project']); // Show Page
    Route::get('media/video/{video}', ['as' => 'madaniyat.media.video', 'uses' => 'MadaniyatController@video']); // Show Video
    Route::get('media/all', ['as' => 'madaniyat.media.all', 'uses' => 'MadaniyatController@allVideos']); // All Videos
    Route::get('media/category/{mediaCategory}', ['as' => 'madaniyat.media.category', 'uses' => 'MadaniyatController@categoryVideos']); // All Videos
});

/*
Кыргыз Радио Routes
*/

Route::group(['domain' => '', 'prefix' => '/kyrgyzradio', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'kyrgyzradio.home',   'uses' => 'KyrgyzradioController@Home']);
    Route::get('/posts', ['as' => 'kyrgyzradio.posts',   'uses' => 'KyrgyzradioController@posts']);
    Route::get('/photos/{gallery}',['as' => 'kyrgyzradio.photos','uses'=> 'KyrgyzradioController@Gallery'] );
    Route::get('/show/{post}', ['as' => 'kyrgyzradio.show',   'uses' => 'KyrgyzradioController@show']);
    Route::get('projects', ['as' => 'kyrgyzradio.projects',   'uses' => 'KyrgyzradioController@projects']);
    Route::get('/allphotos',['as' => 'kyrgyzradio.allphotos','uses'=> 'KyrgyzradioController@allphotos'] );
    Route::get('/project/{project}',['as' => 'kyrgyzradio.project','uses'=> 'KyrgyzradioController@project'] );
    Route::get('/comingsoon', ['as' => 'kyrgyzradio.comingsoon',   'uses' => 'KyrgyzradioController@ComingSoon']);
    Route::get('/about', ['as' => 'kyrgyzradio.about',   'uses' => 'KyrgyzradioController@about']);
    Route::get('/citations', ['as' => 'kyrgyzradio.citations',   'uses' => 'KyrgyzradioController@citations']);
    Route::get('/anons', ['as' => 'kyrgyzradio.anons',   'uses' => 'KyrgyzradioController@anons']);
    Route::get('/anonses', ['as' => 'kyrgyzradio.anonses',   'uses' => 'KyrgyzradioController@anonses']);

});

/*
Биринчи Радио Routes
*/

Route::group(['domain' => '', 'prefix' => '/birinchi', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'birinchi.home',   'uses' => 'BirinchiController@Home']);
    Route::get('/news/{post}/{locale}', ['as' => 'birinchi.news',   'uses' => 'BirinchiController@news']);
    Route::get('/allnews', ['as' => 'birinchi.allnews',   'uses' => 'BirinchiController@allnews']);
    Route::get('/show/{post}', ['as' => 'birinchi.show',   'uses' => 'BirinchiController@show']);
    Route::get('/shows/{project}', ['as' => 'birinchi.shows',   'uses' => 'BirinchiController@shows']);
    Route::get('/projects', ['as' => 'birinchi.projects',   'uses' => 'BirinchiController@projects']);
    Route::get('/shows/{project}', ['as' => 'birinchi.shows',   'uses' => 'BirinchiController@shows']);
    Route::get('/about', ['as' => 'birinchi.about',   'uses' => 'BirinchiController@about']);
    Route::get('/photos/{gallery}', ['as' => 'birinchi.photos',   'uses' => 'BirinchiController@Gallery']);
    Route::get('/allphotos',['as' => 'birinchi.allphotos','uses'=> 'BirinchiController@allphotos'] );
    Route::get('/broadcastsprogramm', ['as' => 'birinchi.broadcastsprogramm',   'uses' => 'BirinchiController@broadcastsprogramm']);
    Route::get('/category/{category}', ['as' => 'birinchi.category',   'uses' => 'BirinchiController@categoryPage']);

});

/*
Достук Routes
*/

Route::group(['domain' => '', 'prefix' => '/dostuk', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'dostuk.home',   'uses' => 'DostukController@Home']);
    Route::get('/posts', ['as' => 'dostuk.posts',   'uses' => 'DostukController@posts']);
    Route::get('/photos/{gallery}',['as' => 'dostuk.photos','uses'=> 'DostukController@Gallery'] );
    Route::get('/news/{post}/{locale}', ['as' => 'dostuk.news',   'uses' => 'DostukController@news']);
    Route::get('allnews', ['as' => 'dostuk.allnews',   'uses' => 'DostukController@allnews']);
    Route::get('about', ['as' => 'dostuk.about',   'uses' => 'DostukController@about']);
    Route::get('/allphotos',['as' => 'dostuk.allphotos','uses'=> 'DostukController@allphotos'] );
    Route::get('/projects', ['as' => 'dostuk.projects',   'uses' => 'DostukController@projects']);
    Route::get('/project/{project}',['as' => 'dostuk.project','uses'=> 'DostukController@project'] );
    Route::get('/comingsoon', ['as' => 'dostuk.comingsoon',   'uses' => 'DostukController@ComingSoon']);
    Route::get('/anons', ['as' => 'dostuk.anons',   'uses' => 'DostukController@anons']);
    Route::get('/category/{category}', ['as' => 'dostuk.category',   'uses' => 'DostukController@categoryPage']);

});

/*
Миң кыял Routes
*/

Route::group(['domain' => '', 'prefix' => '/minkiyal', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'minkiyal.home',   'uses' => 'MinkiyalController@Home']);
    Route::get('/posts', ['as' => 'minkiyal.posts',   'uses' => 'MinkiyalController@posts']);
    Route::get('/post/{gallery}',['as' => 'minkiyal.post','uses'=> 'MinkiyalController@Gallery'] );
    Route::get('/news/{post}', ['as' => 'minkiyal.news',   'uses' => 'MinkiyalController@news']);
    Route::get('allnews', ['as' => 'minkiyal.allnews',   'uses' => 'MinkiyalController@allnews']);
    Route::get('/about', ['as' => 'minkiyal.about',   'uses' => 'MinkiyalController@about']);
    Route::get('/djs', ['as' => 'minkiyal.djs',   'uses' => 'MinkiyalController@djs']);
    Route::get('/dj/rasul', ['as' => 'minkiyal.dj.rasul',   'uses' => 'MinkiyalController@djRasul']);
    Route::get('/dj/akyl', ['as' => 'minkiyal.dj.akyl',   'uses' => 'MinkiyalController@djAkyl']);
    Route::get('/dj/kanat', ['as' => 'minkiyal.dj.kanat',   'uses' => 'MinkiyalController@djKanat']);
    Route::get('/dj/bekzat', ['as' => 'minkiyal.dj.bekzat',   'uses' => 'MinkiyalController@djBekzat']);
    Route::get('/dj/ulan', ['as' => 'minkiyal.dj.ulan',   'uses' => 'MinkiyalController@djUlan']);
    Route::get('/dj/jazgyl', ['as' => 'minkiyal.dj.jazgyl',   'uses' => 'MinkiyalController@djJazgyl']);
    Route::get('/dj_info', ['as' => 'minkiyal.dj_info',   'uses' => 'MinkiyalController@dj_info']);
    Route::get('/lives', ['as' => 'minkiyal.lives',   'uses' => 'MinkiyalController@lives']);
    Route::get('/live', ['as' => 'minkiyal.live',   'uses' => 'MinkiyalController@live']);

});

/*
Балдар Routes
*/

Route::group(['domain' => '', 'prefix' => '/baldar', 'namespace' => 'Front\Controllers'], function() {

    Route::get('/', ['as' => 'baldar.home',   'uses' => 'BaldarController@Home']);
    Route::get('/posts', ['as' => 'baldar.posts',   'uses' => 'BaldarController@posts']);

});

/*
КТРК Routes
*/

Route::group(['prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

    # GENERAL

    Route::get('/vertex', ['as' => 'front.home.vertex',   'uses' => 'HomeController@HomeVertex']);
    Route::get('/',['as'=>'front.home', 'uses'=>"HomeController@Home"]);
    Route::get('locale/{locale?}',   ['as' => 'locale',   'uses' => 'CommonController@setLocale']);


    # LOGIN/LOGOUT

    Route::get('login', ['as' => 'front.login',   'uses' => 'AuthController@Login']);
    Route::post('login', ['as' => 'front.login',   'uses' => 'AuthController@postLogin']);
    Route::post('logout', ['as' => 'front.logout',   'uses' => 'AuthController@postLogout']);
    

    # NAVIGATION
    
    // О КТРК    
    Route::get('history', ['as' => 'front.history', 'uses' => 'PageController@historyPage']);
    Route::get('test/history', ['as' => 'front.test.history', 'uses' => 'TestController@historyPage']);
    Route::get('leaders', ['as' => 'front.pages.leaders', 'uses' => 'PageController@leadersPage']);
    Route::get('ns', ['as' => 'front.ns.index', 'uses' => 'NsController@index']);
    Route::get('rs', ['as' => 'front.rs.index', 'uses' => 'RsController@index']);
    Route::get('strategy', ['as' => 'front.pages.strategy', 'uses' => 'PageController@strategyPage']);
    Route::get('report', ['as' => 'front.pages.report', 'uses' => 'PageController@reportPage']);
    Route::get('normalbase', ['as' => 'front.pages.normalbase', 'uses' => 'PageController@normalbasePage']);
    Route::get('logo', ['as' => 'front.pages.logo', 'uses' => 'PageController@logoPage']);
    Route::get('rrts', ['as' => 'front.pages.rrts', 'uses' => 'PageController@rrtsPage']);


    # POSTS

    Route::get('/posts/general', ['as' => 'front.general',   'uses' => 'PostController@all']);    
    Route::get('posts/general/date', ['as' => 'front.general.filterDate', 'uses' => 'PostController@filterDateGeneral']);

    Route::get('/post/{post}/{locale}', ['as' => 'front.post', 'uses' => 'PostController@post']);

    Route::get('category/{category}', ['as' => 'front.category', 'uses' => 'PostController@categoryPage']);
    Route::get('category/{category}/date', ['as' => 'front.category.filterDate', 'uses' => 'PostController@filterDateCategory']);


    # MEDIA

    // Route::get('media', ['as' => 'front.media.index', 'uses' => 'MediaController@mediaIndex']);
    Route::get('media', ['as' => 'front.media.index', 'uses' => 'MediaController@mediaIndexTest']);

    // Route::get('media/project/{project}', ['as' => 'front.media.project', 'uses' => 'MediaController@project']);
    Route::get('media/project/{project}', ['as' => 'front.media.project', 'uses' => 'MediaController@projectTest']);
    Route::get('media/projects/archive', ['as' => 'front.media.archive', 'uses' => 'MediaController@archive']);

    // Route::get('media/video/{video}', ['as' => 'front.media.video', 'uses' => 'MediaController@video']);
    Route::get('media/video/{media}', ['as' => 'front.media.video', 'uses' => 'MediaController@videoTest']);

    // Route::get('media/all', ['as' => 'front.media.all', 'uses' => 'MediaController@allVideos']);
    Route::get('media/all', ['as' => 'front.media.all', 'uses' => 'MediaController@allVideosTest']);

    Route::get('media/category/{mediaCategory}', ['as' => 'front.media.category', 'uses' => 'MediaController@categoryVideos']);


    # GALLERY

    Route::get('/gallery/{photoParent}',['as' => 'front.gallery','uses'=> 'GalleryController@single'] );
    Route::get('/galleries',['as' => 'front.gallery.galleries','uses'=> 'GalleryController@index']);


    # DIRECTOR

    // Route::get('director', ['as' => 'front.pages.director', 'uses' => 'PageController@directorPage']);
    Route::get('director', ['as' => 'front.pages.director', 'uses' => 'DirectorController@index']);
    Route::get('director/post/{post}/{locale}', ['as' => 'front.pages.directorPost', 'uses' => 'PageController@directorPost']);


    # TELEPROGRAM

    Route::get('teleprogram', ['as' => 'front.pages.teleprogram', 'uses' => 'PageController@teleprogramPage']);
    Route::post('teleprogram/changeChannel', ['as' => 'front.changeChannel', 'uses' => 'AjaxController@teleprogramChangeChannel']);
    Route::get('program', ['as' => 'front.pages.program', 'uses' => 'PageController@teleprogramPage']);
    Route::get('teleprogram/{channel}', ['as' => 'front.pages.teleprogram', 'uses' => 'PageController@ChannelTeleprogram']);


    # НАБЛЮДАТЕЛЬНЫЙ СОВЕТ

    Route::get('ns/team', ['as' => 'front.ns.team', 'uses' => 'NsController@team']);
    Route::get('ns/posts', ['as' => 'front.ns.posts', 'uses' => 'NsController@posts']);
    Route::get('ns/post/{post}', ['as' => 'front.ns.post', 'uses' => 'NsController@post']);
    Route::get('ns/galleries', ['as' => 'front.ns.galleries', 'uses' => 'NsController@galleries']);
    Route::get('ns/gallery/{gallery}', ['as' => 'front.ns.gallery', 'uses' => 'NsController@gallery']);
    Route::get('ns/reports', ['as' => 'front.ns.reports', 'uses' => 'NsController@reports']);
    Route::get('ns/contacts', ['as' => 'front.ns.contacts', 'uses' => 'NsController@contacts']);


    # РЕДАКЦИОННЫЙ СОВЕТНИК

    Route::get('rs/about', ['as' => 'front.rs.about', 'uses' => 'RsController@about']);
    Route::get('rs/person/{person}', ['as' => 'front.rs.person', 'uses' => 'RsController@person']);
    Route::get('rs/faq', ['as' => 'front.rs.faq', 'uses' => 'RsController@faq']);
    Route::get('rs/posts', ['as' => 'front.rs.posts', 'uses' => 'RsController@posts']);
    Route::get('rs/post/{post}', ['as' => 'front.rs.post', 'uses' => 'RsController@post']);
    Route::get('rs/procedure', ['as' => 'front.rs.procedure', 'uses' => 'RsController@procedure']);
    Route::get('rs/contacts', ['as' => 'front.rs.contacts', 'uses' => 'RsController@contacts']);


    # REPORTER

    Route::get('/reporter',['as'=>'front.reporter','uses'=>'HomeController@Reporter']);
    Route::post('reporter.add',['as'=>'front.reporter.add','uses'=>'HomeController@ReporterAdd']);


    # ADDITIONAL PAGES

    Route::get('/advertisement',['as'=>'front.pages.reklama', 'uses'=>'PageController@Reklama']);
    Route::get('/contacts',['as'=>'front.pages.contacts', 'uses'=>'PageController@Contacts']);
    Route::get('/live',['as'=>'front.live', 'uses'=>"HomeController@Live"]);
    Route::get('/streams',['as'=>'front.streams', 'uses'=>"StreamController@stream"]);


    # EXTRA

    Route::get('/page/{page}', ['as' => 'front.page',   'uses' => 'HomeController@Page']);
    Route::get('/search', ['as' => 'front.search', 'uses' => 'HomeController@search']);
    Route::post('/orphus', ['as'=>'front.orphus', 'uses'=>'CommentController@orphus']);


    # UNDEFINED

    Route::get('editionkenesh', ['as' => 'front.pages.editionkenesh', 'uses' => 'PageController@editionkeneshPage']);


    # COMMENTS

    Route::post('/comment', ['as'=>'front.comment', 'uses'=> 'CommentController@store']);


    # SHAILOO

    Route::get('/shailoo',['as'=>'front.shailoo', 'uses'=>"ShailooController@index"]);
    Route::get('/shailoo/all',['as'=>'front.shailoo.all', 'uses'=>"ShailooController@all"]);
    Route::get('/shailoo/post/{post}',['as'=>'front.shailoo.post', 'uses'=>"ShailooController@post"]);
    Route::get('/shailoo/party/{category}',['as'=>'front.shailoo.party', 'uses'=>"ShailooController@party"]);
    Route::post('/shailoo_poll_vote', ['as'=>'front.shailoo_poll_vote', 'uses'=>'AjaxController@shailooPollVote']);


    # AJAX

    Route::get('/ajax_program', 'PageController@AjaxProgram');
    Route::post('/poll_vote', ['as'=>'front.poll_vote', 'uses'=>'AjaxNsController@pollVote']);
    Route::post('/searchPgNews', ['as'=>'front.searchPgNews', 'uses'=>'AjaxController@searchPgNews']);
    Route::post('/searchPgMedia', ['as'=>'front.searchPgMedia', 'uses'=>'AjaxController@searchPgMedia']);
    Route::post('/homeVideoportal', ['as'=>'front.homeVideoportal', 'uses'=>'AjaxController@homeVideoportal']);

});