<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');

$routes->get('/comercializacion', 'Pages::comercializacion');
$routes->get('/quienes-somos', 'Pages::quienes_somos');
$routes->get('/terminos-y-usos', 'Pages::terminos_y_usos');
$routes->get('/informacion-de-contacto', 'Pages::informacion_de_contacto');
$routes->get('login', 'Auth::login');
$routes->post('auth/loginPost', 'Auth::loginPost');
$routes->get('logout', 'Auth::logout');

$routes->setDefaultController('Views');