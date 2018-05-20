<?php

$myArr = array("Prem", "Ram", "Preeti", "Shyam");

$myArr[] = "Katie";

print_r($myArr);

echo $myArr[1];

echo "<br><br>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "pasta";

$anotherArray["myFavoriteFood"] = "ice cream";

print_r($anotherArray);

$thirdArray = array(
	"France" => "French", 
	"USA" => "English", 
	"Germany" => "German");

unset($thirdArray["France"]);

echo "<br><br>";

print_r($thirdArray);

echo sizeof($thirdArray);



 ?>