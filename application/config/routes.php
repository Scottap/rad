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

$route['default_controller'] = "frontend";
$route['404_override'] = '';
$route['usuarios/mostrar/(.*)'] = 'user/show/$1';


//--------------FRONTEND---------------------

//-------------/FRONTEND---------------------

//--------------BACKEND---------------------

//MODELO USUARIOS
$route['usuarios/iniciar-sesion'] = 'user/login';
$route['usuarios/cerrar-sesion'] = 'user/logout';
$route['usuarios/agregar-usuario'] = 'user/newUser';
$route['usuarios/crear'] = 'user/addUser';
$route['usuarios/ver-usuarios'] = 'user/allUsers';
$route['usuarios/eliminar-usuario/(.*)'] = 'user/deleteUserView/$1';
$route['usuarios/eliminar/(.*)'] = 'user/deleteUser/$1';
$route['usuarios/actualizar-usuario/(.*)'] = 'user/updateUserView/$1';
$route['usuarios/actualizar/(.*)'] = 'user/updateUser/$1';
$route['usuarios/perfil/(.*)'] = 'user/profile/$1';
$route['empleados/agregar'] = 'employee/newEmployeeView';
$route['empleados/agregar/(.*)'] = 'employee/newEmployee/$1';
$route['empleados/ver-empleados'] = 'employee/allEmployees';
//Inicio de backend
$route['home'] = 'backend/index';
//-------------/BACKEND---------------------

//(:num)
//http://rad/usarios/mostrar/hector => http://rad/user/show/$1


/* End of file routes.php */
/* Location: ./application/config/routes.php */