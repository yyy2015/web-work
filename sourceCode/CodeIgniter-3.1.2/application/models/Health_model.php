<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/30
 * Time: 11:35
 */

class Health_model extends CI_Model {

    public function find_health_info($username,$date){
        $sql = "select * from health_info where username=? and date=?";
        $query = $this->db->query($sql,array($username,$date));
        return $query->row_array();
    }

    public function get_weight_height($username){
        $sql = "select weight,height,date from health_info where username=? order by date DESC limit 0,6";
        $query = $this->db->query($sql,array($username));
        return $query->result_array();
    }

}