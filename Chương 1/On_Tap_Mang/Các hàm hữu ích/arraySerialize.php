<?php
	$cart = array();

	$cart[] = array("id" => 1, "name" => "Nokia", "price" => "100", "quantity" => 2);
	$cart[] = array("id" => 2, "name" => "Samsung", "price" => "120", "quantity" => 1);
	$cart[0] = array("id" => 1, "name" => "Motorola", "price" => "110", "quantity" => 3);

	echo "<pre>";
	print_r($cart);
	echo "</pre>";

	// Chuyển đổi mảng qua chuỗi
	$str = serialize($cart);

	echo $str;

?>