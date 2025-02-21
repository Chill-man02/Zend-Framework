<?php
	$subject = 'Welcome to Zend Framework course in /ZendVN/ ZendVN ZendVN';
	//$pattern = '/ZendVN/';
	//$pattern = '/\/ZendVN\//';
	$pattern = '#/ZendVN/#';
	//echo preg_match_all($pattern,$subject,$matches);
	
	if(preg_match_all($pattern,$subject,$matches)> 0){
		echo "Tim thay chuoi theo yeu cau";
	}else{
		echo "Khong tim duoc chuoi cua ban";
	}
	
	echo "<pre>";
	print_r($matches);
	echo "</pre>";