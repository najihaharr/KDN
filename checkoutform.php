<?php
require "db_connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 20px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>KDN: Checkout Form</h2>
	  
<?php

session_start();

//Create insert data values into table : INSERT INTO is the syntax - with parameters , id is auto incremented alr
	//for customers database using form POST
	$fname = $_POST['fname'];
	$contact = $_POST['contact'];
	$custEmail = $_POST['custEmail'];
	$sql = "INSERT INTO customers (name, contact, email) VALUES ('".$fname."', '".$contact."', '".$custEmail."')";
	
	if (!mysqli_query($con, $sql)){
		die('Error inserting data');
		
	}
	 
	//getting qty values from drop downbox
	$_SESSION["cat1qty"] = $_POST['cat1qty'];
	$cat1qty = $_SESSION["cat1qty"];
	$cat2qty = $_POST['cat2qty'];
	$cat3qty = $_POST['cat3qty'];
	$cat4qty = $_POST['cat4qty'];
	$cat5qty = $_POST['cat5qty'];
	$cat6qty = $_POST['cat6qty'];
	
	Define ('CAT1', 348);
	Define ('CAT2', 288);
	Define ('CAT3', 228);
	Define ('CAT4', 188);
	Define ('CAT5', 128);
	Define ('CAT6', 88);
	
	if ($cat1qty != 0){
		$choice1 = $cat1qty * CAT1;
	}
	
	if ($cat2qty !=0){
		$choice2 = $cat2qty * CAT2;
	}
		
	if ($cat3qty !=0){
		$choice3 = $cat3qty * CAT3;
	}
	if ($cat4qty !=0){
		$choice4 = $cat4qty * CAT4;
	}
	if ($cat5qty !=0){
		$choice5 = $cat5qty * CAT5;
	}
	if ($cat6qty !=0){
		$choice6 = $cat6qty * CAT6;
	}
	
	$totalPrice = $choice1 + $choice2 + $choice3 + $choice4 + $choice5 + $choice6;

	$totalqty = 0;
	$totalqty = $cat1qty + $cat2qty + $cat3qty + $cat4qty + $cat5qty + $cat6qty;

	$query = "INSERT INTO sales5 (CAT1, CAT2, CAT3, CAT4, CAT5, CAT6, totalqty, totalPrice) VALUES ('".$cat1qty."', '".$cat2qty."', '".$cat3qty."', '".$cat4qty."', '".$cat5qty."', '".$cat6qty."', '".$totalqty."', '".$totalPrice."')";
	
	if (!mysqli_query($con, $query)){
		die('Error inserting data');
		
	}
	

	$con->close();


?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form name="paymentinfo" action="redirect.php" method="post" onsubmit="return confirmation()">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>

  <script>
  function confirmation(){
		var r = confirm("Confirm purchase of ticket(s)?");
		if (r == true) {
			return true;
		} 
		else {
			return false;
		}
  }
  
  	/*function validateForm(){
		var letters = /^[A-Za-z][A-Za-z\s]*$/;
		var inputName = document.getElementById("cardname").value;
			
		if(letters.test(inputName) == false)
			{
				alert("Error: Please input text characters for your Name");
				document.paymentinfo.cardname.focus();
				return false;
			}
			
			
		var numbers = /^[0-9]+$/;
		var inputcontact = document.getElementById("cardnumber").value;
		
		if(numbers.test(inputcontact) == false)
			{
				alert("Error: Please check your Card Number" + "\n" + "Eg. 1111222233334444");
				document.paymentinfo.cardnumber.focus();
				return false;
			}
			
		var month = /^[A-Za-z][A-Za-z\s]*$/;
		var monthinput = document.getElementById("expmonth").value;
			
		if(month.test(monthinput) == false)
			{
				alert("Error: Please input text characters for Exp Month");
				document.paymentinfo.expmonth.focus();
				return false;
			}
			
		var year = /^[0-9]+$/;
		var inputyear = document.getElementById("expyear").value;
		
		if((year.test(inputyear)) == false && inputyear.length != 4)
			{
				alert("Error: Please check your year input);
				document.paymentinfo.expyear.focus();
				return false;
			}
			
		var cvv = /^[0-9]+$/;
		var inputcvv = document.getElementById("cvv").value;
		
		if(cvv.test(inputcvv) == false && inputcvv.length != 3)
			{
				alert("Error: Please check your CVV number");
				document.paymentinfo.cvv.focus();
				return false;
			}
	}*/
			
  </script>

  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo "".$totalqty."<br />";?></b></span></h4>
      

	  
	  <tr><td><?php echo "<b>".$cat1qty."</b>";?> x CAT 1 (VIP)</td> <span class="price" id="cat1" name="cat1"><?php echo "".$choice1."<br />";?></span></p>
      <tr><td><?php echo "<b>".$cat2qty."</b>";?> x CAT 2</td> <span class="price" id=""><?php echo "".$choice2."<br />";?></span></p>
      <tr><td><?php echo "<b>".$cat3qty."</b>";?> x CAT 3</td> <span class="price" id=""><?php echo "".$choice3."<br />";?></span></p>
      <tr><td><?php echo "<b>".$cat4qty."</b>";?> x CAT 4</td> <span class="price" id=""><?php echo "".$choice4."<br />";?></span></p>
	  <tr><td><?php echo "<b>".$cat5qty."</b>";?> x CAT 5</td> <span class="price" id=""><?php echo "".$choice5."<br />";?></span></p>
      <tr><td><?php echo "<b>".$cat6qty."</b>";?> x CAT 6</td> <span class="price" id=""><?php echo "".$choice6."<br />";?></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><?php echo "<b>S$ ".$totalPrice."</b>";?></b></span></p>
    </div>
</div>
</div>



</body>
</html>
