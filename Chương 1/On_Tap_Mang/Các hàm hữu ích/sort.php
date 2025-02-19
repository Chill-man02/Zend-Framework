<?php
	// Đảo ngược vị trí giữa khóa và giá trị
	$stack = array("orange", "apple", "banana", "strawberry");

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

	sort($stack);

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

?>