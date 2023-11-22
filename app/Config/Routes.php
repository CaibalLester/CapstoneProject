<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/AdDash', 'AdminController::AdDash');
$routes->get('/ManageAgent', 'AdminController::ManageAgent');
$routes->get('/ManageApplicant', 'AdminController::ManageApplicant');
$routes->get('/AdProfile', 'AdminController::AdProfile');
$routes->get('/AdSetting', 'AdminController::AdSetting');
$routes->get('/AdHelp', 'AdminController::AdHelp');