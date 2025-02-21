<?php
function checkWebsite($value){
	$flag = false;
	$subject = $value;
	$pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	if(preg_match($pattern,$subject,$matches)== 1){
		$flag = true;
	}
	
	return $flag;
}


function checkPass($value){
	$flag = false;
	$subject = $value;
	$pattern = '#^[a-z0-9_\s\$\#@\!\*]{6,32}$#';
	if(preg_match($pattern,$subject,$matches)== 1){
		$flag = true;
	}
	
	return $flag;
}

function checkUser($value){
	$flag = false;
	$subject = $value;
	$pattern = '#^[a-z0-9_\.\s]{6,32}$#';
	if(preg_match($pattern,$subject,$matches)== 1){
		$flag = true;
	}
	
	return $flag;
}

function checkEmail($value){
	$flag = false;
	$subject = $value;
	$pattern = '#^[a-z][a-z0-9_\.]{2,32}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
	if(preg_match($pattern,$subject,$matches)== 1){
		$flag = true;
	}
	
	return $flag;
}

function checkPhone($value){
	$flag = false;
	$subject = $value;
	$pattern = '#^(\d{3}|\(\d{3}\))-(\d{2}|\(\d{2}\))-\d{2}\.\d{3}-\d{3}$#';
	if(preg_match($pattern,$subject,$matches)== 1){
		$flag = true;
	}
	
	return $flag;
}