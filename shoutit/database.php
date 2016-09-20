<?php
//Connect to the database
$con = mysqli_connect("localhost", "root", "start123", "shoutit");

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL : '.mysqli_connect_error();
}
?>