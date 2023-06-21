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


//register
$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::store');

//login
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');

$routes->group('', ['filter' => 'auth'], function ($routes) {
	// logout
	$routes->get('/logout', 'LogoutController::logout');

	// dashboard
	$routes->get('/dashboard', 'DashboardController::index');
	$routes->get('/dashboard/admin', 'DashboardController::admin');
	$routes->get('/dashboard/buku', 'DashboardController::buku');
	$routes->get('/dashboard/kategori', 'DashboardController::kategori');
	$routes->get('/dashboard/peminjaman', 'DashboardController::peminjaman');
	$routes->get('/dashboard/pengembalian', 'DashboardController::pengembalian');

	$routes->get('/dashboard/anggota', 'AnggotaController::index');
	$routes->get('/dashboard/anggota/create', 'AnggotaController::create');
	
	$routes->post('/dashboard/anggota/store', 'AnggotaController::store');
});