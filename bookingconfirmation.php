<?php
require "db_connect.php";
?>

<!doctype html>
<html lang="en">
<head>
<title>KDN: Korean Dream Night</title>
<meta charset=“utf-8”>
<link rel="stylesheet" type="text/css" href="main-bg.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php

//Create insert data values into table : INSERT INTO is the syntax - with parameters , id is auto incremented alr
	session_start();
	
	$cardname = $_SESSION["cardname"];
	$cardnumber = $_SESSION["cardnumber"];
	$expmonth = $_SESSION["expmonth"];
	$expyear = $_SESSION["expyear"];
	$cvv = $_SESSION["cvv"];
	$insertquery = "INSERT INTO paymentinfo (cardname, cardnumber, expmonth, expyear, cvv) VALUES ('".$cardname."', '".$cardnumber."', '".$expmonth."', '".$expyear."', '".$cvv."')";
	/*$mysql = "INSERT INTO sales5 (CAT1, CAT2, CAT3, CAT4, CAT5, CAT6, totalqty, totalPrice) VALUES ('".$cat1qty."', '".$cat2qty."', '".$cat3qty."', '".$cat4qty."', '".$cat5qty."', '".$cat6qty."', '".$totalqty."', '".$totalPrice."')"; */
	
	if (!mysqli_query($con, $insertquery)){
		die('Error inserting data');
		
	}

	$con->close();
?>


<style>


.content {
	margin-left:350px;
	width: 300px;
	font-family: arial;
	font-size: 15px;
}

</style>
</head>
<body>
    <div id="wrapper">

<div class="topnav">
	<img src="KDN_logo1.png" id="logo">
    <b>
	<a href="index.html" class="links">Home</a> //class links are to set colour of links BEFORE link is pressed, then a:hover and a:visited for others
	<a href="programmes.html" class="links">Programmes</a>
	<a href="artistes.html" class="links">Artistes</a>
	<a href="ticketinfo.html" class="links">Ticket Info</a>
	<a style="background-color: #ff7bdb;" href="gettix.php" class="links">Get Tickets!</a>
	<a href="about.html" class="links">About</a>
    </b>
</div>

<div class="header-images">
</div>

<div class="content">
	<br>
    <center><h2>BOOKING CONFIRMATION</h2><center> <br>
	
<center><p>Your booking has been confirmed. <br><br>
Please check your e-mail for order confirmation and tickets.<br> <br>
Thank you! <br><br><br>
Sincerely,<br>
<img src="kdnsignature.png"  width="52" height="33"> </center></p>

	<?php
	echo date_default_timezone_get();
	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

	
	?>
	
<?php
$to      = 'f34ee@localhost';
$subject = 'KDN: E-mail Confirmation';

$message = '

<html lang="en">

<meta charset=“utf-8”>
<body>
<h1> TESTING</h1>
<p>WEllllllll you rock</p>
 <p>Thank you for purchasing tickets to KDN! <br> Please take note that tickets bought are non refundable nor replaceable. </p>
  	<br><br>We hope to see you there!<br><br>

</body>
</html>

'
;


$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
'Content-Type: text/html; charset=ISO-8859-1\r\n' .
    'X-Mailer: PHP/' . phpversion();

	
mail($to, $subject, $message, $headers,'-ff34ee@localhost');
echo ("mail sent to : ".$to);
?> 

</div>


<footer>
	<br><small><i>Copyright &copy; 2018 Korean Dream Night<br>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-youtube"></a>
	<a href="#" class="fa fa-instagram"></a>
</footer>

</div>
</body>
</html>
