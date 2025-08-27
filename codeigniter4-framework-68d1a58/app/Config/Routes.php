<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('autores', 'AutoresController::vistaAutores');   // Listar autores
$routes->post('autores/agregar', 'AutoresController::agregarAutor'); // Agregar autor
$routes->get('autores/eliminar/(:num)', 'AutoresController::eliminarAutor/$1'); // Eliminar autor

$routes->post('login','EmpleadosCotroller::index');