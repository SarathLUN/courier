<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_route_admin_c extends CI_Controller 
{
	public $uid;
	public $main_menu = 'Product Route';
	
	public function __construct()
    {
        parent::__construct();
	    //load model
//	    $this->load->model('admin/state_province_admin_m');
	    // check session and store decrypted user id
	    $this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
	    //check if session not exist redirect to login
	    if ($this->uid != 1) {
		    redirect('authentication/authentication_c/login_form');
	    }
    }
    
    public function form_add_product_route(){
	    //load view
	    $data['page_header'] = "Product Route";
	    $data['page_header_small'] = "add a route to deny...";
	    $data['main_menu'] = $this->main_menu;
	    $data['sub_menu'] = 'Add Product Route';
	    $data['page'] = 'admin/product_route_add_admin_v';
	    $this->load->view('admin/index_admin', $data);
    }
    
}