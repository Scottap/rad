<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {
	//Constructor de la clase
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}


	function verifySession()
	{
		$session = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		return $this->user_model->verifySession($session);	
	}


	public function login()
	{
		//echo "<pre>".print_r($_POST, true)."</pre>";

		if(!empty($_POST))
		{
			//REGLAS
			$this->form_validation->set_rules('username','Usuario','required|trim');
			$this->form_validation->set_rules('password','Contraseña','required|callback_verifySession');
			
			//MENSAJES
			$this->form_validation->set_message('required','%s es requerido.');
			$this->form_validation->set_message('verifySession','Usuario/Contraseña inválido.');

			//MENSAJES BONITOS
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');
			
			if($this->form_validation->run($this))
			{
				$data['title'] = 'Backend - Lol';
				$this->load->view('backend/home');

				$cookieData = array
				(
					'user_id' => $userData->id
				);
				$this->session->set_userdata($cookieData);
			}
		}
		else
		{
			redirect('backend/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$data['title'] = 'Backend - Iniciar Sesión';
		$this->load->view('backend/login', $data);
	}
	//Fin Constructor de clase

	public function show($name)
	{
		echo $name;
	}
}

/* End of file user.php */
/* Location: ./application/modules/user.php */