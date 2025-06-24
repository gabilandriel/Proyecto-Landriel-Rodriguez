<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página principal
$routes->get('/', 'Pages::index');

// Páginas informativas
$routes->get('/comercializacion', 'Pages::comercializacion');
$routes->get('/quienes-somos', 'Pages::quienes_somos');
$routes->get('/terminos-y-usos', 'Pages::terminos_y_usos');
$routes->get('/informacion-de-contacto', 'Pages::informacion_de_contacto');

// Registro
$routes->get('/registro', 'Registro::index');
$routes->post('/registro/guardar', 'Registro::guardar');

// Login
$routes->get('/login', 'Login_controller::index');
$routes->post('/login', 'Login_controller::auth');
$routes->get('/logout', 'Login_controller::logout');

// Panel admin
$routes->get('/panel/admin', 'Panel_controller::admin', ['filter' => 'auth']);
$routes->get('/admin/historial-compras', 'Panel_controller::historialAdmin', ['filter' => 'auth']);
$routes->group('admin/usuarios', function($routes){
    $routes->get('/', 'Usuario_controller::index');
    $routes->get('editar/(:num)', 'Usuario_controller::editar/$1');
    $routes->post('actualizar/(:num)', 'Usuario_controller::actualizar/$1');
    $routes->get('baja/(:num)', 'Usuario_controller::baja/$1');
    $routes->get('bajas', 'Usuario_controller::bajas');
    $routes->get('alta/(:num)', 'Usuario_controller::alta/$1');
});

// Panel cliente
$routes->get('/panel/cliente', 'Panel_controller::cliente', ['filter' => 'auth']);
$routes->get('/cliente/editar', 'Panel_controller::editarCliente', ['filter' => 'auth']);
$routes->post('/cliente/actualizar', 'Panel_controller::actualizarCliente', ['filter' => 'auth']);
$routes->get('/panel/cliente-compras', 'Panel_controller::historialComprasCliente', ['filter' => 'auth']);

//Catalogo
$routes->get('catalogo', 'Catalogo_controller::index');
$routes->get('catalogo/categoria/(:num)', 'Catalogo_controller::categoria/$1');
$routes->get('producto/(:num)', 'Catalogo_controller::detalle/$1');

// Consultas
$routes->post('/consultas/guardar', 'Consulta::guardar'); 
$routes->get('/admin/consultas', 'Consulta::index', ['filter' => 'auth']); 
$routes->get('/admin/consultas/leidas', 'Consulta::leidas', ['filter' => 'auth']); 
$routes->get('/admin/consultas/leido/(:num)', 'Consulta::marcarLeido/$1', ['filter' => 'auth']);

// Carrito
$routes->get('/carrito', 'Carrito_controller::index');
$routes->get('/carrito/agregar/(:num)', 'Carrito_controller::agregar/$1');
$routes->post('carrito/agregar/(:num)', 'Carrito_controller::agregarPost/$1');
$routes->get('/carrito/eliminar/(:num)', 'Carrito_controller::eliminar/$1');
$routes->get('/carrito/vaciar', 'Carrito_controller::vaciar');
$routes->get('/carrito/finalizar', 'Carrito_controller::finalizar');
$routes->get('/carrito/factura/pdf/(:num)', 'Carrito_controller::generarPDF/$1');

// Factura
$routes->get('/factura/pdf/(:num)', 'Factura_controller::generarPDF/$1');

// Productos
$routes->group('admin/productos', ['filter' => 'auth'], function($routes) { 
    $routes->get('/', 'Producto_controller::index'); 
    $routes->get('crear', 'Producto_controller::crear'); 
    $routes->post('guardar', 'Producto_controller::guardar'); 
    $routes->get('editar/(:num)', 'Producto_controller::editar/$1'); 
    $routes->post('actualizar/(:num)', 'Producto_controller::actualizar/$1');
    $routes->get('baja/(:num)', 'Producto_controller::baja/$1'); 
    $routes->get('reactivar/(:num)', 'Producto_controller::reactivar/$1'); 
    $routes->get('bajas', 'Producto_controller::bajas'); 
});
// Controlador por defecto 
$routes->setDefaultController('Views'); 
