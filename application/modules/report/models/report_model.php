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
		$sql = "select * from employee where cedula = ? join report on report.employee_id = employee.id where date >= ? and date <= ?;";
		$query = $this->db->query($sql,array($report['ced'],$report['fecha_inicio'],$report['fecha_final']));
		return $query->result();
	}


}