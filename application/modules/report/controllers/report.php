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

	function getDailyReport($day)
	{
		$query = $this->report_model->getDailyReport($day);
		$report = objectSQL_to_array($query);
		foreach ($report as $key => $value) {
			if($report[$key]['action_id'] == 1)
				$report[$key]['action_name'] = "Entrada";
			else
				$report[$key]['action_name'] = "Salida";
			$report[$key]['employee_name'] = modules::run('employee/getNameById', $report[$key]['employee_id']);
			$report[$key]['cedula'] = modules::run('employee/getCedulaById', $report[$key]['employee_id']);
			$report[$key]['departament'] = modules::run('employee/getDepartamentById', $report[$key]['employee_id']);
		}
		return $report;
	}

	public function getMonthlyReport($month)
	{
		$query = $this->report_model->getMonthlyReport($month);
		$report = objectSQL_to_array($query);
		foreach ($report as $key => $value) 
		{
			$report[$key]['departament'] = modules::run('employee/getDepartamentById', $report[$key]['employee_id']);
			$report[$key]['name'] = modules::run('employee/getNameById', $report[$key]['employee_id']);
			$report[$key]['cedula'] = modules::run('employee/getCedulaById', $report[$key]['employee_id']);
		}
		return $report;
	}

	function getMonth($month)
	{
		switch ($month) {
		    case 1:
		        $mes = 'Enero';
		        break;
		    case 2:
		        $mes = 'Febrero';
		        break;
		    case 3:
		        $mes = 'Marzo';
		        break;
		    case 4:
		        $mes = 'Abril';
		        break;
		    case 5:
		        $mes = 'Mayo';
		        break;
		    case 6:
		        $mes = 'Junio';
		        break;
		    case 7:
		        $mes = 'Julio';
		        break;
		    case 8:
		        $mes = 'Agosto';
		        break;
		    case 9:
		        $mes = 'Septiembre';
		        break;
		   	case 10:
		        $mes = 'Octubre';
		        break;
		    case 11:
		        $mes = 'Noviembre';
		        break;
		    case 12:
		        $mes = 'Diciembre';
		        break;
       	}
       	return $mes;
	}

	function getMonthNumber($month)
	{
		switch ($month) {
		    case 'Enero':
		        $mes = 1;
		        return $mes;
		        break;
		    case 'Febrero':
		        $mes = 2;
		        return $mes;
		        break;
		    case 'Marzo':
		        $mes = 3;
		        return $mes;
		        break;
		    case 'Abril':
		        $mes = 4;
		        return $mes;
		        break;
		    case 'Mayo':
		        $mes = 5;
		        return $mes;
		        break;
		    case 'Junio':
		        $mes = 6;
		        return $mes;
		        break;
		    case 'Julio':
		        $mes = 7;
		        return $mes;
		        break;
		    case 'Agosto':
		        $mes = 8;
		        return $mes;
		        break;
		    case 'Septiembre':
		        $mes = 9;
		        return $mes;
		        break;
		   	case 'Octubre':
		        $mes = 10;
		        return $mes;
		        break;
		    case 'Noviembre':
		        $mes = 11;
		        return $mes;
		        break;
		    case 'Diciembre':
		        $mes = 12;
		        return $mes;
		        break;
       	}
     
	}

	function existCedula()
	{
		return !modules::run('employee/existCedula');
	}

	public function getEmployeeReport($report)
	{
		$query = $this->report_model->getEmployeeReport($report);
		$report = objectSQL_to_array($query);
		foreach ($report as $key => $value) 
		{
			$report[$key]['departament'] = modules::run('employee/getDepartamentById', $report[$key]['employee_id']);
			$report[$key]['name'] = modules::run('employee/getNameById', $report[$key]['employee_id']);
			$report[$key]['cedula'] = modules::run('employee/getCedulaById', $report[$key]['employee_id']);
		}
		return $report;
	}

	public function getAttendaceReport()
	{
		if($this->input->post('typeReport')=='daily')
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
			$day = date('Y-m-d');
			$data['report'] = $this->getDailyReport($day);
			$data['title'] = 'Backend - Reportes';
			$data['contenido_principal'] = $this->load->view('daily-report', $data, true);
			$this->load->view('back/template', $data);
		}else{

			if ($this->input->post('typeReport')=='monthly')
			{
				$this->form_validation->set_rules('month','Mes','required');
				$this->form_validation->set_message('required','El campo $ es requerido');

				if($this->form_validation->run($this))
				{
					$user_id = modules::run('user/getSessionId');
					$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
					$month = $this->input->post('month');
					$data['report'] = $this->getMonthlyReport($month);
					$data['title'] = 'Backend - Reportes';
					$data['month_name'] = $this->getMonth($month);
					$data['month'] = $month;
					//die_pre($data);
					$data['contenido_principal'] = $this->load->view('monthly-report', $data, true);
					$this->load->view('back/template', $data);
				}
				else
				{
					$user_id = modules::run('user/getSessionId');
					$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
					$data['title'] = 'Backend - Reportes';
					//die_pre($data);
					$data['contenido_principal'] = $this->load->view('monthly-report', $data, true);
					$this->load->view('back/template', $data);
				}	
			}
			else
			{
				$this->form_validation->set_rules('desde','fecha inicial','required');
				$this->form_validation->set_rules('hasta','fecha final','required');
				$this->form_validation->set_rules('cedula','cedula','required|callback_existCedula');

				$this->form_validation->set_message('required','El campo %s es requerido');
				$this->form_validation->set_message('existCedula','La cedula %s no existe en la base de datos');

				if($this->form_validation->run($this))
				{
					$user_id = modules::run('user/getSessionId');
					$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
					$report['fecha_inicio'] = $this->input->post('desde');
					$report['fecha_final'] = $this->input->post('hasta');
					$report['employee_id'] = modules::run('employee/getEmployeeIdByCedula', $this->input->post('cedula'));
					$data['fecha_inicio'] = $this->input->post('desde');
					$data['fecha_final'] = $this->input->post('hasta');
					$data['employee_id'] = modules::run('employee/getEmployeeIdByCedula', $this->input->post('cedula'));
					$data['report'] = $this->getEmployeeReport($report);
					$data['title'] = 'Backend - Reportes';
					$data['contenido_principal'] = $this->load->view('monthly-report', $data, true);
					$this->load->view('back/template', $data);
				}
				else
				{
					$user_id = modules::run('user/getSessionId');
					$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
					$data['title'] = 'Backend - Reportes';
					//die_pre($data);
					$data['contenido_principal'] = $this->load->view('monthly-report', $data, true);
					$this->load->view('back/template', $data);
				}	
			}
		}
	}

	public function downloadReportDaily()
	{
		$day = date('Y-m-d');
		$data['report'] = $this->getDailyReport($day);
		$data['contenido_principal'] = $this->load->view('download-daily', $data, true);
		$this->dompdf->set_base_path(realpath(base_url().'assets/back/css'));
		$this->dompdf->load_html($data['contenido_principal']);
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
	}

	public function downloadReportMonthly()
	{
		$m=$this->uri->segment(3);
		$data['month'] = $this->getMonthNumber($m);
		$data['month_name'] = $this->getMonth($m);
		$data['report'] = $this->getMonthlyReport($m);
		$data['contenido_principal'] = $this->load->view('download-monthly', $data, true);
		$this->dompdf->set_base_path(realpath(base_url().'assets/back/css'));
		$this->dompdf->load_html($data['contenido_principal']);
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
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

	public function downloadReportEmployee($fecha_inicio, $fecha_final, $employee_id)
	{
		$report = array(
			'fecha_inicio' => $fecha_inicio,
			'fecha_final' => $fecha_final,
			'employee_id' => $employee_id
		);
		$data['fecha_final'] = $fecha_final;
		$data['fecha_inicio'] = $fecha_inicio;
		$data['report'] = $this->getEmployeeReport($report);
		$data['contenido_principal'] = $this->load->view('download-employee', $data, true);
		$this->dompdf->set_base_path(realpath(base_url().'assets/back/css'));
		$this->dompdf->load_html($data['contenido_principal']);
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
	}
}