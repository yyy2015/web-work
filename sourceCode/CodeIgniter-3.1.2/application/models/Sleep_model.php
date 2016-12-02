<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/30
 * Time: 0:46
 */
class Sleep_model extends CI_Model {

    //当夜睡眠信息
    function find_night_sleep_data($username,$date){
        $this->db->where('username',$username);
        $this->db->where('date',$date);
        $query = $this->db->get('sleep_info');
        return $query->row_array();
    }

    //近一周睡眠信息
    function find_week_sleep_data($username){
        $sql = "select deep_sleep_time,loose_sleep_time,date from sleep_info where username=? order by date DESC limit 0,7";
        $query = $this->db->query($sql,array($username));
        return $query->result_array();
    }

    //总的睡眠信息
    function find_total_sleep_data($username){
        $sql ="select sum(deep_sleep_time) as total_deep,sum(loose_sleep_time) as total_loose,sum(supple_caloris) as total_supple from sleep_info 
where username=?";
        $query=$this->db->query($sql,array($username));
        return $query->row_array();
    }


    //当夜睡眠质量名次
    function get_night_rank($username,$date){
        $sql = "select count(*)+1 as rank from sleep_info s1 where s1.deep_sleep_time+0.8*s1.loose_sleep_time >
(select s2.deep_sleep_time+0.8*s2.loose_sleep_time from sleep_info s2 where username=? and date=?)
and date = ?;";
        $query=$this->db->query($sql,array($username,$date,$date));

        return $query->row_array()['rank'];
    }

    //总睡眠质量名次
    function get_total_rank($username){
        $sql = "select count(*)+1 as total_rank from (select username,sum(s1.deep_sleep_time+0.8*s1.loose_sleep_time) as real_time from sleep_info s1
group by username) t1 where t1.real_time >(select t2.real_time from 
(select username,sum(s1.deep_sleep_time+0.8*s1.loose_sleep_time) as real_time from sleep_info s1
where username=?) t2)";
        $query = $this->db->query($sql,array($username));
        return $query->row_array()['total_rank'];
    }

    //总当夜睡眠质量排行
    function get_night_ranking_table($date,$page){
        $sql = "select username,deep_sleep_time+0.8*loose_sleep_time as real_time from sleep_info
where date = ? ORDER BY real_time desc limit (?-1)*10,?*10";
        $query = $this->db->query($sql,array($date,$page,$page));

        return $query->result_array();//{username,real_time}
    }

    //总睡眠质量排行
    function get_total_ranking_table($page){
        $sql="select username,sum(deep_sleep_time+0.8*loose_sleep_time) as real_time from sleep_info group by username 
order by real_time desc limit (?-1)*10,?*10";
        $query=$this->db->query($sql,array($page,$page));
        return $query->result_array();//{username,real_time}
    }

}