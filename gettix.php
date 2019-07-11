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

<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

table {
  margin: auto;
  margin: 5px solid #282828;
  width: 350px;
  border-spacing:1;
  font-family:"Arial", Helvetica, sans-serif;
}
th{
  padding:10px;
  font-weight: bold;
  border-style: none;
  background-color: #ff7bdb;
}
td{
  padding:10px;
  font-weight:  normal;
  border-style: none;
}

caption{
  font-weight: bold;
  font-size: 1.2em;
  padding-bottom: 5px;
}

fieldset {
	margin:auto;
}


</style>
</head>
<body>

<div id="wrapper">

<div class="topnav">
	<img src="KDN_logo1.png" id="logo">
	<b>
	<a href="index.html" class="links">Home</a>
	<a href="programmes.html" class="links">Programmes</a>
	<a href="artistes.html" class="links">Artistes</a>
	<a href="ticketinfo.html" class="links">Ticket Info</a>
	<a style="background-color: #ff7bdb;" href="gettix.php" class="links">Get Tickets!</a>
	<a href="about.html" class="links">About</a>
	</b>
</div>

<div class="content">
	<h2><center>GET TICKETS!</center></h2>
	<br>

<div class="row">
  <div class="column" style="background-color:#ffffff">
	
	<form name="purchaseorder" id="purchaseorder" action="checkoutform.php" method="post" onsubmit="return validateForm()">
	<fieldset style="width:50px; align:center;">
	<legend>Contact Details</legend>
	<input type="text" name="fname"  id="fname" hspace="20" vspace="3" style="width: 300px" placeholder="Name" required><br >

	<input type="text" name="contact"  id="contact" hspace="20" vspace="3" style="width: 200px" placeholder="Contact" required><br >
   
	<input type="text" name="custEmail"  id="custEmail" hspace="20" vspace="3" style="width: 200px"  placeholder="john@email.com" required><br >
	</fieldset>
	
	<script>
	function validateForm(){
		var letters = /^[A-Za-z][A-Za-z\s]*$/;
		var inputName = document.getElementById("fname").value;
			
		if(letters.test(inputName) == false)
			{
				alert("Error: Please input text characters for your Name");
				document.purchaseorder.fname.focus();
				return false;
			}
			
		var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/;
		//var address = document.forms[form_id].elements[email].value;
		var address = document.purchaseorder.custEmail.value;
			
		if (reg.test(address) == false)
			{
				alert("Invalid Email Address");
				document.purchaseorder.custEmail.focus();
				//document.jobForm.CustEmail.focus();
				
				return false;
			}
			
		var numbers = /^[0-9]+$/;
		var inputcontact = document.getElementById("contact").value;
		
		if(numbers.test(inputcontact) == false)
			{
				alert("Error: Please check your Contact Number");
				document.purchaseorder.contact.focus();
				return false;
			}
		
		var Qty1 = document.getElementById("CAT1").value;
		var Qty2 = document.getElementById("CAT2").value;
		var Qty3 = document.getElementById("CAT3").value;
		var Qty4 = document.getElementById("CAT4").value;
		var Qty5 = document.getElementById("CAT5").value;
		var Qty6 = document.getElementById("CAT6").value;
		
		
		if((Qty1 || Qty2 || Qty3 || Qty4 || Qty5 || Qty6) != "")
			{
				return true;
			}
		else
			{
				alert("Please input ticket quantity before proceeding");
				return false;
			}
		
		if(document.getElementById("CAT1").selected == '0')
		{
			location.href('checkoutdinner.php');
		}
	}
			
	</script>
	
	<br>

	<br>

	
	<table border="1">
	
	<tr>	<th>Type of Ticket</th>
			<th>Price</th>
			<th>Quantity</th>
	</tr>
	
	<tr>	
			<td style="width:40%;text-align:center;font-weight:bolder;">CAT 1 (VIP)</td>
			<td style="width:30%;text-align:center;">S$348</td>
			<td><select name="cat1qty" id="CAT1" style="width: 50px;" onchange="updateTotal()" />
				<option value="0"></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select></td>
	</tr>
	
	<tr>	
			<td style="width:40%;text-align:center;font-weight:bolder;">CAT 2</td>
			<td style="width:30%;text-align:center;">S$288</td>
			<td><select name="cat2qty" id="CAT2" style="width: 50px;" onchange="updateTotal()">
				<option value="0"></option>			
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select></td>
	</tr>
	
	<tr>	
			<td style="width:40%;text-align:center;font-weight:bolder;">CAT 3</td>
			<td style="width:30%;text-align:center;">S$228</td>
			<td><select name="cat3qty" id="CAT3" style="width: 50px;" onchange="updateTotal()">
				<option value="0"></option>			
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>	</td>		
	</tr>
	
	<tr>	
			<td style="width:40%;text-align:center;font-weight:bolder;">CAT 4</td>
			<td style="width:30%;text-align:center;">S$188</td>
			<td><select name="cat4qty" id="CAT4" style="width: 50px;" onchange="updateTotal()">
				<option value="0"></option>			
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>			</td>
	</tr>
	
	<tr>	
			<td style="width:40%;text-align:center;font-weight:bolder;">CAT 5</td>
			<td style="width:30%;text-align:center;">S$128</td>
			<td><select name="cat5qty" id="CAT5" style="width: 50px;" onchange="updateTotal()">
				<option value="0"></option>			
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>		</td>	
	</tr>
	
	<tr>	
			<td style="width:40%;text-align:center;font-weight:bolder;">CAT 6</td>
			<td style="width:30%;text-align:center;">S$88</td>
			<td><select name="cat6qty" id="CAT6" style="width: 50px;" onchange="updateTotal()">
				<option value="0"></option>	
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>	</td>		
	</tr>


	</table>
	
  </div>
  <div class="column" style="background-color:#ffffff;">
    	<img src="seatingplan.jpg" alt="seating plan" id="seatingplan" height="340" width="470" align="left">
		
		
		<table border="1" align="center" style="width: 200px; background-color:white;">
		<tr><td align="left"><b>TOTAL:</b></td><td name="totalPrice" id="totalPrice"></td></tr>
		
		</table>
	  </div>

	<center><input type="submit" value="Add to Cart" class="btn"></center>
