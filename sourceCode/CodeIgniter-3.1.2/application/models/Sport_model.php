<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/28
 * Time: 20:39
 */

class Sport_model extends CI_Model {
    function find_sport_data($username,$date){
        $this->db->where('username',$username);
        $this->db->where('date',$date);
        $query = $this->db->get('sport_info');

       return $query->row();
    }

    function get_friend_day_rank($username,$date){
        $query=$this->db->query("select count(*)+1 as rank from sport_info s1
where day_step > (select day_step from sport_info s2 where s2.username='yyy' and s2.date='2016/11/28') 
and date='2016/11/28'");

        return $query->row()['rank'];
    }

    function get_friend_total_rank($username){

    }

    function get_total_day_rank($username,$date){

    }

    function get_total_rank($username){

    }

}