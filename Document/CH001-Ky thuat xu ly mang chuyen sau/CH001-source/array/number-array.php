<?php
	// Cach 1
	$car  = array("Saab","Volvo","BMW","Toyota");
	
	// Cach 2
	$car[0] = "Saab";
	$car[1] = "Volvo";
	$car[2] = "BMW";
	$car[3] = "Toyota";
	
	// Cach 3
	/*$car[] = "Saab";
	$car[] = "Volvo";
	$car[] = "BMW";
	$car[] = "Toyota";*/
	
	/*echo $car[1] . "<br>";
	echo $car[3];*/
	
	for($i = 0; $i<count($car); $i++){
		echo $car[$i] . "<br>";
	}