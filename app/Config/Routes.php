<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/AdDash', 'AdminController::AdDash', ['filter' => 'adminFilter']);
$routes->get('/ManageAgent', 'AdminController::ManageAgent', ['filter' => 'adminFilter']);
$routes->get('/AdProfile', 'AdminController::AdProfile', ['filter' => 'adminFilter']);
$routes->get('/AdSetting', 'AdminController::AdSetting', ['filter' => 'adminFilter']);
$routes->get('/AdHelp', 'AdminController::AdHelp', ['filter' => 'adminFilter']);

$routes->get('/ViewAppForm/(:segment)', 'AdminController::ViewAppForm/$1');

$routes->post('/newAgent', 'AdminController::newAgent', ['filter' => 'adminFilter']);
$routes->get('/ManageApplicant', 'AdminController::ManageApplicant', ['filter' => 'adminFilter']);
$routes->post('/userSearch', 'AdminController::userSearch', ['filter' => 'adminFilter']);
$routes->post('/agentSearch', 'AdminController::agentSearch', ['filter' => 'adminFilter']);
$routes->post('/svad', 'AdminController::svad', ['filter' => 'adminFilter']);
$routes->get('/RTC', 'AdminController::RTC', ['filter' => 'adminFilter']);

$routes->get('/AppDash', 'AppController::AppDash', ['filter' => 'applicantFilter']);
$routes->get('/AppProfile', 'AppController::AppProfile', ['filter' => 'applicantFilter']);
$routes->get('/AppSetting', 'AppController::AppSetting', ['filter' => 'applicantFilter']);
$routes->post('/svap', 'AppController::svap');
$routes->get('/AppHelp', 'AppController::AppHelp', ['filter' => 'applicantFilter']);
$routes->get('/AppForm1', 'AppController::AppForm1', ['filter' => 'applicantFilter']);
$routes->post('/form1sv', 'AppController::form1sv');
$routes->get('/AppForm2', 'AppController::AppForm2', ['filter' => 'applicantFilter']);
$routes->get('/AppForm3', 'AppController::AppForm3', ['filter' => 'applicantFilter']);
$routes->get('/AppForm4', 'AppController::AppForm4', ['filter' => 'applicantFilter']);
$routes->get('/AppForm5', 'AppController::AppForm5', ['filter' => 'applicantFilter']);

$routes->get('/AgDash', 'AgentController::AgDash', ['filter' => 'agentFilter']);
$routes->get('/AgProfile', 'AgentController::AgProfile', ['filter' => 'agentFilter']);
$routes->get('/AgSetting', 'AgentController::AgSetting', ['filter' => 'agentFilter']);
$routes->get('/AgHelp', 'AgentController::AgHelp', ['filter' => 'agentFilter']);
$routes->post('/svag', 'AgentController::svag', ['filter' => 'agentFilter']);
$routes->get('/subagent', 'AgentController::subagent', ['filter' => 'agentFilter']);
$routes->post('/subagentSearch', 'AgentController::subagentSearch', ['filter' => 'agentFilter']);

$routes->get('/', 'HomepageController::home');
$routes->get('/register', 'HomepageController::register');
$routes->post('/Authreg', 'HomepageController::Authreg');
$routes->post('/updatePassword', 'HomepageController::updatePassword');
$routes->get('/login', 'HomepageController::login');
$routes->post('/authlog', 'HomepageController::authlog');
// $routes->match(['get', 'post'], 'login', 'HomepageController::authlog', ["filter" => "role"]);

$routes->get('/logout', 'HomepageController::logout');
$routes->get('/forgot', 'HomepageController::forgot');
$routes->post('send-reset-link', 'HomepageController::sendResetLink');
$routes->get('reset-password/(:segment)', 'HomepageController::resetPassword/$1');
$routes->post('reset-password/(:segment)', 'HomepageController::processResetPassword/$1');
$routes->get('verify-email/(:segment)', 'HomepageController::verifyEmail/$1');


