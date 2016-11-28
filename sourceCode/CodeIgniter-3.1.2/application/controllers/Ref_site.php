<?php
class Ref_site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function member_area()
	{
		$this->load->view('ref_view/member_area');
	}

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You dont have permission to access this page. <a href="../ref_login">Login</a> ';
			die();
		}
	}

}
