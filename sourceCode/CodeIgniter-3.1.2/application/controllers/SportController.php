<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/28
 * Time: 8:44
 */

class SportController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sport_model');
        $this->load->model('user_model');
    }

    public function index(){
        //获取用户信息
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;


        //获取日运动信息
        $today = $this->user_model->get_today();
        $day_sport = $this->sport_model->find_day_sport_data($user_info['username'],$today);
        $day_sport['day_rank'] = $this->sport_model->get_day_rank($user_info['username'],$today);
        $data['day_sport'] = $day_sport;

        //获取总运动信息
        $total_sport = $this->sport_model->find_total_sport_data($user_info['username']);
        $total_sport['total_rank'] = $this->sport_model->get_total_rank($user_info['username']);

        $data['total_sport'] = $total_sport;

        $this->load->view('sport/sportAnalysis',$data);
    }



    //为view提供周运动信息
    public function get_week_data(){
        $username = $this->input->post('username');
        $result = $this->sport_model->find_week_sport_data($username);
        $result = array_reverse($result);
        $date=array();
        $step=array();
        foreach($result as $day){
            $date[] = $day['date'];
            $step[] = $day['day_step'];
        }
        $resultData['date'] = $date;
        $resultData['step'] = $step;
        echo json_encode($resultData);
    }

    //为view提供日运动排行信息
    public function get_day_ranking(){
        $page = $this->input->post('page');
//        $page = 1;
        $today = $this->user_model->get_today();
        $day_sport = $this->sport_model->get_total_day_rank_table($today,$page);
        $userlist = array();
        foreach($day_sport as $person_day){
            $userinfo = $this->user_model->get_user_info($person_day['username']);
            $person_day['header_url'] = base_url($userinfo['header_url']);
            $userlist[] = $person_day;
        }
        echo json_encode($userlist);
    }

    public function get_total_ranking(){
        $page = $this->input->post('page');
//        $page = 1;
        $total_sport = $this->sport_model->get_total_rank_table($page);
        $userlist = array();
        foreach($total_sport as $person_total){
            $userinfo = $this->user_model->get_user_info($person_total['username']);
            $person_total['header_url'] = base_url($userinfo['header_url']);
            $userlist[] = $person_total;
        }
        echo json_encode($userlist);
    }



}