</form>
<br><br><br>

<script type="text/javascript">

function updateTotal() {	

	var qtyCAT1 = document.getElementById("CAT1").value;
	var qtyCAT2 = document.getElementById("CAT2").value;
	var qtyCAT3 = document.getElementById("CAT3").value;
	var qtyCAT4 = document.getElementById("CAT4").value;
	var qtyCAT5 = document.getElementById("CAT5").value;
	var qtyCAT6 = document.getElementById("CAT6").value;
	
	var choice1 = 0;
	var choice2 = 0;
	var choice3 = 0;
	var choice4 = 0;
	var choice5 = 0;
	var choice6 = 0;
	
	function cat1() {
	
		choice1 = qtyCAT1 * 348;
		
	}
	
	function cat2() {
	
		choice2 = qtyCAT2 * 288;
	}
	
	function cat3() {
	
		choice3 = qtyCAT3 * 228; 
		
	}
	
	function cat4() {
		
		choice4 = qtyCAT4 * 188;
	
	}
	
	function cat5() {
	
		choice5 = qtyCAT5 * 128;
		
	}
	
	function cat6() {
		
		choice6 = qtyCAT6 * 88; 
	
	}

	cat1();
	cat2();
	cat3();
	cat4();
	cat5();
	cat6();


	//subtotals
	/*document.getElementById("CAT1_sub").innerHTML = "$ " + choice1.toFixed(2);
	document.getElementById("CAT2_sub").innerHTML = "$ " + choice2.toFixed(2);
	document.getElementById("CAT3_sub").innerHTML = "$ " + choice3.toFixed(2);
	document.getElementById("CAT4_sub").innerHTML = "$ " + choice4.toFixed(2);
	document.getElementById("CAT5_sub").innerHTML = "$ " + choice5.toFixed(2);
	document.getElementById("CAT6_sub").innerHTML = "$ " + choice6.toFixed(2);*/
	
	var totalPrice = choice1 + choice2 + choice3 + choice4 + choice5 + choice6;
	document.getElementById("totalPrice").innerHTML = "$ " + totalPrice.toFixed(2);

} // end of my main update total function
</script>

<footer>
	<br><small><i>Copyright &copy; 2018 Korean Dream Night<br>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-youtube"></a>
	<a href="#" class="fa fa-instagram"></a>
</footer>
		
</div>
</div>

</body>
</html>
