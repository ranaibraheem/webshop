<?php

/** --------------------------------------------------------------------------------------------------------
 * Add your routes here.
 * 
 * Protect your routes with one ore more Middleware classes, like WhenNotLoggedIn or Permissions.
 *  See the classes for more information.
 * Add Middleware in an associative array with a key, like the admin route
 * ---------------------------------------------------------------------------------------------------------
*/

use App\Middleware\WhenNotLoggedin;
use App\Middleware\Permissions;

$router->get('', 'App/Controllers/HomeController.php@index', 'root');
$router->get('home', 'App/Controllers/HomeController.php@index', 'home');
$router->get('home/products', 'App/Controllers/HomeController.php@products', 'home.products');

$router->get('login', 'App/Controllers/LoginController.php@index', 'login');
$router->get('logout', 'App/Controllers/LoginController.php@logout', 'logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login', 'auth');

$router->get('contact', 'App/Controllers/ContactController.php@index', 'contact');

$router->get('register', 'App/Controllers/RegisterController.php@index', 'register');
$router->post('register', 'App/Controllers/RegisterController.php@store', 'register.store');

$router->get('admin', 'App/Controllers/AdminController.php@index', 'admin',[
    'auth' => WhenNotLoggedin::class,
]);
$router->get('products', 'App/Controllers/ProductController.php@show', 'details');
$router->get('products/{id}', 'App/Controllers/ProductController.php@show', 'showdetail');

$router->get('productsb', 'App/Controllers/ProductbController.php@show', 'detailsb');
$router->get('productsb/{id}', 'App/Controllers/ProductbController.php@show', 'showdetailb');

$router->get('productsc', 'App/Controllers/ProductcController.php@show', 'detailsc');
$router->get('productsc/{id}', 'App/Controllers/ProductcController.php@show', 'showdetailc');

$router->get('products', 'App/Controllers/ProductController.php@index', 'productsmachines');
$router->get('productsb', 'App/Controllers/ProductbController.php@index', 'productsbeans');
$router->get('productsc', 'App/Controllers/ProductcController.php@index', 'productscupc');

// User routes
$router->get('user', 'App/Controllers/UserController.php@index', 'admin.user.index');
$router->get('user/create', 'App/Controllers/UserController.php@create', 'admin.user.create', ['create' => Permissions::class]);
$router->post('user/store', 'App/Controllers/UserController.php@store', 'admin.user.store', ['create' => Permissions::class]);
$router->get('user/{id}', 'App/Controllers/UserController.php@show', 'admin.user.show', ['read' => Permissions::class]);
$router->get('user/{id}/edit', 'App/Controllers/UserController.php@edit', 'admin.user.edit', ['update' => Permissions::class]);
$router->post('user/{id}/update', 'App/Controllers/UserController.php@update', 'admin.user.update', ['update' => Permissions::class]);
$router->get('user/{id}/destroy', 'App/Controllers/UserController.php@destroy', 'admin.user.destroy', ['delete' => Permissions::class]);

