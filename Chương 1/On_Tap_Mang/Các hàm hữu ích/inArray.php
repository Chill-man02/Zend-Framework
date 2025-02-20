<?php 
	$input = array("a" => "green", "red", "b" => "green", "red", "blue");

	if (in_array("green", $input)) {
		echo 'Tìm thấy giá trị trong mảng';
	} else {
		echo 'Không tìm thấy giá trị phù hợp';
	}
 ?>