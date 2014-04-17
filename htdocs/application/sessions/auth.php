<?php

class Auth extends Session
{
	public function __construct()
	{
		parent::__construct();
	}
	public function is_logged()
	{
		if (!$this->__isset('uid') || $this->__get('uid') == 0)
			return (FALSE);
		return (TRUE);
	}
}
