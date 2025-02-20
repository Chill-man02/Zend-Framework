<?php
	$fruits = array("lemon", "orange", "banana", "apple");

	// Para1: Mảng, Para2: Số phần tử muốn ngẫu nhiên lấy ra
	$rand_Keys = array_rand($fruits, 2);

	echo "<pre>";
	print_r($rand_Keys);
	echo "</pre>";
?>