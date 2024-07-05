<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/produk', 'Pages::produk');
$routes->get('/pages/search', 'Pages::search');
$routes->get('/tentang', 'Pages::tentang');
$routes->get('/toko', 'Pages::toko');
// $routes->post('pages/search', 'Pages::search', ['post']);
$routes->get('/loginUser', 'Pages::loginUser');
$routes->get('/signUpUser', 'Pages::signUpUser');
$routes->get('/admin', 'Admin\Dashboard::dashboard');
$routes->get('/login', 'Admin\Dashboard::login');

