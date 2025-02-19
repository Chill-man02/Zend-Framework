<?php
	// Đảo ngược vị trí giữa khóa và giá trị
	$stack_1 = array("orange", "apple");

	echo "<pre>";
	print_r($stack_1);
	echo "</pre>";

	$stack_2 = array("banana", "strawberry");
	echo "<pre>";
	print_r($stack_2);
	echo "</pre>";

	$stack_3 = array("pineapple", "watermelon");

	$stack = array_merge($stack_1, $stack_2, $stack_3);

	echo "<pre>";
	print_r($stack);
	echo "</pre>";

?>