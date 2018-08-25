<?php

$name = $_POST['custName'];
echo "<h1>Welcome ".$name.".</h1>";

$numShirts = $_POST['shirts'];
$numPants = $_POST['pants'];
$numSocks = $_POST['socks'];
$whereFrom = $_POST['howtosite'];
$homeState = $_POST['residence'];
$pets = $_POST['thingsliked'];

# create a constant
define('SHIRTPRICE', 19.99);

echo "Number of shirts: ".$numShirts."<br>";
echo "Total cost of shirts: ".$numShirts * SHIRTPRICE."<br>";

echo "<p>We will send a thanks to: ".$whereFrom."</p>";
echo "<p>Isn't <b>".$homeState."</b> the greatest?! We think so :-)</p>";

if ($pets != null)
	echo "<p>And a special thanks to our buddy, <b>".$pets."</b>!</p>";


?>