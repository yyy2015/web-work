<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/30
 * Time: 18:36
 */

class Activity_model extends CI_Model {

    function get_total_activity($date,$page){
        $sql = "select * from activity where start>? limit (?-1)*10,?*10";
        $query = $this->db->query($sql,array($date,$page,$page));
        return $query->result_array();
    }

    function get_joined_num($aid){
        $sql = "select count(*) as join_num from activity_join where aid = ?";
        $query = $this->db->query($sql,array($aid));
        return $query->row_array()['join_num'];

    }

    function get_activity_info($aid){
        $sql = "select * from activity where aid = ?";
        $query = $this->db->query($sql,array($aid));
        return $query->row_array();
    }

    function get_joined_user($aid){
        $sql = "select username from activity_join where aid = ?";
        $query = $this->db->query($sql,array($aid));
        return $query->result_array();
    }

    function join($username,$aid){
        $new_join = array(
            'username' => $username,
            'aid' => $aid
        );
        $insert = $this->db->insert('activity_join',$new_join);
        return $insert;
    }

    function quit($username,$aid){
        $quit = array(
            'username' => $username,
            'aid' => $aid
        );
        $delete = $this->db->delete('activity_join',$quit);
        return $delete;
    }

    function get_release_activity($username,$date){
        $sql = "select * from activity where releaser_name=? and end>=?";
        $query = $this->db->query($sql,array($username,$date));
        return $query->result_array();
    }

    //获得username对应的用户参加的活动id数组
    function get_join_activity_aid($username){
        $sql = "select aid from activity_join where username = ?";
        $query = $this->db->query($sql,array($username));
        $aid_array = array();
        foreach($query->result_array() as $act){
            $aid_array[]=$act['aid'];
        }
        return $aid_array;
    }



}