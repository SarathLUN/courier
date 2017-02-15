<?php
/**
 * Created by PhpStorm.
 * User: sarathlun
 * Date: 12/22/16
 * Time: 6:59 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_library
{
	
	function __construct()
	{
		$this->ci =& get_instance();
		//load model
		$this->ci->load->model('global_model');
	}
	
	/**
	 * generate secure editor code and past to 2 directions
	 * 1. model
	 * 2. view
	 * @objective: when user submit edited form we will update only if record id && secured code is matched
	 * @return string
	 **/
	public function generateSecureCodeEdit()
	{
		$now = now();
		$time = mdate('%y%m%d%H%i%s', $now);
		return $this->my_encrypt($time);
	}
	
	/**
	 * encrypte provided data with none decrypt able method
	 * @data string
	 * @return string
	 **/
	public function my_encrypt($data)
	{
		$hash = hash('whirlpool', $data);
		$sha1 = sha1($hash);
		$md5 = md5($sha1);
		return $md5;
	}
	
	/**
	 * get group id of provided user id
	 * @uid: user id
	 * @return group id as INT
	 **/
	public function get_gid($uid)
	{
		// query group id
		$cri = array('user_id' => $uid);
		$gid = $this->ci->global_model->get_group_id($cri);
		return $gid['user_gid'];
	}
	
	/**
	 * check exist record in provided table
	 * @tbl table
	 * @cri criteria
	 * @return
	 **/
	public function check_exist($tbl, $cri)
	{
		if ($this->ci->global_model->get_exist($tbl, $cri)==true){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * Generate alert box
	 * @type : string ('success','warning','info','danger')
	 * @title: string
	 * @body: string
	 * @return : string
	 **/
	public function generate_alert($type,$title, $body)
	{
		// check type to generate icon
		switch ($type){
			case 'success':
				$icon = '<i class="icon fa fa-check"></i>';
				break;
			case 'warning':
				$icon = '<i class="icon fa fa-warning"></i>';
				break;
			case 'info':
				$icon = '<i class="icon fa fa-info"></i>';
				break;
			case 'danger':
				$icon = '<i class="icon fa fa-ban"></i>';
				break;
		}
		
		$msg = '<div class="row"><div class="col-sm-4 col-sm-offset-8">
					<div class="col-sm-12 alert alert-'.$type.' alert-dismissible text-center">
		                <div class="col-sm-2">
		                    '.$icon.'
		                </div>
		                <div class="col-sm-10">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
		                        <i class="fa fa-times" aria-hidden="true"></i>
		                    </button>
		                    <h4>
		                        ' . $title . '
		                    </h4>
		                    <span>
		                        ' . $body . '
		                    </span>
	                    </div>
	                </div>
              	</div></div>';
		return $msg;
	}
}