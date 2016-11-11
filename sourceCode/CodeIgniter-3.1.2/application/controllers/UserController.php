<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016/11/11
 * Time: 9:24
 */
class UserController extends CI_Controller {
//    function __construct()
//    {
//        parent::__construct();
//    }
    public function index(){
        $this->load->model('user_model');
        $result = $this->user_model->allUser();
        $this->load->view('test',['result'=>$result]);
    }
}