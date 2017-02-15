<?php
/**
 * Created by PhpStorm.
 * User: sarathlun
 * Date: 1/29/17
 * Time: 9:20 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Awb_management_admin_c extends CI_Controller
{
	public $uid;
	public $main_menu = 'AWB Management';
	
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('admin/awb_management_admin_m');
		// check session and store decrypted user id
		$this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
		//check if session not exist redirect to login
		$gid = $this->my_library->get_gid($this->uid);
		if ($gid != 1) {
			redirect('authentication/authentication_c/login_form');
		}
		
	}
	
	/**==========================
	 * Sub-menu: AWB Number
	 * =========================**/
	public function list_awb_number()
	{
		$data['awb_numbers'] = $this->awb_management_admin_m->get_all_awb_number();
		//load view
		$data['page_header'] = 'AWB Number';
		$data['page_header_small'] = 'list AWB Number...';
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'AWB Number';
		$data['page'] = 'admin/list_awb_number_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	/**==========================
	 * Sub-menu: AWB Pool Number
	 * =========================**/
	public function list_awb_pool_number()
	{
		$data['awb_pools'] = $this->awb_management_admin_m->get_all_awb_pool();
		//load view
		$data['page_header'] = 'AWB Pool';
		$data['page_header_small'] = 'list, add AWB Number by Pool...';
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'AWB Pool';
		$data['page'] = 'admin/list_awb_pool_number_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function validate_awb_pool()
	{
		$this->form_validation->set_rules('awb_pool_name', '', 'required');
		$this->form_validation->set_rules('awb_pool_prefix', '', 'required');
		$this->form_validation->set_rules('awb_pool_start_number', '', 'required|is_natural');
		$this->form_validation->set_rules('awb_pool_end_number', '', 'required|is_natural');
		if ($this->form_validation->run() == true) {
			return true;
		} else {
			return false;
		}
	}
	
	
	public function add_awb_pool()
	{
		if ($this->validate_awb_pool()==true) {// check exist prefix
			$cri = array(
				'awb_pool_prefix' => $this->input->post('awb_pool_prefix'),
				'awb_pool_is_deleted' => 0
			);
			$exist_pre = $this->my_library->check_exist('shipping_01_tbl_awb_number_pool', $cri);
			if ($exist_pre == true) {
				// prefix already existed
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Prefix already existed!</br>Please use another prefix or delete the un-use one.');
			} else {
				$pool = $this->input->post();
				//insert pool and return inserted_id
				$pool_id = $this->awb_management_admin_m->insert_awb_pool($pool);
				$msg = $this->insert_awb($pool_id, $pool['awb_pool_prefix'], $pool['awb_pool_start_number'], $pool['awb_pool_end_number']);
			}
		} else {
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data validation fail!');
		}
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/awb_management_admin_c/list_awb_pool_number');
	}
	
	public function insert_awb($pool_id, $prefix, $start_num, $end_num)
	{
		if ($pool_id != false) {
			$len = strlen($end_num);
			$format = '%0' . $len . 'd';
			//generate awb with returned of pool id
			for ($i = $start_num; $i <= $end_num; $i++) {
				$new_i = sprintf($format, $i);
				$awb[$i] = array(
					'awb_number' => $prefix . $new_i,
					'awb_number_pool_id' => $pool_id
				);
			}
			//insert_batch of awb
			$awb_inserted = $this->awb_management_admin_m->insert_awb_number($awb);
			if ($awb_inserted > 0) {
				$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL', 'Data has been 
                    added to activate ' . $awb_inserted . ' numbers!');
			} else {
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'AWB Pool unable to activate AWB Number.');
			}
		} else {
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data cannot be 
                    added!');
		}
		return $msg;
	}
	
	public function disable_awb_pool($pool_id)
	{
		// param for pool
		$cri1 = array(
			'awb_pool_id' => $pool_id
		);
		$data1 = array(
			'awb_pool_is_enabled' => 0
		);
		//param for awb
		$cri2 = array(
			'awb_number_pool_id' => $pool_id
		);
		
		$data2 = array(
			'awb_number_is_enabled' => 0
		);
		// if pool is disabled successful then disable awb
		if ($this->awb_management_admin_m->update_pool($data1, $cri1) == true) {
			
			if ($this->awb_management_admin_m->update_awb($data2, $cri2) == true) {
				$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL', 'AWB Pool has been disabled!');
				$this->session->set_flashdata('msg', $msg);
			} else {
				$data3 = array('awb_pool_is_enabled' => 0);
				$this->awb_management_admin_m->update_pool($data3, $cri1);
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data 
            processing fail, please try again.');
				$this->session->set_flashdata('msg', $msg);
			}
		} else {
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data 
            processing fail, please try again.');
			$this->session->set_flashdata('msg', $msg);
		}
		redirect('admin/awb_management_admin_c/list_awb_pool_number');
	}
	
	public function enable_awb_pool($pool_id)
	{
		// param for pool
		$cri1 = array(
			'awb_pool_id' => $pool_id
		);
		$data1 = array(
			'awb_pool_is_enabled' => 1
		);
		//param for awb
		$cri2 = array(
			'awb_number_pool_id' => $pool_id
		);
		
		$data2 = array(
			'awb_number_is_enabled' => 1
		);
		// if pool is disabled successful then disable awb
		if ($this->awb_management_admin_m->update_pool($data1, $cri1) == true) {
			if ($this->awb_management_admin_m->update_awb($data2, $cri2) == true) {
				$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL', 'AWB Pool has been enabled!');
				$this->session->set_flashdata('msg', $msg);
			} else {
				$data3 = array('awb_pool_is_enabled' => 1);
				$this->awb_management_admin_m->update_pool($data3, $cri1);
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data 
            processing fail, please try again.');
				$this->session->set_flashdata('msg', $msg);
			}
		} else {
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data 
            processing fail, please try again.');
			$this->session->set_flashdata('msg', $msg);
		}
		redirect('admin/awb_management_admin_c/list_awb_pool_number');
	}
	
	public function delete_awb_pool($pool_id)
	{
		// param for pool
		$cri1 = array(
			'awb_pool_id' => $pool_id
		);
		$data1 = array(
			'awb_pool_is_deleted' => 1
		);
		//param for awb
		$cri2 = array(
			'awb_number_pool_id' => $pool_id
		);
		
		$data2 = array(
			'awb_number_is_enabled' => 0
		);
		// if pool is disabled successful then disable awb
		if ($this->awb_management_admin_m->update_pool($data1, $cri1) == true) {
			if ($this->awb_management_admin_m->update_awb($data2, $cri2) == true) {
				$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL', 'AWB Pool has been deleted!');
				$this->session->set_flashdata('msg', $msg);
			} else {
				$data3 = array('awb_pool_is_enabled' => 1);
				$this->awb_management_admin_m->update_pool($data3, $cri1);
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data 
            processing fail, please try again.');
				$this->session->set_flashdata('msg', $msg);
			}
		} else {
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data 
            processing fail, please try again.');
			$this->session->set_flashdata('msg', $msg);
		}
		redirect('admin/awb_management_admin_c/list_awb_pool_number');
	}
	
	
}