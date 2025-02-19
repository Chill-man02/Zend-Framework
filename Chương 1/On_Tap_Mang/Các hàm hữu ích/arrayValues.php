<?php
	$array = array("size" => "XL", "color" => "red");

	echo "<pre>";
	print_r($array);
	echo "</pre>";

	$tmp = array_values($array);

	echo "<pre>";
	print_r($tmp);
	echo "</pre>";
?>