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


$routes->get('/AppDash', 'AppController::AppDash');
$routes->get('/AppProfile', 'AppController::AppProfile');
$routes->get('/AppSetting', 'AppController::AppSetting');
$routes->get('/AppHelp', 'AppController::AppHelp');
$routes->get('/AppForm1', 'AppController::AppForm1');
$routes->get('/AppForm2', 'AppController::AppForm2');
$routes->get('/AppForm3', 'AppController::AppForm3');
$routes->get('/AppForm4', 'AppController::AppForm4');
$routes->get('/AppForm5', 'AppController::AppForm5');




$routes->get('/', 'HomepageController::home');


$routes->get('/register', 'HomepageController::register');
$routes->post('/Authreg', 'HomepageController::Authreg');

$routes->get('/login', 'HomepageController::login');
$routes->post('/authlog', 'HomepageController::authlog');
$routes->get('/logout', 'HomepageController::logout');

$routes->get('/ApplicantHome', 'ApplicantController::index', ['filter' => 'authGuard']);
$routes->get('/Form1', 'ApplicantController::form1', ['filter' => 'authGuard']);
$routes->post('/form1sv', 'ApplicantController::form1sv');

