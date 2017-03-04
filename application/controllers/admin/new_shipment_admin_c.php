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
	
	public function ajax_get_states_byCountry()
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
	
	public function ajax_get_service_byRoute()
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
		foreach ($services as $row) {
			if ($row->service_route_origin_state == $from_state && $row->service_route_consignee_state == $to_state && $row->service_router_is_denied == 1) {
				// this route has been denied
				$service .= '';
			} else {
				// all other service is allow
				$service .= "<option value='" . $row->service_id . "'>" . $row->service_name . "</option>";
			}
		}
		$data = array(
			'service' => $service
		);
		echo json_encode($data);
	}
	
	public function ajax_get_email_city_byState()
	{
		$state = $this->input->post('state');
		// get receiver email for drop list
		$cri1 = array(
			'customer_state_id' => $state,
			'customer_is_deleted' => 0
		);
		$cids = $this->new_shipment_admin_m->get_cid_byState($cri1);
		//prepare output for sender email drop list
		$cid = '<option value="">Select Customer ID</option>';
		foreach ($cids as $row) {
			$cid .= "<option value='" . $this->encryption->encrypt($row->user_id) . "'>" . $row->customer_id . "</option>";
		}
		$data = array(
			'cid' => $cid,
		);
		echo json_encode($data);
	}
	
	public function ajax_get_user_info()
	{
		$uid = $this->encryption->decrypt($this->input->post('uid'));
		$cri1 = array('user_id' => $uid);
		$u_info = $this->new_shipment_admin_m->get_user_info($cri1);
		print_r($u_info);
		exit;
		$data = array(
			'first_name' => $u_info['user_first_name'],
			'last_name' => $u_info['user_last_name'],
			'company_name' => $u_info['customer_company_name'],
			'city' => $city,
			'zip_post_code' => $u_info['customer_zip_post_code'],
			'address' => $u_info['customer_address'],
			'email' => $u_info['user_email'],
			'phone_number' => $u_info['customer_phone_number'],
			'federal_tax_type' => $ftt,
			'federal_tax_number' => $u_info['customer_federal_tax_number'],
			'ie_rg' => $u_info['customer_ie_rg'],
			'vat_gst' => $u_info['customer_vat_gst']
		);
		echo json_encode($data);
	}
	
	public function form_add_domestic_shipment()
	{
		$data['countries'] = $this->new_shipment_admin_m->get_all_country();
		$data['product_types'] = $this->new_shipment_admin_m->get_all_product_type();
		$data['export_types'] = $this->new_shipment_admin_m->get_all_export_type();
		$data['tax_types'] = $this->new_shipment_admin_m->get_federal_tax_type();
		//page level css/js
		$data['page_level_css'] = base_url('/resources/pages/admin/css/domestic_shipment_add_admin.css');
		$data['page_level_js'] = base_url('/resources/pages/admin/js/domestic_shipment_add_admin.js');
		//load view
		$data['page_header'] = "Domestic Shipment";
		$data['page_header_small'] = "book a domestic shipment for customer...";
		$data['main_menu'] = $this->main_menu;
		$data['sub_menu'] = 'Add Domestic';
		$data['page'] = 'admin/domestic_shipment_add_admin_v';
		$this->load->view('admin/index_admin', $data);
	}
	
	public function add_domestic_shipment()
	{
		$data = $this->input->post();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		
		//get AWB Number
		$awb = $this->new_shipment_admin_m->get_available_awb();
		//get sender id
		if ($this->input->post('search_domestic_sender') && $this->input->post('search_domestic_receiver')){
			//get id from view
			
		}else{
			//return msg
		}
		print_r($awb);
		exit;
		//prepare data for shipment
		$shipment = array(
			'shipment_awb_number'=>$awb,
			'shipment_sender_id'=>$sender_id,
			'shipment_product_id'=>$product_id,
			'shipment_service_id'=>$this->input->post('available_service'),
			'shipment_receiver_id'=>$receiver_id,
			'shipment_payment_id'=>$payment_id,
			'shipment_status_id'=>1,
			'shipment_type_of_export_id' => $this->input->post('shipment_type_of_export_id'),
			'shipment_available_pickup_time' => $this->input->post('shipment_available_pickup_time'),
			'shipment_description' => $this->input->post('shipment_description'),
			
		);
	}
}