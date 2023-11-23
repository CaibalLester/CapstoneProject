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


$routes->get('/register', 'ApplicantController::register');
$routes->post('/Authreg', 'ApplicantController::Authreg');

$routes->get('/login', 'ApplicantController::login');
$routes->post('/authlog', 'ApplicantController::authlog');
$routes->get('/logout', 'HomepageController::logout');

$routes->get('/ApplicantHome', 'ApplicantController::index', ['filter' => 'authGuard']);
$routes->get('/Form1', 'ApplicantController::form1', ['filter' => 'authGuard']);
$routes->post('/form1sv', 'ApplicantController::form1sv');

