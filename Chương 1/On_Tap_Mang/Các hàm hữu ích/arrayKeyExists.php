<?php 
	$input = array("a" => "green", "red", "b" => "green", "red", "blue");

	if (array_key_exists('b', $input)) {
		echo "Key tồn tại trong mảng";
	}
 ?>