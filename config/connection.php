<?php
	/*define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','db_pjtki');
	   
	$db = new mysqli(db_host,db_user,db_pass,db_name);
	 
	if($db->connect_errno > 0){
	    die('Unable to connect to database [' . $db->connect_error . ']');
	}*/
	define('DB_HOST', 'localhost'); //use your host here
	define('DB_USER', 'root'); //use your database user here
	define('DB_PASSWORD', ''); //use your password here
	define('DB_DATABASE', 'db_pjtki'); //use your database name here

	// connect to data base
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if (!$link) {
	    die('Failed to connect to the Server: ' . mysql_error());
	}

	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if (!$db) {
	    die("Unable to choose the Database");
	} 
?>