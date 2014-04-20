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
		$mysqli = new mysqli(DB_HOST,DB_USER , DB_PASSWORD, DB_DBASE);
		$stmt = $mysqli->stmt_init();
		$stmt = $mysqli->prepare("SELECT * FROM user WHERE login=(?)");
		$stmt->bind_param('s', $_POST['login']);
		$stmt->bind_result($id, $login, $pw, $access);
		$stmt->execute();
		$stmt->fetch();
		$stmt->close();
		if (!$pw || $pw != hash('whirlpool', $_POST['pw']))
			return (FALSE);
		$_SESSION['uid'] = $id;
		$_SESSION['access'] = $access;
		return (TRUE);
	}
	public function auth_member()
	{
		return ('Access granted ! <a href="?controller=member&method=main">Click here to continue ...</a>');
	}
	public function auth_admin()
	{
		return ('Access granted ! <a href="?controller=admin&method=main">Click here to continue ...</a>');
	}
	public function register()
	{
		$mysqli = new mysqli(DB_HOST,DB_USER , DB_PASSWORD, DB_DBASE);
		$stmt = $mysqli->stmt_init();
		$stmt = $mysqli->prepare("SELECT * FROM user WHERE login=(?)");
		$stmt->bind_param('s', $_POST['login']);
		$stmt->bind_result($id, $login, $pw, $access);
		$stmt->execute();
		$stmt->fetch();
		$stmt->close();
		if ($login)
			return (FALSE);
		$mysqli = new mysqli(DB_HOST,DB_USER , DB_PASSWORD, DB_DBASE);
		$stmt2 = $mysqli->stmt_init();
		$stmt2 = $mysqli->prepare("INSERT INTO user(login,pw,access) VALUES (?, ?, 'member')");
		$stmt2->bind_param('ss', $_POST['login'], hash('whirlpool', $_POST['pw']));
		$stmt2->execute();
		$stmt2->close();
		return (TRUE);
	}
}
?>
