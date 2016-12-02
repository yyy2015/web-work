<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/28
 * Time: 20:39
 */

class Sport_model extends CI_Model {
    //日运动信息
    function find_day_sport_data($username,$date){

        $this->db->where('username',$username);
        $this->db->where('date',$date);
        $query = $this->db->get('sport_info');

       return $query->row_array();
    }
    //周运动信息
    function find_week_sport_data($username){
        $sql = "select date,day_step from sport_info where username =? ORDER BY date desc Limit 0,7;";
        $query = $this->db->query($sql,array($username));
//        $query = $this->db->query("select * from sport_info where username ='yyy' ORDER BY date desc Limit 0,7;");
        return $query->result_array();//按时间从当前日期向前数7日排序
    }
    //总运动信息
    function find_total_sport_data($username){
        $sql = "select sum(walk_distance)+sum(run_distance) as total_distance,sum(walk_distance) as total_walk,
sum(run_distance) as total_run, sum(day_sport_time) as total_time, sum(day_caloris_burn) as total_caloris
from sport_info where username=?;";
        $query = $this->db->query($sql,array($username));
        return $query->row_array();
    }
    //总日步数名次
    function get_day_rank($username,$date){
        $sql = "select count(*)+1 as rank from sport_info s1 where day_step > (select day_step from sport_info s2 where s2.username=:name and s2.date=:date) 
and date=:date;";
        $query=$this->db->query($sql,array('name'=>$username,'data'=>$date));

        return $query->row_array()['rank'];
    }
    //总步数名次
    function get_total_rank($username){
        $sql = "select count(*)+1 as total_rank from (select username,sum(day_step) as total_step from sport_info s1 group by username) as t1
where t1.total_step>(select t2.total_step 
from (select username,sum(day_step) as total_step from sport_info s1 group by username) as t2 
where username=?)";
        $query=$this->db->query($sql,array($username));

        return $query->row_array()['total_rank'];
    }
    //总日步数排名表
    function get_total_day_rank_table($date,$page){
        $sql = "select username,walk_distance + run_distance as distance from sport_info where date = ? 
order by distance desc limit (?-1)*10,?*10;";
        $query=$this->db->query($sql,array($date,$page,$page));
        return $query->result_array();//{username,distance}
    }
    //总步数排名表
    function get_total_rank_table($page){
        $sql = "select username,sum(walk_distance+run_distance) as distance from sport_info group by username
order by distance desc limit (?-1)*10,?*10;";
        $query=$this->db->query($sql,array($page,$page));
        return $query->result_array();//{username,distance}
    }



}