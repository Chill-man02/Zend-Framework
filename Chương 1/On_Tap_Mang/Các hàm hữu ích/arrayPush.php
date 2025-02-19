<?php 
	$array = array("orange", "apple");

	echo "<pre>Before:<br>";
	print_r($array);
	echo "</pre>";

	// "banana", "strawberry"

	array_push($array, "banana", "strawberry");

	echo "<pre>After:<br>";
	print_r($array);
	echo "</pre>";
?>	