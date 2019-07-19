<?php
	$servername = "localhost";
	$username = "root";
	$password ="";
	$db_name ="mydb";
//con is a variable name it can be anything

	$con = new mysqli($servername, $username, $password, $db_name);
		if($con->connect_error){
			die("Cannot Connect".$con->connect_error);
		}
		else{
			//echo "connected";
		}
?>
