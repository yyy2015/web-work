<?php
/**
 * Created by PhpStorm.
 * User: yyy
 *
 */
class UserController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('sport_model');
    }

    public function index(){
        $user_info['username'] = 'administrater';
        $user_info['image_url'] = base_url('/public/image/header.jpg');
        $data['user_info'] = $user_info;
        $this->load->view('user/userManage',$data);
    }

    public function activityManage(){
        $user_info['username'] = 'administrater';
        $user_info['image_url'] = base_url('/public/image/header.jpg');
        $data['user_info'] = $user_info;
        $this->load->view('user/activityManage',$data);
    }

    public function gotoAccount(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('user/account',$data);
    }

    public function gotoHomepage($username){

        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;

        $user = $this->user_model->get_user_info($username);
        $user['header_url'] = base_url($user['header_url']);
        $data['user'] = $user;

        $sport_info = $this->sport_model->find_total_sport_data($username);
        $data['sport_info'] = $sport_info;

        $this->load->view('user/personalPage',$data);
    }

    public function get_following_user(){
        $username = $this->input->post('username');
        $following = $this->user_model->get_following_user($username);
        $following_user = array();
        foreach($following as $user){
            $following_info = $this->user_model->get_user_info($user['following']);
            $following_info['header_url'] = base_url($following_info['header_url']);
            $following_user[] = $following_info;
        }
        echo json_encode($following_user);
    }

    public function get_mood(){
        $username = $this->input->post('username');
        $moodlist = $this->user_model->get_mood($username);
        $moodData = array();
        foreach($moodlist as $mood){
            $user = $this->user_model->get_user_info($mood['username']);
            $mood['header_url'] = base_url($user['header_url']);
            $moodData[] = $mood;
        }
        echo json_encode($moodData);
    }

    public function is_follow(){
        $follow_username = $this->input->post('follow');
        $followed_username = $this->input->post('followed');
        $result = $this->user_model->is_follow($follow_username,$followed_username);
        echo json_encode($result);
    }

    public function follow(){
        $follow = $this->input->post('follow');
        $followed = $this->input->post('followed');
        $result = $this->user_model->follow($follow,$followed);
        echo json_encode($result);
    }

    public function cancel_follow(){
        $follow = $this->input->post('follow');
        $followed = $this->input->post('followed');
        $result = $this->user_model->cancel_follow($follow,$followed);
        echo json_encode($result);
    }

    public function get_all_user(){
        $page = $this->input->post('page');
        $userlist = $this->user_model->get_all_user($page);
        $result = array();
        foreach($userlist as $user){
            $user['header_url'] = base_url($user['header_url']);
            $result[] = $user;
        }

        echo json_encode($result);
    }
}
