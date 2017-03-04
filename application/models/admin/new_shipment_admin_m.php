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
	
	public function get_cid_byState($cri)
	{
		$this->db->select('user_id,customer_id');
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
	
	public function get_all_export_type()
	{
		$cri = array('type_of_export_is_enabled'=>1);
		$q = $this->db->get_where('shipping_04_type_of_export', $cri);
		return $q->result();
    }
	
	public function get_user_info($cri)
	{
		$this->db->select('*');
		$this->db->from('system_user_01_tbl_users u');
		$this->db->join('location_03_tbl_city_district c', 'u.customer_city_id = c.city_id'); //todo->sarath: split user & customer tbl
		$this->db->where($cri);
		$q = $this->db->get();
		return $q->row_array();
    }
	
	public function get_federal_tax_type()
	{
		$cri = array('federal_tax_type_is_deleted'=>0);
		$q = $this->db->get_where('payment_01_tbl_federal_tax_type', $cri);
		return $q->result();
    }
	
	public function get_available_awb()
	{
		$cri = array(
			'awb_number_is_available' => 1,
			'awb_number_is_enabled' => 1,
			'awb_number_is_deleted'=>0
		);
		$this->db->select('awb_number');
		$this->db->from('shipping_02_tbl_awb_number');
		$this->db->where($cri);
		$this->db->limit(1);
		$q = $this->db->get();
		return $q->row_array()['awb_number'];
    }
}