// // Admin Routes
// $routes->group('admin', ['filter' => 'adminFilter'], function ($routes) {
//     $routes->get('AdDash', 'AdminController::AdDash');
//     $routes->get('ManageAgent', 'AdminController::ManageAgent');
//     $routes->get('AdProfile', 'AdminController::AdProfile');
//     $routes->get('AdSetting', 'AdminController::AdSetting');
//     $routes->get('AdHelp', 'AdminController::AdHelp');
//     $routes->get('ViewAppForm/(:num)', 'AdminController::ViewAppForm/$1');
//     $routes->post('newAgent', 'AdminController::newAgent');
//     $routes->get('ManageApplicant', 'AdminController::ManageApplicant');
//     $routes->post('userSearch', 'AdminController::userSearch');
//     $routes->post('agentSearch', 'AdminController::agentSearch');
//     $routes->post('svad', 'AdminController::svad');
//     $routes->get('RTC', 'AdminController::RTC');
// });

// // App Routes
// $routes->group('applicant', ['filter' => 'authGuard'], function ($routes) {
//     $routes->get('applicant/', 'AppController::AppDash');
//     $routes->get('AppProfile', 'AppController::AppProfile');
//     $routes->get('AppSetting', 'AppController::AppSetting');
//     $routes->post('svap', 'AppController::svap');
//     $routes->get('AppHelp', 'AppController::AppHelp');
//     $routes->get('AppForm1', 'AppController::AppForm1');
//     $routes->post('form1sv', 'AppController::form1sv');
//     $routes->get('AppForm2', 'AppController::AppForm2');
//     $routes->get('AppForm3', 'AppController::AppForm3');
//     $routes->get('AppForm4', 'AppController::AppForm4');
//     $routes->get('AppForm5', 'AppController::AppForm5');
// });

// // Agent Routes
// $routes->group('agent', ['filter' => 'authGuard'], function ($routes) {
//     $routes->get('AgDash', 'AgentController::AgDash');
//     $routes->get('AgProfile', 'AgentController::AgProfile');
//     $routes->get('AgSetting', 'AgentController::AgSetting');
//     $routes->get('AgHelp', 'AgentController::AgHelp');
//     $routes->post('svag', 'AgentController::svag');
//     $routes->get('subagent', 'AgentController::subagent');
//     $routes->post('subagentSearch', 'AgentController::subagentSearch');
// });

// // Homepage Routes
// $routes->group('', function ($routes) {
//     $routes->get('/', 'HomepageController::home');
//     $routes->get('/register', 'HomepageController::register');
//     $routes->post('/Authreg', 'HomepageController::Authreg');
//     $routes->post('/updatePassword', 'HomepageController::updatePassword');
//     $routes->get('/login', 'HomepageController::login');
//     $routes->post('/authlog', 'HomepageController::authlog');
//     $routes->get('/logout', 'HomepageController::logout');
//     $routes->get('/forgot', 'HomepageController::forgot');
//     $routes->post('send-reset-link', 'HomepageController::sendResetLink');
//     $routes->get('reset-password/(:segment)', 'HomepageController::resetPassword/$1');
//     $routes->post('reset-password/(:segment)', 'HomepageController::processResetPassword/$1');
//     $routes->get('verify-email/(:segment)', 'HomepageController::verifyEmail/$1');
// });


$routes->get('/monthlyAgentCount', 'ChartsController::monthlyAgentCount', ['filter' => 'authGuard']);
$routes->get('/monthlyPendingApplicantCount', 'ChartsController::monthlyPendingApplicantCount', ['filter' => 'authGuard']);
// $routes->get('/emailtest', 'HomepageController::emailtest');


$routes->get('/homechat', 'RTCController::homechat');
$routes->post('/chat', 'RTCController::chat');

$routes->get('/send', 'RTCController::send');


// In your routes file
$routes->get('/generatePdf/(:num)', 'AdminController::generatePdf/$1');

