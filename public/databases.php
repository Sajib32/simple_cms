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
<?php 
	// Perform database query
	$query = "SELECT * FROM subjects";
	$result = mysqli_query($connection, $query);
	// Test if there is a error
	if (!$result) {
		die("Database query failed");
	}
?>

<DOCTYPE html>
<html lang="en">
	<head>
		<title>Untitled</title>
	</head>
	<body>
	<?php
		// Use Returned data
		while($row = mysqli_fetch_array($result)){
			// output data from each row
			print_r($row);
			echo "<hr />";

		}
	?>
	</body>
</html>
<?php 
	// Close database Connection
	mysqli_close($connection);
?>