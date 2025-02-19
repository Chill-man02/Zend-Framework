<?php
	// Đảo ngược vị trí giữa khóa và giá trị
	$stack = array("orange", "apple", "banana", "strawberry");

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

	$tmp = array_flip($stack);

	echo "<pre>";
	print_r($tmp);
	echo "</pre>";

?>