<?php 
	$input = array("lastname", "phone", "address");

	echo "<pre>";
	print_r($input);
	echo "</pre>";

	$output = implode('|', $input);

	echo "<pre>";
	print_r($output);
	echo "</pre>";
 ?>