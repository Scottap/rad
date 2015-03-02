<?php 

class User_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}

	function verifySession($data)
	{
		$query = $this->db->get_where('user',$data);
		return $query->num_rows() != 0;
	}

	//ESTA FUNCION DEVUELVE LOS DATOS DE UN USUARIO SEGUN SU USERNAME
	function getUserData($username)
	{
		$query = $this->db->get_where('user', array('username' => $username));
		return $query->row();
	}

	//OBTENGO LOS DATOS DEL USUARIO POR EL ID
	function getUserDataById($user_id)
	{
		$query = $this->db->get_where('user', array('id' => $user_id));
		return $query->row();
	}

	function insertUser($userData)
	{
		$this->db->insert('user', $userData);
	}

	function getUserDataViaId($user_id)
	{
		$data = array(
			'id' => $user_id
		);
		$query = $this->db->get_where('user', $data);
		return $query->row();
	}

	function getAllUsersButMe($user_id)
	{
		$query = $this->db->where('id !=', $user_id);
		$query = $this->db->get('user');
		return $query->result();
	}

	function getUserDataViaSlug($slug)
	{
		$query = $this->db->get_where('user', array('slug'=>$slug));
		return $query->row();
	}

	function deleteUserViaSlug($slug)
	{
		$this->db->delete('user', array('slug'=>$slug));
	}

	function updateUser($user_id, $data)
	{
		$this->db->where('id', $user_id);
		$this->db->update('user', $data);
	}

	/*
	function existingUsername($username)
	{
		$query = $this->db->get_where('user', array('username' => $username));
		return $query->num_rows() != 0;
	}


	

	function getUserDataViaUsername($username)
	{
		$query = $this->db->get_where('user', array('username' => $username));
		return $query->num_rows();
	}

	function getUserData($user_id)
	{
		$this->db->get_where('user', array('id' => $user_id));
		return $query->num_rows();
	}

	

	function unexistantName()
	{
		$this->db->get_where('user', array('name' => $name));
		return $query->num_rows() == 0;
	}

	function getAllUsers()
	{
		$this->db->insert('insert');
		return $query->result();
	}


	function existingSlug()
	{
		$query = $this->db->get_where('user', array('slug'=>$slug));
		return $query->num_rows() != 0;
	}


	function duplicatedName($user_id, $name)
	{
		$this->db->where('name', $name);
		$this->db->where('id !=', $user_id);
		$query = $this->db->get('user');
		return $query->num_rows() == 0;
	}

	function duplicatedUsername($user_id, $name)
	{
		$this->db->where('username', $username);
		$this->db->where('id !=', $user_id);
		$query = $this->db->get('user');
		return $query->num_rows() == 0;
	}

	
	function heyItsMe($user_id, $slug)
	{
		$query = $this->db->get_where('user', array('id'=>$user_id, 'slug'=>$slug));
		return $query->num_rows() != 0;
	}

	
	*/
}

/* End of file user_model.php */
/* Location: ./application/modules/user/models/user_model.php */