<?php
//Connect to the database
$host = "localhost";
$user = "root";
$password = "start123";
$db = "shoutit";

$con = mysqli_connect($host, $user, $password , $db);

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL : '.mysqli_connect_error();
}
?>