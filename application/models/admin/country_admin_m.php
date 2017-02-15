<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_admin_m extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function insert_country($data)
	{
		$this->db->insert('location_01_tbl_country', $data);
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
    }
	
	public function get_country()
	{
		$cri = array('is_deleted_country'=>0);
		$q = $this->db->get_where('location_01_tbl_country',$cri);
		return $q->result();
    }
	
	public function get_country_byID($cri)
	{
		$q = $this->db->get_where('location_01_tbl_country', $cri);
		return $q->row_array();
    }
	
	public function update_country($data, $cri)
	{
		$this->db->update('location_01_tbl_country',$data,$cri);
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
    }
    
}