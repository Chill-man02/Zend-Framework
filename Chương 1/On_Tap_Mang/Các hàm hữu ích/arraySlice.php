<?php 
	$array = array("a", "b", "c", "d", "e");

	echo "<pre>";
	print_r($array);
	echo "</pre>";

	$output = array_slice($array, -2, 1);

	echo "<pre>";
	print_r($output);
	echo "</pre>";
 ?>