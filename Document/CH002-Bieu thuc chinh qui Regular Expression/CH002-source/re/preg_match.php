<?php
	$subject = 'Welcome to Zend Framework course in ZendVN ZendVN ZendVN';
	$pattern = '/ZendVN/';
	if(preg_match($pattern,$subject,$matches)== 1){
		echo "Tim thay chuoi theo yeu cau";
	}else{
		echo "Khong tim duoc chuoi cua ban";
	}
	
	echo "<pre>";
	print_r($matches);
	echo "</pre>";