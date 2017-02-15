<?php
/**
 * Created by PhpStorm.
 * User: sarathlun
 * Date: 12/22/16
 * Time: 8:26 PM
 */
class Global_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_exist($tbl, $cri)
    {
        $q = $this->db->get_where($tbl, $cri);
        if ($q->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }

    public function insert_tracking_record($data)
    {
        $this->db->insert('shipping_06_tracking',$data);
        if ($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}