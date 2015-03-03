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

	public function getSessionId(){

		return $this->session->userdata('user_id');
	} 

	public function getUserDataViaId($user_id)
	{
		return $this->user_model->getUserDataViaId($user_id);
	}

	public function heyItsMe($slug)
	{
		$user_id = $this->session->userdata('user_id');
		$userDataProfile = modules::run('user/getUserDataViaSlug', $slug);
		return $user_id == $userDataProfile['id'];
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

	public function newUser() 
	{
		$user_id = $this->getSessionId();
		$data['userData'] = $this->getUserDataFormat($user_id);
		$data['title'] = 'Backend - Nuevo Usuario';
		$data['contenido_principal'] = $this->load->view('add-user', $data, true);
		$this->load->view('back/template', $data); 
	}

	public function addUser()
	{
		if(!empty($_POST))
		{
			$this->form_validation->set_rules('name', 'Nombre', 'required');
			$this->form_validation->set_rules('username', 'Nombre de Usuario', 'required|trim|callback_existingUsername');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');
			$this->form_validation->set_rules('repassword', 'Repita la contraseña', 'required|matches[password]');

			$this->form_validation->set_message('required', '%s es requerido');
			$this->form_validation->set_message('existingUsername', 'Este nombre de usuario está en uso. Ingrese un nombre de usuario disponible.');
			
			if($this->form_validation->run($this) == TRUE)
			{
				$image = $this->upload->data('image');

				$dataForDB = array(
					'name' 		=> $this->input->post('name'),
					'username' 	=> $this->input->post('username'),
					'slug'		=> modules::run('operations/createSlug', $this->input->post('name')),
					'password' 	=> $this->input->post('password')
				);
				$this->user_model->insertUser($dataForDB);
				$this->session->set_flashdata('message', '¡Usuario agregado exitosamente!');
				redirect('backend');
			}
			else
			{
				$user_id = $this->getSessionId();
				$data['userData'] = $this->getUserDataFormat($id);
				$data['title'] = 'Backend - Nuevo Usuario';
				$data['contenido_principal'] = $this->load->view('add-user', $data, true);
				$this->load->view('back/template', $data); 
			}
		}
		else
		{
			redirect('backend');
		}
	}

	public function allUsers()
	{
		$user_id = $this->getSessionId();
		$data['userData'] = $this->getUserDataFormat($user_id);
		$data['title'] = 'Backend - Lista de Usuarios';
		$data['all_users'] = $this->getAllUsersButMe();
		$data['contenido_principal'] = $this->load->view('list-user', $data, true);
		$this->load->view('back/template', $data);
		//echo "<pre> ".print_r($data, true) . "</pre>";
	}

	public function getAllUsersButMe()
	{
		$user_id = $this->session->userdata('user_id');
		$users = $this->user_model->getAllUsersButMe($user_id);
		$allUsers = objectSQL_to_array($users);

		return $allUsers;
	}

	public function deleteUserView($slug)
	{
		$user_id = $this->getSessionId();
		$data['userData'] = $this->getUserDataFormat($user_id);
		$data['title'] = 'Backend - Eliminar Usuario';
		$data['user'] = $this->getUserDataFormatViaSlug($slug);
		$data['contenido_principal'] = $this->load->view('delete-user', $data, true);
		$this->load->view('back/template', $data);
	}

	public function deleteUser($slug)
	{
		if($this->heyItsMe($slug))
		{
			$this->user_model->deleteUserViaSlug($slug);
			$this->session->set_flashdata('message', 'Te has eliminado exitosamente de la base de datos.');
			$this->logout();
		}
		else
		{
			$this->user_model->deleteUserViaSlug($slug);
			$this->session->set_flashdata('message', 'Has eliminado exitosamente al usuario.');
		}
		redirect('user/allUsers');
	}

	public function updateUserView($slug)
	{
		$user_id = $this->getSessionId();
		$data['userData'] = $this->getUserDataFormat($user_id);
		$data['title'] = 'Backend - Actualizar Usuario';
		$data['user'] = $this->getUserDataFormatViaSlug($slug);
		$data['contenido_principal'] = $this->load->view('update-user', $data, true);
		$this->load->view('back/template', $data);
	}

	public function updateUser($slug)
	{
		if(!empty($_POST))
		{
			$user_id = $this->session->userdata('user_id');
			$userData = $this->getUserDataViaId($user_id);
			$this->form_validation->set_rules('username', 'Nombre de Usuario', 'trim|callback_existingUsername');
			
			if( !empty($_POST['password']) || !empty($_POST['newPass']) || !empty($_POST['newPass_confirmation']) )
			{
				$this->form_validation->set_rules('password', 'Contraseña', 'required|trim|xss_clean|callback_validChange');
				$this->form_validation->set_rules('newPass', 'Nueva Contraseña', 'required|trim|xss_clean');
				$this->form_validation->set_rules('newPass_confirmation', 'Confirme el cambio de contraseña', 'required|trim|xss_clean|matches[newPass]');
			}


			$this->form_validation->set_message('required', '%s es requerido');
			$this->form_validation->set_message('validChange', 'La contraseña que quiere cambiar es incorrecta');
			$this->form_validation->set_message('matches', '%s no coincide con la contraseña con la que quiere cambiar');

			if($this->form_validation->run($this))
			{
				$data['username'] = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				
				if($userData->password == $password && $this->input->post('newPass') == $this->input->post('newPass_confirmation'))
				{
					$data['password'] = sha1($this->input->post('newPass_confirmation'));
				}
				echo "<pre> ".print_r($data, true) . "</pre>";
				$this->user_model->updateUser($user_id, $data);
				$this->session->set_flashdata('message', '¡Actualización de datos exitosa!');
				redirect('user/allUsers');
			}
		}
		else
		{
			$this->session->set_flashdata('username', form_error('username'));
			$this->session->set_flashdata('password', form_error('password'));
			$this->session->set_flashdata('newPass', form_error('newPass'));
			$this->session->set_flashdata('newPass_confirmation', form_error('newPass_confirmation'));
			redirect('user/profile', 'refresh');
		}


	}

	public function getUserDataFormatViaSlug($slug)
	{
		$userData = $this->user_model->getUserDataViaSlug($slug);
		$userData = SQL_to_array($userData);
		return $userData;
	}

	public function getUserDataFormat($id)
	{
		$data = $this->user_model->getUserDataViaId($id); 
		//echo "<pre> ".print_r($data, true) . "</pre>";
		//echo $this->db->last_query();
		$userData = array(
			'id' => $data->id, 
			'username' => $data->username,
			'name' => $data->name,
			'slug' => $data->slug,
			'image' => $data->image,
			'create_at' => $data->create_at,
			'update_at' => $data->update_at
		);
	return $userData;
	}

}


/* End of file user.php */
/* Location: ./application/modules/user.php */