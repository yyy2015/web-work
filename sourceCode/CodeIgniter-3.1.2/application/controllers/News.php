<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016/11/12
 * Time: 20:12
 */
class News extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'New archive';

        $this->load->view('templates/header',$data);
        $this->load->view('news/index',$data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL){
        $data['news_item'] = $this->news_model->get_news($slug);

        if(empty($data['news_item'])){
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header',$data);
        $this->load->view('news/view',$data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','Text','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('news/create',$data);
            $this->load->view('templates/footer');
        }else{
            $this->new_model->set_news();
            $this->load->view('new/success');
        }
    }

    public function set_news(){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'),'dash',TRUE);

        $data = array(
            'title' =>$this->input->post('title'),
            'slug' => $slug,
            'text' =>$this->input->post('text')
        );

        return $this->db->insert('news',$data);
    }
}