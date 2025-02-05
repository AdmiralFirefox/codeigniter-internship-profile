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
            // Main Admin Pages
            $routes->get('dashboard', 'AdminController::index', ['as' => 'admin.home']);
            $routes->get('logout', 'AdminController::logoutHandler', ['as' => 'admin.logout']);
            $routes->get('contacts', 'AdminController::adminContacts', ['as' => 'admin.contacts']);
            
            // Route for Creating Blog
            $routes->get('createBlog', 'AdminController::createBlog', ['as' => 'admin.create_blog']);
            $routes->post('createBlogHandler', 'AdminController::createBlogHandler', ['as' => 'admin.create_blog_handler']);

            // Route for Deleting Blog
            $routes->post('deleteBlogHandler/(:num)', 'AdminController::deleteBlogHandler/$1', ['as' => 'admin.delete_blog_handler']);
        });
    
        $routes->group('', ['filter' => 'cifilter:guest'], static function($routes) {
            $routes->get('login', 'AuthController::loginForm', ['as' => 'admin.login.form']);
            $routes->post('login', 'AuthController::loginHandler', ['as' => 'admin.login.handler']);
        });
    });
});