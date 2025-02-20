<?php
	$input1 = array("a" => "green", "red", "blue");
	$input2 = array("b" => "green", "yellow", "red");

	echo "<pre>";
	print_r($input1);
	print_r($input2);
	echo "</pre>";

	$result = array_intersect($input1, $input2);

	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>