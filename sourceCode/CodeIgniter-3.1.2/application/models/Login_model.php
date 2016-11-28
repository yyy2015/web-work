<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/27
 * Time: 14:35
 */

class Login_model extends CI_Model {

    //to validate the form data
    function validate(){
        $this->db->where('username',$this->input->post('form-username'));
        $this->db->where('password',$this->input->post('form-password'));
        $query = $this->db->get('user');

        if($query->num_rows() == 1){
            return true;
        }
    }

    function createUser(){
        $newUserInsertData = array(
            'username'=>$this->input->post('form-username'),
            'password'=>$this->input->post('form-password')
        );
        $insert = $this->db->insert('user',$newUserInsertData);
        return $insert;
    }
}