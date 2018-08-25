<?php

// Simple examples of PHP syntax

// Output

echo "<h1>Simple examples of PHP Syntax</h1>";
echo "<hr>";

// Variables

$var1 = 1977;
$var2 = 1983;
$sum = $var1 + $var2;
echo "<p>The sum of ".$var1." and ".$var2." is ".$sum.".</p>";

// IF Statements

if ($sum == 3960)
	echo "<p>The planets are aligned.</p>";
else
	echo "<p>The planets are in chaos.</p>";

// Loops

for ($i=0; $i < 5; $i++)
{
	echo "<br>$i = ";
	echo $i * 25;
	echo "<p>";
}
while($sum >= 0)
{
	echo $sum." ";
	$sum -= 10;
}

// Functions

myFunction();

function myFunction()
{
	echo "<hr><p>Testing our <i>Fun</i> with Functions (get it?)</p>";
}

// Arrays

$products = array('Tires', 'Oil', 'Spark Plugs');
$odds = range(1, 10, 2);
$letters = range('A','z');

for ($j=0; $j < 3; $j++)
	echo $products[$j]."<br>";

echo "<p>";

foreach ($letters as $current)
	echo $current." ";

echo "<p>";

// Sort an array

sort($products);
foreach ($products as $current)
	echo $current."<br>";
	
echo "<p>";
	
// Sort in reverse order (descending order)

arsort($products);
foreach ($products as $current)
	echo $current."<br>";



?>


