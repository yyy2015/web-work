<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/29
 * Time: 20:07
 */

class User_model extends CI_Model {

    public function get_user_info($username){
        $sql = "select * from user where username=?";
        $query = $this->db->query($sql,array($username));
        return $query->row_array();
    }

    public function get_login_user(){
        $user_info['image_url'] = base_url('public/image/header.jpg');
        $user_info['username'] = $this->session->userdata('username');

        $sql = "select * from user where username = ?";
        $query = $this->db->query($sql,array($user_info['username']));
        $result = $query->row_array();
        $user_info['image_url'] = base_url($result['header_url']);

        return $user_info;
    }

    //获取今日的日期：Y-m-d
    public function get_today(){
        $date_string = '%Y-%m-%d';
        $time = time();
        $today = mdate($date_string,$time);
        return $today;
    }

    public function get_following_user($username){
        $sql = "select following from follow where followed=?";
        $query = $this->db->query($sql,array($username));
        return $query->result_array();
    }

    public function get_mood($username){
        $sql = "select * from mood where username = ?";
        $query = $this->db->query($sql,array($username));
        return $query->result_array();
    }

    public function is_follow($follow_username,$followed_username){
        $sql = "select * from follow where following = ? and followed = ?";
        $query = $this->db->query($sql,array($follow_username,$followed_username));
        return $query->row_array();
    }

    public function follow($follow_username,$followed_username){
        $follow = array(
            'following'=>$follow_username,
            'followed'=>$followed_username
        );
        $insert = $this->db->insert('follow',$follow);
        return $insert;
    }

    public function cancel_follow($follow_username,$followed_username){
        $follow = array(
            'following'=>$follow_username,
            'followed'=>$followed_username
        );
        $delete = $this->db->delete('follow',$follow);
        return $delete;
    }

    public function get_all_user($page){
        $sql = "select * from user limit (?-1)*10,?*10";
        $query = $this->db->query($sql,array($page,$page));
        return $query->result_array();
    }

}