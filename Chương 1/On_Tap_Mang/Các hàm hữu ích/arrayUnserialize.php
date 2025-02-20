<?php
	$str = 'a:2:{i:0;a:4:{s:2:"id";i:1;s:4:"name";s:8:"Motorola";s:5:"price";s:3:"110";s:8:"quantity";i:3;}i:1;a:4:{s:2:"id";i:2;s:4:"name";s:7:"Samsung";s:5:"price";s:3:"120";s:8:"quantity";i:1;}}';

	// Chuyển đổi chuỗi qua mảng
	$tmp = unserialize($str);

	echo "<pre>";
	print_r($tmp);
	echo "</pre>";
?>