<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function getEmployeeDataViaId($employee_id)
	{
		$data = array(
			'id' => $employee_id
		);
		$query = $this->db->get_where('employee', $employee_id);
		return $query->row();
	}

	function insertEmployee($employeeData)
	{
		$this->db->insert('employee', $employeeData);
	}
	function getAllDepartments()
	{
		//$this->db->select('id', 'name');
		$query = $this->db->get('departament');
		return $query->result();
	}

	function allEmployees()
	{
		$query = $this->db->get('employee');
		return $query->result();
	}

	function getDepartamentNameViaId($id)
	{
		//$data = array('id' => $departament_id);
		$query = $this->db->get_where('departament', array('id' => $id));
		return $query->row()->name;
	}
}
