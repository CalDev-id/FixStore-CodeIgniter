<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/pesan', 'Home::pesan');
$routes->get('/faq', 'Home::faq');
// $routes->get('/admin', 'Home::admin');

$routes->get('/login', 'Home::adminLogin');
$routes->get('/profile', 'Home::adminProfile');


$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::processRegister');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');


$routes->get('/orders', 'Orders::index');
$routes->get('/orders/create', 'Orders::create');
$routes->post('/orders/store', 'Orders::store');
$routes->get('/orders/edit/(:num)', 'Orders::edit/$1');
$routes->post('/orders/update', 'Orders::update');
$routes->get('/orders/delete/(:num)', 'Orders::delete/$1');

$routes->get('/pembelian', 'Pembelian::index');

// Rute untuk menampilkan form tambah produk
$routes->get('/createPembelian', 'Pembelian::create');

// Rute untuk menyimpan produk baru
$routes->post('/createPembelian', 'Pembelian::store');

// Rute untuk menampilkan form edit produk
$routes->get('/Pembelian/edit/(:num)', 'Pembelian::edit/$1');

// Rute untuk mengupdate produk
$routes->post('/Pembelian/update', 'Pembelian::update');

// Rute untuk menghapus produk
$routes->get('/Pembelian/delete/(:num)', 'Pembelian::delete/$1');






$routes->get('/product', 'Product::index');


// // Rute untuk menampilkan daftar produk
// $routes->get('products', 'ProductController::index');

// Rute untuk menampilkan form tambah produk
$routes->get('/createProduct', 'Product::create');

// Rute untuk menyimpan produk baru
$routes->post('/createProduct', 'Product::store');

// Rute untuk menampilkan form edit produk
$routes->get('/product/edit/(:num)', 'Product::edit/$1');

// Rute untuk mengupdate produk
$routes->post('/product/update', 'Product::update');

// Rute untuk menghapus produk
$routes->get('/product/delete/(:num)', 'Product::delete/$1');




$routes->get('/pegawai', 'Pegawai::index');


// // Rute untuk menampilkan daftar produk
// $routes->get('products', 'ProductController::index');

// Rute untuk menampilkan form tambah produk
$routes->get('/createPegawai', 'Pegawai::create');

// Rute untuk menyimpan produk baru
$routes->post('/createPegawai', 'Pegawai::store');

// Rute untuk menampilkan form edit produk
$routes->get('/pegawai/edit/(:num)', 'Pegawai::edit/$1');

// Rute untuk mengupdate produk
$routes->post('/pegawai/update', 'Pegawai::update');

// Rute untuk menghapus produk
$routes->get('/pegawai/delete/(:num)', 'Pegawai::delete/$1');



$routes->get('/report', 'Pembelian::indexReport');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
