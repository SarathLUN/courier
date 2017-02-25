<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_shipment_admin_m extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
    
    public function get_all_country(){
		$cri = array('is_deleted_country'=>0);
	    $q = $this->db->get_where('location_01_tbl_country',$cri);
	    return $q->result();
    }
	
	public function get_all_product_type()
	{
		$cri = array('product_type_is_deleted'=>0);
		$q = $this->db->get_where('product_02_tbl_product_type', $cri);
		return $q->result();
    }
	
	public function get_state_byCountry($cri)
	{
		$q = $this->db->get_where('location_02_tbl_state_province', $cri);
		return $q->result();
    }
	
	public function get_service_byRoute($cri)
	{
		$this->db->select('*');
		$this->db->from('service_01_tbl_service s');
		$this->db->join('service_03_tbl_service_route r','s.service_id = r.service_route_service_id','left');
		$this->db->where($cri);
		$q = $this->db->get();
		return $q->result();
    }
	
	public function get_email_byState($cri)
	{
		$this->db->select('user_id,user_email');
		$this->db->from('system_user_01_tbl_users');
		$this->db->where($cri);
		$q = $this->db->get();
		return $q->result();
    }
	
	public function get_city_byState($cri)
	{
		$this->db->select('*');
		$this->db->from('location_03_tbl_city_district');
		$this->db->where($cri);
		$q = $this->db->get();
		return $q->result();
    }
}