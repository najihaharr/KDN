<?php // register.php
include "db_connect.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	echo "All records to be filled in";
	exit;}
	}
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	echo "Error: The passwords do not match";
	exit;
	}
$password = md5($password);
// echo $password;
$sql = "INSERT INTO users (username, password) 
		VALUES ('$username', '$password')";
//	echo "<br>". $sql. "<br>";
$result = $con->query($sql);

if (!$result) 
	echo "Your query failed.";
else
	echo "Welcome ". $username . ". You are now registered";
	
?>