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

//Website Homepage
$route['default_controller'] = 'home';
$route['checkout'] = 'home/checkout';

//Admin Panel
$route['abcd'] = 'admin/index';
$route['login_check'] = 'admin/admin_login_check';
$route['dashboard'] = 'super_admin/index';

//..........................................
//    Category
//..........................................
//
// for add data in category
$route['add-category'] = 'super_admin/add_category';
$route['save-category'] = 'super_admin/save_category';
// for manage data in category
$route['manage-category'] = 'super_admin/manage_category';
$route['unpublish-category/(.+)'] = 'super_admin/unpublish_category/$1';
$route['publish-category/(.+)'] = 'super_admin/publish_category/$1';
$route['delete-category/(.+)'] = 'super_admin/delete_category/$1';
// for edit category data in manage_category file
$route['edit-category/(.+)'] = 'super_admin/edit_category/$1';
$route['update-category'] = 'super_admin/update_category';

//..........................................
//    Manufacture
//..........................................
//
// for add data in manufacture
$route['add-manufacture'] = 'super_admin/add_manufacture';
$route['save-manufacture'] = 'super_admin/save_manufacture';
// for manage data in manufacture
$route['manage-manufacture'] = 'super_admin/manage_manufacture';
$route['unpublish-manufacture/(.+)'] = 'super_admin/unpublish_manufacture/$1';
$route['publish-manufacture/(.+)'] = 'super_admin/publish_manufacture/$1';
$route['delete-manufacture/(.+)'] = 'super_admin/delete_manufacture/$1';
// for edit manufacture data in manage_manufacture file
$route['edit-manufacture/(.+)'] = 'super_admin/edit_manufacture/$1';
$route['update-manufacture'] = 'super_admin/update_manufacture';

//..........................................
//    Product
//..........................................
//
// for add data in product
$route['add-product'] = 'super_admin/add_product';
$route['save-product'] = 'super_admin/save_product';


$route['logout'] = 'super_admin/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
