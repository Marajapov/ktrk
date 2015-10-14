<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = '';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);

        $router->model('user', \Model\User\ModelName::class);
        $router->model('category', \Model\Category\ModelName::class);
        $router->model('channel', \Model\Channel\ModelName::class);
        $router->model('menu', \Model\Menu\ModelName::class);
        $router->model('banner', \Model\Banner\ModelName::class);
        $router->model('media', \Model\Media\ModelName::class);
        $router->model('post', \Model\Post\ModelName::class);
        $router->model('page', \Model\Page\ModelName::class);

        $router->model('background', \Model\Background\ModelName::class);

        $this->app['view']->addNamespace('Front', app_path().'/Acme/Http/Front/Views/');
        $this->app['view']->addNamespace('Admin', app_path().'/Acme/Http/Admin/Views/');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Acme/Http/Front/routes.php');
            require app_path('Acme/Http/Admin/routes.php');
            require app_path('Acme/Http/Api/routes.php');
        });
    }
}
