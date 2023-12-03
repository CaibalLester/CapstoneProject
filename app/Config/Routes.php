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

$routes->get('/AppDash', 'AppController::AppDash',['filter' => 'authGuard']);
$routes->get('/AppProfile', 'AppController::AppProfile',['filter' => 'authGuard']);
$routes->get('/AppSetting', 'AppController::AppSetting',['filter' => 'authGuard']);
$routes->get('/AppHelp', 'AppController::AppHelp',['filter' => 'authGuard']);
$routes->get('/AppForm1', 'AppController::AppForm1',['filter' => 'authGuard']);
$routes->post('/form1sv', 'AppController::form1sv');

$routes->get('/AppForm2', 'AppController::AppForm2',['filter' => 'authGuard']);
$routes->get('/AppForm3', 'AppController::AppForm3',['filter' => 'authGuard']);
$routes->get('/AppForm4', 'AppController::AppForm4',['filter' => 'authGuard']);
$routes->get('/AppForm5', 'AppController::AppForm5',['filter' => 'authGuard']);

$routes->get('/AgDash', 'AgentController::AgDash');
$routes->get('/AgProfile', 'AgentController::AgProfile');
$routes->get('/AgSetting', 'AgentController::AgSetting');
$routes->get('/AgHelp', 'AgentController::AgHelp');

$routes->get('/', 'HomepageController::home');

$routes->get('/register', 'HomepageController::register');
$routes->post('/Authreg', 'HomepageController::Authreg');

$routes->get('/login', 'HomepageController::login');
$routes->post('/authlog', 'HomepageController::authlog');
$routes->get('/logout', 'HomepageController::logout');

$routes->get('/ApplicantHome', 'ApplicantController::index', ['filter' => 'authGuard']);
$routes->get('/Form1', 'ApplicantController::form1', ['filter' => 'authGuard']);
$routes->post('/form1sv', 'ApplicantController::form1sv');

