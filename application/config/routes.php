<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the main guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['login'] = 'login';
$route['logout'] = 'login/logout';
$route['answers'] = 'main/data/';
$route['login-page'] = 'main/login/';
$route['signin'] = 'login/signin/';
$route['profile/(:num)'] = 'main/profile/$1';
$route['about-us'] = 'main/aboutUs/';
$route['questionnaires'] = 'main/questionnaires/';
$route['contact'] = 'main/contact/';
$route['show'] = 'main/show/';
$route['test'] = 'questionnaires/questionnaireTest/';
$route['signup'] = 'signup';
$route['create-question'] = 'questionnaires/createQuestion';
$route['import-question'] = 'questionnaires/importQuestion';
$route['validation'] = 'signup/validation';
$route['questionnaire/(:any)'] = 'questionnaires/questionnaire/$1';
$route['fill/(:any)'] = 'questionnaires/fill/$1';
$route['responses/(:any)'] = 'questionnaires/responses/$1';
$route['search'] = 'main/search/$1';
$route['admin'] = 'main/admin';
$route['delete/(:any)'] = 'questionnaires/delete/$1';
$route['send-answers'] = 'questionnaires/sendAnswers';
$route['update-question'] = 'questionnaires/updateQuestion';
$route['publish/(:any)'] = 'questionnaires/publish/$1';
$route['edit/(:any)'] = 'questionnaires/edit/$1';





$route['404_override'] = 'main/oops';
$route['translate_uri_dashes'] = FALSE;
