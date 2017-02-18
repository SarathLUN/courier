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
	
	public function insert_state_province($data)
	{
		$this->db->insert('location_02_tbl_state_province', $data);
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
	public function get_all_state()
	{
		$cri = array('is_deleted_state'=>0);
		$this->db->select('*');
		$this->db->from('location_02_tbl_state_province s');
		$this->db->join('location_01_tbl_country c', 's.state_country_id = c.country_id');
		$this->db->where($cri);
		$this->db->order_by('country_id');
		$this->db->order_by('state_id');
		$q = $this->db->get();
		return $q->result();
	}
	public function get_state_byID($cri)
	{
		$this->db->select('*');
		$this->db->from('location_02_tbl_state_province s');
		$this->db->join('location_01_tbl_country c', 's.state_country_id = c.country_id');
		$this->db->where($cri);
		$this->db->order_by('country_id');
		$this->db->order_by('state_id');
		$q = $this->db->get();
		return $q->row_array();
	}
	
	public function update_state_province($data, $cri)
	{
		$this->db->update('location_02_tbl_state_province', $data, $cri);
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
}