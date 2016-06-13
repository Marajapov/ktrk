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

Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/balastan', 'namespace' => 'Front\Controllers'], function() {

  Route::get('/', ['as' => 'balastan.home',   'uses' => 'BalastanController@Home']);
  Route::get('posts', ['as' => 'balastan.posts',   'uses' => 'BalastanController@posts']);
  Route::get('world', ['as' => 'balastan.world',   'uses' => 'BalastanController@world']);
  Route::get('about', ['as' => 'balastan.about',   'uses' => 'BalastanController@about']);
  //New page video
  Route::get('video',['as' => 'balastan.video','uses'=> 'BalastanController@video'] );
  Route::get('videos',['as' => 'balastan.videos','uses'=> 'BalastanController@videos'] );
  Route::get('video/{video}',['as' => 'balastan.video','uses'=> 'BalastanController@video'] );
  Route::get('videos/{project}',['as' => 'balastan.project.videos','uses'=> 'BalastanController@projectVideos'] );

  // Balastan photos one gallery page

  Route::get('/allphotos',['as' => 'balastan.allphotos','uses'=> 'BalastanController@allphotos'] );
  Route::get('/photos/{gallery}',['as' => 'balastan.photos','uses'=> 'BalastanController@Gallery'] );

});



Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/music', 'namespace' => 'Front\Controllers'], function() {

  Route::get('/', ['as' => 'muzkanal.home',   'uses' => 'MuzkanalController@Home']);
  Route::get('/posts', ['as' => 'muzkanal.posts',   'uses' => 'MuzkanalController@posts']);
  Route::get('/radio', ['as' => 'muzkanal.radio',   'uses' => 'MuzkanalController@radio']);
  Route::get('/about', ['as' => 'muzkanal.about',   'uses' => 'MuzkanalController@about']);
  Route::get('/teleprogram', ['as' => 'muzkanal.teleprogram',   'uses' => 'MuzkanalController@teleprogram']);
  Route::get('/video/{video}', ['as' => 'muzkanal.video',   'uses' => 'MuzkanalController@video']);
  Route::get('/videos', ['as' => 'muzkanal.videos',   'uses' => 'MuzkanalController@videos']);
  Route::get('/videos/popular', ['as' => 'muzkanal.videos.popular',   'uses' => 'MuzkanalController@popular']);
  Route::get('/videos/newvideos', ['as' => 'muzkanal.videos.newvideos',   'uses' => 'MuzkanalController@newvideos']);
  Route::get('/videos/exclusive', ['as' => 'muzkanal.videos.exclusive',   'uses' => 'MuzkanalController@exclusive']);
  Route::get('/videos/concert', ['as' => 'muzkanal.videos.concert',   'uses' => 'MuzkanalController@concert']);
  Route::get('/hitparad', ['as' => 'muzkanal.hitparad',   'uses' => 'MuzkanalController@hitparad']);

  Route::get('/allphotos',['as' => 'muzkanal.allphotos','uses'=> 'MuzkanalController@allphotos'] );
  Route::get('/photos/{gallery}',['as' => 'muzkanal.photos','uses'=> 'MuzkanalController@Gallery'] );

});


Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

  Route::get('/', ['as' => 'ktr.home',   'uses' => 'HomeController@Ktr']);
  Route::get('/posts', ['as' => 'ktr.posts',   'uses' => 'KtrController@posts']);

});


Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/madaniyat', 'namespace' => 'Front\Controllers'], function() {

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

});
Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/madaniyat/', 'namespace' => 'Front\Controllers'], function() {
    Route::get('media', ['as' => 'madaniyat.media.index', 'uses' => 'MadaniyatController@mediaIndex']); // List of videos
    Route::get('media/project/{project}', ['as' => 'madaniyat.media.project', 'uses' => 'MadaniyatController@project']); // Show Page
    Route::get('media/video/{video}', ['as' => 'madaniyat.media.video', 'uses' => 'MadaniyatController@video']); // Show Video
    Route::get('media/all', ['as' => 'madaniyat.media.all', 'uses' => 'MadaniyatController@allVideos']); // All Videos
    Route::get('media/category/{mediaCategory}', ['as' => 'madaniyat.media.category', 'uses' => 'MadaniyatController@categoryVideos']); // All Videos
});

Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

  Route::get('/', ['as' => 'front.home',   'uses' => 'HomeController@Home']);
  Route::get('/posts/general', ['as' => 'front.general',   'uses' => 'HomeController@Posts']);
  Route::get('posts/general/filterResult', ['as' => 'front.filterResult', 'uses' => 'HomeController@filterResult']);

});


Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/kyrgyzradio', 'namespace' => 'Front\Controllers'], function() {

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

Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/birinchi', 'namespace' => 'Front\Controllers'], function() {

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

Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/dostuk', 'namespace' => 'Front\Controllers'], function() {

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

Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/minkiyal', 'namespace' => 'Front\Controllers'], function() {

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

