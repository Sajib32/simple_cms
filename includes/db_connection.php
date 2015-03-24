<?php 
	
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "simple_cms");
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	//Test if connection occured.
	if(mysqli_connect_errno()) {
		die("Database Connection Failed: " .
			mysql_connect_error() .
				" (" . mysql_connect_errno() . ")"
		);
	}
?>