<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	function getEmployeeDataViaId($employee_id)
	{
		$data = array(
			'id' => $employee_id
		);
		$query = $this->db->get_where('employee', $data);
		return $query->row();
	}

	function insertEmployee($employeeData)
	{
		$this->db->insert('employee', $employeeData);
	}
	function getAllDepartments()
	{
		$query = $this->db->where('departament');
		$query = $this->db->get('departament_id');
		return $query->result();
	}

	function getAllEmployees()
	{
		$query = $this->db->get('employee');
		return $query->result();
	}
}
