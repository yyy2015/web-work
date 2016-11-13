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

    public function login(){
        $this->load->view('/login/login');
    }

    public function signUp(){
        $this->load->view('/login/signUp');
    }
}