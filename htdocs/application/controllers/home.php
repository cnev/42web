<?php

class Home extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("home_model");
		$this->load->session("auth");
	}

	//default method
	public function index()
	{
		//if(!$this->example_auth->test_authenticate())
		//	die("You are not authenticated to view the page! :(");
		if (!$this->auth->is_logged())
			$data['header_nav'] = $this->home_model->header_nav(FALSE);
		else
			$data['header_nav'] = $this->home_model->header_nav(TRUE);
		$data['date']  = $this->home_model->get_date();
		$data['title'] = "Home";
		$data['header_nav'] = $this->home_model->header_nav();
		$this->load->viewFile("home", $data);
	}
	public function login()
	{
		$data['title'] = "Login";
		$data['memo_login'] = "";
		$data['memo_pw'] = "";
		$this->load->viewFile("login", $data);
	}
}
