<?php
class Ref_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
	{
		$data['main_content'] = 'ref_view/login_form';
		$this->load->view('ref_view/includes/template',$data);
	}

	function validate_credentials()
	{
		$this->load->model('ref_membership_model');
		$query = $this->ref_membership_model->validate();

		if($query) //if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('ref_site/member_area');
		}

		else 
		{
			$this->index();
		}	
	}

	function signup()
	{
		$data['main_content'] = 'ref_view/signup_form';
		$this->load->view('ref_view/includes/template',$data);
	}

	function create_member()
	{
		$this->load->library('form_validation');
		//field name, error message, validation rules

		$this->form_validation->set_rules('first_name','Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('email_address','Email Address','trim|required|valid_email');
		$this->form_validation->set_rules('username','Userame','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->signup();
		}
		else
		{
			$this->load->model('ref_membership_model');
			if($query = $this->ref_membership_model->create_member())
			{
				$data['main_content'] = 'ref_view/signup_successful';
				$this->load->view('ref_view/includes/template',$data);
			}	
			else
			{
				$this->load->view('ref_view/signup_form');
			}	
		}	
	}

	function logout()  
	{  
    $this->session->sess_destroy();  
    redirect('ref_site/member_area');
	} 
}