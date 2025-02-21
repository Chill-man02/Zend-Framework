<?php
	require_once 're_functions.php';
	
	$subject = 'info@zend.vn';
	if(checkEmail($subject) == true){
		echo 'day la dia chi email';
	}
