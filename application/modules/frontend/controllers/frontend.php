<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend_model');
	}

	public function index()
	{
		$data['title'] = 'RAD - Inicio';
		$data['contenido_principal'] = $this->load->view('home', $data, true);
		$this->load->view('front/template', $data);
	}

	public function simulacro()
	{
		$data['title'] = 'RAD - Simulacro';
		$data['contenido_principal'] = $this->load->view('simulacro', $data, true);
		$this->load->view('front/template', $data);
	}

	public function uploadImage()
	{
		
		$name = $_FILES['attachment']['name'][0];
		$porciones = explode(".", $name);

		$code = $porciones[0];

		$ajax_data = array(
			'mensaje'	=> 	"Codigo existe"
		);

		$employee = modules::run('employee/getEmployeeDataViaCode', $code);
		
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
		modules::run('report/insertAction',$report);
		$this->session->set_flashdata('mensaje', $ajax_data['mensaje']);

		redirect('simulacro');
	}

}
