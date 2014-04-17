<?php

class Login_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		//load database
		$this->load_database();
	}
	public function auth()
	{
		$sql = "SELECT * FROM user WHERE $_POST[login]=login";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		if (!$result || $result['pw'] != hash('whirlpool', $_POST['pw']))
			return (FALSE);
		return (TRUE);
	}

}

?>
