<?php
class Member extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("member_model");
		$this->load->session("auth");
	}

	//default method
	public function main()
	{
		//if(!$this->example_auth->test_authenticate())
		//	die("You are not authenticated to view the page! :(");
		$data['header_nav'] = $this->member_model->header_nav();
		$data['title'] = "Main Page";
		$this->load->viewFile("member", $data);
	}
}
