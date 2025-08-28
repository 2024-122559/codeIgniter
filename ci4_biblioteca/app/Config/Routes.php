<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('autores', 'AutoresController::vistaAutores');   
$routes->post('autores/agregar', 'AutoresController::agregarAutor'); 
$routes->get('autores/eliminar/(:num)', 'AutoresController::eliminarAutor/$1');
$routes->get('autores/editar/(:num)', 'AutoresController::buscarAutor/$1');
$routes->post('autores/actualizar/(:num)', 'AutoresController::actualizarAutor/$1');


$routes->post('login','EmpleadosCotroller::index');