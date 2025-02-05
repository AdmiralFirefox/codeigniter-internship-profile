<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/skills', 'Home::skills');
$routes->get('/projects', 'Home::projects');
$routes->get('/contacts', 'Home::contacts');
$routes->post('/sendEmail', 'Home::sendEmail');
$routes->get('/blog', 'Home::blog');

$routes->group('blog', static function ($routes) {
    $routes->group('admin', static function ($routes) {
        $routes->group('', ['filter' => 'cifilter:auth'], static function($routes) {
            $routes->get('dashboard', 'AdminController::index', ['as' => 'admin.home']);
            $routes->get('logout', 'AdminController::logoutHandler', ['as' => 'admin.logout']);
        });
    
        $routes->group('', ['filter' => 'cifilter:guest'], static function($routes) {
            $routes->get('login', 'AuthController::loginForm', ['as' => 'admin.login.form']);
            $routes->post('login', 'AuthController::loginHandler', ['as' => 'admin.login.handler']);
        });
    });
});