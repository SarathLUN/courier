<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_admin_c extends CI_Controller
{
	public $main_menu = 'Country';
	public $uid;
	
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('admin/country_admin_m');
		// check session and store decrypted user id
		$this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
		//check if session not exist redirect to login
		$gid = $this->my_library->get_gid($this->uid);
		if ($gid != 1) {
			redirect('authentication/authentication_c/login_form');
		}
	}
	
	public function form_add_country()
	{
		$log_user = $this->uid;
		$log_action = 'add country';
		$log_msg = 'load form add country';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//load view
		$data['page_header'] = 'Country';
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'Add Country';
		$data['page'] = 'admin/add_country_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function validate_country()
	{
		$this->form_validation->set_rules('country_name', '', 'required');
		$this->form_validation->set_rules('country_iso2_code', '', 'exact_length[2]');
		$this->form_validation->set_rules('country_iso3_code', '', 'exact_length[3]');
		if ($this->form_validation->run() == true) {
			return true;
		} else {
			return false;
		}
	}
	
	public function add_country()
	{
		$log_user = $this->uid;
		$log_action = 'add country';
		if ($this->validate_country() == true) {
			//check is country already existed
			$cri1 = array('country_name' => $this->input->post('country_name'));
			$exist_country = $this->my_library->check_exist('location_01_tbl_country', $cri1);
			if ($exist_country == true) {
				$log_msg = 'country already existed';
				// country already existed
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'This country already existed');
			} else {
				//insert data
				$data = $this->input->post();
				if ($this->country_admin_m->insert_country($data) == true) {
					$log_msg = 'country add successful';
					//data inserted
					$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL !', 'Country has been added successful.');
				} else {
					$log_msg = 'country add fail';
					//data error to insert
					$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data insert error!');
				}
			}
		} else {
			$log_msg = 'data validation fail';
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data Validation Fail');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/country_admin_c/form_add_country');
	}
	
	public function list_country()
	{
		$log_user = $this->uid;
		$log_action = 'list country';
		$log_msg = 'list country';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$data['counties'] = $this->country_admin_m->get_country();
		//load view
		$data['page_header'] = 'Country List';
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'List Country';
		$data['page'] = 'admin/list_country_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function form_edit_country($id)
	{
		$log_user=$this->uid;
		$log_action='edit country';
		
		$editCode = $this->my_library->generateSecureCodeEdit();
		$cri = array('country_id' => $id);
		$code = array('country_secure_code' => $editCode);
		$update_code = $this->country_admin_m->update_country($code, $cri);
		if ($update_code == true) {
			$log_msg='generate secure code and load form edit country';
			//get country for view
			$data['country'] = $this->country_admin_m->get_country_byID($cri);
		}
		$this->my_library->do_system_logs($log_user,$log_action,$log_msg);
		//load view
		$data['page_header'] = 'Edit Country';
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'List Country';
		$data['page'] = 'admin/edit_country_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function update_country()
	{
		$log_user=$this->uid;
		$log_action='update country';
		$data = array(
			'country_name' => $this->input->post('country_name'),
			'country_iso2_code' => $this->input->post('country_iso2_code'),
			'country_iso3_code' => $this->input->post('country_iso3_code'),
			'country_tax' => $this->input->post('country_tax'),
			'country_currency' => $this->input->post('country_currency'),
			'country_calling_code' => $this->input->post('country_calling_code')
		);
		$cri1 = array(
			'country_id' => $this->input->post('country_id'),
			'country_secure_code' => $this->input->post('country_secure_code')
		);
		$update = $this->country_admin_m->update_country($data, $cri1);
		if ($update == true) {
			$log_msg='country update successful';
			//data updated
			$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL !', 'Country has been updated successful.');
		} else {
			$log_msg='country update fail';
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'No data updated');
		}
		$this->my_library->do_system_logs($log_user,$log_action,$log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/country_admin_c/edit_country/' . $this->input->post('country_id'));
	}
	
	public function delete_country($id)
	{
		$log_user=$this->uid;
		$log_action='delete country';
		$data = array('is_deleted_country' => 1);
		$cri = array('country_id' => $id);
		if ($this->country_admin_m->update_country($data, $cri) == true) {
			$log_msg='country delete successful';
			$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL !', 'Country has been deleted successful.');
		} else {
			$log_msg='country delete fail';
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data processing error!');
		}
		$this->my_library->do_system_logs($log_user, $log_action,$log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/country_admin_c/list_country');
	}
}