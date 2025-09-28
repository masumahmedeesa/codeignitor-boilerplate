<?php

use App\Controllers\Dashboard;
use App\Controllers\Employee;
use App\Controllers\Login;
use App\Controllers\TransferApplication;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [Dashboard::class, 'index']);
$routes->get('/login', [Login::class, 'index']);
$routes->get('/employeelist', [Employee::class, 'index']);

$routes->get('/transferapplication', [TransferApplication::class, 'index']);
$routes->get('/transferapplication/new', [TransferApplication::class, 'new']);
$routes->post('/transferapplication/new', [TransferApplication::class, 'create']);

$routes->get('/transferapplication/delete/(:segment)', [TransferApplication::class, 'delete']);
