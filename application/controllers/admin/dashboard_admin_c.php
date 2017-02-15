<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin_c extends CI_Controller
{
	public $uid;
	public function __construct()
    {
        parent::__construct();
        // load model
	    
        // check session and store decrypted user id
	    $this->uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
	    //check if session not exist redirect to login
	    $gid = $this->my_library->get_gid($this->uid);
	    if ($gid != 1){
	    	redirect('authentication/authentication_c/login_form');
	    }
    }
	
	public function index()
	{
		$data['page']='admin/default_box';
		//load view
		$data['sub_menu'] = 'Dashboard';
		$data['page_header'] = 'Dashboard Admin';
		$this->load->view('admin/index_admin', $data);
    }
}