<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/admin', 'Admin\Dashboard::dashboard');
$routes->get('/login', 'Admin\Dashboard::login');

