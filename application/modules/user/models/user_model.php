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

	function getUserDataViaId($user_id)
	{
		$this->db->get_where('user', array('id' => $user_id));
		return $query->num_rows();
	}

	function unexistantName()
	{
		$this->db->get_where('user', array('name' => $name));
		return $query->num_rows() == 0;
	}

	function insertUser()
	{
		$this->db->insert('user', $data);
	}

	function getAllUsers()
	{
		$this->db->insert('insert');
		return $query->result();
	}

	function getAllUsersButMe($user_id)
	{
		$this->db->where('id !=', $user_id);
		$this->db->where('id !=' 1);
		$query = $this->db->get('user');
		return $query->result();
	}

	function existingSlug()
	{
		$query = $this->db->get_where('user', array('slug'=>$slug));
		return $query->num_rows() != 0;
	}

	function getUserDataViaSlug()
	{
		$query = $this->db->get_where('user', array('slug'=>$slug));
		return $query->row();
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

	function updateUser($user_id, $data)
	{
		$this->db->where('id', $user_id);
		$this->db->update('user', $data);
	}

	function heyItsMe($user_id, $slug)
	{
		$query = $this->db->get_where('user', array('id'=>$user_id, 'slug'=>$slug));
		return $query->num_rows() != 0;
	}

	function deleteUserViaSlug()
	{
		$this->db->delete('user', array('slug'=>$slug));
	}
	*/
}

/* End of file user_model.php */
/* Location: ./application/modules/user/models/user_model.php */