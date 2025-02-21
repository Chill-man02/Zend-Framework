<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$data  = file('options.txt') or die("Cannot read file");
	$newArray = array();
	foreach ($data as $key => $info){
		if($key != 0){			
			$tmp = explode("|",$info);
			$arrOption[$tmp[0]][$tmp[1]]['option'] = $tmp[2];
			$arrOption[$tmp[0]][$tmp[1]]['point'] = $tmp[3];			
		}		
	}
	
/*	echo "<pre>";
	print_r($newArray);
	echo "</pre>";*/
	