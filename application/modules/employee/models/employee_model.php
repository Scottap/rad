<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function insertEmployee($employeeData)
	{
		$this->db->insert('employee', $employeeData);
	}
	
	function getAllDepartments()
	{
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

	function getEmployeeDataViaSlug($slug)
	{
		$query = $this->db->get_where('employee', array('slug' => $slug));
		return $query->row();
	}

	function deleteEmployeeViaSlug($slug)
	{
		$this->db->delete('employee', array('slug' => $slug)); 
	}

	function updateEmployeeViaSlug($slug)
	{
		$data = array(
			'name' => $name,
			'birthday' => $birthday,
			'cedula' => $cedula
		);
		$this->db->update('employee', array('slug' => $slug));
	}

	function getEmployeeDataViaId($employee_id)
	{
		$query = $this->db->get_where('employee', array('id' => $employee_id));
		return $query->row();
	}

	function updateEmployee($employee_id, $data)
	{
		$this->db->where('id', $employee_id);
		$this->db->update('employee', $data);
	}

	function getEmployeeDataViaCode($employee_code)
	{
		$query = $this->db->get_where('employee', array('code' => $employee_code));
		return $query->row();
	}

	function getEmployeeDataViaCedula($employee_cedula)
	{
		$query = $this->db->get_where('employee', array('cedula' => $employee_cedula));
		return $query->row();
	}

	function existCode($code)
	{
		$query = $this->db->get_where('employee', array('code' => $code));
		return $query->num_rows() != 0;
	}

	function updateAction($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('employee',  $data);
	}
	
	function getEmployeesByDate($date)
	{
		$sql = 'select * from employee left join report on report.employee_id = employee.id where date = ?';
		$query = $this->db->query($sql,array($date));
		return $query->result();
	}

	function getNameById($employee_id)
	{
		$query = $this->db->get_where('employee', array('id' => $employee_id));
		return $query->row()->name;
	}

	function getCedulaById($employee_id)
	{
		$query = $this->db->get_where('employee', array('id' => $employee_id));
		return $query->row()->cedula;
	}

	function getDepartamentIdById($employee_id)
	{
		$query = $this->db->get_where('employee', array('id' => $employee_id));
		return $query->row()->departament_id;
	}

	function getDepartamentbyId($departament_id)
	{
		$query = $this->db->get_where('departament', array('id' => $departament_id));
		return $query->row()->name;
	}

	function existCedula($cedula)
	{
		$query = $this->db->get_where('employee', array('cedula' => $cedula));
		return $query->num_rows() == 0;
	}

	function getEmployeeIdByCedula($cedula)
	{
		$query = $this->db->get_where('employee', array('cedula' => $cedula));
		return $query->row()->id;
	}
}
