<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ClienteController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('show_clientes', [ClienteController::class, 'index']);