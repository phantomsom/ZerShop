<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/ZerShopSecretPageController', 'ZerShopSecretPageController@index')->name('secretHome');
    $router->resources([
        'demo/users' => UserController::class,
        '/items'=> ItemController::class,
    ]);
});
