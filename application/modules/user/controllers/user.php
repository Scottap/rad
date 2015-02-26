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

	public function getUserDataById($user_id)
	{
		return $this->user_model->getUserDataById($user_id);
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
			
			//SI LAS VALIDACIONES SON CORRECTAS
			if($this->form_validation->run($this))
			{
				$username = $this->input->post('username');

				$userdata = $this->user_model->getUserData($username);

				$cookieData = array
				(
					'user_id' => $userdata->id
				);

				$this->session->set_userdata($cookieData);

				redirect('backend');
			}
			else // SI LAS VALIDACIONES NO SON CORRECTAS
			{
				redirect('backend');
			}
		}
		else
		{
			redirect('backend');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect('backend');
	}
	//Fin Constructor de clase

	public function show($name)
	{
		echo $name;
	}
}

/* End of file user.php */
/* Location: ./application/modules/user.php */