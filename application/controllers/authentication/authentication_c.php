<?php

/**
 * Created by PhpStorm.
 * User: sarathlun
 * Date: 2/1/17
 * Time: 9:33 PM
 */
class Authentication_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('authentication/authentication_m');
	}
	
	public function login_form()
	{
		$this->load->view('authentication/form_login_v');
	}
	
	public function validate_login()
	{
		$this->form_validation->set_rules('email_login','','required|valid_email');
		$this->form_validation->set_rules('password_login','','required|min_length[1]');
		if ($this->form_validation->run()==true){
			return true;
		}else{
			return false;
		}
	}
	
	public function verify_login()
	{
		if ($this->validate_login()==true) {
			//todo->sarath: need encryption on password
			$email = $this->input->post('email_login');
			$password = $this->input->post('password_login');
			$cri = array(
				'user_email' => $email,
				'user_password' => $password
			);
			// 1. check user exist
			if ($this->authentication_m->check_user_exist($email) == true) {
				// 2. check login is correct
				if ($this->authentication_m->check_password_correct($cri) != false) {
					//login correct
					$user = $this->authentication_m->check_password_correct($cri);
					// set session with encrypted data
					$user_data = array(
						'uid' => $this->encryption->encrypt($user['user_id'])
					);
					$this->session->set_userdata($user_data);
					
					//route to each sub system by group
					switch ($user['user_gid']) {
						case 1:
							redirect('admin/dashboard_admin_c');
							break;
						//todo->sarath: more cases come here to complete all system levels!
						default:
							return $msg_body = 'You Don\'t Have Permission To Login.';
							break;
					}
				} else {
					//incorrect password
					$msg_body = 'Your password is not correct.<br>Please verify password and try again.';
				}
			} else {
				//user not exist
				$msg_body = 'Your email address doesn\'t exist for login.<br>Please verify your email address and try again.';
			}
		} else {
			//validate fail
			$msg_body = 'Both email and password are required for login!';
		}
		
		$msg = $this->my_library->generate_alert('danger','Login Fail !',$msg_body);
		$this->session->set_flashdata('msg', $msg);
		redirect('authentication/authentication_c/login_form');
	}
	
	public function logout()
	{
		$data = array('uid');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('authentication/authentication_c/login_form','refresh');
	}
}