<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
	}

	public function newEmployeeView()
	{
		$user_id = modules::run('user/getSessionId');
		$data['departament'] = $this->getAllDepartments();
		$data['employeeData'] = $this->getEmployeeDataFormat($employee_id);
		$data['title'] = 'Backend - Nuevo Empleado';
		$data['contenido_principal'] = $this->load->view('add-employee', $data, true);
		$this->load->view('back/template', $data); 
	}

	public function newEmployee()
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
				$dataForDB = array(
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
			$this->employee_model->insertEmployee($dataForDB);
			$this->session->set_flashdata('message', '¡Empleado agregado exitosamente!');
			redirect('backend');
		}
		else
		{
			$user_id = modules::run('user/getSessionId');
			$data['employeeData'] = $this->getEmployeeDataFormat($id);
			$data['title'] = 'Backend - Nuevo Empleado';
			$data['contenido_principal'] = $this->load->view('add-employee', $data, true);
			$this->load->view('back/template', $data); 
		}
	}

	public function getEmployeeDataFormat($employee_id)
	{
		$data = $this->employee_model->getEmployeeDataViaId($employee_id); 
		//echo "<pre> ".print_r($data, true) . "</pre>";
		//echo $this->db->last_query();
		$employeeData = array(
			'id' => $data->id, 
			'name' => $data->name,
			'birthday' => $data->birthday,
			'cedula' => $data->cedula,
			'slug' => $data->slug,
			'departament_id' => $data->departament_id,
			'hours' => $data->hours,
			'code' => $data->code,
			'fingerprint' => $data->fingerprint,
			'create_at' => $data->create_at,
			'update_at' => $data->update_at
		);
	return $employeeData;
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
		$data['employeeData'] = $this->getEmployeeDataFormat($employee_id);
		$data['title'] = 'Backend - Lista de Empleados';
		$data['all_employees'] = $this->getAllEmployees();
		$data['contenido_principal'] = $this->load->view('list-employees', $data, true);
		$this->load->view('back/template', $data);
	}

	public function getAllEmployees()
	{
		$employees = $this->user_model->getAllEmployees();
		$allemployees = objectSQL_to_array($employees);
	}
}