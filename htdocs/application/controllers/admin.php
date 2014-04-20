<?php
class Admin extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin_model");
		$this->load->session("auth");
	}

	//default method
	public function main()
	{
		if (!$this->auth->is_admin())
		{
			$data['title'] = 'DENIED';
			$this->load->viewFile("forbidden", $data);
		}
		else
		{
			$data['header_nav'] = $this->admin_model->header_nav();
			$data['title'] = "Administration";
			$this->load->viewFile("admin", $data);
		}
	}
}
