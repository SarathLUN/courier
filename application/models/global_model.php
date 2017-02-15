<?php

/**
 * Created by PhpStorm.
 * User: sarathlun
 * Date: 12/22/16
 * Time: 8:26 PM
 */
class Global_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**check exist record**/
	public function get_exist($tbl, $cri)
	{
		$q = $this->db->get_where($tbl, $cri);
		if ($q->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	/**get group id**/
	public function get_group_id($cri)
	{
		$q = $this->db->get_where('system_user_01_tbl_users', $cri);
		return $q->row_array();
	}
	
	/**insert system logs**/
	public function insert_system_logs($logs)
	{
		$this->db->insert('system_log_01_tbl_logs', $logs);
	}
	
}