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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group("admin", ["namespace" => "App\Controllers\Admin"], function ($routes) {

    $routes->group('',  function ($routes) {
        $routes->get('/', 'dashboard::index', ['filter' => 'auth']);
    });
    
    $routes->group('careers',  function ($routes) {
        $routes->get('/', 'careers::index', ['filter' => 'auth']);
        $routes->get('add', 'careers::add', ['filter' => 'auth']);
    });

    $routes->group('user',  function ($routes) {
        $routes->get('/', 'user::index', ['filter' => 'auth']);
        $routes->get('add', 'user::add', ['filter' => 'auth']);
    });

    $routes->group('lookup',  function ($routes) {
        $routes->get('/', 'lookup::index', ['filter' => 'auth']);
        $routes->get('add', 'lookup::add', ['filter' => 'auth']);
    });

    $routes->group('looktype',  function ($routes) {
        $routes->get('/', 'looktype::index', ['filter' => 'auth']);
        $routes->get('add', 'looktype::add', ['filter' => 'auth']);
    });

    $routes->group('property',  function ($routes) {
        $routes->get('/', 'property::index', ['filter' => 'auth']);
        $routes->get('add', 'property::add', ['filter' => 'auth']);
    });

    $routes->group('companyprofile',  function ($routes) {
        $routes->get('/', 'companyprofile::index', ['filter' => 'auth']);
        $routes->get('add', 'companyprofile::add', ['filter' => 'auth']);
    });
});

$routes->group("user", ["namespace" => "App\Controllers\User"], function ($routes) {
    $routes->group('homeAL',  function ($routes) {
        $routes->get('/', 'homeAL::index',['filter' => 'auth']);
        $routes->get('signout', 'homeAL::signout',['filter' => 'auth']);
        $routes->get('propertydetails', 'homeAL::propertydetails',['filter' => 'auth']);
        $routes->get('userdash', 'homeAL::userdash',['filter' => 'auth']);
        $routes->get('search', 'homeAL::search',['filter' => 'auth']);
        $routes->get('contactus', 'homeAL::contactus',['filter' => 'auth']);
        $routes->get('sendmessage', 'homeAL::sendmessage',['filter' => 'auth']);
        $routes->get('homeloan', 'homeAL::homeloan',['filter' => 'auth']);
        $routes->get('reqhomeloan', 'homeAL::reqhomeloan',['filter' => 'auth']);
        $routes->get('renovation', 'homeAL::renovation',['filter' => 'auth']);
        $routes->get('legalservices', 'homeAL::legalservices',['filter' => 'auth']);
        $routes->get('requestLegalservices', 'homeAL::requestLegalservices',['filter' => 'auth']);
    });
});
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
