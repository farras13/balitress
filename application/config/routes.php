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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['villa'] = 'Home/villa';
$route['villa/detail'] = 'Home/detail_villa';
$route['activities'] = 'Home/activities';
$route['activities/detail/(:any)'] = 'Home/detail_activities/$1';
$route['tour'] = 'Home/tour';
$route['tour/(:any)'] = 'Home/tour/$1';
$route['tour/detail/(:any)'] = 'Home/detail_tour/$1';
$route['payment'] = 'Home/payment';
$route['contact'] = 'Home/contact';

// Login & Register
$route['login'] = 'Login/index';
$route['register'] = 'Login/register';
$route['login/pros_register'] = 'Login/pros_register';
$route['logout'] = 'Login/logout';


$route['rooms'] = 'rooms/index';
$route['rooms/create'] = 'rooms/create';
$route['rooms/edit/(:any)'] = 'rooms/edit/$1';
$route['rooms/delete/(:any)'] = 'rooms/delete/$1';

$route['tourpackage'] = 'tour_package/index';
$route['tourpackage/create'] = 'tour_package/create';
$route['tourpackage/view/(:any)'] = 'tour_package/view/$1';
$route['tourpackage/edit/(:any)'] = 'tour_package/edit/$1';
$route['tourpackage/delete/(:any)'] = 'tour_package/delete/$1';
$route['tourpackage/gallery/(:any)'] = 'tour_package/gallery/$1';
$route['tourpackage/include_exclude/(:any)'] = 'tour_package/include_exclude/$1';
$route['tourpackage/include_exclude/add/(:any)'] = 'tour_package/add_include_exclude/$1';
$route['tourpackage/include_exclude/delete_include/(:any)'] = 'tour_package/delete_include/$1';
$route['tourpackage/include_exclude/delete_exclude/(:any)'] = 'tour_package/delete_exclude/$1';
$route['tourpackage/delete_image/(:any)'] = 'tour_package/delete_image/$1';
$route['tourpackage/upload_image'] = 'tour_package/upload_image';