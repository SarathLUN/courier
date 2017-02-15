<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication_m extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function check_user_exist($email)
	{
		$cri = array('user_email'=>$email,'user_is_enabled'=>1);
		$q = $this->db->get_where('system_user_01_tbl_users',$cri);
		if ($q->num_rows()==1){
			return true;
		}else{
			return false;
		}
    }
	
	public function check_password_correct($cri)
	{
		$q = $this->db->get_where('system_user_01_tbl_users',$cri);
		if ($q->num_rows()==1){
			return $q->row_array();
		}else{
			return false;
		}
    }
	
}