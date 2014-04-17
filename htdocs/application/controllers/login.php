<?php
class Login extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
		$this->load->session("example_auth");
	}

	//default method
	public function login()
	{
		$data['title'] = "Login";
		$data['memo_login'] = "";
		$data['memo_pw'] = "";
		$this->load->viewFile("login", $data);
	}
}
?>
