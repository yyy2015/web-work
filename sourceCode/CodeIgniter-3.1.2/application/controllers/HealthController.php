<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/30
 * Time: 11:34
 */

class HealthController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("health_model");
        $this->load->model("user_model");
    }

    public function index(){
        $user_info = $this->user_model->get_login_user();
        $data['user_info'] = $user_info;
        $username = $user_info['username'];

        $date_string = '%Y-%m';
        $time = time();
        $to_month = mdate($date_string,$time);

        //身体信息
        $health_info = $this->health_model->find_health_info($username,$to_month);
        $health_info['bmi'] = round($health_info['weight']/($health_info['height']*$health_info['height']),2);
        $health_info['height'] = $health_info['height']*100;
        $bmi = $health_info['bmi'];
        if($bmi < 18.5){
            $health_info['range']='light-weight';
        }
        if($bmi>=18.5 && $bmi<24){
            $health_info['range'] ='healthy';
            if($bmi == 22){
                $health_info['range'] = 'perfect';
            }
        }
        if($bmi >=24 && $bmi <28){
            $health_info['range']='overweight';
        }
        if($bmi >=28){
            $health_info['range']='fat';
        }
        //年龄
        $user_info = $this->user_model->get_user_info($username);
        $health_info['age'] = $user_info['age'];

        $data['health_info'] = $health_info;

        $this->load->view('sport/healthAnalysis',$data);
    }

    public function get_weight_height_change(){
        $username = $this->input->post('username');
//        $username = 'yyy';
        $result = $this->health_model->get_weight_height($username);
        $result = array_reverse($result);
        $date = array();
        $weight = array();
        $height = array();
        foreach($result as $month){
            $date[] = $month['date'];
            $weight[] = $month['weight'];
            $height[] = $month['height']*100;
        }
        $resultData['date'] = $date;
        $resultData['weight'] = $weight;
        $resultData['height'] = $height;

        echo json_encode($resultData);
    }

    public function test(){
        $date_string = '%Y-%m';
        $time = time();
        $to_month = mdate($date_string,$time);
        echo $to_month;
    }

}