<?php
/**
 * Created by PhpStorm.
 * User: yyy
 *
 */

class ActivityController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('activity_model');
    }

    public function index(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('activity/activity',$data);
    }

    public function release_activity(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('activity/releaseActivity',$data);
    }

    public function my_activity(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $this->load->view('activity/myActivity',$data);
    }

    public function detail_activity($aid){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $activity_info = $this->activity_model->get_activity_info($aid);
        $activity_info['joined_num'] = $this->activity_model->get_joined_num($aid);
        $data['activity_info'] = $activity_info;

        $this->load->view('activity/detailActivity',$data);
    }

    //为view提供所有参加对应活动的用户信息
    public function joined_user(){
        $aid = $this->input->post('aid');
//        $aid = 1;
        $namelist = $this->activity_model->get_joined_user($aid);
        $resultData = array();
        foreach($namelist as $name){
            $user = $this->user_model->get_user_info($name['username']);
            $user['header_url'] = base_url($user['header_url']);
            $resultData[] = $user;
        }

        echo json_encode($resultData);

    }

    //参加活动的接口
    public function join(){
        $username = $this->input->post('username');
        $aid = $this->input->post('aid');
        $join = $this->activity_model->join($username,$aid);
        if($join){
            $namelist = $this->activity_model->get_joined_user($aid);
            $resultData = array();
            foreach($namelist as $name){
                $user = $this->user_model->get_user_info($name['username']);
                $user['header_url'] = base_url($user['header_url']);
                $resultData[] = $user;
            }

            echo json_encode($resultData);
        }
    }

    //退出活动的接口
    public function quit(){
        $username = $this->input->post('username');
        $aid = $this->input->post('aid');
        $quit = $this->activity_model->quit($username,$aid);
        if($quit){
            $namelist = $this->activity_model->get_joined_user($aid);
            $resultData = array();
            foreach($namelist as $name){
                $user = $this->user_model->get_user_info($name['username']);
                $user['header_url'] = base_url($user['header_url']);
                $resultData[] = $user;
            }

            echo json_encode($resultData);
        }
    }

    //用于为view提供所有已发布可参加的活动
    public function get_all_activity(){
        $page = $this->input->post('page');
//        $page = 1;
        $today = $this->user_model->get_today();
        $activity_list = $this->activity_model->get_total_activity($today,$page);
        $resultData = array();
        foreach($activity_list as $activity){
            $activity['join_num'] = $this->activity_model->get_joined_num($activity['aid']);
            $resultData[]=$activity;
        }

        echo json_encode($resultData);
    }

    function get_release_activity(){
        $username = $this->input->post('username');
        $date = $this->user_model->get_today();
        $release_activity = $this->activity_model->get_release_activity($username,$date);
        $resultData = array();
        foreach($release_activity as $activity){
            $activity['join_num'] = $this->activity_model->get_joined_num($activity['aid']);
            $resultData[]=$activity;
        }

        echo json_encode($resultData);
    }

    function get_joining_activity(){
        $username = $this->input->post('username');
        $date = $this->user_model->get_today();
        $aid_array = $this->activity_model->get_join_activity_aid($username);
        $joining = array();
        foreach($aid_array as $aid){
            $activity_info = $this->activity_model->get_activity_info($aid);
            $activity_info['join_num'] = $this->activity_model->get_joined_num($aid);
            if($activity_info['end']>=$date){
                $joining[] = $activity_info;
            }
        }
        echo json_encode($joining);
    }

    function get_joined_activity(){
        $username = $this->input->post('username');
        $date = $this->user_model->get_today();
        $aid_array = $this->activity_model->get_join_activity_aid($username);
        $joined = array();
        foreach($aid_array as $aid){
            $activity_info = $this->activity_model->get_activity_info($aid);
            $activity_info['join_num'] = $this->activity_model->get_joined_num($aid);
            if($activity_info['end']<$date){
                $joined[] = $activity_info;
            }
        }
        echo json_encode($joined);
    }
}