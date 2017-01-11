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
$route['default_controller'] = 'lacController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['maqueta'] = 'lacController/maqueta';
$route['dfk001'] = 'lacController/dfk001';
$route['session'] = 'lacController/session';
$route['profile_registration'] = 'lacController/profile_registration';
$route['teacher_registration'] = 'lacController/teacher_registration';
$route['profile'] = 'lacController/profile';

$route['experiences'] = 'lacController/experiences';
$route['teachers_healears'] = 'lacController/teachers_healears';
$route['jobs'] = 'lacController/jobs';
$route['login'] = 'lacController/login';
$route['workshop'] = 'lacController/workshop';
$route['talk'] = 'lacController/talk';
$route['terms_conditions'] = 'lacController/terms_conditions';
$route['knowledge'] = 'lacController/knowledge';
$route['question_of_love'] = 'lacController/question_of_love';
$route['the_art_of_sexual_kung_fu'] = 'lacController/the_art_of_sexual_kung_fu';



// Admin section

$route['admin'] = 'adminController';
$route['logout'] = 'adminController/logout';
$route['dashboard'] = 'adminController/dashboard';
