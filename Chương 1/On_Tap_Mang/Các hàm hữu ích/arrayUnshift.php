<?php
	// Thêm phần tử vào đầu mảng với array unshift
	$array = array("banana", "strawberry");

	echo "<pre>";
	print_r($array);
	echo "</pre>";

	array_unshift($array, "orange", "apple");

	echo "<pre>";
	print_r($array);
	echo "</pre>";

?>