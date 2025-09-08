<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');

$routes->get('autores', 'AutoresController::vistaAutores');   
$routes->post('autores/agregar', 'AutoresController::agregarAutor'); 
$routes->get('autores/eliminar/(:num)', 'AutoresController::eliminarAutor/$1');
$routes->get('autores/editar/(:num)', 'AutoresController::buscarAutor/$1');
$routes->post('autores/actualizar/(:num)', 'AutoresController::actualizarAutor/$1');




$routes->get('tipo_usuario','TiposController::vistaTipos');
$routes->post('tipos/agregar','TiposController::agregarTipos');
$routes->get('tipos/eliminar/(:num)','tiposController::eliminarTipos/$1');
$routes->get('tipos/editar/(:num)','TiposController::buscarTipos/$1');
$routes->post('tipos/actualizar/(:num)', 'TiposController::actualizarTipo/$1');


$routes->get('libros','LibrosController::vistaLibros');
$routes->post('libros/agregar','LibrosController::agregarLibro');
$routes->get('libros/eliminar/(:num)','LibrosController::eliminarLibro/$1');
$routes->get('libros/editar/(:num)','LibrosController::buscarLibro/$1');
$routes->post('libros/actualizar/(:num)','LibrosController::actualizarLibro/$1');