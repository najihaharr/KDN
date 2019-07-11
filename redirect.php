<?php
require "db_connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

	  
<?php

//Create insert data values into table : INSERT INTO is the syntax - with parameters , id is auto incremented alr
session_start();
	$_SESSION["cardname"] = $_POST['cardname'];
	$_SESSION["cardnumber"] = $_POST['cardnumber'];
	$_SESSION["expmonth"] = $_POST['expmonth'];
	$_SESSION["expyear"] = $_POST['expyear'];
	$_SESSION["cvv"] = $_POST['cvv'];


		echo "Loading page...";		
		$CAT1_tickets = $_SESSION["cat1qty"];
	
		if ($CAT1_tickets > 0){
			header("Location:dinnerform.html");
		} //dinner option provided

		else
			header("Location:bookingconfirmation.php");

	$con->close();
?>



</body>
</html>
