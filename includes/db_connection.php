<?php 
	//database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "simple_cms";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//Test if connection occured.
	if(mysqli_connect_errno()) {
		die("Database Connection Failed: " .
			mysql_connect_error() .
				" (" . mysql_connect_errno() . ")"
		);
	}
?>