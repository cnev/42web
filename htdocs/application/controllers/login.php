<?php
class Login extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
		$this->load->session("auth");
	}

	//default method
	public function login()
	{
		$data['title'] = "Login";
		$data['memo_login'] = "";
		$data['memo_pw'] = "";
		$this->load->viewFile("login", $data);
	}

	public function auth()
	{
		$data['title'] = "Logged in ?";
		if (!$this->login_model->auth())
			$this->load->viewFile("login_fail", $data);
		else
		{
			if ($_SESSION['access'] == 'admin')
				$data['access'] = $this->login_model->auth_admin();
			else
				$data['access'] = $this->login_model->auth_member();
			$this->load->viewFile("login_success", $data);
		}
	}

	public function signin()
	{
		$data['title'] = "Sign in !";
		$data['memo_login'] = "";
		$data['memo_pw'] = "";
		$this->load->viewFile("signin", $data);
	}

	public function signin_auth()
	{
		$data['title'] = "Signed in ?";
		if (!$this->login_model->register())
			$this->load->viewFile("signin_fail", $data);
		else
			$this->load->viewFile("signin_success", $data);
	}
}
?>
