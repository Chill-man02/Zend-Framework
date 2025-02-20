<?php
	$input1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
	$input2 = array("a" => "green", "yellow", "red");

	echo "<pre>";
	print_r($input1);
	print_r($input2);
	echo "</pre>";

	$result = array_intersect_assoc($input1, $input2);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>