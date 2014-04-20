<?php
class Auth extends Session
{
	public function __construct()
	{
		parent::__construct();
		@session_start();
		if (!isset($_SESSION['uid']))
			$_SESSION['uid'] = 0;
	}
	public function is_logged()
	{
		if (!isset($_SESSION['uid']) || $_SESSION['uid'] == 0)
			return (FALSE);
		return (TRUE);
	}
	public function is_admin()
	{
		if (!isset($_SESSION['access']) || $_SESSION['access'] != 'admin')
			return (FALSE);
		return (TRUE);
	}
}
