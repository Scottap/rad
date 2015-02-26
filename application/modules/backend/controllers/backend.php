<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller {

	public function __controller()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Hola mundo!";
		die();
		if($this->session->userdata('user_id'))
		{
			$data['title'] = 'Backend - Home';
			$this->load->view('backend/home', $data);
		}
		else
		{
			$data['title'] = 'Backend - Login';
			$this->load->view('backend/login', $data);
		}
	}
}