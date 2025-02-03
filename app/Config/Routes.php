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