<?php
	$a = array('green', 'red', 'yellow');
	$b = array('avocado', 'apple', 'banana');

	echo "<pre>";
	print_r($a);
	print_r($b);
	echo "</pre>";

	// Lưu ý: Hai mảng cần có cùng số phần tử (Số phần tử bằng nhau)
	$result = array_combine($a, $b);

	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>