<?php

echo "<pre>" . var_export($_GET, true) . "</pre>";
if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
}
if(isset($_GET['number'])){
	$number = $_GET['number'];
	echo "<br>" . $number . " should be a number ...";
	echo "<br>but it might not be<br>";
	}
/*$num1 = 50;
$num1 = "25*@#$";
$num2 = 5;
echo $num1 . $num2 . " are a concatination <br>";*/

if(is_numeric($_GET['number'])){
	echo var_export($_GET['number'] + $_GET['pam1'] , true) . " is numeric <br> ", PHP_EOL;
	} else {
		echo var_export($_GET['number'], true) . " is not numeric<br>", PHP_EOL;

	}
echo $_GET['number'] . $_GET['pam1'];
?>
