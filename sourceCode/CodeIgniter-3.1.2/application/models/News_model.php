<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016/11/12
 * Time: 19:57
 */
class News_model extends CI_Model {
    public function get_news($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news',array('slug'=>$slug));
        return $query->row_array();
    }


}