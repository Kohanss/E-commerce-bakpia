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
// $routes->get('/loginUser', 'Pages::loginUser');
$routes->get('/admin', 'Admin\admin::admin');
$routes->get('/admin/produk/edit-form', 'Admin\admin::editData');
$routes->post('/admin/produk/update-data', 'Admin\admin::posteditdata');
$routes->get('/admin/produk/add-data', 'Admin\admin::addData');
$routes->get('/category', 'Admin\Dashboard::category');
$routes->get('/unit', 'Admin\Dashboard::unit');
$routes->get('/login', 'Admin\admin::login_page');
$routes->post('/login', 'Admin\admin::login_post');
$routes->post('/admin/login/success', 'Admin\admin::login_post');
$routes->post('/eror', 'Admin\admin::login_post');
// $routes->get('/Dashboard/posteditdata', 'Admin\Dashboard::login');
