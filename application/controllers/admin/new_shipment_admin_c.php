<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_shipment_admin_c extends CI_Controller
{
	public $uid;
	public $main_menu = 'New Shipment';
	
	public function __construct()
	{
		parent::__construct();
		//load model
	    $this->load->model('admin/new_shipment_admin_m');
		// check session and store decrypted user id
		$this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
		//check if session not exist redirect to login
		if ($this->uid != 1) {
			redirect('authentication/authentication_c/login_form');
		}
	}
	
	public function form_add_domestic_shipment()
	{
		$data['countries'] = $this->new_shipment_admin_m->get_all_country();
		$data['product_types'] = $this->new_shipment_admin_m->get_all_product_type();
		//page level css/js
		$data['page_level_css'] = base_url('/resources/pages/admin/css/domestic_shipment_add_admin.css');
		$data['page_level_js']=base_url('/resources/pages/admin/js/domestic_shipment_add_admin.js');
		//load view
		$data['page_header'] = "Domestic Shipment";
		$data['page_header_small'] = "book a domestic shipment for customer...";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'Add Domestic';
		$data['page'] = 'admin/domestic_shipment_add_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function get_states_byCountry()
	{
		$country = $this->input->post('domestic_country'); //get data from AJAX
		$cri1 = array(
			'state_country_id' => $country,
			'is_deleted_state' => 0
		); //create criteria
		$states = $this->new_shipment_admin_m->get_state_byCountry($cri1); //query data
		//prepare output
		$origin_state = "<option value=''>Select Origin State</option>";
		foreach ($states as $state) {
			$origin_state .= "<option value='" . $state->state_id . "'>" . $state->state_name . "</option>";
		}
		$destination_state = "<option value=''>Select Destination State</option>";
		foreach ($states as $state) {
			$destination_state .= "<option value='" . $state->state_id . "'>" . $state->state_name . "</option>";
		}
		$data = array(
			'origin_state' => $origin_state,
			'dest_state' => $destination_state
		);
		echo json_encode($data);
	}
	
	public function get_service_byRoute()
	{
		$from_state = $this->input->post('from_state');
		$to_state = $this->input->post('to_state');
		// get all domestic service
		$cri1 = array(
			'service_is_enabled' => 1,
			'service_type_id' => 1, // 1 = domestic service
		);
		$services = $this->new_shipment_admin_m->get_service_byRoute($cri1);
		//prepare output for service drop list
		$service = "<option value=''>Select Available Service for this Route</option>";
		foreach ($services as $row){
			if ($row->service_route_origin_state == $from_state && $row->service_route_consignee_state == $to_state && $row->service_router_is_denied == 1){
				// this route has been denied
				$service .= '';
			}else{
				// all other service is allow
				$service .= "<option value='" . $row->service_id . "'>" . $row->service_name . "</option>";
			}
		}
		
		$data = array(
			'service' => $service
		);
		echo json_encode($data);
	}
	
	public function get_sender_email_byState()
	{
		$from_state = $this->input->post('from_state');
		// get sender email for drop list
		$cri1 = array('customer_state_id'=>$from_state);
		$senders = $this->new_shipment_admin_m->get_email_byState($cri1);
		//prepare output for sender email drop list
		$sender = '<option value="">select Customer\'s E-mail Address</option>';
		foreach ($senders as $row){
			$sender .= "<option value='" . $row->user_id . "'>" . $row->user_email . "</option>";
		}
		//get city
		$cri2 = array('city_state_id'=>$from_state);
		$cities = $this->new_shipment_admin_m->get_city_byState($cri2);
		//prepare output for sender city drop list
		$city = "<option value=''>Select City</option>";
		foreach ($cities as $row){
			$city .= "<option value='".$row->city_id."'>".$row->city_name."</option>";
		}
		$data = array(
			'sender_mail'=>$sender,
			'sender_city'=>$city
		);
		echo json_encode($data);
	}
	public function get_receiver_email_byState()
	{
		$to_state = $this->input->post('to_state');
		// get receiver email for drop list
		$cri1 = array('customer_state_id'=>$to_state);
		$receivers = $this->new_shipment_admin_m->get_email_byState($cri1);
		//prepare output for sender email drop list
		$receiver = '<option value="">select Customer\'s E-mail Address</option>';
		foreach ($receivers as $row){
			$receiver .= "<option value='" . $row->user_id . "'>" . $row->user_email . "</option>";
		}
		//get city
		$cri2 = array('city_state_id'=>$to_state);
		$cities = $this->new_shipment_admin_m->get_city_byState($cri2);
		//prepare output for sender city drop list
		$city = "<option value=''>Select City</option>";
		foreach ($cities as $row){
			$city .= "<option value='".$row->city_id."'>".$row->city_name."</option>";
		}
		$data = array(
			'receiver_mail'=>$receiver,
			'receiver_city'=>$city
		);
		echo json_encode($data);
	}
}