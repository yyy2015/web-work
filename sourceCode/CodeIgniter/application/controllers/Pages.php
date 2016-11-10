<?php
/**test files [0]
 * Created by PhpStorm.
 * User: yyy
 * Date: 2016/11/10
 * Time: 14:54
 */
class Pages extends CI_Controller{
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = ucfirst($page);//capitalize the first letter

        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer',$data);
    }
}