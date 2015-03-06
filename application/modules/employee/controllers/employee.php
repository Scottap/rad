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
			$data['departaments'] = $this->getAllDepartments();
			$data['userData'] = modules::run('user/getUserDataFormat');
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

	public function newEmployee($data)
	{
		if(!empty($_POST))
		{
			$this->form_validation->set_rules('name', 'Nombre', 'required');
			$this->form_validation->set_rules('cedula', 'Cédula', 'required|callback_existingCed');
			$this->form_validation->set_rules('departament_id', 'Departamento', 'required');
			$this->form_validation->set_rules('code', 'Código único', 'required');
			//$this->form_validation->set_rules('fingerprint', 'Huella Dactilar', 'required|callback_existingFP');
		
			$this->form_validation->set_message('required', '%s es requerido');
			$this->form_validation->set_message('existingCed', 'La cédula que introdujo ya ha sido registrada');

			if($this->form_validation->run($this) == TRUE)
			{
				$employeeDB = array(
					'name' 			 => $this->input->post('name'),
					'birthday' 		 => $this->input->post('birthday'),
					'cedula' 		 => $this->input->post('cedula'),
					'slug' 			 => modules::run('operations/createSlug', $this->input->post('name')),
					'departament_id' => $this->input->post('departament_id'),
					'hours' 		 => $this->input->post('hours'),
					'code' 			 => $this->input->post('code'),
					'fingerprint'    => $this->input->post('fingerprint')
				);
			}
			$this->employee_model->insertEmployee($employeeDB);
			$this->session->set_flashdata('message', '¡Empleado agregado exitosamente!');
			redirect('backend');
			//echo "<pre> ".print_r($data, true) . "</pre>";
		}
		else
		{
			$user_id = modules::run('user/getSessionId');
			$data['title'] = 'Backend - Nuevo Empleado';
			$data['contenido_principal'] = $this->load->view('add-employees', $data, true);
			$this->load->view('back/template', $data); 
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
		return $employeeData;
	}

	public function deleteEmployee($slug)
	{
		$this->employee_model->deleteEmployeeViaSlug($slug);
	}

	public function updateEmployeeView($slug)
	{
		$user_id = modules::run('user/getSessionId');
		$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
		$data['employeeData'] = $this->getEmployeeDataViaSlug($slug);
		$data['contenido_principal'] = $this->load->view('update-employees', $data, true);
		$this->load->view('back/template', $data);
	}

	public function updateEmployee($slug)
	{
		$this->employee_model->updateEmployeeViaSlug($slug);
	}
}