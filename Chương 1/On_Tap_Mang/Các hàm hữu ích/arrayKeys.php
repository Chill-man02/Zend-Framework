<?php
	$array = array("size" => "XL", "color" => "red");
	$tmp = array_keys($array);

	$arr = array(
				"color" => array("blue", "red", "green"),
				"size" => array("small", "medium", "large")
				);

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	$tmp = array_values($arr);

	echo "<pre>";
	print_r($tmp);
	echo "</pre>";
?>