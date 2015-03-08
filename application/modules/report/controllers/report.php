<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('report_model');
	}

	public function reportsView()
	{
		if($this->session->userdata('user_id')){
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
			$data['title'] = 'Backend - Reportes';
			$data['contenido_principal'] = $this->load->view('report', $data, true);
			$this->load->view('back/template', $data);
		}
		else
		{
			redirect('backend');
		}
	}
	
	public function getAttendaceReport()
	{
		die_pre($_POST);
	}

	public function existCode()
	{
		$code = $this->input->post('code');
		return modules::run('employee/existCode', $code);
	}

	public function insertAction($data)
	{
		$this->report_model->insertAction($data);
	}

	public function ajax_marcar()
	{
		
		$this->form_validation->set_rules('code', 'Codigo', 'required|callback_existCode');

		$this->form_validation->set_message('required','%s es requerido.');
		$this->form_validation->set_message('existCode','%s invalido.');


		if($this->form_validation->run($this))
		{
			$ajax_data = array(
				'mensaje'	=> 	"Codigo existe"
			);
		
			$employee = modules::run('employee/getEmployeeDataViaCode', $this->input->post('code'));

			if($employee['action_id'] == 1)
			{
				$data = array(
					'action_id' => '2'
				);

				$ajax_data['mensaje'] = "El empleado ".$employee['name']." ha salido.";

			}
			else
			{
				$data = array(
					'action_id' => '1'
				);

				$ajax_data['mensaje'] = "El empleado ".$employee['name']." ha entrado.";
			}

			modules::run('employee/updateAction', $employee['id'], $data);

			$report = array(
				'action_id' => $data['action_id'],
				'employee_id' => $employee['id'],
				'create_at' => date('Y-m-d'),
				'date' => date('Y-m-d'),
				'hour' => date('h:m:i')
			);

			$this->insertAction($report);

			echo json_encode($ajax_data);
		}
		else
		{
			$ajax_data = array(
				'error'	=> 	"Codigo invalido"
			);
			
			echo json_encode($ajax_data);
		}
		
	}

	public function getReportsViaEmployeeId()
	{
		
	}
}