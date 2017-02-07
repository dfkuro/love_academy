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
| Please see the user guide for complete details:
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

/*============================================
=            Principal for config            =
============================================*/

$route['default_controller'] = 'LacController/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*=====  End of Principal for config  ======*/


/*===============================================
=            Section for lac webpage            =
===============================================*/

$route['home'] = 'LacController/home';
$route['maqueta'] = 'LacController/maqueta';
$route['teacher_profile/(:num)'] = 'LacController/teacher_profile/$1';
$route['session'] = 'LacController/session';
$route['registration'] = 'LacController/registration';
$route['profile_registration'] = 'LacController/profile_registration';
$route['teacher_registration'] = 'LacController/teacher_registration';
$route['profile'] = 'LacController/profile';
//$route['th_profile/(:num)'] = 'LacController/th_profile/$1';

$route['experiences'] = 'LacController/experiences';
$route['teachers_healears'] = 'LacController/teachers_healears';
$route['jobs'] = 'LacController/jobs';
$route['login'] = 'LacController/login';
$route['user_logout'] = 'LacController/user_logout';
$route['workshop/(:num)'] = 'LacController/workshop/$1';
$route['talk'] = 'LacController/talk';
$route['terms_conditions'] = 'LacController/terms_conditions';
$route['knowledge'] = 'LacController/knowledge';
$route['question_of_love'] = 'LacController/question_of_love';
$route['the_art_of_sexual_kung_fu'] = 'LacController/the_art_of_sexual_kung_fu';

$route['experience_form'] = 'LacController/experience_form';
$route['form_workshop'] = 'LacController/form_workshop';
$route['session_form'] = 'LacController/session_form';
$route['new_event'] = 'LacController/new_event';


/*=====  End of Section for lac webpage  ======*/




/*=====================================
=            Admin section            =
=====================================*/


$route['admin'] = 'AdminController';
$route['logout'] = 'AdminController/logout';
$route['dashboard'] = 'AdminController/dashboard';


/*=====  End of Admin section  ======*/