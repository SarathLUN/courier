<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_district_admin_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all_country()
	{
		$cri = array('is_deleted_country' => 0);
		$q = $this->db->get_where('location_01_tbl_country', $cri);
		return $q->result();
	}
	
	public function get_state_byCountry($cri)
	{
		$q = $this->db->get_where('location_02_tbl_state_province', $cri);
		return $q->result();
	}
	
	public function insert_city_district($city)
	{
		$this->db->insert('location_03_tbl_city_district', $city);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function get_all_city()
	{
		$cri = array('is_deleted_city' => 0);
		$this->db->select('*');
		$this->db->from('location_03_tbl_city_district c');
		$this->db->join('location_02_tbl_state_province s', 'c.city_state_id = s.state_id');
		$this->db->where($cri);
		$q = $this->db->get();
		return $q->result();
	}
	
	public function get_city($cri)
	{
		$this->db->select('*');
		$this->db->from('location_03_tbl_city_district c');
		$this->db->join('location_02_tbl_state_province s', 'c.city_state_id = s.state_id');
		$this->db->where($cri);
		$q = $this->db->get();
		return $q->row_array();
	}
	
	public function update_city_district($city, $cri)
	{
		$this->db->update('location_03_tbl_city_district', $city, $cri);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
}