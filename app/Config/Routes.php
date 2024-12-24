<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Objeto/metodo http/ ruta/ parametro/ controlador/ nombre metodo / parametro
$routes->get('/', 'Home::index');
$routes->get('/productos','Productos::index');
//$routes->get('/productos/show','Productos::show');
$routes->get('/productos/edit','Productos::edit');
$routes->get('/productos/(:num)', 'Productos::show/$1');
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$2/$1');

$routes->view('productosList/(:alpha)', 'lista_productos');

//gurpos de rutas
$routes->group('admin', static function($routes){
    $routes->get('/productos','Admin/Productos::index');

});