Route::group(['domain' => 'www.ktrk.kg', 'prefix' => '/baldar', 'namespace' => 'Front\Controllers'], function() {

  Route::get('/', ['as' => 'baldar.home',   'uses' => 'BaldarController@Home']);
  Route::get('/posts', ['as' => 'baldar.posts',   'uses' => 'BaldarController@posts']);

});


Route::group(['prefix' => '/', 'namespace' => 'Front\Controllers'], function() {

  Route::get('/post/{post}/{locale}', ['as' => 'front.post', 'uses' => 'HomeController@Post']);
  Route::get('/page/{page}', ['as' => 'front.page',   'uses' => 'HomeController@Page']);
  Route::get('login', ['as' => 'front.login',   'uses' => 'AuthController@Login']);
  Route::post('login', ['as' => 'front.login',   'uses' => 'AuthController@postLogin']);
  Route::post('logout', ['as' => 'front.logout',   'uses' => 'AuthController@postLogout']);
  Route::get('media', ['as' => 'front.media',     'uses' => 'HomeController@getMedia']);
  Route::get('search', ['as' => 'front.search', 'uses' => 'HomeController@searchResult']);

  Route::get('category/{category}', ['as' => 'front.category', 'uses' => 'HomeController@categoryPage']);
  Route::get('category/{category}/filterResult', ['as' => 'front.filterResultCategory', 'uses' => 'HomeController@filterResultCategory']);

  Route::get('media', ['as' => 'front.media.index', 'uses' => 'MediaController@mediaIndex']); // List of videos
  Route::get('media/project/{project}', ['as' => 'front.media.project', 'uses' => 'MediaController@project']); // Show Page
  Route::get('media/video/{video}', ['as' => 'front.media.video', 'uses' => 'MediaController@video']); // Show Video
  Route::get('media/all', ['as' => 'front.media.all', 'uses' => 'MediaController@allVideos']); // All Videos
  Route::get('media/category/{mediaCategory}', ['as' => 'front.media.category', 'uses' => 'MediaController@categoryVideos']); // All Videos

  Route::get('history', ['as' => 'front.history', 'uses' => 'PageController@historyPage']);
//  Director routes
  Route::get('director', ['as' => 'front.pages.director', 'uses' => 'PageController@directorPage']);
  Route::get('director/post/{post}/{locale}', ['as' => 'front.pages.directorPost', 'uses' => 'PageController@directorPost']);

  Route::get('leaders', ['as' => 'front.pages.leaders', 'uses' => 'PageController@leadersPage']);
//    Route::get('leader/{leader}', ['as' => 'front.pages.leader', 'uses' => 'PageController@leaderPage']);
  Route::get('strategy', ['as' => 'front.pages.strategy', 'uses' => 'PageController@strategyPage']);
  Route::get('normalbase', ['as' => 'front.pages.normalbase', 'uses' => 'PageController@normalbasePage']);
  Route::get('rrts', ['as' => 'front.pages.rrts', 'uses' => 'PageController@rrtsPage']);
  Route::get('report', ['as' => 'front.pages.report', 'uses' => 'PageController@reportPage']);
  Route::get('teleprogram', ['as' => 'front.pages.teleprogram', 'uses' => 'PageController@teleprogramPage']);
  Route::post('teleprogram/changeChannel', ['as' => 'front.changeChannel', 'uses' => 'AjaxController@teleprogramChangeChannel']);
  Route::get('program', ['as' => 'front.pages.program', 'uses' => 'PageController@teleprogramPage']);
  Route::get('teleprogram/{channel}', ['as' => 'front.pages.teleprogram', 'uses' => 'PageController@ChannelTeleprogram']);
  Route::get('editionkenesh', ['as' => 'front.pages.editionkenesh', 'uses' => 'PageController@editionkeneshPage']);
  Route::get('logo', ['as' => 'front.pages.logo', 'uses' => 'PageController@logoPage']);

//    BaikoochuKenesh
  Route::get('ns', ['as' => 'front.ns.index', 'uses' => 'NsController@index']);
  Route::get('ns/team', ['as' => 'front.ns.team', 'uses' => 'NsController@team']);
  Route::get('ns/posts', ['as' => 'front.ns.posts', 'uses' => 'NsController@posts']);
  Route::get('ns/post/{post}', ['as' => 'front.ns.post', 'uses' => 'NsController@post']);
  Route::get('ns/galleries', ['as' => 'front.ns.galleries', 'uses' => 'NsController@galleries']);
  Route::get('ns/gallery/{gallery}', ['as' => 'front.ns.gallery', 'uses' => 'NsController@gallery']);
  Route::get('ns/reports', ['as' => 'front.ns.reports', 'uses' => 'NsController@reports']);
  Route::get('ns/contacts', ['as' => 'front.ns.contacts', 'uses' => 'NsController@contacts']);

//    RedakciyaKenesh
  Route::get('rs', ['as' => 'front.rs.index', 'uses' => 'RsController@index']);
  Route::get('rs/about', ['as' => 'front.rs.about', 'uses' => 'RsController@about']);
  Route::get('rs/person/{person}', ['as' => 'front.rs.person', 'uses' => 'RsController@person']);
  Route::get('rs/faq', ['as' => 'front.rs.faq', 'uses' => 'RsController@faq']);
  Route::get('rs/posts', ['as' => 'front.rs.posts', 'uses' => 'RsController@posts']);
  Route::get('rs/post/{post}', ['as' => 'front.rs.post', 'uses' => 'RsController@post']);
  Route::get('rs/procedure', ['as' => 'front.rs.procedure', 'uses' => 'RsController@procedure']);
  Route::get('rs/contacts', ['as' => 'front.rs.contacts', 'uses' => 'RsController@contacts']);

  // Gallery page
  Route::get('/gallery/{gallery}',['as' => 'front.gallery','uses'=> 'HomeController@Gallery'] );
  Route::get('/galleries',['as' => 'front.gallery.galleries','uses'=> 'HomeController@Galleries']);

//    Народный репортер
  Route::get('/reporter',['as'=>'front.reporter','uses'=>'HomeController@Reporter']);
  Route::post('reporter.add',['as'=>'front.reporter.add','uses'=>'HomeController@ReporterAdd']);

  // Reklama
  Route::get('/advertisement',['as'=>'front.pages.reklama', 'uses'=>'PageController@Reklama']);

  //Contacts
  Route::get('/contacts',['as'=>'front.pages.contacts', 'uses'=>'PageController@Contacts']);

//    AJAX CALL
  Route::get('/ajax_program', 'PageController@AjaxProgram');

//    COMMENTS
  Route::post('/comment', ['as'=>'front.comment', 'uses'=> 'CommentController@store']);

//    Orphus
  Route::post('/orphus', ['as'=>'front.orphus', 'uses'=>'CommentController@orphus']);

//    Test
  Route::get('/test',['as'=>'front.test', 'uses'=>"HomeController@Test"]);
  Route::get('/live',['as'=>'front.live', 'uses'=>"HomeController@Live"]);

// Poll Vote
  Route::post('/poll_vote', ['as'=>'front.poll_vote', 'uses'=>'AjaxNsController@pollVote']);

  Route::get('locale/{locale?}',   ['as' => 'locale',   'uses' => 'CommonController@setLocale']);

});