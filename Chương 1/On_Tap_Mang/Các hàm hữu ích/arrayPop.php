<?php
	$array = array("orange", "apple", "banana", "strawberry");

	echo "<pre>";
	print_r($array);
	echo "</pre>";

	$tmp = array_pop($array);

	echo "<pre>";
	print_r($tmp);
	echo "</pre>";


	echo "<pre>";
	print_r($array);
	echo "</pre>";
?>