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

$routes->get('tipo_usuario','TiposController::vistaTipos');
$routes->post('tipos/agregar','TiposController::agregarTipos');
$routes->get('tipos/eliminar/(:num)','tiposController::eliminarTipos/$1');
$routes->get('tipos/editar/(:num)','TiposController::buscarTipos/$1');
$routes->post('tipos/actualizar/(:num)', 'TiposController::actualizarTipos/$1');