<?php
	$input = array("a" => "green", "red", "b" => "green", "blue", "violet");

	echo "<pre>";
	print_r($input);
	echo "</pre>";

	$output = array_unique($input);

	echo "<pre>";
	print_r($output);
	echo "</pre>";
?>