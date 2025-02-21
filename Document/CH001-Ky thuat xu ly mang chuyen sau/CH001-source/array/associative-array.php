<?php
	//Cach 1
	$ages = array("Tuan"=>32, "Quang"=>30, "Long"=>34);
	
	//Cach 2
	$ages["Tuan"] = 32;
	$ages["Quang"] = 30;
	$ages["Long"] = 34;
	
	echo $ages["Quang"];
	
	echo "<pre>";
	print_r($ages);
	echo "</pre>";
	
	foreach ($ages as $key => $val){
		echo $key . ": " .  $val . "<br>";
		
	}
	