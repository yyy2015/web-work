<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016/11/13
 * Time: 11:05
 */
class LoginController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('index');
}

    public function login($log = ''){
        $data['log'] = $log;
        $this->load->view('/login/login',$data);
    }

    public function signUp(){
        $this->load->view('/login/signUp');
    }

    public function createUser(){
        $this->form_validation->set_rules('form-username','username','required|is_unique[user.username]',
            array('required'=>'请输入用户名',
                "is_unique"=>"用户名重复，请重新输入"));
        $this->form_validation->set_rules('form-password','password','required',
            array('requred'=>'请输入密码'));
        $this->form_validation->set_rules('form-password2','confirmPassword','required|matches[form-password]',
            array('required'=>'请确认密码',
                'matches'=>'确认密码与原密码不匹配'));
        if($this->form_validation->run() == FALSE){
            $this->signUp();
        }else{
            $this->load->model('login_model');
            if($query = $this->login_model->createUser()){
                $data = array(
                    'username' => $this->input->post('form-username'),
                    'is_logged_in' => true);
                $this->session->set_userdata($data);
                redirect('sportController');
            }else{
                $this->signUp();
            }
        }
    }

    public function validate_credentials(){
        $this->form_validation->set_rules('form-username','username','required',
            array('requred'=>'请输入用户名'));
        $this->form_validation->set_rules('form-password','username','required',
            array('required'=>"请输入密码"));
        $this->load->model('login_model');
        $query = $this->login_model->validate();

        if($query){
            $data = array(
                'username' => $this->input->post('form-username'),
                'is_logged_in' => true
            );
            if($data['username'] == 'administrator'){
                redirect('userController');
            }else{
                $this->session->set_userdata($data);
                redirect('sportController');
            }

        }else{
            $this->login($log='用户名或密码错误');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('loginController');
    }

    function get_username(){
//        $username = $this->session->userdata('username');
        $username = 'yyy';
        echo $username;
    }


}