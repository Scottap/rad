<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends MX_Controller {

	public function index()
	{
		$data['title'] = 'Inicio';
		$this->load->view('home', $data);
	}
}
