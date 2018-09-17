<?php

	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("users", $con);
	// Specify the query to Insert Record
	$sql = "insert into users 	(firstname,lastname, username, password) 	values('".$firstname."','".$lastname."','".$username."','".$password."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("user was registered Succesfully");window.location=\'register.php\';</script>';

?>