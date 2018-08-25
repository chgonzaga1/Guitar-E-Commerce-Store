<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Antique Guitar Store - NYC Manhattan</title>
    
    <link rel="stylesheet" type="text/css" href="css/bbc.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>		

		
<style type ="text/css">
		
		b {
		
			font-family: 'Indie Flower', cursive;
		
		}
		
	
			
		
		#first {
		
		float:left;
		
	
		}
		
		
		#second {
		
		float:right;
		
		}
			
</style>
		
		
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="responsiveslides.css">
  <link rel="stylesheet" href="demo.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  

		
		
	</head>
	
 <body background ="images/lessie.jpg">
	
	
	<center>
<font size ="10"><u>CHECK OUT </u></font>



<html>
<body>

<p><h1>Billing Information</h1></p>
<hr>

<form action="learnphp.php" method="post">

<center>
<table border="0">

<tr>
	<td>Name:</td>
	<td align="center"><input type="text" name="username" size="30" /></td>
</tr>

<tr>
	<td>Address:</td>
	<td align="center"><input type="text" name="streetaddress" size="30" /></td>
</tr>

<tr>
	<td>City:</td>
	<td align="center"><input type="text" name="cityaddress" size="30"  /></td>
</tr>

<tr>
	<td><label>State: </td>
	<td align="left"><select name="residence">
			<option selected>New York</option>
			<option>New Jersey</option>
			<option>Connecticut</option>
			<option>Other</option>
		</select>
		</label></td>
</tr>
<tr>

<td>Phone Number:</td>
<td align="center"><input type="text" name="phonenumber" size="30"  /></td>
</tr>

<tr>
<td>Email Address:</td>
<td align="center"><input type="text" name="email" size="30"  /></td>
</tr>


<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"/></td>
</tr>

</table>
</center>
<hr>

<h1>Payment Information</h1>


<table border="0">
<tr>
	<td><label>Card Type: </td>
	<td align="left"><select name="cardtype">
			<option selected>Master Card</option>
			<option>American Express</option>
			<option>VISA</option>
		</select>
		</label></td>
</tr>

<tr>
<td>Credit Card Number:</td>
<td align="center"><input type="text" name="cardnumber" size="30"  /></td>
</tr>
<tr>
<td>Experiation Date:</td>
<td align="left"><input type="text" name="cardnumber" size="5"  /></td>
</tr>
 <tr>
	<td><label>PAYMENT PLAN: </td>
	<td align="left"><select name="paymentPlan">
			<option selected>MONTHLY</option>
			<option>FULL PAYMENT</option>
		</select>
		</label></td>
</tr>
</table>	

	For Monthly Plan, You must pay: 
	
	For Full Payment Plan, You must pay:

	

	<hr>
	<h1> Verify Your Order</h1>

<?php


$goldPaul = $_POST['guitar1'];
# create a constant
define("GOLDPAULPRICE", 2500.00);


if ($goldPaul != null)
{
	echo "<p> Your Order: <b>".$goldPaul."</b>!</p>";
	echo "<p> Cost: </p>". GOLDPAULPRICE;
}
else {
     echo '5 != 10';            
            }
             

?>

<p><input type="submit"></p>

</form>




	
    </body>
	
	<footer>

	<hr>

	
	<center>
	<br>
	<b><font size ="6">Shipping Info                 Return Policy</b>
	
	
	<br>
	<br>
	
	</center>
	
	<hr>
	
	<br>
	 <div id="first">
            
               
			<p>73 Trump Tower 10th Street,NYC</p>
			<p>New York,New York</p>
				
				<br>
				<br>
			
             </div>
	
	</footer>
	
	<div id="second">
            
               
			<p>Email:MasterCaesar@gmail.com</p>
			<p>Tel:212-666-6666</p>
				
				<br>
				<br>
			
             </div>
	
	</footer>

	

</html>