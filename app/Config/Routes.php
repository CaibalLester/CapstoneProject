<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/AdDash', 'AdminController::AdDash',['filter' => 'authGuard']);
$routes->get('/ManageAgent', 'AdminController::ManageAgent',['filter' => 'authGuard']);
$routes->get('/AdProfile', 'AdminController::AdProfile',['filter' => 'authGuard']);
$routes->get('/AdSetting', 'AdminController::AdSetting',['filter' => 'authGuard']);
$routes->get('/AdHelp', 'AdminController::AdHelp',['filter' => 'authGuard']);
$routes->get('/ViewAppForm/(:num)', 'AdminController::ViewAppForm/$1');
$routes->post('/newAgent', 'AdminController::newAgent',['filter' => 'authGuard']);
$routes->get('/ManageApplicant', 'AdminController::ManageApplicant', ['filter' => 'authGuard']);
$routes->post('/userSearch', 'AdminController::userSearch', ['filter' => 'authGuard']);
$routes->post('/agentSearch', 'AdminController::agentSearch', ['filter' => 'authGuard']);
$routes->post('/svad', 'AdminController::svad', ['filter' => 'authGuard']);
$routes->get('/RTC', 'AdminController::RTC', ['filter' => 'authGuard']);

$routes->get('/AppDash', 'AppController::AppDash',['filter' => 'authGuard']);
$routes->get('/AppProfile', 'AppController::AppProfile',['filter' => 'authGuard']);
$routes->get('/AppSetting', 'AppController::AppSetting',['filter' => 'authGuard']);
$routes->post('/svap', 'AppController::svap');
$routes->get('/AppHelp', 'AppController::AppHelp',['filter' => 'authGuard']);
$routes->get('/AppForm1', 'AppController::AppForm1',['filter' => 'authGuard']);
$routes->post('/form1sv', 'AppController::form1sv');
$routes->get('/AppForm2', 'AppController::AppForm2',['filter' => 'authGuard']);
$routes->get('/AppForm3', 'AppController::AppForm3',['filter' => 'authGuard']);
$routes->get('/AppForm4', 'AppController::AppForm4',['filter' => 'authGuard']);
$routes->get('/AppForm5', 'AppController::AppForm5',['filter' => 'authGuard']);

$routes->get('/AgDash', 'AgentController::AgDash',['filter' => 'authGuard']);
$routes->get('/AgProfile', 'AgentController::AgProfile',['filter' => 'authGuard']);
$routes->get('/AgSetting', 'AgentController::AgSetting',['filter' => 'authGuard']);
$routes->get('/AgHelp', 'AgentController::AgHelp',['filter' => 'authGuard']);
$routes->post('/svag', 'AgentController::svag',['filter' => 'authGuard']);
$routes->get('/subagent', 'AgentController::subagent',['filter' => 'authGuard']);
$routes->post('/subagentSearch', 'AgentController::subagentSearch', ['filter' => 'authGuard']);

$routes->get('/', 'HomepageController::home');
$routes->get('/register', 'HomepageController::register');
$routes->post('/Authreg', 'HomepageController::Authreg');
$routes->post('/updatePassword', 'HomepageController::updatePassword');
$routes->get('/login', 'HomepageController::login');
$routes->post('/authlog', 'HomepageController::authlog');
$routes->get('/logout', 'HomepageController::logout');
$routes->get('/forgot', 'HomepageController::forgot');
$routes->post('send-reset-link', 'HomepageController::sendResetLink');
$routes->get('reset-password/(:segment)', 'HomepageController::resetPassword/$1');
$routes->post('reset-password/(:segment)', 'HomepageController::processResetPassword/$1');

$routes->get('/monthlyAgentCount', 'ChartsController::monthlyAgentCount',['filter' => 'authGuard']);
$routes->get('/monthlyPendingApplicantCount', 'ChartsController::monthlyPendingApplicantCount',['filter' => 'authGuard']);
// $routes->get('/emailtest', 'HomepageController::emailtest');


$routes->get('/homechat', 'RTCController::homechat');
$routes->post('/chat', 'RTCController::chat');

$routes->get('/send', 'RTCController::send');
