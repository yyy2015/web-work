<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/28
 * Time: 8:44
 */

class SportController extends CI_Controller {

    public function index(){
        $this->load->view('sport/sportAnalysis');
    }
}