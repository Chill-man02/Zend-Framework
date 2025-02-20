<?php
	// Tìm khóa của những giá trị nhập vào
	$array = array(0 => "blue", 1 => "red", 2 => "green", 3 => "red");

	$key = array_search('red', $array);

	echo $key . "<br>";
?>