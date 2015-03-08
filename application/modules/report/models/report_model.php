<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function insertAction($data)
	{
		$this->db->insert('report', $data);
	}

	/*function getDailyReports()
	{
		$this->db->get
	}*/

	function getReportsViaEmployeeId($employee_id)
	{
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->join('report', 'report.employee_id = employee.id');

		$query = $this->db->get('report');
		return $query; 	
	}
}