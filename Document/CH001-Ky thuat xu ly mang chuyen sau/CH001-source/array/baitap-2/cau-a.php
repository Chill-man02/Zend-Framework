<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$data  = file('question.txt') or die("Cannot read file");
	
	foreach ($data as $key => $info){
		if($key != 0){
			
			$tmp = explode("|",$info);
			/*echo "<pre>";
			print_r($tmp);
			echo "</pre>";*/
			//Ctrl + Shift + /
			$arrQuestion[$tmp[0]] = array('question'=>$tmp[1]);
		}
		
	}
	
/*	echo "<pre>";
	print_r($newArray);
	echo "</pre>";*/
	
	