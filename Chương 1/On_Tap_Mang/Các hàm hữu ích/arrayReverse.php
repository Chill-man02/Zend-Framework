<?php
	// Đảo ngược vị trí giữa khóa và giá trị
	$stack = array("orange", "apple", "banana", "strawberry");

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

	$result = array_reverse($stack);

	echo "<pre>";
	print_r($result);
	echo "</pre>";

?>