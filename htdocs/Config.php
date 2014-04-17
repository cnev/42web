<?php
	define('BASE_PATH', dirname(__FILE__));
	define('SYSTAM_PATH', 'core');

	//Debug option
	//on: show error messages
	define('DEBUG_ON',true);

	// DB login info
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'secret');
	define('DB_DBASE', 'framework_cnev');

	//Define default controller
	define('DEFAULT_CONTROLLER', 'home');
	define('DEFAULT_CONTROLLER_NAME', 'controller');
	define('DEFAULT_METHOD_NAME', 'method');
?>
