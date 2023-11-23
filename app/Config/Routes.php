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


$routes->get('/', 'HomepageController::home');


$routes->get('/register', 'HomepageController::register');
$routes->post('/Authreg', 'HomepageController::Authreg');

$routes->get('/login', 'HomepageController::login');
$routes->post('/authlog', 'HomepageController::authlog');
$routes->get('/logout', 'HomepageController::logout');

$routes->get('/ApplicantHome', 'ApplicantController::index', ['filter' => 'authGuard']);
$routes->get('/Form1', 'ApplicantController::form1', ['filter' => 'authGuard']);
$routes->post('/form1sv', 'ApplicantController::form1sv');

