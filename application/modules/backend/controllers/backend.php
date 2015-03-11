<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller {

	public function __controller()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('user_id'))
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserDataViaId', $user_id);
			$day = date('Y-m-d');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['userData'] = modules::run('user/getUserDataViaId', $data['user_id']);
			$data['report'] = modules::run('report/getDailyReport',$day);
			$data['title'] = 'Backend - Home';
			$data['contenido_principal'] = $this->load->view('home', $data, true);
			$this->load->view('back/template', $data);
		}
		else
		{
			$data['title'] = 'Backend - Login';
			$this->load->view('login', $data);
		}
	}
}