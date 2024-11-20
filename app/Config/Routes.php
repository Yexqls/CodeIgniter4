<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Objeto/metodo http/ ruta/ parametro/ controlador/ nombre metodo / parametro
$routes->get('/', 'Home::index');
$routes->get('/productos','Productos::index');
$routes->get('/productos/show','Productos::show');
$routes->get('/productos/edit','Productos::edit');