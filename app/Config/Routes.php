<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->post('/create', 'Home::create');               // C
$routes->get('/', 'Home::index');                       // R
$routes->put('/update/(:num)', 'Home::update/$1');      // U
$routes->delete('/delete/(:num)', 'Home::delete/$1');   // D    