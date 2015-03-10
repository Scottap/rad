<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
	}

	public function newEmployeeView()
	{
		if(modules::run('user/getSessionId'))
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
			$data['departaments'] = $this->getAllDepartments();
			$data['title'] = 'Backend - Nuevo Empleado';
			$data['contenido_principal'] = $this->load->view('add-employees', $data, true);
			$this->load->view('back/template', $data); 	
		}
		else
		{
			redirect('backend');
		}
		//echo "<pre> ".print_r($data, true) . "</pre>";
	}

	function existCedula()
	{
		return $this->employee_model->existCedula($this->input->post('cedula'));
	}

	public function newEmployee()
	{
		if(!empty($_POST))
		{
			$this->form_validation->set_rules('name', 'Nombre', 'required');
			$this->form_validation->set_rules('cedula', 'Cédula', 'required|callback_existCedula');
			$this->form_validation->set_rules('departament_id', 'Departamento', 'required');
		
			$this->form_validation->set_message('required', '%s es requerido');
			$this->form_validation->set_message('existCedula', 'La cédula que introdujo ya ha sido registrada');

			if($this->form_validation->run($this) == TRUE)
			{
				$employeeDB = array(
					'name' 			 => $this->input->post('name'),
					'birthday' 		 => $this->input->post('birthday'),
					'cedula' 		 => $this->input->post('cedula'),
					'slug' 			 => modules::run('operations/createSlug', $this->input->post('name')),
					'departament_id' => $this->input->post('departament_id'),
					'hours' 		 => $this->input->post('hours'),
					'code' 			 => $this->generateCode(),
					'fingerprint'    => "",
					'action_id'		 => 2
				);
				pre($employeeDB);
					$this->employee_model->insertEmployee($employeeDB);
					$this->session->set_flashdata('message', '¡Empleado agregado exitosamente!');
					redirect('backend');
			}
			else
			{
				$user_id = modules::run('user/getSessionId');
				$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
				$data['title'] = 'Backend - Nuevo Empleado';
				$data['contenido_principal'] = $this->load->view('add-employees', $data, true);
				$this->load->view('back/template', $data); 
			}
			//echo "<pre> ".print_r($data, true) . "</pre>";
		}
	}

	public function getAllDepartments()
	{
		$query = $this->employee_model->getAllDepartments();
		$query = objectSQL_to_array($query);
		return $query;
	}

	public function allEmployees()
	{
		$user_id = modules::run('user/getSessionId');
		$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
		$data['all_employees'] = $this->getAllEmployees();
		foreach ($data['all_employees'] as $employee => $value) {
			$data['all_employees'][$employee]['department_name'] = $this->getDepartamentNameViaId($value['departament_id']);
		}
		$data['departaments'] = $this->getAllDepartments();
		$data['title'] = 'Backend - Lista de Empleados';
		$data['contenido_principal'] = $this->load->view('list-employees', $data, true);
		$this->load->view('back/template', $data);
		
	}

	public function getAllEmployees()
	{
		$employees = $this->employee_model->allEmployees();
		$allEmployees = objectSQL_to_array($employees);
		return $allEmployees;
	}

	public function getDepartamentNameViaId($dId)
	{
		return $this->employee_model->getDepartamentNameViaId($dId);
	
	}

	public function deleteEmployeeView($slug)
	{
		$user_id = modules::run('user/getSessionId');
		$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
		$data['title'] = 'Backend - Eliminar Empleado';
		$data['employeeData'] = $this->getEmployeeDataViaSlug($slug);
		$data['contenido_principal'] = $this->load->view('delete-employees', $data, true);
		$this->load->view('back/template', $data);
		echo "<pre> ".print_r($data, true) . "</pre>";
	}

	public function getEmployeeDataViaSlug($slug)
	{
		$employeeData = $this->employee_model->getEmployeeDataViaSlug($slug);
		$employeeData = SQL_to_array($employeeData);
		$employeeData['departament_name'] = $this->getDepartamentNameViaId($employeeData['departament_id']);
		return $employeeData;
	}

	public function deleteEmployee($slug)
	{
		$this->employee_model->deleteEmployeeViaSlug($slug);
		return('backend');
	}

	public function updateEmployeeView($slug)
	{
		$user_id = modules::run('user/getSessionId');
		$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
		$data['employeeData'] = $this->getEmployeeDataViaSlug($slug);
		$data['departaments'] = $this->getAllDepartments();
		//echo "<pre> ".print_r($data, true) . "</pre>";
		//die();
		$data['title'] = 'Backend - Actualizar Empleado';
		$data['contenido_principal'] = $this->load->view('update-employees', $data, true);
		$this->load->view('back/template', $data);
	}

	public function getEmployeeDataViaId($employee_id)
	{
		$employeeData = $this->employee_model->getEmployeeDataViaId($employee_id);
		$employeeData = SQL_to_array($employeeData);
		$employeeData['departament_name'] = $this->getDepartamentNameViaId($employeeData['departament_id']);
		return $employeeData;
	}

	public function updateEmployee()
	{
		if(!empty($_POST))
		{
			$this->form_validation->set_rules('employee_id','id empleado', 'required');
			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('birthday', "Fecha de Nacimiento", 'required');
			$this->form_validation->set_rules('departament_id','Departamento', 'required');
			$this->form_validation->set_rules('cedula','Cedula', 'required');

			$this->form_validation->set_message('required','%s es requerido.');

			if($this->form_validation->run($this))
			{
				$employee_id = $this->input->post('employee_id');
				$data = array(
					'name' => $this->input->post('nombre'),
					'birthday' => $this->input->post('birthday'),
					'departament_id' => $this->input->post('departament_id'),
					'cedula' => $this->input->post('cedula')
				);

				$this->employee_model->updateEmployee($employee_id, $data);

				redirect('empleados/ver');
			}
			else
			{
				$employee_id = $this->input->post('employee_id');
				$user_id = modules::run('user/getSessionId');
				$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
				$data['employeeData'] = $this->getEmployeeDataViaId($employee_id);
				$data['departaments'] = $this->getAllDepartments();
				$data['title'] = 'Backend - Actualizar Empleado';
				$data['contenido_principal'] = $this->load->view('update-employees', $data, true);
				$this->load->view('back/template', $data);
			}
		}
		else
		{
			redirect('backend');
		}
	}

 	public function getEmployeeDataViaCode($employee_code)
 	{
 		$employeeData = $this->employee_model->getEmployeeDataViaCode($employee_code);
 		$employeeData = SQL_to_array($employeeData);
 		return $employeeData;
 	}

 	public function getEmployeeDataViaCedula($employee_cedula)
 	{
 		$employeeData = $this->employee_model->getEmployeeDataViaCedula($employee_cedula);
 		$employeeData = SQL_to_array($employeeData);
 		return $employeeData;
 	}

 	public function getActionIdViaCode($employee_code)
 	{
 		$act_id = $this->employee_model->getActionIdViaCode($employee_code);
 		$act_id = SQL_to_array($act_id);
 		return $act_id;
 	}

 	public function updateAction($id, $data)
 	{
 		$this->employee_model->updateAction($id, $data);
 	}

 	public function existCode($code)
 	{
 		$query = $this->employee_model->existCode($code);
 		return ($query);
 	}

 	function generateCodeEmployee()
	{
		$characters = array(
			"A","B","C","D","E","F","G","H","J","K","L","M",
			"N","P","Q","R","S","T","U","V","W","X","Y","Z",
			"1","2","3","4","5","6","7","8","9"
		);
		//CREAMOS UN VECTOR VACIO QUE LLEVARA LA CLAVE
		$keys = array();
		//CONTADOR EN 0 HASTA 6, ES DECIR, CALCULARA UNA CLAVE DE 7 CARACTERES
		while(count($keys) < 7) {
			$x = mt_rand(0, count($characters)-1);
			if(!in_array($x, $keys)) {
				$keys[] = $x;
			}
		}
		
		$random_chars = "";

		foreach($keys as $key){
			$random_chars .= $characters[$key];
		}

		return $random_chars;
	}

	function generateCode()
	{
		$codigo = $this->generateCodeEmployee();
		while($this->employee_model->existCode($codigo))
			$codigo = $this->generateCodeEmployee();
		return $codigo;
	}

	public function getEmployeesByDate($date)
	{
		$query = $this->employee_model->getEmployeesByDate($date);
		$employees = objectSQL_to_array($query);
		return $employees;
	}

	public function getNameById($employee_id)
	{
		return $this->employee_model->getNameById($employee_id);
	}

	public function getCedulaById($employee_id)
	{
		return $this->employee_model->getCedulaById($employee_id);
	}

	public function getDepartamentIdById($employee_id)
	{
		return $this->employee_model->getDepartamentIdById($employee_id);
	}

	public function getDepartamentById($employee_id)
	{
		$departament_id = $this->getDepartamentIdById($employee_id);
		return $this->employee_model->getDepartamentbyId($departament_id);
	}

}
