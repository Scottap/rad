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

}
