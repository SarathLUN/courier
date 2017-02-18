<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_province_admin_c extends CI_Controller
{
	public $uid;
	public $main_menu = 'State/Province';
	
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('admin/state_province_admin_m');
		// check session and store decrypted user id
		$this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
		//check if session not exist redirect to login
		$gid = $this->my_library->get_gid($this->uid);
		if ($gid != 1) {
			redirect('authentication/authentication_c/login_form');
		}
	}
	
	public function form_add_state_province()
	{
		$log_user = $this->uid;
		$log_action = 'add state or province';
		$log_msg = 'load form add state or province';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//query countries for select
		$data['countries'] = $this->state_province_admin_m->get_all_country();
		//load view
		$data['page_header'] = "State/Province";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'Add State/Province';
		$data['page'] = 'admin/add_state_province_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	private function validate_state_province()
	{
		$this->form_validation->set_rules('state_name', '', 'required');
		$this->form_validation->set_rules('state_country_id', '', 'required|is_natural_no_zero');
		if ($this->form_validation->run() == true) {
			return true;
		} else {
			return false;
		}
	}
	
	public function add_state_province()
	{
		$log_user = $this->uid;
		$log_action = 'add state or province';
		if ($this->validate_state_province() == true) {
			//validate success
			$cri = array(
				'state_name' => $this->input->post('state_name'),
				'state_country_id' => $this->input->post('state_country_id'),
				'is_deleted_state' => 0
			);
			$tbl = 'location_02_tbl_state_province';
			if ($this->my_library->check_exist($tbl, $cri) == true) {
				$log_msg = 'state or province already existed';
				// state already exist
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'This State or Province already existed!');
			} else {
				// state not exist can process to add
				$data = array(
					'state_name' => $this->input->post('state_name'),
					'state_country_id' => $this->input->post('state_country_id')
				);
				if ($this->state_province_admin_m->insert_state_province($data) == true) {
					$log_msg = 'state or province insert successful';
					// state insert success
					$msg = $this->my_library->generate_alert('success', 'SUCCESS !', 'State or Province insert successful!');
				} else {
					$log_msg = 'data fail to insert';
					// state insert fail
					$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data insert fail');
				}
			}
		} else {
			$log_msg = 'data validation fail';
			//validate fail
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data validation fail');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/state_province_admin_c/form_add_state_province');
	}
	
	public function list_state_province()
	{
		$log_user = $this->uid;
		$log_action = 'list state or province';
		$log_msg = 'load list state or province';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//query countries for select
		$data['states'] = $this->state_province_admin_m->get_all_state();
		//load view
		$data['page_header'] = "State/Province";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'List State/Province';
		$data['page'] = 'admin/list_state_province_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function form_edit_state($id)
	{
		$log_user = $this->uid;
		$log_action = 'edit state or province';
		$log_msg = 'load form edit state';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//query countries for select
		$cri = array('state_id' => $id);
		$data['state'] = $this->state_province_admin_m->get_state_byID($cri);
		$data['countries'] = $this->state_province_admin_m->get_all_country();
		//load view
		$data['page_header'] = "State/Province";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'List State/Province';
		$data['page'] = 'admin/edit_state_province_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function update_state_province()
	{
		$log_user = $this->uid;
		$log_action = 'edit state or province';
		$state_id = $this->encryption->decrypt($this->input->post('state_id'));
		if ($this->validate_state_province() == true) {
			//validate success
			$cri = array(
				'state_name' => $this->input->post('state_name'),
				'state_country_id' => $this->input->post('state_country_id'),
				'is_deleted_state' => 0
			);
			$tbl = 'location_02_tbl_state_province';
			if ($this->my_library->check_exist($tbl, $cri) == true) {
				$log_msg = 'state or province already existed';
				// state already exist
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'This State or Province already existed!');
			} else {
				// state not exist can process to add
				$data = array(
					'state_name' => $this->input->post('state_name'),
					'state_country_id' => $this->input->post('state_country_id')
				);
				$cri1 = array(
					'state_id' => $state_id
				);
				if ($this->state_province_admin_m->update_state_province($data, $cri1) == true) {
					$log_msg = 'state or province update successful';
					// state insert success
					$msg = $this->my_library->generate_alert('success', 'SUCCESS !', 'State or Province update successful!');
				} else {
					$log_msg = 'data fail to update';
					// state insert fail
					$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data update fail');
				}
			}
		} else {
			$log_msg = 'data validation fail';
			//validate fail
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data validation fail');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/state_province_admin_c/form_edit_state/' . $state_id);
	}
	
	public function delete_state($id)
	{
		$log_user = $this->uid;
		$log_action = 'delete state or province';
		$data = array('is_deleted_state'=>1);
		$cri = array('state_id'=>$id);
		if ($this->state_province_admin_m->update_state_province($data, $cri) == true) {
			$log_msg = 'state or province deleted successful';
			// state insert success
			$msg = $this->my_library->generate_alert('success', 'SUCCESS !', 'State or Province deleted successful!');
		} else {
			$log_msg = 'data fail to delete';
			// state insert fail
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'State or Province delete fail');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/state_province_admin_c/list_state_province');
	}
	
}