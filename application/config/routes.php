<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['a_h_c'] = "s_s_a/a_h_c";
$route['m_h_c'] = "s_s_a/m_h_c";
$route['a_l'] = "s_s_a/a_l";
$route['m_l'] = "s_s_a/m_l";
$route['a_m_b_c'] = "s_s_a/a_m_b_c";
$route['m_m_b_c'] = "s_s_a/m_m_b_c";
$route['a_s_m_b_c'] = "s_s_a/a_s_m_b_c";
$route['m_s_m_b_c'] = "s_s_a/m_s_m_b_c";
$route['a_p'] = "s_s_a/a_p";
$route['m_p_p'] = "s_s_a/m_p_p";
$route['a_b_s'] = "s_s_a/a_b_s";
$route['m_b_s'] = "s_s_a/m_b_s";
$route['a_u_p'] = "s_s_a/a_u_p";
$route['m_a_u_p'] = "s_s_a/m_a_u_p";
$route['m_p_c'] = "s_s_a/m_p_c";
$route['m_o'] = "s_s_a/m_o";
$route['a_r_h_c'] = "s_s_a/a_r_h_c";
$route['m_h_r_c'] = "s_s_a/m_h_r_c";
$route['a_c_u'] = "s_s_a/a_c_u";
$route['m_c_u_i'] = "s_s_a/m_c_u_i";
$route['a_r'] = "s_s_a/a_r";
$route['m_a_a'] = "s_s_a/m_a_a";
$route['m_c_a_p'] = "s_s_a/m_c_a_p";

$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */