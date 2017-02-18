<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This is the main class of this project
 *
 */
class Main_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//check if session exist route it to sub system
		$uid = $this->encryption->decrypt(@$this->session->userdata('uid'));
		$gid = $this->my_library->get_gid($uid);
		if ($gid){
			redirect('authentication/authentication_c/route_to_sub_system/' . $gid);
		}else{
			redirect('authentication/authentication_c/login_form');
		}
	}
}
