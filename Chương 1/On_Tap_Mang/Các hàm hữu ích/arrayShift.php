<?php
	// Xóa phần tử đầu tiên của mảng với array shift
	$stack = array("orange", "apple", "banana", "strawberry");

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

	$tmp = array_shift($stack);

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

	echo "<pre>";
	print_r($tmp);
	echo "</pre>";

?>