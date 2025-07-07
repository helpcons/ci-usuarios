<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Usuario
$routes->get('/inicio', 'Inicio::index');

//Clientes
$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/novo', 'Clientes::novo');
$routes->post('/clientes/store', 'Clientes::store');
