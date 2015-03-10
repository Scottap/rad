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


//--------------FRONTEND--------------------

//MODULO REPORTES

$route['reportes/marcar'] = 								'report/ajax_marcar';

//--------------/FRONTEND-------------------

//--------------BACKEND---------------------

//MODULO USUARIOS
$route['usuarios/iniciar-sesion'] = 						'user/login';
$route['usuarios/cerrar-sesion'] = 							'user/logout';
$route['usuarios/agregar-usuario'] = 						'user/newUser';
$route['usuarios/crear'] = 									'user/addUser';
$route['usuarios/ver-usuarios'] = 							'user/allUsers';
$route['usuarios/eliminar-usuario/(.*)'] = 					'user/deleteUserView/$1';
$route['usuarios/eliminar/(.*)'] = 							'user/deleteUser/$1';
$route['usuarios/actualizar-usuario/(.*)'] = 				'user/updateUserView/$1';
$route['usuarios/actualizar'] = 							'user/updateUser';
$route['usuarios/perfil/(.*)'] = 							'user/profile/$1';
//MODULO EMPLEADOS
$route['empleados/agregar'] = 								'employee/newEmployeeView';
$route['empleados/agregar-empleado'] = 						'employee/newEmployee';
$route['empleados/ver'] = 									'employee/allEmployees';
$route['empleados/eliminar/(.*)'] =			 			 	'employee/deleteEmployeeView/$1';
$route['empleados/eliminar-empleado/(.*)'] = 				'employee/deleteEmployee/$1';
$route['empleados/actualizar/(.*)'] = 						'employee/updateEmployeeView/$1';
$route['empleados/actualizar-empleado'] = 					'employee/updateEmployee';
//MODULO REPORTES
$route['reportes'] = 										'report/reportsView';
$route['reportes/exportar'] = 								'report/getAttendaceReport';
$route['reportes/reporte-diario'] =							'report/dailyReport';
$route['reportes/ver-reporte-diario'] =						'report/daily-report';	
$route['reportes/descargarDiario'] = 						'report/downloadReportDaily';
$route['reportes/reporte-mensual'] = 						'report/monthlyReport';
$route['reportes/ver-reporte-mensual'] = 					'report/monthly-report';				
//INICIO DE BACKEND
$route['home'] = 											'backend/index';

//-------------/BACKEND---------------------

//(:num)
//http://rad/usarios/mostrar/hector => http://rad/user/show/$1


/* End of file routes.php */
/* Location: ./application/config/routes.php */