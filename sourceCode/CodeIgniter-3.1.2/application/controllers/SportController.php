<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/28
 * Time: 8:44
 */

class SportController extends CI_Controller {

    public function index(){
        $data['user_info'] = $this->get_user_info();
        $this->load->view('sport/sportAnalysis',$data);
    }

    function get_user_info(){
        $user_info['image_url'] = base_url('public/image/header.jpg');
        $user_info['username'] = '找呀找呀找尾巴';
        return $user_info;
    }

    function sleep(){
        $data['user_info'] = $this->get_user_info();
        $this->load->view('sport/sleepAnalysis',$data);
    }

    function health(){
        $data['user_info'] = $this->get_user_info();
        $this->load->view('sport/healthAnalysis',$data);
    }

}