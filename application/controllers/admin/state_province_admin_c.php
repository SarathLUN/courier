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
    
    public function form_add_state_province(){
		//query countries for select
	    $data['countries'] = $this->state_province_admin_m->get_all_country();
	    //load view
	    $data['page_header']="State/Province";
	    $data['main_menu'] = $this->main_menu;
	    $data['sub_menu'] = 'Add State/Province';
	    $data['page'] = 'admin/add_state_province_admin_v';
	    $this->load->view('admin/index_admin', $data);
    }
    
}