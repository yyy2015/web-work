<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/30
 * Time: 16:03
 */
class FriendController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('friend_model');
    }

    public function index(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('friend/friendMood',$data);
    }

    public function goRelated(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('friend/relatedWith',$data);
    }

    public function myMood(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('friend/myMood',$data);
    }

    public function friendManage(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('friend/friendManage',$data);
    }
}