<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/AdDash', 'AdminController::AdDash', ['filter' => 'adminFilter'] , );
$routes->get('/ManageAgent', 'AdminController::ManageAgent', ['filter' => 'adminFilter']);
$routes->get('/AdProfile', 'AdminController::AdProfile', ['filter' => 'adminFilter']);
$routes->get('/AdSetting', 'AdminController::AdSetting', ['filter' => 'adminFilter']);
$routes->get('/AdHelp', 'AdminController::AdHelp', ['filter' => 'adminFilter']);
$routes->get('/add', 'ProfileController::add', ['filter' => 'adminFilter']);

$routes->match(['get', 'post'],'/usermanagement', 'UsersManageController::usermanagement', ['filter' => 'adminFilter']);
$routes->post('/newuser', 'UsersManageController::newuser', ['filter' => 'adminFilter']);
$routes->post('/upuser/(:any)', 'UsersManageController::upuser/$1', ['filter' => 'adminFilter']);


$routes->get('/ViewAppForm/(:any)', 'AdminController::ViewAppForm/$1', ['filter' => 'authGuard']);
$routes->get('/ViewAppForm2/(:any)', 'AdminController::ViewAppForm2/$1', ['filter' => 'authGuard']);
$routes->get('/ViewAppForm3/(:any)', 'AdminController::ViewAppForm3/$1', ['filter' => 'authGuard']);
$routes->get('/ViewAppForm4/(:any)', 'AdminController::ViewAppForm4/$1', ['filter' => 'authGuard']);
$routes->get('/ViewAppForm5/(:any)', 'AdminController::ViewAppForm5/$1', ['filter' => 'authGuard']);


$routes->get('/newAgent/(:any)', 'AdminController::newAgent/$1', ['filter' => 'adminFilter']);
$routes->match(['get', 'post'], '/promotion', 'AdminController::promotion', ['filter' => 'adminFilter']);

$routes->get('/ManageApplicant', 'AdminController::ManageApplicant', ['filter' => 'adminFilter']);
$routes->post('/userSearch', 'AdminController::userSearch', ['filter' => 'adminFilter']);
$routes->post('/agentSearch', 'AdminController::agentSearch', ['filter' => 'adminFilter']);
$routes->post('/svad', 'AdminController::svad', ['filter' => 'adminFilter']);
$routes->get('/RTC', 'AdminController::RTC', ['filter' => 'adminFilter']);

$routes->match(['get', 'post'], '/agentprofile/(:any)', 'ProfileController::agentprofile/$1', ['filter' => 'adminFilter']);
$routes->match(['get', 'post'], '/applicantprofile/(:any)', 'ProfileController::applicantprofile/$1', ['filter' => 'adminFilter']);




$routes->get('/AppDash', 'AppController::AppDash', ['filter' => 'applicantFilter']);
$routes->get('/AppProfile', 'AppController::AppProfile', ['filter' => 'applicantFilter']);
$routes->get('/AppSetting', 'AppController::AppSetting', ['filter' => 'applicantFilter']);
$routes->post('/svap', 'AppController::svap');
$routes->get('/AppHelp', 'AppController::AppHelp', ['filter' => 'applicantFilter']);
$routes->get('/AppForm1', 'AppController::AppForm1', ['filter' => 'applicantFilter']);

$routes->post('/form1sv', 'AppController::form1sv');
$routes->post('/form2sv', 'AppController::form2sv');
$routes->post('/form3sv', 'AppController::form3sv');

$routes->get('/AppForm2', 'AppController::AppForm2', ['filter' => 'applicantFilter']);
$routes->get('/AppForm3', 'AppController::AppForm3', ['filter' => 'applicantFilter']);
$routes->get('/AppForm4', 'AppController::AppForm4', ['filter' => 'applicantFilter']);
$routes->get('/AppForm5', 'AppController::AppForm5', ['filter' => 'applicantFilter']);
$routes->match(['get', 'post'], '/FA', 'AppController::FA', ['filter' => 'applicantFilter']);


$routes->get('/AgDash', 'AgentController::AgDash', ['filter' => 'agentFilter']);
$routes->get('/AgProfile', 'AgentController::AgProfile', ['filter' => 'agentFilter']);
$routes->get('/AgSetting', 'AgentController::AgSetting', ['filter' => 'agentFilter']);
$routes->get('/AgHelp', 'AgentController::AgHelp', ['filter' => 'agentFilter']);
$routes->post('/svag', 'AgentController::svag', ['filter' => 'agentFilter']);
$routes->get('/subagent', 'AgentController::subagent', ['filter' => 'agentFilter']);
$routes->post('/subagentSearch', 'AgentController::subagentSearch', ['filter' => 'agentFilter']);

$routes->get('/', 'HomepageController::home');

$routes->get('/register/(:any)', 'HomepageController::register/$1');
$routes->post('/Authreg/(:any)', 'HomepageController::Authreg/$1');

$routes->post('/Authreg', 'HomepageController::Authreg');
$routes->post('/updatePassword', 'HomepageController::updatePassword', ['filter' => 'authGuard']);
$routes->get('/login', 'HomepageController::login');
$routes->post('/authlog', 'HomepageController::authlog');
// $routes->match(['get', 'post'], 'login', 'HomepageController::authlog', ["filter" => "role"]);

//home
$routes->get('/logout', 'HomepageController::logout');
$routes->get('/forgot', 'HomepageController::forgot');
$routes->post('send-reset-link', 'HomepageController::sendResetLink');
$routes->get('reset-password/(:segment)', 'HomepageController::resetPassword/$1');
$routes->post('reset-password/(:segment)', 'HomepageController::processResetPassword/$1');
$routes->get('verify-email/(:segment)', 'HomepageController::verifyEmail/$1');

//charts
$routes->get('/monthlyAgentCount', 'ChartsController::monthlyAgentCount', ['filter' => 'authGuard']);
$routes->get('/monthlyPendingApplicantCount', 'ChartsController::monthlyPendingApplicantCount', ['filter' => 'authGuard']);
// $routes->get('/emailtest', 'HomepageController::emailtest');

//RTC
$routes->get('/homechat', 'RTCController::RTC');
$routes->post('/chat', 'RTCController::chat');
$routes->get('/send', 'RTCController::send');

//pdf
$routes->get('/generatePdf/(:num)', 'AdminController::generatePdf/$1');
$routes->get('/generatePdf3/(:num)', 'AdminController::generatePdf3/$1');

//Clientt
$routes->get('/ClientPage', 'ClientController::ClientPage');

$routes->get('/services', 'ClientController::services');
$routes->get('/servicesdetails', 'ClientController::servicesdetails');
$routes->get('/pricing', 'ClientController::pricing');
$routes->get('/terms', 'ClientController::terms');
$routes->get('/contactus', 'ClientController::contactus');


$routes->get('/ClientWell', 'ClientController::ClientWell');

$routes->get('/ClientCompass', 'ClientController::ClientCompass');

$routes->get('/ClientRegister', 'ClientController::register');





