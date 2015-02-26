<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller {

	public function __controller()
	{
		parent::__construct();
	}

	public function index()
	{
		//echo "<pre>".print_r($this->session->all_userdata(), true)."</pre>";
		if($this->session->userdata('user_id'))
		{
			$data['title'] = 'Backend - Home';
			$data['user_id'] = $this->session->userdata('user_id');
			$data['userData'] = modules::run('user/getUserDataById', $data['user_id']);
			//echo "<pre>".print_r($data, true)."</pre>";
			$this->load->view('home', $data);
		}
		else
		{
			$data['title'] = 'Backend - Login';
			$this->load->view('login', $data);
		}
	}
}