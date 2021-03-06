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

	function getReportsViaEmployeeId($employee_id)
	{
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->join('report', 'report.employee_id = employee.id');

		$query = $this->db->get('report');
		return $query; 	
	}

	function getDailyReport($day)
	{
		$query = $this->db->get_where('report',array('date' => $day));
		return $query->result();
	}
	
	function getMonthlyReport($month)
	{
		$sentence = "SELECT * FROM report where month(report.date) = $month";
		$query = $this->db->query($sentence);
		return $query->result();
	}

	function getEmployeeReport($report)
	{
		$this->db->where('employee_id =', $report['employee_id']);
		$this->db->where('date >=', $report['fecha_inicio']); 
		$this->db->where('date <=', $report['fecha_final']); 
		$query = $this->db->get('report');
		return $query->result();
	}

}