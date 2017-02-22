<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_district_admin_c extends CI_Controller
{
	public $uid;
	public $main_menu = 'City/District';
	
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('admin/city_district_admin_m');
		// check session and store decrypted user id
		$this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
		//check if session not exist redirect to login
		$gid = $this->my_library->get_gid($this->uid);
		if ($gid != 1) {
			redirect('authentication/authentication_c/login_form');
		}
	}
	
	public function form_add_city_district()
	{
		$log_user = $this->uid;
		$log_action = 'add city or district';
		$log_msg = 'load form add city or district';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//query countries for select
		$data['countries'] = $this->city_district_admin_m->get_all_country();
		//load view
		$data['page_header'] = "City/District";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'Add City/District';
		$data['page_level_js'] = base_url('/resources/pages/js/admin/city_district_admin.js');
		$data['page'] = 'admin/add_city_district_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function get_states_byCountry()
	{
		//get data from post by AJAX
		$country_id = $this->input->post('country_id');
		//query data from db
		$cri = array('state_country_id' => $country_id);
		$states = $this->city_district_admin_m->get_state_byCountry($cri);
		//prepare output
		$output = '<option value="" readonly>Select State or Province</option>';
		foreach ($states as $state) {
			$output .= '<option value="' . $state->state_id . '">' . $state->state_name . '</option>';
		}
		$data = array('states' => $output); // pack data into array
		echo json_encode($data); //return data to AJAX
	}
	
	public function validate_city_district()
	{
		$this->form_validation->set_rules('city_state_id', '', 'required');
		$this->form_validation->set_rules('city_name', '', 'required');
		if ($this->form_validation->run() == true) {
			return true;
		} else {
			return false;
		}
	}
	
	public function add_city_district()
	{
		$log_user = $this->uid;
		$log_action = 'add city or district';
		if ($this->validate_city_district() == true) {
			//validate success -> check exist
			$tbl = 'location_03_tbl_city_district';
			$cri = array(
				'city_state_id' => $this->input->post('city_state_id'),
				'city_name' => $this->input->post('city_name')
			);
			if ($this->my_library->check_exist($tbl, $cri) == true) {
				// city already exist -> exit
				$log_msg = 'city already exist';
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'This City or District already existed');
			} else {
				// city not yet exist -> insert
				$city = array(
					'city_state_id' => $this->input->post('city_state_id'),
					'city_name' => $this->input->post('city_name')
				);
				if ($this->city_district_admin_m->insert_city_district($city) == true) {
					// insert success
					$log_msg = 'city or district insert successful';
					$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL !', 'City or District insert successful');
				} else {
					// insert fail
					$log_msg = 'city or district insert fail';
					$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'City or District insert successful');
				}
			}
		} else {
			//validate fail
			$log_msg = 'data validation fail';
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data validation fail');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/city_district_admin_c/form_add_city_district');
	}
	
	public function list_city_district()
	{
		$log_user = $this->uid;
		$log_action = 'list city or district';
		$log_msg = 'load list city or district';
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//query countries for select
		$data['cities'] = $this->city_district_admin_m->get_all_city();
		//load view
		$data['page_header'] = "City/District";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'List City/District';
		$data['page'] = 'admin/list_city_district_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function form_edit_city($city_id)
	{
		$log_user = $this->uid;
		$log_action = 'edit city or district';
		$log_msg = 'load form edit city or district ID:' . $city_id;
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		//query countries for select
		$data['countries'] = $this->city_district_admin_m->get_all_country();
		//generate secure code
		$code = $this->my_library->generateSecureCodeEdit();
		//update secure code
		$city = array('city_secure_code'=>$code);
		$cri = array('city_id' => $city_id);
		if ($this->city_district_admin_m->update_city_district($city,$cri)==true) {
			//get city
			$data['city'] = $this->city_district_admin_m->get_city($cri);
			//get state for selected country
			$cri2 = array('state_country_id' => $data['city']['state_country_id']);
			$data['states'] = $this->city_district_admin_m->get_state_byCountry($cri2);
		}
		//load view
		$data['page_header'] = "City/District";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'List City/District';
		$data['page_level_js'] = base_url('/resources/pages/js/admin/city_district_admin.js');
		$data['page'] = 'admin/edit_city_district_admin_v';
		$this->load->view('admin/index_admin', $data);
	} 
	
	public function update_city_district()
	{
		//decrypt id
		$city_id = $this->encryption->decrypt($this->input->post('city_id'));
		//system log
		$log_user = $this->uid;
		$log_action = 'update city or district';
		if ($this->validate_city_district() == true) {
			//validate success -> check exist
			$tbl = 'location_03_tbl_city_district';
			$cri = array(
				'city_state_id' => $this->input->post('city_state_id'),
				'city_name' => $this->input->post('city_name')
			);
			if ($this->my_library->check_exist($tbl, $cri) == true) {
				// city already exist -> exit
				$log_msg = 'city or district ID:'.$city_id.' already exist';
				$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'This City or District already existed');
			} else {
				// city not yet exist -> update
				$city = array(
					'city_state_id' => $this->input->post('city_state_id'),
					'city_name' => $this->input->post('city_name')
				);
				$cri2 = array(
					'city_id' => $city_id,
					'city_secure_code'=>$this->input->post('city_secure_code')
				);
				if ($this->city_district_admin_m->update_city_district($city, $cri2) == true) {
					// insert success
					$log_msg = 'city or district ID:' . $city_id . ' update successful';
					$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL !', 'City or District update successful');
				} else {
					// insert fail
					$log_msg = 'city or district ID:' . $city_id . ' update fail';
					$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'City or District update successful');
				}
			}
		} else {
			//validate fail -> exit
			$log_msg = 'data validation fail';
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'Data validation fail');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/city_district_admin_c/form_edit_city/' . $city_id);
	}
	
	public function delete_city($id)
	{
		$log_user = $this->uid;
		$log_action = 'delete city';
		$city = array('is_deleted_city' => 1);
		$cri = array('city_id' => $id);
		if ($this->city_district_admin_m->update_city_district($city, $cri) == true) {
			// insert success
			$log_msg = 'city or district ID:' . $id . ' delete successful';
			$msg = $this->my_library->generate_alert('success', 'SUCCESSFUL !', 'City or District deleted successful');
		} else {
			// insert fail
			$log_msg = 'city or district ID:' . $id . ' deleted fail';
			$msg = $this->my_library->generate_alert('danger', 'ERROR !', 'City or District deleted successful');
		}
		$this->my_library->do_system_logs($log_user, $log_action, $log_msg);
		$this->session->set_flashdata('msg', $msg);
		redirect('admin/city_district_admin_c/list_city_district');
	}
}