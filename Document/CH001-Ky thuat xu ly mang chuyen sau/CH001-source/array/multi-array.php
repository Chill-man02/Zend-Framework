<?php
	$students = array();
	
	$students["SV001"] = array("id" => 1, 
							    "name"=> "Tuan", 
							    "age"=>18, 
							    "points"=> array(10,5,9));
	$students["SV002"] = array("id" => 2, 
							    "name"=> "Vu", 
							    "age"=>19, 
							    "points"=> array(8,5,7));
	$students["SV003"] = array("id" => 3, 
							    "name"=> "Anh", 
							    "age"=>19, 
							    "points"=> array(8,10,7));
	/*echo $students["SV001"]["age"];
	echo $students["SV001"]["points"][2];
	echo $students["SV003"]["name"];*/
	$students["SV001"]["name"] = "Long";
	$students["SV001"]["points"][1] = 10;
	echo "<pre>";
	print_r($students);
	echo "</pre>";
	