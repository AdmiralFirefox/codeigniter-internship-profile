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
        $routes->group('', [], static function($routes) {
            $routes->get('/', 'AdminController::index', ['as' => 'admin.home']);
        });
    
        $routes->group('', [], static function($routes) {
            $routes->get('login', 'AuthController::loginForm', ['as' => 'admin.login.form']);
            $routes->post('login', 'AuthController::loginHandler', ['as' => 'admin.login.handler']);
        });
    });
});