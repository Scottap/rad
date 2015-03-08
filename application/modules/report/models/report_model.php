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
}