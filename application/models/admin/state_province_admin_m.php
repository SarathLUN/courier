<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_province_admin_m extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function get_all_country()
	{
		$cri = array('is_deleted_country'=>0);
		$q = $this->db->get_where('location_01_tbl_country',$cri);
		return $q->result();
	}
}