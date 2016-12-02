<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/30
 * Time: 0:42
 */
class SleepController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sleep_model');
        $this->load->model('user_model');
    }

    public function index(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $username = $user_info['username'];

        $data['night_sleep'] = $this->get_night_data($username);

        $data['total_sleep'] = $this->get_total_data($username);

        $this->load->view('sport/sleepAnalysis',$data);
    }

    //获取周睡眠信息
    public function get_week_data(){
        $username=$this->input->post('username');
//        $username='yyy';
        $result = $this->sleep_model->find_week_sleep_data($username);
        $result = array_reverse($result);
        $date = array();
        $deep = array();
        $loose = array();
        foreach($result as $night){
            $date[] = $night['date'];
            $deep[] = $night['deep_sleep_time'];
            $loose[] = $night['loose_sleep_time'];
        }
        $resultArray['date'] = $date;
        $resultArray['deep'] = $deep;
        $resultArray['loose'] = $loose;

        echo json_encode($resultArray);

    }

    //获取当夜睡眠信息
    function get_night_data($username){
        $today = $this->user_model->get_today();
        $night_sleep = $this->sleep_model->find_night_sleep_data($username,$today);
        $night_sleep['night_rank'] = $this->sleep_model->get_night_rank($username,$today);

        $night_time = $night_sleep['deep_sleep_time']+$night_sleep['loose_sleep_time'];

        $night_sleep['hour'] = floor($night_time);
        $night_sleep['minute'] = ($night_time-floor($night_time))*60;

        $night_sleep['deep_hour'] = floor($night_sleep['deep_sleep_time']);
        $night_sleep['deep_minute'] = ($night_sleep['deep_sleep_time'] - $night_sleep['deep_hour'])*60;

        $night_sleep['loose_hour'] = floor($night_sleep['loose_sleep_time']);
        $night_sleep['loose_minute'] = ($night_sleep['loose_sleep_time'] - $night_sleep['loose_hour'])*60;

        $real_time = $night_sleep['deep_sleep_time']+0.8*$night_sleep['loose_sleep_time'];
        if($real_time>= 6.4){ $night_sleep['level'] = 'A';}
        if($real_time<6.4 && $real_time >=6){ $night_sleep['level'] = 'B';}
        if($real_time<6 &&$real_time >=5.5){ $night_sleep['level'] = 'C';}
        if($real_time < 5.5 && $real_time >=5){$night_sleep['level'] = 'D';}
        if($real_time < 5){$night_sleep['level']='F';}

        return $night_sleep;

    }

    //获取总睡眠信息
    function get_total_data($username){
        $total_sleep = $this->sleep_model->find_total_sleep_data($username);
        $total_sleep['total_rank'] = $this->sleep_model->get_total_rank($username);

        $total_sleep['deep_day'] = floor($total_sleep['total_deep']/24);
        $total_sleep['deep_hour'] = ($total_sleep['total_deep']/24.0-$total_sleep['deep_day'])*24;

        $total_sleep['loose_day'] = floor($total_sleep['total_loose']/24);
        $total_sleep['loose_hour'] = ($total_sleep['total_loose']/24.0-$total_sleep['loose_day'])*24;

        $total_sleep['supple_caloris'] = $total_sleep['total_supple']/10000.0;

        return $total_sleep;
    }

    //为view提供当夜睡眠排行信息
    function get_night_ranking(){
        $page = $this->input->post('page');
//        $page = 1;
        $today = $this->user_model->get_today();
        $night_sleep = $this->sleep_model->get_night_ranking_table($today,$page);
        $userlist = array();
        foreach($night_sleep as $person_night){
            $userinfo = $this->user_model->get_user_info($person_night['username']);
            $person_night['header_url'] = base_url($userinfo['header_url']);
            $person_night['night_hour'] = floor($person_night['real_time']);
            $person_night['night_minute'] =floor(($person_night['real_time'] - $person_night['night_hour'])*60);
            $userlist[] = $person_night;
        }

        echo json_encode($userlist);
    }

    //为view提供总睡眠排行信息
    function get_total_ranking(){
        $page = $this->input->post('page');
//        $page = 1;
        $total_sleep = $this->sleep_model->get_total_ranking_table($page);
        $userlist = array();
        foreach($total_sleep as $person_night){
            $userinfo = $this->user_model->get_user_info($person_night['username']);
            $person_night['header_url'] = base_url($userinfo['header_url']);
            $person_night['total_day'] = floor($person_night['real_time']/24);
            $person_night['total_hour'] =floor(($person_night['real_time']/24.0 - $person_night['total_day'])*24);
            $userlist[] = $person_night;
        }

        echo json_encode($userlist);
    }


}