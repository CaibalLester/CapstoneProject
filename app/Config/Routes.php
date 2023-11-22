<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/AdDash', 'AdminController::AdDash');
$routes->get('/ManageAgent', 'AdminController::ManageAgent');
$routes->get('/ManageApplicant', 'AdminController::ManageApplicant');
$routes->get('/AdProfile', 'AdminController::AdProfile');
$routes->get('/AdSetting', 'AdminController::AdSetting');
$routes->get('/AdHelp', 'AdminController::AdHelp');


$routes->get('/', 'HomepageController::index');

$routes->get('/ApplicantHome', 'ApplicantController::index');
$routes->get('/Form1', 'ApplicantController::form1');
$routes->post('/form1sv', 'ApplicantController::form1sv');

