<?php

class Admin_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		//load database
		$this->load_database();
	}

	public function header_nav()
	{
		$str = '<div>Welcome !</div>
			<div><a href="?controller=home&method=logout">Logout</a></div>';
		return ($str);
	}
}
