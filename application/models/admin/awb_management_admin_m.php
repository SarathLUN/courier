<?php
/**
 * Created by PhpStorm.
 * User: sarathlun
 * Date: 1/26/17
 * Time: 6:16 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This is user class/model for main-menu of My Profile
 *
 */
class Awb_management_admin_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	/**===============
	 * AWB Number
	==============**/
    public function get_all_awb_number()
    {
    	$cri = array('awb_number_is_enabled'=>1);
        $this->db->select('*');
        $this->db->from('shipping_02_tbl_awb_number n');
        $this->db->join('shipping_01_tbl_awb_number_pool p','n.awb_number_pool_id= p.awb_pool_id ');
	    $this->db->where($cri);
        $q = $this->db->get();
        return $q->result();
    }
	
    /**===============
     * AWB Pool
     ==============**/
	public function get_all_awb_pool()
	{
		$cri = array('awb_pool_is_deleted'=>0);
		$q = $this->db->get_where('shipping_01_tbl_awb_number_pool',$cri);
		return $q->result();
	}
	
	public function insert_awb_pool($pool)
	{
		$this->db->insert('shipping_01_tbl_awb_number_pool',$pool);
		if ($this->db->affected_rows()>0){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	
	public function insert_awb_number($awb)
	{
		$this->db->insert_batch('shipping_02_tbl_awb_number', $awb);
		return $this->db->affected_rows();
	}
	
	public function get_awb_pool_byID($id)
	{
		$cri = array('awb_pool_id'=>$id);
		$q = $this->db->get_where('shipping_01_tbl_awb_number_pool',$cri);
		return $q->row_array();
	}
	
	public function update_pool($data, $cri)
	{
		$this->db->update('shipping_01_tbl_awb_number_pool', $data, $cri);
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
	public function update_awb($data, $cri)
	{
		$this->db->update('shipping_02_tbl_awb_number', $data, $cri);
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
	public function get_last_awb_byPool($cri)
	{
		$this->db->select('*');
		$this->db->from('shipping_02_tbl_awb_number n');
		$this->db->join('shipping_01_tbl_awb_number_pool p', 'n.awb_number_pool_id = p.awb_pool_id');
		$this->db->where($cri);
		$this->db->order_by('awb_number', 'DESC');
		$this->db->limit('1');
		$q = $this->db->get();
		return $q->row_array();
	}
	
	public function get_exist_prefix($cri)
	{
		$q = $this->db->get_where('shipping_01_tbl_awb_number_pool', $cri);
		return $q->result();
	}
	
	public function check_exist_awb($cri)
	{
		$this->db->select('*');
		$this->db->from('shipping_01_tbl_awb_number_pool');
		$this->db->or_where($cri);
		$this->db->order_by('awb_pool_end_number','DESC');
		$this->db->limit('1');
		$q = $this->db->get();
		return $q->row_array();
	}
	public function get_exist_awb($cri)
	{
		$this->db->select('*');
		$this->db->from('shipping_01_tbl_awb_number_pool');
		$this->db->where($cri);
		$this->db->order_by('awb_pool_end_number','DESC');
		$this->db->limit('1');
		$q = $this->db->get();
		return $q->row_array();
	}
}